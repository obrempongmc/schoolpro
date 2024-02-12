SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE IF NOT EXISTS `stafftbl` (
  `staff_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200)  NOT NULL,
  `lname` varchar(200)  NOT NULL,
  `telno` int(10) NOT NULL,
  `comm` varchar(200) NOT NULL,
  `genderid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

INSERT INTO `stafftbl` (`staff_id`, `fname`, `lname`, `telno`, `comm`,  `genderid`, `classid`, ) VALUES
('2','Thomas', 'Griswold', '12345', 'kumasi','1', '2'),
('3','saint', 'world', '34265', 'sunyani','1', '2'),
('5','James', 'Denis', '45585', 'accra','1', '5'),
('13','Thomas', 'Griswold', '12345', 'kumasi','1', '2'),
('15','mas', 'old', '12345', 'kumasi','2', '1'),
('17','ninja ', 'Griswold', '12345', 'kumasi','1', '2'),
('18','Thas', 'Griswold', '12345', 'kumasi','2', '6'),
('20','Ahoma', 'Griswold', '12345', 'kumasi','1', '3'),
('21','Hoas', 'Griswold', '12345', 'obuasi','1', '2'),
('27','mas', 'Griswold', '19093938', 'kumasi','2', '5'),
('23','Masila', 'Evans', '183487449', 'kumasi','1', '4'),
('25','miracle', 'gold', '163738', 'kumasi','1', '3'),


CREATE TABLE IF NOT EXISTS `studenttbl` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200)  NOT NULL,
  `lname` varchar(200)  NOT NULL,
  `DOB` date NOT NULL,
  `genderid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  'Gfname' varchar(200) NOT NULL,
  'Glname' varchar(200) NOT NULL,
  `telno` int(10) NOT NULL,
  `comm` varchar(200) NOT NULL,
  `formerschool` varchar(200) NOT NULL,
  `loc` varchar(200) NOT NULL,
  'allergy' varchar(200),
  'specify' varchar(200),

  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;


CREATE TABLE IF NOT EXISTS `classtbl`(
    'classid' int(10) NOT NULL 
    'classname' varchar(200) NOT NULL;
    'staffid' int(10) NOT NULL;
)

INSERT  INTO `classtbl` ( 'classid','classname','staff_id',) VALUES
('1','Todlers','2')
('2','KG1','3')
('3','KG2','5')
('4','p1','23')
('5','p2','17')
('6','p3','13')
('7','p4','25')
('8','p5','15')
('9','p6','18')
('10','form1','27')
('11','form2','20')
('12','form3','21')



CREATE TABLE IF NOT EXISTS 'Gendertbl'(
    'genderid' int(10) NOT NULL,
    'gender' varchar(200)
    )

  INSERT INTO 'Gendertbl'( 'genderid'.'gender')  VALUES
    ('1','Male')
     ('2','Female')
   


   <!--  SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `stafftbl` (
  `staff_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `telno` int(10) NOT NULL,
  `comm` varchar(200) NOT NULL,
  `genderid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=65;

INSERT INTO `stafftbl` (`staff_id`, `fname`, `lname`, `telno`, `comm`, `genderid`, `classid`)
VALUES
('2','Thomas', 'Griswold', '12345', 'kumasi', '1', '2'),
...

CREATE TABLE IF NOT EXISTS `studenttbl` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `genderid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  `Gfname` varchar(200) NOT NULL,
  `Glname` varchar(200) NOT NULL,
  `telno` int(10) NOT NULL,
  `comm` varchar(200) NOT NULL,
  `formerschool` varchar(200) NOT NULL,
  `loc` varchar(200) NOT NULL,
  `allergy` varchar(200),
  `specify` varchar(200),
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=65;

CREATE TABLE IF NOT EXISTS `classtbl` (
  `classid` int(10) NOT NULL,
  `classname` varchar(200) NOT NULL,
  `staffid` int(10) NOT NULL,
  FOREIGN KEY (`staffid`) REFERENCES `stafftbl` (`staff_id`)
);

INSERT INTO `classtbl` (`classid`, `classname`, `staffid`) VALUES
('1','Toddlers','2'),
...

CREATE TABLE IF NOT EXISTS `Gendertbl` (
  `genderid` int(10) NOT NULL,
  `gender` varchar(200)
);

INSERT INTO `Gendertbl` (`genderid`, `gender`) VALUES
('1','Male'),
('2','Female');
   -->