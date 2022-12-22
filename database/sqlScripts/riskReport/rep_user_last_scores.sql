CREATE TABLE rep_user_last_scores(
	id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
	user_id INT REFERENCES users (id) ON DELETE CASCADE,
	score INT DEFAULT NULL,
	created_at TIMESTAMP DEFAULT NOW(),
	updated_at TIMESTAMP DEFAULT NULL
);

CREATE INDEX idx_rep_user_last_scores_user_id ON rep_user_last_scores (user_id);
CREATE INDEX idx_rep_user_last_scores_created_at ON rep_user_last_scores (created_at);

CREATE OR REPLACE FUNCTION func_load_rep_user_last_scores() RETURNS void AS $$
	BEGIN
		DROP TABLE IF EXISTS tmp_user_last_score;
		CREATE TABLE tmp_user_last_score(
			user_id INT,
			score_checks_id INT
		);
		
		INSERT INTO tmp_user_last_score(user_id, score_checks_id)
		SELECT
			user_id,
			max(id) AS score_checks_id
		FROM score_checks AS sc
		WHERE created_at > (SELECT MAX(created_at) FROM rep_user_last_scores)
		AND sc.type = 'ALPHA'
		GROUP BY user_id;

		INSERT INTO rep_user_last_scores(user_id, score)
		SELECT
			sc.user_id,
			sc.score
		FROM score_checks AS sc
		INNER JOIN tmp_user_last_score AS tmp
		ON sc.id = tmp.score_checks_id
		LEFT JOIN rep_user_last_scores AS rep
		ON sc.user_id = rep.user_id
		AND rep.user_id IS NULL
		WHERE sc.type = 'ALPHA';
	END;
$$ LANGUAGE 'plpgsql';