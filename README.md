# CakePHP Application Skeleton

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## ✨Local Setup

### **Before downloading/cloning this repo, make sure that you have php and composer installed on your machine.**

Check if already installed by `php --version` and `composer --version`
    
To know more about Composer, click [here](https://getcomposer.org/)

#### Now follow these commands to setup the project 👇

```bash
git clone https://github.com/james3gh/cakephp4.3-project.git
```

```bash
cd cakephp4.3-project
```

```bash
composer install
```

## Configuration

* **Create a new database (say cakephp-proj) in phpmyadmin**

* **Create a table named `books` inside it with the given structure**

<img src="https://user-images.githubusercontent.com/87705437/147845015-5c645ee6-6c6a-4ef4-9606-6e6ca65a0187.png" width="700px"/>

* **Inside the project folder, open `config` folder. Open a file named `app_local.php` inside it.**<br> 
**Setup the username, password, db_name which you created in the above steps. By default username will be `root` with `no password` .**

<img src="https://user-images.githubusercontent.com/87705437/147845109-9ac475d6-0ed7-4cde-ae4b-5e05709131b4.png" width="600px"/>

Other environment agnostic settings can be changed in `config/app.php`.

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765/book` to see the project.



## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.
