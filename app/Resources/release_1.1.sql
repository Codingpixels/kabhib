/* create new table khakhras    */

CREATE TABLE `kabhee_b`.`khakhras` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table cup_cakes  */
CREATE TABLE `kabhee_b`.`cup_cakes` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table drycakes  */

CREATE TABLE `kabhee_b`.`drycakes` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table cookies  */

CREATE TABLE `kabhee_b`.`cookies` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table puffs  */

CREATE TABLE `kabhee_b`.`puffs` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table savories  */


CREATE TABLE `kabhee_b`.`savories` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

/* create new table cream_rolls  */

CREATE TABLE `kabhee_b`.`cream_rolls` (
`item_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`item_code` VARCHAR( 20 ) NOT NULL ,
`item_name` VARCHAR( 50 ) NOT NULL ,
`quantity` INT( 11 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`path` VARCHAR( 50 ) NOT NULL ,
`category` VARCHAR( 50 ) NOT NULL ,
`shelfe_life` VARCHAR( 20 ) NOT NULL ,
`unit` VARCHAR( 20 ) NOT NULL ,
PRIMARY KEY ( `item_id` )
) ENGINE = MYISAM ;

