FrameworkStandardBundle
=======================
[![Latest Stable Version]
(https://poser.pugx.org/avoo/framework-standard-edition/v/stable.svg)](https://packagist.org/packages/avoo/framework-standard-edition)
[![License]
(https://poser.pugx.org/avoo/framework-standard-edition/license.svg)](https://packagist.org/packages/avoo/framework-standard-edition)

This Symfony Standard Edition is a basic installer and resource generator based on [**Sylius**](http://sylius.org) philosophy.

What's inside?
--------------

The standard edition is automatically configured for:

  * Generate resource, model, form, controller and CRUD with Sylius logic
  
  * Include default Core bundle and Backend bundle

  * Add fully decoupled components for any resources


The framework use by default the following bundles:

  * Sylius resource bundle

  * Sylius rbac bundle

  * Sylius storage

  * FOS user


Installation
------------

before following the instructions it's better to create your database.

``` bash
composer create-project avoo/framework-standard-edition my-project-folder
```

Be careful, it's extremely recommend to install the default Core and Backend for using the generator.

``` bash
Would you like to install default core bundle (Recommended)? [y/n] 
Choose your application name: MyApp
Installing Core bundle.
Would you like to install default backend bundle (Recommended)? [y/n] 
Choose your application name: MyApp
Installing Backend bundle.
```

Run ``` bash php app/console avoo:install ``` and follow the instructions

TIPS: "yes" is the best answer ;)

Create an administrator, chose the role "administrator".

Enjoy.
