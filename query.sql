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
INSERT INTO users VALUES ();

-- 'class' table
CREATE TABLE class (
	class_id int(5) NOT NULL DEFAULT 31000 AUTO_INCREMENT,
	class_name varchar(100) NOT NULL,
	id_teacher int(11) NOT NULL,
	id_student int(11) NOT NULL,
	PRIMARY KEY (class_id),
	FOREIGN KEY (id_teacher) REFERENCES users(id),
	FOREIGN KEY (id_student) REFERENCES users(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'class'
INSERT INTO class VALUES ();

-- 'teach' table
CREATE TABLE teach (
	id_teacher int(11) NOT NULL,
	class_id int(5) NOT NULL,
	FOREIGN KEY (id_teacher) REFERENCES users(id),
	FOREIGN KEY (class_id) REFERENCES class(class_id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'teach'
INSERT INTO teach VALUES ();

-- 'enroll' table
CREATE TABLE enroll (
	id_student int(11) NOT NULL,
	class_id int(5) NOT NULL,
	FOREIGN KEY (id_student) REFERENCES users(id),
	FOREIGN KEY (class_id) REFERENCES class(class_id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- insert into table 'enroll'
INSERT INTO enroll VALUES ();