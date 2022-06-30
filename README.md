# php-crud-task
Example basic => CRUD with MYSQL

## Screenshot 
![](https://imgur.com/To8whaF.png)

## Create Database
````sql
CREATE DATABASE IF NOT EXISTS `php-crud-task`;
USE `php-crud-task`;

CREATE TABLE IF NOT EXISTS `task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(50) DEFAULT NULL,
  `details` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
````

By: Sebastián EPH