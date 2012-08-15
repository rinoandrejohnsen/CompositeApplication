<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class GeoLocation 
	{
		private $longitude;
		private $latitude;
		private $elevation;
		private $mapreference;
		private $type;

		public function SetLongitude($longitude) {
			$this->longitude = $longitude;
		}
		public function GetLongitude() {
			return $this->longitude;
		}
		public function SetLatitude($latitude) {
			$this->latitude = $latitude;
		}
		public function GetLatitude() {
			return $this->latitude;
		}
		public function SetElevation($elevation) {
			$this->elevation = $elevation;
		}
		public function GetElevation() {
			return $this->elevation;
		}
		public function SetMapReference($mapreference) {
			$this->mapreference = $mapreference;
		}
		public function GetMapReference() {
			return $this->mapreference;
		}
		public function SetType($type) {
			$this->type = $type;
		}
		public function GetType() {
			return $this->type;
		}
    }
}