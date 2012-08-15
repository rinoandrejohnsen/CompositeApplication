<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Person 
	{
		private $name;
		private $role;
		private $telephone;
		private $mobile;
		private $telephoneprivate;
		private $email;
		private $fax;
		private $id;

		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetRole(Role $role) {
			$this->role = $role;
		}
		public function GetRole() {
			return $this->role;
		}
		public function SetTelephone($telephone) {
			$this->telephone = $telephone;
		}
		public function GetTelephone() {
			return $this->telephone;
		}
		public function SetMobile($mobile) {
			$this->mobile = $mobile;
		}
		public function GetMobile() {
			return $this->mobile;
		}
		public function SetTelephonePrivate($telephoneprivate) {
			$this->telephoneprivate = $telephoneprivate;
		}
		public function GetTelephonePrivate() {
			return $this->telephoneprivate;
		}
		public function SetEmail($email) {
			$this->email = $email;
		}
		public function GetEmail() {
			return $this->email;
		}
		public function SetFax($fax) {
			$this->fax = $fax;
		}
		public function GetFax() {
			return $this->fax;
		}
		public function SetId($id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}