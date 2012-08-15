<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class DistanceList 
	{
		private $distancelist;

		public function SetDistances(array $distancelist)		{
		$this->distancelist = $distancelist;
		}
		public function GetDistances()		{
		return $this->distancelist;
		}
    }
}