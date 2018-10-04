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

INSERT INTO `secure_accounts`.`members` VALUES(1, 'testuser', 'tester@test.com',
'$2y$10$bE9nfr53i6J1jjLWw9Kp1.K1a9I/UQGwCOIgOSKsTlBT4jZOtwlNm');
