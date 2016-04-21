Yii2 widget displays simply menu
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-menu-simply "*"
```

or add

```
"plance/yii2-widget-menu-simply": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Set menu item:
```php
/**
 * Set one link
 */
Menu::set('<a href="#">One link</a>');

/**
 * Or set many links
 */
Menu::set([
	'<a href="#">First link</a>',
	'<a href="#">Second link</a>',
	'<a href="#">Third link</a>'
]);
```

Show menu:
```php
<?php echo Menu::widget(); ?>
```