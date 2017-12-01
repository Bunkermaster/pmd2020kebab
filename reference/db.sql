DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE `ingredient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
INSERT INTO `ingredient` VALUES (1,'Laitue','Filling'),(3,'Moutonton ðŸ‘ðŸ¬','Viande lait neuse'),(7,'ðŸ','Viande');

