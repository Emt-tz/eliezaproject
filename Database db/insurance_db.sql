-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 01:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(30) NOT NULL,
  `agent_code` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `agent_address` text NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `Qualification` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commission_master`
--

CREATE TABLE `commission_master` (
  `commission_master_id` int(10) NOT NULL,
  `insurance_scheme_id` int(10) NOT NULL,
  `insurance_account_id` int(10) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `commission_amt` float(10,2) NOT NULL,
  `transaction_type` varchar(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `particulars` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission_master`
--

INSERT INTO `commission_master` (`commission_master_id`, `insurance_scheme_id`, `insurance_account_id`, `agent_id`, `commission_amt`, `transaction_type`, `transaction_date`, `particulars`, `status`) VALUES
(1, 1, 4, 27, 3850.00, 'Credit', '2017-04-01', '', 'Active'),
(2, 1, 5, 27, 803.57, 'Credit', '2017-04-01', '', 'Active'),
(3, 2, 6, 27, 8000.00, 'Credit', '2017-04-01', '', 'Active'),
(4, 2, 6, 27, 3733.33, 'Credit', '2017-04-01', '', 'Active'),
(5, 0, 0, 27, 10000.90, 'Debit', '2017-04-01', 'paid for', 'Active'),
(6, 2, 6, 27, 3733.33, 'Credit', '2017-04-01', '', 'Active'),
(7, 0, 0, 26, 6000.00, 'Debit', '2021-06-28', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `contact_date` date NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `customer_id`, `title`, `message`, `contact_date`, `reply`) VALUES
(1, 64, 'Query', '<p>About insurance</p>', '2023-04-01', 'test insurance'),
(2, 77, 'Hello', '<p>Test</p>', '2021-06-13', ''),
(3, 81, 'gh', '<p>gh</p>', '2021-06-28', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
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
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `agent_id`, `customer_name`, `cust_address`, `cust_mobile`, `cust_dob`, `login_id`, `password`, `email_id`, `nominee`, `nominee_relation`, `status`, `city_id`, `state_id`, `pin`) VALUES
(80, 0, 'ELIEZA ROBERT HERMAN', '    makongo', '0758137504', '1998-03-26', 'herman', 'd0c212a3743fdb25d0905c9994b6c06d', 'eliezaherman@gmail.com', 'jane', 'Mother', 'Pending', '14', '17', '1234'),
(81, 0, 'peter kelvin', 'Mbezi Beach Jogoo', '0734377153', '2003-06-17', 'emt', 'password', 'peterkelvin16@gmail.com', 'none', 'Father', 'Active', '6', '5', '14128');

-- --------------------------------------------------------

--
-- Table structure for table `customer_claim`
--

CREATE TABLE `customer_claim` (
  `cust_doc_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `claim_type` varchar(25) NOT NULL,
  `document_path` varchar(100) NOT NULL,
  `claim_status` varchar(12) NOT NULL,
  `cust_name` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_claim`
--

INSERT INTO `customer_claim` (`cust_doc_id`, `customer_id`, `claim_type`, `document_path`, `claim_status`, `cust_name`) VALUES
(0, 81, '', '166316578816284886081909640240Motor-Accident-Claim-Form.pdf', '', ''),
(0, 81, '', '253565691', '', 'peter kelvin');

-- --------------------------------------------------------

--
-- Table structure for table `customer_document`
--

CREATE TABLE `customer_document` (
  `cust_doc_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `document_type` varchar(25) NOT NULL,
  `document_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `emp_type`, `emp_name`, `login_id`, `password`, `status`) VALUES
(1, 'Admin', 'Administrator', 'admin', 'password', 'Active'),
(4, 'Employee', 'Elieza', 'herman', '5f4dcc3b5aa765d61d8327deb882cf99', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_account`
--

CREATE TABLE `insurance_account` (
  `insurance_account_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `insurance_plan_id` int(10) NOT NULL,
  `date_create` date NOT NULL,
  `maturity_date` date NOT NULL,
  `policy_term` varchar(10) NOT NULL,
  `sum_assured` float(10,2) NOT NULL,
  `profit_ratio` float(10,2) NOT NULL,
  `total_amt` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_account`
--

INSERT INTO `insurance_account` (`insurance_account_id`, `customer_id`, `insurance_plan_id`, `date_create`, `maturity_date`, `policy_term`, `sum_assured`, `profit_ratio`, `total_amt`, `status`) VALUES
(1, 64, 2, '2017-03-31', '2023-03-31', '1 Month', 310000.00, 5.00, 325500.00, 'Active'),
(2, 64, 3, '2017-03-31', '2023-03-31', '1 Year', 120000.00, 8.00, 129600.00, 'Active'),
(3, 64, 3, '2017-04-01', '2025-04-01', '3 Month', 160000.00, 8.00, 172800.00, 'Active'),
(4, 71, 1, '2017-04-01', '2019-04-01', '1 Year', 110000.00, 6.00, 116600.00, 'Active'),
(5, 71, 1, '2017-04-01', '2024-04-01', '3 Month', 150000.00, 6.00, 159000.00, 'Active'),
(6, 71, 2, '2017-04-01', '2023-04-01', '1 Year', 320000.00, 5.00, 336000.00, 'Active'),
(7, 77, 2, '2021-06-13', '2029-06-13', '3 Month', 300000.00, 5.00, 105000.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_plan`
--

CREATE TABLE `insurance_plan` (
  `insurance_plan_id` int(10) NOT NULL,
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
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_plan`
--

INSERT INTO `insurance_plan` (`insurance_plan_id`, `insurance_type_id`, `insurance_scheme_id`, `policy_term_min`, `policy_term_max`, `min_age`, `max_age`, `sum_assured_min`, `sum_assured_max`, `profit_ratio`, `penalty_amt`, `exit_policy`, `status`) VALUES
(1, 1, 1, 2, 8, 25, 60, 110000.00, 150000.00, 6.00, 5.00, 0.00, 'Active'),
(2, 1, 2, 6, 9, 25, 60, 300000.00, 500000.00, 5.00, 5.00, 0.00, 'Active'),
(3, 1, 3, 6, 12, 24, 50, 100000.00, 500000.00, 8.00, 6.00, 0.00, 'Active'),
(4, 2, 4, 2, 7, 30, 45, 167000.00, 450000.00, 4.00, 7.00, 0.00, 'Active'),
(5, 2, 5, 5, 9, 28, 46, 400000.00, 769000.00, 6.00, 7.00, 0.00, 'Active'),
(9, 1, 1, 10, 25, 20, 40, 1000.00, 2000.00, 2.00, 0.00, 0.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_scheme`
--

CREATE TABLE `insurance_scheme` (
  `insurance_scheme_id` int(10) NOT NULL,
  `insurance_scheme` varchar(50) NOT NULL,
  `agent_commission` float(10,2) NOT NULL,
  `agent_commission2` float(10,2) NOT NULL,
  `insurance_type_id` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_scheme`
--

INSERT INTO `insurance_scheme` (`insurance_scheme_id`, `insurance_scheme`, `agent_commission`, `agent_commission2`, `insurance_type_id`, `note`, `img`, `status`) VALUES
(1, 'Cancer Protection Plan', 15.00, 7.00, '1', '<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Comprehensive Plan :</strong> A Comprehensive cancer insurance plan covering all stages of cancer.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Lump Sum Payout/s :</strong> Lump sum Payouts to cover medical expenses across all stages.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Waiver of all Future Premiums :</strong> Waiver of premium for entire policy term in case diagnosed with Carcinoma in Situ (CiS) or Early Stage Cancer.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Income Benefit :</strong> Income benefit for 5 years in case diagnosed with Major Stage Cancer along with lump sumIndexation of Sum Insured : Sum Insured to increase by 10% (simple rate) for every claim free year upto a maximum of 150% of base Sum Insured</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Stages of Cancer covered&nbsp;:</span></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Stages&nbsp; Benefits</strong></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong><em>Carcinoma in Situ (Pre Cancer)&nbsp;</em></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp;&nbsp;&nbsp; &bull; Lump sum Benefit - 20% of Indexed Sum Insured </span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp; &bull; Waiver of all future premiums </span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp; &bull; Up to 5 Carcinoma in Situ claims payable for cancer of different organs.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Early Stage Cancer&nbsp;&nbsp;&nbsp;</strong></em>&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Lump sum Benefit -20% of Indexed Sum Insured </span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Waiver of all future premiums </span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Up to 5 Early Stage claims payable for cancer of different organs.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Major Stage Cancer&nbsp;&nbsp;</strong></em>&nbsp; </span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Lump sum Benefit -100% of indexed Sum Insured less CiS/Early Stage claim paid</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Income Benefit - 10% of Sum Insured Payable as income for 5 years</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Income Payment irrespective of death or policy term</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp; &nbsp;&bull; Policy Terminates</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Documents Required:</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Aadhar card, Voter-ID,Health Certificates</span></strong></p>', '32744cancer-plan-banner.png', 'Active'),
(2, 'Super Term Plan', 15.00, 7.00, '1', '<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><em><strong>Option To Cope Up With Rising Inflation:</strong></em> Max Life Super Term Plan offers a unique Sum Assured option, where the Sum Assured increases by 5% every year at simple rate till the end of the Policy Term without any increase in the Premium. This helps your Life Insurance Plan cope with the rising inflation and in line with your upgrading life style.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\"><em><strong>Flexibility To Choose The Benefit Payout:</strong></em> On death of the Life Insured, the nominee can choose the Settlement Option:</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt; padding-left: 30px;\"><strong> Option 1:</strong> He / she will have an option to receive the entire Death Benefit as lump sum.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt; padding-left: 30px;\"><strong> Option 2:</strong> Receive 50% of Guaranteed Death Benefit as lump sum and 0.42% of Guaranteed Death Benefit as monthly income for 10 years increasing at 8.50% p.a. (simple rate) every year starting from the policy anniversary following the date of death.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\"><em><strong>Flexibility To Choose Between Policy Terms:</strong></em> Choose Policy Terms from a minimum of 10 years to maximum of 35 years.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\"><em><strong>Comprehensive Insurance Cover At Affordable Rates:</strong></em> Max Life Super Term Plan offers comprehensive insurance cover at affordable rates to take care of your loved ones in case you are not around</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\">&nbsp;</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\"><strong>Documents Required:</strong></p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36pt;\"><strong>Aadhar card, Pan card, Income Certificate</strong></p>', '24308super-term-plan (1).jpg ', 'Active'),
(3, 'Premium Return Protection', 15.00, 7.00, '1', '<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><em><strong>Comprehensive protection with in - built accidental death benefit:</strong> </em>Base Policy Sum Assured is paid in case of Death. In case of Death by accident, the nominee gets an additional 50% of the Base Policy Sum Assured.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><em><strong> Return of premiums on survival at maturity:</strong></em> Guaranteed return of all premiums paid (including extra premiums), in case of your survival till maturity.</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><em><strong>Flexibility to choose the period of protection by paying for a limited period:</strong> </em>Pay premiums for a limited period of 11 years. The plan offers you the flexibility to choose the Policy Term between 20 / 25 / 30 years (period of protection).</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\">&nbsp;</p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><strong>Documents Required:</strong></p>\r\n<p style=\"margin: 0cm 0cm 7.5pt 36.0pt;\"><strong>Aadhar card, Voter-Id, Income Certificate, Pan card.</strong></p>', '31331premium-return-protection-plan-banner.jpg ', 'Active'),
(4, 'Future Genius Education Plan', 15.00, 7.00, '2', '<p class=\"MsoListParagraphCxSpFirst\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Complete financial security through immediate payout/s &amp; future moneybacks -</strong> </span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Death Benefit:</strong></em></span><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choice of Lump sum payable immediately or monthly income for 135 months (starting from the month following the death of Life Insured) to nominee.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Policy Continuance Benefit:</strong></em></span><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Waiver of all future premiums ensuring that your dream for your child&rsquo;s future education is taken care of, even in your absence. Moneyback and Maturity Benefits are paid to your beneficiary as and when due.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Living Benefit to ensure your child&rsquo;s dreams turn to reality -</strong></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp;</span><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Guaranteed Moneybacks during your child&rsquo;s graduation years:</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">4 guaranteed moneybacks payable annually in the last 4 policy years for your child&rsquo;s college education expenses. Each moneyback is equivalent to 25% of the Sum Assured.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Lump sum Maturity Benefit to support your child&rsquo;s future endeavors</strong></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">The Accrued Paid Up Additions (if any) and Terminal Bonus (if any) are payable at the end of Policy Term to provide for a seed capital or to ensure financial planning for higher studies.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Flexibility to customize the plan as per your needs -</strong></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">At the time of Purchase</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choose any policy term from 13 years to 21 years basis your child&rsquo;s graduation needs.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">You also have an option of two premium payment terms to choose from: 8 years fixed premium payment termPolicy Term less three (3) years</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>At the time of Moneyback</strong></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">You don&rsquo;t know today what career your child will pursue in the future. This unique feature gives you the flexibility to defer or discount your moneybacks and take them during the last three (3) policy years as per your needs thus ensuring that you are not constrained by the choice that you have made years ago. Hence, customize the timing of your moneybacks according to your child&rsquo;s graduation needs at the time of receiving the 1st moneyback.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Enhanced protection through Riders -</strong> </span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Option to choose from 3 riders to increase your protection cover against death, disease or disability.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><strong><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Documents Required:</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><strong><span style=\"mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Aadhar card, Voter-ID, Birth certificate, Income certificate.</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\">&nbsp;</p>', '6800p15.jpg ', 'Active'),
(5, 'Shiksha Plus Super', 15.00, 7.00, '2', '<p class=\"MsoListParagraphCxSpFirst\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Comprehensive Protection For Your Child\'s Future:</strong></em> The Child plan offers comprehensive Life Insurance coverage including Family Income Benefit and Funding of Future Premiums in case of Death of the Life Insured to ensure that your dreams for your child remain intact</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Choose Your Policy Term Basis Your Need:</strong> </em>You have the option to choose Policy Term basis your need i.e. 10 years or any term between 15 to 25 years. The Premium Payment Term is same as the Policy Term except for a 10 year Policy Term where the Premium Payment Term is 5 years Safeguarding Your Fund Against Market Volatility With Systematic Transfer Plan And Dynamic</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp;<em><strong>Fund Allocation:</strong> </em>Choose from the two investment strategies to protect your Fund against market volatilities Increase Your Fund With Guaranteed Loyalty</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoListParagraphCxSpLast\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&nbsp;<em><strong>Additions:</strong></em> Additional Units will be added to your Fund every year starting from the end of 11th policy year</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\">&nbsp;</p>\r\n<p class=\"MsoListParagraphCxSpLast\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Dcouments Required:</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpLast\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Aadhar card, Birth certificate, Income Certificate.</span></strong></p>', '25703shiksha-plus-super.jpg ', 'Active'),
(9, 'Monthly Income Advantage Plan', 15.00, 7.00, '4', '<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Guaranteed Monthly Income -</strong> </em>Get guaranteed monthly income for 10 years immediately after completion of Premium Payment Term.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Lump Sum Benefit on Maturity -</strong> </em>Enjoy accrued bonuses along with Terminal Bonus on maturity of the policy.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><strong>Policy Continuance Benefit - In case of an eventuality -</strong></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Get lump sum benefit immediately on death to ensure financial security of your loved ones.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">The Company also waives off all future premiums payable by you to ensure that all benefits i.e. Guaranteed Monthly Income Benefit &amp; Maturity Benefit are paid to your beneficiary as and when due, thus, ensuring that your dreams for your family are taken care of even in your absence.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\"><em><strong>Comprehensive Protection through Riders -</strong> </em>Avail the option of enhancing your risk coverage through the available riders.</span></p>', '19009monthly- income-advantage-plan-banner.jpg', 'Active'),
(10, 'Life Guaranteed Income Plan', 15.00, 7.00, '4', '<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Guaranteed Tax Free Monthly Income -</span></em></strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&nbsp;</span></em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Get guaranteed tax free monthly income for 10 years (Payout Period) along with one - time guaranteed tax free Terminal Benefit at the end of the Payout Period</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Guaranteed Income That Doubles After 5 Years -</span></em></strong><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&nbsp;Guaranteed tax free monthly income offered in first five years of the Payout &nbsp;Period is doubled in the remaining five years</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Immediate Payout After Policy Term -</span></em></strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&nbsp;</span></em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Start enjoying monthly Income Benefit immediately after the Policy Term (starting next year after all Premiums have been paid)</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Guaranteed Protection With Choice Of Payout Options On Death -</span></em></strong><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&nbsp;The plan offers you life cover for the entire Policy Term by providing guaranteed Death Benefit. On death during the Policy Term, the nominee will have an option to select either a) Lump sum Death Benefit or b) Income for 10 years post death</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><span style=\"font-size: 10pt; font-family: Verdana, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Flexibility To Get Monthly Income As Lump Sum -</span></em></strong><em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&nbsp;</span></em><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">The Saving Plan offers you the Commutation Option wherein you can receive the present value of the Survival and Death Benefit respectively instead of the monthly payouts. This option can be availed anytime once the monthly incomes have been started</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><span style=\"font-size: 10pt; font-family: Verdana, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Documents Required:</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 54.0pt; line-height: normal;\"><strong><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Aadhar card, Income certificate, Voter-Id</span></strong></p>', '9041guaranteed lifetime income plan.jpg', 'Active'),
(11, 'Whole Life Super', 15.00, 7.00, '4', '<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Protection Till Age 100 Years:</span></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">The plan offers you guaranteed protection which continues to grow through bonuses* till age 100 years</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Flexible Premium Payment Terms:</span></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choose between 10 / 15 / 20 years Premium Payment Term options as per your convenience</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Lump Sum Payout at Age 100:</span></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Maturity Benefit of 100% of Guaranteed Maturity Sum Assured along with Accrued Paid - Up Additions (if any) and Terminal Bonus (if any) at age 100 which acts as a legacy for your family</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Flexible Bonus Options </span></strong></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Flexibility to choose your Bonus Options as per your need:</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><em>Paid In Cash:</em></strong> Bonus declared will be paid to you in cash</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><em>Premium Offset:</em></strong> Bonus declared will be used to offset the future premiums</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><em>Paid -</em></strong> Up Additions: Bonus will be used to purchase additional Sum Assured which increases the benefits under the policy</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Flexibility to Withdraw Money to Meet Any of Your Life&rsquo;s Milestones</span></p>', '7204whole_life_savings.jpg', 'Active'),
(12, 'Fast Track Super Plan', 15.00, 7.00, '5', '<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Growth For Your Fund:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">This plan offers you an opportunity to grow your Fund to meet your goals.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Options Of Premium Payment Term And Policy Term To Cater To Your Need: </span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choose Single Pay or 5 Pay for 10 years Policy Term or Regular Pay for 20 years Policy Term as per your need.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Financial Security For Your Family:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">The plan offers a Maturity Value equal to Fund Value, Death Benefit equal to higher of (Fund Value, Sum Assured, 105% of all Premiums Paid) and also provides Partial Withdrawal Flexibility.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Investment Flexibility To Choose From 5 Fund Options:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">The plan offers you 5 Fund Options that you can choose from, basis your risk appetite.</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Safeguarding Your Fund Against Market Volatilities With Systematic Transfer Plan And Dynamic Fund Allocation:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choose from the two investment strategies to protect your Fund against market volatilities.</span></p>', '32083fast_track_super_banner.jpg', 'Active'),
(13, 'Platinum Wealth Plan', 15.00, 7.00, '5', '<p class=\"MsoListParagraph\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Comprehensive Life insurance coverage for you:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Get a life insurance cover of 10 times the Annualised Premium (for Limited and Regular Pay options) from base policy. You can also opt for an additional life cover, with Max Life Partner Care Rider.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Option to choose Premium Payment Term and Policy Term as per your convenience:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Pay premiums for a limited period (one year or five years) or entire Policy Term; with Policy Term options available from 10 years to 20 years (For Single Pay policies only 10 year Policy Term is available).</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Your Choice of Funds &amp; Investment Strategies:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Choice of 5 (five) Funds for investors with different risk appetites. Alternatively you may select one of two fund strategies of Systematic Transfer Plan and Dynamic Fund Allocation, to protect your investments against market volatilities</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Guaranteed Loyalty Additions and Guaranteed Wealth Boosters for you:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Enjoy Guaranteed Loyalty Additions and Guaranteed Wealth Boosters to further enhance your Policy Fund Value.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 54.0pt;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">Low charges to boost your returns:</span></em></strong><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\';\">This product offers zero policy administration charge post 5 policy years (other charges may apply).</span></p>', '27843platinum-wealth-plan-banner.jpg', 'Active'),
(14, 'Group Credit Life Premerier Plan', 15.00, 7.00, '6', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #2f2f2f;\">Max Life Group Gratuity Premier Plan facilitates the employers to fund their gratuity liability in the most effective manner. This plan helps the employer in the following ways:</span></p>\r\n<ul style=\"margin-top: 0cm;\" type=\"disc\">\r\n<li class=\"MsoNormal\" style=\"color: #313131; margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">The gratuity fund is built up systematically to meet the future gratuity payments</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #313131; margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">The fund will earn returns as per the performance of the funds opted by you. Better fund performance will increase returns and reduce cost to the employer</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #313131; margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Assistance in the formalities required for the formation of the trust and approval of the fund.</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #313131; margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Assistance in the administration of the scheme.</span>Fixed Cover of&nbsp;Rs.&nbsp;1,000 per eligible member</li>\r\n</ul>', '31829group credit life.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_type`
--

CREATE TABLE `insurance_type` (
  `insurance_type_id` int(10) NOT NULL,
  `insurance_type` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_type`
--

INSERT INTO `insurance_type` (`insurance_type_id`, `insurance_type`, `img`, `status`) VALUES
(1, 'PROTECTION PLANS', '', 'Active'),
(2, 'CHILD PLANS', '', 'Active'),
(4, 'SAVINGS PLAN', '', 'Active'),
(5, 'GROWTH PLANS', '', 'Active'),
(6, 'GROUP PLANS', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `motor_vehicle_application`
--

CREATE TABLE `motor_vehicle_application` (
  `policyfname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `HomeAddress` varchar(100) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `period` int(100) NOT NULL,
  `nida` int(100) NOT NULL,
  `fav_language` varchar(300) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `regno` int(100) NOT NULL,
  `chasis` int(100) NOT NULL,
  `engno` int(100) NOT NULL,
  `manf` varchar(100) NOT NULL,
  `est` varchar(100) NOT NULL,
  `make` varchar(100) NOT NULL,
  `cubic` int(100) NOT NULL,
  `capacity` int(25) NOT NULL,
  `dpurchase` int(100) NOT NULL,
  `paymode` varchar(25) NOT NULL,
  `Amount` double NOT NULL,
  `vehicle1` varchar(345) NOT NULL,
  `datecompl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policy_payment`
--

CREATE TABLE `policy_payment` (
  `policy_payment_id` int(10) NOT NULL,
  `insurance_account_id` int(10) NOT NULL,
  `paid_amt` float(10,2) NOT NULL,
  `penalty_amt` float(10,2) NOT NULL,
  `tax_amt` float(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `trans_type` varchar(25) NOT NULL,
  `card_holder` text NOT NULL,
  `card_no` varchar(30) NOT NULL,
  `exp_date` date NOT NULL,
  `particulars` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policy_withdrawal`
--

CREATE TABLE `policy_withdrawal` (
  `claim_id` int(10) NOT NULL,
  `insurance_account_id` int(10) NOT NULL,
  `claim_type` varchar(15) NOT NULL COMMENT 'exit policy or Full year',
  `claim_amt` float(10,2) NOT NULL,
  `claim_date` date NOT NULL,
  `bank_name` varchar(25) NOT NULL,
  `bank_ac_no` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `branch_code` varchar(15) NOT NULL,
  `particulars` text NOT NULL,
  `claim_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(10) NOT NULL,
  `claim_deducation` float(10,2) NOT NULL,
  `penalty_amt` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `claim_deducation`, `penalty_amt`) VALUES
(1, 22.00, 4.00);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(10) NOT NULL,
  `tax_perc` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_perc`) VALUES
(1, 8.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `commission_master`
--
ALTER TABLE `commission_master`
  ADD PRIMARY KEY (`commission_master_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_document`
--
ALTER TABLE `customer_document`
  ADD PRIMARY KEY (`cust_doc_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `insurance_account`
--
ALTER TABLE `insurance_account`
  ADD PRIMARY KEY (`insurance_account_id`);

--
-- Indexes for table `insurance_plan`
--
ALTER TABLE `insurance_plan`
  ADD PRIMARY KEY (`insurance_plan_id`);

--
-- Indexes for table `insurance_scheme`
--
ALTER TABLE `insurance_scheme`
  ADD PRIMARY KEY (`insurance_scheme_id`);

--
-- Indexes for table `insurance_type`
--
ALTER TABLE `insurance_type`
  ADD PRIMARY KEY (`insurance_type_id`);

--
-- Indexes for table `policy_payment`
--
ALTER TABLE `policy_payment`
  ADD PRIMARY KEY (`policy_payment_id`);

--
-- Indexes for table `policy_withdrawal`
--
ALTER TABLE `policy_withdrawal`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `commission_master`
--
ALTER TABLE `commission_master`
  MODIFY `commission_master_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customer_document`
--
ALTER TABLE `customer_document`
  MODIFY `cust_doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_account`
--
ALTER TABLE `insurance_account`
  MODIFY `insurance_account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `insurance_plan`
--
ALTER TABLE `insurance_plan`
  MODIFY `insurance_plan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insurance_scheme`
--
ALTER TABLE `insurance_scheme`
  MODIFY `insurance_scheme_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `insurance_type`
--
ALTER TABLE `insurance_type`
  MODIFY `insurance_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `policy_payment`
--
ALTER TABLE `policy_payment`
  MODIFY `policy_payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `policy_withdrawal`
--
ALTER TABLE `policy_withdrawal`
  MODIFY `claim_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
