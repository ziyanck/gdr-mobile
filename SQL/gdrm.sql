-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-06 17:23:01
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdrm`
--

-- --------------------------------------------------------

--
-- 表的结构 `gdrm_action`
--

CREATE TABLE IF NOT EXISTS `gdrm_action` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `name` char(30) NOT NULL DEFAULT '' COMMENT '行为唯一标识',
  `title` char(80) NOT NULL DEFAULT '' COMMENT '行为说明',
  `remark` char(140) NOT NULL DEFAULT '' COMMENT '行为描述',
  `rule` text NOT NULL COMMENT '行为规则',
  `log` text NOT NULL COMMENT '日志规则',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '类型',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='系统行为表';

-- --------------------------------------------------------

--
-- 表的结构 `gdrm_action_log`
--

CREATE TABLE IF NOT EXISTS `gdrm_action_log` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `action_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '行为id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '执行用户id',
  `action_ip` bigint(20) NOT NULL COMMENT '执行行为者ip',
  `model` varchar(50) NOT NULL DEFAULT '' COMMENT '触发行为的表',
  `record_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '触发行为的数据id',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '日志备注',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '执行行为的时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='行为日志表';

-- --------------------------------------------------------

--
-- 表的结构 `gdrm_member`
--

CREATE TABLE IF NOT EXISTS `gdrm_member` (
  `uid` int(10) unsigned NOT NULL COMMENT '用户ID',
  `nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date NOT NULL DEFAULT '0000-00-00' COMMENT '生日',
  `qq` char(10) NOT NULL DEFAULT '' COMMENT 'qq号',
  `score` mediumint(8) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `create_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `create_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '会员状态'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员表';

--
-- 转存表中的数据 `gdrm_member`
--

INSERT INTO `gdrm_member` (`uid`, `nickname`, `sex`, `birthday`, `qq`, `score`, `login_count`, `last_login_ip`, `last_login_time`, `create_ip`, `create_user_id`, `create_time`, `update_time`, `status`) VALUES
(1, 'zithan', 0, '0000-00-00', '', 0, 12, 3232235877, 1438867223, 0, 0, 1436286024, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `gdrm_ucenter_member`
--

CREATE TABLE IF NOT EXISTS `gdrm_ucenter_member` (
  `id` int(10) unsigned NOT NULL COMMENT '用户id',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `mobile` char(15) NOT NULL COMMENT '手机',
  `email` char(30) DEFAULT NULL COMMENT '邮箱',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0',
  `login_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `create_ip` bigint(20) NOT NULL,
  `create_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建人',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gdrm_ucenter_member`
--

INSERT INTO `gdrm_ucenter_member` (`id`, `username`, `password`, `mobile`, `email`, `last_login_time`, `last_login_ip`, `login_count`, `create_ip`, `create_user_id`, `create_time`, `update_time`, `status`) VALUES
(1, 'zithan', '8ef94ed4d29b9e84b6342121d207891f', '18802635511', 'zithan@163.com', 1438696061, 2130706433, 0, 0, 0, 1438363925, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gdrm_action`
--
ALTER TABLE `gdrm_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdrm_action_log`
--
ALTER TABLE `gdrm_action_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_ip_ix` (`action_ip`),
  ADD KEY `action_id_ix` (`action_id`),
  ADD KEY `user_id_ix` (`user_id`);

--
-- Indexes for table `gdrm_member`
--
ALTER TABLE `gdrm_member`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `gdrm_ucenter_member`
--
ALTER TABLE `gdrm_ucenter_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uId` (`id`),
  ADD UNIQUE KEY `nickname` (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gdrm_action`
--
ALTER TABLE `gdrm_action`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `gdrm_action_log`
--
ALTER TABLE `gdrm_action_log`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `gdrm_member`
--
ALTER TABLE `gdrm_member`
  MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gdrm_ucenter_member`
--
ALTER TABLE `gdrm_ucenter_member`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
