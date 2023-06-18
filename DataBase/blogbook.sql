-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 10:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(6, 12, 'kumar', 'kumar@kumar.com', 'Thanks', '2023-06-13 23:15:43'),
(7, 11, 'kumar', 'kumar@kumar.com', 'Thanks, Good information', '2023-06-13 23:16:18'),
(8, 11, 'Krishna', 'krishna@krishna.com', 'Yes Kumar, He gave good information', '2023-06-13 23:16:46'),
(9, 17, 'vinay', 'vinay@vinay.com', 'Hey that\'s interesting', '2023-06-13 23:26:51'),
(10, 11, 'sunil', 'sunil@gmail.com', 'short and sweet', '2023-06-13 23:29:09'),
(11, 11, 'vanu', 'sunil@sunil.com', 'Yaa, I like to know more about these posts', '2023-06-13 23:52:46'),
(12, 19, 'sai', 'sai@sai.com', 'its good informative', '2023-06-14 00:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `tag_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(11, 4, 3, 'Steve Jobs', 'Steve-Jobs', '<p>Steven Paul Jobs was an American business magnate, inventor, and investor. He was the co-founder, chairman, and CEO of Apple; the chairman and majority shareholder of Pixar; a member of The Walt Disney Company&#39;s board of directors following its acquisition of Pixar; and the founder, chairman, and CEO of NeXT.</p>\r\n', 'Steve-Jobs-iPhone-2010.jpg', '2023-06-13 22:56:22'),
(12, 4, 3, 'Steve Jobs Death ', 'Steve-Jobs-Death', '<p>Steve Jobs &mdash; an American inventor, entrepreneur and co-founder of Apple Inc. &mdash; died of&nbsp;complications from pancreatic cancer&nbsp;at the age of 56 on Oct. 5, 2011.</p>\r\n', 'Steve-Jobs-iPhone-2010.jpg', '2023-06-13 22:58:21'),
(14, 4, 3, 'Mark zuckerberg', 'Mark-zuckerberg', '<p>Mark Elliot Zuckerberg is an American business magnate, internet entrepreneur, and philanthropist. He is known for co-founding the social media website Facebook and its parent company Meta Platforms, of which he is the executive chairman, chief executive officer, and controlling shareholder.</p>\r\n', 'mark.jpg', '2023-06-13 23:10:21'),
(15, 5, 4, 'Chess', 'Chess', '<p>Chess is a board game for two players, called White and Black, each controlling an army of chess pieces in their color, with the objective to checkmate the opponent&#39;s king. It is sometimes called international chess or Western chess to distinguish it from related games, such as xiangqi and shogi.</p>\r\n', 'noimage.jpg', '2023-06-13 23:23:24'),
(16, 5, 4, 'Rubiks cube', 'Rubiks-cube', '<p>Chess is a board game for two players, called White and Black, each controlling an army of chess pieces in their color, with the objective to checkmate the opponent&#39;s king. It is sometimes called international chess or Western chess to distinguish it from related games, such as xiangqi and shogi.</p>\r\n', 'noimage.jpg', '2023-06-13 23:24:26'),
(17, 5, 4, 'Cricket', 'Cricket', '<p><strong>Cricket</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bat-and-ball_games\">bat-and-ball game</a>&nbsp;played between two teams of eleven players on a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cricket_field\">field</a>&nbsp;at the centre of which is a 22-yard (20-metre)&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cricket_pitch\">pitch</a>&nbsp;with a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Wicket\">wicket</a>&nbsp;at each end, each comprising two&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bail_(cricket)\">bails</a>&nbsp;balanced on three&nbsp;<a href=\"https://en.wikipedia.org/wiki/Stump_(cricket)\">stumps</a>. The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Batting_(cricket)\">batting</a>&nbsp;side scores&nbsp;<a href=\"https://en.wikipedia.org/wiki/Run_(cricket)\">runs</a>&nbsp;by striking the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cricket_ball\">ball</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bowling_(cricket)\">bowled</a>&nbsp;at one of the wickets with the bat and then running between the wickets, while the bowling and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Fielding_(cricket)\">fielding</a>&nbsp;side tries to prevent this (by preventing the ball from leaving the field, and getting the ball to either wicket) and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dismissal_(cricket)\">dismiss</a>&nbsp;each batter (so they are &quot;out&quot;). Means of dismissal include being&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bowled\">bowled</a>, when the ball hits the stumps and dislodges the bails, and by the fielding side either&nbsp;<a href=\"https://en.wikipedia.org/wiki/Caught\">catching</a>&nbsp;the ball after it is hit by the bat, but before it hits the ground, or hitting a wicket with the ball before a batter can cross the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Crease_(cricket)\">crease</a>&nbsp;in front of the wicket. When ten batters have been dismissed, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Innings\">innings</a>&nbsp;ends and the teams swap roles. The game is adjudicated by two&nbsp;<a href=\"https://en.wikipedia.org/wiki/Umpire_(cricket)\">umpires</a>, aided by a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Third_umpire\">third umpire</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Match_referee\">match referee</a>&nbsp;in international matches. They communicate with two off-field&nbsp;<a href=\"https://en.wikipedia.org/wiki/Scoring_(cricket)\">scorers</a>&nbsp;who record the match&#39;s&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cricket_statistics\">statistical information</a>.</p>\r\n', 'Pollock_to_Hussey.jpg', '2023-06-13 23:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `user_id`, `name`, `created_at`) VALUES
(4, 3, 'Person', '2023-06-13 22:52:20'),
(5, 4, 'Indoor games', '2023-06-13 23:23:10'),
(6, 4, 'Outdoor games', '2023-06-13 23:25:01'),
(7, 5, 'Person is ????', '2023-06-13 23:36:10'),
(8, 6, 'Comedy', '2023-06-14 00:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(3, 'sai', '07306', 'sai@sai.com', 'sai', 'a29bac723ca2d59ed78a2d715e17e92f', '2023-06-13 22:30:18'),
(4, 'kumar', '07306', 'kumar@kumar.com', 'kumar', '79cfac6387e0d582f83a29a04d0bcdc4', '2023-06-13 23:14:17'),
(5, 'sunil', '517408', 'sunil@gmail.com', 'sc', 'b59c67bf196a4758191e42f76670ceba', '2023-06-13 23:31:20'),
(6, 'raj', '434343', 'raj@gdw.com', 'raj', '65a1223dae83b8092c4edba0823a793c', '2023-06-14 00:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
