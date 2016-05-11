-- ----------------------------
-- 备份时间：2016-05-11 12:20:38
-- ----------------------------

-- ----------------------------
-- Table structure for `t_brands`
-- ----------------------------
DROP TABLE IF EXISTS `t_brands`;
CREATE TABLE `t_brands` (
  `brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weixinNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factory` tinyint(1) NOT NULL,
  `factorySize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `design` tinyint(1) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customAge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refund` tinyint(1) NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=419 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `t_celebrity`
-- ----------------------------
DROP TABLE IF EXISTS `t_celebrity`;
CREATE TABLE `t_celebrity` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '网络昵称',
  `realname` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `sex` tinyint(4) DEFAULT '1' COMMENT '0表示男，1表示女',
  `birthday` int(11) DEFAULT '0' COMMENT '生日',
  `city` varchar(255) DEFAULT NULL COMMENT '城市',
  `education` varchar(255) DEFAULT NULL COMMENT '学历',
  `height` int(11) DEFAULT '0' COMMENT '身高(cm)',
  `weight` int(11) DEFAULT '0' COMMENT '体重(kg)',
  `bust` int(11) DEFAULT '0' COMMENT '胸围(cm)',
  `waist` int(11) DEFAULT '0' COMMENT '腰围(cm)',
  `hop` int(11) DEFAULT '0' COMMENT '臀围(cm)',
  `annual_income` tinyint(4) DEFAULT '1' COMMENT '年收入，0表示10万以下，1表示10~30万，2表示30~50万，3表示50万以上',
  `occupation` varchar(255) DEFAULT NULL COMMENT '职业',
  `experience` varchar(4096) DEFAULT NULL COMMENT '经历',
  `cellphone` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `address` varchar(255) DEFAULT NULL COMMENT '联系地址',
  `wechat_id` varchar(255) DEFAULT NULL COMMENT '微信号码',
  `weibo_nickname` varchar(255) DEFAULT NULL COMMENT '微博昵称',
  `total_fans_num` int(11) DEFAULT '0' COMMENT '全网粉丝数量',
  `weibo_fans_num` int(11) DEFAULT '0' COMMENT '微博粉丝数量',
  `weipai_fans_num` int(11) DEFAULT '0' COMMENT '微拍粉丝数量',
  `meipai_fans_num` int(11) DEFAULT '0' COMMENT '美拍粉丝数量',
  `kuaishou_fans_num` int(11) DEFAULT '0' COMMENT '快手粉丝数量',
  `miaopai_fans_num` int(11) DEFAULT '0' COMMENT '秒拍粉丝数量',
  `personality` varchar(2083) DEFAULT NULL COMMENT '性格',
  `tags` varchar(255) DEFAULT NULL COMMENT '标签',
  `skills` varchar(511) DEFAULT NULL COMMENT '特长',
  `profile_img` varchar(1023) DEFAULT NULL COMMENT '缺省图片',
  `update_time` int(11) DEFAULT NULL,
  `sort_manually` int(11) DEFAULT NULL COMMENT '人工排序值',
  `weibo_link` varchar(1023) DEFAULT NULL COMMENT '微博链接',
  `meipai_nickname` varchar(255) DEFAULT NULL COMMENT '美拍昵称',
  `meipai_link` varchar(255) DEFAULT NULL COMMENT '美拍链接',
  `kuaishou_nickname` varchar(255) DEFAULT NULL COMMENT '快手昵称',
  `miaopai_nickname` varchar(255) DEFAULT NULL COMMENT '秒拍昵称',
  `weipai_nickname` varchar(255) DEFAULT NULL COMMENT '微拍昵称',
  `miaopai_link` varchar(255) DEFAULT NULL COMMENT '秒拍链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `t_designers`
-- ----------------------------
DROP TABLE IF EXISTS `t_designers`;
CREATE TABLE `t_designers` (
  `designer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `designType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weixinNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designExperience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designTeam` tinyint(1) NOT NULL,
  `brand` tinyint(1) NOT NULL,
  `designBrand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`designer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `t_factories`
-- ----------------------------
DROP TABLE IF EXISTS `t_factories`;
CREATE TABLE `t_factories` (
  `factory_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weixinNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advantageSubcategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipmentOK` tinyint(1) NOT NULL,
  `ext1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `design` tinyint(1) NOT NULL,
  `zhangqi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productCount` int(11) NOT NULL,
  `orderCount` int(11) NOT NULL,
  `refund` tinyint(1) NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`factory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1383 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `t_fans_profile`
-- ----------------------------
DROP TABLE IF EXISTS `t_fans_profile`;
CREATE TABLE `t_fans_profile` (
  `id` int(11) NOT NULL,
  `weipai_uid` char(24) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '对应的微拍UID',
  `total_fans` int(11) DEFAULT '0' COMMENT '总粉丝数',
  `female_fans` int(11) DEFAULT '0' COMMENT '女性粉丝数',
  `fans_with_age` int(11) DEFAULT '0' COMMENT '带年龄信息的总粉丝数',
  `fans_age_group1` int(11) DEFAULT '0' COMMENT '19岁及以下粉丝数',
  `fans_age_group2` int(11) DEFAULT '0' COMMENT '20岁-29粉丝数',
  `fans_age_group3` int(11) DEFAULT '0' COMMENT '30岁-39粉丝数',
  `fans_age_group4` int(11) DEFAULT '0' COMMENT '40岁及以上粉丝数',
  `fans_city1` varchar(255) DEFAULT NULL COMMENT '第1多粉丝数的城市',
  `fans_num_city1` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city2` varchar(255) DEFAULT NULL COMMENT '第2多粉丝数的城市',
  `fans_num_city2` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city3` varchar(255) DEFAULT NULL COMMENT '第3多粉丝数的城市',
  `fans_num_city3` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city4` varchar(255) DEFAULT NULL COMMENT '第4多粉丝数的城市',
  `fans_num_city4` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city5` varchar(255) DEFAULT NULL COMMENT '第5多粉丝数的城市',
  `fans_num_city5` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city6` varchar(255) DEFAULT NULL COMMENT '第6多粉丝数的城市',
  `fans_num_city6` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city7` varchar(255) DEFAULT NULL COMMENT '第7多粉丝数的城市',
  `fans_num_city7` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city8` varchar(255) DEFAULT NULL COMMENT '第8多粉丝数的城市',
  `fans_num_city8` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city9` varchar(255) DEFAULT NULL COMMENT '第9多粉丝数的城市',
  `fans_num_city9` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  `fans_city10` varchar(255) DEFAULT NULL COMMENT '第10多粉丝数的城市',
  `fans_num_city10` int(11) DEFAULT '0' COMMENT '聚集在该城市的粉丝数',
  PRIMARY KEY (`id`),
  CONSTRAINT `t_fans_profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `t_celebrity` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `t_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `t_migrations`;
CREATE TABLE `t_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `t_picture`
-- ----------------------------
DROP TABLE IF EXISTS `t_picture`;
CREATE TABLE `t_picture` (
  `uid` int(11) NOT NULL,
  `file_id` varchar(80) NOT NULL DEFAULT '' COMMENT '照片文件ID',
  `url` varchar(80) DEFAULT '' COMMENT '文件URL',
  `upload_time` int(11) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`uid`,`file_id`),
  CONSTRAINT `t_picture_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `t_celebrity` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `t_product_picture`
-- ----------------------------
DROP TABLE IF EXISTS `t_product_picture`;
CREATE TABLE `t_product_picture` (
  `id` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL COMMENT '照片类型：0 工厂, 1 品牌商, 2 设计师, 3档口',
  `file_id` varchar(191) NOT NULL DEFAULT '' COMMENT '照片文件ID',
  `url` varchar(191) DEFAULT '' COMMENT '文件URL',
  `upload_time` int(11) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`,`type`,`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `t_stalls`
-- ----------------------------
DROP TABLE IF EXISTS `t_stalls`;
CREATE TABLE `t_stalls` (
  `stall_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weixinNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stallName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stallNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stall` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stallCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipmentOK` tinyint(4) NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `open_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1349 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `t_users`
-- ----------------------------
DROP TABLE IF EXISTS `t_users`;
CREATE TABLE `t_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `factory_right` tinyint(1) NOT NULL DEFAULT '0',
  `brand_right` tinyint(1) NOT NULL DEFAULT '0',
  `designer_right` tinyint(1) NOT NULL DEFAULT '0',
  `stall_right` tinyint(1) NOT NULL DEFAULT '0',
  `contact_only` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records for `t_brands`
-- ----------------------------
INSERT INTO `t_brands` VALUES ('103', '闫炳伟', '17606250500', 'y13666302004', '店长', '威海悠然户外有限公司', 'FISHING FUN PARTY/渔乐派', '5000万', '户外运动', '1', '100人', '1', '', '山东省', '威海市', '环翠区', '高技术产业开发区世昌大道-298-5号-B201', '钓竿', '300', '简约', '', '', '1', '天闲', '我们是一家主要给予实体渔具店供货的厂家现在刚做线上资源不是特别多 希望合作一下共赢
', '');
INSERT INTO `t_brands` VALUES ('104', '卢芳', '13720872805', 'fannylu1988', '品牌推广主管', '名鞋库网络科技有限公司', '名鞋库，以及自有品牌朗蒂维', '约8亿', '户外运动', '0', '1500', '1', '', '福建省', '厦门市', '湖里区', '湖里大道78号万山一号楼3层', '名鞋库销售耐克阿迪NB等品牌运动鞋服配，朗帝维品牌是男鞋', '350', '运动时尚，男鞋朗蒂维是欧范潮鞋', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('105', '廖妹銮', '13799259953', '18054825889', '推广主管', '乔丹体育', '乔丹', '5000000000', '户外运动', '1', '100万双鞋', '1', '', '福建省', '厦门市', '湖里区', '安岭二路82号', '运动户外', '200', '运动休闲', '', '', '1', '飞电', '销售额分销模式
', '');
INSERT INTO `t_brands` VALUES ('106', '王翠英', '13811377607', 'yancy0512', '探路者电子商务VMD经理', '探路者控股集团股份有限公司', '探路者', '6亿', '户外运动', '1', '2000人', '1', '', '110100', '', '', '北京市海淀区知春路6号锦秋国际大厦A座24层', '户外登山服装，鞋品，装备', '650', '户外科技、休闲时尚', '', '', '1', '456', '"借助网红资源更好表现产品；借助网红平台的优势更好推广品牌，与平台互利共赢。
', '');
INSERT INTO `t_brands` VALUES ('109', '黄晋', '13676228886', '', 'CMO', '阿吉斯( 上海)体育用品公司', 'HOTSUIT后秀', '6000万', '户外运动', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '100万粉丝的运动健身达人
', '');
INSERT INTO `t_brands` VALUES ('110', '赖怀志', '15858255960', 'wudi699320', '运营总监', '杭州卡朵家纺有限公司', '爱斯基摩人', '1.7亿', '家居家纺', '1', '无', '1', '', '浙江省', '杭州市', '江干区', '杭州九堡镇九环路63号2a-3楼', '床上用品', '300', '北欧', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('111', '石磊', '13588685005', 'ywliren', '经理', '义乌市利仁家居用品有限公司', '利仁', '200', '家居家纺', '1', '30', '1', '', '浙江省', '金华市', '义乌市', '江东樊村36-2-2', '创意毛巾', '10', '创意，时尚，新奇特', '', '', '1', '456', '9家五百强选择【利仁】加工定制广告促销礼赠品《手机号=QQ=微信=支付宝=钉钉=13588682005》【合作商和老客户】可共享15万以上QQ好友客户资源【主要比例排名：礼品公司，广告企业，毛巾行业，家居用品，布艺家纺，纺织品，婚礼婚庆，加盟连锁实体店】
', '');
INSERT INTO `t_brands` VALUES ('112', '葛川', '18653723320', '602088610', '运营', '济宁居安环保技术有限公司', '居安怡', '80万', '家居家纺', '1', '厂房1000平', '0', '', '山东省', '济宁市', '任城区', '金宇路6号海能国际C座11楼', '甲醛清除剂', '138', '喷雾瓶装', '', '', '1', '飞电', '2015年12月开始入驻的天猫。维护产品形象。
', '');
INSERT INTO `t_brands` VALUES ('113', '澹雅', '13061551231', '13061551231', '运营', '昆山雅莲有限公司', '新热泪', '1500', '家居家纺', '1', '50', '1', '', '江苏省', '苏州市', '昆山市', '恒龙', '蚊帐', '200', '现代简约', '', '', '1', '456', '', '');
INSERT INTO `t_brands` VALUES ('114', '陈国华', '13805098811', 'V676299', '总经理', '江苏采绎来电子商务有限公司', 'CHYELA采绎来', '1000万', '家居家纺', '1', '定制车间工人8人', '1', '', '江苏省', '苏州市', '常熟市', '高新技术产业开发区金麟路5号', '家居布艺 床上用品', '80', '创意定制', '', '', '1', '飞电', '根据情况协商
', '');
INSERT INTO `t_brands` VALUES ('115', '严鑫', '18029286999', '22935886', '总经理', '英国尊雅家居实业有限公司', 'paratex', '3亿美金', '家居家纺', '0', '2000人', '1', '', '810000', '', '', '九龙旺角花园街2-16号好景商业中心7楼705', '乳胶枕头、床垫', '380', '进口商品', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('116', '林玮', '18616569767', 'pyjf168', '电商', '上海淡月家居用品有限', '百唯爱', '1000万', '家居家纺', '0', '20人', '0', '', '310100', '', '', '松江谷阳北路2399弄22号603室', '家纺', '300', '田园风格', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('117', '邵玉婷', '13501770945', 'leona_syt', '市场部经理', '罗莱家纺', 'LOVO乐我家纺', '有机会合作再细聊吧', '家居家纺', '1', '2000人', '1', '', '310100', '', '', '七莘路3588号', '家纺', '500', '美式时尚', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('118', '贾丽', '13701961959', 'lily_jia@yeah.net', '电商负责人', '上海沃施园艺股份有限公司', '沃施', '2亿', '家居家纺', '1', '3000人左右', '1', '', '310100', '', '', '元江路4800号', '园艺家居用品', '200', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('119', '飞天', '18801868622', '', '运营经理', '多喜爱信息技术有限公司', '多喜爱', '1.05亿', '家居家纺', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '面谈
', '');
INSERT INTO `t_brands` VALUES ('120', '葛超然', '18805713296', '', '总经理', '杭州宝仕道贸易有限公司', '宝仕道', '3500万', '家居家纺', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '产品和兴趣爱好匹配
', '');
INSERT INTO `t_brands` VALUES ('121', '王中攀', '15305740097', '', '销量总监', '宁波梦神集团', '梦神床垫', '4．5亿', '家居家纺', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('122', '刘平', '15605719963', '', '经理', '杭州艾迦贸易有限公司', 'Doga豆荚', '500万', '家居家纺', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '"2011年和美团、拉手、窝窝、大众点评等几百家团购网站合作，单次销售（7天）多次创纪录。
', '');
INSERT INTO `t_brands` VALUES ('127', '蔡健威', '13326905757', 'aweizai5757', '负责人', '杭州尊安电子商务有限公司', '普利帝灯饰', '8000万', '家具建材', '1', '300人 1万平方米', '1', '', '浙江省', '杭州市', '滨江区', '', '灯具照明', '700', '现代和欧式', '', '', '1', '飞电', '有量
', '');
INSERT INTO `t_brands` VALUES ('128', '边继伟', '13782317123', 'Err9999', '总经理助理', '禹州坪山钧窑有限公司', '钧瓷', '1000万', '家具建材', '1', '占地10亩，综办楼1栋，车间厂房4处，展厅4处，钧瓷烧制窑炉5座。员工40人。', '1', '', '河南省', '许昌市', '禹州市', '神垕镇开发区', '钧瓷', '2000', '传统钧瓷', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('129', '杨阳', '15914118685', 'yulyang', '运营经理', '广州思俪浦电子商务有限公司', '斯林百兰', '3000万', '家具建材', '1', '2亿', '1', '', '广东省', '广州市', '天河区', '冼村街道华强路富力盈丰大厦A座1101室', '床垫', '4000', '现代、英伦', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('130', '邹敏辉', '13923108757', 'lineage520919', '策划部长', '广州大森林电子商务有限公司', '大森林 法丽莎 约翰华兰 法姿彤 冬熊 风哥华（京东）', '2亿', '家具建材', '0', '无', '1', '', '广东省', '广州市', '天河区', '壬丰大厦西厅910', '家具', '6000', '法式、韩式、现代', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('131', '王俊杰', '13618085250', 'thinnkpadss', '经理', '广东顺德美家饰家居用品有限公司', '拉菲曼尼', '280000000', '家具建材', '1', '1000人', '1', '', '广东省', '佛山市', '顺德区', '龙江镇亚洲材料城C区凤城电子商务港6楼', '欧美家具', '4500', '欧美家具', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('132', '李志强', '18602676262', 'xq_online', '总经理', '天津市飞鹏工贸有限公司', '木头家族', '3000万', '家具建材', '1', '200人', '1', '', '120100', '', '', '双口镇立新工业园', '家具，软装，电商体验服务', '10000', '儿童，美式', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('133', '赵品红', '13505715948', 'zhaopinhong', '董事长', '杭州雅生生物科技有限公司', 'ICEDGE', '100万', '美妆', '1', '4万平方米', '1', '', '浙江省', '杭州市', '余杭区', '文一西路998号海创园19幢701', '加拿大冰川泥系列护肤品', '318', '盒装', '', '', '1', '飞电', '品牌供货
', '');
INSERT INTO `t_brands` VALUES ('134', '刘先生', '13735528333', '13281088488', '总经理', '杭州壹品壹冠生物科技有限公司', '兰瑟，珀莱雅', '5亿', '美妆', '1', '1000人', '1', '', '浙江省', '杭州市', '滨江区', '江陵路567号新东方大厦803', '化妆品，彩妆', '150', '日韩，欧美俱有', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('135', '章小霞', '13336179563', '13336179563', '总经理', '杭州风风科技有限公司', '芭莱芭秀', '5000w', '美妆', '1', '100', '1', '', '浙江省', '杭州市', '西湖区', '西斗门西苑小区1幢3单元103', '气垫', '168', '青春活力', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('136', '江建飞', '18858289969', '5556473', '运营负责人', '衢州若兮化妆品有限公司', '颐姿堂', '0', '美妆', '0', '0', '0', '', '浙江省', '衢州市', '柯城区', '', '护肤', '110', '产品图', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('137', '王彪', '15862910288', '15862910288', '总经理', '宿迁春草阁化妆品有限公司', '兰可欣，黎漾，画眉鸟 18到35', '1亿', '美妆', '1', '80人', '1', '', '江苏省', '宿迁市', '沭阳县', '软件产业园a栋7楼', '化妆品', '40', '时尚风格 18到35岁', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('138', '关粤', '13631391629', '13631391629', '电商经理', '广州市科元化妆品厂', '尚尔黛思', '100万', '美妆', '1', '100+人', '1', '', '广东省', '广州市', '白云区', '', '眼部 面部 身体护理品', '120', '功效型', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('139', '覃子殷', '13926964657', '346590722', '商务经理', '思芙美有限公司', '思芙美VMEI', '7000万左右', '美妆', '0', '香港、深圳、珠海、南京均有公司', '1', '', '810000', '', '', '香港新界火炭坳背灣街49-51號協力工業大廈1504室', '专柜合作：雅诗兰黛、兰蔻、dior、香奈儿等一线大牌。品牌代理：妙巴黎、CLIO、可莱丝等等。有大概4000多个SKU', '220', '时尚 25到35岁之间', '', '', '1', '飞电', '"（1）APP推广宣传
', '');
INSERT INTO `t_brands` VALUES ('146', '青辰', '18913389191', '18913389191', '副总裁', '思芙美有限公司（香港）', '思芙美', '5000W', '美妆', '0', '0', '0', '', '810000', '', '', '香港新界火炭坳背湾街38-40号华卫工贸中心906', '美妆保健品', '300', '高客单价化妆品', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('147', '罗罡', '13651759982', 'thomas771590', '运营总监', '上海鼎生贸易有限公司', '中和量贩海外专营店', '4000万', '美妆', '0', '无', '0', '', '310100', '', '', '真华路926弄第三创意空间1号楼503室', '美妆 食品 日化', '180', '日系', '', '', '1', '飞电', '美妆达人或网红达人 彩妆方面设计师
', '');
INSERT INTO `t_brands` VALUES ('148', '吴叙文', '18917698929', 'wuxuwen001', 'ceo', '上海明邸商贸有限公司', '丝诺', '9500万', '美妆', '1', '国内化妆棉生产规模第一', '1', '', '310100', '', '', '赤峰路433-32.', '化妆棉', '13', '清新舒适', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('149', '郭屹', '18605885546', '', '总经理', '杭州弥香科技有限公司', 'aroma me', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('150', '燕子', '18610813864', '', '天猫负责人', '梦想城堡（天津）电子商务有限公司', '阿芙', '10亿', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('151', '刘哿', '13735528333', '', '总经理', '杭州壹品壹冠生物科技有限公司', '兰瑟，珀莱雅', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('152', '徐涛', '13381127591', '', '渠道总监', '北京润合美商贸有限公司', '妮维雅 露得清 大宝 黑人 蜂花 片仔癀', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '配合品牌的内容推广，为指定店铺增加销售。
', '');
INSERT INTO `t_brands` VALUES ('153', '王庆', '13898903207', '', '运营', '伊人红妆国货美容护肤品店', '相宜本草、百雀羚、卡姿兰、安安金纯、郁美净', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('154', '林阳晴（蔷薇）', '15990020798', '', '运营总监', '浙江长生鸟珍珠生物科技有限公司', '长生鸟', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('155', '庞梓超', '15001059628', '', '分销', '北京润合美商贸有限公司', '大宝 黑人牙膏 蜂花 片仔癀 李施德林 露得清 妮维雅 舒蕾 美涛', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('156', '姚岭峰', '15921996674', '', '电商总监', '上海威淳实业有限公司', 'Moschner（莫施）', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '要求互动式合作。
', '');
INSERT INTO `t_brands` VALUES ('157', '石春宇', '18810599534', '', '运营', '可人美化妆品专营店', '大宝、凡茜、片仔癀、迷奇、上海女人', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('158', '邹挺', '13750843820', '', '运营', '杭州高兰电子商务有限公司', 'biofila.lubatti', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('159', '念念', '15906671999', '', '总监', '杭州高兰电子商务有限公司', '"Biofila,lubatti"', '', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '品牌宣传，代理
', '');
INSERT INTO `t_brands` VALUES ('160', '程世德', '13929537777', '', '董事长', '广东华一电子商务股份有限公司', '"韩绿HUENCO,面魔方MIANMOFANG"', '韩绿300万，面魔方200万', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '微信，微博推广
', '');
INSERT INTO `t_brands` VALUES ('161', '周永健', '18667126723', '', '营销总监', '杭州青梅网络科技有限公司', '思妍丽；薇婷；爽健等', '5500万', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('162', '徐超强', '13568843310', '', '运营总监', '成都盛林风行商贸有限责任公司', '柏卡姿', '100000000', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('163', '紫灵', '13456785037', '', '副总', '杭州徐娜拉电子商务有限公司', 'nala', '5亿', '美妆', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('164', '宋奕珺', '18606710985', 'belindaq', '营销企划经理', '杭州悠可', '代理美妆品牌', '10亿+', '美妆', '0', '0', '1', '', '浙江省', '杭州市', '江干区', '下沙海创园', '美妆', '', '女性', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('165', '顾斌', '13967101390', '13967101390', '总经理', '杭州菲叶贸易有限公司', '斯纳菲', '5000万', '母婴', '1', '50人', '1', '', '浙江省', '杭州市', '江干区', '九堡东方电子商务园17-107', '童鞋', '100', '舒适真皮休闲', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('166', '王记辉', '15868987741', 'lwjh20', '运营总监', '浙江丹妮婴童用品有限公司', '丹妮奇特', '53000000', '母婴', '1', '50人', '1', '', '浙江省', '金华市', '义乌市', '城店南路788号', '木质玩具', '70', '早教益智玩具', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('167', '陈育群', '13924793777', 'alex93777', 'CEO', '广东群宇互动科技有限公司', '淘竹马', '1亿', '母婴', '1', '100~500', '1', '', '广东省', '汕头市', '澄海区', '莱美路宇博电商园群宇科技楼4楼', '玩具、IP衍生品', '60', '卡通', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('168', '小可', '15112258900', '15112258900', '电商事业部总监', '广州爱韵生物科技有限公司', '袋鼠妈妈', '4亿', '母婴', '1', '200', '1', '', '广东省', '广州市', '白云区', '机场路401', '孕妇护肤品', '200', '基础护肤', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('169', '张丹', '13717713666', '13717713666', '总裁', '北京厚浦生物科技有限公司', 'Herlife 她生活', '3000000', '母婴', '0', '50', '1', '', '110100', '', '', '北京市东城区东直门内大街9号NAGA上院A座202', '高端经期护理产品', '158', '轻奢套装，独特创新', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('170', '桑朝君', '13911102991', 'sunvion', 'CEO', '北京悦迪正元科技有限公司', '悦迪  妈妈范', '100', '母婴', '0', '20', '1', '', '110100', '', '', '朝阳区柳芳地铁口新天第大厦B座703', '胎教服务', '300', '高端', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('171', '李楣', '13901804602', '13901804602', '总经理', '上海泽毅实业有限公司', 'hugmii', '3000万', '母婴', '0', '100人', '1', '', '310000', '310100', '0', '上海闵行区沪闵路3988号', '儿童用品', '', '妈妈', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('172', '吴志勇', '15307009222', '1877813', '总经理', '南昌中彦电子商务有限公司', 'gbox', '200万', '男装', '0', '代加工', '0', '', '浙江省', '杭州市', '上城区', '莫邪塘北村7幢2单元301', '男装', '100', '潮', '', '', '1', '飞电', '推广
', '');
INSERT INTO `t_brands` VALUES ('173', '魏如杰', '18668776799', '18668776799', '老板', '杭州薄荷绿电子商务有限公司', 'klepht', '3000万', '男装', '1', '100', '1', '', '浙江省', '杭州市', '余杭区', '东西大道', '潮流男装', '180', '日韩潮流', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('174', '俞良', '15857167988', 'yu?liang?coco?1973', '总经理', '杭州', '尊首', '5000万', '男装', '1', '300', '1', '', '浙江省', '杭州市', '江干区', '四季星座206室', '衬衣 T恤 裤子', '35', '韩版', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('175', '吴天翔', '13819309000', 'wu9000', '总经理', '浙江威克赛供应链管理有限公司', '威克赛  鹿王澳普蒂姆', '5亿', '男装', '1', '员工600人 国内最大的男士毛针织供应商', '1', '', '浙江省', '嘉兴市', '桐乡市', '中华路37号', '羊毛衫 羊绒衫  桑蚕丝体恤衫等各式针织产品', '200', '商务 休闲 时尚', '', '', '0', '飞电', '一起打造最强的供应链平台，资源整合，快速反应，互相支持！
', '');
INSERT INTO `t_brands` VALUES ('176', '冯伟', '13867177105', 'seanfw', '主管', '杭州兽王实业', '兽王', '5亿', '男装', '1', '大型', '1', '', '浙江省', '杭州市', '萧山区', '', '皮衣裘皮', '2000', '商务休闲', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('177', '宋燕军', '18658869570', '18658869570', '总经理兼合伙人', '中国立酷派贸易有限公司', 'leecooper', '回款六个亿', '男装', '1', '--', '1', '', '浙江省', '杭州市', '江干区', '', '牛仔男女装', '800', '潮流英伦牛仔', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('178', '朱敏伟', '13958113553', 'niro_zhu', '运营总监', '海盐县南圣服饰有限责任公司', 'MARKLESS', '1000w（线上品牌）', '男装', '1', '现有生产流水线14条，员工300余名，厂区占地面积15000平方米，建筑面积10000平方米，共拥有500余台套专门用于服装生产的缝纫设备，其中各类花式日本进口设备350余台套。', '1', '', '浙江省', '嘉兴市', '海盐县', '于城镇南', '羽绒服 夹克 休闲裤 衬衫 T恤等', '200', '欧美简约', '', '', '1', '飞电', 'MARKLESS是目前我们公司运营了5年的电商品牌，另外目前正在规划一个专业羽绒服品牌（自主国家专利技术）和一个亲子装定制品牌，具体合作期望进一步沟通。
', '');
INSERT INTO `t_brands` VALUES ('179', '徐国欣', '13853633038', '13853633038', '总经理', '诸城市欣泰制衣有限公司', '外贸出口类', '5000万', '男装', '1', '200人', '1', '', '山东省', '潍坊市', '诸城市', '', '针织品', '50', '休闲装', '', '', '1', '飞电', '诚信为本，合作共赢。
', '');
INSERT INTO `t_brands` VALUES ('180', '仲子', '13275288777', '13275288777', '法人代表', '苏州杰克轩驰服饰有限公司', '杰克轩驰', '2600万', '男装', '1', '120人', '1', '', '江苏省', '苏州市', '常熟市', '常熟国际服装城二楼西街10号', '羊毛呢子大衣，风衣', '180', '简欧', '', '', '1', '飞电', '卖家有较强的电商运营能力，活动资源多，活动频繁和大力支持货品。
', '');
INSERT INTO `t_brands` VALUES ('181', '吴培松', '15160342731', 'song824860704', '运营助理', '深圳务实电子商务有限公司', '劲肯旗舰店', '2000万', '男装', '1', '200-500人', '1', '', '广东省', '深圳市', '龙岗区', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '西服套装 大衣 西裤 衬衫 T恤', '300', '韩版修身 商务 职业  婚礼', '', '', '1', '飞电', '真诚合作
', '');
INSERT INTO `t_brands` VALUES ('182', '吴雄伟', '13666931035', '13666931035', '运营助理', '深圳市务实电子商务有限公司', '森帝鸟', '500万', '男装', '1', '200~500人', '1', '', '广东省', '深圳市', '龙岗区', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '西服套装、大衣、西裤、衬衫、T恤', '350', '韩版修身、商务、职业 、婚礼', '', '', '1', '飞电', '诚信为本，长期合作！
', '');
INSERT INTO `t_brands` VALUES ('183', '方碧询', '15920105908', 'fangbixun08', '运营专员', '佐丹奴', '佐丹奴', '2亿', '男装', '0', '主要合作工厂50家，规模500～1000人以上', '1', '', '广东省', '广州市', '海珠区', '', '服装', '200', '欧美简约', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('184', '刘敏辉', '15700106860', '15700106860', '经理', '深圳市壹京美慈贸易有限公司', 'VALENDILONG', '一亿五千余万元。', '男装', '1', '300人', '1', '', '广东省', '广州市', '荔湾区', '环市西路139号汇美国际服装城', '男士牛仔裤，衬衣', '99', '潮流时尚男装', '', '', '1', '飞电', '线下供应链完善，寻求天猫合作，自己工厂。
', '');
INSERT INTO `t_brands` VALUES ('185', '骆俊阳', '13625966596', 'ctkwcwbj', 'CEO', '爱定爱电子商务有限公司', '爱定爱', '1000000', '男装', '1', '30', '1', '', '福建省', '厦门市', '思明区', '长青路华美达长升大酒店', '服装', '3000', '时尚个性', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('186', '张诗碧', '13788855460', '13788855460', '公司电商负责人', '石狮市符号电子商务有限公司', '符号公社', '电商部3000万+', '男装', '1', '200多人', '1', '', '福建省', '泉州市', '石狮市', '友铭路75对面电子商务部', '休闲裤，工装裤', '129', '欧美休闲时尚', '', '', '1', '飞电', '全公版，适合换标等变通操作。针对电商快速反应供应链
', '');
INSERT INTO `t_brands` VALUES ('187', '李宏辉', '18698395558', 'OLRIK', '总经理', '泉州市丹尼斯特服饰有限公司', 'OLRIK', '6000万', '男装', '1', '3000平', '1', '', '福建省', '泉州市', '石狮市', '香江路五星段第六实验小学隔壁三排二栋丹尼斯特服饰1-7层', 'T恤、夹克、皮衣、太空棉卫衣、棉衣、卫裤', '150', '北欧风格', '', '', '1', '飞电', '公司主营天猫企业C店及阿里巴巴5年，稳定运营团队，寻找网红合作，希望有质的飞跃！
', '');
INSERT INTO `t_brands` VALUES ('188', '户勇', '15868819045', '', '副总经理', '杭州墨匠信息技术有限公司', 'United Athle /Starwars/controlbody', '', '男装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '目前无
', '');
INSERT INTO `t_brands` VALUES ('189', '农家庆', '13910158581', '1209472118', 'CEO', '杭州依梵科技有限公司', '婷美', '2亿', '内衣', '1', '30人', '1', '', '浙江省', '杭州市', '滨江区', '南环路4028号中恒世纪科技园7幢A座302', '文胸，塑身衣，瘦腿袜，修型保暖内衣', '280', '时尚健康', '', '', '1', '飞电', '女性网红
', '');
INSERT INTO `t_brands` VALUES ('190', '程 铭', '13516995918', '13516995918', '经理', '浦江天蝎服饰有限公司', '天蝎', '100000000', '内衣', '1', '500', '1', '', '浙江省', '金华市', '浦江县', '安平路81号', '天蝎', '68', '运动瑜伽', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('191', '祝诗剑', '18967507857', 'NongMai808', 'CEO', '浙江百润纺织有限公司', 'ta是我的', '8000万', '内衣', '1', '300人', '1', '', '浙江省', '绍兴市', '诸暨市', '王家井镇市南路3号', '丝袜，棉袜，内裤，保暖裤，打底裤，', '30', '少女', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('192', '顾恒宇', '18502728460', '18502728460', 'COO', '浙江藏富电子商务有限公司', 'AOKO', '2000万', '内衣', '1', '年产量100万件', '1', '', '浙江省', '湖州市', '吴兴区', '创业大道跨境电子商务产业园A座2楼', '男士时尚内裤', '30', '时尚 酷炫', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('193', '李洪辉', '15662599587', '15154455432', '业务', '诸城市欣泰制衣有限公司', '恒源祥小囡', '5000万', '内衣', '1', '300人', '1', '', '山东省', '潍坊市', '诸城市', '龙都街道大邦工业园一号', '童内衣', '100', '家居', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('194', '刘源浩', '18627445246', 'moonbadi_tony', '总经理', '武汉爱生活网络技术有限公司', '梦芭蒂', '1.5亿', '内衣', '1', '200人', '1', '', '湖北省', '武汉市', '江夏区', '光谷大道303号光谷芯中心魔方商务体11楼', '内衣', '150', '时尚舒适', '', '', '1', '飞电', '"1、品牌合作，我们有10几个品牌，主要经营梦芭蒂，零售价格段100-200元。
', '');
INSERT INTO `t_brands` VALUES ('200', '谭小伶', '13703039087', 'lintanxiao', '老板', '中山市小榄镇新浪潮时装厂', '富丽雅fuliya', '2300万', '内衣', '1', '250人', '1', '', '440000', '442000', '', '小榄镇祥丰北路77号', '男士内裤', '49', '中高档', '', '', '1', '飞电', '不要做冒牌的人
', '');
INSERT INTO `t_brands` VALUES ('201', '王国庆', '13636594466', '13636594466', '运营总监', '上海陆洲贸易有限公司', '雪俐', '150000000', '内衣', '1', '500人', '1', '', '310100', '', '', '曹联支路25号', '家居服', '100', '韩系', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('202', '陈雍', '18601669288', 'chenyjeff', 'ceo', '上海艾柏时尚服饰有限公司', '缪诗Mmuses', '4000万', '内衣', '0', '300人', '1', '', '310100', '', '', '中华新路496号', '女性内衣文胸小裤家居服', '135', '都市，泛欧化，唯美', '', '', '1', '456', '', '');
INSERT INTO `t_brands` VALUES ('203', '戴薇', '15920355861', '', '总经理', '广州润微服装有限公司', '润微', '2亿', '内衣', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('204', '戴黎明', '15067311721', '', '总监', '浙江嘉欣丝绸股份有限公司服饰分公司', '金三塔', '7000万', '内衣', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '合适
', '');
INSERT INTO `t_brands` VALUES ('205', '陈莹', '13757190181', '', '总经理', '杭州元汇', 'intouch（因他趣）', '', '内衣', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('206', '汤米', '13816122624', '', '总经理', '上海黛丝电子商务有限公司', 'Daisyrose', '', '内衣', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('207', '董阳胜', '13961165935', '', '运营总监', '常州市曼颜服饰有限公司', '姿彦丽儿', '', '内衣', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('208', '邵飞春', '13706668445', '13706668445', '总经理', '浙江森马电子商务有限公司', '森马，glm，巴拉巴拉，巴帝巴帝', '18亿', '女装', '1', '400家', '0', '', '浙江省', '杭州市', '西湖区', '文二西路', '男装，女装，童装', '200', '休闲，商务', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('209', '姚建刚', '13706845586', 'tonyaojg', '销售副总', '宁波天亚服装有限公司', '天亚服装', '1.2亿', '女装', '1', '600-700', '0', '', '浙江省', '宁波市', '北仑区', '大港六路65号', '休闲男女装，风衣夹克连衣裙短裙裤子', '80', '休闲类，洗水染色为主', '', '', '0', '飞电', '签订规范的合同，30%左右订单，账期不超过45天。
', '');
INSERT INTO `t_brands` VALUES ('210', '黄国赵', '15988110173', '15988110173', '商品经理', '浙江海贝服饰', '海贝/紫涵', '10亿', '女装', '0', '外发', '1', '', '浙江省', '杭州市', '滨江区', '柏盛渡口大厦裙楼', '服饰', '300', '简约、优雅、率气/森系（紫涵）', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('211', '薛华江', '13185555490', 'xhj1984326', '运营总监', '绍兴咚咚呛电子商务有限公司', '百思寒', '2000万', '女装', '1', '50', '1', '', '浙江省', '绍兴市', '绍兴县', '', '女装羽绒服', '800', '欧美简约', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('212', '涂皓婧', '18658130070', 'fresh_kiss', '运营总监', 'Artka', 'Artka、狂生记、树夏', '3亿', '女装', '1', '100', '1', '', '浙江省', '杭州市', '上城区', '', '女装', '380', '多风格', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('213', '王成华', '13858168695', '13858168695', '运营', '杭州兰林服饰有限公司', '无箴衣坊', '2000w', '女装', '1', '50', '1', '', '浙江省', '杭州市', '下城区', '华丰路2号华丰工业园', '连衣裙、衬衣、毛呢外套、风衣、羽绒服', '200', '棉麻', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('214', '孙志朋', '18658111731', '18658111731', '市场部经理', '杭州麒腾网络科技有限公司', 'TP公司资源丰富', 'TP', '女装', '0', 'TP', '0', '', '浙江省', '杭州市', '滨江区', '秋溢路601号云狐科技园3号楼603', '女装，美妆', '100', 'TP', '', '', '1', '飞电', '我们是杭州的电商服务公司非常看好网红项目的看看有没有渠道合作机会，公司团队阿里系，本人做天猫商家服务已经3年多了基本淘宝商家联系方式都有，好友也有一万多电商商家
', '');
INSERT INTO `t_brands` VALUES ('215', '高炎军', '13567378191', 'xiaojun673085', '业务经理', '嘉兴兴世达服装', 'BOSS', '5千万', '女装', '1', '中', '0', '', '浙江省', '嘉兴市', '秀洲区', '平南路281号', '外贸订单', '100', '欧美女装', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('216', '王中攀', '15305740097', 'Shashou0097', '销售主管', '宁波梦神家居股份有限公司', '梦神床垫', '4．5亿', '女装', '1', '450人', '1', '', '浙江省', '宁波市', '江北区', '浙江省宁波市江北区兴甬路165号', '床垫', '2000', '家居内产品', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('217', '陈刚', '13683359555', '13683359555', '经理', '杭州宽诚电子商务有限公司', 'moonicer', '100000000', '女装', '1', '100', '1', '', '浙江省', '杭州市', '滨江区', '滨康路101号', '皮草，真丝', '1000', '高端', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('218', '曹振', '15068720725', 'cao?zhen?3917982', '运营经理', '金华衣尚道服饰有限公司', '衣尚道', '3000+', '女装', '1', '100-200', '1', '', '浙江省', '杭州市', '江干区', '19号大街571号', '休闲潮流女装', '130', '休闲潮流', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('219', '张超群', '15336551131', '15336551131', '老板', '杭州帝淘科技有限公司', '清影绣雅', '1500万', '女装', '1', '50', '1', '', '浙江省', '杭州市', '江干区', '七堡新村1区11号', '女装', '280', '修身小性感', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('220', '魏峰', '13858193236', 'haidunlaodie', '负责人', '南京戈多服饰有限公司', 'Gordo no waiting', '2000万', '女装', '1', '70-100人', '1', '', '浙江省', '杭州市', '江干区', '四季青意法服饰城', '女装小衫、套装、呢料大衣、棉衣；', '0', '快时尚', '', '', '1', '飞电', '我们自营工厂，并在四季青做批发十来年，与快鱼服饰等快时尚品牌长期合作；我们的信条是：做服装是件平凡的工作，我们想把它做好。
', '');
INSERT INTO `t_brands` VALUES ('221', '王波', '15068318666', '15068318666', '经理', '桐乡市百纯羊绒制品有限公司', '百纯', '3000万', '女装', '1', '年产30万件', '1', '', '浙江省', '嘉兴市', '桐乡市', '', '针织衫，毛衫，外套，连衣裙', '150', '欧美风', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('222', '朱国美', '15657570177', '15657570177', '总经理', '绍兴市米图服饰有限公司', '唐狮代工', '5000万', '女装', '1', '200多工人', '1', '', '浙江省', '绍兴市', '越城区', '', '女装，童装连衣裙，时装裤，呢大衣等', '60', '欧美', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('223', '李运', '15057167652', '15057167652', '运营经理', '杭州昶廷贸易有限公司', '维丹诺', '5000万', '女装', '1', '200人', '1', '', '浙江省', '杭州市', '滨江区', '逸天广场1-1-401', '女鞋', '60', '潮流韩版', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('224', '赖章军', '15067747392', 'laizhangjun', '运营总监兼新媒体营销负责人', '上海享趣电子商务有限公司', '醉清风，谜姬', '四个亿', '女装', '0', '跟情趣用品主流品牌厂家都有合作', '1', '', '浙江省', '温州市', '龙湾区', '蒲州街道雁荡西路二十号五楼', '避孕套，情趣内衣，成人玩具', '70', '成人用品全品类，各种热销产品都有', '', '', '1', '飞电', '"更倾向于品牌营销内容方面的合作(比如打造几个醉清风的达人等),供货也可以，我们有自己的分销网站，支持一件代发，批发。但基本都是要求先付款后发货，没有账期的"
', '');
INSERT INTO `t_brands` VALUES ('227', '陈佳伟', '17753276888', 'c15376795083', '总经理', '青岛韩依莲服饰有限公司', '绣尚乐楚', '20000000', '女装', '1', '100人', '1', '', '山东省', '青岛市', '胶州市', '常州南路528号', '休闲裤', '60', '休闲韩版', '', '', '0', '飞电', '现货现款
', '');
INSERT INTO `t_brands` VALUES ('228', '王俞静', '15376720933', 'wangjing065353', '经理', '青岛红桦林服饰有限公司', '桔桦', '国内销售额5000万左右', '女装', '1', '外贸加工型工厂占地7800平方米 工人270名 10条服装生产流水线 年生产服装200万件左右产品主要以针织为主', '1', '', '山东省', '青岛市', '即墨市', '服装工业园孔雀河四路58号', '男装女装童装', '200', '欧韩风格', '', '', '1', '飞电', '我们是韩都衣舍供应商 对于小快灵做的很有优势同时也能满足大订单快速出货的需求
', '');
INSERT INTO `t_brands` VALUES ('229', '兰晓雯', '18660237291', 'L1908538394', '业务担当', '青岛珂玫琳贸易有限公司', '珂玫琳', '无', '女装', '1', '200人', '1', '', '山东省', '青岛市', '市南区', '延吉路162号海延雅居7号楼1-1101', '家居服，童装', '100', '家居服，童装', '', '', '0', '飞电', '可以看款下单，也可以来样订单生产，希望有长期合作，详细的可以面谈。
', '');
INSERT INTO `t_brands` VALUES ('230', '林灿祥', '18962326555', '18962326555', '总经理', '上海积姿商贸有限公司', 'fondioci梵迪姿', '70W', '女装', '1', '50-100', '0', '', '江苏省', '苏州市', '常熟市', '莫城三溏长浜路长居庭36号', '中老年女装', '118', '休闲 时尚 大码 真两件', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('231', '杜丹婷', '13653816118', 'dudanting002', '生产计划总监', '郑州画眉服装设计有限公司', '烟花烫', '1亿', '女装', '1', '300', '1', '', '河南省', '郑州市', '金水区', '金城国际广场6号楼西单元2306', '女装', '280', '民族典雅风', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('232', '紫龙', '18665881639', 'xin800921', '品牌创始人', '深圳市那时情怀电子商务有限公司', '纳蔻', '13000000', '女装', '1', '150人', '0', '', '广东省', '深圳市', '罗湖区', '莲塘鹏基工业区706幢3F', '大淑女装', '430', '简欧', '', '', '1', '飞电', '网红要求30岁__35岁，有良好文字功底和审美懂搭配，喜欢社交活动，有50000以上活跃粉丝
', '');
INSERT INTO `t_brands` VALUES ('233', '陈锋', '18825181486', '18871583459', '集市运营经理', '广州汇美服装有限公司', 'm茵曼', '三千六百万', '女装', '1', '1500', '1', '', '广东省', '广州市', '海珠区', '', '女装', '290', '文艺', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('234', '龚丽娜', '13100666333', '13100666333', '电商总监', '广州市尚汇服饰有限公司', '淑女坊', '线下5亿', '女装', '1', '500车位', '1', '', '广东省', '广州市', '白云区', '', '女装', '200', '淑女装', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('235', '陈嘉亨', '18620493332', '158803459@qq.com', '运营总监', '广州市海珠区兰冠贸易商行', '梵希蔓', '5000万', '女装', '1', '200人', '1', '', '广东省', '广州市', '海珠区', '石榴岗路9号4楼', '女装', '230', '国民风，民族风', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('236', '杨俊', '13450208117', 'weiyi0743', '运营总监', '广州两三事服饰有限公司', '两三事', '5000万', '女装', '0', '200人', '1', '', '广东省', '广州市', '海珠区', '南泰路168号联星创意中心2号楼819', '服饰鞋包', '320', '欧美', '', '', '1', '飞电', '有自己独到的审美品味，和良好的气质形象，有一定数量的活跃粉丝，能够与粉丝有效互动，有较强的选款组货和拍摄展示能力，熟悉互联网运作模式。
', '');
INSERT INTO `t_brands` VALUES ('237', '冯远航', '13560488445', 'yuanhang52000', '副总经理', '广州两三事有限公司', '两三事', '5500万', '女装', '0', '50', '1', '', '广东省', '广州市', '海珠区', '', '女装', '250', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('238', '李涛', '18665964496', 'viselee', '电商总监', '深圳市天尚服装有限公司', 'evaouxiu伊华欧秀', '线下4亿线上6000万', '女装', '1', '300人', '1', '', '广东省', '深圳市', '罗湖区', '建设路2016号南方证券大厦A座9楼', '女装', '550', '欧美风', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('239', '王春生', '13902722644', '3521762', '总经理', '汕头市缇茵服饰有限公司', '缇茵', '800万', '女装', '1', '168', '1', '', '广东省', '汕头市', '澄海区', '澄华工业区305号 缇茵服装厂', '针织衫 毛衣', '59', '日韩', '', '', '1', '飞电', '可来图来版定制生产
', '');
INSERT INTO `t_brands` VALUES ('240', '陈禹道', '18688877911', '49201178', '总经理', '广州市米昕蔚服装有限公司', 'missweet', '2000万', '女装', '1', '1000方', '1', '', '广东省', '广州市', '番禺区', '大石街河村工业二路7号c栋401', '连衣裙，套装，外套', '100', '少女', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('241', '魏生', '13265184980', 'weibiaohu1986', '老板', '广州胜势电子商务有限公司', 'sy尚阳', '2千万+', '女装', '1', '100+', '1', '', '广东省', '广州市', '白云区', '金沙洲路17号', '牛仔裤', '150', '民族风', '', '', '1', '飞电', '需求合作
', '');
INSERT INTO `t_brands` VALUES ('242', '叶先生', '18933954574', 'junyu＿ye', '总经理', '广州亿划商贸有限公司', '库蕾哈', '8千万', '女装', '1', '200', '1', '', '广东省', '广州市', '白云区', '金沙洲金程广场415', '女士牛仔', '100', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('243', '张小荣', '18928761889', '15918452506', '经理', '广州芊酷服装有限公司', 'Qian  z    Ku', '80000000', '女装', '1', '150人', '1', '', '广东省', '广州市', '白云区', '广州白云区祥岗新街38号五楼', '连衣裙      裤子', '100', '收腰少妇', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('246', '黄莹莹', '15914306835', 'yet-ta', '品牌部', '广州市创达服饰有限公司', '达丽坊', '45000000', '女装', '0', '100', '1', '', '广东省', '广州市', '海珠区', '南华西街道大干围海珠创意产业园11-1西梯达丽坊', '女装', '450', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('247', '刘青松', '13506000861', '13506000861', '总监', '福建金苑女装', '金苑', '12亿', '女装', '1', '5000人', '1', '', '福建省', '泉州市', '石狮市', '宝盖科技园', '女装', '450', '甜美', '', '', '1', '飞电', '怎么合作？
', '');
INSERT INTO `t_brands` VALUES ('248', '涂春荣', '13656035777', 'Gouyougou1314', '董事长', '厦门零度尚品电子商务有限公司', '零度尚品', '过亿', '女装', '0', '200', '1', '', '福建省', '厦门市', '思明区', '软件园二期观日路34号102', '男士皮鞋、箱包、眼镜', '800', '时尚商务', '', '', '1', '飞电', '销售分成模式
', '');
INSERT INTO `t_brands` VALUES ('249', '吴昆明', '13470999999', '13470999999', '董事长', '高梵电商', '高梵', '2.3亿', '女装', '1', '500', '1', '', '安徽省', '合肥市', '瑶海区', '安粮十四号十七楼', '羽绒服', '268', '韩版', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('250', '刘贤海', '13707994735', 'yidanhuizi', '总经理', '东莞市韩派服饰有限公司', '派也', '800万', '女装', '1', '50', '1', '', '440000', '441900', '', '虎门镇博美龙底工业路三巷三号', '女装', '150', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('251', '周伟', '13826977597', 'ydfs86821888', '老板', '东莞市业达服饰有限公司', '猫女丫头', '1300万', '女装', '1', '一条龙', '1', '', '440000', '441900', '', '大朗巷头纺织路7街3号', '毛衣', '70', '甜美', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('252', '张浩', '13686065157', '13683065157', '经理', '东莞市雅逸服装有限公司', '欧雅潮', '2000', '女装', '1', '51一100', '1', '', '440000', '441900', '', '大朗镇康富路233号', '针织服装', '100', '欧美', '', '', '1', '飞电', '付款要及时
', '');
INSERT INTO `t_brands` VALUES ('253', '李玉', '18681070745', '18681070745', '经理', '东莞市鹏驰服装有限公司', 'un?e?e?d', '1000万', '女装', '1', '30人到50人', '1', '', '440000', '441900', '', '大朗镇', '女装童装', '68', '休闲欧美大众', '', '', '1', '飞电', '"按合同做，我方保质保量按时交货，贵司及时支付合同有效款项。
', '');
INSERT INTO `t_brands` VALUES ('258', '向德芬', '18998060691', '18998060691', '经理', '东莞市德云服饰有限公司', '依妮莎', '21600000', '女装', '1', '83', '1', '', '440000', '441900', '', '大朗镇富康南二巷54号', '女装；童装', '47', '欧；韩', '', '', '1', '飞电', '诚信都可
', '');
INSERT INTO `t_brands` VALUES ('259', '谢一樊', '13266263636', 'Allen-5', '运营总监', '舍予服饰有限公司', '欧意', '2800万', '女装', '1', '120人', '1', '', '440000', '441900', '', '虎门镇镇口第二工业区镇业路6号', '女裤', '160', '欧美风', '', '', '1', '飞电', '合作共赢 利益共享
', '');
INSERT INTO `t_brands` VALUES ('260', '连祯华', '13712000006', 'zhikesp-ceo', '总经理', '东莞市织客服饰有限公司', '织客尚品', '800万元', '女装', '1', '50人', '1', '', '440000', '441900', '', '大朗镇巷头社区富康南十三巷24号', '女装毛衣、针织衫', '48', '日韩', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('261', '黄暖强', '13650044760', '13650044760', '电商部主管', '东莞市建盛针织有限公司', 'Zakinor', '8千万', '女装', '1', '300人', '0', '', '440000', '441900', '', '大朗镇大井头第二工业区顺兴二路48号', '女装毛衣', '55', '韩版，欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('262', '马潇潇', '13817104482', '13817104482', '市场总监', '马克华菲', '马克华菲', '线上8亿', '女装', '1', '5000', '1', '', '310100', '', '', '', '服装', '200', '年轻潮流', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('263', '黃梓維', '18664881283', '18664881283', 'CEO', '北京海益投資管理有限公司', '嘻魷記', '3.5億', '女装', '1', '2000人', '1', '', '110100', '', '', '北京市朝陽區 朝陽路國際創展中心', '食品', '30', '年輕好玩', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('264', '老胡', '13466334488', '13466334488', 'ceo', '北京锋创世纪贸易有限公司', '杉姿  卡璐丹  sailiang', '9000万', '女装', '1', '500人', '1', '', '110100', '', '', '珠江骏景北区16号', '羊绒大衣 双面呢大衣', '800', '欧美 简约', '', '', '1', '飞电', '提前给计划要求
', '');
INSERT INTO `t_brands` VALUES ('265', '孙大声', '15968127628', '', 'Boss', '尚和文化', '云上生活', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('266', '老魏', '15502426567', '', '创始人', '北京欧芭朵国际贸易有限公司', '威娅纪', '2000', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '身高160以上，体重50公斤以下，欧美风，粉丝30万以上，近半年每条微博评论不少于500，评论内容百分之50以上是咨询模特服装出处
', '');
INSERT INTO `t_brands` VALUES ('267', '吴昆明', '13470999999', '', '董事长', '高梵电商', '高梵', '2.5亿', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('268', '哞哞', '13510305237', '', '品牌经理', '深圳欧莎服饰', '欧莎osa', '4亿', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('269', '于文博', '18265590020', '', '公司负责人', '济南顺乾服饰有限公司', '苏槿', '2000000', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '希望解决流量，选款，买家秀等问题
', '');
INSERT INTO `t_brands` VALUES ('270', '杨勋忠', '18998319922', '', '集团副总裁', '广州市汇美时尚集团股份有限公司', '茵曼初语生活在左等十多个品牌', '25亿', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '100万以上粉丝
', '');
INSERT INTO `t_brands` VALUES ('271', '徐建洪', '13867422777', '', '总经理', '杭州象尚文化有限公司', '亦谷', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('272', '姚伟', '15669991010', '', '总经理', '杭州印象视觉电子商务有限公司', '秋水伊人', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('273', '朱印', '18521058637', '', '学生', '四川大学', '马克华菲女装', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('274', '马潇潇', '13817104482', '', '市场总监', '上海马克华菲电子商务有限公司', '马克华菲', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('275', '谢勇', '13606800381', '', '总经理', '杭州索想科技有限公司', '亦谷', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('276', '欧阳飞', '15867360133', '', '顾问', '杭州八觉服饰有限公司', '八觉', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('277', '龙永', '13466334488', '', 'ceo', '北京火狼电子商务有限公司，北京赛格服饰有限公司', '杉姿', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '公司发展近10年，拥有500多人规模生产工厂，30多人的设计团队，年产值在北京中高端大衣类目中位列前三。合作要求:有一定粉丝数量（30万）以上的网红能带动中高端人群消费，粉丝年龄段25/39岁之间，风格欧版简约。
', '');
INSERT INTO `t_brands` VALUES ('278', '何京宏', '13352968817', '', '总经理', '深圳市玩艺儿创意管理有限公司', 'SOFA/沙发', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '"品牌主要经营唯品会，年销售4000万。
', '');
INSERT INTO `t_brands` VALUES ('285', '张铁林', '15336551131', '', '老板', '杭州帝淘科技有限公司', '清影绣雅', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '网红
', '');
INSERT INTO `t_brands` VALUES ('286', '杜丹婷', '13653816118', '', '生产计划部总监', '郑州画眉服装设计有限公司', '烟花烫', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('287', '郑隽', '13588082630', '', '电商总经理', '杭州意丰歌服饰有限公司', '伊芙丽', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('288', '王先德', '15821357900', '', '顾问', '广州读你服饰有限公司', '读你', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '暂无
', '');
INSERT INTO `t_brands` VALUES ('289', '纪晓春', '18626353808', '', '董事', '北京艺起嗨资产管理有限公司', '维欧', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '国内前三的留学归国服装及首饰设计师及产品资源及国内前三的新媒体宣传渠道资源，嫁接网红销售渠道
', '');
INSERT INTO `t_brands` VALUES ('290', '余昊琛', '18688895723', '', '副总裁', '宽厚资本', 'Cariedo', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('291', '茹峰', '13858076045', '', '电商负责人', '浙江胜利羽绒制品有限公司', 'Snowman', '', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('292', '潘玟', '18858298030', '', '总经理', '杭州瑞尚潮品服饰有限公司', 'OMG', '1800W', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '与对应网红合作
', '');
INSERT INTO `t_brands` VALUES ('293', '龙吟', '18602043217', '', 'CEO', '广州市昕薇服饰有限公司', '昕薇', '3000E', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('294', '王飞', '18070392713', '', '运营总监', '北京汤梦伊商贸有限公司', 'M9000', '5000万', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('295', '元璋', '15958038326', '', '创业者', '杭州新共秀网络科技有限公司', '三月慕', '500W', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('296', '余昭凡', '18968122276', '', '董事长', '杭州熟买电子商务有限公司', '尚静', '1.5亿', '女装', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '面谈
', '');
INSERT INTO `t_brands` VALUES ('297', '郭明君', '18565192060', '18565192060', '客户主任', '广州墨可文化发展有限公司', '初语', '200000000', '女装', '1', '2000人', '1', '', '广东省', '广州市', '海珠区', '赤岗碧映路金领寓大厦915', '潮流女装', '', '白领', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('298', '唐瑞颖', '13566141638', 'tangryiying2006', '总经理', '瑞安市聚客电子商务有限公司', '伙伴家免费网', '10000000', '其他', '0', '500平方', '0', '', '浙江省', '温州市', '瑞安市', '', '微商城三级分销平台', '100', '多样化', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('299', '田涧岚', '13606548261', 'luo_yin_1989', '市场经理', '网易', '网易考拉海购', '面谈', '其他', '0', '无', '1', '', '浙江省', '杭州市', '滨江区', '网商路599', '母婴、服饰箱包、美妆个护、美食、保健品、3C', '999999999', '多样', '', '', '1', '飞电', '战略平台合作
', '');
INSERT INTO `t_brands` VALUES ('300', '方泽洲', '13957335877', 'hsyx351073125', '厂长', '嘉兴经开伊元包装材料厂', '伊元', '2000W', '其他', '1', '30名员工、2000千万产值', '1', '', '浙江省', '嘉兴市', '秀洲区', '华云路368号', '胶带封箱胶带', '150', '淘宝网店需求型', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('301', '杨林义', '18757161772', 'yang_zizhao', '渠道经理', '杭州剑瓷视界艺术品有限公司', '青韵轩', '8000万', '其他', '1', '杭州剑瓷视界艺术品有限公司是一家集创意、设计、研发、销售为一体的专业生产日用青瓷产品的企业。公司创建于2009年，总部坐落于杭州市拱墅区大兜路历史街区，生产基地座落于浙江龙泉青瓷产园区，研发生产茶具、餐具、陈设摆件、香道用具、文房用品等系列产品。', '1', '', '浙江省', '杭州市', '拱墅区', '大兜路历史街区122香积寺广场西侧', '龙泉青瓷，龙泉宝剑，和香', '100', '传统结合时尚', '', '', '0', '飞电', '结合我们龙泉青瓷产品而定。
', '');
INSERT INTO `t_brands` VALUES ('302', '陈炜', '18258883648', '蓝唯', '合伙人', '杭州辰月电子商务有限公司', '多个', '协商', '其他', '0', '品牌方的', '0', '', '浙江省', '杭州市', '江干区', '', '食品，跨境，洗护', '100', '国际品牌', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('303', '冯琳', '18657168881', '13166858', '董事', '杭州唯蜜服饰有限公司', '无', '1500', '其他', '1', '100', '1', '', '浙江省', '杭州市', '桐庐县', '', '围巾', '35', '韩 大牌风', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('304', '胡赞林', '18668055889', '18668055889', '运营总监', '杭州成人之美电子商务有限公司', '名器。爱侣', '2000', '其他', '1', '300', '1', '', '浙江省', '杭州市', '西湖区', '小和山', '成人用品', '150', '成人自慰', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('305', '周金峰', '13615839871', 'XO_OX1999', '销售', '嘉善科达滑动轴承有限公司', '轴承', '6000万', '其他', '1', '小作坊', '0', '', '浙江省', '嘉兴市', '嘉善县', '干窑镇河东街44号', '铜套', '20', '机械配件', '', '', '1', '飞电', '只要有合作的机会，其他好说！
', '');
INSERT INTO `t_brands` VALUES ('306', '丁士湧', '18605359710', '18605359710', '董事长', '山东省烟台市高陵生态果蔬产业有限公司', '山合易', '600万', '其他', '1', '1500亩农场', '1', '', '山东省', '烟台市', '牟平区', '高陵镇政通街297号', '烟台苹果 蔬菜农副产品', '660', '有机认证', '', '', '1', '飞电', '寻找微笑 电商团队合作推广
', '');
INSERT INTO `t_brands` VALUES ('307', '吴泽', '13989887806', '13989887806', '董事长', '景德镇商邦电子商务有限公司', '商邦', '600万', '其他', '1', '50亩', '1', '', '江西省', '景德镇市', '昌江区', '陶瓷工业园区', '陶瓷', '15', '原创', '', '', '1', '飞电', '订单渠道
', '');
INSERT INTO `t_brands` VALUES ('308', '陈亚东', '15961898566', 'tigerchen8899', '合伙人', '江苏优兌网络科技有限公司', '优兌商城', '100000万', '其他', '0', '员工300多人，市场三线及以下城市', '0', '', '江苏省', '无锡市', '锡山区', '丹山路78号锡东创融大厦12-13F', '类京东', '10', '全品类', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('309', '吴建明', '18850997595', '761613285', '运营', '务实电商', '新那克', '5000000', '其他', '1', '300-500', '1', '', '广东省', '深圳市', '龙岗区', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '男鞋', '79', '时尚潮流运动风', '', '', '1', '飞电', '诚信
', '');
INSERT INTO `t_brands` VALUES ('310', '詹攀', '15521032776', 'zhanpanxs123', '市场部总监', '深圳零二科技有限公司', 'Mrad VR手机壳', '0', '其他', '1', '大', '1', '', '广东省', '深圳市', '南山区', '', 'VR 眼镜', '89', '创意类', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('311', '崔瑞芝', '18888973595', 'racheltsui0915', '电商销售总监', '上海谨道电子商务公司', '全球跨境商品直采 http://www.globalwinner.com/cooperationbrands.html', '无', '其他', '0', '无', '1', '', '310100', '', '', '上海市长宁区长宁路1193号长宁来福士广场T3号办公楼2101', '全球跨境商品直采 http://www.globalwinner.com/cooperationbrands.html', '100', '全球跨境商品', '', '', '1', '飞电', '"我方是跨境电商平台,全球布局有日本,澳洲,日本,欧洲德国与英国等五大当地直采分公司
', '');
INSERT INTO `t_brands` VALUES ('320', '徐文斌', '18955111058', 'xuwenbin817478', 'CEO兼创始人', '杭州猎创网络科技有限公司', '猎小二', '创业', '其他', '0', '0', '1', '', '310100', '', '', '田林路漕河泾高新技术开发区C幢2楼', '中高端人才', '35000', '年薪15万以上的中高端人才', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('321', '苏武', '13811064403', 'suwu596998', '市场负责人', '易直播', '易直播', '100000', '其他', '0', '600', '1', '', '110100', '', '', '五道口优盛大厦C座1108', '易直播', '1000', '没有', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('322', '李宗贤', '18610058672', 'LZX275155673', 'COO', '北京摩桔天橙影业有限公司', '捉妖学院系列电影', '1000万', '其他', '0', '20人', '1', '', '110100', '', '', '高碑店南岸一号义安门38楼6门', '影视作品', '5', '文化艺术品', '', '', '0', '飞电', '正在探讨网络电影和网红之间的合作分账模式
', '');
INSERT INTO `t_brands` VALUES ('323', '王云', '18710196708', '17090078946', '创始人', '云系统一站式生活工作顾问平台', '云系统', '无', '其他', '0', '无', '1', '', '110100', '', '', '中关村创业大街。', '绝大数', '1', '安全健康物美价廉生态绿色私人定制限时限量', '', '', '1', '飞电', '功能强大无限兼容。
', '');
INSERT INTO `t_brands` VALUES ('324', '秦淼', '13501250787', 'qm1350125', '市场推广', '北京视秀科技', '视秀直播', '1000000', '其他', '1', '无需', '1', '', '110100', '', '', '', '微信直播平台', '1000', '高清', '', '', '1', '飞电', '提供微信直播服务，需有网络带宽2M以上
', '');
INSERT INTO `t_brands` VALUES ('325', '戴磊', '18501685741', '18501685741', '商户拓展', '上海深屹网络科技有限公司', '小店宝', '0', '其他', '0', '0', '0', '', '上海', '上海市', '静安区', '南京西路818号1001室', '0', '', '白领女性', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('326', '肖亮', '13601697972', '13601697972', '供应链总监', '北京明通四季科技有限公司', 'Inmix 音米', '100000000', '其他', '0', '50-2000', '1', '', '北京', '北京市', '朝阳区', '浦项中心A座10层', '眼镜', '', '文化消费者', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('327', '胡明宇', '13810973861', '', '运营总监', '穷游网生活实验室', '穷游JNE', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '和品牌调性匹配 热爱旅行
', '');
INSERT INTO `t_brands` VALUES ('328', '吴先生', '13901158169', '', '企业管理部', '北京一道文玩电子商务有限公司', '一道文玩', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('329', '蔡蔡', '18058403880', '', '负责人', '商鼎投资', '淘我爱商城', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '给网红套现提供整体解决方案，从产品定制到销售平台，为其量身定做，风格统一，产品多样化
', '');
INSERT INTO `t_brands` VALUES ('330', '李新安', '13775078973', '', '运营', '扬州优可优爱文化传播有限公司', '优可优爱', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('331', '高晶晶', '13858166846', '', '推广运营', '上海和利多贸易有限公司', 'sixteen brand', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('332', '李双林', '13968021965', '', '合伙人', '浙江牧石间文化艺术有限责任公司', '牧石间', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '网络品牌推广合作
', '');
INSERT INTO `t_brands` VALUES ('333', '商邦', '13989887806', '', '董事', '景德镇商邦电子商务有限公司', '商邦', '', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '销售
', '');
INSERT INTO `t_brands` VALUES ('334', '魏兴杰', '13819114424', '', '总经理', '浙江欧创投资管理有限公司', '日韩品牌，如野口，贝倩等', '3000', '其它', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '一起参与制定整个商业模式的游戏规则
', '');
INSERT INTO `t_brands` VALUES ('335', '杨杰', '18801186608', 'yj6608', '董事长助理', '铁牛集团有限公司', '众泰', '100亿', '汽车', '1', '日产1000台各种民用汽车；', '1', '', '浙江省', '金华市', '永康市', '永康市北湖路1号', 'suv  轿车 电动汽车', '60000', '很多', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('336', '葛国良', '13805751127', '13805751127', '总经理', '杭州小丸子食品有限公司', '樱桃小丸子', '1千万', '食品', '0', '200人', '0', '', '浙江省', '杭州市', '萧山区', '萧山区商恒街30号', '手撕牛肉，肉干等休闲食品', '30', '大部分瓶装', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('337', '果真', '13750624999', 'guozhenbenren', '运营总监', '杭州智在枫为品牌管理有限公司', '简品', '8000万', '食品', '1', '50人', '1', '', '浙江省', '杭州市', '江干区', '下沙经济技术开发区益丰路55号', '花草茶', '70', '时尚健康', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('338', '吴佳润', '13868180829', '13868180829', '总经理', '杭州颂丰生物科技有限公司', 'Komet', '1.3', '食品', '1', '目标分布在衢州', '0', '', '浙江省', '杭州市', '江干区', '杭州市江干区凯旋路208号5楼', '现榨养生油，私人定制膳食五谷养生代餐粉', '39', '100%零添加，100%私人定制，填补市场私人定制功能性膳食养生调理产品。', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('339', '李冬文', '13567415954', '13567415954', '厂长', '宁波市缸鸭狗食品有限公司', '缸鸭狗', '5000万', '食品', '1', '5000万', '1', '', '浙江省', '宁波市', '镇海区', '九龙湖镇陈沈路18岁号', '汤圆', '30', '手工', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('340', '张磊', '18999252641', '52674451', '副总经理', '冠农股份浙江公司副总经理', '冠农', '4000万', '食品', '0', '日产1万吨', '1', '', '新疆维吾尔自治区', '巴音郭楞蒙古自治州', '库尔勒市', '', '冠农牌蕃茄丁', '5.6', '绿色健康食品欧盟认证', '', '', '1', '飞电', '有必较完善的网商操作经验
', '');
INSERT INTO `t_brands` VALUES ('341', '李庆茂', '18678509638', 'wzsylqm', '总经理', '山东丰悦电子商务有限公司', '丁马甲鱼', '4', '食品', '1', '2', '0', '', '山东省', '聊城市', '临清市', '临清顾家电商产业园', '甲鱼深加工', '19.9', '煲宝', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('342', '胡彦峰', '18805390258', '18805390258', '新渠道负责人', '临沂市洋葱电子商务有限公司', '本草善源', '6000000', '食品', '0', '3000万', '1', '', '山东省', '临沂市', '兰山区', '涑河北街中段', '减肥产品', '298', '饮品', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('343', '陈中峰', '13793083500', '17092046513', '项目经理', '山东丰悦电子商务有限公司', '丁马甲鱼', '150000000', '食品', '1', '大型', '0', '', '山东省', '聊城市', '临清市', '顾家商业园11-305', '甲鱼', '99', '生鲜', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('344', '石磊', '13804721556', 'Caca_btk', '电商营销总监', '包头东宝生物技术股份有限公司', '圆素骨肽', '220万', '食品', '1', '500-1000人', '1', '', '内蒙古自治区', '包头市', '青山区', '黄河大街46号', '圆素骨肽', '500', '普通', '', '', '1', '飞电', 'Www.dbyuansu.com
', '');
INSERT INTO `t_brands` VALUES ('345', '魏文秀', '13803541108', 'wwx1108', '运营总监', '江西绿源油脂实业有限公司', '绿源井冈', '200000000元', '食品', '1', '1500万', '1', '', '江西省', '南昌市', '新建县', '', '山茶籽油', '368', '健康食用油', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('346', '许赟', '18552028655', 'xy7820', '总经理', '宜兴市宁羡贸易有限公司', '香咽FragrantBite', '340w', '食品', '1', '50人', '1', '', '江苏省', '无锡市', '宜兴市', '光荣西路207号', '台湾糕点', '120', '中国风文艺', '', '', '0', '飞电', '品牌推广
', '');
INSERT INTO `t_brands` VALUES ('347', '丁家公', '13801451997', '13801451997', '总经理、执行董事、法定代表人', '丁家宜健康科技有限公司', '丁家宜', '新品刚上市', '食品', '1', '500人', '1', '', '江苏省', '扬州市', '邗江区', '扬州市吴州东路198号（西安交大扬州科技园）', '食品', '40', '天然生态、无添加', '', '', '0', '飞电', '诚实守信，扩大品牌影响力，逐步增加销量。
', '');
INSERT INTO `t_brands` VALUES ('348', '都督', '15577758777', '15577758777', '总经理', '苏州容铄贸易有限公司', '男爵城堡', '2100万左右', '食品', '0', '无工厂，法国有酒庄', '1', '', '江苏省', '苏州市', '吴中区', '工业园区嘉瑞巷8号乐嘉大厦1518室', '葡萄酒', '299', '女性 时尚 健康', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('349', '冯国亮', '17751117227', 'xing?fu?xiao?8', '电商经理', '江苏国环地标农业发展有限公司', '天赐露', '1000万', '食品', '1', '1000人', '1', '', '江苏省', '盐城市', '大丰市', '飞达东路23号', '茶叶等农产品', '239', '铁观音', '', '', '1', '飞电', '集团公司，公司资金实力雄厚，以打造品牌为目的，可长线合作。公司主要以打造地标性农产品为蓝图，各类型农产品后期都会入住天猫店，以及自建垂直三方平台。茶叶现在主要以地标铁观音为主，希望能和各大茶馆合作。
', '');
INSERT INTO `t_brands` VALUES ('350', '张志军', '18606193939', 'benson_wx', 'CEO', '河南省传世电子商务有限公司', '味道河南', '500万斤', '食品', '1', '农业生产基地', '1', '', '河南省', '安阳市', '文峰区', '文峰大道188号', '小米、山药等农产品', '88', '国内最好的养生小米', '', '', '0', '飞电', '可以师兄天机面谈细节
', '');
INSERT INTO `t_brands` VALUES ('351', '支红', '18659225533', '55008525', '董事长', '厦门茶人岭电子商务股份有限公司', '茶人岭', '3500万', '食品', '0', '无', '1', '', '福建省', '厦门市', '湖里区', '林后路393号四号楼三楼', '茶叶、茶器', '150', '中式茶禅生活', '', '', '1', '飞电', '对接有赞微店，一件代发，系列自动分中帐
', '');
INSERT INTO `t_brands` VALUES ('352', '吴凌伟', '18060668688', '1007863680', '电商总监', '美式生活', '黑金传奇', '100万', '食品', '0', '1000平米', '0', '', '福建省', '福州市', '鼓楼区', '', '黑糖姜茶', '60', '台湾进口健康饮品，适用痛经、宫寒女性', '', '', '1', '飞电', '台湾专柜上市产品，拥有品牌大陆唯一授权，希望有实力推广团队合作！
', '');
INSERT INTO `t_brands` VALUES ('353', '李芬', '18002253366', '18002253366', '总经理', '西安汉瑞宝生物工程有限公司', '', '', '食品', '0', '拥有自己的冬虫夏草采集基地、研究所等', '0', '', '610000', '610100', '0', '西安汉瑞宝生物工程有限公司', '冬虫夏草王', '', '', '', '', '0', '飞电', '我们公司是国内目前冬虫夏草业获得国家食品药品监督管理局认证最齐全的企业！拥有完整的产业链
', '');
INSERT INTO `t_brands` VALUES ('354', '何权辉', '13823938734', '13823938734', '电商部经理', '中山市得福肉食制品有限公司', '得福大利是', '1.5亿', '食品', '1', '年产值1.5亿', '0', '', '440000', '442000', '', '黄圃镇康盛路31号', '广式腊味', '50', '广式糖酒风味', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('355', '刘春明', '15000333656', '15000333656', '运营经理', '易果生鲜', '易果生鲜', '数亿', '食品', '0', '0', '1', '', '310100', '', '', '金钟路999号', '生鲜', '100', '新鲜', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('356', '宋海珍', '15214360699', 'Abyy80788690', '客户经理', '元素骨肽', '骨肽', '1000万', '食品', '1', '10000', '1', '', '310100', '', '', '贵宾路18号', '骨胶原', '178', '养护', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('357', '周晓明', '13260032550', 'suixiangxming', 'ceo', '北京未来人电子商务有限公司', '新希望', '80亿', '食品', '1', '中国民营企业第21/500名', '1', '', '110100', '', '', '望京sohoT3', '新希望乳业', '12', '低温乳品', '', '', '0', '飞电', '未来人电商是新希望草根知本集团的电商子公司，负责新希望集团的电商业务，新希望集团是中国500强民营企业第21名，国内农业龙头企业。 主营蛋白食品，寻求合作。
', '');
INSERT INTO `t_brands` VALUES ('358', '杜亚辉', '18518904849', '18518904849', '品牌经理', '久爱致和', '云南白药，三人炫', '1亿', '食品', '1', '超大', '1', '', '110100', '', '', '首享科技大厦', '面膜，酒', '90', '高大上', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('359', '姚文全', '13601648183', '', '创始人 首席粉丝官', '上海纯亭食品科技有限公司', '纯亭 轻断食复合果蔬汁', '', '食品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '网红推广合作，品牌深度合作（网红自有标签，代理分销等）
', '');
INSERT INTO `t_brands` VALUES ('360', '陈栋', '15192518221', '', '总监', '上海容铂贸易有限公司', '9号箱', '', '食品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '9号箱是我们公司针对女性推出的一款女性向红酒品牌，主打时尚的包装及187ml，250ml小瓶原瓶进口的进口葡萄酒。希望能通过资源对接，扩大品牌知名度，刺激消费，提高销售。
', '');
INSERT INTO `t_brands` VALUES ('361', '韩朝阳', '13339272777', '', '经理', '亳州市花千语参茶有限公司', '花千语', '500万', '食品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('362', '张焱萍', '18923106245', '', '掌柜', '佛山畅乐生物科技有限公司', '畅乐', '1000万（二个Sku)', '食品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '我们2012 年最早使用网红的商家，现在研究网红加微博加分销加微新推进品牌及新品、希望能通过自明星方式更好促进品牌发展、社群销售今年能够达到5000 万、并能做好自明星方式后会员及客户终身价值的研究，更多的利益社会，顾客、社群！
', '');
INSERT INTO `t_brands` VALUES ('363', '徐淦伟', '18516200122', 'qq345602075', '运营', '四川呀买网络科技有限公司', '呀买', '呀买平台成立半年左右销售额 200W左右', '食品', '0', '0', '0', '', '浙江省', '杭州市', '西湖区', '文二西路99号南都银座2幢1单元2001室', '特色食品', '', '都市白领、对生活品质有一定追求的人群', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('364', '郑艳艳', '18069788208', 'yolanda25', '市场总监', '杭州初稻农业科技有限公司', '初稻', '0', '食品', '1', '50人', '1', '', '浙江省', '杭州市', '余杭区', '文一西路1218号恒生科技园7号楼105-107', '胚芽活米', '', '中高端人群', '', '', '0', '飞电', '初稻创立于2015年年底，2016年平台开始销售配送，2015年还没有销售额.初稻活米以恒温恒湿储存原谷，采用自动化生产加工，保障活米品质，仓库面积2500平方米，加工操作间800平方米，包装间400平方米
', '');
INSERT INTO `t_brands` VALUES ('365', '贾海忠', '15878911780', '15848911780', '运营', '呼伦贝尔原生态绿色产品有限公司', '呼伦贝尔原生态', '300万', '食品', '1', '国家级农牧示范基地', '1', '', '150000', '150700', '0', '内蒙古呼伦贝尔阿荣旗', '牛肉、羊肉制品', '', '注重生活质量的美食家', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('366', '李云鹏', '17755178694', 'dtaihm', '运营', '安徽粮悦食品股份有限公司', '粮悦', '5000w', '食品', '1', '200-500', '1', '', '安徽省', '合肥市', '包河区', '北京路与纬三路交口鸿强大厦五层', '食品', '', '都市白领女性，在校大学生', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('367', '陆燊潇', '18067080892', '18069790201', '天猫经验体总经理', '杭州老板电器股份有限公司', 'robam/老板', '电商20亿', '数码家电', '1', '50亿', '1', '', '浙江省', '杭州市', '余杭区', '临平大道592号', '厨房电器', '4500', '欧式', '', '', '1', '飞电', '面谈
', '');
INSERT INTO `t_brands` VALUES ('368', '汪涛', '13510256335', '13510256335', '营销总监', '深圳市康佳电器有限公司', '康佳', '20000000', '数码家电', '1', '1000人', '1', '', '广东省', '深圳市', '南山区', '康佳研发大厦', '小家电', '100', '智能，时尚', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('369', '沈少', '18658272220', '215593681', 'CEO', '上海小吉互联网科技有限公司', 'minij', '3000万', '数码家电', '1', '10亿', '1', '', '310100', '', '', '', '冰箱，洗衣机', '2000', '轻奢', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('370', '杨志伟', '13524606663', '13524606663', '合伙人', '上海杰诗科技有限公司', 'KGC（卡杰诗）', '2亿', '数码家电', '0', '无', '1', '', '310100', '', '', '吴中路8号', '智能家居，健康器械产品：按摩椅、按摩器、桑拿房', '10000', '家居，品味，健康，科技', '', '', '1', '飞电', '品牌推广，渠道拓展，增加市场份额，建立新型商业模式
', '');
INSERT INTO `t_brands` VALUES ('371', '李涛', '13591775365', '', '总经理', '一健电子（大连）有限公司', '惠人原汁机，爱恩贝空气净化器', '', '数码家电', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '宣传，采用分成合作方式
', '');
INSERT INTO `t_brands` VALUES ('372', '李博渊', '13175321777', '', '店长', '台州市霸业贸易有限公司', '卡琳娜', '', '数码家电', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '希望有做相关类目的网红可以合作
', '');
INSERT INTO `t_brands` VALUES ('373', '沃晓汶', '18505732066', 'woody8578', '项目经理', '嘉兴市龙骏信息科技有限公司', '不莱玫', '40000000', '箱包', '1', '200人', '1', '', '浙江省', '嘉兴市', '秀城区', '文贤路134号2-308', '旅行箱', '500', '时尚潮流', '', '', '1', '飞电', '合作模式可以多元化，可以具体洽谈
', '');
INSERT INTO `t_brands` VALUES ('374', '吴婷婷', '18657108870', '18657108870', 'CEO', '杭州宝策网络科技有限公司', '阿媞', '国内刚开始运营', '箱包', '1', '4000人', '1', '', '浙江省', '杭州市', '余杭区', '五常大道156号西溪创意园5号楼309', '女包', '1000', '欧美', '', '', '0', '飞电', '希望合作自有澳洲品牌阿媞，提供内容输出输出与其余支持
', '');
INSERT INTO `t_brands` VALUES ('375', '田景波', '13456316250', 'tjbwjtt', '总经理', '浙江佳人汇信息技术有限公司', '佳人工坊', '4000万', '箱包', '1', '120', '0', '', '浙江省', '嘉兴市', '海宁市', '联合路631弄8号', 'PC、ABS拉杆箱', '200', '清新流行，欧美，韩风', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('376', '赖文娟', '13925135787', 'partyprince', '经理', '广州昊王皮具有限公司', '花花王子', '1.5亿', '箱包', '1', '500人', '1', '', '广东省', '广州市', '花都区', '', '箱包', '300', '欧美', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('377', '郑青', '18205938623', 'zq121582591', '总经理', '厦门猎奇国际贸易有限公司', 'SoulKnight', '600万', '箱包', '1', '30人', '1', '', '福建省', '厦门市', '湖里区', '泥金北路1号五通大厦408', '钱包', '150', '商务、潮流、实用', '', '', '1', '飞电', '无特殊要求，主要看合作模式而定，可以多种合作模式，主要看长远发展潜力。
', '');
INSERT INTO `t_brands` VALUES ('378', '李建锋', '13958835592', 'shycnet', '总经理', '上海冶成国际贸易有限公司', 'OUWA', '3000万', '箱包', '1', '500人', '1', '', '310100', '', '', '普陀区东新路248号', '旅行箱', '800', '时尚、多功能', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('379', '黄秀云', '13560220343', '', '品牌策划', '广州汉卓尔箱包有限公司', '汉客', '9千万', '箱包', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '需要找时尚、旅游类的网红
', '');
INSERT INTO `t_brands` VALUES ('380', '赖文娟', '13925135787', '', '经理', '广州昊王皮具有限公司', 'Party prince', '3800万', '箱包', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('381', '马纲', '13438476103', '18628971221', 'CEO', '成都维赛鞋业集团有限公司', 'kumikiwa卡米', '1亿', '鞋靴', '1', '日产2000双', '1', '', '四川省', '成都市', '武侯区', '鞋都南二路华康步行街', '女鞋', '300', '时装、时尚休闲类', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('382', '肖龙', '18980971772', '4983880', 'CEO', '四川阿么鞋业有限公司', '阿么', '1.59亿', '鞋靴', '1', '年产量700万双', '1', '', '四川省', '成都市', '双流县', '成都市双流县空港一路一段483号阿么工业园', '女鞋', '150', '休闲或者欧美', '', '', '1', '飞电', '可代工！
', '');
INSERT INTO `t_brands` VALUES ('383', '韦康', '15876590213', '1353876814', '运营总监', '广州市革度士贸易有限公司', 'SYD', '200万', '鞋靴', '1', '500人', '1', '', '广东省', '广州市', '荔湾区', '广州市荔湾区环市西路宇宙鞋业城克山七街4号', '外贸精品真皮男鞋', '350', '欧美复古', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('384', '陈辉煌', '13959919001', 'hanhong978', '运营总监', '泉州金士达贸易有限公司', 'NEWS', '13000000', '鞋靴', '1', '3000平方米 工人80人', '1', '', '福建省', '泉州市', '惠安县', '台商投资区秀土顶宫39号', '流行女鞋', '100', '英伦真皮休闲女鞋', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('385', '肖龙', '13880014598', '', '创始人ceo', '阿么女鞋', '阿么', '', '鞋靴', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('386', '尹志强', '18675896777', '', '总经理', '羊皮堂', 'MR.ING', '', '鞋靴', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '谈
', '');
INSERT INTO `t_brands` VALUES ('387', '马纲', '18628971221', '', 'CEO', '成都维赛电子商务有限公司', 'kumikiwa/卡米', '', '鞋靴', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('388', '陈中民', '18199199199', '18199199199', '总经理', '新疆时代秀国际贸易有限公司', '法国品牌 · 一点半', '500万', '鞋靴', '0', '1000平方', '0', '', '新疆维吾尔自治区', '乌鲁木齐市', '沙依巴克区', '新疆乌鲁木齐市沙依巴克区地王鞋城1301室', '鞋子', '', '80后、90后', '', '', '0', '飞电', '支持换
', '');
INSERT INTO `t_brands` VALUES ('389', '彭双龙', '15257966353', '5957326', '创始人', '义乌市贝驰饰品有限公司', '闪亮银饰', '1.2个亿', '珠宝饰品', '1', '500人', '1', '', '浙江省', '金华市', '义乌市', '义乌市秋实路7号', '饰品', '129', '流行', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('390', '冯增华', '15869113686', 'chenxuan19880329', '运营副总', '西安由你所在文化创意有限公司', '由你所在', '8000万', '珠宝饰品', '0', '珠宝非工厂形式', '1', '', '陕西省', '西安市', '雁塔区', '', '玉石、翡翠及碧玺等各类彩宝', '3000', '全线定制', '', '', '1', '飞电', '有你所在主营玉石珠宝配饰，为天猫羊脂玉销量第一，线下整合300多家加盟商家入驻银泰等专柜。旗下聚石，整合全国玉石、彩宝全线供应链，为国内最大的珠宝供应链整合机构，可实现珠宝品类的全线定制。供应链体系内均可实现预售、定制或众筹。
', '');
INSERT INTO `t_brands` VALUES ('391', '马亚', '13808809456', '13808809456', 'CEO', '上海珍艾珠宝有限公司', '珍艾', '15000000', '珠宝饰品', '1', '50', '1', '', '广东省', '深圳市', '罗湖区', '', '999、18k黄金，珍珠，钻石', '1000', '年轻时尚', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('392', '吴志杰', '13666948206', 'wzj269957121', '运营', '务实电商', '品瓷', '1000万', '珠宝饰品', '1', '500-1000', '1', '', '广东省', '深圳市', '龙岗区', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '时来运转手表', '520', '情侣对表 潮流 七夕礼物', '', '', '1', '飞电', '诚信经营！
', '');
INSERT INTO `t_brands` VALUES ('393', '吴建坡', '18059532321', 'w912541', '运营', '务实电商', '品瓷', '1100万', '珠宝饰品', '1', '5000', '1', '', '广东省', '深圳市', '龙岗区', '广东省深圳市龙岗区龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '时来运转情侣表', '299', '潮流，时尚，高逼格', '', '', '1', '飞电', '诚信经营，
', '');
INSERT INTO `t_brands` VALUES ('394', '翁智勇', '13530592059', '13530592059', '总经理', '深圳市妙若珠宝有限公司', '妙若银饰', '1千万', '珠宝饰品', '1', '100多人', '1', '', '广东省', '深圳市', '罗湖区', '水贝', '珠宝黄金，k金，银饰，硬金，铂金，彩宝等', '200', '中国风，时尚潮流', '', '', '1', '飞电', '可提供稳定的供应链，可协助整合珠宝类目的工厂资源
', '');
INSERT INTO `t_brands` VALUES ('395', '崔德乾', '13625587888', 'seoncdq', '营销总监', '星光珠宝股份有限公司', 'DlD（彩宝及克拉钻）、钻至尊（钻石）、玉润天和（玉器文玩）、星光（黄金）、周银匠（银饰）SE', '3亿（实体店）', '珠宝饰品', '0', '行业内一流的工厂是我们的代工厂', '1', '', '安徽省', '合肥市', '包河区', '', '钻石、彩宝、黄金、铂金、玉器文玩、银饰', '2000', '时尚轻奢', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('396', '朱家明', '15601691868', '250643282', '运营总监', '上海苏博眼镜有限公司', 'eyeplay', '3000W', '珠宝饰品', '0', '0', '1', '', '310100', '', '', '潮州路520号2楼', '太阳镜、光学框、夹片', '150', '精致简约', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('397', '高若顺', '13761211201', 'gomk2002', '总经理', '上海思无邪珠宝股份有限公司', '思无邪', '60000000', '珠宝饰品', '1', '200人', '1', '', '310100', '', '', '虹口区汶水东路278号景明大厦2108室', '黄金手链', '1200', '时尚中国风', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('398', '蓝木', '13811125616', 'zln507068880', '总裁', '一生一石国际珠宝集团', '一生一石等九个珠宝饰品品牌', '自有品牌4亿', '珠宝饰品', '1', '全球六大矿源。五家工厂。', '1', '', '110100', '', '', '海淀区龙湖唐宁ONE', '天然水晶玉石、翡翠等四十余种', '400', '原创设计珠链，玉雕大师作品等', '', '', '1', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('399', '徐方平', '18013912066', '', '董事长', '南京黛芙儿珠宝有限公司', 'DE VOWER黛芙诺珠宝', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '对美业、珠宝等感兴趣的渠道和个人。
', '');
INSERT INTO `t_brands` VALUES ('400', '彭双龙', '15257966353', '', 'CEO', '浙江旭恒饰品有限公司', '闪亮银饰', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('401', '谭中林', '18969139996', '', '副总', '成都宝之诚珠宝有限公司', '百年宝诚', '1.42亿', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '网红合作模式
', '');
INSERT INTO `t_brands` VALUES ('402', 'Andy Lu', '15867885188', '', '总经理', 'La Kayee珠宝有限公司', 'La Kayee', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '品牌推广
', '');
INSERT INTO `t_brands` VALUES ('403', '平超', '15958034899', '', '营销总监', '杭州九景科技有限公司', '威古氏', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '
', '');
INSERT INTO `t_brands` VALUES ('404', '包灵冲', '13989620919', '', '总经理', '台州市非常上镜商贸有限公司', '非常上镜Veryshow', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '产品合作，红人推广合作
', '');
INSERT INTO `t_brands` VALUES ('405', '唐亮', '13982103654', '', '运营', '成都景和商贸有限公司', '恋银、因爱', '', '珠宝饰品', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '飞电', '模特、网红推广
', '');
INSERT INTO `t_brands` VALUES ('406', '﻿肖亮', '13601697972', '13601697972', '供应链总监', '北京明通四季科技有限公司', '0', '1', '眼镜', '0', '18-35', '1', '', '浦项中心A座10层', 'Inmix 音米', '100000000', '其他', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('407', '李云鹏', '17755178694', 'dtaihm', '运营', '安徽粮悦食品股份有限公司', '1', '1', '食品', '0', '18-25', '1', '', '北京路与纬三路交口鸿强大厦五层', '粮悦', '5000w', '食品', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('408', '马蜂', '18520785822', 'bboynothing', '总经理', '广州市中牌电子产品有限公司', '1', '1', '理发器，卷发棒', '0', '20-35', '1', '', '嘉禾望岗百花岭工业园88号C栋4楼', '利力', '15000000', '数码家电', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('409', '李楣', '13901804602', '13901804602', '总经理', '上海泽毅实业有限公司', '0', '1', '儿童用品', '0', '1--12岁', '1', '', '上海闵行区沪闵路3988号', 'hugmii', '3000万', '母婴', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('410', '施策', '13806690633', 'shice_0116', '总经理', '浙江珞炫服饰有限公司', '0', '1', '女装', '0', '25-35', '1', '', '上江路145号1号楼7F', 'LOFTSHINE/珞炫', '16年3月开店', '女装', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('411', '木素珍', '13588925925', 'moily-', '经理', '浙江珞炫服饰有限公司', '0', '1', '服饰', '0', '25-32', '1', '', '上江路145号1号楼7层珞炫服饰', 'LOFT SHINE', '50000000', '女装', '"LOFTSHINE以高街轻奢的美学观点，引发时装个性力量，充满激情的创造力，演绎都市摩登风情。是量化的美学搭配顾问。"
', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('412', '贾海忠', '15878911780', '15848911780', '运营', '呼伦贝尔原生态绿色产品有限公司', '1', '1', '牛肉、羊肉制品', '0', '30~40', '0', '', '内蒙古呼伦贝尔阿荣旗', '呼伦贝尔原生态', '300万', '食品', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('413', '胡举', '18676967868', '18676967868', 'CEO', '东莞市圣越服饰有限公司', '1', '1', '女装', '0', '25到35', '1', '', '东莞市虎门镇太沙路134号507', '芊艺', '4000', '女装', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('414', '戴磊', '18501685741', '18501685741', '商户拓展', '上海深屹网络科技有限公司', '0', '0', '0', '0', '20至40', '0', '', '南京西路818号1001室', '小店宝', '0', '其他', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('415', '卢桂兰', '13923318951', 'SUMOA99', '负责人', '中山苏陌电子商务有限公司', '0', '0', '"女装裤子,女装连衣裙"', '0', '18-35', '1', '', '云汉路', '苏陌', '1200万', '女装', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('416', '郑艳艳', '18069788208', 'yolanda25', '市场总监', '杭州初稻农业科技有限公司', '1', '1', '胚芽活米', '0', '20岁以上', '0', '', '文一西路1218号恒生科技园7号楼105-107', '初稻', '0', '食品', '初稻创立于2015年年底，2016年平台开始销售配送，2015年还没有销售额.初稻活米以恒温恒湿储存原谷，采用自动化生产加工，保障活米品质，仓库面积2500平方米，加工操作间800平方米，包装间400平方米
', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('417', '徐淦伟', '18516200122', 'qq345602075', '运营', '四川呀买网络科技有限公司', '0', '0', '特色食品', '0', '20-45', '1', '', '文二西路99号南都银座2幢1单元2001室', '呀买', '呀买平台成立半年左右销售额 200W左右', '食品', '', '', '', '', '', '0', '飞电', '', '');
INSERT INTO `t_brands` VALUES ('418', '宋奕珺', '18606710985', 'belindaq', '营销企划经理', '杭州悠可', '0', '1', '美妆', '0', '20-40', '1', '', '下沙海创园', '代理美妆品牌', '10亿+', '美妆', '', '', '', '', '', '0', '飞电', '', '');

-- ----------------------------
-- Records for `t_celebrity`
-- ----------------------------
INSERT INTO `t_celebrity` VALUES ('6', 'ceci成芮霏', '成芮霏', '1', '19921027', '成都', '本科', '165', '44', '83', '60', '85', '2', '平面模特', '康师傅铁观音广告
ele杂志专访：密密女神达人
电视剧《菩提树下》饰演：小翠
电视剧《林师傅在首尔》饰演：韩国导游
电视剧《青春驿站》饰演：餐厅领班
电影《大太阳》饰演：藏区志愿者
电影《别人的城市》饰演：三丫
电影《我书乡下爷》饰演：红姑娘
淘宝店主：mxm&cc
微商：黛美齿美牙仪全国总代理', '13402858880', '四川省成都市青羊区顺城大街316号融城云熙A2523', 'ceci1573', 'ceci成芮霏', '50283', '10869', '4199', '336', '8825', '23540', '性格温和，经营女装淘宝店，时尚干练', '知性', '', '', '', '', 'http://weibo.com/cccceciccc?refer_flag=1001600001_&sudaref=www.baidu.com&is_hot=1', 'ceci成芮霏', 'http://www.meipai.com/user/1009140', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('7', '酸酱兔', '周璐', '1', '19920802', '广东惠州', '本科', '169', '51', '88', '60', '91', '0', '微商、主播', '2015年3月做微商', '13433577997', '广东省惠州市惠城区水口街道办事处合生上观国际F1-3 2503', '516208712', '酸酱兔', '126798', '6862', '79369', '1077', '0', '1255', '内向的女孩，内心充满能量，不断地在尝试粉丝变现', '性感、可爱、内衣控', '', 'http://aliv.weipai.cn/honglema/56d7c2fd0cf29739e653cecb.jpeg', '', '9930', 'http://weibo.com/aciderabbit?from=hissimilar_home&is_hot=1', '酸醬兔', 'http://www.meipai.com/user/1065603775', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('8', 'Sooki莹莹孙', '孙金莹', '1', '19900914', '天津', '大专', '165', '48', '81', '67', '88', '3', '淘宝店主', '2014开始做淘宝卖护肤品 2016开的淘宝服装店', '15922100726', '天津市河东区月牙河南路金月湾3-1403 15922100726', 'sookisun111', 'Sooki莹莹孙', '299500', '15000', '65103', '6814', '13000', '250000', '微拍元老级用户，深受女性粉丝喜爱，鸡汤型正能量女神', '清新、女神范', '唱歌、唠嗑', 'http://aliv.weipai.cn/honglema/56d7c2f30cf2bf3844e81e13.jpg ', '', '9980', 'http://weibo.com/sooki?is_hot=1', 'Sooki莹莹孙', 'http://www.meipai.com/user/1232302', '', '', '', 'http://www.miaopai.com/u/paike_2wyvk94dgj');
INSERT INTO `t_celebrity` VALUES ('11', '娇儿sunshine', '郭雪娇', '1', '19890330', '乌海', '大专', '172', '50', '86', '68', '92', '0', '个体', '做个一年的兼职模特，一年微商', '15147441266', '内蒙古乌海市海勃湾区凤凰A区7号楼三单元501', 'gxj520gxj', '雪娇sunshine', '38000', '161', '33252', '20', '5200', '20', '不善表达的内向女生，拍摄风格比较单一', '古典、清纯、真实、甜美', '', '', '', '', 'http://weibo.com/u/5708081040?refer_flag=1001600001_&is_hot=1', '', '', '', '', '', 'http://www.miaopai.com/u/wxsso_lm0f17v1dz');
INSERT INTO `t_celebrity` VALUES ('12', '艾舞', '陈佳琳', '1', '19901111', '无锡', '本科', '167', '50', '84', '75', '90', '0', '舞蹈', '舞蹈演出。现在主营一家舞蹈培训', '15052138787', '江苏省无锡市崇安区 五姓巷43号606', 'kathy5211', '艾舞是只鱼', '70000', '1533', '50000', '131', '0', '0', '清新甜美的视频风格，舞蹈培训老师，情感纠结', '真实、亲和、气质', '舞蹈', '', '', '', 'http://weibo.com/u/1396625500?topnav=1&wvr=6&topsug=1&is_hot=1', '无锡艾尚舞', 'http://www.meipai.com/user/22677370', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('13', '羊儿', '羊瑾', '1', '19951011', '重庆', '本科', '166', '45', '85', '67', '90', '0', '学生', '向日葵团队代理商 中国校花大赛重庆赛区三十强等', '18723485198', '重庆市渝北区回兴街道龙石路18号川外南方翻译学院', 'yangjin951011', 'FroZen丶YoungJ', '20000', '4200', '11000', '151', '0', '0', '阳光善良的清纯女孩，笑容很甜美，性格很好', '可爱、清纯、逗比', '', '', '', '', 'http://weibo.com/u/2650280613?is_hot=1', 'Ranny羊儿', 'http://www.meipai.com/user/1035923750', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('15', '沉醉儿', '陈婷', '1', '19970721', '宁波', '高中及以下', '158', '50', '92', '65', '92', '0', '微商', '三年茶艺师半年多微商', '15867474027', '浙江省宁波市北仑区宝山路东一时区', '1403243411', '', '160', '0', '0', '0', '0', '0', '微商达人，长相标致甜美，很干练', '气质、自然、可爱、逗比', '茶艺师', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('16', '王蜜娅Mia', '王楠楠', '1', '19930518', '北京', '本科', '165', '48', '85', '60', '86', '1', '模特', 'china joy 2014世纪天成展台', '18500431636', '北京市昌平区沙河镇白各庄新村西区15号楼2单元302', '2368625041', '王蜜娅Mia', '120000', '2818', '90000', '200', '10000', '0', '性感风格模特，但是性格却比较温和', '可爱、高冷、逗比', '', '', '', '', 'http://weibo.com/p/1005052683101527/home?from=page_100505&mod=TAB&is_hot=1#place', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('17', '郭郗翊Ancml', '郭郗翊', '1', '19921120', '郑州', '硕士', '165', '48', '86', '68', '88', '1', '模特 演员', '百度搜郭郗翊', '18237158899', '河南省郑州市金水区黄河路经五路30号院', 'cm1235', '郭郗翊Ancml', '900000', '6183', '60000', '120000', '0', '150000', '活跃于各大社交平台的资深玩家，长期接受各种推广活动', '个性、可爱、有创意', '视频创意', 'http://aliv.weipai.cn/honglema/56d83b270cf29739e6541841.jpeg', '', '10000', 'http://weibo.com/Ancml?is_hot=1', '郭郗翊。', 'http://www.meipai.com/user/23175279', '', '', '', 'http://www.miaopai.com/u/paike_jxi1315k7z');
INSERT INTO `t_celebrity` VALUES ('18', '佳琪', '何佳琪', '1', '19950302', '成都', '高中及以下', '162', '85', '36', '2', '2', '0', '店主', '目前没有', '17709587833', '宁夏回族自治区银川市悦海新天地4号公寓', 'hejiaqiMEMEDA', '何佳琪cc', '50000', '698', '287174', '0', '24000', '0', '公司职员，十分善良感性', '温和、邻家女孩型', '', '', '', '', 'http://weibo.com/u/3608472410?is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('19', '7爷', '王琪', '1', '19920215', '杭州', '本科', '163', '45', '88', '62', '90', '3', '自主运营公司，舞蹈学校校长。', '为王力宏、邓紫棋、张碧晨等多位明星伴舞过，主持过多场上千人发布会等活动，举办过自主创立品牌发布会等。', '18868801175', '杭州市临安市西墅街6弄21号 王琪 18868801175', 'wangqi9744', 'W柒爷', '200000', '109756', '20000', '83', '20000', '20000', '美丽大方的微商创始人，笑容十分甜美', '甜美、爱笑、霸气、正能量', '舞蹈', '', '', '', 'http://weibo.com/u/1899359803?is_hot=1', '05柒爷', 'http://www.meipai.com/user/12735907', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('21', 'M.yuan', '刘婷婷', '1', '19911220', '青岛', '高中及以下', '160', '45', '32', '28', '35', '1', '私营', '没有', '18866622263', '山东省青岛市 市南区闽江四路贵合新园一号楼一单元402', '623415330', '圆园M.yuan', '700', '101', '500', '100', '60', '0', '可爱逗比的小姑娘，为人善良', '知性、可爱、高冷、冷艳型', '', '', '', '', 'http://weibo.com/u/2231794921?is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('22', 'Diva', '焦严慧', '1', '19910517', '广州', '高中及以下', '165', '47', '82', '68', '88', '0', '微商', '米原康正自创品牌专属模特', '13660565250', '广州市海珠区礼岗路海外花园海涛阁203房', 'diva0517', 'Diva_娃', '330000', '10296', '70000', '500', '0', '250000', '喜爱分享生活与化妆心得的广州女孩，深受女粉丝的追捧', '逗比、可爱、欧美范', '化妆', '', '', '', 'http://weibo.com/u/1839912732?is_hot=1', 'Diva_娃', 'http://www.meipai.com/user/20341779', '', '', '', 'http://www.miaopai.com/u/paike_jfk67k2zfx');
INSERT INTO `t_celebrity` VALUES ('23', '丁丁lris', '丁丁', '1', '19951110', '北京', '大专', '172', '100', '88', '58', '88', '0', '模特', '模特，舞蹈演员', '18583133383', '北京市朝阳区建国路88号SOHO现代城A座501', '1282809142', '丁丁lris', '85800', '3800', '60000', '730', '0', '0', '常年从事模特活动，性格温和，单纯可爱', '赛车控、温和、身材好、清新、可爱', '', '', '', '', 'http://weibo.com/u/2734177673?topnav=1&wvr=6&topsug=1&is_hot=1', '丁丁lris', 'http://www.meipai.com/user/20309958', '', '', '', 'http://www.miaopai.com/u/paike_y8gjpig8xm?type=fwded');
INSERT INTO `t_celebrity` VALUES ('27', '格格', '培培', '1', '19930511', '北京', '高中及以下', '175', '110', '88', '62', '72', '1', '淘宝店主', '淘宝店主', '18210082406', '北京市和平街十四区2号楼', 'pei pei 5011', '黄格格Lucky', '20000', '19', '5030', '10', '0', '0', '清新甜美的可爱姑娘，喜欢自黑', '逗比、自然、可爱、甜美', '', '', '', '', 'http://weibo.com/u/5339846777?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('28', '爱鸣人的佳佳', '陈桂', '1', '19931002', '温州', '大专', '170', '47', '86', '60', '88', '1', '经理助理', '没有', '13738375078', '浙江省温州市鹿城区山前街美人台大厦3幢1604', 'jia1512207', '爱鸣人的佳佳', '3500', '1300', '877', '57', '0', '0', '喜欢古典文化，逗比爱搞笑', '古典范、温婉、有气质', '', '', '', '', 'http://weibo.com/u/2661392821?topnav=1&wvr=6&topsug=1&is_hot=1', '爱鸣人的佳佳', 'http://www.meipai.com/user/31842370', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('30', '筱敏儿', '周敏', '1', '19970901', '深圳', '高中及以下', '163', '47', '75', '66', '91', '0', 'yy主播', '2015年年底开始在yy直播', '18476855871', '广东省深圳市宝安区石岩街道石龙仔5区4懂', 'poerful8022', '小小筱敏儿', '2635', '42', '249', '0', '2349', '1', '敏感，非常喜欢提问题的女孩', '邻家、性感、可爱', '', '', '', '', 'http://weibo.com/u/5081088632?is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('31', '大C', '李超', '1', '19901103', '太原', '大专', '171', '55', '84', '62', '86', '1', '电商', '车展模特，在职微商品牌官方代理，做微商三年经验。每月稳定业绩，有过百人团队', '13073579865', '山西省太原市小店区王村南街体委宿舍2号楼3单元302 . 李超13073579865', '1923878716', '姑娘那就大声笑吧', '30000', '106', '3146', '25', '12000', '0', '干练直爽的微商女孩', '清新可人、青春有活力', '', '', '', '', 'http://weibo.com/u/1933551840?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('34', '大美微', '周微', '1', '19950716', '杭州', '本科', '162', '44', '80', '60', '80', '1', '设计师', '无', '15167327664', '浙江省嘉兴市南湖区勤俭路鹿都景苑3 1 502', 'caddy1263275299', 'Lisa的日常', '60000', '100', '20000', '0', '0', '0', '说话办事直爽，喜欢搞笑的小姑娘', '逗比、善良、小资、性感', '', '', '', '', 'http://weibo.com/u/3115281863?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('35', '刘依柔', '刘格', '1', '19930728', '成都', '', '170', '42', '84', '57', '87', '1', '自由职业兼职平面模特', '平面，车展', '15555511930', '四川省绵阳市丽景花城11栋', 'meinvxiaogege', '刘依柔是小太阳', '20000', '0', '15000', '0', '0', '0', '平时在管理网络游戏相关的工作室，善良成熟的女孩', '性感、清纯、高冷', '游戏', '', '', '', 'http://weibo.com/u/5117328021?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('37', '请叫我黑桃宝宝', '贾雯杰', '1', '19940603', '沈阳', '本科', '165', '46', '83', '52', '89', '0', '学生', '来疯 搜狐 网易 繁星 签约主播 微商', '15704248222', '辽宁省锦州市北镇市妇幼保健院赵宏收（我妈咪）', 'wen457036081', '请叫我黑桃宝宝', '100000', '518', '6000', '0', '0', '0', '在校大学生，家里十分宠爱', '可爱、萌系、校园风、公主范', '', '', '', '', 'http://weibo.com/u/5568889937?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('42', '可公子，文可', '谢文可', '1', '19900211', '北京', '本科', '163', '100', '90', '23', '95', '2', '自由职业', '不做演出，不做微商', '13522377192', '石家庄市裕华区东岗路藏龙福地7号楼1单元902', '13522377192', '文可0112', '100000', '3000', '6000', '0', '0', '0', '自由职业，家底丰厚', '直爽、率真、仗义、逗比', '', '', '', '9890', 'http://weibo.com/u/1811650147?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('43', '周OK??', '周蕾', '1', '19950605', '湖南', '本科', '161', '47', '81', '54', '86', '0', '微商', '两次', '13765634441', '贵州省铜仁市德江县玉溪路交警队斜对面', 'hehewohenhao123', '周OK很OK', '50000', '103', '10000', '20', '1888', '2', '刚当妈妈，随和健谈，平时经营服装微商，红人群意见领袖', '御姐范、性感、逗比', '', '', '', '', 'http://weibo.com/u/2993989604?topnav=1&wvr=6&topsug=1&is_hot=1', '周OK', 'http://www.meipai.com/user/21359837', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('44', 'Xu 小胖', '徐倩倩', '1', '19910602', '深圳', '高中及以下', '168', '110', '84', '72', '90', '0', '微商', '一年微商', '13640911112', '广东省深圳市龙岗区布吉木棉湾地铁站龙岗大道1号2栋B座2104', '453812545', 'Xxxuu咩咩', '60000', '229', '1201', '14', '60000', '0', '内心敏感，经常关心别人，为人善良', '御姐范、亲和、知性', '', '', '', '', 'http://weibo.com/u/1926622067?topnav=1&wvr=6&topsug=1&is_hot=1', 'Xxxuu咩咩', 'http://www.meipai.com/user/41475883', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('45', '多多多', '潘佳', '1', '19870111', '重庆', '高中及以下', '160', '90', '90', '64', '88', '0', '微商', '2914加入微商 经营服装面膜等', '13996275545', '重庆市江北区北城路珠江太阳城c区四栋23-5', 'jiajiapan', '佳儿多多多', '5000', '941', '4476', '0', '0', '0', '拥有逗比可爱的形象，为人活泼', '可爱、自然、清新、逗比', '', '', '', '', 'http://weibo.com/u/1910016743?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('46', '大静so', '季静雨', '1', '19931028', '苏州', '大专', '165', '106', '34', '26', '28', '1', '自营', '做过微商 自己开店', '13616258254', '江苏省苏州市吴江市平望通运花园南门', 'dajing19931028', '大静so', '50000', '100', '20000', '5', '60', '1', '平时在家帮忙经营家庭店铺，乖巧可人', '乖巧、甜美、内向、秀丽', '', '', '', '', 'http://weibo.com/u/3180969894?topnav=1&wvr=6&topsug=1&is_hot=1', '', 'http://www.meipai.com/user/33060683', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('48', 'Arin傲', '艾琳', '1', '19950916', '上海', '大专', '170', '48', '88', '60', '89', '1', '模特', '上海国际车展车模、旅游小姐十佳', '15800516117', '上海市黄浦区新闸路218号1401室', 'yaonv0916', 'Arin傲', '30000', '808', '15000', '43', '0', '0', '职业模特，接地气', '性感、逗比、小资、御姐范', '', '', '', '', 'http://weibo.com/u/2557657810?topnav=1&wvr=6&topsug=1&is_hot=1', '', 'http://www.meipai.com/user/50453673', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('51', '菲菲菲', '张瑶', '1', '19900220', '河北', '大专', '170', '100', '90', '75', '80', '0', '无', '直播，微商', '18103306838', '河北邯郸峰峰矿区朝阳小区26号楼', 'baby290943978', '菲菲菲369', '200', '155', '100', '100', '100', '100', '平易近人好沟通', '可爱、逗比、萌、自然', '', '', '', '', 'http://weibo.com/u/2289805455?topnav=1&wvr=6&topsug=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('52', '李歆冉', '李丹', '1', '19940922', '西安', '大专', '165', '48', '83', '70', '88', '0', '微商', '2015年开始在微信上卖衣服 饰品 包包', '18629055091', '陕西省西安市莲湖区文景南路9号上和城小区', '434369580', '李歆ran', '1000', '174', '330', '7', '0', '0', '网络电台主播，运营过一段微商，性格很好', '知性、上进、阳光、正能量', '播音主持', '', '', '9870', 'http://weibo.com/u/2157347330?topnav=1&wvr=6&topsug=1&is_hot=1', '李歆ran', 'http://www.meipai.com/user/23506206', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('54', '卿卿stef', '巩喆', '1', '19910212', '西安', '本科', '165', '47', '82', '66', '85', '0', '陕西省公安厅制证中心 质检人员', '从事过微商 淘宝 主播', '15009204560', '陕西省西安市文景路公安厅制证中心 邮编710016', 'gzstef', '卿卿stef', '90000', '10582', '36000', '50', '40000', '70', '公务员，经常活跃于小咖秀', '才艺、可爱、邻家女孩范', '唱歌、架子鼓', 'http://aliv.weipai.cn/honglema/56d8481c0cf2bf3844e8abdd.jpeg', '', '9880', 'http://weibo.com/u/3314179600?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('56', 'Sunny', '佳佳', '1', '19920302', '杭州', '大专', '175', '100', '90', '62', '90', '0', '模特', '国际车展时装走秀', '18329015222', '浙江杭州', 'guseguxiang326603', 'sunny', '40000', '1200', '35000', '0', '0', '0', '时尚潮流', '气质、性感、时尚', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('59', '笑笑', '张含笑', '1', '19971205', '北京', '本科', '170', '46', '83', '68', '88', '2', '舞蹈兼职模特', '只是学校的，就不说了。', '15699993830', '北京市朝阳区青年路国美第一城3号院7号楼4单元1101', 'yysb 8888', '张含笑笑', '500000', '25314', '100000', '3028', '150000', '120000', '热情直爽的北京女孩，喜欢去三里屯群聚，经常喝酒，唱歌好听。心直口快很单纯，最近在做游戏主播。', '热情直爽、心直口快、单纯', '舞蹈', '', '', '9940', 'http://weibo.com/u/5575005698?topnav=1&wvr=6&topsug=1&is_hot=1', '张含笑万岁', 'http://www.meipai.com/user/15834853', '', '', '', 'http://www.miaopai.com/u/paike_z188xjrdis');
INSERT INTO `t_celebrity` VALUES ('60', '美儿妹妹', '徐美儿', '1', '19951227', '辽宁', '本科', '164', '48', '80', '60', '80', '1', '私营业主', '浙江卫视综艺节目 自己品牌护肤品', '15168437000', '浙江省余杭塘路中天西城纪3-1317', '834280008', '美儿妹妹就是我', '200000', '4333', '170000', '0', '0', '0', '直爽蠢萌的妹子，对网络事件的把握很好，总是能找到网红们共鸣的话题。因为言辞犀利，经常会得罪别人，敢爱敢恨。', '直爽、蠢萌、敢爱敢恨', '', '', '', '', 'http://weibo.com/u/1959165603?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('61', '谭皓丹丹', '谭皓丹', '1', '19931117', '临沂', '本科', '175', '59', '85', '71', '95', '1', '警察', 'CBB省代', '13969916672', '山东省临沂市莒南县上海花苑', 'daner67', '谭皓丹丹', '7000', '1500', '5600', '39', '0', '0', '温柔可爱的小清新一枚', '清新、可爱、温柔', '', '', '', '', 'http://weibo.com/u/1018388383?topnav=1&wvr=6&topsug=1&is_hot=1', '谭皓丹丹', 'http://www.meipai.com/user/1236374', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('65', '晓甜', '王悦燃', '1', '19940121', '长春', '本科', '7', '172', '92', '62', '97', '1', '自主创业', '微商和网络主播', '17790013162', '吉林省长春市朝阳区中海南湖一号', 'q996327997', '小燃燃baby', '30000', '3000', '15000', '159', '0', '0', '逗比接地气的东北女孩，深受粉丝喜爱', '邻家、知性、温柔', '', 'http://aliv.weipai.cn/honglema/56d84d2c0cf2bf3844e8b14e.jpeg ', '', '9860', 'http://weibo.com/u/1764122305?topnav=1&wvr=6&topsug=1&is_hot=1', '小燃燃baby', 'http://www.meipai.com/user/20257047', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('67', '黄馨凝', '黄馨凝', '1', '19870326', '广州', '大专', '167', '108', '84', '62', '86', '1', '微商', '微商', '18665671927', '广东省佛山市禅城区清水二街玫瑰铂金公馆2号楼', 'ala426', '黄馨凝', '0', '2830', '30070', '335', '0', '0', '从微拍结识了后来的老公，平时经营微商，唱歌非常好听', '御姐、知性、优雅', '', '', '', '', 'http://weibo.com/u/2856755831?topnav=1&wvr=6&topsug=1&is_hot=1', '黄馨凝', 'http://www.meipai.com/user/36891906', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('68', 'Gina-bibi', '胡婧榮', '1', '19940710', '包头', '高中及以下', '163', '45', '78', '41', '68', '0', '化妆师', '没有', '18518309820', '内蒙古包头市钢铁大街凯旋豪庭', 'hanyuxi19940210', 'Gina-bibi', '80000', '6800', '68000', '903', '0', '0', '专业化妆师，阳光上进的女孩', '甜美、可爱、逗比', '彩妆', 'http://aliv.weipai.cn/honglema/56d84d060cf2bf3844e8b138.jpeg', '', '9850', 'http://weibo.com/u/2399890557?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('69', '赵哥', '赵佩佩', '1', '19951203', '宜宾', '本科', '165', '40', '93', '50', '85', '0', '电商', '微商两年，白手起家', '18161082800', '四川省宜宾市兴文县僰王山镇新城诗蔓芬', '961454654', '赵哥.', '50000', '20000', '10000', '6000', '40000', '1000', '为人豪爽大气，穿着打扮时尚潮流', '霸气、个性、时尚、直爽', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('70', 'NZL妮子梁', '梁艳妮', '1', '19950911', '合肥', '大专', '162', '44', '34', '26', '37', '1', '微商', '14年做微商拥有自己的500人团队', '15255555854', '安徽省合肥市庐阳区清源路中铁国际城广园12栋2单元3206室，收件人妮子梁，15255555854', 'nzlmt888', 'NZL妮子梁', '150000', '700', '73577', '10000', '0', '0', '干练直爽，称自己为“假小子”', '可爱、甜美、直爽、魅惑', '', '', '', '', 'http://weibo.com/u/2663892901?is_hot=1', 'NZL妮子梁', 'http://www.meipai.com/user/1175266', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('74', '乐怡', '黄萍', '1', '19900802', '江苏', '大专', '160', '45', '89', '63', '88', '3', '微商', '淘宝和微商', '13338927605', '江苏省盐城市亭湖区', 'leyi90', 'HLY乐怡', '40000', '3633', '20000', '292', '20000', '200', '小清新', '甜美、可爱、逗比、清新范', '', '', '', '', 'http://weibo.com/u/2410945834?topnav=1&wvr=6&topsug=1&is_hot=1', 'HLY乐怡', 'http://www.meipai.com/user/1017443', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('75', '??泡沫??', '肖云', '1', '19850212', '江苏', '大专', '161', '47', '35', '2', '27', '1', '服装店店长', '公司年会表演', '18068870133', '盐城市建军中路地下商业街671号', '2413621327白易', '泡沫', '1500', '300', '666', '166', '100', '100', '服装店店长', '逗比、萌、自然、接地气、亲和', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('76', '张瑶isa', '张瑶', '1', '19880614', '河南', '大专', '170', '118', '34', '65', '90', '1', '淘宝店主', '三年淘宝店铺经营 2012年昕薇杂志华中赛区前十名 香港朗豪肚皮舞大赛二等奖', '13525384444', '河南省平顶山市城朴路与湛北路交叉口往北100米左右广厦雅园1006张瑶13525384444', 'taoxiaoye111', '张瑶isa', '260000', '13000', '47000', '731', '0', '0', '逗比富有分享精神，深受女粉喜爱', '欧美范、大气、直爽、中性风', '化妆、肚皮舞', '', '', '', 'http://weibo.com/u/1891970675?topnav=1&wvr=6&topsug=1&is_hot=1', '张瑶isa', 'http://www.meipai.com/user/1097907', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('77', '贝拉姐姐', '白丹丹', '1', '19901015', '太原', '大专', '174', '50', '70', '20', '30', '3', '淘宝店主 酒吧歌手', '酒吧歌手 微商 淘宝店主', '17052790607', '山西省太原市 杏花岭区 85号五龙花园 7号楼2单元1502', '17052790607', '叫我贝拉姐姐', '15000', '5000', '8000', '13500', '1000', '3000', '模特，经常夜店演出，技能跳舞。有娱乐精神，做微商最近', '逗比、搞怪、活泼、有创意、休闲风', '唱歌、跳舞', '', '', '', 'http://weibo.com/u/1337906412?topnav=1&wvr=6&topsug=1&is_hot=1', '叫我贝拉姐姐', 'http://www.meipai.com/user/16718370', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('79', '女王陛下', '郭晨', '1', '19920416', '成都', '本科', '164', '47', '84', '62', '86', '1', '美甲店主、微商', '2014年开始从事微商至今', '13558647233', '四川省成都市武侯区人民南路四段49号曼哈顿一期6楼21室', '13558647233', 'sally晨晨_', '12302', '6484', '4752', '99', '967', '0', '喜欢掌控，但是经常搞笑逗比', '御姐、逗比、优雅、名媛风', '', '', '', '', 'http://weibo.com/u/1840632760?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('82', '陈予熙', '陈雨欣', '1', '19971021', '南京', '大专', '171', '53', '85', '56', '92', '1', '模特', '微商 参加过向日葵团队 ，卖美瞳，开淘宝 走秀，平面，车展，音乐节，静态展等。', '18801599433', '南京市江宁区秣陵街道天元东路388号城市之光大厦2516', 'mmmmmiao1997', '陈小新Dianna', '9000', '390', '0', '0', '0', '0', '南京模特，内心脆弱', '可爱、逗比、知性、温婉', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('85', '白可可', '刘陈', '1', '19961227', '深圳', '大专', '174', '50', '84', '64', '90', '1', '舞蹈老师裁判 模特', '玫琳凯大中国区前五 签约广告明星 SmartAngel仁孚奔驰季军 亚洲国际舞蹈联合会国家A级教师 国家A级评审 深港澳车展英菲尼迪车模 深圳时装周走秀女模', '18681462527', '深圳罗湖区宝安南路骏庭名园B座2506室', 'cccccccc1227', '白可可Amy', '890000', '4812', '19166', '5863', '0', '0', '专业直爽高颜值的平面模特', '时尚、妩媚、OL、性感', '舞蹈', '', '', '', 'http://weibo.com/u/5058592986?is_hot=1', '白可可Amy', 'http://www.meipai.com/user/1057007', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('86', '多多', '李国华', '1', '19830408', '呼和浩特', '本科', '174', '105', '87', '62', '90', '1', '美容院店长，公司职工', '专业舞蹈演员，模特车展，战痘神华创始人', '18604718422', '内蒙古呼和浩特市赛罕区东影南路竹山蓝天二楼美骨计', 'DD048048', '多多', '100000', '40000', '40000', '20000', '5000', '4000', '微整形医生', '阳光、奔放、名媛、御姐范', '舞蹈', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('89', '黄瑶HYAO', '黄瑶', '1', '19941117', '深圳', '', '163', '98', '85', '66', '81', '0', '微商 服装', '做微商2年 全部产品实拍自用 还有一些服装 衣服都是自己拍自己卖', '18870095559', '深圳市罗湖区建设路东洋国际都会轩16楼1617室 收货人 :黄瑶 18870095559', 'Hy171717y', '黄瑶HYAO', '60000', '6000', '0', '99', '0', '0', '喜欢民族风格的东西，做事上进', '有上进心、民族风、甜美', '', '', '', '', 'http://weibo.com/u/1959112093?is_hot=1', '黄瑶HYAO', 'http://www.meipai.com/user/21360441', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('90', '小菲菲youyou', '范菲菲', '1', '19890820', '辽宁', '大专', '167', '49', '90', '63', '91', '0', '自由职业', '辽宁省大学生健美操大赛 各大型会议舞蹈演出', '18841841813', '辽宁省阜新市花园小区五号楼', 'fanfeifei626', '无', '33650', '0', '22547', '0', '0', '0', '走中性风格，为人豪爽', '可爱、帅气、萌、中性风', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('91', '王希希', '王春雨', '1', '19921005', '北京', '本科', '172', '55', '88', '67', '92', '2', '平模', '广东卫视炫风车手 北京梅德塞斯奔驰服装发布会', '18943550909', '吉林省长春市朝阳区同光路百汇街交汇百汇超市代收', '3282572617', '希妹儿就是王希希', '300000', '12000', '52000', '15000', '30000', '210000', '富有想法的妹子，总能轻易地与红人社区的其他人成为姐妹', '可人、逗比、直爽、健谈', '', '', '', '9840', 'http://weibo.com/u/5017973401?topnav=1&wvr=6&topsug=1&is_hot=1', '希妹儿就是王希希', 'http://www.meipai.com/user/22759609', '', '', '', 'http://www.miaopai.com/u/paike_se7ycts5u5');
INSERT INTO `t_celebrity` VALUES ('93', '小莹', '管莹', '1', '19920922', '哈尔滨', '本科', '168', '96', '84', '62', '86', '0', '主播', '微商1年', '18545109812', '江苏省宿迁市宿城区金陵名府6栋303', 'gy1992922', '管思骏', '2000', '29899', '2000', '0', '0', '0', '待人温和，平易近人', '邻家、温和、逗比', '', '', '', '', 'http://weibo.com/u/2796114901?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('96', '吴晴', '吴晴', '1', '19940216', '北京', '本科', '174', '48', '95', '2', '90', '3', '演员，歌手，讲师，微商', '重启品牌董事长，小鲜肉明星天团CEO，小纤肉减肥零食股东，微商女神，给上海交通大学讲过客，曾微商月流水千万的女神', '18615111114', '北京市朝阳区财满街金隅泰和园12号楼1单元1102 吴晴收 电话：18653331120', '18653331120', '吴晴Kate', '1900000', '121992', '80000', '1027', '150000', '8000', '演员，办过自己的微商供应链，性格很好', '活泼开朗、清新、甜美、才艺、性感', '唱歌、表演', '', '', '9920', 'http://weibo.com/u/3730524771?topnav=1&wvr=6&topsug=1&is_hot=1', '吴晴', 'http://www.meipai.com/user/21980663', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('98', '女皇大人_Coco', '王珊珊', '1', '19900908', '长沙 深圳', '大专', '162', '48', '75', '60', '90', '3', '私营', '平面 ds 自己已经有创建微商内衣品牌， 和公司。', '18569083733', '湖南省长沙市解放西路波波国际2001室', '345433009', 'shanbaobaogo@qq.com', '100000', '1000', '25000', '50', '40000', '0', '气场强大但为人善良', '有上进心、性感、御姐、逗比', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('99', '小樱桃??', '彭佳佳', '1', '19941031', '深圳市', '大专', '170', '55', '90', '55', '88', '1', '护士', '没有', '15255271108', '深圳市南山区南头古城乐平街一坊20号', 'pkk676655780', '小樱桃', '40000', '0', '7000', '0', '0', '0', '性格温和有爱心', '可爱、甜美、自然、有爱心、善良', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('100', 'xxm', '路路', '1', '19900825', '江苏', '大专', '163', '98', '0', '0', '0', '0', '无', '微商', '15805233629', '你好', '752241591', '。', '1000', '1000', '0', '0', '0', '0', '接地气的平民女神', '接地气、亲和、逗比', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('103', '李盈盈803', '李盈盈', '1', '19890803', '广州', '本科', '163', '40', '80', '56', '81', '3', '乐器公司副总', '2012～2016年广州电视台春晚&跨年晚会表演嘉宾 【微店】UKU品牌ukulele，店主 【天猫】UKU乐器旗舰店，店主', '13763377717', '广州市番禺区大学城北国家家庭数字应用基地B611，李盈盈13763377717', 's 80808102', '李盈盈803', '110000', '10000', '23000', '66000', '4100', '8700', '广州音乐学院毕业的歌手，形象阳光，笑容灿烂。自营由克里里淘宝店', '上进心，才艺，可爱、逗比', '', '', '', '', 'http://weibo.com/u/1826917462?topnav=1&wvr=6&topsug=1&is_hot=1', '李盈盈803', 'http://www.meipai.com/user/1146125', '', '', '', 'http://www.miaopai.com/u/paike_2ipas02bbt');
INSERT INTO `t_celebrity` VALUES ('106', '桓若灵', '桓彩云', '1', '19930517', '上海', '本科', '178', '50', '95', '60', '90', '1', '模特演员', '2013年中国好身材模特大赛冠军 演员 艺人', '18621270990', '上海市闵行区莲花路755弄万源城23号902苗苗收 tel18621270990', 'huanmiaomiaobb', '桓若灵就是桓淼淼', '1500000', '710000', '510000', '9255', '56000', '0', '新生代性感嫩模，时尚广告界新一代天后。从车模转型进军影视圈，参演了多部影视剧，16年接了十部戏，梦想开影视公司。性格温和，待人真诚', '御姐、性感、逗比、小资', '', 'http://aliv.weipai.cn/honglema/56d874cc0cf29739e6542b18.jpeg', '', '9960', 'http://weibo.com/u/5025404692?topnav=1&wvr=6&topsug=1&is_hot=1', '桓若灵baby', 'http://www.meipai.com/user/11893742', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('107', '李如意就是我', '李依', '1', '19920729', '湖南娄底', '大专', '162', '40', '78', '58', '80', '0', '模特', '微拍：李如意就是我', '18807382878', '湖南省娄底市娄星区乐花路 一品恒城 李依18807382878', 'li yi 0729', '李如意就是我', '30000', '1000', '20000', '0', '0', '0', '单纯的湖南女孩，刚刚经历了婚姻挫折，目前待业中', '可爱、邻家、真实、逗比', '', '', '', '9830', 'http://weibo.com/u/2374943792?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('108', '二爷', '张丽丽', '1', '19891130', '山东省济南市', '本科', '163', '50', '88', '2', '86', '3', '小老板个体', '微商有自营品牌，', '15863505678', '山东省济南市重汽彩世界5号楼1单元307', '15805310523', '二爷女孩纸', '100000', '1', '60000', '100', '44000', '0', '干练的女孩，拥有自己的微商品牌', '大气、直爽、逗比、有上进心', '', '', '', '', 'http://weibo.com/u/2641467280?topnav=1&wvr=6&topsug=1&is_all=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('109', '茜茜', '王茜', '1', '19910625', '北京', '本科', '165', '48', '96', '21', '29', '2', '高级私人教练', '护肤品 XI家军团创始人', '13521570255', '北京市海淀区田村北路椿秋嘉园18号楼一单元602室', '13521570255', '王茜WXL', '44000', '1100', '0', '0', '43000', '0', '健身教练，可以打造一下健身达人', '有上进心、逗比、自然、邻家、亲和', '健身', '', '', '', 'http://weibo.com/u/2460417984?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('110', '乔米', '章思易', '1', '19920325', '旧金山', '大专', '174', '50', '88', '61', '93', '2', '模特 主编', '太多了，哈哈。不做微商', '13520529209', '北京市朝阳区百子湾南二路百子湾家园C区306-2-901 李药师收 18611075540', 'gagasiyi', '乔米Scarlett', '50000', '27891', '87121', '3514', '5000', '0', '性感大胆的车模， 目前在美国留学', '性感、御姐、才艺气质型', '', '', '', '', 'http://weibo.com/u/1819630781?topnav=1&wvr=6&topsug=1&is_hot=1', '乔米-gaga', 'http://www.meipai.com/user/20818474', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('111', 'zaharacee', '张若兰', '1', '19931114', '杭州', '高中及以下', '162', '80', '34', '23', '33', '2', '中国最美的聋哑人', '百度贴吧头条，猫扑等等新闻', '15821883340', '杭州市西湖区留下街125号西溪君逸汇1024室', '1689142', '张若兰微博', '850283', '120000', '142000', '7050', '2358', '220000', '“中国最美聋哑人”，目前是映克直播前十的主播', '阳光、正能量、有爱心', '', '', '', '', 'http://weibo.com/u/2645323424?topnav=1&wvr=6&topsug=1&is_hot=1', '张若兰', 'http://www.meipai.com/user/20603043', '', '', '', 'http://www.miaopai.com/u/paike_ckakgoxpmh');
INSERT INTO `t_celebrity` VALUES ('112', '闫小萌', '闫雪飞', '1', '19900828', '北京', '大专', '160', '44', '81', '54', '160', '0', '个体', '之前有拍过平面', '13241895938', '北京市丰台区梅市口路西府颐园悦合园1号楼1单元202', '13241895938', '_小小闫', '30000', '226', '2475', '0', '0', '0', '微商出身，性格干练直接', '可爱、逗比、温和、邻家范', '', '', '', '', 'http://weibo.com/u/2279060657?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('113', '小豆包儿儿儿', '宋鑫悦', '1', '19941011', '北戴河', '本科', '164', '52', '82', '66', '92', '1', '学生', '在校期间校舞团 民族 古典舞 非专业 参加4年市春晚。 代购', '13315388706', '河北秦皇岛北戴河驼峰园别墅区 26栋', '812169152', '小豆包儿儿儿', '20000', '10021', '5402', '0', '0', '0', '非常阳光开朗的逗比女孩儿，适合清新风格', '氧气美女、亲和、逗比', '舞蹈', '', '', '', 'http://weibo.com/u/5145668239?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('117', '郑洛凝', '郑洋', '1', '19940304', '沈阳', '本科', '165', '48', '86', '62', '86', '1', '品牌顾问', '从事微商内衣销售', '13654006695', '辽宁省沈阳市和平区南京南街1甲1916室', '57027165', '郑洛凝Alina', '20000', '700', '17000', '0', '0', '0', '温和的白羊座女孩，知识产权公司的销售冠军，微商内衣达人', '可爱、逗比、内衣控', '唱歌', 'http://aliv.weipai.cn/honglema/56d87dac0cf29739e6542ba9.jpg ', '', '9820', 'http://weibo.com/u/3139512594?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('118', 'summer', '神莉莉', '1', '19950824', '南京', '大专', '162', '94', '35', '26', '29', '1', '随意', '没', '18205095170', '南京市鼓楼区中山北路215号，中商万豪', 'coco1919888', 'co榆沫', '1000', '6', '1000', '0', '56', '0', '喜欢搞怪，为人做事比较随性', '萌、可爱、逗比、清新、随性', '', '', '', '', 'http://weibo.com/u/3237599222?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('119', 'baby顾汐缇', '王冬梅', '1', '19921227', '呼和浩特', '大专', '170', '104', '70', '27', '38', '1', '自由职业', '模特', '17701149306', '呼和浩特市新城区 海亮E坐 2510', 'baby 1992 www', 'baby顾汐缇', '80000', '7127', '0', '10000', '0', '0', '从事微整形行业', '温和、亲和、执行力强', '', '', '', '', 'http://weibo.com/u/3276773775?topnav=1&wvr=6&topsug=1&is_hot=1', 'Baby顾汐缇', 'http://www.meipai.com/user/36425292', '', '', '', 'http://test.miaopai.com/u/paike_2mqbx0wfjd');
INSERT INTO `t_celebrity` VALUES ('120', '喵梓酱', '张宇', '1', '19880103', '哈尔滨', '本科', '170', '43', '83', '61', '86', '1', '主播', '帆船宝贝', '13100880733', '黑龙江省哈尔滨市呼兰区南京路江霆华府一期 A3栋 张羽涵（收）', 'asmint', '爱做梦的小铃铛', '200000', '24046', '30950', '400', '1000', '130000', 'pc大主播，以可爱、卖萌形象出镜', '二次元、萌、可爱、逗比', '', 'http://aliv.weipai.cn/honglema/56d87f400cf2bf3844e8c6cc.jpg ', '', '9810', 'http://weibo.com/u/1840908297?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('121', '班嘉妮', '班嘉妮', '1', '19960204', '长沙', '本科', '165', '44', '12', '12', '12', '0', '网络红人', '没有', '18570633106', '长沙市雨花区人民中路 融圣国际 6栋1722', '18570633106', '班嘉妮', '110000', '80000', '0', '0', '0', '0', '形象清纯可爱', '可爱、爱笑、逗比、亲和', '服装设计师', '', '', '', 'http://weibo.com/u/2736890625?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('122', '田家立', '田家立', '1', '19920809', '北京', '本科', '167', '88', '78', '58', '80', '2', '个体', '学过舞蹈 做过微商 为自己服装当过模特', '18515868821', '山西省太原市清徐县望景花园（邮寄前打电话通知地址不定 谢谢哦）', 'TJL6788', '田家立', '55000', '4728', '23591', '21372', '2581', '1510', '之前在西单拥有实体服装店，目前待业。性格很好的女孩', '才艺、知性、名媛风、善良', '舞蹈', '', '', '', 'http://weibo.com/u/2062998081?topnav=1&wvr=6&topsug=1&is_hot=1', '田家立', 'http://www.meipai.com/user/22668281', '', '', '', 'http://www.miaopai.com/u/paike_jw8zpb622c');
INSERT INTO `t_celebrity` VALUES ('127', '太阳女神', '陈春慧', '1', '19950228', '温州', '高中及以下', '2', '50', '34', '2', '3', '1', '模特', '做过微商', '15858771191', '浙江省温州市苍南县龙港镇柳南路100号', '18372660266', 'CHH_太阳女神', '0', '60', '0', '0', '0', '0', '充满正能量', '阳光、正能量、时尚', '', '', '', '', 'http://weibo.com/u/3350553220?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('128', '莹姐', '张莹', '1', '19911226', '北京', '本科', '168', '45', '84', '18', '34', '3', '莹妆贸易有限公司总裁', '微商从事两年', '18071244444', '北京市丰台区梅市口路珠江峰景10号楼302', 'z y 520911226', '张莹Super莹', '150000', '3000', '100000', '1467', '5000', '2000', '微商团队莹妆创始人，热心善良的女孩', '名媛范、有上进心、时尚', '', '', '', '', 'http://weibo.com/u/2782631601?topnav=1&wvr=6&topsug=1&is_hot=1', '张莹Super莹', 'http://www.meipai.com/user/21203093', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('129', '嘉欣小星星', '朱佳欣', '1', '19941004', '北京', '大专', '165', '50', '37', '64', '82', '0', '微商', '当过舞蹈老师，后来在北京学的高铁专业期间开始做的微商，不以为主业，直到毕业现在！准备开一家自己的宠物店现在正在筹备！', '13810620523', '北京市丰台区菜户营金泰城.丽湾7号楼2307', 'jiaxin-520-1314-', '嘉欣小星星', '9000', '133', '7554', '200', '500', '300', '待业在家的北京女孩，性格慵懒单纯', '才艺、古典、善良、自然', '舞蹈', '', '', '', 'http://weibo.com/u/5101267413?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('130', '熊孩子', '吴双', '1', '19931124', '大庆', '大专', '163', '48', '84', '65', '86', '1', '微商', '微商，出过车展', '15845898876', '黑龙江省大庆市让胡路区憩园小区3-5一单元301', '1506692754', '美牙牙Biu', '120000', '1189', '0', '0', '102000', '0', '可爱逗比萌', '逗比、萌、接地气、直爽', '', '', '', '', 'http://weibo.com/u/5727947611?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('133', '罗小佩', '罗佩', '1', '19940119', '武汉', '大专', '166', '98', '36', '27', '28', '0', '自由', '木有', '15827000216', '湖北省武汉市江岸区西马铭仕', '243592387', '罗小佩520', '170000', '756', '160000', '0', '0', '0', '性感不失可爱的武汉女孩，合作意愿强烈。接过推广，做过微商', '熟女、性感、可爱、御姐范', '', 'http://aliv.weipai.cn/honglema/56d8b4c90cf29739e6542d76.jpeg', '', '9900', 'http://weibo.com/u/5660829855?is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('134', '花葬辛德瑞拉', '李晓辉', '1', '19911119', '长春', '本科', '170', '55', '86', '70', '92', '2', '钢琴师', '花椒直播', '13624308645', '长春市二道区高格蓝湾32栋1单元1802', '641083202', '花葬辛德瑞拉1991', '14702', '109', '8261', '0', '6332', '0', '多才多艺的朝鲜族女孩，温婉端庄，喜欢弹钢琴唱歌跳舞', '才艺、气质、温婉', '钢琴、舞蹈', '', '', '', 'http://weibo.com/u/3059680753?is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('135', '王依欣', '王依欣', '1', '19930202', '大庆', '大专', '163', '85', '14', '59', '15', '0', '客运', '吴经历', '15846935208', '黑龙江省大庆市让胡路区阳光嘉城3期f14，2单元1303', '906402088', '王依欣z', '10000', '130', '0', '135', '0', '0', '性格温和，做事任真负责', '亲和、自然、邻家女孩', '', '', '', '', 'http://weibo.com/u/5083021144?is_hot=1', '王依欣', 'http://www.meipai.com/user/21924466', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('136', '大粒baby', '李琳琳', '1', '19940818', '河南', '大专', '165', '48', '76', '70', '80', '0', '学生', '做过几次小型会议主持。开过一个充值淘宝店。做过一年微商。', '18639379593', '河南省濮阳市华龙区 中原油田 五一路登封小区11号楼', 'lilin613733', '-违心爱人', '2711', '1404', '1218', '29', '6', '8', '长相青春，充满校园风，性格逗比', '自然、校园风、逗比', '', '', '', '', 'http://weibo.com/u/2143092613?topnav=1&wvr=6&topsug=1&is_hot=1', '-违心爱人', 'http://www.meipai.com/user/59889499', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('139', '菩提果子', '张娇', '1', '19930511', '北京', '高中及以下', '170', '50', '72', '59', '85', '1', '美容', '做过两年微商 做过自己的产品', '13701266257', '辽宁省鞍山市台安县龙城花园自取', 'satanicjiao', '菩提果子', '110000', '200', '28000', '0', '140000', '0', '有上进心，充满青春活力', '有上进心、可爱、逗比、直爽、青春', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('141', '萧雅文', '肖海英', '1', '19901204', '广东', '本科', '165', '45', '37', '26', '38', '3', '微商', '2年微商！月入几十万', '18088844188', '广东省中山市翠湖居A140号商铺', 'tutu108taobo', '萧雅文Yvonne', '60000', '32000', '1400', '0', '17000', '32000', '有上进心，形象可爱', '甜美、可爱、有上进心', '', '', '', '', 'http://weibo.com/u/2424629884?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', 'http://www.miaopai.com/u/paike_in540awwip');
INSERT INTO `t_celebrity` VALUES ('144', '梦然Molla', '张梦然', '1', '19910109', '北京', '本科', '170', '50', '96', '65', '95', '1', '演员，模特', '电影：陈小春 安以轩主演《好命先生》演:记者 公益电影：《世界无烟日之如果可以重来》女一 院线电影:恐怖医院 女三 网剧：精神大爆炸 女一 网剧：僵尸侠 女二 网剧：屌丝男士4 导演：大鹏 合作演员：郑容和 网剧：傲魂 演：七爷 百度地图打车 广告拍摄 京东网京东众筹 广告拍摄 施尔美整形 形象代言人 德玛西亚杯-cos卡特琳娜 酒仙网 拍摄模特 天津电视台-三家购物 合约模特 芒果台湖南卫视-《我们约会吧》栏目-女嘉宾 新浪网-汽车品牌御用模特 2013年香港国泰航空新春汇演 走秀模特 2013Fenfangy春夏时装新品发布会走秀模特 今晚周报粉刊Promod/VeroModa/H&M/ZARA 等服饰平面广告模特 《范》杂志 妆面合作模特 《雅致》杂志周年庆典模特 《SKAP》样册腿模模特 “人头马”VSOP优雅夜走秀御用模特', '13810209259', '北京市朝阳区青年路国美第一城3号院9号楼2单元2203', 'molla2577', '梦然Molla', '5000', '18300', '26577', '0', '0', '0', '做事有责任心，为人善良', '性感、魅惑、踏实、善良、有责任心', '', '', '', '', 'http://weibo.com/u/1820502555?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('145', '小熊', '刘培雨', '1', '19921029', '北京', '大专', '160', '44', '86', '62', '88', '1', '平面模特 艺人 淘宝店主', '部分如下 索尼摄影课堂外景模特 翡瑟定制婚纱样片模特 爱上原品服装拍摄模特 abfab时尚网站品牌服装街拍片模特 韩国《CECI姐妹》杂志模特 淘宝明星网店面膜模特 知名造型师温狄新书造型模特 AOC显示器吉美女孩美背代言 工作室样片模特 大众GTI拍摄模特 女神范北京地区模特 佳能圣诞女性专场拍摄模特 金立手机E6发布会美拍展示模特 丹姿护肤水系列TVC拍摄模特 SYLLABLE赛尔贝尔耳机系列平面模特 北京国际汽车用品展I-ROBOT展台模特 顶峰影艺、蜂鸟网合作模特 青岛出版社《不美不活》美妆宝典保养护肤篇模特 吉林科学技术出版社《就是要素颜》封面+全书模特 出版中《韩式妆108个秘诀》封面+模特 出版中《风靡全球的女神韩妆》封面+模特 网络节目《非常优等生》第一季妹妹团成员 山东卫视《美丽赢天下》首期模特嘉宾 东方卫视《时尚汇》时尚嘉宾 媲美网《美丽魔法课堂》P-girl 黑龙江卫视《美丽俏佳人》御用模特、嘉宾 黑龙江卫视《美俏精油课堂》嘉宾主持 河北都市频道《美女美女抢前冲》嘉宾及季度赛邀请嘉宾 河北财经频道《我为购物狂》直播嘉宾 央视频道《幸福总动员》多期模特 全国多家地面频道益智互动节目《才貌双全》第一季女嘉宾 地铁MV两支 新街口组合MV《颈上胭脂红》女主角 电影《我的男男男男朋友》特约演员 湖南卫视《我家有个赵大咪》特约演员 王岽鉴导演作品《1221》饰 干女儿 微电影《美女快闪》 微电影有鬼系列之《合租有鬼》女主角 北京趣游科技乐秀节目主播 腾讯游戏《天天炫斗》平面拍摄模特 APP《陌游》广告COSER模特 360《黑暗之光》大型3D双端网游官方主播 2014China joy 360星耀女神宣传视频 北京体育大学模特大赛受邀评委 北京国际服装电影节受邀红毯嘉宾及领奖代表 2015年开设淘宝店:babykuma小熊睫毛店', '18201516339', '北京市朝阳区酒仙桥驼房营南里梵谷水郡小区20楼505室', 'lpy19921029', 'kuma雨有一只小榴莲', '30000', '3600', '0', '0', '0', '0', '喜欢搞怪，为人逗比，有事业心', '逗比、搞怪、性感、可爱、有事业心', '设计', '', '', '', 'http://weibo.com/u/2172741005?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('146', '陈梦梦US', '陈梦云', '1', '19891113', '广州', '大专', '161', '46', '78', '64', '87', '1', '服装', '3年微商，淘宝模特', '13560496695', '广州市海珠区滨江东路嘉仕花园尚海C2栋2506', 'lololo1o', '陈梦梦US', '5000', '5800', '5000', '144', '0', '0', '身材好，穿着时尚性感，事业上有上进心', '性感、时尚、有上进心', '', '', '', '', 'http://weibo.com/u/1927275165?topnav=1&wvr=6&topsug=1&is_hot=1', '陈梦梦US', 'http://www.meipai.com/user/20784524', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('147', '满天都是小鑫鑫_', '王冰鑫', '1', '19941002', '福州', '大专', '165', '45', '0', '0', '0', '1', '主播', '…', '13110875050', '福建省福州市晋安区万科金域榕郡2号楼602', 'heyseesee', '满天都是小鑫鑫_', '150000', '10000', '80000', '1003', '2000', '900', '标致甜美的女孩，金融系毕业，聪明上镜', '性感高挑、清新、可爱', '', 'http://aliv.weipai.cn/honglema/56d9359a0cf2bf3844e939d0.jpeg', '', '9800', 'http://weibo.com/u/1003931522?topnav=1&wvr=6&topsug=1&is_hot=1', '满天都是小鑫鑫_', 'http://www.meipai.com/user/18599754', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('148', '李小甜', '李荷英', '1', '19910515', '福建泉州', '大专', '163', '44', '75', '56', '80', '1', '美容院顾问', '学校时酒吧肚皮舞、商场舞蹈', '15559537222', '福建省泉州市石狮市八七路金沙酒店对面蜗牛公寓B613', 'tian tian 6233', '', '0', '0', '0', '0', '0', '0', '性格踏实，做事认真', '朴素、自然', '舞蹈', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('149', '小狐仙儿', '黄蓉', '1', '19920223', '北京', '大专', '164', '90', '70', '62', '88', '2', '模特', '电影开机仪式', '17762412390', '北京市朝阳区酒仙桥万里红甲31号院1号楼401', 'a546820197', 'Ama小狐仙', '320000', '6000', '60000', '102', '1000', '260000', '单纯善良的北漂', '中国风、温婉', '', '', '', '', 'http://weibo.com/u/2906795991?topnav=1&wvr=6&topsug=1&is_hot=1', 'Ama小狐仙儿', 'http://www.meipai.com/user/67452862', '', '', '', 'http://www.miaopai.com/u/paike_mw4e2kmdp7');
INSERT INTO `t_celebrity` VALUES ('150', 'DJ-CC', '陈韵竹', '1', '19901204', '成都', '大专', '170', '48', '80', '60', '86', '1', '派对DJ音乐人', '国外巡演及中国上百场个人演出 中国知名女DJ 首位做客优酷及搜狐专访女DJ DJCC音乐工作室CEO 网络红人', '15984918778', '四川省成都市锦江区静秀路55号万科金润华府15-906 DJCC音乐工作室', 'cc388880', 'DJ-CC', '1000000', '250000', '430000', '24000', '0', '260000', '善良重感情很有主见，夜店女王', '性感、有上进心、时尚', '唱歌、跳舞', 'http://aliv.weipai.cn/honglema/4779D93513C84A1E98D2C1ABCED8592E.jpg', '', '9950', 'http://weibo.com/u/1944816365?topnav=1&wvr=6&topsug=1&is_hot=1', 'DJ-CC', 'http://www.meipai.com/user/22688923', '', '', '', 'http://www.miaopai.com/u/paike_7refjik5z8');
INSERT INTO `t_celebrity` VALUES ('151', '张语绮', '张晶晶', '1', '19930904', '北京', '高中及以下', '177', '53', '88', '60', '90', '1', '职业模特', '湖南卫视【我们约会吧】人气女嘉宾 2014【wff女子搏击】电影拍摄 苹果app女生派特约足球宝贝 乐视体育专属模特 不良人电视广告模特 2015上海cj银行展台cos 淘宝淘女郎 360app特约拍摄女模 4G手机宣传片拍摄女主角 2013北京皮草发布会模特 三星手机新品发布会特约女模 2014北京通讯展联通展台模 金立手机发布会女模特 2014苹果手机发布特约女模 平安银行宣传片拍摄特约 蜂鸟网特约拍摄模特 北京山水文园房地产开盘走秀 中华园房地产开盘走秀 金茂府房地产走秀 2014玛莎拉蒂车模 2014长城汽车巡展车模 2014北京一汽大众车模 2014宝马迷你活动车模 2014京东年会维多利亚秘密走秀模特 2014.360年会模特 2014电信年度盛典年会模特 2015FC游戏展模特 国美宣传片拍摄模特 2015北汽巡展模特 2015现代巡展模特 2015长安巡展模特 本州纽约潮牌拍摄御用模特 奔驰线下活动御用模特 一汽大众线下活动车模 北京金夫人婚纱样片拍摄女模 韩国爱则雅特服饰走秀模特 LLB杂志拍摄模特 2014服博会九龙广场秀模特 2014爱戴内衣走秀模特 2014茜比内衣走秀模特 Speedo泳装走秀模特 2013央视中国汽车拉力赛车模 2014北京密云国际赛车拉力赛车模特l 2014北京金港拉力赛车模 2014爱卡车迷大会御用车模 和田玉、周大福等珠宝秀模特 级棒活动特约女模 so cool杂志模特 电视节目 湖南卫视【我们约会吧】人气女嘉宾 安徽卫视【男生女生向前冲】 黑龙江等六大卫视节目【拆车坊】御用模特 黑龙江卫视【美丽俏佳人】女嘉宾 广西卫视【猜的就是你】嘉宾 不良人游戏tvc广告拍摄 电影：心花怒放手模特，脚模', '15910979679', '北京市丰台区公益西桥星河苑1号院2号楼2单元', '740249860', '张晶晶也叫张语绮', '300000', '50000', '140000', '92000', '3000', '0', '阳光小清新，事业有责任心上进心', '有上进心、可爱、甜美、时尚', '', 'http://aliv.weipai.cn/honglema/56d94aa30cf2bf3844e95c1a.jpeg', '', '9970', 'http://weibo.com/u/3277457677?topnav=1&wvr=6&topsug=1&is_hot=1', '张晶晶也叫张语绮', 'http://www.meipai.com/user/17253715', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('152', '张栩菲', '张晓晶', '1', '19920518', '上海', '本科', '168', '55', '90', '65', '90', '1', '市场运营', '推女郎模特，尤果网模特，改装车车模', '15522628066', '上海闵行区紫月路1000号', 'zhangxiaoben818', '小卷卷老手', '150000', '15400', '106896', '3000', '0', '2000', '性感不失可爱，上学期间就开始做兼职模特', '比较百搭', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('153', '花旗', '汪安琪', '1', '19941126', '北京', '本科', '170', '49', '88', '60', '87', '0', '演员', '演员', '18645063613', '北京双井时代国际家园1号楼三单元503', 'huaqinai', '演员花旗', '300000', '20000', '100000', '3690', '0', '5000', '本来为大妞范女团成员，转型做演员，现在在探索短视频平台栏目编辑', '可以走学院派', '', '', '', '', 'http://weibo.com/u/2768624275?topnav=1&wvr=6&topsug=1&is_hot=1', '演员花旗', 'http://www.meipai.com/user/20404935', '', '', '', 'http://www.miaopai.com/u/paike_vyaxb7o415');
INSERT INTO `t_celebrity` VALUES ('154', '不二姑娘', '闫璐', '1', '19901020', '秦皇岛', '大专', '165', '48', '85', '62', '88', '1', '微商', '职业微商 主营女装 饰品', '15133555020', '河北省秦皇岛市海港区润地青云2-2-1903', 'maolidedian', '傲娇懵懵哒', '210000', '2200', '29000', '0', '0', '175000', '微拍元老用户，现在专注做微商', '清新，百搭风格', '', '', '', '', 'http://weibo.com/u/1748776253?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', 'http://www.miaopai.com/u/paike_u8q7epvtty');
INSERT INTO `t_celebrity` VALUES ('155', 'Sweet微微', '汤微微', '1', '19881204', '北京', '高中及以下', '165', '96', '86', '69', '86', '2', '美容、微商', '经营过美容院', '18246278883', '北京市朝阳区青年路西里国美第一城3号院10号楼3单元2306 微微18246278883', '3053521874', 'Sweet小微微', '400000', '5449', '70000', '0', '320000', '0', '穿衣百搭，做微整形', '有上进心、清新', '', 'http://aliv.weipai.cn/honglema/56d953fd0cf29739e6549ca1.jpg ', '', '9910', 'http://weibo.com/u/2302702157?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('156', 'vivi', '邓雨薇', '1', '19910531', '北京', '本科', '175', '52', '85', '63', '90', '1', '模特', '2015全年车展巡展', '18611766661', '北京朝阳区西大望路金港国际', '79408694', '邓雨薇vivi', '30000', '20000', '0', '642', '0', '0', '温和，明事理', '清新可人、青春有活力', '', '', '', '', 'http://weibo.com/u/1803741217?topnav=1&wvr=6&topsug=1&is_hot=1', '邓雨薇Vivi', 'http://www.meipai.com/user/38539304', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('157', '张鑫Amy', '张鑫', '1', '19931006', '北京', '大专', '166', '46', '85', '60', '90', '0', '平模', '男人装拍摄 精评媒微电影 尤果网 17火等', '18310357600', '北京市朝阳区青年路小悦中心2号楼829', 'zhangxin1036476914', '张鑫Amy', '300000', '20000', '30000', '346', '5000', '130000', '选择恐惧症，性感善良好相处', '性感、可爱、逗比', '', '', '', '', 'http://weibo.com/u/2704945845?topnav=1&wvr=6&topsug=1', '张鑫Amy', 'http://www.meipai.com/user/1130350', '', '', '', 'http://www.miaopai.com/u/paike_rzirkyfw2u');
INSERT INTO `t_celebrity` VALUES ('158', '纪念青春的离别书', '玉', '1', '19950508', '重庆', '高中及以下', '165', '47', '33', '23', '0', '3', '微商', '上过爱奇艺视频 微信圈有转发过我的搞笑视频', '13851834596', '重庆 瞬间就睡觉睡觉睡觉睡', 'y2015a2z4j', '纪念青春的离别书', '30000', '12670', '28000', '0', '0', '0', '做事认真，有上进心，为人好相处', '清新、性感、甜美', '', '', '', '', 'http://weibo.com/u/2474363191?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('159', 'Rossy', '黄凯琪', '1', '19911007', '广州', '大专', '158', '45', '80', '24', '25', '1', '主播', '准备进驻微商', '18825062261', '广东省广州市海珠区翠竹路樱花街56号星海明珠海韵轩1104', 'luosiqi2013', 'ROSSY', '334415', '17627', '13296', '7701', '0', '337000', '平易近人好相处，有上进心', '知性、有上进心、可爱', '', '', '', '', 'http://weibo.com/u/1727263225?topnav=1&wvr=6&topsug=1&is_hot=1', 'ROSSY', 'http://www.meipai.com/user/1004628', '', '', '', 'http://www.miaopai.com/u/paike_g1e9ds5m76');
INSERT INTO `t_celebrity` VALUES ('160', '黑妹-Tang', '唐翠', '1', '19930628', '云南丽江', '高中及以下', '158', '42', '70', '68', '80', '0', '文员', '没有演出经历，做微商一年多一直做不好，希望红了吗能帮助到我，让我越来越好。', '13566177702', '云南省玉溪市瓦窑十一组54号', '969733159', '-我和我的猫-', '1500', '100', '1000', '0', '0', '0', '敏感细腻，富有爱心', '自然、有理想、朴素', '', '', '', '', 'http://weibo.com/u/2275720824?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('161', '范美熙Jennifer', '范丽婷', '1', '19940917', '苏州上海', '大专', '168', '90', '82', '60', '90', '3', '模特艺人 节目嘉宾 时尚搭配 微博KOL', '美图秀秀APP美美小店发布会网红嘉宾，斗鱼TV全民招募会网红嘉宾，银泰中心上海推介会网红嘉宾，杂志《中国汽车市场》模特、<2013腾讯嘉年华TGC>QQ会员展台showgirl 、2014上海美博会水循环主推模特、帝统饼干TVC广告演员，小辉哥火锅TVC宣传短片演员、视频红人、2014万科模特大赛十强、2014chinajoy索乐展台指定showgirl、苏州电视台三套文化生活频道《欢乐轧神仙》综艺节目嘉宾，2014CAS改装车模大赛十佳，2015chinajoy心动游戏主推showgirl', '13052809603', '苏州市高新区通安镇华通花园二区82幢103 范美熙 13052809603', '982031540', '范美熙Jennifer', '300000', '157479', '43562', '18000', '0', '0', '自信有上进心，做事认真', '甜美、可爱、小清新、时尚', '', '', '', '', 'http://weibo.com/u/2057354844?topnav=1&wvr=6&topsug=1&is_hot=1', '范美熙Jennifer', 'http://www.meipai.com/user/64732644', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('162', '魔女魔咒', '邱秋', '1', '19890918', '无锡', '本科', '166', '48', '75', '2', '84', '3', '医药', '电影学院表演系毕业 有过很多演出表演经验…', '13621531076', '江苏省江阴市名雅居64幢103', 'luckylilygogo', '', '5881', '0', '0', '0', '0', '0', '做事认真负责，有上进心，逗比', '性感、逗比、御姐范', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('163', '董米妮', '董欣', '1', '19891005', '哈尔滨', '本科', '160', '42', '82', '72', '85', '1', '淘宝店主', '淘宝店主 淘宝模特 平面模特', '13613657771', '黑龙江省哈尔滨市群力观江国际21号楼', 'xxnn060325', '董米妮Quella', '439587', '6800', '2170', '1465', '152', '420000', '为人善良，做事靠谱', '豪爽、清新、可爱', '', '', '', '', 'http://weibo.com/u/1798998017?topnav=1&wvr=6&topsug=1&is_hot=1', '董米妮Quella', 'http://www.meipai.com/user/15710036', '', '', '', 'http://www.miaopai.com/u/paike_x1l3vq0a4g');
INSERT INTO `t_celebrity` VALUES ('164', '范美晴', '范美晴', '1', '19930823', '浙江', '本科', '165', '48', '88', '60', '90', '3', '创业者', '没有', '13325939362', '浙江省嘉兴市嘉善县 百合春天', 'moteccc', '范美晴', '200000', '50000', '100000', '140', '50000', '300', '有上进心，做事靠谱', '可爱、知性、小清新', '', '', '', '', 'http://weibo.com/u/2792209304?topnav=1&wvr=6&topsug=1&is_hot=1', '范美晴', 'http://www.meipai.com/user/21066117', '', '', '', 'http://www.miaopai.com/u/wxsso_jb76l3pfq3');
INSERT INTO `t_celebrity` VALUES ('165', '天琪宝宝', '汪天琪', '1', '19950306', '辽宁锦州', '高中及以下', '170', '51', '87', '60', '91', '0', '网络主播', '在多玩YY平台做过主播 kk唱响平台做过主播 现在六间房 酷狗繁星直播平台直播。', '18402644411', '辽宁省北镇市沟帮子镇二院对面鸿润伯爵湾回迁楼7号楼2单元3楼', 'wtq277', '你爱的天琪宝宝', '133312', '312', '50356', '39', '2341', '0', '性格直爽但是又不失可爱', '逗比、柔情、可爱、萌', '唱歌', '', '', '', 'http://weibo.com/u/2694915957?topnav=1&wvr=6&topsug=1&is_hot=1', '你爱的天琪宝宝', 'http://www.meipai.com/user/11557801', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('166', '乐凌1993', '韩月玲', '1', '19930305', '邢台', '本科', '160', '45', '88', '60', '90', '1', '网络主播 平模', '参加当地的各种开业酒会', '13103192345', '河北省邢台市桥西区中华路388号维也纳花园15D', '13103192345', '没有微博', '150000', '0', '85062', '0', '0', '0', '多愁善感，心思细腻', '性感、甜美、时尚', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('167', '梅姿', '戚会梅', '1', '19890928', '山东', '本科', '168', '49', '85', '68', '88', '2', '自由', '美丽世界小姐十佳
腾讯汽车宝贝
TVC 广告 平面等商业拍摄
从事微商三年', '18106315172', '山东威海环翠区 统一南路与沧口路交汇处 保利凯旋公馆 8号楼', 'meizisweet', '梅姿baby', '100000', '14651', '0', '0', '0', '0', '知性有内涵，做事靠谱，待人亲和', '知性、小资、有情调', '', '', '', '', 'http://weibo.com/u/1649423780?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('168', '施娅静', '刘静', '1', '19930804', '长沙', '高中及以下', '165', '92', '80', '68', '84', '0', '网店店主', '以前开过实体店服装店，后来有了网店就没做实体店了，实体店很累，凌晨四点就要去株洲进货，一个弱女子还要提很重很重的货.', '18670392023', '湖南省长沙市开福区伍家岭街道伍家岭生活广场', '13194190916', '施娅静__MiuMiu', '80000', '2744', '64222', '0', '0', '0', '性感可爱，气场强大，有事业心', '有上进心、性感、甜美、可爱', '', '', '', '', 'http://weibo.com/u/3138090327?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('169', '张蓝兮Baby', '张蓝兮', '1', '19910415', '西安', '本科', '163', '44', '80', '58', '78', '0', '平面模特 演员', '电影，电视剧拍摄，广告拍摄，mv，品牌代言', '18991222256', '陕西省西安市未央区凤城九路文景小区盛园27号楼2001', 'q519951304', '张蓝兮Baby', '85000', '78600', '5480', '24', '0', '25', '热情善良，讲义气，为人靠谱', '热情、直爽、性感、时尚', '', '', '', '', 'http://weibo.com/u/3471898574?topnav=1&wvr=6&topsug=1&is_hot=1', '张蓝兮?IceBaby', 'http://www.meipai.com/user/1007798043', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('170', '魏嘉蒂Betty', '魏嘉蒂', '1', '19910415', '杭州', '本科', '170', '55', '93', '68', '86', '0', '模特', '凯迪拉克御用模特，保时捷、法拉利品牌车模，男人装杂志', '15715722697', '浙江省杭州市下城区杨六堡路7号优租国际青年公寓', 'wjdbetty415', '魏嘉蒂Betty', '350000', '170000', '130000', '6853', '0', '0', '有上进心，充满青春活力的热情姑娘', '甜美、中国风、性感', '美妆', '', '', '', 'http://weibo.com/u/1879464253?topnav=1&wvr=6&topsug=1&is_hot=1', '魏嘉蒂Betty', 'http://www.meipai.com/user/11946355', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('171', '歪歪', '李玲', '1', '19910329', '上海', '大专', '164', '49', '88', '60', '90', '3', '模特 演员', '游戏代言、香港漫展、足球宝贝等', '18616919271', '江苏无锡南长区羊腰湾43号403', '447972729', 'Angelalee李玲', '1000000', '480000', '0', '30000', '0', '480000', '多才多艺的热情姑娘', '热情、性感、逗比', '表演、唱歌', '', '', '', 'http://weibo.com/u/2139155362?topnav=1&wvr=6&topsug=1&is_hot=1', 'AngelaLee李玲', 'http://www.meipai.com/user/14821023', '', '', '', 'http://www.miaopai.com/u/paike_3t8wf5tp1z');
INSERT INTO `t_celebrity` VALUES ('172', 'ICE-LBQ', '李冰倩', '1', '19930525', '厦门', '大专', '160', '40', '86', '73', '87', '1', '财务 微商', '做过平面 帮影楼拍过婚纱 有一支自己的微商团队', '15985826638', '云南省昆明市官渡区海伦国际5号地6座2904', 'ice525', 'ICE-LBQ', '20000', '2500', '500', '100', '10', '0', '有上进心，充满智慧', '有上进心、清新、甜美、知性', '', '', '', '', 'http://weibo.com/u/1839028704?topnav=1&wvr=6&topsug=1&is_hot=1', 'ICE-LBQ', 'http://www.meipai.com/user/14514934', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('173', 'Kelly', '刘凯莉', '1', '19930203', '广州', '大专', '165', '90', '88', '61', '83', '3', '平面模特，淘宝店主 party Dj', 'Party Dj', '13632125288', '广州市越秀区万福路371号', '985966138', 'Dj_kellybaby', '80', '2800', '23000', '15000', '350000', '400', '事业心强', '性感、有上进心、成熟', '', '', '', '', 'http://weibo.com/u/5621291798?topnav=1&wvr=6&topsug=1&is_hot=1', 'Dj_kellybaby', 'http://www.meipai.com/user/22838164', '', '', '', 'http://www.miaopai.com/u/paike_ppc4yk2bw1');
INSERT INTO `t_celebrity` VALUES ('174', '阳阳阳', '时瑀阳', '1', '19941010', '北京', '本科', '166', '52', '93', '67', '90', '1', '舞蹈老师', '…', '15006667968', '北京市朝阳区东坝金驹家园D区 113号楼 2单元1004', 'w1a3n1a4n', 'MissYang阳妞妞', '20000', '4200', '5100', '0', '0', '0', '甜美可爱有气质', '可爱、高挑、时尚', '舞蹈', '', '', '', 'http://weibo.com/u/2381269283?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('175', 'BLUE', '冉瑛', '1', '19940205', '遂宁', '大专', '163', '43', '83', '64', '86', '1', '微商', '微商经营', '18228926871', '四川省遂宁市船山区建坤国际公寓', 'xiaoasan1994', '我是blue-', '66823', '1435', '65388', '0', '0', '0', '性格独立有思想，待人谦和', '知性、有上进心、可爱', '', '', '', '', 'http://weibo.com/u/2060213287?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('176', 'Zoey_Kou', '寇莹', '1', '19930619', '西安', '大专', '160', '43', '77', '62', '82', '0', '平面模特', '参与平面模特拍摄', '13891815964', '陕西省铜川市北关分局', 'leee256', 'Zoey_Kou', '20000', '4700', '9944', '0', '0', '0', '做事细致，内心细腻，富有爱心', '甜美、清新、可爱', '', '', '', '', 'http://weibo.com/u/5068346494?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('177', '晨晨by', '曾莹莹', '1', '19960628', '重庆', '高中及以下', '165', '55', '0', '0', '0', '0', '公司文员', '微商', '15826254037', '重庆南岸区南坪新街15-2飘逸经典理发店', 'chenchenmeiyiby', '晨晨mei yu', '4000', '0', '4000', '0', '100', '0', '心思细腻，富有爱心', '可爱、校园风、逗比', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('178', 'pinky', '张美丽', '1', '19931230', '上海', '高中及以下', '2', '120', '36', '12', '16', '0', 'dj', '很复杂 不好说', '13262261570', '上海市普陀区上海新体育广场58弄1号923', '791921193', 'pinky_zlp', '10000', '2587', '10325', '95', '129', '1', '热情奔放，充满自信乐观', '性感、热辣、成熟、时尚、萌', '', '', '', '', 'http://weibo.com/u/2719697371?topnav=1&wvr=6&topsug=1&is_hot=1', 'pinky_zlp', 'http://www.meipai.com/user/20028046', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('179', '大粒baby', '李琳琳', '1', '19940818', '河南', '大专', '165', '48', '76', '70', '80', '0', '学生', '做过几次小型会议主持。开过一个充值淘宝店。做过一年微商。', '18639379593', '河南省濮阳市华龙区 中原油田 五一路登封小区11号楼', 'lilin613733', '-违心爱人', '2711', '1404', '1218', '29', '6', '8', '长相青春，充满校园风，性格逗比', '自然、校园风、逗比', '', '', '', '', 'http://weibo.com/u/2143092613?topnav=1&wvr=6&topsug=1&is_hot=1', '-违心爱人', 'http://www.meipai.com/user/59889499', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('180', '梓悦', '崔怡', '1', '19930306', '北京', '本科', '163', '45', '88', '62', '89', '1', '新媒体运营', '没有', '18612029097', '不方便透漏，如有需要请添加微信，本人经常帮助微商拍一些广告产品图片，以及录制一些化妆品，丰胸系列的小片，如感兴趣请联系，本人正常上班人员非职业网红只是喜欢拍照，赚一些外快，仅此而已.望见谅！', 'cuichamgbeibei2011', '你是猴子请来的崔畅么', '0', '126', '0', '0', '0', '0', '有上进心，多愁善感', '可爱、清新、知性', '', '', '', '', 'http://weibo.com/u/2565907807?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('181', '陈蕊恩', '陈玲燕', '1', '19950628', '汕头', '大专', '161', '44', '83', '64', '85', '0', '微商', '做微商一年了', '13428349595', '地址：广东省汕头市龙湖区龙祥街道嵩山路夏桂浦桂华路4巷 13428349595 陈蕊恩', 'rre288', '陈蕊恩', '30000', '2000', '0', '514', '0', '0', '逗比富有分享精神，深受女粉喜爱', '有上进心、可爱、清新', '', '', '', '', 'http://weibo.com/u/2725722175?is_hot=1', '陈蕊恩', 'http://www.meipai.com/user/1060246747', '', '', '', '');
INSERT INTO `t_celebrity` VALUES ('184', '阿媛', '宋媛', '1', '19950925', '许昌', '大专', '172', '100', '36', '2', '2', '0', '客服', '微商. 淘宝', '13781070791', '河南省许昌市魏都区健发御园三期', '372750928', '宋美媛YOYO', '0', '26', '0', '0', '0', '0', '有智慧，待人谦和', '知性、典雅', '', '', '', '', 'http://weibo.com/u/5239100606?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '阿媛Hyky', '');
INSERT INTO `t_celebrity` VALUES ('185', '小玩子elva', '王小珏', '1', '19920305', '北京', '本科', '182', '46', '84', '61', '91', '1', '模特', '2010环球旅游小姐 海南冠军 中国区 十佳 经营微商 淘宝', '18610305010', '北京市朝阳区西大望路19号金港国际12号楼8单元401', '327873396', '小玩子elva', '400000', '50000', '100000', '2000', '2000', '280000', '做事认真，待人真诚', '多愁善感、有上进心、善良', '', '', '', '9990', 'http://weibo.com/u/1781654602?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '小玩子elva', 'http://www.miaopai.com/u/paike_x5wzwni3mb');
INSERT INTO `t_celebrity` VALUES ('186', 'Sonia', '孔姗', '1', '19941117', '成都', '大专', '168', '55', '92', '70', '88', '0', '淘宝店主', '微商四年', '18080772913', '四川省成都市锦江区牛市口街道席草田巷17号6-1-14姗姗18080772913', 'ssnnababy', 'SoniAGriLsshan', '100000', '6000', '20000', '0', '0', '6000', '心思缜密，做事认真', '性感、有气质', '', '', '', '', 'http://weibo.com/0827shan?is_hot=1', '', '', '', '', 'SoniAGriLsshan', '');
INSERT INTO `t_celebrity` VALUES ('187', '田紫紫', '田媛媛', '1', '19940410', '南京', '大专', '173', '50', '88', '66', '92', '3', '模特演员', '南方汽车模特冠军，网络电影:英雄荒芜路女主角， 数次酒吧商演...微信卖衣服小衣橱', '18761880410', '南京市雨花台区赛虹桥街道长虹路222号德盈国际广场4栋701室', 'Tina0814tyy', '田紫紫Tina', '1292490', '584826', '69158', '50506', '0', '588000', '热情，为人善良，逗比', '性感、奔放、可爱', '', '', '', '', 'http://weibo.com/u/5141693973?topnav=1&wvr=6&topsug=1&is_hot=1', '田紫紫Tina', 'http://www.meipai.com/user/47825224', '', '', '田紫紫Tina', 'http://www.miaopai.com/u/paike_1zvrsli4oy');
INSERT INTO `t_celebrity` VALUES ('190', 'Anna苏妲己', '伍英', '1', '19930310', '北京', '大专', '160', '45', '83', '60', '85', '0', '理财顾问', '没有', '18001362737', '北京市，昌平区回龙观镇回龙观新村蓝天嘉园一号楼三单元3017', '726963991', 'Anna苏妲己', '130000', '2400', '11000', '1100', '0', '0', '性感大胆但不失可爱', '性感、可爱、逗比', '', '', '', '', 'http://weibo.com/u/2861208652?topnav=1&wvr=6&topsug=1&is_hot=1', 'Anna苏妲己', 'http://www.meipai.com/user/40230107', '', '', 'Anna苏妲己', '');
INSERT INTO `t_celebrity` VALUES ('191', '汉小仙', '曹丽婷', '1', '19910810', '福州', '硕士', '170', '49', '86', '60', '89', '2', '主播', '直播，解说员，婚礼策划，《笔仙大战贞子》饰笔仙，出专曲《闪开》', '15606997049', '福建省福州市晋安区秀峰路中庚香山春天3#102', '19910810', '汉小仙', '60000', '1200', '3300', '78', '0', '0', '有上进心，做事认真', '有智慧、性感、气场强大', '口才好', '', '', '', 'http://weibo.com/u/2369045234?refer_flag=100808&is_hot=1', '汉小仙', 'http://www.meipai.com/user/59874224', '', '', '汉小仙', '');
INSERT INTO `t_celebrity` VALUES ('192', '高尚', '高靓靓', '1', '19931205', '北京', '高中及以下', '168', '47', '82', '64', '84', '1', '设计师', '内衣微商', '17710261910', '吉林省白城市洮北区海明街道海明西路46号楼4单元402', 'gaoshangkiko', '高尚的牙_', '100000', '22998', '51038', '0', '0', '0', '天生乐观，待人真诚', '可爱、甜美、小清新', '设计师', '', '', '', 'http://weibo.com/u/2280592863?is_hot=1', '', '', '', '', '高尚kiko', '');
INSERT INTO `t_celebrity` VALUES ('193', '亦格格', '刘依柔', '1', '19930913', '绵阳', '', '170', '42', '82', '58', '85', '1', '平面，个体', '车展，平面', '15555511930', '四川省绵阳市丽景花城', 'meinvxiaogege', '刘依柔是小太阳', '20000', '0', '15000', '0', '0', '0', '情商高，有上进心，平易近人', '知性、大气、阳光、积极', '', '', '', '', 'http://weibo.com/u/5117328021?refer_flag=1005050010_', '不玩', '', '不玩', '不玩', '亦格格', '');
INSERT INTO `t_celebrity` VALUES ('194', '王大小姐_Miss', '王邵雨', '1', '19950202', '上海', '大专', '160', '44', '84', '62', '88', '0', '自由职业', '上海玛雅海滩水公园职场Dj', '18501698382', '上海市浦东新区周浦镇康沈路年家浜路1813号206室邵雨收 18501698382', '1515017616', '王大小姐_Miss', '130000', '1883', '22000', '0', '0', '108000', '古灵精怪，搞笑逗比', '可爱、萌、公主范', '', '', '', '', 'http://weibo.com/u/2352658340?is_hot=1', '', '', '', '王大小姐_Miss', '王大小姐_Miss', '');
INSERT INTO `t_celebrity` VALUES ('195', '喵梓酱', '张宇', '1', '19880103', '哈尔滨', '本科', '170', '43', '83', '61', '86', '1', '主播', '帆船宝贝', '13100880733', '黑龙江省哈尔滨市呼兰区南京路江霆华府一期 A3栋 张羽涵（收）', 'asmint', '爱做梦的小铃铛', '200000', '24046', '30950', '400', '1000', '135310', 'pc大主播，以可爱、卖萌形象出镜', '二次元、萌、可爱、逗比', '', '', '', '', 'http://weibo.com/u/1840908297?is_hot=1', '', '', '', '爱做梦的小铃铛', '张羽涵', 'http://www.miaopai.com/u/paike_dseo1cb7dk');
INSERT INTO `t_celebrity` VALUES ('196', '大粒baby', '李琳琳', '1', '19940818', '河南', '大专', '165', '48', '76', '70', '80', '0', '待业', '做过几次小型会议主持。开过一个充值淘宝店。做过一年微商。', '18639379593', '河南省濮阳市华龙区 中原油田 五一路登封小区11号楼', 'lilin613733', '-违心爱人', '2711', '1404', '1218', '29', '6', '8', '长相青春，充满校园风，性格逗比', '自然、校园风、逗比', '', '', '', '', 'http://weibo.com/u/2143092613?from=hissimilar_home&is_hot=1', '-违心爱人', 'http://www.meipai.com/user/59889499', '1690762', '-违心爱人', '大粒baby', 'http://www.miaopai.com/u/paike_u5dzbr8s5i');
INSERT INTO `t_celebrity` VALUES ('197', '芷馨Baby', '谢宇', '1', '19960616', '深圳', '大专', '163', '43', '85', '60', '89', '0', '平面模特，网络主播', '斗鱼主播', '13632853725', '深圳福田下沙花好园B1栋11L', '13632853725', 'Lavender芷馨', '30000', '800', '0', '0', '0', '0', '有智慧，待人谦和', '甜美、清新', '', '', '', '', 'http://weibo.com/u/5170275934?is_all=1', '', '', '', '', 'Lavender芷馨', '');
INSERT INTO `t_celebrity` VALUES ('198', '刘朵子', '刘双双', '1', '19930327', '北京', '大专', '165', '50', '88', '72', '83', '2', '微商', '专职做微商近3年，有足够的经验，专业知识面广。创始团队，现在超过100人。', '18510960756', '北京市 丰台区 槐房西路 南庭新苑北区 26号楼 1单元 1304', '403255102', '刘朵子carlenshow总代', '500', '20574', '0', '0', '0', '0', '逗比，多愁善感，有上进心', '甜美、可爱、小清新', '', '', '', '', 'http://weibo.com/u/2108203403?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '', '刘朵子carlenshow总代', '');
INSERT INTO `t_celebrity` VALUES ('199', '晶晶 miumiu', '吴晶晶', '1', '19910411', '信阳', '本科', '165', '50', '88', '62', '90', '0', '韩国代购', '做过美甲模特，走秀', '18637650285', '河南省，信阳市，光山县，海营东路国税局斜对面，名烟洋酒商行', 'wu6688yw', '晶晶miumiu', '3610', '18', '3565', '27', '0', '0', '热情善良，开朗，阳光', '可爱、知性', '', '', '', '', '', '晶晶美妞??', 'http://www.meipai.com/user/43246336', '', '', '晶晶yz', '');
INSERT INTO `t_celebrity` VALUES ('200', 'Yuki_莎莎', '申莎莎', '1', '20020527', '杭州', '大专', '168', '53', '89', '62', '91', '0', '自由职业', '没有', '18968059803', '浙江杭州上城区开元路39号501', '1149464935', 'Yuki_莎莎', '50000', '12000', '13000', '0', '0', '0', '为人善良', '可爱、甜美、小清新', '', '', '', '', 'http://weibo.com/u/3011631783?topnav=1&wvr=6&topsug=1&is_hot=1', '不玩', '', '不玩', '不玩', 'Yuki_莎莎', '');
INSERT INTO `t_celebrity` VALUES ('201', '瑶巴巴', '魏思瑶', '1', '19900722', '上海', '大专', '165', '110', '34', '22', '30', '1', '微商', '2015年3月微商至今', '18672837730', '湖北省潜江市', '18672837730', '瑶瑶瑶巴子', '1000', '271', '114', '0', '0', '0', '有上进心，霸气，做事效率高', '小清新、甜美', '', '', '', '', 'http://weibo.com/u/2503562035?topnav=1&wvr=6&topsug=1&is_hot=1', '无', '', '无', '无', '瑶瑶瑶瑶八子', '');
INSERT INTO `t_celebrity` VALUES ('202', '美露露', '刘晨露', '1', '19920903', '北京', '本科', '165', '92', '86', '63', '87', '1', '珠宝设计师，模特', '拍摄男人装杂志，小明滚出去女老师，电影红夜，等等', '18810809605', '北京市朝阳区时代国际嘉园四号楼四单元一楼宝云超市美露露收', 'Marilynlulu', '美露露Merry', '300000', '57553', '77215', '0', '0', '40178', '有上进心，智慧女性', '小清新、自信、邻家范', '珠宝设计', '', '', '', 'http://weibo.com/u/1001498651?is_hot=1', '', '', '', '美露露Merry', '美露露', 'http://www.miaopai.com/u/paike_jwdym6jd57');
INSERT INTO `t_celebrity` VALUES ('203', '张栩菲', '张晓晶', '1', '19920518', '上海', '本科', '168', '52', '90', '66', '90', '1', '品牌运营', '推女郎尤果网改装圈模特', '15522628066', '上海闵行区紫月路1000号', 'zhangxiaoben818', '小卷卷老师', '150000', '15000', '106000', '3000', '0', '2000', '性感不失可爱，上学期间就开始做兼职模特', '比较百搭', '', '', '', '', 'http://weibo.com/u/5568020658?topnav=1&wvr=6&topsug=1&is_hot=1', '', '', '', '小卷卷老师', '张栩菲', 'http://www.miaopai.com/u/paike_dd6jaz7lr1');

-- ----------------------------
-- Records for `t_designers`
-- ----------------------------
INSERT INTO `t_designers` VALUES ('9', '职业设计师', '武迪', '18658130255', 'wd77250273', '独立设计师', '', '', '', '', '', '', '', '1', '1', '', '123', '', '');
INSERT INTO `t_designers` VALUES ('10', '独立设计师', '宁大昌', '18916849273', 'Pittning ', '设计师
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('11', '独立设计师', '理臻', '13656020197', 'lizhen678482', '设计总监', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('13', '职业设计师', '陈文彬', '15012946020', '18826572030', '公司创始人
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('15', '独立设计师', '伊雅', '13652397590', 'yi?767325076', '艺术总监', '', '', '', '', '', '', '', '0', '0', '', '123', '', '');
INSERT INTO `t_designers` VALUES ('16', '﻿个体设计师', '王玉慰', '15058197031', 'wywgumu2006', '设计师', '', '', '', '', '', '', '', '1', '1', '', '左权', '', '');
INSERT INTO `t_designers` VALUES ('17', '职业设计师', '理臻', '13656020197', 'lizhen678482', '设计师
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('18', '职业设计师', '武迪', '18658130255', 'wd77250273', '独立设计师', '', '', '', '', '', '', '', '0', '0', '', '123', '', '');
INSERT INTO `t_designers` VALUES ('19', '独立设计师', '宁大昌', '18916849273', 'Pittning ', '设计师
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('20', '独立设计师', '理臻', '13656020197', 'lizhen678482', '设计总监
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('21', '职业设计师', '温元茗', '13711378936', 'jianmingley', '设计总监
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('22', '职业设计师', '陈文彬', '15012946020', '18826572030', '公司创始人
', '', '', '', '', '', '', '', '0', '0', '', '', '', '');
INSERT INTO `t_designers` VALUES ('24', '独立设计师', '伊雅', '13652397590', 'yi?767325076', '艺术总监', '', '', '', '', '', '', '', '0', '0', '', '', '', '');

-- ----------------------------
-- Records for `t_factories`
-- ----------------------------
INSERT INTO `t_factories` VALUES ('1039', '张雨洁', '18501645500', '18657197980', '总监', '上海紫利服饰有限公司', '女装', '', '1', '', '大型工厂', '', '1', '30', '', '310000', '310100', '0', '航南公路1841号', '10000', '1000', '1', '123', '', '');
INSERT INTO `t_factories` VALUES ('1040', '卢桂兰', '13923318951', 'SUMOA99', '负责人', '中山苏陌电子商务有限公司', '女装', '', '0', '', '15人', '', '0', '', '', '广东省', '中山市', '沙溪镇', '云汉路', '0', '0', '1', '123', '', '');
INSERT INTO `t_factories` VALUES ('1042', '木素珍', '13588925925', 'moily-', '经理', '浙江珞炫服饰有限公司', '女装', '', '0', '', '加工厂', '', '1', '', '', '浙江省', '温州市', '龙湾区', '上江路145号1号楼7层珞炫服饰', '0', '0', '1', '123', '"LOFTSHINE以高街轻奢的美学观点，
', '');
INSERT INTO `t_factories` VALUES ('1047', '施策', '13806690633', 'shice_0116', '总经理', '浙江珞炫服饰有限公司', '女装', '', '0', '', '500人', '', '1', '', '', '浙江省', '温州市', '龙湾区', '上江路145号1号楼7F', '0', '0', '1', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1048', '宋弘超', '15910678666', '15910678666', '副总裁', '福玛特北京机器人股份有限责任公司', '数码家电', '', '0', '', '1000人', '', '1', '30', '', '北京', '北京市', '朝阳区', '北京市朝阳区三里屯SOHO、B座18层', '2000', '1000', '1', '飞电', '相融共生
', '');
INSERT INTO `t_factories` VALUES ('1049', '马蜂', '18520785822', 'bboynothing', '总经理', '广州市中牌电子产品有限公司', '数码家电', '', '0', '', '60人', '', '1', '', '', '广东省', '广州市', '白云区', '嘉禾望岗百花岭工业园88号C栋4楼', '0', '0', '1', '飞电', '
', '');
INSERT INTO `t_factories` VALUES ('1050', '于喜平', '15167420087', '472534793', '总经理', '江西想川实业有限公司', '鞋靴', '', '0', '', '中型', '', '1', '361', '', '330000', '330300', '0', '温州鞋都大道800号', '3000', '100', '1', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1051', '﻿黄莹莹', '15914306835', 'yet-ta', '品牌部', '广州市创达服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '南华西街道大干围海珠创意产业园11-1西梯达丽坊', '女装', '100', '100', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1052', '周金峰', '13615839871', 'XO_OX1999', '销售', '嘉善科达滑动轴承有限公司', '2000', '', '0', '', '0', '', '0', '', '', '干窑镇河东街44号', '其他', '小作坊', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1053', '朱敏伟', '13958113553', 'niro_zhu', '运营总监', '海盐县南圣服饰有限责任公司', '100000', '', '0', '', '1', '', '0', '', '', '于城镇南', '男装', '现有生产流水线14条，员工300余名，厂区占地面积15000平方米，建筑面积10000平方米，共拥有500余台套专门用于服装生产的缝纫设备，其中各类花式日本进口设备350余台套。', '50', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1054', '黄暖强', '13650044760', '13650044760', '电商部主管', '东莞市建盛针织有限公司', '5000', '', '0', '', '0', '', '0', '', '', '大朗镇大井头第二工业区顺兴二路48号', '女装', '300人', '100', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1055', '李冬文', '13567415954', '13567415954', '厂长', '宁波市缸鸭狗食品有限公司', '20000', '', '0', '', '1', '', '0', '', '', '九龙湖镇陈沈路18岁号', '食品', '5000万', '5', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1056', '江建飞', '18858289969', '5556473', '运营负责人', '衢州若兮化妆品有限公司', '0', '', '0', '', '0', '', '0', '', '', '', '美妆', '0', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1057', '廖妹銮', '13799259953', '18054825889', '推广主管', '乔丹体育', '1000', '', '0', '', '1', '', '0', '', '', '安岭二路82号', '户外运动', '100万双鞋', '1000', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1058', '廖妹銮', '13799259953', '18054825889', '推广主管', '乔丹体育', '1000', '', '0', '', '1', '', '0', '', '', '安岭二路82号', '户外运动', '100万双鞋', '1000', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1059', '汪涛', '13510256335', '13510256335', '营销总监', '深圳市康佳电器有限公司', '10000', '', '0', '', '1', '', '0', '', '', '康佳研发大厦', '数码家电', '1000人', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1060', '赖章军', '15067747392', 'laizhangjun', '运营总监兼新媒体营销负责人', '上海享趣电子商务有限公司', '10000', '', '0', '', '1', '', '0', '', '', '蒲州街道雁荡西路二十号五楼', '女装', '跟情趣用品主流品牌厂家都有合作', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1063', '胡赞林', '18668055889', '18668055889', '运营总监', '杭州成人之美电子商务有限公司', '1000000', '', '0', '', '1', '', '0', '', '', '小和山', '其他', '300', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1064', '冯国亮', '17751117227', 'xing?fu?xiao?8', '电商经理', '江苏国环地标农业发展有限公司', '10000', '', '0', '', '1', '', '0', '', '', '飞达东路23号', '食品', '1000人', '1', '2016', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1065', '马亚', '13808809456', '13808809456', 'CEO', '上海珍艾珠宝有限公司', '1000', '', '0', '', '1', '', '0', '', '', '田贝四路', '珠宝饰品', '50', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1066', '陈中峰', '13793083500', '17092046513', '项目经理', '山东丰悦电子商务有限公司', '10000', '', '0', '', '0', '', '0', '', '', '顾家商业园11-305', '食品', '大型', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1067', '李运', '15057167652', '15057167652', '运营经理', '杭州昶廷贸易有限公司', '3000', '', '0', '', '1', '', '0', '', '', '逸天广场1-1-401', '女装', '200人', '3000', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1068', '桂平', '13588772353', '13588772353', '董事长', '杭州舟航贸易', '100000', '', '0', '', '1', '', '0', '', '', '', '鞋靴', '1000人', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1069', '宋燕军', '18658869570', '18658869570', '总经理兼合伙人', '中国立酷派贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '男装', '--', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1070', '李洪辉', '15662599587', '15154455432', '业务', '诸城市欣泰制衣有限公司', '10000', '', '0', '', '1', '', '0', '', '', '龙都街道大邦工业园一号', '男装', '300人', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1071', '李洪辉', '15662599587', '15154455432', '业务', '诸城市欣泰制衣有限公司', '10000', '', '0', '', '1', '', '0', '', '', '龙都街道大邦工业园一号', '内衣', '300人', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1072', '顾恒宇', '18502728460', '18502728460', 'COO', '浙江藏富电子商务有限公司', '2500', '', '0', '', '1', '', '0', '', '', '创业大道跨境电子商务产业园A座2楼', '内衣', '年产量100万件', '2000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1073', '冯伟', '13867177105', 'seanfw', '主管', '杭州兽王实业', '1000', '', '0', '', '1', '', '0', '', '', '', '男装', '大型', '10', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1074', '连祯华', '13712000006', 'zhikesp-ceo', '总经理', '东莞市织客服饰有限公司', '3000', '', '0', '', '1', '', '0', '', '', '大朗镇巷头社区富康南十三巷24号', '女装', '50人', '50', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1075', '胡彦峰', '18805390258', '18805390258', '新渠道负责人', '临沂市洋葱电子商务有限公司', '100000', '', '0', '', '1', '', '0', '', '', '涑河北街中段', '食品', '3000万', '60', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1076', '朱国美', '15657570177', '15657570177', '总经理', '绍兴市米图服饰有限公司', '5000', '', '0', '', '1', '', '0', '', '', '', '女装', '200多工人', '100', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1077', '张小荣', '18928761889', '15918452506', '经理', '广州芊酷服装有限公司', '800', '', '0', '', '1', '', '0', '', '', '广州白云区祥岗新街38号五楼', '女装', '150人', '100', '10', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1078', '叶先生', '18933954574', 'junyu＿ye', '总经理', '广州亿划商贸有限公司', '10000', '', '0', '', '1', '', '0', '', '', '金沙洲金程广场415', '女装', '200', '100', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1079', '肖龙', '18980971772', '4983880', 'CEO', '四川阿么鞋业有限公司', '35000', '', '0', '', '1', '', '0', '', '', '成都市双流县空港一路一段483号阿么工业园', '鞋靴', '年产量700万双', '200', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1080', '魏生', '13265184980', 'weibiaohu1986', '老板', '广州胜势电子商务有限公司', '1000', '', '0', '', '1', '', '0', '', '', '金沙洲路17号', '女装', '100+', '50', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1081', '高若顺', '13761211201', 'gomk2002', '总经理', '上海思无邪珠宝股份有限公司', '100', '', '0', '', '1', '', '0', '', '', '虹口区汶水东路278号景明大厦2108室', '珠宝饰品', '200人', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1082', '徐国欣', '13853633038', '13853633038', '总经理', '诸城市欣泰制衣有限公司', '5000', '', '0', '', '1', '', '0', '', '', '', '男装', '200人', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1083', '陈禹道', '18688877911', '49201178', '总经理', '广州市米昕蔚服装有限公司', '4000', '', '0', '', '1', '', '0', '', '', '大石街河村工业二路7号c栋401', '女装', '1000方', '100', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1084', '兰晓雯', '18660237291', 'L1908538394', '业务担当', '青岛珂玫琳贸易有限公司', '800', '', '0', '', '1', '', '0', '', '', '延吉路162号海延雅居7号楼1-1101', '女装', '200人', '1000', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1085', '王俞静', '15376720933', 'wangjing065353', '经理', '青岛红桦林服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '服装工业园孔雀河四路58号', '女装', '外贸加工型工厂占地7800平方米 工人270名 10条服装生产流水线 年生产服装200万件左右产品主要以针织为主', '30', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1086', '谢一樊', '13266263636', 'Allen-5', '运营总监', '舍予服饰有限公司', '3000', '', '0', '', '1', '', '0', '', '', '虎门镇镇口第二工业区镇业路6号', '女装', '120人', '800', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1087', 'Stella', '13818286313', '20433855', '市场总监', '杭州西狗国际贸易有限公司', '0', '', '0', '', '1', '', '0', '', '', '政益路47号601', '百货', '0', '0', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1088', '宋海珍', '15214360699', 'Abyy80788690', '客户经理', '元素骨肽', '200', '', '0', '', '1', '', '0', '', '', '贵宾路18号', '食品', '10000', '1', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1089', '石磊', '13804721556', 'Caca_btk', '电商营销总监', '包头东宝生物技术股份有限公司', '15000', '', '0', '', '1', '', '0', '', '', '黄河大街46号', '食品', '500-1000人', '1', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1090', '王波', '15068318666', '15068318666', '经理', '桐乡市百纯羊绒制品有限公司', '1200', '', '0', '', '1', '', '0', '', '', '', '女装', '年产30万件', '50', '15', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1091', '刘敏辉', '15700106860', '15700106860', '经理', '深圳市壹京美慈贸易有限公司', '20000', '', '0', '', '1', '', '0', '', '', '环市西路139号汇美国际服装城', '男装', '300人', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1092', '吴天翔', '13819309000', 'wu9000', '总经理', '浙江威克赛供应链管理有限公司', '10000', '', '0', '', '1', '', '0', '', '', '中华路37号', '男装', '员工600人 国内最大的男士毛针织供应商', '100', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1093', '祝诗剑', '18967507857', 'NongMai808', 'CEO', '浙江百润纺织有限公司', '40000', '', '0', '', '1', '', '0', '', '', '王家井镇市南路3号', '内衣', '300人', '10000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1094', '李宏辉', '18698395558', 'OLRIK', '总经理', '泉州市丹尼斯特服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '香江路五星段第六实验小学隔壁三排二栋丹尼斯特服饰1-7层', '男装', '3000平', '300', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1095', '青辰', '18913389191', '18913389191', '副总裁', '思芙美有限公司（香港）', '0', '', '0', '', '0', '', '0', '', '', '香港新界火炭坳背湾街38-40号华卫工贸中心906', '美妆', '0', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1096', '魏峰', '13858193236', 'haidunlaodie', '负责人', '南京戈多服饰有限公司', '2000', '', '0', '', '1', '', '0', '', '', '四季青意法服饰城', '女装', '70-100人', '200', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1097', '仲子', '13275288777', '13275288777', '法人代表', '苏州杰克轩驰服饰有限公司', '3500', '', '0', '', '1', '', '0', '', '', '常熟国际服装城二楼西街10号', '男装', '120人', '150', '25', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1098', '仲子', '13275288777', '13275288777', '法人代表', '苏州杰克轩驰服饰有限公司', '3500', '', '0', '', '1', '', '0', '', '', '常熟国际服装城二楼西街10号', '男装', '120人', '150', '25', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1099', '陈佳伟', '17753276888', 'c15376795083', '总经理', '青岛韩依莲服饰有限公司', '2000', '', '0', '', '1', '', '0', '', '', '常州南路528号', '女装', '100人', '200', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1100', '张诗碧', '13788855460', '13788855460', '公司电商负责人', '石狮市符号电子商务有限公司', '5000', '', '0', '', '1', '', '0', '', '', '友铭路75对面电子商务部', '男装', '200多人', '10000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1101', '詹攀', '15521032776', 'zhanpanxs123', '市场部总监', '深圳零二科技有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '其他', '大', '50', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1102', '石磊', '13588685005', 'ywliren', '经理', '义乌市利仁家居用品有限公司', '20000', '', '0', '', '1', '', '9', '', '', '江东樊村36-2-2', '家居家纺', '30', '200', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1103', '向德芬', '18998060691', '18998060691', '经理', '东莞市德云服饰有限公司', '4000', '', '0', '', '1', '', '0', '', '', '大朗镇富康南二巷54号', '女装', '83', '50', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1104', '李玉', '18681070745', '18681070745', '经理', '东莞市鹏驰服装有限公司', '3000', '', '0', '', '1', '', '0', '', '', '大朗镇', '女装', '30人到50人', '300', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1109', '张浩', '13686065157', '13683065157', '经理', '东莞市雅逸服装有限公司', '2000', '', '0', '', '1', '', '0', '', '', '大朗镇康富路233号', '女装', '51一100', '50', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1110', '周伟', '13826977597', 'ydfs86821888', '老板', '东莞市业达服饰有限公司', '500', '', '0', '', '1', '', '0', '', '', '大朗巷头纺织路7街3号', '女装', '一条龙', '50', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1111', '谭小伶', '13703039087', 'lintanxiao', '老板', '中山市小榄镇新浪潮时装厂', '50000', '', '0', '', '1', '', '0', '', '', '小榄镇祥丰北路77号', '内衣', '250人', '100', '10', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1112', '翁智勇', '13530592059', '13530592059', '总经理', '深圳市妙若珠宝有限公司', '3000', '', '0', '', '1', '', '0', '', '', '水贝', '珠宝饰品', '100多人', '50', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1113', '王春生', '13902722644', '3521762', '总经理', '汕头市缇茵服饰有限公司', '20000', '', '0', '', '1', '', '0', '', '', '澄华工业区305号 缇茵服装厂', '女装', '168', '200', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1114', '徐文斌', '18955111058', 'xuwenbin817478', 'CEO兼创始人', '杭州猎创网络科技有限公司', '15', '', '0', '', '1', '', '0', '', '', '田林路漕河泾高新技术开发区C幢2楼', '其他', '0', '0', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1115', '彭双龙', '15257966353', '5957326', '创始人', '义乌市贝驰饰品有限公司', '800000', '', '0', '', '1', '', '0', '', '', '义乌市秋实路7号', '珠宝饰品', '500人', '60', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1116', '杜亚辉', '18518904849', '18518904849', '品牌经理', '久爱致和', '10000000', '', '0', '', '1', '', '0', '', '', '首享科技大厦', '食品', '超大', '10000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1117', '周晓明', '13260032550', 'suixiangxming', 'ceo', '北京未来人电子商务有限公司', '100000', '', '0', '', '1', '', '0', '', '', '望京sohoT3', '食品', '中国民营企业第21/500名', '1', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1118', '都督', '15577758777', '15577758777', '总经理', '苏州容铄贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '工业园区嘉瑞巷8号乐嘉大厦1518室', '食品', '无工厂，法国有酒庄', '1', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1119', '吴叙文', '18917698929', 'wuxuwen001', 'ceo', '上海明邸商贸有限公司', '15000', '', '0', '', '1', '', '0', '', '', '赤峰路433-321', '美妆', '中山丽达2000人', '7200', '7', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1120', '吴叙文', '18917698929', 'wuxuwen001', 'ceo', '上海明邸商贸有限公司', '100000', '', '0', '', '1', '', '0', '', '', '赤峰路433-32.', '美妆', '国内化妆棉生产规模第一', '10000', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1121', '吴凌伟', '18060668688', '1007863680', '电商总监', '美式生活', '10000', '', '0', '', '0', '', '0', '', '', '', '食品', '1000平米', '100', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1122', '张超群', '15336551131', '15336551131', '老板', '杭州帝淘科技有限公司', '1000', '', '0', '', '1', '', '0', '', '', '七堡新村1区11号', '女装', '50', '15', '15', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1123', '吴昆明', '13470999999', '13470999999', '董事长', '高梵电商', '10000', '', '0', '', '1', '', '0', '', '', '安粮十四号十七楼', '女装', '500', '100', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1124', '马纲', '13438476103', '18628971221', 'CEO', '成都维赛鞋业集团有限公司', '5000', '', '0', '', '1', '', '0', '', '', '鞋都南二路华康步行街', '鞋靴', '日产2000双', '100', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1125', '曹振', '15068720725', 'cao?zhen?3917982', '运营经理', '金华衣尚道服饰有限公司', '3000', '', '0', '', '1', '', '0', '', '', '19号大街571号', '女装', '100-200', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1126', '俞良', '15857167988', 'yu?liang?coco?1973', '总经理', '杭州', '5000', '', '0', '', '1', '', '0', '', '', '四季星座206室', '男装', '300', '1', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1127', '赖文娟', '13925135787', 'partyprince', '经理', '广州昊王皮具有限公司', '2000', '', '0', '', '1', '', '0', '', '', '', '箱包', '500人', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1128', '冯琳', '18657168881', '13166858', '董事', '杭州唯蜜服饰有限公司', '30000', '', '0', '', '1', '', '0', '', '', '', '其他', '100', '1500', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1129', '吴佳润', '13868180829', '13868180829', '总经理', '杭州颂丰生物科技有限公司', '500', '', '0', '', '0', '', '0', '', '', '杭州市江干区凯旋路208号5楼', '食品', '目标分布在衢州', '3', '1', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1130', '杨志伟', '13524606663', '13524606663', '合伙人', '上海杰诗科技有限公司', '0', '', '0', '', '1', '', '0', '', '', '吴中路8号', '数码家电', '无', '0', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1131', '骆俊阳', '13625966596', 'ctkwcwbj', 'CEO', '爱定爱电子商务有限公司', '100', '', '0', '', '1', '', '0', '', '', '长青路华美达长升大酒店', '男装', '30', '10', '10', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1132', '杨杰', '18801186608', 'yj6608', '董事长助理', '铁牛集团有限公司', '1000', '', '0', '', '1', '', '0', '', '', '永康市北湖路1号', '汽车', '日产1000台各种民用汽车；', '1', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1133', '章小霞', '13336179563', '13336179563', '总经理', '杭州风风科技有限公司', '1000', '', '0', '', '1', '', '0', '', '', '西斗门西苑小区1幢3单元103', '美妆', '100', '100', '60', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1134', '张志军', '18606193939', 'benson_wx', 'CEO', '河南省传世电子商务有限公司', '50000', '', '0', '', '1', '', '0', '', '', '文峰大道188号', '食品', '农业生产基地', '1000', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1135', '陈炜', '18258883648', '蓝唯', '合伙人', '杭州辰月电子商务有限公司', '100000', '', '0', '', '0', '', '0', '', '', '', '其他', '品牌方的', '1000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1136', '沈少', '18658272220', '215593681', 'CEO', '上海小吉互联网科技有限公司', '2016', '', '0', '', '1', '', '0', '', '', '', '数码家电', '10亿', '100', '60', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1137', '田景波', '13456316250', 'tjbwjtt', '总经理', '浙江佳人汇信息技术有限公司', '600', '', '0', '', '0', '', '0', '', '', '联合路631弄8号', '箱包', '120', '300', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1138', '李涛', '18665964496', 'viselee', '电商总监', '深圳市天尚服装有限公司', '2000', '', '0', '', '1', '', '0', '', '', '建设路2016号南方证券大厦A座9楼', '女装', '300人', '50', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1139', '严鑫', '18029286999', '22935886', '总经理', '英国尊雅家居实业有限公司', '10000', '', '0', '', '1', '', '0', '', '', '九龙旺角花园街2-16号好景商业中心7楼705', '家居家纺', '2000人', '50', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1140', '刘先生', '13735528333', '13281088488', '总经理', '杭州壹品壹冠生物科技有限公司', '200000', '', '0', '', '1', '', '0', '', '', '江陵路567号新东方大厦803', '美妆', '1000人', '5000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1141', '贾丽', '13701961959', 'lily_jia@yeah.net', '电商负责人', '上海沃施园艺股份有限公司', '20000000', '', '0', '', '1', '', '0', '', '', '元江路4800号', '家居家纺', '3000人左右', '100000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1142', '王俊杰', '13618085250', 'thinnkpadss', '经理', '广东顺德美家饰家居用品有限公司', '300000', '', '0', '', '1', '', '0', '', '', '龙江镇亚洲材料城C区凤城电子商务港6楼', '家具建材', '1000人', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1143', '葛川', '18653723320', '602088610', '运营', '济宁居安环保技术有限公司', '500', '', '0', '', '0', '', '127', '', '', '金宇路6号海能国际C座11楼', '家居家纺', '厂房1000平', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1144', '葛川', '18653723320', '602088610', '运营', '济宁居安环保技术有限公司', '500', '', '0', '', '0', '', '127', '', '', '金宇路6号海能国际C座11楼', '家居家纺', '厂房1000平', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1145', '韦康', '15876590213', '1353876814', '运营总监', '广州市革度士贸易有限公司', '100', '', '0', '', '1', '', '0', '', '', '广州市荔湾区环市西路宇宙鞋业城克山七街4号', '鞋靴', '500人', '1', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1146', '丁家公', '13801451997', '13801451997', '总经理、执行董事、法定代表人', '丁家宜健康科技有限公司', '500', '', '0', '', '1', '', '0', '', '', '扬州市吴州东路198号（西安交大扬州科技园）', '食品', '500人', '1000', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1147', '老胡', '13466334488', '13466334488', 'ceo', '北京锋创世纪贸易有限公司', '2000', '', '0', '', '1', '', '0', '', '', '珠江骏景北区16号', '女装', '500人', '50', '10', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1148', '罗罡', '13651759982', 'thomas771590', '运营总监', '上海鼎生贸易有限公司', '0', '', '0', '', '0', '', '0', '', '', '真华路926弄第三创意空间1号楼503室', '美妆', '无', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1149', '小可', '15112258900', '15112258900', '电商事业部总监', '广州爱韵生物科技有限公司', '100000', '', '0', '', '1', '', '0', '', '', '机场路401', '母婴', '200', '100', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1150', '陈雍', '18601669288', 'chenyjeff', 'ceo', '上海艾柏时尚服饰有限公司', '20000', '', '0', '', '1', '', '0', '', '', '中华新路496号', '内衣', '300人', '100', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1151', '卢芳', '13720872805', 'fannylu1988', '品牌推广主管', '名鞋库网络科技有限公司', '300', '', '0', '', '1', '', '0', '', '', '湖里大道78号万山一号楼3层', '户外运动', '1500', '500', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1152', '陈刚', '13683359555', '13683359555', '经理', '杭州宽诚电子商务有限公司', '10000', '', '0', '', '1', '', '0', '', '', '滨康路101号', '女装', '100', '100', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1153', '冯远航', '13560488445', 'yuanhang52000', '副总经理', '广州两三事有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '女装', '50', '100', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1154', '杨俊', '13450208117', 'weiyi0743', '运营总监', '广州两三事服饰有限公司', '2000', '', '0', '', '1', '', '0', '', '', '南泰路168号联星创意中心2号楼819', '女装', '200人', '50', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1155', '涂春荣', '13656035777', 'Gouyougou1314', '董事长', '厦门零度尚品电子商务有限公司', '5000', '', '0', '', '1', '', '0', '', '', '软件园二期观日路34号102', '女装', '200', '60', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1156', '邹敏辉', '13923108757', 'lineage520919', '策划部长', '广州大森林电子商务有限公司', '0', '', '0', '', '1', '', '0', '', '', '壬丰大厦西厅910', '家具建材', '无', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1157', '邹敏辉', '13923108757', 'lineage520919', '策划部长', '广州大森林电子商务有限公司', '0', '', '0', '', '1', '', '0', '', '', '壬丰大厦西厅910', '家具建材', '无', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1158', '王中攀', '15305740097', 'Shashou0097', '销售主管', '宁波梦神家居股份有限公司', '3000', '', '0', '', '1', '', '0', '', '', '浙江省宁波市江北区兴甬路165号', '女装', '450人', '200', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1159', '陈育群', '13924793777', 'alex93777', 'CEO', '广东群宇互动科技有限公司', '5000', '', '0', '', '1', '', '0', '', '', '莱美路宇博电商园群宇科技楼4楼', '母婴', '100~500', '1', '45', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1160', '马潇潇', '13817104482', '13817104482', '市场总监', '马克华菲', '300000', '', '0', '', '1', '', '0', '', '', '', '女装', '5000', '200', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1161', '杨林义', '18757161772', 'yang_zizhao', '渠道经理', '杭州剑瓷视界艺术品有限公司', '200', '', '0', '', '1', '', '0', '', '', '大兜路历史街区122香积寺广场西侧', '其他', '杭州剑瓷视界艺术品有限公司是一家集创意、设计、研发、销售为一体的专业生产日用青瓷产品的企业。公司创建于2009年，总部坐落于杭州市拱墅区大兜路历史街区，生产基地座落于浙江龙泉青瓷产园区，研发生产茶具、餐具、陈设摆件、香道用具、文房用品等系列产品。', '1', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1162', '魏如杰', '18668776799', '18668776799', '老板', '杭州薄荷绿电子商务有限公司', '1000', '', '0', '', '1', '', '0', '', '', '东西大道', '男装', '100', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1163', '魏如杰', '18668776799', '18668776799', '老板', '杭州薄荷绿电子商务有限公司', '1000', '', '0', '', '1', '', '0', '', '', '东西大道', '男装', '100', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1164', '崔德乾', '13625587888', 'seoncdq', '营销总监', '星光珠宝股份有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '珠宝饰品', '行业内一流的工厂是我们的代工厂', '100', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1165', '方泽洲', '13957335877', 'hsyx351073125', '厂长', '嘉兴经开伊元包装材料厂', '60000', '', '0', '', '1', '', '0', '', '', '华云路368号', '其他', '30名员工、2000千万产值', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1166', '吴婷婷', '18657108870', '18657108870', 'CEO', '杭州宝策网络科技有限公司', '100000', '', '0', '', '1', '', '0', '', '', '五常大道156号西溪创意园5号楼309', '箱包', '4000人', '1000', '60', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1167', '桑朝君', '13911102991', 'sunvion', 'CEO', '北京悦迪正元科技有限公司', '10000000', '', '0', '', '1', '', '0', '', '', '朝阳区柳芳地铁口新天第大厦B座703', '母婴', '20', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1168', '丁士湧', '18605359710', '18605359710', '董事长', '山东省烟台市高陵生态果蔬产业有限公司', '100', '', '0', '', '1', '', '0', '', '', '高陵镇政通街297号', '其他', '1500亩农场', '36', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1169', '果真', '13750624999', 'guozhenbenren', '运营总监', '杭州智在枫为品牌管理有限公司', '5000', '', '0', '', '1', '', '0', '', '', '下沙经济技术开发区益丰路55号', '食品', '50人', '200', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1170', '刘源浩', '18627745246', 'moonbadi_tony', '总经理', '武汉爱生活网络技术有限公司', '30000', '', '0', '', '1', '', '0', '', '', '光谷大道303号光谷芯中心魔方商务体11楼', '内衣', '200人', '10000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1173', '刘源浩', '18627445246', 'moonbadi_tony', '总经理', '武汉爱生活网络技术有限公司', '30000', '', '0', '', '1', '', '0', '', '', '光谷大道303号光谷芯中心魔方商务体11楼', '内衣', '200人', '10000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1176', '王彪', '15862910288', '15862910288', '总经理', '宿迁春草阁化妆品有限公司', '30000', '', '0', '', '1', '', '0', '', '', '软件产业园a栋7楼', '美妆', '80人', '3000', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1177', '张丹', '13717713666', '13717713666', '总裁', '北京厚浦生物科技有限公司', '5000', '', '0', '', '1', '', '0', '', '', '北京市东城区东直门内大街9号NAGA上院A座202', '母婴', '50', '5000', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1178', '李建锋', '13958835592', 'shycnet', '总经理', '上海冶成国际贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '普陀区东新路248号', '箱包', '500人', '2000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1179', '李建锋', '13958835592', 'shycnet', '总经理', '上海冶成国际贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '普陀区东新路248号', '箱包', '500人', '2000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1180', '刘春明', '15000333656', '15000333656', '运营经理', '易果生鲜', '0', '', '0', '', '1', '', '0', '', '', '金钟路999号', '食品', '0', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1181', '陆燊潇', '18067080892', '18069790201', '天猫经验体总经理', '杭州老板电器股份有限公司', '20000', '', '0', '', '1', '', '0', '', '', '临平大道592号', '数码家电', '50亿', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1182', '关粤', '13631391629', '13631391629', '电商经理', '广州市科元化妆品厂', '600000', '', '0', '', '1', '', '0', '', '', '', '美妆', '100+人', '3000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1183', '王国庆', '13636594466', '13636594466', '运营总监', '上海陆洲贸易有限公司', '10000', '', '0', '', '1', '', '0', '', '', '曹联支路25号', '内衣', '500人', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1184', '王翠英', '13811377607', 'yancy0512', '探路者电子商务VMD经理', '探路者控股集团股份有限公司', '4000', '', '0', '', '1', '', '0', '', '', '北京市海淀区知春路6号锦秋国际大厦A座24层', '户外运动', '2000人', '10000', '6', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1187', '高炎军', '13567378191', 'xiaojun673085', '业务经理', '嘉兴兴世达服装', '2000', '', '0', '', '0', '', '0', '', '', '平南路281号', '女装', '中', '300', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1188', '陈国华', '13805098811', 'V676299', '总经理', '江苏采绎来电子商务有限公司', '1000', '', '0', '', '1', '', '0', '', '', '高新技术产业开发区金麟路5号', '家居家纺', '定制车间工人8人', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1189', '朱家明', '15601691868', '250643282', '运营总监', '上海苏博眼镜有限公司', '5000', '', '0', '', '1', '', '0', '', '', '潮州路520号2楼', '珠宝饰品', '0', '300', '60', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1190', '夏如风', '18511734933', 'xiashi54637520', '总裁', '夏氏家用纺织品集团', '500', '', '0', '', '1', '', '0', '', '', '', '家居家纺', '5000平方', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1191', '刘贤海', '13707994735', 'yidanhuizi', '总经理', '东莞市韩派服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '虎门镇博美龙底工业路三巷三号', '女装', '50', '50', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1192', '孙志朋', '18658111731', '18658111731', '市场部经理', '杭州麒腾网络科技有限公司', '11111', '', '0', '', '0', '', '0', '', '', '秋溢路601号云狐科技园3号楼603', '女装', 'TP', '11111', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1193', '黃梓維', '18664881283', '18664881283', 'CEO', '北京海益投資管理有限公司', '300000', '', '0', '', '1', '', '0', '', '', '北京市朝陽區 朝陽路國際創展中心', '女装', '2000人', '4888', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1194', '边继伟', '13782317123', 'Err9999', '总经理助理', '禹州坪山钧窑有限公司', '10', '', '0', '', '1', '', '0', '', '', '神垕镇开发区', '家具建材', '占地10亩，综办楼1栋，车间厂房4处，展厅4处，钧瓷烧制窑炉5座。员工40人。', '10', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1195', '覃子殷', '13926964657', '346590722', '商务经理', '思芙美有限公司', '1000', '', '0', '', '1', '', '0', '', '', '香港新界火炭坳背灣街49-51號協力工業大廈1504室', '美妆', '香港、深圳、珠海、南京均有公司', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1202', '邵玉婷', '13501770945', 'leona_syt', '市场部经理', '罗莱家纺', '20000', '', '0', '', '1', '', '0', '', '', '七莘路3588号', '家居家纺', '2000人', '1000', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1203', '秦淼', '13501250787', 'qm1350125', '市场推广', '北京视秀科技', '1000', '', '0', '', '1', '', '0', '', '', '', '其他', '无需', '20', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1204', '王云', '18710196708', '17090078946', '创始人', '云系统一站式生活工作顾问平台', '1', '', '0', '', '1', '', '0', '', '', '中关村创业大街。', '其他', '无', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1205', '陈嘉亨', '18620493332', '158803459@qq.com', '运营总监', '广州市海珠区兰冠贸易商行', '1000', '', '0', '', '1', '', '0', '', '', '石榴岗路9号4楼', '女装', '200人', '500', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1206', '魏文秀', '13803541108', 'wwx1108', '运营总监', '江西绿源油脂实业有限公司', '50000', '', '0', '', '1', '', '0', '', '', '', '食品', '1500万', '1', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1207', '蔡燕航', '13336101318', 'cyh1900', '创始人', '杭州雅岚贸易有限公司', '1000', '', '0', '', '0', '', '0', '', '', '三墩镇', '美妆', '1', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1208', '李宗贤', '18610058672', 'LZX275155673', 'COO', '北京摩桔天橙影业有限公司', '0', '', '0', '', '1', '', '0', '', '', '高碑店南岸一号义安门38楼6门', '其他', '20人', '6', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1209', '林玮', '18616569767', 'pyjf168', '电商', '上海淡月家居用品有限', '10000', '', '0', '', '0', '', '0', '', '', '松江谷阳北路2399弄22号603室', '家居家纺', '20人', '50', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1210', '陈亚东', '15961898566', 'tigerchen8899', '合伙人', '江苏优兌网络科技有限公司', '10000000', '', '0', '', '0', '', '0', '', '', '丹山路78号锡东创融大厦12-13F', '其他', '员工300多人，市场三线及以下城市', '10000', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1211', '赵品红', '13505715948', 'zhaopinhong', '董事长', '杭州雅生生物科技有限公司', '5000', '', '0', '', '1', '', '0', '', '', '文一西路998号海创园19幢701', '美妆', '4万平方米', '20', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1212', '蔡健威', '13326905757', 'aweizai5757', '负责人', '杭州尊安电子商务有限公司', '150000', '', '0', '', '1', '', '0', '', '', '', '家具建材', '300人 1万平方米', '3', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1213', '田涧岚', '13606548261', 'luo_yin_1989', '市场经理', '网易', '1.00E+22', '', '0', '', '1', '', '0', '', '', '网商路599', '其他', '无', '1.00E+22', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1214', '崔瑞芝', '18888973595', 'racheltsui0915', '电商销售总监', '上海谨道电子商务公司', '0', '', '0', '', '1', '', '0', '', '', '上海市长宁区长宁路1193号长宁来福士广场T3号办公楼2101', '其他', '无', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1223', '郑青', '18205938623', 'zq121582591', '总经理', '厦门猎奇国际贸易有限公司', '3000', '', '0', '', '1', '', '0', '', '', '泥金北路1号五通大厦408', '箱包', '30人', '500', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1224', '陈辉煌', '13959919001', 'hanhong978', '运营总监', '泉州金士达贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '台商投资区秀土顶宫39号', '鞋靴', '3000平方米 工人80人', '200', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1225', '程 铭', '13516995918', '13516995918', '经理', '浦江天蝎服饰有限公司', '500', '', '0', '', '1', '', '0', '', '', '安平路81号', '内衣', '500', '1000', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1226', '方碧询', '15920105908', 'fangbixun08', '运营专员', '佐丹奴', '1000', '', '0', '', '1', '', '0', '', '', '', '男装', '主要合作工厂50家，规模500～1000人以上', '1000', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1227', '王记辉', '15868987741', 'lwjh20', '运营总监', '浙江丹妮婴童用品有限公司', '2000', '', '0', '', '1', '', '0', '', '', '城店南路788号', '母婴', '50人', '1000', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1228', '王成华', '13858168695', '13858168695', '运营', '杭州兰林服饰有限公司', '300', '', '0', '', '1', '', '0', '', '', '华丰路2号华丰工业园', '女装', '50', '50', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1229', '林灿祥', '18962326555', '18962326555', '总经理', '上海积姿商贸有限公司', '1000', '', '0', '', '0', '', '0', '', '', '莫城三溏长浜路长居庭36号', '女装', '50-100', '500', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1230', '沃晓汶', '18505732066', 'woody8578', '项目经理', '嘉兴市龙骏信息科技有限公司', '1000', '', '0', '', '1', '', '0', '', '', '文贤路134号2-308', '箱包', '200人', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1231', '沃晓汶', '18505732066', 'woody8578', '项目经理', '嘉兴市龙骏信息科技有限公司', '1000', '', '0', '', '1', '', '0', '', '', '文贤路134号2-308', '箱包', '200人', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1232', '赖怀志', '15858255960', 'wudi699320', '运营总监', '杭州卡朵家纺有限公司', '1000', '', '0', '', '1', '', '0', '', '', '杭州九堡镇九环路63号2a-3楼', '家居家纺', '无', '5', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1233', '杨阳', '15914118685', 'yulyang', '运营经理', '广州思俪浦电子商务有限公司', '200', '', '0', '', '1', '', '0', '', '', '冼村街道华强路富力盈丰大厦A座1101室', '家具建材', '2亿', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1234', '吴建坡', '18059532321', 'w912541', '运营', '务实电商', '3000', '', '0', '', '1', '', '0', '', '', '广东省深圳市龙岗区龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '珠宝饰品', '5000', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1235', '吴志杰', '13666948206', 'wzj269957121', '运营', '务实电商', '5000', '', '0', '', '1', '', '0', '', '', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '珠宝饰品', '500-1000', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1236', '吴建明', '18850997595', '761613285', '运营', '务实电商', '1500', '', '0', '', '1', '', '0', '', '', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '其他', '300-500', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1237', '龚丽娜', '13100666333', '13100666333', '电商总监', '广州市尚汇服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '女装', '500车位', '200', '120', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1238', '何权辉', '13823938734', '13823938734', '电商部经理', '中山市得福肉食制品有限公司', '250000', '', '0', '', '0', '', '0', '', '', '黄圃镇康盛路31号', '食品', '年产值1.5亿', '100', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1239', '蓝木', '13811125616', 'zln507068880', '总裁', '一生一石国际珠宝集团', '500', '', '0', '', '1', '', '0', '', '', '海淀区龙湖唐宁ONE', '珠宝饰品', '全球六大矿源。五家工厂。', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1240', '吴雄伟', '13666931035', '13666931035', '运营助理', '深圳市务实电子商务有限公司', '2000', '', '0', '', '1', '', '0', '', '', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '男装', '200~500人', '10', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1241', '吴培松', '15160342731', 'song824860704', '运营助理', '深圳务实电子商务有限公司', '2000', '', '0', '', '1', '', '0', '', '', '龙城街道爱联社区新屯村市场8号嘉鸿泰工业园2栋4楼', '男装', '200-500人', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1242', '李志强', '18602676262', 'xq_online', '总经理', '天津市飞鹏工贸有限公司', '300000', '', '0', '', '1', '', '0', '', '', '双口镇立新工业园', '家具建材', '200人', '10000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1243', '闫炳伟', '17606250500', 'y13666302004', '店长', '威海悠然户外有限公司', '1000', '', '0', '', '1', '', '0', '', '', '高技术产业开发区世昌大道-298-5号-B201', '户外运动', '100人', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1244', '涂皓婧', '18658130070', 'fresh_kiss', '运营总监', 'Artka', '1000', '', '0', '', '1', '', '0', '', '', '', '女装', '100', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1245', '薛华江', '13185555490', 'xhj1984326', '运营总监', '绍兴咚咚呛电子商务有限公司', '300', '', '0', '', '1', '', '0', '', '', '', '女装', '50', '200', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1246', '澹雅', '13061551231', '13061551231', '运营', '昆山雅莲有限公司', '1000', '', '0', '', '1', '', '0', '', '', '恒龙', '家居家纺', '50', '3000', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1247', '龚丽娜', '13100666333', '13100666333', '电商总监', '广州市尚汇服饰有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '女装', '500车位', '200', '120', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1248', '杜丹婷', '13653816118', 'dudanting002', '生产计划总监', '郑州画眉服装设计有限公司', '5000', '', '0', '', '1', '', '0', '', '', '金城国际广场6号楼西单元2306', '女装', '300', '1000', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1249', '冯增华', '15869113686', 'chenxuan19880329', '运营副总', '西安由你所在文化创意有限公司', '', '', '0', '', '', '', '0', '', '', '"紫薇都市。
', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1254', '冯增华', '15869113686', 'chenxuan19880329', '运营副总', '西安由你所在文化创意有限公司', '0', '', '0', '', '1', '', '0', '', '', '', '珠宝饰品', '珠宝非工厂形式', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1255', '刘青松', '13506000861', '13506000861', '总监', '福建金苑女装', '100000', '', '0', '', '1', '', '0', '', '', '宝盖科技园', '女装', '5000人', '500', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1256', '许赟', '18552028655', 'xy7820', '总经理', '宜兴市宁羡贸易有限公司', '500', '', '0', '', '1', '', '0', '', '', '光荣西路207号', '食品', '50人', '100', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1257', '黄国赵', '15988110173', '15988110173', '商品经理', '浙江海贝服饰', '5000', '', '0', '', '1', '', '0', '', '', '柏盛渡口大厦裙楼', '女装', '外发', '200', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1258', '黄国赵', '15988110173', '15988110173', '商品经理', '浙江海贝服饰', '5000', '', '0', '', '1', '', '0', '', '', '柏盛渡口大厦裙楼', '女装', '外发', '200', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1259', '吴泽', '13989887806', '13989887806', '董事长', '景德镇商邦电子商务有限公司', '40000', '', '0', '', '1', '', '0', '', '', '陶瓷工业园区', '其他', '50亩', '5000', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1260', '葛国良', '13805751127', '13805751127', '总经理', '杭州小丸子食品有限公司', '500', '', '0', '', '0', '', '0', '', '', '萧山区商恒街30号', '食品', '200人', '1', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1261', '姚建刚', '13706845586', 'tonyaojg', '销售副总', '宁波天亚服装有限公司', '4000', '', '0', '', '0', '', '0', '', '', '大港六路65号', '女装', '600-700', '500', '30', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1262', '农家庆', '13910158581', '1209472118', 'CEO', '杭州依梵科技有限公司', '2000', '', '0', '', '1', '', '0', '', '', '南环路4028号中恒世纪科技园7幢A座302', '内衣', '30人', '3000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1263', '苏武', '13811064403', 'suwu596998', '市场负责人', '易直播', '10000', '', '0', '', '1', '', '0', '', '', '五道口优盛大厦C座1108', '其他', '600', '100', '20', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1264', '顾斌', '13967101390', '13967101390', '总经理', '杭州菲叶贸易有限公司', '1000', '', '0', '', '1', '', '0', '', '', '九堡东方电子商务园17-107', '母婴', '50人', '500', '15', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1265', '沈', '18668030112', 'zjsamshine', '总监', '上海捏土电子商务有限公司', '10000', '', '0', '', '0', '', '0', '', '', '', '百货', '海外', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1266', '李庆茂', '18678509638', 'wzsylqm', '总经理', '山东丰悦电子商务有限公司', '20000', '', '0', '', '0', '', '0', '', '', '临清顾家电商产业园', '食品', '2', '1', '7', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1267', '支红', '18659225533', '55008525', '董事长', '厦门茶人岭电子商务股份有限公司', '1000', '', '0', '', '1', '', '0', '', '', '林后路393号四号楼三楼', '食品', '无', '0', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1268', '马亚', '13808809456', '13808809456', 'CEO', '上海珍艾珠宝有限公司', '1000', '', '0', '', '1', '', '0', '', '', '', '珠宝饰品', '50', '10', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1269', '陈锋', '18825181486', '18871583459', '集市运营经理', '广州汇美服装有限公司', '6000', '', '0', '', '1', '', '0', '', '', '', '女装', '1500', '500', '1', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1270', '张磊', '18999252641', '52674451', '副总经理', '冠农股份浙江公司副总经理', '10000', '', '0', '', '1', '', '0', '', '', '', '食品', '日产1万吨', '1000', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1271', '吴志勇', '15307009222', '1877813', '总经理', '南昌中彦电子商务有限公司', '500', '', '0', '', '0', '', '0', '', '', '莫邪塘北村7幢2单元301', '男装', '代加工', '100', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1272', '紫龙', '18665881639', 'xin800921', '品牌创始人', '深圳市那时情怀电子商务有限公司', '500', '', '0', '', '0', '', '0', '', '', '莲塘鹏基工业区706幢3F', '女装', '150人', '50', '30', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1273', '邵飞春', '13706668445', '13706668445', '总经理', '浙江森马电子商务有限公司', '50000', '', '0', '', '0', '', '0', '', '', '文二西路', '女装', '400家', '100', '3', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1274', '唐瑞颖', '13566141638', 'tangryiying2006', '总经理', '瑞安市聚客电子商务有限公司', '1000', '', '0', '', '0', '', '0', '', '', '', '其他', '500平方', '1', '5', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1275', '黄秀云', '13560220343', '', '品牌策划', '广州汉卓尔箱包有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1276', '商邦陶瓷', '13989887806', '', '董事长', '景德镇商邦电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1277', '余昭凡', '18968122276', '', '董事长', '杭州熟买电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1278', '紫灵', '13456785037', '', '副总', '杭州徐娜拉电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1279', '王先德', '15821357900', '', '电商总监', '荷仕兰（乳业）有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1280', '元璋', '15958038326', '', '创业者', '杭州新共秀网络科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1281', '王飞', '18070392713', '', '运营总监', '北京汤梦伊商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1282', '张焱萍', '18923106245', '', '掌柜', '佛山畅乐生物科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1283', '赖文娟', '13925135787', '', '经理', '广州昊王皮具有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1284', '杨勋忠', '18998319922', '', '集团副总裁', '广州市汇美时尚集团股份有限公司', '', '', '0', '', '0', '', '100', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1285', '于文博', '18265590020', '', '公司负责人', '济南顺乾服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1286', '哞哞', '13510305237', '', '品牌经理', '深圳欧莎服饰', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1287', '吴昆明', '13470999999', '', '董事长', '高梵电商', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1288', '米罗', '13568843310', '', '运营总监', '成都盛林风行商贸有限责任公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1289', '徐超强', '13568843310', '', '运营总监', '成都盛林风行商贸有限责任公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1290', '谭中林', '18969139996', '', '副总', '成都宝之诚珠宝有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1291', '周永健', '18667126723', '', '营销总监', '杭州青梅网络科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1292', '黄晋', '13676228886', '', 'CMO', '阿吉斯( 上海)体育用品公司', '', '', '0', '', '0', '', '100', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1293', '戴黎明', '15067311721', '', '总监', '浙江嘉欣丝绸股份有限公司服饰分公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1294', 'Andy Lu', '15867885188', '', '副总经理', 'La Kayee珠宝', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1295', '王中攀', '15305740097', '', '销量总监', '宁波梦神集团', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1296', '韩朝阳', '13339272777', '', '经理', '亳州市花千语参茶有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1297', '汤米', '13816122624', '', '总经理', '江苏华佳丝绸股份有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1298', '老魏', '15502426567', '', '创始人', '北京欧芭朵国际贸易有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1299', '燕子', '18610813864', '', '天猫负责人', '梦想城堡（天津）电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1300', '葛超然', '18805713296', '', '总经理', '杭州宝仕道贸易有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1301', '王苹', '15267607011', '', '负责人', '星野时尚文化传播', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1302', '李楣', '13901804602', '', '总经理', '上海泽毅实业有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1303', '李楣', '13901804602', '', '总经理', '上海泽毅实业有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1304', '戴薇', '15920355861', '', '总经理', '广州润微服装有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1305', '飞天', '18801868622', '', '运营经理', '多喜爱信息技术有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1306', '程世德', '13929537777', '', '董事长', '广东华一电子商务股份有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1307', '魏兴杰', '13819114424', '', '总经理', '浙江欧创投资管理有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1308', '刘平', '15605719963', '', '经理', '杭州艾迦贸易有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1313', '龙吟', '18602043217', '', 'CEO', '广州市昕薇服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1314', '潘玟', '18858298030', '', '总经理', '杭州瑞尚潮品服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1315', '包灵冲', '13989620919', '', '总经理', '台州市非常上镜商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1316', '徐涛', '13381127591', '', '渠道运营总监', '北京润合美商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1317', '邹国兴', '15157838558', '', '董事长', '浙江奇栩科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1318', '陈莹', '13757190181', '', '总经理', '杭州元汇服饰', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1319', '李博渊', '13175321777', '', '店长', '台州市霸业贸易有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1320', '彭双龙', '15257966353', '', 'CEO', '浙江旭恒饰品有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1321', '胡明宇', '13810973861', '', '运营总监', '穷游网生活实验室', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1322', '念念', '15906671999', '', '总监', '杭州高兰电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1323', '郭屹', '18605885546', '', '总经理', '杭州弥香科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1324', '尹志强', '18675896777', '', '总经理', '羊皮堂', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1325', '尹志强', '18675896777', '', '总经理', '羊皮堂', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1326', '茹峰', '13858076045', '', '电商负责人', '浙江胜利羽绒制品有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1327', '孙大声', '15968127628', '', 'Boss', '尚和文化', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1328', '孙大声', '15968127628', '', 'Boss', '尚和文化', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1329', '余昊琛', '18688895723', '', '副总裁', '宽厚资本', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1330', '商邦', '13989887806', '', '董事', '景德镇商邦电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1331', '徐方平', '18013912066', '', '董事长', '南京黛芙儿珠宝有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1332', '纪晓春', '18626353808', '', '董事', '北京艺起嗨资产管理有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1333', '李双林', '13968021965', '', '合伙人', '浙江牧石间文化艺术有限责任公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1334', '庞梓超', '15001059628', '', '分销', '北京润合美商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1335', '王先德', '15821357900', '', '顾问', '广州读你服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1336', '唐亮', '13982103654', '', '运营', '成都景和商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1337', '林阳晴（蔷薇）', '15990020798', '', '运营总监', '浙江长生鸟珍珠生物科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1338', '郑隽', '13588082630', '', '电商总经理', '杭州意丰歌服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1339', '马纲', '18628971221', '', 'CEO', '成都维赛电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1340', '邹挺', '13750843820', '', '运营', '杭州高兰电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1341', '包灵冲', '13989620919', '', '总经理', '台州市非常上镜商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1342', '杜丹婷', '13653816118', '', '生产计划部总监', '郑州画眉服装设计有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1343', '陈栋', '15192518221', '', '总监', '上海容铂贸易有限公司', '', '', '0', '', '0', '', '9', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1344', '欧阳飞', '15867360133', '', '顾问', '杭州八觉服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1345', '石春宇', '18810599534', '', '运营', '可人美化妆品专营店', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1346', '王庆', '13898903207', '', '运营', '伊人红妆国货美容护肤品店', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1347', '董月半', '13961165935', '', '运营总监', '常州市龙道电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1348', '董阳胜', '13961165935', '', '运营总监', '常州市曼颜服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1349', '谢勇', '13606800381', '', '总经理', '杭州索想科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1350', '高晶晶', '13858166846', '', '推广运营', '上海和利多贸易有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1351', '张铁林', '15336551131', '', '老板', '杭州帝淘科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1352', '张铁林', '15336551131', '', '老板', '杭州帝淘科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1353', '汤米', '13816122624', '', '总经理', '上海黛丝电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1354', '徐涛', '13381127591', '', '渠道总监', '北京润合美商贸有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1355', '李新安', '13775078973', '', '运营', '扬州优可优爱文化传播有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1356', '平超', '15958034899', '', '营销总监', '杭州九景科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1357', '平超', '15958034899', '', '营销总监', '杭州九景科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1358', '吴先生', '13901158169', '', '企业管理部', '北京一道文玩电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1359', '马潇潇', '13817104482', '', '市场总监', '上海马克华菲电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1360', '肖龙', '13880014598', '', '创始人ceo', '阿么女鞋', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1361', '蔡蔡', '18058403880', '', '负责人', '商鼎投资', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1362', '户勇', '15868819045', '', '副总经理', '杭州墨匠信息技术有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1363', '何京宏', '13352968817', '', '总经理', '深圳市玩艺儿创意管理有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1370', '姚岭峰', '15921996674', '', '电商总监', '上海威淳实业有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1371', '朱印', '18521058637', '', '学生', '四川大学', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1372', '姚伟', '15669991010', '', '总经理', '杭州印象视觉电子商务有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1374', '龙永', '13466334488', '', 'ceo', '北京火狼电子商务有限公司，北京赛格服饰有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1375', 'Andy Lu', '15867885188', '', '总经理', 'La Kayee珠宝有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1376', '徐建洪', '13867422777', '', '总经理', '杭州象尚文化有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1377', '姚文全', '13601648183', '', '创始人 首席粉丝官', '上海纯亭食品科技有限公司', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1378', '陈莹', '13757190181', '', '总经理', '杭州元汇', '', '', '0', '', '0', '', '0', '', '', '', '', '', '', '0', '0', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1380', '舒洋', '13588293989', '13588293989', '总经理', '浙江美妮萱化妆品有限公司', '100000', '', '0', '', '1', '', '0', '', '', '杭州余杭区五常高顺路8号西溪软件园金牛座A座四楼', '美妆', '300人', '5000', '0', '1', '0', '飞电', '', '');
INSERT INTO `t_factories` VALUES ('1382', '宋弘超', '15910678666', '15910678666', '副总裁', '福玛特北京机器人股份有限责任公司', '2000', '', '0', '', '1', '', '0', '', '', '北京市朝阳区三里屯SOHO、B座18层', '数码家电', '1000人', '1000', '30', '1', '0', '飞电', '', '');

-- ----------------------------
-- Records for `t_fans_profile`
-- ----------------------------
INSERT INTO `t_fans_profile` VALUES ('6', '56c8794c3906b0e46924ae14', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0');
INSERT INTO `t_fans_profile` VALUES ('7', '54ec9652a7640bdf548b469f', '11390', '1159', '11390', '732', '7854', '2540', '264', '北京市', '1592', '上海市', '1339', '广州市', '1151', '深圳市', '922', '成都市', '584', '杭州市', '506', '苏州市', '478', '武汉市', '451', '天津市', '424', '东莞市', '412');
INSERT INTO `t_fans_profile` VALUES ('8', '51b728c4803494623f00002d', '15440', '8322', '15440', '1340', '11431', '2350', '319', '北京市', '2815', '天津市', '1491', '上海市', '1373', '广州市', '810', '深圳市', '777', '西安市', '613', '哈尔滨市', '597', '苏州市', '578', '成都市', '560', '沈阳市', '461');
INSERT INTO `t_fans_profile` VALUES ('11', '531d14869d67d952278b456b', '6155', '796', '6155', '371', '4086', '1530', '168', '北京市', '977', '上海市', '625', '深圳市', '528', '广州市', '526', '成都市', '319', '苏州市', '283', '杭州市', '259', '天津市', '254', '重庆市', '254', '武汉市', '250');
INSERT INTO `t_fans_profile` VALUES ('12', '532177d6ebeddb85378b4580', '11471', '1196', '11471', '731', '7880', '2602', '258', '北京市', '2304', '上海市', '1465', '广州市', '950', '深圳市', '947', '苏州市', '716', '成都市', '671', '天津市', '663', '杭州市', '654', '无锡市', '595', '南京市', '572');
INSERT INTO `t_fans_profile` VALUES ('13', '5458f967a8640ba4098b459e', '3153', '884', '3153', '208', '2138', '729', '78', '北京市', '646', '上海市', '365', '广州市', '223', '深圳市', '195', '杭州市', '148', '重庆市', '147', '成都市', '145', '苏州市', '133', '西安市', '116', '天津市', '113');
INSERT INTO `t_fans_profile` VALUES ('15', '50c298087d34947a68000188', '1', '0', '1', '0', '0', '1', '0', '西安市', '1', '泸州市', '1', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0');
INSERT INTO `t_fans_profile` VALUES ('16', '50274a227f349423710001e2', '12770', '1217', '12770', '744', '8571', '3162', '293', '北京市', '2734', '上海市', '2011', '广州市', '1559', '深圳市', '1385', '成都市', '1072', '苏州市', '820', '武汉市', '807', '杭州市', '807', '天津市', '789', '西安市', '721');
INSERT INTO `t_fans_profile` VALUES ('17', '51ec0a747d34942c0a000019', '9650', '1084', '9650', '664', '6490', '2256', '240', '北京市', '1659', '上海市', '1302', '广州市', '1008', '深圳市', '858', '成都市', '534', '杭州市', '476', '武汉市', '467', '苏州市', '462', '南京市', '431', '天津市', '429');
INSERT INTO `t_fans_profile` VALUES ('18', '53a9197d803494d80fc12f85', '7963', '2757', '7963', '588', '5667', '1525', '183', '北京市', '1509', '上海市', '1030', '广州市', '779', '深圳市', '656', '成都市', '464', '苏州市', '421', '天津市', '409', '杭州市', '408', '西安市', '397', '武汉市', '344');
INSERT INTO `t_fans_profile` VALUES ('19', '554610baa8640bf3428b4598', '2888', '349', '2888', '180', '1940', '687', '81', '北京市', '397', '上海市', '327', '广州市', '265', '深圳市', '225', '杭州市', '146', '成都市', '120', '武汉市', '112', '苏州市', '109', '东莞市', '98', '天津市', '94');
INSERT INTO `t_fans_profile` VALUES ('21', '502b8068813494696b000258', '242', '43', '242', '14', '161', '61', '6', '青岛市', '84', '北京市', '32', '上海市', '16', '深圳市', '10', '广州市', '10', '东莞市', '8', '成都市', '7', '南京市', '7', '苏州市', '7', '武汉市', '6');
INSERT INTO `t_fans_profile` VALUES ('22', '51f2952f7f3494081c000002', '15630', '5637', '15630', '1241', '11187', '2864', '338', '北京市', '2652', '上海市', '1644', '广州市', '1348', '深圳市', '1070', '天津市', '772', '苏州市', '691', '成都市', '686', '杭州市', '672', '西安市', '608', '武汉市', '590');
INSERT INTO `t_fans_profile` VALUES ('23', '51cd502c5c8e87a50f000012', '13743', '1474', '13743', '807', '9071', '3532', '333', '北京市', '2843', '上海市', '1898', '广州市', '1471', '深圳市', '1353', '成都市', '1226', '杭州市', '889', '武汉市', '809', '苏州市', '794', '天津市', '770', '南京市', '702');
INSERT INTO `t_fans_profile` VALUES ('27', '54573891a8640beb408b458e', '1530', '150', '1530', '83', '953', '452', '42', '北京市', '401', '上海市', '154', '深圳市', '145', '广州市', '134', '成都市', '82', '天津市', '75', '西安市', '71', '重庆市', '68', '苏州市', '60', '武汉市', '58');
INSERT INTO `t_fans_profile` VALUES ('28', '53b3f0a9ebeddbc41b8b4567', '189', '76', '189', '15', '126', '44', '4', '北京市', '30', '上海市', '19', '温州市', '15', '深圳市', '13', '广州市', '12', '泉州市', '6', '东莞市', '5', '宁波市', '5', '南京市', '5', '福州市', '5');
INSERT INTO `t_fans_profile` VALUES ('30', '558e311243808b130b8b456e', '49', '13', '49', '6', '26', '16', '1', '北京市', '7', '深圳市', '5', '广州市', '4', '无锡市', '4', '武汉市', '3', '东莞市', '3', '上海市', '3', '襄阳市', '2', '宣城市', '2', '临沂市', '2');
INSERT INTO `t_fans_profile` VALUES ('31', '4fdc354b803494403800009e', '958', '194', '958', '79', '608', '245', '26', '北京市', '154', '广州市', '78', '太原市', '71', '深圳市', '68', '上海市', '57', '天津市', '39', '武汉市', '36', '东莞市', '35', '苏州市', '33', '西安市', '29');
INSERT INTO `t_fans_profile` VALUES ('34', '52f4c7ec78d3cc69268b4588', '4083', '511', '4083', '278', '2739', '970', '96', '北京市', '476', '上海市', '445', '广州市', '354', '深圳市', '292', '杭州市', '193', '成都市', '183', '苏州市', '156', '东莞市', '135', '武汉市', '131', '天津市', '130');
INSERT INTO `t_fans_profile` VALUES ('35', '545c9754a5640b20538b4593', '3823', '403', '3823', '257', '2586', '892', '88', '北京市', '716', '上海市', '433', '广州市', '389', '深圳市', '330', '成都市', '218', '杭州市', '207', '西安市', '199', '苏州市', '197', '武汉市', '192', '重庆市', '183');
INSERT INTO `t_fans_profile` VALUES ('37', '52a6f87d813494f17c7b925c', '1334', '121', '1334', '79', '883', '337', '35', '北京市', '223', '上海市', '125', '沈阳市', '110', '广州市', '87', '深圳市', '77', '天津市', '60', '苏州市', '54', '成都市', '53', '西安市', '51', '杭州市', '49');
INSERT INTO `t_fans_profile` VALUES ('42', '525a14ed7d3494ab5449fae4', '1068', '104', '1068', '53', '657', '325', '33', '北京市', '238', '上海市', '88', '广州市', '81', '深圳市', '65', '南京市', '40', '东莞市', '39', '天津市', '38', '西安市', '37', '杭州市', '36', '泉州市', '35');
INSERT INTO `t_fans_profile` VALUES ('43', '53b44b019d67d9eb1d8b459d', '3461', '559', '3461', '238', '2241', '864', '118', '北京市', '467', '上海市', '312', '深圳市', '267', '广州市', '251', '杭州市', '137', '成都市', '135', '天津市', '128', '苏州市', '124', '重庆市', '119', '东莞市', '108');
INSERT INTO `t_fans_profile` VALUES ('44', '53400815ebeddb5d488b4587', '399', '141', '399', '26', '267', '96', '10', '深圳市', '85', '北京市', '41', '广州市', '23', '东莞市', '22', '上海市', '22', '苏州市', '14', '泉州市', '11', '汕头市', '9', '西安市', '9', '成都市', '9');
INSERT INTO `t_fans_profile` VALUES ('45', '50462c2c7f3494d6140002eb', '1373', '173', '1373', '93', '842', '400', '38', '重庆市', '259', '北京市', '194', '上海市', '163', '广州市', '141', '深圳市', '117', '成都市', '93', '杭州市', '65', '苏州市', '56', '天津市', '54', '泉州市', '53');
INSERT INTO `t_fans_profile` VALUES ('46', '52cf8a4777d3ccbf188b456c', '2374', '292', '2374', '179', '1587', '556', '52', '北京市', '272', '上海市', '255', '广州市', '234', '深圳市', '193', '苏州市', '120', '杭州市', '102', '武汉市', '98', '成都市', '97', '无锡市', '86', '东莞市', '84');
INSERT INTO `t_fans_profile` VALUES ('48', '52c16cad78d3cc8c508b45cb', '3268', '543', '3268', '200', '2174', '799', '95', '北京市', '465', '上海市', '352', '广州市', '228', '深圳市', '226', '成都市', '154', '天津市', '117', '苏州市', '116', '武汉市', '112', '杭州市', '109', '西安市', '108');
INSERT INTO `t_fans_profile` VALUES ('51', '5308e7484f4a1319398b457c', '20', '3', '20', '2', '10', '8', '0', '邯郸市', '5', '北京市', '5', '徐州市', '2', '苏州市', '2', '安阳市', '2', '长沙市', '2', '成都市', '1', '德阳市', '1', '佳木斯市', '1', '合肥市', '1');
INSERT INTO `t_fans_profile` VALUES ('52', '5312e081ebeddb727f8b46c4', '76', '11', '76', '3', '54', '16', '3', '西安市', '6', '北京市', '5', '上海市', '5', '成都市', '4', '无锡市', '3', '杭州市', '3', '郑州市', '3', '深圳市', '3', '广州市', '2', '重庆市', '2');
INSERT INTO `t_fans_profile` VALUES ('54', '52669a8bc58a87365a0612b7', '9975', '5404', '9975', '395', '3663', '5776', '141', '北京市', '781', '西安市', '551', '上海市', '544', '广州市', '399', '深圳市', '356', '成都市', '238', '杭州市', '219', '天津市', '211', '苏州市', '193', '武汉市', '181');
INSERT INTO `t_fans_profile` VALUES ('56', '514333c57d3494483300004f', '8630', '1039', '8630', '506', '5337', '2528', '259', '北京市', '1479', '广州市', '1132', '上海市', '1090', '深圳市', '776', '杭州市', '499', '成都市', '472', '苏州市', '435', '武汉市', '402', '天津市', '400', '东莞市', '376');
INSERT INTO `t_fans_profile` VALUES ('59', '5222799f7d3494cd55eee1e0', '31683', '4436', '31683', '2156', '22287', '6515', '725', '北京市', '6931', '上海市', '3865', '广州市', '2767', '深圳市', '2568', '成都市', '1869', '杭州市', '1739', '苏州市', '1722', '天津市', '1714', '武汉市', '1559', '西安市', '1548');
INSERT INTO `t_fans_profile` VALUES ('60', '52f32c2677d3cc22398b456b', '33021', '4525', '33021', '2119', '22728', '7389', '785', '北京市', '6271', '上海市', '4383', '广州市', '3199', '深圳市', '2919', '杭州市', '2356', '成都市', '2142', '苏州市', '1842', '天津市', '1837', '武汉市', '1720', '南京市', '1623');
INSERT INTO `t_fans_profile` VALUES ('61', '533ee3124f4a133a5a8b45a4', '1642', '458', '1642', '124', '1152', '319', '47', '北京市', '264', '上海市', '149', '广州市', '114', '深圳市', '108', '天津市', '90', '苏州市', '81', '杭州市', '78', '临沂市', '77', '武汉市', '75', '成都市', '65');
INSERT INTO `t_fans_profile` VALUES ('65', '5046e78e7d3494e17400017c', '6016', '1523', '6016', '464', '4017', '1371', '164', '北京市', '1080', '上海市', '576', '深圳市', '443', '广州市', '441', '苏州市', '274', '天津市', '270', '西安市', '265', '杭州市', '265', '武汉市', '262', '成都市', '260');
INSERT INTO `t_fans_profile` VALUES ('67', '51298720813494250b0000f4', '8201', '4314', '8201', '601', '6192', '1231', '177', '北京市', '1152', '上海市', '709', '广州市', '592', '深圳市', '443', '天津市', '342', '苏州市', '323', '杭州市', '301', '西安市', '300', '成都市', '284', '武汉市', '247');
INSERT INTO `t_fans_profile` VALUES ('68', '50e7e03d7f34941f32000015', '14664', '1721', '14664', '959', '9763', '3564', '378', '北京市', '2761', '上海市', '1999', '广州市', '1484', '深圳市', '1285', '成都市', '851', '杭州市', '848', '苏州市', '795', '天津市', '747', '武汉市', '712', '南京市', '711');
INSERT INTO `t_fans_profile` VALUES ('69', '544cc2dea5640b43518b4579', '2125', '226', '2125', '146', '1456', '470', '53', '北京市', '251', '上海市', '211', '广州市', '205', '深圳市', '189', '成都市', '108', '武汉市', '94', '重庆市', '81', '杭州市', '77', '苏州市', '76', '南京市', '75');
INSERT INTO `t_fans_profile` VALUES ('70', '51b5d828813494f525000002', '14658', '2032', '14658', '988', '10023', '3277', '370', '北京市', '2658', '上海市', '1907', '广州市', '1292', '深圳市', '1167', '成都市', '850', '苏州市', '787', '杭州市', '765', '武汉市', '745', '天津市', '743', '西安市', '684');
INSERT INTO `t_fans_profile` VALUES ('74', '501288ed803494e7700003e7', '5484', '1467', '5484', '403', '3812', '1135', '134', '北京市', '775', '上海市', '545', '深圳市', '368', '广州市', '355', '盐城市', '296', '苏州市', '271', '成都市', '252', '武汉市', '234', '天津市', '225', '杭州市', '202');
INSERT INTO `t_fans_profile` VALUES ('75', '5251044c813494797e101897', '207', '33', '207', '11', '139', '51', '6', '盐城市', '47', '北京市', '18', '上海市', '15', '成都市', '10', '深圳市', '9', '宁波市', '9', '天津市', '8', '武汉市', '6', '西安市', '6', '广州市', '6');
INSERT INTO `t_fans_profile` VALUES ('76', '50ce0e0b7f3494045f00003d', '12122', '5783', '12122', '962', '8799', '2096', '265', '北京市', '2010', '上海市', '1019', '广州市', '635', '天津市', '613', '深圳市', '595', '苏州市', '541', '西安市', '483', '哈尔滨市', '443', '成都市', '439', '郑州市', '425');
INSERT INTO `t_fans_profile` VALUES ('77', '517098a8813494462e00006e', '19700', '4819', '19700', '1343', '13584', '4269', '504', '北京市', '3535', '上海市', '2007', '广州市', '1288', '深圳市', '1282', '天津市', '1013', '成都市', '940', '西安市', '897', '苏州市', '836', '杭州市', '811', '重庆市', '784');
INSERT INTO `t_fans_profile` VALUES ('79', '50fcedf77f3494ab2c000124', '1131', '230', '1131', '89', '759', '247', '36', '北京市', '142', '上海市', '90', '深圳市', '89', '成都市', '81', '广州市', '78', '西安市', '46', '天津市', '39', '武汉市', '36', '沈阳市', '36', '苏州市', '34');
INSERT INTO `t_fans_profile` VALUES ('82', '53e616c2a6640bd2708b4579', '1827', '286', '1827', '126', '1270', '386', '45', '北京市', '222', '上海市', '174', '广州市', '143', '深圳市', '110', '南京市', '88', '成都市', '79', '苏州市', '69', '天津市', '60', '杭州市', '59', '东莞市', '58');
INSERT INTO `t_fans_profile` VALUES ('85', '51d9bb827d3494224d000000', '5920', '1627', '5920', '383', '3988', '1387', '162', '北京市', '988', '上海市', '574', '广州市', '406', '深圳市', '386', '天津市', '290', '苏州市', '255', '杭州市', '249', '成都市', '232', '西安市', '230', '南京市', '224');
INSERT INTO `t_fans_profile` VALUES ('86', '50d4439d813494c1160000db', '6742', '1383', '6742', '492', '4542', '1525', '183', '北京市', '1269', '上海市', '749', '广州市', '507', '深圳市', '482', '成都市', '384', '西安市', '339', '天津市', '292', '苏州市', '289', '重庆市', '286', '杭州市', '283');
INSERT INTO `t_fans_profile` VALUES ('89', '50a735a4813494472f0001e1', '1016', '181', '1016', '69', '673', '251', '23', '北京市', '131', '上海市', '96', '广州市', '87', '深圳市', '77', '杭州市', '44', '南昌市', '43', '西安市', '40', '苏州市', '39', '佛山市', '37', '成都市', '33');
INSERT INTO `t_fans_profile` VALUES ('90', '52d2e471e34167df058b459c', '4576', '600', '4576', '300', '2950', '1190', '136', '北京市', '880', '上海市', '519', '广州市', '362', '深圳市', '305', '天津市', '251', '成都市', '207', '杭州市', '198', '西安市', '192', '苏州市', '187', '哈尔滨市', '184');
INSERT INTO `t_fans_profile` VALUES ('91', '525b66875e7feb19498b4567', '9590', '1265', '9590', '580', '6309', '2425', '276', '北京市', '1430', '上海市', '979', '广州市', '801', '深圳市', '748', '成都市', '528', '杭州市', '433', '苏州市', '422', '天津市', '392', '武汉市', '376', '重庆市', '356');
INSERT INTO `t_fans_profile` VALUES ('93', '53aca3e2ebeddb4b238b459c', '401', '197', '401', '25', '308', '61', '7', '北京市', '49', '哈尔滨市', '31', '深圳市', '25', '广州市', '22', '上海市', '22', '石家庄市', '19', '天津市', '16', '西安市', '14', '南京市', '11', '东莞市', '10');
INSERT INTO `t_fans_profile` VALUES ('96', '548aefd3a6640b44728b4575', '9923', '1567', '9923', '645', '6706', '2315', '257', '北京市', '1631', '上海市', '1113', '广州市', '864', '深圳市', '781', '成都市', '515', '苏州市', '454', '天津市', '419', '杭州市', '410', '西安市', '401', '重庆市', '379');
INSERT INTO `t_fans_profile` VALUES ('98', '55126087a5640b96728b4571', '4922', '625', '4922', '353', '3389', '1062', '118', '北京市', '666', '上海市', '495', '广州市', '442', '深圳市', '409', '成都市', '263', '杭州市', '212', '苏州市', '211', '武汉市', '209', '东莞市', '208', '天津市', '188');
INSERT INTO `t_fans_profile` VALUES ('99', '536659474f4a130d7a8b4567', '1520', '220', '1520', '88', '993', '385', '54', '北京市', '212', '上海市', '146', '深圳市', '122', '广州市', '94', '杭州市', '64', '成都市', '63', '苏州市', '55', '东莞市', '51', '天津市', '51', '泉州市', '46');
INSERT INTO `t_fans_profile` VALUES ('100', '532cf2c78134943c7212230b', '97', '9', '97', '4', '69', '21', '3', '北京市', '18', '淮安市', '11', '上海市', '9', '广州市', '8', '武汉市', '7', '天津市', '7', '西安市', '5', '佛山市', '5', '无锡市', '4', '杭州市', '4');
INSERT INTO `t_fans_profile` VALUES ('103', '5256e1fb7d34948841df1e5e', '4502', '1137', '4502', '302', '3089', '993', '118', '北京市', '969', '上海市', '591', '广州市', '453', '深圳市', '357', '苏州市', '236', '天津市', '235', '成都市', '227', '杭州市', '219', '西安市', '204', '哈尔滨市', '190');
INSERT INTO `t_fans_profile` VALUES ('106', '5092ac517f34949978000090', '84193', '12482', '84193', '5411', '58481', '18446', '1855', '北京市', '17186', '上海市', '12483', '广州市', '8185', '深圳市', '7142', '成都市', '5372', '天津市', '5109', '杭州市', '4927', '苏州市', '4831', '西安市', '4342', '武汉市', '4151');
INSERT INTO `t_fans_profile` VALUES ('107', '52d043b18034946555dc2242', '4749', '732', '4749', '334', '3210', '1076', '129', '北京市', '609', '上海市', '583', '广州市', '496', '深圳市', '410', '武汉市', '226', '杭州市', '220', '苏州市', '213', '成都市', '209', '天津市', '164', '佛山市', '161');
INSERT INTO `t_fans_profile` VALUES ('108', '537f90864f4a1308378b4567', '3147', '1698', '3147', '113', '1139', '1853', '42', '北京市', '292', '济南市', '174', '上海市', '147', '深圳市', '114', '广州市', '105', '成都市', '70', '西安市', '66', '天津市', '63', '苏州市', '61', '武汉市', '55');
INSERT INTO `t_fans_profile` VALUES ('109', '51ac5c855c8e87bb3b000001', '82', '24', '82', '4', '51', '26', '1', '上海市', '30', '天津市', '9', '北京市', '6', '广州市', '4', '东莞市', '4', '成都市', '3', '哈尔滨市', '3', '武汉市', '3', '唐山市', '3', '金华市', '3');
INSERT INTO `t_fans_profile` VALUES ('110', '52ab24055e7febe87c8b4590', '15369', '1754', '15369', '952', '10335', '3714', '368', '北京市', '2983', '上海市', '1846', '广州市', '1271', '深圳市', '1146', '天津市', '803', '成都市', '766', '苏州市', '705', '杭州市', '692', '西安市', '690', '武汉市', '656');
INSERT INTO `t_fans_profile` VALUES ('111', '514eca76803494b723000006', '29840', '4282', '29840', '1887', '20553', '6698', '702', '北京市', '5709', '上海市', '3945', '广州市', '2701', '深圳市', '2550', '成都市', '1952', '天津市', '1663', '苏州市', '1634', '杭州市', '1633', '西安市', '1486', '武汉市', '1422');
INSERT INTO `t_fans_profile` VALUES ('112', '5077ed627f3494f15f00001c', '810', '321', '810', '57', '410', '328', '15', '北京市', '146', '上海市', '47', '深圳市', '38', '广州市', '38', '杭州市', '23', '泉州市', '19', '西安市', '17', '天津市', '16', '武汉市', '15', '东莞市', '15');
INSERT INTO `t_fans_profile` VALUES ('113', '51da5e61813494184300000e', '1306', '266', '1306', '102', '844', '323', '37', '北京市', '191', '上海市', '134', '深圳市', '92', '广州市', '84', '苏州市', '54', '天津市', '44', '杭州市', '43', '成都市', '40', '西安市', '39', '武汉市', '38');
INSERT INTO `t_fans_profile` VALUES ('117', '54676084a5640b9c178b4568', '3758', '477', '3758', '234', '2589', '850', '85', '北京市', '562', '上海市', '460', '广州市', '403', '深圳市', '355', '成都市', '188', '东莞市', '175', '武汉市', '172', '佛山市', '162', '杭州市', '161', '苏州市', '159');
INSERT INTO `t_fans_profile` VALUES ('118', '514333c57d3494483300004f', '8630', '1039', '8630', '506', '5337', '2528', '259', '北京市', '1479', '广州市', '1132', '上海市', '1090', '深圳市', '776', '杭州市', '499', '成都市', '472', '苏州市', '435', '武汉市', '402', '天津市', '400', '东莞市', '376');
INSERT INTO `t_fans_profile` VALUES ('119', '553617d4a7640b5a508b4579', '8525', '1238', '8525', '541', '5800', '1958', '226', '北京市', '1236', '上海市', '955', '广州市', '737', '深圳市', '644', '成都市', '398', '杭州市', '385', '苏州市', '337', '武汉市', '329', '西安市', '329', '南京市', '301');
INSERT INTO `t_fans_profile` VALUES ('120', '551e388ba20f73c3628b4568', '5077', '619', '5077', '430', '3562', '964', '121', '北京市', '912', '上海市', '673', '广州市', '447', '深圳市', '361', '成都市', '266', '杭州市', '243', '天津市', '240', '西安市', '225', '武汉市', '212', '苏州市', '211');
INSERT INTO `t_fans_profile` VALUES ('121', '53b7bafdebeddbb0658b4567', '3851', '328', '3851', '235', '2372', '1120', '124', '北京市', '679', '上海市', '486', '广州市', '403', '深圳市', '343', '杭州市', '228', '成都市', '202', '天津市', '189', '苏州市', '187', '武汉市', '186', '南京市', '175');
INSERT INTO `t_fans_profile` VALUES ('122', '52e94727ebeddba5038b459e', '9935', '7818', '9935', '213', '1962', '7690', '70', '北京市', '524', '上海市', '279', '深圳市', '191', '广州市', '164', '杭州市', '139', '成都市', '125', '西安市', '107', '天津市', '97', '苏州市', '94', '武汉市', '83');
INSERT INTO `t_fans_profile` VALUES ('127', '53a427d4803494ac699c5592', '2', '1', '2', '0', '2', '0', '0', '台州市', '1', '青岛市', '1', '广州市', '1', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0', 'NULL', '0');
INSERT INTO `t_fans_profile` VALUES ('128', '520cbaff5e7feb3022e97916', '22402', '6940', '22402', '1352', '15607', '4916', '527', '北京市', '4569', '上海市', '2205', '广州市', '1553', '深圳市', '1487', '天津市', '1096', '哈尔滨市', '1065', '成都市', '1057', '西安市', '1005', '杭州市', '923', '苏州市', '903');
INSERT INTO `t_fans_profile` VALUES ('129', '518554be7d3494d76a00001c', '1940', '418', '1940', '126', '1273', '475', '66', '北京市', '440', '上海市', '198', '广州市', '151', '深圳市', '105', '苏州市', '89', '武汉市', '85', '杭州市', '75', '成都市', '74', '西安市', '67', '天津市', '66');
INSERT INTO `t_fans_profile` VALUES ('133', '53190e7b9d67d9f0268b4569', '30116', '3156', '30116', '1739', '20469', '7170', '738', '北京市', '5613', '上海市', '3977', '广州市', '3144', '深圳市', '2770', '武汉市', '2274', '成都市', '2009', '苏州市', '1692', '杭州市', '1658', '天津市', '1539', '西安市', '1498');
INSERT INTO `t_fans_profile` VALUES ('134', '54cb5495a5640bf8468b4572', '1889', '432', '1889', '143', '1284', '410', '52', '北京市', '239', '上海市', '167', '深圳市', '125', '广州市', '112', '西安市', '62', '杭州市', '61', '成都市', '59', '天津市', '57', '南京市', '57', '武汉市', '52');
INSERT INTO `t_fans_profile` VALUES ('135', '51f4da2f8134941855000013', '641', '162', '641', '67', '409', '145', '20', '北京市', '97', '大庆市', '74', '上海市', '38', '深圳市', '31', '哈尔滨市', '27', '苏州市', '24', '天津市', '21', '西安市', '20', '广州市', '19', '武汉市', '18');
INSERT INTO `t_fans_profile` VALUES ('136', '525370e7813494420a0eb1bc', '289', '35', '289', '23', '166', '94', '6', '北京市', '39', '广州市', '20', '上海市', '18', '深圳市', '17', '苏州市', '13', '西安市', '12', '泉州市', '10', '东莞市', '10', '天津市', '9', '福州市', '9');
INSERT INTO `t_fans_profile` VALUES ('139', '504a47607f34941207000227', '6647', '1192', '6647', '442', '4409', '1599', '197', '北京市', '1451', '上海市', '648', '广州市', '459', '深圳市', '442', '天津市', '369', '西安市', '298', '苏州市', '286', '杭州市', '275', '成都市', '263', '哈尔滨市', '219');
INSERT INTO `t_fans_profile` VALUES ('141', '56929f877836b0e4c8bc1581', '246', '29', '246', '13', '156', '67', '10', '北京市', '25', '上海市', '19', '广州市', '17', '深圳市', '11', '东莞市', '9', '郑州市', '9', '无锡市', '7', '广东-广州', '7', '苏州市', '7', '重庆市', '6');
INSERT INTO `t_fans_profile` VALUES ('144', '54b896b8a6640bff4f8b4587', '5395', '638', '5395', '358', '3533', '1358', '146', '北京市', '1321', '上海市', '846', '广州市', '626', '深圳市', '607', '成都市', '431', '武汉市', '354', '天津市', '353', '苏州市', '332', '重庆市', '332', '西安市', '319');
INSERT INTO `t_fans_profile` VALUES ('145', '5286bbf5504a13b14f8b45c8', '4098', '476', '4098', '239', '2698', '1059', '102', '北京市', '967', '上海市', '483', '广州市', '387', '深圳市', '330', '成都市', '242', '天津市', '229', '杭州市', '211', '南京市', '205', '西安市', '203', '武汉市', '196');
INSERT INTO `t_fans_profile` VALUES ('146', '513eef7a7d34944363000045', '1489', '259', '1489', '92', '970', '392', '35', '广州市', '262', '北京市', '236', '上海市', '180', '深圳市', '122', '佛山市', '73', '成都市', '72', '苏州市', '70', '天津市', '69', '武汉市', '66', '东莞市', '63');
INSERT INTO `t_fans_profile` VALUES ('147', '51e97b607d34948f0b000001', '14741', '2091', '14741', '1044', '10181', '3184', '332', '北京市', '3137', '上海市', '2102', '广州市', '1249', '深圳市', '1210', '杭州市', '899', '成都市', '899', '福州市', '851', '武汉市', '842', '苏州市', '828', '西安市', '775');
INSERT INTO `t_fans_profile` VALUES ('148', '54cf59c6a7640b85508b4572', '122', '17', '122', '6', '76', '35', '5', '北京市', '9', '泉州市', '9', '深圳市', '8', '广州市', '8', '上海市', '6', '武汉市', '5', '天津市', '5', '重庆市', '4', '青岛市', '4', '苏州市', '4');
INSERT INTO `t_fans_profile` VALUES ('149', '52794da79f6c00867ae1cdbd', '14160', '1653', '14160', '902', '9138', '3727', '393', '北京市', '2131', '上海市', '1496', '广州市', '1243', '深圳市', '1135', '武汉市', '851', '成都市', '678', '苏州市', '593', '杭州市', '569', '天津市', '554', '西安市', '537');
INSERT INTO `t_fans_profile` VALUES ('150', '51ad9c4f5e8e875a62000000', '77233', '14601', '77233', '4898', '54712', '15975', '1648', '北京市', '16957', '上海市', '10651', '广州市', '7039', '深圳市', '6326', '成都市', '5694', '天津市', '5147', '杭州市', '4664', '西安市', '4426', '苏州市', '4422', '武汉市', '4025');
INSERT INTO `t_fans_profile` VALUES ('151', '51e637db7d34945175000001', '25375', '4852', '25375', '1913', '17845', '5050', '567', '北京市', '5162', '上海市', '3299', '广州市', '2422', '深圳市', '2147', '成都市', '1370', '杭州市', '1276', '天津市', '1246', '苏州市', '1228', '武汉市', '1189', '西安市', '1108');
INSERT INTO `t_fans_profile` VALUES ('152', '546c58f7a8640be32f8b457d', '18352', '1735', '18352', '1189', '12316', '4402', '445', '北京市', '3822', '上海市', '2748', '广州市', '2303', '深圳市', '1917', '成都市', '1347', '天津市', '1289', '杭州市', '1128', '武汉市', '1059', '苏州市', '1031', '西安市', '951');
INSERT INTO `t_fans_profile` VALUES ('153', '54384453a6640bba2b8b4575', '18513', '2086', '18513', '1078', '12583', '4401', '451', '北京市', '4315', '上海市', '2600', '广州市', '1894', '深圳市', '1642', '成都市', '1203', '天津市', '1194', '苏州市', '1098', '杭州市', '1094', '哈尔滨市', '1014', '西安市', '984');
INSERT INTO `t_fans_profile` VALUES ('154', '50fe8a337f3494860700009d', '6646', '1637', '6646', '416', '4526', '1498', '206', '北京市', '895', '上海市', '573', '广州市', '414', '深圳市', '396', '苏州市', '289', '天津市', '286', '成都市', '272', '武汉市', '253', '西安市', '241', '杭州市', '219');
INSERT INTO `t_fans_profile` VALUES ('155', '540d3629a7640beb3d8b458b', '12946', '1945', '12946', '808', '8925', '2896', '317', '北京市', '2044', '上海市', '1406', '深圳市', '1134', '广州市', '1130', '苏州市', '619', '成都市', '616', '杭州市', '571', '武汉市', '552', '西安市', '544', '天津市', '527');
INSERT INTO `t_fans_profile` VALUES ('156', '551bbcc4a20f73f7058b4569', '480', '98', '480', '36', '338', '94', '12', '北京市', '67', '上海市', '62', '深圳市', '37', '广州市', '34', '成都市', '20', '武汉市', '17', '西安市', '16', '杭州市', '16', '泉州市', '14', '东莞市', '14');
INSERT INTO `t_fans_profile` VALUES ('157', '51c48a25813494f858000089', '10758', '1695', '10758', '632', '7164', '2632', '330', '北京市', '2345', '上海市', '1231', '广州市', '909', '深圳市', '812', '成都市', '567', '西安市', '521', '天津市', '510', '武汉市', '503', '苏州市', '472', '杭州市', '466');
INSERT INTO `t_fans_profile` VALUES ('158', '511ecb46813494e07e000beb', '7293', '2845', '7293', '492', '5081', '1528', '192', '北京市', '1155', '上海市', '640', '深圳市', '461', '广州市', '435', '东莞市', '341', '天津市', '312', '成都市', '309', '苏州市', '300', '杭州市', '287', '西安市', '272');
INSERT INTO `t_fans_profile` VALUES ('159', '53d8ce2aa8640bf6498b4575', '3729', '501', '3729', '244', '2415', '959', '111', '北京市', '596', '广州市', '497', '上海市', '424', '深圳市', '317', '成都市', '179', '武汉市', '176', '苏州市', '171', '杭州市', '162', '天津市', '160', '东莞市', '155');
INSERT INTO `t_fans_profile` VALUES ('160', '53b6f3c5ebeddb9c6e8b4567', '658', '560', '658', '13', '92', '548', '5', '北京市', '24', '广州市', '12', '西安市', '7', '泉州市', '6', '武汉市', '6', '东莞市', '6', '深圳市', '6', '唐山市', '6', '重庆市', '5', '济南市', '5');
INSERT INTO `t_fans_profile` VALUES ('161', '527b5ef17f3494f730d2d77c', '10479', '1385', '10479', '595', '6756', '2807', '321', '北京市', '2216', '上海市', '1317', '广州市', '840', '深圳市', '736', '天津市', '619', '成都市', '599', '苏州市', '544', '西安市', '521', '杭州市', '502', '武汉市', '491');
INSERT INTO `t_fans_profile` VALUES ('162', '52834fab504a1393538b45e9', '1509', '250', '1509', '93', '927', '436', '53', '北京市', '198', '上海市', '156', '无锡市', '154', '深圳市', '94', '苏州市', '93', '广州市', '91', '成都市', '71', '杭州市', '63', '常州市', '63', '西安市', '54');
INSERT INTO `t_fans_profile` VALUES ('163', '51d65d3c8034943b275ac68d', '798', '166', '798', '57', '520', '197', '24', '哈尔滨市', '116', '北京市', '113', '上海市', '66', '深圳市', '59', '广州市', '44', '天津市', '36', '苏州市', '29', '武汉市', '26', '杭州市', '25', '成都市', '25');
INSERT INTO `t_fans_profile` VALUES ('164', '551c5f64a5640bbf178b458e', '14689', '2173', '14689', '1088', '9999', '3265', '337', '北京市', '2041', '上海市', '1615', '广州市', '1233', '深圳市', '1103', '成都市', '771', '杭州市', '608', '苏州市', '573', '武汉市', '572', '重庆市', '550', '天津市', '518');
INSERT INTO `t_fans_profile` VALUES ('165', '5277eef85e7feb2c448b4569', '9661', '1006', '9661', '602', '6337', '2453', '269', '北京市', '1827', '上海市', '1071', '广州市', '937', '深圳市', '757', '成都市', '595', '杭州市', '499', '天津市', '451', '西安市', '442', '武汉市', '421', '重庆市', '401');
INSERT INTO `t_fans_profile` VALUES ('166', '52c55b16ebeddbde0e8b46af', '15081', '1766', '15081', '918', '10093', '3687', '383', '北京市', '2448', '上海市', '1693', '广州市', '1207', '深圳市', '1164', '成都市', '801', '苏州市', '695', '天津市', '681', '杭州市', '641', '武汉市', '608', '西安市', '606');
INSERT INTO `t_fans_profile` VALUES ('167', '508e3aa38134941b2400001a', '13440', '1919', '13440', '748', '8495', '3810', '387', '北京市', '3185', '上海市', '1524', '广州市', '1017', '深圳市', '994', '天津市', '749', '成都市', '677', '杭州市', '676', '西安市', '640', '苏州市', '605', '哈尔滨市', '583');
INSERT INTO `t_fans_profile` VALUES ('168', '5409c6c6a8640b0f6a8b45a7', '11524', '1360', '11524', '816', '7870', '2536', '302', '北京市', '1952', '上海市', '1285', '广州市', '910', '深圳市', '898', '成都市', '616', '武汉市', '525', '天津市', '518', '杭州市', '488', '苏州市', '471', '西安市', '466');
INSERT INTO `t_fans_profile` VALUES ('169', '5152f0e07d34947149000093', '1640', '204', '1640', '104', '1039', '454', '43', '西安市', '447', '北京市', '196', '上海市', '131', '广州市', '89', '深圳市', '87', '天津市', '55', '成都市', '53', '杭州市', '48', '佛山市', '48', '苏州市', '46');
INSERT INTO `t_fans_profile` VALUES ('170', '5062bab7803494d8500000c7', '30351', '4561', '30351', '1746', '19881', '7908', '816', '北京市', '5919', '上海市', '3784', '广州市', '2641', '深圳市', '2356', '杭州市', '1910', '成都市', '1773', '天津市', '1734', '苏州市', '1548', '西安市', '1534', '武汉市', '1366');
INSERT INTO `t_fans_profile` VALUES ('171', '54f911afa8640b6f1d8b45a1', '42', '2', '42', '1', '24', '14', '3', '上海市', '6', '广州市', '6', '北京市', '5', '天津市', '4', '成都市', '3', '合肥市', '3', '长沙市', '3', '福州市', '2', '本溪市', '2', '鞍山市', '2');
INSERT INTO `t_fans_profile` VALUES ('172', '50cf020e813494734b00005a', '397', '83', '397', '21', '273', '90', '13', '广州市', '40', '北京市', '38', '上海市', '31', '深圳市', '27', '天津市', '12', '东莞市', '11', '佛山市', '11', '重庆市', '10', '泉州市', '10', '西安市', '10');
INSERT INTO `t_fans_profile` VALUES ('173', '529209efc58a87f14530e526', '39057', '5526', '39057', '2569', '26998', '8621', '869', '北京市', '8263', '上海市', '5133', '广州市', '3778', '深圳市', '3214', '成都市', '2672', '天津市', '2402', '西安市', '2031', '杭州市', '2028', '武汉市', '1993', '苏州市', '1973');
INSERT INTO `t_fans_profile` VALUES ('174', '52e951ff77d3cc9c5f8b45a1', '1404', '778', '1404', '183', '994', '198', '29', '北京市', '289', '上海市', '104', '广州市', '78', '天津市', '74', '深圳市', '52', '西安市', '50', '杭州市', '48', '苏州市', '43', '成都市', '40', '石家庄市', '38');
INSERT INTO `t_fans_profile` VALUES ('175', '52883cc7803494ea387a7200', '13268', '1485', '13268', '924', '9089', '2953', '302', '北京市', '2689', '上海市', '1661', '广州市', '1257', '深圳市', '1056', '成都市', '816', '天津市', '784', '杭州市', '707', '苏州市', '688', '武汉市', '667', '西安市', '631');
INSERT INTO `t_fans_profile` VALUES ('176', '53a9b0899d67d90b708b457c', '2421', '692', '2421', '167', '1660', '528', '66', '北京市', '343', '西安市', '250', '上海市', '201', '广州市', '150', '深圳市', '127', '成都市', '78', '天津市', '77', '苏州市', '66', '武汉市', '57', '郑州市', '54');
INSERT INTO `t_fans_profile` VALUES ('177', '537373f2ebeddb05368b45ca', '1350', '294', '1350', '145', '857', '303', '45', '泉州市', '195', '北京市', '192', '广州市', '96', '深圳市', '88', '上海市', '86', '厦门市', '65', '东莞市', '58', '武汉市', '55', '福州市', '49', '苏州市', '48');
INSERT INTO `t_fans_profile` VALUES ('178', '5332c78bebeddbe5538b4637', '2432', '394', '2432', '162', '1645', '553', '72', '北京市', '362', '上海市', '334', '广州市', '223', '深圳市', '160', '天津市', '110', '苏州市', '94', '杭州市', '88', '成都市', '86', '东莞市', '83', '南京市', '82');
INSERT INTO `t_fans_profile` VALUES ('179', '525370e7813494420a0eb1bc', '289', '35', '289', '23', '166', '94', '6', '北京市', '39', '广州市', '20', '上海市', '18', '深圳市', '17', '苏州市', '13', '西安市', '12', '泉州市', '10', '东莞市', '10', '天津市', '9', '福州市', '9');
INSERT INTO `t_fans_profile` VALUES ('180', '51a0c6b25e8e87b642000000', '191', '24', '191', '12', '107', '65', '7', '北京市', '57', '天津市', '17', '廊坊市', '15', '深圳市', '9', '广州市', '9', '上海市', '9', '西安市', '8', '沈阳市', '8', '东莞市', '7', '长沙市', '7');
INSERT INTO `t_fans_profile` VALUES ('184', '5346a396ebeddbff068b45f2', '2102', '961', '2102', '189', '1495', '372', '46', '北京市', '350', '上海市', '160', '深圳市', '102', '广州市', '99', '天津市', '91', '苏州市', '85', '杭州市', '84', '成都市', '70', '郑州市', '70', '西安市', '66');
INSERT INTO `t_fans_profile` VALUES ('185', '50cc9130803494251900000f', '21755', '3889', '21755', '1383', '14677', '5151', '544', '北京市', '4603', '上海市', '2656', '广州市', '2005', '深圳市', '1829', '成都市', '1228', '天津市', '1207', '杭州市', '1134', '苏州市', '1115', '西安市', '1003', '武汉市', '993');
INSERT INTO `t_fans_profile` VALUES ('186', '5624fe2746b7b0e4b8d3975d', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0');
INSERT INTO `t_fans_profile` VALUES ('187', '51d4684580349435273a202b', '13587', '1877', '13587', '891', '8963', '3375', '358', '北京市', '2722', '上海市', '1857', '广州市', '1228', '深圳市', '1157', '成都市', '837', '杭州市', '771', '南京市', '739', '苏州市', '685', '西安市', '679', '武汉市', '667');
INSERT INTO `t_fans_profile` VALUES ('190', '532493b6504a139c738b4567', '21018', '2134', '21018', '1336', '14156', '5010', '516', '北京市', '4108', '上海市', '2314', '广州市', '1669', '深圳市', '1516', '天津市', '1183', '成都市', '1131', '苏州市', '961', '西安市', '960', '杭州市', '928', '武汉市', '877');
INSERT INTO `t_fans_profile` VALUES ('191', '53acc407ebeddbae388b45a9', '7109', '1214', '7109', '434', '4526', '1964', '185', '北京市', '1262', '上海市', '789', '深圳市', '544', '广州市', '534', '苏州市', '378', '成都市', '378', '杭州市', '340', '天津市', '331', '福州市', '329', '西安市', '328');
INSERT INTO `t_fans_profile` VALUES ('192', '50eda2fe7d34948e2f000036', '9090', '1539', '9090', '586', '6132', '2097', '275', '北京市', '1786', '上海市', '923', '深圳市', '685', '广州市', '630', '苏州市', '449', '成都市', '423', '杭州市', '406', '武汉市', '403', '西安市', '403', '天津市', '376');
INSERT INTO `t_fans_profile` VALUES ('193', '545c9754a5640b20538b4593', '3823', '403', '3823', '257', '2586', '892', '88', '北京市', '716', '上海市', '433', '广州市', '389', '深圳市', '330', '成都市', '218', '杭州市', '207', '西安市', '199', '苏州市', '197', '武汉市', '192', '重庆市', '183');
INSERT INTO `t_fans_profile` VALUES ('194', '522ea3399f6c00df0d560547', '5412', '583', '5412', '334', '3671', '1269', '138', '北京市', '1033', '上海市', '760', '广州市', '597', '深圳市', '530', '武汉市', '309', '天津市', '293', '苏州市', '281', '杭州市', '278', '成都市', '270', '南京市', '231');
INSERT INTO `t_fans_profile` VALUES ('195', '551e388ba20f73c3628b4568', '5077', '619', '5077', '430', '3562', '964', '121', '北京市', '912', '上海市', '673', '广州市', '447', '深圳市', '361', '成都市', '266', '杭州市', '243', '天津市', '240', '西安市', '225', '武汉市', '212', '苏州市', '211');
INSERT INTO `t_fans_profile` VALUES ('196', '525370e7813494420a0eb1bc', '289', '35', '289', '23', '166', '94', '6', '北京市', '39', '广州市', '20', '上海市', '18', '深圳市', '17', '苏州市', '13', '西安市', '12', '泉州市', '10', '东莞市', '10', '天津市', '9', '福州市', '9');
INSERT INTO `t_fans_profile` VALUES ('197', '569fbaf60c9cb0e4de8c9c15', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0');
INSERT INTO `t_fans_profile` VALUES ('198', '560cf03ac72a39f8058b4569', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0');
INSERT INTO `t_fans_profile` VALUES ('199', '552c977ea20f73d2738b458f', '918', '214', '918', '64', '608', '219', '27', '北京市', '99', '上海市', '66', '深圳市', '55', '广州市', '53', '成都市', '28', '天津市', '24', '佛山市', '22', '苏州市', '20', '东莞市', '19', '武汉市', '17');
INSERT INTO `t_fans_profile` VALUES ('200', '51c6c7c75c8e87356d000033', '2431', '300', '2431', '149', '1626', '586', '70', '北京市', '367', '上海市', '243', '杭州市', '231', '广州市', '201', '深圳市', '188', '成都市', '107', '武汉市', '87', '天津市', '87', '西安市', '84', '苏州市', '84');
INSERT INTO `t_fans_profile` VALUES ('201', '52cc251878d3ccad288b45ba', '34', '7', '34', '2', '23', '9', '0', '荆州市', '9', '市', '6', '湖北省直辖县级行政单位', '5', '荆门市', '5', '广州市', '4', '武汉市', '3', '福州市', '2', '东莞市', '2', '台州市', '2', '岳阳市', '2');
INSERT INTO `t_fans_profile` VALUES ('202', '52db845d77d3ccbb518b4580', '17364', '2172', '17364', '1026', '11476', '4419', '443', '北京市', '3618', '上海市', '2235', '广州市', '1663', '深圳市', '1514', '成都市', '1018', '苏州市', '935', '天津市', '923', '杭州市', '916', '西安市', '842', '武汉市', '824');
INSERT INTO `t_fans_profile` VALUES ('203', '546c58f7a8640be32f8b457d', '18352', '1735', '18352', '1189', '12316', '4402', '445', '北京市', '3822', '上海市', '2748', '广州市', '2303', '深圳市', '1917', '成都市', '1347', '天津市', '1289', '杭州市', '1128', '武汉市', '1059', '苏州市', '1031', '西安市', '951');

-- ----------------------------
-- Records for `t_migrations`
-- ----------------------------
INSERT INTO `t_migrations` VALUES ('2016_03_20_112458_create_t_celebrity_table', '1');
INSERT INTO `t_migrations` VALUES ('2016_03_20_112458_create_t_fans_profile_table', '1');
INSERT INTO `t_migrations` VALUES ('2016_03_20_112458_create_t_picture_table', '1');
INSERT INTO `t_migrations` VALUES ('2016_03_20_112459_add_foreign_keys_to_t_fans_profile_table', '1');
INSERT INTO `t_migrations` VALUES ('2014_10_12_000000_create_users_table', '2');
INSERT INTO `t_migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '2');
INSERT INTO `t_migrations` VALUES ('2016_03_05_092241_create_tasks_table', '2');
INSERT INTO `t_migrations` VALUES ('2016_04_07_082954_create_designers_table', '3');
INSERT INTO `t_migrations` VALUES ('2016_04_07_083026_create_factories_table', '3');
INSERT INTO `t_migrations` VALUES ('2016_04_07_083043_create_brands_table', '3');
INSERT INTO `t_migrations` VALUES ('2016_04_12_141624_create_CMSUsers_table', '4');
INSERT INTO `t_migrations` VALUES ('2016_04_12_161241_create_users_table', '5');
INSERT INTO `t_migrations` VALUES ('2016_04_15_114134_create_stalls_table', '6');

-- ----------------------------
-- Records for `t_picture`
-- ----------------------------
INSERT INTO `t_picture` VALUES ('6', '56d7c2ba0cf2bf3844e81ddc.jpg', 'http://aliv.weipai.cn/honglema/56d7c2ba0cf2bf3844e81ddc.jpg', '1456980713');
INSERT INTO `t_picture` VALUES ('6', '56d7c2ca0cf2bf3844e81de2.jpg', 'http://aliv.weipai.cn/honglema/56d7c2ca0cf2bf3844e81de2.jpg', '1456980713');
INSERT INTO `t_picture` VALUES ('6', '56d7c2e20cf2bf3844e81e05.jpg', 'http://aliv.weipai.cn/honglema/56d7c2e20cf2bf3844e81e05.jpg', '1456980713');
INSERT INTO `t_picture` VALUES ('7', '56d7c2460cf29739e653ce3c.jpeg', 'http://aliv.weipai.cn/honglema/56d7c2460cf29739e653ce3c.jpeg', '1456980739');
INSERT INTO `t_picture` VALUES ('7', '56d7c2ce0cf29739e653ceab.jpeg', 'http://aliv.weipai.cn/honglema/56d7c2ce0cf29739e653ceab.jpeg', '1456980739');
INSERT INTO `t_picture` VALUES ('7', '56d7c2fd0cf29739e653cecb.jpeg', 'http://aliv.weipai.cn/honglema/56d7c2fd0cf29739e653cecb.jpeg', '1456980739');
INSERT INTO `t_picture` VALUES ('8', '56d7c2910cf2bf3844e81db8.jpg', 'http://aliv.weipai.cn/honglema/56d7c2910cf2bf3844e81db8.jpg', '1456980740');
INSERT INTO `t_picture` VALUES ('8', '56d7c2b60cf2bf3844e81dd8.jpg', 'http://aliv.weipai.cn/honglema/56d7c2b60cf2bf3844e81dd8.jpg', '1456980740');
INSERT INTO `t_picture` VALUES ('8', '56d7c2f30cf2bf3844e81e13.jpg', 'http://aliv.weipai.cn/honglema/56d7c2f30cf2bf3844e81e13.jpg', '1456980740');
INSERT INTO `t_picture` VALUES ('11', '56d837a70cf2bf3844e89d9a.jpeg', 'http://aliv.weipai.cn/honglema/56d837a70cf2bf3844e89d9a.jpeg', '1457010633');
INSERT INTO `t_picture` VALUES ('11', '56d837b50cf2bf3844e89db7.jpeg', 'http://aliv.weipai.cn/honglema/56d837b50cf2bf3844e89db7.jpeg', '1457010633');
INSERT INTO `t_picture` VALUES ('11', '56d837c40cf2bf3844e89db8.jpeg', 'http://aliv.weipai.cn/honglema/56d837c40cf2bf3844e89db8.jpeg', '1457010633');
INSERT INTO `t_picture` VALUES ('12', '56d837d00cf29739e6541603.jpeg', 'http://aliv.weipai.cn/honglema/56d837d00cf29739e6541603.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('12', '56d8380e0cf29739e654161c.jpeg', 'http://aliv.weipai.cn/honglema/56d8380e0cf29739e654161c.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('12', '56d838280cf29739e6541629.jpeg', 'http://aliv.weipai.cn/honglema/56d838280cf29739e6541629.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('13', '56d836980cf2bf3844e89cc3.jpeg', 'http://aliv.weipai.cn/honglema/56d836980cf2bf3844e89cc3.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('13', '56d837430cf2bf3844e89d45.jpeg', 'http://aliv.weipai.cn/honglema/56d837430cf2bf3844e89d45.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('13', '56d838020cf2bf3844e89df3.jpeg', 'http://aliv.weipai.cn/honglema/56d838020cf2bf3844e89df3.jpeg', '1457010813');
INSERT INTO `t_picture` VALUES ('15', '56d838a20cf2bf3844e89e7c.jpg', 'http://aliv.weipai.cn/honglema/56d838a20cf2bf3844e89e7c.jpg', '1457011004');
INSERT INTO `t_picture` VALUES ('15', '56d838c90cf2bf3844e89e8b.jpg', 'http://aliv.weipai.cn/honglema/56d838c90cf2bf3844e89e8b.jpg', '1457011004');
INSERT INTO `t_picture` VALUES ('15', '56d838d50cf2bf3844e89e95.jpg', 'http://aliv.weipai.cn/honglema/56d838d50cf2bf3844e89e95.jpg', '1457011004');
INSERT INTO `t_picture` VALUES ('16', '56d83a010cf2bf3844e89f78.jpeg', 'http://aliv.weipai.cn/honglema/56d83a010cf2bf3844e89f78.jpeg', '1457011331');
INSERT INTO `t_picture` VALUES ('16', '56d83a0a0cf2bf3844e89f81.jpeg', 'http://aliv.weipai.cn/honglema/56d83a0a0cf2bf3844e89f81.jpeg', '1457011331');
INSERT INTO `t_picture` VALUES ('16', '56d83a170cf2bf3844e89f8c.jpeg', 'http://aliv.weipai.cn/honglema/56d83a170cf2bf3844e89f8c.jpeg', '1457011331');
INSERT INTO `t_picture` VALUES ('17', '56d83b0e0cf29739e6541830.jpeg', 'http://aliv.weipai.cn/honglema/56d83b0e0cf29739e6541830.jpeg', '1457011584');
INSERT INTO `t_picture` VALUES ('17', '56d83b160cf29739e6541836.jpeg', 'http://aliv.weipai.cn/honglema/56d83b160cf29739e6541836.jpeg', '1457011584');
INSERT INTO `t_picture` VALUES ('17', '56d83b270cf29739e6541841.jpeg', 'http://aliv.weipai.cn/honglema/56d83b270cf29739e6541841.jpeg', '1457011584');
INSERT INTO `t_picture` VALUES ('18', '56d83ede0cf29739e6541a08.jpeg', 'http://aliv.weipai.cn/honglema/56d83ede0cf29739e6541a08.jpeg', '1457012647');
INSERT INTO `t_picture` VALUES ('18', '56d83eef0cf29739e6541a0d.jpeg', 'http://aliv.weipai.cn/honglema/56d83eef0cf29739e6541a0d.jpeg', '1457012647');
INSERT INTO `t_picture` VALUES ('18', '56d83f150cf29739e6541a1d.jpeg', 'http://aliv.weipai.cn/honglema/56d83f150cf29739e6541a1d.jpeg', '1457012647');
INSERT INTO `t_picture` VALUES ('19', '56d83f310cf2bf3844e8a329.jpg', 'http://aliv.weipai.cn/honglema/56d83f310cf2bf3844e8a329.jpg', '1457012770');
INSERT INTO `t_picture` VALUES ('19', '56d83f460cf2bf3844e8a33e.jpg', 'http://aliv.weipai.cn/honglema/56d83f460cf2bf3844e8a33e.jpg', '1457012770');
INSERT INTO `t_picture` VALUES ('19', '56d83f790cf2bf3844e8a364.jpg', 'http://aliv.weipai.cn/honglema/56d83f790cf2bf3844e8a364.jpg', '1457012770');
INSERT INTO `t_picture` VALUES ('21', '56d83f660cf29739e6541a44.jpeg', 'http://aliv.weipai.cn/honglema/56d83f660cf29739e6541a44.jpeg', '1457013085');
INSERT INTO `t_picture` VALUES ('21', '56d840490cf29739e6541aab.jpeg', 'http://aliv.weipai.cn/honglema/56d840490cf29739e6541aab.jpeg', '1457013085');
INSERT INTO `t_picture` VALUES ('21', '56d840550cf29739e6541aaf.jpeg', 'http://aliv.weipai.cn/honglema/56d840550cf29739e6541aaf.jpeg', '1457013085');
INSERT INTO `t_picture` VALUES ('22', '56d83f7a0cf2bf3844e8a365.jpeg', 'http://aliv.weipai.cn/honglema/56d83f7a0cf2bf3844e8a365.jpeg', '1457013133');
INSERT INTO `t_picture` VALUES ('22', '56d8403a0cf2bf3844e8a421.jpeg', 'http://aliv.weipai.cn/honglema/56d8403a0cf2bf3844e8a421.jpeg', '1457013133');
INSERT INTO `t_picture` VALUES ('22', '56d8417e0cf2bf3844e8a502.jpeg', 'http://aliv.weipai.cn/honglema/56d8417e0cf2bf3844e8a502.jpeg', '1457013133');
INSERT INTO `t_picture` VALUES ('23', '56d8417c0cf29739e6541b22.jpeg', 'http://aliv.weipai.cn/honglema/56d8417c0cf29739e6541b22.jpeg', '1457013159');
INSERT INTO `t_picture` VALUES ('23', '56d841860cf29739e6541b26.jpeg', 'http://aliv.weipai.cn/honglema/56d841860cf29739e6541b26.jpeg', '1457013159');
INSERT INTO `t_picture` VALUES ('23', '56d841910cf29739e6541b28.jpeg', 'http://aliv.weipai.cn/honglema/56d841910cf29739e6541b28.jpeg', '1457013159');
INSERT INTO `t_picture` VALUES ('27', '56d842af0cf2bf3844e8a5c3.jpeg', 'http://aliv.weipai.cn/honglema/56d842af0cf2bf3844e8a5c3.jpeg', '1457013750');
INSERT INTO `t_picture` VALUES ('27', '56d842bb0cf2bf3844e8a5cc.jpeg', 'http://aliv.weipai.cn/honglema/56d842bb0cf2bf3844e8a5cc.jpeg', '1457013750');
INSERT INTO `t_picture` VALUES ('27', '56d842f20cf2bf3844e8a60b.jpeg', 'http://aliv.weipai.cn/honglema/56d842f20cf2bf3844e8a60b.jpeg', '1457013750');
INSERT INTO `t_picture` VALUES ('28', '56d842f70cf29739e6541bf9.jpg', 'http://aliv.weipai.cn/honglema/56d842f70cf29739e6541bf9.jpg', '1457013754');
INSERT INTO `t_picture` VALUES ('28', '56d843260cf29739e6541c14.jpeg', 'http://aliv.weipai.cn/honglema/56d843260cf29739e6541c14.jpeg', '1457013754');
INSERT INTO `t_picture` VALUES ('28', '56d843d50cf29739e6541c72.jpeg', 'http://aliv.weipai.cn/honglema/56d843d50cf29739e6541c72.jpeg', '1457013754');
INSERT INTO `t_picture` VALUES ('30', '56d842c20cf2bf3844e8a5d3.jpeg', 'http://aliv.weipai.cn/honglema/56d842c20cf2bf3844e8a5d3.jpeg', '1457013769');
INSERT INTO `t_picture` VALUES ('30', '56d842e40cf2bf3844e8a603.jpeg', 'http://aliv.weipai.cn/honglema/56d842e40cf2bf3844e8a603.jpeg', '1457013769');
INSERT INTO `t_picture` VALUES ('30', '56d8432b0cf2bf3844e8a63b.jpeg', 'http://aliv.weipai.cn/honglema/56d8432b0cf2bf3844e8a63b.jpeg', '1457013769');
INSERT INTO `t_picture` VALUES ('31', '56d842bb0cf29739e6541bb5.jpg', 'http://aliv.weipai.cn/honglema/56d842bb0cf29739e6541bb5.jpg', '1457013828');
INSERT INTO `t_picture` VALUES ('31', '56d842ef0cf29739e6541bf5.jpg', 'http://aliv.weipai.cn/honglema/56d842ef0cf29739e6541bf5.jpg', '1457013828');
INSERT INTO `t_picture` VALUES ('31', '56d843570cf29739e6541c2c.jpg', 'http://aliv.weipai.cn/honglema/56d843570cf29739e6541c2c.jpg', '1457013828');
INSERT INTO `t_picture` VALUES ('34', '56d843c50cf2bf3844e8a84a.jpeg', 'http://aliv.weipai.cn/honglema/56d843c50cf2bf3844e8a84a.jpeg', '1457013957');
INSERT INTO `t_picture` VALUES ('34', '56d843d80cf2bf3844e8a867.jpeg', 'http://aliv.weipai.cn/honglema/56d843d80cf2bf3844e8a867.jpeg', '1457013957');
INSERT INTO `t_picture` VALUES ('34', '56d844b90cf2bf3844e8a94b.jpeg', 'http://aliv.weipai.cn/honglema/56d844b90cf2bf3844e8a94b.jpeg', '1457013957');
INSERT INTO `t_picture` VALUES ('35', '56d844750cf2bf3844e8a8f5.jpeg', 'http://aliv.weipai.cn/honglema/56d844750cf2bf3844e8a8f5.jpeg', '1457014078');
INSERT INTO `t_picture` VALUES ('35', '56d844830cf2bf3844e8a907.jpeg', 'http://aliv.weipai.cn/honglema/56d844830cf2bf3844e8a907.jpeg', '1457014078');
INSERT INTO `t_picture` VALUES ('35', '56d8449e0cf2bf3844e8a924.jpeg', 'http://aliv.weipai.cn/honglema/56d8449e0cf2bf3844e8a924.jpeg', '1457014078');
INSERT INTO `t_picture` VALUES ('37', '56d8444a0cf2bf3844e8a8d3.jpeg', 'http://aliv.weipai.cn/honglema/56d8444a0cf2bf3844e8a8d3.jpeg', '1457014235');
INSERT INTO `t_picture` VALUES ('37', '56d844840cf2bf3844e8a908.jpeg', 'http://aliv.weipai.cn/honglema/56d844840cf2bf3844e8a908.jpeg', '1457014235');
INSERT INTO `t_picture` VALUES ('37', '56d844910cf2bf3844e8a91e.png', 'http://aliv.weipai.cn/honglema/56d844910cf2bf3844e8a91e.png', '1457014235');
INSERT INTO `t_picture` VALUES ('42', '56d844df0cf2bf3844e8a966.jpeg', 'http://aliv.weipai.cn/honglema/56d844df0cf2bf3844e8a966.jpeg', '1457014368');
INSERT INTO `t_picture` VALUES ('42', '56d844e70cf2bf3844e8a96c.jpeg', 'http://aliv.weipai.cn/honglema/56d844e70cf2bf3844e8a96c.jpeg', '1457014368');
INSERT INTO `t_picture` VALUES ('42', '56d844ee0cf2bf3844e8a973.jpeg', 'http://aliv.weipai.cn/honglema/56d844ee0cf2bf3844e8a973.jpeg', '1457014368');
INSERT INTO `t_picture` VALUES ('43', '56d845df0cf2bf3844e8aa25.jpeg', 'http://aliv.weipai.cn/honglema/56d845df0cf2bf3844e8aa25.jpeg', '1457014425');
INSERT INTO `t_picture` VALUES ('43', '56d846050cf2bf3844e8aa3e.jpeg', 'http://aliv.weipai.cn/honglema/56d846050cf2bf3844e8aa3e.jpeg', '1457014425');
INSERT INTO `t_picture` VALUES ('43', '56d8461a0cf2bf3844e8aa44.jpeg', 'http://aliv.weipai.cn/honglema/56d8461a0cf2bf3844e8aa44.jpeg', '1457014425');
INSERT INTO `t_picture` VALUES ('44', '56d846550cf2bf3844e8aa6d.jpeg', 'http://aliv.weipai.cn/honglema/56d846550cf2bf3844e8aa6d.jpeg', '1457014694');
INSERT INTO `t_picture` VALUES ('44', '56d8467f0cf2bf3844e8aa97.jpeg', 'http://aliv.weipai.cn/honglema/56d8467f0cf2bf3844e8aa97.jpeg', '1457014694');
INSERT INTO `t_picture` VALUES ('44', '56d846a60cf2bf3844e8aac6.jpeg', 'http://aliv.weipai.cn/honglema/56d846a60cf2bf3844e8aac6.jpeg', '1457014694');
INSERT INTO `t_picture` VALUES ('45', '56d844980cf2bf3844e8a920.jpeg', 'http://aliv.weipai.cn/honglema/56d844980cf2bf3844e8a920.jpeg', '1457014721');
INSERT INTO `t_picture` VALUES ('45', '56d844cb0cf2bf3844e8a95c.png', 'http://aliv.weipai.cn/honglema/56d844cb0cf2bf3844e8a95c.png', '1457014721');
INSERT INTO `t_picture` VALUES ('45', '56d845020cf2bf3844e8a97f.jpeg', 'http://aliv.weipai.cn/honglema/56d845020cf2bf3844e8a97f.jpeg', '1457014721');
INSERT INTO `t_picture` VALUES ('46', '56d847440cf29739e6541e12.jpeg', 'http://aliv.weipai.cn/honglema/56d847440cf29739e6541e12.jpeg', '1457014758');
INSERT INTO `t_picture` VALUES ('46', '56d847510cf29739e6541e18.jpeg', 'http://aliv.weipai.cn/honglema/56d847510cf29739e6541e18.jpeg', '1457014758');
INSERT INTO `t_picture` VALUES ('46', '56d8475e0cf29739e6541e1c.jpeg', 'http://aliv.weipai.cn/honglema/56d8475e0cf29739e6541e1c.jpeg', '1457014758');
INSERT INTO `t_picture` VALUES ('48', '56d848760cf29739e6541ed3.jpeg', 'http://aliv.weipai.cn/honglema/56d848760cf29739e6541ed3.jpeg', '1457014943');
INSERT INTO `t_picture` VALUES ('48', '56d848860cf29739e6541eda.jpeg', 'http://aliv.weipai.cn/honglema/56d848860cf29739e6541eda.jpeg', '1457014943');
INSERT INTO `t_picture` VALUES ('48', '56d8489b0cf29739e6541ee1.jpeg', 'http://aliv.weipai.cn/honglema/56d8489b0cf29739e6541ee1.jpeg', '1457014943');
INSERT INTO `t_picture` VALUES ('51', '56d848440cf2bf3844e8abfc.jpg', 'http://aliv.weipai.cn/honglema/56d848440cf2bf3844e8abfc.jpg', '1457015056');
INSERT INTO `t_picture` VALUES ('51', '56d8487c0cf2bf3844e8ac27.jpg', 'http://aliv.weipai.cn/honglema/56d8487c0cf2bf3844e8ac27.jpg', '1457015056');
INSERT INTO `t_picture` VALUES ('51', '56d848a20cf2bf3844e8ac46.jpg', 'http://aliv.weipai.cn/honglema/56d848a20cf2bf3844e8ac46.jpg', '1457015056');
INSERT INTO `t_picture` VALUES ('52', '56d846460cf2bf3844e8aa64.jpeg', 'http://aliv.weipai.cn/honglema/56d846460cf2bf3844e8aa64.jpeg', '1457015158');
INSERT INTO `t_picture` VALUES ('52', '56d847d60cf2bf3844e8abc3.jpeg', 'http://aliv.weipai.cn/honglema/56d847d60cf2bf3844e8abc3.jpeg', '1457015158');
INSERT INTO `t_picture` VALUES ('52', '56d848aa0cf2bf3844e8ac4d.jpeg', 'http://aliv.weipai.cn/honglema/56d848aa0cf2bf3844e8ac4d.jpeg', '1457015158');
INSERT INTO `t_picture` VALUES ('54', '56d8481c0cf2bf3844e8abdd.jpeg', 'http://aliv.weipai.cn/honglema/56d8481c0cf2bf3844e8abdd.jpeg', '1457015467');
INSERT INTO `t_picture` VALUES ('54', '56d849700cf2bf3844e8ad01.jpeg', 'http://aliv.weipai.cn/honglema/56d849700cf2bf3844e8ad01.jpeg', '1457015467');
INSERT INTO `t_picture` VALUES ('54', '56d849a80cf2bf3844e8ad15.jpeg', 'http://aliv.weipai.cn/honglema/56d849a80cf2bf3844e8ad15.jpeg', '1457015467');
INSERT INTO `t_picture` VALUES ('56', '56d84aa10cf2bf3844e8add2.jpg', 'http://aliv.weipai.cn/honglema/56d84aa10cf2bf3844e8add2.jpg', '1457015586');
INSERT INTO `t_picture` VALUES ('56', '56d84ac00cf2bf3844e8ade2.jpg', 'http://aliv.weipai.cn/honglema/56d84ac00cf2bf3844e8ade2.jpg', '1457015586');
INSERT INTO `t_picture` VALUES ('56', '56d84ad10cf2bf3844e8adf3.jpg', 'http://aliv.weipai.cn/honglema/56d84ad10cf2bf3844e8adf3.jpg', '1457015586');
INSERT INTO `t_picture` VALUES ('59', '56d84ae50cf2bf3844e8ae03.jpeg', 'http://aliv.weipai.cn/honglema/56d84ae50cf2bf3844e8ae03.jpeg', '1457015769');
INSERT INTO `t_picture` VALUES ('59', '56d84afe0cf2bf3844e8ae23.jpeg', 'http://aliv.weipai.cn/honglema/56d84afe0cf2bf3844e8ae23.jpeg', '1457015769');
INSERT INTO `t_picture` VALUES ('59', '56d84b100cf2bf3844e8ae35.jpeg', 'http://aliv.weipai.cn/honglema/56d84b100cf2bf3844e8ae35.jpeg', '1457015769');
INSERT INTO `t_picture` VALUES ('60', '56d84b550cf29739e6542014.jpeg', 'http://aliv.weipai.cn/honglema/56d84b550cf29739e6542014.jpeg', '1457015852');
INSERT INTO `t_picture` VALUES ('60', '56d84b930cf29739e6542021.jpeg', 'http://aliv.weipai.cn/honglema/56d84b930cf29739e6542021.jpeg', '1457015852');
INSERT INTO `t_picture` VALUES ('60', '56d84bd00cf29739e6542037.jpeg', 'http://aliv.weipai.cn/honglema/56d84bd00cf29739e6542037.jpeg', '1457015852');
INSERT INTO `t_picture` VALUES ('61', '56d84a500cf2bf3844e8ad87.jpeg', 'http://aliv.weipai.cn/honglema/56d84a500cf2bf3844e8ad87.jpeg', '1457015952');
INSERT INTO `t_picture` VALUES ('61', '56d84afd0cf2bf3844e8ae21.jpeg', 'http://aliv.weipai.cn/honglema/56d84afd0cf2bf3844e8ae21.jpeg', '1457015952');
INSERT INTO `t_picture` VALUES ('61', '56d84b3d0cf2bf3844e8ae5a.jpeg', 'http://aliv.weipai.cn/honglema/56d84b3d0cf2bf3844e8ae5a.jpeg', '1457015952');
INSERT INTO `t_picture` VALUES ('65', '56d84cf40cf2bf3844e8b12b.jpeg', 'http://aliv.weipai.cn/honglema/56d84cf40cf2bf3844e8b12b.jpeg', '1457016264');
INSERT INTO `t_picture` VALUES ('65', '56d84d080cf2bf3844e8b139.jpg', 'http://aliv.weipai.cn/honglema/56d84d080cf2bf3844e8b139.jpg', '1457016264');
INSERT INTO `t_picture` VALUES ('65', '56d84d2c0cf2bf3844e8b14e.jpeg', 'http://aliv.weipai.cn/honglema/56d84d2c0cf2bf3844e8b14e.jpeg', '1457016264');
INSERT INTO `t_picture` VALUES ('67', '56d8496f0cf29739e6541f41.jpg', 'http://aliv.weipai.cn/honglema/56d8496f0cf29739e6541f41.jpg', '1457016461');
INSERT INTO `t_picture` VALUES ('67', '56d84c620cf29739e6542072.jpg', 'http://aliv.weipai.cn/honglema/56d84c620cf29739e6542072.jpg', '1457016461');
INSERT INTO `t_picture` VALUES ('67', '56d84e800cf29739e654214b.jpg', 'http://aliv.weipai.cn/honglema/56d84e800cf29739e654214b.jpg', '1457016461');
INSERT INTO `t_picture` VALUES ('68', '56d84d060cf2bf3844e8b138.jpeg', 'http://aliv.weipai.cn/honglema/56d84d060cf2bf3844e8b138.jpeg', '1457016476');
INSERT INTO `t_picture` VALUES ('68', '56d84d360cf2bf3844e8b159.jpeg', 'http://aliv.weipai.cn/honglema/56d84d360cf2bf3844e8b159.jpeg', '1457016476');
INSERT INTO `t_picture` VALUES ('68', '56d84d630cf2bf3844e8b171.jpeg', 'http://aliv.weipai.cn/honglema/56d84d630cf2bf3844e8b171.jpeg', '1457016476');
INSERT INTO `t_picture` VALUES ('69', '56d84d2e0cf2bf3844e8b14f.jpeg', 'http://aliv.weipai.cn/honglema/56d84d2e0cf2bf3844e8b14f.jpeg', '1457016482');
INSERT INTO `t_picture` VALUES ('69', '56d84d500cf2bf3844e8b169.jpeg', 'http://aliv.weipai.cn/honglema/56d84d500cf2bf3844e8b169.jpeg', '1457016482');
INSERT INTO `t_picture` VALUES ('69', '56d84db30cf2bf3844e8b1a9.jpeg', 'http://aliv.weipai.cn/honglema/56d84db30cf2bf3844e8b1a9.jpeg', '1457016482');
INSERT INTO `t_picture` VALUES ('70', '56d84dca0cf2bf3844e8b1b4.jpeg', 'http://aliv.weipai.cn/honglema/56d84dca0cf2bf3844e8b1b4.jpeg', '1457016571');
INSERT INTO `t_picture` VALUES ('70', '56d84df60cf2bf3844e8b1cc.jpeg', 'http://aliv.weipai.cn/honglema/56d84df60cf2bf3844e8b1cc.jpeg', '1457016571');
INSERT INTO `t_picture` VALUES ('70', '56d84e3b0cf2bf3844e8b2a9.jpeg', 'http://aliv.weipai.cn/honglema/56d84e3b0cf2bf3844e8b2a9.jpeg', '1457016571');
INSERT INTO `t_picture` VALUES ('74', '56d84ea60cf2bf3844e8b2e2.jpeg', 'http://aliv.weipai.cn/honglema/56d84ea60cf2bf3844e8b2e2.jpeg', '1457016886');
INSERT INTO `t_picture` VALUES ('74', '56d84f2c0cf2bf3844e8b34a.jpeg', 'http://aliv.weipai.cn/honglema/56d84f2c0cf2bf3844e8b34a.jpeg', '1457016886');
INSERT INTO `t_picture` VALUES ('74', '56d84f360cf2bf3844e8b351.jpeg', 'http://aliv.weipai.cn/honglema/56d84f360cf2bf3844e8b351.jpeg', '1457016886');
INSERT INTO `t_picture` VALUES ('75', '56d84ee80cf2bf3844e8b306.jpg', 'http://aliv.weipai.cn/honglema/56d84ee80cf2bf3844e8b306.jpg', '1457016938');
INSERT INTO `t_picture` VALUES ('75', '56d84efc0cf2bf3844e8b312.jpg', 'http://aliv.weipai.cn/honglema/56d84efc0cf2bf3844e8b312.jpg', '1457016938');
INSERT INTO `t_picture` VALUES ('75', '56d84f4c0cf2bf3844e8b360.jpg', 'http://aliv.weipai.cn/honglema/56d84f4c0cf2bf3844e8b360.jpg', '1457016938');
INSERT INTO `t_picture` VALUES ('76', '56d850210cf29739e6542209.jpg', 'http://aliv.weipai.cn/honglema/56d850210cf29739e6542209.jpg', '1457017141');
INSERT INTO `t_picture` VALUES ('76', '56d850500cf29739e6542217.jpg', 'http://aliv.weipai.cn/honglema/56d850500cf29739e6542217.jpg', '1457017141');
INSERT INTO `t_picture` VALUES ('76', '56d850a50cf29739e654222e.jpg', 'http://aliv.weipai.cn/honglema/56d850a50cf29739e654222e.jpg', '1457017141');
INSERT INTO `t_picture` VALUES ('77', '56d850560cf2bf3844e8b3f4.jpeg', 'http://aliv.weipai.cn/honglema/56d850560cf2bf3844e8b3f4.jpeg', '1457017165');
INSERT INTO `t_picture` VALUES ('77', '56d850680cf2bf3844e8b3fd.jpeg', 'http://aliv.weipai.cn/honglema/56d850680cf2bf3844e8b3fd.jpeg', '1457017165');
INSERT INTO `t_picture` VALUES ('77', '56d851360cf2bf3844e8b468.jpeg', 'http://aliv.weipai.cn/honglema/56d851360cf2bf3844e8b468.jpeg', '1457017165');
INSERT INTO `t_picture` VALUES ('79', '56d84fef0cf2bf3844e8b3d0.jpeg', 'http://aliv.weipai.cn/honglema/56d84fef0cf2bf3844e8b3d0.jpeg', '1457017250');
INSERT INTO `t_picture` VALUES ('79', '56d850390cf2bf3844e8b3ed.jpeg', 'http://aliv.weipai.cn/honglema/56d850390cf2bf3844e8b3ed.jpeg', '1457017250');
INSERT INTO `t_picture` VALUES ('79', '56d8505b0cf2bf3844e8b3f7.jpeg', 'http://aliv.weipai.cn/honglema/56d8505b0cf2bf3844e8b3f7.jpeg', '1457017250');
INSERT INTO `t_picture` VALUES ('82', '56d856510cf2bf3844e8b824.jpeg', 'http://aliv.weipai.cn/honglema/56d856510cf2bf3844e8b824.jpeg', '1457018722');
INSERT INTO `t_picture` VALUES ('82', '56d856710cf2bf3844e8b834.jpeg', 'http://aliv.weipai.cn/honglema/56d856710cf2bf3844e8b834.jpeg', '1457018722');
INSERT INTO `t_picture` VALUES ('82', '56d856900cf2bf3844e8b843.jpeg', 'http://aliv.weipai.cn/honglema/56d856900cf2bf3844e8b843.jpeg', '1457018722');
INSERT INTO `t_picture` VALUES ('85', '56d8588e0cf2bf3844e8b93d.jpeg', 'http://aliv.weipai.cn/honglema/56d8588e0cf2bf3844e8b93d.jpeg', '1457019540');
INSERT INTO `t_picture` VALUES ('85', '56d858b20cf2bf3844e8b94f.jpeg', 'http://aliv.weipai.cn/honglema/56d858b20cf2bf3844e8b94f.jpeg', '1457019540');
INSERT INTO `t_picture` VALUES ('85', '56d858e00cf2bf3844e8b966.jpeg', 'http://aliv.weipai.cn/honglema/56d858e00cf2bf3844e8b966.jpeg', '1457019540');
INSERT INTO `t_picture` VALUES ('86', '56d858090cf2bf3844e8b90c.jpeg', 'http://aliv.weipai.cn/honglema/56d858090cf2bf3844e8b90c.jpeg', '1457019602');
INSERT INTO `t_picture` VALUES ('86', '56d8584a0cf2bf3844e8b92b.jpeg', 'http://aliv.weipai.cn/honglema/56d8584a0cf2bf3844e8b92b.jpeg', '1457019602');
INSERT INTO `t_picture` VALUES ('86', '56d85a3a0cf2bf3844e8b9f3.jpeg', 'http://aliv.weipai.cn/honglema/56d85a3a0cf2bf3844e8b9f3.jpeg', '1457019602');
INSERT INTO `t_picture` VALUES ('89', '56d862040cf2bf3844e8bd8e.jpeg', 'http://aliv.weipai.cn/honglema/56d862040cf2bf3844e8bd8e.jpeg', '1457021623');
INSERT INTO `t_picture` VALUES ('89', '56d862340cf2bf3844e8bdc0.jpg', 'http://aliv.weipai.cn/honglema/56d862340cf2bf3844e8bdc0.jpg', '1457021623');
INSERT INTO `t_picture` VALUES ('89', '56d862570cf2bf3844e8bddf.jpg', 'http://aliv.weipai.cn/honglema/56d862570cf2bf3844e8bddf.jpg', '1457021623');
INSERT INTO `t_picture` VALUES ('90', '56d861e00cf2bf3844e8bd70.jpg', 'http://aliv.weipai.cn/honglema/56d861e00cf2bf3844e8bd70.jpg', '1457021760');
INSERT INTO `t_picture` VALUES ('90', '56d861fc0cf2bf3844e8bd88.jpg', 'http://aliv.weipai.cn/honglema/56d861fc0cf2bf3844e8bd88.jpg', '1457021760');
INSERT INTO `t_picture` VALUES ('90', '56d862160cf2bf3844e8bda2.jpg', 'http://aliv.weipai.cn/honglema/56d862160cf2bf3844e8bda2.jpg', '1457021760');
INSERT INTO `t_picture` VALUES ('91', '56d8649d0cf2bf3844e8bef5.jpeg', 'http://aliv.weipai.cn/honglema/56d8649d0cf2bf3844e8bef5.jpeg', '1457022204');
INSERT INTO `t_picture` VALUES ('91', '56d864b70cf2bf3844e8bf01.jpeg', 'http://aliv.weipai.cn/honglema/56d864b70cf2bf3844e8bf01.jpeg', '1457022204');
INSERT INTO `t_picture` VALUES ('91', '56d864f30cf2bf3844e8bf15.jpeg', 'http://aliv.weipai.cn/honglema/56d864f30cf2bf3844e8bf15.jpeg', '1457022204');
INSERT INTO `t_picture` VALUES ('93', '56d8647b0cf29739e6542935.jpeg', 'http://aliv.weipai.cn/honglema/56d8647b0cf29739e6542935.jpeg', '1457022400');
INSERT INTO `t_picture` VALUES ('93', '56d8649a0cf29739e654293a.jpeg', 'http://aliv.weipai.cn/honglema/56d8649a0cf29739e654293a.jpeg', '1457022400');
INSERT INTO `t_picture` VALUES ('93', '56d864af0cf29739e6542940.jpeg', 'http://aliv.weipai.cn/honglema/56d864af0cf29739e6542940.jpeg', '1457022400');
INSERT INTO `t_picture` VALUES ('96', '56d865d10cf2bf3844e8bf43.jpeg', 'http://aliv.weipai.cn/honglema/56d865d10cf2bf3844e8bf43.jpeg', '1457022627');
INSERT INTO `t_picture` VALUES ('96', '56d865e90cf2bf3844e8bf50.jpeg', 'http://aliv.weipai.cn/honglema/56d865e90cf2bf3844e8bf50.jpeg', '1457022627');
INSERT INTO `t_picture` VALUES ('96', '56d866170cf2bf3844e8bf60.jpeg', 'http://aliv.weipai.cn/honglema/56d866170cf2bf3844e8bf60.jpeg', '1457022627');
INSERT INTO `t_picture` VALUES ('98', '56d8680b0cf29739e65429e5.jpeg', 'http://aliv.weipai.cn/honglema/56d8680b0cf29739e65429e5.jpeg', '1457023010');
INSERT INTO `t_picture` VALUES ('98', '56d868150cf29739e65429e8.jpeg', 'http://aliv.weipai.cn/honglema/56d868150cf29739e65429e8.jpeg', '1457023010');
INSERT INTO `t_picture` VALUES ('98', '56d8681f0cf29739e65429ea.jpeg', 'http://aliv.weipai.cn/honglema/56d8681f0cf29739e65429ea.jpeg', '1457023010');
INSERT INTO `t_picture` VALUES ('99', '56d86b390cf29739e6542a3b.jpg', 'http://aliv.weipai.cn/honglema/56d86b390cf29739e6542a3b.jpg', '1457023828');
INSERT INTO `t_picture` VALUES ('99', '56d86b450cf29739e6542a3c.jpg', 'http://aliv.weipai.cn/honglema/56d86b450cf29739e6542a3c.jpg', '1457023828');
INSERT INTO `t_picture` VALUES ('99', '56d86b500cf29739e6542a3d.jpg', 'http://aliv.weipai.cn/honglema/56d86b500cf29739e6542a3d.jpg', '1457023828');
INSERT INTO `t_picture` VALUES ('100', '56d86bb60cf2bf3844e8c4ac.jpg', 'http://aliv.weipai.cn/honglema/56d86bb60cf2bf3844e8c4ac.jpg', '1457024026');
INSERT INTO `t_picture` VALUES ('100', '56d86bc30cf2bf3844e8c4b2.jpg', 'http://aliv.weipai.cn/honglema/56d86bc30cf2bf3844e8c4b2.jpg', '1457024026');
INSERT INTO `t_picture` VALUES ('100', '56d86bda0cf2bf3844e8c4b4.jpg', 'http://aliv.weipai.cn/honglema/56d86bda0cf2bf3844e8c4b4.jpg', '1457024026');
INSERT INTO `t_picture` VALUES ('103', '56d8709a0cf29739e6542a92.jpeg', 'http://aliv.weipai.cn/honglema/56d8709a0cf29739e6542a92.jpeg', '1457026010');
INSERT INTO `t_picture` VALUES ('103', '56d870e10cf29739e6542ac9.jpeg', 'http://aliv.weipai.cn/honglema/56d870e10cf29739e6542ac9.jpeg', '1457026010');
INSERT INTO `t_picture` VALUES ('103', '56d871dc0cf29739e6542adc.jpeg', 'http://aliv.weipai.cn/honglema/56d871dc0cf29739e6542adc.jpeg', '1457026010');
INSERT INTO `t_picture` VALUES ('106', '56d874c00cf29739e6542b17.jpeg', 'http://aliv.weipai.cn/honglema/56d874c00cf29739e6542b17.jpeg', '1457026459');
INSERT INTO `t_picture` VALUES ('106', '56d874cc0cf29739e6542b18.jpeg', 'http://aliv.weipai.cn/honglema/56d874cc0cf29739e6542b18.jpeg', '1457026459');
INSERT INTO `t_picture` VALUES ('106', '56d874d70cf29739e6542b19.jpeg', 'http://aliv.weipai.cn/honglema/56d874d70cf29739e6542b19.jpeg', '1457026459');
INSERT INTO `t_picture` VALUES ('107', '56d8748f0cf2bf3844e8c5c2.jpeg', 'http://aliv.weipai.cn/honglema/56d8748f0cf2bf3844e8c5c2.jpeg', '1457026602');
INSERT INTO `t_picture` VALUES ('107', '56d8759b0cf2bf3844e8c5d8.jpeg', 'http://aliv.weipai.cn/honglema/56d8759b0cf2bf3844e8c5d8.jpeg', '1457026602');
INSERT INTO `t_picture` VALUES ('107', '56d875dc0cf2bf3844e8c5de.jpeg', 'http://aliv.weipai.cn/honglema/56d875dc0cf2bf3844e8c5de.jpeg', '1457026602');
INSERT INTO `t_picture` VALUES ('108', '56d8762d0cf2bf3844e8c5ea.jpg', 'http://aliv.weipai.cn/honglema/56d8762d0cf2bf3844e8c5ea.jpg', '1457026955');
INSERT INTO `t_picture` VALUES ('108', '56d876410cf2bf3844e8c5eb.jpg', 'http://aliv.weipai.cn/honglema/56d876410cf2bf3844e8c5eb.jpg', '1457026955');
INSERT INTO `t_picture` VALUES ('108', '56d8765e0cf2bf3844e8c5ef.jpg', 'http://aliv.weipai.cn/honglema/56d8765e0cf2bf3844e8c5ef.jpg', '1457026955');
INSERT INTO `t_picture` VALUES ('109', '56d877060cf2bf3844e8c5fa.jpeg', 'http://aliv.weipai.cn/honglema/56d877060cf2bf3844e8c5fa.jpeg', '1457027025');
INSERT INTO `t_picture` VALUES ('109', '56d877300cf2bf3844e8c5fe.jpeg', 'http://aliv.weipai.cn/honglema/56d877300cf2bf3844e8c5fe.jpeg', '1457027025');
INSERT INTO `t_picture` VALUES ('109', '56d877590cf2bf3844e8c601.jpeg', 'http://aliv.weipai.cn/honglema/56d877590cf2bf3844e8c601.jpeg', '1457027025');
INSERT INTO `t_picture` VALUES ('110', '56d876960cf29739e6542b3c.jpeg', 'http://aliv.weipai.cn/honglema/56d876960cf29739e6542b3c.jpeg', '1457027042');
INSERT INTO `t_picture` VALUES ('110', '56d876c80cf29739e6542b3f.jpeg', 'http://aliv.weipai.cn/honglema/56d876c80cf29739e6542b3f.jpeg', '1457027042');
INSERT INTO `t_picture` VALUES ('110', '56d876e70cf29739e6542b41.jpeg', 'http://aliv.weipai.cn/honglema/56d876e70cf29739e6542b41.jpeg', '1457027042');
INSERT INTO `t_picture` VALUES ('111', '56d878ef0cf2bf3844e8c624.jpeg', 'http://aliv.weipai.cn/honglema/56d878ef0cf2bf3844e8c624.jpeg', '1457027354');
INSERT INTO `t_picture` VALUES ('111', '56d878fa0cf2bf3844e8c625.jpeg', 'http://aliv.weipai.cn/honglema/56d878fa0cf2bf3844e8c625.jpeg', '1457027354');
INSERT INTO `t_picture` VALUES ('111', '56d879160cf2bf3844e8c62c.jpeg', 'http://aliv.weipai.cn/honglema/56d879160cf2bf3844e8c62c.jpeg', '1457027354');
INSERT INTO `t_picture` VALUES ('112', '56d878fb0cf2bf3844e8c626.jpeg', 'http://aliv.weipai.cn/honglema/56d878fb0cf2bf3844e8c626.jpeg', '1457027361');
INSERT INTO `t_picture` VALUES ('112', '56d879100cf2bf3844e8c629.jpeg', 'http://aliv.weipai.cn/honglema/56d879100cf2bf3844e8c629.jpeg', '1457027361');
INSERT INTO `t_picture` VALUES ('112', '56d8791e0cf2bf3844e8c631.jpeg', 'http://aliv.weipai.cn/honglema/56d8791e0cf2bf3844e8c631.jpeg', '1457027361');
INSERT INTO `t_picture` VALUES ('113', '56d87a3f0cf29739e6542b80.jpeg', 'http://aliv.weipai.cn/honglema/56d87a3f0cf29739e6542b80.jpeg', '1457027717');
INSERT INTO `t_picture` VALUES ('113', '56d87a6f0cf29739e6542b83.jpeg', 'http://aliv.weipai.cn/honglema/56d87a6f0cf29739e6542b83.jpeg', '1457027717');
INSERT INTO `t_picture` VALUES ('113', '56d87a810cf29739e6542b84.jpeg', 'http://aliv.weipai.cn/honglema/56d87a810cf29739e6542b84.jpeg', '1457027717');
INSERT INTO `t_picture` VALUES ('117', '56d87d410cf29739e6542b9f.jpg', 'http://aliv.weipai.cn/honglema/56d87d410cf29739e6542b9f.jpg', '1457028602');
INSERT INTO `t_picture` VALUES ('117', '56d87d910cf29739e6542ba8.jpg', 'http://aliv.weipai.cn/honglema/56d87d910cf29739e6542ba8.jpg', '1457028602');
INSERT INTO `t_picture` VALUES ('117', '56d87dac0cf29739e6542ba9.jpg', 'http://aliv.weipai.cn/honglema/56d87dac0cf29739e6542ba9.jpg', '1457028602');
INSERT INTO `t_picture` VALUES ('118', '56d87d110cf29739e6542b9c.jpeg', 'http://aliv.weipai.cn/honglema/56d87d110cf29739e6542b9c.jpeg', '1457028644');
INSERT INTO `t_picture` VALUES ('118', '56d87d280cf29739e6542b9d.jpeg', 'http://aliv.weipai.cn/honglema/56d87d280cf29739e6542b9d.jpeg', '1457028644');
INSERT INTO `t_picture` VALUES ('118', '56d87d620cf29739e6542ba4.jpeg', 'http://aliv.weipai.cn/honglema/56d87d620cf29739e6542ba4.jpeg', '1457028644');
INSERT INTO `t_picture` VALUES ('119', '56d87e300cf29739e6542bb7.jpeg', 'http://aliv.weipai.cn/honglema/56d87e300cf29739e6542bb7.jpeg', '1457028721');
INSERT INTO `t_picture` VALUES ('119', '56d87e3e0cf29739e6542bb8.jpeg', 'http://aliv.weipai.cn/honglema/56d87e3e0cf29739e6542bb8.jpeg', '1457028721');
INSERT INTO `t_picture` VALUES ('119', '56d87e4e0cf29739e6542bb9.jpeg', 'http://aliv.weipai.cn/honglema/56d87e4e0cf29739e6542bb9.jpeg', '1457028721');
INSERT INTO `t_picture` VALUES ('120', '56d87f400cf2bf3844e8c6cc.jpg', 'http://aliv.weipai.cn/honglema/56d87f400cf2bf3844e8c6cc.jpg', '1457029221');
INSERT INTO `t_picture` VALUES ('120', '56d87f5a0cf2bf3844e8c6cd.jpg', 'http://aliv.weipai.cn/honglema/56d87f5a0cf2bf3844e8c6cd.jpg', '1457029221');
INSERT INTO `t_picture` VALUES ('120', '56d87f670cf2bf3844e8c6ce.jpg', 'http://aliv.weipai.cn/honglema/56d87f670cf2bf3844e8c6ce.jpg', '1457029221');
INSERT INTO `t_picture` VALUES ('121', '56d880e30cf2bf3844e8c6e7.jpeg', 'http://aliv.weipai.cn/honglema/56d880e30cf2bf3844e8c6e7.jpeg', '1457029442');
INSERT INTO `t_picture` VALUES ('121', '56d880ef0cf2bf3844e8c6ea.jpeg', 'http://aliv.weipai.cn/honglema/56d880ef0cf2bf3844e8c6ea.jpeg', '1457029442');
INSERT INTO `t_picture` VALUES ('121', '56d881000cf2bf3844e8c6ec.jpeg', 'http://aliv.weipai.cn/honglema/56d881000cf2bf3844e8c6ec.jpeg', '1457029442');
INSERT INTO `t_picture` VALUES ('122', '56d87fb70cf2bf3844e8c6d7.jpg', 'http://aliv.weipai.cn/honglema/56d87fb70cf2bf3844e8c6d7.jpg', '1457029674');
INSERT INTO `t_picture` VALUES ('122', '56d87fc00cf2bf3844e8c6da.jpg', 'http://aliv.weipai.cn/honglema/56d87fc00cf2bf3844e8c6da.jpg', '1457029674');
INSERT INTO `t_picture` VALUES ('122', '56d87fc90cf2bf3844e8c6db.jpg', 'http://aliv.weipai.cn/honglema/56d87fc90cf2bf3844e8c6db.jpg', '1457029674');
INSERT INTO `t_picture` VALUES ('127', '56d891ed0cf2bf3844e8c805.jpeg', 'http://aliv.weipai.cn/honglema/56d891ed0cf2bf3844e8c805.jpeg', '1457033946');
INSERT INTO `t_picture` VALUES ('127', '56d891ff0cf2bf3844e8c807.jpeg', 'http://aliv.weipai.cn/honglema/56d891ff0cf2bf3844e8c807.jpeg', '1457033946');
INSERT INTO `t_picture` VALUES ('127', '56d892630cf2bf3844e8c80c.jpeg', 'http://aliv.weipai.cn/honglema/56d892630cf2bf3844e8c80c.jpeg', '1457033946');
INSERT INTO `t_picture` VALUES ('128', '56d8988a0cf2bf3844e8c84c.jpg', 'http://aliv.weipai.cn/honglema/56d8988a0cf2bf3844e8c84c.jpg', '1457035758');
INSERT INTO `t_picture` VALUES ('128', '56d898c90cf2bf3844e8c852.jpg', 'http://aliv.weipai.cn/honglema/56d898c90cf2bf3844e8c852.jpg', '1457035758');
INSERT INTO `t_picture` VALUES ('128', '56d899220cf2bf3844e8c854.jpg', 'http://aliv.weipai.cn/honglema/56d899220cf2bf3844e8c854.jpg', '1457035758');
INSERT INTO `t_picture` VALUES ('129', '56d8988b0cf2bf3844e8c84d.jpeg', 'http://aliv.weipai.cn/honglema/56d8988b0cf2bf3844e8c84d.jpeg', '1457036193');
INSERT INTO `t_picture` VALUES ('129', '56d899e70cf2bf3844e8c85a.jpeg', 'http://aliv.weipai.cn/honglema/56d899e70cf2bf3844e8c85a.jpeg', '1457036193');
INSERT INTO `t_picture` VALUES ('129', '56d899f50cf2bf3844e8c85d.jpeg', 'http://aliv.weipai.cn/honglema/56d899f50cf2bf3844e8c85d.jpeg', '1457036193');
INSERT INTO `t_picture` VALUES ('130', '56d89e960cf2bf3844e8c87b.jpeg', 'http://aliv.weipai.cn/honglema/56d89e960cf2bf3844e8c87b.jpeg', '1457037162');
INSERT INTO `t_picture` VALUES ('130', '56d89eaa0cf2bf3844e8c87c.jpeg', 'http://aliv.weipai.cn/honglema/56d89eaa0cf2bf3844e8c87c.jpeg', '1457037162');
INSERT INTO `t_picture` VALUES ('130', '56d89ed60cf2bf3844e8c87e.jpeg', 'http://aliv.weipai.cn/honglema/56d89ed60cf2bf3844e8c87e.jpeg', '1457037162');
INSERT INTO `t_picture` VALUES ('133', '56d897c10cf2bf3844e8c842.jpeg', 'http://aliv.weipai.cn/honglema/56d897c10cf2bf3844e8c842.jpeg', '1457042637');
INSERT INTO `t_picture` VALUES ('133', '56d8b4b10cf29739e6542d74.jpeg', 'http://aliv.weipai.cn/honglema/56d8b4b10cf29739e6542d74.jpeg', '1457042637');
INSERT INTO `t_picture` VALUES ('133', '56d8b4c90cf29739e6542d76.jpeg', 'http://aliv.weipai.cn/honglema/56d8b4c90cf29739e6542d76.jpeg', '1457042637');
INSERT INTO `t_picture` VALUES ('134', '56d8cd600cf29739e65431a7.jpeg', 'http://aliv.weipai.cn/honglema/56d8cd600cf29739e65431a7.jpeg', '1457048959');
INSERT INTO `t_picture` VALUES ('134', '56d8cd6c0cf29739e65431a8.jpeg', 'http://aliv.weipai.cn/honglema/56d8cd6c0cf29739e65431a8.jpeg', '1457048959');
INSERT INTO `t_picture` VALUES ('134', '56d8cd7c0cf29739e65431ab.jpeg', 'http://aliv.weipai.cn/honglema/56d8cd7c0cf29739e65431ab.jpeg', '1457048959');
INSERT INTO `t_picture` VALUES ('135', '56d8cfec0cf29739e65431f3.jpeg', 'http://aliv.weipai.cn/honglema/56d8cfec0cf29739e65431f3.jpeg', '1457050930');
INSERT INTO `t_picture` VALUES ('135', '56d8d0240cf29739e65431fa.jpeg', 'http://aliv.weipai.cn/honglema/56d8d0240cf29739e65431fa.jpeg', '1457050930');
INSERT INTO `t_picture` VALUES ('135', '56d8d0680cf29739e6543208.jpeg', 'http://aliv.weipai.cn/honglema/56d8d0680cf29739e6543208.jpeg', '1457050930');
INSERT INTO `t_picture` VALUES ('136', '56d8d9650cf2bf3844e8d009.jpg', 'http://aliv.weipai.cn/honglema/56d8d9650cf2bf3844e8d009.jpg', '1457052049');
INSERT INTO `t_picture` VALUES ('136', '56d8d9780cf2bf3844e8d00c.jpg', 'http://aliv.weipai.cn/honglema/56d8d9780cf2bf3844e8d00c.jpg', '1457052049');
INSERT INTO `t_picture` VALUES ('136', '56d8d9850cf2bf3844e8d013.jpg', 'http://aliv.weipai.cn/honglema/56d8d9850cf2bf3844e8d013.jpg', '1457052049');
INSERT INTO `t_picture` VALUES ('139', '56d8fcce0cf2bf3844e8f487.jpg', 'http://aliv.weipai.cn/honglema/56d8fcce0cf2bf3844e8f487.jpg', '1457061213');
INSERT INTO `t_picture` VALUES ('139', '56d8fcda0cf2bf3844e8f4a0.jpg', 'http://aliv.weipai.cn/honglema/56d8fcda0cf2bf3844e8f4a0.jpg', '1457061213');
INSERT INTO `t_picture` VALUES ('139', '56d8fcea0cf2bf3844e8f4bf.jpg', 'http://aliv.weipai.cn/honglema/56d8fcea0cf2bf3844e8f4bf.jpg', '1457061213');
INSERT INTO `t_picture` VALUES ('141', '56d8ffef0cf2bf3844e8f8a1.jpeg', 'http://aliv.weipai.cn/honglema/56d8ffef0cf2bf3844e8f8a1.jpeg', '1457061946');
INSERT INTO `t_picture` VALUES ('141', '56d900150cf2bf3844e8f904.jpeg', 'http://aliv.weipai.cn/honglema/56d900150cf2bf3844e8f904.jpeg', '1457061946');
INSERT INTO `t_picture` VALUES ('141', '56d900310cf2bf3844e8f92e.jpeg', 'http://aliv.weipai.cn/honglema/56d900310cf2bf3844e8f92e.jpeg', '1457061946');
INSERT INTO `t_picture` VALUES ('144', '56d90cc90cf2bf3844e9067f.jpeg', 'http://aliv.weipai.cn/honglema/56d90cc90cf2bf3844e9067f.jpeg', '1457065389');
INSERT INTO `t_picture` VALUES ('144', '56d90cf00cf2bf3844e90694.png', 'http://aliv.weipai.cn/honglema/56d90cf00cf2bf3844e90694.png', '1457065389');
INSERT INTO `t_picture` VALUES ('144', '56d90d190cf2bf3844e906b9.jpeg', 'http://aliv.weipai.cn/honglema/56d90d190cf2bf3844e906b9.jpeg', '1457065389');
INSERT INTO `t_picture` VALUES ('145', '56d910770cf29739e6546340.jpg', 'http://aliv.weipai.cn/honglema/56d910770cf29739e6546340.jpg', '1457066395');
INSERT INTO `t_picture` VALUES ('145', '56d910cf0cf29739e654636c.jpg', 'http://aliv.weipai.cn/honglema/56d910cf0cf29739e654636c.jpg', '1457066395');
INSERT INTO `t_picture` VALUES ('145', '56d911100cf29739e65463a1.jpg', 'http://aliv.weipai.cn/honglema/56d911100cf29739e65463a1.jpg', '1457066395');
INSERT INTO `t_picture` VALUES ('146', '56d92d680cf2bf3844e92d5e.jpg', 'http://aliv.weipai.cn/honglema/56d92d680cf2bf3844e92d5e.jpg', '1457073869');
INSERT INTO `t_picture` VALUES ('146', '56d92dbd0cf2bf3844e92dc6.jpg', 'http://aliv.weipai.cn/honglema/56d92dbd0cf2bf3844e92dc6.jpg', '1457073869');
INSERT INTO `t_picture` VALUES ('146', '56d92dd50cf2bf3844e92ddd.jpg', 'http://aliv.weipai.cn/honglema/56d92dd50cf2bf3844e92ddd.jpg', '1457073869');
INSERT INTO `t_picture` VALUES ('147', '56d935860cf2bf3844e939b0.jpeg', 'http://aliv.weipai.cn/honglema/56d935860cf2bf3844e939b0.jpeg', '1457075866');
INSERT INTO `t_picture` VALUES ('147', '56d9359a0cf2bf3844e939d0.jpeg', 'http://aliv.weipai.cn/honglema/56d9359a0cf2bf3844e939d0.jpeg', '1457075866');
INSERT INTO `t_picture` VALUES ('147', '56d935b40cf2bf3844e939ec.jpeg', 'http://aliv.weipai.cn/honglema/56d935b40cf2bf3844e939ec.jpeg', '1457075866');
INSERT INTO `t_picture` VALUES ('148', '56d93a1a0cf29739e654895e.jpg', 'http://aliv.weipai.cn/honglema/56d93a1a0cf29739e654895e.jpg', '1457077441');
INSERT INTO `t_picture` VALUES ('148', '56d93a940cf29739e65489d0.jpg', 'http://aliv.weipai.cn/honglema/56d93a940cf29739e65489d0.jpg', '1457077441');
INSERT INTO `t_picture` VALUES ('148', '56d93c9b0cf29739e6548c1e.jpg', 'http://aliv.weipai.cn/honglema/56d93c9b0cf29739e6548c1e.jpg', '1457077441');
INSERT INTO `t_picture` VALUES ('149', '56d9456c0cf2bf3844e94d3c.jpg', 'http://aliv.weipai.cn/honglema/56d9456c0cf2bf3844e94d3c.jpg', '1457079880');
INSERT INTO `t_picture` VALUES ('149', '56d945770cf2bf3844e94d4e.jpg', 'http://aliv.weipai.cn/honglema/56d945770cf2bf3844e94d4e.jpg', '1457079880');
INSERT INTO `t_picture` VALUES ('149', '56d945860cf2bf3844e94d62.jpg', 'http://aliv.weipai.cn/honglema/56d945860cf2bf3844e94d62.jpg', '1457079880');
INSERT INTO `t_picture` VALUES ('150', '4779D93513C84A1E98D2C1ABCED8592E.jpg', 'http://aliv.weipai.cn/honglema/4779D93513C84A1E98D2C1ABCED8592E.jpg', '1457080657');
INSERT INTO `t_picture` VALUES ('150', '6492A7F2827D59ADECF841BE593B6F77.jpg', 'http://aliv.weipai.cn/honglema/6492A7F2827D59ADECF841BE593B6F77.jpg', '1457080657');
INSERT INTO `t_picture` VALUES ('150', '65E9568D8AFE7064650D4050296479C5.jpg', 'http://aliv.weipai.cn/honglema/65E9568D8AFE7064650D4050296479C5.jpg', '1457080657');
INSERT INTO `t_picture` VALUES ('151', '56d949510cf2bf3844e95a41.jpeg', 'http://aliv.weipai.cn/honglema/56d949510cf2bf3844e95a41.jpeg', '1457081005');
INSERT INTO `t_picture` VALUES ('151', '56d949810cf2bf3844e95ae9.jpeg', 'http://aliv.weipai.cn/honglema/56d949810cf2bf3844e95ae9.jpeg', '1457081005');
INSERT INTO `t_picture` VALUES ('151', '56d94aa30cf2bf3844e95c1a.jpeg', 'http://aliv.weipai.cn/honglema/56d94aa30cf2bf3844e95c1a.jpeg', '1457081005');
INSERT INTO `t_picture` VALUES ('152', '56d94d3b0cf2bf3844e95e8f.jpg', 'http://aliv.weipai.cn/honglema/56d94d3b0cf2bf3844e95e8f.jpg', '1457081825');
INSERT INTO `t_picture` VALUES ('152', '56d94d590cf2bf3844e95ec0.jpg', 'http://aliv.weipai.cn/honglema/56d94d590cf2bf3844e95ec0.jpg', '1457081825');
INSERT INTO `t_picture` VALUES ('152', '56d94d850cf2bf3844e95ef1.jpg', 'http://aliv.weipai.cn/honglema/56d94d850cf2bf3844e95ef1.jpg', '1457081825');
INSERT INTO `t_picture` VALUES ('153', '56d94e740cf29739e65498ae.jpeg', 'http://aliv.weipai.cn/honglema/56d94e740cf29739e65498ae.jpeg', '1457082093');
INSERT INTO `t_picture` VALUES ('153', '56d94e810cf29739e65498bc.jpeg', 'http://aliv.weipai.cn/honglema/56d94e810cf29739e65498bc.jpeg', '1457082093');
INSERT INTO `t_picture` VALUES ('153', '56d94e8b0cf29739e65498c7.jpeg', 'http://aliv.weipai.cn/honglema/56d94e8b0cf29739e65498c7.jpeg', '1457082093');
INSERT INTO `t_picture` VALUES ('154', '56d94f410cf2bf3844e960c7.jpeg', 'http://aliv.weipai.cn/honglema/56d94f410cf2bf3844e960c7.jpeg', '1457082383');
INSERT INTO `t_picture` VALUES ('154', '56d94f680cf2bf3844e960f5.jpeg', 'http://aliv.weipai.cn/honglema/56d94f680cf2bf3844e960f5.jpeg', '1457082383');
INSERT INTO `t_picture` VALUES ('154', '56d94f840cf2bf3844e96105.jpeg', 'http://aliv.weipai.cn/honglema/56d94f840cf2bf3844e96105.jpeg', '1457082383');
INSERT INTO `t_picture` VALUES ('155', '56d953d50cf29739e6549c83.jpg', 'http://aliv.weipai.cn/honglema/56d953d50cf29739e6549c83.jpg', '1457083515');
INSERT INTO `t_picture` VALUES ('155', '56d953ea0cf29739e6549c94.jpg', 'http://aliv.weipai.cn/honglema/56d953ea0cf29739e6549c94.jpg', '1457083515');
INSERT INTO `t_picture` VALUES ('155', '56d953fd0cf29739e6549ca1.jpg', 'http://aliv.weipai.cn/honglema/56d953fd0cf29739e6549ca1.jpg', '1457083515');
INSERT INTO `t_picture` VALUES ('156', '56d9540e0cf2bf3844e964ed.jpeg', 'http://aliv.weipai.cn/honglema/56d9540e0cf2bf3844e964ed.jpeg', '1457084286');
INSERT INTO `t_picture` VALUES ('156', '56d9552a0cf2bf3844e96621.jpeg', 'http://aliv.weipai.cn/honglema/56d9552a0cf2bf3844e96621.jpeg', '1457084286');
INSERT INTO `t_picture` VALUES ('156', '56d9576e0cf2bf3844e96983.jpeg', 'http://aliv.weipai.cn/honglema/56d9576e0cf2bf3844e96983.jpeg', '1457084286');
INSERT INTO `t_picture` VALUES ('157', '56d95f490cf29739e654a2e2.jpeg', 'http://aliv.weipai.cn/honglema/56d95f490cf29739e654a2e2.jpeg', '1457086389');
INSERT INTO `t_picture` VALUES ('157', '56d95f5f0cf29739e654a2ed.jpeg', 'http://aliv.weipai.cn/honglema/56d95f5f0cf29739e654a2ed.jpeg', '1457086389');
INSERT INTO `t_picture` VALUES ('157', '56d95f690cf29739e654a2ef.jpeg', 'http://aliv.weipai.cn/honglema/56d95f690cf29739e654a2ef.jpeg', '1457086389');
INSERT INTO `t_picture` VALUES ('158', '56d97b650cf2bf3844e98473.jpeg', 'http://aliv.weipai.cn/honglema/56d97b650cf2bf3844e98473.jpeg', '1457093611');
INSERT INTO `t_picture` VALUES ('158', '56d97b760cf2bf3844e9848e.jpeg', 'http://aliv.weipai.cn/honglema/56d97b760cf2bf3844e9848e.jpeg', '1457093611');
INSERT INTO `t_picture` VALUES ('158', '56d97b870cf2bf3844e984a4.jpeg', 'http://aliv.weipai.cn/honglema/56d97b870cf2bf3844e984a4.jpeg', '1457093611');
INSERT INTO `t_picture` VALUES ('159', '56d97c030cf2bf3844e98500.jpeg', 'http://aliv.weipai.cn/honglema/56d97c030cf2bf3844e98500.jpeg', '1457094312');
INSERT INTO `t_picture` VALUES ('159', '56d97c150cf2bf3844e98501.jpeg', 'http://aliv.weipai.cn/honglema/56d97c150cf2bf3844e98501.jpeg', '1457094312');
INSERT INTO `t_picture` VALUES ('159', '56d97c550cf2bf3844e9852b.jpeg', 'http://aliv.weipai.cn/honglema/56d97c550cf2bf3844e9852b.jpeg', '1457094312');
INSERT INTO `t_picture` VALUES ('160', '56d987420cf29739e654b598.jpg', 'http://aliv.weipai.cn/honglema/56d987420cf29739e654b598.jpg', '1457096855');
INSERT INTO `t_picture` VALUES ('160', '56d9875a0cf29739e654b5a6.jpg', 'http://aliv.weipai.cn/honglema/56d9875a0cf29739e654b5a6.jpg', '1457096855');
INSERT INTO `t_picture` VALUES ('160', '56d987760cf29739e654b5ac.jpg', 'http://aliv.weipai.cn/honglema/56d987760cf29739e654b5ac.jpg', '1457096855');
INSERT INTO `t_picture` VALUES ('161', '56d997b70cf29739e654bdab.jpeg', 'http://aliv.weipai.cn/honglema/56d997b70cf29739e654bdab.jpeg', '1457100995');
INSERT INTO `t_picture` VALUES ('161', '56d997df0cf29739e654bdbc.jpeg', 'http://aliv.weipai.cn/honglema/56d997df0cf29739e654bdbc.jpeg', '1457100995');
INSERT INTO `t_picture` VALUES ('161', '56d9980d0cf29739e654bdc5.jpeg', 'http://aliv.weipai.cn/honglema/56d9980d0cf29739e654bdc5.jpeg', '1457100995');
INSERT INTO `t_picture` VALUES ('162', '56d999b30cf2bf3844e998ab.jpeg', 'http://aliv.weipai.cn/honglema/56d999b30cf2bf3844e998ab.jpeg', '1457101484');
INSERT INTO `t_picture` VALUES ('162', '56d999e10cf2bf3844e998cb.jpeg', 'http://aliv.weipai.cn/honglema/56d999e10cf2bf3844e998cb.jpeg', '1457101484');
INSERT INTO `t_picture` VALUES ('162', '56d99a470cf2bf3844e99926.jpeg', 'http://aliv.weipai.cn/honglema/56d99a470cf2bf3844e99926.jpeg', '1457101484');
INSERT INTO `t_picture` VALUES ('163', '56d999cd0cf29739e654be79.jpeg', 'http://aliv.weipai.cn/honglema/56d999cd0cf29739e654be79.jpeg', '1457101986');
INSERT INTO `t_picture` VALUES ('163', '56d99ace0cf29739e654bf68.jpeg', 'http://aliv.weipai.cn/honglema/56d99ace0cf29739e654bf68.jpeg', '1457101986');
INSERT INTO `t_picture` VALUES ('163', '56d99b250cf29739e654bf94.jpeg', 'http://aliv.weipai.cn/honglema/56d99b250cf29739e654bf94.jpeg', '1457101986');
INSERT INTO `t_picture` VALUES ('164', '56d9a9b70cf2bf3844e9a0eb.jpeg', 'http://aliv.weipai.cn/honglema/56d9a9b70cf2bf3844e9a0eb.jpeg', '1457105651');
INSERT INTO `t_picture` VALUES ('164', '56d9a9cc0cf2bf3844e9a0f6.jpeg', 'http://aliv.weipai.cn/honglema/56d9a9cc0cf2bf3844e9a0f6.jpeg', '1457105651');
INSERT INTO `t_picture` VALUES ('164', '56d9aa410cf2bf3844e9a11a.jpeg', 'http://aliv.weipai.cn/honglema/56d9aa410cf2bf3844e9a11a.jpeg', '1457105651');
INSERT INTO `t_picture` VALUES ('165', '56d9af080cf2bf3844e9a269.jpeg', 'http://aliv.weipai.cn/honglema/56d9af080cf2bf3844e9a269.jpeg', '1457106749');
INSERT INTO `t_picture` VALUES ('165', '56d9af180cf2bf3844e9a26d.jpeg', 'http://aliv.weipai.cn/honglema/56d9af180cf2bf3844e9a26d.jpeg', '1457106749');
INSERT INTO `t_picture` VALUES ('165', '56d9af300cf2bf3844e9a279.jpeg', 'http://aliv.weipai.cn/honglema/56d9af300cf2bf3844e9a279.jpeg', '1457106749');
INSERT INTO `t_picture` VALUES ('166', '56d9cc2a0cf2bf3844e9a68f.jpeg', 'http://aliv.weipai.cn/honglema/56d9cc2a0cf2bf3844e9a68f.jpeg', '1457115420');
INSERT INTO `t_picture` VALUES ('166', '56d9cd740cf2bf3844e9a6bc.jpeg', 'http://aliv.weipai.cn/honglema/56d9cd740cf2bf3844e9a6bc.jpeg', '1457115420');
INSERT INTO `t_picture` VALUES ('166', '56d9ce210cf2bf3844e9a6d9.jpeg', 'http://aliv.weipai.cn/honglema/56d9ce210cf2bf3844e9a6d9.jpeg', '1457115420');
INSERT INTO `t_picture` VALUES ('167', '56da3e3c0cf2bf3844e9b92f.jpeg', 'http://aliv.weipai.cn/honglema/56da3e3c0cf2bf3844e9b92f.jpeg', '1457143574');
INSERT INTO `t_picture` VALUES ('167', '56da3e750cf2bf3844e9b954.jpeg', 'http://aliv.weipai.cn/honglema/56da3e750cf2bf3844e9b954.jpeg', '1457143574');
INSERT INTO `t_picture` VALUES ('167', '56da3ea40cf2bf3844e9b973.jpeg', 'http://aliv.weipai.cn/honglema/56da3ea40cf2bf3844e9b973.jpeg', '1457143574');
INSERT INTO `t_picture` VALUES ('168', '56da40af0cf2bf3844e9ba8d.jpeg', 'http://aliv.weipai.cn/honglema/56da40af0cf2bf3844e9ba8d.jpeg', '1457144245');
INSERT INTO `t_picture` VALUES ('168', '56da40b80cf2bf3844e9ba91.jpeg', 'http://aliv.weipai.cn/honglema/56da40b80cf2bf3844e9ba91.jpeg', '1457144245');
INSERT INTO `t_picture` VALUES ('168', '56da40be0cf2bf3844e9ba92.jpeg', 'http://aliv.weipai.cn/honglema/56da40be0cf2bf3844e9ba92.jpeg', '1457144245');
INSERT INTO `t_picture` VALUES ('169', '56da58630cf29739e654e826.jpeg', 'http://aliv.weipai.cn/honglema/56da58630cf29739e654e826.jpeg', '1457150065');
INSERT INTO `t_picture` VALUES ('169', '56da58680cf29739e654e82c.jpeg', 'http://aliv.weipai.cn/honglema/56da58680cf29739e654e82c.jpeg', '1457150065');
INSERT INTO `t_picture` VALUES ('169', '56da586d0cf29739e654e837.png', 'http://aliv.weipai.cn/honglema/56da586d0cf29739e654e837.png', '1457150065');
INSERT INTO `t_picture` VALUES ('170', '56da5abe0cf29739e654e967.jpeg', 'http://aliv.weipai.cn/honglema/56da5abe0cf29739e654e967.jpeg', '1457150689');
INSERT INTO `t_picture` VALUES ('170', '56da5ac30cf29739e654e96a.jpeg', 'http://aliv.weipai.cn/honglema/56da5ac30cf29739e654e96a.jpeg', '1457150689');
INSERT INTO `t_picture` VALUES ('170', '56da5acf0cf29739e654e972.jpg', 'http://aliv.weipai.cn/honglema/56da5acf0cf29739e654e972.jpg', '1457150689');
INSERT INTO `t_picture` VALUES ('171', '56da60500cf29739e654ec67.jpg', 'http://aliv.weipai.cn/honglema/56da60500cf29739e654ec67.jpg', '1457152123');
INSERT INTO `t_picture` VALUES ('171', '56da606a0cf29739e654ec75.jpg', 'http://aliv.weipai.cn/honglema/56da606a0cf29739e654ec75.jpg', '1457152123');
INSERT INTO `t_picture` VALUES ('171', '56da60710cf29739e654ec7a.jpg', 'http://aliv.weipai.cn/honglema/56da60710cf29739e654ec7a.jpg', '1457152123');
INSERT INTO `t_picture` VALUES ('172', '56da6a250cf2bf3844e9e0a7.jpg', 'http://aliv.weipai.cn/honglema/56da6a250cf2bf3844e9e0a7.jpg', '1457154842');
INSERT INTO `t_picture` VALUES ('172', '56da6a3f0cf2bf3844e9e0b6.jpg', 'http://aliv.weipai.cn/honglema/56da6a3f0cf2bf3844e9e0b6.jpg', '1457154842');
INSERT INTO `t_picture` VALUES ('172', '56da6a4c0cf2bf3844e9e0ba.jpg', 'http://aliv.weipai.cn/honglema/56da6a4c0cf2bf3844e9e0ba.jpg', '1457154842');
INSERT INTO `t_picture` VALUES ('173', '56da6d5b0cf29739e654f2bd.jpg', 'http://aliv.weipai.cn/honglema/56da6d5b0cf29739e654f2bd.jpg', '1457155633');
INSERT INTO `t_picture` VALUES ('173', '56da6d6f0cf29739e654f2ca.jpg', 'http://aliv.weipai.cn/honglema/56da6d6f0cf29739e654f2ca.jpg', '1457155633');
INSERT INTO `t_picture` VALUES ('173', '56da6d830cf29739e654f2d8.jpg', 'http://aliv.weipai.cn/honglema/56da6d830cf29739e654f2d8.jpg', '1457155633');
INSERT INTO `t_picture` VALUES ('174', '56da793b0cf29739e654fb7f.jpg', 'http://aliv.weipai.cn/honglema/56da793b0cf29739e654fb7f.jpg', '1457159078');
INSERT INTO `t_picture` VALUES ('174', '56da79670cf29739e654fb8f.jpg', 'http://aliv.weipai.cn/honglema/56da79670cf29739e654fb8f.jpg', '1457159078');
INSERT INTO `t_picture` VALUES ('174', '56da79b10cf29739e654fbb6.jpg', 'http://aliv.weipai.cn/honglema/56da79b10cf29739e654fbb6.jpg', '1457159078');
INSERT INTO `t_picture` VALUES ('175', '56da7b7e0cf29739e654fc89.jpg', 'http://aliv.weipai.cn/honglema/56da7b7e0cf29739e654fc89.jpg', '1457159306');
INSERT INTO `t_picture` VALUES ('175', '56da7bc10cf29739e654fcaa.jpg', 'http://aliv.weipai.cn/honglema/56da7bc10cf29739e654fcaa.jpg', '1457159306');
INSERT INTO `t_picture` VALUES ('175', '56da7bf20cf29739e654fccb.jpg', 'http://aliv.weipai.cn/honglema/56da7bf20cf29739e654fccb.jpg', '1457159306');
INSERT INTO `t_picture` VALUES ('176', '56da9e150cf2bf3844ea1283.jpeg', 'http://aliv.weipai.cn/honglema/56da9e150cf2bf3844ea1283.jpeg', '1457168414');
INSERT INTO `t_picture` VALUES ('176', '56da9e330cf2bf3844ea1294.jpeg', 'http://aliv.weipai.cn/honglema/56da9e330cf2bf3844ea1294.jpeg', '1457168414');
INSERT INTO `t_picture` VALUES ('176', '56da9e570cf2bf3844ea12a7.jpeg', 'http://aliv.weipai.cn/honglema/56da9e570cf2bf3844ea12a7.jpeg', '1457168414');
INSERT INTO `t_picture` VALUES ('177', '56daa60c0cf29739e6551918.jpg', 'http://aliv.weipai.cn/honglema/56daa60c0cf29739e6551918.jpg', '1457170010');
INSERT INTO `t_picture` VALUES ('177', '56daa6250cf29739e6551927.jpg', 'http://aliv.weipai.cn/honglema/56daa6250cf29739e6551927.jpg', '1457170010');
INSERT INTO `t_picture` VALUES ('177', '56daa6550cf29739e6551937.jpg', 'http://aliv.weipai.cn/honglema/56daa6550cf29739e6551937.jpg', '1457170010');
INSERT INTO `t_picture` VALUES ('178', '56dabd460cf29739e65522e7.jpg', 'http://aliv.weipai.cn/honglema/56dabd460cf29739e65522e7.jpg', '1457176099');
INSERT INTO `t_picture` VALUES ('178', '56dabd530cf29739e65522ee.jpg', 'http://aliv.weipai.cn/honglema/56dabd530cf29739e65522ee.jpg', '1457176099');
INSERT INTO `t_picture` VALUES ('178', '56dabd680cf29739e65522ef.jpg', 'http://aliv.weipai.cn/honglema/56dabd680cf29739e65522ef.jpg', '1457176099');
INSERT INTO `t_picture` VALUES ('179', '56db8b9e0cf2bf3844ea8d34.jpg', 'http://aliv.weipai.cn/honglema/56db8b9e0cf2bf3844ea8d34.jpg', '1457228762');
INSERT INTO `t_picture` VALUES ('179', '56db8bc00cf2bf3844ea8d41.jpg', 'http://aliv.weipai.cn/honglema/56db8bc00cf2bf3844ea8d41.jpg', '1457228762');
INSERT INTO `t_picture` VALUES ('179', '56db8bd20cf2bf3844ea8d47.jpg', 'http://aliv.weipai.cn/honglema/56db8bd20cf2bf3844ea8d47.jpg', '1457228762');
INSERT INTO `t_picture` VALUES ('180', '56db8f190cf2bf3844ea8f27.jpg', 'http://aliv.weipai.cn/honglema/56db8f190cf2bf3844ea8f27.jpg', '1457229899');
INSERT INTO `t_picture` VALUES ('180', '56db8f200cf2bf3844ea8f35.jpg', 'http://aliv.weipai.cn/honglema/56db8f200cf2bf3844ea8f35.jpg', '1457229899');
INSERT INTO `t_picture` VALUES ('180', '56db8f280cf2bf3844ea8f40.jpg', 'http://aliv.weipai.cn/honglema/56db8f280cf2bf3844ea8f40.jpg', '1457229899');
INSERT INTO `t_picture` VALUES ('181', '56dbb2170cf2bf3844eaabdd.jpg', 'http://aliv.weipai.cn/honglema/56dbb2170cf2bf3844eaabdd.jpg', '1457238822');
INSERT INTO `t_picture` VALUES ('181', '56dbb24e0cf2bf3844eaac19.jpg', 'http://aliv.weipai.cn/honglema/56dbb24e0cf2bf3844eaac19.jpg', '1457238822');
INSERT INTO `t_picture` VALUES ('181', '56dbb2760cf2bf3844eaac2a.jpg', 'http://aliv.weipai.cn/honglema/56dbb2760cf2bf3844eaac2a.jpg', '1457238822');
INSERT INTO `t_picture` VALUES ('184', '56dd6be90cf2bf3844ebb5b8.jpeg', 'http://aliv.weipai.cn/honglema/56dd6be90cf2bf3844ebb5b8.jpeg', '1457351952');
INSERT INTO `t_picture` VALUES ('184', '56dd6c090cf2bf3844ebb5cd.png', 'http://aliv.weipai.cn/honglema/56dd6c090cf2bf3844ebb5cd.png', '1457351952');
INSERT INTO `t_picture` VALUES ('184', '56dd6c340cf2bf3844ebb5e8.jpeg', 'http://aliv.weipai.cn/honglema/56dd6c340cf2bf3844ebb5e8.jpeg', '1457351952');
INSERT INTO `t_picture` VALUES ('185', '56dd9c770cf2bf3844ebd8b8.jpeg', 'http://aliv.weipai.cn/honglema/56dd9c770cf2bf3844ebd8b8.jpeg', '1457364320');
INSERT INTO `t_picture` VALUES ('185', '56dd9c920cf2bf3844ebd8c1.jpeg', 'http://aliv.weipai.cn/honglema/56dd9c920cf2bf3844ebd8c1.jpeg', '1457364320');
INSERT INTO `t_picture` VALUES ('185', '56dd9cab0cf2bf3844ebd8d4.jpeg', 'http://aliv.weipai.cn/honglema/56dd9cab0cf2bf3844ebd8d4.jpeg', '1457364320');
INSERT INTO `t_picture` VALUES ('186', '56dea0a60cf29739e656a440.jpeg', 'http://aliv.weipai.cn/honglema/56dea0a60cf29739e656a440.jpeg', '1457430908');
INSERT INTO `t_picture` VALUES ('186', '56dea0c50cf29739e656a454.jpeg', 'http://aliv.weipai.cn/honglema/56dea0c50cf29739e656a454.jpeg', '1457430908');
INSERT INTO `t_picture` VALUES ('186', '56dea0f00cf29739e656a46b.jpeg', 'http://aliv.weipai.cn/honglema/56dea0f00cf29739e656a46b.jpeg', '1457430908');
INSERT INTO `t_picture` VALUES ('187', '56dea0ef0cf2bf3844ec89bd.jpeg', 'http://aliv.weipai.cn/honglema/56dea0ef0cf2bf3844ec89bd.jpeg', '1457431133');
INSERT INTO `t_picture` VALUES ('187', '56dea1070cf2bf3844ec89cb.jpeg', 'http://aliv.weipai.cn/honglema/56dea1070cf2bf3844ec89cb.jpeg', '1457431133');
INSERT INTO `t_picture` VALUES ('187', '56dea13a0cf2bf3844ec8a03.jpeg', 'http://aliv.weipai.cn/honglema/56dea13a0cf2bf3844ec8a03.jpeg', '1457431133');
INSERT INTO `t_picture` VALUES ('190', '56deb0450cf2bf3844ec996e.jpg', 'http://aliv.weipai.cn/honglema/56deb0450cf2bf3844ec996e.jpg', '1457434881');
INSERT INTO `t_picture` VALUES ('190', '56deb0570cf2bf3844ec997b.jpg', 'http://aliv.weipai.cn/honglema/56deb0570cf2bf3844ec997b.jpg', '1457434881');
INSERT INTO `t_picture` VALUES ('190', '56deb0690cf2bf3844ec998e.jpg', 'http://aliv.weipai.cn/honglema/56deb0690cf2bf3844ec998e.jpg', '1457434881');
INSERT INTO `t_picture` VALUES ('191', '56df29db0cf2bf3844ece963.jpeg', 'http://aliv.weipai.cn/honglema/56df29db0cf2bf3844ece963.jpeg', '1457466045');
INSERT INTO `t_picture` VALUES ('191', '56df29f10cf2bf3844ece964.jpeg', 'http://aliv.weipai.cn/honglema/56df29f10cf2bf3844ece964.jpeg', '1457466045');
INSERT INTO `t_picture` VALUES ('191', '56df2a110cf2bf3844ece965.jpeg', 'http://aliv.weipai.cn/honglema/56df2a110cf2bf3844ece965.jpeg', '1457466045');
INSERT INTO `t_picture` VALUES ('192', '56df9c160cf29739e6572268.jpeg', 'http://aliv.weipai.cn/honglema/56df9c160cf29739e6572268.jpeg', '1457495462');
INSERT INTO `t_picture` VALUES ('192', '56df9c6c0cf29739e657229f.jpg', 'http://aliv.weipai.cn/honglema/56df9c6c0cf29739e657229f.jpg', '1457495462');
INSERT INTO `t_picture` VALUES ('192', '56df9cca0cf29739e65722db.jpeg', 'http://aliv.weipai.cn/honglema/56df9cca0cf29739e65722db.jpeg', '1457495462');
INSERT INTO `t_picture` VALUES ('193', '56dfdc760cf2bf3844ed77b4.jpeg', 'http://aliv.weipai.cn/honglema/56dfdc760cf2bf3844ed77b4.jpeg', '1457511687');
INSERT INTO `t_picture` VALUES ('193', '56dfdc8d0cf2bf3844ed77d6.jpeg', 'http://aliv.weipai.cn/honglema/56dfdc8d0cf2bf3844ed77d6.jpeg', '1457511687');
INSERT INTO `t_picture` VALUES ('193', '56dfdca70cf2bf3844ed77e3.jpg', 'http://aliv.weipai.cn/honglema/56dfdca70cf2bf3844ed77e3.jpg', '1457511687');
INSERT INTO `t_picture` VALUES ('194', '56dff2d90cf2bf3844ed9590.jpeg', 'http://aliv.weipai.cn/honglema/56dff2d90cf2bf3844ed9590.jpeg', '1457517541');
INSERT INTO `t_picture` VALUES ('194', '56dff2e70cf2bf3844ed95a3.jpeg', 'http://aliv.weipai.cn/honglema/56dff2e70cf2bf3844ed95a3.jpeg', '1457517541');
INSERT INTO `t_picture` VALUES ('194', '56dff3730cf2bf3844ed962a.jpeg', 'http://aliv.weipai.cn/honglema/56dff3730cf2bf3844ed962a.jpeg', '1457517541');
INSERT INTO `t_picture` VALUES ('195', '56dff8780cf29739e6576c66.jpg', 'http://aliv.weipai.cn/honglema/56dff8780cf29739e6576c66.jpg', '1457518823');
INSERT INTO `t_picture` VALUES ('195', '56dff88f0cf29739e6576c7a.jpg', 'http://aliv.weipai.cn/honglema/56dff88f0cf29739e6576c7a.jpg', '1457518823');
INSERT INTO `t_picture` VALUES ('195', '56dff8c10cf29739e6576c9a.jpg', 'http://aliv.weipai.cn/honglema/56dff8c10cf29739e6576c9a.jpg', '1457518823');
INSERT INTO `t_picture` VALUES ('196', '56dffa9d0cf2bf3844ed9d52.jpg', 'http://aliv.weipai.cn/honglema/56dffa9d0cf2bf3844ed9d52.jpg', '1457519365');
INSERT INTO `t_picture` VALUES ('196', '56dffac40cf2bf3844ed9d75.jpg', 'http://aliv.weipai.cn/honglema/56dffac40cf2bf3844ed9d75.jpg', '1457519365');
INSERT INTO `t_picture` VALUES ('196', '56dffafe0cf2bf3844ed9da7.jpg', 'http://aliv.weipai.cn/honglema/56dffafe0cf2bf3844ed9da7.jpg', '1457519365');
INSERT INTO `t_picture` VALUES ('197', '56dffa6c0cf2bf3844ed9d20.jpeg', 'http://aliv.weipai.cn/honglema/56dffa6c0cf2bf3844ed9d20.jpeg', '1457519495');
INSERT INTO `t_picture` VALUES ('197', '56dffb1e0cf2bf3844ed9de2.jpeg', 'http://aliv.weipai.cn/honglema/56dffb1e0cf2bf3844ed9de2.jpeg', '1457519495');
INSERT INTO `t_picture` VALUES ('197', '56dffb250cf2bf3844ed9e01.jpeg', 'http://aliv.weipai.cn/honglema/56dffb250cf2bf3844ed9e01.jpeg', '1457519495');
INSERT INTO `t_picture` VALUES ('198', '56dfff5c0cf29739e6577089.jpg', 'http://aliv.weipai.cn/honglema/56dfff5c0cf29739e6577089.jpg', '1457520759');
INSERT INTO `t_picture` VALUES ('198', '56dfff8c0cf29739e657709f.jpg', 'http://aliv.weipai.cn/honglema/56dfff8c0cf29739e657709f.jpg', '1457520759');
INSERT INTO `t_picture` VALUES ('198', '56dfffb10cf29739e65770b0.jpg', 'http://aliv.weipai.cn/honglema/56dfffb10cf29739e65770b0.jpg', '1457520759');
INSERT INTO `t_picture` VALUES ('199', '56e000dd0cf2bf3844eda2b8.jpeg', 'http://aliv.weipai.cn/honglema/56e000dd0cf2bf3844eda2b8.jpeg', '1457521774');
INSERT INTO `t_picture` VALUES ('199', '56e001120cf2bf3844eda2e6.jpeg', 'http://aliv.weipai.cn/honglema/56e001120cf2bf3844eda2e6.jpeg', '1457521774');
INSERT INTO `t_picture` VALUES ('199', '56e001370cf2bf3844eda305.jpeg', 'http://aliv.weipai.cn/honglema/56e001370cf2bf3844eda305.jpeg', '1457521774');
INSERT INTO `t_picture` VALUES ('200', '56e00cd00cf2bf3844edaf9c.jpeg', 'http://aliv.weipai.cn/honglema/56e00cd00cf2bf3844edaf9c.jpeg', '1457524043');
INSERT INTO `t_picture` VALUES ('200', '56e00ce90cf2bf3844edafb4.jpeg', 'http://aliv.weipai.cn/honglema/56e00ce90cf2bf3844edafb4.jpeg', '1457524043');
INSERT INTO `t_picture` VALUES ('200', '56e00cf00cf2bf3844edafb8.jpeg', 'http://aliv.weipai.cn/honglema/56e00cf00cf2bf3844edafb8.jpeg', '1457524043');
INSERT INTO `t_picture` VALUES ('201', '56e00c360cf29739e657794d.jpg', 'http://aliv.weipai.cn/honglema/56e00c360cf29739e657794d.jpg', '1457524181');
INSERT INTO `t_picture` VALUES ('201', '56e00c650cf29739e657796a.jpg', 'http://aliv.weipai.cn/honglema/56e00c650cf29739e657796a.jpg', '1457524181');
INSERT INTO `t_picture` VALUES ('201', '56e00c7d0cf29739e6577976.jpg', 'http://aliv.weipai.cn/honglema/56e00c7d0cf29739e6577976.jpg', '1457524181');
INSERT INTO `t_picture` VALUES ('202', '56e013750cf29739e6577f6e.jpeg', 'http://aliv.weipai.cn/honglema/56e013750cf29739e6577f6e.jpeg', '1457525869');
INSERT INTO `t_picture` VALUES ('202', '56e013860cf29739e6577f74.jpeg', 'http://aliv.weipai.cn/honglema/56e013860cf29739e6577f74.jpeg', '1457525869');
INSERT INTO `t_picture` VALUES ('202', '56e013930cf29739e6577f7b.jpeg', 'http://aliv.weipai.cn/honglema/56e013930cf29739e6577f7b.jpeg', '1457525869');
INSERT INTO `t_picture` VALUES ('203', '56e103120cf29739e657f4b9.jpg', 'http://aliv.weipai.cn/honglema/56e103120cf29739e657f4b9.jpg', '1457587247');
INSERT INTO `t_picture` VALUES ('203', '56e103540cf29739e657f4ed.jpg', 'http://aliv.weipai.cn/honglema/56e103540cf29739e657f4ed.jpg', '1457587247');
INSERT INTO `t_picture` VALUES ('203', '56e103a50cf29739e657f522.jpg', 'http://aliv.weipai.cn/honglema/56e103a50cf29739e657f522.jpg', '1457587247');

-- ----------------------------
-- Records for `t_product_picture`
-- ----------------------------
INSERT INTO `t_product_picture` VALUES ('6', '2', '0d78a48532f4cc5b287f6d1ead9391b8', 'http://image.weipai.cn/honglema/product/0d78a48532f4cc5b287f6d1ead9391b8.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('6', '2', '0d78a48532f4cc5b287f6d1ead9391b9', 'http://image.weipai.cn/honglema/product/0d78a48532f4cc5b287f6d1ead9391b8.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('6', '2', 'd8041214d172fae3c36e90bba8c27286', 'http://image.weipai.cn/honglema/product/d8041214d172fae3c36e90bba8c27286.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('19', '3', '7dde19e99e8d1669f5e526e98f803fb3', 'http://image.weipai.cn/honglema/product/7dde19e99e8d1669f5e526e98f803fb3.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('19', '3', '8ba216ff4f71e9a7f6f46e77c7bc7947', 'http://image.weipai.cn/honglema/product/8ba216ff4f71e9a7f6f46e77c7bc7947.jpg', '1461050741');
INSERT INTO `t_product_picture` VALUES ('101', '1', '8ba216ff4f71e9a7f6f46e77c7bc7947', 'http://image.weipai.cn/honglema/product/8ba216ff4f71e9a7f6f46e77c7bc7947.jpg', '1461050741');
INSERT INTO `t_product_picture` VALUES ('101', '1', 'd8041214d172fae3c36e90bba8c27286', 'http://image.weipai.cn/honglema/product/d8041214d172fae3c36e90bba8c27286.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('1038', '0', '0d78a48532f4cc5b287f6d1ead9391b8', 'http://image.weipai.cn/honglema/product/0d78a48532f4cc5b287f6d1ead9391b8.jpg', '1461049272');
INSERT INTO `t_product_picture` VALUES ('1038', '0', '8ba216ff4f71e9a7f6f46e77c7bc7947', 'http://image.weipai.cn/honglema/product/8ba216ff4f71e9a7f6f46e77c7bc7947.jpg', '1461050741');
INSERT INTO `t_product_picture` VALUES ('1038', '0', 'd8041214d172fae3c36e90bba8c27286', 'http://image.weipai.cn/honglema/product/d8041214d172fae3c36e90bba8c27286.jpg', '1461049272');

-- ----------------------------
-- Records for `t_stalls`
-- ----------------------------
INSERT INTO `t_stalls` VALUES ('85', '丁小辉', '0595-83123877', '无', '无', '佐华尼服饰', '', '', '', '', '', '', '', '福建省石狮市服装城北D2207号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('86', '法威', '0595-68825888', '无', '无', '法尼威斯特（商）', '', '', '', '', '', '', '', '石狮市创业路法威国际商厦', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('87', '碧仕得', '0571-86517907', '无', '无', '碧仕得', '', '', '', '', '', '', '', '杭州老杭派一楼137号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('88', 'E满E', '0571-86513181', '无', '无', 'E满E', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('89', '一诺', '0571--86504369', '无', '无', '一诺', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('90', '舒小霞', '0571-28175739', '无', '无', '艾米伦', '', '', '', '', '', '', '', '杭州四季青中纺13楼-32', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('91', '加提益', '020-88903193', '无', '无', '加提益（广州十三行）', '', '', '', '', '', '', '', '广州十三行红遍天三楼美国街3号', '简约', '女装', '0', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('92', '巴比尔', '020-87037072', '无', '无', '巴比尔91（广州沙河万佳）（杰', '', '', '', '', '', '', '', '广州沙河万佳十街４３档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('93', '所爱', '020-86690053', '无', '无', '所爱（广州流花）', '', '', '', '', '', '', '', '2031档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('94', '柳淑兰', '020-86513186', '无', '无', '钜立（谢）', '', '', '', '', '', '', '', '广州市站西路57号金宝外贸服装城7楼A区A008室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('95', '丹尼', '020-86504593', '无', '无', '丹尼4006', '', '', '', '', '', '', '', '广州市站西路57号二号楼4006档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('96', '有喜化妆品', '020-86392395', '无', '无', '有喜化妆品', '', '', '', '', '', '', '', '广州市白云区机场路兴发广场8座131-132挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('97', '酷品美妆工', '020-86364332', '无', '无', '酷品美妆工具', '', '', '', '', '', '', '', '广州市白云区机场路怡发广场E座01挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('98', '禾', '020-86228478', '无', '无', '禾3478', '', '', '', '', '', '', '', '广州白马3478档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('99', '刘尚河', '020-86222413', '无', '无', '尚河（商）', '', '', '', '', '', '', '', '广州新大地1609档    广州西郊2338档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('100', 'F.E域界', '020-85911270', '无', '无', 'F.E域界（广州红棉）', '', '', '', '', '', '', '', '广州环市西路184号红棉国际服装城9楼9276-9', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('101', '马小姐', '020-83311433', '无', '无', '维妮芳', '', '', '', '', '', '', '', '广州市北京路高第街159号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('102', '蔓丝雅', '020-83302045', '无', '无', '蔓丝雅', '', '', '', '', '', '', '', '广州市北京路高第街228号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('103', '徐帽子', '020-83216716', '无', '无', '徐帽子（陈）', '', '', '', '', '', '', '', '广州市万福路19号万福精品广场首层1-2铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('104', '广州尚冠厂', '020-83216680', '无', '无', '尚冠', '', '', '', '', '', '', '', '广州万福路19号华芸大厦首层街铺15号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('105', '吴少庄', '020-83207996', '无', '无', '佐村（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9201-9203室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('106', 'ESP', '020-83207030', '无', '无', 'ESP(周）', '', '', '', '', '', '', '', '广州市红棉国际时装城9111档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('107', '派登（街力', '020-83206465', '无', '无', '派登（清）', '', '', '', '', '', '', '', '广州市红棉国际服装城9楼9316档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('108', 'J-TWO', '020-83206137', '无', '无', 'J-TWO（陈）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城9楼9295', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('109', '胡承斌', '020-82785710', '无', '无', '亿鑫隆（杨）', '', '', '', '', '', '', '', '广州市沙河益民2C13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('110', '威妮', '020-81093230', '无', '无', '威妮华(广州西郊)(琳)', '', '', '', '', '', '', '', '广州市站前西路2号西郊大厦三楼1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('111', '浪漫小猫', '020-62793228', '无', '无', '浪漫小猫（广州新中国大厦）', '', '', '', '', '', '', '', '广州市十三行路新中国大厦10楼126-127室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('112', '陈能昌', '020-62136561', '无', '无', '摄度时空（陈）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际服装城九楼9261-', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('113', '施明媚', '020-62136555', '无', '无', '后街男孩(广州红棉)', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼92509268档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('114', '曼特公子', '020-37397834', '无', '无', '曼特公子（商）', '', '', '', '', '', '', '', '广州市沙河万佳服装市场二街35档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('115', '紫荆', '020-37397203', '无', '无', '紫荆52（广州沙河万佳）（杰）', '', '', '', '', '', '', '', '广州市沙河万佳七街52档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('116', '桂花仙子', '020-37396952', '无', '无', '桂花仙子（清）', '', '', '', '', '', '', '', '广州市中山八路后南楼N-1002档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('117', '王丽丽', '020-36637300-806', '无', '无', '烟斗（商）', '', '', '', '', '', '', '', '广州新市', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('118', '格郎尔', '020-36217815', '无', '无', '格郎尔', '', '', '', '', '', '', '', '广州市白云区三元里大道益寿路2号吴璟大厦', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('119', '慕纯', '020-23374163', '无', '无', '慕纯', '', '', '', '', '', '', '', '广州十三行红遍天大厦五楼珠海路39号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('120', '普尼斯', '020-22948188', '无', '无', '普尼斯（广州十三行）（张）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼A509档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('121', '缤典', '188819378866', '无', '无', '缤典（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼C510档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('122', '火之燃', '057186528309', '无', '无', '火之燃', '', '', '', '', '', '', '', '杭州意法3楼53', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('123', '江南部落', '1338118248，15305816', '无', '无', '江南部落', '', '', '', '', '', '', '', '杭州市江干区意法服饰城7楼7129-7130#', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('124', '祥泰行', '0189294170809', '无', '无', '祥泰行（商）', '', '', '', '', '', '', '', '东莞富民', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('125', '迷尔迪', '135700599438', '无', '无', '迷尔迪（清）', '', '', '', '', '', '', '', '广州市越秀区万福东路26.28号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('126', '伊力堡', '059588875869', '无', '无', '伊力堡（商）', '', '', '', '', '', '', '', '福建省石狮市宝盖科技园威斯登工业区20栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('127', '力翔', '059588786363', '无', '无', '力翔', '', '', '', '', '', '', '', '石狮琼林中路118号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('128', '黑蝠社', '18980011435', '无', '无', '黑蝠社（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7165档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('129', '橙衣阁', '18958097225', '无', '无', '橙衣阁', '', '', '', '', '', '', '', '杭州四季青老市场三楼188', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('130', '金川古韵', '18958096929', '无', '无', '金川古韵', '', '', '', '', '', '', '', '杭州四季青服侍（原意法）四楼东区122号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('131', '世纪鸿展', '18933936728', '无', '无', '世纪鸿展（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城6楼6601档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('132', '铁玛尼', '18929577989', '无', '无', '铁玛尼（蝶）', '', '', '', '', '', '', '', '广州沙河万佳西区003档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('133', '戴晓琴', '18929417809', '无', '无', '奥佰莱（陈）', '', '', '', '', '', '', '', '东莞市虎门富民商业大厦东区1608之一铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('134', '迪娅娜', '18928872019', '无', '无', '迪娅娜（清）', '', '', '', '', '', '', '', '广州市十三行美衣城B083档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('135', '耐龙', '18928861278', '无', '无', '耐龙（贺）', '', '', '', '', '', '', '', '广州红棉国际时装城9楼9231室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('136', '铭满欧韩（', '18928825333', '无', '无', '铭满欧韩', '', '', '', '', '', '', '', '广州十三行新中国大厦9楼A20', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('137', '鑫豹头', '18926277065', '无', '无', '鑫豹头（商）', '', '', '', '', '', '', '', '广州市沙河益民服装城二楼C区103A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('138', '甜蜜公主', '18926271515', '无', '无', '甜蜜公主（蝶）', '', '', '', '', '', '', '', '广州市沙河万佳十一街047档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('139', '罗少虹', '18926252765', '无', '无', '野稻人（陈）', '', '', '', '', '', '', '', '广州市环市西路168号天马大厦四楼4033档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('140', '战盟', '18926183777', '无', '无', '战盟（商）', '', '', '', '', '', '', '', '广州市增城新塘镇汇创国贸大厦1栋1001室/红棉8351', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('141', '威丽诗曼', '18925812889', '无', '无', '威丽诗曼（蝶）', '', '', '', '', '', '', '', '广东东莞虎门镇富民商业大厦北区B205', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('142', '衣柔蓝', '18925731109', '无', '无', '衣柔蓝（清）', '', '', '', '', '', '', '', '东莞虎门富民商业大厦东区2510档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('143', '余利凡', '18925027942', '无', '无', '不反（许）', '', '', '', '', '', '', '', '广州市新中国大厦10楼68档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('144', '动感女孩', '18924324997', '无', '无', '动感女孩（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十六楼025档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('145', '魅惑舞动', '18924323677', '无', '无', '魅惑舞动（清）', '', '', '', '', '', '', '', '广州沙河益民服装城三楼D118档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('146', '江华', '18924135183', '无', '无', '酷朗（清）', '', '', '', '', '', '', '', '广州市十三行红遍天服装批发中心富2英国路2号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('147', '珺城', '18924108733', '无', '无', '珺城（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天负二楼法国街35室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('148', '浪迪图', '18922781352', '无', '无', '浪迪图（蔡）', '', '', '', '', '', '', '', '广州市十三行红遍天负一罗马街27号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('149', 'CBCiBG', '18922385567', '无', '无', 'CBCiBG(萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼193A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('150', '卡萨罗奥', '18905733866', '无', '无', '卡萨罗奥', '', '', '', '', '', '', '', '浙江濮院羊毛衫市场一区太原街164号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('151', '皇宝', '18905085599', '无', '无', '皇宝（商）', '', '', '', '', '', '', '', '福建石狮市灵秀创业园皇宝制造有限公司', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('152', '娜梦', '18903013958', '无', '无', '娜梦（清）', '', '', '', '', '', '', '', '广州市解放南路88号大都市鞋城1C33档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('153', '梦妮人', '18902809878', '无', '无', '梦妮人', '', '', '', '', '', '', '', '红遍天6楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('154', '保罗斯贝克', '18902381279', '无', '无', '保罗斯贝克（吴）', '', '', '', '', '', '', '', '广州市解放北路梓元岗水电综合市场临5档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('155', '红妞', '18868758538', '无', '无', '红妞', '', '', '', '', '', '', '', '杭州四季青意法服饰城3F-109号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('156', '梦雅之枫', '18857700172', '无', '无', '梦雅之枫（玲）', '', '', '', '', '', '', '', '广州市红遍天五楼深圳路29号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('157', '明潮', '18825078789', '无', '无', '明潮（玲）', '', '', '', '', '', '', '', '广州市越秀区万福路62号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('158', '王海凤', '18820072289', '无', '无', '卓E（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼B532档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('159', '周华坚', '18820054977', '无', '无', '聪明女孩（商）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路36号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('160', '美依路', '18820053356', '无', '无', '美依路（新中国）（欧）', '', '', '', '', '', '', '', '广州市十三行新中国大厦九楼A61室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('161', '仙碟缘', '18820041819', '无', '无', '仙碟缘（冰）', '', '', '', '', '', '', '', '广州市十三行新中国大厦18楼1846档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('162', '天鸿', '18820037798', '无', '无', '天鸿', '', '', '', '', '', '', '', '广州越秀区德政南路128号仰忠精品场B2-1', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('163', '王龙华', '18820029498', '无', '无', '创衣名坊（E品）', '', '', '', '', '', '', '', '广州十三行美衣城C039档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('164', '谷寸一站', '18819815818', '无', '无', '谷寸一站（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十六楼030档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('165', '陈少云', '18819185393', '无', '无', '威龙鞋业（吴）', '', '', '', '', '', '', '', '广州市大道南1629号华南鞋城3区05档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('166', '亿源', '18819131286', '无', '无', '亿源（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D39A(海）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('167', '贵宾', '18818868275', '无', '无', '贵宾（玲）', '', '', '', '', '', '', '', '广州市十三行鑫中国大厦8楼203A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('168', '鑫煌', '18815016750', '无', '无', '鑫煌（玲）', '', '', '', '', '', '', '', '广州市高第街10号A2档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('169', '菲妮绣', '18757325288', '无', '无', '菲妮绣', '', '', '', '', '', '', '', '浙江省桐乡市濮院羊毛衫市场三区贵阳街357号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('170', '希望鸟', '18719252680', '无', '无', '希望鸟（云）', '', '', '', '', '', '', '', '广州市站南路白马大厦2楼2511档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('171', '李雪梅', '18688875919', '无', '无', '菲凡（戴）', '', '', '', '', '', '', '', '广州市十三行美衣城D005档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('172', '卡罗丹尼', '18688871279', '无', '无', '卡罗丹尼（云）', '', '', '', '', '', '', '', '广州市环市西路139号汇美国际磐信服装城5A035', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('173', 'MTT', '18688862610', '无', '无', 'MTT（玲）', '', '', '', '', '', '', '', '8楼203D', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('174', '叶壮炼', '18688860870', '无', '无', '莎莎（商）', '', '', '', '', '', '', '', '退货仓库地址：一德西路大同坊北座负一层b1120', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('175', '付振达', '18688857722', '无', '无', '威妮（清）', '', '', '', '', '', '', '', '广州市万福路仰忠精品批发市场A6-3', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('176', '哈利', '18688563711', '无', '无', '哈利.空间（商）', '', '', '', '', '', '', '', '广东省中山市沙溪镇康乐北路红绿灯洗车场侧春华楼4楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('177', '姐妹', '18688472521', '无', '无', '姐妹（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼132档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('178', '日韩毛衣', '18688467506', '无', '无', '日韩毛衣（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路52号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('179', '高乐锦', '18688446270', '无', '无', '品尚（陈）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城8233B', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('180', '李震梅', '18688442755', '无', '无', '女人衣橱（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦4楼A457档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('181', '欧阳文', '18688403403', '无', '无', '罗曼伊羽（清）', '', '', '', '', '', '', '', '广州市白云区新市街大埔九社工业区21栋A座四楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('182', '林龙秀', '18688101565', '无', '无', '狄卡威（商）', '', '', '', '', '', '', '', '广东中山沙溪镇沙水路00330号二楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('183', '柏拉格木', '18686790887', '无', '无', '柏拉格木（海）', '', '', '', '', '', '', '', '广州市红遍天富一层罗马街112号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('184', '花城嘉伦', '18680278075', '无', '无', '花城嘉伦（谢）', '', '', '', '', '', '', '', '广州新中国大厦十五楼005档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('185', '旺兴', '18680215026', '无', '无', '旺兴（玲）', '', '', '', '', '', '', '', '广州市人民南路十三行红遍天二楼日本街03档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('186', '香港旺兴', '18680215026', '无', '无', '香港旺兴（清）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼韩国街27号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('187', '阿威', '18677555535', '无', '无', '三莹（商）', '', '', '', '', '', '', '', '东莞虎门龙眼工业大道11号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('188', 'pinky', '18676580392', '无', '无', 'pinky（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B685A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('189', '陈姝含', '18676570991', '无', '无', '蓝色夏天', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路038号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('190', '林应勇', '18676418611', '无', '无', '古凡布', '', '', '', '', '', '', '', '中山市大涌镇环镇路奔腾大厦二楼石井牌坊对面侨发新楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('191', '瀚瀚童装', '18675879841', '无', '无', '瀚瀚童装（清）', '', '', '', '', '', '', '', '广州市沙河新天地服装城首层012.013.014.038.0.39.040', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('192', '圣依娜', '18675876543', '无', '无', '圣依娜（玲）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('193', '欧阳红', '18675735667', '无', '无', '世纪风行.恋依', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海市路21#', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('194', '灼灼', '18672880158', '无', '无', '灼灼', '', '', '', '', '', '', '', '广州市沙河有利南城一楼A-147档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('195', '零字节', '18666272710', '无', '无', '零字节（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7300档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('196', 'VIKI', '18666096106', '无', '无', 'VIKI(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D53A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('197', '香黛儿', '18666094708', '无', '无', '香黛儿', '', '', '', '', '', '', '', '沙河万佳西区50档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('198', '微妮资', '18666094474', '无', '无', '微妮资（清）', '', '', '', '', '', '', '', '广州十三行红遍天四楼上海路38档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('199', '陈琼', '18666089377', '无', '无', '斐斯卡（陈）', '', '', '', '', '', '', '', '广州地一大道负二楼C11档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('200', 'sogo（玲）', '18666010781', '无', '无', 'sogo', '', '', '', '', '', '', '', '广州十三行新中国大厦11楼20档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('201', '嫣然回首', '18665726136', '无', '无', '嫣然回首（萍）', '', '', '', '', '', '', '', '广州十三行红遍天五楼深圳路6', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('202', 'gatwo', '18665679679', '无', '无', 'gatwo(周）', '', '', '', '', '', '', '', '广州市站西路57号站西广场2号楼8673室（6楼）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('203', '杨斌', '18665637322', '无', '无', '完美焦点（新中国）（苗）', '', '', '', '', '', '', '', '广州新中国大厦五楼A532档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('204', '弘利', '18665612612', '无', '无', '弘利（谢）', '', '', '', '', '', '', '', '广州市三元里梓元岗水电85档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('205', '吴玲玲', '18665552989', '无', '无', '汉司（商）', '', '', '', '', '', '', '', '广州市沙河新天地服装城5楼538室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('206', '淘衣橱', '18665059915', '无', '无', '淘衣橱（蝶）', '', '', '', '', '', '', '', '广州十三行新中国大厦5楼C550档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('207', '恩典', '18664672450', '无', '无', '恩典（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路41档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('208', 'T尚', '18664649881', '无', '无', 'T尚（清）', '', '', '', '', '', '', '', '广州十三行新中国大厦6楼C678档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('209', '森木', '18664648500', '无', '无', '森木（玲）', '', '', '', '', '', '', '', '广州十三行红遍天服装城富一楼东京街87档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('210', '目标', '18659599956', '无', '无', '目标（商）', '', '', '', '', '', '', '', '石狮市西环路皇冠仓储工业区13号楼4-5层', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('211', '凌立英', '18657137786', '无', '无', '靓丽莎娜（商）', '', '', '', '', '', '', '', '浙江省杭州意法5-151', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('212', '黄总', '18627146655', '无', '无', '纳米秀（商）', '', '', '', '', '', '', '', '武汉市硚口区大夹街210号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('213', '迪卡亚丝', '18621741923', '无', '无', '迪卡亚丝（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼C47档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('214', '招财皮具', '18620988829', '无', '无', '招财皮具（清）', '', '', '', '', '', '', '', '广州市梓元岗水电南8档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('215', '张晨红', '18620975566', '无', '无', 'CH（谢）', '', '', '', '', '', '', '', '广州市十三行新中国大厦15A036档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('216', '金时利', '18620667899', '无', '无', '金时利（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼C46档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('217', '男人装', '18620568839', '无', '无', '男人装（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8222A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('218', '牛奶妹(星 ', '18620237712', '无', '无', '牛奶妹（星一）', '', '', '', '', '', '', '', '广州市十三行美衣城C109-C110', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('219', 'EP炫', '18620209699', '无', '无', 'EP炫', '', '', '', '', '', '', '', '广州市十三行红遍天罗马街78档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('220', 'ABC酷（清 ', '18620148080', '无', '无', 'ABC酷', '', '', '', '', '', '', '', '广州十三行新中国大厦12楼23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('221', '汪松', '18620118155', '无', '无', '狮博（谢）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城9楼9608档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('222', '邱俊', '18620100802', '无', '无', '利依奴（商）', '', '', '', '', '', '', '', '广州市荔湾区站前一街26、28号世贸服装城M层205-207。', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('223', '靓之彩', '18620063048', '无', '无', '靓之彩（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦12楼67号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('224', 'B666', '18620053085', '无', '无', 'B666(卢）', '', '', '', '', '', '', '', '广州市新中国大厦十三行6楼B666档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('225', '金六指', '18618480508', '无', '无', '金六指（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼唐人街58号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('226', '金卡洛琳', '18617333127', '无', '无', '金卡洛琳（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天韩国街37号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('227', '彭华明', '18602710636', '无', '无', '衣品道（商）', '', '', '', '', '', '', '', '武汉市汉正街第一大道蓝宝石座4F-17号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('228', '心跳男孩', '18602025528', '无', '无', '心跳男孩（贺）', '', '', '', '', '', '', '', '广州市沙河新天地服装城五楼563档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('229', '曹丽华', '18520156148', '无', '无', '伊美林（戴）', '', '', '', '', '', '', '', '广州市十三行红遍天唐人街三楼30外号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('230', '蔡小亮', '18520131399', '无', '无', '南町（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9352室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('231', '衣龙', '18520007844', '无', '无', '衣龙（谢）', '', '', '', '', '', '', '', '广州市红棉国际服装城7楼7259档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('232', '王云珍', '18357170718', '无', '无', '盈佳（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法服装城4-001A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('233', '裳美伊人', '18357130386', '无', '无', '裳美伊人（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法市场3F-99', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('234', '魔帅', '18318763311', '无', '无', '魔帅（杨）', '', '', '', '', '', '', '', '广州市富骊大厦609室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('235', '张光兰', '18200997788', '无', '无', '动力源（杨）', '', '', '', '', '', '', '', '广州红棉国际服装城184号 9楼9121', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('236', '星衣树', '18026291358', '无', '无', '星衣树（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼109室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('237', '时尚芭拉', '18026276778', '无', '无', '时尚芭拉（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路042档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('238', '诺丹伦', '18024662189', '无', '无', '诺丹伦（清）', '', '', '', '', '', '', '', '广州市新中国大厦7楼D52档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('239', '流行快线', '15999979348', '无', '无', '流行快线（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9131.3605档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('240', '名媛皮具', '15999975527', '无', '无', '名媛皮具（吴）', '', '', '', '', '', '', '', '广州市高第街48号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('241', '吴丹捷', '15999966222', '无', '无', '跨海服饰', '', '', '', '', '', '', '', '福建省石狮市厝头新街75号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('242', '緹娜清', '15999958318', '无', '无', '緹娜（清', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼D13加档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('243', '梵嘉妮', '15999952800', '无', '无', '梵嘉妮', '', '', '', '', '', '', '', '广州市红棉国际服装城五楼5289档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('244', '盘龙堡', '15999951172', '无', '无', '盘龙堡（郭）', '', '', '', '', '', '', '', '广州环市西路红棉国际时装城9楼9303室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('245', 'MaKai', '15999950109', '无', '无', 'MaKai(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼71档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('246', '刘军华', '15999943322', '无', '无', '古琪儿清', '', '', '', '', '', '', '', '十三行红遍天五楼珠海路46号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('247', '林屋', '15999936525', '无', '无', '林屋（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦诚大3楼3903档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('248', '梅依玲', '15999935886', '无', '无', '卡蒂玫娅（清）', '', '', '', '', '', '', '', '广州市海珠区客村立交愉景雅苑雅致阁A402', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('249', '左斌', '15999933996', '无', '无', '左斌（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9206室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('250', '许焕杰', '15999900136', '无', '无', '雅依杰', '', '', '', '', '', '', '', '广州市越秀区北京路高第街105号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('251', '林赛芳', '15999648116', '无', '无', 'TCIubstyle(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦诚大写字楼五楼A559档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('252', '圆圆（清）', '15993498160', '无', '无', '圆圆', '', '', '', '', '', '', '', '广州市十三行新中国大厦四楼B437档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('253', '李虹', '15992496618', '无', '无', '（com.71）（琳）', '', '', '', '', '', '', '', '广州十三行新中国5楼B563档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('254', '孔爱莲', '15989295228', '无', '无', 'LEOS(杨）', '', '', '', '', '', '', '', '广州市人民北路921号富丽大厦630室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('255', '华天', '15989228036', '无', '无', '华天(玲)', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('256', '唐正香', '15989215931', '无', '无', '雪豹世家（清）', '', '', '', '', '', '', '', '广州市三元里梓元岗水电皮具城东7档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('257', '雪豹作废', '15989215931', '无', '无', '雪豹世家（清）作废', '', '', '', '', '', '', '', '广州市梓元岗水电皮具城东7档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('258', '衣伦', '15989183290', '无', '无', '衣伦（蔡）', '', '', '', '', '', '', '', '广州市新大地服装城5楼598室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('259', 'Ly', '15989161788', '无', '无', 'Ly(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B651档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('260', '韩晴忆恋', '15989102180', '无', '无', '韩晴忆恋（萍）', '', '', '', '', '', '', '', '广州十三行新中国大厦10楼27档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('261', '亚通箱包', '15989098808', '无', '无', '亚通箱包（吴）', '', '', '', '', '', '', '', '广州市梓元岗水电综合市场129档之三', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('262', '杨洪会', '15989073316', '无', '无', 'SHI（谢）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('263', '陈春妹', '15989000867', '无', '无', '设计屋（清）', '', '', '', '', '', '', '', '广州市十三行美衣城B062档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('264', '肩并肩', '15980480043', '无', '无', '肩并肩', '', '', '', '', '', '', '', '福建省石狮市灵秀创业园肩并肩服饰', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('265', '盈科', '15980480043', '无', '无', '盈科(商)', '', '', '', '', '', '', '', '石狮市香江路北侧五星段B1#13-15二至六层', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('266', '八方岛', '15975587198', '无', '无', '八方岛（红遍天）（欧）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('267', '易日明', '15975574144', '无', '无', '超利（蝶）', '', '', '', '', '', '', '', '广州市高第街1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('268', '靓一代', '15975567868', '无', '无', '靓一代（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大时代十五楼188档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('269', '靓一代', '15975567868', '无', '无', '靓一代（谢）', '', '', '', '', '', '', '', '广州市新中国大时代十五楼188档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('270', 'MMS', '15975501171', '无', '无', 'MMS（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼155档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('271', '姚姐', '15967181866', '无', '无', '新雅行', '', '', '', '', '', '', '', '杭州四季青意法服装市场3F-075档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('272', '小苏', '15960578399', '无', '无', '无名都（商）', '', '', '', '', '', '', '', '福建石狮市新塘街道良钟场7号无名都服饰7栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('273', '许基瑜', '15959575888', '无', '无', '金丝赛马', '', '', '', '', '', '', '', '福建省石狮市灵秀镇灵山村A21号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('274', '燕燕围巾', '15958308161', '无', '无', '燕燕围巾', '', '', '', '', '', '', '', '濮院中央商城绍兴街302号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('275', '陈慧芳', '15958153828', '无', '无', '辣妹子', '', '', '', '', '', '', '', '杭州四季青意法服饰城7楼7075号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('276', '包长燕', '15926220171', '无', '无', '橙牌（商）', '', '', '', '', '', '', '', '武汉大夹街13街215号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('277', '帽之秘语', '15920872058', '无', '无', '帽之秘语（清）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('278', '圣帝亚哥', '15920808995', '无', '无', '圣帝亚哥（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装城9117档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('279', '王生', '15920625286', '无', '无', '欧米鹊（商）', '', '', '', '', '', '', '', '东莞市虎门镇镇口第一工业区二十八栋之二5楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('280', '黄少钊', '15920606539', '无', '无', '依米世家（商）', '', '', '', '', '', '', '', '广东省东莞市虎门镇口牌坊宝丽厂内A101#', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('281', '薇可', '15920566979', '无', '无', '薇可（广州白马）（欧）', '', '', '', '', '', '', '', '广州市站南路16号白马大厦二楼2477档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('282', '粤骏', '15920416186', '无', '无', '粤骏（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼C20A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('283', '张小兰', '15920371478', '无', '无', '零点(广州第一大道)(清)', '', '', '', '', '', '', '', '广州市第一大道负一层女人街E17-2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('284', '芸铌', '15920324480', '无', '无', '芸铌（广州大都市）（清）', '', '', '', '', '', '', '', '解放南路88号大都市鞋城1E43B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('285', 'XL', '15920160520', '无', '无', 'XL(陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城8305B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('286', '余芹', '15920158093', '无', '无', '金碧（谢）', '', '', '', '', '', '', '', '广州市站西路57号二号楼8765室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('287', '奇伟鞋业', '15919663408', '无', '无', '奇伟鞋业（吴）', '', '', '', '', '', '', '', '广州市广州大道南1629号华南鞋城一区52档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('288', '周丽琼', '15919658600', '无', '无', '至n（陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城三楼3660A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('289', '粱润江', '15918898303', '无', '无', '千姿彩（谭）', '', '', '', '', '', '', '', '广州市十三行美衣城E108档（儿童公园负一层', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('290', '爱琴鱼', '15918777787', '无', '无', '爱琴鱼(广州红棉)(清)', '', '', '', '', '', '', '', '广州市环市西路红棉国际时装城5213室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('291', '诗琦酷娃', '15918771239', '无', '无', '诗琦酷娃', '', '', '', '', '', '', '', '广州市十三行新中国负二楼B2501档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('292', 'MM', '15918764750', '无', '无', 'MM（清）', '', '', '', '', '', '', '', '广州市十三行美衣城B062A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('293', '张莹', '15918748825', '无', '无', 'InBa(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦六楼C658A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('294', '力威王', '15918722292', '无', '无', '力威王（陈）', '', '', '', '', '', '', '', '广州市沙河万佳服装城10街2A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('295', '文希', '15918701421', '无', '无', '文希（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼C577档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('296', '欧佳莉', '15918668560', '无', '无', '欧佳莉（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('297', '胡天勇', '15918605852', '无', '无', '艾菲儿（清）', '', '', '', '', '', '', '', '广州市梓元岗水电134档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('298', '林树森', '15918604412', '无', '无', '韩丽(广州沙河)(清)', '', '', '', '', '', '', '', '广州市沙河万佳10街47档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('299', 't02', '15918513143', '无', '无', 't02（云）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼97档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('300', '陈公远', '15918463360', '无', '无', '标奇（红）', '', '', '', '', '', '', '', '广州市地一大道富一层A76-2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('301', '同艳梅', '15918425372', '无', '无', '黑娃（清）', '', '', '', '', '', '', '', '广州市十三行红遍天4楼南京路35号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('302', '胡兴龙', '15917399565', '无', '无', '江锋（清）', '', '', '', '', '', '', '', '广州市万福路湛塘路口越和精品批发市场A2-3-4档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('303', '伊力索', '15917392222', '无', '无', '伊力索（蔡）', '', '', '', '', '', '', '', '广州市环市西路红棉国际服装城9楼9308档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('304', '爱琴鱼', '15915951588', '无', '无', '爱琴鱼·牛仔（广州沙河）（清）', '', '', '', '', '', '', '', '广州市沙河万佳市场八街62档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('305', '庞胜强', '15915920806', '无', '无', '胜皇鹰（陈）', '', '', '', '', '', '', '', '广州市沙河益民服装市场南区F12档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('306', '苏燕妮', '15915881688', '无', '无', '半兽人（陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7239', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('307', '胜佳鞋业', '15915880580', '无', '无', '胜佳鞋业（杨）', '', '', '', '', '', '', '', '广州市站西路26号国际商贸中心步云天地一楼D133档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('308', '金马', '15915860163', '无', '无', '金马（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路20号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('309', '狼之威', '15915769999', '无', '无', '狼之威（郭）', '', '', '', '', '', '', '', '广州红棉国际时装城8楼8227A室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('310', '简单化', '15915729770', '无', '无', '简单化（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9207档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('311', '杨柏', '15915503698', '无', '无', '永通（谢）', '', '', '', '', '', '', '', '广州大道南1629号新华南鞋业城三区281档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('312', '雅特斯', '15914380335', '无', '无', '雅特斯（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路39号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('313', '王小姐', '15914352617', '无', '无', '远宏', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼12档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('314', '谢瑞杨', '15914326894', '无', '无', '快乐宝贝（清', '', '', '', '', '', '', '', '广州市十三行美衣城A区040档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('315', '欧地娅', '15913196898', '无', '无', '欧地娅（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦15楼022室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('316', 'SN', '15913171619', '无', '无', 'SN(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9FA55档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('317', '自然逸', '15913117224', '无', '无', '自然逸（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦11楼13A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('318', '爱魅', '15913107779', '无', '无', '爱魅（欧）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼C655室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('319', '今日主流', '15906612055', '无', '无', '今日主流', '', '', '', '', '', '', '', '杭州四季青意法服饰城4F-56', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('320', '汪福团', '15905952111', '无', '无', '卡斯克', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('321', '啊正', '15902786598', '无', '无', '卓越线（商）', '', '', '', '', '', '', '', '武汉市桥口区汉正街第一大道银座3F25-2号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('322', 'A.K.S', '15902029797', '无', '无', 'A.K.S(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼59A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('323', '群众皮具', '15899978695', '无', '无', '群众皮具（玲）', '', '', '', '', '', '', '', '广州市海珠区高第街42号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('324', 'CM', '15899977665', '无', '无', 'CM(清）', '', '', '', '', '', '', '', '广州市十三行美衣城C022档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('325', '邱明媚', '15899976088', '无', '无', '麦克仕登（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9612室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('326', '流行舞台', '15899959209', '无', '无', '流行舞台（吴）', '', '', '', '', '', '', '', '广州市沙河益民D区2D88档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('327', '龚永雄', '15899823616', '无', '无', '咔帕诺尔', '', '', '', '', '', '', '', '十三行红扁天4楼上海路48', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('328', '味道', '15889953557', '无', '无', '味道（蝶）', '', '', '', '', '', '', '', '广州市十三行富衣城C72A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('329', '秋冬季', '15889950465', '无', '无', '秋冬季（吴）', '', '', '', '', '', '', '', '广州市人民北路富丽大厦615-616档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('330', '艾加加（玲', '15876566387', '无', '无', '艾加加', '', '', '', '', '', '', '', '广州十三行新中国大厦5楼A558', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('331', '纳兰嫣', '15876520615', '无', '无', '纳兰嫣（萍）', '', '', '', '', '', '', '', '广州市沙河南城三楼33档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('332', '畅妮', '15876506177', '无', '无', '畅妮(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼A77档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('333', '叶增杏', '15868868181', '无', '无', 'K.D.yali', '', '', '', '', '', '', '', '杭州乔司吴家村4组77号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('334', '伊甸牛', '15868818288', '无', '无', '伊甸牛（商）', '', '', '', '', '', '', '', '杭州四季青意法服饰城东区二楼2111-2112号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('335', '靓依菲', '15868191880', '无', '无', '靓依蝶菲', '', '', '', '', '', '', '', '杭州意法三楼95', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('336', '彭', '15867147965', '无', '无', '七彩布衣', '', '', '', '', '', '', '', '杭州四季青服装老市场意法5楼207-208', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('337', '依雅', '15867136709', '无', '无', '依雅', '', '', '', '', '', '', '', '杭州四季青服装市场苏杭一楼1F-197号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('338', '飞镖王子', '15860323888', '无', '无', '飞镖王子（商）', '', '', '', '', '', '', '', '晋江市英林玉坂新街40号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('339', '传承', '15859786277', '无', '无', '传承（谢）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装6358档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('340', 'MOLOSO', '15859034555', '无', '无', 'MOLOSO(周）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城7楼7278档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('341', '原色绯闻', '15829536765', '无', '无', '原色绯闻（谢）', '', '', '', '', '', '', '', '广州市红棉国际城9楼9237档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('342', '宇之龙', '15820255687', '无', '无', '宇之龙903', '', '', '', '', '', '', '', '广州市景东服装城A10栋1113', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('343', '蔡秀香', '15820223806', '无', '无', '佳宝玩具（吴）', '', '', '', '', '', '', '', '广州市一德东路万菱广场负一层C032-C033档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('344', '洪鹰', '15819363327', '无', '无', '爱睿（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼B583档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('345', '黄亚云', '15818192793', '无', '无', '童话师姐（蝶）', '', '', '', '', '', '', '', '广州十三行红遍天负一层东京街61档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('346', '黑夫人', '15818154186', '无', '无', '黑夫人（红）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼韩国街32号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('347', '盛田', '15818118090', '无', '无', '盛田（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦四楼C449档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('348', '陆凤娟', '15817177259', '无', '无', '至YE衣酷（杨）', '', '', '', '', '', '', '', '广州市沙河万佳七街50档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('349', '林秀芳', '15817173288', '无', '无', 'JF（谢）', '', '', '', '', '', '', '', '广州市站西路57号2号楼6楼8623', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('350', '车哩子', '15817021210', '无', '无', '车哩子（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦三楼E3089档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('351', '曼琦秀', '15817001549', '无', '无', '曼琦秀（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街7号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('352', '瑛琪', '15816565083', '无', '无', '瑛琪（蔡）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼63A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('353', '麻辣少女', '15815872698', '无', '无', '麻辣少女（萍）', '', '', '', '', '', '', '', '广州十三行红遍天四楼上海路70号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('354', '梁丽华', '15815829199', '无', '无', '依梦（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10F128档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('355', '依度战略', '15815827270', '无', '无', '依度战略（杨）', '', '', '', '', '', '', '', '广州红棉国际时装城九楼9262档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('356', 'ANEVIA', '15813557111', '无', '无', 'ANEVIA（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼D09档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('357', '饰觉', '15813391614', '无', '无', '饰觉（吴）', '', '', '', '', '', '', '', '广州市一德路万菱广场1B031档-032档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('358', '郭邦桂', '15813332415', '无', '无', '历史密码（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9603室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('359', '李上连', '15813326320', '无', '无', '飞越韩风（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层米兰街18档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('360', '戴文堂', '15812453968', '无', '无', '酷王（清）', '', '', '', '', '', '', '', '广州市十三行红遍天六楼广州街46档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('361', 'Moxi', '15811885505', '无', '无', 'Moxi(萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B662档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('362', '韩社', '15811711138', '无', '无', '韩社（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼90档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('363', '冰雨奴', '15800197999', '无', '无', '冰雨奴（云）', '', '', '', '', '', '', '', '广州市人民北路921号富丽大厦516室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('364', '格锐雅', '15800106154', '无', '无', '格锐雅（富郦大厦）', '', '', '', '', '', '', '', '广州市人民北路921号富骊大厦908室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('365', '王国庆', '15800046661', '无', '无', '路知足（谢）', '', '', '', '', '', '', '', '广州市广州大道南新华南鞋城一区37档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('366', '马绕英', '15800044755', '无', '无', '衣典金依源（商）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼珠海路52号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('367', '张瑜', '15800005276', '无', '无', '迦罗博特（商）', '', '', '', '', '', '', '', '广州市红棉国际城8221档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('368', '牛利来', '15800001535', '无', '无', '牛利来（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼A33A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('369', '西城画色', '15800000582', '无', '无', '西城画色（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十七楼1739档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('370', '一九七六', '15622463001', '无', '无', '一九七六（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十五楼023A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('371', '方森洪', '15622461020', '无', '无', '卡丝黛儿（卢）', '', '', '', '', '', '', '', '广州市十三行新中国大厦11楼72档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('372', '卓超', '15622282778', '无', '无', '卓超（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天4楼上海街72档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('373', '王慧茹', '15559108065', '无', '无', '佐伦服饰有限公司', '', '', '', '', '', '', '', '香江路港塘段北侧三栋303', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('374', '郑川平', '15558080180', '无', '无', 'HV（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法服装城5楼151号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('375', 'OI', '15384414880', '无', '无', 'OI（清）', '', '', '', '', '', '', '', '广州市人民南路新中国大厦八楼38档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('376', '动漫潮包社', '15374060360', '无', '无', '动漫潮包社（谢）', '', '', '', '', '', '', '', '广州市梓元岗水电54档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('377', '谢勇', '15363048957', '无', '无', '诗婷露雅（清）', '', '', '', '', '', '', '', '广州十三行红遍天三楼美国街19号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('378', '潮贝', '15360840559', '无', '无', '潮贝（清）', '', '', '', '', '', '', '', '广州市沙河新天地儿童装批发城负一楼10-11-41-42', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('379', '乡村少女', '15360818501', '无', '无', '乡村少女（清）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街26档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('380', '淳希', '15360696877', '无', '无', '淳希（红）', '', '', '', '', '', '', '', '东广州市十三行新中国大厦7楼D21A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('381', '快依季', '15360618434', '无', '无', '快依季(商)', '', '', '', '', '', '', '', '广州红棉国际服装城8226室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('382', '宋锦标', '15360616688', '无', '无', '亿鸣（陈）', '', '', '', '', '', '', '', '广州梓元岗千色皮具城1107档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('383', '李腊梅', '15360573280', '无', '无', '女人秀（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼韩国街92档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('384', '苟晓燕', '15360532066', '无', '无', '新月（红）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼80档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('385', '天字酷', '15360444060', '无', '无', '天字酷（陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城3楼时尚男装区3515档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('386', '卡鑫隆', '15359058911', '无', '无', '卡鑫隆（商）', '', '', '', '', '', '', '', '福建石狮安海镇赤店工业区(曾恒伟）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('387', '叮当牛仔', '15347407488', '无', '无', '叮当牛仔（欧）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层东京街83号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('388', '千色', '15323359570', '无', '无', '千色（立）', '', '', '', '', '', '', '', '广州市将梓元岗千色广场1078档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('389', '袅娜', '15322283341', '无', '无', '袅娜（蝶）', '', '', '', '', '', '', '', '广州十三行红遍天服装批发中心三楼美国街49档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('390', '顺兴', '15322281822', '无', '无', '顺兴（商）', '', '', '', '', '', '', '', '广州大道南1629号华南鞋城二区011档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('391', '魏孝明', '15322211167', '无', '无', 'EMM(吴）', '', '', '', '', '', '', '', '广州红棉国际时装城9楼9321档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('392', '追潮', '15322083666', '无', '无', '追潮（玲）', '', '', '', '', '', '', '', '沙河益民3楼D区149', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('393', '宜纤雅', '15322075578', '无', '无', '宜纤雅（清)', '', '', '', '', '', '', '', '广州十三行新中国大厦5楼A567档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('394', 'ZOOt', '15302291843', '无', '无', 'ZOOt(红）', '', '', '', '', '', '', '', '广州市新中国大厦11楼41档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('395', '尚美', '15302249000', '无', '无', '尚美（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼9FA32档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('396', '沈幼儿', '15267194403', '无', '无', '追唯尔', '', '', '', '', '', '', '', '杭州四季青中纺中心12楼031-033号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('397', '刘华芳', '15267152342', '无', '无', '月月鸟', '', '', '', '', '', '', '', '杭州四季青老市场二楼0706号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('398', '灵感（意旨', '15220031308', '无', '无', '灵感（意旨）（商）', '', '', '', '', '', '', '', '广州市十三行红遍天5楼珠海街17号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('399', '华锋', '15218216352', '无', '无', '华锋（蝶）', '', '', '', '', '', '', '', '广州市起义路高第街43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('400', '幸运来', '15168330708', '无', '无', '幸运来', '', '', '', '', '', '', '', '杭州四季青苏杭一楼151号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('401', '张玲玲', '15159880100', '无', '无', '马拉旗(商)', '', '', '', '', '', '', '', '福建石狮市宝盖科技园马拉旗公司', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('402', '黄玉叶', '15158169589', '无', '无', '酷比乐童装（吴）', '', '', '', '', '', '', '', '广州市沙河北城后场童装世界二楼2007-2008档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('403', '星月贝格', '15158070087', '无', '无', '星月贝格', '', '', '', '', '', '', '', '杭州', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('404', 'AN', '15144569000', '无', '无', 'AN（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B679档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('405', '余经杯', '15102088898', '无', '无', '非凡领域（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天一楼澳门街66档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('406', '洛德', '15102050666', '无', '无', '洛德（周）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8255档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('407', '艾伊朵', '15102025680', '无', '无', '艾伊朵(萍)', '', '', '', '', '', '', '', '广州市十三行红遍天五楼18A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('408', '宇莹', '15099998892', '无', '无', '宇莹（谢）', '', '', '', '', '', '', '', '广州市越秀区万福东路华荟大厦万福精品广场12.13铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('409', '黄华尤', '15099996082', '无', '无', '男社（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装9651室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('410', '小布点', '15099966833', '无', '无', '小布点（清）', '', '', '', '', '', '', '', '广州市十三行美衣城B120档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('411', 'SICON', '15099960768', '无', '无', 'SICON(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦四楼C476档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('412', '罗素云', '15088076633', '无', '无', '依丽丝（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装9325档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('413', '靓依情', '15067337478', '无', '无', '靓依情', '', '', '', '', '', '', '', '浙江省桐乡市濮院羊毛衫市场三区兰州街447号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('414', '欧叶', '15067159175', '无', '无', '欧叶', '', '', '', '', '', '', '', '杭州市四季青意法服饰城中厅3F-233档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('415', '盛元阳', '15018797866', '无', '无', 'CS(谢)', '', '', '', '', '', '', '', '广州市红棉国际服装城6楼6307室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('416', '麦兜', '15018796695', '无', '无', '麦兜（清）', '', '', '', '', '', '', '', '广州市新东豪皮具城A1013B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('417', '龙铮', '15018785668', '无', '无', '龙铮（清）', '', '', '', '', '', '', '', '广州市解放南路大都市鞋城1E62档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('418', '佳玛馥', '15018719111', '无', '无', '佳玛馥（萍', '', '', '', '', '', '', '', '广州十三行红遍天商场三楼唐人街47号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('419', '陈朵媛', '15018480858', '无', '无', '达仕琦（谢）', '', '', '', '', '', '', '', '广州市沙河玩家服装批发广场6街21.23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('420', 'Yi', '15018470249', '无', '无', 'Yi(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼135B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('421', '陈少梅', '15018441680', '无', '无', '依韩（清）', '', '', '', '', '', '', '', '广州新中国大厦10楼65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('422', '艺术单元', '15017551311', '无', '无', '艺术单元（周）', '', '', '', '', '', '', '', '广州市站西路57号站西广场2号楼5楼8518档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('423', '洪发', '15014161648', '无', '无', '洪发（谢）', '', '', '', '', '', '', '', '广州市梓元岗水电A004档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('424', '吴力祺', '15013277999', '无', '无', '热度（陈）', '', '', '', '', '', '', '', '广州市人民北路921号富骊大厦301室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('425', '吴嘉欣', '15013237147', '无', '无', '玛妮（清）', '', '', '', '', '', '', '', '广州市十三行红遍天一楼中国街001档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('426', '帝尔威派', '15013190936', '无', '无', '帝尔威派（商）', '', '', '', '', '', '', '', '广州市红棉国际时装6楼6363档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('427', '小布點', '15013051548', '无', '无', '小布點（广州十三行）（华）', '', '', '', '', '', '', '', '广州市十三行新中国大厦诚大2楼2131档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('428', '安利高', '15011997796', '无', '无', '安利高（红）', '', '', '', '', '', '', '', '广州市越秀区高第街1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('429', '黄茂宽', '15011997793', '无', '无', '骏茂（红）', '', '', '', '', '', '', '', '广州市越秀区高第街1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('430', 'LQNELY', '15011994848', '无', '无', 'LQNELY(戴）', '', '', '', '', '', '', '', '广州市十三行美衣城B026-B028档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('431', '文宇饰品', '15011870557', '无', '无', '文宇饰品（清）', '', '', '', '', '', '', '', '广州市万福B5-1', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('432', '姜文世家', '15002722060', '无', '无', '姜文世家（商）', '', '', '', '', '', '', '', '武汉市第一大道红宝石3F 52-53号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('433', '布波簇', '15002038882', '无', '无', '布波簇（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦三楼E17档.龙城403档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('434', '左轮', '13977524365', '无', '无', '左轮（杨）', '', '', '', '', '', '', '', '广州市沙河益民服装城2B33A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('435', '张梅香', '13975360818', '无', '无', '歌尚（广州新中国）（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼 158档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('436', '卡琪尔', '13968898110', '无', '无', '卡琪尔', '', '', '', '', '', '', '', '浙江省桐乡市濮院工贸大道768号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('437', '陈伟权', '13968087128', '无', '无', '等速', '', '', '', '', '', '', '', '浙江省杭州市萧山经济技术开发区金一路39号2棟5楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('438', '圣鑫', '13960386608', '无', '无', '圣鑫服饰', '', '', '', '', '', '', '', '福建石狮香江路1563-1571号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('439', '郑婷婷', '13958086622', '无', '无', '伽曼', '', '', '', '', '', '', '', '杭州四季青服装老市场南区2170-2171号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('440', '杨珍娣', '13958039205', '无', '无', '艾她', '', '', '', '', '', '', '', '杭州意法6036-6037', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('441', '千红秀', '13958031737', '无', '无', '千红秀女装', '', '', '', '', '', '', '', '杭州意法服饰城3楼003', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('442', '薛妙峰', '13957393906', '无', '无', '小宇服饰（商）', '', '', '', '', '', '', '', '桐鄉濮院一區长春街104号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('443', '酷小子', '13957375529', '无', '无', '酷小子（商）', '', '', '', '', '', '', '', '浙江省桐乡市濮院羊毛衫市场一区济南街1046号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('444', '阿彩格', '13957178316', '无', '无', '阿彩格', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('445', '纤彩秀依', '13957144207', '无', '无', '纤彩秀依（杭州四季青）', '', '', '', '', '', '', '', '杭州四季青服装老市场北区0569号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('446', '陈玉芳', '13929588219', '无', '无', 'CYB（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9606档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('447', '刘振团', '13929541813', '无', '无', '宏泰鞋业（吴）', '', '', '', '', '', '', '', '广州市广州大道南1629号新华南鞋城三区070档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('448', '郑思', '13929529232', '无', '无', '米琪（卢）', '', '', '', '', '', '', '', '广州市 十三行兴隆北路26号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('449', '泽亚', '13929118598', '无', '无', '泽亚（清）', '', '', '', '', '', '', '', '广州市十三行红遍天上海路27号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('450', '张竹英', '13928996942', '无', '无', '爵仕骑（谢）', '', '', '', '', '', '', '', '广州市沙河万佳9街21-23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('451', '曼宝龙', '13928991909', '无', '无', '曼宝龙（云）', '', '', '', '', '', '', '', '广东虎门富民商业大厦二楼东区2611档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('452', '徐华明', '13928965899', '无', '无', '稻儿香（萍）', '', '', '', '', '', '', '', '广州市新中国大厦美衣城A038档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('453', '刘海清', '13928919158', '无', '无', '凯希欧（清）', '', '', '', '', '', '', '', '广州市解放北路水电东7档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('454', '恒盛玩具', '13928914789', '无', '无', '恒盛玩具（清）', '', '', '', '', '', '', '', '广州市一德路万菱广场富一层A048A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('455', '名战士', '13927990198', '无', '无', '名战士（郭）', '', '', '', '', '', '', '', '广州市沙河益民服装城2楼2A99', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('456', 'ITS', '13927390922', '无', '无', 'ITS(戴）', '', '', '', '', '', '', '', '广州市十三行美衣城负一层B040档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('457', '代尔缔诗', '13926880873', '无', '无', '代尔缔诗(广州十三行)(乙)', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼168A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('458', '吴卫国', '13926871295', '无', '无', '自由掌印', '', '', '', '', '', '', '', '东莞市虎门龙眼大道11号4楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('459', '徳凤子', '13926487368', '无', '无', '徳凤子（欧）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层罗马街50-50A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('460', '麦比伦', '13926458833', '无', '无', '麦比伦（广州富丽）（立）', '', '', '', '', '', '', '', '广州市站南路富丽服装广场723室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('461', 'OE', '13926172989', '无', '无', 'OE(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D23A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('462', '陈银水', '13926087287', '无', '无', 'KOZO(广州站西2号楼)(东', '', '', '', '', '', '', '', '广州站西2号楼3147档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('463', '韩道', '13926068819', '无', '无', '韩道（清）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发广场六街104档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('464', '溺爱', '13926050117', '无', '无', '溺爱（清）', '', '', '', '', '', '', '', '广州市十三行美衣城C105档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('465', '许拥军', '13926030869', '无', '无', '拥军鞋业（吴）', '', '', '', '', '', '', '', '广州市大道南1692号新华南鞋城三区03档之二', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('466', '东方', '13926007082', '无', '无', '东方（玲）', '', '', '', '', '', '', '', '广州市汇美服装城北门N-3', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('467', 'KKT', '13926002485', '无', '无', 'KKT（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼唐人街50号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('468', '杨金城', '13925196363', '无', '无', '纯真男孩(商)', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9213档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('469', '杨钗', '13925165033', '无', '无', '圣达伦（陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城8310档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('470', '神州鹰', '13925159352', '无', '无', '神州鹰（贺）', '', '', '', '', '', '', '', '广州市沙河万佳八街95档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('471', '皓宇香香', '13925079299', '无', '无', '皓宇香香（清）', '', '', '', '', '', '', '', '广州市沙河益民服装城3B089档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('472', '大柒', '13925066756', '无', '无', '大柒（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天美国街35号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('473', '花城嘉伦', '13925058217', '无', '无', '花城嘉伦（玲）', '', '', '', '', '', '', '', '广州市新中国大厦15楼005室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('474', '林瑞文', '13925009327', '无', '无', '荣光（谢）', '', '', '', '', '', '', '', '广州市大道南1629号华南鞋城三区012档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('475', '曾红艳', '13924889777', '无', '无', '拓普赛得', '', '', '', '', '', '', '', '广州市人民北路921号富骊大厦11楼1123A室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('476', '索菲娅', '13924283088', '无', '无', '索菲娅（萍）', '', '', '', '', '', '', '', '十三行新中国大厦6楼C638', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('477', '舒菲兰', '13924238521', '无', '无', '舒菲兰（蝶）', '', '', '', '', '', '', '', '广州市人民北路921号富丽大厦911室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('478', '陈娇', '13924097103', '无', '无', '稻草人', '', '', '', '', '', '', '', '十三行新中国大厦负二A2032档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('479', '彭乃朋', '13924050533', '无', '无', '金字塔（谢）', '', '', '', '', '', '', '', '广州市大道南1629号新华南鞋业城三区03档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('480', '卢萍', '13924010303', '无', '无', '糊涂男孩（谢）', '', '', '', '', '', '', '', '广州市沙河益民C 区二楼2C10档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('481', '川淇', '13923313583', '无', '无', '（维迪龙）川淇（商）', '', '', '', '', '', '', '', '广东省中山市小榄镇西区万合路八号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('482', '梁秋群', '13923099269', '无', '无', '爱小米（商）', '', '', '', '', '', '', '', '广州美衣城D073档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('483', '姜四清', '13922757029', '无', '无', '新鹏荣（吴）', '', '', '', '', '', '', '', '广州市沙河益民服装市场2楼C65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('484', 'BJ', '13922728185', '无', '无', 'BJ(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦六楼A651', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('485', '柯建波', '13922424988', '无', '无', '拜酷（陈）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9107-9108档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('486', '徐济文', '13922374858', '无', '无', '天凯瑞（谢）', '', '', '', '', '', '', '', '广州市沙河万佳七街42档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('487', '奔马保罗', '13922366231', '无', '无', '奔马保罗（清）', '', '', '', '', '', '', '', '广州市梓元岗水电大楼58档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('488', '周冬琪', '13922353825', '无', '无', '鑫超（贺）', '', '', '', '', '', '', '', '广州市梓元岗水电大楼下97档之一', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('489', '镁裳', '13922282115', '无', '无', '镁裳（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦12楼3A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('490', '魔寇', '13922280793', '无', '无', '魔寇（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼A21档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('491', '娇亿尔', '13922258799', '无', '无', '娇亿尔加工（王）', '', '', '', '', '', '', '', '广州市珠海区仑头村环村东路98号201室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('492', '唐羽缔', '13922237599', '无', '无', '唐羽缔（红）', '', '', '', '', '', '', '', '广州市新中国大厦八楼115档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('493', '钟道浪', '13922233995', '无', '无', '史丹爱特（谢）', '', '', '', '', '', '', '', '广州红棉国际时装城八楼8313档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('494', '', '13922213053', '无', '无', '168（玲）', '', '', '', '', '', '', '', '广州解放北路1339号森嘉商务大厦首层商贸中心B-', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('495', '奥仕奇', '13922207692', '无', '无', '奥仕奇（贺）', '', '', '', '', '', '', '', '广州沙河新天地服装城五楼514档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('496', '蔡泽彬', '13922173083', '无', '无', '探索者（贺）', '', '', '', '', '', '', '', '广州市沙河有利国际服装城北区一楼1160A档.三楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('497', '振隆', '13922167088', '无', '无', '振隆（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼C551档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('498', 'MISSLACE（', '13911400748', '无', '无', 'MISSLACE', '', '', '', '', '', '', '', '广州十三行新中国大厦9楼B12档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('499', '俞坚', '13906521506', '无', '无', '汎娅', '', '', '', '', '', '', '', '杭州四季青中纺中心八楼B-41', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('500', '艾思琪', '13906508245', '无', '无', '艾思琪（杭州意法）', '', '', '', '', '', '', '', '杭州意法三楼075档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('501', '南天霸狼', '13905989856', '无', '无', '南天霸狼(商)', '', '', '', '', '', '', '', '福建省晋江市英林玉板工业区45号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('502', '魅力元素', '13905818095', '无', '无', '魅力元素', '', '', '', '', '', '', '', '杭州四季青意法服饰城3楼265号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('503', '鹰公子（吴', '13903055655', '无', '无', '鹰公子', '', '', '', '', '', '', '', '广州红棉国际时装城8楼8321室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('504', 'ido', '13903037071', '无', '无', 'ido(虎门富民)(琳)', '', '', '', '', '', '', '', '东莞市虎门镇富民商场一楼北区1602档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('505', '金鑫盛', '13903032599', '无', '无', '金鑫盛（清）', '', '', '', '', '', '', '', '东莞虎门镇富明商业大厦四楼北725档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('506', '米粒女孩', '13903004671', '无', '无', '米粒女孩（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京街35号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('507', '新奇宾', '13902464162', '无', '无', '新奇宾（郭）', '', '', '', '', '', '', '', '广州市红棉国际时装城八楼8228档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('508', '明朗格', '13902281498', '无', '无', '明朗格（广州广控）（杰）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('509', '温拿', '13902266157', '无', '无', '温拿（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9323档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('510', '广州佐登路', '13902206806', '无', '无', '佐登路厂', '', '', '', '', '', '', '', '广州人民北路921富丽313A室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('511', '陈秋兰', '13902206806', '无', '无', '摩天轮（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8335', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('512', '纬伯一派', '13871490664', '无', '无', '纬伯一派（商）', '', '', '', '', '', '', '', '武汉市汉正街第一大道金座3F 80-81号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('513', '陈', '13871383595', '无', '无', '浪力奇（商）', '', '', '', '', '', '', '', '武汉市桥口区古田一路        刘金（收）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('514', '张雪明', '13867385368', '无', '无', '泰龙比特', '', '', '', '', '', '', '', '嘉兴市秀洲区洪合镇科创园外贸街126-128号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('515', '陈桂荣', '13858183840', '无', '无', '怡梦情缘', '', '', '', '', '', '', '', '杭州四季青意法服饰城六楼6125-6126号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('516', '孟丽娟', '13858148150', '无', '无', '博诗嘉（商）', '', '', '', '', '', '', '', '杭州四季青中纺中心6楼6B-10号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('517', '蝴蝶佳人', '13857373963', '无', '无', '蝴蝶佳人', '', '', '', '', '', '', '', '桐乡市濮院三区工贸大道237号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('518', '陈蕾', '13829796000', '无', '无', '圣斗士', '', '', '', '', '', '', '', '广州市沙河万佳服装市场一楼十街B档（李玮）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('519', '主打豹', '13829756858', '无', '无', '主打豹（吴）', '', '', '', '', '', '', '', '广州市万佳9街28档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('520', '林燕红', '13829177838', '无', '无', '美诗（蔡）', '', '', '', '', '', '', '', '东莞富民商业大厦三楼东区3208档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('521', '陈添奕', '13829171234', '无', '无', '百奇乐（东莞虎门）（立）', '', '', '', '', '', '', '', '东莞市太平富民商业大厦东区1515号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('522', '美丽天娇', '13829110871', '无', '无', '美丽天娇（清）', '', '', '', '', '', '', '', '东莞虎门大莹东方国际时装城四楼E区420 档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('523', '柏兴', '13828476010', '无', '无', '柏兴（蝶）', '', '', '', '', '', '', '', '广州市越秀区万福路19号万福精品市场首层1-2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('524', '美的鸟', '13828429932', '无', '无', '美的鸟（贺）', '', '', '', '', '', '', '', '广州市益民服装城A区22号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('525', '臻稀', '13828423503', '无', '无', '臻稀（清）', '', '', '', '', '', '', '', '广州市人民南路88号美衣城B063A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('526', '鸿利容达', '13826972773', '无', '无', '鸿利容达618（虎门富民）（东', '', '', '', '', '', '', '', '虎门富民四楼北区618档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('527', '克利奥', '13826466638', '无', '无', '克利奥（清）', '', '', '', '', '', '', '', '广州市人民南路新中国大厦四楼C0462档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('528', '万海英', '13826447287', '无', '无', 'FLY(玲）', '', '', '', '', '', '', '', '广州市十三行路红遍天富一层米兰街48档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('529', 'KM', '13826446448', '无', '无', 'KM(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼C692档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('530', 'JS', '13826265528', '无', '无', 'JS(玲）', '', '', '', '', '', '', '', '广州新中国大厦九楼B82档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('531', '林鹏', '13826259828', '无', '无', '凯琳（谢）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城7楼7259室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('532', '缀香依', '13826250561', '无', '无', '缀香依（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼B552档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('533', '鹏芝运', '13826240838', '无', '无', '鹏芝运（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天米兰街33号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('534', '振邦', '13826100798', '无', '无', '振邦（广州白马）（清）', '', '', '', '', '', '', '', '广州市白马西郊场423档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('535', '卉喆', '13826058879', '无', '无', '卉喆（蝶）', '', '', '', '', '', '', '', '广州市德政南路仰忠精品批发商场A2-1', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('536', '王宾', '13826028557', '无', '无', 'Biin(谢）', '', '', '', '', '', '', '', '广州市站西2号楼4091室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('537', '颜色色', '13826016653', '无', '无', '颜色色（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼68A室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('538', '姚敏英', '13825781857', '无', '无', '卓依朗（蝶）', '', '', '', '', '', '', '', '东莞市虎门富民商业大厦三楼南区3211档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('539', '大唐高丽', '13825749579', '无', '无', '大唐高丽（蝶）', '', '', '', '', '', '', '', '广州十三行新中国大厦6楼C549', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('540', '艾迪仙果', '13825732618', '无', '无', '艾迪仙果（商）', '', '', '', '', '', '', '', '东莞富民三楼西区3305档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('541', '淘骊', '13825518599', '无', '无', '淘骊（红）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼日本街13号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('542', '王卫平', '13825136316', '无', '无', '我之梦。丹尼相思', '', '', '', '', '', '', '', '广州市沙河万佳服装广场二楼A区214档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('543', '宇奇', '13825106523', '无', '无', '宇奇（商）', '', '', '', '', '', '', '', '广州市白云区新市大埔十二社南航新村自编1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('544', '刘会明', '13825106523', '无', '无', '紫怡缘（蔡）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('545', '娅妮路', '13825104266', '无', '无', '娅妮路（谢）', '', '', '', '', '', '', '', '广州市十三行红遍天2楼日本街88号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('546', '林升', '13825102383', '无', '无', '蒂雪娇兰(商)', '', '', '', '', '', '', '', '站西金顺服装城5A009', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('547', '林发皮具', '13825080448', '无', '无', '林发皮具（吴）', '', '', '', '', '', '', '', '广州市梓元岗水电137档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('548', '蔡生', '13825060088', '无', '无', '彬彩（清）', '', '', '', '', '', '', '', '广州市十三行美衣城C043-C045档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('549', '刘利刚', '13825053178', '无', '无', '天佑奴（广州沙河）（丙）', '', '', '', '', '', '', '', '广州沙河万佳批发市场七街16档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('550', '戈力帆', '13825026000', '无', '无', '戈力帆（陈）', '', '', '', '', '', '', '', '广州市白马服装广场6207档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('551', '汪望云', '13825017337', '无', '无', '浣沙（戴）', '', '', '', '', '', '', '', '广州市十三行美衣城D055档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('552', '杰伊斯', '13825002618', '无', '无', '杰伊斯（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼36档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('553', '杰伊斯', '13825002618', '无', '无', '杰伊斯（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼101档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('554', '紫莲', '13824471371', '无', '无', '紫莲（陈）', '', '', '', '', '', '', '', '广州市万福路越和仰忠饰品批发市场A1-3', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('555', 'SOMO', '13824468202', '无', '无', 'SOMO(萍）', '', '', '', '', '', '', '', '广州市新中国大厦C559', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('556', '野性诱惑', '13823452297', '无', '无', '野性诱惑', '', '', '', '', '', '', '', '广州十三行红遍天负1楼东京街63号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('557', '曹军', '13823216930', '无', '无', '金蝶（商）', '', '', '', '', '', '', '', '东莞虎门镇富民商场五楼西区B512档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('558', '陈雁齐', '13822383614', '无', '无', '雨茵（东莞富民）（丙）', '', '', '', '', '', '', '', '东莞富民商业大厦东区2208号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('559', '曾晓玲', '13822286994', '无', '无', '班蒙（冰）', '', '', '', '', '', '', '', '广州市红棉国际服装城7楼7210-7210A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('560', '欧吨', '13822280830', '无', '无', '欧吨（商）', '', '', '', '', '', '', '', '广州市环市西路158号壹马服装广场七楼A02室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('561', '第二跑道', '13822272645', '无', '无', '第二跑道（陈）', '', '', '', '', '', '', '', '广州市沙河新天地服装批发城五楼561档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('562', '冬之恋', '13822261587', '无', '无', '冬之恋（清）', '', '', '', '', '', '', '', '广州市万福路卬忠精品批发市场A1-7档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('563', '丰和大道', '13822257762', '无', '无', '丰和大道（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天服装市场富一层罗马街55号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('564', '卡西亚', '13822252162', '无', '无', '卡西亚（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层东京街12号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('565', '东门街头', '13822233968', '无', '无', '东门街头（蝶）', '', '', '', '', '', '', '', '广州市人民南路美衣城负一层D059号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('566', '水玲珑', '13822190846', '无', '无', '水玲珑（萍）', '', '', '', '', '', '', '', '广州市泰康路111号泰康城广场三楼3090A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('567', '李明', '13822172268', '无', '无', '茜施里亚（蝶', '', '', '', '', '', '', '', '广州市十三行红遍天三楼唐人街53号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('568', '汉著', '13822103736', '无', '无', '汉著（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼109档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('569', '森木', '13822100183', '无', '无', '森木（清）', '', '', '', '', '', '', '', '广州市人民南路美衣城C099档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('570', '衣秀', '13819302055', '无', '无', '红蝶衣秀', '', '', '', '', '', '', '', '浙江桐乡濮院羊毛衫市场三区拉萨街614号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('571', '王桂嫦', '13809623678', '无', '无', '依莎艾伦（商）（明骏）', '', '', '', '', '', '', '', '广东东莞虎门镇金捷南路小捷滘工业区', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('572', '祺雪儿', '13808892621', '无', '无', '祺雪儿（云）', '', '', '', '', '', '', '', '东莞市虎门富民北区2519档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('573', '明兴', '13808880221', '无', '无', '明兴（蓉）', '', '', '', '', '', '', '', '广州市沙河万佳广场三街31-33', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('574', '亨狄尼', '13808867348', '无', '无', '亨狄尼（周）', '', '', '', '', '', '', '', '广州市红棉国际时装城9230-9236室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('575', '米豆儿', '13808866339', '无', '无', '米豆儿（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路22号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('576', '78', '13808866339', '无', '无', '78（清）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路22号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('577', '米豆儿', '13808866339', '无', '无', '米豆儿（清）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳璐22号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('578', '林土轩', '13808821170', '无', '无', '追男（林博轩尼）（杨）', '', '', '', '', '', '', '', '广州市先烈东路143号万佳广场二楼B204档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('579', '三小姐', '13808815828', '无', '无', '三小姐（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层东京街96号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('580', '张谋革', '13808557153', '无', '无', '乐斯泰（商）', '', '', '', '', '', '', '', '福建晋江市英林伍堡新兴街39-41号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('581', '拼克', '13808553768', '无', '无', '拼克（商）', '', '', '', '', '', '', '', '福建石狮市富丰商城2期B1幢501-513号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('582', '盖世浪人', '13808542057', '无', '无', '盖世浪人', '', '', '', '', '', '', '', '福建晋江浔光工业区', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('583', '快客车', '13806733679', '无', '无', '快客车', '', '', '', '', '', '', '', '桐乡市濮院毛衫市场三区成都街411号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('584', '谷翼崎', '13805988319', '无', '无', '谷翼崎', '', '', '', '', '', '', '', '福建石狮南洋路信德明大厦C栋1102-1104', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('585', '苏俊扬', '13805986597', '无', '无', '苏戈（商）', '', '', '', '', '', '', '', '福建省石狮市', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('586', '紫金朗', '13805941807', '无', '无', '紫金朗（商）', '', '', '', '', '', '', '', '福建石狮市前廊二号工业区4幢', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('587', '划船人', '13805917580', '无', '无', '划船人服饰', '', '', '', '', '', '', '', '石狮市灵秀镇华山村华南一区92号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('588', '徐悦英', '13805796027', '无', '无', '卓儿衣人（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法服装城3-177', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('589', '米娜', '13805782649', '无', '无', '米娜', '', '', '', '', '', '', '', '杭州四季青服饰城意法四楼中厅206', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('590', '王有龙', '13805708308', '无', '无', '非屿', '', '', '', '', '', '', '', '杭州市秋涛路629号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('591', '花亦慕', '13802802699', '无', '无', '花亦慕（清）', '', '', '', '', '', '', '', '广州市站前路195号广安针毛织服装大厦219室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('592', '雅典娜', '13802793749', '无', '无', '雅典娜（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D11A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('593', '陈小义', '13802789666', '无', '无', '克诺奇（周）', '', '', '', '', '', '', '', '广州站西广场2号楼8777室(裤子）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('594', '芊颖', '13802787812', '无', '无', '芊颖（蝶）', '', '', '', '', '', '', '', '广州市红遍天二楼韩国街68号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('595', '蓝色e唛', '13802768260', '无', '无', '蓝色e唛（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9126档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('596', '卡曼芬达', '13802766958', '无', '无', '卡曼芬达（周', '', '', '', '', '', '', '', '广州市红棉国际时装城9203室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('597', '邹桂兵', '13802543525', '无', '无', '极度缘（吴）', '', '', '', '', '', '', '', '广州市沙河万佳广场二街15-17档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('598', '英浩', '13802523803', '无', '无', '英浩（红）', '', '', '', '', '', '', '', '广州市红遍天二楼日本街72号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('599', '黄胜', '13802356969', '无', '无', '鑫琦宜（戴）', '', '', '', '', '', '', '', '广州市十三行新中国大厦19楼1955档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('600', '杨彬娅', '13801071238', '无', '无', '毛毛桃子', '', '', '', '', '', '', '', '北京市百荣世贸商城一楼071号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('601', '柯总', '13799880688', '无', '无', '火狐鸟（商）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('602', '下之星', '13798798918', '无', '无', '下之星（清）', '', '', '', '', '', '', '', '东莞虎门富民商业大厦东区1305档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('603', '廖炳框', '13798112588', '无', '无', '莹点（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天六楼北京路15档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('604', '冯小姐', '13798069090', '无', '无', 'FG服饰（谭）', '', '', '', '', '', '', '', '广州市十三行美衣城C070档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('605', '苏伟华', '13798057088', '无', '无', '意曼迪刘）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街63-65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('606', '马尼迪', '13798032828', '无', '无', '马尼迪（贺）', '', '', '', '', '', '', '', '广州市广园东路1858号新天地服装城三楼B322档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('607', '甜蜜蜜童装', '13798011623', '无', '无', '甜蜜蜜童装行（清）', '', '', '', '', '', '', '', '广州市沙河新天地南首层童装批发市场026-027档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('608', '刘生彬', '13798004753', '无', '无', '欧势力（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼C567档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('609', '7D', '13794436813', '无', '无', '7D(清）', '', '', '', '', '', '', '', '广州市站前路195号世贸服装城1002-1006室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('610', '澳牌毛衣', '13794381197', '无', '无', '澳牌毛衫', '', '', '', '', '', '', '', '广州市十三行', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('611', '依诗柏', '13790665188', '无', '无', '依诗柏（清）', '', '', '', '', '', '', '', '东莞市虎门镇北栅上灯村', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('612', '詹耀坤', '13790330686', '无', '无', '型男索女（虎门富民）', '', '', '', '', '', '', '', '虎门富民商业大厦二楼东区2611档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('613', '亲爱的', '13790311711', '无', '无', '亲爱的（东莞富民）（清）', '', '', '', '', '', '', '', '东莞富民南区2522档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('614', '邓荣派', '13790217988', '无', '无', '爱非龙（商）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦北区2207档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('615', '林喜龙', '13790205550', '无', '无', '富鑫（陈）', '', '', '', '', '', '', '', '东莞虎门镇富民三楼南区3203档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('616', '蔡', '13788823323', '无', '无', '星角度（商）', '', '', '', '', '', '', '', '福建石狮市纺织机械市场6B栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('617', '伊万。杰琳', '13777750298', '无', '无', '伊万。杰琳', '', '', '', '', '', '', '', '杭州市四季青意法服饰城5F-197号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('618', '董振英', '13777583330', '无', '无', '怡尚元素服饰', '', '', '', '', '', '', '', '杭州四季春意法服饰城7楼7172号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('619', '金秀琴', '13777486890', '无', '无', 'e秀之家（商）', '', '', '', '', '', '', '', '浙江省杭州中纺中心7A-06号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('620', '木夕', '13777475316', '无', '无', '木夕（商）', '', '', '', '', '', '', '', '杭州市四季青服饰城（意法）5F002', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('621', '王少华', '13777457925', '无', '无', '酷贝儿（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法服装城4-182', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('622', '围巾天地', '13777417981', '无', '无', '围巾天地', '', '', '', '', '', '', '', '杭州市四季青南大门精品女装二楼237', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('623', '布制良品', '13763393377', '无', '无', '布制良品（郭）', '', '', '', '', '', '', '', '广州市红棉国际时装城8320档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('624', '施家福', '13763381611', '无', '无', '中韩日（清）', '', '', '', '', '', '', '', '广州市十三行红遍天罗马街25号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('625', '曼可利', '13763377776', '无', '无', '曼可利（杨）', '', '', '', '', '', '', '', '广州市站西路57号二号楼8848档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('626', '名鼠', '13763338557', '无', '无', '名鼠（商）', '', '', '', '', '', '', '', '广州白马2205档(广州市天马服装市场7042档扬', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('627', '陈生', '13763332255', '无', '无', '柏娜（商）', '', '', '', '', '', '', '', '广州十三行红遍天5楼珠海路一号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('628', '龙兴行', '13763330614', '无', '无', '龙兴行（清）', '', '', '', '', '', '', '', '广州市德政南路128号C6档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('629', '组阁', '13763315323', '无', '无', '组阁（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9FB63档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('630', '陈银水', '13763312912', '无', '无', 'E格（海）', '', '', '', '', '', '', '', '广州红棉时装城九楼9306室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('631', '戈爵尚品', '13763308390', '无', '无', '戈爵尚品（清）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7266档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('632', '淘金路', '13763127775', '无', '无', '淘金路（蝶）', '', '', '', '', '', '', '', '广东东莞虎门镇富民商业大厦1楼东区1511档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('633', '雪琪雨', '13760890998', '无', '无', '雪琪雨（清）', '', '', '', '', '', '', '', '广州市红遍天三楼唐人街28号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('634', '欧日韩', '13760882950', '无', '无', '欧日韩（蝶）', '', '', '', '', '', '', '', '广州新中国大厦九楼A26档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('635', '宏利', '13760881991', '无', '无', '宏利（宋）', '', '', '', '', '', '', '', '广州市沙河万佳广场十街42号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('636', '花衣木厨', '13760872997', '无', '无', '花衣木厨（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路71号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('637', '悦来悦好', '13760853218', '无', '无', '悦来悦好（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天服装城6楼广州路18号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('638', '蒋仁杰', '13760853218', '无', '无', '悦来悦好（清）', '', '', '', '', '', '', '', '广州市十三红遍天服装城五楼珠海路31号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('639', '杨亚芳', '13760850088', '无', '无', '黑魔域（商）', '', '', '', '', '', '', '', '广州沙河万佳广场六街14档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('640', '梦伊娜', '13760845252', '无', '无', '梦伊娜（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼C41', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('641', '魅奥', '13760835223', '无', '无', '魅奥（萍）', '', '', '', '', '', '', '', '广州市新中国大厦8楼198档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('642', '金彩华燕', '13760810146', '无', '无', '金彩华燕（清）', '', '', '', '', '', '', '', '广州市站前路新大地服装城672', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('643', '肖灿华', '13760783623', '无', '无', '玛迪奇（商）', '', '', '', '', '', '', '', '广州富丽大厦626时', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('644', '舒悦', '13760757181', '无', '无', '舒悦（玲）', '', '', '', '', '', '', '', '广州市万福东路19号华荟大厦首层1-8档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('645', '万玉杭', '13760737996', '无', '无', '500YEAR((蔡）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际服装城9326室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('646', '金鑫', '13760727065', '无', '无', '金鑫（谢）', '', '', '', '', '', '', '', '广州市海珠区华南鞋城三区27-28档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('647', '玛狮路', '13760716698', '无', '无', '玛狮璐（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7310档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('648', '卡缇秀', '13760707097', '无', '无', '卡缇秀（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D32档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('649', '杨木兰', '13760670920', '无', '无', '天尚品（雯）', '', '', '', '', '', '', '', '广州市十三行美衣城C101档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('650', '飞影', '13760666801', '无', '无', '飞影（蝶）', '', '', '', '', '', '', '', '广州市十三行美衣城B023-021档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('651', '诗梦妮', '13760664566', '无', '无', '诗梦妮（萍）', '', '', '', '', '', '', '', '广州新中国大厦八楼195档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('652', '夏冷青果', '13760658270', '无', '无', '夏冷青果（蝶）', '', '', '', '', '', '', '', '广州市新中国大厦9楼B101室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('653', '85.87', '13760638587', '无', '无', '85.87(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十楼31室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('654', '多香果', '13760619757', '无', '无', '多香果（蝶）', '', '', '', '', '', '', '', '广州市十三行美衣城富一楼B106-B108档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('655', '吴小姐', '13760615272', '无', '无', '韩姿（雯）', '', '', '', '', '', '', '', '广州市十三行新中国大厦富衣城A区23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('656', '皇族服饰', '13757179509', '无', '无', '皇族服饰', '', '', '', '', '', '', '', '杭州意法服饰7楼7057号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('657', '锦潮', '13751890420', '无', '无', '锦潮（蝶）', '', '', '', '', '', '', '', '广州市红遍天二楼日本街11档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('658', '粉黛尔（清', '13751888867', '无', '无', '粉黛尔', '', '', '', '', '', '', '', '广州市十三行新中国大厦四楼B416室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('659', '雷卡司', '13751834730', '无', '无', '雷卡司（陈）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城九楼9135档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('660', '托普尔', '13751813797', '无', '无', '托普尔（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9253档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('661', '林雪琴', '13751800801', '无', '无', 'Seg(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦4楼B402档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('662', '俊蓉好心情', '13751798943', '无', '无', '俊蓉好心情（谢）', '', '', '', '', '', '', '', '广州市锦都服装城六楼601-603室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('663', '赖健斌', '13751792151', '无', '无', '动力男孩（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城8310档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('664', '宋丽萍', '13751788960', '无', '无', '飘浪一簇（清）', '', '', '', '', '', '', '', '广州市沙河益民D区2楼5档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('665', '荣升袜业', '13751763970', '无', '无', '荣升袜业（（（玲）', '', '', '', '', '', '', '', '广州市高第街50号地下', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('666', 'T-one', '13751754091', '无', '无', 'T-one(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼86档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('667', '华盛', '13751718481', '无', '无', '华盛（吴）', '', '', '', '', '', '', '', '广州市解放北路梓元岗水电23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('668', '杨惠园', '13751335523', '无', '无', '红叶（虎门富民）', '', '', '', '', '', '', '', '虎门富民南区2215档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('669', '邓荣明', '13751306599', '无', '无', '百狮奴（商）', '', '', '', '', '', '', '', '虎门富民北区2202档，广州红棉国际时装城8楼82', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('670', '田勇南', '13750898296', '无', '无', '诗丽雅（茗依街）', '', '', '', '', '', '', '', '杭州中纺中心8B-14号，四季青意法服饰城7楼7072', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('671', '江芳', '13738072390', '无', '无', '娜美星野', '', '', '', '', '', '', '', '海盐县六里工业园区娜美星野有限公司', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('672', '吴齐勇', '13738043648', '无', '无', '艾可拉芙', '', '', '', '', '', '', '', '杭州四季青中纺中心8F-B44号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('673', '七彩香袖', '13735897969', '无', '无', '七彩香袖（商）', '', '', '', '', '', '', '', '杭州四季青意法服饰城4-75号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('674', '衣典', '13732260004', '无', '无', '衣典', '', '', '', '', '', '', '', '杭州四季青老市场3楼174', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('675', '刘生', '13729929858', '无', '无', '潮蝶', '', '', '', '', '', '', '', '东莞市虎门镇太新路6巷4.5.6栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('676', '熊培香', '13729896619', '无', '无', '馨妮贝尔（商）', '', '', '', '', '', '', '', '广州红遍天4楼南京路45号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('677', '191号', '13729838765', '无', '无', '191号（玲）', '', '', '', '', '', '', '', '广州市北路高第街191号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('678', '博斯发皮具', '13729830598', '无', '无', '博斯发皮具（吴）', '', '', '', '', '', '', '', '广州市梓元岗水电31档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('679', '酷魅', '13729827559', '无', '无', '酷魅（清）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层罗马街106号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('680', '陈晓阳', '13729810456', '无', '无', '哈蒙尼(广州红棉)', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城九楼9266号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('681', '王齐华', '13728542159', '无', '无', '诗来雅加工（周）', '', '', '', '', '', '', '', '佛山市禅城区文华北路南沙工业区二座303号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('682', '何伟强', '13728283178', '无', '无', '蓝鹤（商）', '', '', '', '', '', '', '', '东莞市虎门富民商业大厦北1103', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('683', '丽映', '13728282271', '无', '无', '丽映（虎门富民）（清）', '', '', '', '', '', '', '', '虎门富民时装商场五楼南区B302档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('684', '娜宇惠', '13728140698', '无', '无', '娜宇惠（蝶）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦五楼南区B510档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('685', '谭日泉', '13728077127', '无', '无', '勇霸者（谢）', '', '', '', '', '', '', '', '广州市沙河万佳市场七街19-21', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('686', '陈水仙', '13728077038', '无', '无', '美亚（杨）', '', '', '', '', '', '', '', '广州市沙河万佳服装市场49-51', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('687', '永安', '13728067755', '无', '无', '永安（杨）', '', '', '', '', '', '', '', '广州市越秀区起义路60号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('688', '木屋一族', '13728067693', '无', '无', '木屋一族', '', '', '', '', '', '', '', '广州市十三行红遍天三楼大厦美国街36（六楼北京路2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('689', '韩怡', '13728021188', '无', '无', '韩怡（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼A577档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('690', '雪飞尔', '13728015700', '无', '无', '雪飞尔（萍）', '', '', '', '', '', '', '', '广州市泰康路泰康城广场四楼3089B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('691', '西尚围巾', '13728013512', '无', '无', '西尚围巾（清）', '', '', '', '', '', '', '', '广州市越秀区德政南路128号仰忠批发市场A1-8档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('692', 'ZZK廣州', '13728001341', '无', '无', 'ZZK（廣州站西）（清）', '', '', '', '', '', '', '', '廣州市站西路站西大廈2號樓1291檔', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('693', '蒙利莱', '13726890999', '无', '无', '蒙利莱（清）', '', '', '', '', '', '', '', '广州市荔湾区浆栏路4号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('694', '南锐', '13726737649', '无', '无', '南锐（玲）', '', '', '', '', '', '', '', '广州市德政南路128好越和仰忠精品批发商场B1-7', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('695', '邦乔飞', '13726710198', '无', '无', '邦乔飞（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装8楼8227B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('696', '芳芳', '13725484211', '无', '无', '芳芳（吴）', '', '', '', '', '', '', '', '广州市泰康路泰康城广场四楼3089档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('697', '陆亚兰', '13725477729', '无', '无', '碧丽（海）', '', '', '', '', '', '', '', '广州市梓元岗水电13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('698', '尚品秀', '13725459783', '无', '无', '尚品秀（蝶）', '', '', '', '', '', '', '', '广州市人民南路新中国大厦9楼A89室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('699', '鑫酷雅', '13725426668', '无', '无', '鑫酷雅（红）', '', '', '', '', '', '', '', '广州市十三行红遍天一楼澳门街67档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('700', '秋迟.摩根', '13725420605', '无', '无', '秋迟.摩根李（商）', '', '', '', '', '', '', '', '广东省中山市沙溪镇庞头工业区49号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('701', '希世宝', '13725419600', '无', '无', '希世宝.希特龙（清）', '', '', '', '', '', '', '', '广州沙河万佳二楼B203档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('702', '浩发皮具', '13725408189', '无', '无', '浩发皮具（谢）', '', '', '', '', '', '', '', '广州市解放北路梓元岗南街亿发皮具城二通道C-367档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('703', '鸿汛佳簇', '13725385019', '无', '无', '鸿汛佳簇（停用', '', '', '', '', '', '', '', '广州市十三行红遍天服装交易中心一楼澳门街63号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('704', '鸿汛佳簇', '13725385019', '无', '无', '鸿汛佳簇（商）', '', '', '', '', '', '', '', '广州市十三行红遍天服装交易中心五楼深圳璐40号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('705', '奥琪秀', '13725360956', '无', '无', '奥琪秀（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦4楼C492档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('706', '衣之概念', '13725345616', '无', '无', '衣之概念（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9285', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('707', '创世酷狼', '13725335500', '无', '无', '创世酷狼（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8207A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('708', '得宝莱', '13725332329', '无', '无', '得宝莱（姚）', '', '', '', '', '', '', '', '广州桂花岗71-73号二楼D019档汇豪皮具城', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('709', '米思特', '13725308155', '无', '无', '米思特（清）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9239室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('710', '周仁政', '13725285404', '无', '无', '仁彩（云）', '', '', '', '', '', '', '', '广州十三行红遍天5楼珠海路38号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('711', '李群', '13725263620', '无', '无', '圣健华（陈）', '', '', '', '', '', '', '', '广州市沙河益民服装城南区F001档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('712', '威尔沙帝', '13725254528', '无', '无', '威尔沙帝(立)', '', '', '', '', '', '', '', '广州市环市西路168号天马大厦5017室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('713', '陈龙丹', '13725252358', '无', '无', '优衣格（號奇（特天奴）（商）', '', '', '', '', '', '', '', '广州市红棉9楼9638档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('714', '吴琼', '13725251878', '无', '无', '创意e杰（商）', '', '', '', '', '', '', '', '广州沙河益名服装城南区F075档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('715', '鑫海', '13725216136', '无', '无', '鑫华（海）', '', '', '', '', '', '', '', '广州市梓元岗路15号柏丽皮具城113档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('716', '阿Q', '13725196618', '无', '无', '阿Q(玲）', '', '', '', '', '', '', '', '广州市环市西路139号汇美服装城一层N2档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('717', '俏咪咪', '13725182593', '无', '无', '俏咪咪（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼韩国街99号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('718', '霓衫伊人', '13725168718', '无', '无', '霓衫伊人（红）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D15A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('719', '爱迪龙皮带', '13725168534', '无', '无', '爱迪龙皮带（谢）', '', '', '', '', '', '', '', '广州市越秀区高第街53档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('720', '杰杰欧门', '13725159444', '无', '无', '杰杰欧门', '', '', '', '', '', '', '', '广州市红棉国际时装8楼8315-8317室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('721', '圣明', '13724872902', '无', '无', '圣明（周）', '', '', '', '', '', '', '', '广州市梓元岗水电12档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('722', '陈少慧', '13724843652', '无', '无', '名店服装百货（广州高第街）（清', '', '', '', '', '', '', '', '广州北京路高第街133号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('723', '吴映娟', '13724827145', '无', '无', '捷步美（谢）', '', '', '', '', '', '', '', '广州市广州大道南1629号华南鞋城三区100档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('724', '圣代', '13724448027', '无', '无', '圣代（清）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8238A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('725', '林秀娟', '13724067336', '无', '无', '恩加美', '', '', '', '', '', '', '', '广州市十三行美衣城C085号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('726', '殷安莲', '13724052876', '无', '无', '三角魔力', '', '', '', '', '', '', '', '广州市站前路红棉国际时装8235A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('727', '阿杰', '13724032369', '无', '无', '阿杰（玲）', '', '', '', '', '', '', '', '广州市德政南路128号珠光仰忠精品批发商场B7-1', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('728', '置信凯迪龙', '13724020928', '无', '无', '置信凯迪龙(周', '', '', '', '', '', '', '', '广州梓元岗水电东6档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('729', '异界海', '13724005809', '无', '无', '异界（海）', '', '', '', '', '', '', '', '广州市沙河万佳服装市场九街44档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('730', '博式弥斯', '13724005296', '无', '无', '博式弥斯（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9120档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('731', '红鑫', '13723545091', '无', '无', '红鑫（清）', '', '', '', '', '', '', '', '东莞市虎门镇富明商业大厦四楼西区B206档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('732', '蔡著博', '13720246664', '无', '无', '捻花瓷（商）', '', '', '', '', '', '', '', '武汉市汉正街第一大道银座3F47-48#', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('733', '魅妮', '13719459189', '无', '无', '魅妮（蔡）', '', '', '', '', '', '', '', '广州市十三行红遍天服装批发商场负二层英国街7号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('734', 'IS', '13719454881', '无', '无', 'IS(玲）', '', '', '', '', '', '', '', '广州十三行新中国大厦7楼A27-1档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('735', '依特丽', '13719432993', '无', '无', '依特丽（清）', '', '', '', '', '', '', '', '广州市站前路广安大厦903', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('736', '鑫锐伊簇', '13719432006', '无', '无', '鑫锐伊簇（姚）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发市场二楼A区243号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('737', '鸿业皮具', '13719426322', '无', '无', '鸿业皮具（吴）', '', '', '', '', '', '', '', '广州市解放北路梓元岗水电23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('738', '刘秀杰', '13719355783', '无', '无', '红妆海棠（海）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路067档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('739', '余华', '13719351615', '无', '无', '3S（萍）', '', '', '', '', '', '', '', '广州十三行新中国大厦五楼B579档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('740', '魅丽', '13719300692', '无', '无', '魅丽（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层东京街93档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('741', '卡基曼奴', '13719280217', '无', '无', '卡基曼奴2003（广州精都）', '', '', '', '', '', '', '', '广州市站西金都2C61档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('742', '马文静', '13719277555', '无', '无', '衣原素', '', '', '', '', '', '', '', '广州市红棉国际时装城6311室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('743', '佐文', '13719274560', '无', '无', '佐文B220（广州沙河万佳）', '', '', '', '', '', '', '', '广州市广园西路御龙服装市场2号楼4楼3A111档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('744', '邱仕娟', '13719257803', '无', '无', '德盛宝（清）', '', '', '', '', '', '', '', '广州市梓元岗水电134档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('745', '斯米史', '13719198238', '无', '无', '斯米史（陈）', '', '', '', '', '', '', '', '广州市站西路7号金都服装城六楼6B31室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('746', '风之魔力', '13719197890', '无', '无', '风之魔力（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街17号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('747', '岚岚', '13719197776', '无', '无', '岚岚（商）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路003档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('748', '天使诱货', '13719190726', '无', '无', '天使诱货（蝶）', '', '', '', '', '', '', '', '广州市新中国大厦九楼A88档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('749', '卡丹欧派', '13719188568', '无', '无', '卡丹欧派（地一大道）（立）', '', '', '', '', '', '', '', '广州市站前路地一大道负二层C18-19档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('750', '格丽莱', '13719176217', '无', '无', '格丽莱（海）', '', '', '', '', '', '', '', '广州市站南路16号白马大厦2005档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('751', '浚凯', '13719175887', '无', '无', '浚凯（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9232-9230室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('752', '柏妮诗', '13719149998', '无', '无', '柏妮诗（玲）', '', '', '', '', '', '', '', '广州市解放北路梓元岗新东豪B1031档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('753', '秀爱美（清', '13719040522', '无', '无', '秀爱美', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼B56档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('754', '吴雁玲', '13719034639', '无', '无', '华昌隆（萍）', '', '', '', '', '', '', '', '广州市梓元岗水电27档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('755', '蝴蝶兰', '13719010985', '无', '无', '蝴蝶兰（玲）', '', '', '', '', '', '', '', '广州十三行新中国大厦7楼A11档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('756', '爱蒂秀', '13719008856', '无', '无', '爱蒂秀(广州新中国大厦)', '', '', '', '', '', '', '', '广州市新中国大厦九楼B96档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('757', '申艾利璐雅', '13714872893', '无', '无', '申艾利璐雅（清）', '', '', '', '', '', '', '', '广州市益民服装城D区3D049档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('758', '欧阳贤民', '13713088898', '无', '无', '左卡伊（清）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦三楼南3513', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('759', '梦依琪', '13712906975', '无', '无', '梦依琪（清）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦四楼北区B613档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('760', '鑫悦', '13712874992', '无', '无', '鑫悦（清）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦四楼北B723', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('761', '俏依缘', '13712555038', '无', '无', '俏依缘（清）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街13号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('762', '张庆生', '13712542288', '无', '无', 'jp童装（陶）', '', '', '', '', '', '', '', '广东东莞虎门富民金辉童装城三楼3002室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('763', '以真', '13712250575', '无', '无', '以真（清）', '', '', '', '', '', '', '', '东莞太平富民商业大厦西区3202档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('764', '李阿通', '13712237910', '无', '无', '飞亚贝贝(虎门富民)(琳)', '', '', '', '', '', '', '', '东莞市虎门富民商业大厦二楼北区2507号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('765', '优经典', '13712048889', '无', '无', '优经典（清）', '', '', '', '', '', '', '', '广州市红棉国际时装城6楼6610档.退厂发虎门', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('766', '明模', '13711771210', '无', '无', '明模（卢）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼B49', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('767', '张小姐', '13711771160', '无', '无', 'HONG(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦12楼43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('768', 'HONG', '13711771160', '无', '无', 'HONG(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦12楼43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('769', '羽俊嘉', '13711770825', '无', '无', '羽俊嘉（谢）', '', '', '', '', '', '', '', '广州市沙河益民服装城D区三楼151档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('770', '刘旭', '13711747257', '无', '无', '辛格威斯（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8300档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('771', '吴友平', '13711715360', '无', '无', '雪佳妮（清）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('772', '徐亚雄', '13711712968', '无', '无', '顺宇(广州沙河)(清)', '', '', '', '', '', '', '', '广州市沙河万佳十一街010档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('773', '双目鱼', '13711687185', '无', '无', '双目鱼（商）', '', '', '', '', '', '', '', '广州市沙河益民服装城2D62档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('774', '陈为友', '13711686082', '无', '无', '韩派（红）', '', '', '', '', '', '', '', '广州市十三行新中国大厦大时代1楼D13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('775', '阿丫涟', '13711665768', '无', '无', '阿丫涟（清）', '', '', '', '', '', '', '', '广州市红遍天三楼唐人街56号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('776', '郑小姐', '13711661899', '无', '无', '甜蜜的梦（戴）', '', '', '', '', '', '', '', '广州市十三行美衣城20档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('777', '许姗姗', '13711660471', '无', '无', '芊芊（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦四层B435档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('778', '金源', '13711658583', '无', '无', '金源（万福广场）（张）', '', '', '', '', '', '', '', '广州万福精品广场31档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('779', '卿韵', '13711622447', '无', '无', '卿韵（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天6楼北京路30号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('780', '尚森', '13711619084', '无', '无', '尚森（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7258室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('781', '丽娴', '13711615482', '无', '无', '丽娴（红）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路23号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('782', '古纳姬', '13711608850', '无', '无', '古纳姬（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼日本街63号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('783', '李康凤', '13711572582', '无', '无', '意帕尔（商）', '', '', '', '', '', '', '', '广州市十三行红遍天一楼香港街048档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('784', '杨娟', '13711568568', '无', '无', 'ViA(商）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装8楼8225号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('785', '衣宫上品', '13711566772', '无', '无', '衣宫上品（清）', '', '', '', '', '', '', '', '广州市人民南路美衣城E116档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('786', '吴进佳', '13711513328', '无', '无', '鱼的色彩（广州沙河）（杰）', '', '', '', '', '', '', '', '广州市沙河万佳十街E档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('787', '吴克育', '13711508657', '无', '无', '威利仕（陈）', '', '', '', '', '', '', '', '广州市红棉国际服装城9239·9251室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('788', '幸运煦安', '13711428936', '无', '无', '幸运煦安（清）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼东京街1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('789', '艾唯依', '13711401200', '无', '无', '艾唯依（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦1927档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('790', '枫叶', '13711388219', '无', '无', '枫叶（清）', '', '', '', '', '', '', '', '广州市梓元岗水电134档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('791', '家辉', '13711373935', '无', '无', '家辉（吴）', '', '', '', '', '', '', '', '广州市梓元岗水电皮具批发城楼下131档之2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('792', '龙华芳', '13711368738', '无', '无', '宏发（十三行）（清）', '', '', '', '', '', '', '', '广州市13行新中国1楼16档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('793', 'MOMO', '13711326871', '无', '无', 'MOMO（萍）', '', '', '', '', '', '', '', '广州市人民南路儿童公园美衣城负一层C049档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('794', 'GS', '13711272670', '无', '无', 'GS(清）', '', '', '', '', '', '', '', '广州市站西路57号二号楼六楼8603室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('795', '阿德', '13711269388', '无', '无', '美族鱼', '', '', '', '', '', '', '', '广州市先烈东路沙河万佳服装批发市场十街C档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('796', '洛高', '13711266970', '无', '无', '洛高（广州地一大道）', '', '', '', '', '', '', '', '广州市地一大道负二层C49档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('797', '诗琦诗语', '13711263217', '无', '无', '诗琦诗语（清）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼珠海路23号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('798', '名娅丽', '13711259289', '无', '无', '名娅丽（蝶', '', '', '', '', '', '', '', '广州十三行红遍天3楼25号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('799', '邓建明', '13711254372', '无', '无', '韩津娌D&2', '', '', '', '', '', '', '', '广州市天河区沙河万佳批发广场B212档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('800', '奥邦奴', '13711250169', '无', '无', '奥邦奴', '', '', '', '', '', '', '', '广州市十三行新中国大厦九楼B131档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('801', '古惑至尊', '13711241180', '无', '无', '古惑至尊（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8215', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('802', '铜志', '13711216619', '无', '无', '铜志（周）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9306室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('803', '伍月花', '13711211591', '无', '无', '伍月花（玲）', '', '', '', '', '', '', '', '广州市解放北路梓元岗路新兴（森嘉）南侧13号之一', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('804', '四海', '13711202321', '无', '无', '四海（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦大时代一楼A37档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('805', '印迹', '13711199631', '无', '无', '印迹（商）', '', '', '', '', '', '', '', '广州红棉服装城六楼6321/东莞市虎门镇永安路1巷7号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('806', '杨早平', '13711195999', '无', '无', '旺旺鞋业（吴）', '', '', '', '', '', '', '', '广州市解放南路高第西街59号旺旺鞋业（环球芭芭鸭童鞋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('807', '欧霏', '13711194367', '无', '无', '欧霏（卢）', '', '', '', '', '', '', '', '广州白马服装市场楼下西郊335档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('808', '联兴（蝶）', '13711186228', '无', '无', '联兴', '', '', '', '', '', '', '', '广州一德东路大都精品城25A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('809', 'VR', '13711183835', '无', '无', 'VR（萍）', '', '', '', '', '', '', '', '十三行新中国大厦六楼A632档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('810', '申伙金', '13711177481', '无', '无', '菲宇蘭（玲）', '', '', '', '', '', '', '', '广州市富丽大厦25', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('811', '四眼姐妹', '13711139357', '无', '无', '四眼姐妹（清）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街10号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('812', '林俊丰', '13711133429', '无', '无', '卡妮诗（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路58号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('813', '吴慧琳', '13711126163', '无', '无', 'CYSD(杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8305档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('814', '李文顾', '13711123388', '无', '无', '摩登宾路（清）', '', '', '', '', '', '', '', '广州市沙河新天地服装城11楼B1102室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('815', '野蛮女友', '13711121166', '无', '无', '野蛮女友（广州红遍天）（清）', '', '', '', '', '', '', '', '红遍天商贸城3楼美国街31号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('816', '雅芝妮', '13711110941', '无', '无', '雅芝妮（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼13A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('817', 'NOMiss', '13711109500', '无', '无', 'NOMiss(周）', '', '', '', '', '', '', '', '广州市站西路57号站西广场（二号楼三申大厦8718', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('818', '劲爆点', '13711099918', '无', '无', '劲爆点（玲）', '', '', '', '', '', '', '', '广州市新中国大厦九楼B88档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('819', '欧佰利', '13711066778', '无', '无', '欧佰利（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天6楼北京路41档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('820', '银帝', '13711052025', '无', '无', '银帝（清）', '', '', '', '', '', '', '', '广州市沙河益民服装城南区F011档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('821', '杨明', '13711027445', '无', '无', '圣奥特（清）', '', '', '', '', '', '', '', '广州市万佳服装批发市场十街43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('822', '喜易', '13711010262', '无', '无', '喜易（陈）', '', '', '', '', '', '', '', '广州市起义路高第街56号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('823', '鸿宇', '13711002500', '无', '无', '鸿宇（玲）', '', '', '', '', '', '', '', '广州市梓元岗桂花楼皮具城首城A209档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('824', '韩潮', '13710988891', '无', '无', '韩潮(广州站西)(琳)', '', '', '', '', '', '', '', '广州市站西路站西广场2号楼3楼3176档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('825', '佳点', '13710988880', '无', '无', '佳点（萍）', '', '', '', '', '', '', '', '广州市新中国大厦十楼103档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('826', '曾凤英', '13710982248', '无', '无', '金兔（戴）', '', '', '', '', '', '', '', '广州市新中国大厦诚大三楼E3165档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('827', '动感女人', '13710916222', '无', '无', '动感女人(广州白马)(张)', '', '', '', '', '', '', '', '广州市白马大厦西郊商场378档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('828', '杨大勇', '13710905851', '无', '无', '阿提拉王（陈）', '', '', '', '', '', '', '', '广州市富骊大厦2楼201B室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('829', '盈奈儿', '13710900827', '无', '无', '盈奈儿（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼D50A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('830', '沙娃奴', '13710887328', '无', '无', '沙娃奴（陈）', '', '', '', '', '', '', '', '广州沙河万佳九街40档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('831', '华样男孩', '13710886258', '无', '无', '华样男孩（谢）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('832', '谷洪清', '13710881882', '无', '无', '洪英（海）', '', '', '', '', '', '', '', '广州市梓元岗水电46档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('833', '张正祥', '13710872939', '无', '无', '雅诗维（陈）', '', '', '', '', '', '', '', '广州市十三行美衣城E039', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('834', 'F2', '13710807959', '无', '无', 'F2（广州新中国大厦）（静）', '', '', '', '', '', '', '', '新中国大厦9楼B43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('835', '轻穿罗裳', '13710806996', '无', '无', '轻穿罗裳（清）', '', '', '', '', '', '', '', '广州市十三行美衣城E123-125', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('836', '苏格丽', '13710766878', '无', '无', '苏格丽（清）', '', '', '', '', '', '', '', '广州新中国大厦十三行8楼169档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('837', '酷域阵地', '13710745343', '无', '无', '酷域阵地（贺）', '', '', '', '', '', '', '', '广州市沙河益民服装城二A133A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('838', 'V尚', '13710736063', '无', '无', 'V尚（蓉）', '', '', '', '', '', '', '', '广州市红遍天三楼唐人街26号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('839', '李锦秀', '13710715889', '无', '无', '锦绣（吴）', '', '', '', '', '', '', '', '广州市十三行美衣城A030.C096档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('840', '一腾', '13710698771', '无', '无', '一腾（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路32号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('841', '蔡丽娜', '13710687766', '无', '无', '雅彬妮（清）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼珠海路36号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('842', '日韩蓉', '13710636135', '无', '无', '日韩(蓉）', '', '', '', '', '', '', '', '广州市德政南路珠光仰忠精品批发商场b1-1挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('843', '江新伟', '13710634374', '无', '无', '圆梦蒂娇（商）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼日本街16号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('844', '流行概念', '13710634087', '无', '无', '流行概念（谢）', '', '', '', '', '', '', '', '广州市万福东路华荟大厦1F39-45档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('845', '莱尔莉', '13710624892', '无', '无', '莱尔莉（清）', '', '', '', '', '', '', '', '广州十三行新中国五楼A567档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('846', '欧缦妮', '13710622589', '无', '无', '欧缦妮（萍）', '', '', '', '', '', '', '', '广州市十三行四楼B460档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('847', '豪杰', '13710616197', '无', '无', '豪杰（宝斯莱）贺', '', '', '', '', '', '', '', '广州市梓元岗千色皮具广场1109档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('848', '唯美', '13710581919', '无', '无', '唯美服饰（蔡）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼D13A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('849', '经典皇后', '13710561975', '无', '无', '经典皇后（清）', '', '', '', '', '', '', '', '广州市站前路新大地6楼682室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('850', '陈峰', '13710509625', '无', '无', '润峰（清）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8225档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('851', '依思蜜', '13710480755', '无', '无', '依思蜜（蓉）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼C31档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('852', '杰盛', '13710452535', '无', '无', '杰盛（蔡）', '', '', '', '', '', '', '', '广州市梓元岗综合市场新新兴北门01档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('853', '广金恒谊丽', '13710417898', '无', '无', '广金恒谊丽人（商）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼日本街42号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('854', '古珈斯', '13710375766', '无', '无', '古珈斯（贺', '', '', '', '', '', '', '', '广州市沙河益民服装城A122A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('855', '爱仕尼', '13710341108', '无', '无', '爱仕尼', '', '', '', '', '', '', '', '广州市梓元岗水电综合市场14档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('856', '花纪', '13710326990', '无', '无', '花纪（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼A31-A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('857', '我衣我素', '13710311477', '无', '无', '我衣我素（新中国）（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼C565室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('858', '林进辉', '13710306119', '无', '无', '黛威猛（商）', '', '', '', '', '', '', '', '广州市沙河益民服装城二楼2A119-2A120档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('859', '金秋枫', '13710213579', '无', '无', '金秋枫（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天服装交易中心三楼唐人街68-70', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('860', '可可香', '13710208816', '无', '无', '可可香(广州新中国大厦)(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦写字楼15A楼053A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('861', '豆头', '13710114098', '无', '无', '豆头（清）', '', '', '', '', '', '', '', '广州市十三行东方红二楼36号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('862', '林受彬', '13710096818', '无', '无', '耶利米（蝶）', '', '', '', '', '', '', '', '广州市人民南路美衣城C016档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('863', '杨君智', '13710076888', '无', '无', '易百佳（广州十三行）（甲）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街66档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('864', '旺蒂', '13707116498', '无', '无', '旺蒂（商）', '', '', '', '', '', '', '', '武汉大夹街221号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('865', '漫菲妮', '13706504993', '无', '无', '漫菲妮', '', '', '', '', '', '', '', '杭州市四季青意法服饰城五楼217-218号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('866', '北纬衣度', '13705878124', '无', '无', '北纬衣度（吴）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城7楼7283-7285室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('867', '八级风', '13705838740', '无', '无', '八级风', '', '', '', '', '', '', '', '浙江嘉兴', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('868', '百靓苑', '13705713876', '无', '无', '百靓苑(杭州意法)(许)', '', '', '', '', '', '', '', '杭州意法服饰4F162', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('869', '金圣', '13702966859', '无', '无', '金圣（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天6楼北京路12号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('870', '耐维拉', '13702799583', '无', '无', '耐维拉523A（广州富丽）（杰', '', '', '', '', '', '', '', '红棉8楼8330档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('871', '威比伦', '13702798983', '无', '无', '威比伦', '', '', '', '', '', '', '', '广东中山市沙溪镇云汉大港路东6-7号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('872', 'MS', '13702584368', '无', '无', 'MS（清）', '', '', '', '', '', '', '', '广州市十三行南京路7号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('873', '郑正强', '13702528430', '无', '无', '迷你', '', '', '', '', '', '', '', '广东中山市小商品市场27A4（何革兰）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('874', '欧阳振邦', '13702343991', '无', '无', '均安俊(广州沙河万佳）（杰）', '', '', '', '', '', '', '', '广州沙河魅力东方牛仔城308档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('875', '源琦', '13697497308', '无', '无', '源琦（陈）', '', '', '', '', '', '', '', '广州市梓元岗6栋105-2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('876', '妙妙童装', '13697495087', '无', '无', '妙妙童装（清）', '', '', '', '', '', '', '', '广州市沙河天宝市场D43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('877', '郭佳音', '13697464942', '无', '无', '上草玄田（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼A580室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('878', '雪狐', '13694924081', '无', '无', '雪狐（蝶）', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦北区B513', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('879', '野玫瑰', '13694291853', '无', '无', '野玫瑰（红）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层巴黎街1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('880', '千涉', '13694287853', '无', '无', '清', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D46档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('881', '吴长雪', '13694216159', '无', '无', '枫尚箱包（戴）', '', '', '', '', '', '', '', '广州市梓元岗水电118档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('882', '面孔物语', '13688990120', '无', '无', '面孔物语（清）', '', '', '', '', '', '', '', '东莞虎门富民商业大厦南区2107档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('883', '狼女', '13688867044', '无', '无', '狼女（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦16楼099室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('884', '王玲婉', '13688866777', '无', '无', '凯豹（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装城6楼6310档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('885', '乔星', '13688857829', '无', '无', '乔星（梓元岗）（贺）', '', '', '', '', '', '', '', '广州市沙河万佳服装广场二街35档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('886', '石细红', '13685792626', '无', '无', '时尚公告', '', '', '', '', '', '', '', '杭州四季青意法四楼250号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('887', 'Ziray', '13685745999', '无', '无', 'Ziray之悦', '', '', '', '', '', '', '', '杭州市四季青意法服饰城3-270', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('888', '艾儿', '13682294841', '无', '无', '艾儿（清）', '', '', '', '', '', '', '', '广州市十三行美衣城A056档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('889', 'TEN', '13682280414', '无', '无', 'TEN(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼A672档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('890', '莫儒华', '13682263253', '无', '无', '格仕臣（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装城8210档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('891', '中彩', '13682258777', '无', '无', '中彩（清）', '', '', '', '', '', '', '', '广州市万福路25号-27号华荟大厦一楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('892', '佑天利', '13682241983', '无', '无', '佑天利（广州高第街）（琳）', '', '', '', '', '', '', '', '270号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('893', '石美君', '13682240316', '无', '无', '唯美衣夏', '', '', '', '', '', '', '', '广州十三行路红遍天3楼唐人街62号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('894', '超然E色', '13682221597', '无', '无', '超然E色（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街62档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('895', '黄化', '13682219528', '无', '无', '莉之彩（（戴', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼米兰街37档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('896', '邓燮然', '13682211310', '无', '无', '利傲龙（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7237挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('897', '七七恋', '13682206237', '无', '无', '七七恋（清）', '', '', '', '', '', '', '', '广州市十三行美衣城富一层D005档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('898', '陈页权', '13679810612', '无', '无', '富来（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('899', '张铭', '13676268805', '无', '无', 'ItMiSS（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼203D', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('900', '小龙女', '13675879296', '无', '无', '小龙女', '', '', '', '', '', '', '', '杭州意法三楼西区13', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('901', '唯蜜儿', '13668966661', '无', '无', '唯蜜儿（萍）', '', '', '', '', '', '', '', '广州人民南路美衣城C028档（海）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('902', '圣芭拉', '13666656706', '无', '无', '圣芭拉（杭州常青意法）（许）', '', '', '', '', '', '', '', '杭州市秋涛路489号中华大厦十楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('903', '米米', '13662532077', '无', '无', '米米（蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦11楼58档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('904', '公仔行', '13662363178', '无', '无', '公仔行（蓉）', '', '', '', '', '', '', '', '广州市万福路19号万福精品广场2楼175档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('905', '陈惠惠', '13660890890', '无', '无', '韩潮（清）', '', '', '', '', '', '', '', '广州市德政南路128号万福珠光仰忠精品批发商场A7', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('906', '万玉杭', '13660709636', '无', '无', '七色村（吴）', '', '', '', '', '', '', '', '广州市人民北路921号富丽大厦719室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('907', '志成高第街', '13660604060', '无', '无', '志成（高第街）（欧）', '', '', '', '', '', '', '', '广州市高第街63号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('908', '叶海霞', '13660557757', '无', '无', '佐狮宝奴（陶）', '', '', '', '', '', '', '', '广州市人民北路921号富丽大厦620室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('909', '林钢铜', '13660555878', '无', '无', '威尼斯（吴）', '', '', '', '', '', '', '', '广州市富丽大厦916-917室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('910', '流行坐标', '13660538648', '无', '无', '流行坐标（商）', '', '', '', '', '', '', '', '广州市红棉国际时装6楼6319', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('911', 'D2空间', '13660509333', '无', '无', 'D2空间（贺）', '', '', '', '', '', '', '', '广州市富丽大厦111室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('912', '冯祥', '13660260540', '无', '无', 'PINGGLUB', '', '', '', '', '', '', '', '广州十三行红遍天负一层罗马街16号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('913', '多宝梓元岗', '13660198797', '无', '无', '多宝（梓元岗）（清）', '', '', '', '', '', '', '', '广州三元里梓元岗水电132档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('914', '孙大勇', '13660006096', '无', '无', '米尚（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路43号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('915', '杨溢双', '13650914911', '无', '无', '球星皇（陈）', '', '', '', '', '', '', '', '广州市越秀区壹马服装城2楼2B27', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('916', '李群好', '13650780683', '无', '无', '以马内利（清）', '', '', '', '', '', '', '', '广州市人民南路儿童公园美衣城E038', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('917', '蔡妙娜', '13642741053', '无', '无', '杰宝儿（清）', '', '', '', '', '', '', '', '广州市沙河新天地童装城负一层08-09档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('918', '粱其锋', '13640888080', '无', '无', '维斯小店（戴）', '', '', '', '', '', '', '', '广州市十三行美衣城负一层C092档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('919', '后街少女', '13640866632', '无', '无', '后街少女（蝶）', '', '', '', '', '', '', '', '广州市人民南路十三行美衣城D016档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('920', '郑国标', '13640250891', '无', '无', '七号风暴（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9650档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('921', '张艳', '13634184089', '无', '无', '小女人', '', '', '', '', '', '', '', '杭州四季青中纺中心7B24号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('922', '动感亮点', '13634166165', '无', '无', '动感亮点', '', '', '', '', '', '', '', '杭州四季青意法服饰城四楼211号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('923', '黄海龙', '13632479888', '无', '无', '快乐屋童装（吴）', '', '', '', '', '', '', '', '广州市沙河北城后场童装世界二楼2119-2120档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('924', 'ECO', '13632429473', '无', '无', 'ECO（玲）', '', '', '', '', '', '', '', '广州市新中国大厦6楼C639档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('925', '郑伯天', '13632411266', '无', '无', '福兴（陈）', '', '', '', '', '', '', '', '万福东路19号仰忠万福精品广场首层1-4', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('926', '金威', '13632394081', '无', '无', '金威（吴）', '', '', '', '', '', '', '', '广州市梓元岗综合市场水电65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('927', 'GOIDPACO（', '13632382729', '无', '无', 'GOIDPACO', '', '', '', '', '', '', '', '广州起义路高第街46号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('928', '优雅', '13632335671', '无', '无', '优雅（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼B36档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('929', '李土胜', '13632308963', '无', '无', '战胜者（吴）', '', '', '', '', '', '', '', '广州市沙河万佳五街60-62档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('930', '野蛮辣妹', '13632273528', '无', '无', '野蛮辣妹（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦11楼27档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('931', '广州笑希希', '13632248848', '无', '无', '笑希希（商）', '', '', '', '', '', '', '', '广州十三行新中国大厦5楼C576档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('932', '雅嘉玩具', '13631452776', '无', '无', '雅嘉玩具（清）', '', '', '', '', '', '', '', '广州市解放南路39号万菱广场负一层C006档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('933', '张梅', '13631452467', '无', '无', '梦韩露（商）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼米兰街17号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('934', '拿撒勒', '13631436883', '无', '无', '拿撒勒（清）', '', '', '', '', '', '', '', '广州市十三行儿童公园美衣城D040档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('935', '亚格莱', '13631399990', '无', '无', '亚格莱', '', '', '', '', '', '', '', '沙河大街万佳市场十街A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('936', '杜康荣', '13631381738', '无', '无', '衣之秀（广州十三行）（乙）', '', '', '', '', '', '', '', '十三行大同坊北座5005档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('937', 'NEW', '13631374984', '无', '无', 'NEW(萍）', '', '', '', '', '', '', '', '广州市新中国大厦六楼B区手扶电梯侧BF601档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('938', '顶点', '13631326666', '无', '无', '顶点（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦九楼B80档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('939', '钟宜平', '13622885841', '无', '无', '钟辉（清）', '', '', '', '', '', '', '', '广州市十三行美衣城B082', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('940', '创意', '13622277637', '无', '无', '创意（清）', '', '', '', '', '', '', '', '广州市梓元岗水电大楼22档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('941', '傅绘', '13622275597', '无', '无', '本彩诗格(清)', '', '', '', '', '', '', '', '站前路广安七楼710档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('942', '向华东', '13622272216', '无', '无', '尚衣簇（清）', '', '', '', '', '', '', '', '广州市荔湾区中山八路荔湖大厦童装广场南座A1004挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('943', '陈秋霞', '13622250930', '无', '无', '嘉华（戴）', '', '', '', '', '', '', '', '广州市十三行美衣城负一层C118A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('944', '琴琴手套', '13622236387', '无', '无', '琴琴手套（玲）', '', '', '', '', '', '', '', '广州市德政南路158号越和仰忠精品批发市场A5-15-16档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('945', '登喜世家', '13622228273', '无', '无', '登喜世家（吴）', '', '', '', '', '', '', '', '广州市站南路16号白马大厦二楼2403档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('946', '吴灿辉', '13622227979', '无', '无', '精依领袖（商）', '', '', '', '', '', '', '', '广州富丽大厦918室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('947', '佰億', '13611499449', '无', '无', '佰億（清）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街43档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('948', '沃草浅草', '13610354542', '无', '无', '沃草浅草（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼160档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('949', '雪之雨', '13610341989', '无', '无', '雪之雨蝶（陈）', '', '', '', '', '', '', '', '广州市十三行红遍天4楼上海路13号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('950', 'SH亿', '13610288502', '无', '无', 'SH亿（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦８楼１０６档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('951', '李金青', '13610288196', '无', '无', '尊格（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9319室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('952', '芸纱佰利', '13610246000', '无', '无', '芸纱佰利（清）', '', '', '', '', '', '', '', '广州市红遍天三楼美国街40号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('953', '依蒂莎', '13609767852', '无', '无', '依蒂莎1013A（广州金祥）', '', '', '', '', '', '', '', '"418,419  新中国5楼C547"', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('954', '衣品尚品', '13609089981', '无', '无', '衣品尚品', '', '', '', '', '', '', '', '广州市人民南路十三行红遍天三楼唐人街48档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('955', '三道古域', '13609063738', '无', '无', '三道古域（奥奔马）（沙河万佳）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发市场十街C档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('956', '徐细英', '13609005788', '无', '无', '西域华威（吴）', '', '', '', '', '', '', '', '广州市沙河万佳九街17-19号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('957', '博千', '13607183030', '无', '无', '博千（商）', '', '', '', '', '', '', '', '武汉市汉正街第一大道钻石座29楼12号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('958', '纯色乡谣', '13606643822', '无', '无', '纯色乡谣女装', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('959', '果果子琦', '13605818182', '无', '无', '果果子琦', '', '', '', '', '', '', '', '杭州四季青服装市场三楼122-123.137号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('960', '知遇红', '13605813583', '无', '无', '知遇红', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('961', '吉派威尔', '13605735125', '无', '无', '吉派威尔（商）', '', '', '', '', '', '', '', '浙江嘉兴市秀洲区洪合镇科创园西18栋1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('962', '思浓尚', '13605712438', '无', '无', '思浓尚', '', '', '', '', '', '', '', '东区二楼374号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('963', '蔡春治', '13602866125', '无', '无', '良印（商）', '', '', '', '', '', '', '', '广州市沙河益民服装市场写字楼3D025档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('964', 'Paradox', '13602852169', '无', '无', 'Paradox(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦诚大服装城八楼131档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('965', '豪顺', '13602802849', '无', '无', '豪顺（商）', '', '', '', '', '', '', '', '广州万佳批发广场二街加28-30档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('966', '周燕芬', '13602793124', '无', '无', '高第街41号（谢）', '', '', '', '', '', '', '', '广州市越秀区高第街41号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('967', '王带娣', '13602770223', '无', '无', '亚丹利(玲）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼深圳路57号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('968', '力行牛仔', '13602728229', '无', '无', '力行牛仔（杨）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发广场六街加11档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('969', '佐仕奇', '13602489892', '无', '无', '佐仕奇（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9268室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('970', '陈亚彩', '13602433722', '无', '无', '宇森（商）', '', '', '', '', '', '', '', '广州市起义路高第街48号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('971', '香港子岸', '13602426101', '无', '无', '香港子岸（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9618档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('972', '霹雳公爵', '13602412524', '无', '无', '霹雳公爵（吴）', '', '', '', '', '', '', '', '广州红棉国际时装城8楼8319', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('973', '简单璐', '13602411731', '无', '无', '简单璐（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼A590档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('974', '圣迪玛', '13602229199', '无', '无', '圣迪玛（广州沙河）（张）', '', '', '', '', '', '', '', '广州沙河东方魅力牛仔城二楼218档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('975', '刘军华', '13600309766', '无', '无', '雅可清', '', '', '', '', '', '', '', '广州市红遍天三楼美国街12档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('976', '先达利', '13600083265', '无', '无', '先达利(广州白马)(清)', '', '', '', '', '', '', '', '广州白马大厦西郊商场101档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('977', '恒兴', '13600063409', '无', '无', '恒兴（蝶', '', '', '', '', '', '', '', '广州市起义路50号北一铺（高第街）（外', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('978', '恒兴', '13600063409', '无', '无', '恒兴（陈）', '', '', '', '', '', '', '', '广州市起义路50号北一铺（高第街口）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('979', '广佳帽业', '13600057206', '无', '无', '广佳帽业（谢）', '', '', '', '', '', '', '', '广州市越秀区万福路华荟大厦1楼17档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('980', '张育敬', '13599993568', '无', '无', '香克斯（商）', '', '', '', '', '', '', '', '福建省石狮市纺织机械市场9A幢3-4单元2楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('981', '许仕杉', '13599987359', '无', '无', '杉道尚品（商）', '', '', '', '', '', '', '', '福建省石狮市南洋路服装城北A1719', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('982', '林剑武', '13599284681', '无', '无', '九鲤奴', '', '', '', '', '', '', '', '福建省石狮市大昆祥山路57号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('983', '西子可人', '13588849668', '无', '无', '西子可人', '', '', '', '', '', '', '', '杭州四季青意法服饰城3F-98A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('984', '五彩缤纷', '13588827457', '无', '无', '五彩缤纷（清）', '', '', '', '', '', '', '', '杭州四季青意法服饰城4F-28#', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('985', '热颜骄阳女', '13588728378', '无', '无', '热颜骄阳女休闲服饰（王建平）', '', '', '', '', '', '', '', '杭州四季青意法服饰城三楼70', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('986', '千浪依族', '13588442508', '无', '无', '千浪依族（商）', '', '', '', '', '', '', '', '杭州市意法服饰城7楼7181号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('987', '布意情怀', '13588172089', '无', '无', '布意情怀（杭州四季青）（杰）', '', '', '', '', '', '', '', '杭州四季青服装城4F-161号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('988', '靓丽名裳', '13588158665', '无', '无', '靓丽名裳（商）', '', '', '', '', '', '', '', '杭州四季青苏杭3F-006', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('989', '阿雪家', '13588143666', '无', '无', '阿雪家（杭州意法）（杰）', '', '', '', '', '', '', '', '杭州意法服装城大厅F3-112-113', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('990', '余巍', '13588098783', '无', '无', '伊歌莉（商）', '', '', '', '', '', '', '', '杭州四季青意法服饰城5F-007号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('991', '咔绣', '13588072078', '无', '无', '咔绣', '', '', '', '', '', '', '', '杭州四季青意法服饰城4F-009号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('992', '新豪裤行', '13580730268', '无', '无', '新豪裤行（清）', '', '', '', '', '', '', '', '东莞虎门富民商业大厦四楼北区B206号    三楼东区3209', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('993', '流行尊客', '13580585898', '无', '无', '流行尊客（广州白马）', '', '', '', '', '', '', '', '广州白马2328档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('994', '啡色', '13580568589', '无', '无', '红啡色（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼B568档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('995', '赵先国', '13580551748', '无', '无', '麦瑞妮（清）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼韩国街103档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('996', '佐晨', '13580516063', '无', '无', '佐晨（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天商场6楼北京路53号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('997', '诱惑', '13580501819', '无', '无', '诱惑（清）', '', '', '', '', '', '', '', '广州十三行新中国大厦四楼B459档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('998', 'YOH', '13580501819', '无', '无', 'YOH(萍）', '', '', '', '', '', '', '', '广州十三行新中国大厦四楼B459档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('999', '千鼎', '13580429986', '无', '无', '千鼎（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路50档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1000', '孙小姐', '13580345077', '无', '无', '环球', '', '', '', '', '', '', '', '广州市广州大道南1629号新华南鞋业城二区74挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1001', '奥曼卡', '13580319959', '无', '无', '奥曼卡（谢）', '', '', '', '', '', '', '', '广州市解放北路梓元岗新东豪商贸城3楼C2132档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1002', '吴兴旺', '13575790917', '无', '无', '菲尔宇琪', '', '', '', '', '', '', '', '杭州四季青意法服饰城', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1003', '韩彬铭品', '13575478198', '无', '无', '韩彬铭品', '', '', '', '', '', '', '', '杭州意法3楼088', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1004', '诗迈尔。沁', '13575475807', '无', '无', '诗迈尔。沁（商）', '', '', '', '', '', '', '', '杭州中纺中心8B--29', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1005', '刘晓兰', '13570996859', '无', '无', '梦由（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼A86号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1006', '幻悦', '13570982952', '无', '无', '幻悦（蝶）', '', '', '', '', '', '', '', '广州市德政南路128号越和仰忠精品市场A2-9', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1007', '陈晓琼', '13570980159', '无', '无', '自由日（陈）', '', '', '', '', '', '', '', '广州市站前路197号锦都服装城813B', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1008', '李小姐', '13570944195', '无', '无', '阁蕾蒂', '', '', '', '', '', '', '', '广州十三行红变天五楼深圳路42号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1009', '都市童心', '13570903281', '无', '无', '都市童心（清）', '', '', '', '', '', '', '', '广州市沙河新天地童装城首层135档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1010', '吕建全', '13570577599', '无', '无', '波仕比奥（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8638档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1011', '陈俊希', '13570550459', '无', '无', '韩海苏潮（清）', '', '', '', '', '', '', '', '广州市十三行美衣城C086挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1012', '彭兵寒', '13570516731', '无', '无', '智力星（周）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8329室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1013', 'A加i', '13570504988', '无', '无', 'A加i(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼A48号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1014', '人本', '13570501555', '无', '无', '人本（谢）', '', '', '', '', '', '', '', '广州市广州大道南1629号新华南鞋业城三区07档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1015', '洋气女孩', '13570452403', '无', '无', '洋气女孩（清）', '', '', '', '', '', '', '', '广州市天河区沙河万佳批发广场B212档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1016', '旺之一簇', '13570423757', '无', '无', '旺之一簇（清）', '', '', '', '', '', '', '', '广州市十三行红遍天服装交易中心三楼美国街11号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1017', '时尚一簇', '13570423757', '无', '无', '时尚一簇（商）', '', '', '', '', '', '', '', '广州市十三行红遍天服装市场三楼美国街11档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1018', '明信', '13570420309', '无', '无', '明信（谢）', '', '', '', '', '', '', '', '广州市梓元岗15栋106号之三（千色皮具广场对面）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1019', '刘礼汉', '13570411777', '无', '无', '美格保罗（商）', '', '', '', '', '', '', '', '广州市环市西路168号天马大厦七楼7043室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1020', '旺顶丹', '13570407205', '无', '无', '旺顶丹（商）', '', '', '', '', '', '', '', '广州市红遍天3楼美国街2号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1021', '购物狂', '13570398887', '无', '无', '购物狂（卢）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼B523档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1022', '妮彩红阳', '13570376979', '无', '无', '妮彩红阳（吴）', '', '', '', '', '', '', '', '广州市十三行美衣城B058档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1023', '奕姿纯', '13570327263', '无', '无', '奕资纯（清）', '', '', '', '', '', '', '', '广州市十三行红遍天富一层东京街47档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1024', '叶晓峰', '13570324378', '无', '无', '欧妮（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼1553', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1025', '悍獣', '13570304838', '无', '无', '悍獣（海）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城9152档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1026', '泰王', '13570272006', '无', '无', '泰王（陈）', '', '', '', '', '', '', '', '广州市人民北路921号富骊大厦首层13号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1027', 'BOMb', '13570215856', '无', '无', 'BOMb(萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼A602档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1028', '熙丽', '13570109772', '无', '无', '熙丽（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼48档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1029', '伦兴富仕果', '13570099007', '无', '无', '伦兴富仕果（吴）', '', '', '', '', '', '', '', '广州市沙河益民服装批发市场南区F1207档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1030', '珞迎', '13570059438', '无', '无', '珞迎（萍）', '', '', '', '', '', '', '', '广州市万福东路19号华荟大厦万福精品广场12-13', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1031', '迪拓', '13570059438', '无', '无', '迪拓(万福东)(欧)', '', '', '', '', '', '', '', '广州市越秀区万福东华芸大厦万福精品广场12.13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1032', '凯迪罗娜', '13570022388', '无', '无', '凯迪罗娜（清）', '', '', '', '', '', '', '', '广州市沙河万佳服装广场西029号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1033', '何一飞', '13567319172', '无', '无', '美丽集中（商）', '', '', '', '', '', '', '', '濮院永安路325C#-2-2', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1034', '伊捷尔', '13566106362', '无', '无', '伊捷尔（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9315档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1035', '裕泰', '13560463199', '无', '无', '裕泰（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路70档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1036', '谢焕旌', '13560396888', '无', '无', '维柯顿（海）', '', '', '', '', '', '', '', '广州市越秀区地一大道负二层C26档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1037', '张静纯', '13560373848', '无', '无', '名古丹尼（谢）', '', '', '', '', '', '', '', '广州市站南路16号白马大厦6549室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1038', '摩丽莎', '13560333666', '无', '无', '摩丽莎（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天二楼日本街52号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1039', '何惠明', '13560319188', '无', '无', 'MiFi（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8316A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1040', '悍獸', '13560258877', '无', '无', '悍獸（广州红棉）（立）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际服装城9152号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1041', '刘文鹏', '13560213144', '无', '无', 'SV(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦四楼C415室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1042', '盛源玩具', '13560196011', '无', '无', '盛源玩具（清）', '', '', '', '', '', '', '', '广州市解放南路39号万菱广场负一层A048档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1043', '邱建祥', '13560195659', '无', '无', '天天主角（广州红棉）（俊）', '', '', '', '', '', '', '', '广州红棉9楼9222档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1044', '徐春香', '13560177926', '无', '无', '红佳丽人（陈）', '', '', '', '', '', '', '', '广州市海珠区大塘东胜街西16巷16号楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1045', '海鸥', '13560081261', '无', '无', '海鸥（清）', '', '', '', '', '', '', '', '广州市十三行美衣城E071A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1046', '木子炫', '13560075183', '无', '无', '木子炫（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层米兰街23号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1047', '黄月嫦', '13560066458', '无', '无', 'yey(清）', '', '', '', '', '', '', '', '广州十三行新中国大厦四楼C409室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1048', '王志勇', '13560060976', '无', '无', '领秀（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10-149', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1049', '小晶牛子', '13560057757', '无', '无', '小晶牛子（郭）', '', '', '', '', '', '', '', '广州站西路57号二号楼4楼4092', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1050', '威武', '13560035196', '无', '无', '威武（萍）', '', '', '', '', '', '', '', '广州市沙河有利南城三楼107档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1051', '洪秀前', '13560030290', '无', '无', '异形鸟（海）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9305档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1052', '魔力', '13560002719', '无', '无', '魔力（谢）', '', '', '', '', '', '', '', '广州市环市西路57号站西二号楼4楼4055室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1053', '亿霸', '13559078281', '无', '无', '亿霸（商）', '', '', '', '', '', '', '', '福建省石狮市塔前工业区南街西起4-8号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1054', '冯广婵', '13556755574', '无', '无', '亚蔓（蝶）', '', '', '', '', '', '', '', '东莞市虎门富民商业大厦B201J档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1055', '枫范衣橱', '13556636266', '无', '无', '枫范衣橱（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼161A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1056', '魅惑触覚', '13556143668', '无', '无', '魅惑触觉（清）', '', '', '', '', '', '', '', '广州市沙河一名D区三楼D71', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1057', '林利佳', '13556118988', '无', '无', '佳盈加工（王）', '', '', '', '', '', '', '', '广州市海珠区土华村华泰大街二巷1号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1058', 'DC', '13556106010', '无', '无', 'DC(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B-622铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1059', 'JOY', '13556082184', '无', '无', 'JOY(清）', '', '', '', '', '', '', '', '广州市新中国大厦写字楼七楼A30室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1060', '黄凡英', '13556060535', '无', '无', '童话领域（清）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1061', '伊美娜', '13556042437', '无', '无', '伊美娜（红遍天）（清）', '', '', '', '', '', '', '', '广州市十三行路红遍天交易中心写字楼五楼深圳街18号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1062', '衣可可', '13546904133', '无', '无', '衣可可(东莞富民)(张)', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦五楼南区B205铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1063', '刘桂新', '13544587788', '无', '无', 'none(清）', '', '', '', '', '', '', '', '广州市十三行新中国8楼131档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1064', '温建娣', '13544581165', '无', '无', '恒星皮具（吴）', '', '', '', '', '', '', '', '广州市梓元岗水电23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1065', '郑惠玲', '13544566288', '无', '无', '卡温奴（陈）', '', '', '', '', '', '', '', '广州市沙东有利国际北城2054档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1066', '利缘欧', '13544562049', '无', '无', '红利缘（欧）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路16档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1067', '飞酷', '13544529447', '无', '无', '飞酷（欧）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼D47室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1068', '瑟域', '13544478965', '无', '无', '瑟域（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装8楼8330室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1069', '瑟域', '13544478965', '无', '无', '瑟域（清）', '', '', '', '', '', '', '', '广州市环市西路红棉国际时装城9楼9335档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1070', '劲霸', '13544438538', '无', '无', '劲霸（蔡）', '', '', '', '', '', '', '', '广州市沙河益明服装城二楼2B101', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1071', '卡诺迪欧', '13544410777', '无', '无', '卡诺迪欧（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城七楼7323档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1072', '薇薇安（玲', '13543552183', '无', '无', '薇薇安', '', '', '', '', '', '', '', '广州新中国大厦6楼A679', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1073', '娟娟玩具', '13543485074', '无', '无', '娟娟玩具（吴）', '', '', '', '', '', '', '', '广州市解放南路39号万菱广场负一层B009档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1074', 'SGLG', '13542764831', '无', '无', 'SGLG(吴）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路012档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1075', '卢彩姬', '13538903679', '无', '无', '阿基拉', '', '', '', '', '', '', '', '十三行美衣城负一楼A049-A050', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1076', '陈少容', '13538815318', '无', '无', 'UQ(蝶）', '', '', '', '', '', '', '', '广州市人民南路十三行11楼2档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1077', '红咀鸟', '13538773807', '无', '无', '红咀鸟（玲）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1078', '飞一般', '13538768872', '无', '无', '飞一般（红）', '', '', '', '', '', '', '', '广州市十三行红遍天六楼北京路42号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1079', '八达龙', '13538758777', '无', '无', '八达龙（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装9楼9311室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1080', '李景城', '13538755588', '无', '无', '柒小龙（清）', '', '', '', '', '', '', '', '广州沙河新天地服装城C栋1006室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1081', '黄占丽', '13538734509', '无', '无', '鸿丽（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天服装市场五楼深圳路40号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1082', '咥超', '13538718803', '无', '无', '咥超（清）', '', '', '', '', '', '', '', '广州市梓元岗综合市场22档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1083', '欧阳城', '13538463128', '无', '无', '诺斯琪(商)', '', '', '', '', '', '', '', '东莞市虎门镇富民商业大厦四楼B325档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1084', '摇摆韩风', '13535558723', '无', '无', '摇摆韩风（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9136档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1085', '叶静', '13535524511', '无', '无', 'L3(谢）', '', '', '', '', '', '', '', '广州市站南路地一大道负二层C72', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1086', '花花晶（玲', '13535425717', '无', '无', '花花晶', '', '', '', '', '', '', '', '广州仰忠万福广场A7-9档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1087', '魏光华', '13535385199', '无', '无', '迪帕（清）', '', '', '', '', '', '', '', '广州市白云区棠溪祥岗新街五社工业区3号7楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1088', '黄金甲', '13535372331', '无', '无', '黄金甲（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦10楼138档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1089', '永缘饰品', '13535356676', '无', '无', '永缘饰品（清）', '', '', '', '', '', '', '', '广州市德政南路128号越和仰忠精品批发市场B5-10档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1090', '鑫盛', '13535318306', '无', '无', '鑫盛（郭）', '', '', '', '', '', '', '', '广州市梓元岗水电15档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1091', '黄小钱', '13535258855', '无', '无', '棉花唐（吴）', '', '', '', '', '', '', '', '广州市解放南路39号万菱玩具精品广场3B002档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1092', '布布精彩', '13535099168', '无', '无', '布布精彩（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼B22室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1093', '欧阳高相', '13535084238', '无', '无', '欧宝路（云）', '', '', '', '', '', '', '', '广州市梓元岗水电65档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1094', '第一男孩', '13535073431', '无', '无', '第一男孩(陈）', '', '', '', '', '', '', '', '广州市红棉国际城6630-6631室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1095', '西夏骑仕', '13535050059', '无', '无', '西夏骑仕（商）', '', '', '', '', '', '', '', '广州市解放北路1453号金亿皮具广场A75档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1096', '富奕', '13533948988', '无', '无', '富奕（清）', '', '', '', '', '', '', '', '广州市红遍天富一层东京街47档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1097', '钟道镁', '13533935297', '无', '无', 'DIALTONE(清）', '', '', '', '', '', '', '', '广州市站西路57号三号楼（君天服装城）3612室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1098', '叶国响', '13533737606', '无', '无', '苏迪亚服饰', '', '', '', '', '', '', '', '广州十三行美衣城B060档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1099', '雪儿妙', '13533692465', '无', '无', '雪儿妙（萍）', '', '', '', '', '', '', '', '广州十三行新中国大厦3楼E3123档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1100', '练清玉', '13533635153', '无', '无', 'MK 吴', '', '', '', '', '', '', '', '广州市十三行美衣城DO41A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1101', '郑小姐', '13533620006', '无', '无', 'MG(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B686档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1102', '杨锋', '13533586166', '无', '无', '钻石海岸（谢）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发市场5街10档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1103', '吴小标', '13533502882', '无', '无', 'Honey(清）', '', '', '', '', '', '', '', '广州市十三行美衣城C003档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1104', '陈强', '13533343026', '无', '无', '风姿美琪（清）', '', '', '', '', '', '', '', '广州市十三行美衣城负一层B区B055号。B055A号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1105', '高文群', '13533151798', '无', '无', '完美攻略（蝶）', '', '', '', '', '', '', '', '广州十三行红遍天5楼深圳路38档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1106', '陈水强', '13532329833', '无', '无', '伊丽新仙奴（云）', '', '', '', '', '', '', '', '东莞市虎门富民四楼北B607', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1107', '亿美雅', '13528906008', '无', '无', '亿美雅（清）', '', '', '', '', '', '', '', '广州市红遍天三楼美国街25号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1108', '卡特崎', '13527888708', '无', '无', '卡特崎（陈）', '', '', '', '', '', '', '', '广州市沙河新天地服装城五楼545档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1109', '金兰', '13527873503', '无', '无', '金兰（红）', '', '', '', '', '', '', '', '广州市起义路高第街3档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1110', '视野', '13527869603', '无', '无', '视野（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦4FB466', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1111', '依吻', '13527862626', '无', '无', '依吻（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼90档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1112', '邱志辉', '13527810881', '无', '无', '丽辉（清）', '', '', '', '', '', '', '', '广州市梓元岗综合市场22档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1113', '罗文栋', '13527810881', '无', '无', '欣欣（梓元岗）（清）', '', '', '', '', '', '', '', '广州市梓元岗水电路边22档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1114', '有兴', '13527810881', '无', '无', '有兴（清）', '', '', '', '', '', '', '', '广州市梓元岗综合市场22档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1115', '洪建龙', '13527801997', '无', '无', '柒威（广州富丽）', '', '', '', '', '', '', '', '广州富丽大厦', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1116', '卡骐', '13527798222', '无', '无', '卡骐（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼C13A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1117', '唐昌菊', '13527791645', '无', '无', '艾贝尔（广州红棉）（琳）', '', '', '', '', '', '', '', '广州西郊214档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1118', '绅维纪', '13527790255', '无', '无', '绅维纪（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9257档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1119', '何聚', '13527789746', '无', '无', 'Fish(萍）', '', '', '', '', '', '', '', '广州市儿童公园美衣城负一楼A065-A066', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1120', '数字记忆', '13527778817', '无', '无', '数字记忆（红遍天）（华）', '', '', '', '', '', '', '', '广州市十三行路新中国4楼B427', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1121', '', '13527778817', '无', '无', '5577（清）', '', '', '', '', '', '', '', '广州市十三行路红遍天三楼美国街33号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1122', '伊璐红', '13527759887', '无', '无', '伊璐红（戴）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼 珠海路5号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1123', '锦华海柔', '13527688150', '无', '无', '锦华（海柔）（广州西郊）（静）', '', '', '', '', '', '', '', '白马西郊265档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1124', '广州登喜龙', '13527682259', '无', '无', '登喜龙清', '', '', '', '', '', '', '', '广州锌元岗水电95档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1125', 'AK108', '13527118278', '无', '无', 'AK108（陈）', '', '', '', '', '', '', '', '广州市沙河万佳服装贸易中心十街54档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1126', '欧美韩', '13517705464', '无', '无', '欧美韩（姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦十楼157档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1127', '生乐', '13516707832', '无', '无', '生乐', '', '', '', '', '', '', '', '杭州市江干区彭埠镇御道东区62号（俞森云）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1128', '谢佳', '13516528292', '无', '无', '椰枫情语（清）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街20号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1129', '阳光巴黎', '13515038003', '无', '无', '阳光巴黎（清）', '', '', '', '', '', '', '', '广州市海珠区鹭江西街88号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1130', '摩根.莱克', '13514029196', '无', '无', '摩根.莱克（商）', '', '', '', '', '', '', '', '福建普江新塘后洋工业区3号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1131', '柏斯卡尔', '13512783368', '无', '无', '柏斯卡尔（商）', '', '', '', '', '', '', '', '广州市白马服装批发市场2219档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1132', '花仙子', '13512755776', '无', '无', '花仙子（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天服装市场三楼唐人街16号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1133', '窕纯', '13512738899', '无', '无', '窕纯（清）', '', '', '', '', '', '', '', '广州市越秀区万福路19号万福精品广场首层34.58', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1134', '金德帽业', '13512738899', '无', '无', '金德帽业（谢）', '', '', '', '', '', '', '', '广州市越秀区万福路19号华荟大厦万福精品广场一楼34档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1135', '君子坊', '13512713959', '无', '无', '君子坊（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8239档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1136', '越野狼', '13506931429', '无', '无', '越野狼', '', '', '', '', '', '', '', '福建石狮', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1137', '梦菲鸟', '13506930860', '无', '无', '梦菲鸟', '', '', '', '', '', '', '', '福建石狮华山村华北二区8号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1138', '杨华群', '13505989369', '无', '无', '阿玛尼服饰（商）', '', '', '', '', '', '', '', '福建省石狮市南洋路1247-1249号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1139', '太子岁', '13505980567', '无', '无', '太子岁', '', '', '', '', '', '', '', '福建省晋江市永和镇旦厝工业区太子岁大厦', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1140', '陈吉孝', '13505714766', '无', '无', '帝凡璐', '', '', '', '', '', '', '', '杭州四季青服装老市场二楼1195（马上搬到意法杰菲娜旁', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1141', '洪清凯', '13505087482', '无', '无', '柏妮诗（商）', '', '', '', '', '', '', '', '福建省石狮市蚶江镇洪窟村', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1142', '玛拉迪', '13505082532', '无', '无', '玛拉迪（商）', '', '', '', '', '', '', '', '福建石狮市灵秀派出所对面建发商厦6号2楼玛拉迪服饰', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1143', '兵独世家', '13505082057', '无', '无', '兵独世家', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1144', '凯恩', '13503098665', '无', '无', '凯恩（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城9楼9221档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1145', '泰美帽', '13503087420', '无', '无', '泰美帽（清）', '', '', '', '', '', '', '', '广州市越秀区万福璐33.35号（万福精品广场首层）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1146', '杨丹', '13503015205', '无', '无', '英狄（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7250档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1147', '林悦雄', '13502931602', '无', '无', '奥利美（云）', '', '', '', '', '', '', '', '广州市红棉国际时装城九楼9105档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1148', '雄旺', '13501545618', '无', '无', '雄旺B13档', '', '', '', '', '', '', '', '广州市桂花路梓元岗袜业市场B13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1149', '腾飞皮具', '13501509208', '无', '无', '腾飞皮具（清）', '', '', '', '', '', '', '', '广州市海珠区高第街14档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1150', '关锦欢', '13500097755', '无', '无', '泰可以(东莞虎门)', '', '', '', '', '', '', '', '东莞虎门富民南区2220', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1151', '刘华信', '13500001782', '无', '无', '迪翔', '', '', '', '', '', '', '', '广州沙河万佳服装批发场五街13-15档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1152', '杜丕伙', '13489766777', '无', '无', '设谷', '', '', '', '', '', '', '', '广州市红棉国际时装城9111', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1153', '昕玥时尚秀', '13487090605', '无', '无', '昕玥时尚秀', '', '', '', '', '', '', '', '武汉市中心商城二楼A区006号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1154', '棒球天空', '13450997866', '无', '无', '棒球天空', '', '', '', '', '', '', '', '广东省中山市沙溪镇体育路工业大道17号，原长城制衣厂', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1155', '林华', '13450414278', '无', '无', 'Me2(广州十三行)(琳)', '', '', '', '', '', '', '', '广州市十三行新中国大厦十楼1档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1156', '甜果果童装', '13450396978', '无', '无', '甜果果童装行（清）', '', '', '', '', '', '', '', '广州市沙河新天地负一层童装批发市场021.028档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1157', '吾语', '13450395069', '无', '无', '吾语（商）', '', '', '', '', '', '', '', '广州人民北路921号富丽大厦922', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1158', '蔡雪裕', '13450363248', '无', '无', '电车男（云）', '', '', '', '', '', '', '', '广州市沙河万佳服饰广场10街4档5街95档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1159', 'MEtoo', '13450286393', '无', '无', 'MEtoo(清）', '', '', '', '', '', '', '', '广州市新中国大厦四楼B479档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1160', 'springroad', '13450237711', '无', '无', 'springroad(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼C652档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1161', 'Ba', '13450209199', '无', '无', 'Ba（清）', '', '', '', '', '', '', '', '广州市人民南路十三行新中国大厦六楼C606档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1162', '永胜男袜', '13437839828', '无', '无', '永胜男袜（商）', '', '', '', '', '', '', '', '沙河新大地1楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1163', '海艺', '13437821369', '无', '无', '海艺（萍）', '', '', '', '', '', '', '', '广州市泰康路泰康城广场3楼273A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1164', '星看点', '13437103033', '无', '无', '星看点（商）', '', '', '', '', '', '', '', '武汉汉正街第一大道银座3F-45-46号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1165', '二氧工作室', '13435680960', '无', '无', '二氧工作室（红棉）（丙）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城9楼9316档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1166', '刘丽红', '13434308715', '无', '无', '创美芝（蝶）', '', '', '', '', '', '', '', '广州十三行红遍天三楼美国街10档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1167', '红巴黎', '13434186586', '无', '无', '红巴黎（清）', '', '', '', '', '', '', '', '广州十三行红遍天交易中心五楼珠海路3号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1168', '芭莉纯', '13432000097', '无', '无', '芭莉纯（清）', '', '', '', '', '', '', '', '广州市新中国大厦4楼A428档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1169', '张冰勤', '13430304335', '无', '无', '嘉丽莱（巧丽娜）', '', '', '', '', '', '', '', '广州市北京南路高第街247A挡', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1170', '阿凡迪诗', '13430206088', '无', '无', '阿凡迪诗（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼60档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1171', 'ZADIE', '13428848899', '无', '无', 'ZADIE COMBINE', '', '', '', '', '', '', '', '广州市人民北路新中国大厦4楼A411档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1172', 'MAGIC', '13428830198', '无', '无', 'MAGIC(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦12楼50室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1173', '波兰钻带', '13428810608', '无', '无', '波兰钻带（清）', '', '', '', '', '', '', '', '广州市海珠区高第街14档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1174', '徐欣', '13427533153', '无', '无', '冰河世纪（云）', '', '', '', '', '', '', '', '广州市红棉国际时装城9312室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1175', '雅琳娜', '13424479777', '无', '无', '雅琳娜（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路51档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1176', '刘芳', '13424139338', '无', '无', '梦雅娜（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦五楼A533档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1177', '宇杨', '13424127190', '无', '无', '宇杨（清）', '', '', '', '', '', '', '', '广州市德政南路128号珠光仰忠批发市场C8档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1178', '成文仙', '13424125951', '无', '无', '圣琪奥（清）', '', '', '', '', '', '', '', '广州十三行红遍天六楼北京楼41号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1179', '黑与百', '13423669895', '无', '无', '黑与百（谢）', '', '', '', '', '', '', '', '广州桂花岗新东豪C2086', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1180', '蓝轨', '13422182333', '无', '无', '蓝轨（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城8楼8326档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1181', '李伟奇', '13420253999', '无', '无', '香港渡渡鸟国际服饰有限公司', '', '', '', '', '', '', '', '中山市沙溪镇隆兴工业区兴工路132号浩哲大厦', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1182', '周琦', '13418161494', '无', '无', 'Travei(卢）', '', '', '', '', '', '', '', '广州市新中国大厦4楼C403', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1183', '雅如', '13418155628', '无', '无', '雅如（蝶）', '', '', '', '', '', '', '', '广州市德政南路128号越和仰忠精品商场A1-12-', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1184', '森迪', '13418116638', '无', '无', '森迪（杨）', '', '', '', '', '', '', '', '广州红棉国际时装城9楼9301-9302室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1185', '玛旋', '13418099900', '无', '无', '玛旋（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦C520档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1186', '永盛', '13418032229', '无', '无', '永盛（吴）', '', '', '', '', '', '', '', '广州市越秀区一德东路39号万菱广场负层一C011档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1187', '卓越', '13418000028', '无', '无', '卓越（陈）', '', '', '', '', '', '', '', '广州市站西路57号站西广场2号楼8846档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1188', '依之友', '13416457734', '无', '无', '依之友（广州新中国大厦）（琳）', '', '', '', '', '', '', '', '8楼33档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1189', '蒋云春', '13416433291', '无', '无', '娜卡露（卢）', '', '', '', '', '', '', '', '广州市人民南路红遍天5楼深圳路28档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1190', '天图', '13416419478', '无', '无', '天图（陈）', '', '', '', '', '', '', '', '广州市越秀区万福路30', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1191', '迈克兰迪', '13416269399', '无', '无', '迈克兰迪（周', '', '', '', '', '', '', '', '广州市站西路57号站西广场2号楼4009室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1192', '彭丽钦', '13416251615', '无', '无', '宝宝乐童装行（清）', '', '', '', '', '', '', '', '广州市沙河新天地童装城003.004.049.050档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1193', '斯达斯凯', '13416183098', '无', '无', '斯达斯凯（贺）', '', '', '', '', '', '', '', '广州市环市西路184号红棉国际时装城9118档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1194', '浅草歌草', '13416144417', '无', '无', '浅草歌草', '', '', '', '', '', '', '', '广州市十三行新中国大厦七楼C23档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1195', '野蛮魔', '13414130593', '无', '无', '野蛮魔（吴）', '', '', '', '', '', '', '', '广州沙河万佳五街45-47档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1196', '张荣然', '13400832905', '无', '无', '依琪璐（商）', '', '', '', '', '', '', '', '福建省石狮市塔前中街142号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1197', '蔡锦池', '13392913366', '无', '无', '丹纯（萍）', '', '', '', '', '', '', '', '广州市十三行红遍天负一层罗马街35号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1198', '杜绮贝卡', '13380073767', '无', '无', '杜绮贝卡（红）', '', '', '', '', '', '', '', '广州市十三行新中国大厦九楼B81室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1199', '韩百惠', '13375779788', '无', '无', '韩百惠（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天负一楼罗马街36号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1200', '伊汀', '13362327186', '无', '无', '伊汀', '', '', '', '', '', '', '', '濮院羊毛衫市场三区上海街471号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1201', 'shufeng', '13360045658', '无', '无', 'shufeng(玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦8楼131档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1202', '童拥军', '13346177183', '无', '无', '跳跳虫', '', '', '', '', '', '', '', '杭州四季青意法服饰5楼163号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1203', '迷吉', '13342898705', '无', '无', '迷吉（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D41档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1204', '陈', '13336036613', '无', '无', '鑫亿森（商）', '', '', '', '', '', '', '', '杭州四季青中纺中心8楼8B-57号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1205', '鑫亿森（废', '13336036613', '无', '无', '鑫亿森(作废', '', '', '', '', '', '', '', '杭州意法四楼东区116号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1206', '伊然', '13335712735', '无', '无', '伊然', '', '', '', '', '', '', '', '杭州航海露1502#D座5-6楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1207', '朱桂连', '13332888733', '无', '无', '依狄（广州红遍天）（琳）', '', '', '', '', '', '', '', '广州十三行红遍天二楼日本街38档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1208', '刘镜湖', '13332869996', '无', '无', '云逸天使（吴）', '', '', '', '', '', '', '', '广州市十三行新中国大厦16楼043档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1209', '卡娃咿', '13326402014', '无', '无', '卡娃咿（卢）', '', '', '', '', '', '', '', '广州市万福路万福精品广场1楼68-69档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1210', '小狐仙', '13316233806', '无', '无', '小狐仙（广州新中国大厦）（琳）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼D43B档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1211', '蓝之域', '13316223995', '无', '无', '蓝之域（沙河万佳）（清）', '', '', '', '', '', '', '', '广州市沙河万佳服饰广场8街41档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1212', '傅陈娜', '13316152481', '无', '无', '尼克公爵（杨）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7236档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1213', '黎凤珊', '13316114559', '无', '无', '亚玛图(商)', '', '', '', '', '', '', '', '广州市红棉国际时装城6楼6322-6323档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1214', '萨宾', '13312834877', '无', '无', '萨宾（谢）', '', '', '', '', '', '', '', '广州市红棉国际时装城八楼8237档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1215', '美嘉e簇', '13302275222', '无', '无', '美嘉e簇(姚）', '', '', '', '', '', '', '', '广州市人民南路十三行新中国大厦16楼051档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1216', '利达', '13286887596', '无', '无', '利达（清）', '', '', '', '', '', '', '', '广州市新中国大厦11楼58档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1217', '惟绮莉', '13282828787', '无', '无', '惟绮莉', '', '', '', '', '', '', '', '杭州意法四楼西39', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1218', '刘小姐', '13265188392', '无', '无', '欧点雅（商）', '', '', '', '', '', '', '', '广州市十三行红遍天3楼唐人街78号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1219', '艾菲尔', '13250709514', '无', '无', '艾菲尔（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天五楼珠海路32号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1220', '漫调', '13250338899', '无', '无', '漫调（清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦5楼B536-B539', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1221', '欧泽雅', '13250275222', '无', '无', '欧泽雅（清）', '', '', '', '', '', '', '', '广州市梓元岗新东豪A1086', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1222', '郑卫仙', '13250150939', '无', '无', '韩之岛（杨）', '', '', '', '', '', '', '', '广州市富丽大厦326室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1223', '韩尚魅惑', '13249730244', '无', '无', '韩尚魅惑（广州沙河）（张）', '', '', '', '', '', '', '', '广州市沙河万佳九街13档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1224', '罗嘉智（老', '13247581838', '无', '无', '祥鸿宝(清)', '', '', '', '', '', '', '', '广州市梓元岗水电134档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1225', '百丽儿', '13242858889', '无', '无', '百丽儿（玲）', '', '', '', '', '', '', '', '广州市十三行新中国大厦八楼203D', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1226', 'E2', '13238318288', '无', '无', 'E2(蔡）', '', '', '', '', '', '', '', '广州市白马西郊商场262铺', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1227', '淑女坊', '13221407200', '无', '无', '淑女坊', '', '', '', '', '', '', '', '杭州市四季青服饰城意法三楼61', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1228', '繹彩', '13221099777', '无', '无', '繹彩', '', '', '', '', '', '', '', '杭州四季青意法四楼152号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1229', '杨大平', '13208047718', '无', '无', '卡迪安娜女裤', '', '', '', '', '', '', '', '杭州意法服饰城东2F-286-287', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1230', '依姿骄', '13202992658', '无', '无', '依姿骄（红遍天）（欧）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京街20号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1231', '爱比诺思', '13202442521', '无', '无', '爱比诺思（红）', '', '', '', '', '', '', '', '广州市十三行红遍天三楼美国街16号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1232', '花木子', '13202047266', '无', '无', '花木子（蝶）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼上海路045档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1233', '恒健商店', '13189178272', '无', '无', '恒健商店（商）', '', '', '', '', '', '', '', '广州市沙河万佳二街19档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1234', 'BLACKART', '13186978777', '无', '无', 'BLACKART（萍）', '', '', '', '', '', '', '', '广州市新中国大厦六楼B679档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1235', '诗麦尔弈', '13173608267', '无', '无', '诗麦尔弈（商）', '', '', '', '', '', '', '', '杭州意法', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1236', '黄小瑜', '13168302067', '无', '无', '亚狄龙（商）', '', '', '', '', '', '', '', '广州市人民北路921号富骊大厦613A室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1237', '裕华达', '13160852562', '无', '无', '裕华达（清）', '', '', '', '', '', '', '', '广州市梓元岗水电134档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1238', '瑞安金字塔', '13157767568', '无', '无', '瑞安金字塔', '', '', '', '', '', '', '', '瑞安仙降街道仙降工业区', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1239', '彭金秀', '13143515158', '无', '无', '龙子印（谢）', '', '', '', '', '', '', '', '广州市富丽', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1240', '韩小玲', '13138676685', '无', '无', '小电烫（清）', '', '', '', '', '', '', '', '广州市十三行美衣城C035-036档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1241', '和合美', '13138618800', '无', '无', '和合美（姚）', '', '', '', '', '', '', '', '广州市人民南路十三行新中国大厦16楼008档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1242', '维奥.齐云', '13136196770', '无', '无', '维奥.齐云', '', '', '', '', '', '', '', '杭州四季青乡政府二楼3239号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1243', '尚亿', '13128269869', '无', '无', '尚亿（清）', '', '', '', '', '', '', '', '广州市荔湾区十三行新中国大厦5楼A539室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1244', '幸运璇', '13119590522', '无', '无', '幸运璇（蝶）', '', '', '', '', '', '', '', '广州市梓元岗新东豪皮具城A1038', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1245', 'OFeel', '13119536556', '无', '无', 'OFeel(蝶）', '', '', '', '', '', '', '', '广州市十三行新中国大厦7楼A13A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1246', '张艳霞', '13114394489', '无', '无', '欧赛雅文（商）', '', '', '', '', '', '', '', '武汉大夹街15街268号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1247', '吴美超', '13113945477', '无', '无', '艾派', '', '', '', '', '', '', '', '中山市艾派纺织制衣有限公司', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1248', '湃森王', '13112164888', '无', '无', '湃森王（清）', '', '', '', '', '', '', '', '广东省揭阳市东山区美阳路玉浦北新区F1栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1249', 'CLOVEC', '13107783817', '无', '无', 'CLOVEC(吴）', '', '', '', '', '', '', '', '广州市红棉国际时装8228A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1250', '动力一族', '13093749758', '无', '无', '动力一族（杭州四季青）（许）', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1251', '樊红梅', '13082828982', '无', '无', '晗菲曼琪（商）', '', '', '', '', '', '', '', '浙江省杭州四季青意法服装城3楼东区130号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1252', '狄梵力', '13071308658', '无', '无', '狄梵力（吴）', '', '', '', '', '', '', '', '广州市红棉国际时装9楼9277档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1253', '张国新', '13068851616', '无', '无', '歌子（陈）', '', '', '', '', '', '', '', '广州德政南路128号万福市场C区4档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1254', '罗云连', '13067888708', '无', '无', 'LC', '', '', '', '', '', '', '', '杭州四季青意法服饰城4F-63A', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1255', '幽楠', '13060688954', '无', '无', '幽楠（寻品）（商）', '', '', '', '', '', '', '', '红棉国际时装城九楼9202档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1256', '雅淇美', '13059100901', '无', '无', '雅淇美（玲）', '', '', '', '', '', '', '', '广州市十三行红遍天富一楼东京街93档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1257', '胜威', '13044293965', '无', '无', '胜威（萍）', '', '', '', '', '', '', '', '广州市红遍天负一层罗马街45档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1258', '梵特。佐顿', '13032528288', '无', '无', '梵特。佐顿', '', '', '', '', '', '', '', '浙江，桐乡市，濮院羊毛衫市场一区济南街1024号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1259', 'MiSS', '13022045565', '无', '无', 'MiSS(清）', '', '', '', '', '', '', '', '广州市十三行新中国大厦6楼B659档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1260', '名典。奥雪', '13018941243', '无', '无', '名典。奥雪（摩登女主角)', '', '', '', '', '', '', '', '杭州市四季青服装市场苏杭一楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1261', '姗姗', '13018613131', '无', '无', '姗姗（陈）', '', '', '', '', '', '', '', '广东东莞虎门镇富民商业大厦四楼西B607档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1262', '吕家成', '13006894449', '无', '无', '森威龙（商）', '', '', '', '', '', '', '', '广州市沙河万佳服装广场六街58档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1263', '刘元英', '13006182314', '无', '无', '晓汝莱', '', '', '', '', '', '', '', '双隆9街A区9098号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1264', '甜蜜蜜', '13005115272', '无', '无', '甜蜜蜜（萍）', '', '', '', '', '', '', '', '广州市十三行新中国大厦9楼A96档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1265', '杨震', '13003606338', '无', '无', '可炎', '', '', '', '', '', '', '', '杭州四季青苏杭服饰市场三楼038号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1266', '刘月梅', '13925100777', '无', '无', '爱买(十三行)(丙)', '', '', '', '', '', '', '', '广州市天马大厦4001室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1267', '荣华佰斯龙', '02038030012', '无', '无', '荣华佰斯龙', '', '', '', '', '', '', '', '广州沙河有利服装北城大厅5档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1268', '鑫冉', '02028326228', '无', '无', '鑫冉服饰（蓉）', '', '', '', '', '', '', '', '广州市站前路新大地服装城6楼635室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1269', '镘伊组合', '1586888728', '无', '无', '镘依组合', '', '', '', '', '', '', '', '杭州四季青意法服饰城6楼179号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1270', '枫韵', '18929572666', '无', '无', '枫韵（广州红遍天）（甲）', '', '', '', '', '', '', '', '广州红遍天富一楼罗马街19.21.28.30号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1271', '意利王', '13905952666', '无', '无', '意利王', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1272', '霸奴', '13906516223', '无', '无', '霸奴', '', '', '', '', '', '', '', '', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1273', '许海澄', '83206915 档口', '无', '无', '非转角（商）', '', '', '', '', '', '', '', '广州站前路红棉8229档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1274', '亮妹', '13858075288', '无', '无', '亮妹（蓝色钱江）', '', '', '', '', '', '', '', '杭州市四季青服装集团老市场3F-168号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1275', '指南针', '027-84461678', '无', '无', '指南针（商）', '', '', '', '', '', '', '', '湖北省武汉市汉阳区黄金口万通工业园七号楼1楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1276', '靓欣定作', '13959997333', '无', '无', '靓欣定作（商）', '', '', '', '', '', '', '', '福建省石狮市灵狮开发区A-15栋', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1277', '欣豪', '83059475', '无', '无', '欣豪（广州汇美）（张）', '', '', '', '', '', '', '', '广州市环市西路139号汇美1A080档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1278', '湃克', '18688902262', '无', '无', '湃克(商)', '', '', '', '', '', '', '', '广州市沙河万佳服装市场二楼A区205室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1279', '森宇狼', '13580347285', '无', '无', '森宇狼（广州站西）（清）', '', '', '', '', '', '', '', '广州市站西路57号1号楼(凯荣都服装批发市场)50', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1280', '向春平', '13535313791', '无', '无', '欧缇亚(广州站西)(清)', '', '', '', '', '', '', '', '广州市站西路59号金象商场509室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1281', '蒋晓英', '15918412658', '无', '无', '天天（蝶）', '', '', '', '', '', '', '', '广州市德政南路128号越和仰忠精品市场C3档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1282', '泰柏斯', '13711555382', '无', '无', '泰柏斯（贺）', '', '', '', '', '', '', '', '广州市富丽大厦625室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1283', '﻿佳艺', '85696662档口', '无', '无', '佳艺(商)', '', '', '', '', '', '', '', '武汉汉正街第一大道金座3F-69号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1284', '喜登鸟', '18620168366张', '无', '无', '喜登鸟（商）', '', '', '', '', '', '', '', '广州市三元里大道中棠溪岗贝路2号8楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1285', '真情草名坊', '18613154298老板娘', '无', '无', '真情草名坊（广州西郊）（静）', '', '', '', '', '', '', '', '广州白马西郊231档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1286', '赵少芳', '15989110124啊琪', '无', '无', '天伦万怡（陈）', '', '', '', '', '', '', '', '广州站西广场桃花江7楼7021档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1287', '王月兰', '15989041377老板娘', '无', '无', 'Messi（商）', '', '', '', '', '', '', '', '广州市沙河万佳六街70-72档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1288', '圣格威', '15930177100李经理', '无', '无', '圣格威（商）', '', '', '', '', '', '', '', '广州红棉国际时装城8楼8211室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1289', '72街', '15920392165方欣', '无', '无', '72街', '', '', '', '', '', '', '', '广州荔湾区十三行桨栏路62-64号A03档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1290', '胡汀', '15918895228成人装', '无', '无', '自定义（萍）', '', '', '', '', '', '', '', '十三行美衣城A063', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1291', '广州优尊厂', '15918758915（温小姐', '无', '无', '优尊（商）', '', '', '', '', '', '', '', '广州人民北路921号富丽大厦330室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1292', '萧耀棉', '15876590900阿萍', '无', '无', '哈煞（商）', '', '', '', '', '', '', '', '广州市红棉8321档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1293', '鑫盛', '15812866883老板娘', '无', '无', '鑫盛（商）', '', '', '', '', '', '', '', '虎门富民商场4楼北区B626档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1294', '以太会', '155212222219(小农)', '无', '无', '以太会（商）', '', '', '', '', '', '', '', '广州市红棉国际时装城7楼7261', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1295', '田晶晶', '15337230736天荣', '无', '无', '北海道（商）', '', '', '', '', '', '', '', '武汉市汉正街第一大道金座3F-89-90号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1296', '玻璃花', '13960257832汇款通知', '无', '无', '玻璃花（商）', '', '', '', '', '', '', '', '福建晋江永和镇古昔村群英北路61号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1297', '姚晓丹', '13707569298小姚', '无', '无', '真情（商）', '', '', '', '', '', '', '', '广州市桂花岗', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1299', '陈笑芳', '13609018800（王波）', '无', '无', '天涯黑豹（商）', '', '', '', '', '', '', '', '广州增城新塘牛仔城A1栋1105-1106档1066档A2栋1023档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1300', '李小姐', '13450289390（李小姐', '无', '无', '米亚罗', '', '', '', '', '', '', '', '广州市白云区新市大埔九社工业区21栋一楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1301', '新奇鼠', '0769-85516799', '无', '无', '新奇鼠（虎门富民）', '', '', '', '', '', '', '', '虎门富民东区3503档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1302', '古扬', '0769-85225276', '无', '无', '古扬（虎门富民）', '', '', '', '', '', '', '', '虎门富民南区1305档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1303', '许教初', '0769-85223999', '无', '无', 'E时代（陈）', '', '', '', '', '', '', '', '东莞富明商业大厦南区1101-1207档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1304', '奥仕廷', '0769-85181762', '无', '无', '奥仕廷（虎门富民）', '', '', '', '', '', '', '', '虎门富民北区3718档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1305', '暴龙.鬼王', '0769-85102692', '无', '无', '暴龙.鬼王（广州康乐）', '', '', '', '', '', '', '', '广州市环市西路184号红棉9楼9119', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1306', '千姿韩', '0769-82708358', '无', '无', '千姿韩(萍）', '', '', '', '', '', '', '', '广东东莞虎门富明商业大厦四楼北区B713', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1307', '苏德容（联', '0760-87204168', '无', '无', '情侣屋（商）', '', '', '', '', '', '', '', '富骊701，中山市沙溪镇康乐中路74号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1308', '周丽萍', '0760-86221158', '无', '无', '波特邦威（商）', '', '', '', '', '', '', '', '广州市人民北路921档富丽大厦602室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1309', '默契', '0679-85252128', '无', '无', '默契（虎门富民）', '', '', '', '', '', '', '', '虎门富民二楼东区2105档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1310', '青骑军', '0595-88887090', '无', '无', '青骑军（商）', '', '', '', '', '', '', '', '福建石狮市福利东路180号对面', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1311', '亨达盛', '0595-88612287', '无', '无', '亨达盛', '', '', '', '', '', '', '', '福建省石狮市香江路茂夏村委会警务室对面', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1312', '八牌', '0595-85488629', '无', '无', '八牌', '', '', '', '', '', '', '', '福建晋江英林镇东埔工业区', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1313', '雷奔', '0595-85281553', '无', '无', '雷奔（商）', '', '', '', '', '', '', '', '福建省江龙湖杭边南区98号雷奔工业园', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1314', '拉彩', '0595-83660366', '无', '无', '拉彩服饰（商）', '', '', '', '', '', '', '', '福建省石狮市灵狮村一号楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1315', '动感一族', '0595-83288886', '无', '无', '动感一族', '', '', '', '', '', '', '', '福建省石狮市宝盖工业区健健实业园A幢动感一族', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1316', '蔡美专', '0595-83111998', '无', '无', '后街地带（商）', '', '', '', '', '', '', '', '广州红棉8332档，石狮市宝盖镇鞋城工', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1317', '林孙湛', '0577-65031568', '无', '无', '康华', '', '', '', '', '', '', '', '浙江省胶鞋工业专业园区（瑞安.仙降）', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1318', '霓裳', '0573-88270597', '无', '无', '霓裳', '', '', '', '', '', '', '', '浙江桐乡濮院二区1785号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1319', '卓儿衣人', '0571-86963497', '无', '无', '卓儿衣人（杭州四季青）（杰）', '', '', '', '', '', '', '', '杭州四季青意法服装城三楼177号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1320', '梦之新依', '0571-28175901', '无', '无', '梦之新依服饰', '', '', '', '', '', '', '', '杭州四季青中纺中心8B-01', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1321', '盛齐心', '027-85322737', '无', '无', '第五季(商)', '', '', '', '', '', '', '', '武汉市大夹街201号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1322', '左岸港角', '020-88906199', '无', '无', '左岸港角（清）', '', '', '', '', '', '', '', '广州市十三行红遍天四楼南京路020号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1323', 'GuLogo', '020-86683926', '无', '无', 'GuLogo(广州红棉)', '', '', '', '', '', '', '', '广州市环市西路184号红棉大厦9楼9270室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1324', '王军', '020-86683692', '无', '无', '梵卡诺（陈）', '', '', '', '', '', '', '', '广州市站前路地一大道富二层靓仔装区C32档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1325', '欧米鹊', '020-86373067', '无', '无', '欧米鹊（作废）', '', '', '', '', '', '', '', '广州白马大厦西郊商场283档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1326', '观奇世家', '020-86229785', '无', '无', '观奇世家（海）', '', '', '', '', '', '', '', '广州市环市西路184号天马大厦四楼4010-401', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1327', '金潮来', '020-86229119', '无', '无', '金潮来（立）', '', '', '', '', '', '', '', '广州市环市西路168号天马大厦5035-5038', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1328', '天朗世家', '020-86228699', '无', '无', '天朗世家，麦浪（广州白马）（东', '', '', '', '', '', '', '', '广州白马2519档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1329', 'BCB', '020-84598278', '无', '无', 'BCB(清', '', '', '', '', '', '', '', '广州市十三行新中国大厦六楼A691', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1330', '易露', '020-83355001', '无', '无', '易露（清）', '', '', '', '', '', '', '', '广州市解放南路88号大都市鞋城1G15档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1331', '西域铁马', '020-83206774', '无', '无', '西域铁马（广州红棉）（立）', '', '', '', '', '', '', '', '广州市站前路红棉国际时装城8楼8202室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1332', '永威', '020-81708208', '无', '无', '永威（清）', '', '', '', '', '', '', '', '广州市中山八路荔湖大厦后座南楼A1005号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1333', '早稻田', '020-62668555', '无', '无', '早稻田(广州沙河)', '', '', '', '', '', '', '', '广州市广园东路1858号骏亿大厦7楼', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1334', '帝皇', '020-37396137', '无', '无', '帝皇（商）', '', '', '', '', '', '', '', '广州沙河益民服装城A区20、21档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1335', '林立升', '020-37270556', '无', '无', '万纯（广州沙河万佳）（杰）', '', '', '', '', '', '', '', '广州沙河万佳2楼A201室', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1336', '战狼世家', '020-36337331', '无', '无', '战狼世家519(广州富丽）（杰', '', '', '', '', '', '', '', '广州富骊大厦519档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1337', '郑镇联', '020-35692368', '无', '无', 'E派（杨）', '', '', '', '', '', '', '', '广州市人民北路931号长江国际服装城9015', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1338', 'EP-Ⅲ', '020-34112347', '无', '无', 'EP-Ⅲ(第一大道)(立)', '', '', '', '', '', '', '', '广州市地一大道负二层C36.C37.C38.C39', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1339', '伍金莲', '020-33266205', '无', '无', '牵引力（广州沙河）（乙）', '', '', '', '', '', '', '', '广州沙河万佳六街4档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1340', '陈剑文', '020-32911308', '无', '无', '力斧（商）', '', '', '', '', '', '', '', '广州市沙河万佳服装批发市场十街A1档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1341', '艾丽丝', '020-32658788', '无', '无', '艾丽丝(广州新中国大厦)(琳)', '', '', '', '', '', '', '', '广州十三行新中国大厦15楼053A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1342', '韩日星', '020-289855558', '无', '无', '韩日星（郭）', '', '', '', '', '', '', '', '广州市红棉国际时装城8235A档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1343', 'UP', '020-22296754', '无', '无', 'UP(姚）', '', '', '', '', '', '', '', '广州市十三行新中国大厦17楼1789-1', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1344', '陈洁英', '0769-85123500', '无', '无', '海百合（虎门富民）', '', '', '', '', '', '', '', '虎门富民三楼西区3209档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1345', '顺飞', '0769-85106498', '无', '无', '顺飞（商）', '', '', '', '', '', '', '', '富民大厦三楼北区第一行3213号', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1346', '丰年代', '0769-85101331', '无', '无', '丰华年代（东莞虎门富民）（琳）', '', '', '', '', '', '', '', '东莞虎门富民商业大厦一楼东区A515档', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1347', '幻象玛雅', '0595-88882909', '无', '无', '幻象玛雅（商）', '', '', '', '', '', '', '', '福建石狮市五星后花明珠巷', '简约', '女装', '1', '紫荆
', '');
INSERT INTO `t_stalls` VALUES ('1348', '怡鑫', '0595-88710696', '无', '无', '怡鑫', '', '', '', '', '', '', '', '福建石狮', '简约', '女装', '1', '紫荆
', '');

-- ----------------------------
-- Records for `t_users`
-- ----------------------------
INSERT INTO `t_users` VALUES ('2', 'admin', 'admin', 'admin@honglema.com', '$2y$10$61k0ZGGuDQiAgtFCRrkmcOh1xeGPcm0fojl2NGuehH6uv/I1k0NXq', 'elYvnjB9Mndy1EkOdToA6tIrFEOZvPTNBB44iEj68Md3g6bqm9XNTG03BYEf', '2016-04-12 17:52:20', '2016-04-12 18:20:20', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `t_users` VALUES ('21', '456', '456', '456@honglema.com', '$2y$10$VZxjITiTTtaO8oYzs0tniOVLAxxeC1ZihKrq7lbyYlkodrn9pSu5y', '', '2016-05-09 14:42:52', '2016-05-09 14:43:29', '0', '0', '0', '1', '0', '1', '1');
INSERT INTO `t_users` VALUES ('22', '123', '123', '123@honglema.com', '$2y$10$WF6rWcjzYAjVgbxjNSxgI.7v0VWDUuBdcVchXgalhqMTS5KcPuoh.', '', '2016-05-09 16:19:01', '2016-05-10 12:28:53', '0', '0', '1', '0', '1', '0', '1');
INSERT INTO `t_users` VALUES ('23', 'ceshi', '测试', 'ceshi@honglema.com', '$2y$10$eyncttg9ikRxfLpqHywPQOOQYu3LRNxh31d3QSPGSE3M5qS7AfyTu', '', '2016-05-10 11:59:53', '2016-05-10 12:29:05', '1', '0', '1', '1', '1', '1', '0');
INSERT INTO `t_users` VALUES ('24', 'eric', 'eric', 'eric@honglema.com', '$2y$10$4M1g6lfQ8Vl.8U854kLlUOYZjO5Hi4k99i0r2ASpSPlsbWHMtS6Cm', '', '2016-05-10 13:05:22', '2016-05-10 13:05:54', '1', '0', '1', '1', '1', '1', '0');

