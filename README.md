# Web-Event-Organizer
An event organizing web application built with [CodeIgniter 3](https://codeigniter.com/) framework

## Requirements
- [Vagrant](https://www.vagrantup.com/downloads.html)
- [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- [Homestead Box](https://github.com/laravel/homestead) (will available in this repo, probably)

## Running
Make sure to add this in your `Homestead.yaml` file.
On the maps:
```
map: 'C:\path\to\projects'    
to: /home/vagrant/code  
```

and to your sites
```
map: eventorg.test   
to: /home/vagrant/code/projectW
php: "5.6"
```
The domain may be changed as you wish, and also you **need add it to the hosts file.**
Such as

```
192.168.10.10 eventorg.test
```
---
You may also add phpMyAdmin (if you're using it) in the `Homestead.yaml` file.
On the folders:
```
map: 'C:\Users\Farrell\Documents\Websites\phpMyAdmin'
to: /home/vagrant/code/phpMyAdmin
```
and on the sites to redirect it
```
map: phpmyadmin.test
to: /home/vagrant/code/phpMyAdmin
php: "7.2"
```

### Database
Make sure to import the event_login.sql file that is located in this root repository.
To do this:
1. Create a database named "event_login" in phpMyAdmin
2. Go to Import
3. Choose the event_login.sql file

You could go the commandline way with Git Bash, follow the solution [here](https://stackoverflow.com/questions/33336659/how-to-import-existing-database-to-homestead).

### Dependencies
Since I am using Homestead which comes prepackaged with PHP, MySQL, Composer and many others, you should already have them, but additionally, run
```
composer install
```
just in case.

### To be implemented
- Vendor Menu
- Order functionality

## People in this project
- [Farrell Nathaniel](https://github.com/FrostHard)
- [Grand Marcell](https://github.com/GMarcell)
