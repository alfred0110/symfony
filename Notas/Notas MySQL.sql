--ALTER TABLE : ADD FOREIGN KEY
ALTER TABLE users ADD CONSTRAINT fk_grade_id FOREIGN KEY (grade_id) REFERENCES grade(id)

--ALTER TABLE : ADD COLUMN
ALTER TABLE t2 ADD newColumnName INT UNSIGNED NOT NULL AUTOINCREMENT,
  ADD PRIMARY KEY (newColumnName);
