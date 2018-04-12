<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class UsersTests extends Mailchimp_TestCase {
	public function testLogin() {
		$request = $this->apiapi->get_request_object( 'mailchimp', '/lists' );

		$response = $this->apiapi->send_request( $request );

		$this->assertEquals( 200, $response->get_response_code() );
	}
}