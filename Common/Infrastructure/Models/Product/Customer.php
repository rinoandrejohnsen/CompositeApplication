<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Customer 
	{
		private $name;
		private $address;
		private $addresspostal;
		private $contactinformation;
		private $geolocation;
		private $businessinformation;
		private $personlist;
		private $documentlist;
		private $customercategorylist;
		private $productlist;
		private $id;
		private $id;
		private $id;
		private $id;
		private $id;
		private $customobjectnumber;

		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetAddress(Address $address) {
			$this->address = $address;
		}
		public function GetAddress() {
			return $this->address;
		}
		public function SetAddressPostal(AddressPostal $addresspostal) {
			$this->addresspostal = $addresspostal;
		}
		public function GetAddressPostal() {
			return $this->addresspostal;
		}
		public function SetContactInformation(ContactInformation $contactinformation) {
			$this->contactinformation = $contactinformation;
		}
		public function GetContactInformation() {
			return $this->contactinformation;
		}
		public function SetGeoLocation(GeoLocation $geolocation) {
			$this->geolocation = $geolocation;
		}
		public function GetGeoLocation() {
			return $this->geolocation;
		}
		public function SetBusinessInformation(BusinessInformation $businessinformation) {
			$this->businessinformation = $businessinformation;
		}
		public function GetBusinessInformation() {
			return $this->businessinformation;
		}
		public function SetPersonList(PersonList $personlist) {
			$this->personlist = $personlist;
		}
		public function GetPersonList() {
			return $this->personlist;
		}
		public function SetDocumentList(DocumentList $documentlist) {
			$this->documentlist = $documentlist;
		}
		public function GetDocumentList() {
			return $this->documentlist;
		}
		public function SetCustomerCategoryList(CustomerCategoryList $customercategorylist) {
			$this->customercategorylist = $customercategorylist;
		}
		public function GetCustomerCategoryList() {
			return $this->customercategorylist;
		}
		public function SetProductList(ProductList $productlist) {
			$this->productlist = $productlist;
		}
		public function GetProductList() {
			return $this->productlist;
		}
		public function SetId(SurrogateKey $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetId(SurrogateKey $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetId(SurrogateKey $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetId(SurrogateKey $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetId(SurrogateKey $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetCustomObjectNumber($customobjectnumber) {
			$this->customobjectnumber = $customobjectnumber;
		}
		public function GetCustomObjectNumber() {
			return $this->customobjectnumber;
		}
    }
}