DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS `users` (   
    `id_user` int(11) NOT NULL AUTO_INCREMENT,   
    `nama` varchar(100) NOT NULL,      
    `email` varchar(100) NOT NULL,   
    `password` varchar(64) NOT NULL,  
		`level` int(1) NOT NULL,  
    PRIMARY KEY (`id_user`),   
    UNIQUE KEY `email` (`email`)   
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  