CREATE USER 'ctf'@'localhost' IDENTIFIED BY 'qweasdzxczxcasdqwe';

CREATE DATABASE info default character set utf8 collate utf8_general_ci;

use info;

CREATE TABLE users (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
);

INSERT INTO users (id, username, password) VALUES (1, 'zhangsan', 'fsd23r24r13r3y356');
INSERT INTO users (id, username, password) VALUES (2, 'lisi', '6547rth35bn6251');
INSERT INTO users (id, username, password) VALUES (3, 'wangwu', '436324b5h6h31');
INSERT INTO users (id, username, password) VALUES (4, 'yanger', '1bv3576315g6v');
INSERT INTO users (id, username, password) VALUES (5, 'xiaoming', '13gv46b13456g');
INSERT INTO users (id, username, password) VALUES (6, 'xiaozhang', '8fdsujh3mn6m15j6hb351');
INSERT INTO users (id, username, password) VALUES (7, 'admin', 'flag{4765ufgs25sg5hadger}');

GRANT ALL PRIVILEGES ON info.* TO 'ctf'@'localhost';
