ALTER TABLE  `employee_details` ADD  `position` TINYINT( 1 ) NOT NULL DEFAULT  '0' COMMENT  '0: employee, 1: administrator, 2: super administrator' AFTER  `password`;
