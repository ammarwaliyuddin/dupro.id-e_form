DROP TABLE IF EXISTS users_data;
CREATE TABLE IF NOT EXISTS `users_data` (   
    `email` varchar(100) NOT NULL,
    `nik` varchar(16) NOT NULL,   
    `noTelp` varchar(12) NOT NULL, 
    `tanggalLahir` DATE NOT NULL,   
    `usia` varchar(12) ,   
    `kotaAsal` varchar(100) ,   
    `domisili` varchar(100) ,   
    `pekerjaan` varchar(100) ,     
    `memasarkanProperti` ENUM ('sudah', 'belum'), 
    `handleSurvey` ENUM ('sudah', 'belum', 'sering'), 
    `closingProperti` ENUM ('sudah', 'belum', 'sering'), 
    `kepercayaanMemasarkan` ENUM ('sudah', 'belum'), 
    `sertifikatBNSP` ENUM ('Ya', 'Tidak'),     
    -- FOREIGN KEY (`email`),   
    UNIQUE KEY `email` (`email`)   
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  