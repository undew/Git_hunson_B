-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curry`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `main` int(11) NOT NULL,
  `taste` int(11) NOT NULL,
  `flavor` int(11) NOT NULL,
  `hot_taste` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `nice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `post`
--

INSERT INTO `post` (`id`, `title`, `name`, `main`, `taste`, `flavor`, `hot_taste`, `post_date`, `nice`) VALUES
(1, 'カレー', 'さとう', 1, 1, 1, 1, '2019-07-31 00:00:00', 4),
(2, '辛いカレー', 'みね', 1, 1, 1, 1, '2019-07-30 00:00:00', 6),
(3, '甘いカレー', 'あんどう', 1, 1, 1, 1, '2019-07-31 23:00:00', 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `reply`
--

INSERT INTO `reply` (`id`, `post_id`, `name`, `msg`, `post_date`) VALUES
(1, 3, '佐藤', '0', '2019-07-31 17:19:55');

-- --------------------------------------------------------

--
-- テーブルの構造 `spice`
--

CREATE TABLE `spice` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `kind` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `little_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `spice`
--

INSERT INTO `spice` (`id`, `name`, `kind`, `description`, `little_description`) VALUES
(1, 'カスリメティ', 'taste', 'とても甘い香りと苦味のあるスパイス。加熱すると苦味が消えていく。', 'とても甘い香りと苦味のあるスパイス。'),
(2, 'シナモン', 'taste', '甘い香りと味がする有名なスパイス。木の皮を乾燥させたもの。', '甘い香りと味がする有名なスパイス。'),
(3, '花椒', 'taste', '山椒の仲間で、舌が痺れる。山椒よりも強烈で、辛さを求めるなら買うべし。', '山椒の仲間で、舌が痺れる。'),
(4, 'ガラムマサラ', 'flavor', '香り高いスパイスを使用した、インドのミックススパイス。ガラムは「暑い（熱い）」マサラは「混ぜた物」を意味する。', '香り高いスパイスを使用した、インドのミックススパイス。'),
(5, 'クミンシード', 'flavor', 'インド料理の多くに使用されるスパイス。クミンの香り＝インドカレーと言われるほど主要なスパイス。', 'インド料理の多くに使用されるスパイス。'),
(6, 'グリーンカルダモン', 'flavor', 'とても香り高く、比較的高価なスパイス。「スパイスの女王」とも呼ばれている。\r\n', 'とても香り高く、比較的高価なスパイス。\r\n'),
(7, 'チリペッパー', 'hot_taste', '唐辛子の粉末。唐辛子の中でも特に辛いカイエン種の粉末は、カイエンペッパーと呼ばれる。', '唐辛子の粉末。'),
(8, 'ブラウンマスタード', 'hot_taste', '辛味のあるスパイス。マスタードは南インドでよく用いられる。', '辛味のあるスパイス。'),
(9, 'ブラックペッパー', 'hot_taste', '辛さはあるが、後に引かないスパイス。「スパイスの王様」とも呼ばれている。', '辛さはあるが、後に引かないスパイス。'),
(10, '白米', 'main', '玄米を精米した米のこと。精米、精白米ともいう。', '玄米を精米した米のこと。'),
(11, 'パン', 'main', '小麦粉やライ麦粉といった穀物粉に水、酵母、塩などを加えて作った生地を発酵により膨張させた後、焼く事でできあがる膨化食品。', '小麦粉に水、酵母、塩などを加えて作った生地を発酵させた後、焼く事でできあがる食品。'),
(12, 'ナン', 'main', 'インド、パキスタン、中央アジアのタジキスタン、中国新疆ウイグル自治区、ウズベキスタン、アフガニスタン、イラン、クルディスタンなどで食べられるパン。', 'インドなどで食べられるパン。');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spice`
--
ALTER TABLE `spice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spice`
--
ALTER TABLE `spice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
