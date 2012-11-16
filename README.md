# MADE/YOUR/DAY Coding Standards and Style Guide

## General

* Use UTF-8 without BOM
* Use tabs for indenting and spaces for aligning. [Details…](http://lea.verou.me/2012/01/why-tabs-are-clearly-superior/)
* No limit on line length. The soft limit is 120 characters. Lines SHOULD be 80 characters or less.
* No whitespace at the end of lines (except special meanings like in markdown or email)
* Always add a new line to the end of files (better for git)

## PHP

Follow the standards defined in [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md), [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) except the following points:

* Code MUST use tabs for indenting and spaces for aligning. [Details…](http://lea.verou.me/2012/01/why-tabs-are-clearly-superior/)
* `else` and `elseif` MUST be on the next line after the closing parenthesis
* To check if a value is empty or falsy use `$var` or `!$var` if the variable definitely exists, otherwise use `empty($var)` or `!empty($var)`
* Always use `===` and `!==` for string comparison
* Ommit the semicolon for single expressions in php templates (e.g. `<?php echo $var ?>` instead of `<?php echo $var; ?>`)
* The last item of an multiline array must end with a comma
* In PHP 5.4 `<?= $var ?>` should be used instead of `<?php echo $var ?>`
* In PHP 5.4 `[1, 2, 3]` should be used instead of `array(1, 2, 3)`

### Examples

* [php.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php.php) standard PHP code
* [php-template.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-template.php) PHP code used in a template
* [php-wordpress.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-wordpress.php) PHP code in WordPress themes follows the [WordPress Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards)
* [php-wordpress-template.php](https://github.com/madeyourday/Coding-Standards/blob/master/examples/php-wordpress-template.php) PHP code used in a WordPress template

## HTML

* HTML5
* Write everything in XHTML syntax except self closing tags and boolean attributes (`<input checked>` instead of `<input checked="checked" />`)
* Close all tags, except self closing tags as shown above

### Examples

* [html.html](https://github.com/madeyourday/Coding-Standards/blob/master/examples/html.html)

## Editors

### Sublime Text 2

Recommended settings:

	{
		"draw_white_space": "all",
		"ensure_newline_at_eof_on_save": true,
		"trim_trailing_white_space_on_save": true,
		"open_files_in_new_window": false,
		"rulers": [80, 120]
	}
