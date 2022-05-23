create database ofCoursesDB;

use ofCoursesDB;

DROP TABLE IF EXISTS User;
CREATE TABLE User
(
  email varchar(100) NOT NULL,
  fullName TEXT NOT NULL,
  password TEXT NOT NULL,
  type INT NOT NULL,
  PRIMARY KEY (email)
);

DROP TABLE IF EXISTS Course;
CREATE TABLE Course
(
  name TEXT NOT NULL,
  description TEXT NOT NULL,
  id INT NOT NULL,
  professorEmail varchar(100) NOT NULL,
  startDate DATE NOT NULL,
  endDate DATE NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (professorEmail) REFERENCES User(email)
);

DROP TABLE IF EXISTS Question;
CREATE TABLE Question
(
  question TEXT NOT NULL,
  answer TEXT NOT NULL,
  qid INT NOT NULL,
  email varchar(100) NOT NULL,
  id INT NOT NULL,
  PRIMARY KEY (qid),
  FOREIGN KEY (email) REFERENCES User(email),
  FOREIGN KEY (id) REFERENCES Course(id)
);

DROP TABLE IF EXISTS Week;
CREATE TABLE Week
(
  title TEXT NOT NULL,
  weekNr INT NOT NULL,
  courseId INT NOT NULL,
  id INT NOT NULL,
  PRIMARY KEY (weekNr, courseId),
  FOREIGN KEY (id) REFERENCES Course(id)
);

DROP TABLE IF EXISTS Assignment;
CREATE TABLE Assignment
(
  dueDate DATE NOT NULL,
  uploadDate DATE NOT NULL,
  weekNr INT NOT NULL,
  courseId INT NOT NULL,
  grade INT NOT NULL,
  maxGrade INT NOT NULL,
  id INT NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS takes;
CREATE TABLE takes
(
  email varchar(100) NOT NULL,
  id INT NOT NULL,
  PRIMARY KEY (email, id),
  FOREIGN KEY (email) REFERENCES User(email),
  FOREIGN KEY (id) REFERENCES Course(id)
);

DROP TABLE IF EXISTS Attachment;
CREATE TABLE Attachment
(
  title TEXT NOT NULL,
  path varchar(150) NOT NULL,
  uploadDate DATE NOT NULL,
  courseId INT NOT NULL,
  weekNr INT NOT NULL,
  assignmentId INT,
  id INT NOT NULL,
  PRIMARY KEY (path),
  FOREIGN KEY (id) REFERENCES Assignment(id),
  FOREIGN KEY (weekNr, courseId) REFERENCES Week(weekNr, courseId)
);