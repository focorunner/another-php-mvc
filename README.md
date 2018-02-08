# another-php-mvc

Just what the world needed. Another PHP MVC framework. 

Since I had been working in an OOP framework that didn't use MVC pattern for a couple of years, and wanted to review MVC patterns, I followed a course/tutorial to build this from scratch.

There are some things I would add before trying to use this. For example, once logged in anyone can visit the profile page and change key user data, like email address and password, but entering current password isn't required. I don't consider that very secure, so adding a means for secondary email verification when email updates are requested, and requiring current password to update profile would be good. In addition, user access levels to control access to admin areas. 

Framework includes secure user registration/login, and I like how the routing is handled. 

Requires some composer packages (run ```composer install``` from project folder):

* twig/twig ~2.0
* mailgun/mailgun-php ^2.4
* php-http/guzzle6-adapter ^1.1
* php-http/message ^1.6

SQL script for the basic database structure (assuming MySQL) is in the root folder. 
