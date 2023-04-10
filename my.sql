
-- create
CREATE TABLE GLASSMATERS (
  empId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  agg INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO GLASSMATERS VALUES (001, 'Борис', 30, 'Новосибирск');
INSERT INTO GLASSMATERS VALUES (002, 'Наталия', 32, 'Минск');
INSERT INTO GLASSMATERS VALUES (003, 'Актавиус', 38, 'Воронеж');
INSERT INTO GLASSMATERS VALUES (004, 'Иван', 29, 'Волгоград');
INSERT INTO GLASSMATERS VALUES (005, 'Ала', 19, 'Москва');
INSERT INTO GLASSMATERS VALUES (006, 'Сергей', 20, 'Воркута');
INSERT INTO GLASSMATERS VALUES (007, 'Артём', 25, 'Владимир');
INSERT INTO GLASSMATERS VALUES (008, 'Лиза', 21, 'Якутск');
INSERT INTO GLASSMATERS VALUES (009, 'Артур', 28, 'Москва');
INSERT INTO GLASSMATERS VALUES (010, 'Василий', 38, 'Москва');


-- fetch 
SELECT * FROM GLASSMATERS WHERE address = 'Москва' AND (agg >= 18 AND agg <30);
