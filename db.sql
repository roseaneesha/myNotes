CREATE TABLE `my_notes`.`users` (
    `regNumber` VARCHAR(10) NOT NULL ,
    `password` VARCHAR(255) NOT NULL ,
    `timeStamp` TIMESTAMP NOT NULL ,
    PRIMARY KEY (`regNumber`)) ENGINE = InnoDB;

CREATE TABLE `my_notes`.`subject_uploads` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `subCode` VARCHAR(5) NOT NULL ,
    `subject` VARCHAR(100) NOT NULL ,
    `chapter` VARCHAR(100) NOT NULL , 
    `date` DATE NOT NULL , 
    `regNumber` VARCHAR(10) NOT NULL ,
    `filePath` VARCHAR(255) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;        

ALTER TABLE `subject_uploads` ADD FOREIGN KEY (`regNumber`) REFERENCES `users`(`regNumber`) ON DELETE CASCADE;
