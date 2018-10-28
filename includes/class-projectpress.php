<?php
/**
 * Class Projectpress
 */
class Projectpress
{
	/**
	 * The single instance of the class.
	 *
	 * @var Projectpress
	 */
	protected static $_instance = null;

	/**
	 * Main Projectpress Instance.
	 *
	 * Ensures only one instance is loaded or can be loaded.
	 *
	 * @static
	 *
	 * @return Projectpress - Main instance.
	 */
	public static function instance()
	{
		if ( is_null( self::$_instance ) )
		{
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Projectpress constructor.
	 */
	public function __construct()
	{
	}
}