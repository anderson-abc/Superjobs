-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 19 Avril 2015 à 01:36
-- Version du serveur :  5.5.41-0ubuntu0.14.10.1
-- Version de PHP :  5.5.12-2ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `superjobs`
--

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Programming'),
(2, 'Design'),
(5, 'Manager'),
(6, 'SEO'),
(7, 'Marketing'),
(8, 'Network'),
(9, 'Administrator'),
(10, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'amrihafedh', 'amrihafedh', 'amrihafedh@yahoo.com', 'amrihafedh@yahoo.com', 1, 'bwq623fx7egw4w0w4og0400o4gk8w04', 'Td9aJ+R3dLdWndPAr6aS7h7kKmwyLDZHL1ayVGKcnmZXTA6p9rsubedFFI5hyYxqv1Z661UYRlyBkDJ6S1ptBg==', '2015-04-06 13:23:47', 0, 0, NULL, '92fuPj7B8o9pnuzju52TGBcRJkUKXzND4DRa2qBy578', '2015-03-05 18:57:59', 'a:0:{}', 0, NULL),
(2, 'hafedh51', 'hafedh51', 'hafedh51@gmail.com', 'hafedh51@gmail.com', 1, 'l8k7znwhzk0448kckw4k8o4ws0s8ogs', 'SAALwNWqoQQnligt932282SXNsOU+1TmvhWYsqttTSptWFFSHX/bqKjWGgSaVb2YTKH5SYtenGDUcpxErarUbw==', '2015-03-05 02:00:20', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'anderson-abc', 'anderson-abc', 'amrihafedh@yahoo.fr', 'amrihafedh@yahoo.fr', 1, 'q5gfk68l19w8gcwoowgk00880g8soog', 'fDGv8sar47o9Gnhf0p9fCZZysd9djWpGMD7p9XoNNAMtj1dYSqXH76q7f/f4MqcU1lzwBnSnKO0iJVbE0bGtfA==', '2015-04-06 13:23:37', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Jobs`
--

CREATE TABLE IF NOT EXISTS `Jobs` (
`id` int(11) NOT NULL,
  `categories` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `is_created` tinyint(1) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Jobs`
--

INSERT INTO `Jobs` (`id`, `categories`, `type`, `company`, `logo`, `url`, `location`, `description`, `skills`, `token`, `is_public`, `is_created`, `expires_at`, `created_at`, `updated_at`, `title`) VALUES
(1, 1, 'zhrtzrth', 'zrth', 'zrth', 'http://rh', 'heh', 'zrht', 'herh', 'herh', 1, 1, '2015-05-07 00:29:00', '2015-03-08 00:29:00', '2015-05-07 00:29:00', 'Développeur PHP/Symfony2'),
(2, 2, 'zhrtzrth', 'zrth', 'zrth', 'http://irmasoft.com', 'Paris', 'DEveloppeur web', 'PHP, Java', '1245698', 1, 1, '2015-05-07 18:54:00', '2015-03-08 18:54:00', '2015-05-07 18:54:00', 'Developpeur confirmé PH5/SYMFONY2/BACK-END'),
(3, 2, 'CDD', 'Microsoft', 'microsoft', 'http://microsoft.com', 'PAris', 'long description here.\r\n..\r\n...\r\n....\r\n./L\r\n??K.\r\nKLMP\r\ntest\r\nlog\r\nvar\r\ndescription\r\nTITle', 'Java, J2EE', 'pzeighzorhgoerg', 1, 1, '2015-05-13 13:25:00', '2015-03-14 13:25:00', '2015-05-13 13:25:00', 'Ingénieur de développement'),
(4, 1, 'CDI', 'Yahoo', 'yahoo', 'http://yahoo.fr', 'Paris', 'PrestaShop édite le logiciel e-commerce Open-source le plus utilisé au monde, avec plus de 200 000 boutiques dans 165 pays.\r\n\r\nCréée en 2007, PrestaShop connaît une croissance forte et est désormais leader sur le secteur e-commerce en France et en Europe. \r\n\r\nNotre mission est d’offrir la meilleure solution e-commerce à tous les e-commerçants du monde. Notre équipe de passionnés, comptant 90 collaborateurs en France et une vingtaine à Miami, est dédiée au succès de nos utilisateurs au quotidien. \r\nDescription de l''offre :\r\n\r\nNous recherchons un Lead Developpeur / Architecte PHP, pour intégrer notre équipe de développement. \r\n\r\nLe projet au cœur de PrestaShop est le logiciel de boutiques en ligne Open Source, développé en PHP5 / MySQL et qui implémente son propre framework. Il utilise des outils et librairies comme Smarty, jQuery, TCPDF, Swiftmailer… Il est librement disponible sur GitHub : https://github.com/PrestaShop/PrestaShop\r\n\r\nRattaché(e) au Directeur R&D, vos principales missions seront les suivantes :\r\n\r\n    Étude et compréhension des besoins,\r\n    Réalisation d''architectures en partant du cahier des charges fonctionnel,\r\n    Rédaction des spécifications techniques,\r\n    Conception et analyse orientée objet,\r\n    Développement,\r\n    Supervision de la recette,\r\n    Management d''équipe,\r\n    Organisation du travail,\r\n    Reporting régulier vis-à-vis de la Direction.\r\n\r\nProfil :\r\n\r\n    Minimum 7 ans d’expérience en développement web, \r\n    Excellentes compétences en PHP5 et programmation orientée objet, \r\n    Connaissance des frameworks JS (jQuery, Angular, BackBoneJS),\r\n    Connaissance du système de templating Smarty,\r\n    Maîtrise du framework PHPUnit ou équivalent,\r\n    Maîtrise de l''outil Atlassian Bamboo, Jenkins ou équivalent,\r\n    Bonnes compétences en gestion de projet et pratique des méthodologies agiles (Scrum, Kanban),\r\n    Anglais courant, \r\n    Bon relationnel et bonne communication, \r\n    Rigoureux (se), organisé(e) dans la gestion du temps et soucieux (se) du détail \r\n    Passionné(e) par l’Open-Source, créatif (ve), autonome', 'PHP, Java', NULL, NULL, 0, '2015-05-21 08:25:03', '2015-03-22 08:25:03', '2015-05-21 08:25:03', 'Lead Développeur / Architecte PHP H/F'),
(5, 1, 'CDI', 'Irmasoft', 'irmasoft', 'http://irmasoft.com', 'Lyon', '<p>&Eacute;tudiant (e) en communication visuelle, profil print et web, vous recherchez un stage d''une dur&eacute;e de 2 &agrave; 6 mois.</p>\r\n<p>En poste au sein de l''&eacute;quipe technique, vous travaillerez en collaboration avec les designers pour r&eacute;aliser l&rsquo;identit&eacute; visuelle et les supports de communication de nombreux clients <br /><br />Print :</p>\r\n<ul>\r\n<li>Croquis et R&eacute;alisation de logotype</li>\r\n<li>Maquettage des diff&eacute;rents supports papier (flyer, carte de visite&hellip;)</li>\r\n</ul>\r\n<p>Web :</p>\r\n<ul>\r\n<li>Maquettage de la page d&rsquo;accueil</li>\r\n<li>Maquettage des pages internes</li>\r\n</ul>\r\n<h1>Comp&eacute;tences et exp&eacute;riences requises</h1>\r\n<ul>\r\n<li>\r\n<p>Illustrator</p>\r\n</li>\r\n<li>\r\n<p>Photoshop</p>\r\n</li>\r\n<li>\r\n<p>InDesign</p>\r\n</li>\r\n<li>\r\n<p>Bonnes connaissances en int&eacute;gration Web</p>\r\n</li>\r\n<li>\r\n<p>Motiv&eacute;(e), cr&eacute;atif(ve), tu souhaites t''impliquer dans un panel de projets divers et vari&eacute;s</p>\r\n</li>\r\n</ul>\r\n<h1>Les plus</h1>\r\n<ul>\r\n<li>\r\n<p>Capacit&eacute;s d&rsquo;illustration</p>\r\n</li>\r\n<li>\r\n<p>R&eacute;alisation de maquettes (web et print)</p>\r\n</li>\r\n</ul>\r\n<h1>Pourquoi postuler et venir ?</h1>\r\n<ul>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>Pour l''apprentissage</p>\r\n</li>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>&Eacute;volution possible sur un CDI</p>\r\n</li>\r\n</ul>\r\n<p>Pourquoi ne pas postuler, ni venir ?</p>\r\n<ul>\r\n<li>\r\n<p>Vous avez envie de travailler mais pas trop .....</p>\r\n</li>\r\n</ul>\r\n<p>R&eacute;mun&eacute;ration selon profil &nbsp;A vos claviers !&nbsp; </p>', 'C, C++, Python', NULL, NULL, 0, '2015-05-27 03:15:41', '2015-03-28 03:15:41', '2015-05-27 03:15:41', 'Lead Développeur / Architecte PHP H/F'),
(6, 1, 'CDD', 'Yahoo', 'yahoo', 'http://yahoo.fr', 'Paris', '<h2>Job description:</h2>\r\n<p>this isa test <strong>My job here </strong></p>', 'PHP, Java', NULL, NULL, 0, '2015-05-28 03:57:49', '2015-03-29 03:57:49', '2015-05-28 03:57:49', 'software engineer'),
(7, 1, 'CDI', 'Irmasoft', '/tmp/phpVB2luv', 'http://irmasoft.com', 'Paris', '<p>Étudiant (e) en communication visuelle, profil print et web, vous recherchez un stage d''une durée de 2 à 6 mois.</p>\r\n<p>En poste au sein de l''équipe technique, vous travaillerez en collaboration avec les designers pour réaliser l’identité visuelle et les supports de communication de nombreux clients <br /><br />Print :</p>\r\n<ul>\r\n<li>Croquis et Réalisation de logotype</li>\r\n<li>Maquettage des différents supports papier (flyer, carte de visite…)</li>\r\n</ul>\r\n<p>Web :</p>\r\n<ul>\r\n<li>Maquettage de la page d’accueil</li>\r\n<li>Maquettage des pages internes</li>\r\n</ul>\r\n<h1>Compétences et expériences requises</h1>\r\n<ul>\r\n<li>\r\n<p>Illustrator</p>\r\n</li>\r\n<li>\r\n<p>Photoshop</p>\r\n</li>\r\n<li>\r\n<p>InDesign</p>\r\n</li>\r\n<li>\r\n<p>Bonnes connaissances en intégration Web</p>\r\n</li>\r\n<li>\r\n<p>Motivé(e), créatif(ve), tu souhaites t''impliquer dans un panel de projets divers et variés</p>\r\n</li>\r\n</ul>\r\n<h1>Les plus</h1>\r\n<ul>\r\n<li>\r\n<p>Capacités d’illustration</p>\r\n</li>\r\n<li>\r\n<p>Réalisation de maquettes (web et print)</p>\r\n</li>\r\n</ul>\r\n<h1>Pourquoi postuler et venir ?</h1>\r\n<ul>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>Pour l''apprentissage</p>\r\n</li>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>Pour l''ambiance</p>\r\n</li>\r\n<li>\r\n<p>Évolution possible sur un CDI</p>\r\n</li>\r\n</ul>\r\n<p>Pourquoi ne pas postuler, ni venir ?</p>\r\n<ul>\r\n<li>\r\n<p>Vous avez envie de travailler mais pas trop .....</p>\r\n</li>\r\n</ul>\r\n<p>Rémunération selon profil  A vos claviers !  </p>', 'PHP, Java', NULL, NULL, 0, '2015-05-28 04:52:33', '2015-03-29 04:52:33', '2015-05-28 04:52:33', 'Graphiste / WebDesigner H/F'),
(8, 0, 'CDI', 'Irmasoft', '/tmp/phpvA4lqB', 'http://irmasoft.com', 'London', '<h1>Profil recherché</h1>\r\n<ul>\r\n<li>Quel que soit votre diplôme et votre âge, vous pouvez valoriser votre expérience par des résultats concrets que vous serez amené(e) à détailler en entretien, et qui vous dotent d''une solide connaissance du développement sous Mac.</li>\r\n<li>Vous avez déjà plusieurs années d’expérience et avez les capacités pour intervenir sur des applications complexes.</li>\r\n<li>Passionné(e), vous êtes en veille permanente et restez informé(e) des dernières évolutions pour les technologies sur lesquelles vous intervenez. Vous connaissez et vous intéressez à d’autres langages.</li>\r\n<li>Vous attachez de l’importance à la qualité de vos développements (architecture, design, UX, variable naming, commenting, factoring, testing...).</li>\r\n<li>Vous privilégiez le collectif à l’individuel.</li>\r\n<li>Vous êtes autonome et avez l''initiative sur vos projets, idées et critiques sont plus que bienvenues.</li>\r\n</ul>\r\n<h1>Missions</h1>\r\n<ul>\r\n<li>Vous rejoignez notre équipe de développement et intervenez sur l’ensemble de nos applications mêlant musique et jeu, notamment KaraFun Player, logiciel de karaoké téléchargé plus de 10 000 000 de fois. Votre première tâche sera le portage de cette application en natif pour Mac OS.</li>\r\n<li>Vous aurez l''occasion de travailler sur un projet sur le long-terme mêlant nombre de problématiques et de technologies.</li>\r\n</ul>\r\n<h1>Technologies</h1>\r\n<ul>\r\n<li>Objective C</li>\r\n<li>Swift</li>\r\n<li>Cocoa</li>\r\n<li>C, C++</li>\r\n<li>OpenGL</li>\r\n<li>Signal processing</li>\r\n</ul>\r\n<h1>Environnement</h1>\r\n<p>Recisio, c’est une ambiance start-up, une vingtaine de passionnés (tous un peu geek !) qui bossent ensemble dans une ambiance détendue et un cadre flexible. Chez nous, c’est hiérarchie plate et développement collaboratif agile (Jira, GIT...).</p>\r\n<p>Nous sommes situés en plein centre de Lille, à 5 minutes des gares, à deux pas des restos et des bars branchés, 1h de Londres et 7h de New York !</p>\r\n<p>Brut + PEE + Intéressement + Prime vacances + Tickets Resto.</p>\r\n<h1>Les plus :</h1>\r\n<ul>\r\n<li>des boissons gratuites, </li>\r\n<li>une bonne complémentaire santé, l</li>\r\n<li>a fibre dédiée, </li>\r\n<li>des sorties et des animations </li>\r\n<li>un environnement de développement au choix (Windows, Mac ou Linux, Laptop ou Desktop chacun son truc !).</li>\r\n</ul>', 'PHP, Java', NULL, NULL, 0, '2015-06-04 00:29:50', '2015-04-05 00:29:50', '2015-06-04 00:29:50', 'Lead Développeur / Architecte PHP H/F'),
(9, 0, 'CDI', 'Recisio', '/tmp/phpoOy5qq', 'http://irmasoft.com', 'Lille', '<h1>Profil recherché</h1>\r\n<ul>\r\n<li>Quel que soit votre diplôme et votre âge, vous pouvez valoriser votre expérience par des résultats concrets que vous serez amené(e) à détailler en entretien, et qui vous dotent d''une solide connaissance du développement sous Mac.</li>\r\n<li>Vous avez déjà plusieurs années d’expérience et avez les capacités pour intervenir sur des applications complexes.</li>\r\n<li>Passionné(e), vous êtes en veille permanente et restez informé(e) des dernières évolutions pour les technologies sur lesquelles vous intervenez. Vous connaissez et vous intéressez à d’autres langages.</li>\r\n<li>Vous attachez de l’importance à la qualité de vos développements (architecture, design, UX, variable naming, commenting, factoring, testing...).</li>\r\n<li>Vous privilégiez le collectif à l’individuel.</li>\r\n<li>Vous êtes autonome et avez l''initiative sur vos projets, idées et critiques sont plus que bienvenues.</li>\r\n</ul>\r\n<h1>Missions</h1>\r\n<ul>\r\n<li>Vous rejoignez notre équipe de développement et intervenez sur l’ensemble de nos applications mêlant musique et jeu, notamment KaraFun Player, logiciel de karaoké téléchargé plus de 10 000 000 de fois. Votre première tâche sera le portage de cette application en natif pour Mac OS.</li>\r\n<li>Vous aurez l''occasion de travailler sur un projet sur le long-terme mêlant nombre de problématiques et de technologies.</li>\r\n</ul>\r\n<h1>Technologies</h1>\r\n<ul>\r\n<li>Objective C</li>\r\n<li>Swift</li>\r\n<li>Cocoa</li>\r\n<li>C, C++</li>\r\n<li>OpenGL</li>\r\n<li>Signal processing</li>\r\n</ul>\r\n<h1>Environnement</h1>\r\n<p>Recisio, c’est une ambiance start-up, une vingtaine de passionnés (tous un peu geek !) qui bossent ensemble dans une ambiance détendue et un cadre flexible. Chez nous, c’est hiérarchie plate et développement collaboratif agile (Jira, GIT...).</p>\r\n<p>Nous sommes situés en plein centre de Lille, à 5 minutes des gares, à deux pas des restos et des bars branchés, 1h de Londres et 7h de New York !</p>\r\n<p>Brut + PEE + Intéressement + Prime vacances + Tickets Resto.</p>\r\n<h1>Les plus :</h1>\r\n<ul>\r\n<li>des boissons gratuites, </li>\r\n<li>une bonne complémentaire santé, l</li>\r\n<li>a fibre dédiée, </li>\r\n<li>des sorties et des animations </li>\r\n<li>un environnement de développement au choix (Windows, Mac ou Linux, Laptop ou Desktop chacun son truc !).</li>\r\n</ul>', 'C, C++, Python', NULL, NULL, 0, '2015-06-04 02:54:35', '2015-04-05 02:54:35', '2015-06-04 02:54:35', 'Ingénieur développement Mac OS X H/F'),
(10, 0, 'CDI', 'Superjobs', '/tmp/phpk8KzZa', 'http://irmasoft.com', 'Bordeau', '<h1>Développeur Android | Amateur de sport</h1>\r\n<p>Vous êtes à la recherche d’une société dans laquelle il fait bon vivre tout en travaillant sur des projets grands publics à très fort trafic dans le domaine du sport ? Ce poste correspondra à votre recherche !</p>\r\n<p>Cette société d’une cinquantaine de personnes a aujourd’hui un positionnement unique et est reconnue dans le milieu du sport pour la qualité de son travail (expertise technique, expérience utilisateur, R&amp;D…).  </p>\r\n<p>Leur ambition est aujourd’hui de s’implanter à l’international  et pour ce faire, leur volonté est de renforcer l’équipe technique en recrutant de nouveaux développeurs, dont un développeur Android confirmé.</p>\r\n<h1>Votre rôle</h1>\r\n<p>Au sein d’une équipe de 5 développeurs mobiles (Android/iOS), et en collaboration avec le lead développeur, vos principales tâches seront :</p>\r\n<ul>\r\n<li>Conception et développement de nouvelles fonctionnalités</li>\r\n<li>Conception d’applications from scratch</li>\r\n<li>Amélioration de l’expérience utilisateur (guidelines Material Design)</li>\r\n<li>R&amp;D / Veille technologique</li>\r\n</ul>\r\n<h1>Votre profil</h1>\r\n<ul>\r\n<li>Bac+5 souhaité.</li>\r\n<li>Vous avez au moins 2 ans d’expérience significative en développement Android</li>\r\n<li>Maîtrise du SDK Android / Excellent bagage Java</li>\r\n<li>Esprit start-up (bien qu’ayant grandi, la société garde une culture start-up)</li>\r\n<li>Anglais courant (nombreux échanges orales et écrits en anglais)</li>\r\n<li>Vous êtes capable de prouver votre passion (applis/projets personnels, compte Github, participation à la communauté Android, etc.)</li>\r\n</ul>\r\n<h1>Votre personnalité</h1>\r\n<ul>\r\n<li>Rigoureux et autonome</li>\r\n<li>Force de proposition et impliqué</li>\r\n</ul>\r\n<h1>Le salaire</h1>\r\n<ul>\r\n<li>de 45 à 55 K€</li>\r\n<li>Avantages divers (tickets restaurants…)</li>\r\n</ul>\r\n<p>Si vous avez lu jusque-là c''est que ce poste de développeur Android en CDI est réellement fait pour vous !!</p>\r\n<p>Pour postuler, envoyez votre candidature à l’adresse suivante : g.adrian[a]inteam.fr</p>\r\n<p><strong>Guillaume Adrian<br /></strong>Consultant en recrutement<br /> Responsable du pôle Android<strong><br /><br /></strong><a href="mailto:g.adrian@inteam.fr" rel="nofollow external">g.adrian[a]inteam.fr</a><br /> 18 rue des Jeûneurs<strong><br /></strong>75002 Paris<br /> 01.75.43.53.70</p>\r\n<p><a href="http://www.inteam.fr/" rel="nofollow external">www.inteam.fr</a></p>', 'PHP5, jQuery', NULL, NULL, 0, '2015-06-15 17:56:40', '2015-04-16 17:56:40', '2015-06-15 17:56:40', 'Lead Développeur / Architecte PHP H/F');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Index pour la table `Jobs`
--
ALTER TABLE `Jobs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Jobs`
--
ALTER TABLE `Jobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
