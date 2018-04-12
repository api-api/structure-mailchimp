<?php
/**
 * Structure loader.
 *
 * @package APIAPI\Structure_Billomat
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_structure_mailchimp' ) ) {

	/**
	 * Registers the structure for Billomat.
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_structure_mailchimp() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->structures()->register( 'mailchimp', 'APIAPI\Structure_Mailchimp\Structure_Mailchimp' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_structures_loader'] ) ) {
				$GLOBALS['_apiapi_structures_loader'] = array();
			}

			$GLOBALS['_apiapi_structures_loader']['mailchimp'] = 'APIAPI\Structure_Mailchimp\Structure_Mailchimp';
		}
	}

	apiapi_register_structure_mailchimp();

}
