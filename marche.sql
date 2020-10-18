-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 09:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marche`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_code` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Admin_id`, `name`, `email`, `password`, `reset_code`, `image`, `created_at`) VALUES
(1, 'Admin', 'xyz@gmail.com', 'admin', 987654, 'avatar.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ban_id` int(11) NOT NULL,
  `banner_name` varchar(200) DEFAULT NULL,
  `bannner_image` varchar(200) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ban_id`, `banner_name`, `bannner_image`, `created_at`) VALUES
(1, 'yes developer', 'Tulips7.jpg', '2020-10-12 14:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `category_id`, `brand_name`, `brand_image`, `created_at`) VALUES
(1, 2, 'HRX', 'https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', ''),
(2, 2, 'Addidas', 'https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', ''),
(3, 2, 'Nike', 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', ''),
(4, 2, 'Puma', 'https://images.unsplash.com/photo-1593548366595-c449f72ccb3d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', ''),
(5, 2, 'Fila', 'https://images.unsplash.com/photo-1567709816966-a1f1d1af8a3f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', ''),
(6, 2, 'Gold Star', 'https://images.unsplash.com/photo-1485736231968-0c8ad5c9e174?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaign_id` int(11) NOT NULL,
  `module_type` varchar(255) NOT NULL,
  `cashback_set` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `module_type`, `cashback_set`, `description`, `created_at`) VALUES
(1, '1', 'user sinfgg', 'helloggg', ''),
(2, '4', 'user', 'hello', ''),
(3, '2', 'userr type', 'hello', '2020-10-05 07:07:58'),
(4, '3', 'sdvbdf', 'fdhsfh', '2020-10-05 07:15:24'),
(5, '3', 'vzvz', 'hello', '2020-10-05 08:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `card_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_expiry` varchar(255) NOT NULL,
  `card_cvv` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`card_id`, `user_id`, `card_number`, `card_expiry`, `card_cvv`, `created_at`) VALUES
(6, '11250958724', '7778 7878 7987 8987', '12/78', '001', 'Wednesday 23rd of September 2020 01:05:13 PM'),
(7, '11250958724', '7778 7878 7987 8987', '12/78', '001', 'Wednesday 23rd of September 2020 01:05:13 PM'),
(8, '11250958724', '7778 7878 7987 8987', '12/78', '001', 'Wednesday 23rd of September 2020 01:05:15 PM'),
(11, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:18 PM'),
(12, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:21 PM'),
(13, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:22 PM'),
(14, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:24 PM'),
(15, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:25 PM'),
(16, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:26 PM'),
(17, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:28 PM'),
(18, '11250958724', '7898 7987 8798 7879', '89/80', '001', 'Wednesday 23rd of September 2020 01:07:29 PM'),
(20, '11250958724', '6787 6876 7687 6768', '12/23', '001', 'Wednesday 23rd of September 2020 01:59:45 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product_quantity`, `created_at`) VALUES
(3, 137, 2, '2', 'Tuesday 29th of September 2020 10:39:43 AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `brand_id`, `category_name`, `category_image`, `created_at`) VALUES
(5, 0, 'product1', 'Penguins9.jpg', '2020-10-09 08:51:56'),
(6, 0, 'sales brand1', 'Penguins10.jpg', '2020-10-09 09:27:29'),
(7, 0, 'brand11aaaa', 'Penguins14.jpg', '2020-10-09 09:33:47'),
(8, 0, 'brandsolid', 'Lighthouse3.jpg', '2020-10-09 09:49:17'),
(9, 0, 'newbrand1', 'Penguins21.jpg', '2020-10-12 09:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `fbusers`
--

CREATE TABLE `fbusers` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fbusers`
--

INSERT INTO `fbusers` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '3344570082269986', 'Arpit', 'Dubey', 'arpitdubey17@gmail.com', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3344570082269986&height=50&width=50&ext=1602311273&hash=AeRIQLlZRTCCMCAe', 'https://www.facebook.com/', '2020-09-09 18:46:24', '2020-09-10 06:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_name` varchar(255) NOT NULL,
  `feedback_image` varchar(255) NOT NULL,
  `feedback_email` varchar(255) NOT NULL,
  `feedback_mobile` int(255) NOT NULL,
  `against` varchar(255) NOT NULL,
  `store_details` varchar(255) NOT NULL,
  `feedback_note` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_image`, `feedback_email`, `feedback_mobile`, `against`, `store_details`, `feedback_note`, `created_at`) VALUES
(1, 'user1222', 'food3.jpg', '1332342@gmai.com', 66556, 'fdbsd', 'vbfxfgzg', 'DvsV', '');

-- --------------------------------------------------------

--
-- Table structure for table `invantory`
--

CREATE TABLE `invantory` (
  `product_id` int(11) NOT NULL,
  `sub_category_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_new_arrivals` varchar(255) NOT NULL,
  `product_department` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_fit` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invantory`
--

INSERT INTO `invantory` (`product_id`, `sub_category_id`, `brand_id`, `category_id`, `product_name`, `product_image`, `product_price`, `product_size`, `product_new_arrivals`, `product_department`, `product_color`, `product_fit`, `created_at`) VALUES
(1, 1, 0, 2, 't-shirt1', 'Tulips9.jpg', 355, '2', '3/6/2020', 'abc', 'RED green', 'FULL size', '3/6/2020');

-- --------------------------------------------------------

--
-- Table structure for table `mobbanner`
--

CREATE TABLE `mobbanner` (
  `mob_id` int(11) NOT NULL,
  `mobbanner_name` varchar(200) DEFAULT NULL,
  `mobbanner_image` varchar(200) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobbanner`
--

INSERT INTO `mobbanner` (`mob_id`, `mobbanner_name`, `mobbanner_image`, `created_at`) VALUES
(2, 'niccon mobile1', 'Chrysanthemum1.jpg', '2020-10-12 09:14:03'),
(3, 'niccon mobile12', 'Penguins3.jpg', '2020-10-12 09:45:34'),
(4, 'niccon mobile12', 'Penguins6.jpg', '2020-10-12 14:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_associated_store` varchar(255) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `news_image`, `news_associated_store`, `news_name`, `created_at`) VALUES
(3, 'abc abp news', 'c1.png', 'hiii', 'etv bharat', '2020-10-05 07:46:39'),
(4, 'abc abp news', 'contact.jpg', 'hiii', 'etv bharat', '2020-10-05 07:48:02'),
(5, 'abc abp news20', 'about2.jpg', 'hiii', 'etv bharat', '2020-10-05 09:17:59'),
(6, 'abc abp news18', 'food3.jpg', 'hiii', 'etv bharat', '2020-10-05 10:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `product_id`, `created_at`) VALUES
(2, 137, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offers_id` int(11) NOT NULL,
  `offers_title` varchar(255) NOT NULL,
  `offers_image` varchar(255) NOT NULL,
  `valid_till` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offers_id`, `offers_title`, `offers_image`, `valid_till`, `discount`, `coupon_code`, `product`, `region`, `description`, `created_at`) VALUES
(8, 'dell offer', 'food4.jpg', '2020-10-16', '24', '233', 'deee', 'dscs', 'sdagasf', '2020-10-05 08:45:23'),
(9, 'Get Flat 10% OFF on every alternate order with this coupon codezx zx', 'food32.jpg', '2020-10-17', 'dscfds', '2333', 'deee', 'dscssda', 'fdgfzd helllo', '2020-10-05 08:49:30'),
(10, 'demo12', 'contact1.jpg', '2020-10-15', '24', '2333', 'deee', 'hhh', 'hello', '2020-10-05 09:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `onlinedeals`
--

CREATE TABLE `onlinedeals` (
  `deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `deal_time` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinedeals`
--

INSERT INTO `onlinedeals` (`deal_id`, `product_id`, `product_name`, `product_image`, `deal_time`, `created_at`) VALUES
(1, 1, 'mnc bosss dd', 'https://images.unsplash.com/photo-1527264935190-1401c51b5bbc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '2020-10-16', '21/3/2020'),
(2, 1, 'qba', 'https://images.unsplash.com/photo-1527264935190-1401c51b5bbc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '18/3/2020', '18/3/2020'),
(3, 2, 'deal 1', 'https://images.unsplash.com/photo-1500021804447-2ca2eaaaabeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '21/3/2020', '21/3/2020'),
(4, 2, 'deal 2', 'https://images.unsplash.com/photo-1598946114934-8cf259aa241d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '18/3/2020', '18/3/2020'),
(5, 3, 'deal 26', 'https://images.unsplash.com/photo-1598946114934-8cf259aa241d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', '18/3/2020', '18/3/2020');

-- --------------------------------------------------------

--
-- Table structure for table `order_management`
--

CREATE TABLE `order_management` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `order_image` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_quantity` varchar(255) NOT NULL,
  `order_created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_management`
--

INSERT INTO `order_management` (`order_id`, `user_id`, `product_id`, `user_name`, `order_image`, `order_price`, `order_status`, `order_quantity`, `order_created_at`) VALUES
(1, 117, 1, 'aman', 'Chrysanthemum1.jpg', 399, 'delivered', '1', ''),
(2, 137, 2, 'aman', 'Jellyfish.jpg', 1000, 'pending', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_price` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `name`, `image`, `order_date`, `order_price`, `order_status`, `product_quantity`, `delivery_status`, `created_at`) VALUES
(1, 'abc', 'food4.jpg', '2020-10-16', '399', 'pending', 'SDasrEA', 'pending', ''),
(3, 'abc', 'Koala.jpg', '2020-10-16', '399', 'shiped', 'SDasrEA', 'shiped', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `sub_cat_first_id` int(11) NOT NULL,
  `sub_cat_second_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price_omr` varchar(200) DEFAULT NULL,
  `product_price_dirham` varchar(200) DEFAULT NULL,
  `product_price_sar` varchar(200) DEFAULT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_new_arrivals` varchar(255) NOT NULL COMMENT '1 = Yes and 0 = No',
  `product_department` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_fit` varchar(255) NOT NULL,
  `product_currency` varchar(200) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `sub_cat_first_id`, `sub_cat_second_id`, `category_id`, `store_id`, `product_name`, `product_image`, `product_description`, `product_price_omr`, `product_price_dirham`, `product_price_sar`, `product_size`, `product_new_arrivals`, `product_department`, `product_color`, `product_fit`, `product_currency`, `created_at`) VALUES
(1, 3, 2, 5, 4, 'eletronics ', 'Chrysanthemum2.jpg', 'hello guys', '24', '34', '31', '23', 'YES', 'ELECTRONIC dlell', 'BLACK redf', 'FULL size', NULL, '2020-10-09 08:00:43'),
(2, 1, 1, 2, 4, 'sandeep sinhjh', 'Chrysanthemum1.jpg', 'hello', '24', '34', '342', '233', 'NO', 'ELECTRONIC', 'BLACK', 'FULL', NULL, '2020-10-09 08:48:43'),
(3, 4, 4, 6, 5, 'puja software', 'Tulips8.jpg', 'hello', '24', '34', '342', '233', 'YES', 'ELECTRONIC', 'BLACK', '234231', NULL, '2020-10-09 09:53:07'),
(4, 1, 1, 2, 1, 'puja software', 'Koala1.jpg', 'hello', 'sdvs', '347', '3134', '233', 'YES', 'ELECTRONIC dlell', 'BLACK', '234231', NULL, '2020-10-12 09:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `rating_image` varchar(255) NOT NULL,
  `rating_email` varchar(255) NOT NULL,
  `rating_contact` int(255) NOT NULL,
  `rating_address` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `product_name`, `rating_image`, `rating_email`, `rating_contact`, `rating_address`, `product_details`, `review`, `ratings`, `created_at`) VALUES
(2, 'upa', 'zxs.jpg', 'nmaexample@gmail.com', 147896523, 'wpn', 'mnd a', 'good', '2', '5/4/2020');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_price` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `refund_status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`order_id`, `name`, `image`, `order_date`, `order_price`, `order_status`, `product_quantity`, `refund_status`, `created_at`) VALUES
(1, 'abc', 'food4.jpg', '2020-10-13', 399, 'pending', 'DGSDY', 'pending', ''),
(2, 'abc', 'food41.jpg', '2020-10-13', 399, 'pending', 'DGSDY', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `storedeals`
--

CREATE TABLE `storedeals` (
  `store_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `deal_time` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storedeals`
--

INSERT INTO `storedeals` (`store_id`, `product_name`, `deal_time`, `store_name`, `created_at`) VALUES
(1, 'abc delas  gsac', '2020-10-16', 'abvp', '21/3/2020'),
(2, 'def', '5/3/2020', 'nbsp', '5/3/2020');

-- --------------------------------------------------------

--
-- Table structure for table `store_management`
--

CREATE TABLE `store_management` (
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_email` varchar(255) NOT NULL,
  `store_password` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_phone` varchar(255) NOT NULL,
  `store_address` varchar(255) NOT NULL,
  `store_country` varchar(255) NOT NULL,
  `store_created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_management`
--

INSERT INTO `store_management` (`store_id`, `product_id`, `store_name`, `store_email`, `store_password`, `store_image`, `store_phone`, `store_address`, `store_country`, `store_created_at`) VALUES
(1, 0, 'del1', 'xyz138@gmail.com', '123', '', '', '', '', ''),
(3, 0, 'abcc ssss', 'sandeep140@gmail.com', '123', '', '', '', '', ''),
(4, 0, 'abcc ssss', 'sandeep139@gmail.com', '123', '', '', '', '', ''),
(5, 0, 'abcc ssss', 'sandeep139@gmail.com', '12345', '', '', '', '', '2020-10-05 12:16:10'),
(6, 0, 'electronics product1', '139sandeepsingh@gmail.com', '123', '', '', '', '', '2020-10-12 13:35:15'),
(7, 0, 'electronics product2', 'sandeep139@gmail.com', '12345', '', '', '', '', '2020-10-12 15:46:13'),
(8, 0, 'del1', 'sandeep1401@gmail.com', '123', '', '', '', '', '2020-10-12 16:23:36'),
(9, 0, 'electronics product2', '139sandeepsingh@gmail.com', '123', '', '', '', '', '2020-10-12 16:24:23'),
(10, 0, 'del1', 'sandeep139@gmail.com', '1234', '', '', '', '', '2020-10-12 16:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `sub_admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dashboard` int(11) NOT NULL,
  `user_management` int(11) NOT NULL DEFAULT '0',
  `store_management` int(11) NOT NULL DEFAULT '0',
  `product_management` int(11) NOT NULL DEFAULT '0',
  `inventory_management` int(11) NOT NULL DEFAULT '0',
  `sub_admin_management` int(11) NOT NULL DEFAULT '0',
  `category_management` int(11) NOT NULL DEFAULT '0',
  `orders_management` int(11) NOT NULL DEFAULT '0',
  `payment_management` int(11) NOT NULL DEFAULT '0',
  `refund_management` int(11) NOT NULL DEFAULT '0',
  `campaign_management` int(11) NOT NULL DEFAULT '0',
  `offer_management` int(11) NOT NULL DEFAULT '0',
  `news_management` int(11) NOT NULL DEFAULT '0',
  `rating_management` int(11) NOT NULL DEFAULT '0',
  `report_management` int(11) NOT NULL DEFAULT '0',
  `feedback_management` int(11) NOT NULL DEFAULT '0',
  `notification_management` int(11) NOT NULL DEFAULT '0',
  `deals_management` int(11) NOT NULL DEFAULT '0',
  `support_management` int(11) NOT NULL DEFAULT '0',
  `created_at` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_admin`
--

INSERT INTO `sub_admin` (`sub_admin_id`, `email`, `password`, `dashboard`, `user_management`, `store_management`, `product_management`, `inventory_management`, `sub_admin_management`, `category_management`, `orders_management`, `payment_management`, `refund_management`, `campaign_management`, `offer_management`, `news_management`, `rating_management`, `report_management`, `feedback_management`, `notification_management`, `deals_management`, `support_management`, `created_at`) VALUES
(2, 'example124@gmiail.com', '213456780', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(4, 'AMANARORA75@GMAIL.COM', 'abcdsxgf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(6, 'kunalkapoor3@gmail.com', 'kapooradmin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(7, 'rohan20@gmail.com', '12345', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(9, 'sandeep140@gmail.com', '12223', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(10, 'sandeep139@gmail.com', '123', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(11, 'sandeep139@gmail.com', '11213', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(12, 'sandeep139@gmail.com', '2312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(13, '139sandeepsingh@gmail.com', '11213', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(14, 'sandeep134@gmail.com', '1122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(15, 'sandeep13@gmail.com', '11221', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(16, 'sandeep139@gmail.com', '1133', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(17, 'sandeep139@gmail.com', '123', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-10-03 14:38:53'),
(18, 'sandeep139@gmail.com', '1122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-10-03 14:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat_first`
--

CREATE TABLE `sub_cat_first` (
  `sub_cat_first_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `sub_cat_image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat_first`
--

INSERT INTO `sub_cat_first` (`sub_cat_first_id`, `category_id`, `sub_cat_name`, `sub_cat_image`, `created_at`) VALUES
(9, 6, 'Camera hello 123', 'Lighthouse10.jpg', '2020-10-12 15:31:27'),
(8, 5, 'Camera 1 hello', 'Lighthouse6.jpg', '2020-10-12 14:35:52'),
(7, 7, 'Camera hello sandeep', 'Tulips6.jpg', '2020-10-12 13:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat_second`
--

CREATE TABLE `sub_cat_second` (
  `sub_cat_second_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat_first_id` int(11) NOT NULL,
  `sub_cat_second_name` varchar(255) NOT NULL,
  `sub_cat_second_image` varchar(255) NOT NULL,
  `sub_cat_second_created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat_second`
--

INSERT INTO `sub_cat_second` (`sub_cat_second_id`, `category_id`, `sub_cat_first_id`, `sub_cat_second_name`, `sub_cat_second_image`, `sub_cat_second_created_at`) VALUES
(4, 5, 8, 'brand1a sandeep singh', 'Lighthouse8.jpg', '2020-10-12 15:27:44'),
(5, 5, 8, 'brand1a', 'Tulips8.jpg', '2020-10-12 15:28:26'),
(6, 5, 8, 'brand1a', 'Tulips9.jpg', '2020-10-12 15:28:36'),
(7, 5, 8, 'brand1a', 'Penguins30.jpg', '2020-10-12 15:28:46'),
(8, 5, 8, 'brand1a sandeep singh', 'Tulips10.jpg', '2020-10-12 15:28:55'),
(9, 9, 7, 'cameraa1 hellos', 'Penguins31.jpg', '2020-10-12 15:29:48'),
(10, 7, 8, 'hello bra1', 'Tulips11.jpg', '2020-10-12 15:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `date`, `h`, `m`, `s`) VALUES
(12, '2020-10-16', 2, 10, 25),
(13, '2020-10-17', 2, 10, 56),
(14, '2020-10-14', 3, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `oauth_provider` varchar(255) NOT NULL DEFAULT '0',
  `oauth_uid` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `oauth_provider`, `oauth_uid`, `name`, `email`, `phone`, `address`, `country`, `password`, `code`, `picture`, `status`, `created_at`) VALUES
(117, '', '0', 'Vikas', 'xyz@gmail.com', '+91882603457', '', '', '21232f297a57a5a743894a0e4a801fc3', '', '', 0, 'Friday 4th of September 2020 07:33:22 PM'),
(137, '', '0', 'Natasha Yadav', 'xy1z@gmail.com', '+918448162823', '', '', '21232f297a57a5a743894a0e4a801fc3', '2494555', '', 0, ''),
(140, 'facebook', '195600238593762', 'Acubeapps Noida', 'business@acubeapps.com', '', '', '', '', '', '', 0, '2020-09-10 07:24:47'),
(172, '0', '0', 'doyletran.51074@gmail.com', 'doyletran.51074@gmail.com', '', '', '', '', '', '0', 0, 'Wednesday 23rd of September 2020 10:56:50 PM'),
(169, '0', '0', 'patriciaerickson.03953@gmail.com', 'patriciaerickson.03953@gmail.com', '', '', '', '', '', '0', 0, 'Saturday 12th of September 2020 01:29:18 AM'),
(170, '0', '0', 'carolinaputnam.95763@gmail.com', 'carolinaputnam.95763@gmail.com', '', '', '', '', '', '0', 0, 'Saturday 12th of September 2020 02:07:24 AM'),
(167, '0', '0', 'Ankit Dubey', 'ankit.dubey123@gmail.com', '', '', '', '', '', '0', 0, 'Friday 11th of September 2020 04:23:08 PM'),
(166, '0', '0', 'Yash Agarwal', 'agarwalyash929@gmail.com', '', '', '', '', '', '0', 0, 'Friday 11th of September 2020 11:12:26 AM'),
(165, '0', '0', 'Prateek Himanshu', 'himanshu.prateek111@gmail.com', '', '', '', '', '', '0', 0, 'Friday 11th of September 2020 10:06:29 AM');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `Address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `alternate_mobile` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`Address_id`, `user_id`, `address`, `pincode`, `state`, `country`, `mobile`, `alternate_mobile`, `address_type`, `created_at`) VALUES
(5, 2, 'xyz@gmail.com', '', '', '', '', '', '', 'Friday 25th of September 2020 01:20:26 PM');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `wish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `wish_created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`wish_id`, `user_id`, `product_id`, `product_quantity`, `wish_created_at`) VALUES
(30, 0, 11, 0, 'Wednesday 30th of September 2020 05:01:29 PM'),
(31, 0, 11, 0, 'Wednesday 30th of September 2020 05:02:27 PM'),
(32, 0, 1, 0, 'Wednesday 30th of September 2020 05:06:23 PM'),
(33, 0, 1, 0, 'Wednesday 30th of September 2020 05:06:26 PM'),
(34, 0, 1, 0, 'Wednesday 30th of September 2020 05:06:28 PM'),
(35, 0, 1, 0, 'Wednesday 30th of September 2020 05:06:43 PM'),
(79, 0, 1, 0, 'Wednesday 30th of September 2020 07:05:52 PM'),
(80, 0, 6, 0, 'Wednesday 30th of September 2020 07:06:40 PM'),
(81, 0, 9, 0, 'Wednesday 30th of September 2020 07:07:10 PM'),
(82, 0, 11, 0, 'Wednesday 30th of September 2020 07:08:12 PM'),
(89, 0, 1, 0, 'Thursday 1st of October 2020 11:09:09 AM'),
(90, 0, 1, 0, 'Thursday 1st of October 2020 11:09:21 AM'),
(91, 0, 1, 0, 'Thursday 1st of October 2020 11:09:26 AM'),
(92, 0, 1, 0, 'Thursday 1st of October 2020 11:09:29 AM'),
(93, 0, 1, 0, 'Thursday 1st of October 2020 11:09:33 AM'),
(94, 0, 1, 0, 'Thursday 1st of October 2020 11:10:21 AM'),
(95, 0, 1, 0, 'Thursday 1st of October 2020 11:10:25 AM'),
(96, 0, 1, 0, 'Thursday 1st of October 2020 11:10:41 AM'),
(97, 0, 1, 0, 'Thursday 1st of October 2020 11:11:03 AM'),
(98, 0, 1, 0, 'Thursday 1st of October 2020 11:12:06 AM'),
(104, 117, 1, 0, 'Thursday 1st of October 2020 11:28:41 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `fbusers`
--
ALTER TABLE `fbusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `mobbanner`
--
ALTER TABLE `mobbanner`
  ADD PRIMARY KEY (`mob_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offers_id`);

--
-- Indexes for table `onlinedeals`
--
ALTER TABLE `onlinedeals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `order_management`
--
ALTER TABLE `order_management`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `store_management`
--
ALTER TABLE `store_management`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`sub_admin_id`);

--
-- Indexes for table `sub_cat_first`
--
ALTER TABLE `sub_cat_first`
  ADD PRIMARY KEY (`sub_cat_first_id`);

--
-- Indexes for table `sub_cat_second`
--
ALTER TABLE `sub_cat_second`
  ADD PRIMARY KEY (`sub_cat_second_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`Address_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fbusers`
--
ALTER TABLE `fbusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mobbanner`
--
ALTER TABLE `mobbanner`
  MODIFY `mob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `onlinedeals`
--
ALTER TABLE `onlinedeals`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_management`
--
ALTER TABLE `order_management`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `store_management`
--
ALTER TABLE `store_management`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `sub_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sub_cat_first`
--
ALTER TABLE `sub_cat_first`
  MODIFY `sub_cat_first_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_cat_second`
--
ALTER TABLE `sub_cat_second`
  MODIFY `sub_cat_second_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
