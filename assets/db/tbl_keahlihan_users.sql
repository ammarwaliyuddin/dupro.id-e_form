DROP TABLE IF EXISTS keahlian_users;
CREATE TABLE IF NOT EXISTS `keahlian_users` (   
    `email` varchar(100) NOT NULL,
    `nama_keahlian` varchar(100) NOT NULL,    
    `detail` varchar(100) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  