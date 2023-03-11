-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-06-25 17:59:05
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `dazuoye`
--

-- --------------------------------------------------------

--
-- 表的结构 `shixun`
--

CREATE TABLE `shixun` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Type` int(10) DEFAULT NULL,
  `idCard` varchar(18) DEFAULT NULL,
  `ExamCard` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Grade` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shixun`
--

INSERT INTO `shixun` (`id`, `name`, `Type`, `idCard`, `ExamCard`, `Location`, `Grade`) VALUES
(2, '张锋', 4, '200526460512', '1111', '西藏', 20),
(3, '王晓红', 6, '200526460566', '22515559815', '哈尔滨', 95),
(4, '乐瑶', 4, 'ooxoooxx', '58455445s', '重庆', 100),
(5, '张伟宁', 6, '1111111111', '2222222', '河北', 100);

-- --------------------------------------------------------

--
-- 表的结构 `stu`
--

CREATE TABLE `stu` (
  `userid` int(10) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `xingBie` char(2) DEFAULT NULL,
  `dianHua` varchar(11) DEFAULT NULL,
  `banJi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stu`
--

INSERT INTO `stu` (`userid`, `user`, `pwd`, `xingBie`, `dianHua`, `banJi`) VALUES
(1, '付小东', '123', '男', '18311748393', '1170131125'),
(2, '张乐瑶', '123', '女', '18311748393', '1501411'),
(3, '驼璐璐', '789', '女', '1834662164', '16023115'),
(4, '王小明', '555', '女', '222', '3333'),
(5, '星星有泪', '123', '女', '12546651515', '5159159948');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`name`, `pwd`) VALUES
('xiaofuwen', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`) VALUES
(1, 'hewenje', '123456'),
(2, '张乐瑶', 'xxoo'),
(3, '小恶魔', 'abc');

--
-- 转储表的索引
--

--
-- 表的索引 `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`userid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `stu`
--
ALTER TABLE `stu`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
