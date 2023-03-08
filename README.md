# Lídia Jorge  Website

## Table of contents
* [What the project is about ](#what-the-project-is-about)
* [Technologies](#technologies)
* [How to Install](#how-to-install)
* [Run the Project](#run-the-project)
* [Frontoffice](#frontoffice)
* [Backoffice](#backoffice)


## What the project is about 

The project is a website of a writer that aims to promote the books published by her. This website is responsive and has in its structure the home, author, contacts, books and news pages. In addition, it has a back office area with access restricted to the administrator where it is possible to create, edit and delete the website publications.

## Technologies
Project is created with:
* PHP 7
* MySQL 8
* Bootrap 5
* JavaScript (ES6)
* HTML 5
* CSS 3

## How to Install

Make sure you have a web server preinstalled on your computer, such as: Xampp, Lamp, MAMP.

### Run the Project

1. Create a database, I called it `lidia.jorge`, but you can choose any other name.

2. Update the `config.php` file and add the database `username` and `password`.

3. Import the `dump-lidia.jorge-202302231722.sql` file into the created database.

4. (Optional) - If you don't have any web server installed, you can also choose to run an integrated PHP web server by running the following command in the terminal (command line or CMD):

  sh
  $ php -S 0.0.0.0:8080 -t .

`Note:` Be sure to run the command in the root of the project.


# How to Use the Project

In case you are using a pre-installed web server (lamp, xammp, mamp), clone the project in the `htdocs` folder

### Frontoffice

Access the url `http://localhost/<project_folder>`

### Backoffice

Access the url `http://localhost/<project_folder>/?area=admin&route=login`

Login: admin

Password: 12345
 
