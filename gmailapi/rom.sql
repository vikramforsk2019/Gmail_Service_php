create database user1;

CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(50) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `city` (`cityname`) VALUES
( 'kota'),
( 'jaipur'),
( 'alwar'),
( 'jodhpur');

--
-- Table structure for table `nearby`
--

CREATE TABLE IF NOT EXISTS `near` (
  `nearid` int(11) NOT NULL AUTO_INCREMENT,
    `cityid` int(11) NOT NULL,
  `nearname` varchar(200) NOT NULL,
  location varchar(600),
  PRIMARY KEY (`nearid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `near` (`cityid`,`nearname`,location) VALUES
( 1,'Engineering college kota','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.9218367636117!2d75.80543604999855!3d25.13833328384461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f835fcc2a9e43%3A0x69e74069e551d77d!2sRajasthan+Technical+University!5e0!3m2!1sen!2sin!4v1553779937558'),
(1,'Shivpura kota','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7222.960260530676!2d75.81133694394309!3d25.153260985350425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f84bab293c2d9%3A0x86b67bd965f05877!2sShivpura%2C+Kota%2C+Rajasthan+324009!5e0!3m2!1sen!2sin!4v1553779965214'),
(1,'R.k puram kota','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14449.085717417018!2d75.81450316365036!3d25.126512741601424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f849022456b8b%3A0x6c75d7ecafe24320!2sRama+Krishna+Puram%2C+Kota%2C+Rajasthan+324010!5e0!3m2!1sen!2sin!4v1553779988406" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');



//user profile
CREATE TABLE IF NOT EXISTS `profile` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `lname` char(50)  NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
 

  `pic` varchar(255)  NULL,
  
 
  PRIMARY KEY (`pid`),
  UNIQUE KEY `email` (`email`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `profile` (name,lname,email,password,cpassword,mob,pic,message,status) VALUES
('vikram','gurjar','vs@gmail.com','1234','1234','775352662','null','jai shree ram','act');

/////////

CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `cityid` int(20) NOT NULL,
  `nearid` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `catagary` varchar(50) NOT NULL,
  `ptype` varchar(50)  NOT NULL,
  `gender` varchar(50) NOT NULL,
  `properties` varchar(20)  NOT NULL,
  `bedrooms` varchar(20) NOT NULL,
  `furnish` varchar(255)  NOT NULL,
   `title` varchar(255)  NULL,
  discription varchar(40) NOT NULL,
  yourname varchar(40)  NULL,
  mob varchar(40) NOT NULL,
  email varchar(40) NULL,
  price varchar(40) NOT NULL,
  address varchar(40) NOT NULL,
  pathh varchar(300) NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `post` (cityid,nearid,pid,catagary,ptype,gender,properties,bedrooms,bathrooms,furnish,title,discription,yourname,mob,email,price) VALUES
(1,1,1,'for student','gurjar','m','123sdfs','1','2','vs.jdj','jai shree ram','act','pandit','498349','sgdjd@gmail.com','34432');

///////////////////////////////////
//user profile
CREATE TABLE IF NOT EXISTS `image` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(50) NOT NULL,
  `img1` varchar(50)  NULL,
  `img2` varchar(50)  NULL,
  `img3` varchar(20)  NULL,
  `img4` varchar(20)  NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
////////////////////////
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(500)  NULL,
  `email` varchar(5000)  NULL,
  `message` varchar(6000)  NULL,
   `date` varchar(6000)  NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=ASCII AUTO_INCREMENT=1 ;
///////////////////
ALTER TABLE image MODIFY img1 varchar(600);

////////////////////
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50)  NULL,
  `lname` varchar(50)  NULL,
  `email` varchar(70)  NULL,
  `password` varchar(20)  NULL,
  `mob` varchar(20)  NULL,
  `pic` varchar(255)  NULL,
   `address` varchar(255)  NULL,

  PRIMARY KEY (`adminid`),
  UNIQUE KEY `email` (`email`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `admin` (name,lname,email,password,mob,pic,address) VALUES
('rahul','pandit','rahul@gmail.com','12345','7665980868','vs.jdj','Utd rtu kota');
////////////////////////
addd column
////////////
alter table contact add column date varchar(900);
//////////////////////
update table
//////////////////////////////////////////////////
 update near set location="" where nearid=1;
