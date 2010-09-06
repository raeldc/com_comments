CREATE TABLE IF NOT EXISTS `jos_comments_comments` (
  `comments_comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `target_type` char(10) NOT NULL,
  `target_id` bigint(20) unsigned NOT NULL,
  `text` text NOT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`comments_comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;