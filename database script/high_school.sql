-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2013 at 01:59 PM
-- Server version: 5.5.31
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `high_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `t_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`a_id`),
  KEY `t_id` (`t_id`),
  KEY `q_id` (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`a_id`, `q_id`, `answer`, `t_id`, `date`, `status`) VALUES
(1, 10, 'The universe cannot be read until we have learned the language', 0, '2012-11-26 14:36:10', 1),
(6, 0, '', 0, '2012-11-26 22:06:47', 1),
(5, 9, 'Three leading types of definition of mathematics are called logicist, intuitionist, and formalist, ', 0, '2012-11-26 14:37:59', 1),
(7, 11, 'the embedded computers found in many devices from mp3 players to fighter aircraft', 0, '2012-11-26 22:07:29', 1),
(8, 0, '', 0, '2012-11-26 22:08:12', 1),
(9, 1, 'operations can be readily changed, the computer can solve more than one kind of problem', 0, '2012-11-26 22:08:27', 1),
(10, 0, '', 0, '2012-11-26 22:08:46', 1),
(11, 6, 'operations can be readily changed, the computer can solve more than one kind of problem', 0, '2012-11-26 22:08:54', 1),
(12, 0, '', 0, '2012-11-26 22:09:13', 1),
(13, 11, ' a computer consists of at least one processing element, typically a central processing unit (CPU)', 0, '2012-11-26 22:09:34', 1),
(14, 0, '', 0, '2012-11-26 22:10:04', 1),
(15, 11, 'In 1642, the Renaissance saw the invention of the mechanical calculator,[11] a device that could perform', 0, '2012-11-26 22:10:19', 1),
(16, 0, '', 0, '2012-11-26 22:10:34', 1),
(17, 12, 'It was the fusion of automatic calculation with programmability that produced the first r', 0, '2012-11-26 22:10:45', 1),
(18, 0, '', 0, '2012-11-26 22:10:54', 1),
(19, 13, 'A succession of steadily more powerful and flexible computing devices were constructed in the 1930s', 0, '2012-11-26 22:11:04', 1),
(20, 0, '', 0, '2012-11-26 22:11:15', 1),
(21, 14, 'The defining feature of modern computers which distinguishes them from all other machines', 0, '2012-11-26 22:11:29', 1),
(22, 0, '', 0, '2012-11-26 22:11:53', 1),
(23, 15, 'Program execution might be likened to reading a book. While a person will normally read each word', 0, '2012-11-26 22:11:57', 1),
(24, 0, '', 0, '2012-11-26 22:12:43', 1),
(25, 13, 'Comparatively, a person using a pocket calculator can perform a basic arithmetic operation', 0, '2012-11-26 22:12:56', 1),
(26, 0, '', 0, '2012-11-26 22:13:07', 1),
(27, 10, 'Programming languages provide various ways of specifying programs for computers ', 0, '2012-11-26 22:13:18', 1),
(28, 0, '', 0, '2012-11-26 22:13:28', 1),
(29, 9, 'interconnected by busses, often made of groups of wires.', 0, '2012-11-26 22:13:39', 1),
(30, 0, '', 0, '2012-11-26 22:13:49', 1),
(31, 8, 'Write the result from the ALU back to a memory location or to a register or perhaps an output device.', 0, '2012-11-26 22:13:58', 1),
(32, 0, '', 0, '2012-11-26 22:14:08', 1),
(33, 7, 'In more sophisticated computers there may be one or more RAM cache memories', 0, '2012-11-26 22:14:18', 1),
(34, 0, '', 0, '2012-11-26 22:14:54', 1),
(35, 16, 'Greenwood announced in the midst of the 2004 congressional election', 0, '2012-11-26 22:15:25', 1),
(36, 0, '', 0, '2012-11-26 22:15:40', 1),
(37, 17, 'A co-founder and co-chair of the House Oceans Caucus,', 0, '2012-11-26 22:15:46', 1),
(38, 0, '', 0, '2012-11-26 22:16:06', 1),
(39, 18, 'Greenwood is currently the president and CEO of the Biotechnology Industry Organization (BIO).[', 0, '2012-11-26 22:16:09', 1),
(40, 0, '', 0, '2012-11-26 22:16:27', 1),
(41, 19, 'BIO represents more than 1,200 biotechnology companies, academic institutions', 0, '2012-11-26 22:16:40', 1),
(42, 0, '', 0, '2012-11-26 22:16:59', 1),
(43, 20, 'CEO of the Biotechnology Industry Organization (BIO), a biotechnology trade association based in Washington, DC.[4]', 0, '2012-11-26 22:17:05', 1),
(44, 0, '', 0, '2012-11-26 22:17:36', 1),
(45, 30, 'Physics also makes significant contributions through advances in new technologie', 0, '2012-11-26 22:17:50', 1),
(46, 0, '', 0, '2012-11-26 22:18:02', 1),
(47, 29, 'Natural philosophy has its origins in Greece during the Archaic period, (650 BCE – 480 BCE),', 0, '2012-11-26 22:18:10', 1),
(48, 0, '', 0, '2012-11-26 22:18:26', 1),
(49, 28, 'By the 19th century physics was realized as a discipline distinct from philosophy and the other sciences', 0, '2012-11-26 22:18:29', 1),
(50, 0, '', 0, '2012-11-26 22:18:44', 1),
(51, 27, 'Classical physics is generally concerned with matter and energy on the normal scale of observation', 0, '2012-11-26 22:18:47', 1),
(52, 0, '', 0, '2012-11-26 22:19:03', 1),
(53, 26, 'Mathematics is the language used for compact description of the order in nature, especially the laws of physics', 0, '2012-11-26 22:19:08', 1),
(54, 0, '', 0, '2012-11-26 22:19:25', 1),
(55, 26, 'Theorists seek to develop mathematical models that both agree with existing experiments', 0, '2012-11-26 22:19:28', 1),
(56, 0, '', 0, '2012-11-26 22:19:39', 1),
(57, 21, 'been storing, retrieving, manipulating and communicating information since the ', 0, '2012-11-26 22:21:10', 1),
(58, 0, '', 0, '2012-11-26 22:21:21', 1),
(59, 22, 'Devices have been used to aid computation for thousands of years, probably initially in the form of a tally stick.[7] The Antikythera mechanism, dating from about the beginning of the first century ', 0, '2012-11-26 22:21:34', 1),
(60, 0, '', 0, '2012-11-26 22:21:46', 1),
(61, 0, '', 0, '2012-11-26 22:22:08', 1),
(62, 24, 'Breaches of copyright by those downloading files stored without the permission of the copyright holders\r\n', 0, '2012-11-26 22:22:37', 1),
(63, 0, '', 0, '2012-11-26 22:22:52', 1),
(64, 25, 'The relational database model introduced a programming language independent Structured Query Language (SQL), based on relational algebra.[23]\r\n', 0, '2012-11-26 22:23:04', 1),
(65, 0, '', 0, '2012-11-26 22:23:19', 1),
(66, 31, 'Massive amounts of data are stored worldwide every day, but unless it can be analysed and presented effectively it essentially resides in what have been called data tombs: "data archives that are ', 0, '2012-11-26 22:23:28', 1),
(67, 0, '', 0, '2012-11-26 22:24:33', 1),
(68, 0, '', 0, '2012-11-26 22:25:46', 1),
(69, 2, 'Breaches of copyright by those downloading files stored without the permission of the copyright holders\r\n', 0, '2012-11-26 22:25:58', 1),
(70, 0, '', 0, '2012-11-26 22:26:17', 1),
(71, 3, 'the 16th century,[9] and it was not until 1645 that the first mechanical calculator capable of performing the four basic arithmetical operations was developed.[10]\r\n', 0, '2012-11-26 22:26:32', 1),
(72, 0, '', 0, '2012-11-26 22:26:52', 1),
(73, 4, 'Humans have been storing, retrieving, manipulating and communicating information since the Sumerians in Mesopotamia developed writing in about ', 0, '2012-11-26 22:26:56', 1),
(74, 0, '', 0, '2012-11-26 22:27:10', 1),
(75, 5, 'equipment to store, retrieve, transmit and manipulate data.[1] The term is commonly used as a synonym for computers and computer networks, but it ', 0, '2012-11-26 22:27:18', 1),
(76, 0, '', 0, '2012-11-26 22:27:34', 1),
(77, 1, 'Data storage', 0, '2012-11-26 22:27:38', 1),
(78, 0, '', 0, '2012-11-26 22:27:50', 1),
(79, 1, '123 ', 0, '2012-11-26 22:27:55', 1),
(80, 0, '', 0, '2012-11-26 23:12:50', 1),
(81, 6, 'hgfghgfghfghfghfgh', 0, '2012-11-26 23:13:02', 1),
(82, 0, '', 0, '2012-11-26 23:13:04', 1),
(83, 0, '', 0, '2012-11-26 23:58:24', 1),
(84, 0, '', 0, '2012-11-27 00:02:39', 1),
(85, 0, '', 0, '2012-11-27 00:14:42', 1),
(86, 0, '', 0, '2012-11-27 00:35:35', 1),
(87, 32, 'i m in noida ', 0, '2012-11-27 00:35:43', 1),
(88, 0, '', 0, '2012-11-27 00:35:52', 1),
(89, 32, 'i m in noida ', 0, '2012-11-27 00:35:59', 1),
(90, 0, '', 0, '2012-11-27 00:36:53', 1),
(91, 0, '', 0, '2012-11-27 00:37:06', 1),
(92, 15, '12 3 dfs ', 0, '2012-11-27 00:37:12', 1),
(93, 15, '12 3 dfs ', 0, '2012-11-27 00:38:05', 1),
(94, 0, '', 0, '2012-11-27 00:39:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `name` varchar(300) NOT NULL,
  `phone` int(11) NOT NULL,
  `addr` varchar(300) NOT NULL,
  `pincode` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`name`, `phone`, `addr`, `pincode`, `id`) VALUES
('shivam', 2147483647, 'abecehfdj', 234324, 1),
('shivam', 2147483647, 'abecehfdj', 234324, 2),
('amit', 2147483647, 'xnvxbxb', 35, 3),
('aakash', 2147483647, 'xnvxbxb', 35, 4),
('yyjy', 0, 'hjfg', 0, 5),
('ljkhhj', 0, 'kgk', 0, 6),
('cgbcv', 0, 'cvbcvbcv', 0, 7),
('fdsgfg', 0, 'gdfgdfgfd', 0, 8),
('vxbvxb', 0, 'xvbx', 0, 9),
('a', 0, 'a', 0, 10),
('a', 0, 'a', 0, 11),
('cxvxcv', 0, 'c', 0, 12),
('fxcd', 0, 'c', 0, 13),
('dslfnlsd', 0, 'fsdk.mngfskl', 0, 14),
('df;lmgb;d', 0, 'g.dbg.d', 0, 15),
('lsdkjgfv', 0, 'df.,mb', 0, 16),
('lsdkjgfv', 0, 'df.,mb', 0, 17),
('hsivnak', 2147483647, 'skflnv', 397242, 18),
('dslfnlsd', 23, 'd', 0, 19),
('dsfdsf', 0, 'dsf', 434343, 20),
(';klmk;', 2147483647, 'lklk', 0, 21),
('cbn cbnc', 2147483647, 'cbbgcb', 0, 22),
('shivam', 2147483647, 'fbljk', 0, 23),
('rohti', 2147483647, 'kdjfb', 4334, 24),
('rohti', 2147483647, 'kdjfb', 4334, 25);

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  `uploadir` varchar(30) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `b_image` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `a_image` varchar(30) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`bid`, `category`, `uploadir`, `filename`, `b_image`, `price`, `author`, `a_image`) VALUES
(1, 'CSE', 'CSE/', 'HTML', 'a1.jpg', '100', 'sanjay goel', 'b1.jpg'),
(2, 'CSE', 'CSE/', 'JAVA', 'a2.jpg', '200', 'Vikas singh', 'b2.jpg'),
(3, 'CSE', 'CSE/', 'Clang', 'a3.jpg', '140', 'Rohit jain', 'b3.jpg'),
(4, 'CSE', 'CSE/', 'DBMS', 'a4.jpg', '140', 'Ayush singh', 'b4.jpg'),
(5, 'CSE', 'CSE/', 'Micro', 'a5.jpg', '100', 'Shivam bansal', 'b5.jpg'),
(6, 'CSE', 'CSE/', 'Oops', 'a6.jpg', '200', 'Yogesh vijay', 'b6.jpg'),
(7, 'CSE', 'CSE/', 'TOC', 'a7.jpg', '200', 'Shubham jain', 'b7.jpg'),
(8, 'IT', 'IT/', 'Webtech', 'a8.jpg', '100', 'Varun singh', 'b8.jpg'),
(9, 'IT', 'IT/', 'FOA', 'a9.jpg', '140', 'Mayank bhola', 'b9.jpg'),
(10, 'IT', 'IT/', 'OS', 'a10.jpg', '140', 'Tanmay shina', 'b10.jpg'),
(11, 'IT', 'IT/', 'Python', 'a11.jpg', '250', ' The Harsh ', 'b11.jpg'),
(12, 'IT', 'IT/', '.NET', 'a12.jpg', '210', 'Sahil jindal', 'b12.jpg'),
(13, 'MATHS', 'MATHS/', 'Number_system', 'a13.jpg', '200', 'Pratyush shukla', 'b13.jpg'),
(14, 'MATHS', 'MATHS/', 'Calculus', 'a14.jpg', '210', 'Yuvraj patil', 'b14.jpg'),
(15, 'MATHS', 'MATHS/', 'Algebra', 'a15.jpg', '204', 'Dr. shalabh', 'b15.jpg'),
(16, 'MATHS', 'MATHS/', 'LR', 'a16.jpg', '220', 'Anirudh goel', 'b16.jpg'),
(17, 'MATHS', 'MATHS/', 'Quant', 'a17.jpg', '200', 'Manoj sonkar', 'b17.jpg'),
(18, 'MATHS', 'MATHS/', 'Equations', 'a18.jpg', '140', 'Anish agrawal', 'b18.jpg'),
(19, 'BIO', 'BIO/', 'Cells', 'a19.jpg', '250', 'Vasu sharma', 'b19.jpg'),
(20, 'BIO', 'BIO/', 'Zology', 'a20.jpg', '220', 'Aakash sharma', 'b20.jpg'),
(21, 'BIO', 'BIO/', 'Botany', 'a21.jpg', '100', 'Aman singh', 'b21.jpg'),
(22, 'BIO', 'BIO/', 'Reproduction', 'a22.jpg', '220', 'Himanshu sharma', 'b22.jpg'),
(23, 'ECE', 'ECE/', 'Digital', 'a23.jpg', '200', 'Abhijeet mishra', 'b23.jpg'),
(24, 'ECE', 'ECE/', 'Electricity', 'a24.jpg', '210', 'Sahil dabra', 'b24.jpg'),
(25, 'ECE', 'ECE/', 'Communication', 'a25.jpg', '204', 'Shivansh singh', 'b25.jpg'),
(26, 'ECE', 'ECE/', 'Anolog_system', 'a26.jpg', '210', 'Pranjal singh', 'b26.jpg'),
(27, 'ECE', 'ECE/', 'Matlab', 'a27.jpg', '200', 'Ankit singh', 'b27.jpg'),
(28, 'PHYSICS', 'PHYSICS/', 'Light', 'a28.jpg', '210', 'Amit singh', 'b28.jpg'),
(29, 'PHYSICS', 'PHYSICS/', 'Wave', 'a29.jpg', '100', 'Vivek rai', 'b29.jpg'),
(30, 'PHYSICS', 'PHYSICS/', 'Sound', 'a30.jpg', '200', 'Sanjeev rai', 'b30.jpg'),
(31, 'PHYSICS', 'PHYSICS/', 'Speed', 'a31.jpg', ' 204', 'Atul singh', 'b31.jpg'),
(32, 'PHYSICS', 'PHYSICS/', 'Diemention', 'a32.jpg', '140', 'Shivam singh', 'b32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `book_type` varchar(100) NOT NULL,
  `book_image` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `subject`, `book_author`, `book_type`, `book_image`, `status`) VALUES
(1, 'HTML', 'a', 'b', 'b', 'b1.jpg', 1),
(2, 'Analog', 'x', 'c', 'x', 'b2.jpg', 1),
(3, 'Digital', 'd', 'ds', 'sd', 'b3.jpg', 1),
(4, 'JAVA', 'd', 's', 'f', 'b4.jpg', 1),
(5, 'Lipschutez', 'sa', 'as', 'sa', 'b5.jpg', 1),
(6, 'RC Dorf', 'af', 'sa', 'sa', 'b6.jpg', 1),
(7, 'DBMS', 'a', 'ty', 'et', 'b7.jpg', 1),
(8, '.NET', 'tr', 'ty', 'gf', 'b8.jpg', 1),
(9, 'H C VERMA', 'dsg', 'gsd', 'gd', 'b9.jpg', 1),
(10, 'H K DAS', 'df', 'hdf', 'gdf', 'b10.jpg', 1),
(11, 'QUANT', 'maths', 'S K SINGH', '45', 'b11.jpg', 1),
(12, 'VERBAL', 'gid', 'dk', 'nd', 'b12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `branch`, `status`) VALUES
(1, 'CSE', 1),
(2, 'ECE', 1),
(3, 'IT', 1),
(4, 'BT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_loc` varchar(200) NOT NULL,
  `course_img` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_loc`, `course_img`, `status`) VALUES
(1, 'maths.php', 'ma.jpg', 1),
(2, 'mech.php', 'm.jpg', 1),
(3, 'ec.php', 'f.jpg', 1),
(4, 'cs.php', 'c.jpg', 1),
(5, 'physics.php', 'p.jpg', 1),
(6, 'biotech.php', 'b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `crawl`
--

CREATE TABLE `crawl` (
  `result` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `dis` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crawl`
--

INSERT INTO `crawl` (`result`, `link`, `dis`) VALUES
('HTML - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/HTML', 'HyperText Markup Language (HTML) is the main markup language for displaying web pages and other information that can be displayed in a web browser. HTML is written in ...'),
('Semantic HTML', 'http://en.wikipedia.org/wiki/HTML#Semantic_HTML', 'Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building.'),
('HTML Tutorial', 'http://w3schools.com/html/default.asp', 'Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building.'),
('Introduction to HTML', 'http://www.w3schools.com/htmL/html_intro.asp', 'Free tutorials on HTML, CSS and PHP - Build your own website - Free tutorials on HTML, CSS and PHP - Build your own website'),
('Free tutorials on HTML, CSS and PHP - Build your own website ...', 'http://html.net/', 'Full information on HTML and links to all the specifications.'),
('W3C HTML Home Page', 'http://www.w3.org/MarkUp/', 'Communicate with your customers using our new HTML newsletter tool!'),
('HTML.COM', 'http://www.html.com/', 'Welcome to the HTML Code Tutorial. Our goal is to provide the most helpful and complete guide to creating web pages anywhere.'),
('HTML Code Tutorial', 'http://www.htmlcodetutorial.com/', 'HTML Tutorial - Table of contents - Free tutorials on HTML, CSS and PHP - Build your own website'),
('HTML Tutorial - Table of contents - HTML.net', 'http://html.net/tutorials/html/', 'The W3C Validation Service validates multiple versions of XHTML and HTML, outputting many useful errors and warnings to help users create a standards-compliant web page.'),
('W3C HTML Validation Service', 'http://validator.w3.org/', 'Free html tutorials and help, images, color codes and more for the web developer. Featuring tutorials on HTML tags, programming, basics, JavaScript, frames, hex codes ...'),
('HTML Goodies: The Ultimate HTML Resource', 'http://www.htmlgoodies.com/', 'Top Indian car website. One of the ultimate new/used car destinations.'),
('Html codes', 'http://www.bing.com/search?q=Html+codes&FORM=QSRE1', 'At Sulekha.com Buy/Sell Anything. 100% Free Classifieds'),
('HTML Tags', 'http://www.bing.com/search?q=HTML+Tags&FORM=QSRE2', 'Buy/Sell, add your product now gain potential customers. 100% Free.'),
('java.com: Java + You', 'http://www.java.com/', 'Get the latest Java Software and explore how Java technology provides a better digital experience.'),
('Download Free Java Software', 'http://java.com/en/download/index.jsp', 'This page is your source to download or update your existing Java Runtime Environment, also known as the Java Virtual Machine (JVM, VM, and Java VM), the Java Runtime ...'),
('Java (programming language) - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/Java_(programming_language)', 'Java is a programming language originally developed by James Gosling at Sun Microsystems (which has since merged into Oracle Corporation) and released in ...'),
('Java - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/Java', '26-11-2012Â Â· Java is an island of Indonesia. With a population of 137 million (excluding the 3.7 million on the island of Madura which is administered as part of the ...'),
('Oracle Technology Network for Java Developers', 'http://www.oracle.com/technetwork/java/index.html', 'Oracle Technology Network is the ultimate, complete, and authoritative source of technical information and learning about Java.'),
('The Javaâ„¢ Tutorials', 'http://download.oracle.com/javase/tutorial/', 'The Java Tutorials are practical guides for programmers who want to use the Java programming language to create applications. They include hundreds of complete ...'),
('Oracle and Java | Technologies', 'http://www.oracle.com/us/technologies/java/overview/index.html', 'Oracle has been a leading and enthusiastic supporter of Java since its emergence in 1995. Today, Oracle offers the most comprehensive and productive Java EE ...'),
('Free Java Download', 'http://www.bing.com/search?q=Free+Java+Download&FORM=QSRE1', 'Fully-featured Java IDE written completely in Java, with many modules available, such as: debugger, form editor, object browser, CVS, emacs integration, scripting ...'),
('Java Download', 'http://www.bing.com/search?q=Java+Download&FORM=QSRE2', 'Immediate Requirement in Top Companies. Click Here to Apply Now'),
('Java History', 'http://www.bing.com/search?q=Java+History&FORM=QSRE3', '1000S of Employers looking for you. Search & apply for free.'),
('Java eBooks', 'http://www.bing.com/search?q=Java+eBooks&FORM=QSRE4', 'Find the best professional course. Enhance your career. Join 100% free'),
('Java Tutorials', 'http://www.bing.com/search?q=Java+Tutorials&FORM=QSRE5', 'Compare all the Specs, Prices & More. Check On-Road Prices in Your City'),
('Java Setup', 'http://www.bing.com/search?q=Java+Setup&FORM=QSRE6', 'Browse Profiles & Share Your World. Create a Facebook Profile for Free!'),
('New, Used Games & Toys - Buy Toys & Games for your Kids Now.', 'http://1348940.r.msn.com/?ld=4vStL445Mh0YU_YiALYYRRah71l_M766leUg7xSILOkevtiXPOZAB1uv8V3pGTa4OmKEXT5-UWCeVByyFO7XsMcVMFflTAvFQ1b3VuPq_xWsnX-LeVMv0RbmZ7PfgBZYhmceZ-HFuWEzqKUCJ-wzemZYk5FJoxrqmdeSPyK3FL9srisfBzsevzzPEMEZpqOSTN81opcO22UqQkGiBQFnHB5q-b9wfARvG6OBmvgizm065Vs6GxBVZFt9_oYuNYPssog8RCTovXFCjuL', '100% Free classifieds. Try now.'),
('Games.com: Play Games Online - Free Games, Download Games, Game Tips', 'http://www.games.com/', 'Free online games, puzzle games, word games, card games, poker and casino games, board games, arcade games, sports games. Games.com powered by AOL!'),
('Games at Miniclip.com - Play Free Online Games', 'http://www.miniclip.com/games/en/', 'Play Free Online Games, fun games, puzzle games, action games, sports games, flash games, adventure games, multiplayer games and more'),
('Games - Free Online Games, Free Games Online! - GamesGames.com', 'http://www.gamesgames.com/', 'Your zone to play free games online! Play free games online including racing games, sports games and more at GamesGames.com.'),
('Zapak - Play Free Online games | Play Free Cricket Games | Racing ...', 'http://www.zapak.com/', 'Zapak.com is no.1 games portal where you can play free online games. Play and download free Action, Cricket, Racing, Car Racing , Sports games and many more.'),
('Play Free Online Games, Free Games Online, Free Racing Games, Free ...', 'http://www.in.com/games/', 'Free Games Online - Play Free Games Online, free racing games, free online pc game, play free cricket game online, car racing games, racing games online, bike games ...'),
('Games - Free Online Games at Addicting Games!', 'http://www.addictinggames.com/', 'Play over 3000 free online games! Including arcade games, puzzle games, funny games, sports games, shooting games, and more! New free games every day at AddictingGames!'),
('Free Games Download - Full Free PC Games', 'http://www.gametop.com/', 'Free Games - Download Full Version Free PC Games. All Free Game Downloads are Trusted and Safe. No Trials. No Payments. No Ads.'),
('Free Online Games (FOG)', 'http://www.freeonlinegames.com/', 'A variety of free games including shooting, puzzle, sports, racing, strategy, animal, arcade, physics, adventure, and fighting.'),
('Free Online Games - Agame.com (including Game.co.in)', 'http://www.agame.com/', 'Play free online Action games, Racing games, Sports games, Adventure games, War games and more at AGAME.COM. Recently including Game.co.in.'),
('Yahoo! Games - Play Free Online Games | Download Games', 'http://games.yahoo.com/', 'Play the latest online games on Yahoo! Games. Play and download single and multiplayer games from a wide selection of arcade, board and puzzle games.'),
('Car Games', 'http://www.bing.com/search?q=Car+Games&FORM=QSRE1', '100% Free classifieds. Try now.'),
('Free Games', 'http://www.bing.com/search?q=Free+Games&FORM=QSRE2', 'Ultimate Experience, Wide Range & Great Offers Visit now for More'),
('Barbie Games', 'http://www.bing.com/search?q=Barbie+Games&FORM=QSRE3', 'Play over 600 Single Player Games Absolutely Free. Go Play Today.'),
('Yahoo! Games', 'http://www.bing.com/search?q=Yahoo!+Games&FORM=QSRE4', 'Videos, Pictures & On-Road Prices. No.1 New Cars Website. Visit Now!'),
('PHP: Hypertext Preprocessor', 'http://www.php.net/', 'What is PHP? PHP is a widely-used general-purpose scripting language that is especially suited for Web development and can be embedded into HTML.'),
('PHP - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/PHP', 'PHP is an open source general-purpose server-side scripting language originally designed for Web development to produce dynamic Web pages. It is one of the first ...'),
('PHP: Downloads', 'http://www.php.net/downloads.php', 'Binaries for other systems. We do not distribute UNIX/Linux binaries. Most Linux distributions come with PHP these days, so if you do not want to compile your own, go ...'),
('PHP Tutorial', 'http://www.w3schools.com/php/default.asp', 'Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building.'),
('PHP | Parents Helping Parents', 'http://www.php.com/', 'Parents Helping Parents (PHP) strives to improve the quality of life for any child with any special need of any age, through educating, supporting and training their ...'),
('PHP Introduction', 'http://www.w3schools.com/PHP/php_intro.asp', 'Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building.'),
('PHP For Windows: Binaries and sources Releases', 'http://windows.php.net/download', 'PHP For Windows. This site is dedicated to supporting PHP on Microsoft Windows. It also supports ports of PHP extensions or features ...'),
('PHP For Windows:', 'http://windows.php.net/', 'PHP For Windows. This site is dedicated to supporting PHP on Microsoft Windows. It also supports ports of PHP extensions or features ...'),
('PHP: start [PHP Wiki]', 'http://wiki.php.net/', 'Welcome to the PHP Wiki pages! This wiki is mainly used to track internal development of the PHP project, so feel free to scour the wiki and join the project.'),
('PHP Tutorial', 'http://www.bing.com/search?q=PHP+Tutorial&FORM=QSRE1', 'Immediate Requirement in Top Companies. Click Here to Apply Now'),
('PHP Download', 'http://www.bing.com/search?q=PHP+Download&FORM=QSRE2', '1000S of Employers looking for you. Search & apply for free.'),
('PHP Scripts', 'http://www.bing.com/search?q=PHP+Scripts&FORM=QSRE3', '3 Months & 6 Months EMI Options on Samsung Online E-Store. Buy Now!'),
('PHP vs Java', 'http://www.bing.com/search?q=PHP+vs+Java&FORM=QSRE4', 'At Sulekha.com Buy/Sell Anything. 100% Free Classifieds'),
('PHP Manual', 'http://www.bing.com/search?q=PHP+Manual&FORM=QSRE5', 'Discover Latest Mobile Technology Official website. Visit Now'),
('Computer Science at MIT - Big Innovations Begin At MIT.', 'http://1356404.r.msn.com/?ld=4v5ASyb9zyptepAbBXEOaKgEh3S9TWeQsdcxTNW6EbKsCkTXo1etj0Tu_64PwkPgOnWrGlNXxxgROF6NsjqV--nTk_DjKyzsULJ1AixnaFlEndZ4NRlPZZdelVxBES93666bAXzZpfDMpikXJWtyJSu0UBZ6evhzQ3dc9KG2dMlW7Zdui5aA0WquQ35cMfRg3EXSHkdkrfQHVX_ta53QK9W_xFqFLVKKw581kKlxcxYbK5iC30ceAA-Nqp-kInrfdsk9v9zgGDeSwLt', 'Give Shape To Your Dreams. Apply Now!'),
('Computer - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/Computer', 'bing.com/images'),
('Computer science - Wikipedia, the free encyclopedia', 'http://en.wikipedia.org/wiki/Computer_science', 'A computer is a general purpose device that can be programmed to carry out a finite set of arithmetic or logical operations. Since a sequence of operations can be ...'),
('Areas of computer science', 'http://en.wikipedia.org/wiki/Computer_science#Areas_of_computer_science', 'Computer science or computing science (abbreviated CS or CompSci) is the scientific and practical approach to computation and its applications. A computer scientist ...'),
('What is Computer? A Definition From the Webopedia Computer Dictionary', 'http://www.webopedia.com/TERM/C/computer.html', 'What is a Computer? A computer is a programmable machine. The two principal characteristics of a computer are: it responds to a specific set of instructions in a well ...'),
('Computer - Simple English Wikipedia, the free encyclopedia', 'http://simple.wikipedia.org/wiki/Computer', 'A computer is a machine that is able to take information (input), do some work on or make changes to the information, to make new information (output). Computers have ...'),
('History of computers', 'http://simple.wikipedia.org/wiki/Computer#History_of_computers', 'Computer magazine covers all aspects of computer science. For more than 40 years, developers, researchers, and managers have relied on Computer for timely, peer ...'),
('Kinds of computers', 'http://simple.wikipedia.org/wiki/Computer#Kinds_of_computers', 'noun 1. Also called processor. an electronic device designed to accept data, perform prescribed mathematical and logical operations at high speed, and display the ...'),
('Computer | Define Computer at Dictionary.com', 'http://dictionary.reference.com/browse/computer', 'comÂ·putÂ·er (k m-py t r) n. 1. A device that computes, especially a programmable electronic machine that performs high-speed mathematical or logical operations or ...'),
('IEEE Computer Society - Premier Organization of Computer Professionals', 'http://www.computer.org/', '29-10-2012Â Â· A computer is a machine that performs computations according to instructions. Once unwieldy and slow, modern computers can even...'),
('computer - definition of computer by the Free Online Dictionary ...', 'http://www.thefreedictionary.com/computer', 'Give Shape To Your Dreams. Apply Now!'),
('What Is a Computer?', 'http://www.wisegeek.com/what-is-a-computer.htm', 'Powered by 2nd gen IntelÂ® Coreâ„¢ processors. Starting from Rs.30,990'),
('computer.com: The Leading Computer Site on the Net', 'http://computer.com/', 'Craftsmanship Beyond Ordinary. Delivering high performance always'),
('Maths For Kids', 'http://1417515.r.msn.com/?ld=4v3eXSBjjUM29smLl7TgPgdbqZS30skSe8NUXjKvJPb3oEdEcgfvHH7P52FBM4OdrZGpy5g9G11WiaBVAjlrRe4bAi1stLa4Xu6Pjs30lGE4pg94MmT-uBFnuvWs0MoApjuGTsIzOd9UYzzNC4xOKhldA2xoYn6cohA500ZVQBYjUNLLMlSgC3wL7tXTzLZ11-69dr0Vq6cg_iz-M-ZgMaLyysBl1zSOvI5uM2YwQTBa65VrdMtPULlSK-P3Mq_JtpEPMCwYIcHLxCw', 'For Class VI to XII with Edurite. Affordable Prices,Quality Teachers'),
('maths algebra Class VI-X', 'http://1579530.r.msn.com/?ld=4vHuSTkqMjaTV11Z3pCQ-D_b90IuoCwqyQyU9wCpuCmZAOW16mU4UkH3Z2qVpvnSydlmCoUrOCFTFtrNQ82X2zNyl4V9Qt9H2d92QuMyaWrym3sw3D0Km4N1tb1ubniKNjOmselxflOalErSkoZ1Hs_mWcaWZAY_b0aFmX90v3uJCSmTu9j3IlD4Az4QurfAUzJLld_F_OWazISroroW6n6ZKvHHQZrXEh0Jb2_w-DWGi_cK-lbBTwv4WvHrgiq4m77InFk66UWXy_a', 'Learn with animated videos and tests. Study from home. Register free.'),
('Math is Fun - Maths Resources', 'http://www.mathsisfun.com/', 'In English, the noun mathematics takes singular verb forms. It is often shortened to maths or, in English-speaking North America, math. Definitions of mathematics'),
('maths.com', 'http://www.maths.com/', 'Math explained in easy language, plus puzzles, games, quizzes, worksheets and a forum. For K-12 kids, teachers and parents.'),
('Girsl can do maths - if society would only let them, says an education expert', 'http://www.adelaidenow.com.au/news/education/odds-still-stacked-against-maths-girls/story-fn3o6nna-1226524489667', 'maths.com Edited by Dr David Cornelius an Independent Private Maths Tutor with over 25 years of experience and The Secretary of The Association of Tutors in the UK ...'),
('Children born in summer are behind peers in maths: Study', 'http://timesofindia.indiatimes.com/home/science/Children-born-in-summer-are-behind-peers-in-maths-Study/articleshow/17358830.cms', 'bing.com/news'),
('maths - definition of maths by the Free Online Dictionary ...', 'http://www.thefreedictionary.com/maths', 'Get help for maths through pre-recorded lessons for middle, high, senior, secondary school and community college students.'),
('Home Page : nrich.maths.org', 'https://www.plus.maths.org/', 'maths (m ths) n. Chiefly British (used with a sing. verb) Mathematics. maths [mÃ¦Î¸s] n (Mathematics) (functioning as singular) Brit informal short for mathematics US ...'),
('I Love Maths -A complete, Indian site on Maths', 'http://ilovemaths.com/', 'The Millennium Mathematics Project (MMP) is a maths education initiative for ages 5 to 19 and the general public, based at the University of Cambridge and ...'),
('Maths Olympiad', 'http://www.bing.com/search?q=Maths+Olympiad&FORM=QSRE4', 'Free math lessons and math homework help from basic math to algebra, geometry and beyond. Students, teachers, parents, and everyone can find solutions to their math ...'),
('World Maths Day', 'http://www.bing.com/search?q=World+Maths+Day&FORM=QSRE8', 'Cool Math 4 Kids has cool math lessons, cool math games and fun activities. We have free online flash cards to print out, cool math practice games, online calculators ...'),
('Maths For Kids', 'http://1417515.r.msn.com/?ld=4v3eXSBjjUM29smLl7TgPgdbqZS30skSe8NUXjKvJPb3oEdEcgfvHH7P52FBM4OdrZGpy5g9G11WiaBVAjlrRe4bAi1stLa4Xu6Pjs30lGE4pg94MmT-uBFnuvWs0MoApjuGTsIzOd9UYzzNC4xOKhldA2xoYn6cohA500ZVQBYjUNLLMlSgC3wL7tXTzLZ11-69dr0Vq6cg_iz-M-ZgMaLyysBl1zSOvI5uM2YwQTBa65VrdMtPULlSK-P3Mq_JtpEPMCwYIcHLxCw', 'This site basically caters to Indian students of classes 6 to 12 (CBSE, ICSE, ISC and other boards). However, this site contains lot of Math related jokes, puzzles ...'),
('maths algebra Class VI-X', 'http://1579530.r.msn.com/?ld=4vHuSTkqMjaTV11Z3pCQ-D_b90IuoCwqyQyU9wCpuCmZAOW16mU4UkH3Z2qVpvnSydlmCoUrOCFTFtrNQ82X2zNyl4V9Qt9H2d92QuMyaWrym3sw3D0Km4N1tb1ubniKNjOmselxflOalErSkoZ1Hs_mWcaWZAY_b0aFmX90v3uJCSmTu9j3IlD4Az4QurfAUzJLld_F_OWazISroroW6n6ZKvHHQZrXEh0Jb2_w-DWGi_cK-lbBTwv4WvHrgiq4m77InFk66UWXy_a', 'For Class VI to XII with Edurite. Affordable Prices,Quality Teachers'),
('Maths Tutors', 'http://1348940.r.msn.com/?ld=4v5llnHDkrLM1jOdH5nZaOi747JIiPVsm8e7a4c-iYcccQnmAtwpeM4ePWmRrb6QMaCwVWbx6aCHfD0gx5FC-Rc5MI617MdOxvy6G-0Lck86_Pqx3giuk5Oazan8NzGgCTI0I2aL70BU0j6RZe-XUk6e7ky-I0wyKDINMC_4csryFNa_PIiTi_cxwDi_v_DA-qxCKesLxzvJgGF2oSF4eB8OmoMirmiFW0UrHrJbk1EQdler6d-TjztYtV6Y-pBe4yZc1P1MtLnih-e', 'Learn with animated videos and tests. Study from home. Register free.'),
('RSA Animate - Changing Education Paradigms', 'http://www.youtube.com/watch?v=zDZFcDGpL4U', '0'),
('An Education Official Trailer', 'http://www.youtube.com/watch?v=qn9IMe5jmf0', '0'),
('"An Education" Official Trailer!', 'http://www.youtube.com/watch?v=eRbp-dd1QvM', '0'),
('Noam Chomsky - The Purpose of Education', 'http://www.youtube.com/watch?v=DdNAUJWJN08', '0'),
('Education Today and Tomorrow', 'http://www.youtube.com/watch?v=Fnh9q_cQcUE', '0'),
('Education', 'http://www.youtube.com/watch?v=hmgOUrdEcJU', '0'),
('Education in India - BBC', 'http://www.youtube.com/watch?v=aKspt58JbsM', '0'),
('Math Education: An Inconvenient Truth', 'http://www.youtube.com/watch?v=Tr1qee-bTZI', '0'),
('TEDxPhilly - Chris Lehmann - Education is broken', 'http://www.youtube.com/watch?v=tS2IPfWZQM4', '0'),
('Khan Academy: The future of education?', 'http://www.youtube.com/watch?v=zxJgPHM5NYI', '0'),
('We Dont Need No Education', 'http://www.youtube.com/watch?v=lwTpZpwjtIE', '0'),
('Education Evolution', 'http://www.youtube.com/watch?v=eGvl5dg3l2M', '0'),
('CSS Tutorial Pt 1 - Basic Layout', 'http://www.youtube.com/watch?v=H3KESBQTD8k', '0'),
('CSS - Alala (OFFICIAL VIDEO)', 'http://www.youtube.com/watch?v=2cnOvMFnRvs', '0'),
('Learn HTML and CSS Tutorial. Howto make website from scratch', 'http://www.youtube.com/watch?v=GwQMnpUsj8I', '0'),
('Learn CSS (Tutorial) - Basics + Selectors (For Absolute Beginners)', 'http://www.youtube.com/watch?v=Awmx8XlgcaE', '0'),
('Faster HTML and CSS: Layout Engine Internals for Web Developers', 'http://www.youtube.com/watch?v=a2_6bGNZ7bA', '0'),
('What is CSS?', 'http://www.youtube.com/watch?v=R_FOJrxb-vI', '0'),
('Google HTML/CSS/Javascript from the Ground Up Class: CSS Presentation', 'http://www.youtube.com/watch?v=wgvPrzjDfmw', '0'),
('CSS - Move (OFFICIAL VIDEO)', 'http://www.youtube.com/watch?v=E7eq4RFf0Sc', '0'),
('What is CSS? | lynda.com overview', 'http://www.youtube.com/watch?v=q-HVKUFyYtI', '0'),
('CSS - City Grrrl ft. Ssion', 'http://www.youtube.com/watch?v=nfDaLtGEQv4', '0'),
('CSS - Incorporated 2 by ClaYmaN - HD w// Sound', 'http://www.youtube.com/watch?v=o30lcEr49cY', '0'),
('CSS Horizontal Drop Down Menu - 1 of 2', 'http://www.youtube.com/watch?v=yz8dZsmLHQo', '0'),
('Money - Pink Floyd + Lyrics', 'http://www.youtube.com/watch?v=JkhX5W7JoWI', '0'),
('Money - Pink Floyd HD (Studio Version)', 'http://www.youtube.com/watch?v=cpbbuaIA3Ds', '0'),
('How to Make Money Online From Home Every 60 Seconds', 'http://www.youtube.com/watch?v=a2yVkQjpKUc', '0'),
('Money, Banking and the Federal Reserve', 'http://www.youtube.com/watch?v=iYZM58dulPE', '0'),
('Crash Course: Chapter 6 - What is Money? by Chris Martenson', 'http://www.youtube.com/watch?v=U8dq1bH1X6s', '0'),
('The Notorious BIG - "Mo Money Mo Problems"', 'http://www.youtube.com/watch?v=gUhRKVIjJtw', '0'),
('"Money" - Liza Minnelli, Joel Grey', 'http://www.youtube.com/watch?v=rkRIbUT6u7Q', '0'),
('Money as Debt 3 - The Rothschild mafia (Paul Grignon)', 'http://www.youtube.com/watch?v=f6uuAupT4AQ', '0'),
('The Ascent of Money: A Financial History of The World by Niall Ferguson Epsd. 1-5 (Full Documentary)', 'http://www.youtube.com/watch?v=4Xx_5PuLIzc', '0'),
('"What is Money?" with Joseph T. Salerno -- Ron Paul Money Lecture Series, Pt 1/3', 'http://www.youtube.com/watch?v=vowbrq_g5NM', '0'),
('The Drums - Money', 'http://www.youtube.com/watch?v=IqYgNiZdfh4', '0'),
('Money As Debt II: promises unleashed (FULL MOVIE)', 'http://www.youtube.com/watch?v=lsmbWBpnCNk', '0'),
('Hello by Lionel Richie', 'http://www.youtube.com/watch?v=b_ILDFp5DGA', '0'),
('Martin Solveig & Dragonette - Hello (Official Short Video Version HD)', 'http://www.youtube.com/watch?v=kK42LZqO0wA', '0'),
('Karmin - Hello', 'http://www.youtube.com/watch?v=0_I0DBUA_GI', '0'),
('LIONEL RICHIE - HELLO LYRICS', 'http://www.youtube.com/watch?v=62XB9IbMnxQ', '0'),
('Lionel Richie - Hello (Live)', 'http://www.youtube.com/watch?v=AiC7ZX5K9L4', '0'),
('Hello - Lionel Richie', 'http://www.youtube.com/watch?v=Vd85aPZ-QAE', '0'),
('Stafford Brothers - Hello ft. Lil Wayne, Christina Milian', 'http://www.youtube.com/watch?v=EcXrxwCh9Zo', '0'),
('Lionel Richie - Hello [LYRICS]', 'http://www.youtube.com/watch?v=UBYnT8JY7sE', '0'),
('SHINee(Ã¬ÂƒÂ¤Ã¬ÂÂ´Ã«Â‹Âˆ) _ Hello _ MusicVideo', 'http://www.youtube.com/watch?v=skZxb5sBoiU', '0'),
('Say hello to the new Google Maps app', 'http://www.youtube.com/watch?v=oVg7hx3srzo', '0'),
('12 Surprise Eggs SpongeBob Angry Birds Marvel Hello Kitty Disney Barbie Super Mario Power Rangers', 'http://www.youtube.com/watch?v=EmM63z3plGM', '0'),
('Mindless Behavior - Hello', 'http://www.youtube.com/watch?v=6Br9OWh2r-E', '0'),
('Aa Oru Nimisham - Full Movie - Malayalam', 'http://www.youtube.com/watch?v=pEHPOHxCLeU', '0'),
('"Aa Ante Amalapuram" Maximum Video Song (official) Hazel Item Song', 'http://www.youtube.com/watch?v=GAhRuPmD4ps', '0'),
('Don P. - AA Speaker - Aurora, Colorado 1998 - AA Speakers - Alcoholics Anonymous', 'http://www.youtube.com/watch?v=WKgW6Z2rqeQ', '0'),
('Aa Re Pritam Pyare - Rowdy Rathore Official HD Full Song Video Akshay Kumar Sonakshi Prabhudeva', 'http://www.youtube.com/watch?v=e3ddIO8W6V4', '0'),
('Tara B. at an AA speaker meeting, talking about alcoholism recovery', 'http://www.youtube.com/watch?v=efC7My1xmLs', '0'),
('Bob D. "Spiritual Principles in Relationships" AA Speaker 12-Step Recovery', 'http://www.youtube.com/watch?v=_9FshNu8yNs', '0'),
('AA(Ã«ÂÂ”Ã«Â¸Â”Ã¬Â—ÂÃ¬ÂÂ´) DOUBLE A - COME BACK MV', 'http://www.youtube.com/watch?v=J4JmhB65O2I', '0'),
('AA-12 Fully Automatic Shotgun!!!', 'http://www.youtube.com/watch?v=WOoUVeyaY_8', '0'),
('Don P. "Precisely How We Recovered" - AA Speaker - 12-Step "Alcoholism Recovery"', 'http://www.youtube.com/watch?v=0d_alTvpqxI', '0'),
('AA=(aaequal) Ã£Â€ÂŒThe KlockÃ£Â€Â PV', 'http://www.youtube.com/watch?v=evy3CffyKJE', '0'),
('AA grupo sur DOCE PASOS    PRIMER PASO COMPLETO', 'http://www.youtube.com/watch?v=IZXwXuUDWTc', '0'),
('Anthaku Mundu Aa Taruvatha Movie Theatrical Trailer - Sumanth Ashwin, Madhubala, Esha', 'http://www.youtube.com/watch?v=N__81dhDQyU', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `department`, `status`) VALUES
(1, 'Computer', 1),
(2, 'Maths', 1),
(3, 'Electronics', 1),
(4, 'Physics', 1),
(5, 'BT', 1),
(6, 'PD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `uploadir` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `d_image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`d_id`, `category`, `uploadir`, `filename`, `d_image`, `status`) VALUES
(1, 'Ebooks', 'Ebooks/', 'pd.doc', 'd1.jpg', 1),
(2, 'Papers', 'Papers/', 'report.doc', 'd2.jpg', 1),
(3, 'StudyMaterial', 'StudyMaterial/', 'style.css', 'd3.jpg', 1),
(4, 'Papers', 'Papers/', 'tio.doc', 'd4.jpg', 1),
(5, 'Papers', 'Papers/', 'Project.doc', 'p1.jpg', 1),
(6, 'Papers', 'Papers/', 'maths.pdf', 'p2.gif', 1),
(7, 'Papers', 'Papers/', 'ECE.pdf', 'p3.png', 1),
(8, 'Papers', 'Papers/', 'PD.pdf', 'p4.jpg', 1),
(10, 'StudyMaterial', 'StudyMaterial/', 'A.docx', 'University_of_Sydney_Main_Quadrangle.jpg', 1),
(11, 'Ebooks', 'Ebooks/', 'Doc1.docx', 'logo.png', 1),
(12, 'Ebooks', 'Ebooks/', 'Doc1.docx', 'logo.png', 1),
(13, 'Ebooks', 'Ebooks/', 'Doc1.docx', 'logo.png', 1),
(14, 'StudyMaterial', 'StudyMaterial/', 'tio.doc', 'd3.jpg', 1),
(15, 'Ebooks', 'Ebooks/', 'tio.doc', 'Tulips.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_ques` varchar(200) NOT NULL,
  `faq_answer` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_ques`, `faq_answer`, `status`) VALUES
(1, 'How can we ask queries to the teacher?', 'First you have to register yourself using register link and then after login you will find link to ask . ', 1),
(2, 'From where to download the study material?', 'Go to the Menu Bar. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hometext`
--

CREATE TABLE `hometext` (
  `htid` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(20000) NOT NULL,
  PRIMARY KEY (`htid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hometext`
--

INSERT INTO `hometext` (`htid`, `text`) VALUES
(1, 'High School was established in 1994 in Kolkata and later branched out to Delhi. It has grown with a view to promote Contemporary Indian Art. The gallery has been continuously involved in the recognition and promotion of emerging talent, creating an awareness of art amongst old and new collectors by showcasing good quality art works and providing a platform for interaction between artists and collectors. The gallery is involved in the promotion of upcoming and emerging artists whose work, apart from being of high quality, is affordable and holds good value for money for the collectors as well as provides an adequate reward for the artists’creative talent. On the other hand, the gallery has also been sourcing works of senior artists viz.M.F.Husain, F.N.Souza, Tyeb Mehta, K.H.Ara and others, Bengal School and National Treasure artists viz.Amrita Shergil, Raja Ravi Varma,Nandalal Bose, Jamini Roy, Sailoz Mookherjea, to name a few, for their collector clientele.');

-- --------------------------------------------------------

--
-- Table structure for table `menubar`
--

CREATE TABLE `menubar` (
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `menulink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menubar`
--

INSERT INTO `menubar` (`mid`, `name`, `desc`, `menulink`) VALUES
(1, 'Home', 'High School Education...Explore The College Universty through Fully Optimized Webshow and Find Out Whats Latest In All Sections!!!', 'index.php'),
(2, 'Forum', 'Downloadable Stuff Books , StudyMaterial , Papers , Previous Year Examination Schemas And Many More Just By Becoming A Member. !!', 'main_forum.php'),
(3, 'Downloads', 'Downloadable Stuff Books , StudyMaterial , Papers , Previous Year Examination Schemas And Many More Just By Becoming A Member. !!', 'download.php'),
(4, 'About Us', 'About us ! Who We Are ! Who is the developing team behind the project list of the developers of the website and content management !!', 'about.php'),
(5, 'TNC', 'Read all The Terms And conditions Of The website . Know Your Rights Find Whats There In Your Universty High School Education !!', 'tnc.php'),
(6, 'Feedback', 'Feedback !! Give Us A Feed.You Will be surely Replied Back By The Developers team Tell us You Motive Behind Visiting The Site !!', 'feed.php'),
(7, 'Contact Us', 'Contact the Developing Team Or The Manage. Any Formal Request will Be Entertained Properly And You Will Be Replied Soon Surely.!!', 'contact.php'),
(8, 'Books', 'view all the books by crawling', 'books.php'),
(9, 'Shoping', 'buy books available in stocks', 'buy.php'),
(10, 'Search', 'searaerearearfea', 'webSearch.php'),
(11, 'WebSearch', 'high school search ', 'search.php'),
(12, 'Videos', 'hello world', 'video.php'),
(13, 'News', 'news.php', 'news.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(500) NOT NULL,
  `news_img` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`, `news_img`, `date`, `status`) VALUES
(1, 'New Study Material Uploaded On Server', 'n1.jpg', '2010-10-15', 1),
(2, 'BP lathi Available on Downloads', 'n2.jpg', '2012-10-18', 1),
(3, 'New Faculty for Physics and Computer Announced', 'n3.jpg', '2012-10-31', 1),
(4, 'Science And fiction Novels Available', 'n4.jpg', '2012-10-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `dept_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `likes` int(20) NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `dept_id` (`dept_id`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `question`, `dept_id`, `s_id`, `date`, `status`, `likes`) VALUES
(1, 'Billy ate 1/4 pizzas and John ate 2/3 pizzas. How much  pizza did John eat ?', 1, 1, '2012-10-06 15:47:35', 1, 41),
(2, 'Order from least to greatest the fractions 3/5 , 7/6 , 1/3 , 4/9. \r\n', 1, 2, '2012-10-06 15:47:54', 1, 14),
(3, 'To have a + 1 3/4 = 2, a must be equal to ?', 1, 3, '2012-10-06 15:54:48', 1, 14),
(4, 'what is probablity theorem?', 1, 1, '2012-10-18 04:47:42', 1, 14),
(5, 'what is the name of reneys theorem,give two example?', 1, 5, '2012-10-08 04:48:19', 1, 14),
(6, 'The Foundational Problems of Quantum Mechanics?', 2, 1, '2012-10-08 04:47:42', 1, 22),
(7, 'It is easier to roll a stone up a sloping road than to lift it vertical upwards because?', 2, 6, '2012-10-08 04:48:19', 1, 22),
(8, 'Stars appears to move from east to west because?', 2, 7, '2012-10-09 04:49:49', 1, 22),
(9, 'On a rainy day, small oil films on water show brilliant colours. This is due to ?', 2, 8, '2012-11-21 20:21:21', 1, 22),
(10, 'The Unification of Particles and Forces ?', 2, 10, '2012-11-21 20:21:37', 1, 22),
(11, ' Name the three leads of a common transistor ?', 3, 11, '2012-11-21 20:25:04', 1, 11),
(12, 'Connecting a lead from the negative to the positive of a battery will produce:?', 3, 0, '2012-11-21 20:25:13', 1, 11),
(13, 'What is the approximate characteristic voltage that develops across a red LED?', 3, 12, '2012-11-22 00:17:30', 1, 11),
(14, 'If two resistors are placed in series, is the final resistance:?', 3, 13, '2012-11-22 00:24:35', 1, 11),
(15, 'Which is not a "common" value of resistance:?', 3, 8, '2012-11-22 00:33:25', 1, 11),
(16, 'How is mitochondrial DNA inherited? ', 4, 9, '2012-11-22 00:33:59', 1, 12),
(17, 'Why not DNA be used for relationship between two species of bacteria? ', 4, 15, '2012-11-22 00:34:42', 1, 33),
(18, 'Which of the following can be used to link molecular data with real time? ', 4, 16, '2012-11-22 00:34:55', 1, 12),
(19, 'What are molecular clocks? ', 4, 18, '2012-11-22 00:36:43', 1, 12),
(20, 'what is cells explain your answer ?', 4, 20, '2012-11-22 00:37:04', 1, 12),
(21, ' The computer can read but not change the information stored in:?', 5, 18, '2012-11-22 00:38:09', 1, 9),
(22, 'The binary system used by a digital computer consists of:?', 5, 21, '2012-11-21 00:45:53', 1, 9),
(23, 'What is a likely outcome of good computer file management techniques? ', 5, 3, '2012-11-22 01:12:43', 1, 9),
(24, 'What technology of memory is Cache RAM usually?', 5, 5, '2012-11-23 20:02:45', 1, 9),
(25, 'Which is usually faster in a PC system: DRAM or SDRAM?', 5, 11, '2012-11-24 16:48:29', 1, 9),
(26, 'Where is your BIOS stored?', 6, 14, '2012-11-15 23:43:24', 1, 7),
(27, 'where does your PC store your programs when the power is off?', 6, 21, '2012-11-23 03:12:15', 1, 7),
(28, ' What does a modem do?', 6, 12, '2012-11-22 03:12:32', 1, 7),
(29, 'How many bits is 1K Byte?', 6, 5, '2012-11-15 03:13:56', 1, 7),
(30, 'Which is usually faster in a PC system: RDRAM or SDRAM?', 6, 4, '2012-11-16 03:14:14', 1, 7),
(31, 'Heloo what is the full form of STD ', 5, 0, '2012-11-26 01:09:41', 1, 4),
(32, 'wher are you ? ?', 2, 0, '2012-11-26 22:29:26', 1, 8),
(33, 'What is the full form of DSB SC ?', 6, 0, '2012-11-27 00:34:51', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `m_no` double NOT NULL,
  `e_mail` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `pincode` double NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ut_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`r_id`),
  KEY `ut_id` (`ut_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `first_name`, `last_name`, `age`, `gender`, `dob`, `m_no`, `e_mail`, `address`, `city`, `state`, `country`, `pincode`, `username`, `password`, `ut_id`, `status`) VALUES
(1, 'shivam', 'bansal', 20, 'male', '2012-10-19', 9999999999, 'shivam5992@gmail.com', 'sasd as a  sss', 'chd', 'har', 'india', 134203, 'shivam', 'qwerty', 2, 1),
(21, 'tanmay', 'sinha', 22, 'male', '2012-11-04', 2342343243, 'q@s.com', 'q', 'q', 'q', 'q', 121212, 'tanmay', 'tanmaysinha', 1, 1),
(22, 'anish', 'aggarwal', 25, 'male', '2012-11-16', 4308954308, 'r@de.com', 'q', 'q', 'q', 'q', 123123, 'anish', 'anishh5', 2, 1),
(18, 'mayank', 'bhola', 18, 'female', '2012-11-24', 4545423532, 'a@gmail.com', 'a', 'a', 'a', 'a', 111, 'mayank', 'bholababa', 1, 1),
(19, 'rohit', 'jain', 22, 'female', '2012-11-23', 2343244254, 'bshivamb@yahoo.com', 'z', 'z', 'z', 'z', 324234, 'rohit', 'jainbro', 1, 1),
(20, 'varun', 'malhotra', 24, 'male', '2012-11-25', 3282375982, 'a@g.com', 'r', 'r', 'r', 'r', 234324, 'varun', 'malhotra', 1, 1),
(16, 'ayush', 'singh', 25, 'male', '2012-11-16', 8245798427, 'ayush@gmail.com', 'abcd', 'noida', 'hry', 'ind', 131, 'ayush', 'singh0111', 1, 1),
(17, 'yogesh', 'vijay', 19, 'male', '2012-11-08', 2452454233, 'annigargi@gmail.com', 'abc', 'abc', 'abc', 'abc', 234324, 'yogesh', 'vijay91', 1, 1),
(23, 'aaksah', 'sharma', 17, 'male', '2012-11-20', 9987495430, 'aakashsharma@gmail.com', 'jjit 62 noida', 'noida', 'up', 'india', 895438, 'aakash', 'aakash', 1, 1),
(24, 'ayush', 'singh', 18, 'male', '2012-11-06', 7832583920, 'ayushsingh@gmail.com', 'jiit sec 62 noida ncr', 'noida', 'UP', 'india', 387584, 'ayushsingh', 'ayushsingh', 1, 1),
(25, 'sahil', 'jindal', 20, 'male', '2012-07-28', 8923743298, 'sahiljindal@gmail.com', 'ihgikdfndsk', 'nsdgk', 'sdngjsd', 'vndmsv', 392759, 'sahil', 'sahil1', 1, 1),
(26, 'himanshu', 'sharma', 21, 'male', '2012-11-07', 9436543543, 'himanshusharma@gmail.com', '35bfgjdsg', 'dhgdjghjg', 'hgddjsghjk', 'gfjkdfgdjkf', 539457, 'himanshu', 'himanshu', 1, 1),
(27, 'manoj', 'sonkar', 19, 'male', '2012-11-15', 984325, 'manojsonkar@gmail.com', 'wtrw', 'igfehrigure', 'oegtireogu', 'reie', 328523, 'manoj', 'manoj1', 1, 1),
(28, 'vishal', 'singh', 20, 'male', '2012-10-28', 9398534965, 'vishal@gmail.com', 'iiregtyrei', 'khetikwgtih', 'heighreig', 'ngekjghrek', 397594, 'vishal', 'vishal', 1, 1),
(29, 'anirudh', 'goel', 21, 'male', '2012-11-07', 9834535734, 'anirudh@gmail.com', 'hdfghj', 'sdsdkghkq', 'hjbfdkjbh', 'bgfdjk', 485374, 'anirudh', 'anirudh', 1, 1),
(30, 'harsh', 'bhatia', 21, 'male', '2012-11-13', 9234823823, 'theharsh@gmail.com', 'hfsdufhj', 'hgjekghe', 'jfhjsfhs', 'fjewf', 395893, 'harsh', 'harsh1', 1, 1),
(31, 'mohit', 'sharma', 24, 'male', '2012-11-12', 7834568436, 'mohitsharma@gmail.com', 'dhgsdih', 'ehegieri', 'hdgkd', 'bnruhb', 384375, 'mohit', 'mohit1', 1, 1),
(32, 'sumit', 'sonal', 23, 'male', '2012-11-21', 9823945972, 'sumitsonal@gmail.com', 'fhjfjk', 'hdjgdsjgh', 'iegwygtwhiyugt', 'gdjgd', 349874, 'sumit', 'sumit1', 1, 1),
(33, 'neeraj', 'chaudhary', 25, 'male', '2012-11-19', 9832564328, 'niraj123@gmail.com', 'grjg', 'hrgrjkgh', 'hdgdfkjgh', 'jhgkdfhg', 934754, 'neeraj', 'neeraj', 1, 1),
(34, 'pratyush', 'shukla', 23, 'male', '2012-11-29', 8873537538, 'pratyush123@gmail.com', 'gfdgkfdk', 'bfkdhgkd1', 'hnbkfdhgdk', 'fkdhg', 437873, 'pratyush', 'pratyush', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `link` varchar(300) NOT NULL,
  `result` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--


-- --------------------------------------------------------

--
-- Table structure for table `secure`
--

CREATE TABLE `secure` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `m_no` double NOT NULL,
  `e_mail` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `pincode` double NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` varchar(300) NOT NULL,
  `ut_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`r_id`),
  KEY `ut_id` (`ut_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `secure`
--

INSERT INTO `secure` (`r_id`, `first_name`, `last_name`, `age`, `gender`, `dob`, `m_no`, `e_mail`, `address`, `city`, `state`, `country`, `pincode`, `username`, `password`, `salt`, `ut_id`, `status`) VALUES
(37, 'sdgsdfsd', 'fdsfsdfd', 17, 'male', '2012-11-17', 3425324324, 'dfbdvb@dc.com', 'dsfdsfd', 'sfdsfds', 'fdsfdsfsdfds', 'fdsfds', 324324, 'yogesh', 'c5174f7bccbec3a43f9becfed1748557587b79ec82934d09c', 'c5174f7bc', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`shop_id`),
  KEY `book_id` (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `book_id`, `price`, `status`) VALUES
(1, 1, 250, 1),
(2, 2, 300, 1),
(3, 1, 250, 1),
(4, 1, 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`img_id`, `image`, `location`, `status`) VALUES
(1, 's1.jpg', 'main_forum.php', 1),
(2, 's5.jpg', 'prog.php', 1),
(3, 's3.jpg', 'fac.php', 1),
(4, 's4.jpg', 'contactus.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`s_id`),
  KEY `b_id` (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `b_id`, `status`) VALUES
(1, 0, 1),
(2, 4, 1),
(3, 2, 1),
(4, 1, 1),
(5, 2, 1),
(6, 2, 1),
(7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `dept_id`, `status`, `r_id`) VALUES
(1, 6, 1, 21),
(2, 5, 1, 20),
(3, 4, 1, 19),
(4, 3, 1, 18),
(21, 2, 1, 0),
(18, 6, 1, 34),
(17, 6, 1, 33),
(16, 5, 1, 32),
(15, 5, 1, 31),
(14, 4, 1, 30),
(13, 4, 1, 29),
(12, 3, 1, 28),
(11, 3, 1, 27),
(10, 2, 1, 26),
(9, 2, 1, 25),
(8, 1, 1, 24),
(7, 1, 1, 23),
(6, 1, 1, 16),
(5, 2, 1, 17),
(22, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `till`
--

CREATE TABLE `till` (
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `till`
--

INSERT INTO `till` (`name`, `price`, `id`) VALUES
('0', 0, 1),
('DBMS', 0, 2),
('Number_system', 0, 3),
('Number_system', 0, 4),
('Number_system', 0, 5),
('OS', 140, 6),
('Oops', 0, 7),
('Zology', 220, 8),
('Zology', 220, 9),
('Python', 250, 10),
('Cells', 250, 11),
('Cells', 250, 12),
('.NET', 210, 13),
('OS', 140, 14),
('HTML', 100, 15),
('Clang', 140, 16),
('Botany', 100, 17),
('Webtech', 100, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tmh`
--

CREATE TABLE `tmh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tmh`
--

INSERT INTO `tmh` (`id`, `img`, `link`) VALUES
(1, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070707078.jpg', 'http://www.tmhshop.com/computer-science-engineering/quantum-computing/'),
(2, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070140684_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/scripting-languages/'),
(3, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070677265_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/service-oriented-architecture/'),
(4, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070667334_2.jpg', 'http://www.tmhshop.com/computer-science-engineering/simulation-modelling/'),
(5, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070147256_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/software-engineering/'),
(6, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070598973_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/software-project-management/'),
(7, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070142596_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/sql/'),
(8, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070612044_2.jpg', 'http://www.tmhshop.com/computer-science-engineering/system-analysis-design/'),
(9, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/placeholder/default/tmh_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/system-software-programming/'),
(10, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070264960_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/tcp-ip/'),
(11, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070446878_2.jpg', 'http://www.tmhshop.com/computer-science-engineering/unix/'),
(12, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070648258_2.jpg', 'http://www.tmhshop.com/computer-science-engineering/vhdl/'),
(13, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070682672_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/virtualization/'),
(14, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070147249_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/visual-programming/'),
(15, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070260474_2.jpg', 'http://www.tmhshop.com/computer-science-engineering/web-engineering/'),
(16, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070593787_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/web-technology/'),
(17, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070248588_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/windows/'),
(18, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070447257_1.jpg', 'http://www.tmhshop.com/computer-science-engineering/xml/'),
(19, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780071077699.jpg', 'http://www.tmhshop.com/computer-science-engineering/system-software-programming-1/'),
(20, 'http://www.tmhshop.com/media/catalog/product/cache/1/small_image/100x125/9df78eab33525d08d6e5fb8d27136e95/9/7/9780070141704.jpg', 'http://www.tmhshop.com/computer-science-engineering/digital-electronics/');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `ut_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ut_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ut_id`, `user_type`, `status`) VALUES
(1, 'Teacher', 1),
(2, 'Student', 1);
