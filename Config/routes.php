<?php
/**
 * Routing alias for IcingAuth
 */
	Router::connect('/icingauth/:controller/*', array('plugin' => 'IcingAuth'));