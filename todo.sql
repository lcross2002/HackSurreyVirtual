DROP DATABASE todo;
CREATE DATABASE todo;
USE todo;

CREATE TABLE List (
URN INT NOT NULL AUTO_INCREMENT,
List_Title VARCHAR(64),
List_Description VARCHAR(512),
List_StartTime DATETIME,
List_EndTime DATETIME,
PRIMARY KEY(URN));

INSERT INTO List(List_Title, List_Description, List_StartTime, List_Endtime) VALUES
("Test", "This is a testerino", NOW(), '2020-12-11 13:00:00'),
("Test 2", "This is a testerino 2", NOW(), '2020-12-11 13:00:00');

SELECT * FROM List;