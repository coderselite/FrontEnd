
-- Database: `elite_coders`

CREATE DATABASE IF NOT EXISTS elite_coders;

USE elite_coders;

-- Table structure for table `registration`

CREATE TABLE `registration` (
  `userId` int(8) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL UNIQUE,
  `mobile` int(10) NOT NULL UNIQUE,
  `address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
   PRIMARY KEY (userId)
);

-- Table structure for table `suggestions`
CREATE TABLE `suggestions` (
  `suggestionId` int(8) NOT NULL,
  `userId` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
   PRIMARY KEY (suggestionId),
   FOREIGN KEY (userId) REFERENCES registration (userId)
   ON DELETE CASCADE
   ON UPDATE CASCADE
);

-- Table structure for table `feedback`
CREATE TABLE `feedback` (
  `feedbackId` int(8) NOT NULL,
  `userId` int(8) NOT NULL,
  `rating` int(1) NOT NULL,
  `description` varchar(500) NOT NULL,
   PRIMARY KEY (feedbackId),
   FOREIGN KEY (userId) REFERENCES registration (userId)
   ON DELETE CASCADE
   ON UPDATE CASCADE
);

/*
-- Sample Insert Query for table `registration`
INSERT INTO `registration`
(`userId`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', 8796536036, 'abc', '123abc');

-- Sample Insert Query for table `feedback`
INSERT INTO `feedback` (`feedbackId`, `userId`, `rating`, `description`) VALUES
(1, 1, 2, 'abc');

-- Sample Insert Query for table `suggestions`
INSERT INTO `suggestions` (`suggestionId`, `userId`, `title`, `technology`, `description`) VALUES
(1, 1, 'Banking System', 'java,mysql,jsp', 'abcdefg');

*/