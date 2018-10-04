# Simple-and-secure-accounts
A simple and secure php login framework with data-filtering and encryption using modern techniques.

## Table of contents
- [Usage](#usage)
    - [prerequisites](#prerequisites)
    - [steps](#steps)
- [references](#references)
- [License](#license)

## Usage
The default user from `sql/secure_accounts.sql` contains these values:
- Username	: test_user 
- Email	: test@test.com 
- Password	: 6ZaxN2Vzm9NUJT2y

### Prerequisites
Name | Description | Version
------------ | ------------- | -------------
[cURL](https://curl.haxx.se/) | Curl is used in command lines or scripts to transfer data. | Windows 32 or 64 bit
[Java](https://www.oracle.com/technetwork/java/javase/overview/index.html) | Java lets you develop and deploy Java applications on desktops and servers. | JDK and JRE 8 or newer

### Steps
- Change the variables in `includes/psl-config.php` to match your own MySQL database connection.
- Run `sql/secure_accounts.sql` or at it to your MySQL database.
    
## References
[Simple instructions to build CraftBukkit and Spigot](https://www.spigotmc.org/wiki/buildtools/)

[A guide to installing a Spigot server](https://www.spigotmc.org/wiki/spigot-installation/)

## License
This project is licensed under the [MIT License](https://github.com/JasperDre/Simple-and-secure-accounts/blob/master/LICENSE.md).
Licenses of tools and dependencies are not included and may vary.
