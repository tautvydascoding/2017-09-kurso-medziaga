// uzduotis 2 - KOMANDINE! ( PO 2x)

// 0) sukurti DB "savaite4"
// 1) use testuotju;  // pasirinkti lentele su kuria dirbsite
// 2) sukurti lentele "users" su stulpeliais:
// "id", "username", "pass", "email", "rights"
// 2.2) sukurti pora nariu

// 3) sukurti lentele "articles" su stulpeliais:
// "id", "title", "content", "date", "user_id"
// 3.2) sukurti pora straipsniu

CREATE DATABASE savaite4;
USE savaite4;

CREATE TABLE users ( id INT (6) AUTO_INCREMENT PRIMARY KEY, username VARCHAR(20), pass VARCHAR(20), email VARCHAR(30), rights VARCHAR(10) );
INSERT INTO users VALUES ('', 'Tim', 'tratata', 'a@a.lt', 'moderator');
 SELECT * FROM users;

CREATE TABLE articles ( id INT(6) AUTO_INCREMENT PRIMARY KEY, title VARCHAR(160), content text, date date, user_id INT(6));
 INSERT INTO articles VALUES ('', 'Atsikrausto sveiko maisto restoranai i Kauna', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NOW(), 1);
SELECT * FROM articles;






 //
