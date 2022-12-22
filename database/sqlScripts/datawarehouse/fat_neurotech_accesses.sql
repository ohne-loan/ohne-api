CREATE TABLE fat_neurotech_accesses(
	id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
	dim_date_id INT REFERENCES dim_date (id) ON DELETE CASCADE,
	quantity INT DEFAULT NULL,
	policy VARCHAR(10) DEFAULT NULL
);

-- Insert dos dados antigos
INSERT INTO fat_neurotech_accesses(dim_date_id, quantity, policy)
SELECT 
	dd.id AS dim_date_id,
	COUNT(1) AS quantity,
	'Alpha' AS policy
FROM neurotech_logs AS nl
INNER JOIN dim_date AS dd
ON CAST(nl.created_at AS DATE) = dd.date
WHERE input LIKE '%NmPolitica>ALPHA%'
GROUP BY
	dd.id
ORDER BY 
	dd.date;
	
INSERT INTO fat_neurotech_accesses(dim_date_id, quantity, policy)
SELECT 
	dd.id AS dim_date_id,
	COUNT(1) AS quantity,
	'Ômega' AS policy
FROM neurotech_logs AS nl
INNER JOIN dim_date AS dd
ON CAST(nl.created_at AS DATE) = dd.date
WHERE input LIKE '%NmPolitica>OMEGA%'
GROUP BY
	dd.id
ORDER BY 
	dd.date;

INSERT INTO fat_neurotech_accesses(dim_date_id, quantity, policy)
SELECT
	dim_date_id, 
	quantity, 
	policy
FROM (
	SELECT
		dd.id AS dim_date_id,
		COUNT(1) AS quantity,
		'Alpha' AS policy
	FROM log_api_requests AS lar
	INNER JOIN dim_date AS dd
	ON CAST(lar.created_at AS DATE) = dd.date
	LEFT JOIN fat_neurotech_accesses AS fat
	ON dd.id = fat.dim_date_id
	WHERE fat.dim_date_id IS NULL
	AND lar.uri LIKE '%check-alpha%'
	GROUP BY
		dd.id

	UNION ALL

	SELECT
		dd.id AS dim_date_id,
		COUNT(1) AS quantity,
		'Ômega' AS policy
	FROM log_api_requests AS lar
	INNER JOIN dim_date AS dd
	ON CAST(lar.created_at AS DATE) = dd.date
	LEFT JOIN fat_neurotech_accesses AS fat
	ON dd.id = fat.dim_date_id
	WHERE fat.dim_date_id IS NULL
	AND lar.uri LIKE '%check-omega%'
	GROUP BY
		dd.id) AS t
ORDER BY 
	dim_date_id ASC