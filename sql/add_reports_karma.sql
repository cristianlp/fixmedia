ALTER TABLE reports ADD `karma` decimal(10,2) DEFAULT '0.00';
ALTER TABLE reports ADD `karma_value` decimal(10,2) DEFAULT '1.00';
ALTER TABLE `reports` ADD INDEX `karma` (`karma`);

ALTER TABLE `reports_data` ADD `karma` DECIMAL(10,2)   DEFAULT '0.00';

