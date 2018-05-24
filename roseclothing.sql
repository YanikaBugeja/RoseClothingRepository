-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 07:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roseclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryDesc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryDesc`) VALUES
(1, 'Tops'),
(2, 'Dresses'),
(3, 'Jeans'),
(4, 'Shirts'),
(5, 'Hoodies'),
(6, 'Bags'),
(7, 'Jackets'),
(8, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ClientId` int(11) NOT NULL,
  `ClientName` varchar(15) DEFAULT NULL,
  `ClientSurname` varchar(15) DEFAULT NULL,
  `ClientEmail` varchar(50) DEFAULT NULL,
  `ClientPassword` varchar(15) DEFAULT NULL,
  `ClientAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientId`, `ClientName`, `ClientSurname`, `ClientEmail`, `ClientPassword`, `ClientAddress`) VALUES
(14, 'Yanika', 'Bugeja', 'yanikabugeja@hotmail.co.uk', 'testing1', 'BKR 4310'),
(15, 'Test', 'Account', 'testemail@gmail.com', 'testing2', 'Test Address'),
(16, 'Test2', 'Account2', 'yanika.bugeja.b31253@mcast.edu.mt', 'testing3', 'Test Address 2'),
(17, 'Yanika', 'Bugeja', 'TestingEmail@gmail.com', 'Testing123', ' BRK 123'),
(18, 'testingaccount', 'testingaccount2', 'testing@gmail.com', '1234567', ' atr 223');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `GenderId` int(11) NOT NULL,
  `GenderDesc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GenderId`, `GenderDesc`) VALUES
(1, 'Female'),
(2, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `InventoryId` int(11) NOT NULL,
  `InventoryDesc` varchar(50) DEFAULT NULL,
  `InventoryImage` varchar(100) DEFAULT NULL,
  `InventoryPrice` varchar(5) DEFAULT NULL,
  `GenderId` int(1) NOT NULL,
  `CategoryId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`InventoryId`, `InventoryDesc`, `InventoryImage`, `InventoryPrice`, `GenderId`, `CategoryId`) VALUES
(1, 'French Connection White Dress', 'uploads\\FrenchConnectionDress.jpg', '70', 1, 2),
(2, 'Tommy Hilfiger T-Shirt', 'uploads\\TommyJeansTshirt.jpg\r\n', '25', 2, 1),
(3, 'ASOS Halter Striped Dress', 'uploads\\AsosHalterDressStriped.jpg', '30', 1, 2),
(4, 'Ted Baker Small Icon Bag', 'uploads\\TedBakerIconBag.jpg', '35', 1, 6),
(5, 'Ted Baker Backpack', 'uploads\\TedBakerBackpackMale.jpg', '95', 2, 6),
(6, 'Levi Denim Jacket', 'uploads\\LeviDenimJacket.jpg', '150', 1, 7),
(7, 'Levi T-shirt', 'uploads\\LeviMenTshirt.jpg', '25', 2, 1),
(8, 'Tommy Jeans Flag Hoodie', 'uploads\\TommyFlagHoodie.jpg', '110', 2, 5),
(9, 'Tommy Jeans Hoodie', 'uploads\\TommyHoodie.jpg', '90', 2, 5),
(10, 'Calvin Klein White Swimsuit', 'uploads\\CalvinKleinSwimsuit.jpg', '60', 1, 8),
(11, 'Asos Black Denim Jacket', 'uploads\\AsosDenimJacket.jpg', '30', 2, 7),
(12, 'Asos Black Leather Jacket', 'uploads\\AsosLeatherJacket.jpg', '55', 1, 7),
(13, 'Cheap Monday Black T-shirt', 'uploads\\CheapMondaysTshirt.jpeg', '15', 2, 1),
(14, 'Hugo Boss Blue Velvet Suit Jacket', 'uploads\\VelvetSuitJacket.jpg', '150', 2, 7),
(15, 'Levis Mid-Wash Ripped Jeans', 'uploads\\MidWashRippedJeans.jpg', '80', 2, 3),
(16, 'Calvin Klein Balck Ripped Jeans', 'uploads\\BlackJeans.jpg', '70', 2, 3),
(17, 'Asos White Shirt', 'uploads\\WhiteShirt.jpg', '35.50', 2, 4),
(18, 'Ralph Lauren Blue Shirt', 'uploads\\RalphLaurenShirt.jpg', '130', 2, 4),
(19, 'Tommy Hilfiger Swimming Shorts', 'uploads\\TommySwimmingShorts.jpg', '50', 2, 8),
(20, 'Asos Striped Swimming Shorts', 'uploads\\StripedSwimmingShorts.jpg', '20', 2, 8),
(21, 'Tommy Jeans Dark-Wash Jeans', 'uploads\\DarkWashJeans.jpg', '80', 1, 3),
(22, 'Asos Cropped Mid-Wash Jeans', 'uploads\\CroppedJeans.jpg', '40', 1, 3),
(23, 'Chi Chi Wrap Over White Top', 'uploads\\WrapOverTop.jpg', '26', 1, 1),
(24, 'Cheap Monday Cropped Tee', 'uploads\\CroppedTee.jpg', '15', 1, 1),
(25, 'Boohoo White Fitted Shirt', 'uploads\\WhiteFittedShirt.jpg', '25.99', 1, 4),
(26, 'Boohoo Sheer Black Shirt', 'uploads\\SheerShirt.jpg', '15', 1, 4),
(27, 'Adidas Olive Green Sweater', 'uploads\\AdidasSweater.jpg', '65', 1, 5),
(28, 'Missguided Off Shoulder Black Sweater', 'uploads\\OffShoulderSweater.jpg', '13.50', 1, 5),
(29, 'Tommy Hilfiger Tote Bag', 'uploads\\TommyTote.jpg', '180', 1, 6),
(30, 'Tommy Jeans Beach Towel', 'uploads\\TommyTowel.jpg', '190', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_orders`
--

CREATE TABLE `inventory_orders` (
  `OrderId` int(11) NOT NULL,
  `InventoryId` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_orders`
--

INSERT INTO `inventory_orders` (`OrderId`, `InventoryId`, `ID`) VALUES
(0, 9, 8),
(0, 16, 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderStatus` varchar(15) DEFAULT NULL,
  `ClientId` int(2) NOT NULL,
  `InventoryId` int(10) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `OrderId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderStatus`, `ClientId`, `InventoryId`, `ID`, `OrderId`) VALUES
('Processing', 14, 3, 21, 9),
('Processing', 14, 1, 22, 8),
('Processing', 14, 1, 23, 7),
('Processing', 14, 1, 24, 6),
('Processing', 14, 1, 25, 5),
('Processing', 14, 1, 26, 4),
('Processing', 14, 10, 27, 3),
('Processing', 14, 10, 28, 2),
('Processing', 14, 5, 29, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ClientId`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`GenderId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`InventoryId`),
  ADD KEY `CategoryId` (`CategoryId`),
  ADD KEY `InventoryImage` (`InventoryImage`),
  ADD KEY `GenderId` (`GenderId`);

--
-- Indexes for table `inventory_orders`
--
ALTER TABLE `inventory_orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `InventoryId` (`InventoryId`),
  ADD KEY `OrderId_2` (`OrderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ClientId` (`ClientId`),
  ADD KEY `ClientId_2` (`ClientId`),
  ADD KEY `InventoryId` (`InventoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ClientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `GenderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `InventoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `inventory_orders`
--
ALTER TABLE `inventory_orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`),
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`GenderId`) REFERENCES `gender` (`GenderId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ClientId`) REFERENCES `client` (`ClientId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`InventoryId`) REFERENCES `inventory` (`InventoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
