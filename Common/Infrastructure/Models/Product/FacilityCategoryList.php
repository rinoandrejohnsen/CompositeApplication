<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class FacilityCategoryList 
	{
		private $facilitycategorylist;

		public function SetFacilityCategorys(array $facilitycategorylist)		{
		$this->facilitycategorylist = $facilitycategorylist;
		}
		public function GetFacilityCategorys()		{
		return $this->facilitycategorylist;
		}
    }
}