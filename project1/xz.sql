#设置客户端连接服务器使用utf8编码
SET NAMES UTF8;
#丢弃数据库xz，如果存在的话
DROP DATABASE IF EXISTS xz;
#创建数据库xz，使用utf8字符集
CREATE DATABASE xz CHARSET=UTF8;
#进入数据库xz
USE xz;
/**创建商品模块相关的表**/
#笔记本型号表xz_laptop_family
#笔记本信息表xz_laptop
#笔记本图片表xz_laptop_pic     sm:small  md:medium  lg:large
/**创建用户模块相关的表**/
#用户信息表xz_user
CREATE TABLE xz_user(
  uid INT PRIMARY KEY AUTO_INCREMENT,
  uname VARCHAR(32),
  upwd VARCHAR(32),
  email VARCHAR(64),
  phone VARCHAR(16),
  avatar VARCHAR(128),
  user_name VARCHAR(32),
  gender INT
);
INSERT INTO xz_user VALUES
(1,'dingding','123456', 'ding@tedu.cn','13501111111','img/1.jpg','丁然',0),
(2,'dangdang','123456', 'dang@tedu.cn','13501111112','img/2.jpg','当当',1),
(3,'doudou','123456', 'dou@tedu.cn','13501111113','img/3.jpg','窦涛',1),
(4,'yaya','123456', 'yaya@tedu.cn','13501111114','img/4.jpg','王小雅',0);
#接收人地址表xz_receiver_address
/**创建购物车模块相关的表**/
#购物车表
#订单表
#订单详情表
/**创建其它表**/
#首页轮播广告表
#首页商品表