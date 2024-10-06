# Requirements
1. XAMPP

# MySQL with phpMyAdmin
```
CREATE DATABASE parents;
USE parents;

CREATE TABLE parent(
	id int AUTO_INCREMENT,
	name VARCHAR(50),
	lastname VARCHAR(50),
	genre VARCHAR(1),
	PRIMARY KEY(id)
);
```

# Database Setup
Open 'actions/connect.php'.
```
$connect = new mysqli(
	'localhost', // server
	'root', // user
	'', // password
	'parents', // database
	3306 // port
);
```

# External Links
1. FontAwesome
2. SweetAlert2