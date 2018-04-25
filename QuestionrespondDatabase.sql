CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `q_date` date DEFAULT NULL,
  `qa_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`q_id`),
  KEY `username` (`username`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1

 CREATE TABLE `answers` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(100) DEFAULT NULL,
  `q_id` int(11) DEFAULT NULL,
  `cuser` varchar(100) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `qa_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`a_id`),
  KEY `q_id` (`q_id`),
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `questions` (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1
