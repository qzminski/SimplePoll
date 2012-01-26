-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_simplepoll`
-- 

CREATE TABLE `tl_simplepoll` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `lid` int(10) unsigned NOT NULL default '0',
  `language` varchar(2) NOT NULL default '',
  `ips` blob NULL,
  `title` varchar(255) NOT NULL default '',
  `voteInterval` int(10) unsigned NOT NULL default '0',
  `protected` char(1) NOT NULL default '',
  `featured` char(1) NOT NULL default '',
  `showResults` char(1) NOT NULL default '',
  `published` char(1) NOT NULL default '',
  `closed` char(1) NOT NULL default '',
  `start` varchar(10) NOT NULL default '',
  `stop` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_simplepoll_option`
-- 

CREATE TABLE `tl_simplepoll_option` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `lid` int(10) unsigned NOT NULL default '0',
  `language` varchar(2) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `votes` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `simplepoll` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `simplepoll` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
