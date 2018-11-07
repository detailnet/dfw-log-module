# Zend Framework Module for logging

[![Build Status](https://travis-ci.org/detailnet/dfw-log-module.svg?branch=master)](https://travis-ci.org/detailnet/dfw-log-module)
[![Coverage Status](https://img.shields.io/coveralls/detailnet/dfw-log-module.svg)](https://coveralls.io/r/detailnet/dfw-log-module)
[![Latest Stable Version](https://poser.pugx.org/detailnet/dfw-log-module/v/stable.svg)](https://packagist.org/packages/detailnet/dfw-log-module)
[![Latest Unstable Version](https://poser.pugx.org/detailnet/dfw-log-module/v/unstable.svg)](https://packagist.org/packages/detailnet/dfw-log-module)

## Introduction
This module simplifies logging for a [Zend Framework](https://github.com/zendframework/zendframework) application.

## Requirements
[Zend Framework Skeleton Application](http://www.github.com/zendframework/ZendSkeletonApplication) (or compatible architecture)

## Installation
Install the module through [Composer](http://getcomposer.org/) using the following steps:

  1. `cd my/project/directory`
  
  2. Create a `composer.json` file with following contents (or update your existing file accordingly):

     ```json
     {
         "require": {
             "detailnet/dfw-log-module": "^1.1"
         }
     }
     ```
  3. Install Composer via `curl -s http://getcomposer.org/installer | php` (on Windows, download
     the [installer](http://getcomposer.org/installer) and execute it with PHP)
     
  4. Run `php composer.phar self-update`
     
  5. Run `php composer.phar install`
  
  6. Open `configs/application.config.php` and add following key to your `modules`:

     ```php
     'Detail\Log',
     ```

  7. Copy `vendor/detailnet/dfw-log-module/config/detail_log.local.php.dist` into your application's
     `config/autoload` directory, rename it to `detail_log.local.php` and make the appropriate changes.
