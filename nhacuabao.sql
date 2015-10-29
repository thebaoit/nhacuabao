-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 31, 2015 at 12:59 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nhacuabao`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `approver_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `meta_title`, `meta_keywords`, `meta_description`, `slug`, `image`, `category_id`, `content`, `tags`, `view`, `user_id`, `approver_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lý do kẹt xe ở việt nam', 'Tôi đã biết lý do kẹt xe: đó là do quá đông xe không thể di chuyển ở một chổ trong một thời điểm', 'kẹt xe, việt nam', 'Tôi đã biết lý do kẹt xe: đó là do quá đông xe không thể di chuyển ở một chổ trong một thời điểm', 'ly-do-ket-xe-o-viet-nam', NULL, 1, '<p>T&ocirc;i đ&atilde; biết l&yacute; do kẹt xe: đ&oacute; l&agrave; do qu&aacute; đ&ocirc;ng xe kh&ocirc;ng thể di chuyển ở một chổ trong một thời điểm</p>\r\n', 'kẹt xe, việt nam', 0, 1, 0, '2015-08-29 07:08:36', '2015-08-29 07:08:36', NULL),
(2, 'Tôi thích nghĩ lớn. Nếu đằng nào bạn cũng phải nghĩ, hãy nghĩ lớn', 'Tôi thích nghĩ lớn. Nếu đằng nào bạn cũng phải nghĩ, hãy nghĩ lớn', 'Donald Trump, doanh nhân', 'Tôi thích nghĩ lớn. Nếu đằng nào bạn cũng phải nghĩ, hãy nghĩ lớn', 'toi-thich-nghi-lon-neu-dang-nao-ban-cung-phai-nghi-hay-nghi-lon', 'I4eOTvaUEomkWMwo.jpg', 3, '<p><strong>T&ocirc;i th&iacute;ch nghĩ lớn. Nếu đằng n&agrave;o bạn cũng phải nghĩ, h&atilde;y nghĩ lớn</strong></p>\r\n\r\n<p style="text-align: right;"><strong><em>(Donald Trump)</em></strong></p>\r\n\r\n<p>Kh&ocirc;ng c&oacute; doanh nh&acirc;n th&agrave;nh đạt n&agrave;o lại đặt cho m&igrave;nh mục ti&ecirc;u th&agrave;nh c&ocirc;ng một c&aacute;ch vừa đủ, đặc biệt l&agrave; Donald Trump. Nếu bạn thực sự tin rằng m&igrave;nh c&oacute; một &yacute; tưởng đột ph&aacute; hay ho&agrave;n to&agrave;n c&oacute; thể mở rộng kinh doanh, cứ việc thực hiện n&oacute;. Phương ch&acirc;m &quot;Go big or go home&quot; (Chơi lớn hoặc về nh&agrave;) đ&atilde; gi&uacute;p rất nhiều người đạt được mục ti&ecirc;u của m&igrave;nh. Liệu bạn c&oacute; thể l&agrave; người tiếp theo hay kh&ocirc;ng?</p>\r\n', 'Donald Trump, doanh nhân', 0, 1, 0, '2015-08-29 07:12:01', '2015-08-29 07:12:01', NULL),
(3, 'Bắt đầu ngày mới bằng những điều nhỏ nhoi', 'Bắt đầu buổi sáng với những điều ý nghĩa', 'ý nghĩa, cuộc sống, sở thích', 'Hãy làm những điều bạn muốn, buổi sáng thức dậy, hãy nghe một bài hát yêu thích, hát theo nó, đọc báo trực tuyến hằng ngày. Một ly cà phê để bắt đầu cho 1 ngày mới hạnh phúc.', 'bat-dau-ngay-moi-bang-nhung-dieu-nho-nhoi', NULL, 2, '<p>H&atilde;y l&agrave;m những điều bạn muốn, buổi s&aacute;ng thức dậy, h&atilde;y nghe một b&agrave;i h&aacute;t y&ecirc;u th&iacute;ch, h&aacute;t theo n&oacute;, đọc b&aacute;o trực tuyến hằng ng&agrave;y. Một ly c&agrave; ph&ecirc; để bắt đầu cho 1 ng&agrave;y mới hạnh ph&uacute;c.</p>\r\n', 'ý nghĩa, cuộc sống, sở thích', 0, 1, 0, '2015-08-29 07:16:55', '2015-08-29 07:16:55', NULL),
(4, 'Buổi sáng tại resort wild beach - Nha trang', 'Buổi sáng tại wild beach', 'wild beach, nha trang', 'Bức ảnh chụp lúc 5h30 sáng tại resort wild beach nha trang', 'buoi-sang-tai-resort-wild-beach-nha-trang', 'LMf9gJKhAW63dYiQ.JPG', 4, '<p><img alt="" src="http://localhost:8888/nhacuabao/public/uploads/images/LMf9gJKhAW63dYiQ.JPG" style="height:800px; width:600px" /></p>\r\n', 'wild beach, resort, nha trang, bình minh', 0, 1, 0, '2015-08-29 07:20:00', '2015-08-29 07:53:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tui nói nhảm', 'tui-noi-nham', NULL, '2015-08-23 17:00:00', '2015-08-23 17:00:00', NULL),
(2, 'Tui nghiêm túc', 'tui-nghiem-tuc', NULL, '2015-08-23 17:00:00', '2015-08-23 17:00:00', NULL),
(3, 'Tui sưu tầm', 'tui-suu-tam', NULL, '2015-08-23 17:00:00', '2015-08-23 17:00:00', NULL),
(4, 'Tui chụp', 'tui-chup', NULL, '2015-08-23 17:00:00', '2015-08-23 17:00:00', NULL),
(5, 'Tui đi', 'tui-di', NULL, '2015-08-23 17:00:00', '2015-08-23 17:00:00', NULL),
(6, 'Tui bình loạn', 'tui-binh-loan', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `ip` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversation_replies`
--

CREATE TABLE `conversation_replies` (
  `id` int(11) NOT NULL,
  `reply` text CHARACTER SET latin1,
  `user_id` int(11) NOT NULL,
  `ip` varchar(30) CHARACTER SET latin1 NOT NULL,
  `time` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '3',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` int(11) NOT NULL DEFAULT '0',
  `gender_id` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_news_letter` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `type_id`, `name`, `avatar`, `gender_id`, `birthday`, `phone`, `is_news_letter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bao@poste-vn.com', '$2y$10$A4CDLe8sCuJV8EeqquldiO2FTf7N8Px18OOSXibAYzp1NymoBXoOG', 'exm94GpkgCkIVogGDgCaerIDXPnHn1ebqlzgz6MDb3LL2yWgr1TjTn4Qodbn', 1, 'グエン・テェ・バオ', 0, 0, '1991-04-22', '01682219209', 1, '2015-07-16 10:00:00', '2015-08-24 19:00:27', NULL),
(2, 'thebaoit@gmail.com', '$2y$10$UXO9YCp4TTahC0Ke7GnSF.3A.WiZArYmCIKIVznbtHZlj6oDCFELW', '', 3, 'bao', 0, 0, '0000-00-00', '', 1, '2015-08-06 01:26:41', '2015-08-06 01:26:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL DEFAULT '0',
  `ads_list` int(11) NOT NULL DEFAULT '0',
  `ads_position` int(11) NOT NULL DEFAULT '0',
  `ads_arrangement` int(11) NOT NULL DEFAULT '0',
  `user_list` int(11) NOT NULL DEFAULT '0',
  `user_type` int(11) NOT NULL DEFAULT '0',
  `business` int(11) NOT NULL DEFAULT '0',
  `coolgirlboy` int(11) NOT NULL DEFAULT '0',
  `dailyinfo` int(11) NOT NULL DEFAULT '0',
  `golf` int(11) NOT NULL DEFAULT '0',
  `ohvietnam` int(11) NOT NULL DEFAULT '0',
  `recipe` int(11) NOT NULL DEFAULT '0',
  `vietnamtrend` int(11) NOT NULL DEFAULT '0',
  `vietnamese` int(11) NOT NULL DEFAULT '0',
  `towninfo_list` int(11) NOT NULL DEFAULT '0',
  `towninfo_category` int(11) NOT NULL DEFAULT '0',
  `towninfo_subcategory` int(11) NOT NULL DEFAULT '0',
  `towninfo_city` int(11) NOT NULL DEFAULT '0',
  `towninfo_district` int(11) NOT NULL DEFAULT '0',
  `nightspot_list` int(11) NOT NULL DEFAULT '0',
  `nightspot_event` int(11) NOT NULL DEFAULT '0',
  `nightspot_gallery` int(11) NOT NULL DEFAULT '0',
  `personaltrading` int(11) NOT NULL DEFAULT '0',
  `realestate` int(11) NOT NULL DEFAULT '0',
  `jobsearching` int(11) NOT NULL DEFAULT '0',
  `bullboard` int(11) NOT NULL DEFAULT '0',
  `gallery` int(11) NOT NULL DEFAULT '0',
  `gallery_upload` int(11) NOT NULL DEFAULT '0',
  `parameter` int(11) NOT NULL DEFAULT '0',
  `customerrelationship` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `status`) VALUES
(1, 'ADMIN', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversation_replies`
--
ALTER TABLE `conversation_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conversation_replies`
--
ALTER TABLE `conversation_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;