
Simple Dairy Record Management System

## Features 
* Manage farmers
* Manage employees and their roles
* Record delivery
* Set payment rates
* Pay farmers
* View reports

## Roles
### 1.  Manager
Has access to all the features
### 2.  Supervisor
Can perform all MAnager tasks **except**
* Set payment rates
* Manage employees

### 3.  Clerk
The employee who is receiving the deliveries
* Record deliveries
* Add Farmers
* View reports

# Quick Guide

1. Clone this repo to your documents root e.g under `c:\xampp\htdocs\Dairy` on windows
2. Import the `dairy.sql` file to your database. (You can create a database called dairy using phpmyadmin and import this file into it)
3. open `inc\conn.incl.php` file and enter your database settings
```php
define('db_host', 'localhost');
define('db_user', 'root');
define('db_password', '');
define('db_database', 'dairy');
```
4. Open the url to your project e.g [http://localhost/Dairy(http://localhost/Dairy) and login with an already created account

## Demo Accounts
### 1. Manager
email: manager@example.com

password: manager123

 


#   M i l k - m g t - s y s t e m 
 
 
