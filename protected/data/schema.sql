CREATE DATABASE IF NOT EXISTS spillit;
USE spillit;
CREATE TABLE tbl_message
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	message_id INTEGER NOT NULL,
	message_author VARCHAR(128),
	message_date DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
