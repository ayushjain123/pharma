CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
DROP TABLE IF EXISTS offline_pharmacy;
CREATE TABLE offline_pharmacy (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_price1` decimal(10,2) NOT NULL,
  `prod_price2` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `prod_pic1` varchar(500) NOT NULL,
  `prod_store1` varchar(500) NOT NULL,
  `prod_store2` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `offline_pharmacy` (`prod_id`, `prod_name`, `prod_desc`, `prod_price1`, `prod_price2`, `category`, `prod_pic1`, `prod_store1`, `prod_store2`) VALUES('off_1', 'Lisinopirl', 'anti-hypertensive drug', 120.00, 125.00, 'Blood Pressure','bp.jpg', 'Store1', 'Store2'),
VALUES('off_1', 'Metmorfin', 'anti-diabitic drug', 250.00, 285.00, 'Diabetes','metmorfin.jpg', 'Store1', 'Store2');


DROP TABLE IF EXISTS online_pharmacy;
CREATE TABLE online_pharmacy (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_price1` decimal(10,2) NOT NULL,
  `prod_price2` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `prod_pic1` varchar(500) NOT NULL,
  `prod_service1` varchar(500) NOT NULL,
  `prod_service2` varchar(500) NOT NULL,
  `prod_delivery_charges1` varchar(500) NOT NULL,
  `prod_delivery_charges2` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `online_pharmacy` (`prod_id`, `prod_name`, `prod_desc`, `prod_price1`, `prod_price2`, `category`, `prod_pic1`, `prod_service1`, `prod_service2`,`prod_delivery_charges1`, `prod_delivery_charges2`) VALUES(1, 'Lisinopirl', 'anti-hypertensive drug', 120.00, 125.00, 'Blood Pressure','lisinorpil.jpg', 'NetMeds.com', 'PharmEasy', 0, 10), 
(2, 'Metmorfin', 'anti-diabitic drug', 220.00, 235.00, 'Diabetes','metmorfin.jpg', 'NetMeds.com', 'PharmEasy', 0, 10);


DROP TABLE IF EXISTS doctors;
CREATE TABLE doctors (
`doc_id` int(11) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `doc_desc` varchar(500) NOT NULL,
  `doc_fees` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `doc_pic1` varchar(500) NOT NULL,
  `doc_speciality1` varchar(500) NOT NULL,
  `doc_speciality2` varchar(500) NOT NULL,
  `doc_contact` varchar(20) NOT NULL
)ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
  
INSERT INTO `doctors` (`doc_id`, `doc_name`, `doc_desc`, `doc_fees`, `category`, `doc_pic1`, `doc_speciality1`, `doc_speciality2`,`doc_contact`) VALUES 
(1,'Prashant Kavthekar','MD',1500,'Cardiologist', 'doctor.jpg', 'Cardiology','Cardial Issues','1234567890'), 
(2,'Rajkumar Agrawal','MBBS',500,'General Physician', 'doctor1.jpg', 'N/A','N/A','1234567890');