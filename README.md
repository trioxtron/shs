# Schüler helfen Schülern

## Description
This repository is archived.
It was created due to a school contest named "Jugend Forscht" and was presented back in March 2021.
The german name "Schüler helfen Schülern" can be translated to "Students help students" and the idea behind it was to create a platform for students to find other students for tutoring. It was meant as a meeting point to connect with others.

We made 3rd place in the category "Mathematik und Technik" 2021. 


﻿# MySQLi

## Creating Tables

* ### usertables
```sql
CREATE TABLE allusers(
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL ,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL,
verSend int(2) NOT NULL,
ver int(2) NOT NULL
);
``` 

* ### courses
```sql
CREATE TABLE cours (
coursId int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
forsubject TINYTEXT NOT NULL,
class TINYTEXT NOT NULL,
creatorId int(11) NOT NULL,
creatorName TINYTEXT NOT NULL,
creatorEmail TINYTEXT NOT NULL,
price TINYTEXT NOT NULL
);
```

* ### forum
```sql
CREATE TABLE forum ( 
id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
content LONGTEXT NOT NULL, 
postTime TIME NOT NULL, 
creatorName varchar(128), 
creatorId int(11)
); 
```
