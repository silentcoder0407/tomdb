-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2020 at 01:43 PM
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
(1, '20200420034513', 'https://www.youtube.com/v/JZCCBUJgjNQ', 'https://m.media-amazon.com/images/M/MV5BMjAwMzAzMzExOF5BMl5BanBnXkFtZTgwOTcwMDA5MTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Maleficent', '2014', '7.0', 'Adventure', 'Angelina Jolie, Elle Fanning, Sharlto Copley', 'A vengeful fairy is driven to curse an infant princess, only to discover that the child may be the one person who can restore peace to their troubled land.', 'http://dl1.doostihaa.com/files/Movie/2014/M/Maleficent.2014.1080p.Farsi.Dubbed.mkv', 'Size: 1.5gb'),
(2, '20200420040108', 'https://www.youtube.com/v/vOUVVDWdXbo', 'https://m.media-amazon.com/images/M/MV5BYjA5YjA2YjUtMGRlNi00ZTU4LThhZmMtNDc0OTg4ZWExZjI3XkEyXkFqcGdeQXVyNjUyNjI3NzU@._V1_UY268_CR16,0,182,268_AL_.jpg', 'Bloodshot', '2020', '5.7', 'Action', 'Vin Diesel, Eiza González, Sam Heughan', 'Ray Garrison, a slain soldier, is re-animated with superpowers.', 'http://www.mediafire.com/file/9on24n521mgxssa/NIREGLA1.zip/file', 'Extract .zip file then rename from _mp4 to .mp4'),
(3, '20200420045611', 'https://www.youtube.com/v/cU3xRYq7iX4', 'https://m.media-amazon.com/images/M/MV5BMmMzZWU2ZjAtMGU3Yy00ZmNmLWFmY2YtOGU2NTNkN2Y5ZTQ4XkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX182_CR0,0,182,268_AL_.jpg', '#Jowable', '2019', '6.5', 'Comedy', 'Kim Molina, Kakai Bautista, Cai Cortez', ' Elsa is a troubled young woman who is yearning for a mature and intimate relationship. ', 'http://www.mediafire.com/file/ewcvex52gut81cw/hinde_ginowa.zip/file', 'Clear Copy - BluRay'),
(4, '20200422042446', 'https://www.youtube.com/v/WnESo-ekPmc', 'https://m.media-amazon.com/images/M/MV5BZjg1OTcxMTItOTM1Yy00NTEwLWE0YmItODhjYmJjOTJhMTViXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_UY268_CR9,0,182,268_AL_.jpg', 'Angels Fallen', '2020', '5.6', 'Horror', 'Nicola Posener, Caroline Amiguet, Filareta Atanasova', 'After the tragic loss of his wife battling the forces of darkness, Gabriel is persuaded to rejoin his former team of demon hunters traveling from relatively obscurity in America to the deep...', 'https://bit.ly/2RUOKXu', '720p WEB-Rip x264 AAC-2.0'),
(5, '20200423010000', 'https://www.youtube.com/v/KK8FHdFluOQ', 'https://m.media-amazon.com/images/M/MV5BMjFlZjZkMTYtODM2Zi00OTM4LWIwYTktOTFjMmQzZDEzZDc4XkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_UX182_CR0,0,182,268_AL_.jpg\r\n', 'Mulan', '2020', 'N/A', 'Action', 'Yifei Liu, Donnie Yen, Li Gong', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 'https://paybitly.pw/Go0ApQ', 'MEGA.NZ'),
(6, '20200423040944', 'https://www.youtube.com/v/VqeqaweXBV0', 'https://yourmomrocks.files.wordpress.com/2013/04/the-curious-case-of-benjamin-button-for-your-consideration.png', 'The Curious Case of Benjamin Button', '2008', '7.8', 'Drama', 'Brad Pitt, Cate Blanchett, Tilda Swinton', 'Tells the story of Benjamin Button, a man who starts aging backwards with consequences.', 'https://paybitly.pw/Or7GL4p1', 'Size: 1.6gb'),
(7, '20200423111005', 'https://www.youtube.com/v/_DJEzZk2pc', 'http://yesofcorsa.com/wp-content/uploads/2019/01/Joker-2019-Wallpaper-For-IPhone.jpg', 'Joker', '2019', '8.5', 'Crime', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 'https://paybitly.pw/zdmjs', '480p'),
(8, '20200423120155', 'https://www.youtube.com/v/2B0RpUGss2c', 'https://m.media-amazon.com/images/M/MV5BMTlkMmVmYjktYTc2NC00ZGZjLWEyOWUtMjc2MDMwMjQwOTA5XkEyXkFqcGdeQXVyNTI4MzE4MDU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Gentlemen', '2019', '8.0', 'Action', 'Matthew McConaughey, Charlie Hunnam, Michelle Dockery', 'An American expat tries to sell off his highly profitable marijuana empire in London, triggering plots, schemes, bribery and blackmail in an attempt to steal his domain out from under him.', 'https://paybitly.pw/C3LJ7bk1', '508M'),
(9, '20200423024508', 'https://www.youtube.com/v/s2-1hz1juBI', 'https://m.media-amazon.com/images/M/MV5BMjQ1NjM3MTUxNV5BMl5BanBnXkFtZTgwMDc5MTY5OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Hacksaw Ridge', '2016', '8.1', 'Drama', 'Andrew Garfield, Sam Worthington, Luke Bracey', 'World War II American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot.', 'https://paybitly.pw/c7i0llIK', '1080p'),
(10, '20200423053543', 'https://www.youtube.com/v/Z1BCujX3pw8', 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Captain Marvel', '2019', '6.9', 'Action', 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn', 'Carol Danvers becomes one of the universes most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', 'https://paybitly.pw/WbMo', '1080p.WEB-DL.H264.AC3-EVO'),
(11, '20200425050637', 'https://www.youtube.com/v/eeBMQpzoEXQ', 'https://m.media-amazon.com/images/M/MV5BNWVlMjQ3MjItOWE3YS00YTYwLWE0ZDMtZWMyZWY1NzkxNWIwXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Peppermint', '2018', '6.5', 'Action', 'Jennifer Garner, John Gallagher Jr., John Ortiz', 'Five years after her husband and daughter are killed in a senseless act of violence, a woman comes back from self-imposed exile to seek revenge against those responsible and the system that let them go free.', 'https://paybitly.pw/WbMo', '1080p'),
(12, '20200430062029', 'https://www.youtube.com/v/dtPvmfvGq8A', 'https://m.media-amazon.com/images/M/MV5BNzRiZjFkMjgtYjAxMy00NjNhLThlZmEtMDk1N2Q3MjFjMTBmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Villainess', '2017', '6.7', 'Action', 'Ok-bin Kim, Ha-kyun Shin, Jun Sung', 'A female assassin leaves a trail of bodies behind her as she seeks revenge.', 'http://s1.dlserver.info/Movie/The.Villainess.2017/The.Villainess.2017.1080p.BRrip.Ganool.mkv', '1080p.BRrip.Ganool'),
(13, '20200430062705', 'https://www.youtube.com/v/ckEhUQNk_kQ', 'https://m.media-amazon.com/images/M/MV5BNDgxY2M1MjctNzU0Yy00NjkxLTgxZGYtYzZjOGUxOWZlNWRlXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', '1BR', '2019', '5.8', 'Horror', 'Nicole Brydon Bloom, Giles Matthey, Taylor Nichols', 'Sarah tries to start anew in LA, but her neighbours are not what they seem.', 'https://bit.ly/2z0Esi8', 'MEGA.NZ'),
(14, '20200721014336', 'https://www.youtube.com/v/1d4DACwz49o', 'https://m.media-amazon.com/images/M/MV5BMTkwOTQ4OTg0OV5BMl5BanBnXkFtZTgwMzQyOTM0OTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Train to Busan', '2016', '7.5', 'Horror', 'Yoo Gong, Yu-mi Jung, Dong-seok Ma', 'While a zombie virus breaks out in South Korea, passengers struggle to survive on the train from Seoul to Busan.', 'http://dl1.doostihaa.com/files/Movie/2016/T/Train.to.Busan.2016.720p.x265.HEVC.Farsi.Dubbed.mkv', 'Farsi'),
(15, '20200721021940', 'https://www.youtube.com/v/_o1gmGWIF-4', 'https://m.media-amazon.com/images/M/MV5BZDUyZWU4NDAtZDlmZC00NjhkLTliZTUtZjVhOTMwNTEyOWFmXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Train to Busan 2', '2020', '6.0', 'Horror', 'Dong-Won Gang, Jung-hyun Lee, John D. Michaels ', 'Sequel to the 2016 South Korean zombie film Train to Busan (2016).', ' http://bit.ly/ttbp20202', 'HD CAM'),
(16, '20200723073033', 'https://www.youtube.com/v/hfrFqUIocno', 'https://m.media-amazon.com/images/M/MV5BNTQ1MzM4ZGMtNGVkMC00MzRhLTkzZGQtM2NhNjhiYTY2NmEyXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Through Night and Day', '2018', '7.5', 'Drama', 'Alessandra de Rossi, Paolo Contis, Joey Marquez', 'Ben and Jens relationship is put to test as they embark on a trip of a lifetime to Jens lifelong dream destination - Iceland.', 'http://bit.ly/tnad2018', 'HD and Stream Online');

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
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
