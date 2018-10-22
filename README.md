<a href="https://github.com/JasperDre/Simple-and-secure-accounts"><img src="images/icons/icon.png" align="right" width="120" height="120" alt="Secure Accounts" title="Secure Accounts"></a>

# Simple-and-secure-accounts
A simple and secure php login framework with data-filtering and encryption using modern techniques.

## Table of contents
- [Usage](#usage)
    - [Prerequisites](#prerequisites)
    - [Steps](#steps)
- [Features](#features)
- [References](#references)
- [Contributors](#contributors)
- [License](#license)

## Usage
Until we reach [version 1.0](https://github.com/JasperDre/Simple-and-secure-accounts/milestones) the module won't have an interface or full security. However, most features are currently supported or at least partially implemented.

The default user from `sql/secure_accounts.sql` contains these values:
- Username	: `testuser`
- Email	: `tester@test.com`
- Password	: `Test123`

### Prerequisites
Name | Description | Version
------------ | ------------- | -------------
[Apache](https://www.apachefriends.org/index.html) | The Apache HTTP Server is a free and open-source cross-platform web server. | Any
[PHP](https://www.apachefriends.org/index.html) |  Hypertext Preprocessor is a server-side scripting language designed for web development. | PHP 5.3 or newer
[MySQL](https://www.apachefriends.org/index.html) | MySQL is an open-source relational database management system. | Any

### Steps
- Change the variables in `includes/psl-config.php` to match your MySQL database connection.
- Run `sql/secure_accounts.sql` or add the structure to your MySQL database.

### Features
- Setup interface.
    - [ ] Run and modify SQL query
    - [ ] Modify settings
- Users
    - [x] Log in
    - [ ] Two-factor authentication
    - [ ] Remember
    - [x] Register
    - [x] Log out
    - [ ] Profile
        - [ ] Picture
        - [ ] Password reset
        - [ ] E-mail change
    - [ ] Permissions
        - [x] Hidden pages
        - [x] Hidden content
        - [ ] Access based on level
- Protection
    - [x] SQL injection
    - [x] Session hijacking
    - [x] Brute-force attacks
    - [x] XSS
    - [x] Covert timing channel attacks
    
## References
[SQL injection](https://www.w3schools.com/sql/sql_injection.asp)

[Session hijacking](https://www.owasp.org/index.php/Session_hijacking_attack)

[Brute-force attack](https://en.wikipedia.org/wiki/Brute-force_attack)

[Cross-site Scripting](https://www.owasp.org/index.php/Cross-site_Scripting_%28XSS%29)

[Covert Timing Channel](https://cwe.mitre.org/data/definitions/385.html)

## Contributors
- [Fly-d-e-v](https://github.com/JasperDre/Simple-and-secure-accounts/issues?utf8=%E2%9C%93&q=author%3AFly-d-e-v)

## License
This project is licensed under the [MIT License](https://github.com/JasperDre/Simple-and-secure-accounts/blob/master/LICENSE.md).
Licenses of tools and dependencies are not included and may vary.
