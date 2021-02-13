#
# TABLE STRUCTURE FOR: categorie_aprenant
#

DROP TABLE IF EXISTS `categorie_aprenant`;

CREATE TABLE `categorie_aprenant` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `categorie_aprenant` (`idcat`, `nom`, `created_at`) VALUES (1, 'Apprenants sponsorisés ', '2020-12-25 17:33:24');
INSERT INTO `categorie_aprenant` (`idcat`, `nom`, `created_at`) VALUES (2, 'Apprenants non sponsorisés ', '2020-12-25 17:33:46');


#
# TABLE STRUCTURE FOR: derogation
#

DROP TABLE IF EXISTS `derogation`;

CREATE TABLE `derogation` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `date_debit` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  PRIMARY KEY (`idd`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `derogation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `derogation` (`idd`, `id_user`, `date_debit`, `date_fin`, `active`) VALUES (1, 8, '2021-01-05', '2021-01-15', 1);
INSERT INTO `derogation` (`idd`, `id_user`, `date_debit`, `date_fin`, `active`) VALUES (3, 10, '2021-01-03', '2021-01-04', 0);


#
# TABLE STRUCTURE FOR: edition
#

DROP TABLE IF EXISTS `edition`;

CREATE TABLE `edition` (
  `idedition` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idedition`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `edition` (`idedition`, `nom`, `created_at`) VALUES (1, 'première édition', '2020-12-25 17:06:34');
INSERT INTO `edition` (`idedition`, `nom`, `created_at`) VALUES (2, 'deuxième édition', '2020-12-25 17:06:53');
INSERT INTO `edition` (`idedition`, `nom`, `created_at`) VALUES (4, 'troisième édition', '2020-12-25 17:08:50');


#
# TABLE STRUCTURE FOR: formation
#

DROP TABLE IF EXISTS `formation`;

CREATE TABLE `formation` (
  `idformation` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idformation`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `formation` (`idformation`, `nom`, `description`, `image`, `created_at`) VALUES (1, 'Programmation web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                     consequat. D', '258319375.jpg', '2020-12-26 09:26:07');
INSERT INTO `formation` (`idformation`, `nom`, `description`, `image`, `created_at`) VALUES (2, 'Programmation mobile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                     consequat. D', '2106409444.jpg', '2020-12-26 09:28:40');
INSERT INTO `formation` (`idformation`, `nom`, `description`, `image`, `created_at`) VALUES (3, 'administration réseau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                     consequat. D', '1421448654.png', '2020-12-26 09:29:27');


#
# TABLE STRUCTURE FOR: inscription_formation
#

DROP TABLE IF EXISTS `inscription_formation`;

CREATE TABLE `inscription_formation` (
  `idinscription` int(11) NOT NULL AUTO_INCREMENT,
  `idedition` int(11) DEFAULT NULL,
  `idformation` int(11) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinscription`),
  KEY `idedition` (`idedition`),
  KEY `idformation` (`idformation`),
  KEY `idcat` (`idcat`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `inscription_formation_ibfk_1` FOREIGN KEY (`idedition`) REFERENCES `edition` (`idedition`) ON DELETE CASCADE,
  CONSTRAINT `inscription_formation_ibfk_2` FOREIGN KEY (`idformation`) REFERENCES `formation` (`idformation`) ON DELETE CASCADE,
  CONSTRAINT `inscription_formation_ibfk_3` FOREIGN KEY (`idcat`) REFERENCES `categorie_aprenant` (`idcat`) ON DELETE CASCADE,
  CONSTRAINT `inscription_formation_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (2, 1, 1, 2, 6, '2020-12-10', '2020-12-26 13:56:28');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (3, 1, 1, 2, 8, '2020-12-10', '2020-12-26 13:59:30');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (4, 1, 1, 1, 5, '2020-12-10', '2020-12-26 14:00:10');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (5, 1, 1, 2, 7, '2020-12-28', '2020-12-28 10:38:06');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (6, 1, 1, 2, 9, '2020-12-28', '2020-12-28 10:40:39');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (7, 1, 1, 2, 10, '2020-12-29', '2020-12-29 15:15:17');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (8, 1, 3, 2, 2, '2020-12-31', '2020-12-31 16:07:07');
INSERT INTO `inscription_formation` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`) VALUES (9, 1, 1, 2, 13, '2020-12-10', '2021-01-05 13:20:40');


#
# TABLE STRUCTURE FOR: messagerie
#

DROP TABLE IF EXISTS `messagerie`;

CREATE TABLE `messagerie` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_recever` int(11) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `code` longtext,
  `fichier` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idmessage`),
  KEY `id_user` (`id_user`),
  KEY `id_recever` (`id_recever`),
  CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_recever`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (1, 2, 1, 'je vais bien merci et vous?', '2020-10-11 14:00:25', '60aa705cf0', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (2, 1, 2, 'ce bon!', '2020-10-11 14:02:23', '8f04778c11', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (3, 2, 1, 'ok bien merci et vous?', '2020-10-11 14:00:25', '60aa705cf0', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (4, 1, 2, 'ce bon!', '2020-10-11 14:02:23', '8f04778c11', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (6, 1, 2, 'cool!', '2020-10-11 14:02:23', '8f04778c11', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (8, 1, 2, 'ce bon!', '2020-10-11 14:02:23', '8f04778c11', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (9, 1, 2, 'prenez cette photo bro!', '2021-01-20 18:13:02', '16fc168f2c', 'bfe486118594e989892f4f6e4f84b125react-native-developpement-mobile.png');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (10, 1, 2, 'cool mon frère!', '2021-01-20 18:14:13', 'eca00df915', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (11, 1, 2, '???? ce très bon!', '2021-01-28 10:36:48', '946c4cee24', NULL);


#
# TABLE STRUCTURE FOR: notification
#

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (1, 'Grace kilumbu vient de payer 1$', 'admin/compte', 1, '2021-01-19 15:36:59', 'fa fa-bell', 'nouveau paiement');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (2, 'Grace kilumbu vient de payer 1$', 'admin/compte', 1, '2021-01-19 15:36:59', 'fa fa-bell', 'nouveau paiement');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (3, 'Grace kilumbu vient de payer 1$', 'admin/compte', 1, '2021-01-19 15:36:59', 'fa fa-bell', 'nouveau paiement');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (6, 'salut yuma kayanda  vous avez peut-être raté une information', 'user/teste_suggestion', 2, '2021-01-19 16:45:22', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (7, 'salut yuma kayanda  vous avez peut-être raté une information', 'user/teste_suggestion', 2, '2021-01-19 16:45:22', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (8, 'salut yuma kayanda  vous avez peut-être raté une information', 'user/teste_suggestion', 2, '2021-01-19 16:45:22', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (9, 'salut yuma kayanda  vous avez peut-être raté une information', 'user/teste_suggestion', 2, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (10, 'salut yuma kayanda  vous avez peut-être raté une information', 'user/teste_suggestion', 2, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (11, 'salut kakese pandamiti vous avez peut-être raté une information', 'user/teste_suggestion', 4, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (12, 'salut kakese pandamiti vous avez peut-être raté une information', 'user/teste_suggestion', 4, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (13, 'salut kakese pandamiti vous avez peut-être raté une information', 'user/teste_suggestion', 4, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (14, 'salut kakese pandamiti vous avez peut-être raté une information', 'user/teste_suggestion', 4, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (15, 'salut kakese pandamiti vous avez peut-être raté une information', 'user/teste_suggestion', 4, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (16, 'salut dembo apoline vous avez peut-être raté une information', 'user/teste_suggestion', 5, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (17, 'salut dembo apoline vous avez peut-être raté une information', 'user/teste_suggestion', 5, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (18, 'salut dembo apoline vous avez peut-être raté une information', 'user/teste_suggestion', 5, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (19, 'salut dembo apoline vous avez peut-être raté une information', 'user/teste_suggestion', 5, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (20, 'salut dembo apoline vous avez peut-être raté une information', 'user/teste_suggestion', 5, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (21, 'salut jonathan boroto vous avez peut-être raté une information', 'user/teste_suggestion', 6, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (22, 'salut jonathan boroto vous avez peut-être raté une information', 'user/teste_suggestion', 6, '2021-01-19 16:45:23', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (23, 'salut jonathan boroto vous avez peut-être raté une information', 'user/teste_suggestion', 6, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (24, 'salut jonathan boroto vous avez peut-être raté une information', 'user/teste_suggestion', 6, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (25, 'salut jonathan boroto vous avez peut-être raté une information', 'user/teste_suggestion', 6, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (26, 'salut simon lubango vous avez peut-être raté une information', 'user/teste_suggestion', 7, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (27, 'salut simon lubango vous avez peut-être raté une information', 'user/teste_suggestion', 7, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (28, 'salut simon lubango vous avez peut-être raté une information', 'user/teste_suggestion', 7, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (29, 'salut simon lubango vous avez peut-être raté une information', 'user/teste_suggestion', 7, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (30, 'salut simon lubango vous avez peut-être raté une information', 'user/teste_suggestion', 7, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (31, 'salut schadrack kambinzo vous avez peut-être raté une information', 'user/teste_suggestion', 8, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (32, 'salut schadrack kambinzo vous avez peut-être raté une information', 'user/teste_suggestion', 8, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (33, 'salut schadrack kambinzo vous avez peut-être raté une information', 'user/teste_suggestion', 8, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (34, 'salut schadrack kambinzo vous avez peut-être raté une information', 'user/teste_suggestion', 8, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (35, 'salut schadrack kambinzo vous avez peut-être raté une information', 'user/teste_suggestion', 8, '2021-01-19 16:45:24', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (36, 'salut kalume kitoko vous avez peut-être raté une information', 'user/teste_suggestion', 9, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (37, 'salut kalume kitoko vous avez peut-être raté une information', 'user/teste_suggestion', 9, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (38, 'salut kalume kitoko vous avez peut-être raté une information', 'user/teste_suggestion', 9, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (39, 'salut kalume kitoko vous avez peut-être raté une information', 'user/teste_suggestion', 9, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (40, 'salut kalume kitoko vous avez peut-être raté une information', 'user/teste_suggestion', 9, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (41, 'salut Grace kilumbu vous avez peut-être raté une information', 'user/teste_suggestion', 10, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (42, 'salut Grace kilumbu vous avez peut-être raté une information', 'user/teste_suggestion', 10, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (43, 'salut Grace kilumbu vous avez peut-être raté une information', 'user/teste_suggestion', 10, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (44, 'salut Grace kilumbu vous avez peut-être raté une information', 'user/teste_suggestion', 10, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (45, 'salut Grace kilumbu vous avez peut-être raté une information', 'user/teste_suggestion', 10, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (46, 'salut sifa abeli deborah vous avez peut-être raté une information', 'user/teste_suggestion', 11, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (47, 'salut sifa abeli deborah vous avez peut-être raté une information', 'user/teste_suggestion', 11, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (48, 'salut sifa abeli deborah vous avez peut-être raté une information', 'user/teste_suggestion', 11, '2021-01-19 16:45:25', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (49, 'salut sifa abeli deborah vous avez peut-être raté une information', 'user/teste_suggestion', 11, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (50, 'salut sifa abeli deborah vous avez peut-être raté une information', 'user/teste_suggestion', 11, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (51, 'salut kasumba kipundula vous avez peut-être raté une information', 'user/teste_suggestion', 12, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (52, 'salut kasumba kipundula vous avez peut-être raté une information', 'user/teste_suggestion', 12, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (53, 'salut kasumba kipundula vous avez peut-être raté une information', 'user/teste_suggestion', 12, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (54, 'salut kasumba kipundula vous avez peut-être raté une information', 'user/teste_suggestion', 12, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (55, 'salut kasumba kipundula vous avez peut-être raté une information', 'user/teste_suggestion', 12, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (56, 'salut emakuya vous avez peut-être raté une information', 'user/teste_suggestion', 13, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (57, 'salut emakuya vous avez peut-être raté une information', 'user/teste_suggestion', 13, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (58, 'salut emakuya vous avez peut-être raté une information', 'user/teste_suggestion', 13, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (59, 'salut emakuya vous avez peut-être raté une information', 'user/teste_suggestion', 13, '2021-01-19 16:45:26', 'fa fa-bell', 'nouvelle notificaton');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (60, 'salut emakuya vous avez peut-être raté une information', 'user/teste_suggestion', 13, '2021-01-19 16:45:27', 'fa fa-bell', 'nouvelle notificaton');


#
# TABLE STRUCTURE FOR: online
#

DROP TABLE IF EXISTS `online`;

CREATE TABLE `online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (1, 1, '2021-02-04 07:04:54');


#
# TABLE STRUCTURE FOR: paiement
#

DROP TABLE IF EXISTS `paiement`;

CREATE TABLE `paiement` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idp`),
  KEY `idpersonne` (`idpersonne`),
  CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (1, 6, '2020-12-17', '15', 'paiement montant première tranche', '2020-12-26 15:30:12');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (2, 8, '2020-12-18', '5', 'paiement frais de la première tranche', '2020-12-26 15:35:06');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (3, 8, '2020-12-28', '2', 'avance sur première tranche', '2020-12-28 10:41:37');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (4, 9, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:42:57');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (5, 7, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:43:35');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (6, 10, '2020-12-29', '2', 'avance première tranche', '2020-12-29 15:18:12');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (7, 6, '2020-12-30', '5', 'avance sur deuxième tranche', '2021-01-02 11:49:03');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (8, 8, '2021-01-04', '3', 'paiement première tranche', '2021-01-04 07:49:12');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (9, 9, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:12');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (10, 7, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:41');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (11, 13, '2021-01-05', '15', 'paiement première tranche', '2021-01-05 13:21:40');
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`) VALUES (12, 10, '2021-01-19', '1', 'paiement', '2021-01-19 15:36:59');


#
# TABLE STRUCTURE FOR: presence
#

DROP TABLE IF EXISTS `presence`;

CREATE TABLE `presence` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idp`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `presence_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (1, 5, '2020-12-30', '2020-12-30 17:14:39');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (2, 10, '2020-12-30', '2020-12-30 17:20:31');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (3, 6, '2020-12-30', '2020-12-30 17:20:34');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (4, 9, '2020-12-30', '2020-12-30 17:20:44');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (6, 7, '2020-12-30', '2020-12-30 17:20:52');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (7, 5, '2020-12-31', '2020-12-31 10:36:24');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (8, 10, '2020-12-31', '2020-12-31 10:36:28');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (9, 6, '2020-12-31', '2020-12-31 10:36:30');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (10, 9, '2020-12-31', '2020-12-31 10:36:33');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (11, 8, '2020-12-31', '2020-12-31 10:36:35');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (13, 7, '2020-12-31', '2020-12-31 13:47:46');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (14, 5, '2021-01-04', '2021-01-04 17:05:24');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (16, 10, '2021-01-05', '2021-01-05 14:02:22');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (17, 13, '2021-01-05', '2021-01-05 14:04:19');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (18, 6, '2021-01-05', '2021-01-05 14:04:58');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (19, 7, '2021-01-05', '2021-01-05 14:10:40');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (21, 9, '2021-01-05', '2021-01-05 14:10:53');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (22, 13, '2021-01-07', '2021-01-07 11:26:35');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (23, 6, '2021-01-07', '2021-01-07 11:27:04');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (24, 8, '2021-01-07', '2021-01-07 11:27:34');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (25, 7, '2021-01-07', '2021-01-07 11:28:54');
INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES (26, 2, '2021-01-19', '2021-01-19 13:42:16');


#
# TABLE STRUCTURE FOR: profile_derogation
#

DROP TABLE IF EXISTS `profile_derogation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_derogation` AS select `derogation`.`idd` AS `idd`,`derogation`.`id_user` AS `id_user`,`derogation`.`date_debit` AS `date_debit`,`derogation`.`date_fin` AS `date_fin`,`derogation`.`active` AS `active`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`sexe` AS `sexe`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image` from (`derogation` join `users` on((`derogation`.`id_user` = `users`.`id`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_derogation` (`idd`, `id_user`, `date_debit`, `date_fin`, `active`, `first_name`, `last_name`, `sexe`, `email`, `telephone`, `image`) VALUES (1, 8, '2021-01-05', '2021-01-15', 1, 'schadrack kambinzo', 'kambinzo', 'M', 'schadrack@gmail.com', '0994480142', 'icone-user.png');
INSERT INTO `profile_derogation` (`idd`, `id_user`, `date_debit`, `date_fin`, `active`, `first_name`, `last_name`, `sexe`, `email`, `telephone`, `image`) VALUES (3, 10, '2021-01-03', '2021-01-04', 0, 'Grace kilumbu', 'Marque', 'M', 'kilumbu@gmail.com', '0976159086', 'icone-user.png');


#
# TABLE STRUCTURE FOR: profile_inscription
#

DROP TABLE IF EXISTS `profile_inscription`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_inscription` AS select `inscription_formation`.`idinscription` AS `idinscription`,`inscription_formation`.`idedition` AS `idedition`,`inscription_formation`.`idformation` AS `idformation`,`inscription_formation`.`idcat` AS `idcat`,`inscription_formation`.`id_user` AS `id_user`,`inscription_formation`.`date_inscription` AS `date_inscription`,`inscription_formation`.`created_at` AS `created_at`,`edition`.`nom` AS `nom_edition`,`formation`.`nom` AS `nom_formation`,`categorie_aprenant`.`nom` AS `nom_categorie`,`users`.`id` AS `id`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`sexe` AS `sexe`,`users`.`qrcode` AS `qrcode` from ((((`inscription_formation` join `edition` on((`inscription_formation`.`idedition` = `edition`.`idedition`))) join `formation` on((`formation`.`idformation` = `inscription_formation`.`idformation`))) join `categorie_aprenant` on((`inscription_formation`.`idcat` = `categorie_aprenant`.`idcat`))) join `users` on((`users`.`id` = `inscription_formation`.`id_user`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (4, 1, 1, 1, 5, '2020-12-10', '2020-12-26 14:00:10', 'première édition', 'Programmation web', 'Apprenants sponsorisés ', 5, 'dembo apoline', 'pataule', 'dembo@gmail.com', '340596697.jpg', '+243810409151', 'F', '259539583.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (2, 1, 1, 2, 6, '2020-12-10', '2020-12-26 13:56:28', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 6, 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'M', '1236252959.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (3, 1, 1, 2, 8, '2020-12-10', '2020-12-26 13:59:30', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 8, 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', 'M', '1286343739.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (5, 1, 1, 2, 7, '2020-12-28', '2020-12-28 10:38:06', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 7, 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'M', '229575970.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (6, 1, 1, 2, 9, '2020-12-28', '2020-12-28 10:40:39', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 9, 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', 'M', '1928184354.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (7, 1, 1, 2, 10, '2020-12-29', '2020-12-29 15:15:17', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 10, 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'M', '616128621.png');
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (8, 1, 3, 2, 2, '2020-12-31', '2020-12-31 16:07:07', 'première édition', 'administration réseau', 'Apprenants non sponsorisés ', 2, 'yuma kayanda ', 'françois', 'yuma@gmail.com', '766568747.JPG', '+243990084881', 'M', NULL);
INSERT INTO `profile_inscription` (`idinscription`, `idedition`, `idformation`, `idcat`, `id_user`, `date_inscription`, `created_at`, `nom_edition`, `nom_formation`, `nom_categorie`, `id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `sexe`, `qrcode`) VALUES (9, 1, 1, 2, 13, '2020-12-10', '2021-01-05 13:20:40', 'première édition', 'Programmation web', 'Apprenants non sponsorisés ', 13, 'emakuya', 'daniel', 'emakuya@gmail.com', 'icone-user.png', '0990084881', 'M', '1857981147.png');


#
# TABLE STRUCTURE FOR: profile_online
#

DROP TABLE IF EXISTS `profile_online`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_online` AS select `online`.`id` AS `reference`,`online`.`id_user` AS `id_user`,`online`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image` from (`online` join `users` on((`online`.`id_user` = `users`.`id`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_online` (`reference`, `id_user`, `created_at`, `first_name`, `last_name`, `image`) VALUES (1, 1, '2021-02-04 07:04:54', 'patrona shabani sumaili', 'roger', '669260788.js_logo');


#
# TABLE STRUCTURE FOR: profile_paiement
#

DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement` AS select `paiement`.`idp` AS `idp`,`paiement`.`idpersonne` AS `idpersonne`,`paiement`.`date_paie` AS `date_paie`,`paiement`.`montant` AS `montant`,`paiement`.`motif` AS `motif`,`paiement`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`full_adresse` AS `full_adresse`,`users`.`date_nais` AS `date_nais`,`users`.`sexe` AS `sexe` from (`paiement` join `users` on((`users`.`id` = `paiement`.`idpersonne`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (1, 6, '2020-12-17', '15', 'paiement montant première tranche', '2020-12-26 15:30:12', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'Nord-kivu goma quartier katoyi', '2000-01-03', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (2, 8, '2020-12-18', '5', 'paiement frais de la première tranche', '2020-12-26 15:35:06', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (3, 8, '2020-12-28', '2', 'avance sur première tranche', '2020-12-28 10:41:37', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (4, 9, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:42:57', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', '', '1997-08-01', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (5, 7, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:43:35', 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'Nord-kivu goma aéroport', '1995-01-01', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (6, 10, '2020-12-29', '2', 'avance première tranche', '2020-12-29 15:18:12', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'Nord-kivu goma quartier tmk', '1999-12-30', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (7, 6, '2020-12-30', '5', 'avance sur deuxième tranche', '2021-01-02 11:49:03', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'Nord-kivu goma quartier katoyi', '2000-01-03', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (8, 8, '2021-01-04', '3', 'paiement première tranche', '2021-01-04 07:49:12', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (9, 9, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:12', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', '', '1997-08-01', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (10, 7, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:41', 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'Nord-kivu goma aéroport', '1995-01-01', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (11, 13, '2021-01-05', '15', 'paiement première tranche', '2021-01-05 13:21:40', 'emakuya', 'daniel', 'emakuya@gmail.com', 'icone-user.png', '0990084881', 'GOMA virunga', '2000-01-02', 'M');
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (12, 10, '2021-01-19', '1', 'paiement', '2021-01-19 15:36:59', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'Nord-kivu goma quartier tmk', '1999-12-30', 'M');


#
# TABLE STRUCTURE FOR: profile_paiement_recouvrement
#

DROP TABLE IF EXISTS `profile_paiement_recouvrement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement_recouvrement` AS select `paiement`.`idp` AS `idp`,`paiement`.`idpersonne` AS `idpersonne`,`paiement`.`date_paie` AS `date_paie`,`paiement`.`montant` AS `montant`,`paiement`.`motif` AS `motif`,`paiement`.`created_at` AS `created_at`,`inscription_formation`.`idformation` AS `idformation`,`inscription_formation`.`idedition` AS `idedition`,`inscription_formation`.`idcat` AS `idcat`,`formation`.`nom` AS `nom_formation`,`categorie_aprenant`.`nom` AS `nom_categorie`,`edition`.`nom` AS `nom_edition`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`full_adresse` AS `full_adresse`,`users`.`date_nais` AS `date_nais`,`users`.`sexe` AS `sexe` from (((((`paiement` join `users` on((`users`.`id` = `paiement`.`idpersonne`))) join `inscription_formation` on((`paiement`.`idpersonne` = `inscription_formation`.`id_user`))) join `formation` on((`formation`.`idformation` = `inscription_formation`.`idformation`))) join `edition` on((`edition`.`idedition` = `inscription_formation`.`idedition`))) join `categorie_aprenant` on((`categorie_aprenant`.`idcat` = `inscription_formation`.`idcat`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (1, 6, '2020-12-17', '15', 'paiement montant première tranche', '2020-12-26 15:30:12', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'Nord-kivu goma quartier katoyi', '2000-01-03', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (2, 8, '2020-12-18', '5', 'paiement frais de la première tranche', '2020-12-26 15:35:06', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (3, 8, '2020-12-28', '2', 'avance sur première tranche', '2020-12-28 10:41:37', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (4, 9, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:42:57', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', '', '1997-08-01', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (5, 7, '2020-12-28', '10', 'avance sur première tranche', '2020-12-28 10:43:35', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'Nord-kivu goma aéroport', '1995-01-01', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (6, 10, '2020-12-29', '2', 'avance première tranche', '2020-12-29 15:18:12', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'Nord-kivu goma quartier tmk', '1999-12-30', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (7, 6, '2020-12-30', '5', 'avance sur deuxième tranche', '2021-01-02 11:49:03', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'Nord-kivu goma quartier katoyi', '2000-01-03', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (8, 8, '2021-01-04', '3', 'paiement première tranche', '2021-01-04 07:49:12', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', '2000-01-02', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (9, 9, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:12', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', '', '1997-08-01', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (10, 7, '2021-01-04', '5', 'paiement de première tranche', '2021-01-04 15:45:41', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'Nord-kivu goma aéroport', '1995-01-01', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (11, 13, '2021-01-05', '15', 'paiement première tranche', '2021-01-05 13:21:40', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'emakuya', 'daniel', 'emakuya@gmail.com', 'icone-user.png', '0990084881', 'GOMA virunga', '2000-01-02', 'M');
INSERT INTO `profile_paiement_recouvrement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `created_at`, `idformation`, `idedition`, `idcat`, `nom_formation`, `nom_categorie`, `nom_edition`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `date_nais`, `sexe`) VALUES (12, 10, '2021-01-19', '1', 'paiement', '2021-01-19 15:36:59', 1, 1, 2, 'Programmation web', 'Apprenants non sponsorisés ', 'première édition', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'Nord-kivu goma quartier tmk', '1999-12-30', 'M');


#
# TABLE STRUCTURE FOR: profile_presence
#

DROP TABLE IF EXISTS `profile_presence`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_presence` AS select `presence`.`idp` AS `idp`,`presence`.`id_user` AS `id_user`,`presence`.`jour` AS `jour`,`presence`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image`,`users`.`sexe` AS `sexe` from (`presence` join `users` on((`presence`.`id_user` = `users`.`id`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (26, 2, '2021-01-19', '2021-01-19 13:42:16', 'yuma kayanda ', 'françois', 'yuma@gmail.com', '+243990084881', '766568747.JPG', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (1, 5, '2020-12-30', '2020-12-30 17:14:39', 'dembo apoline', 'pataule', 'dembo@gmail.com', '+243810409151', '340596697.jpg', 'F');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (7, 5, '2020-12-31', '2020-12-31 10:36:24', 'dembo apoline', 'pataule', 'dembo@gmail.com', '+243810409151', '340596697.jpg', 'F');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (14, 5, '2021-01-04', '2021-01-04 17:05:24', 'dembo apoline', 'pataule', 'dembo@gmail.com', '+243810409151', '340596697.jpg', 'F');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (3, 6, '2020-12-30', '2020-12-30 17:20:34', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', '0992786599', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (9, 6, '2020-12-31', '2020-12-31 10:36:30', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', '0992786599', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (18, 6, '2021-01-05', '2021-01-05 14:04:58', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', '0992786599', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (23, 6, '2021-01-07', '2021-01-07 11:27:04', 'jonathan boroto', 'boroto', 'jonathan@gmail.com', '0992786599', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (6, 7, '2020-12-30', '2020-12-30 17:20:52', 'simon lubango', 'katabi', 'simon@gmail.com', '0992206522', '2144670232.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (13, 7, '2020-12-31', '2020-12-31 13:47:46', 'simon lubango', 'katabi', 'simon@gmail.com', '0992206522', '2144670232.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (19, 7, '2021-01-05', '2021-01-05 14:10:40', 'simon lubango', 'katabi', 'simon@gmail.com', '0992206522', '2144670232.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (25, 7, '2021-01-07', '2021-01-07 11:28:54', 'simon lubango', 'katabi', 'simon@gmail.com', '0992206522', '2144670232.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (11, 8, '2020-12-31', '2020-12-31 10:36:35', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', '0994480142', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (24, 8, '2021-01-07', '2021-01-07 11:27:34', 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', '0994480142', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (4, 9, '2020-12-30', '2020-12-30 17:20:44', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '0977182484', '866759042.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (10, 9, '2020-12-31', '2020-12-31 10:36:33', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '0977182484', '866759042.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (21, 9, '2021-01-05', '2021-01-05 14:10:53', 'kalume kitoko', 'mikah', 'mikah@gmail.com', '0977182484', '866759042.jpg', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (2, 10, '2020-12-30', '2020-12-30 17:20:31', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', '0976159086', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (8, 10, '2020-12-31', '2020-12-31 10:36:28', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', '0976159086', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (16, 10, '2021-01-05', '2021-01-05 14:02:22', 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', '0976159086', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (17, 13, '2021-01-05', '2021-01-05 14:04:19', 'emakuya', 'daniel', 'emakuya@gmail.com', '0990084881', 'icone-user.png', 'M');
INSERT INTO `profile_presence` (`idp`, `id_user`, `jour`, `created_at`, `first_name`, `last_name`, `email`, `telephone`, `image`, `sexe`) VALUES (22, 13, '2021-01-07', '2021-01-07 11:26:35', 'emakuya', 'daniel', 'emakuya@gmail.com', '0990084881', 'icone-user.png', 'M');


#
# TABLE STRUCTURE FOR: profile_question
#

DROP TABLE IF EXISTS `profile_question`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_question` AS select `question`.`idq` AS `idq`,`question`.`nomq` AS `nomq`,`question`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from (((`question` join `rubrique` on((`question`.`idr` = `rubrique`.`idr`))) join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (1, 'Comment avez-vous trouvé l\'accueil?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (2, 'En HTML sur le plan  pédagogique, comment avez-vous évalué le formateur du point de vie enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (3, 'En CSS, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (4, 'En BOOTSTRAP, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (5, 'En BOOTSTRAP, comment avez-vous évaluer le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (6, 'EN JAVASCRIPT, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (7, 'En JAVASCRIPT, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (8, 'En  MYSQL, comment avez-vous trouvé les différentes leçons données par le formateur?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (9, 'En MYSQL, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (10, 'En PHP comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (11, 'En PHP, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (12, 'Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (14, 'EN réseau, Comment avez-vous trouvé l\'accueil?', 2, 'réseau1', '56web100', 0, 3, 1, 'administration réseau', 'première édition');
INSERT INTO `profile_question` (`idq`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (15, 'EN réseau, Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 2, 'réseau1', '56web100', 0, 3, 1, 'administration réseau', 'première édition');


#
# TABLE STRUCTURE FOR: profile_recouvrement
#

DROP TABLE IF EXISTS `profile_recouvrement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_recouvrement` AS select `recouvrement`.`idr` AS `idr`,`recouvrement`.`date_debit` AS `date_debit`,`recouvrement`.`date_fin` AS `date_fin`,`recouvrement`.`idt` AS `idt`,`tranche`.`nomt` AS `nomt`,`tranche`.`montant` AS `montant`,`tranche`.`active` AS `active`,`tranche`.`total_montant` AS `total_montant`,`tranche`.`idformation` AS `idformation`,`tranche`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from (((`recouvrement` join `tranche` on((`recouvrement`.`idt` = `tranche`.`idt`))) join `formation` on((`formation`.`idformation` = `tranche`.`idformation`))) join `edition` on((`edition`.`idedition` = `tranche`.`idedition`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_recouvrement` (`idr`, `date_debit`, `date_fin`, `idt`, `nomt`, `montant`, `active`, `total_montant`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (1, '2021-01-04', '2021-01-20', 1, 'Premier tranche', 15, 1, 15, 1, 1, 'Programmation web', 'première édition');


#
# TABLE STRUCTURE FOR: profile_reponse
#

DROP TABLE IF EXISTS `profile_reponse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_reponse` AS select `reponse`.`idrep` AS `idrep`,`reponse`.`idq` AS `idq`,`reponse`.`valeur` AS `valeur`,`reponse`.`created_at` AS `created_at`,`question`.`nomq` AS `nomq`,`question`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from ((((`reponse` join `question` on((`reponse`.`idq` = `question`.`idq`))) join `rubrique` on((`question`.`idr` = `rubrique`.`idr`))) join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (14, 1, 'mal', '2021-01-18 15:44:27', 'Comment avez-vous trouvé l\'accueil?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (26, 1, 'bien', '2021-01-19 13:35:30', 'Comment avez-vous trouvé l\'accueil?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (12, 2, 'très bien', '2021-01-13 17:26:52', 'En HTML sur le plan  pédagogique, comment avez-vous évalué le formateur du point de vie enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (20, 2, 'très bien', '2021-01-18 15:45:53', 'En HTML sur le plan  pédagogique, comment avez-vous évalué le formateur du point de vie enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (6, 3, 'très bien', '2021-01-10 13:21:11', 'En CSS, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (13, 3, 'très bien', '2021-01-13 17:27:01', 'En CSS, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (19, 3, 'très bien', '2021-01-18 15:45:25', 'En CSS, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (18, 4, 'mal', '2021-01-18 15:45:17', 'En BOOTSTRAP, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (17, 5, 'bien', '2021-01-18 15:44:57', 'En BOOTSTRAP, comment avez-vous évaluer le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (22, 6, 'très bien', '2021-01-18 15:46:06', 'EN JAVASCRIPT, comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (21, 7, 'très bien', '2021-01-18 15:46:00', 'En JAVASCRIPT, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (16, 8, 'très bien', '2021-01-18 15:44:49', 'En  MYSQL, comment avez-vous trouvé les différentes leçons données par le formateur?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (23, 9, 'très bien', '2021-01-18 15:46:11', 'En MYSQL, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (24, 10, 'bien', '2021-01-18 15:46:16', 'En PHP comment avez-vous trouvé la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (25, 11, 'très bien', '2021-01-18 15:46:22', 'En PHP, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (15, 12, 'très bien', '2021-01-18 15:44:41', 'Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (10, 14, 'très bien', '2021-01-10 15:49:01', 'EN réseau, Comment avez-vous trouvé l\'accueil?', 2, 'réseau1', '56web100', 0, 3, 1, 'administration réseau', 'première édition');
INSERT INTO `profile_reponse` (`idrep`, `idq`, `valeur`, `created_at`, `nomq`, `idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (11, 15, 'bien', '2021-01-10 15:49:13', 'EN réseau, Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 2, 'réseau1', '56web100', 0, 3, 1, 'administration réseau', 'première édition');


#
# TABLE STRUCTURE FOR: profile_rubrique
#

DROP TABLE IF EXISTS `profile_rubrique`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_rubrique` AS select `rubrique`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from ((`rubrique` join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_rubrique` (`idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (1, 'webformation1', '123web145', 1, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_rubrique` (`idr`, `nomr`, `token`, `active`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (2, 'réseau1', '56web100', 0, 3, 1, 'administration réseau', 'première édition');


#
# TABLE STRUCTURE FOR: profile_tranche
#

DROP TABLE IF EXISTS `profile_tranche`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_tranche` AS select `tranche`.`idt` AS `idt`,`tranche`.`nomt` AS `nomt`,`tranche`.`montant` AS `montant`,`tranche`.`active` AS `active`,`tranche`.`total_montant` AS `total_montant`,`tranche`.`idformation` AS `idformation`,`tranche`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from ((`tranche` join `formation` on((`formation`.`idformation` = `tranche`.`idformation`))) join `edition` on((`edition`.`idedition` = `tranche`.`idedition`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_tranche` (`idt`, `nomt`, `montant`, `active`, `total_montant`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (1, 'Premier tranche', 15, 1, 15, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_tranche` (`idt`, `nomt`, `montant`, `active`, `total_montant`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (2, 'Deuxième tranche', 15, 0, 30, 1, 1, 'Programmation web', 'première édition');
INSERT INTO `profile_tranche` (`idt`, `nomt`, `montant`, `active`, `total_montant`, `idformation`, `idedition`, `nom_formation`, `nom_edition`) VALUES (4, 'Première  tranche', 10, 0, 10, 3, 1, 'administration réseau', 'première édition');


#
# TABLE STRUCTURE FOR: question
#

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `idq` int(11) NOT NULL AUTO_INCREMENT,
  `nomq` text,
  `idr` int(11) DEFAULT NULL,
  PRIMARY KEY (`idq`),
  KEY `idr` (`idr`),
  CONSTRAINT `question_ibfk_1` FOREIGN KEY (`idr`) REFERENCES `rubrique` (`idr`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (1, 'Comment avez-vous trouvé l\'accueil?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (2, 'En HTML sur le plan  pédagogique, comment avez-vous évalué le formateur du point de vie enseignement de la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (3, 'En CSS, comment avez-vous trouvé la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (4, 'En BOOTSTRAP, comment avez-vous trouvé la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (5, 'En BOOTSTRAP, comment avez-vous évaluer le formateur du point de vue enseignement de la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (6, 'EN JAVASCRIPT, comment avez-vous trouvé la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (7, 'En JAVASCRIPT, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (8, 'En  MYSQL, comment avez-vous trouvé les différentes leçons données par le formateur?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (9, 'En MYSQL, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (10, 'En PHP comment avez-vous trouvé la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (11, 'En PHP, comment avez-vous évalué le formateur du point de vue enseignement de la matière?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (12, 'Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 1);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (14, 'EN réseau, Comment avez-vous trouvé l\'accueil?', 2);
INSERT INTO `question` (`idq`, `nomq`, `idr`) VALUES (15, 'EN réseau, Du point de vue évaluation des différents travaux faits,  comment avez-vous évalué le formateur par sa méthodologie du travail?', 2);


#
# TABLE STRUCTURE FOR: recouvrement
#

DROP TABLE IF EXISTS `recouvrement`;

CREATE TABLE `recouvrement` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `idt` int(11) DEFAULT NULL,
  `date_debit` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`idr`),
  KEY `idt` (`idt`),
  CONSTRAINT `recouvrement_ibfk_1` FOREIGN KEY (`idt`) REFERENCES `tranche` (`idt`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `recouvrement` (`idr`, `idt`, `date_debit`, `date_fin`) VALUES (1, 1, '2021-01-04', '2021-01-20');


#
# TABLE STRUCTURE FOR: recupere
#

DROP TABLE IF EXISTS `recupere`;

CREATE TABLE `recupere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (1, 'sumailiroger681@gmail.com', '88857a4c72041734397653be7f124680');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (2, 'sumailiroger681@gmail.com', 'ce341224ff761a02e42bb19c0c02fcf7');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (3, 'yuma@gmail.com', '4ff021580b7c84110680ff91b0e4660b');


#
# TABLE STRUCTURE FOR: reponse
#

DROP TABLE IF EXISTS `reponse`;

CREATE TABLE `reponse` (
  `idrep` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(300) DEFAULT NULL,
  `idq` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrep`),
  KEY `idq` (`idq`),
  CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idq`) REFERENCES `question` (`idq`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (6, 'très bien', 3, '2021-01-10 13:21:11');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (10, 'très bien', 14, '2021-01-10 15:49:01');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (11, 'bien', 15, '2021-01-10 15:49:13');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (12, 'très bien', 2, '2021-01-13 17:26:52');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (13, 'très bien', 3, '2021-01-13 17:27:01');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (14, 'mal', 1, '2021-01-18 15:44:27');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (15, 'très bien', 12, '2021-01-18 15:44:41');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (16, 'très bien', 8, '2021-01-18 15:44:49');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (17, 'bien', 5, '2021-01-18 15:44:57');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (18, 'mal', 4, '2021-01-18 15:45:17');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (19, 'très bien', 3, '2021-01-18 15:45:25');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (20, 'très bien', 2, '2021-01-18 15:45:53');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (21, 'très bien', 7, '2021-01-18 15:46:00');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (22, 'très bien', 6, '2021-01-18 15:46:06');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (23, 'très bien', 9, '2021-01-18 15:46:11');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (24, 'bien', 10, '2021-01-18 15:46:16');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (25, 'très bien', 11, '2021-01-18 15:46:22');
INSERT INTO `reponse` (`idrep`, `valeur`, `idq`, `created_at`) VALUES (26, 'bien', 1, '2021-01-19 13:35:30');


#
# TABLE STRUCTURE FOR: role
#

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (1, 'admin', '2020-12-24 15:51:36');
INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (2, 'user', '2020-12-24 15:51:36');


#
# TABLE STRUCTURE FOR: rubrique
#

DROP TABLE IF EXISTS `rubrique`;

CREATE TABLE `rubrique` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `nomr` varchar(300) DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `idformation` int(11) DEFAULT NULL,
  `idedition` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  PRIMARY KEY (`idr`),
  KEY `idformation` (`idformation`),
  KEY `idedition` (`idedition`),
  CONSTRAINT `rubrique_ibfk_1` FOREIGN KEY (`idformation`) REFERENCES `formation` (`idformation`) ON DELETE CASCADE,
  CONSTRAINT `rubrique_ibfk_2` FOREIGN KEY (`idedition`) REFERENCES `edition` (`idedition`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `rubrique` (`idr`, `nomr`, `token`, `idformation`, `idedition`, `active`) VALUES (1, 'webformation1', '123web145', 1, 1, 1);
INSERT INTO `rubrique` (`idr`, `nomr`, `token`, `idformation`, `idedition`, `active`) VALUES (2, 'réseau1', '56web100', 3, 1, 0);


#
# TABLE STRUCTURE FOR: tbl_info
#

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `idinfo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_site` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `adresse` text,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text,
  `confidentialite` text,
  PRIMARY KEY (`idinfo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`) VALUES (1, 'apkdevtech', '1552922677.png', '+243817883541', '+243970524665', 'RDC Nord-kivu goma quartier  7 bougies', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info.devtech@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.');


#
# TABLE STRUCTURE FOR: tranche
#

DROP TABLE IF EXISTS `tranche`;

CREATE TABLE `tranche` (
  `idt` int(11) NOT NULL AUTO_INCREMENT,
  `nomt` varchar(300) DEFAULT NULL,
  `idformation` int(11) DEFAULT NULL,
  `idedition` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  `total_montant` int(11) DEFAULT '0',
  PRIMARY KEY (`idt`),
  KEY `idformation` (`idformation`),
  KEY `idedition` (`idedition`),
  CONSTRAINT `tranche_ibfk_1` FOREIGN KEY (`idformation`) REFERENCES `formation` (`idformation`) ON DELETE CASCADE,
  CONSTRAINT `tranche_ibfk_2` FOREIGN KEY (`idedition`) REFERENCES `edition` (`idedition`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `tranche` (`idt`, `nomt`, `idformation`, `idedition`, `montant`, `active`, `total_montant`) VALUES (1, 'Premier tranche', 1, 1, 15, 1, 15);
INSERT INTO `tranche` (`idt`, `nomt`, `idformation`, `idedition`, `montant`, `active`, `total_montant`) VALUES (2, 'Deuxième tranche', 1, 1, 15, 0, 30);
INSERT INTO `tranche` (`idt`, `nomt`, `idformation`, `idedition`, `montant`, `active`, `total_montant`) VALUES (4, 'Première  tranche', 3, 1, 10, 0, 10);


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `full_adresse` text,
  `biographie` text,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) DEFAULT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `qrcode` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idrole` (`idrole`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (1, 'patrona shabani sumaili', 'roger', 'sumailiroger681@gmail.com', '669260788.js_logo', '0817883541', 'Nord-kivu goma', 'Développeur et entrepreneur en temps plein', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', '2079159452.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (2, 'yuma kayanda ', 'françois', 'yuma@gmail.com', '766568747.JPG', '+243990084881', 'Nord-viu goma quartier katoyi', NULL, '1995-12-30', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL);
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (4, 'kakese pandamiti', NULL, 'kakese@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (5, 'dembo apoline', 'pataule', 'dembo@gmail.com', '340596697.jpg', '+243810409151', 'Nord-kivu goma quartier Virunga Aeroport', NULL, '2000-07-03', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '259539583.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (6, 'jonathan boroto', 'boroto', 'jonathan@gmail.com', 'icone-user.png', '0992786599', 'Nord-kivu goma quartier katoyi', NULL, '2000-01-03', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', '1236252959.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (7, 'simon lubango', 'katabi', 'simon@gmail.com', '2144670232.jpg', '0992206522', 'Nord-kivu goma aéroport', NULL, '1995-01-01', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', '229575970.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (8, 'schadrack kambinzo', 'kambinzo', 'schadrack@gmail.com', 'icone-user.png', '0994480142', '', NULL, '2000-01-02', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', '1286343739.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (9, 'kalume kitoko', 'mikah', 'mikah@gmail.com', '866759042.jpg', '0977182484', '', NULL, '1997-08-01', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', '1928184354.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (10, 'Grace kilumbu', 'Marque', 'kilumbu@gmail.com', 'icone-user.png', '0976159086', 'Nord-kivu goma quartier tmk', NULL, '1999-12-30', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', '616128621.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (11, 'sifa abeli deborah', 'blessing debis', 'debis@gmail.com', '1124124937.jpg', '0990084881', 'Goma quartier Himbi', NULL, '2000-12-29', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '309062084.png');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '901134631.png', '+243990084881', 'Nord-kivu goma quartier birere', NULL, '1999-12-30', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL);
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `qrcode`) VALUES (13, 'emakuya', 'daniel', 'emakuya@gmail.com', 'icone-user.png', '0990084881', 'GOMA virunga', NULL, '2000-01-02', NULL, 2, 'M', '', '', '', '1857981147.png');


