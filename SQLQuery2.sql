-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2019 lúc 06:14 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mymusic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `idal` int(11) NOT NULL,
  `avatar-al` varchar(100) NOT NULL,
  `nameal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`idal`, `avatar-al`, `nameal`) VALUES
(1, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/6/c/f/7/6cf75d7c4beb8ecf08ed9acaee53fd76.jpg', 'bai 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album-song`
--

CREATE TABLE `album-song` (
  `idal` int(11) NOT NULL,
  `idsong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `album-song`
--

INSERT INTO `album-song` (`idal`, `idsong`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend`
--

CREATE TABLE `friend` (
  `iduser1` int(11) NOT NULL,
  `iduser2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `friend`
--

INSERT INTO `friend` (`iduser1`, `iduser2`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `idsong` int(11) NOT NULL,
  `avatar-song` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `namesong` varchar(100) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `tg` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`idsong`, `avatar-song`, `path`, `namesong`, `tacgia`, `tg`) VALUES
(1, 'images/hoang-hon-1.jpg', 'bai1.mp3', 'bai hat', 'tac gia', '3.45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id-us` int(11) NOT NULL,
  `avatar-us` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id-us`, `avatar-us`, `username`, `password`) VALUES
(1, 'images/avatar.jpg', 'admin', 'admin'),
(2, 'images/avatar.jpg', 'root', 'root');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user-song`
--

CREATE TABLE `user-song` (
  `idus` int(11) NOT NULL,
  `idsong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user-song`
--

INSERT INTO `user-song` (`idus`, `idsong`) VALUES
(1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idal`),
  ADD UNIQUE KEY `idal` (`idal`);

--
-- Chỉ mục cho bảng `album-song`
--
ALTER TABLE `album-song`
  ADD PRIMARY KEY (`idal`,`idsong`),
  ADD UNIQUE KEY `idal` (`idal`,`idsong`),
  ADD KEY `idsong` (`idsong`);

--
-- Chỉ mục cho bảng `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`iduser1`,`iduser2`),
  ADD UNIQUE KEY `iduser1` (`iduser1`,`iduser2`),
  ADD KEY `iduser2` (`iduser2`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`idsong`),
  ADD UNIQUE KEY `idsong` (`idsong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id-us`),
  ADD UNIQUE KEY `id-us` (`id-us`);

--
-- Chỉ mục cho bảng `user-song`
--
ALTER TABLE `user-song`
  ADD PRIMARY KEY (`idus`,`idsong`),
  ADD UNIQUE KEY `idus` (`idus`,`idsong`),
  ADD KEY `idsong` (`idsong`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `album-song`
--
ALTER TABLE `album-song`
  ADD CONSTRAINT `album-song_ibfk_1` FOREIGN KEY (`idal`) REFERENCES `album` (`idal`),
  ADD CONSTRAINT `album-song_ibfk_2` FOREIGN KEY (`idsong`) REFERENCES `song` (`idsong`);

--
-- Các ràng buộc cho bảng `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`iduser1`) REFERENCES `user` (`id-us`),
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`iduser2`) REFERENCES `user` (`id-us`);

--
-- Các ràng buộc cho bảng `user-song`
--
ALTER TABLE `user-song`
  ADD CONSTRAINT `user-song_ibfk_1` FOREIGN KEY (`idsong`) REFERENCES `song` (`idsong`),
  ADD CONSTRAINT `user-song_ibfk_2` FOREIGN KEY (`idus`) REFERENCES `user` (`id-us`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
