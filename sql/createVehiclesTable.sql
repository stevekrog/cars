-- create database transportation;
-- drop table vehicles;
-- use transportation;
create table `vehicles` 
(
	`vehicleID` int NOT NULL AUTO_INCREMENT,
    `OrderOwned` int NOT NULL,
	`type` nvarchar(100) DEFAULT NULL,
    `modelYear` int DEFAULT NULL,
    `make` nvarchar(100) DEFAULT NULL,
	`model` nvarchar(100) DEFAULT NULL,
    `color` nvarchar(100) DEFAULT NULL,
    `numCyl` nvarchar(100) DEFAULT NULL,
    `transType` nvarchar(100) DEFAULT NULL,
    `purchaseYear` int DEFAULT NULL,
    `modifiedDate` int NOT NULL,
PRIMARY KEY (`vehicleID`)
)  ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;    


-- create table `vehicles` 
-- (
-- 	`vehicleID` int NOT NULL AUTO_INCREMENT,
-- 	`type` nvarchar(100) DEFAULT NULL,
--     `year` int DEFAULT NULL,
--     `make` nvarchar(100) DEFAULT NULL,
-- 	`model` nvarchar(100) DEFAULT NULL,
--     `color` nvarchar(100) DEFAULT NULL,
--     `modifiedDate` int NOT NULL,
-- PRIMARY KEY (`vehicleID`)
-- )  ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;    
--     
-- 

    
    
-- CREATE TABLE `movies` (
--  `ID` int NOT NULL AUTO_INCREMENT,
--  `MovieName` varchar(100) DEFAULT NULL,
--  `Rating` double DEFAULT NULL,
--  `DateAdded` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
--  PRIMARY KEY (`ID`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;    
-- 
