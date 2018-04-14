<?php
/**
 * Structure_Mailchimp class
 *
 * @package APIAPI\Structure_Billomat
 * @since   1.0.0
 */

namespace APIAPI\Structure_Mailchimp;

use APIAPI\Core\Structures\Structure;
use APIAPI\Core\Request\Method;

if ( ! class_exists( 'APIAPI\Structure_Mailchimp\Structure_Mailchimp' ) ) {

	/**
	 * Structure implementation for Mailchimp.
	 *
	 * @since 1.0.0
	 */
	class Structure_Mailchimp extends Structure {
		/**
		 * Sets up the API structure.
		 * This method should populate the routes array, and can also be used to
		 * handle further initialization functionality, like setting the authenticator
		 * class and default authentication data.
		 *
		 * @since 1.0.0
		 */
		protected function setup() {
			$this->title         = 'Mailchimp API';

			$this->description   = 'Allows to access and manage the data in your Mailchimp account.';
			$this->base_uri      = 'https://{datacenter}.api.mailchimp.com/3.0';

			$this->base_uri_params['datacenter'] = array(
				'description' => 'datacenter of the account.',
				'internal'    => true,
			);

			$this->authenticator = 'basic';
			$this->authentication_data_defaults = array(
				'username' => 'APIAPI'
			);

			$this->routes['/lists'] = array(
				'methods' => array(
					Method::GET  => array(
						'description'          => 'Get Lists',
						'needs_authentication' => true,
						'request_data_type'    => 'json'
					)
				)
			);
		}
	}
}
