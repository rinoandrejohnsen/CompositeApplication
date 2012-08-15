<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Location 
	{
		private $type;
		private $street;
		private $postalarea;
		private $municipality;
		private $county;
		private $region;
		private $country;
		private $geolocation;
		private $id;

		public function SetType( $type) {
			$this->type = $type;
		}
		public function GetType() {
			return $this->type;
		}
		public function SetStreet($street) {
			$this->street = $street;
		}
		public function GetStreet() {
			return $this->street;
		}
		public function SetPostalArea(PostalArea $postalarea) {
			$this->postalarea = $postalarea;
		}
		public function GetPostalArea() {
			return $this->postalarea;
		}
		public function SetMunicipality(Municipality $municipality) {
			$this->municipality = $municipality;
		}
		public function GetMunicipality() {
			return $this->municipality;
		}
		public function SetCounty(County $county) {
			$this->county = $county;
		}
		public function GetCounty() {
			return $this->county;
		}
		public function SetRegion(County $region) {
			$this->region = $region;
		}
		public function GetRegion() {
			return $this->region;
		}
		public function SetCountry(Country $country) {
			$this->country = $country;
		}
		public function GetCountry() {
			return $this->country;
		}
		public function SetGeoLocation(GeoLocation $geolocation) {
			$this->geolocation = $geolocation;
		}
		public function GetGeoLocation() {
			return $this->geolocation;
		}
		public function SetId($id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}