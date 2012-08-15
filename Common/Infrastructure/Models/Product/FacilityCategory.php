<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class FacilityCategory 
	{
		private $name;
		private $facilitylist;
		private $id;

		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetFacilityList(FacilityList $facilitylist) {
			$this->facilitylist = $facilitylist;
		}
		public function GetFacilityList() {
			return $this->facilitylist;
		}
		public function SetId(FacilityCategoryId $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}