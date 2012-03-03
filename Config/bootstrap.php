<?php
/**
 * Bootstrap for IcingAuth 
 * 
 * Overwrites any of these value at app's bootstrap.php after calling CakePlugin::load()
 * 
 */

Configure::write('IcingAuth.uses', array());

/**
 * Facebook configs
 */
Configure::write('IcingAuth.Facebook', array(
	'id' => 'App ID',
	'secret' => 'secret key'
));
Configure::write('IcingAuth.uses.facebook', true);
