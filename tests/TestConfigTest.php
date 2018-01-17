<?php

/**
 * Title: Mollie - iDEAL Basic - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Mollie_IDealBasic_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_Mollie_IDealBasic_TestConfig();

		$expected = 'https://secure.mollie.nl/xml/idealAcquirer/testmode/lite/';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
