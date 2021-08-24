CREATE database challenge;

use challenge;

DROP TABLE IF EXISTS `loginportal`;

CREATE TABLE `loginportal` (
  `uno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `priv` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginportal`
--

INSERT INTO `loginportal` (`uno`, `username`, `password`, `email`, `priv`) VALUES
(1, 'management', 'pa$$word', 'hsjhjahsfj@gmail.com', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginportal`
--
ALTER TABLE `loginportal`
  ADD PRIMARY KEY (`uno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginportal`
--
ALTER TABLE `loginportal`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
