/*
 Navicat Premium Data Transfer

 Source Server         : apac
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : apac

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 26/08/2019 10:10:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for all_risk_item
-- ----------------------------
DROP TABLE IF EXISTS `all_risk_item`;
CREATE TABLE `all_risk_item`  (
  `all_risk_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`all_risk_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `IX_Relationship29`(`item_id`) USING BTREE,
  CONSTRAINT `Relationship28` FOREIGN KEY (`all_risk_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_all_risk` (`all_risk_id`, `section_id1`, `customer_role1`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship29` FOREIGN KEY (`item_id`) REFERENCES `ref_item_type` (`item_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `user_email` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `postal_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `phone`(`phone`) USING BTREE,
  INDEX `IX_Relationship21`(`user_name`, `user_email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for customer_general_info
-- ----------------------------
DROP TABLE IF EXISTS `customer_general_info`;
CREATE TABLE `customer_general_info`  (
  `insurance_previous_decline` tinyint(1) NOT NULL,
  `insurance_previous_decline_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `require_special_term` tinyint(1) NULL DEFAULT NULL,
  `require_special_term_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `any_insurance_cancellation` tinyint(1) NOT NULL,
  `cancellation_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `premium_increased` tinyint(1) NOT NULL,
  `premium_increased_reasons` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perils_previous_loss` tinyint(1) NOT NULL,
  `perils_previous_loss_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE,
  CONSTRAINT `Relationship21` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for out_building
-- ----------------------------
DROP TABLE IF EXISTS `out_building`;
CREATE TABLE `out_building`  (
  `building_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `roof_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  PRIMARY KEY (`building_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `IX_Relationship23`(`roof_id`) USING BTREE,
  INDEX `IX_Relationship24`(`material_id`) USING BTREE,
  CONSTRAINT `Relationship22` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship23` FOREIGN KEY (`roof_id`) REFERENCES `ref_roof_materials` (`roof_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship24` FOREIGN KEY (`material_id`) REFERENCES `ref_wall_materials` (`material_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment`  (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`, `customer_id`) USING BTREE,
  UNIQUE INDEX `invoice_no`(`invoice_no`) USING BTREE,
  INDEX `Relationship2`(`customer_id`) USING BTREE,
  CONSTRAINT `Relationship2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pr_dp_all_risk
-- ----------------------------
DROP TABLE IF EXISTS `pr_dp_all_risk`;
CREATE TABLE `pr_dp_all_risk`  (
  `all_risk_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id1` int(11) NOT NULL,
  `serial_no` int(65) NULL DEFAULT NULL,
  `make_model` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `item_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `value` double NOT NULL,
  `customer_role1` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`all_risk_id`, `section_id1`, `customer_role1`) USING BTREE,
  INDEX `IX_Relationship27`(`content_id`, `content_type_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `Relationship19`(`section_id1`, `customer_role1`) USING BTREE,
  CONSTRAINT `Relationship19` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship27` FOREIGN KEY (`content_id`, `content_type_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_content` (`content_id`, `content_type_id`, `section_id1`, `customer_role1`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pr_dp_content
-- ----------------------------
DROP TABLE IF EXISTS `pr_dp_content`;
CREATE TABLE `pr_dp_content`  (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `date_of_purchase` date NULL DEFAULT NULL,
  `content_type_id` int(11) NOT NULL,
  `section_id1` int(11) NOT NULL,
  `customer_role1` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `item_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `building_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`content_id`, `content_type_id`, `section_id1`, `customer_role1`) USING BTREE,
  INDEX `IX_Relationship25`(`building_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `Relationship9`(`content_type_id`) USING BTREE,
  INDEX `Relationship16`(`section_id1`, `customer_role1`) USING BTREE,
  CONSTRAINT `Relationship16` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship25` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship9` FOREIGN KEY (`content_type_id`) REFERENCES `ref_content_type` (`content_type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pr_dp_cover
-- ----------------------------
DROP TABLE IF EXISTS `pr_dp_cover`;
CREATE TABLE `pr_dp_cover`  (
  `cover_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cover` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`cover_id`) USING BTREE,
  INDEX `IX_Relationship3`(`customer_id`) USING BTREE,
  INDEX `IX_Relationship4`(`category_id`, `product_id`) USING BTREE,
  CONSTRAINT `Reference Table1` FOREIGN KEY (`category_id`, `product_id`) REFERENCES `product_category` (`category_id`, `product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship6` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pr_dp_premises
-- ----------------------------
DROP TABLE IF EXISTS `pr_dp_premises`;
CREATE TABLE `pr_dp_premises`  (
  `building_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `material_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `location` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dwelling_wall` int(11) NOT NULL,
  `dwelling_roof` int(11) NOT NULL,
  `floors` int(11) NOT NULL,
  `business` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `business_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sole_occupation` tinyint(1) NOT NULL,
  `dwelling` set('Private','Self Contained','Room not Self Contained') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `for_hire` tinyint(1) NOT NULL,
  `thirty_day_inoccupancy` tinyint(1) NOT NULL,
  `thirty_day_inoccupancy_details` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `seven_day_inoccupancy` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `seven_day_inoccupancy_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `good_state_of_repair` tinyint(1) NOT NULL,
  `burglar_proof` tinyint(1) NOT NULL,
  `burglar_proof_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `other_sec_arrangement` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `premises_value` double NULL DEFAULT NULL,
  PRIMARY KEY (`building_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `IX_Relationship7`(`material_id`) USING BTREE,
  INDEX `IX_Relationship8`(`dwelling_roof`) USING BTREE,
  INDEX `Relationship18`(`section_id`, `customer_role`) USING BTREE,
  INDEX `Relationship7`(`dwelling_wall`) USING BTREE,
  CONSTRAINT `Relationship18` FOREIGN KEY (`section_id`, `customer_role`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship7` FOREIGN KEY (`dwelling_wall`) REFERENCES `ref_wall_materials` (`material_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship8` FOREIGN KEY (`dwelling_roof`) REFERENCES `ref_roof_materials` (`roof_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pr_dp_servant
-- ----------------------------
DROP TABLE IF EXISTS `pr_dp_servant`;
CREATE TABLE `pr_dp_servant`  (
  `head_count` int(11) NOT NULL,
  `annual_salary` double NOT NULL,
  `job_id` int(11) NOT NULL,
  `section_id1` int(11) NOT NULL,
  `customer_role1` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_type` set('Indoors Staff','Gardener','Stablemen','Chauffeurs','Watchmen') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `building_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`job_id`, `section_id1`, `customer_role1`) USING BTREE,
  INDEX `IX_Relationship26`(`building_id`, `section_id`, `customer_role`) USING BTREE,
  INDEX `Relationship17`(`section_id1`, `customer_role1`) USING BTREE,
  CONSTRAINT `Relationship14` FOREIGN KEY (`job_id`) REFERENCES `ref_job` (`job_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship17` FOREIGN KEY (`section_id1`, `customer_role1`) REFERENCES `section` (`section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `Relationship26` FOREIGN KEY (`building_id`, `section_id`, `customer_role`) REFERENCES `pr_dp_premises` (`building_id`, `section_id`, `customer_role`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`) USING BTREE,
  UNIQUE INDEX `product_name`(`product_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category`  (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`, `product_id`) USING BTREE,
  INDEX `Reference Table`(`product_id`) USING BTREE,
  CONSTRAINT `Reference Table` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ref_content_type
-- ----------------------------
DROP TABLE IF EXISTS `ref_content_type`;
CREATE TABLE `ref_content_type`  (
  `content_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`content_type_id`) USING BTREE,
  UNIQUE INDEX `type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ref_item_type
-- ----------------------------
DROP TABLE IF EXISTS `ref_item_type`;
CREATE TABLE `ref_item_type`  (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`item_id`) USING BTREE,
  UNIQUE INDEX `description`(`description`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ref_job
-- ----------------------------
DROP TABLE IF EXISTS `ref_job`;
CREATE TABLE `ref_job`  (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`job_id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ref_roof_materials
-- ----------------------------
DROP TABLE IF EXISTS `ref_roof_materials`;
CREATE TABLE `ref_roof_materials`  (
  `roof_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`roof_id`) USING BTREE,
  UNIQUE INDEX `description`(`description`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ref_roof_materials
-- ----------------------------
INSERT INTO `ref_roof_materials` VALUES (2, 'Brick');
INSERT INTO `ref_roof_materials` VALUES (1, 'Stone');

-- ----------------------------
-- Table structure for ref_wall_materials
-- ----------------------------
DROP TABLE IF EXISTS `ref_wall_materials`;
CREATE TABLE `ref_wall_materials`  (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`material_id`) USING BTREE,
  UNIQUE INDEX `description`(`description`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ref_wall_materials
-- ----------------------------
INSERT INTO `ref_wall_materials` VALUES (2, 'Brick');
INSERT INTO `ref_wall_materials` VALUES (1, 'Stone');

-- ----------------------------
-- Table structure for section
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section`  (
  `customer_role` set('Owner','Tenant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `section` enum('building','content','all risk','servant') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`section_id`, `customer_role`) USING BTREE,
  CONSTRAINT `Relationship5` FOREIGN KEY (`section_id`) REFERENCES `pr_dp_cover` (`cover_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
