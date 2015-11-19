<?php

class Pronamic_WP_Pay_Gateways_Mollie_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		parent::__construct();

		$this->id            = 'mollie-ideal-basic';
		$this->name          = 'Mollie - iDEAL Basic';
		$this->dashboard_url = 'http://www.mollie.nl/';
		$this->provider      = 'mollie';
		$this->deprecated    = true;
	}
}
