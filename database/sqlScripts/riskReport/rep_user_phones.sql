CREATE TABLE rep_user_phones(
	id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
	user_id INT REFERENCES users (id) ON DELETE CASCADE,
	cellphone VARCHAR(20) DEFAULT NULL,
	personal_reference_phone VARCHAR(20) DEFAULT NULL,
	created_at TIMESTAMP DEFAULT NOW(),
	updated_at TIMESTAMP DEFAULT NULL
);

CREATE INDEX idx_rep_user_phones_user_id ON rep_user_phones (user_id);
CREATE INDEX idx_rep_user_phones_created_at ON rep_user_phones (created_at);

CREATE OR REPLACE FUNCTION func_load_rep_user_phones() RETURNS void AS $$
	BEGIN
		DROP TABLE IF EXISTS tmp_user_phones;
		CREATE TABLE tmp_user_phones(
			user_id INT,
			phone_id INT
		);
		
		INSERT INTO tmp_user_phones(user_id, phone_id)
		SELECT DISTINCT
			p.user_id,
			MAX(p.id) AS phone_id
		FROM phones AS p
		INNER JOIN users AS u
		ON p.user_id = u.id
		LEFT JOIN personal_references AS pr
		ON p.id = pr.phone_id
		WHERE pr.id IS NULL
		AND p.created_at > (SELECT MAX(created_at) FROM rep_user_phones)
		AND p.type = 'CELLPHONE'
		GROUP BY
			p.user_id;
			
		INSERT INTO rep_user_phones(user_id, cellphone)
		SELECT 
			p.user_id,
			CONCAT(p.area_code, p.phone) AS cellphone
		FROM tmp_user_phones AS tmp
		INNER JOIN phones AS p
		ON tmp.phone_id = p.id;
		
		WITH t AS (
			SELECT 
				p.user_id AS user_id,
				CONCAT(p.area_code, p.phone) AS personal_reference_phone
			FROM rep_user_phones AS rup
			INNER JOIN phones AS p
			ON rup.user_id = p.user_id
			INNER JOIN personal_references AS pr
			ON pr.phone_id = p.id
		)
		UPDATE rep_user_phones
			SET personal_reference_phone = t.personal_reference_phone
		FROM t
		WHERE rep_user_phones.user_id = t.user_id;
	END;
$$ LANGUAGE 'plpgsql';