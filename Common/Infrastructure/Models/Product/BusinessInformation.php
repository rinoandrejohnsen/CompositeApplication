<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class BusinessInformation 
	{
		private $vatnumber;
		private $accountnumber;
		private $postalgiroaccountnumber;

		public function SetVatNumber($vatnumber) {
			$this->vatnumber = $vatnumber;
		}
		public function GetVatNumber() {
			return $this->vatnumber;
		}
		public function SetAccountNumber($accountnumber) {
			$this->accountnumber = $accountnumber;
		}
		public function GetAccountNumber() {
			return $this->accountnumber;
		}
		public function SetPostalGiroAccountNumber($postalgiroaccountnumber) {
			$this->postalgiroaccountnumber = $postalgiroaccountnumber;
		}
		public function GetPostalGiroAccountNumber() {
			return $this->postalgiroaccountnumber;
		}
    }
}