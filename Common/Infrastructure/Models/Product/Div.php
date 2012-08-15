<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Div 
	{
		private $capacity;
		private $yearbuilt;
		private $yearrenovated;
		private $starrating;
		private $externalreference;

		public function SetCapacity($capacity) {
			$this->capacity = $capacity;
		}
		public function GetCapacity() {
			return $this->capacity;
		}
		public function SetYearBuilt($yearbuilt) {
			$this->yearbuilt = $yearbuilt;
		}
		public function GetYearBuilt() {
			return $this->yearbuilt;
		}
		public function SetYearRenovated($yearrenovated) {
			$this->yearrenovated = $yearrenovated;
		}
		public function GetYearRenovated() {
			return $this->yearrenovated;
		}
		public function SetStarRating($starrating) {
			$this->starrating = $starrating;
		}
		public function GetStarRating() {
			return $this->starrating;
		}
		public function SetExternalReference($externalreference) {
			$this->externalreference = $externalreference;
		}
		public function GetExternalReference() {
			return $this->externalreference;
		}
    }
}