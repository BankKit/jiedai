<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `fanwe_deal`;");
E_C("CREATE TABLE `fanwe_deal` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `is_effect` tinyint(1) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `icon_type` tinyint(1) NOT NULL COMMENT '0自己上传，2用户头像，3类型图',
  `icon` varchar(255) NOT NULL,
  `seo_title` text NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_description` text NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `is_new` tinyint(1) NOT NULL,
  `is_best` tinyint(1) NOT NULL,
  `borrow_amount` double NOT NULL,
  `min_loan_money` double NOT NULL default '50',
  `repay_time` int(11) NOT NULL,
  `rate` double(10,2) NOT NULL,
  `day` int(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `name_match` text NOT NULL,
  `name_match_row` text NOT NULL,
  `deal_cate_match` text NOT NULL,
  `deal_cate_match_row` text NOT NULL,
  `tag_match` text NOT NULL,
  `tag_match_row` text NOT NULL,
  `type_match` text NOT NULL,
  `type_match_row` text NOT NULL,
  `is_recommend` tinyint(1) NOT NULL,
  `buy_count` int(11) NOT NULL,
  `load_money` double(20,4) NOT NULL COMMENT '已投标多少',
  `repay_money` double(20,4) NOT NULL COMMENT '还了多少！',
  `start_time` int(11) NOT NULL,
  `success_time` int(11) NOT NULL,
  `repay_start_time` int(11) NOT NULL,
  `last_repay_time` int(11) NOT NULL,
  `next_repay_time` int(11) NOT NULL,
  `bad_time` int(11) NOT NULL,
  `deal_status` tinyint(4) NOT NULL COMMENT '0待等材料，1进行中，2满标，3流标，4还款中，5已还清',
  `enddate` int(11) NOT NULL,
  `voffice` tinyint(1) NOT NULL,
  `vposition` tinyint(1) NOT NULL,
  `services_fee` varchar(20) NOT NULL,
  `publish_wait` tinyint(1) NOT NULL,
  `is_send_bad_msg` tinyint(1) NOT NULL COMMENT '是否已发送流标通知',
  `bad_msg` text NOT NULL,
  `send_half_msg_time` int(11) NOT NULL,
  `send_three_msg_time` int(11) NOT NULL,
  `is_send_half_msg` tinyint(1) default NULL,
  `is_has_loans` tinyint(11) NOT NULL,
  `loantype` tinyint(1) NOT NULL,
  `warrant` tinyint(1) NOT NULL,
  `titlecolor` varchar(20) NOT NULL,
  `is_send_contract` tinyint(1) NOT NULL,
  `repay_time_type` tinyint(1) NOT NULL default '1',
  `max_loan_money` double NOT NULL default '0',
  `is_delivery` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cate_id` (`cate_id`),
  KEY `sort` (`sort`),
  KEY `create_time` (`create_time`),
  KEY `update_time` (`update_time`),
  KEY `user_id` USING BTREE (`user_id`),
  KEY `idx_1` (`user_id`,`publish_wait`),
  KEY `idx_0` (`deal_status`,`user_id`,`publish_wait`),
  FULLTEXT KEY `name_match` (`name_match`),
  FULLTEXT KEY `tag_match` (`tag_match`),
  FULLTEXT KEY `deal_cate_match` (`deal_cate_match`),
  FULLTEXT KEY `all_match` (`name_match`,`deal_cate_match`,`tag_match`,`type_match`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `fanwe_deal` values('1','qtwetehg','','0','0','3','et    tgsgse ts e tfeg   sta ta a sa gst strysa t y set s df ts ssts etwt twstaydhdt wset we we ryd dshds j sj  shys hst sdha a h srhjs','1','0','0','1','3','./public/images/dealtype/dqzz.png','','','','0','0','0','1000000','50','3','15.00','0','1380047209','0','','','','','','','','','0','0','0.0000','0.0000','0','0','0','0','0','0','0','7','0','1','','1','0','','0','0',NULL,'0','0','0','','0','1','0','0');");
E_D("replace into `fanwe_deal` values('2','买车','买车','1','1','6','试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试 试试','1','0','0','2','3','./public/images/dealtype/qcxf.png','','','','0','0','0','100000','50','3','24.00','0','1381195820','1381730588','ux20080ux36710','买车','ux20449ux29992ux35748ux35777ux26631','信用认证标','','','ux36141ux25151ux20511ux27454','购房借款','1','0','0.0000','0.0000','1381298706','0','0','0','0','1381903506','3','7','0','1','5','0','1','','0','0','0','0','1','2','','0','1','0','0');");
E_D("replace into `fanwe_deal` values('3','资金周转','HHGH','1','1','8','四十一一样一样SDFFFXCDSFFSDFDFSDFSDSDSDFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF','1','0','0','1','1','http://p2p.xtidi.com/data/avatar/88_avatar_middle_85_90.jpg','','','','0','0','0','100000','50','3','23.00','0','1381698191','1381699072','ux21608ux36716,ux36164ux37329,ux36164ux37329ux21608ux36716','周转,资金,资金周转','ux20449ux29992ux35748ux35777ux26631','信用认证标','','','ux30701ux26399ux21608ux36716','短期周转','1','0','0.0000','0.0000','1381698378','0','0','0','0','1382303178','3','7','0','1','5','0','1','','0','0','0','0','1','2','a846a8','0','1','0','0');");
E_D("replace into `fanwe_deal` values('4','乞丐借款','乞丐借款','1','1','22','锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试锦尚中国测试测试','1','0','0','2','1','./public/attachment/201401/12/23/52d2b39607d60.jpg','','','','0','0','0','2000000','50','3','11.00','0','1389511496','1389511814','ux20511ux27454,ux20062ux19984,ux20062ux19984ux20511ux27454','借款,乞丐,乞丐借款','ux20449ux29992ux35748ux35777ux26631','信用认证标','','','ux36141ux25151ux20511ux27454','购房借款','0','0','0.0000','0.0000','1389511811','0','0','0','0','0','1','7','0','1','5','0','0','','0','0','0','0','0','0','','0','1','50000','0');");

require("../../inc/footer.php");
?>