/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50721
Source Host           : 127.0.0.1:3306
Source Database       : 711cms

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-04-16 18:24:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_admin
-- ----------------------------
DROP TABLE IF EXISTS `m_admin`;
CREATE TABLE `m_admin` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL DEFAULT '' COMMENT '账号',
  `upass` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
  `ustate` int(2) NOT NULL DEFAULT '1' COMMENT '用户状态（正常=1）',
  `reg_date` int(11) NOT NULL DEFAULT '0' COMMENT '开通时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理表';

-- ----------------------------
-- Records of m_admin
-- ----------------------------
INSERT INTO `m_admin` VALUES ('1', 'admin', '0266455c82e540598588a8e6852d609d', '1', '1521514977');
INSERT INTO `m_admin` VALUES ('2', 'admin2', '0266455c82e540598588a8e6852d609d', '1', '1521514977');

-- ----------------------------
-- Table structure for m_advert
-- ----------------------------
DROP TABLE IF EXISTS `m_advert`;
CREATE TABLE `m_advert` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告标题',
  `ad_type` tinyint(3) unsigned NOT NULL COMMENT '广告类型1PC轮播 2手机轮播',
  `ad_alts` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '图片文字',
  `ad_images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告图片',
  `ad_links` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告链接',
  `ad_remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `ad_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL COMMENT '添加人',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='推荐位置（广告，推荐位，专题）';

-- ----------------------------
-- Records of m_advert
-- ----------------------------
INSERT INTO `m_advert` VALUES ('30', 'PC网站首页轮播', '1', 'pc|test', '/uploads/images/36678d549cc10510616ba43f81b3c61f.jpg|/uploads/images/2bec98d452f11fe936ccbe3934ffa465.jpg', '/index.php?c=index&m=content_app&app_id=264|http://www.711cms.com', '', '1441013282', '1');
INSERT INTO `m_advert` VALUES ('31', '手助首页轮播', '3', '全场最帅|全场最帅', '/uploads/images/1fb9cd8f0c8098da0162a7e5e5c2236e.gif|/uploads/images/405e8d2318ad39d13f938c10b8bd5edc.jpg', '1|2', '', '1444462466', '1');
INSERT INTO `m_advert` VALUES ('32', 'WAP首页轮播', '2', 'wap', '/uploads/images/1fb9cd8f0c8098da0162a7e5e5c2236e.gif', 'http://www.711cms.com', '', '1445321845', '1');

-- ----------------------------
-- Table structure for m_app
-- ----------------------------
DROP TABLE IF EXISTS `m_app`;
CREATE TABLE `m_app` (
  `app_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `app_title` varchar(500) NOT NULL DEFAULT '' COMMENT '应用名称',
  `app_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `app_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间（最新）',
  `app_type` varchar(20) NOT NULL DEFAULT '' COMMENT '软件类型：免费/收费',
  `app_logo` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `app_desc` text COMMENT '应用详情',
  `app_company` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商',
  `app_company_url` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商网址',
  `app_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '入库时间',
  `app_grade` float NOT NULL DEFAULT '0' COMMENT '用户评分',
  `app_recomment` float NOT NULL DEFAULT '0' COMMENT '系统评分',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `app_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `app_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `app_down` int(11) NOT NULL DEFAULT '0' COMMENT '下载量',
  `app_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `data_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心应用ID',
  `charge_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '独立计费包ID',
  `app_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `app_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  PRIMARY KEY (`app_id`),
  KEY `cate_update_time` (`last_cate_id`,`app_update_time`),
  KEY `cate_order` (`last_cate_id`,`app_order`),
  KEY `cate_visitor` (`last_cate_id`,`app_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `cate_down` (`last_cate_id`,`app_down`),
  KEY `app_update_time` (`app_update_time`),
  KEY `app_order` (`app_order`),
  KEY `app_down` (`app_down`)
) ENGINE=MyISAM AUTO_INCREMENT=581 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of m_app
-- ----------------------------
INSERT INTO `m_app` VALUES ('1', '2', 'bitepai', 'bitepai', '1522652471', '1', '/uploads/images/1.bitepai.jpg', '支持币种BTC BCH LTC DOGE ETH OMG PAY EOS BAT SNT 1ST ZEC ETC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'bitepai', '1522652471', '3', '4', '1', '0', '6957', '731', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('2', '2', 'AToken', 'AToken', '1522652471', '1', '/uploads/images/2.AToken.jpg', '支持币种SNT BTC LTC ETH ETC BCH OMG 1ST ANT BAT BNT CVC EOS GNT DGD USDT PAY QTUM REP</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'AToken', '1522652471', '3', '5', '1', '0', '8801', '705', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('3', '2', 'kushen', 'kushen', '1522652471', '1', '/uploads/images/3.kushen.jpg', '支持币种BTC LTC ETC ETH DASH DOGE ICS BCH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'kushen', '1522652471', '3', '2', '1', '0', '2071', '861', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('4', '2', 'ImToken', 'ImToken', '1522652471', '1', '/uploads/images/4.ImToken.jpg', '支持币种ETH DGD REP GNT 1ST ANT OMG SNT EOS PAY BTM CREDO LRC MANA CDT BAT</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'ImToken', '1522652471', '3', '3', '1', '0', '1173', '965', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('5', '2', 'Ethereum Wallet', 'Ethereum Wallet', '1522652471', '1', '/uploads/images/5.Ethereum Wallet.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Ethereum Wallet', '1522652471', '3', '1', '1', '0', '2175', '698', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('6', '2', 'Doge Freewallet', 'Doge Freewallet', '1522652471', '1', '/uploads/images/6.Doge Freewallet.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Doge Freewallet', '1522652471', '5', '5', '1', '0', '2276', '794', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('7', '2', 'Bitinka', 'Bitinka', '1522652471', '1', '/uploads/images/7.Bitinka.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitinka', '1522652471', '5', '2', '1', '0', '3796', '517', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('8', '2', 'MultiDoge Wallet', 'MultiDoge Wallet', '1522652471', '1', '/uploads/images/8.MultiDoge Wallet.jpg', '支持币种DOGE</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'MultiDoge Wallet', '1522652471', '4', '5', '1', '0', '2722', '415', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('9', '2', 'Etherwall', 'Etherwall', '1522652471', '1', '/uploads/images/9.Etherwall.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Etherwall', '1522652471', '2', '2', '1', '0', '4234', '375', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('10', '2', 'ZCash Cockpit UI Wallet', 'ZCash Cockpit UI Wallet', '1522652471', '1', '/uploads/images/10.ZCash Cockpit UI Wallet.jpg', '支持币种ZEC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ZCash Cockpit UI Wallet', '1522652471', '5', '2', '1', '0', '5989', '558', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('11', '2', 'Monreo', 'Monreo', '1522652471', '1', '/uploads/images/11.Monreo.jpg', '支持币种XMR</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Monreo', '1522652471', '4', '4', '1', '0', '6118', '953', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('12', '2', 'Digibyte Core', 'Digibyte Core', '1522652471', '1', '/uploads/images/12.Digibyte Core.jpg', '支持币种DGB</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Digibyte Core', '1522652471', '1', '1', '1', '0', '1872', '573', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('13', '2', 'VirtaCoinWallet', 'VirtaCoinWallet', '1522652471', '1', '/uploads/images/13.VirtaCoinWallet.jpg', '支持币种XVP</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'VirtaCoinWallet', '1522652471', '2', '3', '1', '0', '2108', '174', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('14', '2', 'Dash Freewallet', 'Dash Freewallet', '1522652471', '1', '/uploads/images/14.Dash Freewallet.jpg', '支持币种DASH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Dash Freewallet', '1522652471', '2', '2', '1', '0', '8474', '485', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('15', '2', 'Vcash Client', 'Vcash Client', '1522652471', '1', '/uploads/images/15.Vcash Client.jpg', '支持币种XVC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Vcash Client', '1522652471', '4', '2', '1', '0', '3904', '401', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('16', '2', 'nSIGNA Wallet', 'nSIGNA Wallet', '1522652471', '1', '/uploads/images/16.nSIGNA Wallet.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'nSIGNA Wallet', '1522652471', '2', '5', '1', '0', '9697', '460', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('17', '2', 'Coinaputlt Wallet', 'Coinaputlt Wallet', '1522652471', '1', '/uploads/images/17.Coinaputlt Wallet.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Coinaputlt Wallet', '1522652471', '4', '4', '1', '0', '9622', '541', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('18', '2', 'Tokenly Pockets', 'Tokenly Pockets', '1522652471', '1', '/uploads/images/18.Tokenly Pockets.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Tokenly Pockets', '1522652471', '1', '3', '1', '0', '6874', '583', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('19', '2', 'Stellar Desktop Client', 'Stellar Desktop Client', '1522652471', '1', '/uploads/images/19.Stellar Desktop Client.jpg', '支持币种STR</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Stellar Desktop Client', '1522652471', '3', '4', '1', '0', '6409', '960', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('20', '2', 'Bitcoin Cash Freewallet', 'Bitcoin Cash Freewallet', '1522652471', '1', '/uploads/images/20.Bitcoin Cash Freewallet.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitcoin Cash Freewallet', '1522652471', '3', '5', '1', '0', '7059', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('21', '2', 'Lisk Nano', 'Lisk Nano', '1522652471', '1', '/uploads/images/21.Lisk Nano.jpg', '支持币种LSK</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Lisk Nano', '1522652471', '4', '4', '1', '0', '5905', '988', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('22', '2', 'Lisk Freewallet', 'Lisk Freewallet', '1522652471', '1', '/uploads/images/22.Lisk Freewallet.jpg', '支持币种LSK</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Lisk Freewallet', '1522652471', '2', '4', '1', '0', '3545', '862', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('23', '2', 'Carbon Wallet', 'Carbon Wallet', '1522652471', '1', '/uploads/images/23.Carbon Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Carbon Wallet', '1522652471', '3', '5', '1', '0', '3432', '545', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('24', '2', 'Electrum Stratis Wallet', 'Electrum Stratis Wallet', '1522652471', '1', '/uploads/images/24.Electrum Stratis Wallet.jpg', '支持币种STRAT</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum Stratis Wallet', '1522652471', '2', '4', '1', '0', '8257', '469', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('25', '2', 'ArcBit', 'ArcBit', '1522652471', '1', '/uploads/images/25.ArcBit.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ArcBit', '1522652471', '3', '1', '1', '0', '1679', '568', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('26', '2', 'vSlice Web Wallet', 'vSlice Web Wallet', '1522652471', '1', '/uploads/images/26.vSlice Web Wallet.jpg', '支持币种VSL ETH ETC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'vSlice Web Wallet', '1522652471', '5', '1', '1', '0', '6168', '756', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('27', '2', 'IndieSquare', 'IndieSquare', '1522652471', '1', '/uploads/images/27.IndieSquare.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'IndieSquare', '1522652471', '2', '4', '1', '0', '9041', '230', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('28', '2', 'NXT Freewallet', 'NXT Freewallet', '1522652471', '1', '/uploads/images/28.NXT Freewallet.jpg', '支持币种NXT ARDR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'NXT Freewallet', '1522652471', '2', '1', '1', '0', '5994', '890', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('29', '2', 'NXT Client', 'NXT Client', '1522652471', '1', '/uploads/images/29.NXT Client.jpg', '支持币种NXT ARDR</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'NXT Client', '1522652471', '2', '2', '1', '0', '6061', '963', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('30', '2', 'Eidoo', 'Eidoo', '1522652471', '1', '/uploads/images/30.Eidoo.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Eidoo', '1522652471', '1', '2', '1', '0', '2555', '264', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('31', '2', 'Ardor Freewallet', 'Ardor Freewallet', '1522652471', '1', '/uploads/images/31.Ardor Freewallet.jpg', '支持币种ARDR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Ardor Freewallet', '1522652471', '2', '2', '1', '0', '4819', '342', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('32', '2', 'ClassicEtherWallet CX', 'ClassicEtherWallet CX', '1522652471', '1', '/uploads/images/32.ClassicEtherWallet CX.jpg', '支持币种ETC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'ClassicEtherWallet CX', '1522652471', '2', '4', '1', '0', '6728', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('33', '2', 'Xapo Wallet', 'Xapo Wallet', '1522652471', '1', '/uploads/images/33.Xapo Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Xapo Wallet', '1522652471', '3', '2', '1', '0', '9160', '640', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('34', '2', 'MyMonero Wallet', 'MyMonero Wallet', '1522652471', '1', '/uploads/images/34.MyMonero Wallet.jpg', '支持币种XMR</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'MyMonero Wallet', '1522652471', '5', '3', '1', '0', '3942', '300', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('35', '2', 'Zcash Freewallet', 'Zcash Freewallet', '1522652471', '1', '/uploads/images/35.Zcash Freewallet.jpg', '支持币种ZEC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Zcash Freewallet', '1522652471', '2', '1', '1', '0', '2397', '258', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('36', '2', 'Gatehub', 'Gatehub', '1522652471', '1', '/uploads/images/36.Gatehub.jpg', '支持币种BTC XRP ETH REP ETC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Gatehub', '1522652471', '5', '5', '1', '0', '7046', '586', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('37', '2', 'ZebPay', 'ZebPay', '1522652471', '1', '/uploads/images/37.ZebPay.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'ZebPay', '1522652471', '4', '4', '1', '0', '7414', '905', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('38', '2', 'Circle Bitcoin Wallet', 'Circle Bitcoin Wallet', '1522652471', '1', '/uploads/images/38.Circle Bitcoin Wallet.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Circle Bitcoin Wallet', '1522652471', '2', '1', '1', '0', '6288', '983', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('39', '2', 'Cryptonator', 'Cryptonator', '1522652471', '1', '/uploads/images/39.Cryptonator.jpg', '支持币种LTC BTC BLK DOGE XPY PPC RDD VTC DASH XPM EMC ZEC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Cryptonator', '1522652471', '3', '4', '1', '0', '4796', '763', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('40', '2', 'STREEM Wallet', 'STREEM Wallet', '1522652471', '1', '/uploads/images/40.STREEM Wallet.jpg', '支持币种STEEM</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'STREEM Wallet', '1522652471', '5', '3', '1', '0', '9302', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('41', '2', 'Coinbase Wallet', 'Coinbase Wallet', '1522652471', '1', '/uploads/images/41.Coinbase Wallet.jpg', '支持币种BTC ETH</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Coinbase Wallet', '1522652471', '3', '1', '1', '0', '9318', '178', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('42', '2', 'Agama', 'Agama', '1522652471', '1', '/uploads/images/42.Agama.jpg', '支持币种BTC KMD ZEC ANC BTCD BTM DGB DOGE FRK LTC SYS UNO ZET GMC MZC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Agama', '1522652471', '1', '5', '1', '0', '7356', '211', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('43', '2', 'Monero Freewallet', 'Monero Freewallet', '1522652471', '1', '/uploads/images/43.Monero Freewallet.jpg', '支持币种XMR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Monero Freewallet', '1522652471', '2', '1', '1', '0', '1609', '511', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('44', '2', 'CoinVault', 'CoinVault', '1522652471', '1', '/uploads/images/44.CoinVault.jpg', '支持币种BTC LTC DASH DOGE GRC NMC PPC QRK RDD TRC XPM STRAT ARG DLC GB SH MTR ZYD</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'CoinVault', '1522652471', '1', '3', '1', '0', '2169', '132', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('45', '2', 'GreenAddress', 'GreenAddress', '1522652471', '1', '/uploads/images/45.GreenAddress.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'GreenAddress', '1522652471', '4', '2', '1', '0', '9293', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('46', '2', 'Electrum Cash Wallet', 'Electrum Cash Wallet', '1522652471', '1', '/uploads/images/46.Electrum Cash Wallet.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum Cash Wallet', '1522652471', '4', '2', '1', '0', '1531', '318', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('47', '2', 'NEM Wallet', 'NEM Wallet', '1522652471', '1', '/uploads/images/47.NEM Wallet.jpg', '支持币种XEM</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'NEM Wallet', '1522652471', '4', '2', '1', '0', '2645', '560', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('48', '2', 'OmniWallet', 'OmniWallet', '1522652471', '1', '/uploads/images/48.OmniWallet.jpg', '支持币种BTC OMNI</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'OmniWallet', '1522652471', '3', '2', '1', '0', '5665', '518', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('49', '2', 'Monero Core Clientjpg', 'Monero Core Clientjpg', '1522652471', '1', '/uploads/images/49.Monero Core Clientjpg.jpg', '支持币种XMR</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Monero Core Clientjpg', '1522652471', '3', '1', '1', '0', '5171', '404', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('50', '2', 'Unocoin', 'Unocoin', '1522652471', '1', '/uploads/images/50.Unocoin.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Unocoin', '1522652471', '1', '1', '1', '0', '4162', '746', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('51', '2', 'Bitcoin Freewallet', 'Bitcoin Freewallet', '1522652471', '1', '/uploads/images/51.Bitcoin Freewallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitcoin Freewallet', '1522652471', '1', '2', '1', '0', '9076', '580', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('52', '2', 'BitConnect Client', 'BitConnect Client', '1522652471', '1', '/uploads/images/52.BitConnect Client.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BitConnect Client', '1522652471', '1', '4', '1', '0', '7593', '367', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('53', '2', 'CoinCorner', 'CoinCorner', '1522652471', '1', '/uploads/images/53.CoinCorner.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'CoinCorner', '1522652471', '1', '4', '1', '0', '1713', '914', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('54', '2', 'CoinBank', 'CoinBank', '1522652471', '1', '/uploads/images/54.CoinBank.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinBank', '1522652471', '2', '1', '1', '0', '3066', '284', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('55', '2', 'Parity', 'Parity', '1522652471', '1', '/uploads/images/55.Parity.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Parity', '1522652471', '5', '3', '1', '0', '2932', '456', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('56', '2', 'Bitcoin Core Client', 'Bitcoin Core Client', '1522652471', '1', '/uploads/images/56.Bitcoin Core Client.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Bitcoin Core Client', '1522652471', '4', '2', '1', '0', '8599', '130', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('57', '2', 'iPayYou', 'iPayYou', '1522652471', '1', '/uploads/images/57.iPayYou.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'iPayYou', '1522652471', '2', '2', '1', '0', '4811', '790', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('58', '2', 'Ethereum Freewallet', 'Ethereum Freewallet', '1522652471', '1', '/uploads/images/58.Ethereum Freewallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Ethereum Freewallet', '1522652471', '5', '3', '1', '0', '2185', '732', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('59', '2', 'BitPanda', 'BitPanda', '1522652471', '1', '/uploads/images/59.BitPanda.jpg', '支持币种BTC ETH NXT</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'BitPanda', '1522652471', '1', '4', '1', '0', '8166', '981', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('60', '2', 'SpectroCoin', 'SpectroCoin', '1522652471', '1', '/uploads/images/60.SpectroCoin.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:一般', ' ', ' ', 'SpectroCoin', '1522652471', '2', '5', '1', '0', '7828', '172', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('61', '2', 'Samourai Wallet', 'Samourai Wallet', '1522652471', '1', '/uploads/images/61.Samourai Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Samourai Wallet', '1522652471', '4', '1', '1', '0', '4933', '703', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('62', '2', 'Schildbach BTC Wallet', 'Schildbach BTC Wallet', '1522652471', '1', '/uploads/images/62.Schildbach BTC Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Schildbach BTC Wallet', '1522652471', '5', '4', '1', '0', '2046', '502', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('63', '2', 'LiteVault', 'LiteVault', '1522652471', '1', '/uploads/images/63.LiteVault.jpg', '支持币种LTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'LiteVault', '1522652471', '2', '4', '1', '0', '3605', '506', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('64', '2', 'Counterwallet', 'Counterwallet', '1522652471', '1', '/uploads/images/64.Counterwallet.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Counterwallet', '1522652471', '4', '1', '1', '0', '1410', '160', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('65', '2', 'BCMY Wallet', 'BCMY Wallet', '1522652471', '1', '/uploads/images/65.BCMY Wallet.jpg', '支持币种BTC ETH ZEC DNC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BCMY Wallet', '1522652471', '4', '2', '1', '0', '4932', '325', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('66', '2', 'CoolWallet', 'CoolWallet', '1522652471', '1', '/uploads/images/66.CoolWallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'CoolWallet', '1522652471', '4', '1', '1', '0', '3267', '654', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('67', '2', 'Bitwala', 'Bitwala', '1522652471', '1', '/uploads/images/67.Bitwala.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitwala', '1522652471', '1', '3', '1', '0', '5130', '829', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('68', '2', 'Bither Wallet', 'Bither Wallet', '1522652471', '1', '/uploads/images/68.Bither Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bither Wallet', '1522652471', '3', '1', '1', '0', '9825', '480', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('69', '2', 'Light Wallet', 'Light Wallet', '1522652471', '1', '/uploads/images/69.Light Wallet.jpg', '支持币种ETH SNGLS</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Light Wallet', '1522652471', '1', '2', '1', '0', '3500', '117', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('70', '2', 'Mobi', 'Mobi', '1522652471', '1', '/uploads/images/70.Mobi.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Mobi', '1522652471', '2', '5', '1', '0', '5743', '735', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('71', '2', 'Doge Android Wallet', 'Doge Android Wallet', '1522652471', '1', '/uploads/images/71.Doge Android Wallet.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Doge Android Wallet', '1522652471', '5', '5', '1', '0', '3918', '179', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('72', '2', 'FantomCoin Freewallet', 'FantomCoin Freewallet', '1522652471', '1', '/uploads/images/72.FantomCoin Freewallet.jpg', '支持币种FCN</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'FantomCoin Freewallet', '1522652471', '5', '1', '1', '0', '6547', '968', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('73', '2', 'WageCan Wallet', 'WageCan Wallet', '1522652471', '1', '/uploads/images/73.WageCan Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'WageCan Wallet', '1522652471', '2', '2', '1', '0', '9111', '240', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('74', '2', 'Litecoin Core Client', 'Litecoin Core Client', '1522652471', '1', '/uploads/images/74.Litecoin Core Client.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Litecoin Core Client', '1522652471', '2', '3', '1', '0', '8079', '264', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('75', '2', 'Dogecoin Core', 'Dogecoin Core', '1522652471', '1', '/uploads/images/75.Dogecoin Core.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Dogecoin Core', '1522652471', '3', '1', '1', '0', '1570', '463', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('76', '2', 'Bitlox Wallet', 'Bitlox Wallet', '1522652471', '1', '/uploads/images/76.Bitlox Wallet.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Bitlox Wallet', '1522652471', '1', '4', '1', '0', '4532', '623', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('77', '2', 'Ledger HW1', 'Ledger HW1', '1522652471', '1', '/uploads/images/77.Ledger HW1.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Ledger HW1', '1522652471', '2', '2', '1', '0', '8224', '340', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('78', '2', 'ZCash Wallet', 'ZCash Wallet', '1522652471', '1', '/uploads/images/78.ZCash Wallet.jpg', '支持币种ZEC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ZCash Wallet', '1522652471', '4', '2', '1', '0', '7501', '755', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('79', '2', 'CoinSpace HD', 'CoinSpace HD', '1522652471', '1', '/uploads/images/79.CoinSpace HD.jpg', '支持币种BTC LTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinSpace HD', '1522652471', '2', '4', '1', '0', '3021', '408', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('80', '2', 'Electrum LTC Wallet', 'Electrum LTC Wallet', '1522652471', '1', '/uploads/images/80.Electrum LTC Wallet.jpg', '支持币种LTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum LTC Wallet', '1522652471', '5', '1', '1', '0', '1014', '981', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('81', '2', 'Bonpay', 'Bonpay', '1522652471', '1', '/uploads/images/81.Bonpay.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Bonpay', '1522652471', '4', '2', '1', '0', '9065', '895', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('82', '2', 'MetaMask', 'MetaMask', '1522652471', '1', '/uploads/images/82.MetaMask.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'MetaMask', '1522652471', '2', '5', '1', '0', '4496', '891', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('83', '2', 'OpenLedger', 'OpenLedger', '1522652471', '1', '/uploads/images/83.OpenLedger.jpg', '支持币种BTS</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'OpenLedger', '1522652471', '1', '3', '1', '0', '7718', '593', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('84', '2', 'Armory Wallet', 'Armory Wallet', '1522652471', '1', '/uploads/images/84.Armory Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Armory Wallet', '1522652471', '5', '1', '1', '0', '8342', '533', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('85', '2', 'EtherLi Wallet', 'EtherLi Wallet', '1522652471', '1', '/uploads/images/85.EtherLi Wallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'EtherLi Wallet', '1522652471', '1', '5', '1', '0', '7147', '281', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('86', '2', 'BitAddress Paper Wallet', 'BitAddress Paper Wallet', '1522652471', '1', '/uploads/images/86.BitAddress Paper Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BitAddress Paper Wallet', '1522652471', '2', '4', '1', '0', '5701', '956', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('87', '2', 'DogeChain', 'DogeChain', '1522652471', '1', '/uploads/images/87.DogeChain.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'DogeChain', '1522652471', '2', '3', '1', '0', '1221', '623', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('88', '2', 'Bitgo Wallet', 'Bitgo Wallet', '1522652471', '1', '/uploads/images/88.Bitgo Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitgo Wallet', '1522652471', '5', '5', '1', '0', '5507', '801', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('89', '2', 'Holy Transaction', 'Holy Transaction', '1522652471', '1', '/uploads/images/89.Holy Transaction.jpg', '支持币种BTC LTC DOGE PPC DASH ETH OMNI GRC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Holy Transaction', '1522652471', '2', '3', '1', '0', '3094', '424', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('90', '2', 'Jaxx Wallet', 'Jaxx Wallet', '1522652471', '1', '/uploads/images/90.Jaxx Wallet.jpg', '支持币种BTC ETH ETC DASH LTC REP ZEC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Jaxx Wallet', '1522652471', '3', '5', '1', '0', '1131', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('91', '2', 'Bread Walletjpg', 'Bread Walletjpg', '1522652471', '1', '/uploads/images/91.Bread Walletjpg.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Bread Walletjpg', '1522652471', '3', '1', '1', '0', '4007', '348', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('92', '2', 'Waves Lite Client', 'Waves Lite Client', '1522652471', '1', '/uploads/images/92.Waves Lite Client.jpg', '支持币种WAVES</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Waves Lite Client', '1522652471', '1', '4', '1', '0', '9565', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('93', '2', 'CoinSpot', 'CoinSpot', '1522652471', '1', '/uploads/images/93.CoinSpot.jpg', '支持币种BTC LTC DOGE DASH LOT PPC WDC FTC MOON XPM QRK MAX</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinSpot', '1522652471', '3', '1', '1', '0', '5930', '794', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('94', '2', 'XETH Ether Wallet', 'XETH Ether Wallet', '1522652471', '1', '/uploads/images/94.XETH Ether Wallet.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'XETH Ether Wallet', '1522652471', '1', '4', '1', '0', '3660', '532', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('95', '2', 'KeepKey Walletjpg', 'KeepKey Walletjpg', '1522652471', '1', '/uploads/images/95.KeepKey Walletjpg.jpg', '支持币种BTC LTC NMC DOGE DASH</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'KeepKey Walletjpg', '1522652471', '1', '4', '1', '0', '9894', '189', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('96', '2', 'BTC Wallet', 'BTC Wallet', '1522652471', '1', '/uploads/images/96.BTC Wallet.jpg', '支持币种BTC BCH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'BTC Wallet', '1522652471', '5', '4', '1', '0', '1787', '464', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('97', '2', 'Copay Bitcoin Wallet', 'Copay Bitcoin Wallet', '1522652471', '1', '/uploads/images/97.Copay Bitcoin Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Copay Bitcoin Wallet', '1522652471', '5', '3', '1', '0', '2517', '604', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('98', '2', 'Mist and Ethereum Wallet', 'Mist and Ethereum Wallet', '1522652471', '1', '/uploads/images/98.Mist and Ethereum Wallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Mist and Ethereum Wallet', '1522652471', '1', '1', '1', '0', '6195', '682', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('99', '2', 'UberPay Wallet', 'UberPay Wallet', '1522652471', '1', '/uploads/images/99.UberPay Wallet.jpg', '支持币种DASH BTC LTC USNBT PPC DOGE AC EFL CRBIT DOGED MZC DGB DGC CCN XMY UNO RDD FTC VTC MONA XMCC BTA GCR VIA CESC NEOS</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'UberPay Wallet', '1522652471', '2', '1', '1', '0', '8483', '113', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('100', '2', 'Blockio Wallet', 'Blockio Wallet', '1522652471', '1', '/uploads/images/100.Blockio Wallet.jpg', '支持币种BTC LTC DOGE</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Blockio Wallet', '1522652471', '3', '2', '1', '0', '4074', '675', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('385', '12', '非小号', '非小号', '1522669327', '1', '/uploads/images/1.feixiaohao.png', '实时报价 · 自选行情 · 排行榜 · 全球交易所', ' ', ' ', '非小号', '1522669327', '5', '1', '1', '0', '5171', '342', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('386', '12', '币看比特币', '币看比特币', '1522669327', '1', '/uploads/images/2.BITKAN.png', '提供价格监控、新闻资讯、挖矿监控、股票监控、钱包等服务', ' ', ' ', '币看比特币', '1522669327', '3', '4', '1', '0', '3461', '453', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('387', '12', '可盈可乐', '可盈可乐', '1522669327', '1', '/uploads/images/3.CoinCola.png', '安全可信赖的香港场外交易平台', ' ', ' ', '可盈可乐', '1522669327', '2', '5', '1', '0', '8156', '243', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('388', '12', 'My Token', 'My Token', '1522669327', '1', '/uploads/images/4.My Token.png', '数字资产看行情专用', ' ', ' ', 'My Token', '1522669327', '4', '2', '1', '0', '1546', '517', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('389', '12', '蚂蚁矿池', '蚂蚁矿池', '1522669327', '1', '/uploads/images/5.ANTPOOL.png', '支持多币种挖矿，多子帐户管理，实时监控算力、随时撑握矿机运行情况', ' ', ' ', '蚂蚁矿池', '1522669327', '2', '4', '1', '0', '4547', '160', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('390', '12', '微比特矿池', '微比特矿池', '1522669327', '1', '/uploads/images/6.ViaBTC.png', '矿池、微合约、钱包一站式服务', ' ', ' ', '微比特矿池', '1522669327', '4', '2', '1', '0', '9717', '555', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('391', '12', '币探', '币探', '1522669327', '1', '/uploads/images/7.bitan.png', 'Global  Cryptocurrency，Price Tracking & Breaking News，Decentralize Your Mind', ' ', ' ', '币探', '1522669327', '2', '4', '1', '0', '5378', '686', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('392', '12', 'Token Club', 'Token Club', '1522669327', '1', '/uploads/images/8.TokenClub.png', 'Token Club', ' ', ' ', 'Token Club', '1522669327', '5', '5', '1', '0', '9238', '230', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('393', '12', '巴比特', '巴比特', '1522669327', '1', '/uploads/images/3.babite.jpg', '以价值投资为导向', ' ', ' ', '巴比特', '1522669327', '1', '3', '1', '0', '5677', '239', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('394', '12', 'BTC123', 'BTC123', '1522669327', '1', '/uploads/images/12.BTC123.jpg', '驱动创新·链接未来', ' ', ' ', 'BTC123', '1522669327', '1', '5', '1', '0', '5625', '988', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('395', '12', '比特币交易网', '比特币交易网', '1522669327', '1', '/uploads/images/11.btctrade.png', '安全可靠的交易平台', ' ', ' ', '比特币交易网', '1522669327', '2', '5', '1', '0', '5250', '387', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('396', '12', '库神', '库神', '1522669327', '1', '/uploads/images/12.kushen.png', '专业数字资产存储器', ' ', ' ', '库神', '1522669327', '3', '2', '1', '0', '6518', '734', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('397', '12', 'AICoin', 'AICoin', '1522669327', '1', '/uploads/images/13.ALCoin.png', '全球数字资产行情数据应用领跑者', ' ', ' ', 'AICoin', '1522669327', '1', '1', '1', '0', '9385', '533', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('398', '12', '金塔', '金塔', '1522669327', '1', '/uploads/images/14.quinter.png', '祝您掌握市场先机', ' ', ' ', '金塔', '1522669327', '5', '1', '1', '0', '3343', '391', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('399', '12', '币世界', '币世界', '1522669327', '1', '/uploads/images/2.bishijie.jpg', '快人一步，尽晓币圈事', ' ', ' ', '币世界', '1522669327', '2', '4', '1', '0', '4766', '175', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('400', '12', '链向财经', '链向财经', '1522669327', '1', '/uploads/images/5.lianxiangcaijing.jpg', '国内外最专业的区块链信息服务平台，为广大缺乏区块链理解的用户提供一个安全、诚信、可靠的学习渠道，低门槛的读懂区块链未来。', ' ', ' ', '链向财经', '1522669327', '5', '1', '1', '0', '7404', '550', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('401', '12', '要发车', '要发车', '1522669327', '1', '/uploads/images/17.yaofache.png', '区块链产业信息聚合平台', ' ', ' ', '要发车', '1522669327', '5', '5', '1', '0', '7251', '690', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('402', '12', 'POIM', 'POIM', '1522669327', '1', '/uploads/images/18.POIM.png', 'POIM为所有用户提供超级易于使用的数字货币钱包', ' ', ' ', 'POIM', '1522669327', '3', '2', '1', '0', '6645', '995', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('403', '12', 'HashToken', 'HashToken', '1522669327', '1', '/uploads/images/19.HashToken.png', '联合全球前20家交易平台，买卖更方便', ' ', ' ', 'HashToken', '1522669327', '4', '5', '1', '0', '2718', '117', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('404', '12', '挖链', '挖链', '1522669327', '1', '/uploads/images/20.walian.png', '挖链网，挖出区块链的价值', ' ', ' ', '挖链', '1522669327', '3', '5', '1', '0', '9267', '557', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('405', '12', '大比特', '大比特', '1522669327', '1', '/uploads/images/21.bigbit.png', '大比特是大比特虚拟数字行情及咨询手机端', ' ', ' ', '大比特', '1522669327', '3', '5', '1', '0', '5708', '957', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('406', '12', '共享财经', '共享财经', '1522669327', '1', '/uploads/images/14.gongxiangcaijing.jpg', '见证区块链新生态', ' ', ' ', '共享财经', '1522669327', '2', '3', '1', '0', '3046', '524', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('452', '10', 'Bitcoin 比特币', 'Bitcoin 比特币', '1522826029', '1', '/uploads/images/1.Bitcoin.png', '比特币（bitcoin）的概念最初由中本聪在2009年提出，根据中本聪的思路设计发布的开源软件以及建构其上的p2p网络。比特币是一种p2p形式的数字货币。点对点的传输意味着一个去中心化的支付系统。\n与大多数货币不同，比特币不依靠特定货币机构发行，它依据特定算法，通过大量的计算产生，比特币经济使用整个p2p网络中众多节点构成的分布式数据库来确认并记录所有的交易行为，并使用密码学的设计来确保货币流通各个环节安全性。p2p的去中心化特性与算法本身可以确保无法通过大量制造比特币来人为操控币值。基于密码学的设计可以使比特币只能被真实的拥有者转移或支付。这同样确保了货币所有权与流通交易的匿名性。比特币与其他虚拟货币最大的不同，是其总数量非常有限，具有极强的稀缺性。该货币系统曾在4年内只有不超过1050万个，之后的总数量将被永久限制在2100万个。             ', ' ', ' ', 'Bitcoin 比特币', '1522826029', '3', '3', '1', '0', '6631', '720', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('453', '10', 'Ethereum 以太坊', 'Ethereum 以太坊', '1522826029', '1', '/uploads/images/2.Ethereum.png', 'ethereum（以太坊）是一个平台和一种编程语言，使开发人员能够建立和发布下一代分布式应用。 ethereum可以用来编程，分散，担保和交易任何事物：投票，域名，金融交易所，众筹，公司管理， 合同和大部分的协议，知识产权，还有得益于硬件集成的智能资产。\n\n以太坊将使用混合型的安全协议，前期使用工作量证明机制（pow），用于分发以太币，然后会切换到权益证明机制（pos）。自上线时起，每年都将有0.26x，即每年有60102216 * 0.26 = 15626576个以太币被矿工挖出。转成pos后，每年产出的以太币将减少', ' ', ' ', 'Ethereum 以太坊', '1522826029', '1', '4', '1', '0', '9545', '668', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('454', '10', 'Ripple 瑞波币', 'Ripple 瑞波币', '1522826029', '1', '/uploads/images/3.Ripple.png', '瑞波币是ripple网络的基础货币，它可以在整个ripple网络中流通，总数量为1000亿，并且随着交易的增多而逐渐减少，瑞波币的运营公司为ripple labs（其前身为opencoin）。\n\n瑞波币是ripple系统中唯一的通用货币，其不同于ripple系统中的其他货币，其他货币比如cny、usd不能跨网关提现的，换句话说，a网关发行的cny只能在a网关提现，若想在b网关提现，必须通过ripple系统的挂单功能转化为b网关的cny才可以到b网关提现。而瑞波币完全没有这方面的限制，它在ripple系统内是通用的。\n\n瑞波币（xrp）和比特币一样都是基于数学和密码学的数字货币，但是与比特币没有真正的用途不同，xrp在ripple系统中有主要桥梁货币和有保障安全的功能，其中保障安全的功能是不可或缺的，这要求参与这个协议的网关都必须持有少量xrp。', ' ', ' ', 'Ripple 瑞波币', '1522826029', '1', '1', '1', '0', '4439', '761', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('455', '10', 'Bitcoin Cash(BCC) 比特现金', 'Bitcoin Cash(BCC) 比特现金', '1522826029', '1', '/uploads/images/4.Bitcoin Cash(BCC).png', '2017年7月21日，比特币分叉方案bip91已经获得全网算力支持，一致同意先进行隔离见证升级，并在之后的6个月内把底层区块链的区块大小升级至2m。然而“搅局者”出现了——挖矿巨头比特币大陆旗下的矿池viabtc准备了一套硬分叉的体系，基于比特币的原链推出“比特币现金”。\n\n2017年8月1日20时20分，比特币现金开始挖矿，这是比特币的新的分支还是另外一种“山寨币”，业内论调不一，但是此前bcc提前报价已经达到2000元，也就是已经超过比特币价格的十分之一。\n\n比特币现金修改了比特币的代码，支持大区块（将区块大小提升至8m），不包含segwit功能，是bitcoinabc方案产生的区块链资产。', ' ', ' ', 'Bitcoin Cash(BCC) 比特现金', '1522826029', '1', '4', '1', '0', '4955', '629', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('456', '10', 'Litecoin 莱特币', 'Litecoin 莱特币', '1522826029', '1', '/uploads/images/5.Litecoin.png', '莱特币litecoin（简写：ltc，货币符号：ł）是一种基于“点对点”(peer-to-peer)技术的网络货币，也是mit/x11许可下的一个开源软件项目。它可以帮助用户即时付款给世界上任何一个人。\n\n莱特币受到了比特币（btc）的启发，并且在技术上具有相同的实现原理，莱特币的创造和转让基于一种开源的加密协议，不受到任何中央机构的管理。莱特币旨在改进比特币，与其相比，莱特币具有三种显著差异。第一，莱特币网络每2.5分钟（而不是10分钟）就可以处理一个块，因此可以提供更快的交易确认。第二，莱特币网络预期产出8400万个莱特币，是比特币网络发行货币量的四倍之多。第三，莱特币在其工作量证明算法中使用了由colin percival首次提出的scrypt加密算法，这使得相比于比特币，在普通计算机上进行莱特币挖掘更为容易。每一个莱特币被分成100,000,000个更小的单位，通过八位小数来界定。', ' ', ' ', 'Litecoin 莱特币', '1522826029', '5', '2', '1', '0', '7186', '684', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('457', '10', 'EOS 柚子', 'EOS 柚子', '1522826029', '1', '/uploads/images/6.EOS.png', 'eos 为区块链奇才 bm （daniel larimer）领导开发的类似操作系统的区块链架构平台，旨在实现分布式应用的性能扩展。eos 提供帐户，身份验证，数据库，异步通信以及在数以百计的cpu或群集上的程序调度。该技术的最终形式是一个区块链体系架构，该区块链每秒可以支持数百万个交易，同时普通用户无需支付使用费用。', ' ', ' ', 'EOS 柚子', '1522826029', '2', '1', '1', '0', '6265', '435', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('458', '10', 'XLM-恒星币', 'XLM-恒星币', '1522826029', '1', '/uploads/images/7.XLM-.png', '恒星币（stellar），一个由前瑞波币（ripple）创始人jed mccaleb发起的数字货币项目，用于搭建一个数字货币与法定货币之间传输的去中心化网关。将通过免费发放的形式提供给用户，其供应上线为1000亿，其中95%数量的恒星币用于免费发放。 恒星是一个多元化的团队，董事会成员有包括前square首席运营官keith rabois，stripe首席执行官patrick collison，而狗狗币联合创始人jackson palmer以及angellist联合创始人naval ravikant 将作为该项目的顾问。', ' ', ' ', 'XLM-恒星币', '1522826029', '5', '1', '1', '0', '1013', '640', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('459', '10', 'Cardano 艾达币', 'Cardano 艾达币', '1522826029', '1', '/uploads/images/8.Cardano.png', '卡尔达诺是ada加密货币的归宿，可用于发送和接收数字资金。这种数字现金代表了未来的货币，通过使用加密技术，可以快速，直接的转帐，保证其安全性。\n\n卡尔达诺不仅是一个加密货币，而是一个技术平台，能够运行在世界各地的个人、组织和政府每天使用的金融应用程序。该平台正在层次构建中，使系统更容易维护，并允许通过软叉进行升级。在运行ada的结算层构建完成后，将分离构建计算层来处理智能合约，这些数字法律协议将为未来的商业和业务提供支援。卡尔达诺还将运行分散应用程序或dapps，服务将不是由任何一方控制，而是以区块链方式进行运作。\n\n这是从科学哲学开发出来的第一个区块链项目，也是由主导的学者和工程师组成的全球团队之设计和制造的唯一项目。技术是安全的、灵活和可扩展的，并可供数百万用户使用是至关重要的。因此，一些主导专家的深谋熟虑和关心已经投入至该项目，并且设计决策也已成形。应用于诸如航空航天科学和银行业务的关键任务系统之科学严谨性已衍生至加密货币领域中，并且实施了高度的安全保证。我们相信这是前所未有的。\n\n卡尔达诺的一项重大创新就是能够架接用户和监管需之间的平衡，进一步将隐私与监管结合。卡尔达诺的愿景是，通过为所有人提供公平的金融服务，其新型之受控管计算将带来更多的融资包容性。', ' ', ' ', 'Cardano 艾达币', '1522826029', '4', '1', '1', '0', '2578', '661', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('460', '10', 'NEO 小蚁', 'NEO 小蚁', '1522826029', '1', '/uploads/images/9.NEO.png', 'neo，原名小蚁，2014年正式立项，2015年6月于github实时开源。成立以来，neo团队亲历了区块链行业的高潮与低谷，数字货币市场的狂热与冷却，各国监管与政府态度的模糊与清晰。我们相信，科技是这个时代变迁的原动力，在这股动力的推动下，我们将迈入新的“智能经济”时代。\n\nneo区块链通过将点对点网络、拜占庭容错、数字证书、智能合约、超导交易、跨链互操作协议等一系列技术相结合，让你快速、高效、安全、合法地管理你的智能资产。', ' ', ' ', 'NEO 小蚁', '1522826029', '1', '3', '1', '0', '6470', '766', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('461', '10', 'IOTA 埃欧塔', 'IOTA 埃欧塔', '1522826029', '1', '/uploads/images/10.IOTA.png', 'iota是一种新型的数字加密货币，专注于解决机器与机器（m2m）之间的交易问题。通过实现机器与机器间无交易费的支付来构建未来机器经济（machine economy）的蓝图。iota提供高效，安全，轻便，实时的微交易，并且不产生交易费用。 它是开源的，去中心化的数字加密货币，是专门为物联网而设计的，它是实时微交易，并且能够简单方便的进行扩展。iota超越了blockchain技术。它是第一个用于整个生态系统的，基于非区块链技术加密货币。iota可能被认为又是一种山寨币，但事实是iota远非一种山寨币，它超越了区块链技术，是区块链技术的延展。iota是基于缠结（tangle）而非区块链技术。', ' ', ' ', 'IOTA 埃欧塔', '1522826029', '4', '2', '1', '0', '9572', '782', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('462', '10', 'Monero 门罗币', 'Monero 门罗币', '1522826029', '1', '/uploads/images/11.Monero.png', '门罗币（monero，代号xmr）是一个创建于2014年4月开源加密货币，它着重于隐私、分权和可扩展性。与自比特币衍生的许多加密货币不同，monero基于cryptonote协议，并在区块链模糊化方面有显著的算法差异。monero的模块化代码结构得到了比特币核心维护者之一的wladimir j. van der laan的赞赏。\n\nmonero致力于成为可代替的不可追踪的电子货币。相比比特币及其分叉，monero具有更高程度的匿名性。 monero于2014年4月18日发布。', ' ', ' ', 'Monero 门罗币', '1522826029', '5', '1', '1', '0', '6326', '182', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('463', '10', 'Dash 达世币', 'Dash 达世币', '1522826029', '1', '/uploads/images/12.Dash.png', '达世币是一种可线上操作的数字货币，用户可以使用达世币进行安全的在线即时支付，商户则可以为店内添加由全球千万用户所建立的开源支付平台。\n\n达世币核心由独特的激励制p2p网络构成。 矿工们维护区块链安全得到奖励；而主节点持有者则是为用户验证交易、存储数据以及提供多种服务而获得奖励。\n\n主节点代表着新一层级的网络。 它们可组成高度安全的集群 – 仲裁链, 提供多种类的去中心化服务，如即时交易、匿名性、去中心化管理等等，同时它还可以防止低成本的网络攻击。\n\n得益于达世币的奖励机制，它的网络主节点自2014年发行以来已经增长到了4100个，这意味着达世币p2p网络已经成为全球最大的网络之一。\n\n更多的节点意味着更高的安全性能，达世币能为更多来自全球各地的终端用户提供全天候的数字货币服务。', ' ', ' ', 'Dash 达世币', '1522826029', '3', '3', '1', '0', '2289', '106', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('464', '10', 'Tether 泰达币', 'Tether 泰达币', '1522826029', '1', '/uploads/images/13.Tether.png', '2014年11月下旬，注册地为马恩岛和香港的公司realcoin改名为tether。2015年2月发布时就抱上了一条粗腿，当时比特币期货交易量最大交易平台：bitfinex宣布支持泰达币（下称usdt）交易。随后竞争币交易平台poloniex交易所也支持usdt。p网凭着以太币强势崛起，在竞争币交易平台中隐有龙头之势，也顺带提携了usdt的交易量。\n\nusdt的发行和交易使用的是omni（原mastercoin）协议，而omni币可以说是市面上的第一个基于比特币区块链的2.0币种。所以usdt的交易确认等参数是与比特币一致的。\n\n根据tether的cto及联合创始人craig sellars 称，用户可以通过swift电汇美元至tether公司提供的银行帐户，或通过bitfinex交易所换取usdt。赎回美元时，反向操作即可。用户也可在上述两个网站用比特币换取usdt。其网站宣称严格遵守1：1的准备金保证，即每发行1枚usdt代币，其银行帐户都会有1美元的资金保障。\n\n在合规方面，所有涉及到法币的操作，都要求用户完成kyc认证。\n\n当被问及用户如何验证银行帐户保证金时，craig称法币由tether liminted公司保管，并有定期审计，但目前用户还不能直接查询保证金。\n\n目前usdt的交易量在所有稳定虚拟货币中的交易量是最大的。', ' ', ' ', 'Tether 泰达币', '1522826029', '1', '2', '1', '0', '8169', '801', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('465', '10', 'Tron 波场', 'Tron 波场', '1522826029', '1', '/uploads/images/14.Tron.png', '在多种区块链项目中，波场tron作为是全球首家将分布式计算、社交金融，共享经济引入数字娱乐领域的科技金融公司备受资本瞩目。波场tron是基于区块链的去中心化数字娱乐协议，致力于提高全球数字娱乐平台的运转效率，为直播节目，社交网络，网络游戏和手机游戏等数字娱乐平台提供支付，研发，存储和信用提供功能上的支持。\n\n而tron平台产生的代币tronix(简称trx)，可以用于记录用户的娱乐行为和tron网络中各app之间信用数据的共享。同时，trx还具有信息储存和认证的附加值，可以记录用户资产和区块链中记录的trx消费情况。\n\ntronix 是 tron 区块链上帐户的基本单位。所有其他代币的价值均从 tron 价值衍生出来，trx也是所有tron20 token的天然桥梁货币。\n波场权tron power（tp）：tp是锁定的tron，用户可以将自身的tronix锁定来获得tp。tp本质是具有投票权的tronix，意味着拥有tron power的持有者有更高生态权限。\ntron20 token：内容主体(ip，个人，团体)可以自由的通过 tron20 标准发行数字资产，他人则可以通过购买数字资产享受内容主体不断发展所带来的利益与服务。', ' ', ' ', 'Tron 波场', '1522826029', '3', '2', '1', '0', '1540', '890', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('466', '10', 'NEM 新经币', 'NEM 新经币', '1522826029', '1', '/uploads/images/15.NEM.png', '新经币（new economy movement，缩写 nem），是一种点对点虚拟货币。2015年初发布，其源代码由java编写并100%属于原创。nem 广泛发布于人群中，其块链采用了全新发明的基于重要性证明poi的同步解决方案。nem特征也包括：完整的点对点安全系统加密信息系统和基于eigentrust++算法的声望系统。\n\n新经币是nem（new economy movement）新经济运动组织发行的货币的代号。nem的创立目标是创建一套全新的数字货币及其生态系统。相较于btc,nxt. nem有着诸多有别与其他数字货币特性，nem的核心是poi算法，一种基于评估个体贡献在群体中的经济活跃度的共识算法。nem是首个在块链层面集成实施多重签名的数字货币组织，nem多重签名在客户端中实现，简明易用，保障了nem大大小小24项开发与社区基金，遵循严格的程序正义有序管理。一直以来，nem以去中心化社区推动，nem社区成为数字货币领域社区组织的典范之一。在nem生态链，已形成三家正式注册的不同领域的创新型公司。其中猕讯mijin创建了授权块链的商业模式。nem的核心代码从0构建，各款软件开发坚持以测试驱动的开发这一严谨的软件工程实践方式进行，近期的成果是马赛克与移动钱包。', ' ', ' ', 'NEM 新经币', '1522826029', '3', '1', '1', '0', '2559', '381', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('467', '10', 'Binance Coin 币安币', 'Binance Coin 币安币', '1522826029', '1', '/uploads/images/16.Binance Coin.png', '截止目前，币安币（bnb）全球数字资产排名十五，市值一亿八千九百万美金。\n\nbinance coin是由币安平台发行的代币，简称“bnb”。其发行总量恒定为2亿个，且保证永不增发。bnb是基于以太坊ethereum发行的去中心化的区块链数字资产，它是基于以太坊区块链的erc 20标准代币。\n\n', ' ', ' ', 'Binance Coin 币安币', '1522826029', '3', '3', '1', '0', '2618', '815', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('468', '10', 'Ethereum Classic 以太经典', 'Ethereum Classic 以太经典', '1522826029', '1', '/uploads/images/17.Ethereum Classic.png', '2016.6以太坊最热项目thedao被黑客利用智能合约的漏洞，转移了市值五千万美元的以太币。为了挽回投资者资产，以太坊社区最终做出投票表决，大部分参与者同意更改以太坊代码，希望索回资金。为此，以太坊进行硬分叉，作出一个向后不兼容的改变，让所有的以太币——包括被黑客占有的——都回归原处。\n\n由于此次硬分叉是通过区块链公开进行的，因此虽然存在着反对的意见，但随着越来越多人对于硬分叉的支持，2016年7月21日，以太坊硬分叉成功。\n\n目前，以太坊的“官方”版本eth，是由其原始开发者进行维护的;以太经典etc则是由一个全新团队进行维护。这是第一次主流区块链为了补偿投资人而通过分叉来变更交易纪录。分叉以前就持有以太币的人在分叉后会同时持有eth和etc，存在交易所或在线钱包中的以太币也不例外。此次分叉衍生出来的两个市场，总价值达12亿美元以上。\n\n目前，越来越多的以太坊矿工投入大量算力到这款经典区块链中，etc交易量上涨，不仅仅是因为理念上的符合，更是因为他们看到了保护交易安全及赢得相关挖矿奖励的价值。以太经典面世后一两天的数据让人印象深刻，其网络的哈希率是544gh/s，占了以太坊网络哈希总量的13%。', ' ', ' ', 'Ethereum Classic 以太经典', '1522826029', '3', '1', '1', '0', '6866', '307', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('469', '10', 'VeChain 唯链', 'VeChain 唯链', '1522826029', '1', '/uploads/images/18.VeChain.png', '唯链（vechain）是什么？\n\n唯链（vechain）平台是一个基于区块链技术的全球账本型信息交互协作云平台。通过 api 与应用层对接，把现实世界中的人、事或物数字化，实现信息的互通互联。通过基于行业实际应用的智能合约，实现不同场景下的协同和价值转移，从而将现实的商业世界映射到区块链上。通过跨平台、跨企业、跨行业、跨国界的互联协作，创造全新的商业模式，为协作参与方提供“信任服务”。\n\n唯链的源代码基础来源于以太坊，为了便于商业应用，在动态协议、智能合约等方面进行了大量改进，致力于应用区块链技术构造一个既可以自我循环、也可以向外拓展的可信任分布式商业生态环境：信息相对透明对称；不同参与方间信任摩擦最小化；不同参与方各展所长，为商业生态环境贡献自己的价值，从而获得相对公平的报酬；实现价值高速流转，并不断扩大唯链商业闭环。\n\n ven 代币的功能\n\n唯链（ vechain ）中使用的代币为 ven ，ven是唯链平台的生态血液，各参与方可以通过支付 ven 获取相应的产品和服务：\n\n1.最终用户、生态企业作为投资者在一开始付出 eth 获取 vechain token ( ven ) ，eth 交给唯链基金会进行平台的技术开发、商业应用合作的推广、区块链服务的支持等。\n\n2.唯链基金会向各个智能合约的开发及服务商收取 ven ，支付智能合约运行所需要的 gas 来保障各个商业智能合约的运行；所收取的 ven 收入的 75%～99% 将作为节点奖励，支付给节点提供商，而剩余的部分用于唯链基金会后续的日常运行、商业推广和技术开发。\n\n3.智能合约服务提供商则支付 ven 获取 gas，为所服务的企业提供 baas（区块链即服务）的智能合约服务，根据各自的商业规则及附加价值贡献，向其客户企业 —— 应用开发提供商收取 ven 来提供智能合约服务。\n\n4.应用开发提供商根据最终客户企业的需求，在所获得智能合约服务的基础上进行进一步开发和加工，为其传统企业客户或者最终用户提供应用产品，收取 ven 作为企业收入。\n\n5.最终用户可以支付 ven 来获取企业产品和服务。\n\nven 代币的分配\nven 从 2017 年 8 月 18 日 20:00 开始 ico，到 2017 年 8 月 31 日结束，预计公开售卖 4.1 亿 vechain token ( ven )。ico 以筹集 eth 的方式来参与，最小交易量为 0.01 eth，并将在 2017 年 9 月 20 日按 1:1 的比例发放成 ven。在 2017 年 8 月 21 日 20:00 之前参与 ico 可以获得额外 15% 的 ven 奖励，即 1 eth = 4025 ven；在此时间之后到众筹结束之时参与 ico，兑换比例为 1 eth = 3500 ven。\n\nven 代币的具体分配情况可以参考下图：\n\nf7aa7c8b40188f6c.png\n\n—— 9% 私募投资人：在技术和商业拓展上会对唯链项目有很大的指导和帮助。\n\n—— 41% 公开售卖：用于唯链基金的运营，包括开发、市场、财务和法律咨询等。\n\n—— 23% 企业投资人：会把未来 vechain token ( ven ) 在其商业活动中的使用作为重点开拓目标。\n\n—— 12% 持续经营及技术发展：维持唯链团队之后的持续经营和发展。\n\n—— 5% 创始团队、开发团队：回报创始团队以及开发团队在唯链的发展过程中作出的贡献。\n\n—— 10% 商业落地推广：筛选合适的行业、进行行业中的战略部署、项目扶持和代币置换。\n', ' ', ' ', 'VeChain 唯链', '1522826029', '2', '3', '1', '0', '2450', '925', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('470', '10', 'Qtum 量子链', 'Qtum 量子链', '1522826029', '1', '/uploads/images/19.Qtum.png', '量子链qtum是首个基于utxo模型的pos智能合约平台，可以实现和比特币生态和以太坊生态的兼容性，并通过移动端的战略，促进区块链技术的产品化和提高区块链行业的易用性，旨在将真实商业社会与区块链世界连接。因此，量子链是一个区块链应用平台的集大成者。\n\n量子链利用其学术合作伙伴、开发工具和方法论对商业智能合约的开发进行了标准化，包括将自然语言的合约准确的转译成机器可读智能合约、高容错度的细节及合约条款。第三方将在量子链的协助下开发专用的用户接口来加强智能合约生命周期管理。\n\n量子链旨在通过与一系列合作伙伴和第三方的协作建立一个智能合约枢纽，提供安全并经过反复测试的合约模板，适用于各种行业和用例，例如供应链管理、通讯、物联网、社交媒体等。\n\n', ' ', ' ', 'Qtum 量子链', '1522826029', '2', '5', '1', '0', '8112', '427', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('471', '10', 'Verge', 'Verge', '1522826029', '1', '/uploads/images/20.Verge.png', 'verge是基于比特币技术的开源加密货币。它最初是在2014年推出的。由于快速增长的社区，货币迅速流行。verge提供了吸引世界各地用户的各个方面。多算法硬币。verge用户可以使用五种不同的算法挖掘硬币。块时间仅为30秒，并且根据生成的块的总量重新计算奖励。安全。该货币使用最新的加密技术，由开发人员团队定期更新。使用verge你可以确保你的钱是安全的。隐私。verge非常关心其用户的隐私。使用verge付款的用户知道他们保持匿名并且他们的个人数据被隐藏。快速和容易的付款。内存块链技术允许在全球处理非常快速的交易。要使用这种数字货币，您只需要安装钱包软件，即可用于所有主要平台。廉价操作。由于没有中央权力控制货币，交易费非常小甚至零！总而言之，verge已经证明是一个不断增长的社区的可靠，安全，便宜，快速发展的支付解决方案。verge提供了一种转移货币的新方式-便捷和便宜。', ' ', ' ', 'Verge', '1522826029', '5', '3', '1', '0', '7093', '241', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('472', '10', 'Lisk 应用链', 'Lisk 应用链', '1522826029', '1', '/uploads/images/21.Lisk.png', 'lisk是一个基于node.js与javascript，建立于区块链技术之上的区块链应用平台，开发者可以通过官方提供的sdk，使用javascript语言在lisk平台内开发自已的blockchain app，我们认为，未来必定是中心化应用与去中心化应用共存的时代，lisk提供这么一种简单，易行的方式，让开发者可以很快速的在区块链上建立自己的应用。\n\nlisk的团队是由分别来自德国，英国，美国的经验丰富的专家组成，ceo是来自德国的max kordek，来自亚琛工业大学，在区块链行业有多年的经验，对于区块链行业的发展有自已独特的见解，max最终成功地为lisk项目筹集了14000多个btc。核心开发者是来自英国的oliver beddows，具有15年的软件开发经验，另一位核心开发者françois-xavier thoorens，以及其它还有多位开发者与多位在各自领域具备丰富经验的顾问团。', ' ', ' ', 'Lisk 应用链', '1522826029', '5', '5', '1', '0', '8148', '698', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('473', '10', 'OmiseGo 嫩模币', 'OmiseGo 嫩模币', '1522826029', '1', '/uploads/images/22.OmiseGo.png', 'omise成立于2013年，是一家总部位于泰国的金融科技初创公司，目前已经获得了有3轮的融资。omise主要在泰国、日本、新加坡和印度尼西亚运营，并在亚太地区迅速扩张。2016年11月，omise在福布斯杂志上被评为“金融科技明星”。2017年5月，omise宣布与支付宝合作推出一款电子钱包，在自己的支付服务套件中整合“支付宝”支付解决方案，帮助泰国本地电子商务商户接受来自中国游客的线上支付交易。\n\n关于omisego 这个项目是采取传统vc+ico组合模式，之前通过vc融资了大概2500万美元的omise发起的ico，项目名称为omisego。它打算利用以太坊的技术开发一个电子钱包，通过omisego，任何人都可以以一种完全分布式和比较便宜的方式来进行金融交易。', ' ', ' ', 'OmiseGo 嫩模币', '1522826029', '4', '3', '1', '0', '1763', '105', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('474', '10', 'ICON', 'ICON', '1522826029', '1', '/uploads/images/23.ICON.png', 'icon是一个由各种独立的社会以区块链连接而形成的去中心化网络。icon已连接了韩国多家银行、证券公司、保险公司、医院、大学、电子商务等所属的多种社会。以此，区块链id、支付与交易等分布式应用（dapp）服务也可以被跨领域使用。', ' ', ' ', 'ICON', '1522826029', '4', '1', '1', '0', '9980', '530', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('475', '10', 'NANO 纳诺', 'NANO 纳诺', '1522826029', '1', '/uploads/images/24.NANO.png', '纳诺的重心是改变全球人民的支付方式。自从2015年启动纳诺以来，纳诺的创始人及创造者科林·乐玛荷一直的运营目标是让加密货币在可持续发展的基础上运作。纳诺采用了一项名为“区块晶体”的创新科技，无需挖掘过程。此项科技支持无限次的交易，免费并且即时到账。整个团队的工作重心是通过创造一种人性化的、无缝运行的加密货币来使得商户与购物者的价值科技的传输一体化。我们着重于创造新颖的应用，让纳诺成为人们日常生活的必需品。', ' ', ' ', 'NANO 纳诺', '1522826029', '2', '2', '1', '0', '4986', '487', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('476', '10', 'Bitcoin Gold 比特黄金', 'Bitcoin Gold 比特黄金', '1522826029', '1', '/uploads/images/25.Bitcoin Gold.png', '比特币黄金在块491406（2017-10-24 01:17:35 utc）之后按计划分叉比特币区块链。\n\nbtg是对比特币区块链进行硬分叉得到的一种新的数字货币，具体时间为比特币区块高度491406（2017-10-24 01:17:35 utc），其主要特点为：\n\n类似于bitcoin cash，btg已经添加sighash_forked(一种硬分叉后的安全机制)。\n\nbtg将会采用equihash pow算法，这个算法和btc用的sha256的区别在于，哈希算力将受计算设备的内存大小影响。所以，asic矿机将不再有效用于btg挖矿，这也是为了抵御asic导致的算力集中化，也算是给比特币未来能否修改挖矿算法做了一次实验路线猜想的实施。\n\nbtg目前存在的问题有：\n\n没有具名的代码开发者。\n\n同时，btg代码库还包含8,000块(100,000 btg)的私有预挖区块。开发商可能会在公开市场上出售其预挖的btg。', ' ', ' ', 'Bitcoin Gold 比特黄金', '1522826029', '4', '3', '1', '0', '2907', '142', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('477', '10', 'Zcash 大零币', 'Zcash 大零币', '1522826029', '1', '/uploads/images/26.Zcash.png', 'zcash 是首个使用零知识证明机制的区块链系统，它可提供完全的支付保密性，同时仍能够使用公有区块链来维护一个去中心化网络。与比特币相同的是，zcash代币（zec）的总量也是2100万，不同之处在于，zcash交易自动隐藏区块链上所有交易的发送者、接受者及数额。只用那些拥有查看秘钥的人才能看到交易的内容。用户拥有完全的控制权，他们可自行选择向其他人提供查看秘钥。\n\nzcash 是 bitcoin 的分支，保留了 bitcoin 原有的模式，基于比特币 0.11.2 版代码修改的。 zcash 钱包资金分 2 种：透明资金、私有资金，透明资金类似比特币资金；私有资金加强了 隐私性，涉及到私有资金的交易是保密不可查的，透明资金与透明资金的交易是公开可查的。', ' ', ' ', 'Zcash 大零币', '1522826029', '1', '4', '1', '0', '3278', '263', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('478', '10', 'Steem 斯蒂姆币', 'Steem 斯蒂姆币', '1522826029', '1', '/uploads/images/27.Steem.png', 'steem是新型社交媒体网站steemit的数字货币。数字货币领域的新手们如果想获得steem，可以在社交媒体平台steemit发帖。平台会计算发帖好评数量，给用户一定steem奖励。\n\nsteem是一个通过加密货币奖励支持社区建设和社交互动的区块链数据库。steem结合了社交媒体概念，以及加密货币及其社区建设过程中的经验教训。激励人们参与社区，货币或自由市场经济，一个重要关键点在于，一种公平的，能连贯一致地反映每个人贡献的记账系统。steem是第一个尝试精确，透明地对无数个对其社区做出主观性（subjective）贡献的个体做出奖励的加密货币。', ' ', ' ', 'Steem 斯蒂姆币', '1522826029', '1', '1', '1', '0', '1259', '249', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('479', '10', 'HT 火币全球积分', 'HT 火币全球积分', '1522826029', '1', '/uploads/images/28.HT.png', '火币全球通用积分，简称ht，是基于区块链发行和管理的积分系统。ht发行总量限定5亿，100%用于赠送，其中60%（三亿）用于购买点卡套餐赠送（每日限量）；20%（一亿）用于用户奖励和平台运营；20%（一亿）用于团队激励，锁定期四年，每年2500万。\n\n火币全球通用积分（ht）的价值？\n\n1. 手续费折扣：使用ht购买vip，不同等级的vip享有不同的手续费折扣，最高可获得5折交易手续费率优惠。\n\n2. 平台定期回购：每个季度火币全球专业站收入的20%用于流通市场回购，回购的ht全部计提火币投资者保护基金, 用于平台突发风险时对火币用户进行先行赔付，保护投资者权益；\n\n3. 法币交易区认证商家保证金：使用ht充当保证金，成为法币交易认证商家，获得专属认证标识、一对一客户服务。\n\n4. ht持有者专享活动：火币pro会针对ht持有者不定期做专享活动，比如空投在火币全球专业站上交易的新币等。\n\n5. 币币交易：支持ht/usdt、ht/btc 、ht/eth的交易；\n\n6. 投票参与火币业务：火币会不定期向ht持有者发起投票，让ht持有者来参与业务方向和细节。比如，针对评级达到火币全球专业站上线要求的项目，使用ht可以为看好的项目投票，火币全球专业站优先处理。\n\n如何获取火币全球通用积分（ht）?\n\n火币用户通过购买点卡套餐获赠ht。\n\n点卡是火币推出的交易手续费的充值卡，点卡套餐类似于电话预付费套餐。 购买1点能抵扣1usdt等值手续费。在ht活动期间，购买点卡套餐，可以获赠ht。\n\n购买方式支持以usdt、btc、bch、eth、ltc、etc购买,不同币种按照当时价格折算成usdt单位进行购买。', ' ', ' ', 'HT 火币全球积分', '1522826029', '5', '5', '1', '0', '5891', '620', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('480', '10', 'Bytom 比原链', 'Bytom 比原链', '1522826029', '1', '/uploads/images/29.Bytom.png', 'bytom blockchain protocol（简称比原链：bytom）是一种多元比特资产的交互协议，运行在比原链区块链上的不同形态的、异构的比特资产（原生的数字货币、数字资产）和原子资产（有传统物理世界对应物的权证、权益、股息、债券、情报资讯、预测信息等）可以通过该协议进行登记、交换、对赌、和基于合约的更具复杂性的交互操作。连通原子世界与比特世界，促进资产在两个世界间的交互和流转。比原链采用三层架构：应用层、合约层、数据层，应用层对移动终端等多终端友好，方便开发者便捷的开发出资产管理应用；合约层采用创世合约和控制合约进行资产的发行和管理，在底层支持扩展的utxo模型butxo，对虚拟机做了优化，采用自省机制以防止图灵完备中的死搀状态；数据层使用分布式账本技术，实现资产的发行、花费、交换等操作，共识机制采用对人工智能asic芯片友好型pow算法，在哈希过程中引入矩阵和卷积计算，使得矿机在闲置或被淘汰后，可用于ai硬件加速服务，从而产生额外的社会效益。\n\n使命陈述\n\n“我们的任务是连通比特世界与原子世界，建造起一个多元化资产的登记、流通的去中心化网络”。bytom将极大的推动现有的价值属性的比特信息、比特资产的交换、交互及流动。通过合约和配置，也将产生新的比特资产。bytom还将以去中心化的形式、基于市场的管理协议去创造应用，并同时为本地和全球的比特经济参与者提供独特的激励。bytom作为一种媒介，已经充分准备好成为一个促成信息获利的经济体，一个信息资产效能的放大器。在未来，这些信息资产不仅会为现有的日常工作生活所用，也可以成为人工智能、物联网设备的“数据食物”的提供者，以进一步加速其对原子世界的影响力。\n\n核心目标\n\n1.建造多元化比特资产登记的标准\n\nbytom旨在建立一个全球性开放的byte assets登记平台。并让创建和定义、生成一种比特资产更加便捷，也更容易为用户所理解。\n\n2.建造多元化比特资产的交互工具\n\n从最基本的资产的交换工具（不同形态的数字资产间按协定进行交换、所属权的变更）、bytom还将支持较为复杂的交互形式，例如 ：\n\na 触发工具：资产依照合约规定的投票，产生确定性y／n布尔结果或数值结果，以激活原子世界的参与方共享数据集；\n\nb 预测工具：例如通过零和博弈，双方或多方对赌，产生某场航班是否延迟、两位候选谁将胜出的预测信息 ，将此预测信息用于现实世界的金融对冲、保险等领域。\n\n人工智能asic芯片友好型pow算法\n\n采用对人工智能asic芯片友好型pow算法，使得矿机在闲置或被淘汰后，可用于ai加速服务。\n\n比特币矿机和人工智能深度学习具有可比性，它们都是依赖于底层的芯片进行大规模并行计算。深度学习算法绝大多数可以被映射为底层的线性代数运算。线性代数运算有两大特点：一是tensor 的流动非常规整且可预期；二是计算密度很高。这两大特点使得ai深度学习特别弁合做硬件加速。', ' ', ' ', 'Bytom 比原链', '1522826029', '4', '3', '1', '0', '3397', '288', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('481', '10', 'Populous', 'Populous', '1522826029', '1', '/uploads/images/30.Populous.png', 'populous是一个基于区块链的票据金融交易系统。它采用xbrl数据，使用信用评分和破产公式，内含如altman z-score等技术，可用于对潜在目标借款人进行深入的信用风险分析，分析的内容包括其关联公司和他们的客户等数据；这个系统同时还提供有针对性的营销解决方案，使用k-means聚类分析等方法，找到需要发票或汇票融资的借款人，同时在平台上执行智能合约，这样不仅可以防止多重发票或汇票的融资欺诈，还可创造成本效益，这些解决方案具有将populous公司经营成全球化大企业的潜力。', ' ', ' ', 'Populous', '1522826029', '1', '2', '1', '0', '9883', '999', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('482', '10', 'DigixDAO 黄金代币', 'DigixDAO 黄金代币', '1522826029', '1', '/uploads/images/31.DigixDAO.png', 'digixdao是一个智能合同套件，由去中心化自治机构（dao）创建、由digixglobal部署在区块链上，目标是与社区一起治理并建立21世纪以太坊金本位金融平台。作为一个开发、透明的机构，它会建立这样一个标准，利用以太坊智能合同的力量，digixdao代币持有人能直接对那些致力于digixcore黄金平台成长和宣传的决定产生影响。作为回报，给予代币持有人以太坊平台digix黄金代币交易费作为奖励。\n\ndigixdao众筹于2016年3月31日启动，12小时内募集了550万美元，超出目标10倍。', ' ', ' ', 'DigixDAO 黄金代币', '1522826029', '4', '3', '1', '0', '8584', '252', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('483', '10', 'Bytecoin 字节币', 'Bytecoin 字节币', '1522826029', '1', '/uploads/images/32.Bytecoin.png', '字节币bcn是第一个基于cryptonote技术，致力于匿名反机枪池的超前的一种货币，2012年就已经发布。市面上有出现过同样名字bytecoin的币种，或许是因为此种缘故，导致其一直不被大众所熟知。字节币的出块奖励主要根据当前出币总量动态改变。出块奖励basereward = (msupply - a)/2的18次方。msupply = (2的64次方 - 1)， a 等于已经出来的币的数量。', ' ', ' ', 'Bytecoin 字节币', '1522826029', '1', '5', '1', '0', '1469', '517', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('484', '10', 'BitShares 比特股', 'BitShares 比特股', '1522826029', '1', '/uploads/images/33.BitShares.png', '比特股(bitsharesx,btsx)由invictus研发，构思宏伟、公司开发、知名度高、分发相对公平，采用dpos核心算法，出块时间10秒，货币的总量是20亿，于2014年7月19号发布。\n\nbitshares x是一项测试一种新型“可预测市场(prediction market)”背后的经济理论的实验。该实验创建了去中心化的银行和交易所，使用由dpos保障安全的去中心化交易总账来创造可互换数字资产，这些资产可以市场化锚定美元、黄金、汽油等任何东西的价值。和所有的dac一样，比特股 x拥有可以像比特币那样在用户间转让的股权。比特股 x的特殊之处是它实施了一个类似于银行或经纪公司的商业模式。', ' ', ' ', 'BitShares 比特股', '1522826029', '1', '5', '1', '0', '8743', '344', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('485', '10', 'Waves 波币', 'Waves 波币', '1522826029', '1', '/uploads/images/34.Waves.png', 'waves,用于资产/自定义代币发行、转账和交易的终极密码学货币平台。项目名字受到了最近重力引力波的发现的启发，waves代表着将社区连接在一起的引力波。waves团队以大规模市场应用和易用性为目标，我们想要成为开源项目和社区项目的平台。\n\n受到nxt密码学货币的启发，waves是一个全新的平台，从头开始编写代码，希望能成为彩色币平台，就如同eth是脚本处理一样。我们是由一群开发者和参与到nxt平台的商务人士组成的团队，通过我们的经验和专业知识，我们希望能提供一个可靠和灵活的彩色币平台，将关注于众筹、社区项目、开源开发，并与现有的支付网络进行连接。\n\n发布之时，waves将提供一个全功能的去中心化众筹、社区管理、加密信息平台。我们将会为终端用户提供一个轻量级的chrome插件，运行完整区块链的全节点将会运行在一个单独的软件模块中。用户体验完全接近于中心化的交易/银行体验。我们的目标是大规模应用和易用性。用户在浏览器中就能体验到一键安装程序和全功能去中心化的交易/众筹平台。', ' ', ' ', 'Waves 波币', '1522826029', '5', '5', '1', '0', '4098', '803', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('486', '10', 'Stratis', 'Stratis', '1522826029', '1', '/uploads/images/35.Stratis.png', 'stratis是提供区块链即服务（baas）解决方案的新平台，stratis可以让任何人在几分钟内创建并管理区块链，同时可以定制用户自己的侧链，小型公司可以用区块链进行实验，而不仅仅是像摩根大通和德意志银行这样的大型公司才能用区块链进行实验。', ' ', ' ', 'Stratis', '1522826029', '2', '5', '1', '0', '7254', '983', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('487', '10', 'Siacoin 云储币', 'Siacoin 云储币', '1522826029', '1', '/uploads/images/36.Siacoin.png', 'sia 最初的设计目的是：让云储存去中心化。 在这个平台上，您可以存放和提取各种各样的文件，并不需要为您的文件隐私和安全担心。通过运用加密技术，加密合约，和重复备份，sia 能够使一群互不信任的和互不了解的计算机节点联合起来成为一种有统一运行逻辑和程序的云储存平台。 这种平台将比传统的云储存平台更快，更便宜，和更可靠。因为这些互不信任的计算机节点分布于世界各地，sia 可以在无需添加成本的情况下成为一个有效的文件及其内容的分销网络。文件上传者可以自由选择他们所使用的节点，这意味着他们可以避开一定区域内的节点，或只用那些他们认为可信的节点。去中心化是指把上传的一个文件分成许多小块并把每个小块存放在不同的计算机节点上。在这些存放文件的节点中，只需一小部分节点是可信任的，就可以使上传文件既安全又可靠。', ' ', ' ', 'Siacoin 云储币', '1522826029', '4', '4', '1', '0', '6606', '941', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('488', '10', 'Status', 'Status', '1522826029', '1', '/uploads/images/37.Status.png', 'snt(status) status是一个开源的聊天平台和支持以太坊上面的去中心化应用（dapp）的移动浏览器。在2017年6月22日开始的ico因热度太高造成以太坊网络有史以来最拥堵的一天，因为其智能合约限制大额投入，投资分布较均匀，总共募集到约30万eth。snt ico的成本价格为万分之一eth，按当时币价计算约为0.25cny，请务必注意投资风险。', ' ', ' ', 'Status', '1522826029', '4', '5', '1', '0', '7707', '632', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('489', '10', 'Exchange Union 雪币', 'Exchange Union 雪币', '1522826029', '1', '/uploads/images/38.Exchange Union.png', '交易所联盟致力于数字资产交易所之间的无缝链接，其依托的交易所联盟链是一个去中心化的、容易接入的网络，每个链内的交易所都是联盟链的一个节点，这些节点共同组成交易所联盟链，所有链内的交易都被加密保存在各个节点上，做到完全的去中心化存储。和ripple系统相比，交易所联盟链更具开放性，可以充分连接不同交易所和用户，做到一个交易所的币种，全世界都能买得到，做到实时结算，过程中避免频繁转币的繁琐和费用浪费，确保用户能以最优价格购买到目标币种，方便用户，也给交易所进行全球引流，从而极大的提升交易效率，做到交易所、用户的双赢。 ', ' ', ' ', 'Exchange Union 雪币', '1522826029', '4', '4', '1', '0', '1562', '436', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('490', '10', ' Aeternity', ' Aeternity', '1522826029', '1', '/uploads/images/39. Aeternity.png', 'aeternity号称新一代区块链网络,由德裔计算机科学家“以太坊教父”yanislav malahov与前augur核心开发者zack hess、前synereo核心开发者jack pettersson于2016年发起，聚集诸多颠覆性创新于一身，旨在重树当今智能合约的底层协议。aeternity的技术亮点是图灵完备状态通道(state channels)和去中心化预言机（oracles）。\n\naeternity项目曾经被看成是欧洲的以太坊，也被很多币粉视为超优质项目,但是在两轮ico之后，项目组并没有像很多项目一样迅速发币，而雪上加霜的是，在以太坊钱包被盗事件中，ae第二轮ico筹得的资金也大量丢失，这让参与ico的币粉们非常失望。', ' ', ' ', ' Aeternity', '1522826029', '3', '5', '1', '0', '1651', '185', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('491', '10', 'Dogecoin 狗狗币', 'Dogecoin 狗狗币', '1522826029', '1', '/uploads/images/40.Dogecoin.png', '狗币自有一套策略，它并不走比特币的赚钱路线，而是很好地利用了美国的“小费文化”。这种被视作是对服务者的捐赠或跪拜的谦卑姿态，也在互联网上广泛使用。比起昂贵的比特币，狗币门槛更低，而且更“萌”，系统上线一周后，狗币已经成为美国互联网中第二受欢迎的“小费电子货币”。\n狗币很特别，基于网络草根文化而起，由于气质可爱搞笑而一炮而红。在日益膨胀的电子货币市场当中，狗币算是定位到一个利基市场。', ' ', ' ', 'Dogecoin 狗狗币', '1522826029', '4', '4', '1', '0', '3394', '666', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('492', '10', 'Maker', 'Maker', '1522826029', '1', '/uploads/images/41.Maker.png', 'makerdao 是以太坊上的去中心化自治组织和智能合约系统，提供以太坊上第一个去中心稳定货币 dai。\n\ndai 是有数字资产抵押背书的硬通货，和美元保持1:1锚定。\n\nmkr 是 maker系统的管理型代币和效用代币，用来支付借 dai 的稳定费用以及参与管理系统。与 dai 稳定货币不同，由于其独特的供给机制和在maker平台上的作用，mkr的价值和整个系统的表现息息相关。\n\n去中心化稳定货币 dai 在抵押贷款、杠杆交易、避险保值、国际汇款、供应链和政府公开记账方面都有关键的应用。', ' ', ' ', 'Maker', '1522826029', '4', '1', '1', '0', '1925', '115', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('493', '10', '0x 0x协议', '0x 0x协议', '1522826029', '1', '/uploads/images/42.0x 0x.png', '0x是一个点对点交易的开源协议，以促进以太坊区块链中erc20代币的交易。该协议旨在作为开放标准和通用构建模块，推动包括交易所功能的去中心化应用（dapps）之间的互操作性。交易由以太坊智能合约系统执行，可以公开访问，免费使用，且任何dapp都可以接入。 建立在协议之上的dapps可以访问公共流动资金池或创建自己的流动资金池，并对其交易量收取交易费用。该协议不会把成本强加于用户之上，也不会任意地从一组用户中获取价值来惠及其他用户。去中心化管理用于将更新以持续而安全的方式集成到基本协议中，而不会中断更高级别的进程。', ' ', ' ', '0x 0x协议', '1522826029', '1', '1', '1', '0', '7028', '447', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('494', '10', 'Decred', 'Decred', '1522826029', '1', '/uploads/images/43.Decred.png', 'dcr拥有先进的pow + pos混合机制，所有pow产出的块都必须经过pos的验证才能成为合法的块，也就是pow打包记账 + pos投票治理的共识机制。所以在dcr的网络中，几乎杜绝了算力垄断的现象，完美地解决了去中心化项目的治理机制问题。如果比特币也是这种机制，那扩容争议早就解决了，也不会出现像比特币和以太坊一样由于硬分叉而分裂出不同的链！\n\ndcr币总量为2100万个，目前挖出了596万个左右，其中pow挖矿产生的占43.1%，pos挖矿产生的占21.5%。目前dcr只有在p网才能进行交易，截止本文发稿，dcr在p网的24小时交易量为199btc，价格也从最初的1美元左右涨到如今的20余美元，最高价曾接近50美元，未来投资收益空间或将非常可观。', ' ', ' ', 'Decred', '1522826029', '5', '3', '1', '0', '2523', '294', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('495', '10', 'Augur', 'Augur', '1522826029', '1', '/uploads/images/44.Augur.png', 'rep是reputation的简写，是augur系统的流通货币。augur 是建立在以太坊平台上的去中心化预测市场平台。利用 augur ，任何人都可以为任何自己感兴趣的主题（比如美国大选谁会获胜）创建一个预测市场，并提供初始流动性，这是一个去中心化的过程。作为回报，该市场的创建者将从市场中获得一半的交易费用。普通用户可以根据自己的信息和判断在 augur 上预测、买卖事件的股票，例如美国总统大选。当事件发生以后，如果你预测正确、持有正确结果的股票，每股你将获得1美元，从而你的收益是1美元减去当初的买入成本。如果你预测错误、持有错误结果的股票，你将不会获得奖励，从而你的亏损就是当初的买入成本。', ' ', ' ', 'Augur', '1522826029', '3', '2', '1', '0', '5970', '498', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('496', '10', 'Komodo 科莫多币', 'Komodo 科莫多币', '1522826029', '1', '/uploads/images/45.Komodo.png', 'komodo是一个以隐私为中心的加密货币，结合了zcash的匿名性和比特币的安全性。\n\n使用由komodo团队开发的新的共识机制，延迟工作证明，komodo块可以使用比特币区块链进行公证。kmd是通过基于equihash的pow协议发布的，新的块信息被发送到预先投票的公证人节点。这些节点通过创建自定义事务在btc区块链上插入komodo块信息。\n\n科莫多使用零知识证明来提供100％的匿名交易，通过比特币的算力来保证安全。', ' ', ' ', 'Komodo 科莫多币', '1522826029', '5', '3', '1', '0', '1199', '502', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('497', '10', 'Zilliqa', 'Zilliqa', '1522826029', '1', '/uploads/images/46.Zilliqa.png', 'zilliqa(zil)作为一个新的公有区块链，着重为高吞吐量的应用程序提供运行平台。它将分片技术从理论变为实践，运用创新的密码技术和共识协议，提供随着网络增容而不断提高的交易处理能力。在最新的实验中，测试网络达到每秒处理2,400个交易以上。这比目前的主流区块链平台快了200多倍。zilliqa区块链平台致力于支持高吞吐量和数据驱动的分布式应用程序，以满足诸如电子广告、支付、共享经济和产权管理等业务必要的扩容需求。', ' ', ' ', 'Zilliqa', '1522826029', '2', '5', '1', '0', '3979', '128', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('498', '10', 'Ardor 阿朵币', 'Ardor 阿朵币', '1522826029', '1', '/uploads/images/47.Ardor.png', '阿朵币由阿朵主链产生，是一个运行所有子链和运行所有交易的服务系统。 然而一些交易将在主链运行，像交易阿朵，但很多特性是在主链不可用的，是为了提高主链性能和减少区块臃肿。因为是100%的pos，不需要矿工也没有新币被创建。', ' ', ' ', 'Ardor 阿朵币', '1522826029', '1', '1', '1', '0', '5919', '460', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('499', '10', 'Walton 沃尔顿链', 'Walton 沃尔顿链', '1522826029', '1', '/uploads/images/48.Walton.png', '沃尔顿链独特地将区块链技术与rfid技术结合，致力于推进区块链技术由互联网向物联网贯通，实现价值物联网的概念。沃尔顿链的目的是搭建一条底层的商业生态公有链，在此链上，商家可以根据自己的需求建立各式各样的子链。这条商业生态链的主要特征是所有的数据（含物权归属数据，商品流转数据等）真实可信，不可篡改，带有时间戳，如此就能够建立一个诚信真实可靠的商业生态圈。\n\n团队拟通过自主研发的读卡器芯片和标签芯片来实现线下实物商品在流转过程中的所有数据能够自动快速上链的目的。避免人为的干扰，最大程度地降低了数据篡改的可能性。这样就有办法实现对每一个商品流转状态的溯源及监控。\n\n代币wtc的描述\n\n沃尔顿链生态系统中，最为核心的母链称为waltonchain，其中用于流转和支付的代币叫做waltoncoin（以下简称wtc），在整个沃尔顿链项目系统中，wtc起到关键核心作用。\n\n1.waltoncoin存在的意义\n\n首先，通过奖励wtc，鼓励节点记帐，支撑母链网络各项功能的可靠运行；\n\n各类行业应用创建子链时，需要消耗wtc并存蓄一部分wtc提供信誉担保；\n\n且可通过我们的核心技术实现对子链应用数据贡献者实现奖励机制；\n\n沃尔顿链联通各类商业应用的价值数据，基于这些价值数据构建的上层应用的支付系统，都可以基于wtc进行。\n\n综上，随着各行业子链数量和规模的发展，对wtc的应用需求会持续增加，促进升值。\n\n2.waltoncoin的技术创新\n\nwaltonchain首提价值物联网的概念，将区块链技术与rfid技术结合，利用区块链去中心化、不可篡改等特点，结合rfid系统，解决产品的溯源问题。\n\nwaltonchain采用独特的双链架构设计，提出了最新的跨链连接和确认机制。有效解决子链与母链之间的数据交换，及权益流转的问题。\n\n采用了基于pos+pow相结合的混合共识机制。', ' ', ' ', 'Walton 沃尔顿链', '1522826029', '4', '2', '1', '0', '6554', '126', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('500', '10', 'Veritaseum', 'Veritaseum', '1522826029', '1', '/uploads/images/49.Veritaseum.png', 'veritaseum是一个聪明的合同,点对点的钱包接口(β),目前与比特币区块链(移植到ethereum)。 它允许非技术快速创建个人和实体,直接输入和管理智能合约与他人没有一个权威的第三方。 这是第一的写在一个公共或私人区块链。', ' ', ' ', 'Veritaseum', '1522826029', '4', '4', '1', '0', '7625', '721', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('501', '10', 'Hshare 红烧肉', 'Hshare 红烧肉', '1522826029', '1', '/uploads/images/50.Hshare.png', 'hshare（hsr）是hcash发行的代币，该代币基于 utxo 模型的稳定区块链系统进行开发。而在 hcash 主链上线之后，可以在任何上线 hshare的交易所或者 hcash 官方团队与 hcash 进行一比一兑换。并于大约 10 个月后完成所有的承兑与替换。hcash 团队将使用技术手段销毁所有的 hshare。在最后截止日期后所有的 hshare 将被永久销毁。hshare 的开源代码在 hcash的 github 页面下，每一个人都可以阅读审核 hshare 的源代码并确认 hsahre的发放总数量与 hcash 白皮书所规定的 hcash 数量一致。\n\nhcash 数量规划\n\nhcash 的代币总量是固定的，总量无限接近 8400 万，总体分为六大部分。\n\n• pow 产出 2100 万 (25%).\n\n• pos 产出 2100 万 (25%).\n\n• 众筹（ico）以及免费分发 2100 万(25%).\n\n• 早期投资者（pre-ico）1260 万(15%).\n\n• 开发团队 + hcash 基金会 420 万(5%).\n\n• hcash-dao 420 万(5%).', ' ', ' ', 'Hshare 红烧肉', '1522826029', '3', '1', '1', '0', '9743', '120', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('502', '10', 'Aion', 'Aion', '1522826029', '1', '/uploads/images/51.Aion.png', 'aion-1 是一个先进的第三代区块链，是一种引入新的安全模式，公平，并具有代表性的加密经济激励机制。aion 网络的核心是一个独特设计的，公开的，第三代的区块链，aion-1。设计用于连接其它区块链并管理其自身的大量链上程序，aion-1 还提供了激励互操作性的经济系统。\n\naion 令牌作为整个网络的燃料可用于创建新的区块链，货币化跨链桥梁和保护整个网络的安全。', ' ', ' ', 'Aion', '1522826029', '2', '4', '1', '0', '1535', '470', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('503', '10', 'Ark', 'Ark', '1522826029', '1', '/uploads/images/52.Ark.png', 'ark为用户提供创新性的使用案例，通过区块链领域的力量发展和整合科技，具有高度灵活和适应性强的特点，ark是一个安全的平台被设计成大规模应用，并向消费者和开发人员提供服务和需求。', ' ', ' ', 'Ark', '1522826029', '4', '2', '1', '0', '4553', '103', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('504', '10', 'PIVX 普维币', 'PIVX 普维币', '1522826029', '1', '/uploads/images/53.PIVX.png', '普维币 pivx 是私密即时验证交易的缩写，它专注于隐私权、去中心化，由创立者、开发人员、技术研发人员创立的全球社区运作的开源加密货币。\n\npivx是一种基于比特币核心0.10.x和dash技术组合的公开的专注于私密交易的pos货币. pivx应用pos2.0协议, 带有固定区块奖励的设定, 同时也有一个创新的可变的奖励此消彼长的机制, 该机制平衡了90%的主节点与权益节点之间的区块奖励, 剩余的10%用于奖励系统, 和驱动节点网络运行。', ' ', ' ', 'PIVX 普维币', '1522826029', '4', '1', '1', '0', '8777', '838', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('505', '10', 'Loopring 路印协议', 'Loopring 路印协议', '1522826029', '1', '/uploads/images/54.Loopring.png', '路印协议新一代区块链资产交易协议和交易所。它采用去中心化技术，提供零风险的代币交易所模式，并允许多家交易所通过竞争，对同样的订单进行链外撮合及链上清结算。\n\n路印协议将彻底解决现有中心化交易所模式的一些固有风险。\n\n主要特性有：\n\n1,绝对安全\n\n路印协议订单中的卖出代币不必充值到交易所做资金托管，在下单、撮合、清结算过程中一直保存在用户自己区块链的地址中。订单不锁定用户区块链上的代币，下单后用户依然可以任意使用自己的数字代币，余额不足时路印协议自动调整订单的数额且保持价格恒定。使用路印协议，交易所倒闭跑路都不会对用户有任何影响。\n\n2,环路撮合\n\n路印协议一次撮合可将十几个包含不同类型代币的订单做环路撮合。\n\n3,去中心化\n\n订单在区块链外生成，传播、撮合；链上清算转账。理论上100%安全，用户资金不会丢失或被盗。\n\n4,订单共享\n\n路印协议中一个订单可以被广播给多个交易所，被这些交易所并行撮合。一个订单可被一个交易所撮合成功一部分，被另一个交易所撮合成功另一部分。交易所之间存在竞争关系，因此订单会被更快、更好（价格最优）地撮合。使用路印协议下单，交易不会因交易所被ddos攻击而无法得到及时撮合。\n\n5,跨链协议\n\n路印协议是个去中心化安全交易的协议层，可在多个智能合约公有链上实现，而不依赖于某个特定平台。我们会在以太坊上率先实现第一个版本，接下来会在eos，etc，量子链上部署协议，为这些平台提供代币流动性支持。', ' ', ' ', 'Loopring 路印协议', '1522826029', '2', '2', '1', '0', '9297', '140', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('506', '10', 'Cryptonex', 'Cryptonex', '1522826029', '1', '/uploads/images/55.Cryptonex.png', 'cryptonex(cnx)是在其自身区块链平台上开发的一种全球化的去中心加密货币。主要目的是使世界上任何国家的货币与任何加密货币或代币能够兑换，通过手机和支付卡能买到理想的的商品和服务。快速，并且佣金最低。', ' ', ' ', 'Cryptonex', '1522826029', '4', '3', '1', '0', '5732', '494', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('507', '10', 'Basic Attention Token 注意力币', 'Basic Attention Token 注意力币', '1522826029', '1', '/uploads/images/56.Basic Attention Token.png', 'bat(basic attention token)是javascript创始人，mozilla和firefox浏览器联合创始人brendan eich创办的一个用于在广告商和用户之间进行流通的数字资产，用于解决浏览器中的广告展示和用户激励问题。\n\n项目基于brave浏览器开展去中心化数字广告业务，通过零知识证明的运用保护用户隐私，同时可以使用户的关注得到回报。brave浏览器中有一个独特的概念——注意力。brave使用anonize算法，能统计用户行为，比如点击什么链接最多，或在哪个网站停留时间最久。这些行为都可以使用“注意力”这个单位量化，具体方式就是在浏览器中嵌入区块链账本系统，而这个系统流通的代币就是bat（注意力币）。简单说，整合了bat代币的brave浏览器，会让商家、网站主和用户间保持良好的正反馈关系。平时brave用户观看广告或优质内容时，因为花费了注意力，会获得bat代币的奖励；而网站主凭借广告和优质内容成功吸引了用户的注意力，系统也会对其进行奖励。用户和网站主获得的bat代币都来自商家的广告费用投入。', ' ', ' ', 'Basic Attention Token 注意力币', '1522826029', '4', '4', '1', '0', '7577', '228', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('508', '10', 'KCS', 'KCS', '1522826029', '1', '/uploads/images/57.KCS.png', '库币区块链资产交易平台推行的兑换代币为kucoin shares，简称“kcs”，发行总量恒定为2亿个，永不增发。kcs币是基于以太坊ethereum发行的去中心化的区块链区块链资产，它是基于以太坊区块链的erc 20标准代币。', ' ', ' ', 'KCS', '1522826029', '4', '4', '1', '0', '7822', '531', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('509', '10', 'QASH', 'QASH', '1522826029', '1', '/uploads/images/58.QASH.png', 'qash是基于liquid——一个全球化的交易平台（liquid平台是一个可以使整个加密经济受益的财务实用工具。代币发行者，代币持有人，创新者和下一代金融服务用户都能够为流动性而受益的一个平台）而产生的代币。qash可以在全世界所有的交易中流通，也可以支付quoine中产生的交易，充分发挥其他流通中作用。', ' ', ' ', 'QASH', '1522826029', '1', '4', '1', '0', '1233', '726', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('510', '10', 'MonaCoin 萌奈币', 'MonaCoin 萌奈币', '1522826029', '1', '/uploads/images/59.MonaCoin.png', '萌奈币(monacoin, mona)受莱特币（ltc）启发，是一种基于p2p技术的网络加密货币，也是mit/x11许可下的一个开源软件项目，它可以帮助用户即时付款给世界上任何一个人。其发布于2014年1月1日，是于日本成长起来的老牌加密货币，也是日本本土的首个加密货币，在日本拥有庞大的支持社区。萌奈币目前已上线日本、美国、韩国等几大主流的加密货币交易所。\n\n出块时间1.5分钟，每隔3年产量减半，当前每个区块包含25个币。萌奈币网络每1.5分钟就可以处理一个块，因此可以提供更快的交易确认。采用了digishield难度调整算法，来防机枪池。萌奈币已激活了隔离见证（segwit），并实现了闪电网络（lightning network）功能，更好地应对即时支付和跨链交易。采用lyra2rev2算法进行pow挖矿，能够有效阻止asic专用矿机，以让更多人参与挖矿，更好地做到去中心化，同时能够有效避免51%攻击。\n\n得益于日本政府对加密货币的开放态度和广大的支持社区，萌奈币是世界上极少数能够同时支持线上线下购物的的加密货币，支持萌奈币支付的餐馆、零售店、网站等的数量呈越来越多之势。特别是日本主要的电子产品商店ark akihabara在支持比特币支付之外，亦开始接受萌奈币。', ' ', ' ', 'MonaCoin 萌奈币', '1522826029', '3', '4', '1', '0', '9359', '209', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('511', '10', 'DigiByte 极特币', 'DigiByte 极特币', '1522826029', '1', '/uploads/images/60.DigiByte.png', 'digibyte 是一个全球性的去中心化支付网络和数字货币，受到比特币的启发。digibyte可以进行快速交易，只需要很少或者根本不需要费用。不需要登录，注册或没有隐藏费用，用户在数秒内从世界任何一个digibyte地址接收digibytes或发出digibytes.digibyte使用p2p技术，没有中央管理机构；网络集体管理交易，发行digibytes。digibyte也是开源的，其设计是公共参与的，没有人能够拥有或控制digibyte，每个人都可以参与。 ', ' ', ' ', 'DigiByte 极特币', '1522826029', '2', '3', '1', '0', '1885', '585', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('512', '10', 'Factom 公证通', 'Factom 公证通', '1522826029', '1', '/uploads/images/61.Factom.png', 'factom利用比特币的区块链技术来革新商业社会和政府部门的数据管理和数据记录方式。利用区块链技术帮助各种各样应用程序的开发，包括审计系统，医疗信息记录，供应链管理，投票系统，财产契据，法律应用，金融系统等。\n\n开发者能够创造新的应用程序，并把数据保存在区块链上面，同时不用受到直接把数据写入比特币区块链的各种限制：例如写入的数据速度，成本，大小等限制。factom正在革新整个世界对数据的记录方式，并利用比特币区块链技术来保护您的数据安全。', ' ', ' ', 'Factom 公证通', '1522826029', '3', '5', '1', '0', '8163', '880', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('513', '10', 'Elastos 亦来云', 'Elastos 亦来云', '1522826029', '1', '/uploads/images/62.Elastos.png', '亦来云（elastos）通过构建区块链驱动的智能万维网，实现大型去中心化应用运行和数字内容的安全、可信交易，打造开放、共享的亦来云智能经济生态。', ' ', ' ', 'Elastos 亦来云', '1522826029', '2', '1', '1', '0', '9243', '383', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('514', '10', 'Golem', 'Golem', '1522826029', '1', '/uploads/images/63.Golem.png', 'golem 是建立在以太坊平台上的去中心化计算机算力租赁平台。通过 golem 平台，任何用户都可以成为算力的发售方和租用者。无论用户提供的是一台闲置的家用电脑还是几台大型的数据中心，都可以加入到 golem 平台中。基于以太坊的交易系统被应用于 golem 平台，用于结算算力提供者的收益和算力使用者所需要支付的费用。', ' ', ' ', 'Golem', '1522826029', '3', '3', '1', '0', '8941', '457', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('515', '10', 'Gas', 'Gas', '1522826029', '1', '/uploads/images/64.Gas.png', 'neo中内置两种原生代币，neo（缩写符号neo）和 neogas（缩写符号gas）。\n\nneo是管理代币，总量1亿份，用于实现对neo 网络的管理权。管理权包括投票进行记账人选举，neo网络参数更改等。neo 的最小单位为1，不可再分割。\n\ngas 是燃料代币，最大总量上限为1亿，用于实现对neo网络使用时的资源控制。neo网络对代币转账和智能合约的运行和存储进行收费，从而实现对记账人的经济激励和防止资源滥用。gas的最小单位为0.00000001。\n\n在neo网络的创世块里，1亿份neo已经生成，而gas尚未生成，数量为零。1亿份neo所对应的1亿份 gas，将通过一个衰减的算法在约22年的时间内逐步生成至neo管理代币的地址中。neo管理代币转入新的地址后，之后的gas也将在新的地址生成。\n\nneo网络将通过投票设置一个阈值，对一定量的转账交易和智能合约运行存储免收gas，以提升使用体验。当发生大量垃圾交易时，可以通过neoid来优先处理具有合格身份的交易和智能合约。没有合格数字身份的交易和智能合约可以通过支付gas来获得优先处理。', ' ', ' ', 'Gas', '1522826029', '3', '2', '1', '0', '9780', '547', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('516', '10', 'GXChain 公信宝', 'GXChain 公信宝', '1522826029', '1', '/uploads/images/65.GXChain.png', '公信链（gxchain）是公信宝团队打造的一条数据交换公有区块链，是公信宝数据交易所的底层链，不仅支撑着公信宝数据交易所高频的数据交易交换，还支持开发者开发应用。在公信链上开发应用，不仅可以利用区块链的技术特性，还可以获得各行业多维度数据的支持，做出非常落地于民生的有价值应用。\n\n已经开发出来并上线的应用，证明了公信链在商业上的可用性，基于公信链的第一个b2b应用——公信宝去中心化交易所，已经在2017年9月24日正式商用。\n\n而第二个基于公信链的应用，面向大众的个人信用管理工具（公信宝dapp），也将在今年发布测试版。\n\n它们的定义分别是这样的：\n\ngxs是公信宝在公信链上发行的数字货币，不仅具有流通价值，同时还是基于公信链应用的必需加密数字货币。\n\n简单来说gxs是公信宝在公信链上发行的token，它可以在数字货币交易所交易流通，它的应用价值主要体现在以下几个方面：\n\n1.在公信链上开发、认证应用、使用链上服务（例如链上转账的矿工费）需要支付或燃烧gxs，gxs是作为链上应用运行唯一使用到的token。\n\n2.随着公信宝合作的客户和数据源越来越多，数据交易所的交易量越来越大，公信宝就可以收到更多的佣金，团队会定期拿出佣金收入的10%按照当时二级市场的价格回购gxs并销毁。\n\n3、在选举产生见证人时可作为选票使用。（暂未开通）', ' ', ' ', 'GXChain 公信宝', '1522826029', '3', '4', '1', '0', '3577', '627', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('517', '10', 'Bitquence', 'Bitquence', '1522826029', '1', '/uploads/images/66.Bitquence.png', 'bitquence是一种针对区块链的人力驱动的加密服务。\n\nbitquence的使命是让每个人都能获得参与到令人生畏的加密货币市场的机会，加速区块链技术的采用，并让加密货币的所有权民主化。\n\n我们让加密货币变的更容易购买和转让，从而每个人都能够参与到新经济中。\n\n我们信奉中本聪创建的哲学使命。我们通过创建普通人可访问的安全层，将本该属于大家的权力交还给大家。\n\n\n\nbitquence优势：\n\n\n\n1.安全：最先进的数字安全保证您的资产安全。\n\n2.简化和透明度：资产分配是透明的，可以完全了解详细的分配信息。分配是简单易懂的，所以你知道你在买什么。\n\n3.高流动性和访问性：所有资产仅分配在流动资产中，因此易于存款和取款。使用bitquence流动性网络，任何类型的付款都可以立即发送到任何地方。\n\n4.快速入门：存入数字货币或法定货币，没有设置费和隐藏费用。快速的资产配置和管理钱包可以快速实现价值多元化。\n\n5.社区共识：社区共识风险预测奖励有经验的用户的专业知识，同时为新用户提供有关数字资产风险和质量的信息。\n\n6.移动通用电子钱包：我们的移动专家团队确保bitquence是移动友好的，所以您可以随时监控和转移分配。', ' ', ' ', 'Bitquence', '1522826029', '4', '1', '1', '0', '6182', '331', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('518', '10', 'Revain', 'Revain', '1522826029', '1', '/uploads/images/67.Revain.png', 'revain是基于块链接技术的新代评论平台。本技术不容许把评论编辑或删除. 评论的作者能取到报酬。\n\n', ' ', ' ', 'Revain', '1522826029', '4', '3', '1', '0', '1902', '647', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('519', '10', 'SysCoin 系统币', 'SysCoin 系统币', '1522826029', '1', '/uploads/images/68.SysCoin.png', '系统币不仅仅是一种虚拟币，它区块链中附加了金融基础功能。能够为个人或者商业团队保障数据和市场的安全。\n\n系统币有如下特性：\n\n1，通过区块链来打造去中心化的市场；\n\n2，提供数据存贮；\n\n3,提供数字验证；\n\n4，通过全球性的合并挖矿，能够保障其他scrypt发行。', ' ', ' ', 'SysCoin 系统币', '1522826029', '5', '3', '1', '0', '1466', '890', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('520', '10', 'Dragonchain 龙链', 'Dragonchain 龙链', '1522826029', '1', '/uploads/images/69.Dragonchain.png', 'dragonchain，中文直译为“龙链”，2014-2016年期间都在disney（迪士尼）的西雅图办公室进行孵化，今年从迪士尼独立出来运作，性质也从原来的私有链变成了混合链，致力于打造一站式区块链商业服务平台。', ' ', ' ', 'Dragonchain 龙链', '1522826029', '3', '2', '1', '0', '9052', '684', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('521', '10', 'Nebulas 星云币', 'Nebulas 星云币', '1522826029', '1', '/uploads/images/70.Nebulas.png', '星云币（nas）的总量为1亿个，在星云链发起团队主导下，依照项目开发计划和需求，将分批次通过售卖的形式把大部分星云币分配给社区。现已明确，首次面向社区影响力投资人售卖的星云币占比为5%，最终通过社区售卖形式分配的星云币占比将不低于星云币总量的50%.', ' ', ' ', 'Nebulas 星云币', '1522826029', '3', '5', '1', '0', '3256', '431', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('522', '10', 'FunFair', 'FunFair', '1522826029', '1', '/uploads/images/71.FunFair.png', '总部位于美国纽约的funfair 是一个由以太坊智能合约支持的去中心化游戏平台，也是以太坊技术第一次真正意义地应用在了线上博彩游戏利于，解决了“赌场”游戏高费用和低信任度的问题。实际上，游戏是智能合约技术最主要的一个垂直应用领域，funfair 公司创始人兼首席执行官 jez san 则把区块链技术引入到了游戏领域，其平台不仅可以接受以太币，还可以接受比特币，zcash，以及 erc20 代币。', ' ', ' ', 'FunFair', '1522826029', '1', '2', '1', '0', '5185', '834', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('523', '10', 'Kyber Network', 'Kyber Network', '1522826029', '1', '/uploads/images/72.Kyber Network.png', 'kybernetwork将打造一个支持多种数字资产即时交易和转换的新系统。 \n为了实现所有用户在不同代币之间的无缝支付，我们将提供丰富的支付api以及新一代的合约钱包，来扩展kybernetwork的整体交易能力。 \n此外， 用户还可以通过我们的衍生品交易来减少加密货币世界中的价格波动风险。', ' ', ' ', 'Kyber Network', '1522826029', '5', '4', '1', '0', '4672', '509', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('524', '10', 'ZCoin 小零币', 'ZCoin 小零币', '1522826029', '1', '/uploads/images/73.ZCoin.png', '小零币(xzc)是一种通过使用零币协议(zerocoin protocol)来保障账务隐私的一种加密货币。它是第一种实现了零币协议的加密货币，通过使用零知识证明确保了交易双方的相关地址信息免遭泄露。零币(zcoin)是由poramin和aizensou为首的研发团队开发，通过零币协议(zerocoin protocol)来保障账务隐私，使用零知识证明确保了交易双方的相关地址信息免遭泄露。 它的参数和比特币一样，出块时间10分钟，总货币供应量2100万枚，产出减半周期也跟比特币一样，大约为4年一次减半，截至2017年1月，零币xzc已经挖出大约4%的总产量，并已在bittrex、bitsquare、cryptopia、nova exchange等交易平台上线交易。相比于早期实现匿名功能的混币技术和环签技术，零知识证明的零币协议解决了前二者的不足，完全切断了铸造所得的币和赎回的币之间的联系。当你铸造出一个零币的时候，同时你也销毁了一个零币，也会生成一份证明证实了你烧毁了一个零币。这份证明只是证实了你烧毁了一个零币，却不用证明你烧毁了具体哪一个。然后通过使用这个证明，你就可以赎回一个完全没有任何交易历史记录的崭新的零币。', ' ', ' ', 'ZCoin 小零币', '1522826029', '5', '5', '1', '0', '4736', '861', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('525', '10', 'Storm', 'Storm', '1522826029', '1', '/uploads/images/74.Storm.png', 'storm market 利用科技，为世界各地的用户创造更多赚取代币的机会。我们凭借 storm 的游戏化微任务 平台，方便用户以全新的方式去赚取代币、参与互动和发展进步。', ' ', ' ', 'Storm', '1522826029', '3', '1', '1', '0', '3193', '638', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('526', '10', 'Electroneum', 'Electroneum', '1522826029', '1', '/uploads/images/75.Electroneum.png', 'etn全称electroneum，是英国的第一个加密数字货币，electroneum专注于发展一个加密的离线钱包，pc版和ios、android版都有，可以完美的把用户所有的转账交易记录加密。因为区块链的透明性，所有使用bitcoin 钱包地址的人都可以看到你钱包有多少个比特币, 以及你的整个交易记录。electroneum 可以保护用户的交易记录和钱包内容免于窥视，同时也留下可选择公开访问的交易哈希码用于认证。', ' ', ' ', 'Electroneum', '1522826029', '5', '2', '1', '0', '9829', '185', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('527', '10', 'ReddCoin 蜗牛币', 'ReddCoin 蜗牛币', '1522826029', '1', '/uploads/images/76.ReddCoin.png', '蜗牛币(reddcoin,rdd)采用scrypt算法，gpu挖矿，于2014年2月2日发布，出块时间60秒，每一个块中包含10万个币，每50万块产量减半，共计1090亿个。蜗牛币是于2014年1月份创建的币种，不同于其他pow pos币的分发方式。蜗牛币前期采用传统的pow分发方式，后期新创了基于权益证明和活动频率posv算法。由于蜗牛币前期经过pow的分发后，分布趋向于均匀，后期改成posv算法币种，因此被克隆的成本很大。国外支持者比较多，根据官网得后续路线图，将会开发一系列基于社交化的产品。', ' ', ' ', 'ReddCoin 蜗牛币', '1522826029', '4', '5', '1', '0', '1689', '838', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('528', '10', 'Substratum', 'Substratum', '1522826030', '1', '/uploads/images/77.Substratum.png', 'sub币是substratum项目代币的简称；substratum网络——去中心化网络的基础，一个开放源码的网络，让任何人均可借出他们的计算机作为寄存服务器赚取加密货币sub币，他们的目标是在未来十年内，在每台计算机上存在，改变世界。', ' ', ' ', 'Substratum', '1522826030', '1', '2', '1', '0', '5161', '432', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('529', '10', 'Kin', 'Kin', '1522826030', '1', '/uploads/images/78.Kin.png', '5月25日，加拿大即时通讯社交平台kik宣布推出自己的数字货币kin币，将允许用户通过它来购买一系列数字服务。\n\n这种名为kin的数字货币，就像最著名的数字货币比特币那样，建立在以太坊（ethereum）区块链技术之上。kik创始人兼 ceo ted livingston 表示，kik将会成为第一个公开发售数字货币的社交媒体应用。', ' ', ' ', 'Kin', '1522826030', '3', '5', '1', '0', '9924', '875', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('530', '10', 'Nxt 未来币', 'Nxt 未来币', '1522826030', '1', '/uploads/images/79.Nxt.png', 'nxt是一个开源的加密平台，具有分散的非公司结构。它与linux操作系统有许多相似之处，特别是在支持开放源代码和组织结构方面。\n\nnxt核心代码由开发商bcnext以java语言编写，nxt系统于2013年11月24日开始运行，利用基于证据范例证明的自己本地区块链实现，而不是工作证明。\n\nnxt是“第二代”加密货币平台，这意味着除了比特币等“第一代”系统的基本功能之外，nxt还被设计成一个模块化系统，具有一组核心功能，可以作为第三方项目的基础。\n\n目前的nxt核心功能包括以下内容：\n\n- 本地区块链实施。基于curve 22519算法，阻塞时间为1分钟。 \n\n- nxt加密货币 10亿个硬币被创建和分配，区块链由一个验证过程维护，该过程向节点操作员奖励交易费用：“锻造”。nxt可以被视为更先进的nxt功能的燃料，以及它本身的一个加密货币。 \n\n- 从任何nxt账户加密和未加密的消息到另一个。 \n\n- 帐户认证。nxt用户可以使用nxt客户端基于账户密码短语的加密版本生成的唯一标识，以特定账户持有人的身份完全确定和验证自己。 \n\n- 别名/ dns系统。允许将简单的纯文本标签分配给复杂的帐号或url。 \n\n- 市场。所有商品都是一个完全分散的市场，以nxt账户为标识进行交易，使得市场相对匿名。 \n\n- 资产交换。允许发行和交易资产（基本上是基于nxt的代币）。这是一种加密安全问题，已经被用于众筹，一个声誉系统，并作为一个新的和既定的企业股票形式。 \n\n- 货币体系。货币系统允许在nxt区块链上创建附属货币，利用pos或pow，所有参数在货币发行人的控制之下。', ' ', ' ', 'Nxt 未来币', '1522826030', '3', '5', '1', '0', '9097', '635', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('531', '10', 'SALT', 'SALT', '1522826030', '1', '/uploads/images/80.SALT.png', 'salt是一个基于会员的贷款和借款网络，允许用户利用其区块链资产来确保现金贷款。在salt平台上，用户可以使用他们的数字货币作为抵押品获得贷款。\n\n使用salt，用户可以利用某些数字资产的价值，从而使他们获得现金，抵消税务事件，避免交换费用，并保持他们持有的资产的长期额度。\n\n用户需要获得salt代币才能参与平台并获得贷款。用户每年花费的som令牌越多，他们可以获得更多的借款。\n\n使用salt平台，用户可以从其密码货币持有量中获得流动性，而不会像其他传统资产类别（如股票，债券，房地产和商品）一样销售。\n\nsalt贷款完全是抵押品，这意味着借款人的信用记录是无关紧要的。任何用户的抵押品与平台上的任何其他人都具有相同的价值，无论每个用户的信用评分如何。', ' ', ' ', 'SALT', '1522826030', '5', '4', '1', '0', '2953', '940', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('532', '10', 'MaidSafeCoin 互联网币', 'MaidSafeCoin 互联网币', '1522826030', '1', '/uploads/images/81.MaidSafeCoin.png', '互联网币(maidsafecoin ,maid)采用maid原创核心算法，理念先进，完成之后有非常大的实用价值，发布于2014年4月22日。\nmaidsafecoin 是写在比特币块链上的媒介标注，将在safe网络里的一个p2p网络平台，按照1：1与原生货币safecoin进行兑换。根据maidsafe.net网站，它被描述为：“基于完全去中化平台，应用开发者可以创造去中心化应用。这网络是由提供存储、计算能力和带宽的个人用户构造而成，形成一个全球自治系统。”safecoin用于支付在safe去中心化互联网服务的费用。这些服务是提供安全的数据存储和处理的虚拟化硬件，用于运行去中心化互联网系统。', ' ', ' ', 'MaidSafeCoin 互联网币', '1522826030', '5', '1', '1', '0', '9207', '647', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('533', '10', 'Power Ledger', 'Power Ledger', '1522826030', '1', '/uploads/images/82.Power Ledger.png', 'platform ledger platform 是一个无信任、透明和可互操作的能源交易平台。平台通过可交易的和无摩擦成本的能量交易代币 sparkz，支持不断扩大的能源应用套件生态系统。\n\npower ledger pty ltd 旨在解决全球能源系统面临的三大挑战：\n\n寻找一种方式，将高密度住房中的个人融入繁荣的分布式共享式能源经济中；\n\n重新创造电力网络，为分布式能源资源（der）的连接提供动力；\n\n减少高价值网络资产高达数十亿澳元的损失风险。\n\npower ledger token（以下简称“powrtm”）是power ledger 生态系统的燃料。定制的私有交易应用程序创建 sparkz，以换取powr。 目前，用户通过使用无锚货币购买和兑换 sparkz，且使用独特的交易平台进行能源和 sparkz 之间的闭环交易。\n\n通过在两个区块链层中部署双重代币生态系统（powr 与 sparkz），生态系统的市场灵活性得以促进。\n\npowr 代币为无阻塞成本的区块链代币，可让应用程序宿主和参与者访问和使用平台（如同有限的软件许可权限）。\n\nsparkz 代币通过智能债券按照托管的 powr 代币发行，并由应用程序宿主载入其客户。', ' ', ' ', 'Power Ledger', '1522826030', '1', '2', '1', '0', '9328', '781', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('534', '10', 'Byteball 字节雪球', 'Byteball 字节雪球', '1522826030', '1', '/uploads/images/83.Byteball.png', 'byteball是一个被称为区块链3.0的新型平台。其实它并不是区块链，而是用比区块链更巧妙dag技术作为底层。从而做到不需要pow和pos，照样做到了100%可靠。并且交易越是拥挤速度反而越快。\n\nbyteball有一个非常好用的钱包。首次在加密世界采用类似applestore的模式，自由开发者可以在byteball平台上自由开发各种应用。涉及到内盘交易所，类似telegram的隐私聊天。互助保险，赌球，彩票。\n\n开发者非常活跃，基本每周都有代码提交。\n\n在该系统中，还有一个隐私性超强的数字货币-黑球。第一次做到在总账上也无法追查到交易信息。\n\n在最新的2.1版本中，开发者开发出textcoin功能，让交易者能通过字符串进行轻松转账，用户可以通过qq，微信，telegram，email等等社交工具轻松转账。大大拓宽了bytes的使用场景，例如可以通过kyc认证的方式，通过字符串轻松获取20美元的红包。\n\nbyteball不是通过ico的方式售卖，而是通过一定的规则免费赠送给安装钱包的用户。并且发行量很少，只有100万。', ' ', ' ', 'Byteball 字节雪球', '1522826030', '4', '3', '1', '0', '1433', '252', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('535', '10', 'Dentcoin', 'Dentcoin', '1522826030', '1', '/uploads/images/84.Dentcoin.png', 'dent wireless公司创立了全世界第一个移动数据交易平台。dent平台是基于以太坊区块链技术的智能合约系统，用户在此平台内可以快速安心地进行交易，而其发行的 dent代币则是沟通全球电信用户和电信运营商的桥梁。dent平台可以实现真正意义上的全球移动数据资源共享，并且还有助于消除漫游费等额外开销。除此之外，dent还可以根据不同用户的实际情况自动为用户挑选出最划算的流量购买方案。', ' ', ' ', 'Dentcoin', '1522826030', '4', '2', '1', '0', '6043', '374', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('536', '10', 'Enigma', 'Enigma', '1522826030', '1', '/uploads/images/85.Enigma.png', 'eng币是区块链enigma项目代币的简称；enigma是具有隐私保证的分布式计算平台。借助安全的多方计算技术，不同方能够对分布式存储的数据运行计算程序并得到正确结果，而无需访问原始数据本身。enigma分离了数据的访问和计算，使得共享数据不再是一个不可逆过程，实现了对个人数据的自主控制，为数据货币化建立了基础。', ' ', ' ', 'Enigma', '1522826030', '4', '4', '1', '0', '4282', '445', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('537', '10', 'Storj', 'Storj', '1522826030', '1', '/uploads/images/86.Storj.png', 'storj 是storj项目的以太坊代币，storj是一个去中心化的基于区块链的分布式云存储系统，功能与中心化的dropbox，onedrive类似。storj激励用户分享自己的剩余空间和流量以获得区块奖励，因为其充分利用用户资源，成本极低，并且数据采用冗余和端对端加密存储，更加安全可靠。storj已经达成与开源文件传输项目filezilla的合作。storj在第二次ico中募集到3000万美金，成本为约6cny，发行后曾处于破发状态。为请务必注意投资风险。', ' ', ' ', 'Storj', '1522826030', '4', '3', '1', '0', '6351', '519', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('538', '10', 'Request Network', 'Request Network', '1522826030', '1', '/uploads/images/87.Request Network.png', 'request是一个建立在以太坊网络上的去中心化网络，允许任何人在任何地方发起支付请求，并向接收者提供安全支付方法。所有的数据都存储在一个去中心化的真实分类账里，打造资产发票、会计、审计和付款标准的金融平台。', ' ', ' ', 'Request Network', '1522826030', '5', '5', '1', '0', '1503', '247', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('539', '10', 'Neblio', 'Neblio', '1522826030', '1', '/uploads/images/88.Neblio.png', 'neblio是一个区块链开发平台，在neblio区块链上可以简化并加速分布式应用程序的开发和部署，以及未来可能的其他区块链网络。\n企业分布式应用程序在neblio平台能够快速构建项目，restful api支持目前流行的所有编程语言，因此，开发人员可以直接在neblio区块链网络进行交互，而无需了解更为复杂的区块链技术。', ' ', ' ', 'Neblio', '1522826030', '3', '1', '1', '0', '9103', '940', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('540', '10', 'ChainLink', 'ChainLink', '1522826030', '1', '/uploads/images/89.ChainLink.png', 'chainlink的link网络是第一个分散的oracle网络，允许任何人安全地提供智能合同，访问关键的外部数据，脱机支付和任何其他api功能。任何拥有数据feed，脱机服务（如本地付款）或任何其他api的用户均可以直接将其提供给智能合同，以换取link令牌。', ' ', ' ', 'ChainLink', '1522826030', '2', '1', '1', '0', '2685', '162', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('541', '10', 'Skycoin 天空币', 'Skycoin 天空币', '1522826030', '1', '/uploads/images/90.Skycoin.png', '天空币是下一代分布式加密数字货币，天空币项目起始于莱特币发行前后，是比特币的后继者和替代者，旨在安全性、易用性、便捷性上对比特币各项特性进行针对性的提升，弥补比特币的缺陷。\n天空币解决了比特币设计、实施和配置时与生俱来的问题和局限。天空币满足了将用户的产出作为交易媒介的需求，实现了完全可用性，在低预算硬件、慢速网络和网络遭到持续攻击的情形下仍可运行，保证了更加健壮的运行环境。\n创始人\n天空币开发团队是最早掌握区块链核心技术的团队之一。天空币创始人和核心成员brandon smietana是比特币权威论坛bitcointalk上的热门人物，曾参与早期比特币开发，是在区块链行业拥有强大号召力的顶尖黑客，是symbolic analytics 公司ceo。\n优势\n天空币是新一代保证安全、隐私、易用的分布式交易系统。', ' ', ' ', 'Skycoin 天空币', '1522826030', '1', '3', '1', '0', '2174', '758', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('542', '10', 'Bancor', 'Bancor', '1522826030', '1', '/uploads/images/91.Bancor.png', 'bancor协议使用支持智能合约的以太坊区块链，为其代币内嵌价格发现和流动机制。这些“智能代币”能把一个或数个代币作为储备金，让任何人随时通过智能合约快速兑换、销毁代币或储备金。', ' ', ' ', 'Bancor', '1522826030', '5', '1', '1', '0', '9793', '165', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('543', '10', 'TenX', 'TenX', '1522826030', '1', '/uploads/images/92.TenX.png', 'tenx力求在最大程度上方便用户访问尽可能多的区块链资产，同时遵守生态系统中最高的安全标准。可以通过区块链来实现，利用comit标准，以完全去信任、实时和无成本的方式工作。我们为终端用户提供借记卡和随附的移动钱包，不仅可以使用比特币（btc），以太坊（eth），dash（dash），而且可以提供几乎所有的区块链资产。tenx钱包可以在近200个国家使用，今天接受验收的有超过3600万个节点。这是可能的，因为我们与主要的信用卡公司，如visa和万事达卡达成了合作。', ' ', ' ', 'TenX', '1522826030', '4', '1', '1', '0', '5081', '619', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('544', '10', 'Emercoin 崛起币', 'Emercoin 崛起币', '1522826030', '1', '/uploads/images/93.Emercoin.png', '崛起币emc是一个2013年12月发布的老币，总量10亿，采用pow和pos双重挖矿的方式产生，经过两年多的挖矿，目前总产量将近4000万。emc是一个非常低调的技术流派数字货币，尽管emc前期在国内没有太多的知名度，但其在研发上的进度却取得了非常多的进展，截至目前为止，emc已经研发出去中心化域名和dns系统、分布式无密码认证登陆解决方案、shell管理的去中心化解决方案、去中心化点击付费广告系统、存储于区块链的所有权证明、存储于区块链的可信任时间戳服务、分布式网络种子文件追踪器、针对流媒体的微支付库等诸多非常实用的区块链应用。尽管国内较少用户了解emc，但emc两年多来持续改造优化，在技术侧的进展已经远远高于绝大部分数字货币，当前，emc已获得微软azure支持，同时emc团队也正在寻求与ibm、dnspod等诸多知名企业的合作，具体可关注官方交流社区。', ' ', ' ', 'Emercoin 崛起币', '1522826030', '3', '2', '1', '0', '5850', '297', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('545', '10', 'Dropil', 'Dropil', '1522826030', '1', '/uploads/images/94.Dropil.png', '无', ' ', ' ', 'Dropil', '1522826030', '1', '1', '1', '0', '5686', '544', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('546', '10', 'Dentacoin', 'Dentacoin', '1522826030', '1', '/uploads/images/95.Dentacoin.png', 'dentacoin 是第一个为全球牙科行业设计的区块链概念。dentacoin erc20 代币设置为供大众在全球范围内使用。dentacoin 旨在全球范围内改进牙科护理，并通过群力让牙科护理变得价格实惠。将开发并实施多个基于区块链的工具。', ' ', ' ', 'Dentacoin', '1522826030', '3', '2', '1', '0', '6266', '377', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('547', '10', 'Genaro Network', 'Genaro Network', '1522826030', '1', '/uploads/images/96.Genaro Network.png', 'genaro network 是首个结合去中心化存储网络的图灵完备公有链，它为区块链开发人员提供了一站式解决方案，在部署智慧合约的同时，可以存储用户资料。同时，genaro 也为每个人建立一个可靠的互联网与共享小区。作为区块链3.0时代的缔造者，genaro 致力于推动区块链科技的发展。通过 genaro hub 和 genaro 加速器，genaro 将帮助数以千计的区块链应用落地，完成从云端转向区块链的技术革命，从而创建全球区块链生态系统。', ' ', ' ', 'Genaro Network', '1522826030', '2', '5', '1', '0', '4649', '740', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('548', '10', 'Particl', 'Particl', '1522826030', '1', '/uploads/images/97.Particl.png', 'Particl是在比特币源码基础上，针对支付领域的特殊需求，而开发的一种新型匿名区块链。目前，在Particl区块链上已经完成的DApp有电子商务应用。', ' ', ' ', 'Particl', '1522826030', '5', '2', '1', '0', '8794', '442', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('549', '10', 'Cindicator', 'Cindicator', '1522826030', '1', '/uploads/images/98.Cindicator.png', 'cindicator在新型经济高度不确定的情况下创造社会-技术基础设施，做出有效决策。将大量的不同类别金融分析师和全套机器培训模型结合到统一体系，并为能有效管理传统金融和加密市场上的投资者资本而设计混合智能基础设施。', ' ', ' ', 'Cindicator', '1522826030', '1', '5', '1', '0', '4637', '612', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('550', '10', 'Achain A链', 'Achain A链', '1522826030', '1', '/uploads/images/99.Achain.png', 'achain独有的rdpos分布式共识机制，实现了拥有自主知识产权的图灵完备智能合约虚拟机，链上交易性能高达1000tps，是一款简单、快速、安全的区块链平台，用户可以使用achain快速部署数字资产、智能合约等企业级的去中心化应用。', ' ', ' ', 'Achain A链', '1522826030', '4', '1', '1', '0', '2477', '676', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('551', '10', 'Vertcoin 绿币', 'Vertcoin 绿币', '1522826030', '1', '/uploads/images/100.Vertcoin.png', '绿币(vertcoin，vert 法语 绿色)采用独特的 adaptive n-factor in scrypt 算法来有效阻止asic专用矿机，以让更多人参与挖矿，更好的做到去中心化。两分半钟一个确认，总量8千400万 。绿币是一种加密货币，类似比特币和莱特币，有一个主要的区别。作为数字货币运动的先驱，原来的比特币开发者不能认识到所有的潜在威胁，这种威胁会挑战它作为去中心化货币的使命。', ' ', ' ', 'Vertcoin 绿币', '1522826030', '4', '4', '1', '0', '5400', '877', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('580', '12', '金色财经', '金色财经', '1523156287', '1', '/uploads/images/4.jinsecaijing.jpg', '在这里，读懂区块链', ' ', ' ', '金色财经', '1523156287', '4', '3', '1', '0', '6411', '453', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('566', '4', '金色财经', '金色财经', '1523156009', '1', '/uploads/images/1.jinsecaijing.jpg', '中国最专业的区块链媒体', ' ', ' ', '金色财经', '1523156009', '2', '5', '1', '0', '7771', '690', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('567', '4', '币世界', '币世界', '1523156009', '1', '/uploads/images/2.bishijie.jpg', '快人一步，尽览币圈事', ' ', ' ', '币世界', '1523156009', '1', '2', '1', '0', '4897', '203', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('568', '4', '巴比特', '巴比特', '1523156009', '1', '/uploads/images/3.babite.jpg', '以价值投资为导向', ' ', ' ', '巴比特', '1523156009', '2', '1', '1', '0', '8012', '495', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('569', '4', '挖链网', '挖链网', '1523156009', '1', '/uploads/images/4.walianwang.jpg', '挖出区块链价值', ' ', ' ', '挖链网', '1523156009', '2', '1', '1', '0', '9002', '970', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('570', '4', '链向财经', '链向财经', '1523156009', '1', '/uploads/images/5.lianxiangcaijing.jpg', '区块链信息服务平台', ' ', ' ', '链向财经', '1523156009', '2', '3', '1', '0', '6545', '914', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('571', '4', '块讯', '块讯', '1523156009', '1', '/uploads/images/6.kuaixun.jpg', '社区驱动型媒体', ' ', ' ', '块讯', '1523156009', '2', '3', '1', '0', '8114', '282', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('572', '4', '未来财经', '未来财经', '1523156009', '1', '/uploads/images/7.weilaicaijing.jpg', '区块链媒体', ' ', ' ', '未来财经', '1523156009', '5', '5', '1', '0', '5385', '805', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('573', '4', '火球财经', '火球财经', '1523156009', '1', '/uploads/images/8.huoqiucaijing.jpg', '区块链媒体', ' ', ' ', '火球财经', '1523156009', '2', '4', '1', '0', '7101', '593', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('574', '4', '网易爱玩', '网易爱玩', '1523156009', '1', '/uploads/images/9.wangyiaiwan.jpg', '区块链游戏导航', ' ', ' ', '网易爱玩', '1523156009', '2', '4', '1', '0', '7452', '936', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('575', '4', '每日区块链', '每日区块链', '1523156009', '1', '/uploads/images/10.meiriqukuailian.jpg', '及时  独家  专业', ' ', ' ', '每日区块链', '1523156009', '3', '1', '1', '0', '3649', '196', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('576', '4', '炒币网', '炒币网', '1523156009', '1', '/uploads/images/11.chaobiwang.jpg', '数字货币资讯', ' ', ' ', '炒币网', '1523156009', '3', '4', '1', '0', '4803', '354', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('577', '4', 'BTC123', 'BTC123', '1523156009', '1', '/uploads/images/12.BTC123.jpg', '中国首家区块链网导', ' ', ' ', 'BTC123', '1523156009', '2', '1', '1', '0', '4911', '765', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('578', '4', '币看', '币看', '1523156009', '1', '/uploads/images/13.Bikan.jpg', '数字货币行情资讯与交易平台  行情监控', ' ', ' ', '币看', '1523156009', '1', '3', '1', '0', '9985', '179', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app` VALUES ('579', '4', '共享财经', '共享财经', '1523156009', '1', '/uploads/images/14.gongxiangcaijing.jpg', '新鲜、及时、准确、深度，尽收拇指之间', ' ', ' ', '共享财经', '1523156009', '3', '3', '1', '0', '5558', '997', '0', '0', '0', ' ', ' ');

-- ----------------------------
-- Table structure for m_app_2
-- ----------------------------
DROP TABLE IF EXISTS `m_app_2`;
CREATE TABLE `m_app_2` (
  `app_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `app_title` varchar(500) NOT NULL DEFAULT '' COMMENT '应用名称',
  `app_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `app_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间（最新）',
  `app_type` varchar(20) NOT NULL DEFAULT '' COMMENT '软件类型：免费/收费',
  `app_logo` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `app_desc` text COMMENT '应用详情',
  `app_company` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商',
  `app_company_url` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商网址',
  `app_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '入库时间',
  `app_grade` float NOT NULL DEFAULT '0' COMMENT '用户评分',
  `app_recomment` float NOT NULL DEFAULT '0' COMMENT '系统评分',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `app_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `app_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `app_down` int(11) NOT NULL DEFAULT '0' COMMENT '下载量',
  `app_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `data_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心应用ID',
  `charge_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '独立计费包ID',
  `app_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `app_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  PRIMARY KEY (`app_id`),
  KEY `cate_update_time` (`last_cate_id`,`app_update_time`),
  KEY `cate_order` (`last_cate_id`,`app_order`),
  KEY `cate_visitor` (`last_cate_id`,`app_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `cate_down` (`last_cate_id`,`app_down`),
  KEY `app_update_time` (`app_update_time`),
  KEY `app_order` (`app_order`),
  KEY `app_down` (`app_down`)
) ENGINE=MyISAM AUTO_INCREMENT=451 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of m_app_2
-- ----------------------------
INSERT INTO `m_app_2` VALUES ('429', '2', '非小号', '非小号', '1522809671', '1', '/uploads/images/1.feixiaohao.png', '实时报价 · 自选行情 · 排行榜 · 全球交易所', ' ', ' ', '非小号', '1522809671', '2', '4', '1', '0', '5467', '285', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('430', '2', '币看比特币', '币看比特币', '1522809671', '1', '/uploads/images/2.BITKAN.png', '提供价格监控、新闻资讯、挖矿监控、股票监控、钱包等服务', ' ', ' ', '币看比特币', '1522809671', '3', '2', '1', '0', '4345', '583', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('431', '2', '可盈可乐', '可盈可乐', '1522809671', '1', '/uploads/images/3.CoinCola.png', '安全可信赖的香港场外交易平台', ' ', ' ', '可盈可乐', '1522809671', '1', '1', '1', '0', '9370', '698', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('432', '2', 'My Token', 'My Token', '1522809671', '1', '/uploads/images/4.My Token.png', '数字资产看行情专用', ' ', ' ', 'My Token', '1522809671', '3', '4', '1', '0', '4415', '795', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('433', '2', '蚂蚁矿池', '蚂蚁矿池', '1522809671', '1', '/uploads/images/5.ANTPOOL.png', '支持多币种挖矿，多子帐户管理，实时监控算力、随时撑握矿机运行情况', ' ', ' ', '蚂蚁矿池', '1522809671', '3', '4', '1', '0', '1394', '474', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('434', '2', '微比特矿池', '微比特矿池', '1522809671', '1', '/uploads/images/6.ViaBTC.png', '矿池、微合约、钱包一站式服务', ' ', ' ', '微比特矿池', '1522809671', '5', '1', '1', '0', '3688', '918', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('435', '2', '币探', '币探', '1522809671', '1', '/uploads/images/7.bitan.png', 'Global  Cryptocurrency，Price Tracking & Breaking News，Decentralize Your Mind', ' ', ' ', '币探', '1522809671', '4', '2', '1', '0', '6457', '852', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('436', '2', 'Token Club', 'Token Club', '1522809671', '1', '/uploads/images/8.TokenClub.png', 'Token Club', ' ', ' ', 'Token Club', '1522809671', '1', '4', '1', '0', '9282', '586', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('437', '2', '巴比特', '巴比特', '1522809671', '1', '/uploads/images/9.babite.png', '以价值投资为导向', ' ', ' ', '巴比特', '1522809671', '1', '4', '1', '0', '3014', '423', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('438', '2', 'BTC123', 'BTC123', '1522809671', '1', '/uploads/images/10.BCT123.png', '驱动创新·链接未来', ' ', ' ', 'BTC123', '1522809671', '2', '4', '1', '0', '2957', '384', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('439', '2', '比特币交易网', '比特币交易网', '1522809671', '1', '/uploads/images/11.btctrade.png', '安全可靠的交易平台', ' ', ' ', '比特币交易网', '1522809671', '2', '4', '1', '0', '7568', '699', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('440', '2', '库神', '库神', '1522809671', '1', '/uploads/images/12.kushen.png', '专业数字资产存储器', ' ', ' ', '库神', '1522809671', '3', '3', '1', '0', '3548', '296', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('441', '2', 'AICoin', 'AICoin', '1522809671', '1', '/uploads/images/13.ALCoin.png', '全球数字资产行情数据应用领跑者', ' ', ' ', 'AICoin', '1522809671', '1', '4', '1', '0', '4089', '523', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('442', '2', '金塔', '金塔', '1522809671', '1', '/uploads/images/14.quinter.png', '祝您掌握市场先机', ' ', ' ', '金塔', '1522809671', '2', '4', '1', '0', '8104', '416', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('443', '2', '币世界', '币世界', '1522809671', '1', '/uploads/images/15.bishijie.png', '快人一步，尽晓币圈事', ' ', ' ', '币世界', '1522809671', '4', '3', '1', '0', '9828', '954', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('444', '2', '链向财经', '链向财经', '1522809671', '1', '/uploads/images/16.lianxiang.png', '国内外最专业的区块链信息服务平台，为广大缺乏区块链理解的用户提供一个安全、诚信、可靠的学习渠道，低门槛的读懂区块链未来。', ' ', ' ', '链向财经', '1522809671', '1', '3', '1', '0', '5945', '624', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('445', '2', '要发车', '要发车', '1522809671', '1', '/uploads/images/17.yaofache.png', '区块链产业信息聚合平台', ' ', ' ', '要发车', '1522809671', '3', '3', '1', '0', '2140', '193', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('446', '2', 'POIM', 'POIM', '1522809671', '1', '/uploads/images/18.POIM.png', 'POIM为所有用户提供超级易于使用的数字货币钱包', ' ', ' ', 'POIM', '1522809671', '5', '1', '1', '0', '4029', '306', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('447', '2', 'HashToken', 'HashToken', '1522809671', '1', '/uploads/images/19.HashToken.png', '联合全球前20家交易平台，买卖更方便', ' ', ' ', 'HashToken', '1522809671', '3', '3', '1', '0', '6978', '553', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('448', '2', '挖链', '挖链', '1522809671', '1', '/uploads/images/20.walian.png', '挖链网，挖出区块链的价值', ' ', ' ', '挖链', '1522809671', '1', '5', '1', '0', '5654', '788', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('449', '2', '大比特', '大比特', '1522809671', '1', '/uploads/images/21.bigbit.png', '大比特是大比特虚拟数字行情及咨询手机端', ' ', ' ', '大比特', '1522809671', '4', '1', '1', '0', '1886', '845', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_2` VALUES ('450', '2', '共享财经', '共享财经', '1522809671', '1', '/uploads/images/22.gongxiangcaijing.png', '见证区块链新生态', ' ', ' ', '共享财经', '1522809671', '5', '4', '1', '0', '7286', '563', '0', '0', '0', ' ', ' ');

-- ----------------------------
-- Table structure for m_app_category
-- ----------------------------
DROP TABLE IF EXISTS `m_app_category`;
CREATE TABLE `m_app_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `cname` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cname_py` varchar(100) NOT NULL DEFAULT '' COMMENT '分类字母别名',
  `ctitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `ckey` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO关键词',
  `cdesc` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO描述',
  `corder` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  `cat_show` int(2) NOT NULL DEFAULT '1' COMMENT '是否显示分类',
  `cate_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '分类图标',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123234 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of m_app_category
-- ----------------------------
INSERT INTO `m_app_category` VALUES ('1', '2', '休闲益智', 'lifeedu', '', '', '', '0', '2', '/templates/cates/lifeedu.png');
INSERT INTO `m_app_category` VALUES ('2', '1', '钱包工具', 'video', '', '', '', '0', '1', '/uploads/images/8b6e2d8dcdaa47b532cd66c1e403baae.png');
INSERT INTO `m_app_category` VALUES ('3', '1', '交易平台', 'reading', '', '', '', '0', '1', '/uploads/images/5eb4ad214e681f55f2da13f418c00282.png');
INSERT INTO `m_app_category` VALUES ('4', '1', '媒体资讯', 'tool', '', '', '', '0', '1', '/uploads/images/00a81d5ee065b60dbda5e3b934097aa1.png');
INSERT INTO `m_app_category` VALUES ('5', '2', '数字货币', 'strategy', '', '', '', '0', '2', '/templates/cates/strategy.png');
INSERT INTO `m_app_category` VALUES ('6', '2', '角色扮演', 'role', '', '', '', '0', '2', '/templates/cates/role.png');
INSERT INTO `m_app_category` VALUES ('7', '2', '策略', 'gamestrategy', '', '', '', '0', '2', '/templates/cates/gamestrategy.png');
INSERT INTO `m_app_category` VALUES ('8', '2', '网络游戏', 'netgames', '', '', '', '0', '2', '/templates/cates/netgames.png');
INSERT INTO `m_app_category` VALUES ('9', '2', '飞行射击', 'flyshoot', '', '', '', '0', '2', '/templates/cates/flightShooting.png');
INSERT INTO `m_app_category` VALUES ('10', '1', '数字货币', 'strong', '', '', '', '0', '1', '/uploads/images/b94eca54deed7d78b92a3105365d23f8.png');
INSERT INTO `m_app_category` VALUES ('11', '1', '旅游酒店', 'travel', '', '', '', '0', '2', '/templates/cates/travel.png');
INSERT INTO `m_app_category` VALUES ('123233', '2', '行情必备', 'socialgame', '', '', '', '0', '2', '/templates/cates/socialgame.png');
INSERT INTO `m_app_category` VALUES ('13', '1', '其他工具', 'finance', '', '', '', '0', '1', '/uploads/images/3715cbbfda680fe91838772992eecffe.png');
INSERT INTO `m_app_category` VALUES ('12', '1', '行情必备', 'map', '', '', '', '0', '1', '/uploads/images/0cfb9d33c82af529882d0bf90b686a95.png');
INSERT INTO `m_app_category` VALUES ('15', '1', '办公商务', 'office', '', '', '', '0', '2', '/templates/cates/office.png');
INSERT INTO `m_app_category` VALUES ('16', '1', '聊天通讯', 'chat', '', '', '', '0', '2', '/templates/cates/chat.png');
INSERT INTO `m_app_category` VALUES ('17', '1', '购物优惠', 'shopcoupon', '', '', '', '0', '2', '/templates/cates/shopcoupon.png');
INSERT INTO `m_app_category` VALUES ('18', '1', '儿童亲子', 'childen', '', '', '', '0', '2', '/templates/cates/childen.png');
INSERT INTO `m_app_category` VALUES ('19', '1', '教育学习', 'studying', '', '', '', '0', '2', '/templates/cates/study.png');
INSERT INTO `m_app_category` VALUES ('20', '1', '地图旅游', 'tour', '', '', '', '0', '2', '/templates/cates/tourmap.png');
INSERT INTO `m_app_category` VALUES ('21', '1', '系统安全', 'sysinput', '', '', '', '0', '2', '/templates/cates/sysinput.png');
INSERT INTO `m_app_category` VALUES ('22', '1', '壁纸主题', 'wallpaper', '', '', '', '0', '2', '/templates/cates/wallpaper.png');
INSERT INTO `m_app_category` VALUES ('23', '1', '摄影摄像', 'pai', '', '', '', '0', '2', '/templates/cates/pai.png');
INSERT INTO `m_app_category` VALUES ('24', '2', '棋牌天地', 'chess', '', '', '', '0', '2', '/templates/cates/chess.png');
INSERT INTO `m_app_category` VALUES ('25', '2', '跑酷', 'parkour', '', '', '', '0', '2', '/templates/cates/parkour.png');
INSERT INTO `m_app_category` VALUES ('26', '2', '格斗', 'wrestle', '', '', '', '0', '2', '/templates/cates/wrestle.png');
INSERT INTO `m_app_category` VALUES ('27', '2', '竞技游戏', 'sportsgame', '', '', '', '0', '2', '/templates/cates/sportsgame.png');
INSERT INTO `m_app_category` VALUES ('28', '2', '模拟辅助', 'analog', '', '', '', '0', '2', '/templates/cates/analog.png');
INSERT INTO `m_app_category` VALUES ('29', '2', '体育竞速', 'racing', '', '', '', '0', '2', '/templates/cates/racing.png');
INSERT INTO `m_app_category` VALUES ('30', '2', '其它', 'other', '', '', '', '0', '2', '/templates/cates/other.png');
INSERT INTO `m_app_category` VALUES ('31', '2', '动作', 'action', '', '', '', '0', '2', '/templates/cates/action.png');
INSERT INTO `m_app_category` VALUES ('32', '2', '塔防', 'tower', '', '', '', '0', '2', '/templates/cates/tower.png');
INSERT INTO `m_app_category` VALUES ('33', '2', '体育', 'physical', '', '', '', '0', '2', '/templates/cates/physical.png');
INSERT INTO `m_app_category` VALUES ('34', '2', '动作冒险', 'actions', '', '', '', '0', '2', '/templates/cates/actions.png');
INSERT INTO `m_app_category` VALUES ('35', '2', '儿童游戏', 'childgame', '', '', '', '0', '2', '/templates/cates/childgame.png');
INSERT INTO `m_app_category` VALUES ('37', '2', '养成', 'develop', '', '', '', '0', '2', '/templates/cates/develop.png');

-- ----------------------------
-- Table structure for m_app_comment
-- ----------------------------
DROP TABLE IF EXISTS `m_app_comment`;
CREATE TABLE `m_app_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `info_app_id` int(11) NOT NULL COMMENT '应用id，资讯id',
  `comment_content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `comment_date` int(11) NOT NULL COMMENT '发布时间',
  `comment_user` int(11) NOT NULL COMMENT '用户id',
  `comment_uname` varchar(500) NOT NULL DEFAULT '' COMMENT '昵称',
  `comment_ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `comment_parent` int(11) unsigned NOT NULL COMMENT '上级id',
  `comment_check` tinyint(4) unsigned NOT NULL COMMENT '是否审核',
  `comment_good` int(11) unsigned NOT NULL COMMENT '赞',
  `comment_bad` int(11) unsigned NOT NULL COMMENT '踩',
  PRIMARY KEY (`comment_id`),
  KEY `id_type` (`info_app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of m_app_comment
-- ----------------------------

-- ----------------------------
-- Table structure for m_app_copy
-- ----------------------------
DROP TABLE IF EXISTS `m_app_copy`;
CREATE TABLE `m_app_copy` (
  `app_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `app_title` varchar(500) NOT NULL DEFAULT '' COMMENT '应用名称',
  `app_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `app_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间（最新）',
  `app_type` varchar(20) NOT NULL DEFAULT '' COMMENT '软件类型：免费/收费',
  `app_logo` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `app_desc` text COMMENT '应用详情',
  `app_company` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商',
  `app_company_url` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商网址',
  `app_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '入库时间',
  `app_grade` float NOT NULL DEFAULT '0' COMMENT '用户评分',
  `app_recomment` float NOT NULL DEFAULT '0' COMMENT '系统评分',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `app_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `app_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `app_down` int(11) NOT NULL DEFAULT '0' COMMENT '下载量',
  `app_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `data_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心应用ID',
  `charge_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '独立计费包ID',
  `app_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `app_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  PRIMARY KEY (`app_id`),
  KEY `cate_update_time` (`last_cate_id`,`app_update_time`),
  KEY `cate_order` (`last_cate_id`,`app_order`),
  KEY `cate_visitor` (`last_cate_id`,`app_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `cate_down` (`last_cate_id`,`app_down`),
  KEY `app_update_time` (`app_update_time`),
  KEY `app_order` (`app_order`),
  KEY `app_down` (`app_down`)
) ENGINE=MyISAM AUTO_INCREMENT=429 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of m_app_copy
-- ----------------------------
INSERT INTO `m_app_copy` VALUES ('1', '2', 'bitepai', 'bitepai', '1522652471', '1', '/uploads/images/1.bitepai.jpg', '支持币种BTC BCH LTC DOGE ETH OMG PAY EOS BAT SNT 1ST ZEC ETC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'bitepai', '1522652471', '3', '4', '1', '0', '6942', '731', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('2', '2', 'AToken', 'AToken', '1522652471', '1', '/uploads/images/2.AToken.jpg', '支持币种SNT BTC LTC ETH ETC BCH OMG 1ST ANT BAT BNT CVC EOS GNT DGD USDT PAY QTUM REP</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'AToken', '1522652471', '3', '5', '1', '0', '8798', '705', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('3', '2', 'kushen', 'kushen', '1522652471', '1', '/uploads/images/3.kushen.jpg', '支持币种BTC LTC ETC ETH DASH DOGE ICS BCH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'kushen', '1522652471', '3', '2', '1', '0', '2069', '861', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('4', '2', 'ImToken', 'ImToken', '1522652471', '1', '/uploads/images/4.ImToken.jpg', '支持币种ETH DGD REP GNT 1ST ANT OMG SNT EOS PAY BTM CREDO LRC MANA CDT BAT</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'ImToken', '1522652471', '3', '3', '1', '0', '1173', '965', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('5', '2', 'Ethereum Wallet', 'Ethereum Wallet', '1522652471', '1', '/uploads/images/5.Ethereum Wallet.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Ethereum Wallet', '1522652471', '3', '1', '1', '0', '2175', '698', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('6', '2', 'Doge Freewallet', 'Doge Freewallet', '1522652471', '1', '/uploads/images/6.Doge Freewallet.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Doge Freewallet', '1522652471', '5', '5', '1', '0', '2276', '794', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('7', '2', 'Bitinka', 'Bitinka', '1522652471', '1', '/uploads/images/7.Bitinka.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitinka', '1522652471', '5', '2', '1', '0', '3796', '517', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('8', '2', 'MultiDoge Wallet', 'MultiDoge Wallet', '1522652471', '1', '/uploads/images/8.MultiDoge Wallet.jpg', '支持币种DOGE</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'MultiDoge Wallet', '1522652471', '4', '5', '1', '0', '2720', '415', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('9', '2', 'Etherwall', 'Etherwall', '1522652471', '1', '/uploads/images/9.Etherwall.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Etherwall', '1522652471', '2', '2', '1', '0', '4234', '375', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('10', '2', 'ZCash Cockpit UI Wallet', 'ZCash Cockpit UI Wallet', '1522652471', '1', '/uploads/images/10.ZCash Cockpit UI Wallet.jpg', '支持币种ZEC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ZCash Cockpit UI Wallet', '1522652471', '5', '2', '1', '0', '5989', '558', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('11', '2', 'Monreo', 'Monreo', '1522652471', '1', '/uploads/images/11.Monreo.jpg', '支持币种XMR</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Monreo', '1522652471', '4', '4', '1', '0', '6118', '953', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('12', '2', 'Digibyte Core', 'Digibyte Core', '1522652471', '1', '/uploads/images/12.Digibyte Core.jpg', '支持币种DGB</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Digibyte Core', '1522652471', '1', '1', '1', '0', '1872', '573', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('13', '2', 'VirtaCoinWallet', 'VirtaCoinWallet', '1522652471', '1', '/uploads/images/13.VirtaCoinWallet.jpg', '支持币种XVP</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'VirtaCoinWallet', '1522652471', '2', '3', '1', '0', '2108', '174', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('14', '2', 'Dash Freewallet', 'Dash Freewallet', '1522652471', '1', '/uploads/images/14.Dash Freewallet.jpg', '支持币种DASH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Dash Freewallet', '1522652471', '2', '2', '1', '0', '8474', '485', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('15', '2', 'Vcash Client', 'Vcash Client', '1522652471', '1', '/uploads/images/15.Vcash Client.jpg', '支持币种XVC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Vcash Client', '1522652471', '4', '2', '1', '0', '3904', '401', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('16', '2', 'nSIGNA Wallet', 'nSIGNA Wallet', '1522652471', '1', '/uploads/images/16.nSIGNA Wallet.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'nSIGNA Wallet', '1522652471', '2', '5', '1', '0', '9697', '460', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('17', '2', 'Coinaputlt Wallet', 'Coinaputlt Wallet', '1522652471', '1', '/uploads/images/17.Coinaputlt Wallet.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Coinaputlt Wallet', '1522652471', '4', '4', '1', '0', '9622', '541', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('18', '2', 'Tokenly Pockets', 'Tokenly Pockets', '1522652471', '1', '/uploads/images/18.Tokenly Pockets.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Tokenly Pockets', '1522652471', '1', '3', '1', '0', '6874', '583', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('19', '2', 'Stellar Desktop Client', 'Stellar Desktop Client', '1522652471', '1', '/uploads/images/19.Stellar Desktop Client.jpg', '支持币种STR</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Stellar Desktop Client', '1522652471', '3', '4', '1', '0', '6409', '960', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('20', '2', 'Bitcoin Cash Freewallet', 'Bitcoin Cash Freewallet', '1522652471', '1', '/uploads/images/20.Bitcoin Cash Freewallet.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitcoin Cash Freewallet', '1522652471', '3', '5', '1', '0', '7059', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('21', '2', 'Lisk Nano', 'Lisk Nano', '1522652471', '1', '/uploads/images/21.Lisk Nano.jpg', '支持币种LSK</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Lisk Nano', '1522652471', '4', '4', '1', '0', '5905', '988', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('22', '2', 'Lisk Freewallet', 'Lisk Freewallet', '1522652471', '1', '/uploads/images/22.Lisk Freewallet.jpg', '支持币种LSK</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Lisk Freewallet', '1522652471', '2', '4', '1', '0', '3545', '862', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('23', '2', 'Carbon Wallet', 'Carbon Wallet', '1522652471', '1', '/uploads/images/23.Carbon Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Carbon Wallet', '1522652471', '3', '5', '1', '0', '3432', '545', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('24', '2', 'Electrum Stratis Wallet', 'Electrum Stratis Wallet', '1522652471', '1', '/uploads/images/24.Electrum Stratis Wallet.jpg', '支持币种STRAT</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum Stratis Wallet', '1522652471', '2', '4', '1', '0', '8257', '469', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('25', '2', 'ArcBit', 'ArcBit', '1522652471', '1', '/uploads/images/25.ArcBit.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ArcBit', '1522652471', '3', '1', '1', '0', '1679', '568', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('26', '2', 'vSlice Web Wallet', 'vSlice Web Wallet', '1522652471', '1', '/uploads/images/26.vSlice Web Wallet.jpg', '支持币种VSL ETH ETC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'vSlice Web Wallet', '1522652471', '5', '1', '1', '0', '6168', '756', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('27', '2', 'IndieSquare', 'IndieSquare', '1522652471', '1', '/uploads/images/27.IndieSquare.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'IndieSquare', '1522652471', '2', '4', '1', '0', '9041', '230', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('28', '2', 'NXT Freewallet', 'NXT Freewallet', '1522652471', '1', '/uploads/images/28.NXT Freewallet.jpg', '支持币种NXT ARDR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'NXT Freewallet', '1522652471', '2', '1', '1', '0', '5994', '890', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('29', '2', 'NXT Client', 'NXT Client', '1522652471', '1', '/uploads/images/29.NXT Client.jpg', '支持币种NXT ARDR</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'NXT Client', '1522652471', '2', '2', '1', '0', '6061', '963', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('30', '2', 'Eidoo', 'Eidoo', '1522652471', '1', '/uploads/images/30.Eidoo.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Eidoo', '1522652471', '1', '2', '1', '0', '2555', '264', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('31', '2', 'Ardor Freewallet', 'Ardor Freewallet', '1522652471', '1', '/uploads/images/31.Ardor Freewallet.jpg', '支持币种ARDR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Ardor Freewallet', '1522652471', '2', '2', '1', '0', '4819', '342', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('32', '2', 'ClassicEtherWallet CX', 'ClassicEtherWallet CX', '1522652471', '1', '/uploads/images/32.ClassicEtherWallet CX.jpg', '支持币种ETC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'ClassicEtherWallet CX', '1522652471', '2', '4', '1', '0', '6728', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('33', '2', 'Xapo Wallet', 'Xapo Wallet', '1522652471', '1', '/uploads/images/33.Xapo Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Xapo Wallet', '1522652471', '3', '2', '1', '0', '9160', '640', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('34', '2', 'MyMonero Wallet', 'MyMonero Wallet', '1522652471', '1', '/uploads/images/34.MyMonero Wallet.jpg', '支持币种XMR</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'MyMonero Wallet', '1522652471', '5', '3', '1', '0', '3942', '300', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('35', '2', 'Zcash Freewallet', 'Zcash Freewallet', '1522652471', '1', '/uploads/images/35.Zcash Freewallet.jpg', '支持币种ZEC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Zcash Freewallet', '1522652471', '2', '1', '1', '0', '2396', '258', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('36', '2', 'Gatehub', 'Gatehub', '1522652471', '1', '/uploads/images/36.Gatehub.jpg', '支持币种BTC XRP ETH REP ETC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Gatehub', '1522652471', '5', '5', '1', '0', '7046', '586', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('37', '2', 'ZebPay', 'ZebPay', '1522652471', '1', '/uploads/images/37.ZebPay.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'ZebPay', '1522652471', '4', '4', '1', '0', '7414', '905', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('38', '2', 'Circle Bitcoin Wallet', 'Circle Bitcoin Wallet', '1522652471', '1', '/uploads/images/38.Circle Bitcoin Wallet.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Circle Bitcoin Wallet', '1522652471', '2', '1', '1', '0', '6288', '983', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('39', '2', 'Cryptonator', 'Cryptonator', '1522652471', '1', '/uploads/images/39.Cryptonator.jpg', '支持币种LTC BTC BLK DOGE XPY PPC RDD VTC DASH XPM EMC ZEC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Cryptonator', '1522652471', '3', '4', '1', '0', '4796', '763', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('40', '2', 'STREEM Wallet', 'STREEM Wallet', '1522652471', '1', '/uploads/images/40.STREEM Wallet.jpg', '支持币种STEEM</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'STREEM Wallet', '1522652471', '5', '3', '1', '0', '9302', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('41', '2', 'Coinbase Wallet', 'Coinbase Wallet', '1522652471', '1', '/uploads/images/41.Coinbase Wallet.jpg', '支持币种BTC ETH</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Coinbase Wallet', '1522652471', '3', '1', '1', '0', '9318', '178', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('42', '2', 'Agama', 'Agama', '1522652471', '1', '/uploads/images/42.Agama.jpg', '支持币种BTC KMD ZEC ANC BTCD BTM DGB DOGE FRK LTC SYS UNO ZET GMC MZC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'Agama', '1522652471', '1', '5', '1', '0', '7356', '211', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('43', '2', 'Monero Freewallet', 'Monero Freewallet', '1522652471', '1', '/uploads/images/43.Monero Freewallet.jpg', '支持币种XMR</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Monero Freewallet', '1522652471', '2', '1', '1', '0', '1609', '511', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('44', '2', 'CoinVault', 'CoinVault', '1522652471', '1', '/uploads/images/44.CoinVault.jpg', '支持币种BTC LTC DASH DOGE GRC NMC PPC QRK RDD TRC XPM STRAT ARG DLC GB SH MTR ZYD</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'CoinVault', '1522652471', '1', '3', '1', '0', '2169', '132', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('45', '2', 'GreenAddress', 'GreenAddress', '1522652471', '1', '/uploads/images/45.GreenAddress.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'GreenAddress', '1522652471', '4', '2', '1', '0', '9293', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('46', '2', 'Electrum Cash Wallet', 'Electrum Cash Wallet', '1522652471', '1', '/uploads/images/46.Electrum Cash Wallet.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum Cash Wallet', '1522652471', '4', '2', '1', '0', '1531', '318', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('47', '2', 'NEM Wallet', 'NEM Wallet', '1522652471', '1', '/uploads/images/47.NEM Wallet.jpg', '支持币种XEM</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'NEM Wallet', '1522652471', '4', '2', '1', '0', '2645', '560', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('48', '2', 'OmniWallet', 'OmniWallet', '1522652471', '1', '/uploads/images/48.OmniWallet.jpg', '支持币种BTC OMNI</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'OmniWallet', '1522652471', '3', '2', '1', '0', '5665', '518', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('49', '2', 'Monero Core Clientjpg', 'Monero Core Clientjpg', '1522652471', '1', '/uploads/images/49.Monero Core Clientjpg.jpg', '支持币种XMR</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Monero Core Clientjpg', '1522652471', '3', '1', '1', '0', '5171', '404', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('50', '2', 'Unocoin', 'Unocoin', '1522652471', '1', '/uploads/images/50.Unocoin.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Unocoin', '1522652471', '1', '1', '1', '0', '4162', '746', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('51', '2', 'Bitcoin Freewallet', 'Bitcoin Freewallet', '1522652471', '1', '/uploads/images/51.Bitcoin Freewallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitcoin Freewallet', '1522652471', '1', '2', '1', '0', '9076', '580', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('52', '2', 'BitConnect Client', 'BitConnect Client', '1522652471', '1', '/uploads/images/52.BitConnect Client.jpg', '支持币种BCH</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BitConnect Client', '1522652471', '1', '4', '1', '0', '7593', '367', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('53', '2', 'CoinCorner', 'CoinCorner', '1522652471', '1', '/uploads/images/53.CoinCorner.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'CoinCorner', '1522652471', '1', '4', '1', '0', '1713', '914', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('54', '2', 'CoinBank', 'CoinBank', '1522652471', '1', '/uploads/images/54.CoinBank.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinBank', '1522652471', '2', '1', '1', '0', '3066', '284', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('55', '2', 'Parity', 'Parity', '1522652471', '1', '/uploads/images/55.Parity.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Parity', '1522652471', '5', '3', '1', '0', '2932', '456', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('56', '2', 'Bitcoin Core Client', 'Bitcoin Core Client', '1522652471', '1', '/uploads/images/56.Bitcoin Core Client.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Bitcoin Core Client', '1522652471', '4', '2', '1', '0', '8599', '130', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('57', '2', 'iPayYou', 'iPayYou', '1522652471', '1', '/uploads/images/57.iPayYou.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'iPayYou', '1522652471', '2', '2', '1', '0', '4811', '790', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('58', '2', 'Ethereum Freewallet', 'Ethereum Freewallet', '1522652471', '1', '/uploads/images/58.Ethereum Freewallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Ethereum Freewallet', '1522652471', '5', '3', '1', '0', '2185', '732', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('59', '2', 'BitPanda', 'BitPanda', '1522652471', '1', '/uploads/images/59.BitPanda.jpg', '支持币种BTC ETH NXT</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'BitPanda', '1522652471', '1', '4', '1', '0', '8166', '981', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('60', '2', 'SpectroCoin', 'SpectroCoin', '1522652471', '1', '/uploads/images/60.SpectroCoin.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:一般', ' ', ' ', 'SpectroCoin', '1522652471', '2', '5', '1', '0', '7828', '172', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('61', '2', 'Samourai Wallet', 'Samourai Wallet', '1522652471', '1', '/uploads/images/61.Samourai Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Samourai Wallet', '1522652471', '4', '1', '1', '0', '4933', '703', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('62', '2', 'Schildbach BTC Wallet', 'Schildbach BTC Wallet', '1522652471', '1', '/uploads/images/62.Schildbach BTC Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Schildbach BTC Wallet', '1522652471', '5', '4', '1', '0', '2046', '502', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('63', '2', 'LiteVault', 'LiteVault', '1522652471', '1', '/uploads/images/63.LiteVault.jpg', '支持币种LTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'LiteVault', '1522652471', '2', '4', '1', '0', '3605', '506', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('64', '2', 'Counterwallet', 'Counterwallet', '1522652471', '1', '/uploads/images/64.Counterwallet.jpg', '支持币种BTC XCP BCY FLDC</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Counterwallet', '1522652471', '4', '1', '1', '0', '1410', '160', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('65', '2', 'BCMY Wallet', 'BCMY Wallet', '1522652471', '1', '/uploads/images/65.BCMY Wallet.jpg', '支持币种BTC ETH ZEC DNC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BCMY Wallet', '1522652471', '4', '2', '1', '0', '4932', '325', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('66', '2', 'CoolWallet', 'CoolWallet', '1522652471', '1', '/uploads/images/66.CoolWallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'CoolWallet', '1522652471', '4', '1', '1', '0', '3267', '654', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('67', '2', 'Bitwala', 'Bitwala', '1522652471', '1', '/uploads/images/67.Bitwala.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitwala', '1522652471', '1', '3', '1', '0', '5130', '829', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('68', '2', 'Bither Wallet', 'Bither Wallet', '1522652471', '1', '/uploads/images/68.Bither Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bither Wallet', '1522652471', '3', '1', '1', '0', '9825', '480', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('69', '2', 'Light Wallet', 'Light Wallet', '1522652471', '1', '/uploads/images/69.Light Wallet.jpg', '支持币种ETH SNGLS</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Light Wallet', '1522652471', '1', '2', '1', '0', '3500', '117', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('70', '2', 'Mobi', 'Mobi', '1522652471', '1', '/uploads/images/70.Mobi.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Mobi', '1522652471', '2', '5', '1', '0', '5743', '735', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('71', '2', 'Doge Android Wallet', 'Doge Android Wallet', '1522652471', '1', '/uploads/images/71.Doge Android Wallet.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Doge Android Wallet', '1522652471', '5', '5', '1', '0', '3918', '179', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('72', '2', 'FantomCoin Freewallet', 'FantomCoin Freewallet', '1522652471', '1', '/uploads/images/72.FantomCoin Freewallet.jpg', '支持币种FCN</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'FantomCoin Freewallet', '1522652471', '5', '1', '1', '0', '6547', '968', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('73', '2', 'WageCan Wallet', 'WageCan Wallet', '1522652471', '1', '/uploads/images/73.WageCan Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'WageCan Wallet', '1522652471', '2', '2', '1', '0', '9111', '240', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('74', '2', 'Litecoin Core Client', 'Litecoin Core Client', '1522652471', '1', '/uploads/images/74.Litecoin Core Client.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Litecoin Core Client', '1522652471', '2', '3', '1', '0', '8079', '264', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('75', '2', 'Dogecoin Core', 'Dogecoin Core', '1522652471', '1', '/uploads/images/75.Dogecoin Core.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Dogecoin Core', '1522652471', '3', '1', '1', '0', '1570', '463', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('76', '2', 'Bitlox Wallet', 'Bitlox Wallet', '1522652471', '1', '/uploads/images/76.Bitlox Wallet.jpg', '支持币种BTC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Bitlox Wallet', '1522652471', '1', '4', '1', '0', '4532', '623', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('77', '2', 'Ledger HW1', 'Ledger HW1', '1522652471', '1', '/uploads/images/77.Ledger HW1.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Ledger HW1', '1522652471', '2', '2', '1', '0', '8224', '340', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('78', '2', 'ZCash Wallet', 'ZCash Wallet', '1522652471', '1', '/uploads/images/78.ZCash Wallet.jpg', '支持币种ZEC</br>匿名性:高</br>操作难易程度:一般', ' ', ' ', 'ZCash Wallet', '1522652471', '4', '2', '1', '0', '7501', '755', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('79', '2', 'CoinSpace HD', 'CoinSpace HD', '1522652471', '1', '/uploads/images/79.CoinSpace HD.jpg', '支持币种BTC LTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinSpace HD', '1522652471', '2', '4', '1', '0', '3021', '408', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('80', '2', 'Electrum LTC Wallet', 'Electrum LTC Wallet', '1522652471', '1', '/uploads/images/80.Electrum LTC Wallet.jpg', '支持币种LTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Electrum LTC Wallet', '1522652471', '5', '1', '1', '0', '1014', '981', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('81', '2', 'Bonpay', 'Bonpay', '1522652471', '1', '/uploads/images/81.Bonpay.jpg', '支持币种BTC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Bonpay', '1522652471', '4', '2', '1', '0', '9065', '895', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('82', '2', 'MetaMask', 'MetaMask', '1522652471', '1', '/uploads/images/82.MetaMask.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'MetaMask', '1522652471', '2', '5', '1', '0', '4496', '891', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('83', '2', 'OpenLedger', 'OpenLedger', '1522652471', '1', '/uploads/images/83.OpenLedger.jpg', '支持币种BTS</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'OpenLedger', '1522652471', '1', '3', '1', '0', '7718', '593', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('84', '2', 'Armory Wallet', 'Armory Wallet', '1522652471', '1', '/uploads/images/84.Armory Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'Armory Wallet', '1522652471', '5', '1', '1', '0', '8342', '533', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('85', '2', 'EtherLi Wallet', 'EtherLi Wallet', '1522652471', '1', '/uploads/images/85.EtherLi Wallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'EtherLi Wallet', '1522652471', '1', '5', '1', '0', '7147', '281', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('86', '2', 'BitAddress Paper Wallet', 'BitAddress Paper Wallet', '1522652471', '1', '/uploads/images/86.BitAddress Paper Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'BitAddress Paper Wallet', '1522652471', '2', '4', '1', '0', '5701', '956', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('87', '2', 'DogeChain', 'DogeChain', '1522652471', '1', '/uploads/images/87.DogeChain.jpg', '支持币种DOGE</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'DogeChain', '1522652471', '2', '3', '1', '0', '1220', '622', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('88', '2', 'Bitgo Wallet', 'Bitgo Wallet', '1522652471', '1', '/uploads/images/88.Bitgo Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Bitgo Wallet', '1522652471', '5', '5', '1', '0', '5507', '801', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('89', '2', 'Holy Transaction', 'Holy Transaction', '1522652471', '1', '/uploads/images/89.Holy Transaction.jpg', '支持币种BTC LTC DOGE PPC DASH ETH OMNI GRC</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Holy Transaction', '1522652471', '2', '3', '1', '0', '3094', '424', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('90', '2', 'Jaxx Wallet', 'Jaxx Wallet', '1522652471', '1', '/uploads/images/90.Jaxx Wallet.jpg', '支持币种BTC ETH ETC DASH LTC REP ZEC</br>匿名性:高</br>操作难易程度:困难', ' ', ' ', 'Jaxx Wallet', '1522652471', '3', '5', '1', '0', '1131', '496', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('91', '2', 'Bread Walletjpg', 'Bread Walletjpg', '1522652471', '1', '/uploads/images/91.Bread Walletjpg.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:一般', ' ', ' ', 'Bread Walletjpg', '1522652471', '3', '1', '1', '0', '4007', '348', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('92', '2', 'Waves Lite Client', 'Waves Lite Client', '1522652471', '1', '/uploads/images/92.Waves Lite Client.jpg', '支持币种WAVES</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'Waves Lite Client', '1522652471', '1', '4', '1', '0', '9565', '964', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('93', '2', 'CoinSpot', 'CoinSpot', '1522652471', '1', '/uploads/images/93.CoinSpot.jpg', '支持币种BTC LTC DOGE DASH LOT PPC WDC FTC MOON XPM QRK MAX</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'CoinSpot', '1522652471', '3', '1', '1', '0', '5930', '794', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('94', '2', 'XETH Ether Wallet', 'XETH Ether Wallet', '1522652471', '1', '/uploads/images/94.XETH Ether Wallet.jpg', '支持币种ETH</br>匿名性:高</br>操作难易程度:容易', ' ', ' ', 'XETH Ether Wallet', '1522652471', '1', '4', '1', '0', '3660', '532', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('95', '2', 'KeepKey Walletjpg', 'KeepKey Walletjpg', '1522652471', '1', '/uploads/images/95.KeepKey Walletjpg.jpg', '支持币种BTC LTC NMC DOGE DASH</br>匿名性:中</br>操作难易程度:困难', ' ', ' ', 'KeepKey Walletjpg', '1522652471', '1', '4', '1', '0', '9894', '189', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('96', '2', 'BTC Wallet', 'BTC Wallet', '1522652471', '1', '/uploads/images/96.BTC Wallet.jpg', '支持币种BTC BCH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'BTC Wallet', '1522652471', '5', '4', '1', '0', '1787', '464', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('97', '2', 'Copay Bitcoin Wallet', 'Copay Bitcoin Wallet', '1522652471', '1', '/uploads/images/97.Copay Bitcoin Wallet.jpg', '支持币种BTC</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Copay Bitcoin Wallet', '1522652471', '5', '3', '1', '0', '2517', '604', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('98', '2', 'Mist and Ethereum Wallet', 'Mist and Ethereum Wallet', '1522652471', '1', '/uploads/images/98.Mist and Ethereum Wallet.jpg', '支持币种ETH</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'Mist and Ethereum Wallet', '1522652471', '1', '1', '1', '0', '6195', '682', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('99', '2', 'UberPay Wallet', 'UberPay Wallet', '1522652471', '1', '/uploads/images/99.UberPay Wallet.jpg', '支持币种DASH BTC LTC USNBT PPC DOGE AC EFL CRBIT DOGED MZC DGB DGC CCN XMY UNO RDD FTC VTC MONA XMCC BTA GCR VIA CESC NEOS</br>匿名性:中</br>操作难易程度:容易', ' ', ' ', 'UberPay Wallet', '1522652471', '2', '1', '1', '0', '8483', '113', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('100', '2', 'Blockio Wallet', 'Blockio Wallet', '1522652471', '1', '/uploads/images/100.Blockio Wallet.jpg', '支持币种BTC LTC DOGE</br>匿名性:低</br>操作难易程度:容易', ' ', ' ', 'Blockio Wallet', '1522652471', '3', '2', '1', '0', '4071', '674', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('385', '12', '非小号', '非小号', '1522669327', '1', '/uploads/images/1.feixiaohao.png', '实时报价 · 自选行情 · 排行榜 · 全球交易所', ' ', ' ', '非小号', '1522669327', '5', '1', '1', '0', '5171', '342', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('386', '12', '币看比特币', '币看比特币', '1522669327', '1', '/uploads/images/2.BITKAN.png', '提供价格监控、新闻资讯、挖矿监控、股票监控、钱包等服务', ' ', ' ', '币看比特币', '1522669327', '3', '4', '1', '0', '3461', '453', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('387', '12', '可盈可乐', '可盈可乐', '1522669327', '1', '/uploads/images/3.CoinCola.png', '安全可信赖的香港场外交易平台', ' ', ' ', '可盈可乐', '1522669327', '2', '5', '1', '0', '8156', '243', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('388', '12', 'My Token', 'My Token', '1522669327', '1', '/uploads/images/4.My Token.png', '数字资产看行情专用', ' ', ' ', 'My Token', '1522669327', '4', '2', '1', '0', '1546', '517', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('389', '12', '蚂蚁矿池', '蚂蚁矿池', '1522669327', '1', '/uploads/images/5.ANTPOOL.png', '支持多币种挖矿，多子帐户管理，实时监控算力、随时撑握矿机运行情况', ' ', ' ', '蚂蚁矿池', '1522669327', '2', '4', '1', '0', '4547', '160', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('390', '12', '微比特矿池', '微比特矿池', '1522669327', '1', '/uploads/images/6.ViaBTC.png', '矿池、微合约、钱包一站式服务', ' ', ' ', '微比特矿池', '1522669327', '4', '2', '1', '0', '9717', '555', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('391', '12', '币探', '币探', '1522669327', '1', '/uploads/images/7.bitan.png', 'Global  Cryptocurrency，Price Tracking & Breaking News，Decentralize Your Mind', ' ', ' ', '币探', '1522669327', '2', '4', '1', '0', '5378', '686', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('392', '12', 'Token Club', 'Token Club', '1522669327', '1', '/uploads/images/8.TokenClub.png', 'Token Club', ' ', ' ', 'Token Club', '1522669327', '5', '5', '1', '0', '9238', '230', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('393', '12', '巴比特', '巴比特', '1522669327', '1', '/uploads/images/9.babite.png', '以价值投资为导向', ' ', ' ', '巴比特', '1522669327', '1', '3', '1', '0', '5677', '239', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('394', '12', 'BTC123', 'BTC123', '1522669327', '1', '/uploads/images/10.BCT123.png', '驱动创新·链接未来', ' ', ' ', 'BTC123', '1522669327', '1', '5', '1', '0', '5625', '988', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('395', '12', '比特币交易网', '比特币交易网', '1522669327', '1', '/uploads/images/11.btctrade.png', '安全可靠的交易平台', ' ', ' ', '比特币交易网', '1522669327', '2', '5', '1', '0', '5249', '387', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('396', '12', '库神', '库神', '1522669327', '1', '/uploads/images/12.kushen.png', '专业数字资产存储器', ' ', ' ', '库神', '1522669327', '3', '2', '1', '0', '6518', '734', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('397', '12', 'AICoin', 'AICoin', '1522669327', '1', '/uploads/images/13.ALCoin.png', '全球数字资产行情数据应用领跑者', ' ', ' ', 'AICoin', '1522669327', '1', '1', '1', '0', '9384', '533', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('398', '12', '金塔', '金塔', '1522669327', '1', '/uploads/images/14.quinter.png', '祝您掌握市场先机', ' ', ' ', '金塔', '1522669327', '5', '1', '1', '0', '3342', '391', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('399', '12', '币世界', '币世界', '1522669327', '1', '/uploads/images/15.bishijie.png', '快人一步，尽晓币圈事', ' ', ' ', '币世界', '1522669327', '2', '4', '1', '0', '4766', '175', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('400', '12', '链向财经', '链向财经', '1522669327', '1', '/uploads/images/16.lianxiang.png', '国内外最专业的区块链信息服务平台，为广大缺乏区块链理解的用户提供一个安全、诚信、可靠的学习渠道，低门槛的读懂区块链未来。', ' ', ' ', '链向财经', '1522669327', '5', '1', '1', '0', '7404', '550', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('401', '12', '要发车', '要发车', '1522669327', '1', '/uploads/images/17.yaofache.png', '区块链产业信息聚合平台', ' ', ' ', '要发车', '1522669327', '5', '5', '1', '0', '7251', '690', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('402', '12', 'POIM', 'POIM', '1522669327', '1', '/uploads/images/18.POIM.png', 'POIM为所有用户提供超级易于使用的数字货币钱包', ' ', ' ', 'POIM', '1522669327', '3', '2', '1', '0', '6644', '995', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('403', '12', 'HashToken', 'HashToken', '1522669327', '1', '/uploads/images/19.HashToken.png', '联合全球前20家交易平台，买卖更方便', ' ', ' ', 'HashToken', '1522669327', '4', '5', '1', '0', '2718', '117', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('404', '12', '挖链', '挖链', '1522669327', '1', '/uploads/images/20.walian.png', '挖链网，挖出区块链的价值', ' ', ' ', '挖链', '1522669327', '3', '5', '1', '0', '9267', '557', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('405', '12', '大比特', '大比特', '1522669327', '1', '/uploads/images/21.bigbit.png', '大比特是大比特虚拟数字行情及咨询手机端', ' ', ' ', '大比特', '1522669327', '3', '5', '1', '0', '5699', '957', '0', '0', '0', ' ', ' ');
INSERT INTO `m_app_copy` VALUES ('406', '12', '共享财经', '共享财经', '1522669327', '1', '/uploads/images/22.gongxiangcaijing.png', '见证区块链新生态', ' ', ' ', '共享财经', '1522669327', '2', '3', '1', '0', '3044', '524', '0', '0', '0', ' ', ' ');

-- ----------------------------
-- Table structure for m_counter
-- ----------------------------
DROP TABLE IF EXISTS `m_counter`;
CREATE TABLE `m_counter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` int(10) unsigned NOT NULL,
  `app_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pcview_count` int(10) unsigned NOT NULL DEFAULT '0',
  `mobileview_count` int(10) unsigned NOT NULL DEFAULT '0',
  `pcdown_count` int(10) unsigned NOT NULL DEFAULT '0',
  `mobiledown_count` int(10) unsigned NOT NULL DEFAULT '0',
  `install_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_data` (`date`,`app_id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COMMENT='统计表';

-- ----------------------------
-- Records of m_counter
-- ----------------------------
INSERT INTO `m_counter` VALUES ('1', '20180320', '3', '3', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('2', '20180320', '5', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('3', '20180320', '4', '4', '0', '3', '0', '0');
INSERT INTO `m_counter` VALUES ('4', '20180320', '7', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('5', '20180320', '2', '2', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('6', '20180320', '11', '6', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('7', '20180320', '1', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('8', '20180320', '12', '1', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('9', '20180320', '13', '15', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('10', '20180321', '13', '20', '0', '8', '79', '0');
INSERT INTO `m_counter` VALUES ('11', '20180321', '9', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('12', '20180321', '7', '4', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('13', '20180321', '2', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('14', '20180321', '1', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('15', '20180321', '11', '0', '0', '0', '1', '2');
INSERT INTO `m_counter` VALUES ('16', '20180321', '14', '2', '0', '4', '0', '0');
INSERT INTO `m_counter` VALUES ('17', '20180322', '1', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('18', '20180322', '14', '5', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('19', '20180322', '12', '10', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('20', '20180322', '7', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('21', '20180322', '11', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('22', '20180322', '5', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('23', '20180323', '4', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('24', '20180323', '13', '2', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('25', '20180323', '14', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('26', '20180323', '8', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('27', '20180323', '3', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('28', '20180323', '2', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('29', '20180323', '11', '25', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('30', '20180323', '9', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('31', '20180324', '4', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('32', '20180324', '11', '0', '0', '0', '3', '0');
INSERT INTO `m_counter` VALUES ('33', '20180324', '7', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('34', '20180324', '14', '3', '0', '0', '1', '0');
INSERT INTO `m_counter` VALUES ('35', '20180324', '5', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('36', '20180326', '14', '6', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('37', '20180326', '5', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('38', '20180326', '4', '10', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('39', '20180327', '9', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('40', '20180327', '10', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('41', '20180327', '8', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('42', '20180327', '16', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('43', '20180327', '2', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('44', '20180328', '4', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('45', '20180328', '3', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('46', '20180328', '16', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('47', '20180329', '14', '13', '0', '0', '20', '0');
INSERT INTO `m_counter` VALUES ('48', '20180329', '3', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('49', '20180329', '16', '89', '0', '6', '0', '0');
INSERT INTO `m_counter` VALUES ('50', '20180329', '13', '6', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('51', '20180329', '8', '10', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('52', '20180329', '2', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('53', '20180329', '4', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('54', '20180329', '1', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('55', '20180329', '12', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('56', '20180329', '11', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('57', '20180329', '9', '4', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('58', '20180329', '10', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('59', '20180329', '5', '3', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('60', '20180329', '6', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('61', '20180330', '2', '4', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('62', '20180330', '8', '8', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('63', '20180330', '16', '3', '0', '0', '18', '0');
INSERT INTO `m_counter` VALUES ('64', '20180330', '14', '6', '0', '0', '17', '8');
INSERT INTO `m_counter` VALUES ('65', '20180330', '13', '0', '0', '0', '4', '0');
INSERT INTO `m_counter` VALUES ('66', '20180330', '11', '0', '0', '0', '1', '0');
INSERT INTO `m_counter` VALUES ('67', '20180330', '3', '0', '0', '0', '1', '0');
INSERT INTO `m_counter` VALUES ('68', '20180330', '4', '4', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('69', '20180330', '1', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('70', '20180331', '16', '0', '0', '0', '10', '0');
INSERT INTO `m_counter` VALUES ('71', '20180402', '93', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('72', '20180402', '17', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('73', '20180402', '116', '4', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('74', '20180402', '103', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('75', '20180402', '128', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('76', '20180402', '100', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('77', '20180402', '8', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('78', '20180408', '533', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('79', '20180408', '552', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('80', '20180408', '561', '1', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('81', '20180408', '564', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('82', '20180408', '443', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('83', '20180408', '579', '3', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('84', '20180408', '566', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('85', '20180408', '567', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('86', '20180408', '580', '3', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('87', '20180408', '395', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('88', '20180408', '397', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('89', '20180408', '506', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('90', '20180408', '454', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('91', '20180408', '452', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('92', '20180416', '1', '15', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('93', '20180416', '580', '34', '0', '2', '0', '0');
INSERT INTO `m_counter` VALUES ('94', '20180416', '570', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('95', '20180416', '2', '3', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('96', '20180416', '3', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('97', '20180416', '8', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('98', '20180416', '405', '9', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('99', '20180416', '402', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('100', '20180416', '406', '2', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('101', '20180416', '100', '3', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('102', '20180416', '571', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('103', '20180416', '577', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('104', '20180416', '569', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('105', '20180416', '576', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('106', '20180416', '491', '2', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('107', '20180416', '87', '1', '0', '1', '0', '0');
INSERT INTO `m_counter` VALUES ('108', '20180416', '579', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('109', '20180416', '482', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('110', '20180416', '398', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('111', '20180416', '35', '1', '0', '0', '0', '0');
INSERT INTO `m_counter` VALUES ('112', '20180416', '507', '7', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for m_flink
-- ----------------------------
DROP TABLE IF EXISTS `m_flink`;
CREATE TABLE `m_flink` (
  `flink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情ID',
  `flink_name` varchar(100) NOT NULL DEFAULT '' COMMENT '链接文字',
  `flink_img` varchar(500) NOT NULL DEFAULT '' COMMENT '链接图片',
  `flink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '链接地址',
  `flink_type` tinyint(3) unsigned DEFAULT NULL COMMENT '1=首页，2全站',
  `flink_order` int(11) DEFAULT '0' COMMENT '排序',
  `flink_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `uid` int(10) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`flink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接表';

-- ----------------------------
-- Records of m_flink
-- ----------------------------

-- ----------------------------
-- Table structure for m_gather
-- ----------------------------
DROP TABLE IF EXISTS `m_gather`;
CREATE TABLE `m_gather` (
  `gather_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gather_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '采集名称',
  `gather_site` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '网站地址',
  `cate_id` int(10) unsigned NOT NULL COMMENT '采集分类',
  `gather_charset` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '页面编码',
  `gather_is_local` tinyint(3) unsigned NOT NULL COMMENT '是否本地化图片',
  `gather_index_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表首页地址',
  `gather_list_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表页地址',
  `gather_page_start` int(10) unsigned NOT NULL COMMENT '列表开始页',
  `gather_page_end` int(10) unsigned NOT NULL COMMENT '列表结束页',
  `gather_list_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文章列表标签',
  `gather_list_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表链接标签',
  `gather_title_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文章标题标签',
  `gather_content_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '内容标题标签',
  `gather_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`gather_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='采集信息表';

-- ----------------------------
-- Records of m_gather
-- ----------------------------
INSERT INTO `m_gather` VALUES ('1', '新作前瞻', 'http://wy.92wy.com', '2', 'UTF-8', '1', '', 'http://wy.92wy.com/news/30/list_{page}.html', '1', '1', '.list2', 'li a', 'h2,h3', '.info_text_con,.articlecontent', '1440760845', '1');
INSERT INTO `m_gather` VALUES ('2', '手机网游攻略', 'http://sj.xiaopi.com', '3', 'UTF-8', '1', '', 'http://sj.xiaopi.com/news/gonglue_{page}.html', '2', '3', '.wzlb_list', '.wzlb_list_img a', '.top_title', '.article_main', '1440926227', '1');
INSERT INTO `m_gather` VALUES ('3', '安卓资讯', 'http://android.d.cn', '4', 'UTF-8', '1', '', 'http://android.d.cn/news/0/-1/{page}/', '2', '3', '.info-list', '.first  a', '.article h1', '#content', '1442307687', '1');

-- ----------------------------
-- Table structure for m_history
-- ----------------------------
DROP TABLE IF EXISTS `m_history`;
CREATE TABLE `m_history` (
  `history_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'app下载id',
  `app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用ID',
  `history_version` varchar(500) NOT NULL DEFAULT '' COMMENT '版本号',
  `history_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `history_size` varchar(500) NOT NULL DEFAULT '' COMMENT '程序大小',
  `history_system` varchar(500) NOT NULL DEFAULT '' COMMENT '系统要求',
  `data_history_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心下载ID',
  `history_type` int(11) NOT NULL DEFAULT '0' COMMENT '应用类型 1 android，2 苹果',
  `history_minSdkVersion` int(10) NOT NULL DEFAULT '0' COMMENT '要求的android的最低版本',
  `history_package` varchar(64) NOT NULL DEFAULT '' COMMENT 'android的包名',
  `history_VersionCode` int(10) NOT NULL DEFAULT '0' COMMENT '包的开发版本',
  `history_permission` text NOT NULL COMMENT 'permission',
  `history_file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文件路径',
  PRIMARY KEY (`history_id`),
  KEY `app_id` (`app_id`),
  KEY `appcms_history_id` (`data_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2165 DEFAULT CHARSET=utf8 COMMENT='应用历史版本表';

-- ----------------------------
-- Records of m_history
-- ----------------------------
INSERT INTO `m_history` VALUES ('1220', '1', '1', '1522652471', '81', '', '0', '1', '0', '', '0', '', 'http://bitpie.com/');
INSERT INTO `m_history` VALUES ('1221', '1', '1', '1522652471', '164', '', '0', '2', '0', '', '0', '', 'http://bitpie.com/');
INSERT INTO `m_history` VALUES ('1222', '2', '1', '1522652471', '151', '', '0', '1', '0', '', '0', '', 'https://www.atoken.com/');
INSERT INTO `m_history` VALUES ('1223', '2', '1', '1522652471', '148', '', '0', '2', '0', '', '0', '', 'https://www.atoken.com/');
INSERT INTO `m_history` VALUES ('1224', '3', '1', '1522652471', '152', '', '0', '1', '0', '', '0', '', 'https://pc.coldlar.com/');
INSERT INTO `m_history` VALUES ('1225', '3', '1', '1522652471', '130', '', '0', '2', '0', '', '0', '', 'https://pc.coldlar.com/');
INSERT INTO `m_history` VALUES ('1226', '4', '1', '1522652471', '187', '', '0', '1', '0', '', '0', '', 'https://token.im/');
INSERT INTO `m_history` VALUES ('1227', '4', '1', '1522652471', '49', '', '0', '2', '0', '', '0', '', 'https://token.im/');
INSERT INTO `m_history` VALUES ('1228', '5', '1', '1522652471', '181', '', '0', '1', '0', '', '0', '', 'https://ethereumwallet.com/');
INSERT INTO `m_history` VALUES ('1229', '5', '1', '1522652471', '195', '', '0', '2', '0', '', '0', '', 'https://ethereumwallet.com/');
INSERT INTO `m_history` VALUES ('1230', '6', '1', '1522652471', '31', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/doge');
INSERT INTO `m_history` VALUES ('1231', '6', '1', '1522652471', '102', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/doge');
INSERT INTO `m_history` VALUES ('1232', '7', '1', '1522652471', '41', '', '0', '1', '0', '', '0', '', 'https://bitinka.pe/pe/bitinka/home');
INSERT INTO `m_history` VALUES ('1233', '7', '1', '1522652471', '69', '', '0', '2', '0', '', '0', '', 'https://bitinka.pe/pe/bitinka/home');
INSERT INTO `m_history` VALUES ('1234', '8', '1', '1522652471', '120', '', '0', '1', '0', '', '0', '', 'http://multidoge.org/');
INSERT INTO `m_history` VALUES ('1235', '8', '1', '1522652471', '166', '', '0', '2', '0', '', '0', '', 'http://multidoge.org/');
INSERT INTO `m_history` VALUES ('1236', '9', '1', '1522652471', '194', '', '0', '1', '0', '', '0', '', 'https://www.etherwall.com/');
INSERT INTO `m_history` VALUES ('1237', '9', '1', '1522652471', '56', '', '0', '2', '0', '', '0', '', 'https://www.etherwall.com/');
INSERT INTO `m_history` VALUES ('1238', '10', '1', '1522652471', '120', '', '0', '1', '0', '', '0', '', 'https://github.com/hellcatz/zcash-cli-cockpit');
INSERT INTO `m_history` VALUES ('1239', '10', '1', '1522652471', '29', '', '0', '2', '0', '', '0', '', 'https://github.com/hellcatz/zcash-cli-cockpit');
INSERT INTO `m_history` VALUES ('1240', '11', '1', '1522652471', '106', '', '0', '1', '0', '', '0', '', 'https://getmonero.org/downloads/');
INSERT INTO `m_history` VALUES ('1241', '11', '1', '1522652471', '81', '', '0', '2', '0', '', '0', '', 'https://getmonero.org/downloads/');
INSERT INTO `m_history` VALUES ('1242', '12', '1', '1522652471', '20', '', '0', '1', '0', '', '0', '', 'https://www.digibyte.co/digibyte-downloads');
INSERT INTO `m_history` VALUES ('1243', '12', '1', '1522652471', '81', '', '0', '2', '0', '', '0', '', 'https://www.digibyte.co/digibyte-downloads');
INSERT INTO `m_history` VALUES ('1244', '13', '1', '1522652471', '13', '', '0', '1', '0', '', '0', '', 'https://virtacoinwallet.eu/');
INSERT INTO `m_history` VALUES ('1245', '13', '1', '1522652471', '51', '', '0', '2', '0', '', '0', '', 'https://virtacoinwallet.eu/');
INSERT INTO `m_history` VALUES ('1246', '14', '1', '1522652471', '123', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/dash');
INSERT INTO `m_history` VALUES ('1247', '14', '1', '1522652471', '193', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/dash');
INSERT INTO `m_history` VALUES ('1248', '15', '1', '1522652471', '106', '', '0', '1', '0', '', '0', '', 'https://v.cash/wallets.php');
INSERT INTO `m_history` VALUES ('1249', '15', '1', '1522652471', '144', '', '0', '2', '0', '', '0', '', 'https://v.cash/wallets.php');
INSERT INTO `m_history` VALUES ('1250', '16', '1', '1522652471', '62', '', '0', '1', '0', '', '0', '', 'https://ciphrex.com/products/');
INSERT INTO `m_history` VALUES ('1251', '16', '1', '1522652471', '185', '', '0', '2', '0', '', '0', '', 'https://ciphrex.com/products/');
INSERT INTO `m_history` VALUES ('1252', '17', '1', '1522652471', '199', '', '0', '1', '0', '', '0', '', 'https://coinapult.com/');
INSERT INTO `m_history` VALUES ('1253', '17', '1', '1522652471', '69', '', '0', '2', '0', '', '0', '', 'https://coinapult.com/');
INSERT INTO `m_history` VALUES ('1254', '18', '1', '1522652471', '106', '', '0', '1', '0', '', '0', '', 'https://chrome.google.com/webstore/detail/tokenly-pockets/pdkmidhbflcbhddoagiikmafccadidhh?hl=en');
INSERT INTO `m_history` VALUES ('1255', '18', '1', '1522652471', '37', '', '0', '2', '0', '', '0', '', 'https://chrome.google.com/webstore/detail/tokenly-pockets/pdkmidhbflcbhddoagiikmafccadidhh?hl=en');
INSERT INTO `m_history` VALUES ('1256', '19', '1', '1522652471', '130', '', '0', '1', '0', '', '0', '', 'https://github.com/stellarchat/desktop-client/releases/tag/1.4');
INSERT INTO `m_history` VALUES ('1257', '19', '1', '1522652471', '125', '', '0', '2', '0', '', '0', '', 'https://github.com/stellarchat/desktop-client/releases/tag/1.4');
INSERT INTO `m_history` VALUES ('1258', '20', '1', '1522652471', '149', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/bch');
INSERT INTO `m_history` VALUES ('1259', '20', '1', '1522652471', '152', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/bch');
INSERT INTO `m_history` VALUES ('1260', '21', '1', '1522652471', '186', '', '0', '1', '0', '', '0', '', 'https://lisk.io/download');
INSERT INTO `m_history` VALUES ('1261', '21', '1', '1522652471', '85', '', '0', '2', '0', '', '0', '', 'https://lisk.io/download');
INSERT INTO `m_history` VALUES ('1262', '22', '1', '1522652471', '66', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/lsk');
INSERT INTO `m_history` VALUES ('1263', '22', '1', '1522652471', '19', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/lsk');
INSERT INTO `m_history` VALUES ('1264', '23', '1', '1522652471', '115', '', '0', '1', '0', '', '0', '', 'https://carbonwallet.com/');
INSERT INTO `m_history` VALUES ('1265', '23', '1', '1522652471', '49', '', '0', '2', '0', '', '0', '', 'https://carbonwallet.com/');
INSERT INTO `m_history` VALUES ('1266', '24', '1', '1522652471', '30', '', '0', '1', '0', '', '0', '', 'https://github.com/stratisproject/electrum-stratis');
INSERT INTO `m_history` VALUES ('1267', '24', '1', '1522652471', '195', '', '0', '2', '0', '', '0', '', 'https://github.com/stratisproject/electrum-stratis');
INSERT INTO `m_history` VALUES ('1268', '25', '1', '1522652471', '51', '', '0', '1', '0', '', '0', '', 'https://github.com/arcbit');
INSERT INTO `m_history` VALUES ('1269', '25', '1', '1522652471', '176', '', '0', '2', '0', '', '0', '', 'https://github.com/arcbit');
INSERT INTO `m_history` VALUES ('1270', '26', '1', '1522652471', '83', '', '0', '1', '0', '', '0', '', 'https://token.vdice.io/');
INSERT INTO `m_history` VALUES ('1271', '26', '1', '1522652471', '48', '', '0', '2', '0', '', '0', '', 'https://token.vdice.io/');
INSERT INTO `m_history` VALUES ('1272', '27', '1', '1522652471', '115', '', '0', '1', '0', '', '0', '', 'https://wallet.indiesquare.me/');
INSERT INTO `m_history` VALUES ('1273', '27', '1', '1522652471', '191', '', '0', '2', '0', '', '0', '', 'https://wallet.indiesquare.me/');
INSERT INTO `m_history` VALUES ('1274', '28', '1', '1522652471', '82', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/nxt?pid=cc');
INSERT INTO `m_history` VALUES ('1275', '28', '1', '1522652471', '172', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/nxt?pid=cc');
INSERT INTO `m_history` VALUES ('1276', '29', '1', '1522652471', '91', '', '0', '1', '0', '', '0', '', 'https://nxt.org/');
INSERT INTO `m_history` VALUES ('1277', '29', '1', '1522652471', '163', '', '0', '2', '0', '', '0', '', 'https://nxt.org/');
INSERT INTO `m_history` VALUES ('1278', '30', '1', '1522652471', '82', '', '0', '1', '0', '', '0', '', 'https://eidoo.io/');
INSERT INTO `m_history` VALUES ('1279', '30', '1', '1522652471', '40', '', '0', '2', '0', '', '0', '', 'https://eidoo.io/');
INSERT INTO `m_history` VALUES ('1280', '31', '1', '1522652471', '92', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/ardr');
INSERT INTO `m_history` VALUES ('1281', '31', '1', '1522652471', '108', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/ardr');
INSERT INTO `m_history` VALUES ('1282', '32', '1', '1522652471', '151', '', '0', '1', '0', '', '0', '', 'https://www.cryptocompare.com/wallets/classicetherwallet-cx/');
INSERT INTO `m_history` VALUES ('1283', '32', '1', '1522652471', '22', '', '0', '2', '0', '', '0', '', 'https://www.cryptocompare.com/wallets/classicetherwallet-cx/');
INSERT INTO `m_history` VALUES ('1284', '33', '1', '1522652471', '77', '', '0', '1', '0', '', '0', '', 'https://xapo.com/');
INSERT INTO `m_history` VALUES ('1285', '33', '1', '1522652471', '27', '', '0', '2', '0', '', '0', '', 'https://xapo.com/');
INSERT INTO `m_history` VALUES ('1286', '34', '1', '1522652471', '61', '', '0', '1', '0', '', '0', '', 'https://mymonero.com/#/');
INSERT INTO `m_history` VALUES ('1287', '34', '1', '1522652471', '10', '', '0', '2', '0', '', '0', '', 'https://mymonero.com/#/');
INSERT INTO `m_history` VALUES ('1288', '35', '1', '1522652471', '156', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/zec');
INSERT INTO `m_history` VALUES ('1289', '35', '1', '1522652471', '66', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/zec');
INSERT INTO `m_history` VALUES ('1290', '36', '1', '1522652471', '19', '', '0', '1', '0', '', '0', '', 'https://gatehub.net/');
INSERT INTO `m_history` VALUES ('1291', '36', '1', '1522652471', '87', '', '0', '2', '0', '', '0', '', 'https://gatehub.net/');
INSERT INTO `m_history` VALUES ('1292', '37', '1', '1522652471', '25', '', '0', '1', '0', '', '0', '', 'http://app.zebpay.com/wallet-website');
INSERT INTO `m_history` VALUES ('1293', '37', '1', '1522652471', '192', '', '0', '2', '0', '', '0', '', 'http://app.zebpay.com/wallet-website');
INSERT INTO `m_history` VALUES ('1294', '38', '1', '1522652471', '33', '', '0', '1', '0', '', '0', '', 'https://www.circle.com/en');
INSERT INTO `m_history` VALUES ('1295', '38', '1', '1522652471', '61', '', '0', '2', '0', '', '0', '', 'https://www.circle.com/en');
INSERT INTO `m_history` VALUES ('1296', '39', '1', '1522652471', '57', '', '0', '1', '0', '', '0', '', 'https://www.cryptonator.com/');
INSERT INTO `m_history` VALUES ('1297', '39', '1', '1522652471', '10', '', '0', '2', '0', '', '0', '', 'https://www.cryptonator.com/');
INSERT INTO `m_history` VALUES ('1298', '40', '1', '1522652471', '136', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/steem?pid=cc');
INSERT INTO `m_history` VALUES ('1299', '40', '1', '1522652471', '191', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/steem?pid=cc');
INSERT INTO `m_history` VALUES ('1300', '41', '1', '1522652471', '160', '', '0', '1', '0', '', '0', '', 'https://www.coinbase.com/');
INSERT INTO `m_history` VALUES ('1301', '41', '1', '1522652471', '163', '', '0', '2', '0', '', '0', '', 'https://www.coinbase.com/');
INSERT INTO `m_history` VALUES ('1302', '42', '1', '1522652471', '174', '', '0', '1', '0', '', '0', '', 'https://komodoplatform.com/');
INSERT INTO `m_history` VALUES ('1303', '42', '1', '1522652471', '85', '', '0', '2', '0', '', '0', '', 'https://komodoplatform.com/');
INSERT INTO `m_history` VALUES ('1304', '43', '1', '1522652471', '106', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/xmr?pid=cc');
INSERT INTO `m_history` VALUES ('1305', '43', '1', '1522652471', '80', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/xmr?pid=cc');
INSERT INTO `m_history` VALUES ('1306', '44', '1', '1522652471', '133', '', '0', '1', '0', '', '0', '', 'https://www.coinvault.io/');
INSERT INTO `m_history` VALUES ('1307', '44', '1', '1522652471', '79', '', '0', '2', '0', '', '0', '', 'https://www.coinvault.io/');
INSERT INTO `m_history` VALUES ('1308', '45', '1', '1522652471', '118', '', '0', '1', '0', '', '0', '', 'https://greenaddress.it/en/');
INSERT INTO `m_history` VALUES ('1309', '45', '1', '1522652471', '63', '', '0', '2', '0', '', '0', '', 'https://greenaddress.it/en/');
INSERT INTO `m_history` VALUES ('1310', '46', '1', '1522652471', '73', '', '0', '1', '0', '', '0', '', 'https://www.electroncash.org/');
INSERT INTO `m_history` VALUES ('1311', '46', '1', '1522652471', '144', '', '0', '2', '0', '', '0', '', 'https://www.electroncash.org/');
INSERT INTO `m_history` VALUES ('1312', '47', '1', '1522652471', '186', '', '0', '1', '0', '', '0', '', 'https://nem.io/downloads/');
INSERT INTO `m_history` VALUES ('1313', '47', '1', '1522652471', '101', '', '0', '2', '0', '', '0', '', 'https://nem.io/downloads/');
INSERT INTO `m_history` VALUES ('1314', '48', '1', '1522652471', '55', '', '0', '1', '0', '', '0', '', 'https://www.omniwallet.org/');
INSERT INTO `m_history` VALUES ('1315', '48', '1', '1522652471', '152', '', '0', '2', '0', '', '0', '', 'https://www.omniwallet.org/');
INSERT INTO `m_history` VALUES ('1316', '49', '1', '1522652471', '132', '', '0', '1', '0', '', '0', '', 'https://getmonero.org/downloads/');
INSERT INTO `m_history` VALUES ('1317', '49', '1', '1522652471', '148', '', '0', '2', '0', '', '0', '', 'https://getmonero.org/downloads/');
INSERT INTO `m_history` VALUES ('1318', '50', '1', '1522652471', '75', '', '0', '1', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=com.unocoin.unocoinwallet');
INSERT INTO `m_history` VALUES ('1319', '50', '1', '1522652471', '48', '', '0', '2', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=com.unocoin.unocoinwallet');
INSERT INTO `m_history` VALUES ('1320', '51', '1', '1522652471', '67', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/btc?pid=cc');
INSERT INTO `m_history` VALUES ('1321', '51', '1', '1522652471', '82', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/btc?pid=cc');
INSERT INTO `m_history` VALUES ('1322', '52', '1', '1522652471', '129', '', '0', '1', '0', '', '0', '', 'https://bitconnect.co/');
INSERT INTO `m_history` VALUES ('1323', '52', '1', '1522652471', '114', '', '0', '2', '0', '', '0', '', 'https://bitconnect.co/');
INSERT INTO `m_history` VALUES ('1324', '53', '1', '1522652471', '161', '', '0', '1', '0', '', '0', '', 'https://www.coincorner.com/');
INSERT INTO `m_history` VALUES ('1325', '53', '1', '1522652471', '131', '', '0', '2', '0', '', '0', '', 'https://www.coincorner.com/');
INSERT INTO `m_history` VALUES ('1326', '54', '1', '1522652471', '116', '', '0', '1', '0', '', '0', '', 'http://www.coinbank.info/');
INSERT INTO `m_history` VALUES ('1327', '54', '1', '1522652471', '15', '', '0', '2', '0', '', '0', '', 'http://www.coinbank.info/');
INSERT INTO `m_history` VALUES ('1328', '55', '1', '1522652471', '112', '', '0', '1', '0', '', '0', '', 'https://www.parity.io/');
INSERT INTO `m_history` VALUES ('1329', '55', '1', '1522652471', '63', '', '0', '2', '0', '', '0', '', 'https://www.parity.io/');
INSERT INTO `m_history` VALUES ('1330', '56', '1', '1522652471', '173', '', '0', '1', '0', '', '0', '', 'https://bitcoin.org/en/download');
INSERT INTO `m_history` VALUES ('1331', '56', '1', '1522652471', '93', '', '0', '2', '0', '', '0', '', 'https://bitcoin.org/en/download');
INSERT INTO `m_history` VALUES ('1332', '57', '1', '1522652471', '89', '', '0', '1', '0', '', '0', '', 'https://www.ipayyou.io/');
INSERT INTO `m_history` VALUES ('1333', '57', '1', '1522652471', '185', '', '0', '2', '0', '', '0', '', 'https://www.ipayyou.io/');
INSERT INTO `m_history` VALUES ('1334', '58', '1', '1522652471', '31', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/eth?pid=cryptocompare');
INSERT INTO `m_history` VALUES ('1335', '58', '1', '1522652471', '111', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/eth?pid=cryptocompare');
INSERT INTO `m_history` VALUES ('1336', '59', '1', '1522652471', '118', '', '0', '1', '0', '', '0', '', 'https://www.bitpanda.com/?ref=6067544900284737884');
INSERT INTO `m_history` VALUES ('1337', '59', '1', '1522652471', '55', '', '0', '2', '0', '', '0', '', 'https://www.bitpanda.com/?ref=6067544900284737884');
INSERT INTO `m_history` VALUES ('1338', '60', '1', '1522652471', '101', '', '0', '1', '0', '', '0', '', 'https://spectrocoin.com/');
INSERT INTO `m_history` VALUES ('1339', '60', '1', '1522652471', '200', '', '0', '2', '0', '', '0', '', 'https://spectrocoin.com/');
INSERT INTO `m_history` VALUES ('1340', '61', '1', '1522652471', '62', '', '0', '1', '0', '', '0', '', 'https://samouraiwallet.com/');
INSERT INTO `m_history` VALUES ('1341', '61', '1', '1522652471', '43', '', '0', '2', '0', '', '0', '', 'https://samouraiwallet.com/');
INSERT INTO `m_history` VALUES ('1342', '62', '1', '1522652471', '88', '', '0', '1', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=de.schildbach.wallet');
INSERT INTO `m_history` VALUES ('1343', '62', '1', '1522652471', '31', '', '0', '2', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=de.schildbach.wallet');
INSERT INTO `m_history` VALUES ('1344', '63', '1', '1522652471', '63', '', '0', '1', '0', '', '0', '', 'https://www.litevault.net/');
INSERT INTO `m_history` VALUES ('1345', '63', '1', '1522652471', '50', '', '0', '2', '0', '', '0', '', 'https://www.litevault.net/');
INSERT INTO `m_history` VALUES ('1346', '64', '1', '1522652471', '151', '', '0', '1', '0', '', '0', '', 'https://counterwallet.io/');
INSERT INTO `m_history` VALUES ('1347', '64', '1', '1522652471', '45', '', '0', '2', '0', '', '0', '', 'https://counterwallet.io/');
INSERT INTO `m_history` VALUES ('1348', '65', '1', '1522652471', '134', '', '0', '1', '0', '', '0', '', 'https://bcmy.io/');
INSERT INTO `m_history` VALUES ('1349', '65', '1', '1522652471', '150', '', '0', '2', '0', '', '0', '', 'https://bcmy.io/');
INSERT INTO `m_history` VALUES ('1350', '66', '1', '1522652471', '192', '', '0', '1', '0', '', '0', '', 'https://coolwallet.io/');
INSERT INTO `m_history` VALUES ('1351', '66', '1', '1522652471', '69', '', '0', '2', '0', '', '0', '', 'https://coolwallet.io/');
INSERT INTO `m_history` VALUES ('1352', '67', '1', '1522652471', '194', '', '0', '1', '0', '', '0', '', 'https://www.bitwala.com/');
INSERT INTO `m_history` VALUES ('1353', '67', '1', '1522652471', '194', '', '0', '2', '0', '', '0', '', 'https://www.bitwala.com/');
INSERT INTO `m_history` VALUES ('1354', '68', '1', '1522652471', '183', '', '0', '1', '0', '', '0', '', 'https://bither.net/');
INSERT INTO `m_history` VALUES ('1355', '68', '1', '1522652471', '72', '', '0', '2', '0', '', '0', '', 'https://bither.net/');
INSERT INTO `m_history` VALUES ('1356', '69', '1', '1522652471', '17', '', '0', '1', '0', '', '0', '', 'https://wallet.singulardtv.com/lightwallet');
INSERT INTO `m_history` VALUES ('1357', '69', '1', '1522652471', '172', '', '0', '2', '0', '', '0', '', 'https://wallet.singulardtv.com/lightwallet');
INSERT INTO `m_history` VALUES ('1358', '70', '1', '1522652471', '61', '', '0', '1', '0', '', '0', '', 'https://www.mobi.me/');
INSERT INTO `m_history` VALUES ('1359', '70', '1', '1522652471', '178', '', '0', '2', '0', '', '0', '', 'https://www.mobi.me/');
INSERT INTO `m_history` VALUES ('1360', '71', '1', '1522652471', '24', '', '0', '1', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=de.langerhans.wallet');
INSERT INTO `m_history` VALUES ('1361', '71', '1', '1522652471', '49', '', '0', '2', '0', '', '0', '', 'https://play.google.com/store/apps/details?id=de.langerhans.wallet');
INSERT INTO `m_history` VALUES ('1362', '72', '1', '1522652471', '160', '', '0', '1', '0', '', '0', '', 'https://freewallet.org/currency/fcn?pid=cc');
INSERT INTO `m_history` VALUES ('1363', '72', '1', '1522652471', '95', '', '0', '2', '0', '', '0', '', 'https://freewallet.org/currency/fcn?pid=cc');
INSERT INTO `m_history` VALUES ('1364', '73', '1', '1522652471', '14', '', '0', '1', '0', '', '0', '', 'https://wagecan.com/');
INSERT INTO `m_history` VALUES ('1365', '73', '1', '1522652471', '41', '', '0', '2', '0', '', '0', '', 'https://wagecan.com/');
INSERT INTO `m_history` VALUES ('1366', '74', '1', '1522652471', '23', '', '0', '1', '0', '', '0', '', 'https://litecoin.org/');
INSERT INTO `m_history` VALUES ('1367', '74', '1', '1522652471', '42', '', '0', '2', '0', '', '0', '', 'https://litecoin.org/');
INSERT INTO `m_history` VALUES ('1368', '75', '1', '1522652471', '39', '', '0', '1', '0', '', '0', '', 'http://dogecoin.com/');
INSERT INTO `m_history` VALUES ('1369', '75', '1', '1522652471', '181', '', '0', '2', '0', '', '0', '', 'http://dogecoin.com/');
INSERT INTO `m_history` VALUES ('1370', '76', '1', '1522652471', '160', '', '0', '1', '0', '', '0', '', 'https://www.bitlox.com/');
INSERT INTO `m_history` VALUES ('1371', '76', '1', '1522652471', '119', '', '0', '2', '0', '', '0', '', 'https://www.bitlox.com/');
INSERT INTO `m_history` VALUES ('1372', '77', '1', '1522652471', '61', '', '0', '1', '0', '', '0', '', 'https://www.ledgerwallet.com/products/ledger-hw-1');
INSERT INTO `m_history` VALUES ('1373', '77', '1', '1522652471', '78', '', '0', '2', '0', '', '0', '', 'https://www.ledgerwallet.com/products/ledger-hw-1');
INSERT INTO `m_history` VALUES ('1374', '78', '1', '1522652471', '120', '', '0', '1', '0', '', '0', '', 'https://github.com/vaklinov/zcash-swing-wallet-ui');
INSERT INTO `m_history` VALUES ('1375', '78', '1', '1522652471', '119', '', '0', '2', '0', '', '0', '', 'https://github.com/vaklinov/zcash-swing-wallet-ui');
INSERT INTO `m_history` VALUES ('1376', '79', '1', '1522652471', '25', '', '0', '1', '0', '', '0', '', 'https://www.coin.space/');
INSERT INTO `m_history` VALUES ('1377', '79', '1', '1522652471', '26', '', '0', '2', '0', '', '0', '', 'https://www.coin.space/');
INSERT INTO `m_history` VALUES ('1378', '80', '1', '1522652471', '30', '', '0', '1', '0', '', '0', '', 'https://electrum-ltc.org/');
INSERT INTO `m_history` VALUES ('1379', '80', '1', '1522652471', '64', '', '0', '2', '0', '', '0', '', 'https://electrum-ltc.org/');
INSERT INTO `m_history` VALUES ('1380', '81', '1', '1522652471', '72', '', '0', '1', '0', '', '0', '', 'https://bonpay.com/wallet/');
INSERT INTO `m_history` VALUES ('1381', '81', '1', '1522652471', '130', '', '0', '2', '0', '', '0', '', 'https://bonpay.com/wallet/');
INSERT INTO `m_history` VALUES ('1382', '82', '1', '1522652471', '150', '', '0', '1', '0', '', '0', '', 'https://metamask.io/');
INSERT INTO `m_history` VALUES ('1383', '82', '1', '1522652471', '179', '', '0', '2', '0', '', '0', '', 'https://metamask.io/');
INSERT INTO `m_history` VALUES ('1384', '83', '1', '1522652471', '84', '', '0', '1', '0', '', '0', '', 'https://bitshares.openledger.info/');
INSERT INTO `m_history` VALUES ('1385', '83', '1', '1522652471', '46', '', '0', '2', '0', '', '0', '', 'https://bitshares.openledger.info/');
INSERT INTO `m_history` VALUES ('1386', '84', '1', '1522652471', '166', '', '0', '1', '0', '', '0', '', 'https://www.bitcoinarmory.com/');
INSERT INTO `m_history` VALUES ('1387', '84', '1', '1522652471', '133', '', '0', '2', '0', '', '0', '', 'https://www.bitcoinarmory.com/');
INSERT INTO `m_history` VALUES ('1388', '85', '1', '1522652471', '115', '', '0', '1', '0', '', '0', '', 'https://www.ether.li/');
INSERT INTO `m_history` VALUES ('1389', '85', '1', '1522652471', '84', '', '0', '2', '0', '', '0', '', 'https://www.ether.li/');
INSERT INTO `m_history` VALUES ('1390', '86', '1', '1522652471', '78', '', '0', '1', '0', '', '0', '', 'https://www.bitaddress.org/bitaddress.org-v3.3.0-SHA256-dec17c07685e1870960903d8f58090475b25af946fe95a734f88408cef4aa194.html');
INSERT INTO `m_history` VALUES ('1391', '86', '1', '1522652471', '184', '', '0', '2', '0', '', '0', '', 'https://www.bitaddress.org/bitaddress.org-v3.3.0-SHA256-dec17c07685e1870960903d8f58090475b25af946fe95a734f88408cef4aa194.html');
INSERT INTO `m_history` VALUES ('1392', '87', '1', '1522652471', '54', '', '0', '1', '0', '', '0', '', 'https://my.dogechain.info/#/overview');
INSERT INTO `m_history` VALUES ('1393', '87', '1', '1522652471', '194', '', '0', '2', '0', '', '0', '', 'https://my.dogechain.info/#/overview');
INSERT INTO `m_history` VALUES ('1394', '88', '1', '1522652471', '16', '', '0', '1', '0', '', '0', '', 'https://www.bitgo.com/');
INSERT INTO `m_history` VALUES ('1395', '88', '1', '1522652471', '52', '', '0', '2', '0', '', '0', '', 'https://www.bitgo.com/');
INSERT INTO `m_history` VALUES ('1396', '89', '1', '1522652471', '91', '', '0', '1', '0', '', '0', '', 'https://holytransaction.com/');
INSERT INTO `m_history` VALUES ('1397', '89', '1', '1522652471', '19', '', '0', '2', '0', '', '0', '', 'https://holytransaction.com/');
INSERT INTO `m_history` VALUES ('1398', '90', '1', '1522652471', '22', '', '0', '1', '0', '', '0', '', 'https://jaxx.io/');
INSERT INTO `m_history` VALUES ('1399', '90', '1', '1522652471', '47', '', '0', '2', '0', '', '0', '', 'https://jaxx.io/');
INSERT INTO `m_history` VALUES ('1400', '91', '1', '1522652471', '156', '', '0', '1', '0', '', '0', '', 'https://itunes.apple.com/gb/app/breadwallet-bitcoin-wallet/id885251393?mt=8');
INSERT INTO `m_history` VALUES ('1401', '91', '1', '1522652471', '160', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/gb/app/breadwallet-bitcoin-wallet/id885251393?mt=8');
INSERT INTO `m_history` VALUES ('1402', '92', '1', '1522652471', '145', '', '0', '1', '0', '', '0', '', 'https://chrome.google.com/webstore/detail/wavesliteapp/kfmcaklajknfekomaflnhkjjkcjabogm');
INSERT INTO `m_history` VALUES ('1403', '92', '1', '1522652471', '17', '', '0', '2', '0', '', '0', '', 'https://chrome.google.com/webstore/detail/wavesliteapp/kfmcaklajknfekomaflnhkjjkcjabogm');
INSERT INTO `m_history` VALUES ('1404', '93', '1', '1522652471', '66', '', '0', '1', '0', '', '0', '', 'https://www.coinspot.com.au/multicoinwallets');
INSERT INTO `m_history` VALUES ('1405', '93', '1', '1522652471', '141', '', '0', '2', '0', '', '0', '', 'https://www.coinspot.com.au/multicoinwallets');
INSERT INTO `m_history` VALUES ('1406', '94', '1', '1522652471', '156', '', '0', '1', '0', '', '0', '', 'http://xeth.org/');
INSERT INTO `m_history` VALUES ('1407', '94', '1', '1522652471', '37', '', '0', '2', '0', '', '0', '', 'http://xeth.org/');
INSERT INTO `m_history` VALUES ('1408', '95', '1', '1522652471', '118', '', '0', '1', '0', '', '0', '', 'https://www.keepkey.com/?source=hasoffers');
INSERT INTO `m_history` VALUES ('1409', '95', '1', '1522652471', '17', '', '0', '2', '0', '', '0', '', 'https://www.keepkey.com/?source=hasoffers');
INSERT INTO `m_history` VALUES ('1410', '96', '1', '1522652471', '118', '', '0', '1', '0', '', '0', '', 'https://wallet.btc.com/#/setup/login');
INSERT INTO `m_history` VALUES ('1411', '96', '1', '1522652471', '160', '', '0', '2', '0', '', '0', '', 'https://wallet.btc.com/#/setup/login');
INSERT INTO `m_history` VALUES ('1412', '97', '1', '1522652471', '73', '', '0', '1', '0', '', '0', '', 'https://copay.io/');
INSERT INTO `m_history` VALUES ('1413', '97', '1', '1522652471', '11', '', '0', '2', '0', '', '0', '', 'https://copay.io/');
INSERT INTO `m_history` VALUES ('1414', '98', '1', '1522652471', '14', '', '0', '1', '0', '', '0', '', 'https://github.com/ethereum/mist/releases');
INSERT INTO `m_history` VALUES ('1415', '98', '1', '1522652471', '88', '', '0', '2', '0', '', '0', '', 'https://github.com/ethereum/mist/releases');
INSERT INTO `m_history` VALUES ('1416', '99', '1', '1522652471', '151', '', '0', '1', '0', '', '0', '', 'http://uberpay.io/');
INSERT INTO `m_history` VALUES ('1417', '99', '1', '1522652471', '85', '', '0', '2', '0', '', '0', '', 'http://uberpay.io/');
INSERT INTO `m_history` VALUES ('1418', '100', '1', '1522652471', '93', '', '0', '1', '0', '', '0', '', 'https://block.io/');
INSERT INTO `m_history` VALUES ('2130', '399', '1', '1523157282', '128', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/%E5%B8%81%E4%B8%96%E7%95%8C%E5%BF%AB%E8%AE%AF/id1330140701?mt=8');
INSERT INTO `m_history` VALUES ('2131', '399', '1', '1523157282', '85', '', '0', '1', '0', '', '0', '', 'http://download.8btc.com/#page1');
INSERT INTO `m_history` VALUES ('2132', '580', '1', '1523157282', '96', '', '0', '1', '0', '', '0', '', 'http://www.walian.cn/download');
INSERT INTO `m_history` VALUES ('1800', '407', '1', '1522806579', '116', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/app/');
INSERT INTO `m_history` VALUES ('1801', '407', '1', '1522806579', '146', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/app/');
INSERT INTO `m_history` VALUES ('1802', '408', '1', '1522806579', '80', '', '0', '1', '0', '', '0', '', 'http://www.bitkan.com/app');
INSERT INTO `m_history` VALUES ('1803', '408', '1', '1522806579', '92', '', '0', '2', '0', '', '0', '', 'http://www.bitkan.com/app');
INSERT INTO `m_history` VALUES ('1804', '409', '1', '1522806579', '35', '', '0', '1', '0', '', '0', '', 'https://www.coincola.com/app/download');
INSERT INTO `m_history` VALUES ('1805', '409', '1', '1522806579', '119', '', '0', '2', '0', '', '0', '', 'https://www.coincola.com/app/download');
INSERT INTO `m_history` VALUES ('1806', '410', '1', '1522806579', '100', '', '0', '1', '0', '', '0', '', 'https://mytoken.io/');
INSERT INTO `m_history` VALUES ('1807', '410', '1', '1522806579', '24', '', '0', '2', '0', '', '0', '', 'https://mytoken.io/');
INSERT INTO `m_history` VALUES ('1808', '411', '1', '1522806579', '42', '', '0', '1', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history` VALUES ('1809', '411', '1', '1522806579', '105', '', '0', '2', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history` VALUES ('1810', '412', '1', '1522806579', '185', '', '0', '1', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history` VALUES ('1811', '412', '1', '1522806579', '109', '', '0', '2', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history` VALUES ('1812', '413', '1', '1522806579', '129', '', '0', '1', '0', '', '0', '', 'https://www.bitane.io/');
INSERT INTO `m_history` VALUES ('1813', '413', '1', '1522806579', '50', '', '0', '2', '0', '', '0', '', 'https://www.bitane.io/');
INSERT INTO `m_history` VALUES ('1814', '414', '1', '1522806579', '89', '', '0', '1', '0', '', '0', '', 'http://tokenclub.com/#/');
INSERT INTO `m_history` VALUES ('1815', '414', '1', '1522806579', '121', '', '0', '2', '0', '', '0', '', 'http://tokenclub.com/#/');
INSERT INTO `m_history` VALUES ('1816', '415', '1', '1522806579', '70', '', '0', '1', '0', '', '0', '', 'http://download.8btc.com/#page1');
INSERT INTO `m_history` VALUES ('1757', '385', '1', '1523156287', '58', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/app/id1323950088');
INSERT INTO `m_history` VALUES ('2134', '388', '1', '1523157282', '119', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/mytoken/id1271352380?mt=8');
INSERT INTO `m_history` VALUES ('2135', '400', '1', '1523157282', '96', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/id1331483360');
INSERT INTO `m_history` VALUES ('2136', '406', '1', '1523157282', '15', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/id1330353052');
INSERT INTO `m_history` VALUES ('2137', '391', '1', '1523157282', '179', '', '0', '2', '0', '', '0', '', 'itms-services:///?action=download-manifest&url=https://dl.bitane.io/bitane.plist');
INSERT INTO `m_history` VALUES ('1764', '389', '1', '1522669327', '117', '', '0', '1', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history` VALUES ('1765', '389', '1', '1522669327', '86', '', '0', '2', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history` VALUES ('1766', '390', '1', '1522669327', '191', '', '0', '1', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history` VALUES ('1767', '390', '1', '1522669327', '184', '', '0', '2', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history` VALUES ('2141', '396', '1', '1523157282', '107', '', '0', '2', '0', '', '0', '', 'https://fir.im/coldlarios');
INSERT INTO `m_history` VALUES ('2142', '397', '1', '1523157282', '94', '', '0', '2', '0', '', '0', '', 'http://www.aicoin.com/app');
INSERT INTO `m_history` VALUES ('2143', '398', '1', '1523157282', '35', '', '0', '2', '0', '', '0', '', 'http://www.quintar.com/download/?from=erjiyemian');
INSERT INTO `m_history` VALUES ('2110', '567', '1', '1523156009', '20', '', '0', '1', '0', '', '0', '', 'http://img.bishijie.com/Bishijie_1.7_release.apk');
INSERT INTO `m_history` VALUES ('2111', '567', '1', '1523156009', '174', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/%E5%B8%81%E4%B8%96%E7%95%8C%E5%BF%AB%E8%AE%AF/id1330140701?mt=8');
INSERT INTO `m_history` VALUES ('2112', '568', '1', '1523156009', '142', '', '0', '1', '0', '', '0', '', 'http://a.app.qq.com/o/simple.jsp?pkgname=com.blockmeta.bbs&fromcase=40003');
INSERT INTO `m_history` VALUES ('2144', '401', '1', '1523157282', '98', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/%E8%A6%81%E5%8F%91%E8%BD%A6%E5%AE%98%E6%96%B9%E7%89%88/id1358214395');
INSERT INTO `m_history` VALUES ('2145', '402', '1', '1523157282', '22', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/us/app/pocket-im/id1284707723?l=zh&ls=1&mt=8');
INSERT INTO `m_history` VALUES ('2147', '405', '1', '1523157282', '75', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/us/app/da-bi-te/id1149166276');
INSERT INTO `m_history` VALUES ('2148', '386', '1', '1523157282', '25', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/app/bitcoin-kan/id1004852205?mt=8&ign-mpt=uo%3D4');
INSERT INTO `m_history` VALUES ('2149', '385', '1', '1523157282', '180', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('2152', '388', '1', '1523157282', '191', '', '0', '1', '0', '', '0', '', 'https://cdn.mytoken.org/MT-mytoken-lb-release-1.7.0.apk');
INSERT INTO `m_history` VALUES ('2153', '400', '1', '1523157282', '95', '', '0', '1', '0', '', '0', '', 'http://lianxiangfiles.oss-cn-beijing.aliyuncs.com/app/lianxiangcaijing.apk');
INSERT INTO `m_history` VALUES ('2154', '406', '1', '1523157282', '81', '', '0', '1', '0', '', '0', '', 'http://file.gongxiangcj.com/gxcj_v1.0.2.apk');
INSERT INTO `m_history` VALUES ('2155', '391', '1', '1523157282', '39', '', '0', '1', '0', '', '0', '', 'http://dl.bitane.io/bitane.apk');
INSERT INTO `m_history` VALUES ('2156', '394', '1', '1523157282', '104', '', '0', '1', '0', '', '0', '', 'http://btc123.oss-cn-beijing.aliyuncs.com/android/btc123_v_2_4_1_180315.apk');
INSERT INTO `m_history` VALUES ('2157', '396', '1', '1523157282', '124', '', '0', '1', '0', '', '0', '', 'https://app-apk1.oss-cn-beijing.aliyuncs.com/app/apk/coldlar_hot_2.1.1.apk');
INSERT INTO `m_history` VALUES ('2158', '397', '1', '1523157282', '88', '', '0', '1', '0', '', '0', '', 'https://static.aicoinstorge.com/apk/aicoin.apk');
INSERT INTO `m_history` VALUES ('2159', '398', '1', '1523157282', '24', '', '0', '1', '0', '', '0', '', 'http://www.quintar.com/download/?from=erjiyemian');
INSERT INTO `m_history` VALUES ('1867', '453', '1', '1523174619', '91', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1868', '454', '1', '1523174619', '80', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1869', '455', '1', '1523174619', '118', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1870', '456', '1', '1523174619', '103', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1871', '457', '1', '1523174619', '180', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1872', '458', '1', '1523174619', '69', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1873', '459', '1', '1523174619', '151', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1874', '460', '1', '1523174619', '135', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1875', '461', '1', '1523174619', '48', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1876', '462', '1', '1523174619', '169', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1877', '463', '1', '1523174619', '132', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1878', '464', '1', '1523174619', '84', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1879', '465', '1', '1523174619', '111', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1880', '466', '1', '1523174619', '54', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1881', '467', '1', '1523174619', '31', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1882', '468', '1', '1523174619', '35', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1883', '469', '1', '1523174619', '68', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1884', '470', '1', '1523174619', '27', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1885', '471', '1', '1523174619', '159', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1886', '472', '1', '1523174619', '83', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1887', '473', '1', '1523174619', '39', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1888', '474', '1', '1523174619', '186', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1889', '475', '1', '1523174619', '94', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1890', '476', '1', '1523174619', '173', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1891', '477', '1', '1523174619', '148', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1892', '478', '1', '1523174619', '85', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1893', '479', '1', '1523174619', '198', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1894', '480', '1', '1523174619', '144', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1895', '481', '1', '1523174619', '107', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1896', '482', '1', '1523174619', '58', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1897', '483', '1', '1523174619', '153', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1898', '484', '1', '1523174619', '36', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1899', '485', '1', '1523174619', '158', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1900', '486', '1', '1523174619', '78', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1901', '487', '1', '1523174619', '104', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1902', '488', '1', '1523174619', '83', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1903', '489', '1', '1523174619', '67', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1904', '490', '1', '1523174619', '85', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1905', '491', '1', '1523174619', '13', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1906', '492', '1', '1523174619', '107', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1907', '493', '1', '1523174619', '119', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1908', '494', '1', '1523174619', '139', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1909', '495', '1', '1523174619', '59', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1910', '496', '1', '1523174619', '41', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1911', '497', '1', '1523174619', '154', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1912', '498', '1', '1523174619', '71', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1913', '499', '1', '1523174619', '131', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1914', '500', '1', '1523174619', '14', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1915', '501', '1', '1523174619', '33', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1916', '502', '1', '1523174619', '124', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1917', '503', '1', '1523174619', '130', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1918', '504', '1', '1523174619', '165', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1919', '505', '1', '1523174619', '92', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1920', '506', '1', '1523174619', '22', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1921', '507', '1', '1523174619', '131', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1922', '508', '1', '1523174619', '196', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1923', '509', '1', '1523174619', '122', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1924', '510', '1', '1523174619', '24', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1925', '511', '1', '1523174619', '106', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1926', '512', '1', '1523174619', '154', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1927', '513', '1', '1523174619', '188', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1928', '514', '1', '1523174619', '48', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1929', '515', '1', '1523174619', '86', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1930', '516', '1', '1523174619', '175', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1931', '517', '1', '1523174619', '153', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1932', '518', '1', '1523174619', '72', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1933', '519', '1', '1523174619', '197', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1934', '520', '1', '1523174619', '69', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1935', '521', '1', '1523174619', '108', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1936', '522', '1', '1523174619', '85', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1937', '523', '1', '1523174619', '136', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1938', '524', '1', '1523174619', '61', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1939', '525', '1', '1523174619', '123', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1940', '526', '1', '1523174619', '169', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1941', '527', '1', '1523174619', '77', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1942', '528', '1', '1523174619', '13', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1943', '529', '1', '1523174619', '118', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1944', '530', '1', '1523174619', '39', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1945', '531', '1', '1523174619', '64', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1946', '532', '1', '1523174619', '186', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1947', '533', '1', '1523174619', '48', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1948', '534', '1', '1523174619', '192', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1949', '535', '1', '1523174619', '145', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1950', '536', '1', '1523174619', '141', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1951', '537', '1', '1523174619', '137', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1952', '538', '1', '1523174619', '87', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1953', '539', '1', '1523174619', '176', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1954', '540', '1', '1523174619', '143', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1955', '541', '1', '1523174619', '163', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1956', '542', '1', '1523174619', '90', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1957', '543', '1', '1523174619', '139', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1958', '544', '1', '1523174619', '13', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1959', '545', '1', '1523174619', '78', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1960', '546', '1', '1523174619', '27', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1961', '547', '1', '1523174619', '10', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1962', '548', '1', '1523174619', '194', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1963', '549', '1', '1523174619', '61', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1964', '550', '1', '1523174619', '79', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1965', '551', '1', '1523174619', '11', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1989', '452', '1', '1523174619', '50', '', '0', '1', '0', '', '0', '', 'https://m.feixiaohao.com/download/feixiaohao.apk');
INSERT INTO `m_history` VALUES ('1990', '453', '1', '1523153611', '81', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum/');
INSERT INTO `m_history` VALUES ('1991', '454', '1', '1523153611', '165', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ripple/');
INSERT INTO `m_history` VALUES ('1992', '455', '1', '1523153611', '175', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-cash/');
INSERT INTO `m_history` VALUES ('1993', '456', '1', '1523153611', '135', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/litecoin/');
INSERT INTO `m_history` VALUES ('1994', '457', '1', '1523153611', '188', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/eos/');
INSERT INTO `m_history` VALUES ('1995', '458', '1', '1523153611', '158', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stellar/');
INSERT INTO `m_history` VALUES ('1996', '459', '1', '1523153611', '192', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cardano/');
INSERT INTO `m_history` VALUES ('1997', '460', '1', '1523153611', '95', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neo/');
INSERT INTO `m_history` VALUES ('1998', '461', '1', '1523153611', '41', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/iota/');
INSERT INTO `m_history` VALUES ('1999', '462', '1', '1523153611', '171', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monero/');
INSERT INTO `m_history` VALUES ('2000', '463', '1', '1523153611', '85', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dash/');
INSERT INTO `m_history` VALUES ('2001', '464', '1', '1523153611', '169', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tether/');
INSERT INTO `m_history` VALUES ('2002', '465', '1', '1523153611', '75', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tron/');
INSERT INTO `m_history` VALUES ('2003', '466', '1', '1523153611', '172', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nem/');
INSERT INTO `m_history` VALUES ('2004', '467', '1', '1523153611', '13', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/binance-coin/');
INSERT INTO `m_history` VALUES ('2005', '468', '1', '1523153611', '27', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum-classic/');
INSERT INTO `m_history` VALUES ('2006', '469', '1', '1523153611', '186', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vechain/');
INSERT INTO `m_history` VALUES ('2007', '470', '1', '1523153611', '168', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qtum/');
INSERT INTO `m_history` VALUES ('2008', '471', '1', '1523153611', '133', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/verge/');
INSERT INTO `m_history` VALUES ('2009', '472', '1', '1523153611', '21', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/lisk/');
INSERT INTO `m_history` VALUES ('2010', '473', '1', '1523153611', '31', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/omisego/');
INSERT INTO `m_history` VALUES ('2011', '474', '1', '1523153611', '155', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/icon/');
INSERT INTO `m_history` VALUES ('2012', '475', '1', '1523153611', '136', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/raiblocks/');
INSERT INTO `m_history` VALUES ('2013', '476', '1', '1523153611', '72', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-gold/');
INSERT INTO `m_history` VALUES ('2014', '477', '1', '1523153611', '44', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcash/');
INSERT INTO `m_history` VALUES ('2015', '478', '1', '1523153611', '191', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/steem/');
INSERT INTO `m_history` VALUES ('2016', '479', '1', '1523153611', '118', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ht/');
INSERT INTO `m_history` VALUES ('2017', '480', '1', '1523153611', '56', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytom/');
INSERT INTO `m_history` VALUES ('2018', '481', '1', '1523153611', '18', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/populous/');
INSERT INTO `m_history` VALUES ('2019', '482', '1', '1523153611', '133', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digixdao/');
INSERT INTO `m_history` VALUES ('2020', '483', '1', '1523153611', '42', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytecoin-bcn/');
INSERT INTO `m_history` VALUES ('2021', '484', '1', '1523153611', '159', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitshares/');
INSERT INTO `m_history` VALUES ('2022', '485', '1', '1523153611', '12', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/waves/');
INSERT INTO `m_history` VALUES ('2023', '486', '1', '1523153611', '42', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stratis/');
INSERT INTO `m_history` VALUES ('2024', '487', '1', '1523153611', '78', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/siacoin/');
INSERT INTO `m_history` VALUES ('2025', '488', '1', '1523153611', '12', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/status/');
INSERT INTO `m_history` VALUES ('2026', '489', '1', '1523153611', '58', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/exchange-union/');
INSERT INTO `m_history` VALUES ('2027', '490', '1', '1523153611', '159', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aeternity/');
INSERT INTO `m_history` VALUES ('2028', '491', '1', '1523153611', '101', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dogecoin/');
INSERT INTO `m_history` VALUES ('2029', '492', '1', '1523153611', '13', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maker/');
INSERT INTO `m_history` VALUES ('2030', '493', '1', '1523153611', '92', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/0x/');
INSERT INTO `m_history` VALUES ('2031', '494', '1', '1523153611', '163', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/decred/');
INSERT INTO `m_history` VALUES ('2032', '495', '1', '1523153611', '129', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/augur/');
INSERT INTO `m_history` VALUES ('2033', '496', '1', '1523153611', '112', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/komodo/');
INSERT INTO `m_history` VALUES ('2034', '497', '1', '1523153611', '117', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zilliqa/');
INSERT INTO `m_history` VALUES ('2035', '498', '1', '1523153611', '194', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ardor/');
INSERT INTO `m_history` VALUES ('2036', '499', '1', '1523153611', '196', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/walton/');
INSERT INTO `m_history` VALUES ('2037', '500', '1', '1523153611', '94', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/veritaseum/');
INSERT INTO `m_history` VALUES ('2038', '501', '1', '1523153611', '129', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/hshare/');
INSERT INTO `m_history` VALUES ('2039', '502', '1', '1523153611', '100', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aion/');
INSERT INTO `m_history` VALUES ('2040', '503', '1', '1523153611', '118', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ark/');
INSERT INTO `m_history` VALUES ('2041', '504', '1', '1523153611', '156', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/pivx/');
INSERT INTO `m_history` VALUES ('2042', '505', '1', '1523153611', '58', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/loopring/');
INSERT INTO `m_history` VALUES ('2043', '506', '1', '1523153611', '55', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cryptonex/');
INSERT INTO `m_history` VALUES ('2044', '507', '1', '1523153611', '166', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/basic-attention-token/');
INSERT INTO `m_history` VALUES ('2045', '508', '1', '1523153611', '92', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kcs/');
INSERT INTO `m_history` VALUES ('2046', '509', '1', '1523153611', '36', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qash/');
INSERT INTO `m_history` VALUES ('2047', '510', '1', '1523153611', '20', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monacoin/');
INSERT INTO `m_history` VALUES ('2048', '511', '1', '1523153611', '189', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digibyte/');
INSERT INTO `m_history` VALUES ('2049', '512', '1', '1523153611', '23', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/factom/');
INSERT INTO `m_history` VALUES ('2050', '513', '1', '1523153611', '104', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/elastos/');
INSERT INTO `m_history` VALUES ('2051', '514', '1', '1523153611', '176', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/golem-network-tokens/');
INSERT INTO `m_history` VALUES ('2052', '515', '1', '1523153611', '30', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gas/');
INSERT INTO `m_history` VALUES ('2053', '516', '1', '1523153611', '53', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gxshares/');
INSERT INTO `m_history` VALUES ('2054', '517', '1', '1523153611', '186', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitquence/');
INSERT INTO `m_history` VALUES ('2055', '518', '1', '1523153611', '173', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/revain/');
INSERT INTO `m_history` VALUES ('2056', '519', '1', '1523153611', '130', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/syscoin/');
INSERT INTO `m_history` VALUES ('2057', '520', '1', '1523153611', '165', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dragonchain/');
INSERT INTO `m_history` VALUES ('2058', '521', '1', '1523153611', '113', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nebulas/');
INSERT INTO `m_history` VALUES ('2059', '522', '1', '1523153611', '140', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/funfair/');
INSERT INTO `m_history` VALUES ('2060', '523', '1', '1523153611', '87', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kyber-network/');
INSERT INTO `m_history` VALUES ('2061', '524', '1', '1523153611', '122', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcoin/');
INSERT INTO `m_history` VALUES ('2062', '525', '1', '1523153611', '118', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storm/');
INSERT INTO `m_history` VALUES ('2063', '526', '1', '1523153611', '19', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/electroneum/');
INSERT INTO `m_history` VALUES ('2064', '527', '1', '1523153611', '10', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/reddcoin/');
INSERT INTO `m_history` VALUES ('2065', '528', '1', '1523153611', '124', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/substratum/');
INSERT INTO `m_history` VALUES ('2066', '529', '1', '1523153611', '91', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kin/');
INSERT INTO `m_history` VALUES ('2067', '530', '1', '1523153611', '18', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nxt/');
INSERT INTO `m_history` VALUES ('2068', '531', '1', '1523153611', '98', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/salt/');
INSERT INTO `m_history` VALUES ('2069', '532', '1', '1523153611', '18', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maidsafecoin/');
INSERT INTO `m_history` VALUES ('2070', '533', '1', '1523153611', '128', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/power-ledger/');
INSERT INTO `m_history` VALUES ('2071', '534', '1', '1523153611', '143', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/byteball/');
INSERT INTO `m_history` VALUES ('2072', '535', '1', '1523153611', '86', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dent/');
INSERT INTO `m_history` VALUES ('2073', '536', '1', '1523153611', '156', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/enigma-project/');
INSERT INTO `m_history` VALUES ('2074', '537', '1', '1523153611', '88', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storj/');
INSERT INTO `m_history` VALUES ('2075', '538', '1', '1523153611', '81', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/request-network/');
INSERT INTO `m_history` VALUES ('2076', '539', '1', '1523153611', '72', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neblio/');
INSERT INTO `m_history` VALUES ('2077', '540', '1', '1523153611', '133', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/chainlink/');
INSERT INTO `m_history` VALUES ('2078', '541', '1', '1523153611', '108', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/skycoin/');
INSERT INTO `m_history` VALUES ('2079', '542', '1', '1523153611', '151', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bancor/');
INSERT INTO `m_history` VALUES ('2080', '543', '1', '1523153611', '26', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tenx/');
INSERT INTO `m_history` VALUES ('2081', '544', '1', '1523153611', '189', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/emercoin/');
INSERT INTO `m_history` VALUES ('2082', '545', '1', '1523153611', '16', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dropil/');
INSERT INTO `m_history` VALUES ('2083', '546', '1', '1523153611', '174', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dentacoin/');
INSERT INTO `m_history` VALUES ('2084', '547', '1', '1523153611', '111', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/genaro/');
INSERT INTO `m_history` VALUES ('2085', '548', '1', '1523153611', '45', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/particl/');
INSERT INTO `m_history` VALUES ('2086', '549', '1', '1523153611', '118', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cindicator/');
INSERT INTO `m_history` VALUES ('2087', '550', '1', '1523153611', '120', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/achain/');
INSERT INTO `m_history` VALUES ('2088', '551', '1', '1523153611', '70', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vertcoin/');
INSERT INTO `m_history` VALUES ('2109', '566', '1', '1523156009', '140', '', '0', '1', '0', '', '0', '', 'https://m.jinse.com/app');
INSERT INTO `m_history` VALUES ('2119', '572', '1', '1523156009', '162', '', '0', '1', '0', '', '0', '', 'http://a.app.qq.com/o/simple.jsp?pkgname=com.weilai.finance&fromcase=40003');
INSERT INTO `m_history` VALUES ('2120', '573', '1', '1523156009', '22', '', '0', '1', '0', '', '0', '', 'https://www.ihuoqiu.com/m/i.html');
INSERT INTO `m_history` VALUES ('2121', '574', '1', '1523156009', '46', '', '0', '1', '0', '', '0', '', 'http://i.play.163.com/?from=topnav01');
INSERT INTO `m_history` VALUES ('2122', '575', '1', '1523156009', '123', '', '0', '1', '0', '', '0', '', 'http://www.dayqkl.com');
INSERT INTO `m_history` VALUES ('2123', '576', '1', '1523156009', '68', '', '0', '1', '0', '', '0', '', 'http://www.pgyer.com/chaobi');
INSERT INTO `m_history` VALUES ('2124', '577', '1', '1523156009', '39', '', '0', '1', '0', '', '0', '', 'https://www.btc123.com/download');
INSERT INTO `m_history` VALUES ('2125', '578', '1', '1523156009', '197', '', '0', '1', '0', '', '0', '', 'https://dn-btckan.qbox.me/BitKan5503.apk');
INSERT INTO `m_history` VALUES ('2126', '578', '1', '1523156009', '20', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/app/bitcoin-kan/id1004852205?mt=8&ign-mpt=uo%3D4');
INSERT INTO `m_history` VALUES ('2127', '579', '1', '1523156009', '143', '', '0', '1', '0', '', '0', '', 'http://file.gongxiangcj.com/gxcj_v1.0.2.apk');
INSERT INTO `m_history` VALUES ('2128', '579', '1', '1523156009', '91', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/id1331483360');
INSERT INTO `m_history` VALUES ('2129', '393', '1', '1523157208', '138', '', '0', '1', '0', '', '0', '', 'https://m.jinse.com/app');
INSERT INTO `m_history` VALUES ('2139', '394', '1', '1523157282', '95', '', '0', '2', '0', '', '0', '', 'https://www.btc123.com/download');
INSERT INTO `m_history` VALUES ('2113', '568', '1', '1523156009', '185', '', '0', '2', '0', '', '0', '', 'http://a.app.qq.com/o/simple.jsp?pkgname=com.blockmeta.bbs&fromcase=40003');
INSERT INTO `m_history` VALUES ('2114', '569', '1', '1523156009', '22', '', '0', '1', '0', '', '0', '', 'http://www.walian.cn/download');
INSERT INTO `m_history` VALUES ('2115', '570', '1', '1523156009', '165', '', '0', '1', '0', '', '0', '', 'http://lianxiangfiles.oss-cn-beijing.aliyuncs.com/app/lianxiangcaijing.apk');
INSERT INTO `m_history` VALUES ('2116', '570', '1', '1523156009', '166', '', '0', '2', '0', '', '0', '', 'https://itunes.apple.com/cn/app/id1331483360');
INSERT INTO `m_history` VALUES ('2117', '571', '1', '1523156009', '197', '', '0', '1', '0', '', '0', '', 'http://blocknews.io/misc.php?mod=mobile');
INSERT INTO `m_history` VALUES ('2118', '571', '1', '1523156009', '48', '', '0', '2', '0', '', '0', '', 'http://www.discuz.net/mobile.php?platform=ios');
INSERT INTO `m_history` VALUES ('2160', '401', '1', '1523157282', '89', '', '0', '1', '0', '', '0', '', 'https://static.yaofache.com/yfc/app/yfc_az_1.0.0.apk');
INSERT INTO `m_history` VALUES ('2161', '402', '1', '1523157282', '181', '', '0', '1', '0', '', '0', '', 'https://po.im/android/android.html');
INSERT INTO `m_history` VALUES ('2162', '405', '1', '1523157282', '159', '', '0', '1', '0', '', '0', '', 'https://www.dabtc.com/app.php');
INSERT INTO `m_history` VALUES ('2163', '386', '1', '1523157282', '171', '', '0', '1', '0', '', '0', '', 'https://dn-btckan.qbox.me/BitKan5503.apk');
INSERT INTO `m_history` VALUES ('2164', '395', '1', '1523157282', '180', '', '0', '1', '0', '', '0', '', 'https://www.btctrade.com/upload/app/trade.apk');

-- ----------------------------
-- Table structure for m_history_2
-- ----------------------------
DROP TABLE IF EXISTS `m_history_2`;
CREATE TABLE `m_history_2` (
  `history_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'app下载id',
  `app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用ID',
  `history_version` varchar(500) NOT NULL DEFAULT '' COMMENT '版本号',
  `history_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `history_size` varchar(500) NOT NULL DEFAULT '' COMMENT '程序大小',
  `history_system` varchar(500) NOT NULL DEFAULT '' COMMENT '系统要求',
  `data_history_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心下载ID',
  `history_type` int(11) NOT NULL DEFAULT '0' COMMENT '应用类型 1 android，2 苹果',
  `history_minSdkVersion` int(10) NOT NULL DEFAULT '0' COMMENT '要求的android的最低版本',
  `history_package` varchar(64) NOT NULL DEFAULT '' COMMENT 'android的包名',
  `history_VersionCode` int(10) NOT NULL DEFAULT '0' COMMENT '包的开发版本',
  `history_permission` text NOT NULL COMMENT 'permission',
  `history_file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文件路径',
  PRIMARY KEY (`history_id`),
  KEY `app_id` (`app_id`),
  KEY `appcms_history_id` (`data_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2110 DEFAULT CHARSET=utf8 COMMENT='应用历史版本表';

-- ----------------------------
-- Records of m_history_2
-- ----------------------------
INSERT INTO `m_history_2` VALUES ('1844', '827', '1', '1522809671', '13', '', '0', '1', '0', '', '0', '', 'https://www.feixiaohao.com/app/');
INSERT INTO `m_history_2` VALUES ('1845', '827', '1', '1522809671', '167', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/app/');
INSERT INTO `m_history_2` VALUES ('1846', '828', '1', '1522809671', '20', '', '0', '1', '0', '', '0', '', 'http://www.bitkan.com/app');
INSERT INTO `m_history_2` VALUES ('1847', '828', '1', '1522809671', '51', '', '0', '2', '0', '', '0', '', 'http://www.bitkan.com/app');
INSERT INTO `m_history_2` VALUES ('1848', '829', '1', '1522809671', '82', '', '0', '1', '0', '', '0', '', 'https://www.coincola.com/app/download');
INSERT INTO `m_history_2` VALUES ('1849', '829', '1', '1522809671', '78', '', '0', '2', '0', '', '0', '', 'https://www.coincola.com/app/download');
INSERT INTO `m_history_2` VALUES ('1850', '830', '1', '1522809671', '62', '', '0', '1', '0', '', '0', '', 'https://mytoken.io/');
INSERT INTO `m_history_2` VALUES ('1851', '830', '1', '1522809671', '137', '', '0', '2', '0', '', '0', '', 'https://mytoken.io/');
INSERT INTO `m_history_2` VALUES ('1852', '831', '1', '1522809671', '87', '', '0', '1', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history_2` VALUES ('1853', '831', '1', '1522809671', '175', '', '0', '2', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history_2` VALUES ('1854', '832', '1', '1522809671', '40', '', '0', '1', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history_2` VALUES ('1855', '832', '1', '1522809671', '49', '', '0', '2', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history_2` VALUES ('1856', '833', '1', '1522809671', '30', '', '0', '1', '0', '', '0', '', 'https://www.bitane.io/');
INSERT INTO `m_history_2` VALUES ('1857', '833', '1', '1522809671', '110', '', '0', '2', '0', '', '0', '', 'https://www.bitane.io/');
INSERT INTO `m_history_2` VALUES ('1858', '834', '1', '1522809671', '89', '', '0', '1', '0', '', '0', '', 'http://tokenclub.com/#/');
INSERT INTO `m_history_2` VALUES ('1859', '834', '1', '1522809671', '151', '', '0', '2', '0', '', '0', '', 'http://tokenclub.com/#/');
INSERT INTO `m_history_2` VALUES ('1860', '835', '1', '1522809671', '83', '', '0', '1', '0', '', '0', '', 'http://download.8btc.com/#page1');
INSERT INTO `m_history_2` VALUES ('1861', '835', '1', '1522809671', '66', '', '0', '2', '0', '', '0', '', 'http://download.8btc.com/#page1');
INSERT INTO `m_history_2` VALUES ('1862', '836', '1', '1522809671', '178', '', '0', '1', '0', '', '0', '', 'https://www.btc123.com/download');
INSERT INTO `m_history_2` VALUES ('1863', '836', '1', '1522809671', '125', '', '0', '2', '0', '', '0', '', 'https://www.btc123.com/download');
INSERT INTO `m_history_2` VALUES ('1864', '837', '1', '1522809671', '99', '', '0', '1', '0', '', '0', '', 'https://www.btctrade.com/index/app/');
INSERT INTO `m_history_2` VALUES ('1865', '837', '1', '1522809671', '101', '', '0', '2', '0', '', '0', '', 'https://www.btctrade.com/index/app/');
INSERT INTO `m_history_2` VALUES ('1866', '838', '1', '1522809671', '93', '', '0', '1', '0', '', '0', '', 'https://www.coldlar.com/download');
INSERT INTO `m_history_2` VALUES ('1867', '838', '1', '1522809671', '28', '', '0', '2', '0', '', '0', '', 'https://www.coldlar.com/download');
INSERT INTO `m_history_2` VALUES ('1868', '839', '1', '1522809671', '65', '', '0', '1', '0', '', '0', '', 'https://www.aicoin.net.cn/app');
INSERT INTO `m_history_2` VALUES ('1869', '839', '1', '1522809671', '162', '', '0', '2', '0', '', '0', '', 'https://www.aicoin.net.cn/app');
INSERT INTO `m_history_2` VALUES ('1870', '840', '1', '1522809671', '74', '', '0', '1', '0', '', '0', '', 'http://www.quintar.com/download/?from=erjiyemian');
INSERT INTO `m_history_2` VALUES ('1871', '840', '1', '1522809671', '144', '', '0', '2', '0', '', '0', '', 'http://www.quintar.com/download/?from=erjiyemian');
INSERT INTO `m_history_2` VALUES ('1872', '841', '1', '1522809671', '45', '', '0', '1', '0', '', '0', '', 'http://www.bishijie.com/app');
INSERT INTO `m_history_2` VALUES ('1873', '841', '1', '1522809671', '131', '', '0', '2', '0', '', '0', '', 'http://www.bishijie.com/app');
INSERT INTO `m_history_2` VALUES ('1874', '842', '1', '1522809671', '170', '', '0', '1', '0', '', '0', '', 'https://www.chainfor.com/app/index.html');
INSERT INTO `m_history_2` VALUES ('1875', '842', '1', '1522809671', '30', '', '0', '2', '0', '', '0', '', 'https://www.chainfor.com/app/index.html');
INSERT INTO `m_history_2` VALUES ('1876', '843', '1', '1522809671', '82', '', '0', '1', '0', '', '0', '', 'https://www.yaofache.com/app');
INSERT INTO `m_history_2` VALUES ('1877', '843', '1', '1522809671', '127', '', '0', '2', '0', '', '0', '', 'https://www.yaofache.com/app');
INSERT INTO `m_history_2` VALUES ('1878', '844', '1', '1522809671', '59', '', '0', '1', '0', '', '0', '', 'https://po.im/#/home');
INSERT INTO `m_history_2` VALUES ('1879', '844', '1', '1522809671', '35', '', '0', '2', '0', '', '0', '', 'https://po.im/#/home');
INSERT INTO `m_history_2` VALUES ('1880', '845', '1', '1522809671', '55', '', '0', '1', '0', '', '0', '', 'http://hht.one/#/');
INSERT INTO `m_history_2` VALUES ('1881', '845', '1', '1522809671', '171', '', '0', '2', '0', '', '0', '', 'http://hht.one/#/');
INSERT INTO `m_history_2` VALUES ('1882', '846', '1', '1522809671', '73', '', '0', '1', '0', '', '0', '', 'https://www.walian.cn/');
INSERT INTO `m_history_2` VALUES ('1883', '846', '1', '1522809671', '154', '', '0', '2', '0', '', '0', '', 'https://www.walian.cn/');
INSERT INTO `m_history_2` VALUES ('1884', '847', '1', '1522809671', '38', '', '0', '1', '0', '', '0', '', 'https://www.dabtc.com/index.php/home/index/appdown.html');
INSERT INTO `m_history_2` VALUES ('1885', '847', '1', '1522809671', '17', '', '0', '2', '0', '', '0', '', 'https://www.dabtc.com/index.php/home/index/appdown.html');
INSERT INTO `m_history_2` VALUES ('1886', '848', '1', '1522809671', '164', '', '0', '1', '0', '', '0', '', 'http://www.gongxiangcj.com/pc_download');
INSERT INTO `m_history_2` VALUES ('1887', '848', '1', '1522809671', '107', '', '0', '2', '0', '', '0', '', 'http://www.gongxiangcj.com/pc_download');
INSERT INTO `m_history_2` VALUES ('1888', '429', '1', '1522810922', '156', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/app/');
INSERT INTO `m_history_2` VALUES ('1889', '430', '1', '1522810922', '95', '', '0', '2', '0', '', '0', '', 'http://www.bitkan.com/app');
INSERT INTO `m_history_2` VALUES ('1890', '431', '1', '1522810922', '147', '', '0', '2', '0', '', '0', '', 'https://www.coincola.com/app/download');
INSERT INTO `m_history_2` VALUES ('1891', '432', '1', '1522810922', '21', '', '0', '2', '0', '', '0', '', 'https://mytoken.io/');
INSERT INTO `m_history_2` VALUES ('1892', '433', '1', '1522810922', '73', '', '0', '2', '0', '', '0', '', 'https://www.antpool.com/download.htm?m=tools');
INSERT INTO `m_history_2` VALUES ('1893', '434', '1', '1522810922', '35', '', '0', '2', '0', '', '0', '', 'https://pool.viabtc.com/activity/app/');
INSERT INTO `m_history_2` VALUES ('1894', '435', '1', '1522810922', '182', '', '0', '2', '0', '', '0', '', 'https://www.bitane.io/');
INSERT INTO `m_history_2` VALUES ('1895', '436', '1', '1522810922', '199', '', '0', '2', '0', '', '0', '', 'http://tokenclub.com/#/');
INSERT INTO `m_history_2` VALUES ('1896', '437', '1', '1522810922', '62', '', '0', '2', '0', '', '0', '', 'http://download.8btc.com/#page1');
INSERT INTO `m_history_2` VALUES ('1897', '438', '1', '1522810922', '120', '', '0', '2', '0', '', '0', '', 'https://www.btc123.com/download');
INSERT INTO `m_history_2` VALUES ('1898', '439', '1', '1522810922', '145', '', '0', '2', '0', '', '0', '', 'https://www.btctrade.com/index/app/');
INSERT INTO `m_history_2` VALUES ('1899', '440', '1', '1522810922', '157', '', '0', '2', '0', '', '0', '', 'https://www.coldlar.com/download');
INSERT INTO `m_history_2` VALUES ('1900', '441', '1', '1522810922', '166', '', '0', '2', '0', '', '0', '', 'https://www.aicoin.net.cn/app');
INSERT INTO `m_history_2` VALUES ('1901', '442', '1', '1522810922', '115', '', '0', '2', '0', '', '0', '', 'http://www.quintar.com/download/?from=erjiyemian');
INSERT INTO `m_history_2` VALUES ('1902', '443', '1', '1522810922', '14', '', '0', '2', '0', '', '0', '', 'http://www.bishijie.com/app');
INSERT INTO `m_history_2` VALUES ('1903', '444', '1', '1522810922', '149', '', '0', '2', '0', '', '0', '', 'https://www.chainfor.com/app/index.html');
INSERT INTO `m_history_2` VALUES ('1904', '445', '1', '1522810922', '54', '', '0', '2', '0', '', '0', '', 'https://www.yaofache.com/app');
INSERT INTO `m_history_2` VALUES ('1905', '446', '1', '1522810922', '163', '', '0', '2', '0', '', '0', '', 'https://po.im/#/home');
INSERT INTO `m_history_2` VALUES ('1906', '447', '1', '1522810922', '93', '', '0', '2', '0', '', '0', '', 'http://hht.one/#/');
INSERT INTO `m_history_2` VALUES ('1907', '448', '1', '1522810922', '74', '', '0', '2', '0', '', '0', '', 'https://www.walian.cn/');
INSERT INTO `m_history_2` VALUES ('1908', '449', '1', '1522810922', '111', '', '0', '2', '0', '', '0', '', 'https://www.dabtc.com/index.php/home/index/appdown.html');
INSERT INTO `m_history_2` VALUES ('1909', '450', '1', '1522810922', '130', '', '0', '2', '0', '', '0', '', 'http://www.gongxiangcj.com/pc_download');
INSERT INTO `m_history_2` VALUES ('1910', '452', '1', '1522826029', '50', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin/');
INSERT INTO `m_history_2` VALUES ('1911', '453', '1', '1522826029', '188', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum/');
INSERT INTO `m_history_2` VALUES ('1912', '454', '1', '1522826029', '127', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ripple/');
INSERT INTO `m_history_2` VALUES ('1913', '455', '1', '1522826029', '58', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-cash/');
INSERT INTO `m_history_2` VALUES ('1914', '456', '1', '1522826029', '75', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/litecoin/');
INSERT INTO `m_history_2` VALUES ('1915', '457', '1', '1522826029', '35', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/eos/');
INSERT INTO `m_history_2` VALUES ('1916', '458', '1', '1522826029', '36', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stellar/');
INSERT INTO `m_history_2` VALUES ('1917', '459', '1', '1522826029', '107', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cardano/');
INSERT INTO `m_history_2` VALUES ('1918', '460', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neo/');
INSERT INTO `m_history_2` VALUES ('1919', '461', '1', '1522826029', '20', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/iota/');
INSERT INTO `m_history_2` VALUES ('1920', '462', '1', '1522826029', '116', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monero/');
INSERT INTO `m_history_2` VALUES ('1921', '463', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dash/');
INSERT INTO `m_history_2` VALUES ('1922', '464', '1', '1522826029', '51', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tether/');
INSERT INTO `m_history_2` VALUES ('1923', '465', '1', '1522826029', '121', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tron/');
INSERT INTO `m_history_2` VALUES ('1924', '466', '1', '1522826029', '197', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nem/');
INSERT INTO `m_history_2` VALUES ('1925', '467', '1', '1522826029', '23', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/binance-coin/');
INSERT INTO `m_history_2` VALUES ('1926', '468', '1', '1522826029', '85', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum-classic/');
INSERT INTO `m_history_2` VALUES ('1927', '469', '1', '1522826029', '151', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vechain/');
INSERT INTO `m_history_2` VALUES ('1928', '470', '1', '1522826029', '83', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qtum/');
INSERT INTO `m_history_2` VALUES ('1929', '471', '1', '1522826029', '57', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/verge/');
INSERT INTO `m_history_2` VALUES ('1930', '472', '1', '1522826029', '15', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/lisk/');
INSERT INTO `m_history_2` VALUES ('1931', '473', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/omisego/');
INSERT INTO `m_history_2` VALUES ('1932', '474', '1', '1522826029', '31', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/icon/');
INSERT INTO `m_history_2` VALUES ('1933', '475', '1', '1522826029', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/raiblocks/');
INSERT INTO `m_history_2` VALUES ('1934', '476', '1', '1522826029', '162', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-gold/');
INSERT INTO `m_history_2` VALUES ('1935', '477', '1', '1522826029', '47', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcash/');
INSERT INTO `m_history_2` VALUES ('1936', '478', '1', '1522826029', '150', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/steem/');
INSERT INTO `m_history_2` VALUES ('1937', '479', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ht/');
INSERT INTO `m_history_2` VALUES ('1938', '480', '1', '1522826029', '29', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytom/');
INSERT INTO `m_history_2` VALUES ('1939', '481', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/populous/');
INSERT INTO `m_history_2` VALUES ('1940', '482', '1', '1522826029', '43', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digixdao/');
INSERT INTO `m_history_2` VALUES ('1941', '483', '1', '1522826029', '40', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytecoin-bcn/');
INSERT INTO `m_history_2` VALUES ('1942', '484', '1', '1522826029', '155', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitshares/');
INSERT INTO `m_history_2` VALUES ('1943', '485', '1', '1522826029', '200', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/waves/');
INSERT INTO `m_history_2` VALUES ('1944', '486', '1', '1522826029', '122', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stratis/');
INSERT INTO `m_history_2` VALUES ('1945', '487', '1', '1522826029', '12', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/siacoin/');
INSERT INTO `m_history_2` VALUES ('1946', '488', '1', '1522826029', '19', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/status/');
INSERT INTO `m_history_2` VALUES ('1947', '489', '1', '1522826029', '172', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/exchange-union/');
INSERT INTO `m_history_2` VALUES ('1948', '490', '1', '1522826029', '122', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aeternity/');
INSERT INTO `m_history_2` VALUES ('1949', '491', '1', '1522826029', '78', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dogecoin/');
INSERT INTO `m_history_2` VALUES ('1950', '492', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maker/');
INSERT INTO `m_history_2` VALUES ('1951', '493', '1', '1522826029', '178', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/0x/');
INSERT INTO `m_history_2` VALUES ('1952', '494', '1', '1522826029', '124', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/decred/');
INSERT INTO `m_history_2` VALUES ('1953', '495', '1', '1522826029', '172', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/augur/');
INSERT INTO `m_history_2` VALUES ('1954', '496', '1', '1522826029', '156', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/komodo/');
INSERT INTO `m_history_2` VALUES ('1955', '497', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zilliqa/');
INSERT INTO `m_history_2` VALUES ('1956', '498', '1', '1522826029', '200', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ardor/');
INSERT INTO `m_history_2` VALUES ('1957', '499', '1', '1522826029', '100', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/walton/');
INSERT INTO `m_history_2` VALUES ('1958', '500', '1', '1522826029', '90', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/veritaseum/');
INSERT INTO `m_history_2` VALUES ('1959', '501', '1', '1522826029', '143', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/hshare/');
INSERT INTO `m_history_2` VALUES ('1960', '502', '1', '1522826029', '152', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aion/');
INSERT INTO `m_history_2` VALUES ('1961', '503', '1', '1522826029', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ark/');
INSERT INTO `m_history_2` VALUES ('1962', '504', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/pivx/');
INSERT INTO `m_history_2` VALUES ('1963', '505', '1', '1522826029', '42', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/loopring/');
INSERT INTO `m_history_2` VALUES ('1964', '506', '1', '1522826029', '166', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cryptonex/');
INSERT INTO `m_history_2` VALUES ('1965', '507', '1', '1522826029', '160', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/basic-attention-token/');
INSERT INTO `m_history_2` VALUES ('1966', '508', '1', '1522826029', '55', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kcs/');
INSERT INTO `m_history_2` VALUES ('1967', '509', '1', '1522826029', '29', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qash/');
INSERT INTO `m_history_2` VALUES ('1968', '510', '1', '1522826029', '154', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monacoin/');
INSERT INTO `m_history_2` VALUES ('1969', '511', '1', '1522826029', '50', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digibyte/');
INSERT INTO `m_history_2` VALUES ('1970', '512', '1', '1522826029', '98', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/factom/');
INSERT INTO `m_history_2` VALUES ('1971', '513', '1', '1522826029', '89', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/elastos/');
INSERT INTO `m_history_2` VALUES ('1972', '514', '1', '1522826029', '70', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/golem-network-tokens/');
INSERT INTO `m_history_2` VALUES ('1973', '515', '1', '1522826029', '169', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gas/');
INSERT INTO `m_history_2` VALUES ('1974', '516', '1', '1522826029', '137', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gxshares/');
INSERT INTO `m_history_2` VALUES ('1975', '517', '1', '1522826029', '114', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitquence/');
INSERT INTO `m_history_2` VALUES ('1976', '518', '1', '1522826029', '151', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/revain/');
INSERT INTO `m_history_2` VALUES ('1977', '519', '1', '1522826029', '155', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/syscoin/');
INSERT INTO `m_history_2` VALUES ('1978', '520', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dragonchain/');
INSERT INTO `m_history_2` VALUES ('1979', '521', '1', '1522826029', '165', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nebulas/');
INSERT INTO `m_history_2` VALUES ('1980', '522', '1', '1522826029', '97', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/funfair/');
INSERT INTO `m_history_2` VALUES ('1981', '523', '1', '1522826029', '154', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kyber-network/');
INSERT INTO `m_history_2` VALUES ('1982', '524', '1', '1522826029', '130', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcoin/');
INSERT INTO `m_history_2` VALUES ('1983', '525', '1', '1522826029', '145', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storm/');
INSERT INTO `m_history_2` VALUES ('1984', '526', '1', '1522826029', '184', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/electroneum/');
INSERT INTO `m_history_2` VALUES ('1985', '527', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/reddcoin/');
INSERT INTO `m_history_2` VALUES ('1986', '528', '1', '1522826030', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/substratum/');
INSERT INTO `m_history_2` VALUES ('1987', '529', '1', '1522826030', '177', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kin/');
INSERT INTO `m_history_2` VALUES ('1988', '530', '1', '1522826030', '13', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nxt/');
INSERT INTO `m_history_2` VALUES ('1989', '531', '1', '1522826030', '96', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/salt/');
INSERT INTO `m_history_2` VALUES ('1990', '532', '1', '1522826030', '91', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maidsafecoin/');
INSERT INTO `m_history_2` VALUES ('1991', '533', '1', '1522826030', '93', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/power-ledger/');
INSERT INTO `m_history_2` VALUES ('1992', '534', '1', '1522826030', '112', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/byteball/');
INSERT INTO `m_history_2` VALUES ('1993', '535', '1', '1522826030', '153', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dent/');
INSERT INTO `m_history_2` VALUES ('1994', '536', '1', '1522826030', '166', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/enigma-project/');
INSERT INTO `m_history_2` VALUES ('1995', '537', '1', '1522826030', '163', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storj/');
INSERT INTO `m_history_2` VALUES ('1996', '538', '1', '1522826030', '63', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/request-network/');
INSERT INTO `m_history_2` VALUES ('1997', '539', '1', '1522826030', '55', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neblio/');
INSERT INTO `m_history_2` VALUES ('1998', '540', '1', '1522826030', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/chainlink/');
INSERT INTO `m_history_2` VALUES ('1999', '541', '1', '1522826030', '18', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/skycoin/');
INSERT INTO `m_history_2` VALUES ('2000', '542', '1', '1522826030', '107', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bancor/');
INSERT INTO `m_history_2` VALUES ('2001', '543', '1', '1522826030', '78', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tenx/');
INSERT INTO `m_history_2` VALUES ('2002', '544', '1', '1522826030', '176', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/emercoin/');
INSERT INTO `m_history_2` VALUES ('2003', '545', '1', '1522826030', '120', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dropil/');
INSERT INTO `m_history_2` VALUES ('2004', '546', '1', '1522826030', '73', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dentacoin/');
INSERT INTO `m_history_2` VALUES ('2005', '547', '1', '1522826030', '77', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/genaro/');
INSERT INTO `m_history_2` VALUES ('2006', '548', '1', '1522826030', '35', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/particl/');
INSERT INTO `m_history_2` VALUES ('2007', '549', '1', '1522826030', '70', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cindicator/');
INSERT INTO `m_history_2` VALUES ('2008', '550', '1', '1522826030', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/achain/');
INSERT INTO `m_history_2` VALUES ('2009', '551', '1', '1522826030', '197', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vertcoin/');
INSERT INTO `m_history_2` VALUES ('2010', '452', '1', '1522826029', '50', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin/');
INSERT INTO `m_history_2` VALUES ('2011', '453', '1', '1522826029', '188', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum/');
INSERT INTO `m_history_2` VALUES ('2012', '454', '1', '1522826029', '127', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ripple/');
INSERT INTO `m_history_2` VALUES ('2013', '455', '1', '1522826029', '58', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-cash/');
INSERT INTO `m_history_2` VALUES ('2014', '456', '1', '1522826029', '75', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/litecoin/');
INSERT INTO `m_history_2` VALUES ('2015', '457', '1', '1522826029', '35', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/eos/');
INSERT INTO `m_history_2` VALUES ('2016', '458', '1', '1522826029', '36', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stellar/');
INSERT INTO `m_history_2` VALUES ('2017', '459', '1', '1522826029', '107', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cardano/');
INSERT INTO `m_history_2` VALUES ('2018', '460', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neo/');
INSERT INTO `m_history_2` VALUES ('2019', '461', '1', '1522826029', '20', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/iota/');
INSERT INTO `m_history_2` VALUES ('2020', '462', '1', '1522826029', '116', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monero/');
INSERT INTO `m_history_2` VALUES ('2021', '463', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dash/');
INSERT INTO `m_history_2` VALUES ('2022', '464', '1', '1522826029', '51', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tether/');
INSERT INTO `m_history_2` VALUES ('2023', '465', '1', '1522826029', '121', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tron/');
INSERT INTO `m_history_2` VALUES ('2024', '466', '1', '1522826029', '197', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nem/');
INSERT INTO `m_history_2` VALUES ('2025', '467', '1', '1522826029', '23', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/binance-coin/');
INSERT INTO `m_history_2` VALUES ('2026', '468', '1', '1522826029', '85', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ethereum-classic/');
INSERT INTO `m_history_2` VALUES ('2027', '469', '1', '1522826029', '151', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vechain/');
INSERT INTO `m_history_2` VALUES ('2028', '470', '1', '1522826029', '83', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qtum/');
INSERT INTO `m_history_2` VALUES ('2029', '471', '1', '1522826029', '57', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/verge/');
INSERT INTO `m_history_2` VALUES ('2030', '472', '1', '1522826029', '15', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/lisk/');
INSERT INTO `m_history_2` VALUES ('2031', '473', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/omisego/');
INSERT INTO `m_history_2` VALUES ('2032', '474', '1', '1522826029', '31', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/icon/');
INSERT INTO `m_history_2` VALUES ('2033', '475', '1', '1522826029', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/raiblocks/');
INSERT INTO `m_history_2` VALUES ('2034', '476', '1', '1522826029', '162', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitcoin-gold/');
INSERT INTO `m_history_2` VALUES ('2035', '477', '1', '1522826029', '47', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcash/');
INSERT INTO `m_history_2` VALUES ('2036', '478', '1', '1522826029', '150', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/steem/');
INSERT INTO `m_history_2` VALUES ('2037', '479', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ht/');
INSERT INTO `m_history_2` VALUES ('2038', '480', '1', '1522826029', '29', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytom/');
INSERT INTO `m_history_2` VALUES ('2039', '481', '1', '1522826029', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/populous/');
INSERT INTO `m_history_2` VALUES ('2040', '482', '1', '1522826029', '43', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digixdao/');
INSERT INTO `m_history_2` VALUES ('2041', '483', '1', '1522826029', '40', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bytecoin-bcn/');
INSERT INTO `m_history_2` VALUES ('2042', '484', '1', '1522826029', '155', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitshares/');
INSERT INTO `m_history_2` VALUES ('2043', '485', '1', '1522826029', '200', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/waves/');
INSERT INTO `m_history_2` VALUES ('2044', '486', '1', '1522826029', '122', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/stratis/');
INSERT INTO `m_history_2` VALUES ('2045', '487', '1', '1522826029', '12', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/siacoin/');
INSERT INTO `m_history_2` VALUES ('2046', '488', '1', '1522826029', '19', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/status/');
INSERT INTO `m_history_2` VALUES ('2047', '489', '1', '1522826029', '172', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/exchange-union/');
INSERT INTO `m_history_2` VALUES ('2048', '490', '1', '1522826029', '122', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aeternity/');
INSERT INTO `m_history_2` VALUES ('2049', '491', '1', '1522826029', '78', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dogecoin/');
INSERT INTO `m_history_2` VALUES ('2050', '492', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maker/');
INSERT INTO `m_history_2` VALUES ('2051', '493', '1', '1522826029', '178', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/0x/');
INSERT INTO `m_history_2` VALUES ('2052', '494', '1', '1522826029', '124', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/decred/');
INSERT INTO `m_history_2` VALUES ('2053', '495', '1', '1522826029', '172', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/augur/');
INSERT INTO `m_history_2` VALUES ('2054', '496', '1', '1522826029', '156', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/komodo/');
INSERT INTO `m_history_2` VALUES ('2055', '497', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zilliqa/');
INSERT INTO `m_history_2` VALUES ('2056', '498', '1', '1522826029', '200', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ardor/');
INSERT INTO `m_history_2` VALUES ('2057', '499', '1', '1522826029', '100', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/walton/');
INSERT INTO `m_history_2` VALUES ('2058', '500', '1', '1522826029', '90', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/veritaseum/');
INSERT INTO `m_history_2` VALUES ('2059', '501', '1', '1522826029', '143', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/hshare/');
INSERT INTO `m_history_2` VALUES ('2060', '502', '1', '1522826029', '152', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/aion/');
INSERT INTO `m_history_2` VALUES ('2061', '503', '1', '1522826029', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/ark/');
INSERT INTO `m_history_2` VALUES ('2062', '504', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/pivx/');
INSERT INTO `m_history_2` VALUES ('2063', '505', '1', '1522826029', '42', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/loopring/');
INSERT INTO `m_history_2` VALUES ('2064', '506', '1', '1522826029', '166', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cryptonex/');
INSERT INTO `m_history_2` VALUES ('2065', '507', '1', '1522826029', '160', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/basic-attention-token/');
INSERT INTO `m_history_2` VALUES ('2066', '508', '1', '1522826029', '55', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kcs/');
INSERT INTO `m_history_2` VALUES ('2067', '509', '1', '1522826029', '29', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/qash/');
INSERT INTO `m_history_2` VALUES ('2068', '510', '1', '1522826029', '154', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/monacoin/');
INSERT INTO `m_history_2` VALUES ('2069', '511', '1', '1522826029', '50', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/digibyte/');
INSERT INTO `m_history_2` VALUES ('2070', '512', '1', '1522826029', '98', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/factom/');
INSERT INTO `m_history_2` VALUES ('2071', '513', '1', '1522826029', '89', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/elastos/');
INSERT INTO `m_history_2` VALUES ('2072', '514', '1', '1522826029', '70', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/golem-network-tokens/');
INSERT INTO `m_history_2` VALUES ('2073', '515', '1', '1522826029', '169', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gas/');
INSERT INTO `m_history_2` VALUES ('2074', '516', '1', '1522826029', '137', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/gxshares/');
INSERT INTO `m_history_2` VALUES ('2075', '517', '1', '1522826029', '114', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bitquence/');
INSERT INTO `m_history_2` VALUES ('2076', '518', '1', '1522826029', '151', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/revain/');
INSERT INTO `m_history_2` VALUES ('2077', '519', '1', '1522826029', '155', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/syscoin/');
INSERT INTO `m_history_2` VALUES ('2078', '520', '1', '1522826029', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dragonchain/');
INSERT INTO `m_history_2` VALUES ('2079', '521', '1', '1522826029', '165', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nebulas/');
INSERT INTO `m_history_2` VALUES ('2080', '522', '1', '1522826029', '97', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/funfair/');
INSERT INTO `m_history_2` VALUES ('2081', '523', '1', '1522826029', '154', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kyber-network/');
INSERT INTO `m_history_2` VALUES ('2082', '524', '1', '1522826029', '130', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/zcoin/');
INSERT INTO `m_history_2` VALUES ('2083', '525', '1', '1522826029', '145', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storm/');
INSERT INTO `m_history_2` VALUES ('2084', '526', '1', '1522826029', '184', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/electroneum/');
INSERT INTO `m_history_2` VALUES ('2085', '527', '1', '1522826029', '99', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/reddcoin/');
INSERT INTO `m_history_2` VALUES ('2086', '528', '1', '1522826030', '185', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/substratum/');
INSERT INTO `m_history_2` VALUES ('2087', '529', '1', '1522826030', '177', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/kin/');
INSERT INTO `m_history_2` VALUES ('2088', '530', '1', '1522826030', '13', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/nxt/');
INSERT INTO `m_history_2` VALUES ('2089', '531', '1', '1522826030', '96', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/salt/');
INSERT INTO `m_history_2` VALUES ('2090', '532', '1', '1522826030', '91', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/maidsafecoin/');
INSERT INTO `m_history_2` VALUES ('2091', '533', '1', '1522826030', '93', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/power-ledger/');
INSERT INTO `m_history_2` VALUES ('2092', '534', '1', '1522826030', '112', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/byteball/');
INSERT INTO `m_history_2` VALUES ('2093', '535', '1', '1522826030', '153', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dent/');
INSERT INTO `m_history_2` VALUES ('2094', '536', '1', '1522826030', '166', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/enigma-project/');
INSERT INTO `m_history_2` VALUES ('2095', '537', '1', '1522826030', '163', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/storj/');
INSERT INTO `m_history_2` VALUES ('2096', '538', '1', '1522826030', '63', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/request-network/');
INSERT INTO `m_history_2` VALUES ('2097', '539', '1', '1522826030', '55', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/neblio/');
INSERT INTO `m_history_2` VALUES ('2098', '540', '1', '1522826030', '125', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/chainlink/');
INSERT INTO `m_history_2` VALUES ('2099', '541', '1', '1522826030', '18', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/skycoin/');
INSERT INTO `m_history_2` VALUES ('2100', '542', '1', '1522826030', '107', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/bancor/');
INSERT INTO `m_history_2` VALUES ('2101', '543', '1', '1522826030', '78', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/tenx/');
INSERT INTO `m_history_2` VALUES ('2102', '544', '1', '1522826030', '176', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/emercoin/');
INSERT INTO `m_history_2` VALUES ('2103', '545', '1', '1522826030', '120', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dropil/');
INSERT INTO `m_history_2` VALUES ('2104', '546', '1', '1522826030', '73', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/dentacoin/');
INSERT INTO `m_history_2` VALUES ('2105', '547', '1', '1522826030', '77', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/genaro/');
INSERT INTO `m_history_2` VALUES ('2106', '548', '1', '1522826030', '35', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/particl/');
INSERT INTO `m_history_2` VALUES ('2107', '549', '1', '1522826030', '70', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/cindicator/');
INSERT INTO `m_history_2` VALUES ('2108', '550', '1', '1522826030', '69', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/achain/');
INSERT INTO `m_history_2` VALUES ('2109', '551', '1', '1522826030', '197', '', '0', '2', '0', '', '0', '', 'https://www.feixiaohao.com/currencies/vertcoin/');

-- ----------------------------
-- Table structure for m_image_local
-- ----------------------------
DROP TABLE IF EXISTS `m_image_local`;
CREATE TABLE `m_image_local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片本地化应用列表';

-- ----------------------------
-- Records of m_image_local
-- ----------------------------

-- ----------------------------
-- Table structure for m_import
-- ----------------------------
DROP TABLE IF EXISTS `m_import`;
CREATE TABLE `m_import` (
  `info_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资讯id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `info_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `info_stitle` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'SEO标题',
  `info_img` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `info_desc` varchar(500) NOT NULL DEFAULT '' COMMENT '摘要',
  `info_body` text COMMENT '详情',
  `info_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `info_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `info_from` varchar(500) NOT NULL DEFAULT '' COMMENT '来源',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `info_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `info_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `info_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `info_url` varchar(500) NOT NULL DEFAULT '' COMMENT '外部URL',
  `info_publish_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `info_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `info_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  `info_status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `gather_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gather_id` int(10) unsigned NOT NULL,
  `info_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '作者',
  PRIMARY KEY (`info_id`),
  KEY `cate_update_time` (`last_cate_id`,`info_update_time`),
  KEY `cate_order` (`last_cate_id`,`info_order`),
  KEY `cate_visitor` (`last_cate_id`,`info_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `info_update_time` (`info_update_time`),
  KEY `info_order` (`info_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资讯表';

-- ----------------------------
-- Records of m_import
-- ----------------------------

-- ----------------------------
-- Table structure for m_info
-- ----------------------------
DROP TABLE IF EXISTS `m_info`;
CREATE TABLE `m_info` (
  `info_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资讯id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `info_title` varchar(500) NOT NULL DEFAULT '' COMMENT '标题',
  `info_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `info_img` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `info_desc` varchar(500) NOT NULL DEFAULT '' COMMENT '摘要',
  `info_body` text COMMENT '详情',
  `info_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `info_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `info_from` varchar(500) NOT NULL DEFAULT '' COMMENT '来源',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `info_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `info_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `info_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `info_url` varchar(500) NOT NULL DEFAULT '' COMMENT '外部URL',
  `info_publish_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `info_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `info_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  `info_status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `info_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  PRIMARY KEY (`info_id`),
  KEY `cate_update_time` (`last_cate_id`,`info_update_time`),
  KEY `cate_order` (`last_cate_id`,`info_order`),
  KEY `cate_visitor` (`last_cate_id`,`info_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `info_update_time` (`info_update_time`),
  KEY `info_order` (`info_order`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='资讯表';

-- ----------------------------
-- Records of m_info
-- ----------------------------
INSERT INTO `m_info` VALUES ('24', '4', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '/uploads/images/85305dd32d773d6ba6f5a212ae9ea4f9.jpg', '', '<p>　2015年欧洲男子篮球锦标赛，德国队对阵西班牙队之前获得1胜3负的战绩，只有赢下这场比赛才有出现的机会。可惜最终事与愿违，德国队遗憾落败，为本届欧洲男子篮球锦标赛画上并不完美的句号。最温情的画面莫过于最终结束时，属于德克·诺维茨基的时刻。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　德国对西班牙的男篮欧锦赛小组赛结束后，当诺维茨基转身走回赛场中间，他立刻得到了全场观众的鼓掌欢呼，诺天王向四周观众席几次挥手、鞠躬，作为一名土生土长的德国人，诺维茨基在主场球迷的欢呼声中，情不自禁流下了激动的泪水，最后用球衣拭去脸上的泪水，消失在球员通道。这也许是37岁的老男孩最后一次身披德国国家队队服出战，泪洒球场诉说这位德国英雄的传奇生涯。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　“感谢大家这一周时间的支持，感谢你们赠与我一场伟大的告别。”诺维茨基赛后在社交网络上这样写道，“这个时刻我永生不忘，对我而言这始终是一份荣耀。”诺维茨基为了欧锦赛如此卖力备战，而他在国家队中的核心地位也已让给了老鹰队后卫施罗德。对阵西班牙的比赛中，诺维茨基在西班牙队米罗蒂奇的贴身盯防下无所适从，但他依然能在最后时刻命中关键球，带领球队奋起反击。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　如今在球队中已不再是头号得分手，但诺维茨基绝对是球队的精神领袖，他在国家队中经历的一切，足以成为一笔宝贵的精神财富。“他是一位伟大的运动员，也是一位实现伟大梦想的德国人。”德国总理默克尔曾这样评价诺维茨基，“篮球并不是德国最受欢迎的运动，但他让更多人热爱上篮球，这是值得被赞扬的。”</p>\r\n', '', '1522308507', '1442199952', '', '1', '0', '1', '0', '', '0', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '1', '');
INSERT INTO `m_info` VALUES ('25', '3', '打造完美恋人 《正妹物语》女友养成记', '', '/uploads/images/1a9d1be095b99a701a6905aeb253decb.jpg', '', '<p>“夏天夏天悄悄过去留下小秘密 压心底 压心底 不能告诉你~晚风吹过温暖我心底 我又想起你 多甜蜜 多甜蜜 怎能忘记~”哈哈，夏天就剩下一个小尾巴了，你的粉红色记忆找到了吗?没有到话就来《正妹物语》看看吧，好多好多漂亮可爱的萌妹子都在这等着你哦~</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　由深圳微讯移通独家代理的真人女友恋爱养成手游《正妹物语》手把手教你泡正妹，各色女神任君挑选，性感魅惑、清纯可人、温柔体贴、妩媚动人...只要你要，只要我有。养成完美恋人，百变女神给你前所未有的恋爱新体验，夏日脱单ing~</p>\r\n\r\n<p>　　天气正慢慢褪去燥热，但玩家们的热情却持续上升，为了和女神交盆友，大家也是蛮拼的~好吧，为了回馈众男神，《正妹物语》又要出大招了，这一发的大招绝对甜到你心里!!</p>\r\n\r\n<p>　　没有错!又有新女神要来做你们的女朋友啦!高不高兴，期不期待，嗨不嗨!世界都变美好了对不对!哈哈，这次新版本即将上线的妹纸到底是个什么类型的女神呢?小编表示，这次的妹子绝对是所有男性无法抗拒的诱惑，想要吗><</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　新鲜的女神就像多汁的水蜜桃一样诱人，但是想吃到可不是那么容易的事情哦~耐心等待吧，新版本上线之日，就是迎娶女神之时，后宫妹子那么多，可都要好好安抚哟~除此之外，《正妹物语》公测即将开启，到时候又有一大波惊喜等着大家咯，鸡血打起来，人生巅峰就要来啦!!</p>\r\n\r\n<p>　　快来《正妹物语》领个女友回家养着吧，会撒娇会卖萌长得漂亮身材巨棒，女神将临，你准备好了吗~</p>\r\n', '', '1522308512', '1442200092', '', '1', '0', '2', '0', '', '0', '', '', '1', '');
INSERT INTO `m_info` VALUES ('26', '4', '决战魔窟 《魔力时代》英魂圣能之战', '', '/uploads/images/5629ce19148e206df0a61705856dbb83.jpg', '', '<p>《魔力时代》常用的游戏资源除了金币和钻石之外，还有英魂和圣能。《魔力时代》中没有“穷人”，只有不努力获取资源的人。所有你所需要的资源，你都可以通过在游戏攻打副本或者其他玩法来获取，英魂和圣能也是如此，勇者们快到深渊魔窟中战斗，抢夺英魂和圣能吧!</p>\r\n', '', '1522308291', '1442200229', '', '1', '0', '0', '0', '', '1522308330', '', '', '2', '');
INSERT INTO `m_info` VALUES ('23', '2', '《全民飞机大战》太阳级新战机嫦娥测评', '《全民飞机大战》太阳级新战机嫦娥测评', '/uploads/images/b4a154d9ca9a790098c898dfaf51fe55.jpg', '', '<p>《全民飞机大战》宠物革新时代降临，神级皇冠宠物纷纷登场，掀起合宠热潮!此次，神宠版本再添惊喜，拥有更强属性、更全面技能的太阳战机——嫦娥强势上架商城!首款太阳战机会有怎样的表现?小编带大家一起揭晓!</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥满级属性：</p>\r\n\r\n<p>　　品质：三太阳</p>\r\n\r\n<p>　　生命值：1600</p>\r\n\r\n<p>　　攻击力：2180</p>\r\n\r\n<p>　　攻击速度：250</p>\r\n\r\n<p>　　战机技能：</p>\r\n\r\n<p>　　【弦乐之舞】：每损失300生命(双打模式为600)时舞蹈弦乐之舞将屏幕内的敌机变成伴舞的兔子，兔子移动速度降低，停止发射子弹，舞蹈时流转的圆刃秒杀周围敌机，并对boss或首领造成伤害，持续8秒，释放期间嫦娥免伤。技能开始与结束时均造成清屏爆炸，累积最高造成1000000伤害。</p>\r\n\r\n<p>　　【圆月之舞】：主动使用后与友机同时进入免伤状态，并召唤出共同控制的灵体舞蹈圆月之舞将屏幕内的敌机变成伴舞的兔子，兔子移动速度降低，停止发射子弹，期间对全屏敌机造成伤害，舞蹈时流转的圆刃秒杀周围的敌机，并对boss或首领造成伤害，持续12秒。技能释放前后均造成清屏爆炸，累积最高造成1600000伤害。冷却时间300秒。</p>\r\n\r\n<p>　　【月轮斩】：每秒发射2个圆刃，共造成5000伤害。</p>\r\n\r\n<p>　　【月华冰心】：击杀boss或首领回血320点，并且最终结算时，击杀boss或首领的基础得分加成160%，友机基础得分加成80%。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥不愧为帝俊之女、后羿之妻，不仅貌美非凡，实力也不容小觑。作为《全民飞机大战》首架太阳级战机，嫦娥的等级可升至100，攻击速度为战机最高水平，满级攻击力与生命力也远超月亮级战机登上顶峰。如此娇艳美人、如此强势属性，定会迎来新一轮购机狂潮!</p>\r\n\r\n<p>　　而更为逆天的则是嫦娥的技能设定，不仅实用强力，在弹幕和技能释放的视觉效果上也是绝佳!嫦娥拥有四项技能，且有三项技能都为双打模式做了特别设计。“月华冰心”不仅拥有得分加成，击杀boss还可回血，增强战机续航能力;配合“弦乐之舞”这一华丽的损血技能，所有敌机都变成人畜无害的兔子，嫦娥挥舞圆刃瞬杀敌机，并能对boss或首领造成极高伤害，还有二重清屏效果再增输出，就是如此暴力，就是这么任性!</p>\r\n\r\n<p>　　嫦娥还拥有首项主动技能“圆月之舞”，免伤加超高输出、全屏伤害再加双重清屏，绝对神技!更惊喜的是，在双打模式下，除自身可用之外，友军也会拥有免伤状态，并控制灵体舞蹈，双打更加游刃有余，与好友更轻松遨游飞行上空!触发被动和主动时，嫦娥处于是无敌状态，释放技能无障碍!“月轮斩”则进一步加强了嫦娥的输出能力，可分担旁支威胁。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　在搭配上，小编推荐天空三件套，如果没有天空也可铁流套装，都是高伤高防的组合。小编宠物搭配了月宫神兔与幽蓝之星，护盾加回血续航能力可见一斑，攻击加成为战机增强输出，还有得分加成为玩家登榜再添一力。有了这样完美的搭配，无论遇到多刁难的boss都能无所畏惧轻易击杀!</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥作为首架太阳战机，属性为现今最高，技能也极其强势，是非常完美的战机。而且在活动期间将嫦娥升到满级还可获赠皇冠宠月宫神兔，嫦娥搭配月兔当然是极好的，心动的玩家可别错过了!</p>\r\n', '', '1522308501', '1442199542', '', '1', '0', '37', '0', '', '0', '《全民飞机大战》太阳级新战机嫦娥测评', '《全民飞机大战》太阳级新战机嫦娥测评', '1', '');
INSERT INTO `m_info` VALUES ('22', '4', '科幻手游《小兵传奇》公测火爆开启 同名小说正版授权', '', '/uploads/images/e60e017a96f9ce4940a955f2ebb8bb7e.jpg', '', '<p>在9月12日，由广州49You重金独代、网络人气作家玄雨授权并亲自监制、2015年超高期待的同名科幻手游《小兵传奇》已经华丽开启全网公测。公测后如何在最快时间融入游戏也是玩家们关心的话题，今天咱们就来为新手们支一招，看看前辈们都是怎么在游戏中捷足先登的吧!</p>\r\n\r\n<p>　　在49You《小兵传奇》这款游戏里面，阵型搭配是非常讲究的，而且阵型也是非常中国传统兵法特色。《孙子兵法》读得再多也都是纸上谈兵，咱们到了这里就要学会实战运用，而这，就是49You《小兵传奇》一大亮点之一。玩家要合理根据英雄的属性，来决定前后排站位，从而组成最高的输出战力。同时也要合理安排替补，以便应对突发情况。如果你平时有看足球篮球比赛，场边那个运筹帷幄、掌控全局的主教练就是你在《小兵传奇》中的形象哦!</p>\r\n\r\n<p><img alt=\"小兵传奇公测\" src=\"http://www.xiaopi.com/game/uploadfile/2015/0914/20150914093653784.jpg\" /></p>\r\n\r\n<p>　　英雄系统是玩法中的重点，而命运系统又是决定英雄战斗力的关键玩法。49You《小兵传奇》里英雄的战斗力除了来源于自身能力和道具装备外，更加依赖于自身与其他上阵英雄或特定装备产生的“命运”。替补中的角色也是可以作为出阵英雄存在的，上阵英雄的“命运”除了阵内角色外，与替补英雄同样也可以产生联系。这样一来就可以产生多种多样的命运组合啦，赶紧去试一试啦。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　在新游戏里，大家往往会东转西转找不到北，错过最佳练级和成长的机会，49You《小兵传奇》为大家提供了一个很好的平台方便大家完成每天的任务，更快的升级进阶，从此妈妈再也不用担心我的战斗力了!只要有体力就去刷图，有体力药剂就猛磕体力药剂，每天买满体力药剂，买满各种箱子开出体力药剂，级别就能拉开很多。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　除此之外，公测开启的同时伴随着还有众多豪礼来袭，比如像登陆有惊喜、累积充值等等活动都一一俱全;并且还会有星际动荡“天下第一”、“命运北斗”再次开启这样的趣味活动同步上线!而且所有充值项首充都可以获得双倍返还，并且充值就送10%，充值100元以上可获送15%，赶紧来参加吧!</p>\r\n', '', '1522308422', '1442199465', '711cms', '1', '0', '16', '0', '', '0', '', '', '1', '');

-- ----------------------------
-- Table structure for m_info_category
-- ----------------------------
DROP TABLE IF EXISTS `m_info_category`;
CREATE TABLE `m_info_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `cname` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cname_py` varchar(100) NOT NULL DEFAULT '' COMMENT '分类字母别名',
  `ctitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `ckey` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO关键词',
  `cdesc` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO描述',
  `corder` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  `cat_show` int(2) NOT NULL DEFAULT '1' COMMENT '是否显示分类',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of m_info_category
-- ----------------------------
INSERT INTO `m_info_category` VALUES ('2', '1', '热门资讯', 'hot', '', '', '', '0', '1');
INSERT INTO `m_info_category` VALUES ('3', '1', '钱包攻略', 'game', '', '', '', '0', '1');
INSERT INTO `m_info_category` VALUES ('4', '1', '安卓资讯', 'android', '', '', '', '0', '1');

-- ----------------------------
-- Table structure for m_info_comment
-- ----------------------------
DROP TABLE IF EXISTS `m_info_comment`;
CREATE TABLE `m_info_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `info_app_id` int(11) NOT NULL COMMENT '应用id，资讯id',
  `comment_content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `comment_date` int(11) NOT NULL COMMENT '发布时间',
  `comment_user` int(11) NOT NULL COMMENT '用户id',
  `comment_uname` varchar(500) NOT NULL DEFAULT '' COMMENT '昵称',
  `comment_ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `comment_parent` int(11) unsigned NOT NULL COMMENT '上级id',
  `comment_check` tinyint(4) unsigned NOT NULL COMMENT '是否审核',
  `comment_good` int(11) unsigned NOT NULL COMMENT '赞',
  `comment_bad` int(11) unsigned NOT NULL COMMENT '踩',
  PRIMARY KEY (`comment_id`),
  KEY `id_type` (`info_app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of m_info_comment
-- ----------------------------

-- ----------------------------
-- Table structure for m_invitation
-- ----------------------------
DROP TABLE IF EXISTS `m_invitation`;
CREATE TABLE `m_invitation` (
  `inv_id` int(11) NOT NULL,
  `inviter` int(11) DEFAULT NULL COMMENT '邀请者',
  `invitee` int(11) DEFAULT NULL COMMENT '被邀请者',
  `create_time` datetime DEFAULT NULL COMMENT '邀请时间',
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_invitation
-- ----------------------------

-- ----------------------------
-- Table structure for m_navicat
-- ----------------------------
DROP TABLE IF EXISTS `m_navicat`;
CREATE TABLE `m_navicat` (
  `navicat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `navicat_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '导航名称',
  `navicat_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '导航地址',
  `navicat_m` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `navicat_seotitle` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo标题',
  `navicat_seokey` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo关键字',
  `navicat_seodesc` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo描述',
  `navicat_enabled` tinyint(3) unsigned NOT NULL COMMENT '是否可用',
  `navicat_order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `navicat_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `navicat_blank` tinyint(3) unsigned NOT NULL COMMENT '是否新窗口',
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`navicat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='导航表';

-- ----------------------------
-- Records of m_navicat
-- ----------------------------
INSERT INTO `m_navicat` VALUES ('2', '手机软件', '/index.php?c=index&m=softs', 'softs', '', '', '', '1', '8', '1521599253', '2', '1');
INSERT INTO `m_navicat` VALUES ('4', '装机必备', '/index.php?c=index&m=necessaries', 'necessaries', '', '', '', '2', '5', '1521599280', '2', '1');
INSERT INTO `m_navicat` VALUES ('5', '资讯', '/index.php?c=index&m=infos', 'infos', '', '', '', '1', '6', '1442127788', '2', '1');
INSERT INTO `m_navicat` VALUES ('6', '专题', '/index.php?c=index&m=specials', 'specials', '', '', '', '1', '4', '1442127813', '2', '1');
INSERT INTO `m_navicat` VALUES ('7', '首页', '/', 'index', '', '', '', '1', '9', '1442127897', '2', '1');

-- ----------------------------
-- Table structure for m_necessary
-- ----------------------------
DROP TABLE IF EXISTS `m_necessary`;
CREATE TABLE `m_necessary` (
  `necessary_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `necessary_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '位置标题',
  `necessary_type` tinyint(4) unsigned NOT NULL COMMENT '类型',
  `necessary_remarks` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `necessary_html` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `necessary_order` int(11) unsigned NOT NULL COMMENT '排序',
  `necessary_list` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'ID列表',
  `necessary_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`necessary_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='装机必备';

-- ----------------------------
-- Records of m_necessary
-- ----------------------------
INSERT INTO `m_necessary` VALUES ('30', '软件必备', '1', '软件必备', '软件必备', '0', '4,5,6', '1444959997', '1');

-- ----------------------------
-- Table structure for m_nlink
-- ----------------------------
DROP TABLE IF EXISTS `m_nlink`;
CREATE TABLE `m_nlink` (
  `nlink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '内链ID',
  `nlink_txt` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `nlink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '网址',
  PRIMARY KEY (`nlink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='正文內链词表';

-- ----------------------------
-- Records of m_nlink
-- ----------------------------

-- ----------------------------
-- Table structure for m_operate_log
-- ----------------------------
DROP TABLE IF EXISTS `m_operate_log`;
CREATE TABLE `m_operate_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '登录账号',
  `log_time` int(10) unsigned NOT NULL COMMENT '操作时间',
  `log_ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '登录ip',
  `log_controller` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作模块',
  `log_model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作方法',
  `log_content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作内容',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8 COMMENT='操作日志表';

-- ----------------------------
-- Records of m_operate_log
-- ----------------------------
INSERT INTO `m_operate_log` VALUES ('1', 'admin', '1521514994', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('2', 'admin', '1521517352', '127.0.0.1', 'App', 'insert', '添加了应用QQ');
INSERT INTO `m_operate_log` VALUES ('3', 'admin', '1521517564', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('4', 'admin', '1521517575', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('5', 'admin', '1521517588', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('6', 'admin', '1521517598', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('7', 'admin', '1521517607', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('8', 'admin', '1521517643', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('9', 'admin', '1521517662', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('10', 'admin', '1521533733', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('11', 'admin', '1521537403', '127.0.0.1', 'App', 'insert', '添加了应用微信');
INSERT INTO `m_operate_log` VALUES ('12', 'admin', '1521539488', '127.0.0.1', 'App', 'insert', '添加了应用平安好医生');
INSERT INTO `m_operate_log` VALUES ('13', 'admin', '1521595439', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('14', 'admin', '1521598961', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('15', 'admin', '1521599253', '127.0.0.1', 'Navicat', 'update', '修改了导航：手机软件');
INSERT INTO `m_operate_log` VALUES ('16', 'admin', '1521599261', '127.0.0.1', 'Navicat', 'update', '修改了导航：安卓游戏');
INSERT INTO `m_operate_log` VALUES ('17', 'admin', '1521599280', '127.0.0.1', 'Navicat', 'update', '修改了导航：装机必备');
INSERT INTO `m_operate_log` VALUES ('18', 'admin', '1521599311', '127.0.0.1', 'AppCategory', 'update', '修改了分类：休闲益智');
INSERT INTO `m_operate_log` VALUES ('19', 'admin', '1521614766', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('20', 'admin', '1521615037', '127.0.0.1', 'App', 'insert', '添加了应用美图秀秀');
INSERT INTO `m_operate_log` VALUES ('21', 'admin', '1521629492', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('22', 'admin', '1521696979', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('23', 'admin', '1521700891', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('24', 'admin', '1521701650', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('25', 'admin', '1521701714', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('26', 'admin', '1521701755', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('27', 'admin', '1521701784', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('28', 'admin', '1521702029', '127.0.0.1', 'Navicat', 'update', '修改了导航：安卓游戏');
INSERT INTO `m_operate_log` VALUES ('29', 'admin', '1521796878', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('30', 'admin', '1521796896', '127.0.0.1', 'InfoCategory', 'update', '修改了分类：钱包攻略');
INSERT INTO `m_operate_log` VALUES ('31', 'admin', '1521796956', '127.0.0.1', 'Search', 'update', '修改了关键字：微信');
INSERT INTO `m_operate_log` VALUES ('32', 'admin', '1521857067', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('33', 'admin', '1521870571', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('34', 'admin', '1522028111', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('35', '', '1522029486', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('36', 'admin2', '1522029498', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('37', '', '1522030625', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('38', 'admin', '1522030643', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('39', '', '1522033082', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('40', 'admin', '1522061185', '192.168.0.107', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('41', '', '1522061307', '192.168.0.107', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('42', 'admin2', '1522061369', '192.168.0.107', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('43', 'admin', '1522117807', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('44', 'admin', '1522118050', '127.0.0.1', 'Recommend', 'update', '修改了推荐位：下载排行');
INSERT INTO `m_operate_log` VALUES ('45', 'admin', '1522118182', '127.0.0.1', 'Recommend', 'update', '修改了推荐位：时下热门');
INSERT INTO `m_operate_log` VALUES ('46', 'admin', '1522133030', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('47', '', '1522133104', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('48', 'admin2', '1522133126', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('49', '', '1522134591', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('50', 'admin', '1522134602', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('51', '', '1522134603', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('52', 'admin', '1522134695', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('53', '', '1522134696', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('54', '', '1522134779', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('55', 'admin', '1522134787', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('56', '', '1522134788', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('57', 'admin', '1522134908', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('58', '', '1522134909', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('59', 'admin', '1522134927', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('60', '', '1522134929', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('61', 'admin', '1522134932', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('62', '', '1522134986', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('63', 'admin2', '1522134990', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('64', '', '1522135010', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('65', 'admin2', '1522135017', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('66', '', '1522135036', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('67', 'admin2', '1522135063', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('68', '', '1522135099', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('69', 'admin2', '1522135108', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('70', '', '1522135279', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('71', 'admin2', '1522135285', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('72', '', '1522135311', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('73', 'admin2', '1522135316', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('74', '', '1522135558', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('75', 'admin2', '1522135564', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('76', '', '1522135596', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('77', 'admin2', '1522135600', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('78', '', '1522135830', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('79', 'admin', '1522135834', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('80', '', '1522135844', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('81', 'admin2', '1522135854', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('82', '', '1522135998', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('83', 'admin', '1522136001', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('84', 'admin', '1522137944', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('85', 'admin', '1522139256', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('86', 'admin', '1522139289', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('87', 'admin', '1522139962', '127.0.0.1', 'App', 'insert', '添加了应用支付宝');
INSERT INTO `m_operate_log` VALUES ('88', 'admin', '1522141712', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('89', 'admin', '1522141724', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('90', 'admin', '1522202547', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('91', 'admin', '1522203242', '127.0.0.1', 'Necessary', 'delete', '删除了装机必备：游戏必备');
INSERT INTO `m_operate_log` VALUES ('92', 'admin', '1522203273', '127.0.0.1', 'Navicat', 'delete', '删除了导航：安卓游戏');
INSERT INTO `m_operate_log` VALUES ('93', 'admin', '1522230035', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('94', 'admin', '1522230150', '127.0.0.1', 'AppCategory', 'update', '修改了分类：钱包工具');
INSERT INTO `m_operate_log` VALUES ('95', 'admin', '1522230160', '127.0.0.1', 'AppCategory', 'update', '修改了分类：交易平台');
INSERT INTO `m_operate_log` VALUES ('96', 'admin', '1522230174', '127.0.0.1', 'AppCategory', 'update', '修改了分类：媒体资讯');
INSERT INTO `m_operate_log` VALUES ('97', 'admin', '1522230181', '127.0.0.1', 'AppCategory', 'update', '修改了分类：数字货币');
INSERT INTO `m_operate_log` VALUES ('98', 'admin', '1522230194', '127.0.0.1', 'AppCategory', 'update', '修改了分类：其他工具');
INSERT INTO `m_operate_log` VALUES ('99', 'admin', '1522230200', '127.0.0.1', 'AppCategory', 'update', '修改了分类：行情必备');
INSERT INTO `m_operate_log` VALUES ('100', 'admin', '1522230785', '127.0.0.1', 'Advert', 'update', '修改了广告：手助首页轮播');
INSERT INTO `m_operate_log` VALUES ('101', 'admin', '1522287215', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('102', 'admin', '1522287231', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('103', 'admin', '1522289254', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('104', 'admin', '1522290551', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('105', 'admin', '1522290557', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('106', 'admin', '1522290624', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('107', 'admin', '1522292611', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('108', 'admin', '1522292650', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('109', '', '1522294125', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('110', 'admin2', '1522294130', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('111', '', '1522294329', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('112', 'admin', '1522294334', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('113', 'admin', '1522294458', '127.0.0.1', 'App', 'update', '修改了应用：微信');
INSERT INTO `m_operate_log` VALUES ('114', 'admin', '1522294467', '127.0.0.1', 'App', 'update', '修改了应用：QQ');
INSERT INTO `m_operate_log` VALUES ('115', 'admin', '1522294476', '127.0.0.1', 'App', 'update', '修改了应用：万万没想到之大皇帝');
INSERT INTO `m_operate_log` VALUES ('116', 'admin', '1522294486', '127.0.0.1', 'App', 'update', '修改了应用：十万个大魔王(点爆皮卡丘)');
INSERT INTO `m_operate_log` VALUES ('117', 'admin', '1522294495', '127.0.0.1', 'App', 'update', '修改了应用：小黄人大眼萌乐园');
INSERT INTO `m_operate_log` VALUES ('118', 'admin', '1522294504', '127.0.0.1', 'App', 'update', '修改了应用：整除·4');
INSERT INTO `m_operate_log` VALUES ('119', '', '1522295582', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('120', 'admin2', '1522295587', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('121', '', '1522295601', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('122', 'admin', '1522295603', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('123', '', '1522296228', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('124', 'admin2', '1522296235', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('125', '', '1522298659', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('126', 'admin', '1522298663', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('127', '', '1522298674', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('128', 'admin2', '1522298678', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('129', '', '1522302298', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('130', 'admin', '1522302302', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('131', 'admin', '1522302307', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('132', 'admin', '1522302323', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('133', 'admin', '1522302590', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('134', 'admin', '1522302651', '127.0.0.1', 'Setting', 'update', '修改了网站配置');
INSERT INTO `m_operate_log` VALUES ('135', 'admin', '1522308291', '127.0.0.1', 'Info', 'update', '修改了文章：决战魔窟 《魔力时代》英魂圣能之战');
INSERT INTO `m_operate_log` VALUES ('136', 'admin', '1522308422', '127.0.0.1', 'Info', 'update', '修改了文章：科幻手游《小兵传奇》公测火爆开启 同名小说正版授权');
INSERT INTO `m_operate_log` VALUES ('137', 'admin', '1522308501', '127.0.0.1', 'Info', 'update', '修改了文章：《全民飞机大战》太阳级新战机嫦娥测评');
INSERT INTO `m_operate_log` VALUES ('138', 'admin', '1522308507', '127.0.0.1', 'Info', 'update', '修改了文章：《NBA英雄》柏林英雄礼 诺天王伟大的告别');
INSERT INTO `m_operate_log` VALUES ('139', 'admin', '1522308512', '127.0.0.1', 'Info', 'update', '修改了文章：打造完美恋人 《正妹物语》女友养成记');
INSERT INTO `m_operate_log` VALUES ('140', 'admin', '1522376449', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('141', '', '1522404011', '127.0.0.1', 'Index', 'logout', '登出后台');
INSERT INTO `m_operate_log` VALUES ('142', 'admin', '1522466556', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('143', 'admin', '1522466804', '127.0.0.1', 'App', 'update', '修改了应用：平安好医生');
INSERT INTO `m_operate_log` VALUES ('144', 'admin', '1522466857', '127.0.0.1', 'App', 'update', '修改了应用：平安好医生');
INSERT INTO `m_operate_log` VALUES ('145', 'admin', '1523168675', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('146', 'admin', '1523844975', '127.0.0.1', 'Index', 'login', '登入后台');
INSERT INTO `m_operate_log` VALUES ('147', 'admin', '1523844988', '127.0.0.1', 'Setting', 'update', '修改了网站配置');

-- ----------------------------
-- Table structure for m_recommend
-- ----------------------------
DROP TABLE IF EXISTS `m_recommend`;
CREATE TABLE `m_recommend` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_title` varchar(100) NOT NULL DEFAULT '' COMMENT '位置标题',
  `area_html` text COMMENT '广告HTML或者描述文本',
  `area_remarks` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `area_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '位置LOGO图',
  `area_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `area_ids` text NOT NULL COMMENT 'ID列表，用逗号分割',
  `area_type` tinyint(4) NOT NULL COMMENT '1pc网站 2手助 3wap',
  `operate_type` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '操作类型1.手动添加2.自动获取',
  `auto_type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '获取类型1.最新更新2.下载排行',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `auto_order` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '1.最近更新2.下载排行',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COMMENT='推荐位置';

-- ----------------------------
-- Records of m_recommend
-- ----------------------------
INSERT INTO `m_recommend` VALUES ('30', '最受欢迎', '', '最受欢迎（PC网站首页）', '', '0', '1,2,3', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('31', '应用必备', '', '应用必备（PC网站首页）', '', '0', '4,5,6,7,8', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('29', '今日热门推荐', '', '今日热门推荐（PC网站首页）', '', '0', '4,5,6,7,8', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('32', '时下热门', '', '时下热门（手助端首页）', '', '0', '1,2,3,8', '2', '2', '1', '14', '2');
INSERT INTO `m_recommend` VALUES ('33', '精品推荐', '', '精品推荐（手助端首页）', '', '0', '1,2,3', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('34', '每日推荐', '', '每日推荐（手助端首页）', '', '0', '1,2,3,4,5,6,7,8,9', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('35', '上升最快', '', '上升最快（手助端首页）', '', '0', '1,2,3', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('36', '装机必备', '', '装机必备（手助端首页）', '', '0', '1,2,3', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('37', '下载排行', '', '下载排行（手助端首页）', '', '0', '1,2,3', '2', '2', '1', '14', '2');
INSERT INTO `m_recommend` VALUES ('38', '应用排行', '', '应用排行（手助端排行页）', '', '0', '1,2,3', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('39', '游戏排行', '', '游戏排行（手助端排行页）', '', '0', '1,2,3', '2', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('40', '今日推荐', '', '今日推荐（PC网站首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('41', '精品推荐', '', '精品推荐（PC网站首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('42', '热门排行', '', '热门排行（PC网站首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('44', '飙升榜', '', '飙升榜（PC网站首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('45', '热门', '', '软件热门（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('46', '热门', '', '游戏热门（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('47', '精品', '', '软件精品（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('48', '精品', '', '游戏精品（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('49', '飙升', '', '软件飙升（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('50', '飙升', '', '游戏飙升（wap首页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('51', '排行榜', '', '软件飙升（wap排行榜页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('52', '排行榜', '', '游戏飙升（wap排行榜页mobile-1）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('53', '最受欢迎', '', '最受欢迎（wap1最受欢迎页）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('54', '软件', '', '软件（template-3首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('55', '游戏', '', '游戏（template-3首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('56', '飙升排行榜', '', '飙升排行榜-软件（template-3首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('57', '飙升排行榜', '', '飙升排行榜-游戏（template-3首页）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('58', '精品推荐', '', '精品推荐（PC网站软件页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('59', '精品推荐', '', '精品推荐（PC网站游戏页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('60', '下载排行', '', '下载排行（PC网站软件页template-3|template-4）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('61', '上升最快', '', '上升最快（PC网站软件页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('62', '时下热门', '', '时下热门（PC网站软件页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('63', '下载排行', '', '下载排行（PC网站游戏页template-3|template-4）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('64', '上升最快', '', '上升最快（PC网站游戏页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('65', '时下热门', '', '时下热门（PC网站游戏页template-3）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('66', '下载排行', '', '下载排行（PC网站新闻页template-3|template-4）', '', '0', '1,2,3,4,5,6,7,8,9', '1', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('67', '精品推荐', '', '精品推荐（wap首页mobile-2）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('68', '下载排行', '', '下载排行（wap首页mobile-2）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('69', '上升最快', '', '上升最快（wap首页mobile-2）', '', '0', '1,2,3,4,5,6,7,8,9', '3', '1', '0', '0', '0');
INSERT INTO `m_recommend` VALUES ('70', '最新上架', ' ', '最新上架', '', '0', ' ', '1', '1', '0', '0', '0');

-- ----------------------------
-- Table structure for m_resource
-- ----------------------------
DROP TABLE IF EXISTS `m_resource`;
CREATE TABLE `m_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资源',
  `info_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用 或资讯ID',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '关联的类型，应用=0，资讯=1',
  `resource_url` varchar(300) NOT NULL DEFAULT '' COMMENT '资源地址',
  `width` int(11) NOT NULL DEFAULT '0' COMMENT '资源宽度',
  `height` int(11) NOT NULL DEFAULT '0' COMMENT '资源高度',
  `size` int(11) NOT NULL DEFAULT '0' COMMENT '资源大小',
  PRIMARY KEY (`id`),
  KEY `id_type` (`info_app_id`,`type`),
  KEY `resource_url` (`resource_url`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COMMENT='资源表';

-- ----------------------------
-- Records of m_resource
-- ----------------------------
INSERT INTO `m_resource` VALUES ('1', '1', '0', 'http://p15.qhimg.com/t01a51aa3e5b4b4bdf6.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('2', '1', '0', 'http://p19.qhimg.com/t017449ae7e2d3b7016.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('3', '1', '0', 'http://p19.qhimg.com/t016605aeffc0aa8887.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('4', '1', '0', 'http://p17.qhimg.com/t01119208d29c0ba2b3.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('5', '1', '0', 'http://p16.qhimg.com/t01a1600c26831e03d0.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('6', '2', '0', 'http://p17.qhimg.com/t0135cb30a6a7584382.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('7', '2', '0', 'http://p16.qhimg.com/t01620fcd4bd6566223.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('8', '2', '0', 'http://p17.qhimg.com/t01a9e8b75ab5360fed.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('9', '2', '0', 'http://p17.qhimg.com/t01df8a9ec4d12b9d70.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('10', '2', '0', 'http://p17.qhimg.com/t01cb68fdec833de022.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('11', '3', '0', 'http://p15.qhimg.com/t01b4355ec6d5bace58.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('12', '3', '0', 'http://p17.qhimg.com/t015287dbd6c81b43ee.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('13', '3', '0', 'http://p19.qhimg.com/t01e882837746ffa40b.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('14', '3', '0', 'http://p17.qhimg.com/t01557476f024da1eaf.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('15', '3', '0', 'http://p19.qhimg.com/t017fbe58e24aa31170.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('16', '4', '0', 'http://p19.qhimg.com/t01b8082c429aa4b4d5.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('17', '4', '0', 'http://p15.qhimg.com/t01b684fde76e882513.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('18', '4', '0', 'http://p18.qhimg.com/t019da21d101e14add1.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('19', '4', '0', 'http://p17.qhimg.com/t01c15070a5ec92ee3e.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('20', '4', '0', 'http://p16.qhimg.com/t01efc89c2e2f673c0c.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('21', '5', '0', 'http://p19.qhimg.com/t0188462b418890357c.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('22', '5', '0', 'http://p15.qhimg.com/t0198235422d6cf1854.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('23', '5', '0', 'http://p17.qhimg.com/t014f9821af9095768c.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('24', '5', '0', 'http://p17.qhimg.com/t01c10e21151da5e264.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('25', '5', '0', 'http://p15.qhimg.com/t01212eb16984e5dcca.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('26', '6', '0', 'http://p17.qhimg.com/t012b86b0cc7fba671e.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('27', '6', '0', 'http://p17.qhimg.com/t01f8f70660c1fd3f3c.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('28', '6', '0', 'http://p15.qhimg.com/t0152f0eab8eba390ed.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('29', '6', '0', 'http://p16.qhimg.com/t01b749301128c42424.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('30', '6', '0', 'http://p19.qhimg.com/t018dd71d0cab155dbd.png', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('31', '7', '0', 'http://p18.qhimg.com/t01cf4f198afaa8f99b.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('32', '7', '0', 'http://p15.qhimg.com/t012a1389e54e064023.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('33', '7', '0', 'http://p19.qhimg.com/t01e2fffb9d071495da.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('34', '7', '0', 'http://p16.qhimg.com/t016b41bfec6a6a5eab.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('35', '8', '0', 'http://p16.qhimg.com/t01a3148273e75e0bf4.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('36', '8', '0', 'http://p15.qhimg.com/t017cd7f2917af83013.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('37', '8', '0', 'http://p19.qhimg.com/t01483a3d3fbf882570.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('38', '8', '0', 'http://p15.qhimg.com/t01f11c4c338d722618.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('39', '8', '0', 'http://p19.qhimg.com/t012d509b972c8c297a.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('40', '9', '0', 'http://p15.qhimg.com/t01c7f1d3544cadf35a.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('41', '9', '0', 'http://p16.qhimg.com/t0166b22550db563826.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('42', '9', '0', 'http://p19.qhimg.com/t011c29f07ad0d4476f.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('43', '9', '0', 'http://p18.qhimg.com/t01b72aecea764b3a0d.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('44', '9', '0', 'http://p18.qhimg.com/t01fd588190d3d29c76.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('45', '10', '0', 'http://p19.qhimg.com/t015ddf766e5b6fa24c.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('46', '10', '0', 'http://p16.qhimg.com/t01c0b692b8136e6be9.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('47', '10', '0', 'http://p16.qhimg.com/t01ecf4c78f95f04191.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('48', '10', '0', 'http://p17.qhimg.com/t013004af84d5a11bd6.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('49', '10', '0', 'http://p17.qhimg.com/t01a060a98b1b65c5ee.jpg', '0', '0', '0');
INSERT INTO `m_resource` VALUES ('50', '11', '0', '/uploads/images/4928a7a140cf06b6fbac9b5f49c49671.png', '96', '96', '6');
INSERT INTO `m_resource` VALUES ('51', '12', '0', '/uploads/images/6fa49630be9da34242476af56e8d83e9.png', '96', '96', '6');
INSERT INTO `m_resource` VALUES ('52', '13', '0', '/uploads/images/fa592818b46084a44a7d25101f9a63d4.png', '270', '250', '31');
INSERT INTO `m_resource` VALUES ('53', '14', '0', '/uploads/images/76808ebf18aa14d1f4e61cb43e45c249.png', '249', '507', '200');
INSERT INTO `m_resource` VALUES ('54', '14', '0', '/uploads/images/800fbc5ff2e557d40e4bf4fcea99aca4.png', '249', '500', '116');
INSERT INTO `m_resource` VALUES ('55', '14', '0', '/uploads/images/ffc00e7b535ba68e2b598780219ab8f5.png', '257', '515', '142');
INSERT INTO `m_resource` VALUES ('56', '14', '0', '/uploads/images/a764b71f4aba74667984f789e703101d.png', '247', '515', '145');
INSERT INTO `m_resource` VALUES ('57', '16', '0', '/uploads/images/5be4de5bcb505ee1fd3788bdaa9b459d.png', '245', '503', '93');
INSERT INTO `m_resource` VALUES ('58', '16', '0', '/uploads/images/f88e89bc5ca401950279b5ba73d6a9e6.png', '234', '508', '106');
INSERT INTO `m_resource` VALUES ('59', '16', '0', '/uploads/images/eb2ddfecab9f257a52a84f6989cef12b.png', '234', '504', '69');
INSERT INTO `m_resource` VALUES ('60', '16', '0', '/uploads/images/9abc9f2e86a8bd98bba5754d0284427a.png', '238', '504', '60');
INSERT INTO `m_resource` VALUES ('61', '16', '0', '/uploads/images/e32c42de2f9fa396a8efca5d6660233b.png', '234', '499', '93');

-- ----------------------------
-- Table structure for m_search
-- ----------------------------
DROP TABLE IF EXISTS `m_search`;
CREATE TABLE `m_search` (
  `q_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `q` varchar(200) NOT NULL DEFAULT '' COMMENT '搜索关键字',
  `qnum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '搜索次数',
  `qorder` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '关键字排序',
  `q_type` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '关键字类型1.软件2.游戏',
  PRIMARY KEY (`q_id`),
  KEY `qorder` (`qorder`),
  KEY `q` (`q`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='搜索关键字记录表';

-- ----------------------------
-- Records of m_search
-- ----------------------------
INSERT INTO `m_search` VALUES ('1', '整除·4', '1', '0', '1');
INSERT INTO `m_search` VALUES ('2', 'BesTV', '1', '0', '1');
INSERT INTO `m_search` VALUES ('3', '一点资讯', '11', '0', '1');
INSERT INTO `m_search` VALUES ('4', '今日头条', '10', '0', '1');
INSERT INTO `m_search` VALUES ('5', '小黄人大眼萌乐园', '2', '0', '2');
INSERT INTO `m_search` VALUES ('6', '万万没想到之大皇帝', '5', '0', '2');
INSERT INTO `m_search` VALUES ('7', '平安好医生', '1', '0', '0');
INSERT INTO `m_search` VALUES ('8', '微信', '1', '0', '0');
INSERT INTO `m_search` VALUES ('9', '微信', '1', '0', '0');
INSERT INTO `m_search` VALUES ('10', 'QQ', '6', '0', '0');
INSERT INTO `m_search` VALUES ('11', '小黄人大眼萌', '1', '0', '0');
INSERT INTO `m_search` VALUES ('12', '美图', '3', '0', '0');
INSERT INTO `m_search` VALUES ('13', '支付宝', '25', '0', '0');
INSERT INTO `m_search` VALUES ('14', '支付', '2', '0', '0');
INSERT INTO `m_search` VALUES ('15', '日', '1', '0', '0');
INSERT INTO `m_search` VALUES ('16', 'Ripple 瑞波币', '1', '0', '0');
INSERT INTO `m_search` VALUES ('17', 'Bitcoin 比特币', '1', '0', '0');

-- ----------------------------
-- Table structure for m_setting
-- ----------------------------
DROP TABLE IF EXISTS `m_setting`;
CREATE TABLE `m_setting` (
  `s_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_key` varchar(255) NOT NULL,
  `s_value` text NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_key` (`s_key`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='设置表';

-- ----------------------------
-- Records of m_setting
-- ----------------------------
INSERT INTO `m_setting` VALUES ('1', 'auth_code', 'fbb4ef16ca8b00bc5ce30a373f85f76e');
INSERT INTO `m_setting` VALUES ('2', 'cache_time', '0');
INSERT INTO `m_setting` VALUES ('3', 'comment_code', '');
INSERT INTO `m_setting` VALUES ('4', 'count_code', '');
INSERT INTO `m_setting` VALUES ('5', 'data_center_url', 'http://www.711cms.com/api');
INSERT INTO `m_setting` VALUES ('6', 'pagesize', '10');
INSERT INTO `m_setting` VALUES ('7', 'version', '1.0.6');
INSERT INTO `m_setting` VALUES ('8', 'update_time', '1521514977');
INSERT INTO `m_setting` VALUES ('9', 'static_url', 'static');
INSERT INTO `m_setting` VALUES ('10', 'water_button', '2');
INSERT INTO `m_setting` VALUES ('11', 'is_site_rewrite', '-1');
INSERT INTO `m_setting` VALUES ('12', 'is_content_mobile', '1');
INSERT INTO `m_setting` VALUES ('13', 'is_images_local', '0');
INSERT INTO `m_setting` VALUES ('14', 'is_images_rewrite', '0');
INSERT INTO `m_setting` VALUES ('15', 'is_content_nlink', '0');
INSERT INTO `m_setting` VALUES ('16', 'seo_description', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('17', 'seo_keywords', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('18', 'seo_title', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('19', 'site_logo', '/uploads/images/f96eed2dc77309f9d6e36ec2d66cd757.png');
INSERT INTO `m_setting` VALUES ('20', 'site_name', 'TokenBook');
INSERT INTO `m_setting` VALUES ('21', 'site_safe_code', '');
INSERT INTO `m_setting` VALUES ('22', 'site_url', 'http://localhost');
INSERT INTO `m_setting` VALUES ('23', 'site_beian', '');
INSERT INTO `m_setting` VALUES ('24', 'site_copyright', '');
INSERT INTO `m_setting` VALUES ('25', 'site_path', '/');
INSERT INTO `m_setting` VALUES ('26', 'template', 'template_009');
INSERT INTO `m_setting` VALUES ('27', 'upload_key', '51b099735e69805385171941950f032b');
INSERT INTO `m_setting` VALUES ('28', 'upload_path', '/uploads/images/');
INSERT INTO `m_setting` VALUES ('29', 'upload_path_apk', '/uploads/apk/');
INSERT INTO `m_setting` VALUES ('30', 'wap_logo', '/uploads/images/ac2accddfe13b496647443222db18d56.png');
INSERT INTO `m_setting` VALUES ('31', 'wap_url', 'http://localhost');
INSERT INTO `m_setting` VALUES ('32', 'wap_seo_description', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('33', 'wap_seo_keywords', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('34', 'wap_seo_title', '区块链应用宝');
INSERT INTO `m_setting` VALUES ('35', 'wap_template', 'mobile_101');
INSERT INTO `m_setting` VALUES ('36', 'count_code2', '');
INSERT INTO `m_setting` VALUES ('37', 'water_logo', '');

-- ----------------------------
-- Table structure for m_special
-- ----------------------------
DROP TABLE IF EXISTS `m_special`;
CREATE TABLE `m_special` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_title` text NOT NULL COMMENT '位置标题',
  `area_html` text COMMENT '广告HTML或者描述文本',
  `area_remarks` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `area_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '位置LOGO图',
  `area_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `area_ids` text NOT NULL COMMENT 'ID列表，用逗号分割',
  `special_seotitle` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_seokey` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_seodesc` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_time` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='专题';

-- ----------------------------
-- Records of m_special
-- ----------------------------
INSERT INTO `m_special` VALUES ('32', '专题二', '', '', '/uploads/images/b01f7bee4cebf5bfd322328fd0949fdb.gif', '0', '4,5,6', '', '', '', '1445411835', '1');
INSERT INTO `m_special` VALUES ('33', '专题三', '', '', '/uploads/images/ddb4cb8830d76ae2326570b620eb058d.gif', '0', '7,8,9', '', '', '', '1445411841', '1');
INSERT INTO `m_special` VALUES ('31', '专题一', '', '', '/uploads/images/80de3333fd830896e60368592175355b.gif', '0', '1,2,3', '', '', '', '1445411827', '1');

-- ----------------------------
-- Table structure for m_users
-- ----------------------------
DROP TABLE IF EXISTS `m_users`;
CREATE TABLE `m_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password` varchar(100) DEFAULT NULL COMMENT '密码',
  `salt` varchar(100) DEFAULT NULL COMMENT '盐',
  `login_token` varchar(100) DEFAULT NULL COMMENT '排他性登陆标识',
  `last_login_ip` varchar(50) DEFAULT NULL COMMENT '最后登录IP',
  `login_status` int(11) DEFAULT NULL COMMENT '登录状态',
  `code` varchar(10) DEFAULT NULL COMMENT '二维码',
  `fraction` varchar(100) DEFAULT NULL COMMENT '积分',
  `last_login_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_users
-- ----------------------------
INSERT INTO `m_users` VALUES ('1', 'user1', 'm9TIMOkseU2VKgb9UBTcnhL6tqELPQq49QEfmQyKOYY=', 'gfqnphhwrlcsks4ooow0g0w48wgwgo8', 'a8b558c2ff8542b369dc5856b17b721d', '192.168.0.112', '1', null, null, '2018-03-30 17:31:59', null);
