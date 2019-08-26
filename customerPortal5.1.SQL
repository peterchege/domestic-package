-- Create tables section -------------------------------------------------

-- Table product

CREATE TABLE `product`
(
  `product_id` Int NOT NULL AUTO_INCREMENT,
  `product_name` Varchar(30) NOT NULL,
  PRIMARY KEY (`product_id`)
)
;

ALTER TABLE `product` ADD UNIQUE `product_name` (`product_name`)
;

-- Table Customer

CREATE TABLE `Customer`
(
  `customer_id` Int NOT NULL AUTO_INCREMENT,
  `first_name` Varchar(35) NOT NULL,
  `middlename` Varchar(35) NOT NULL,
  `lastname` Varchar(35) NOT NULL,
  `user_name` Varchar(64),
  `user_email` Varchar(254),
  `email` Varchar(65) NOT NULL,
  `phone` Int(11) NOT NULL,
  `location` Varchar(255),
  `postal_address` Varchar(255),
  PRIMARY KEY (`customer_id`)
)
;

CREATE INDEX `IX_Relationship21` ON `Customer` (`user_name`,`user_email`)
;

ALTER TABLE `Customer` ADD UNIQUE `email` (`email`)
;

ALTER TABLE `Customer` ADD UNIQUE `phone` (`phone`)
;

-- Table payment

CREATE TABLE `payment`
(
  `payment_id` Int NOT NULL AUTO_INCREMENT,
  `customer_id` Int NOT NULL,
  `invoice_no` Int NOT NULL,
  PRIMARY KEY (`payment_id`,`customer_id`)
)
;

ALTER TABLE `payment` ADD UNIQUE `invoice_no` (`invoice_no`)
;

-- Table pr_dp_cover

CREATE TABLE `pr_dp_cover`
(
  `cover_id` Int NOT NULL AUTO_INCREMENT,
  `start_date` Date NOT NULL,
  `end_date` Date NOT NULL,
  `cover` Double NOT NULL,
  `customer_id` Int NOT NULL,
  `category_id` Int NOT NULL,
  `product_id` Int NOT NULL,
  PRIMARY KEY (`cover_id`)
)
;

CREATE INDEX `IX_Relationship3` ON `pr_dp_cover` (`customer_id`)
;

CREATE INDEX `IX_Relationship4` ON `pr_dp_cover` (`category_id`,`product_id`)
;

-- Table section

CREATE TABLE `section`
(
  `customer_role` Set('Owner','Tenant') NOT NULL,
  `section_id` Int NOT NULL,
  `section` Enum('building','content','all risk','servant') NOT NULL
)
;

ALTER TABLE `section` ADD PRIMARY KEY (`section_id`,`customer_role`)
;

-- Table pr_dp_premises

CREATE TABLE `pr_dp_premises`
(
  `building_id` Int NOT NULL AUTO_INCREMENT,
  `location` Varchar(20) NOT NULL,
  `floors` Int NOT NULL,
  `business` Varchar(65),
  `business_description` Varchar(255),
  `sole_occupation` Bool NOT NULL,
  `dwelling` Set('Private','Self Contained','Room not Self Contained') NOT NULL,
  `for_hire` Bool NOT NULL,
  `seven_day_inoccupancy` Varchar(65),
  `thirty_day_inoccupancy` Bool NOT NULL,
  `burglar_proof` Bool NOT NULL,
  `burglar_proof_details` Varchar(255),
  `good_state_of_repair` Bool NOT NULL,
  `other_sec_arrangement` Varchar(65),
  `value` Double,
  `material_id` Int NOT NULL,
  `roof_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL,
  PRIMARY KEY (`building_id`,`section_id`,`customer_role`)
)
;

CREATE INDEX `IX_Relationship7` ON `pr_dp_premises` (`material_id`)
;

CREATE INDEX `IX_Relationship8` ON `pr_dp_premises` (`roof_id`)
;

-- Table ref_roof_material

CREATE TABLE `ref_roof_material`
(
  `roof_id` Int NOT NULL AUTO_INCREMENT,
  `description` Varchar(65) NOT NULL,
  PRIMARY KEY (`roof_id`)
)
;

ALTER TABLE `ref_roof_material` ADD UNIQUE `description` (`description`)
;

-- Table product_category

CREATE TABLE `product_category`
(
  `category_id` Int NOT NULL AUTO_INCREMENT,
  `category` Varchar(20) NOT NULL,
  `product_id` Int NOT NULL,
  PRIMARY KEY (`category_id`,`product_id`)
)
;

-- Table ref_wall_material

CREATE TABLE `ref_wall_material`
(
  `material_id` Int NOT NULL AUTO_INCREMENT,
  `description` Varchar(20) NOT NULL,
  PRIMARY KEY (`material_id`)
)
;

ALTER TABLE `ref_wall_material` ADD UNIQUE `description` (`description`)
;

-- Table pr_dp_content

CREATE TABLE `pr_dp_content`
(
  `content_id` Int NOT NULL AUTO_INCREMENT,
  `price` Double NOT NULL,
  `date_of_purchase` Date,
  `content_type_id` Int NOT NULL,
  `section_id1` Int NOT NULL,
  `customer_role1` Set('Owner','Tenant') NOT NULL,
  `item_description` Varchar(255),
  `building_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL,
  PRIMARY KEY (`content_id`,`content_type_id`,`section_id1`,`customer_role1`)
)
;

CREATE INDEX `IX_Relationship25` ON `pr_dp_content` (`building_id`,`section_id`,`customer_role`)
;

-- Table ref_content_type

CREATE TABLE `ref_content_type`
(
  `content_type_id` Int NOT NULL AUTO_INCREMENT,
  `type` Varchar(35) NOT NULL,
  PRIMARY KEY (`content_type_id`)
)
;

ALTER TABLE `ref_content_type` ADD UNIQUE `type` (`type`)
;

-- Table pr_dp_servant

CREATE TABLE `pr_dp_servant`
(
  `head_count` Int NOT NULL,
  `annual_salary` Double NOT NULL,
  `job_id` Int NOT NULL,
  `section_id1` Int NOT NULL,
  `customer_role1` Set('Owner','Tenant') NOT NULL,
  `emp_type` Set('Indoors Staff','Gardener','Stablemen','Chauffeurs','Watchmen') NOT NULL,
  `building_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL
)
;

CREATE INDEX `IX_Relationship26` ON `pr_dp_servant` (`building_id`,`section_id`,`customer_role`)
;

ALTER TABLE `pr_dp_servant` ADD PRIMARY KEY (`job_id`,`section_id1`,`customer_role1`)
;

-- Table ref_job

CREATE TABLE `ref_job`
(
  `job_id` Int NOT NULL AUTO_INCREMENT,
  `name` Varchar(25) NOT NULL,
  PRIMARY KEY (`job_id`)
)
;

ALTER TABLE `ref_job` ADD UNIQUE `name` (`name`)
;

-- Table pr_dp_all_risk

CREATE TABLE `pr_dp_all_risk`
(
  `all_risk_id` Int NOT NULL AUTO_INCREMENT,
  `section_id1` Int NOT NULL,
  `serial_no` Int(65),
  `make_model` Varchar(65),
  `item_description` Varchar(255),
  `value` Double NOT NULL,
  `customer_role1` Set('Owner','Tenant') NOT NULL,
  `content_id` Int NOT NULL,
  `content_type_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL,
  PRIMARY KEY (`all_risk_id`,`section_id1`,`customer_role1`)
)
;

CREATE INDEX `IX_Relationship27` ON `pr_dp_all_risk` (`content_id`,`content_type_id`,`section_id`,`customer_role`)
;

-- Table Ref_Item_Type

CREATE TABLE `Ref_Item_Type`
(
  `item_id` Int NOT NULL AUTO_INCREMENT,
  `description` Varchar(35) NOT NULL,
  PRIMARY KEY (`item_id`)
)
;

ALTER TABLE `Ref_Item_Type` ADD UNIQUE `description` (`description`)
;

-- Table customer_general_info

CREATE TABLE `customer_general_info`
(
  `insurance_previous_decline` Bool NOT NULL,
  `insurance_previous_decline_details` Varchar(255),
  `require_special_term` Bool,
  `require_special_term_details` Varchar(255),
  `any_insurance_cancellation` Bool NOT NULL,
  `cancellation_details` Varchar(255),
  `premium_increased` Bool NOT NULL,
  `premium_increased_reasons` Varchar(255),
  `perils_previous_loss` Bool NOT NULL,
  `perils_previous_loss_details` Varchar(255),
  `customer_id` Int NOT NULL
)
;

ALTER TABLE `customer_general_info` ADD PRIMARY KEY (`customer_id`)
;

-- Table out_building

CREATE TABLE `out_building`
(
  `building_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL,
  `roof_id` Int NOT NULL,
  `material_id` Int NOT NULL
)
;

CREATE INDEX `IX_Relationship23` ON `out_building` (`roof_id`)
;

CREATE INDEX `IX_Relationship24` ON `out_building` (`material_id`)
;

ALTER TABLE `out_building` ADD PRIMARY KEY (`building_id`,`section_id`,`customer_role`)
;

-- Table All_Risk_Item

CREATE TABLE `All_Risk_Item`
(
  `all_risk_id` Int NOT NULL,
  `section_id` Int NOT NULL,
  `customer_role` Set('Owner','Tenant') NOT NULL,
  `value` Int NOT NULL,
  `item_id` Int NOT NULL
)
;

CREATE INDEX `IX_Relationship29` ON `All_Risk_Item` (`item_id`)
;

ALTER TABLE `All_Risk_Item` ADD PRIMARY KEY (`all_risk_id`,`section_id`,`customer_role`)
;

-- Create foreign keys (relationships) section ------------------------------------------------- 


ALTER TABLE `pr_dp_content` ADD CONSTRAINT `Relationship25` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_premises` ADD CONSTRAINT `Relationship7` FOREIGN KEY (`material_id`) REFERENCES `ref_wall_material` (`material_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_premises` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`roof_id`) REFERENCES `ref_roof_material` (`roof_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `out_building` ADD CONSTRAINT `Relationship22` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `out_building` ADD CONSTRAINT `Relationship23` FOREIGN KEY (`roof_id`) REFERENCES `ref_roof_material` (`roof_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `out_building` ADD CONSTRAINT `Relationship24` FOREIGN KEY (`material_id`) REFERENCES `ref_wall_material` (`material_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_servant` ADD CONSTRAINT `Relationship26` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `All_Risk_Item` ADD CONSTRAINT `Relationship28` FOREIGN KEY (`all_risk_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_all_risk` (`all_risk_id`, `section_id1`, `customer_role1`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `All_Risk_Item` ADD CONSTRAINT `Relationship29` FOREIGN KEY (`item_id`) REFERENCES `Ref_Item_Type` (`item_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `customer_general_info` ADD CONSTRAINT `Relationship21` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `product_category` ADD CONSTRAINT `Reference Table` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `payment` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_cover` ADD CONSTRAINT `Relationship6` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_cover` ADD CONSTRAINT `Reference Table1` FOREIGN KEY (`category_id`, `product_id`) REFERENCES `product_category` (`category_id`, `product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `section` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`section_id`) REFERENCES `pr_dp_cover` (`cover_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_content` ADD CONSTRAINT `Relationship9` FOREIGN KEY (`content_type_id`) REFERENCES `ref_content_type` (`content_type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_servant` ADD CONSTRAINT `Relationship14` FOREIGN KEY (`job_id`) REFERENCES `ref_job` (`job_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_content` ADD CONSTRAINT `Relationship16` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_servant` ADD CONSTRAINT `Relationship17` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_premises` ADD CONSTRAINT `Relationship18` FOREIGN KEY (`section_id`, `customer_role`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_all_risk` ADD CONSTRAINT `Relationship19` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `pr_dp_all_risk` ADD CONSTRAINT `Relationship27` FOREIGN KEY (`content_id`, `content_type_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_content` (`content_id`, `content_type_id`, `section_id1`, `customer_role1`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


