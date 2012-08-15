<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class FacilityList 
	{
		private $facilitylist;

		public function SetFacilitys(array $facilitylist)		{
		$this->facilitylist = $facilitylist;
		}
		public function GetFacilitys()		{
		return $this->facilitylist;
		}
    }
}