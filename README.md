# MADE/YOUR/DAY Coding Standards and Style Guide

## PHP

Follow the standards defined in [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md), [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) except the following points:

* Code MUST use tabs for indenting and spaces for aligning. [Details…](http://lea.verou.me/2012/01/why-tabs-are-clearly-superior/)
* `else` and `elseif` MUST be on the next line after the closing parenthesis
* To check if a value is empty or falsy use `$var` or `!$var` if the variable definitely exists, otherwise use `empty($var)` or `!empty($var)`
* always use `===` and `!==` for string comparison
* in PHP 5.4 `<?= $var ?>` should be used instead of `<?php echo $var ?>`
* in PHP 5.4 `[1, 2, 3]` should be used instead of `array(1, 2, 3)`

### Examples

* [php.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php.php) standard PHP code
* [php-template.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-template.php) PHP code used in a template
* [php-wordpress.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-wordpress.php) PHP code in WordPress themes follows the [WordPress Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards)
* [php-wordpress-template.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-wordpress-template.php) PHP code used in a WordPress template
