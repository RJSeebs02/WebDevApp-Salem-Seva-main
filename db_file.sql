DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adm_username` varchar(20) NOT NULL, 
  `adm_password` varchar(20) NOT NULL,
  `adm_email` varchar(50) NOT NULL,
  `adm_fname` varchar(50) NOT NULL,
  `adm_lname` varchar(50) NOT NULL,
  `adm_cnumber` int(20) NOT NULL,
  PRIMARY KEY  (`adm_username`)
);

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `cust_id` int(50) NOT NULL auto_increment, 
  `cust_fname` varchar(50) NOT NULL,
  `cust_mname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_cnumber` int(20) NOT NULL,
  PRIMARY KEY  (`cust_id`)
);

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `room_id` int(50) NOT NULL auto_increment, 
  `room_number` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_desc` varchar(255) NOT NULL,
  `room_price` decimal(20,2) NOT NULL,
  `room_floor` varchar(10) NOT NULL,
  PRIMARY KEY  (`room_id`)
);