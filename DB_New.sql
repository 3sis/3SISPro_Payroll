-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2022 at 07:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t05901l01`
--

CREATE TABLE `t05901l01` (
  `GMCOHUniqueId` bigint(20) NOT NULL,
  `GMCOHCompanyId` varchar(10) NOT NULL,
  `GMCOHDesc1` varchar(100) NOT NULL,
  `GMCOHDesc2` varchar(200) DEFAULT NULL,
  `GMCOHNickName` varchar(50) DEFAULT NULL,
  `GMCOHTagLine` varchar(100) DEFAULT NULL,
  `GMCOHCurrenyId` varchar(10) DEFAULT NULL,
  `GMCOHAddress1` varchar(200) DEFAULT NULL,
  `GMCOHAddress2` varchar(200) DEFAULT NULL,
  `GMCOHAddress3` varchar(200) DEFAULT NULL,
  `GMCOHCityId` varchar(10) DEFAULT NULL,
  `GMCOHStateId` varchar(10) DEFAULT NULL,
  `GMCOHCountryId` varchar(10) DEFAULT NULL,
  `GMCOHPinCode` varchar(50) DEFAULT NULL,
  `GMCOHLandLine` varchar(50) DEFAULT NULL,
  `GMCOHMobileNo` varchar(50) DEFAULT NULL,
  `GMCOHEmail` varchar(100) DEFAULT NULL,
  `GMCOHWebsite` varchar(100) DEFAULT NULL,
  `GMCOHCINNo` varchar(100) DEFAULT NULL,
  `GMCOHPANNo` varchar(100) DEFAULT NULL,
  `GMCOHGSTNo` varchar(100) DEFAULT NULL,
  `GMCOHPFNo` varchar(100) DEFAULT NULL,
  `GMCOHPTNo` varchar(100) DEFAULT NULL,
  `GMCOHLWFNo` varchar(100) DEFAULT NULL,
  `GMCOHESICNo` varchar(100) DEFAULT NULL,
  `GMCOHTANNo` varchar(100) DEFAULT NULL,
  `GMCOHVATNo` varchar(100) DEFAULT NULL,
  `GMCOHESTNo` varchar(100) DEFAULT NULL,
  `GMCOHESTDate` datetime DEFAULT current_timestamp(),
  `GMCOHBankId1` varchar(10) DEFAULT NULL,
  `GMCOHBranchId1` varchar(10) DEFAULT NULL,
  `GMCOHIFSId1` varchar(100) DEFAULT NULL,
  `GMCOHBankAccNo1` varchar(100) DEFAULT NULL,
  `GMCOHBankAcName1` varchar(100) DEFAULT NULL,
  `GMCOHBankId2` varchar(10) DEFAULT NULL,
  `GMCOHBranchId2` varchar(10) DEFAULT NULL,
  `GMCOHIFSId2` varchar(100) DEFAULT NULL,
  `GMCOHBankAccNo2` varchar(100) DEFAULT NULL,
  `GMCOHBankAcName2` varchar(100) DEFAULT NULL,
  `GMCOHField1` varchar(100) DEFAULT NULL,
  `GMCOHField2` varchar(100) DEFAULT NULL,
  `GMCOHField3` varchar(100) DEFAULT NULL,
  `GMCOHField4` varchar(100) DEFAULT NULL,
  `GMCOHField5` varchar(100) DEFAULT NULL,
  `GMCOHBiDesc` varchar(100) DEFAULT NULL,
  `GMCOHDecimalPositionQty` int(11) DEFAULT 0,
  `GMCOHDecimalPositionValue` int(11) DEFAULT 0,
  `GMCOHFolderName` varchar(200) DEFAULT 'No Folder',
  `GMCOHImageFileName` varchar(500) DEFAULT 'No Image File',
  `GMCOHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMCOHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMCOHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCOHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCOHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l01`
--

INSERT INTO `t05901l01` (`GMCOHUniqueId`, `GMCOHCompanyId`, `GMCOHDesc1`, `GMCOHDesc2`, `GMCOHNickName`, `GMCOHTagLine`, `GMCOHCurrenyId`, `GMCOHAddress1`, `GMCOHAddress2`, `GMCOHAddress3`, `GMCOHCityId`, `GMCOHStateId`, `GMCOHCountryId`, `GMCOHPinCode`, `GMCOHLandLine`, `GMCOHMobileNo`, `GMCOHEmail`, `GMCOHWebsite`, `GMCOHCINNo`, `GMCOHPANNo`, `GMCOHGSTNo`, `GMCOHPFNo`, `GMCOHPTNo`, `GMCOHLWFNo`, `GMCOHESICNo`, `GMCOHTANNo`, `GMCOHVATNo`, `GMCOHESTNo`, `GMCOHESTDate`, `GMCOHBankId1`, `GMCOHBranchId1`, `GMCOHIFSId1`, `GMCOHBankAccNo1`, `GMCOHBankAcName1`, `GMCOHBankId2`, `GMCOHBranchId2`, `GMCOHIFSId2`, `GMCOHBankAccNo2`, `GMCOHBankAcName2`, `GMCOHField1`, `GMCOHField2`, `GMCOHField3`, `GMCOHField4`, `GMCOHField5`, `GMCOHBiDesc`, `GMCOHDecimalPositionQty`, `GMCOHDecimalPositionValue`, `GMCOHFolderName`, `GMCOHImageFileName`, `GMCOHMarkForDeletion`, `GMCOHUser`, `GMCOHLastCreated`, `GMCOHLastUpdated`, `GMCOHDeletedAt`) VALUES
(4, '1000', '3S Innovative Solutions Pvt. Ltd.', '3SIS', '3SIS', 'Journey Towards Excellence', 'INR', NULL, NULL, NULL, '10', 'MH', 'IN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-02 00:00:00', '1000', '1000', '1234567890', NULL, NULL, '1200', '1100', '98765432109876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3SIS', 0, 2, NULL, NULL, 0, '3SIS', '2021-12-01 09:05:11', '2021-12-01 09:40:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05901l03`
--

CREATE TABLE `t05901l03` (
  `GMCMHUniqueId` bigint(20) NOT NULL,
  `GMCMHCountryId` varchar(10) NOT NULL,
  `GMCMHDesc1` varchar(100) NOT NULL,
  `GMCMHDesc2` varchar(200) DEFAULT NULL,
  `GMCMHBiDesc` varchar(100) DEFAULT NULL,
  `GMCMHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMCMHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMCMHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCMHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCMHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l03`
--

INSERT INTO `t05901l03` (`GMCMHUniqueId`, `GMCMHCountryId`, `GMCMHDesc1`, `GMCMHDesc2`, `GMCMHBiDesc`, `GMCMHMarkForDeletion`, `GMCMHUser`, `GMCMHLastCreated`, `GMCMHLastUpdated`, `GMCMHDeletedAt`) VALUES
(5, 'IN', 'India', 'IN', 'IN', 0, '3SIS', '2021-10-31 09:10:04', '2021-11-01 07:11:21', NULL),
(7, 'USA', 'United State of America', 'US', 'USA', 0, '3SIS', '2021-11-01 20:21:09', '2021-11-23 06:45:02', NULL),
(8, 'SG', 'Singapore', 'SG', 'SG', 0, '3SIS', '2021-11-01 20:22:49', '2021-11-01 20:22:49', NULL),
(9, 'aaa', 'aaa', 'aaa', 'aaa', 1, '3SIS', '2021-11-23 06:45:30', '2021-11-23 06:45:30', '2021-11-23 06:45:38'),
(10, 'MY', 'Mala', NULL, NULL, 0, '3SIS', '2021-12-01 05:59:18', '2022-02-09 14:20:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05901l04`
--

CREATE TABLE `t05901l04` (
  `GMSMHUniqueId` bigint(20) NOT NULL,
  `GMSMHStateId` varchar(10) NOT NULL,
  `GMSMHCountryId` varchar(10) NOT NULL,
  `GMSMHDesc1` varchar(100) NOT NULL,
  `GMSMHDesc2` varchar(200) DEFAULT NULL,
  `GMSMHBiDesc` varchar(100) DEFAULT NULL,
  `GMSMHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMSMHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMSMHLastCreated` datetime NOT NULL,
  `GMSMHLastUpdated` datetime NOT NULL,
  `GMSMHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l04`
--

INSERT INTO `t05901l04` (`GMSMHUniqueId`, `GMSMHStateId`, `GMSMHCountryId`, `GMSMHDesc1`, `GMSMHDesc2`, `GMSMHBiDesc`, `GMSMHMarkForDeletion`, `GMSMHUser`, `GMSMHLastCreated`, `GMSMHLastUpdated`, `GMSMHDeletedAt`) VALUES
(1, 'MH', 'IN', 'Maharastra', 'Maharastra', 'Maharastra', 0, '3SIS', '2021-10-10 07:40:17', '2022-06-06 08:58:16', NULL),
(2, 'BR', 'IN', 'Bihar', 'Bihar', 'Bihar', 0, '3SIS', '2021-10-10 07:41:12', '2021-10-10 07:41:12', NULL),
(3, 'MH1', 'SG', 'MH111', 'mh2222', 'mh333', 1, '3SIS', '2021-11-17 15:23:38', '2021-11-17 15:25:13', '2021-11-23 04:49:18'),
(4, 'aaa', 'USA', 'aaaab', 'aaaaab', 'aaaaaab', 1, '3SIS', '2021-11-19 07:30:20', '2021-11-19 08:58:07', '2021-11-23 04:48:54'),
(5, 'AP', 'IN', 'Andhra', 'a', 'a', 0, '3SIS', '2021-11-23 05:45:58', '2021-11-23 05:45:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05901l05`
--

CREATE TABLE `t05901l05` (
  `GMCTHUniqueId` bigint(20) NOT NULL,
  `GMCTHCityId` varchar(10) NOT NULL,
  `GMCTHStateId` varchar(10) DEFAULT NULL,
  `GMCTHCountryId` varchar(10) DEFAULT NULL,
  `GMCTHDesc1` varchar(100) NOT NULL,
  `GMCTHDesc2` varchar(200) DEFAULT NULL,
  `GMCTHBiDesc` varchar(100) DEFAULT NULL,
  `GMCTHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMCTHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMCTHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCTHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCTHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l05`
--

INSERT INTO `t05901l05` (`GMCTHUniqueId`, `GMCTHCityId`, `GMCTHStateId`, `GMCTHCountryId`, `GMCTHDesc1`, `GMCTHDesc2`, `GMCTHBiDesc`, `GMCTHMarkForDeletion`, `GMCTHUser`, `GMCTHLastCreated`, `GMCTHLastUpdated`, `GMCTHDeletedAt`) VALUES
(1, '10', 'MH', 'IN', 'Pune', 'Pune', 'PUne', 0, '3SIS', '2021-11-22 10:37:35', '2021-11-22 06:06:59', NULL),
(2, '20', 'MH', 'India', 'Mumbaiaaa', 'Mumbaibbb', 'MHccc', 0, '3SIS', '2021-11-22 16:55:08', '2022-06-06 08:58:42', NULL),
(3, '30', 'MH', 'IN', 'Nashik', 'Nashik1', 'Nashik2', 1, '3SIS', '2021-11-22 17:22:06', '2021-11-22 17:22:06', '2021-11-23 04:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `t05901l06`
--

CREATE TABLE `t05901l06` (
  `GMLMHUniqueId` bigint(20) NOT NULL,
  `GMLMHCompanyId` varchar(10) NOT NULL,
  `GMLMHLocationId` varchar(10) NOT NULL,
  `GMLMHCityId` varchar(10) DEFAULT NULL,
  `GMLMHStateId` varchar(10) DEFAULT NULL,
  `GMLMHCountryId` varchar(10) DEFAULT NULL,
  `GMLMHDesc1` varchar(100) NOT NULL,
  `GMLMHDesc2` varchar(200) DEFAULT NULL,
  `GMLMHBiDesc` varchar(100) DEFAULT NULL,
  `GMLMHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMLMHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMLMHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMLMHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMLMHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l06`
--

INSERT INTO `t05901l06` (`GMLMHUniqueId`, `GMLMHCompanyId`, `GMLMHLocationId`, `GMLMHCityId`, `GMLMHStateId`, `GMLMHCountryId`, `GMLMHDesc1`, `GMLMHDesc2`, `GMLMHBiDesc`, `GMLMHMarkForDeletion`, `GMLMHUser`, `GMLMHLastCreated`, `GMLMHLastUpdated`, `GMLMHDeletedAt`) VALUES
(1, '1000', '10', '10', 'MH', 'IN', 'Hadapsar', 'Hadapsar Branch', 'Hadapsar Branch', 0, '3SIS', '2021-11-22 14:21:02', '2022-02-09 14:29:59', NULL),
(2, '1000', '20', '20', 'MH', 'IN', 'Pune Camp', 'PC', 'PC', 0, '3SIS', '2021-11-23 05:53:14', '2021-11-23 05:53:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05901l07`
--

CREATE TABLE `t05901l07` (
  `GMCRHUniqueId` bigint(20) NOT NULL,
  `GMCRHCurrencyId` varchar(10) NOT NULL,
  `GMCRHDesc1` varchar(100) NOT NULL,
  `GMCRHDesc2` varchar(200) DEFAULT NULL,
  `GMCRHBiDesc` varchar(100) DEFAULT NULL,
  `GMCRHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `GMCRHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `GMCRHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCRHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `GMCRHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05901l07`
--

INSERT INTO `t05901l07` (`GMCRHUniqueId`, `GMCRHCurrencyId`, `GMCRHDesc1`, `GMCRHDesc2`, `GMCRHBiDesc`, `GMCRHMarkForDeletion`, `GMCRHUser`, `GMCRHLastCreated`, `GMCRHLastUpdated`, `GMCRHDeletedAt`) VALUES
(1, 'INR', 'Indian Rupee', 'Indian Rupee', 'INR', 0, '3SIS', '2021-11-30 14:45:50', '2021-12-01 11:02:23', NULL),
(2, 'USD', 'US Dollars', 'US Dollars', 'USD', 0, '3SIS', '2021-11-30 14:45:50', '2021-11-30 14:45:50', NULL),
(3, 'SGD', 'Singapore Dollars', 'SGD', 'SGD', 0, '3SIS', '2021-12-01 11:04:02', '2021-12-01 11:04:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05902l01`
--

CREATE TABLE `t05902l01` (
  `BMBNHUniqueId` bigint(20) NOT NULL,
  `BMBNHBankId` varchar(10) NOT NULL,
  `BMBNHDesc1` varchar(100) NOT NULL,
  `BMBNHDesc2` varchar(200) DEFAULT NULL,
  `BMBNHBiDesc` varchar(100) DEFAULT NULL,
  `BMBNHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `BMBNHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `BMBNHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMBNHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMBNHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05902l01`
--

INSERT INTO `t05902l01` (`BMBNHUniqueId`, `BMBNHBankId`, `BMBNHDesc1`, `BMBNHDesc2`, `BMBNHBiDesc`, `BMBNHMarkForDeletion`, `BMBNHUser`, `BMBNHLastCreated`, `BMBNHLastUpdated`, `BMBNHDeletedAt`) VALUES
(1, '1000', 'BOM', 'BOM', 'BOM', 0, '3SIS', '2021-11-22 10:49:47', '2021-11-22 10:49:47', NULL),
(2, '1100', 'SBI1', 'SBI1', 'SBI1', 0, '3SIS', '2021-11-22 10:50:03', '2021-11-22 10:50:36', NULL),
(3, '1200', 'Bank of India', 'BOI', 'BOI', 0, '3SIS', '2021-11-30 08:01:31', '2021-11-30 08:01:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05902l02`
--

CREATE TABLE `t05902l02` (
  `BMBRHUniqueId` bigint(20) NOT NULL,
  `BMBRHBranchId` varchar(10) NOT NULL,
  `BMBRHBankId` varchar(10) DEFAULT NULL,
  `BMBRHIFSCId` varchar(100) DEFAULT NULL,
  `BMBRHDesc1` varchar(100) NOT NULL,
  `BMBRHDesc2` varchar(200) DEFAULT NULL,
  `BMBRHBiDesc` varchar(100) DEFAULT NULL,
  `BMBRHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `BMBRHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `BMBRHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMBRHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMBRHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05902l02`
--

INSERT INTO `t05902l02` (`BMBRHUniqueId`, `BMBRHBranchId`, `BMBRHBankId`, `BMBRHIFSCId`, `BMBRHDesc1`, `BMBRHDesc2`, `BMBRHBiDesc`, `BMBRHMarkForDeletion`, `BMBRHUser`, `BMBRHLastCreated`, `BMBRHLastUpdated`, `BMBRHDeletedAt`) VALUES
(1, '1000', '1000', '1234567890', 'BOM Branch', 'BOM Branch', NULL, 0, '3SIS', '2021-11-22 10:52:26', '2021-11-30 16:06:15', NULL),
(2, '1100', '1200', '98765432109876543210', 'Bank of India Branch', 'BOI Branch', 'BOI', 0, '3SIS', '2021-11-30 16:07:10', '2021-11-30 16:07:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05902l03`
--

CREATE TABLE `t05902l03` (
  `BMATHUniqueId` bigint(20) NOT NULL,
  `BMATHAcctId` varchar(10) NOT NULL,
  `BMATHDesc1` varchar(100) NOT NULL,
  `BMATHDesc2` varchar(200) DEFAULT NULL,
  `BMATHBiDesc` varchar(100) DEFAULT NULL,
  `BMATHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `BMATHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `BMATHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMATHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMATHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05902l03`
--

INSERT INTO `t05902l03` (`BMATHUniqueId`, `BMATHAcctId`, `BMATHDesc1`, `BMATHDesc2`, `BMATHBiDesc`, `BMATHMarkForDeletion`, `BMATHUser`, `BMATHLastCreated`, `BMATHLastUpdated`, `BMATHDeletedAt`) VALUES
(1, '1000', 'Saving Account', 'Sava', 'SavA', 0, '3SIS', '2021-11-22 10:51:47', '2022-02-09 14:18:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t05902l04`
--

CREATE TABLE `t05902l04` (
  `BMPMHUniqueId` bigint(20) NOT NULL,
  `BMPMHPaymentModeId` varchar(10) NOT NULL,
  `BMPMHDesc1` varchar(100) NOT NULL,
  `BMPMHDesc2` varchar(200) DEFAULT NULL,
  `BMPMHBiDesc` varchar(100) DEFAULT NULL,
  `BMPMHMarkForDeletion` tinyint(1) NOT NULL DEFAULT 0,
  `BMPMHUser` varchar(50) NOT NULL DEFAULT '3SIS',
  `BMPMHLastCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMPMHLastUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `BMPMHDeletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t05902l04`
--

INSERT INTO `t05902l04` (`BMPMHUniqueId`, `BMPMHPaymentModeId`, `BMPMHDesc1`, `BMPMHDesc2`, `BMPMHBiDesc`, `BMPMHMarkForDeletion`, `BMPMHUser`, `BMPMHLastCreated`, `BMPMHLastUpdated`, `BMPMHDeletedAt`) VALUES
(1, '1000', 'NEFT', 'NEFT', NULL, 0, '3SIS', '2021-11-22 10:52:59', '2021-11-28 08:58:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t92`
--

CREATE TABLE `t92` (
  `id` int(11) NOT NULL,
  `MNCompId` varchar(5) NOT NULL,
  `MNSystemId` int(11) NOT NULL,
  `MNRootCode` int(11) NOT NULL,
  `MNParentCode` decimal(10,2) NOT NULL,
  `MNChildCode` decimal(10,2) NOT NULL,
  `MNMenuTitle` varchar(100) NOT NULL,
  `MNFastPath` varchar(100) NOT NULL,
  `MNRoute` varchar(100) NOT NULL,
  `MNFormHeadeding` varchar(100) NOT NULL,
  `MNDesc1` varchar(100) NOT NULL,
  `MNDesc2` varchar(100) NOT NULL,
  `MNDesc3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t92`
--

INSERT INTO `t92` (`id`, `MNCompId`, `MNSystemId`, `MNRootCode`, `MNParentCode`, `MNChildCode`, `MNMenuTitle`, `MNFastPath`, `MNRoute`, `MNFormHeadeding`, `MNDesc1`, `MNDesc2`, `MNDesc3`) VALUES
(1, '', 11, 0, '0.00', '89.00', 'Application', '', '', 'Application', '', '', ''),
(2, '', 11, 0, '0.00', '91.00', 'Configuration', '', '', 'Configuration', '', '', ''),
(3, '', 11, 0, '89.00', '88.00', 'App 2', 'APP', 'app/index', 'App 2', '', '', ''),
(4, '', 11, 0, '91.00', '9100.00', 'Admin', '', '', 'Admin', '', '', ''),
(5, '', 11, 0, '91.00', '9200.00', 'Systems', 'SYS', 'system/index', 'Systems', '', '', ''),
(5, '', 11, 0, '91.00', '9300.00', 'Common', '', '', 'Common', '', '', ''),
(6, '', 11, 0, '9100.00', '9101.00', 'Company Master', 'CSM1', 'company/index1', 'Customize/Company Master', '', '', ''),
(7, '', 11, 0, '9100.00', '9102.00', 'General', 'GEN', 'general/index', 'General Info', '', '', ''),
(8, '', 11, 0, '9102.00', '9103.00', 'Salutation', '', 'new/index', 'Salutation Master', '', '', ''),
(9, '', 11, 0, '9102.00', '9104.00', 'Gender Master', '', '', 'Gender Master', '', '', ''),
(9, '', 11, 0, '9104.00', '9501.00', 'New Child', '', '', 'New Child', '', '', ''),
(10, '', 11, 0, '9300.00', '9300.05', 'Company Master', 'CSM', 'company/index', 'Common/Company Master', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t05901l01`
--
ALTER TABLE `t05901l01`
  ADD PRIMARY KEY (`GMCOHUniqueId`),
  ADD UNIQUE KEY `GMCOHCompId` (`GMCOHCompanyId`);

--
-- Indexes for table `t05901l03`
--
ALTER TABLE `t05901l03`
  ADD PRIMARY KEY (`GMCMHUniqueId`),
  ADD UNIQUE KEY `GMCMHCountryId` (`GMCMHCountryId`);

--
-- Indexes for table `t05901l04`
--
ALTER TABLE `t05901l04`
  ADD PRIMARY KEY (`GMSMHUniqueId`),
  ADD UNIQUE KEY `GMSMHStateId` (`GMSMHStateId`,`GMSMHCountryId`);

--
-- Indexes for table `t05901l05`
--
ALTER TABLE `t05901l05`
  ADD PRIMARY KEY (`GMCTHUniqueId`),
  ADD UNIQUE KEY `GMCTHCityId` (`GMCTHCityId`,`GMCTHStateId`,`GMCTHCountryId`);

--
-- Indexes for table `t05901l06`
--
ALTER TABLE `t05901l06`
  ADD PRIMARY KEY (`GMLMHUniqueId`),
  ADD UNIQUE KEY `GMLMHCompanyId` (`GMLMHCompanyId`,`GMLMHLocationId`,`GMLMHCityId`,`GMLMHStateId`,`GMLMHCountryId`);

--
-- Indexes for table `t05901l07`
--
ALTER TABLE `t05901l07`
  ADD PRIMARY KEY (`GMCRHUniqueId`),
  ADD UNIQUE KEY `GMCRHCurrencyId` (`GMCRHCurrencyId`);

--
-- Indexes for table `t05902l01`
--
ALTER TABLE `t05902l01`
  ADD PRIMARY KEY (`BMBNHUniqueId`),
  ADD UNIQUE KEY `BMBNHBankId` (`BMBNHBankId`);

--
-- Indexes for table `t05902l02`
--
ALTER TABLE `t05902l02`
  ADD PRIMARY KEY (`BMBRHUniqueId`),
  ADD UNIQUE KEY `BMBRHBranchId` (`BMBRHBranchId`,`BMBRHBankId`,`BMBRHIFSCId`);

--
-- Indexes for table `t05902l03`
--
ALTER TABLE `t05902l03`
  ADD PRIMARY KEY (`BMATHUniqueId`),
  ADD UNIQUE KEY `BMATHAcctId` (`BMATHAcctId`);

--
-- Indexes for table `t05902l04`
--
ALTER TABLE `t05902l04`
  ADD PRIMARY KEY (`BMPMHUniqueId`),
  ADD UNIQUE KEY `BMPMHPaymentModeId` (`BMPMHPaymentModeId`);

--
-- Indexes for table `t92`
--
ALTER TABLE `t92`
  ADD UNIQUE KEY `MNCompId` (`MNCompId`,`MNSystemId`,`MNRootCode`,`MNParentCode`,`MNChildCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t05901l01`
--
ALTER TABLE `t05901l01`
  MODIFY `GMCOHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t05901l03`
--
ALTER TABLE `t05901l03`
  MODIFY `GMCMHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t05901l04`
--
ALTER TABLE `t05901l04`
  MODIFY `GMSMHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t05901l05`
--
ALTER TABLE `t05901l05`
  MODIFY `GMCTHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t05901l06`
--
ALTER TABLE `t05901l06`
  MODIFY `GMLMHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t05901l07`
--
ALTER TABLE `t05901l07`
  MODIFY `GMCRHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t05902l01`
--
ALTER TABLE `t05902l01`
  MODIFY `BMBNHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t05902l02`
--
ALTER TABLE `t05902l02`
  MODIFY `BMBRHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t05902l03`
--
ALTER TABLE `t05902l03`
  MODIFY `BMATHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t05902l04`
--
ALTER TABLE `t05902l04`
  MODIFY `BMPMHUniqueId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
