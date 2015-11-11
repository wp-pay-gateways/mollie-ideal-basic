<?php

class Pronamic_WP_Pay_Gateways_Mollie_IDealBasic_Integration {
	public function __construct() {
		$this->id            = 'mollie-ideal-basic';
		$this->name          = 'Mollie - iDEAL Basic';
		$this->dashboard_url = 'http://www.mollie.nl/';
		$this->provider      = 'mollie';
		$this->deprecated    = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Gateway';
	}
}
