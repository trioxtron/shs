# MySQLi

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
