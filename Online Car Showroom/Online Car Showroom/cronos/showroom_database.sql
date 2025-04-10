

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `showroom_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `password` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
('group4', 'group4', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `order_id` int(11) NOT NULL,
  `order_time` date NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`order_id`, `order_time`, `customer_id`, `car_id`) VALUES
(26, '2022-08-03', 1, 3),
(27, '2022-08-03', 2, 6),
(30, '2022-08-03', 1, 8),
(33, '2022-08-05', 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_status` varchar(10) NOT NULL DEFAULT 'not-booked',
  `chassis_no` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `year_of_release` date DEFAULT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(1000) NOT NULL DEFAULT 'https://img.lovepik.com/free-png/20210926/lovepik-car-icon-png-image_401486754_wh1200.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_status`, `chassis_no`, `car_id`, `model`, `brand`, `year_of_release`, `price`, `picture`) VALUES
('not-booked', 1203, 1, 'M3', 'BMW', '2019-12-12', 13000000, 'https://www.motortrend.com/uploads/izmo/bmw/m4/2022/m4.png?fit=around%7C875:492.1875'),
('not-booked', 1205, 2, 'CLA200', 'Mercedes', '2020-12-11', 15500000, 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/mercedes-benz-cla-class-2020-index-1.png'),
('not-booked', 1206, 3, 'RS7', 'Audi', '2020-11-11', 18400000, 'https://cdn-www.pod-point.com/audi-a7-tfsie-white-background-1.jpg?mtime=20200904105327&focal=none'),
('not-booked', 1207, 4, 'Accord', 'Honda', '2021-06-16', 4300000, 'https://blogmedia.dealerfire.com/wp-content/uploads/sites/749/2018/11/2019-Honda-Accord-Platinum-White-Pearl_o.png'),
('not-booked', 1209, 6, 'CHR', 'Toyota', '2000-09-01', 4600000, 'https://www.iracars.com/images/upload/2019%20Toyota%20C-HR%20White.png'),
('not-booked', 1211, 8, 'MX5', 'Mazda', '2019-11-28', 4800000, 'https://www.nationwidevehiclecontracts.co.uk/m/4/mazda-mx-5-rf-se-l-nav-1.jpg'),
('not-booked', 1212, 9, 'Premio', 'Toyota', '2019-06-27', 3600000, 'https://global.toyota/pages/models/images/20191018/thumbnail/premio_w610_01.jpg'),
('not-booked', 1213, 10, 'Supra', 'Toyota', '2020-06-08', 14500000, 'https://thenewswheel.com/wp-content/uploads/2019/03/Toyota-Supra-Color-Configurator-760x428.png'),
('not-booked', 1214, 11, 'GT4', 'Porsche', '2020-07-08', 32000000, 'https://www.fmdt.info/img/porsche-models/2018-porsche-911-carrera-32-white.png'),
('not-booked', 1215, 12, 'Urus', 'Lamborghini', '2020-11-26', 31000000, 'https://imgd.aeplcdn.com/664x374/n/swho6sa_1475649.jpg?q=85'),
('booked', 1216, 13, 'Phantom', 'Rolls-Royce', '2020-02-16', 64000000, 'https://imgcdn.zigwheels.ph/medium/gallery/color/115/1641/rolls-royce-ghost-color-881233.jpg'),
('not-booked', 1217, 14, 'Model Y', 'Tesla', '2020-11-19', 9400000, 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/d100a766-4613-4138-b600-eb0cad3cdd39/deduzah-ba4de4c8-1bad-4849-ad52-093361bc012f.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `city`, `address`, `phone_number`, `email`, `password`) VALUES
(1, 'Afsan', 'Haque', 'Chittagong', 'Halishahor, Chittagong', '01850029567', 'afsan.haque99@gmail.com', 'afsan900'),
(2, 'Asif', 'Rahman', 'Dhaka', 'Mohammadpur, Dhaka', '01402729172', 'asif.rahman234@gmail.com', 'asif234'),
(3, 'Shad', 'Sami', 'Dhaka', 'Mohammadpur, Dhaka', '01754089684', 'shad.sami739@gmail.com', 'shad739');
(4, 'Montaha', 'Tabasssum', 'Dhaka', 'Khilgaon', '01754089684', 'montaha.tabassum99@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `spec_id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `mpg` varchar(5) DEFAULT NULL,
  `transmission_type` varchar(10) NOT NULL,
  `fuel_type` varchar(10) DEFAULT NULL,
  `fuel_capacity` varchar(5) NOT NULL,
  `horse_power` varchar(4) NOT NULL,
  `torque` varchar(4) DEFAULT NULL,
  `seat_capacity` int(2) NOT NULL,
  `boot_space` varchar(4) DEFAULT NULL,
  `color` varchar(20) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`spec_id`, `category`, `mpg`, `transmission_type`, `fuel_type`, `fuel_capacity`, `horse_power`, `torque`, `seat_capacity`, `boot_space`, `color`, `car_id`) VALUES
(1, 'sedan', '21', 'auto', 'octane', '45', '220', '190', 4, '400', 'white', 1),
(3, 'sedan', '19', 'auto', 'octane', '50', '280', '290', 4, '420', 'yellow', 2),
(4, 'hatchback', '18', 'manual', 'octane', '42', '325', '298', 4, '390', 'red', 3),
(7, 'sedan', '28', 'auto', 'octane', '42', '210', '180', 4, '400', 'blue', 4),
(9, 'suv', '26', 'auto', 'octane', '39', '190', '170', 4, '350', 'white', 6),
(11, 'coupe', '24', 'manual', 'octane', '33', '197', '182', 2, '260', 'red', 8),
(13, 'coupe', '21', 'manual', 'octane', '36', '380', '342', 2, '220', 'yellow', 10),
(15, 'coupe', '21', 'auto', 'octane', '32', '520', '480', 2, '220', 'white', 11),
(16, 'suv', '26', 'auto', 'octane', '38', '470', '456', 4, '420', 'yellow', 12),
(18, 'sedan', '19', 'auto', 'octane', '32', '432', '394', 4, '320', 'red wine', 13),
(21, 'sedan', '26', 'auto', 'octane', '32', '160', '154', 4, '320', 'white', 9),
(22, 'sedan', '32', 'auto', 'electric', 'none', '432', '394', 4, '420', 'red', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`customer_id`),
  ADD KEY `booking_ibfk_2` (`car_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `chassis_no` (`chassis_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`spec_id`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specification`
--
ALTER TABLE `specification`
  ADD CONSTRAINT `specification_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

