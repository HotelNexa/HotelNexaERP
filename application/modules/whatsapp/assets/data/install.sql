
ALTER TABLE `setting` ADD `whatsapp_number` VARCHAR(50) NULL DEFAULT NULL AFTER `footer_text`;
INSERT INTO `sec_menu_item` (`menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('add_whatsapp', 'whatsappback', 'whatsapp', '0', '0', '3', '2020-12-03 00:00:00');
INSERT INTO `sec_menu_item` (`menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) SELECT 'whatsapp_api', 'showsetting', 'whatsapp', sec_menu_item.menu_id, '0', '3', '2020-12-03 00:00:00' FROM sec_menu_item WHERE sec_menu_item.menu_title = 'add_whatsapp';
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES (NULL, 'whatsapp', 'Whatsapp'),(NULL, 'whatsapp_chat', 'Whatsapp Chat'),(NULL, 'whatsapp_phone_numer_internation_standard', 'Whatsapp phone Numer International Standard'),(NULL, 'whatsapp_phone_numer', 'Whatsapp Phone Numer'),(NULL, 'whatsapp_setting', 'Whatsapp Setting'),(NULL, 'hello,_how_can_we_help_you?', 'Hello, How can we help you?'),(NULL, 'ischatenable', 'Chat Enable'),(NULL, 'wporder_enable', 'WhatsApp Booking Enable'),(NULL, 'whatsorderplace', 'Do you want to Chat on WhatsApp??');