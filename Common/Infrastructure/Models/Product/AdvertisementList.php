<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class AdvertisementList 
	{
		private $advertisementlist;

		public function SetAdvertisements(array $advertisementlist)		{
		$this->advertisementlist = $advertisementlist;
		}
		public function GetAdvertisements()		{
		return $this->advertisementlist;
		}
    }
}