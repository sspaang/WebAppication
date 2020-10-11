
CREATE DATABASE online_learning; 

-- 'users' table
CREATE TABLE users (
	id int(8) NOT NULL AUTO_INCREMENT,
	username varchar(100) NOT NULL UNIQUE,
	email varchar(100) NOT NULL UNIQUE,
	password varchar(100) NOT NULL,
	firstname varchar(100) NOT NULL,
	lastname varchar(100) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'users'
INSERT INTO users (username, email, password, firstname, lastname) VALUES ('user', 'user@email.com', '1234', 'Hello', 'World');
INSERT INTO users (username, email, password, firstname, lastname) VALUES ('user1', 'user1@email.com', '1234', 'Miss', 'Student');

-- 'class' table
CREATE TABLE class (
	class_id int(5) NOT NULL AUTO_INCREMENT,
	class_name varchar(100) NOT NULL,
	class_price int NOT NULL,
	class_img varchar(100)
	PRIMARY KEY (class_id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'class'
INSERT INTO class (class_id, class_name, class_price, class_img) VALUES (31001, 'Database', 399, './img/database.jpg');
INSERT INTO class (class_name, class_price, class_img) VALUES ('English', 199, './img/english.jpg'),
('Mathematics', 299, './img/math.jpg'),
('Computer Hardware', 299, './img/computer_hw.jpg'),
('Programming', 199, './img/programming.jpg'),
('Web Design', 299, './img/web_design.jpg');

-- 'enroll' table
CREATE TABLE enroll (
	id_student int(11) NOT NULL,
	class_id int(5) NOT NULL,
	FOREIGN KEY (id_student) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY (class_id) REFERENCES class(class_id) ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'enroll'
INSERT INTO enroll VALUES (1, 31001);
INSERT INTO enroll VALUES (2, 31002);
