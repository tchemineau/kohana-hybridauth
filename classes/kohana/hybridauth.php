<?php defined('SYSPATH') or die('No direct script access.');

/**
 * HybridAuth class
 *
 * @package   Kohana/HybridAuth
 * @author    Thomas Chemineau - thomas.chemineau@gmail.com
 * @copyright (c) 2007-2012 Thomas Chemineau
 * @copyright (c) 2007-2012 Kohana Team
 */
class Kohana_HybridAuth
{

	/**
	 * Get an Hybrid_Auth instance
	 *
	 * @return Hybrid_Auth
	 */
	public static function factory ( $config = null )
	{
		if (is_null($config))
		{
			$config = Kohana::$config->load('hybridauth');
		}
		return new Hybrid_Auth($config);
	}

}

