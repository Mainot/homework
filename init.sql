CREATE USER 'napopravku'@'localhost' IDENTIFIED BY 'password12345';
CREATE DATABASE `napopravku_db` CHARACTER SET utf8 COLLATE utf8_unicode_ci;

GRANT SELECT,DELETE,INSERT,UPDATE ON napopravku_db.* TO 'napopravku'@'localhost';
FLUSH PRIVILEGES;
