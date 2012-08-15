<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Advertisement 
	{
		private $type;
		private $email;
		private $uri;
		private $linktext;
		private $fromdate;
		private $todate;
		private $price;
		private $id;

		public function SetType( $type) {
			$this->type = $type;
		}
		public function GetType() {
			return $this->type;
		}
		public function SetEmail($email) {
			$this->email = $email;
		}
		public function GetEmail() {
			return $this->email;
		}
		public function SetURI($uri) {
			$this->uri = $uri;
		}
		public function GetURI() {
			return $this->uri;
		}
		public function SetLinkText($linktext) {
			$this->linktext = $linktext;
		}
		public function GetLinkText() {
			return $this->linktext;
		}
		public function SetFromDate($fromdate) {
			$this->fromdate = $fromdate;
		}
		public function GetFromDate() {
			return $this->fromdate;
		}
		public function SetToDate($todate) {
			$this->todate = $todate;
		}
		public function GetToDate() {
			return $this->todate;
		}
		public function SetPrice($price) {
			$this->price = $price;
		}
		public function GetPrice() {
			return $this->price;
		}
		public function SetId($id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}