CREATE DATABASE IF NOT EXISTS `secure_accounts`;

CREATE TABLE `secure_accounts`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `secure_accounts`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL
) ENGINE = InnoDB;

INSERT INTO `secure_accounts`.`members` VALUES(1, 'test', 'test@test.com',
'$2y$10$IrzYJi10j3Jy/K6jzSLQtOLif1wEZqTRQoK3DcS3jdnFEhL4fWM4G');
