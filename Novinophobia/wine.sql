/*Author: Emily Alexander*/

CREATE TABLE login(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(20),
	password VARCHAR(100),
	first_name VARCHAR (20),
	last_name VARCHAR (20)
);

CREATE TABLE userPreference(
	userId INT,
	intensity INT,
	spicy INT,
	chocolate INT,
	acidity INT,
	light_bodied INT,
	medium_bodied INT,
	full_bodied INT,
	dry INT,
	sweet INT,
	elegant INT,
	earthy INT
);

CREATE TABLE wineList(
	wineId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	description BLOB(),
	wineName VARCHAR(30),
	intensity INT,
	spicy INT,
	chocolate INT,
	acidity INT,
	light_bodied INT,
	medium_bodied INT,
	full_bodied INT,
	dry INT,
	sweet INT,
	elegant INT,
	earthy INT
);

CREATE TABLE wineReview(
	userId INT,
	wineId INT
);

/*--table 1 data
INSERT INTO quotations VALUES(NULL, 'Find a place inside where theres joy, and the joy will burn out the pain.',
 'Joseph Campbell', 0);
INSERT INTO quotations VALUES(NULL, 'In order to carry a positive action we must develop here a positive vision.',
 'Dalai Lama', 0);
INSERT INTO quotations VALUES(NULL, 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.',
 'Albert Einstein', 0);*/