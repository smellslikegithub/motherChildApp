
The motive of the proposed web based/mobile application is to connect all expectant mothers and their newborns under one umbrella by keeping track of their weekly/monthly health records, health issues while also localizing them to make any health-driven actions faster and effective in rural areas. Technology has yet to have a firm grasp on the locals in rural areas, unlike the situation in the urban areas, where technology has advanced significantly, yet the bridge between rural and urban health development remains less substantial. The proposed solution can provide concerned individuals with different sets of data, involving health and living conditions, which would help deploy health care related solutions in rural areas with more finesse and efficiency. This solution would promote the people to avail the technological health care from the valid sources around their zone as it connects the user of the applications to nearby help sources in the form of hospitals and NGOs.

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Web application installtion and running instructions
Prerequisites:
* Install PHP and set php env variable inyour windows machine, so that you can run commands using php from powershell in windows
	* You can also install wamp server, a free tool for getting php, and MYSQL server (We need both)
	* Once wamp is installed, go to its root directory, then look for a folder called php, go in it. Now go inside the bin folder, look for php.exe. Add the path of the exe file to windows env variable (PATH)
* install composer (Dependency manager for laravel and PHP)
* run the wamp server. 
* Go to the phpmyadmin page (Username = root, password = ); passwrod is empty, and create a empty database called mother_child



1. go to the root directory of the folder of the web-application
2. run command "php artisan key:generate" // env key generator
3. run command "php artisan migrate" // Create all the tables for the application
4. run command "php artisan db:seed" // I have made a seeder that will seed preliminary database. 
5. run command "php -S localhost:8000 -t public" // this command will make the application run live on the server
6. run localhost:8000 in your browser
7. You can login using the credentials Username: institute@hackathon.com ; Password: 123456

