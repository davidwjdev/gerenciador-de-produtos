DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
);

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
);

DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE `product_tag` (
   `product_id` int NOT NULL,
   `tag_id` int NOT NULL,
   PRIMARY KEY (`product_id`,`tag_id`),
   CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
   CONSTRAINT `tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`)
);