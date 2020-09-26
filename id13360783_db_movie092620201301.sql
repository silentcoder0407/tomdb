-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2020 at 05:02 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13360783_db_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `id_no` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `release_yr` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `casts` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `download_link` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`id_no`, `url`, `trailer`, `img`, `title`, `release_yr`, `rating`, `genre`, `casts`, `descri`, `download_link`, `notes`) VALUES
(1, '20200420034513', 'JZCCBUJgjNQ', 'https://m.media-amazon.com/images/M/MV5BMjAwMzAzMzExOF5BMl5BanBnXkFtZTgwOTcwMDA5MTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Maleficent', '2014', '7.0', 'Adventure', 'Angelina Jolie, Elle Fanning, Sharlto Copley', 'A vengeful fairy is driven to curse an infant princess, only to discover that the child may be the one person who can restore peace to their troubled land.', 'https://dl.tomdb.xyz/Maleficent2014', '1080p'),
(2, '20200420040108', 'vOUVVDWdXbo', 'https://m.media-amazon.com/images/M/MV5BYjA5YjA2YjUtMGRlNi00ZTU4LThhZmMtNDc0OTg4ZWExZjI3XkEyXkFqcGdeQXVyNjUyNjI3NzU@._V1_UY268_CR16,0,182,268_AL_.jpg', 'Bloodshot', '2020', '5.7', 'Action', 'Vin Diesel, Eiza González, Sam Heughan', 'Ray Garrison, a slain soldier, is re-animated with superpowers.', 'https://dl.tomdb.xyz/Bloodshot2020', ''),
(3, '20200420045611', 'cU3xRYq7iX4', 'https://m.media-amazon.com/images/M/MV5BMmMzZWU2ZjAtMGU3Yy00ZmNmLWFmY2YtOGU2NTNkN2Y5ZTQ4XkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX182_CR0,0,182,268_AL_.jpg', '#Jowable', '2019', '6.5', 'Comedy', 'Kim Molina, Kakai Bautista, Cai Cortez', ' Elsa is a troubled young woman who is yearning for a mature and intimate relationship. ', 'https://dl.tomdb.xyz/jowable2019', ''),
(4, '20200422042446', 'WnESo-ekPmc', 'https://m.media-amazon.com/images/M/MV5BZjg1OTcxMTItOTM1Yy00NTEwLWE0YmItODhjYmJjOTJhMTViXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_UY268_CR9,0,182,268_AL_.jpg', 'Angels Fallen', '2019', '5.6', 'Horror', 'Nicola Posener, Caroline Amiguet, Filareta Atanasova', 'After the tragic loss of his wife battling the forces of darkness, Gabriel is persuaded to rejoin his former team of demon hunters traveling from relatively obscurity in America to the deep...', 'https://dl.tomdb.xyz/angelfallen2019', '720p'),
(6, '20200423040944', 'VqeqaweXBV0', 'https://yourmomrocks.files.wordpress.com/2013/04/the-curious-case-of-benjamin-button-for-your-consideration.png', 'The Curious Case of Benjamin Button', '2008', '7.8', 'Drama', 'Brad Pitt, Cate Blanchett, Tilda Swinton', 'Tells the story of Benjamin Button, a man who starts aging backwards with consequences.', 'https://dl.tomdb.xyz/benjamin2008', '480p'),
(7, '20200423111005', '_DJEzZk2pc', 'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Joker', '2019', '8.5', 'Crime', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 'https://dl.tomdb.xyz/joker2019', '480p'),
(8, '20200423120155', '2B0RpUGss2c', 'https://m.media-amazon.com/images/M/MV5BMTlkMmVmYjktYTc2NC00ZGZjLWEyOWUtMjc2MDMwMjQwOTA5XkEyXkFqcGdeQXVyNTI4MzE4MDU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Gentlemen', '2019', '8.0', 'Action', 'Matthew McConaughey, Charlie Hunnam, Michelle Dockery', 'An American expat tries to sell off his highly profitable marijuana empire in London, triggering plots, schemes, bribery and blackmail in an attempt to steal his domain out from under him.', 'https://dl.tomdb.xyz/gentleman2019', '480p'),
(9, '20200423024508', 's2-1hz1juBI', 'https://m.media-amazon.com/images/M/MV5BMjQ1NjM3MTUxNV5BMl5BanBnXkFtZTgwMDc5MTY5OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Hacksaw Ridge', '2016', '8.1', 'Drama', 'Andrew Garfield, Sam Worthington, Luke Bracey', 'World War II American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot.', 'https://dl.tomdb.xyz/hacksaw2016', '1080p'),
(10, '20200423053543', 'Z1BCujX3pw8', 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Captain Marvel', '2019', '6.9', 'Action', 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn', 'Carol Danvers becomes one of the universes most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', 'https://dl.tomdb.xyz/captainmarvel2019', '480p'),
(11, '20200425050637', 'eeBMQpzoEXQ', 'https://m.media-amazon.com/images/M/MV5BNWVlMjQ3MjItOWE3YS00YTYwLWE0ZDMtZWMyZWY1NzkxNWIwXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Peppermint', '2018', '6.5', 'Action', 'Jennifer Garner, John Gallagher Jr., John Ortiz', 'Five years after her husband and daughter are killed in a senseless act of violence, a woman comes back from self-imposed exile to seek revenge against those responsible and the system that let them go free.', 'https://dl.tomdb.xyz/Peppermint2018', '480p'),
(12, '20200430062029', 'dtPvmfvGq8A', 'https://m.media-amazon.com/images/M/MV5BNzRiZjFkMjgtYjAxMy00NjNhLThlZmEtMDk1N2Q3MjFjMTBmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Villainess', '2017', '6.7', 'Action', 'Ok-bin Kim, Ha-kyun Shin, Jun Sung', 'A female assassin leaves a trail of bodies behind her as she seeks revenge.', 'https://dl.tomdb.xyz/villainess2017', '1080p'),
(13, '20200430062705', 'ckEhUQNk_kQ', 'https://m.media-amazon.com/images/M/MV5BNDgxY2M1MjctNzU0Yy00NjkxLTgxZGYtYzZjOGUxOWZlNWRlXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', '1BR', '2019', '5.8', 'Horror', 'Nicole Brydon Bloom, Giles Matthey, Taylor Nichols', 'Sarah tries to start anew in LA, but her neighbours are not what they seem.', 'https://dl.tomdb.xyz/1br2020', '720p'),
(14, '20200721014336', '1d4DACwz49o', 'https://m.media-amazon.com/images/M/MV5BMTkwOTQ4OTg0OV5BMl5BanBnXkFtZTgwMzQyOTM0OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Train to Busan', '2016', '7.5', 'Horror', 'Yoo Gong, Yu-mi Jung, Dong-seok Ma', 'While a zombie virus breaks out in South Korea, passengers struggle to survive on the train from Seoul to Busan.', 'https://dl.tomdb.xyz/busan2016', '720p'),
(15, '20200721021940', '_o1gmGWIF-4', 'https://m.media-amazon.com/images/M/MV5BZDUyZWU4NDAtZDlmZC00NjhkLTliZTUtZjVhOTMwNTEyOWFmXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Train to Busan 2', '2020', '6.0', 'Horror', 'Dong-Won Gang, Jung-hyun Lee, John D. Michaels ', 'Sequel to the 2016 South Korean zombie film Train to Busan (2016).', 'https://dl.tomdb.xyz/busan2020', '480p'),
(16, '20200723073033', 'hfrFqUIocno', 'https://m.media-amazon.com/images/M/MV5BNTQ1MzM4ZGMtNGVkMC00MzRhLTkzZGQtM2NhNjhiYTY2NmEyXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Through Night and Day', '2018', '7.5', 'Drama', 'Alessandra de Rossi, Paolo Contis, Joey Marquez', 'Ben and Jens relationship is put to test as they embark on a trip of a lifetime to Jens lifelong dream destination - Iceland.', 'https://dl.tomdb.xyz/nightday2018', ''),
(17, '20200911035206', 'KK8FHdFluOQ', 'https://m.media-amazon.com/images/M/MV5BNDliY2E1MjUtNzZkOS00MzJlLTgyOGEtZDg4MTI1NzZkMTBhXkEyXkFqcGdeQXVyNjMwMzc3MjE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Mulan', '2020', '5.4', 'Action', 'Yifei Liu, Donnie Yen, Li Gong', 'A young Chinese maiden disguises herself as a male warrior in order to save her father.', 'http://dl.tomdb.xyz/mulan2020', '720p'),
(19, '20200922033717', 'EIzazUv2gtI', 'https://m.media-amazon.com/images/M/MV5BZmE1NmVmN2EtMjZmZC00YzAyLWE4MWEtYjY5YmExMjUxODU1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Devil All the Time', '2020', '7.2', 'Drama', 'Robert Pattinson, Haley Bennett, Tom Holland', 'Sinister characters converge around a young man devoted to protecting those he loves in a postwar backwoods town teeming with corruption and brutality.', 'https://dl.tomdb.xyz/devil2020', '480p'),
(20, '20200923121047', 'ZKBlKsx4N38', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ-i43mDMYVa6DES7_Qi1Qk1r63HW2N-M0mlw&usqp=CAU', 'Sniper: Ultimate Kill', '2017', '5.6', 'Action', 'Tom Berenger, Billy Zane, Chad Michael Collins, and Danay Garcia', 'For the first time, Brandon Beckett, Richard Miller and Sgt. Thomas Beckett join forces in Colombia to take down a brutal drug cartel.', 'https://dl.tomdb.xyz/sniper2017', '720p'),
(21, '20200925090757', '1d0Zf9sXlHk', 'https://m.media-amazon.com/images/M/MV5BZjNkNzk0ZjEtM2M1ZC00MmMxLTlmOWEtNWRlZTc1ZTUyNzY4XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UX182_CR0,0,182,268_AL_.jpg', 'Enola Holmes', '2020', '6.7', 'Adventure', 'Millie Bobby Brown, Henry Cavill, Sam Claflin', 'When Enola Holmes-Sherlocks teen sister-discovers her mother missing, she sets off to find her, becoming a super-sleuth in her own right as she outwits her famous brother and unravels a dangerous conspiracy around a mysterious young Lord.', 'http://dl.tomdb.xyz/enola2020', '480p'),
(22, '20200926024937', 'yMvJSivVNrs', 'https://m.media-amazon.com/images/M/MV5BMDdlNDNkMzQtMjYwMi00OGFjLWE4ZGQtYjA1YWMxOWM2ZGYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY264_CR0,0,178,264_AL_.jpg', 'The Owners', '2020', '4.7', 'Horror', 'Maisie Williams, Sylvester McCoy, Rita Tushingham', 'A group of friends think they find an easy score at an empty house with a safe full of cash. But when the owners, an elderly couple, come home early, the tables are suddenly turned.', 'https://dl.tomdb.xyz/owner2020', '480p'),
(23, '20200926044416', 'ozUuAcGOhPs', 'https://m.media-amazon.com/images/M/MV5BMTMzMTg1MjgtOWNhYy00NmZmLWExOTctMjA2OTZhZDFkNDhhXkEyXkFqcGdeQXVyNzAwMjU2MTY@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Ava', '2020', '5.3', 'Action', 'Jessica Chastain, John Malkovich, Common', 'Ava is a deadly assassin who works for a black ops organization, traveling the globe specializing in high profile hits. When a job goes dangerously wrong she is forced to fight for her own survival.', 'https://dl.tomdb.xyz/ava2020', '480p'),
(24, '20200926045011', 'VT6qoiTXncg', 'https://m.media-amazon.com/images/M/MV5BMmY1YjdiYjgtOWJlNi00OTJjLTg0YTAtNGU0NDlkYWI0NDUwXkEyXkFqcGdeQXVyNzQ3MTA4MDk@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Fearless', '2020', '4.9', 'Comedy', 'Yara Shahidi, Miles Robbins, Miguel', 'A teen gamer is forced to level up to full-time babysitter when his favorite video game drops three superpowered infants from space into his backyard.', 'https://dl.tomdb.xyz/fearless2020', '480p'),
(25, '20200926045557', 'dp7dpN0FXog', 'https://m.media-amazon.com/images/M/MV5BYjU4MmM0YzAtZmNhZC00Nzg4LTgwOTMtYzFhODgxNDYwZDM4XkEyXkFqcGdeQXVyMDM1MzY1Mg@@._V1_UY268_CR3,0,182,268_AL_.jpg', 'Steel Rain 2', '2020', '6.2', 'Action', 'Angus Macfadyen, Kristen Dalton, Woo-sung Jung', 'A summit of leaders of South Korea, North Korea and the U.S., where they intend to discuss North Koreas nuclear issue and a peace settlement for the Korean peninsula, but instead end up being abducted.', 'https://dl.tomdb.xyz/streelrain2', '720p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
