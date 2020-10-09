
CREATE DATABASE online_learning; 

-- 'users' table
CREATE TABLE users (
	id int(8) NOT NULL AUTO_INCREMENT,
	username varchar(100) NOT NULL,
	position varchar(1) NOT NULL,
	email varchar(100) NOT NULL,
	password varchar(100) NOT NULL,
	firstname varchar(100) NOT NULL,
	lastname varchar(100) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'users'
INSERT INTO users (username, position, email, password, firstname, lastname) VALUES ('user', '1','user@email.com', '1234', 'Hello', 'World');
INSERT INTO users (username, position, email, password, firstname, lastname) VALUES ('user1', '1','user1@email.com', '1234', 'Miss', 'Student');
INSERT INTO users (username, position, email, password, firstname, lastname) VALUES ('teacher', '2','teacher@email.com', '1234', 'Mr', 'Teacher');
INSERT INTO users (username, position, email, password, firstname, lastname) VALUES ('teacher1', '2','teacher1@email.com', '1234', 'Ms', 'Teacher');

-- 'class' table
CREATE TABLE class (
	class_id int(5) NOT NULL AUTO_INCREMENT,
	class_name varchar(100) NOT NULL,
	id_teacher int(11) NOT NULL,
	id_student int(11) NOT NULL,
	PRIMARY KEY (class_id),
	FOREIGN KEY (id_teacher) REFERENCES users(id),
	FOREIGN KEY (id_student) REFERENCES users(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'class'
INSERT INTO class (class_id, class_name, id_teacher, id_student) VALUES (31001, 'Database', 3, 1);
INSERT INTO class (class_id, class_name, id_teacher, id_student) VALUES (31002, 'English', 4, 2);

-- 'teach' table
CREATE TABLE teach (
	id_teacher int(11) NOT NULL,
	class_id int(5) NOT NULL,
	FOREIGN KEY (id_teacher) REFERENCES users(id),
	FOREIGN KEY (class_id) REFERENCES class(class_id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'teach'
INSERT INTO teach VALUES (3, 31001);
INSERT INTO teach VALUES (4, 31002);

-- 'enroll' table
CREATE TABLE enroll (
	id_student int(11) NOT NULL,
	class_id int(5) NOT NULL,
	FOREIGN KEY (id_student) REFERENCES users(id),
	FOREIGN KEY (class_id) REFERENCES class(class_id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'enroll'
INSERT INTO enroll VALUES (1, 31001);
INSERT INTO enroll VALUES (2, 31002);

-- 'status' table
CREATE TABLE position_describe (
	position varchar(1) NOT NULL,
	describ varchar(10) NOT NULL,
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'position_describe'
INSERT INTO position_describe VALUES ('1', 'student');
INSERT INTO position_describe VALUES ('2', 'teacher');