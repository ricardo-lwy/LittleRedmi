

CREATE DATABASE redmi  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE  redmi;

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(3, 0, 'xiaomi2', '200', 'product-1.jpg', 3);

-- --------------------------------------------------------


CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'xiaomi 1', '100', 'Phone1.png'),
(2, 'xiaomi 2', '200', 'Phone2.png'),
(3, 'xiaomi 3\r\n', '300', 'Phone3.png'),
(4, 'xiaomi 4\r\n', '400', 'Phone4.png'),
(5, 'xiaomi 5\r\n', '500', 'Phone5.png'),
(6, 'xiaomi 6', '600', 'Phone6.png');

-- --------------------------------------------------------



CREATE TABLE `products2` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `products2` (`id`, `name`, `price`, `image`) VALUES
(1, 'redmi TV 1', '699', 'TV1.jpg'),
(2, 'xiaomi TV 2', '799', 'TV2.jpg'),
(3, 'xiaomi super TV 3', '1599', 'TV3.jpg'),
(4, 'xiaomi super TV 4', '1999', 'TV4.jpg');



CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user_form` (`id`, `name`, `email`, `password`) VALUES
(1, 'lwy', '123@qq.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;


ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `products2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
