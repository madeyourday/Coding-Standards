<?php
/*
 * Copyright MADE/YOUR/DAY <mail@madeyourday.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MadeYourDay\MyNamespace;

/**
 * Class title
 *
 * Class description...
 *
 * @author Author Name <author@email.com>
 */
class ClassName extends \ExtendedClass implements \ImplementedInterface
{
	/**
	 * @var integer Constant description
	 */
	const SOME_CONSTANT = 123;

	/**
	 * @var string Variable description
	 */
	public $foo = 'string';

	/**
	 * Method description
	 *
	 * @param string         $typeLess    description...
	 * @param ClassName      $forcingType description...
	 * @param ClassName|null $nullAllowed description...
	 */
	public function __construct($typeLess, ClassName $forcingType, ClassName $nullAllowed = NULL)
	{
		$output = 'value: ' . $typeLess;
		$list = array(
			'key' => 'value',
			'list2' => array(
				array('singlekey' => 'value'),
				array('singlekey2' => 'value2'),
			),
		);

		// Single line comment
		if ($typeLess) {
			$output .= 'Lorem ipsum dolor sit amet, consectetur adipisicing '
			         . 'elit sed do eiusmod tempor incididunt ut labore et '
			         . 'dolore magna aliqua. Ut enim ad minim veniam, quis '
			         . 'nostrud exercitation ullamco laboris nisi ut aliquip '
			         . 'ex ea commodo consequat. Duis aute irure dolor in.';
		}
		elseif (!empty($typeLess['key'])) {
			$output .= 'Lorem ipsum dolor sit amet, consectetur adipisicing ';
		}

		return $output;
	}

	/**
	 * Method description
	 *
	 * @return integer description...
	 */
	abstract public static function methodName()
	{
		return static::SOME_CONSTANT;
	}
}
