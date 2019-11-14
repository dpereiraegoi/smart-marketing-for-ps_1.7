<?php
/**
 *  Smart Marketing
 *
 *  @author    E-goi
 *  @copyright 2018 E-goi
 *  @license   LICENSE.txt
 */

$sql = array();
$sql[_DB_PREFIX_.'egoi'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi` (
			  `egoi_id` int(11) NOT NULL AUTO_INCREMENT,
			  `list_id` int(11) NOT NULL,
			  `client_id` int(11) NOT NULL,
			  `sync` int(11) NOT NULL,
			  `total` varchar(255) NOT NULL,
			  `track` varchar(255) NOT NULL DEFAULT \'1\',
			  `role` varchar(255) NOT NULL,
			  `newsletter_sync` int(11) NOT NULL DEFAULT \'0\',
			  `optin` int(11) NOT NULL DEFAULT \'0\',
			  `estado` int(1) NOT NULL,
			  PRIMARY KEY (`egoi_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_forms'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_forms` (
			  `egoi_id` int(11) NOT NULL AUTO_INCREMENT,
			  `enable` int(11) NOT NULL,
			  `list_id` int(11) NOT NULL,
			  `client_id` int(11) NOT NULL,
			  `form_id` int(11) NOT NULL,
			  `form_title` varchar(255) NOT NULL,
			  `form_content` longtext NOT NULL,
			  `doptin` int(11) NOT NULL,
			  `is_bootstrap` int(11) NOT NULL,
			  `msg_gen` varchar(255) NOT NULL,
			  `msg_invalid` varchar(255) NOT NULL,
			  `msg_exists` varchar(255) NOT NULL,
			  `success` varchar(255) NOT NULL,
			  `redirect` varchar(255) NOT NULL,
			  `hide` int(1) NOT NULL,
			  `style_width` varchar(255) NOT NULL,
			  `style_height` varchar(255) NOT NULL,
			  `block_header` int(1) NOT NULL,
			  `block_banner` int(1) NOT NULL,
			  `block_footer` int(1) NOT NULL,
			  `block_home` int(1) NOT NULL,
			  `popup` int(1) NOT NULL,
			  `once` int(1) NOT NULL,
			  `url` varchar(255) NOT NULL,
			  `form_type` varchar(255) NOT NULL,
			  `estado` int(1) NOT NULL,
			  PRIMARY KEY (`egoi_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_customers'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_customers` (
			  `egoi_id` int(11) NOT NULL AUTO_INCREMENT,
			  `customer` varchar(255) NOT NULL,
			  `id_cart` int(11) NOT NULL,
			  `estado` int(1) NOT NULL,
			  PRIMARY KEY (`egoi_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_map_fields'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_map_fields` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `ps` varchar(255) NOT NULL, 
			  `ps_name` varchar(255) NOT NULL,
			  `egoi` varchar(255) NOT NULL,
			  `egoi_name` varchar(255) NOT NULL,
			  `status` int(1) NOT NULL, 
			  PRIMARY KEY (`id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_sms_notif_order_status'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_sms_notif_order_status` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
			  `order_status_id` int(11) NOT NULL UNIQUE,
			  `send_client` int(1) NOT NULL DEFAULT \'0\',
			  `send_admin` int(1) NOT NULL DEFAULT \'0\',
			  PRIMARY KEY (`id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_sms_notif_messages'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_sms_notif_messages` (
			  `order_status_id` int(11) NOT NULL,
			  `lang_id` int(11) NOT NULL,
			  `client_message` varchar(2048),
			  `admin_message` varchar(2048),
			  PRIMARY KEY (`order_status_id`,`lang_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_sms_notif_order_reminder'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_sms_notif_order_reminder` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `order_id` int(11) NOT NULL UNIQUE,
			  `send_date` varchar(512),
			  `mobile` varchar(32) NOT NULL,
			  `message` varchar(2048),
			  PRIMARY KEY (`id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_sms_notif_reminder_messages'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_sms_notif_reminder_messages` (
			  `order_status_id` int(11) NOT NULL,
			  `lang_id` int(11) NOT NULL,
			  `message` varchar(2048),
			  `active` int(1) NOT NULL DEFAULT \'0\',
			  PRIMARY KEY (`order_status_id`,`lang_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[_DB_PREFIX_.'egoi_active_catalogs'] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'egoi_active_catalogs` (
              `catalog_id` int(11) NOT NULL UNIQUE,
              `language` varchar(2) NOT NULL,
              `currency` char(3) NOT NULL,
			  `active` int(1) NOT NULL DEFAULT \'0\',
			  PRIMARY KEY (`catalog_id`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
