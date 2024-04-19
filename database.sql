-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 03:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoahoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id_khoahoc` int(11) NOT NULL,
  `name_khoahoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id_khoahoc`, `name_khoahoc`) VALUES
(1, 'Khóa học cơ bản'),
(2, 'Khóa học Pro'),
(3, 'Khóa học nâng cao'),
(10, 'Khóa học Bán chạy');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id_pay` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stk_ng_h` varchar(100) NOT NULL,
  `img_ng_h` varchar(255) NOT NULL,
  `img_momo` varchar(255) NOT NULL,
  `sdt_momo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id_pay`, `name`, `stk_ng_h`, `img_ng_h`, `img_momo`, `sdt_momo`) VALUES
(1, 'Nguyễn Văn Thế', '0354116847', 'qr_nh.jpeg', 'momo.png', '0354116847');

-- --------------------------------------------------------

--
-- Table structure for table `product_kh`
--

CREATE TABLE `product_kh` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price_product` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL,
  `total_lessons` varchar(100) NOT NULL,
  `time_cource` varchar(100) NOT NULL,
  `FK_id_khoahoc` int(11) NOT NULL,
  `content` text NOT NULL,
  `SLDaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_kh`
--

INSERT INTO `product_kh` (`id_product`, `name_product`, `price_product`, `img`, `level`, `total_lessons`, `time_cource`, `FK_id_khoahoc`, `content`, `SLDaBan`) VALUES
(1, 'HTML CSS Pro', 1299000, 'kh1.png', 'Trình độ Pro', '12', 'Thời lượng 05 giờ 26 phút', 2, 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 5),
(2, 'Ngôn ngữ tiền xử lý Sass', 299000, 'kh2.png', 'Trình độ Pro', '11', 'Thời lượng 05 giờ 30 phút', 2, 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 6),
(4, 'JavaScript Pro', 2399000, 'kh3.png', 'Trình độ Pro', '7', 'Thời lượng 10 giờ 26 phút', 2, 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 7),
(5, 'NextJS Pro', 690000, 'kh4.png', 'Trình độ Pro', '9', 'Thời lượng 07 giờ 30 phút', 2, 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 2),
(7, 'Kiến Thức Nhập Môn IT', 599000, 'kh5.png', 'Trình độ Cơ Bản', '7', 'Thời lượng 03 giờ 10 phút', 1, 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 0),
(8, 'Lập trình C++ cơ bản, nâng cao', 1200000, 'kh6.png', 'Trình độ Cơ Bản', '16', 'Thời lượng 15 giờ 26 phút', 1, 'Khóa học lập trình C++ từ cơ bản tới nâng cao dành cho người mới bắt đầu. Mục tiêu của khóa học này nhằm giúp các bạn nắm được các khái niệm căn cơ của lập trình, giúp các bạn có nền tảng vững chắc để chinh phục con đường trở thành một lập trình viên.', 0),
(9, 'Responsive Với Grid System', 990000, 'kh7.png', 'Trình độ Cơ Bản', '9', 'Thời lượng 10 giờ 10 phút', 1, 'Trong khóa này chúng ta sẽ học về cách xây dựng giao diện web responsive với Grid System, tương tự Bootstrap 4.', 0),
(11, 'HTML CSS từ Zero đến Hero', 599000, 'kh8.png', 'Trình độ Cơ Bản', '8', 'Thời lượng 07 giờ 30 phút', 1, 'Trong khóa này chúng ta sẽ cùng nhau xây dựng giao diện 2 trang web là The Band & Shopee.', 0),
(17, 'Java Stringboot', 500000, 'ngua.jpg', 'Cơ bản', '7', '10h', 10, 'rất ok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_cource`
--

CREATE TABLE `register_cource` (
  `id_register_coure` int(11) NOT NULL,
  `name_kh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name_khoahoc` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_khoahocc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_cource`
--

INSERT INTO `register_cource` (`id_register_coure`, `name_kh`, `email`, `phone`, `name_khoahoc`, `price`, `date`, `id_user`, `id_product`, `id_khoahocc`) VALUES
(35, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-12', 7, 2, 2),
(36, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'HTML CSS Pro', 1299000, '2024-04-12', 7, 1, 2),
(37, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-12', 7, 2, 2),
(38, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Responsive Với Grid System', 990000, '2024-04-12', 7, 9, 1),
(39, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-12', 7, 2, 2),
(40, 'Admin', 'admin123@gmail.com', '030396866', 'HTML CSS Pro', 1299000, '2024-04-12', 1, 1, 2),
(41, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Responsive Với Grid System', 990000, '2024-04-12', 7, 9, 1),
(42, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Lập trình C++ cơ bản, nâng cao', 1200000, '2024-04-12', 7, 8, 1),
(43, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-12', 7, 2, 2),
(44, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'HTML CSS Pro', 1299000, '2024-04-13', 7, 1, 2),
(45, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'HTML CSS Pro', 1299000, '2024-04-13', 7, 1, 2),
(46, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'HTML CSS từ Zero đến Hero', 599000, '2024-04-13', 7, 11, 1),
(47, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Kiến Thức Nhập Môn IT', 599000, '2024-04-13', 7, 7, 1),
(48, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Lập trình C++ cơ bản, nâng cao', 1200000, '2024-04-13', 7, 8, 1),
(49, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Responsive Với Grid System', 990000, '2024-04-13', 7, 9, 1),
(50, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-13', 7, 2, 2),
(51, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Ngôn ngữ tiền xử lý Sass', 299000, '2024-04-13', 7, 2, 2),
(52, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'Lập trình C++ cơ bản, nâng cao', 1200000, '2024-04-13', 7, 8, 1),
(53, 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', '0354116847', 'HTML CSS Pro', 1299000, '2024-04-17', 7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `role` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `pass`, `name`, `email`, `gender`, `phone`, `role`) VALUES
(1, 'admin', '123', 'Admin', 'admin123@gmail.com', 'Nam', '030396866', b'1'),
(7, 'vanthe', '123', 'Nguyễn Văn Thế', 'bilakmkiss@gmail.com', 'Nam', '0354116847', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id_khoahoc`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id_pay`);

--
-- Indexes for table `product_kh`
--
ALTER TABLE `product_kh`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `FK_id_khoahoc` (`FK_id_khoahoc`);

--
-- Indexes for table `register_cource`
--
ALTER TABLE `register_cource`
  ADD PRIMARY KEY (`id_register_coure`),
  ADD KEY `FK_id_user` (`id_user`),
  ADD KEY `FK_id_product` (`id_product`),
  ADD KEY `FKK_id_khoahoc` (`id_khoahocc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id_khoahoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_kh`
--
ALTER TABLE `product_kh`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register_cource`
--
ALTER TABLE `register_cource`
  MODIFY `id_register_coure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_kh`
--
ALTER TABLE `product_kh`
  ADD CONSTRAINT `FK_id_khoahoc` FOREIGN KEY (`FK_id_khoahoc`) REFERENCES `khoahoc` (`id_khoahoc`);

--
-- Constraints for table `register_cource`
--
ALTER TABLE `register_cource`
  ADD CONSTRAINT `FKK_id_khoahoc` FOREIGN KEY (`id_khoahocc`) REFERENCES `khoahoc` (`id_khoahoc`),
  ADD CONSTRAINT `FK_id_product` FOREIGN KEY (`id_product`) REFERENCES `product_kh` (`id_product`),
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
