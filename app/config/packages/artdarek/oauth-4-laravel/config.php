<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Google' => array(
            'client_id'     => '1030326884130-8aa4a40hburfvqm4f70rg29r9q5ddmu3.apps.googleusercontent.com',
            'client_secret' => '-FRpU2O-xJsJ9l_6WEuax6tf',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),

    )

);