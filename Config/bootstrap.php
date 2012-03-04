<?php
/**
 * Bootstrap for IcingAuth 
 * 
 * Overwrites any of these value at app's bootstrap.php after calling CakePlugin::load()
 */


/**
 * Facebook configs
 *    Compulsory
 */
	Configure::write('IcingAuth.Facebook.app_id', 'App ID');
	Configure::write('IcingAuth.Facebook.app_secret', 'App Secret');
	Configure::write('IcingAuth.Facebook.redirect_uri', 'http://'.env('HTTP_HOST'));

/**
 * Facebook configs
 *    Optional
 */
	//Configure::write('IcingAuth.Facebook.scope, '');
