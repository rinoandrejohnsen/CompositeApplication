<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Contact 
	{
		private $type;
		private $name;
		private $telephone;
		private $fax;
		private $mobile;
		private $email;
		private $id;

		public function SetType( $type) {
			$this->type = $type;
		}
		public function GetType() {
			return $this->type;
		}
		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetTelephone($telephone) {
			$this->telephone = $telephone;
		}
		public function GetTelephone() {
			return $this->telephone;
		}
		public function SetFax($fax) {
			$this->fax = $fax;
		}
		public function GetFax() {
			return $this->fax;
		}
		public function SetMobile($mobile) {
			$this->mobile = $mobile;
		}
		public function GetMobile() {
			return $this->mobile;
		}
		public function SetEmail($email) {
			$this->email = $email;
		}
		public function GetEmail() {
			return $this->email;
		}
		public function SetId($id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}