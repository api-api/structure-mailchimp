<?php

class Mailchimp_TestCase extends Structure_TestCase {
	/**
	 * @var \APIAPI\Core\APIAPI
	 */
	protected $apiapi;

	/**
	 * @var \APIAPI\Structure_Mailchimp\Structure_Mailchimp
	 */
	protected $api;

	protected function setUp() {

		$datacenter = getenv( 'MAILCHIMP_DATACENTER' );
		$api_key = getenv( 'MAILCHIMP_API_KEY' );

		$config = array(
			'transporter'            => 'curl',
			'mailchimp'                => array(
				'authentication_data' => array(
					'password'   => $api_key
				),
				'params' =>array(
					'datacenter'    => 'us18'
				)
			)
		);

		$this->apiapi = apiapi( 'test-api', $config );
	}
}
