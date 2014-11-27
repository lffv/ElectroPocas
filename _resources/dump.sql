-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Nov-2014 às 20:52
-- Versão do servidor: 5.1.44
-- versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pocas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(145) NOT NULL,
  `lead` text NOT NULL,
  `text` text NOT NULL,
  `additionaltext` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `lead`, `text`, `additionaltext`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`, `name`) VALUES
(64, 62, NULL, NULL, 'login', 19, 20, ''),
(65, 62, NULL, NULL, 'logout', 21, 22, ''),
(66, 62, NULL, NULL, 'view', 23, 24, ''),
(67, 62, NULL, NULL, 'add', 25, 26, ''),
(68, 62, NULL, NULL, 'edit', 27, 28, ''),
(69, 62, NULL, NULL, 'delete', 29, 30, ''),
(70, 54, NULL, NULL, 'AclManager', 32, 49, 'Permission Management'),
(71, 70, NULL, NULL, 'Acl', 33, 48, ''),
(72, 71, NULL, NULL, 'drop', 34, 35, ''),
(73, 71, NULL, NULL, 'drop_perms', 36, 37, ''),
(74, 71, NULL, NULL, 'index', 38, 39, ''),
(75, 71, NULL, NULL, 'permissions', 40, 41, ''),
(76, 71, NULL, NULL, 'gpermissions', 42, 43, ''),
(77, 71, NULL, NULL, 'update_acos', 44, 45, ''),
(78, 71, NULL, NULL, 'update_aros', 46, 47, ''),
(63, 62, NULL, NULL, 'index', 17, 18, ''),
(62, 54, NULL, NULL, 'Users', 16, 31, 'User Management'),
(61, 60, NULL, NULL, 'display', 13, 14, ''),
(60, 54, NULL, NULL, 'Pages', 12, 15, 'Dashboard'),
(59, 55, NULL, NULL, 'delete', 9, 10, ''),
(58, 55, NULL, NULL, 'edit', 7, 8, ''),
(57, 55, NULL, NULL, 'add', 5, 6, ''),
(56, 55, NULL, NULL, 'index', 3, 4, ''),
(55, 54, NULL, NULL, 'Groups', 2, 11, 'Group Management'),
(54, NULL, NULL, NULL, 'controllers', 1, 56, 'Full Backend'),
(81, 54, NULL, NULL, 'Metatags', 50, 53, ''),
(82, 81, NULL, NULL, 'edit', 51, 52, ''),
(83, 54, NULL, NULL, 'SimplePages', 54, 55, 'Simple Pages');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(19, 17, 'User', 43, NULL, 2, 3),
(18, NULL, 'Group', 16, NULL, 7, 8),
(17, NULL, 'Group', 15, NULL, 1, 6),
(38, 17, 'User', 63, NULL, 4, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(113, 18, 78, '0', '0', '0', '0'),
(112, 17, 78, '0', '0', '0', '0'),
(111, 18, 77, '0', '0', '0', '0'),
(110, 17, 77, '0', '0', '0', '0'),
(109, 18, 76, '0', '0', '0', '0'),
(108, 17, 76, '0', '0', '0', '0'),
(107, 18, 75, '0', '0', '0', '0'),
(106, 17, 75, '0', '0', '0', '0'),
(105, 18, 74, '0', '0', '0', '0'),
(104, 17, 74, '0', '0', '0', '0'),
(103, 18, 73, '0', '0', '0', '0'),
(102, 17, 73, '0', '0', '0', '0'),
(101, 18, 72, '0', '0', '0', '0'),
(100, 17, 72, '0', '0', '0', '0'),
(99, 18, 71, '0', '0', '0', '0'),
(98, 17, 71, '0', '0', '0', '0'),
(97, 18, 70, '-1', '-1', '-1', '-1'),
(96, 17, 70, '0', '0', '0', '0'),
(95, 18, 69, '0', '0', '0', '0'),
(94, 17, 69, '0', '0', '0', '0'),
(93, 18, 68, '0', '0', '0', '0'),
(92, 17, 68, '0', '0', '0', '0'),
(91, 18, 67, '0', '0', '0', '0'),
(90, 17, 67, '0', '0', '0', '0'),
(89, 18, 66, '0', '0', '0', '0'),
(88, 17, 66, '0', '0', '0', '0'),
(87, 18, 65, '0', '0', '0', '0'),
(86, 17, 65, '0', '0', '0', '0'),
(85, 18, 64, '0', '0', '0', '0'),
(84, 17, 64, '0', '0', '0', '0'),
(83, 18, 63, '0', '0', '0', '0'),
(82, 17, 63, '0', '0', '0', '0'),
(81, 18, 62, '-1', '-1', '-1', '-1'),
(80, 17, 62, '0', '0', '0', '0'),
(79, 18, 61, '0', '0', '0', '0'),
(78, 17, 61, '0', '0', '0', '0'),
(77, 18, 60, '1', '1', '1', '1'),
(76, 17, 60, '0', '0', '0', '0'),
(75, 18, 59, '0', '0', '0', '0'),
(74, 17, 59, '0', '0', '0', '0'),
(73, 18, 58, '0', '0', '0', '0'),
(72, 17, 58, '0', '0', '0', '0'),
(71, 18, 57, '0', '0', '0', '0'),
(70, 17, 57, '0', '0', '0', '0'),
(69, 18, 56, '0', '0', '0', '0'),
(68, 17, 56, '0', '0', '0', '0'),
(67, 18, 55, '-1', '-1', '-1', '-1'),
(66, 17, 55, '0', '0', '0', '0'),
(65, 18, 54, '-1', '-1', '-1', '-1'),
(64, 17, 54, '1', '1', '1', '1'),
(114, 18, 81, '1', '1', '1', '1'),
(115, 17, 83, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lead` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `active_lead` tinyint(1) NOT NULL,
  `link` varchar(255) NOT NULL,
  `banner_mobile` varchar(255) NOT NULL,
  `ordem` int(11) NOT NULL,
  `banner_alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `banners`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_dicas`
--

CREATE TABLE IF NOT EXISTS `categorias_dicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `categorias_dicas`
--

INSERT INTO `categorias_dicas` (`id`, `designacao`, `activo`) VALUES
(10, 'asd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configbackends`
--

CREATE TABLE IF NOT EXISTS `configbackends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_host` varchar(45) NOT NULL DEFAULT '',
  `mail_port` int(11) NOT NULL,
  `mail_username` varchar(45) NOT NULL DEFAULT '',
  `mail_password` varchar(45) NOT NULL DEFAULT '',
  `mail_address` varchar(255) DEFAULT NULL,
  `piwik_idwebsite` int(11) DEFAULT NULL,
  `piwik_token` varchar(100) DEFAULT NULL,
  `piwik_link` varchar(100) DEFAULT NULL,
  `piwik_username` varchar(100) DEFAULT NULL,
  `piwik_passwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `configbackends`
--

INSERT INTO `configbackends` (`id`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_address`, `piwik_idwebsite`, `piwik_token`, `piwik_link`, `piwik_username`, `piwik_passwd`) VALUES
(1, 'mail host', 0, 'mail username', 'mail_password', 'mail_address', 0, 'piwik_token', 'piwik_link', 'piwik_username', 'piwik_passwd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(11) NOT NULL,
  `piwik_path` varchar(100) DEFAULT NULL,
  `piwik_site_id` int(11) DEFAULT NULL,
  `site_offline` tinyint(4) DEFAULT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_email` varchar(145) NOT NULL,
  `google_analytics_code` varchar(145) NOT NULL,
  `price_short_movie` float NOT NULL,
  `price_full_movie` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configurations`
--

INSERT INTO `configurations` (`id`, `piwik_path`, `piwik_site_id`, `site_offline`, `site_title`, `site_email`, `google_analytics_code`, `price_short_movie`, `price_full_movie`) VALUES
(1, NULL, NULL, NULL, NULL, 'luisfilipev@gmail.com', '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email_title` varchar(100) NOT NULL,
  `email2_title` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `contacts`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `dicas`
--

CREATE TABLE IF NOT EXISTS `dicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `categorias_dica_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `dicas`
--

INSERT INTO `dicas` (`id`, `titulo`, `texto`, `categorias_dica_id`, `activo`) VALUES
(28, 'das', 'sad', 10, 1),
(26, 'sda', 'asd', 9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(20) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=484 ;

--
-- Extraindo dados da tabela `galleries`
--

INSERT INTO `galleries` (`id`, `model`, `foreign_key`, `name`, `attachment`, `dir`, `type`, `size`, `active`) VALUES
(482, 'Noticia', 61, '5473c2ab-7398-41d9-99ee-0c243fecd4a7.jpg', '', NULL, 'image/jpeg', 59288, 1),
(483, 'Noticia', 61, '5473c2ab-5d94-4255-b9e7-0c243fecd4a7.jpg', '', NULL, 'image/jpeg', 32146, 1),
(479, 'Noticia', 61, '5473c1f6-c2c4-4dd8-a90c-0c4b3fecd4a7.jpeg', '', NULL, 'image/jpeg', 9090, 1),
(480, 'Noticia', 61, '5473c2ab-9344-41a9-b2c2-0c243fecd4a7.jpg', '', NULL, 'image/jpeg', 43200, 1),
(481, 'Noticia', 61, '5473c2ab-8de8-4046-97d4-0c243fecd4a7.jpeg', '', NULL, 'image/jpeg', 9090, 1),
(475, 'Noticia', 61, '5473c1cf-2bb8-4f37-b426-072a3fecd4a7.jpeg', '', NULL, 'image/jpeg', 9090, 1),
(474, 'Produto', 39, '5473bd93-5f10-4a1a-9242-07283fecd4a7.jpg', '', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(15, 'Administrators', '2012-08-29 17:32:50', '2012-08-29 17:32:50'),
(16, 'Managers', '2012-08-29 17:32:56', '2012-08-31 13:55:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'pt', 'About', 1, 'title', 'Sobre NÃ³s'),
(2, 'pt', 'About', 1, 'lead', 'FlumenFest procura estabelecer um diÃ¡logo entre o cinema, a espiritualidade e os valores humanos a partir de uma estÃ©tica original. Esta 1Âª ediÃ§Ã£o do festival tem como tema: Ao Encontro do Outro.'),
(3, 'pt', 'About', 1, 'text', '<div>O cinema â€œdÃ¡ que pensarâ€ (donne Ã  penser). Ã‰ com esta parÃ¡frase que o FlumenFest pretende dar corpo Ã  riqueza simbÃ³lica do cinema como lugar de habitaÃ§Ã£o humana. O cinema na sua potÃªncia simbÃ³lica Ã© um apelo ao acto criativo que transcreve e reinscreve a matÃ©ria e a forma das coisas. Ã‰ um pensar por imagens. Ã‰ um olhar a vastidÃ£o do mundo para sentir diversamente a beleza creatural. Ã‰ um acto vivente que suscita e mobiliza a nossa atenÃ§Ã£o para um outro modo possÃ­vel de nos relacionarmos. O cinema Ã© na sua essÃªncia acto simbÃ³lico que, indo alÃ©m da expressÃ£o indicativa, presentifica uma visÃ£o imaginada das coisas. Sabedoria do olhar e do ver. Ã‰ na sua essÃªncia um possÃ­vel acto de transfiguraÃ§Ã£o do quotidiano ambivalente!</div>  <div><br></div>'),
(4, 'en', 'About', 1, 'title', 'About'),
(5, 'en', 'About', 1, 'lead', 'FlumenFest aims to promote a fruitful dialogue between film and human values from an original, esthetic perspective. For the 1st edition, the festival theme is: Reaching for the Other.'),
(6, 'en', 'About', 1, 'text', '<div>The symbol (cinema) gives rise to thought"(donne Ã  penser). This is the motto FlumenFest intends to pursue via the embodiement of the symbolic copiousness inherent to art film as a place inhabited by humans. The symbolic potential inscribed in filmmaking requires a criative act able to transcribe and inscribe the matter and form of all things. To think by a series of images. To contemplate the vasteness of the world and feel in full diverseness the beauty created. Film art is a living act that moves and directs our attention to other possible ways and terms of relation. In essence, film art is a symbolic act that goes beyond its designation, anchoring in the present a vision of all things powered by imagination. To be able to look and see. Film art is a possible act of transfiguration of everyday life''s ambivalence.</div>  <div><br></div>'),
(7, 'pt', 'About', 1, 'additionaltext', 'fsdf'),
(8, 'en', 'About', 1, 'additionaltext', 'esdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `interaction_types`
--

CREATE TABLE IF NOT EXISTS `interaction_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `interaction_types`
--

INSERT INTO `interaction_types` (`id`, `name`) VALUES
(1, 'Touch'),
(2, 'Multitouch'),
(3, 'Gesture'),
(4, 'Digital Signage');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metatags`
--

CREATE TABLE IF NOT EXISTS `metatags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(145) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `model` varchar(45) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `tracking_code` text NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Extraindo dados da tabela `metatags`
--

INSERT INTO `metatags` (`id`, `title`, `description`, `keywords`, `model`, `foreign_key`, `tracking_code`, `contact_email`) VALUES
(81, '121', '121', '121', 'Servico', 31, '', ''),
(82, '22', '22', '22', 'Produto', 39, '', ''),
(86, 'jk', 'lj', 'nk', 'Pagina', 1, '', ''),
(87, '111', '11', '11', 'Pagina', 2, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `tipo_noticia_id` int(11) NOT NULL DEFAULT '0',
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `activo`, `tipo_noticia_id`, `data`) VALUES
(61, 'Fusce ac felis sit amet', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Curabitur at lacus ac velit ornare lobortis. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur blandit mollis lacus. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula.', 1, 0, '11/03/2014');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `designacao`) VALUES
(1, 'home'),
(2, 'about'),
(3, 'listaServicos'),
(4, 'dicas'),
(5, 'listaNoticias'),
(6, 'contacto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE IF NOT EXISTS `parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(254) NOT NULL,
  `link` varchar(254) NOT NULL,
  `designacao` varchar(254) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `parceiros`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(500) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `designacao`, `imagem`, `servico_id`, `activo`) VALUES
(39, '22', '5473bee8-3470-441e-8aee-072a3fecd4a7.jpeg', 31, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(500) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `designacao`, `imagem`, `activo`) VALUES
(31, '112', '5473bf12-c374-4752-a562-09b13fecd4a7.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `simplepages`
--

CREATE TABLE IF NOT EXISTS `simplepages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `lead` text,
  `active` tinyint(1) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `video_thumb` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `banner_alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `simplepages`
--

INSERT INTO `simplepages` (`id`, `title`, `sub_title`, `lead`, `active`, `video_url`, `video_thumb`, `image_dir`, `banner_alt`) VALUES
(1, 'O Melhor da Medicina EstÃ©tica', 'Qual o Tratamento que Procura?', '<span style="word-spacing:normal"><p>As ClÃ­nicas\r\nBodyScience destacam-se pelo pioneirismo na implantaÃ§Ã£o dos mais modernos\r\ntratamentos corporais e faciais. Com tÃ©cnicas exclusivas, profissionais\r\nqualificados e o melhor da medicina estÃ©tica as nossas clÃ­nicas sÃ£o o espaÃ§o\r\nideal para cuidar de si.</p></span>', 1, 'http://www.youtube.com/embed/pwlcMrk991k?list=UUksQ1rxBmZ4B8-oqWllwFyg', 'Thumb-Video-03.jpg', '1', 'text alt'),
(2, 'Cuide do Seu Corpo', 'O que Pretende Tratar?', '<p>O\r\nelevado padrÃ£o de qualidade e o atendimento personalizado sÃ£o caracterÃ­sticas\r\nintrÃ­nsecas das ClÃ­nicas BodyScience, atravÃ©s de tecnologias inovadoras e um\r\ncorpo clÃ­nico de excepÃ§Ã£o vai encontrar nas nossas clinicas a soluÃ§Ã£o ideal\r\npara os seus problemas corporais.  </p>', 1, 'http://www.youtube.com/watch?v=fwyjuqaxJn4', 'Thumb-Video-03.jpg', '2', 'text alt corpo'),
(3, 'Cuide do Seu Rosto', 'O que Pretende Tratar?', 'Os&nbsp;tratamentos das ClÃ­nicas Bodyscience sÃ£o\r\nrealizados por uma equipa experiente e especializada e com recurso a alta\r\ntecnologia actuando com eficÃ¡cia e de forma segura no seu rosto, obtendo excelentes\r\nresultados no combate aos problemas faciais.', 1, 'http://www.youtube.com/watch?v=62ccwyiWlKw', 'Thumb-Video-02.jpg', '3', 'text alt rosto'),
(4, 'Testemunhos', 'klkl', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut<br>fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis.<br>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.', 1, 'klkl', 'kl', 'klkl', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `lead` text NOT NULL,
  `btn1` varchar(255) NOT NULL,
  `btn2` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `texto1` text NOT NULL,
  `texto2` varchar(255) NOT NULL,
  `texto3` varchar(255) NOT NULL,
  `texto4` varchar(255) NOT NULL,
  `texto5` varchar(255) NOT NULL,
  `texto6` varchar(255) NOT NULL,
  `tipo_layout` int(11) NOT NULL,
  `bg_imagem` varchar(255) NOT NULL,
  `transicao` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `btn1_link` varchar(255) NOT NULL,
  `btn2_link` varchar(255) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `slides`
--

INSERT INTO `slides` (`id`, `titulo`, `lead`, `btn1`, `btn2`, `imagem`, `texto1`, `texto2`, `texto3`, `texto4`, `texto5`, `texto6`, `tipo_layout`, `bg_imagem`, `transicao`, `activo`, `btn1_link`, `btn2_link`, `ordem`) VALUES
(1, '1', '1', '1', '1', '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', '4', '1', '1', '1', '1', '1', 1, '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', 'cube', 1, 'http://wwww.domain.tld', 'http://wwww.domain.tld', 1),
(2, '2', '2', '2', '2', '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', '2', '2', '2', '2', '2', '2', 2, '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', 'cube', 1, 'http://wwww.domain.tld', 'http://wwww.domain.tld', 2),
(3, '3', '3', '3', '3', '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', '3', '3', '3', '3', '3', '3', 3, '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', 'incube-horizontal', 1, 'http://wwww.domain.tld', 'http://wwww.domain.tld', 3),
(4, '4', '4', '4', '4', '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', '4', '4', '4', '4', '4', '4', 4, '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', 'boxslide', 1, '4', '4', 4),
(5, '5', '5', '5', '5', '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', '5', '5', '5', '5', '5', '5', 1, '545e3ddd-ccd8-4bba-bdf9-059d3fecd4a7.jpeg', 'cube', 1, 'http://wwww.domain.tld', 'http://wwww.domain.tld', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(255) DEFAULT NULL,
  `data` varchar(120) DEFAULT NULL,
  `expires` datetime NOT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hashs` (`hash`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tickets`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_noticias`
--

CREATE TABLE IF NOT EXISTS `tipo_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tipo_noticias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_acess` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`,`group_id`),
  KEY `fk_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `group_id`, `email`, `password`, `first_name`, `last_name`, `created`, `modified`, `last_acess`, `active`) VALUES
(63, 15, 'demo@canvas.com', '8ce4b1d5656a92d5133d9b84241b8cf6b7046fec', 'LuÃ­s ', 'Vieira', '2013-07-16 00:15:34', '2014-10-30 23:25:13', NULL, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
