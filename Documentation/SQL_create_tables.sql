CREATE table students (id MEDIUMINT NOT NULL AUTO_INCREMENT, login varchar(50), first_name varchar(50), last_name varchar(50), student_id varchar(50), email varchar(75), openid varchar(50), PRIMARY KEY (id));

CREATE table student_info (id MEDIUMINT, student_id VARCHAR(50), address1 VARCHAR(50), address2 VARCHAR(50), address3 VARCHAR(50), city VARCHAR(50), state_code CHAR(2), zip VARCHAR(10), country  VARCHAR(30), phone1 VARCHAR(20), phone2 VARCHAR(20), PRIMARY KEY (id));

CREATE table student_summary (id INT NOT NULL AUTO_INCREMENT, student_id VARCHAR(50), summary_text TEXT, PRIMARY KEY (id));

CREATE table student_additional (id INT NOT NULL AUTO_INCREMENT, student_id VARCHAR(50), additional_text TEXT, PRIMARY KEY (id));

CREATE table student_education (id INT NOT NULL AUTO_INCREMENT, student_id VARCHAR(50), school_id MEDIUMINT, degree_type_id SMALLINT, study_area VARCHAR(50), graduation_month SMALLINT, graduation_year SMALLINT, PRIMARY KEY (id));

CREATE table student_experience (id INT NOT NULL AUTO_INCREMENT, student_id MEDIUMINT, job_position_id MEDIUMINT, company_name VARCHAR(50), start_date DATE, end_date DATE, PRIMARY KEY (id));

CREATE table student_skills (id INT NOT NULL AUTO_INCREMENT, student_id MEDIUMINT, skill_id SMALLINT, proficiency_id SMALLINT, PRIMARY KEY (id));

CREATE table ref_proficiency (id INT NOT NULL AUTO_INCREMENT, proficiency_name varchar(30), PRIMARY KEY (id));

CREATE table ref_skills (id INT NOT NULL AUTO_INCREMENT, skill_name varchar(30), PRIMARY KEY (id));

CREATE table ref_study_area (id INT NOT NULL AUTO_INCREMENT, study_area_name varchar(30), PRIMARY KEY (id));

CREATE table ref_job_position (id INT NOT NULL AUTO_INCREMENT, position_name varchar(30), PRIMARY KEY (id));

CREATE table ref_degree (id INT NOT NULL AUTO_INCREMENT, degree_name varchar(30), PRIMARY KEY (id));


