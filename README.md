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
- Username	: `test_user`
- Email	: `test@test.com`
- Password	: `6ZaxN2Vzm9NUJT2y`

### Prerequisites
Name | Description | Version
------------ | ------------- | -------------
[Apache](https://www.apachefriends.org/index.html) | The Apache HTTP Server is a free and open-source cross-platform web server. | Windows 32 or 64 bit
[PHP](https://www.apachefriends.org/index.html) |  Hypertext Preprocessor is a server-side scripting language designed for Web development. | PHP 5.3 or newer
[MySQL](https://www.apachefriends.org/index.html) | MySQL is an open-source relational database management system.. | Any

### Steps
- Change the variables in `includes/psl-config.php` to match your own MySQL database connection.
- Run `sql/secure_accounts.sql` or at it to your MySQL database.
    
## References
[SQL injection](https://www.w3schools.com/sql/sql_injection.asp)

[Session hijacking](https://www.owasp.org/index.php/Session_hijacking_attack)

[Brute-force attack](https://en.wikipedia.org/wiki/Brute-force_attack)

[Cross-site Scripting](https://www.owasp.org/index.php/Cross-site_Scripting_%28XSS%29)

[Covert Timing Channel](https://cwe.mitre.org/data/definitions/385.html)

## License
This project is licensed under the [MIT License](https://github.com/JasperDre/Simple-and-secure-accounts/blob/master/LICENSE.md).
Licenses of tools and dependencies are not included and may vary.
