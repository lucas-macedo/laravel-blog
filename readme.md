# Blog-Laravel
A simple, clean and beautiful blogging application written in Laravel 5.1.

## Features

* Bootstrap Blog 3.x clean blog
* Custom Error Pages
	* 403 for forbidden page accesses
	* 404 for not found pages
	* 500 for internal server errors
* Back-end
	* Upload and Image management
	* Manage blog posts and Tag
	* ckeditor and management layout
* Front-end
	* User login
	* User account area
	* Blog
	* Rss Feed and Sitemap
	* Contact Us
	
	
* Packages included:
	* [HTMLmin](https://github.com/GrahamCampbell/Laravel-HTMLMin "HTML Minify")
	* [php-rss-writer](https://github.com/suin/php-rss-writer "php rss writer")
	* [guzzle](https://github.com/guzzle/guzzle "guzzle")
	* [Ckeditor](http://ckeditor.com "Ckeditor")
	

## Issues
See [github issue list](https://github.com/turahe/blog/issues "Issues") for current list.

-----

##Requirements

	

    PHP >= 5.5.9
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension



Installation instructions for the mcrypt extension are available [here](http://php.net/manual/en/mcrypt.installation.php).

##How to install
### Step 1: Get the code
#### Option 1: Git Clone


	$ git clone git://github.com/turahe/blog.git laravel

#### Option 2: Download the repository

    https://github.com/turahe/blog/archive/master.zip
	
### Option 3: Download with Composer
		composer require turahe/blog


### Step 2: Use Composer to install dependencies
#### Option 1: Composer is not installed globally


	$ cd laravel
	$ curl -s https://getcomposer.org/installer | php
	$ php composer.phar install


#### Option 2: Composer is installed globally


	$ cd laravel
	$ composer install




Some packages used to preprocess and minify assests are required on the development environment.

When you deploy your project on a production environment you will want to upload the ***composer.lock*** file used on the development environment and only run `php composer install` on the production server.

This will skip the development packages and ensure the version of the packages installed on the production server match those you developped on.

NEVER run `php composer update` on your production server.


### Step 3: Install dependencies Laravel
####1. install packages from npm
	`npm install`
    
for install packages npm and laravel-elixir
####2. Install library via bower

    `bower install`
this step will downloads jquery, bootstap font awesome and other
####3. Configure library
    `gulp coyfiles`
then
    `gulp`
or
	`gulp --production`
for install library on compressed


### Step 4: Configure Database

Now that you have the environment configured, you need to create a database configuration for it. Edit the file ***config/database.php*** to match your local database settings. You can remove all the parts that you have not changed as this configuration file will be loaded over the initial one.




### Step 5: Populate Database
Run these commands to create and populate Users table:


	`$ php artisan migrate
	$ php artisan db:seed`


### Step 6: Set Encryption Key
***In .env***

copy file .env.example to .env

    `copy .env.example .env` 

for windows users or 

    cp env.example env
for linux user and OS X

so then generate Encyption key


    $ php artisan key:generate 



### Step 7: Make sure app/storage is writable by your web server.

If permissions are set correctly:


	$ chmod -R 775 app/storage


Should work, if not try

	$ chmod -R 777 app/storage


### Step 8: Set user

Creating new user for administrator

    php artisan tinker
    Psy Shell v0.4.3 (PHP 5.6.7-1+deb.sury.org~utopic+1 — cli) by Justin Hileman
	>>> $user = new App\User;
	=> <App\User {#690}
	>>> $user->name = 'Your Name';
	=> "Your Name"
	>>> $user->email = 'YOUR@email.com';
	=> "YOUR@email.com"
	>>> $user->password = bcrypt('YOUR PASSWORD');
	=> "$2y$10$gBF9EIr9IrIbMX7dwQsCTO6IsBC0/c0P6qzZ01zwPhoW61MMwOVgC"
	>>> $user->save();
	=> true
	>>> exit;

### Step 9: Configure Mailer

First, edit config/mail.php as instructed below.
Changes to config/mail.php

	// Find the following line
 	 'from' => ['address' => null, 'name' => null],
	// Change it to
 	 'from' => ['address' => env('MAIL_FROM'), 'name' => env('MAIL_NAME')],

Next, edit .env, changing the mail configuration to what’s below (replacing USERNAME, PASSWORD, FROM, etc. your own settings).
Gmail Configuration in .env

	MAIL_DRIVER=smtp
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=587
	MAIL_USERNAME=YOUR@EMAIL.COM
	MAIL_PASSWORD=YOUR-GMAIL-PASSWORD
	MAIL_FROM=YOUR@EMAIL.COM
	MAIL_NAME=YOUR-NAME

### Step 10: Setting commnent
going to disqus and create acount to create comment adminstrations and copy file javascript, copy to `resource/view/blog/partials/disqus.blade.php` 
##Contact Me
Any questions, feel free to [contact me](http://facebook.com/nur.wachid "Nur Wachid").
