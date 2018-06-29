-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2017 at 03:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsz`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) NOT NULL,
  `nop` int(11) DEFAULT '0',
  `non` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `nop`, `non`) VALUES
('rj@jj.in', 0, 0),
('rj@jj.in', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `national`
--

CREATE TABLE `national` (
  `dept` varchar(25) NOT NULL,
  `email` varchar(256) NOT NULL,
  `non` int(11) NOT NULL,
  `nop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `national`
--

INSERT INTO `national` (`dept`, `email`, `non`, `nop`) VALUES
('agri', 'secy-agri@nic.in', 0, 0),
('snr_advsr', 'pradviser-agri.@gov.in', 0, 0),
('sec1', 'jspp-agri.@nic.in', 0, 0),
('sec2', 'sangeeta.v.@nic.in', 0, 0),
('sec3', 'ag.comm.@nic.in', 0, 0),
('sec4', 'ascc-agri.@nic.in', 0, 0),
('sec5', 'ashok.dalwai.@gov.in', 0, 0),
('sec6', 'sjalaj.@ias.nic.in', 0, 0),
('ksiidc', 'ksiidcit@gmail.com', 0, 0),
('acb_head', 'adgp.acb@karnataka.gov.in ', 0, 0),
('leather', 'cle@cleindia.com ', 0, 0),
('nic', 'indiaportal.@gov.in', 0, 0),
('iicc', 'care@irctc.co.in', 0, 0),
('combined', 'mail@consumerredressal.com', 0, 0),
('icrp', 'icrpc.india@gmail.com', 0, 0),
('indian_bank', 'indmail@indianbank.co.in', 0, 0),
('indian_zonal', 'cmdsec@indianbank.co.in', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `department` varchar(25) NOT NULL,
  `email` varchar(256) NOT NULL,
  `non` int(11) NOT NULL,
  `nop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`department`, `email`, `non`, `nop`) VALUES
('cm_office', 'chiefminister@karnataka.gov.in', 0, 0),
('agri_kar', 'min-agriculture@karnataka.gov.in', 0, 0),
('mark_kar', 'min-agm@karnataka.gov.in', 0, 0),
('animal_kar', 'min-ah@karnataka.gov.in', 0, 0),
('bwssb_kar', 'min-bwssb@karnataka.gov.in', 0, 0),
('coopr_kar', 'min-cooperation@karnataka.gov.in', 0, 0),
('dpe_kar', 'min-dpe@karnataka.gov.in', 0, 0),
('home_kar', 'min-home@karnataka.gov.in', 0, 0),
('trans_kar', 'min-transport@karnataka.gov.in', 0, 0),
('urb_kar', 'min-ud@karnataka.gov.in', 0, 0),
('finance_kar', 'secybud-fd@karnataka.gov.in', 0, 0),
('fie_kar', 'secyexp-fd@karnataka.gov.in', 0, 0),
('law_kar', 'law@karnataka.gov.in', 0, 0),
('revenue_kar', 'secylrf-rev@karnataka.gov.in', 0, 0),
('agri_kar2', 'commn-agriculture@karnataka.gov.in', 0, 0),
('dgp_kar', 'g-police@karnataka.gov.in', 0, 0),
('hd_kar', 'http://www.karnataka.gov.in/mail_depthead.html', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email_id`, `phone`, `password`) VALUES
('rj', 'rj@jj.in', 988888888, '1234'),
('xyz', 'rjain.rahul5@gmail.com', 2147483647, 'qwertyu'),
('yoyo', 'sdggvdefwvc', 1234567890, 'efscefc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `email_id` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
