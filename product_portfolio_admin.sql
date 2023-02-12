-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 02:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_portfolio_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) NOT NULL,
  `Id` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `Id`, `Password`, `Email`) VALUES
(1, 'Pawan', '1234567', 'pawandeepsingh37870@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_id` int(25) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Product_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`Photo_id`, `Location`, `Product_id`) VALUES
(1, 'upload/Tea Tree Skin.jpg', 1),
(6, 'upload/Brightening Marine Mineral Mask.jpg', 21),
(7, 'upload/Cucumber Eye Balm.jpg', 22),
(8, 'upload/Skin Food Lip Balm.png', 23),
(51, 'upload/pexels-beata-dudovÃ¡-234220 (1).jpg', 23),
(53, 'upload/download.png', 23),
(55, 'upload/Capture.JPG', 23);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(25) NOT NULL,
  `date_created` date NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Product_Description` varchar(3000) NOT NULL,
  `Product_Ingredients` varchar(3000) NOT NULL,
  `Number_of_Item` int(11) NOT NULL,
  `Product_Rate` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `date_created`, `Product_Name`, `Category`, `Product_Description`, `Product_Ingredients`, `Number_of_Item`, `Product_Rate`) VALUES
(1, '2023-01-09', 'Tea Tree Skin Clearing Facial Wash', 'FaceWash', '<p><strong>What does it do for you ?</strong></p>\r\n\r\n<p>If you&rsquo;ve noticed a few blemishes, there&rsquo;s a cocktail of oil, makeup and grime building up in your pores and your skin is screaming out help, our Tea Tree Skin Clearing Facial Wash is here to save the day. It&rsquo;s a refreshing tea tree face wash that will help your skin find balance.</p>\r\n\r\n<p>If you&rsquo;re prone to excess oil and blemishes, it&rsquo;s time to come face to face with a regimented skincare routine. First step, meet your new tea tree cleanser. Our face wash has been formulated with blemished skin in mind, to help give you that refreshed feeling. It&rsquo;s hard-working, vegan and enriched with Community Fair Trade tea tree oil from Kenya. And to top it off, The Body Shop&rsquo;s tea tree face wash has been a lengthy trusted favourite for its ability to help oust grime to reveal more mattified, clearer-looking skin.</p>\r\n\r\n<p>You can enjoy that squeaky clean feeling with every use and live beautifully confident every day knowing that this little guy is working hard behind the scenes.</p>\r\n\r\n<ul>\r\n	<li>Vegan goodness</li>\r\n	<li>Enriched with Community Fair Trade tea tree oil from Kenya</li>\r\n	<li>Deeply cleanses grubby faces</li>\r\n	<li>Oh-so-refreshing on skin</li>\r\n	<li>Kind and gentle on blemished skin</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Community Fair Trade Tea Tree Oil</li>\r\n	<li>Tea tree oil is the holy grail for oily and blemished skin, thanks to its naturally purifying talents.</li>\r\n</ul>\r\n', 10, 100),
(21, '2023-01-09', 'Brightening Marine Mineral Mask', 'FaceMask', '<p>Use once or twice a week, after cleansing and exfoliating. Apply a big teaspoon full over face, neck&nbsp;and d&eacute;colletage. Avoid the eye area. Leave on for 15-20 minutes.</p>\r\n\r\n<p>Remove with a damp face cloth. Tone and moisturise as normal.</p>\r\n\r\n<p>Apply a Skin Boost under the mask for added benefit. Our tip &ndash; this mask was born to partner with&nbsp;<a href=\"https://www.sodashi.com.au/product/recovery-skin-boost/\">Recovery Skin Boost</a>!</p>\r\n\r\n<p>The masks are easier to apply after first warming between fingertips.</p>\r\n\r\n<h2><strong>Tips</strong></h2>\r\n\r\n<p>For a more intensive brightening, leave for 15 minutes, dampen fingers and work the&nbsp;mask in to the skin&nbsp;leave for another&nbsp;10-15 minutes if you have time.</p>\r\n\r\n<p>A very good mask to use after a long flight.</p>\r\n', '<p>aqua (purified water), macadamia integrifolia (macadamia) seed oil, prunus armeniaca (apricot) kernel oil, prunus dulcis (almond) oil, cetearyl alcohol (plant derived), simmondsia chinensis (jojoba) seed oil, butyrospermum parkii (shea) butter, kaolinite (australian yellow clay), kaolin (australian white clay), dehydroacetic acid &amp; benzyl alcohol (geogard221), fucus vesiculosus (fucus), lavandula angustifolia (lavender) flower extract, xanthan gum, zeolite (zeolite ultrafine clay), aniba rosaeodora (rosewood) wood oil, citrus limon (lemon) oil, tocopherol (vitamin E), pogostemon cablin (patchouli) oil, potassium sorbate, spirulina platensis (spirulina) powder.</p>\r\n', 36, 96),
(22, '2023-01-09', 'Cucumber Eye Balm', 'Eye Balm', '<h3><strong>What does it do?</strong></h3>\r\n\r\n<p>Cooling and calming eye cream.&nbsp;This little number is best kept in the fridge to emphasise the cooling effect and to help reduce puffiness.</p>\r\n\r\n<p>Cucumber oil is very cooling and calming. Smells of fresh cucumbers. Is soothing and tightening.<br />\r\n&nbsp;</p>\r\n\r\n<p>Organic aloe vera gel is high in amino acids and is very anti-inflammatory. Helps to increase collagen production of the skin. Teamed with the cucumber oil, makes this a dynamic duo for the eyes.</p>\r\n\r\n<h3><strong>How to use it:</strong></h3>\r\n\r\n<p>Add a few drops to the finger and gently pat around the eye area, avoiding the eye itself. After sun or a day at the beach, spread over the entire face to remove redness and heat. Serve cold.</p>\r\n', '<p>Aloe Barbadensis Leaf, Aqua, Organic Sunflower Seed Oil, Organic Glycerin, Organic Coconut Oil, Organic Camellia Seed Oil, Cucumber Oil, Stearyl Alcohol, Cetearyl Olivate, Shea Butter, Cetyl Alcohol, Isoamyl Laurate (natural), Euphorbia Sorbitan Olivate, Green Tea Extract, Ginseng Extract, Vitamin E, Salicylic Acid, Sorbic Acid, Benzyl Alcohol, Xanthan Gum, Chlorophyll</p>\r\n', 12, 45),
(23, '2023-01-09', 'Weleda - Skin Food Lip Balm', 'Balm', '<p>WHO NEEDS THIS?</p>\r\n\r\n<p>Suitable for dry, chapped or (uninfected) split lips.</p>\r\n\r\n<p>HOW DO I USE IT?&nbsp;</p>\r\n\r\n<p>Keep applying as often as needed on clean lips until they become smooth and chap-free.</p>\r\n\r\n<p><strong>Precautions:</strong><br />\r\n<em>Stop using the product immediately and consult a dermatologist when redness, swelling, or other skin irritations occur,&nbsp;and consult a physician. Avoid applying the product on open wounds or skin inflammation. Keep away from direct sunlight and out of reach of infants and children.</em></p>\r\n', '<p>Helianthus Annuus Seed Oil, Lanolin, Cera Alba, Glycerin, Viola Tricolor Extract, Rosmarinus Officinalis Leaf Extract, Chamomilla Recutita (Matricaria) Flower Extract, Calendula Officinalis Flower Extract, Alcohol, Water, Fragrance*, Limonene*, Linalool*, Geraniol*.</p>\r\n', 18, 54);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Comment` varchar(10000) NOT NULL,
  `Product_id` int(100) NOT NULL,
  `Added_on` date NOT NULL,
  `Reply` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Review_Id`, `Name`, `Email`, `Comment`, `Product_id`, `Added_on`, `Reply`) VALUES
(1, 'pawan', 'pawandeepsingh37870@gmail.com', 'nice', 23, '2023-02-08', 'good'),
(2, 'bn', 'ssdf', 'ffffffffffffffffff', 23, '2023-02-08', 'good'),
(3, 'bn', 'ssdf', 'ffffffffffffffffff', 23, '2023-02-08', 'nimo'),
(5, 'Pawandeep ', 'pawandeepsingh37870@gmail.com', 'nvcxbn ', 23, '2023-02-09', 'good'),
(6, 'Pawandeep ', 'pawandeepsingh37870@gmail.com', 'nvcxbn ', 23, '2023-02-09', 'good'),
(7, 'Pawandeep ', 'pawandeepsingh37870@gmail.com', 'more', 23, '2023-02-10', 'ok thanks....for ur review'),
(8, 'prabh', 'ad,fbmsbf,msa@gmail.com', 'very nice product', 23, '2023-02-11', 'Thank you for ur review'),
(9, 'prabh', 'ad,fbmsbf,msa@gmail.com', 'very nice product', 23, '2023-02-11', 'thank you'),
(10, 'love', ',jsgfjmsvfmnbsmfn@gmail.com', 'i really like this product.', 23, '2023-02-11', 'buy it.....'),
(11, 'sati', 'sati10@gmail.com', 'keep it up nice work', 0, '2023-02-12', ''),
(12, 'kuljitfg', '123@gmail.com', 'try', 23, '2023-02-12', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Password`,`Id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Photo_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
