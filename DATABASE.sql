-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 03:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `escae`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `aboutus_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text,
  `image` text NOT NULL,
  `short_about` varchar(1000) NOT NULL,
  `course` varchar(3000) NOT NULL,
  `gallery` varchar(3000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `name`, `about`, `image`, `short_about`, `course`, `gallery`) VALUES
(1, 'ItrXddcJMgo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'http://localhost/newblog//cdn/aboutus/IMG_20170613_180016_424.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur... Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur... Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur... Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur...');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `image` text,
  `link` text,
  `code` text,
  `ad_location_id` int(11) DEFAULT NULL,
  `type` enum('code','image') DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `title`, `image`, `link`, `code`, `ad_location_id`, `type`, `created`) VALUES
(7, 'Good', NULL, NULL, '<!-- Adtall - Ad Display Code -->\r\n<script data-cfasync="false" type="text/javascript" src="//www.adtall.com/display/items.php?822&522&728&90&0"></script>\r\n<!-- Adtall - Ad Display Code -->', 3, NULL, '2018-08-07 23:09:57'),
(8, '300 x 250', NULL, NULL, '<!-- Adtall - Ad Display Code -->\r\n<script data-cfasync="false" type="text/javascript" src="//www.adtall.com/display/items.php?821&522&300&250&0"></script>\r\n<!-- Adtall - Ad Display Code -->', 2, NULL, '2018-08-12 12:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `ad_locations`
--

CREATE TABLE IF NOT EXISTS `ad_locations` (
  `ad_location_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_locations`
--

INSERT INTO `ad_locations` (`ad_location_id`, `name`) VALUES
(1, 'SideBar'),
(2, 'Home ');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `image` text,
  `slider` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `slider`, `datetime`, `category_id`) VALUES
(21, '5 Reasons Why Live Chat is good for Your Business', '<p>5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business&nbsp; 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business</p>\r\n\r\n<p>5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business&nbsp; 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business</p>', 'http://localhost/escae//cdn/blog/Blessing_2_001.jpg', NULL, '2018-10-31 18:10:59', 0),
(22, 'consectetuer adipiscing elit.', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>', 'http://localhost/escae//cdn/blog/SAM_0754.JPG', NULL, '2018-10-31 19:07:38', 0),
(23, 'Chat is good for Your Business', '<p>Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business</p>\r\n\r\n<p>Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business</p>\r\n\r\n<p>Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business 5 Reasons Why Live Chat is good for Your Business</p>', 'http://localhost/escae//cdn/blog/banner1.jpg', NULL, '2018-12-14 19:37:01', 0),
(24, 'Elementor Pro v2.2.5 - Live Form Editor', '<p>Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>. Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>.</p>\r\n\r\n<p>Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>. Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>. Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>. Next, click on <strong>App Review</strong> on the left navigation bar. Near the top of the page under <strong>Make (Your App Name) App public?</strong> click to move the slider to <strong>Yes</strong>.</p>', 'http://localhost/escae//cdn/blog/best-mens-shoes-footwear-street-style-2.jpg', NULL, '2018-12-14 20:29:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `menu` int(11) DEFAULT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `menu`, `description`) VALUES
(16, 'Postgraduate', NULL, ''),
(17, 'Undergraduate', NULL, '<p>What is the glory of God? On a number of occasions scripture records that the glory of the Lord appeared in a cloud. However, the cloud itself is not the glory of God. God appears in the cloud to hide man from his glory; the cloud is a protection.</p>'),
(18, 'Short Courses', NULL, '<p>What is the glory of God? On a number of occasions scripture records that the glory of the Lord appeared in a cloud. However, the cloud itself is not the glory of God. God appears in the cloud to hide man from his glory; the cloud is a protection.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `code` varchar(100) NOT NULL,
  `category_id` varchar(500) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `duration` varchar(300) NOT NULL,
  `lecturar` varchar(300) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `code`, `category_id`, `description`, `duration`, `lecturar`, `datetime`) VALUES
(1, 'Computer Science', 'CSE', '17', '<p>Update CourseUpdate CourseUpdate CourseUpdate CourseUpdate Course</p>', '3years', 'Dr. James John', '2018-10-31 17:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `datetime`, `date`) VALUES
(1, 'Simple Food Website in PHP', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>', '2018-10-31 18:06:46', '2018-10-18'),
(2, 'Lorem ipsum dolor sit amet, consectetuer', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>\n\n<p>&nbsp;</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>', '2018-10-31 19:05:29', '2018-11-28'),
(3, 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Lorem ipsum dolor sit amet consectetuer adipiscing elit.</p>\r\n\r\n<p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem</p>', '2018-10-31 19:05:52', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `faq_id` int(11) NOT NULL,
  `question` text,
  `answer` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `question`, `answer`) VALUES
(1, 'The standard Lorem Ipsum passage, used since the 1500s', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'),
(5, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(6, 'Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` longtext
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `content`) VALUES
(1, 'Privacy', '<h2>Welcome to marocms</h2>\r\n\r\n<p>1. Hi, we&rsquo;re Marocms&nbsp;and welcome! We&rsquo;re happy to have you here and we hope you enjoy your stay. When we say &lsquo;<strong>we</strong>&rsquo;, &lsquo;<strong>us</strong>&rsquo; or &lsquo;<strong>elmanawy</strong>&rsquo; it&rsquo;s because that&rsquo;s who we are and we own and run the <strong>El-Manawy</strong>&nbsp;sites.</p>\r\n\r\n<p>2. Envato&rsquo;s ecosystem of digital marketplaces helps millions of people around the world get creative and earn online. When you create an account and accept these terms you become a&nbsp;<strong>member</strong>&nbsp;of our community. You will have&nbsp;that will allow you to buy and sell&nbsp;<strong>items</strong>&nbsp;like the ones found on the Envato Market sites and make other related transactions. You can also buy items on Envato Market as a&nbsp;<strong>Guest</strong>.</p>\r\n\r\n<p>3. The Envato Market sites are platforms that allow members to buy and sell licenses to use digital items like website themes, production music, motion graphics project files, software code, vectors, images and much, much more. On Envato Market, buyers and authors (sellers) transact with each other directly and we provide the platform to allow the transactions to happen. If you have an Envato Makret account, any transactions are logged on your member&rsquo;s statement, which records the payments made by you to authors via Envato Market (as a&nbsp;<strong>buyer</strong>) and by buyers via Envato Market to you (as an&nbsp;<strong>author</strong>). If you buy items as a Guest, then you will be emailed details of those payments.</p>\r\n\r\n<p>4. The items on Envato Market are owned by the authors, not by us. The items on Envato Market are uploaded at the direction of the author. We provide a platform; we do not take ownership of the items.</p>\r\n\r\n<p>5. During your time with us you agree to follow the ground rules outlined in these terms so please read and understand them. If you don&rsquo;t accept the terms then we&rsquo;ll be sad, but you will need to leave because your presence on and use of the Envato Market sites is conditional on your acceptance to be bound by these terms, the&nbsp;<a href="https://envato.com/privacy">Privacy Policy</a>&nbsp;and the&nbsp;<a href="https://themeforest.net/legal/acceptable_use_policy">Acceptable Use Policy</a>&nbsp;whether you become a member or not.</p>\r\n\r\n<h2>How browsing and membership works</h2>\r\n\r\n<p>6.&nbsp;<strong>Browsing</strong>: You need to be 13 years or over to browse the Envato Market sites. We don&rsquo;t knowingly collect any information from anyone aged 13 or under. When browsing the sites you agree to follow our guidelines or instructions and keep in mind that these terms apply to any use of our Envato Market sites whether or not you&rsquo;re a member.</p>\r\n\r\n<h3>Membership</h3>\r\n\r\n<p>7.&nbsp;<strong>Age</strong>: You need to be 18 years or over to become a member or to buy items as a Guest. If you&rsquo;re under 18 you will need to get a parent or guardian to buy items as a Guest or use the account of a parent or legal guardian who is at least 18 years of age, with their permission, and this adult will be responsible for all your activities.</p>\r\n\r\n<p>8.&nbsp;<strong>Envato Account</strong>: Membership is free. When you become a member you get an Envato Market account that is accessible from any of our Envato Market sites (and is also your Envato account for other Envato services). Your membership will allow you to &lsquo;buy&rsquo; (license) items from authors, participate in our online forums, and generally contribute to our ecosystem of Envato Market sites that help people get creative. Membership also gives you the opportunity to become an author (see&nbsp;<a href="https://themeforest.net/legal/market?_ga=2.62858988.1166415882.1497802320-1861897004.1493907713#becoming-an-author"><strong>section 30 &ndash; Becoming an Author</strong></a>) or earn referral income (see&nbsp;<a href="https://themeforest.net/legal/market?_ga=2.62858988.1166415882.1497802320-1861897004.1493907713#referrals"><strong>section 10 &ndash; Referrals</strong></a>).</p>\r\n\r\n<p>9.&nbsp;<strong>Guest Checkout</strong>: You may purchase an item from any of our Envato Market sites as a Guest. Unless otherwise stated, these terms and conditions apply to Guests in the same way they apply to buyers who have an Envato Market account. Guests don&rsquo;t receive an Envato Market account, but can of course register for one at any time. If you buy items as a Guest, your access to our ecosystem will be limited.</p>\r\n\r\n<p>10.&nbsp;<strong>Your responsibility</strong>: You promise that information you give us is true, accurate and complete and, if you sign up for an Envato Market account, that you will keep your account information up-to-date (including a current email address). Your membership is not transferrable. You are responsible for any use of the Envato Market sites including any activity that occurs in conjunction with your username and password, if you have an Envato Market account, so keep your password secure and don&rsquo;t let any other person use your username or password. If you realise there&rsquo;s any unauthorized use of your password or any breach of security you need to let us know immediately.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `partner_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `name`, `image`) VALUES
(1, 'client 2', 'https://elmanawy.info/demo/marocms/cdn/partners/client2.png'),
(2, 'client 1', 'https://elmanawy.info/demo/marocms/cdn/partners/client1.png'),
(4, 'client 3', 'https://elmanawy.info/demo/marocms/cdn/partners/client3.png'),
(5, 'client 4', 'https://elmanawy.info/demo/marocms/cdn/partners/client4.png'),
(6, 'client 5', 'https://elmanawy.info/demo/marocms/cdn/partners/client5.png'),
(7, 'client7', 'https://elmanawy.info/demo/marocms/cdn/partners/client7.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `image` text,
  `service_id` int(11) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `image`, `service_id`, `link`) VALUES
(16, 'Project 1', 'https://elmanawy.info/demo/marocms/cdn/projects/my-neighbor-totoro-poster-variant-olly-moss-mondo.jpg', 5, 'https://elmanawy.info'),
(17, 'projects 2', 'https://elmanawy.info/demo/marocms/cdn/projects/poster-tatubola1_800.jpg', 5, 'https://elmanawy.info'),
(18, 'Project3', 'https://elmanawy.info/demo/marocms/cdn/projects/Reinvented-Disney-Posters-by-Mondo14.jpg', 5, 'https://elmanawy.info'),
(19, 'Project 4', 'https://elmanawy.info/demo/marocms/cdn/projects/josh_mirman_wordy-mario-poster01.jpg', 5, 'https://elmanawy.info'),
(38, 'logo1', 'https://elmanawy.info/demo/marocms//cdn/projects/f274526497708df0c23928ae60f8d70b.png', 4, 'https://elmanawy.info'),
(39, 'logo2', 'https://elmanawy.info/demo/marocms//cdn/projects/Starbucks_logo_2011.png', 4, 'https://elmanawy.info'),
(40, 'logo3', 'https://elmanawy.info/demo/marocms//cdn/projects/new-google-favicon-logo.png', 4, 'https://elmanawy.info'),
(41, 'logo4', 'https://elmanawy.info/demo/marocms//cdn/projects/Manchester_United_logo.png', 4, 'https://elmanawy.info'),
(42, 'logo6', 'https://elmanawy.info/demo/marocms//cdn/projects/Huawei.png', 4, 'https://elmanawy.info'),
(43, 'logo5', 'https://elmanawy.info/demo/marocms//cdn/projects/official-burger-king-logo.png', 4, 'https://elmanawy.info');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `benfits` text,
  `how_work` text
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `description`, `image`, `category_id`, `benfits`, `how_work`) VALUES
(4, 'Logos', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/Web-Design-Vs-Web-Development-Feature_1290x688_KL.jpg', 3, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(5, 'Poster designs', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit.\r\n\r\nYour awesome business needs an awesome logo.\r\n\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\n\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/modern-poster-in-abstract-style_23-2147507397.jpg', 3, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(6, 'Mobile app (IOS)', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/ios-apps.png', 2, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(7, 'Mobile App (Android)', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/pic-android.jpg', 2, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(8, 'Banners', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/landing-page-banner-stands-1.png', 3, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(9, 'Web Designing', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/responsive-web-design.png', 1, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files'),
(10, 'Web Development', 'Your logo is the hub around which you build your brand, and as such really is one of the most important pieces in your marketing kit,Your awesome business needs an awesome logo.\r\nWhat is it that makes a logo awesome? We know the answer to that question – great logo design is our job!\r\nIf you would like to find out, just follow along…', 'https://elmanawy.info/demo/marocms/cdn/services/Web-Design-Vs-Web-Development-Feature_1290x688_KL1.jpg', 1, 'A great is simple\r\nA great logo is unique\r\nA great logo is relevant\r\nA great logo is adaptable\r\nA great logo is memorable', 'Learn logo 101\r\nEstablish your own design process\r\nAsk the right questions\r\nPrice your work accordingly\r\nLearn from others\r\nMake use of the resources\r\nChoose the right font\r\nAvoid the clichÃ©s\r\nLimit the concepts sent\r\nDeliver the correct files');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `key` varchar(100) NOT NULL,
  `value` varchar(3000) DEFAULT NULL,
  `default_value` text,
  `required` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`, `default_value`, `required`) VALUES
('address', 'Lagos, Nigeria', NULL, 0),
('copyright', '© Copyright 2018 Blogify | All Rights Reserved', '© Marwa El-Manawy 2016 All rights reserved.', 1),
('description', '<h3><strong>Our Mission</strong></h3>\r\n\r\n<p>Be the most preferred choice of students, faculty and industry in every discipline undertaken by the university, and to work towards making the Republic of B&eacute;nin a Socio-Economic success by building requisite talent for emerging information and management based economy, with high level of skills and productivity..</p>\r\n\r\n<h3><strong>Our Vision</strong></h3>\r\n\r\n<p>Commitment to nurturing a vibrant academic community conducive for the study, creation and dissemination of knowledge through research, training and service.</p>', NULL, 0),
('facebook', 'https://www.facebook.com/hillsoftsnetwork/', NULL, 0),
('favicon', 'http://localhost/newblog//cdn/about/logo1.png', NULL, 1),
('fax', '0355555', NULL, 0),
('google_plus', 'https://plus.google.com/', NULL, 0),
('instagram', 'https://www.instagram.com/', NULL, 0),
('language', 'english', 'english', 1),
('latitude', '29.914389', NULL, 0),
('linkedin', 'https://www.linkedin.com', NULL, 0),
('logo', 'http://localhost/escae//cdn/about/logo_(2).png', NULL, 1),
('longitude', '31.202307', NULL, 0),
('meta_description', 'New cool stuff', 'desc', 0),
('meta_keywords', 'Hillsofts, Web Design, Web Development,IT infrastructure,business solutions,business consulting ,services,innovation,servers,storage solutions,software, outsourcing,web design,web development,software development', 'key', 1),
('name', 'Escae', 'Escae', 0),
('phone', '+(234)8138-652-645', '0', 0),
('skype', 'Torrahclef', NULL, 0),
('title', 'ESCAE University', 'ESCAE', 1),
('twitter', 'https://www.twitter.com', NULL, 0),
('visitors', '11966', '0', 0),
('webmaster_email', 'webmaster@blogify.com', NULL, 0),
('website', 'http://ahomaxtechs.org/', NULL, 0),
('whatsapp', '+(234)8138-652-645', NULL, 0),
('youtube', 'https://www.youtube.com/', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `slider_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `title`, `image`, `description`) VALUES
(3, 'Integer non dapibus fermentum nibh volutpat', 'http://localhost/escae//cdn/sliders/photodune-2545842-after-school-m-960x350.jpg', 'Test Integer non dapibus fermentum nibh volutpat, accumsan purus.'),
(4, 'The standard Lorem Ipsum passage, used since the 1500s', 'http://localhost/escae//cdn/sliders/photodune-2986280-lake-by-the-binnenhof-m-960x350.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem'),
(5, 'Section 1.10.32 of "de Finibus Bonorum et Malorum', 'http://localhost/escae//cdn/sliders/photodune-446761-business-presentation-m-960x350.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `department` varchar(300) NOT NULL,
  `description` varchar(2223) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `image` varchar(3353) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `position`, `department`, `description`, `datetime`, `image`, `phone`) VALUES
(1, 'Adefila Gbami', 'HOD', 'Computer Science', 'Fine life he enjoys', '2018-10-31 19:02:05', 'http://localhost/escae//cdn/blog/IMG_20170613_180016_424.jpg', ''),
(2, 'Prof. Raphael Nadal', 'HOD', 'Computer Science', 'This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well This is a very good man and he can lecture for africa well well', '2018-12-16 16:32:56', 'http://localhost/escae//cdn/blog/Akure-20140624-00161.jpg', '+3234454657654');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `position` varchar(255) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Eman Ali', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis tristique sapien. Duis viverra tellus quis sagittis dignissim. Morbi sodales elit erat, non tempus ligula pretium sit amet.', 'ACCOUNTANT', 'https://elmanawy.info/demo/marocms/cdn/team/testimonial1.png'),
(4, 'Yassmein Elmanawy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis tristique sapien. Duis viverra tellus quis sagittis dignissim. Morbi sodales elit erat, non tempus ligula pretium sit amet.', 'Graphic Designer', 'https://elmanawy.info/demo/marocms/cdn/team/team5.png'),
(5, 'Ahmed El-Nagar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis tristique sapien. Duis viverra tellus quis sagittis dignissim. Morbi sodales elit erat, non tempus ligula pretium sit amet.', 'Social Media', 'https://elmanawy.info/demo/marocms/cdn/team/team4.png'),
(6, 'Muhammad El-Manawy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis tristique sapien. Duis viverra tellus quis sagittis dignissim. Morbi sodales elit erat, non tempus ligula pretium sit amet.', 'Executive Manager', 'https://elmanawy.info/demo/marocms/cdn/team/team2.png'),
(7, 'Marwa El-Manawy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis tristique sapien. Duis viverra tellus quis sagittis dignissim. Morbi sodales elit erat, non tempus ligula pretium sit amet.', 'CEO / FOUNDER', 'https://elmanawy.info/demo/marocms/cdn/team/team1.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `message` text,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `name`, `position`, `message`, `image`) VALUES
(3, 'Marwa El-Manawy', 'UI Designer', 'Proin a ipsum quis diam dictum eleifend. Sed at aliquet massa. Quisque nec lacinia elit. Fusce tempor condimentum vehicula. Donec porttitor diam in nisi maximus, varius mattis risus consequat. Aenean purus dolor, volutpat et malesuada nec, porttitor nec mi. Sed efficitur diam ligula, vel molestie erat sagittis vel.', 'https://elmanawy.info/demo/marocms/cdn/testimonials/profileimg6.png'),
(5, 'Muhammad El-Manawy', 'Web Developer', 'Proin a ipsum quis diam dictum eleifend. Sed at aliquet massa. Quisque nec lacinia elit. Fusce tempor condimentum vehicula. Donec porttitor diam in nisi maximus, varius mattis risus consequat. Aenean purus dolor, volutpat et malesuada nec, porttitor nec mi. Sed efficitur diam ligula, vel molestie erat sagittis vel.', 'https://elmanawy.info/demo/marocms/cdn/testimonials/profileimg4.png'),
(6, 'Ahmed El-Manawy', 'UI/UX Designer', 'Proin a ipsum quis diam dictum eleifend. Sed at aliquet massa. Quisque nec lacinia elit. Fusce tempor condimentum vehicula. Donec porttitor diam in nisi maximus, varius mattis risus consequat. Aenean purus dolor, volutpat et malesuada nec, porttitor nec mi. Sed efficitur diam ligula, vel molestie erat sagittis vel.', 'https://elmanawy.info/demo/marocms/cdn/testimonials/profileimg5.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` text,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `image`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'faith1.jpg', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ad_locations`
--
ALTER TABLE `ad_locations`
  ADD PRIMARY KEY (`ad_location_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ad_locations`
--
ALTER TABLE `ad_locations`
  MODIFY `ad_location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
