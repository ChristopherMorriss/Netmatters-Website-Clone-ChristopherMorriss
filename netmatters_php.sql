-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 12:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `your_name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `your_message` varchar(200) NOT NULL,
  `marketing` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`your_name`, `company`, `email`, `telephone`, `your_message`, `marketing`) VALUES
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', '', 'dd', 'd', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
('d', 'game', 'hh@kk.com', '909090909', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('j', '', 'k@k.', 'l', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('j', '', 'k@k.', 'l', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('j', '', 'k@k.', 'l', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('pop', '', 'hh@kk.co', '0800 023 2675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('pop', '', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('f', 'game', 'hh@kk.com', '07222 555555', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('f', 'game', 'hh@kk.com', '07222 555555', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lpplp', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lpplp', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lpplp', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lppop', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lppopq', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lppopq', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('lppopq', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232674', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232674', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232674', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232674', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('DROP TABLE johnny', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('johnny', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('johnny', 'games', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('johnny', 'games', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('johnny', 'games', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('name', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('namei', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('namei', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('namei', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('kflfdjhog', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog@#{}]&pound;4%&lt;/script&g', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog@#{}]&pound;4%week&lt;/scri', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog@#{}]&pound;4%week&lt;/scri', 'game', 'hh@kk.com', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 1),
('&lt;script&gt;kflfdjhog&lt;/script&gt;', 'game', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 1),
('h', 'game', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('h', 'game', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('h', 'gamejklj', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('h', 'hgamejklj', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0),
('h', 'hgamejklj', 'hh@kk.co', '08000232675', 'Hi, I am interested in discussing a Our Offices solution,\r\n                                could you please give me a call or send an email?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_article`
--

CREATE TABLE `news_article` (
  `id` varchar(30) NOT NULL,
  `category` varchar(200) NOT NULL,
  `article_image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author_description` varchar(500) NOT NULL,
  `author` varchar(200) NOT NULL,
  `author_image` varchar(200) NOT NULL,
  `article_date` varchar(30) NOT NULL DEFAULT '1st January 2000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_article`
--

INSERT INTO `news_article` (`id`, `category`, `article_image`, `title`, `author_description`, `author`, `author_image`, `article_date`) VALUES
('', '<a href=\'#\' class=\'btn blue-btn img-btn\' type=\'category-tag\'>Careers</a>', '<a href=\'#\' class=\'img-news\'><img src=\'img/slt-news.webp\' alt=\'2nd Line Technician\'></a>', '<div class=\'article-title news-title\'><h3 class=\'blue-text\'>2nd Line Technician</h3><span class=\'read-time\'>- 4 Minute Read</span></div>', '<div class=\'article-info\'>\r\n                             <p>Salary Range £28k-£36k + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location Wymondh...</p>\r\n                               <a href=\'#\' class=\'btn blue-btn read-btn\'>Read More</a>\r\n                            </div>', '<strong class=\'light-black\'>Posted By Rebecca Moore</strong>', '<div class=\'img-footer\'><img src=\'img/rm.png\' alt=\'rm-photo\'></div>', '<br>9th May 2024'),
('', '<a href=\'#\' class=\'btn green-btn img-btn\'>Case Studies</a>', '<a href=\'#\' class=\'img-news\'><img src=\'img/ams-news.webp\' alt=\'Abel\'s Moving Service\'></a>', '<h3 class=\'green-text news-title\'>Moving Forward: Proactive Digital Marketing with Abel\'s Moving Service</h3>', '<div class=\'article-info\'>\r\n                            <p>Who are abels moving Service? Abel\'s Moving Services is a high-end removal company with a rich hist...</p>\r\n                            <a href=\'#\' class=\'btn green-btn read-btn\'>Read More</a>\r\n                        </div>', '<strong class=\'light-black\'>Posted By Netmatters</strong>', '<div class=\'img-footer\'><img src=\'img/nm.png\' alt=\'netmatters-logo\'></div>', '<br>22nd May 2024'),
('', '<a href=\'#\' class=\'btn dred-btn img-btn\'>Careers</a>', '<a href=\'#\' class=\'img-news\'><img src=\'img/jtt-news.webp\' alt=\'Junior Telecoms Technician\'></a>', '<h3 class=\'red-text news-title\'>Junior Telecoms Technician</h3>', '<div class=\'article-info\'>\r\n                                <p>Salary Range £25000 - £28000 per annum Hours 40 hours per week, Monday - Friday Location Wymondham...</p>\r\n                                <a href=\'#\' class=\'btn dred-btn read-btn\'>Read More</a>\r\n                            </div>', '<strong class=\'light-black\'>Posted By Bethany Shakespeare</strong>', '<div class=\'img-footer\'><img src=\'img/bs.png\' alt=\'netmatters-logo\'></div>', '<br>16th May 2024');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
