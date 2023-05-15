-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2022 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artist`
--

CREATE TABLE `artist` (
  `artistID` varchar(50) NOT NULL,
  `artistName` varchar(50) DEFAULT NULL,
  `artistImg` varchar(50) DEFAULT NULL,
  `artistStory` varchar(100) NOT NULL,
  `artistAward` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `artist`
--

INSERT INTO `artist` (`artistID`, `artistName`, `artistImg`, `artistStory`, `artistAward`) VALUES
('art01', '24KGoldn', 'artist/avatar/24kgoldn.jpg', 'artist/story/24kgoldn.txt', 'artist/award/24kgoldn.txt'),
('art02', 'Adele', 'artist/avatar/adele.jpg', 'artist/story/adele.txt', 'artist/award/adele.txt'),
('art03', 'Alan Walker', 'artist/avatar/alanwalker.jpg', 'artist/story/alanwalker.txt', 'artist/award/alanwalker.txt'),
('art04', 'Amee', 'artist/avatar/amee.jpg', 'artist/story/amee.txt', 'artist/award/amee.txt'),
('art05', 'Anh Khoa', 'artist/avatar/anhkhoa.jpg', 'artist/story/anhkhoa.txt', 'artist/award/anhkhoa.txt'),
('art06', 'Bằng Cường', 'artist/avatar/bangcuong.jpg', 'artist/story/bangcuong.txt', 'artist/award/bangcuong.txt'),
('art07', 'BIGBANG', 'artist/avatar/bigbang.jpg', 'artist/story/bigbang.txt', 'artist/award/bigbang.txt'),
('art08', 'Binz', 'artist/avatar/binz.jpg', 'artist/story/binz.txt', 'artist/award/binz.txt'),
('art09', 'BLACKPINK', 'artist/avatar/plackpink.jpg', 'artist/story/plackpink.txt', 'artist/award/plackpink.txt'),
('art10', 'Bring Me The Horizon', 'artist/avatar/bringmethehorizon.jpg', 'artist/story/bringmethehorizon.txt', 'artist/award/bringmethehorizon.txt'),
('art11', 'Châu Đăng Khoa', 'artist/avatar/chaudangkhoa.jpg', 'artist/story/chaudangkhoa.txt', 'artist/award/chaudangkhoa.txt'),
('art12', 'DaLab', 'artist/avatar/dalab.jpg', 'artist/story/dalab.txt', 'artist/award/dalab.txt'),
('art13', 'Đàm Vĩnh Hưng', 'artist/avatar/damvinhhung.jpg', 'artist/story/damvinhhung.txt', 'artist/award/damvinhhung.txt'),
('art14', 'Đan Nguyên', 'artist/avatar/dannguyen.jpg', 'artist/story/dannguyen.txt', 'artist/award/dannguyen.txt'),
('art15', 'Đạt Long Vinh', 'artist/avatar/datlongvinh.jpg', 'artist/story/datlongvinh.txt', 'artist/award/datlongvinh.txt'),
('art16', 'ĐEAMN', 'artist/avatar/deamn.jpg', 'artist/story/deamn.txt', 'artist/award/deamn.txt'),
('art17', 'Đen', 'artist/avatar/den.jpg', 'artist/story/den.txt', 'artist/award/den.txt'),
('art18', 'Dhruv', 'artist/avatar/dhruv.jpg', 'artist/story/dhruv.txt', 'artist/award/dhruv.txt'),
('art19', 'Dojacat', 'artist/avatar/dojacat.jpg', 'artist/story/dojacat.txt', 'artist/award/dojacat.txt'),
('art20', 'Dương Hồng Loan', 'artist/avatar/duonghongloan.jpg', 'artist/story/duonghongloan.txt', 'artist/award/duonghongloan.txt'),
('art21', 'Dương Ngọc Thái', 'artist/avatar/duongngocthai.jpg', 'artist/story/duongngocthai.txt', 'artist/award/duongngocthai.txt'),
('art22', 'ERIK', 'artist/avatar/erik.jpg', 'artist/story/erik.txt', 'artist/award/erik.txt'),
('art23', 'Eve', 'artist/avatar/eve.jpg', 'artist/story/eve.txt', 'artist/award/eve.txt'),
('art24', 'Foofighter', 'artist/avatar/foofighter.jpg', 'artist/story/foofighter.txt', 'artist/award/foofighter.txt'),
('art25', 'Gducky', 'artist/avatar/gducky.jpg', 'artist/story/gducky.txt', 'artist/award/gducky.txt'),
('art26', 'Giang Hồng Ngọc', 'artist/avatar/gianghongngoc.jpg', 'artist/story/gianghongngoc.txt', 'artist/award/gianghongngoc.txt'),
('art27', 'Harry Styles', 'artist/avatar/harrystyles.jpg', 'artist/story/harrystyles.txt', 'artist/award/harrystyles.txt'),
('art28', 'Hayd', 'artist/avatar/hayd.jpg', 'artist/story/hayd.txt', 'artist/award/hayd.txt'),
('art29', 'Hiếu Thứ Hai', 'artist/avatar/hieuthuhai.jpg', 'artist/story/hieuthuhai.txt', 'artist/award/hieuthuhai.txt'),
('art30', 'Hoàng Dũng', 'artist/avatar/hoangdung.jpg', 'artist/story/hoangdung.txt', 'artist/award/hoangdung.txt'),
('art31', 'Hồng Ngọc', 'artist/avatar/hongngoc.jpg', 'artist/story/hongngoc.txt', 'artist/award/hongngoc.txt'),
('art32', 'Hứa Kim Tuyền', 'artist/avatar/huakimtuyen.jpg', 'artist/story/huakimtuyen.txt', 'artist/award/huakimtuyen.txt'),
('art33', 'IU', 'artist/avatar/iu.jpg', 'artist/story/iu.txt', 'artist/award/iu.txt'),
('art34', 'Jessi', 'artist/avatar/jessi.jpg', 'artist/story/jessi.txt', 'artist/award/jessi.txt'),
('art35', 'Jplong', 'artist/avatar/jplong.jpg', 'artist/story/jplong.txt', 'artist/award/jplong.txt'),
('art36', 'Justatee', 'artist/avatar/justatee.jpg', 'artist/story/justatee.txt', 'artist/award/justatee.txt'),
('art37', 'Justin Bieber', 'artist/avatar/justinbieber.jpg', 'artist/story/justinbieber.txt', 'artist/award/justinbieber.txt'),
('art38', 'K-391', 'artist/avatar/k391.jpg', 'artist/story/k391.txt', 'artist/award/k391.txt'),
('art39', 'Khôi Vũ', 'artist/avatar/khoivu.jpg', 'artist/story/khoivu.txt', 'artist/award/khoivu.txt'),
('art40', 'Lena', 'artist/avatar/lena.jpg', 'artist/story/lena.txt', 'artist/award/lena.txt'),
('art41', 'Lệ Quyên', 'artist/avatar/lequyen.jpg', 'artist/story/lequyen.txt', 'artist/award/lequyen.txt'),
('art42', 'Lil Nas X', 'artist/avatar/lilnasx.jpg', 'artist/story/lilnasx.txt', 'artist/award/lilnasx.txt'),
('art43', 'Lisa', 'artist/avatar/lisa.jpg', 'artist/story/lisa.txt', 'artist/award/lisa.txt'),
('art44', 'Lizzo', 'artist/avatar/lizzo.jpg', 'artist/story/lizzo.txt', 'artist/award/lizzo.txt'),
('art45', 'Loco', 'artist/avatar/loco.jpg', 'artist/story/loco.txt', 'artist/award/loco.txt'),
('art46', 'Marnik', 'artist/avatar/marnik.jpg', 'artist/story/marnik.txt', 'artist/award/marnik.txt'),
('art47', 'Martin Garrix', 'artist/avatar/martingarrix.jpg', 'artist/story/martingarrix.txt', 'artist/award/martingarrix.txt'),
('art48', 'MCK', 'artist/avatar/mck.jpg', 'artist/story/mck.txt', 'artist/award/mck.txt'),
('art49', 'Miia', 'artist/avatar/miia.jpg', 'artist/story/miia.txt', 'artist/award/miia.txt'),
('art50', 'Mono', 'artist/avatar/mono.jpg', 'artist/story/mono.txt', 'artist/award/mono.txt'),
('art51', 'MRT', 'artist/avatar/mrt.jpg', 'artist/story/mrt.txt', 'artist/award/mrt.txt'),
('art52', 'Như Quỳnh', 'artist/avatar/nhuquynh.jpg', 'artist/story/nhuquynh.txt', 'artist/award/nhuquynh.txt'),
('art53', 'Nothing But Thieves', 'artist/avatar/nothingbutthieves.jpg', 'artist/story/nothingbutthieves.txt', 'artist/award/nothingbutthieves.txt'),
('art54', 'OSAD', 'artist/avatar/osad.jpg', 'artist/story/osad.txt', 'artist/award/osad.txt'),
('art55', 'Pháo', 'artist/avatar/phao.jpg', 'artist/story/phao.txt', 'artist/award/phao.txt'),
('art56', 'Phi Nhung', 'artist/avatar/phinhung.jpg', 'artist/story/phinhung.txt', 'artist/award/phinhung.txt'),
('art57', 'Phương Ly', 'artist/avatar/phuongly.jpg', 'artist/story/phuongly.txt', 'artist/award/phuongly.txt'),
('art58', 'Phương Thanh', 'artist/avatar/phuongthanh.jpg', 'artist/story/phuongthanh.txt', 'artist/award/phuongthanh.txt'),
('art59', 'Pink Sweat', 'artist/avatar/pinksweat.jpg', 'artist/story/pinksweat.txt', 'artist/award/pinksweat.txt'),
('art60', 'Powfu', 'artist/avatar/powfu.jpg', 'artist/story/powfu.txt', 'artist/award/powfu.txt'),
('art61', 'r3hab', 'artist/avatar/r3hab.jpg', 'artist/story/r3hab.txt', 'artist/award/r3hab.txt'),
('art62', 'Rose', 'artist/avatar/rose.jpg', 'artist/story/rose.txt', 'artist/award/rose.txt'),
('art63', 'Samfeldt', 'artist/avatar/samfeldt.jpg', 'artist/story/samfeldt.txt', 'artist/award/samfeldt.txt'),
('art64', 'Sơn Tùng M-TP', 'artist/avatar/sontungmtp.jpg', 'artist/story/sontungmtp.txt', 'artist/award/sontungmtp.txt'),
('art65', 'Soobin Hoàng Sơn', 'artist/avatar/shoobinhoangson.jpg', 'artist/story/shoobinhoangson.txt', 'artist/award/shoobinhoangson.txt'),
('art66', 'Tăng Duy Tân', 'artist/avatar/tangduytan.jpg', 'artist/story/tangduytan.txt', 'artist/award/tangduytan.txt'),
('art67', 'Taylor Swift', 'artist/avatar/taylorswift.jpg', 'artist/story/taylorswift.txt', 'artist/award/taylorswift.txt'),
('art68', 'The Chainsmokers', 'artist/avatar/thechainsmokers.jpg', 'artist/story/thechainsmokers.txt', 'artist/award/thechainsmokers.txt'),
('art69', 'The Same Persons', 'artist/avatar/thesamepersons.jpg', 'artist/story/thesamepersons.txt', 'artist/award/thesamepersons.txt'),
('art70', 'Trường Vũ', 'artist/avatar/truongvu.jpg', 'artist/story/truongvu.txt', 'artist/award/truongvu.txt'),
('art71', 'Vũ', 'artist/avatar/vu.jpg', 'artist/story/vu.txt', 'artist/award/vu.txt'),
('art72', 'Zayn', 'artist/avatar/zayn.jpg', 'artist/story/zayn.txt', 'artist/award/zayn.txt'),
('art73', 'Avamax', 'artist/avatar/avamax.jpg', 'artist/story/avamax.txt', 'artist/award/avamax.txt'),
('art74', 'Đình Dũng', 'artist/avatar/dinhdung.jpg', 'artist/story/dinhdung.txt', 'artist/award/dinhdung.txt'),
('art75', 'Nicky Youre', 'artist/avatar/nickyyoure.jpg', 'artist/story/nickyyoure.txt', 'artist/award/nickyyoure.txt'),
('art76', 'Mariah Carey', 'artist/avatar/mariahcarey.jpg', 'artist/story/mariahcarey.txt', 'artist/award/mariahcarey.txt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmtID` varchar(10) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `songID` varchar(50) NOT NULL,
  `commentDetail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cmtID`, `userName`, `songID`, `commentDetail`) VALUES
('cmt001', 'admin', 'song01', 'Bài hát gì mà hay vãi'),
('cmt5390', 'user', 'song58802', 'Nhạc hay nha'),
('cmt6440', 'nhattan123', 'song58802', 'bài hát hay'),
('cmt6610', 'premium', 'song58802', 'Bài gì hay vãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `genreID` varchar(50) NOT NULL,
  `genreName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `genre`
--

INSERT INTO `genre` (`genreID`, `genreName`) VALUES
('gen01', 'EDM'),
('gen02', 'Electric Dance'),
('gen03', 'Kpop'),
('gen04', 'Nhạc Trẻ'),
('gen05', 'Nhạc Trịnh'),
('gen06', 'Nhạc Trữ Tình'),
('gen07', 'Pop'),
('gen08', 'R&B'),
('gen09', 'Rap Việt'),
('gen10', 'Rock');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `liked`
--

CREATE TABLE `liked` (
  `userName` varchar(50) NOT NULL,
  `songID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `liked`
--

INSERT INTO `liked` (`userName`, `songID`) VALUES
('admin', 'song02'),
('admin', 'song08'),
('admin', 'song26'),
('admin', 'song62'),
('admin', 'song69'),
('admin', 'song97'),
('nhattan123', 'song58802'),
('user', 'song58802');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `playlistName` varchar(50) DEFAULT NULL,
  `playlistID` varchar(50) NOT NULL,
  `userName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `playlist`
--

INSERT INTO `playlist` (`playlistName`, `playlistID`, `userName`) VALUES
('newsong', 'pl01', 'admin'),
('chill', 'pl02', 'admin'),
('party', 'pl03', 'admin'),
('relax', 'pl04', 'admin'),
('study', 'pl05', 'admin'),
('sleep', 'pl06', 'admin'),
('topcharts', 'pl07', 'admin'),
('a', 'pl1214', 'user'),
('Hhhhh', 'pl1394', 'admin'),
('vinhramman', 'pl2150', 'admin'),
('test1', 'pl2657', 'admin'),
('s1', 'pl2776', 'user'),
('tesst', 'pl3204', 'user '),
('test', 'pl3289', 'admin'),
('abc', 'pl3457', 'admin'),
('test2', 'pl4440', 'admin'),
('english', 'pl4543', 'admin'),
('testPlaylist', 'pl491', 'user '),
('giáng sinh', 'pl7134', 'nhattan123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist_song`
--

CREATE TABLE `playlist_song` (
  `playlistID` varchar(50) NOT NULL,
  `songID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `playlist_song`
--

INSERT INTO `playlist_song` (`playlistID`, `songID`) VALUES
('pl01', 'song01'),
('pl03', 'song01'),
('pl1214', 'song01'),
('pl4543', 'song01'),
('pl01', 'song02'),
('pl3204', 'song02'),
('pl491', 'song02'),
('pl01', 'song03'),
('pl4543', 'song03'),
('pl01', 'song04'),
('pl03', 'song04'),
('pl07', 'song04'),
('pl03', 'song05'),
('pl7134', 'song07'),
('pl03', 'song08'),
('pl2657', 'song08'),
('pl3289', 'song08'),
('pl04', 'song12'),
('pl2776', 'song14'),
('pl05', 'song20'),
('pl07', 'song20'),
('pl05', 'song21'),
('pl07', 'song26'),
('pl05', 'song27'),
('pl07', 'song28'),
('pl02', 'song30'),
('pl04', 'song34'),
('pl07', 'song39'),
('pl06', 'song40'),
('pl06', 'song42'),
('pl06', 'song47'),
('pl06', 'song49'),
('pl1214', 'song58802'),
('pl2776', 'song58802'),
('pl7134', 'song58802'),
('pl04', 'song61'),
('pl07', 'song61'),
('pl02', 'song62'),
('pl02', 'song63'),
('pl07', 'song64'),
('pl02', 'song69'),
('pl04', 'song69'),
('pl07', 'song70'),
('pl05', 'song71'),
('pl07', 'song73'),
('pl07', 'song78');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `userName` varchar(50) NOT NULL,
  `songID` varchar(50) NOT NULL,
  `ratingStar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`userName`, `songID`, `ratingStar`) VALUES
('admin', 'song01', 3),
('admin', 'song02', 3.5),
('admin', 'song03', 1.5),
('admin', 'song04', 4),
('admin', 'song07', 4.5),
('admin', 'song08', 4),
('admin', 'song26', 3),
('premium', 'song28', 5),
('admin', 'song58802', 4.5),
('nhattan123', 'song58802', 5),
('user', 'song58802', 5),
('admin', 'song62', 5),
('admin', 'song97', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `songID` varchar(50) NOT NULL,
  `songName` varchar(50) DEFAULT NULL,
  `songImg` varchar(50) DEFAULT NULL,
  `songPath` varchar(50) DEFAULT NULL,
  `songLyric` varchar(100) DEFAULT NULL,
  `songDuration` varchar(50) DEFAULT NULL,
  `songLiked` int(50) DEFAULT NULL,
  `genreID` varchar(50) DEFAULT NULL,
  `artistID` varchar(50) DEFAULT NULL,
  `ratingStarAverage` float(1,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`songID`, `songName`, `songImg`, `songPath`, `songLyric`, `songDuration`, `songLiked`, `genreID`, `artistID`, `ratingStarAverage`) VALUES
('song01', 'Butterfly1', 'songs/edm/musicImg/butterfly.jpg', 'songs/edm/music/butterfly.mp3', 'songs/edm/musicLyric/butterfly.txt', '2:49', 9, 'gen01', 'art46', 0.0),
('song02', 'Fight', 'songs/edm/musicImg/fight.jpg', 'songs/edm/music/fight.mp3', 'songs/edm/musicLyric/fight.txt', '3:05', 8, 'gen01', 'art16', 0.0),
('song03', 'Follow Me', 'songs/edm/musicImg/followme.jpg', 'songs/edm/music/followme.mp3', 'songs/edm/musicLyric/followme.txt', '2:49', 10, 'gen01', 'art01', 0.0),
('song04', 'King Queen', 'songs/edm/musicImg/kingqueen.jpg', 'songs/edm/music/kingqueen.mp3', 'songs/edm/musicLyric/kingqueen.txt', '2:42', 101, 'gen01', 'art73', 0.0),
('song05', 'La La La', 'songs/edm/musicImg/lalala.jpg', 'songs/edm/music/lalala.mp3', 'songs/edm/musicLyric/lalala.txt', '2:27', 9, 'gen01', 'art61', 0.0),
('song06', 'Play', 'songs/edm/musicImg/play.jpg', 'songs/edm/music/play.mp3', 'songs/edm/musicLyric/play.txt', '3:07', 103, 'gen01', 'art38', 0.0),
('song07', 'Starts Align', 'songs/edm/musicImg/startsalign.jpg', 'songs/edm/music/startsalign.mp3', 'songs/edm/musicLyric/startsalign.txt', '2:43', 2000, 'gen01', 'art61', 0.0),
('song08', 'Versace', 'songs/edm/musicImg/versace.jpg', 'songs/edm/music/versace.mp3', 'songs/edm/musicLyric/versace.txt', '2:32', 56, 'gen01', 'art69', 0.0),
('song09', 'Alone', 'songs/electricaDance/musicImg/alone.jpg', 'songs/electricaDance/music/alone.mp3', 'songs/electricaDance/musicLyric/alone.txt', '2:38', 34, 'gen02', 'art03', 0.0),
('song10', 'Closer', 'songs/electricaDance/musicImg/closer.jpg', 'songs/electricaDance/music/closer.mp3', 'songs/electricaDance/musicLyric/closer.txt', '4:05', 102, 'gen02', 'art68', 0.0),
('song11', 'Darkside', 'songs/electricaDance/musicImg/darkside.jpg', 'songs/electricaDance/music/darkside.mp3', 'songs/electricaDance/musicLyric/darkside.txt', '3:31', 1, 'gen02', 'art03', 0.0),
('song12', 'Head In The Clouds', 'songs/electricaDance/musicImg/headintheclouds.jpg', 'songs/electricaDance/music/headintheclouds.mp3', 'songs/electricaDance/musicLyric/headintheclouds.txt', '3:04', 242, 'gen02', 'art28', 0.0),
('song13', 'Lily', 'songs/electricaDance/musicImg/lily.jpg', 'songs/electricaDance/music/lily.mp3', 'songs/electricaDance/musicLyric/lily.txt', '3:15', 11, 'gen02', 'art38', 0.0),
('song14', 'On My Way', 'songs/electricaDance/musicImg/onmyway.jpg', 'songs/electricaDance/music/onmyway.mp3', 'songs/electricaDance/musicLyric/onmyway.txt', '3:14', 453, 'gen02', 'art03', 0.0),
('song15', 'Save Me', 'songs/electricaDance/musicImg/saveme.jpg', 'songs/electricaDance/music/saveme.mp3', 'songs/electricaDance/musicLyric/saveme.txt', '3:04', 112, 'gen02', 'art16', 0.0),
('song16', 'Sign', 'songs/electricaDance/musicImg/sign.jpg', 'songs/electricaDance/music/sign.mp3', 'songs/electricaDance/musicLyric/sign.txt', '3:11', 109, 'gen02', 'art16', 0.0),
('song17', 'So Far Away', 'songs/electricaDance/musicImg/sofaraway.jpg', 'songs/electricaDance/music/sofaraway.mp3', 'songs/electricaDance/musicLyric/sofaraway.txt', '3:03', 20, 'gen02', 'art47', 0.0),
('song18', 'The Spectre', 'songs/electricaDance/musicImg/thespectre.jpg', 'songs/electricaDance/music/thespectre.mp3', 'songs/electricaDance/musicLyric/thespectre.txt', '3:13', 1, 'gen02', 'art03', 0.0),
('song19', 'Bang Bang Bang', 'songs/kpop/musicImg/bangbangbang.jpg', 'songs/kpop/music/bangbangbang.mp3', 'songs/kpop/musicLyric/bangbangbang.txt', '3:40', 120, 'gen03', 'art07', 0.0),
('song20', 'Celebrity', 'songs/kpop/musicImg/celebrity.jpg', 'songs/kpop/music/celebrity.mp3', 'songs/kpop/musicLyric/celebrity.txt', '3:15', 120, 'gen03', 'art33', 0.0),
('song21', 'Eight', 'songs/kpop/musicImg/eight.jpg', 'songs/kpop/music/eight.mp3', 'songs/kpop/musicLyric/eight.txt', '2:47', 112, 'gen03', 'art33', 0.0),
('song22', 'Gone', 'songs/kpop/musicImg/gone.jpg', 'songs/kpop/music/gone.mp3', 'songs/kpop/musicLyric/gone.txt', '3:27', 50, 'gen03', 'art62', 0.0),
('song23', 'Lalisa', 'songs/kpop/musicImg/lalisa.jpg', 'songs/kpop/music/lalisa.mp3', 'songs/kpop/musicLyric/lalisa.txt', '3:22', 157, 'gen03', 'art43', 0.0),
('song24', 'Money', 'songs/kpop/musicImg/money.jpg', 'songs/kpop/music/money.mp3', 'songs/kpop/musicLyric/money.txt', '2:50', 0, 'gen03', 'art43', 0.0),
('song25', 'On The Ground', 'songs/kpop/musicImg/ontheground.jpg', 'songs/kpop/music/ontheground.mp3', 'songs/kpop/musicLyric/ontheground.txt', '2:48', 0, 'gen03', 'art62', 0.0),
('song26', 'Pink Venom', 'songs/kpop/musicImg/pinkvenom.jpg', 'songs/kpop/music/pinkvenom.mp3', 'songs/kpop/musicLyric/pinkvenom.txt', '3:07', 121, 'gen03', 'art09', 0.0),
('song27', 'Say Yes', 'songs/kpop/musicImg/sayyes.jpg', 'songs/kpop/music/sayyes.mp3', 'songs/kpop/musicLyric/sayyes.txt', '3:38', 0, 'gen03', 'art45', 0.0),
('song28', 'Shut Down', 'songs/kpop/musicImg/shutdown.jpg', 'songs/kpop/music/shutdown.mp3', 'songs/kpop/musicLyric/shutdown.txt', '2:55', 120, 'gen03', 'art09', 0.0),
('song29', 'Zoom', 'songs/kpop/musicImg/zoom.jpg', 'songs/kpop/music/zoom.mp3', 'songs/kpop/musicLyric/zoom.txt', '2:54', 243, 'gen03', 'art34', 0.0),
('song30', 'Bước Qua Nhau', 'songs/nhacTre/musicImg/buocquanhau.jpg', 'songs/nhacTre/music/buocquanhau.mp3', 'songs/nhacTre/musicLyric/buocquanhau.txt', '4:17', 2, 'gen04', 'art71', 0.0),
('song31', 'Cơn Mưa Xa Dần', 'songs/nhacTre/musicImg/conmuaxadan.jpg', 'songs/nhacTre/music/conmuaxadan.mp3', 'songs/nhacTre/musicLyric/conmuaxadan.txt', '3:16', 120, 'gen04', 'art64', 0.0),
('song32', 'Dạ Vũ', 'songs/nhacTre/musicImg/davu.jpg', 'songs/nhacTre/music/davu.mp3', 'songs/nhacTre/musicLyric/davu.txt', '3:22', 157, 'gen04', 'art66', 0.0),
('song33', 'Đế Vương', 'songs/nhacTre/musicImg/devuong.jpg', 'songs/nhacTre/music/devuong.mp3', 'songs/nhacTre/musicLyric/devuong.txt', '4:22', 243, 'gen04', 'art74', 0.0),
('song34', 'Hai Mươi Hai', 'songs/nhacTre/musicImg/haimuoihai.jpg', 'songs/nhacTre/music/haimuoihai.mp3', 'songs/nhacTre/musicLyric/haimuoihai.txt', '3:59', 120, 'gen04', 'art32', 0.0),
('song35', 'Lạ Lùng', 'songs/nhacTre/musicImg/lalung.jpg', 'songs/nhacTre/music/lalung.mp3', 'songs/nhacTre/musicLyric/lalung.txt', '4:21', 243, 'gen04', 'art71', 0.0),
('song36', 'Nắng Ấm Ngang Qua', 'songs/nhacTre/musicImg/nangamngangqua.jpg', 'songs/nhacTre/music/nangamngangqua.mp3', 'songs/nhacTre/musicLyric/nangamngangqua.txt', '3:15', 124, 'gen04', 'art64', 0.0),
('song37', 'Nàng Thơ', 'songs/nhacTre/musicImg/nangtho.jpg', 'songs/nhacTre/music/nangtho.mp3', 'songs/nhacTre/musicLyric/nangtho.txt', '4:14', 120, 'gen04', 'art30', 0.0),
('song38', 'Pháo Hồng', 'songs/nhacTre/musicImg/phaohong.jpg', 'songs/nhacTre/music/phaohong.mp3', 'songs/nhacTre/musicLyric/phaohong.txt', '3:55', 57, 'gen04', 'art15', 0.0),
('song39', 'Waiting For You', 'songs/nhacTre/musicImg/waitingforyou.jpg', 'songs/nhacTre/music/waitingforyou.mp3', 'songs/nhacTre/musicLyric/waitingforyou.txt', '4:25', 120, 'gen04', 'art50', 0.0),
('song40', 'Biển Nhớ', 'songs/nhacTrinh/musicImg/biennho.jpg', 'songs/nhacTrinh/music/biennho.mp3', 'songs/nhacTrinh/musicLyric/biennho.txt', '5:29', 2, 'gen05', 'art41', 0.0),
('song41', 'Cát Bụi', 'songs/nhacTrinh/musicImg/catbui.jpg', 'songs/nhacTrinh/music/catbui.mp3', 'songs/nhacTrinh/musicLyric/catbui.txt', '4:53', 112, 'gen05', 'art58', 0.0),
('song42', 'Diễm Xưa', 'songs/nhacTrinh/musicImg/diemxua.jpg', 'songs/nhacTrinh/music/diemxua.mp3', 'songs/nhacTrinh/musicLyric/diemxua.txt', '5:41', 120, 'gen05', 'art41', 0.0),
('song43', 'Hạ Trắng', 'songs/nhacTrinh/musicImg/hatrang.jpg', 'songs/nhacTrinh/music/hatrang.mp3', 'songs/nhacTrinh/musicLyric/hatrang.txt', '5:07', 157, 'gen05', 'art26', 0.0),
('song44', 'Khúc Thụy Du', 'songs/nhacTrinh/musicImg/khucthuydu.jpg', 'songs/nhacTrinh/music/khucthuydu.mp3', 'songs/nhacTrinh/musicLyric/khucthuydu.txt', '5:04', 120, 'gen05', 'art31', 0.0),
('song45', 'Một Cõi Đi Về', 'songs/nhacTrinh/musicImg/motcoidive.jpg', 'songs/nhacTrinh/music/motcoidive.mp3', 'songs/nhacTrinh/musicLyric/motcoidive.txt', '4:36', 112, 'gen05', 'art06', 0.0),
('song46', 'Mưa Hồng', 'songs/nhacTrinh/musicImg/muahong.jpg', 'songs/nhacTrinh/music/muahong.mp3', 'songs/nhacTrinh/musicLyric/muahong.txt', '4:38', 0, 'gen05', 'art41', 0.0),
('song47', 'Nắng Thủy Tinh', 'songs/nhacTrinh/musicImg/nangthuytinh.jpg', 'songs/nhacTrinh/music/nangthuytinh.mp3', 'songs/nhacTrinh/musicLyric/nangthuytinh.txt', '4:01', 120, 'gen05', 'art30', 0.0),
('song48', 'Như Cánh Vạc Bay', 'songs/nhacTrinh/musicImg/nhucanhvacbay.jpg', 'songs/nhacTrinh/music/nhucanhvacbay.mp3', 'songs/nhacTrinh/musicLyric/nhucanhvacbay.txt', '5:50', 112, 'gen05', 'art13', 0.0),
('song49', 'Tình Nhớ', 'songs/nhacTrinh/musicImg/tinhnho.jpg', 'songs/nhacTrinh/music/tinhnho.mp3', 'songs/nhacTrinh/musicLyric/tinhnho.txt', '4:51', 120, 'gen05', 'art05', 0.0),
('song50', 'Biển Tình', 'songs/nhacTruTinh/musicImg/bientinh.jpg', 'songs/nhacTruTinh/music/bientinh.mp3', 'songs/nhacTruTinh/musicLyric/bientinh.txt', '4:25', 0, 'gen06', 'art13', 0.0),
('song51', 'Bội Bạc', 'songs/nhacTruTinh/musicImg/boibac.jpg', 'songs/nhacTruTinh/music/boibac.mp3', 'songs/nhacTruTinh/musicLyric/boibac.txt', '5:59', 120, 'gen06', 'art20', 0.0),
('song52', 'Bông Điên Điển', 'songs/nhacTruTinh/musicImg/bongdiendien.jpg', 'songs/nhacTruTinh/music/bongdiendien.mp3', 'songs/nhacTruTinh/musicLyric/bongdiendien.txt', '4:27', 10, 'gen06', 'art56', 0.0),
('song53', 'Chờ Người', 'songs/nhacTruTinh/musicImg/chonguoi.jpg', 'songs/nhacTruTinh/music/chonguoi.mp3', 'songs/nhacTruTinh/musicLyric/chonguoi.txt', '4:50', 120, 'gen01', 'art52', 0.0),
('song54', 'Duyên Phận', 'songs/nhacTruTinh/musicImg/duyenphan.jpg', 'songs/nhacTruTinh/music/duyenphan.mp3', 'songs/nhacTruTinh/musicLyric/duyenphan.txt', '5:48', 70, 'gen06', 'art20', 0.0),
('song55', 'Gọi Đò', 'songs/nhacTruTinh/musicImg/goido.jpg', 'songs/nhacTruTinh/music/goido.mp3', 'songs/nhacTruTinh/musicLyric/goido.txt', '5:21', 120, 'gen06', 'art21', 0.0),
('song56', 'Mưa Rừng', 'songs/nhacTruTinh/musicImg/muarung.jpg', 'songs/nhacTruTinh/music/muarung.mp3', 'songs/nhacTruTinh/musicLyric/muarung.txt', '3:50', 5, 'gen06', 'art20', 0.0),
('song57', 'Túy Ca', 'songs/nhacTruTinh/musicImg/tuyca.jpg', 'songs/nhacTruTinh/music/tuyca.mp3', 'songs/nhacTruTinh/musicLyric/tuyca.txt', '5:24', 120, 'gen06', 'art14', 0.0),
('song58', 'Thành Phố Buồn', 'songs/nhacTruTinh/musicImg/thanhphobuon.jpg', 'songs/nhacTruTinh/music/thanhphobuon.mp3', 'songs/nhacTruTinh/musicLyric/thanhphobuon.txt', '6:01', 54, 'gen06', 'art70', 0.0),
('song58802', 'All I Want For Christmas Is You', 'songs/pop/musicImg/alliwantforchristmasisyou.jpg', 'songs/pop/music/alliwantforchristmasisyou.mp3', 'songs/pop/musicLyric/alliwantforchristmasisyou.txt', '4:01', 2, 'gen07', 'art76', 0.0),
('song59', 'Thói Đời', 'songs/nhacTruTinh/musicImg/thoidoi.jpg', 'songs/nhacTruTinh/music/thoidoi.mp3', 'songs/nhacTruTinh/musicLyric/thoidoi.txt', '4:08', 2, 'gen06', 'art14', 0.0),
('song60', '2 Be Loved', 'songs/pop/musicImg/2beloved.jpg', 'songs/pop/music/2beloved.mp3', 'songs/pop/musicLyric/2beloved.txt', '3:08', 22, 'gen07', 'art44', 0.0),
('song61', 'At My Worst', 'songs/pop/musicImg/atmyworst.jpg', 'songs/pop/music/atmyworst.mp3', 'songs/pop/musicLyric/atmyworst.txt', '2:50', 35, 'gen07', 'art59', 0.0),
('song62', 'Death Bed', 'songs/pop/musicImg/deathbed.jpg', 'songs/pop/music/deathbed.mp3', 'songs/pop/musicLyric/deathbed.txt', '2:53', 36, 'gen07', 'art60', 0.0),
('song63', 'Double Take', 'songs/pop/musicImg/doubletake.jpg', 'songs/pop/music/doubletake.mp3', 'songs/pop/musicLyric/doubletake.txt', '2:51', 124, 'gen07', 'art18', 0.0),
('song64', 'Dusk Till Dawn', 'songs/pop/musicImg/dusktilldawn.jpg', 'songs/pop/music/dusktilldawn.mp3', 'songs/pop/musicLyric/dusktilldawn.txt', '2:55', 124, 'gen07', 'art72', 0.0),
('song65', 'Dynasty', 'songs/pop/musicImg/dynasty.jpg', 'songs/pop/music/dynasty.mp3', 'songs/pop/musicLyric/dynasty.txt', '2:45', 77, 'gen07', 'art49', 0.0),
('song66', 'Easy On Me', 'songs/pop/musicImg/easyonme.jpg', 'songs/pop/music/easyonme.mp3', 'songs/pop/musicLyric/easyonme.txt', '3:44', 89, 'gen07', 'art02', 0.0),
('song67', 'I Drink Wine', 'songs/pop/musicImg/idrinkwine.jpg', 'songs/pop/music/idrinkwine.mp3', 'songs/pop/musicLyric/idrinkwine.txt', '6:16', 77, 'gen07', 'art02', 0.0),
('song68', 'Industry Baby', 'songs/pop/musicImg/industrybaby.jpg', 'songs/pop/music/industrybaby.mp3', 'songs/pop/musicLyric/industrybaby.txt', '3:32', 77, 'gen07', 'art42', 0.0),
('song69', 'Mood', 'songs/pop/musicImg/mood.jpg', 'songs/pop/music/mood.mp3', 'songs/pop/musicLyric/mood.txt', '2:18', 158, 'gen07', 'art01', 0.0),
('song70', 'Say So', 'songs/pop/musicImg/sayso.jpg', 'songs/pop/music/sayso.mp3', 'songs/pop/musicLyric/sayso.txt', '3:26', 84, 'gen07', 'art19', 0.0),
('song71', 'Stay', 'songs/pop/musicImg/stay.jpg', 'songs/pop/music/stay.mp3', 'songs/pop/musicLyric/stay.txt', '2:21', 84, 'gen07', 'art37', 0.0),
('song72', 'Sunroof', 'songs/pop/musicImg/sunroof.jpg', 'songs/pop/music/sunroof.mp3', 'songs/pop/musicLyric/sunroof.txt', '2:43', 16, 'gen07', 'art75', 0.0),
('song73', 'The Great War', 'songs/pop/musicImg/thegreatwar.jpg', 'songs/pop/music/thegreatwar.mp3', 'songs/pop/musicLyric/thegreatwar.txt', '4:00', 0, 'gen07', 'art67', 0.0),
('song74', 'Chìm Sâu', 'songs/rAndB/musicImg/chimsau.jpg', 'songs/rAndB/music/chimsau.mp3', 'songs/rAndB/musicLyric/chimsau.txt', '2:36', 67, 'gen08', 'art48', 0.0),
('song75', 'Em Bé', 'songs/rAndB/musicImg/embe.jpg', 'songs/rAndB/music/embe.mp3', 'songs/rAndB/musicLyric/embe.txt', '3:12', 67, 'gen08', 'art04', 0.0),
('song76', 'Em Là', 'songs/rAndB/musicImg/emla.jpg', 'songs/rAndB/music/emla.mp3', 'songs/rAndB/musicLyric/emla.txt', '3:17', 67, 'gen08', 'art50', 0.0),
('song77', 'Fantasy', 'songs/rAndB/musicImg/fantasy.jpg', 'songs/rAndB/music/fantasy.mp3', 'songs/rAndB/musicLyric/fantasy.txt', '2:54', 0, 'gen08', 'art39', 0.0),
('song78', 'Missing You', 'songs/rAndB/musicImg/missingyou.jpg', 'songs/rAndB/music/missingyou.mp3', 'songs/rAndB/musicLyric/missingyou.txt', '4:02', 9, 'gen08', 'art57', 0.0),
('song79', 'Ngọt', 'songs/rAndB/musicImg/ngot.jpg', 'songs/rAndB/music/ngot.mp3', 'songs/rAndB/musicLyric/ngot.txt', '2:34', 157, 'gen08', 'art36', 0.0),
('song80', 'Sau Tất Cả', 'songs/rAndB/musicImg/sautatca.jpg', 'songs/rAndB/music/sautatca.mp3', 'songs/rAndB/musicLyric/sautatca.txt', '2:54', 200, 'gen08', 'art22', 0.0),
('song81', 'Say', 'songs/rAndB/musicImg/say.jpg', 'songs/rAndB/music/say.mp3', 'songs/rAndB/musicLyric/say.txt', '2:57', 124, 'gen08', 'art40', 0.0),
('song82', 'Tháng Năm', 'songs/rAndB/musicImg/thangnam.jpg', 'songs/rAndB/music/thangnam.mp3', 'songs/rAndB/musicLyric/thangnam.txt', '3:01', 80, 'gen08', 'art65', 0.0),
('song83', 'Thu Cuối', 'songs/rAndB/musicImg/thucuoi.jpg', 'songs/rAndB/music/thucuoi.mp3', 'songs/rAndB/musicLyric/thucuoi.txt', '4:49', 0, 'gen08', 'art51', 0.0),
('song84', '2 Am', 'songs/rapViet/musicImg/2am.jpg', 'songs/rapViet/music/2am.mp3', 'songs/rapViet/musicLyric/2am.txt', '4:18', 0, 'gen09', 'art36', 0.0),
('song8443', 'Gone Girl', 'songs/pop/musicImg/gonegirl.jpg', 'songs/pop/music/gonegirl.mp3', 'songs/pop/musicLyric/gonegirl.txt', '4:04', 0, 'gen07', 'art23', 0.0),
('song85', '2 Phút Hơn', 'songs/rapViet/musicImg/2phuthon.jpg', 'songs/rapViet/music/2phuthon.mp3', 'songs/rapViet/musicLyric/2phuthon.txt', '2:29', 12, 'gen09', 'art55', 0.0),
('song86', 'Breakfast', 'songs/rapViet/musicImg/breakfast.jpg', 'songs/rapViet/music/breakfast.mp3', 'songs/rapViet/musicLyric/breakfast.txt', '3:26', 3, 'gen09', 'art25', 0.0),
('song87', 'Em Đừng Đi', 'songs/rapViet/musicImg/emdungdi.jpg', 'songs/rapViet/music/emdungdi.mp3', 'songs/rapViet/musicLyric/emdungdi.txt', '4:12', 44, 'gen09', 'art64', 0.0),
('song88', 'Một Nhà', 'songs/rapViet/musicImg/motnha.jpg', 'songs/rapViet/music/motnha.mp3', 'songs/rapViet/musicLyric/motnha.txt', '3:05', 77, 'gen09', 'art12', 0.0),
('song89', 'Mười Năm', 'songs/rapViet/musicImg/muoinam.jpg', 'songs/rapViet/music/muoinam.mp3', 'songs/rapViet/musicLyric/muoinam.txt', '4:17', 157, 'gen09', 'art17', 0.0),
('song90', 'Người Âm Phủ', 'songs/rapViet/musicImg/nguoiamphu.jpg', 'songs/rapViet/music/nguoiamphu.mp3', 'songs/rapViet/musicLyric/nguoiamphu.txt', '0:32', 0, 'gen09', 'art54', 0.0),
('song91', 'Sao Cũng Được', 'songs/rapViet/musicImg/saocungduoc.jpg', 'songs/rapViet/music/saocungduoc.mp3', 'songs/rapViet/musicLyric/saocungduoc.txt', '4:27', 77, 'gen09', 'art08', 0.0),
('song92', 'Vệ Tinh', 'songs/rapViet/musicImg/vetinh.jpg', 'songs/rapViet/music/vetinh.mp3', 'songs/rapViet/musicLyric/vetinh.txt', '3:39', 77, 'gen09', 'art29', 0.0),
('song93', 'Vinarap', 'songs/rapViet/musicImg/vinarap.jpg', 'songs/rapViet/music/vinarap.mp3', 'songs/rapViet/musicLyric/vinarap.txt', '3:49', 25, 'gen09', 'art35', 0.0),
('song94', 'Best Of You', 'songs/rock/musicImg/bestofyou.jpg', 'songs/rock/music/bestofyou.mp3', 'songs/rock/musicLyric/bestofyou.txt', '4:15', 24, 'gen10', 'art24', 0.0),
('song95', 'Future Proof', 'songs/rock/musicImg/futureproof.jpg', 'songs/rock/music/futureproof.mp3', 'songs/rock/musicLyric/futureproof.txt', '3:27', 34, 'gen10', 'art53', 0.0),
('song96', 'Kaikai Kitan', 'songs/rock/musicImg/kaikaikitan.jpg', 'songs/rock/music/kaikaikitan.mp3', 'songs/rock/musicLyric/kaikaikitan.txt', '3:39', 4, 'gen10', 'art23', 0.0),
('song97', 'Late Night Talking', 'songs/rock/musicImg/latenighttalking.jpg', 'songs/rock/music/latenighttalking.mp3', 'songs/rock/musicLyric/latenighttalking.txt', '2:57', 4, 'gen10', 'art27', 0.0),
('song98', 'Ludens', 'songs/rock/musicImg/ludens.jpg', 'songs/rock/music/ludens.mp3', 'songs/rock/musicLyric/ludens.txt', '5:37', 12, 'gen10', 'art10', 0.0),
('song99', 'Seven Nation Army', 'songs/rock/musicImg/sevennationarmy.jpg', 'songs/rock/music/sevennationarmy.mp3', 'songs/rock/musicLyric/sevennationarmy.txt', '3:55', 23, 'gen10', 'art01', 0.0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userName` varchar(50) NOT NULL,
  `userFullName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `userEmail` varchar(50) DEFAULT NULL,
  `userImg` varchar(50) DEFAULT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userName`, `userFullName`, `userPassword`, `userEmail`, `userImg`, `userType`) VALUES
('admin', 'Le Vo Nhat Tan', '123456', 'nhattan31052002@gmail.com', './img/default.png  ', 'admin'),
('nhattan123', 'Nhat Tan', '123456', 'nhattan31052002@gmail.com', './img/default.png', 'premium'),
('premium', 'Quoc Vinh', '123456', 'quocvinh@gmail.com', './img/default.png  ', 'premium'),
('user', 'Van Son', '123456', 'sontac@gmail.com', './img/default.png ', 'premium');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmtID`),
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Chỉ mục cho bảng `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`userName`,`songID`),
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlistID`),
  ADD KEY `userName` (`userName`);

--
-- Chỉ mục cho bảng `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD PRIMARY KEY (`songID`,`playlistID`),
  ADD KEY `playlistID` (`playlistID`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`songID`,`userName`),
  ADD KEY `userName` (`userName`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`),
  ADD KEY `genreID` (`genreID`),
  ADD KEY `artistID` (`artistID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `liked`
--
ALTER TABLE `liked`
  ADD CONSTRAINT `liked_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`),
  ADD CONSTRAINT `liked_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`);

--
-- Các ràng buộc cho bảng `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD CONSTRAINT `playlist_song_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`),
  ADD CONSTRAINT `playlist_song_ibfk_2` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`);

--
-- Các ràng buộc cho bảng `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
