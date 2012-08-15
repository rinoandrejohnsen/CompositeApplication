<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class LocationList 
	{
		private $locationlist;

		public function SetLocations(array $locationlist)		{
		$this->locationlist = $locationlist;
		}
		public function GetLocations()		{
		return $this->locationlist;
		}
    }
}