CREATE TABLE dim_date(
	id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
	date DATE NOT NULL,
	year INT NOT NULL,
	month INT NOT NULL,
	day INT NOT NULL
);

INSERT INTO dim_date(date, year, month, day)
SELECT TO_CHAR(datum,'yyyy-mm-dd')::DATE AS date,
       TO_CHAR(datum,'yyyy')::INT AS year,
	   TO_CHAR(datum,'mm')::INT AS month,
       TO_CHAR(datum,'dd')::INT AS day
FROM (SELECT '2017-01-01'::DATE+ SEQUENCE.DAY AS datum
      FROM GENERATE_SERIES (0,29219) AS SEQUENCE (DAY)
      GROUP BY SEQUENCE.DAY) DQ
ORDER BY 1;