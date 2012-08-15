<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class CustomAreaList 
	{
		private $customarealist;

		public function SetCustomAreas(array $customarealist)		{
		$this->customarealist = $customarealist;
		}
		public function GetCustomAreas()		{
		return $this->customarealist;
		}
    }
}