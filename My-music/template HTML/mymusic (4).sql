-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2019 lúc 10:24 AM
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
  `avataral` varchar(100) NOT NULL,
  `nameal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`idal`, `avataral`, `nameal`) VALUES
(2, 'https://truongnhac.edu.vn/wp-content/uploads/2017/01/EDM.png', 'edm'),
(3, 'https://avatar-nct.nixcdn.com/topic/share/2018/11/19/3/b/9/0/1542613855109.jpg', 'acoustic'),
(4, 'http://www.hoinhacsi.vn/sites/default/files//bolero_0.jpg', 'bolero'),
(5, 'https://cfhsprowler.com/wp-content/uploads/2018/10/article-cover.jpg', 'indie'),
(6, 'https://avatar-nct.nixcdn.com/playlist/2018/07/24/c/b/1/a/1532412955514_500.jpg\r\n\r\n', 'nhackhongloi');

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
(2, 9),
(2, 10),
(2, 11),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 6),
(4, 7),
(4, 8),
(5, 12),
(5, 13),
(5, 14),
(6, 15),
(6, 16),
(6, 17);

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
  `avatarsong` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `namesong` varchar(100) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `tg` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`idsong`, `avatarsong`, `path`, `namesong`, `tacgia`, `tg`) VALUES
(2, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/d/a/2/f/da2f9f07bd3cc7eeb506e2ff6690992d.jpg', 'list\\ascostic\\Biet-Khuc-Cho-Nhau-Cover-Huong-Ly.mp3', 'Biet-Khuc-Cho-Nhau', 'huongly', '4:15'),
(3, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/6/2/62df066e6f9196dbeedadd35931b88ae_1382408', 'list\\ascostic\\Chiec-Khan-Gio-Am-Tien-Cookie.mp3', 'Chiec-Khan-Gio-Am', 'Tien-Cookie', '4:52'),
(4, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/f/1/f1af272d318a2aef209ce13f004a74f1_1367136', 'list\\ascostic\\Tam-Biet-Nhe-Acoustic-Version-Lynk-Lee-Phuc-Bang.mp3', 'Tam-Biet-Nhe-Acoustic', 'Lynk-Lee-Phuc-Bang', '4:36'),
(5, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/3/e/3e114c343f09f59519b2069dc5ab94dc_150414', 'list\\ascostic\\Tinh-Don-Phuong-Acoustic-Cover-Duong-Edward-Tung-Acoustic.mp3', 'Tinh-Don-Phuong.mp3', 'Duong-Edward-Tung', '4:42'),
(6, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/a/0/a0ce9ef23d16651676a3eb9e97510c55_1392014', 'list\\bolero\\Coi-Nho-Duong-Hong-Loan.mp3', 'Coi-Nho', 'Duong-Hong-Loan', '4:54'),
(7, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/1/f/1f6d02631e41401dc51fb4d5c2f9abf0_1303549', 'list\\bolero\\Dap-Vo-Cay-Dan-Quang-Le.mp3', 'Dap-Vo-Cay-Dan', 'Quang-Le', '5:05'),
(8, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/b/e/bebbeaf3221dfda16ecd42b8d756151c_1370764', 'list\\bolero\\Duyen-Phan-Nhu-Quynh.mp3', 'Duyen-Phan-Nhu-Quynh.mp3', 'Nhu-Quynh', '5:45'),
(9, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/e/c/6/f/ec6feb6133b204c06e9169c18a26afdb.jpg', 'list\\edm\\Dem-Do-Thi-Remix-Ho-Quang-Hieu-DJ-Future.mp3', 'Dem-Do-Thi-Remix', 'Ho-Quang-Hieu', '3:59'),
(10, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/f/b/2/4/fb24ba9a90ede2508a67f2bd691559ab.jpg', 'list\\edm\\Hong-Nhan-K-ICM-Mix-Jack-K-ICM.mp3', 'Hong-Nhan', 'Jack-K-ICM', '3:48'),
(11, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/9/3/1/9/9319341891e7fd6d96df17e0c9306171.jpg', 'list\\edm\\Y-E-U-Micky-Remix-VNSound.mp3', 'Y-E-U', 'Micky-Remix-VNSound', '4:43'),
(12, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/8/1/f/8/81f89f413d6de4ee94fa2a98ad6b5511.jpg', 'list\\indie\\Cuoc-Tinh-Ky-Cuc-SUNDAZE.mp3', 'Cuoc-Tinh-Ky-Cuc', 'SUNDAZE', '4:03'),
(13, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/a/1/c/2/a1c26d4a3fa9c3026d56e543eabad3bd.jpg', 'list\\indie\\Khi-Chuyen-Dong-Vinh-Tran-Bao-Le.mp3', 'Khi-Chuyen-Dong', 'Vinh-Tran-Bao-Le', '4:17'),
(14, 'https://zmp3-photo-fbcrawler.zadn.vn/cover_rect/6/2/a/9/62a9d9907a1ad7d76f0f3532f2c996f3.jpg', 'list\\indie\\Mot-Minh-Ta-buitruonglinh.mp3', 'Mot-Minh-Ta', 'buitruonglinh', '4:31'),
(15, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/0/8/08932b94c5f900a28caa297743e21621_1287708', 'list\\nhac khong loi\\A-Distant-Shade-of-Green-Kevin-Kern.mp3', 'A-Distant-Shade-of-Green', 'Kevin-Kern', '3:19'),
(16, 'https://photo-resize-zmp3.zadn.vn/w240h240_jpeg/avatars/f/3/f3ccdd27d2000e3f9255a7e3e2c48800_1374942', 'list\\nhac khong loi\\Concerto-For-Flute-Harp-And-Orchestra-In-C-Major-KV-299-Allegro-Jonathan-Carney-', 'Concerto-For-Flute-...', '-Allegro-Jonathan-Carney-Royal-Philharmonic-O', '9:52'),
(17, 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/covers/4/b/4b1c59c7728e2b1cb65f6cb20aaf5cf9_1330424', 'list\\nhac khong loi\\Smile-Smile-Smile-Jeon-Soo-Yeon.mp3', 'Smile-Smile-Smile-Jeon-Soo-Yeon.mp3', 'Smile-Smile-Smile-Jeon-Soo-Yeon.mp3', '3:04');

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
(1, 16);

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
