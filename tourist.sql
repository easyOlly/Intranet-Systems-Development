-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `comments` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `member_id`, `comments`) VALUES
(1, '1', 'I like the festival'),
(2, '2', 'nice'),
(3, '4', 'I will like to be there in 2023');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_location` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `middlename`, `address`, `email`, `contact_no`, `gender`, `username`, `password`, `image_location`) VALUES
(1, 'Adekola', 'Babatunde', 'Segun', 'Male', 'babatunde@gmail.com', '0809073453218', 'Male', 'User01', '1bf752ce1467f0bf1172aaf4cd801411', 'OLAGUNJU Olasunkanmi Passport.jpg'),
(2, 'Keneth', 'Ben', 'Uche', 'Lagos', 'keneth@gmail.com', '09067548651', 'Male', 'User02', 'eea7530d166b6279d2720929639973d1', 'Baby.jpg'),
(3, 'Yusuff', 'Mic', 'Ayobami', 'Oyo', 'yusuff@gmail.com', '08167903421', 'Male', 'User03', '58561757e0643f69a818b818085c5d09', 'Photo.jpg'),
(4, 'Wale', 'Lawson', 'Kuti', 'Shomolu, Lagos', 'lawson@gmail.com', '08087983421', 'Male', 'User04', 'a184897c89e41eb366f2e56cc04ede23', 'Photo 3.jpg'),
(5, 'Fashola', 'Blessing', 'Nike', 'Portharcourt', 'blessing@gmail.com', '08023457698', 'Female', 'User05', '965b11a46418878a13732a04b3db07b3', 'photo 05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `message`) VALUES
(1, 'There will be new event coming up in Ojude Oba on Eid Fitri 2023.');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `storyid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1300) DEFAULT NULL,
  `image_location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`storyid`, `title`, `description`, `image_location`) VALUES
(1, 'The Ojude Oba Festival, Ijebu Ode', 'The Yoruba people of South western Nigeria are amongst the most culturally and spiritually rich people on the planet. There are many times that this is displayed but probably the biggest occurrence is the annual Ojude Oba festival - made popular by the Ijebu subgroup of Ogun State. ', 'images 01.jpg'),
(2, 'A Historical Analysis of Ojude-Oba Festival in Ijebu Ode', 'The Ojude-Oba festival is an annual Muslim celebration on the third day of the Ed-El-Kabir festivity of Muslims in Ijebu-Ode (Sote 2003, 29). Sote describes Ijebu-Ode as the gateway to the eastern part of Nigeria (2003, 1). Located in Ogun State, Nigeria, Ijebu-Ode is bordered by Oyo State in the north and Lagos to the south. It shares boundaries with Ondo State to the west and Remo Division of Ogun State in the east. The festival has no fi xed date on the Western calendar, because its timing is mostly determined by the Muslim calendar. The festival is the major Muslim ceremony celebrated within the palace of the Awujale, the ruler of the town. It is one of the most popular events that take place in the life of the community, and it draws overwhelming crowds to Ijebu-Ode (Sote 2003, 29). During the period of the celebration, the festival attracts a large number of visitors to IjebuOde and brings together sons and daughters of Ijebuland (Sote, 2003). This chapter will unearth the historical processes of the Ojude-Oba festival and shed more light on the history of some of its associated practices.', 'images 02.jpg'),
(3, 'Ojude Oba: Cultural celebration as a brand strategy', 'The Ojude Oba is enlivened by Globacom which has been collaborating with the Ojude Oba planning committee as the main sponsor since 2006. The company has made the support of traditional institutions and cultural festivals a key brand-building strategy. The company has supported the Ojude Oba festival for over a decade but its support is ethnic and tribe agnostic extending past Ijebuland to cover the Lisabi festival and the Ofala festival amongst others.', 'Glo image 03.jpg'),
(4, 'Everything You Need to Know About Ojude Oba Festival: The King Parade', 'A Brief History?\r\nIt all began in 1892, when Oba Adesumbo Tunwase, who signed the treaty of relationship with the British Queen, gave land to the Muslims to establish their Central Mosque. At the same time, he agreed with the British missionaries to preach Christianity in Ijebu Land. He also went further to allow some of his children to be baptized. To cap it all, he gave the land on which the first church in Ijebu Land was built; St Saviours Italupe. The Muslims started the Ojude Oba Festival, which when translated means ?Festival in the King?s Court?. Using it as an occasion to pay homage. Appreciating the reigning Monarch for his benevolence', 'ojude3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'admin2', 'admin2'),
(4, 'admin3', 'admin3'),
(5, 'admin4', 'admin4'),
(6, 'admin4', 'admin4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`storyid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `storyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
