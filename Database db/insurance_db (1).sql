-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 03:52 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insurance_db`
--
CREATE DATABASE IF NOT EXISTS `insurance_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `insurance_db`;

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `contact_date` date NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;



--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_id` int(32) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_mobile` varchar(15) NOT NULL,
  `cust_dob` date NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `nominee` varchar(25) NOT NULL,
  `nominee_relation` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `city_id` varchar(25) NOT NULL,
  `state_id` varchar(25) NOT NULL,
  `pin` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Table structure for table `customer_document`
--

CREATE TABLE IF NOT EXISTS `customer_document` (
  `cust_doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `document_type` varchar(25) NOT NULL,
  `document_path` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_type` varchar(20) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `emp_type`, `emp_name`, `login_id`, `password`, `status`) VALUES
(1, 'Admin', 'admin', 'admin', 'password', 'Active');


-- --------------------------------------------------------

--
-- Table structure for table `insurance_account`
--

CREATE TABLE IF NOT EXISTS `insurance_account` (
  `insurance_account_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `insurance_plan_id` int(10) NOT NULL,
  `date_create` date NOT NULL,
  `maturity_date` date NOT NULL,
  `policy_term` varchar(10) NOT NULL,
  `sum_assured` float(10,2) NOT NULL,
  `profit_ratio` float(10,2) NOT NULL,
  `total_amt` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`insurance_account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Table structure for table `insurance_plan`
--

CREATE TABLE IF NOT EXISTS `insurance_plan` (
  `insurance_plan_id` int(10) NOT NULL AUTO_INCREMENT,
  `insurance_type_id` int(10) NOT NULL,
  `insurance_scheme_id` int(10) NOT NULL,
  `policy_term_min` int(10) NOT NULL,
  `policy_term_max` int(10) NOT NULL,
  `min_age` int(10) NOT NULL,
  `max_age` int(10) NOT NULL,
  `sum_assured_min` float(10,2) NOT NULL,
  `sum_assured_max` float(10,2) NOT NULL,
  `profit_ratio` float(10,2) NOT NULL,
  `penalty_amt` float(10,2) NOT NULL,
  `exit_policy` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`insurance_plan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Table structure for table `insurance_scheme`
--

CREATE TABLE IF NOT EXISTS `insurance_scheme` (
  `insurance_scheme_id` int(10) NOT NULL AUTO_INCREMENT,
  `insurance_scheme` varchar(50) NOT NULL,
  `agent_commission` float(10,2) NOT NULL,
  `agent_commission2` float(10,2) NOT NULL,
  `insurance_type_id` varchar(10) NOT NULL,
  `claim_deducation` float(10,2) NOT NULL,
  `penalty_amt` float(10,2) NOT NULL,
  `note` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`insurance_scheme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Table structure for table `insurance_type`
--

CREATE TABLE IF NOT EXISTS `insurance_type` (
  `insurance_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `insurance_type` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`insurance_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
--
-- Table structure for table `policy_payment`
--

CREATE TABLE IF NOT EXISTS `policy_payment` (
  `policy_payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `insurance_account_id` int(10) NOT NULL,
  `paid_amt` float(10,2) NOT NULL,
  `tax_amt` float(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `trans_type` varchar(25) NOT NULL,
  `card_holder` text NOT NULL,
  `card_no` varchar(30) NOT NULL,
  `exp_date` date NOT NULL,
  `particulars` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`policy_payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;
--
-- Table structure for table `policy_withdrawal`
--

CREATE TABLE IF NOT EXISTS `policy_withdrawal` (
  `claim_id` int(10) NOT NULL AUTO_INCREMENT,
  `insurance_account_id` int(10) NOT NULL,
  `claim_type` varchar(15) NOT NULL COMMENT 'exit policy or Full year',
  `claim_amt` float(10,2) NOT NULL,
  `claim_date` date NOT NULL,
  `bank_name` varchar(25) NOT NULL,
  `bank_ac_no` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `branch_code` varchar(15) NOT NULL,
  `particulars` text NOT NULL,
  `claim_status` varchar(10) NOT NULL,
  PRIMARY KEY (`claim_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
