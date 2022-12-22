CREATE OR REPLACE FUNCTION func_load_rep_loans() RETURNS void AS $$
	BEGIN
		INSERT INTO rep_loans(
			user_id, 
			loan_id, 
			contract_id,
			status, 
			amount, 
			iof_value, 
			num_installments, 
			installment_value, 
			monthly_effective_cost, 
			annual_effective_cost, 
			monthly_cet_rate, 
			cet_rate)
		SELECT 
			user_id, 
			id AS loan_id,
			contract_id,
			status, 
			amount, 
			iof_value, 
			num_installments, 
			installment_value, 
			monthly_effective_cost, 
			annual_effective_cost, 
			monthly_cet_rate, 
			cet_rate
		FROM loans
		WHERE id > (SELECT COALESCE(MAX(loan_id), 0) FROM rep_loans);
		
		INSERT INTO rep_loan_installments(loan_installment_id, loan_id, amount, date, status, interest)
		SELECT
			li.id AS loan_installment_id,
			li.loan_id,
			li.amount,
			li.date,
			li.status,
			li.interest
		FROM loan_installments AS li
		WHERE id > (SELECT COALESCE(MAX(loan_installment_id), 0) FROM rep_loan_installments)
		AND deleted_at IS NULL;
		
		UPDATE rep_loans
			SET status = l.status
		FROM loans AS l
		WHERE rep_loans.loan_id = l.id;
		
		UPDATE rep_loans
			SET amount_financed = amount + iof_value
		WHERE amount_financed IS NULL;
		
		UPDATE rep_loans
			SET amount_debt = num_installments * installment_value
		WHERE amount_debt IS NULL;
		
		DROP TABLE IF EXISTS tmp_rep_loan_installment_detail_status;
		CREATE TABLE tmp_rep_loan_installment_detail_status(
			loan_id INT,
			status VARCHAR(20),
			quantity INT,
			amount DOUBLE PRECISION NOT NULL,
			interest DOUBLE PRECISION NOT NULL
		);
		
		INSERT INTO tmp_rep_loan_installment_detail_status(loan_id, status, quantity, amount, interest)
		SELECT
			loan_id,
			status,
			COUNT(1) AS quantity,
			SUM(amount) AS amount,
			SUM(interest) AS interest
		FROM rep_loan_installments
		GROUP BY
			loan_id,
			status;
			
		INSERT INTO tmp_rep_loan_installment_detail_status(loan_id, status, quantity, amount, interest)
		SELECT
			loan_id,
			'NOPAID' AS status,
			SUM(quantity) AS quantity,
			SUM(amount) AS amount,
			SUM(interest) AS interest
		FROM tmp_rep_loan_installment_detail_status
		WHERE status <> 'PAID'
		GROUP BY
			loan_id;
			
		CREATE INDEX idx_tmp_rep_loan_installment_detail_status_loan_id ON tmp_rep_loan_installment_detail_status(loan_id);
		
		UPDATE rep_loans
			SET quantity_installments_paid = tmp.quantity
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'PAID';
		
		UPDATE rep_loans
			SET quantity_installments_pending = tmp.quantity
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'NOPAID';
		
		UPDATE rep_loans
			SET amount_paid = tmp.amount
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'PAID';
		
		UPDATE rep_loans
			SET installment_arrears = true
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'ARREAR';
		
		UPDATE rep_loans
			SET installment_arrears = false
		WHERE installment_arrears IS NULL;
		
		UPDATE rep_loans
			SET interest_accumulated = interest
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'PAID';
		
		UPDATE rep_loans
			SET discharge_percent = ROUND((CAST(CAST(tmp.quantity AS DOUBLE PRECISION) / CAST(num_installments AS DOUBLE PRECISION) AS NUMERIC)) * 100, 2)
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'PAID';
		
		UPDATE rep_loans
			SET current_debt = tmp.amount
		FROM tmp_rep_loan_installment_detail_status AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id
		AND tmp.status = 'NOPAID';
		
		DROP TABLE IF EXISTS tmp_rep_loan_installment_next_expiration_date;
		CREATE TABLE tmp_rep_loan_installment_next_expiration_date(
			loan_id INT,
			next_expiration_date TIMESTAMP NOT NULL
		);
		
		INSERT INTO tmp_rep_loan_installment_next_expiration_date(loan_id, next_expiration_date)
		SELECT
			loan_id,
			MIN(date) AS next_expiration_date
		FROM rep_loan_installments
		WHERE date >= now() 
		GROUP BY
			loan_id;
		
		CREATE INDEX idx_tmp_rep_loan_installment_next_expiration_date ON tmp_rep_loan_installment_next_expiration_date(loan_id);
		
		UPDATE rep_loans
			SET expiration_date_next_installment = next_expiration_date
		FROM tmp_rep_loan_installment_next_expiration_date AS tmp
		WHERE rep_loans.loan_id = tmp.loan_id;
		
	END;
$$ LANGUAGE 'plpgsql';