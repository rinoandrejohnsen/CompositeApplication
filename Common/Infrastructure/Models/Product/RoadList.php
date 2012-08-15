<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class RoadList 
	{
		private $roadlist;

		public function SetRoads(array $roadlist)		{
		$this->roadlist = $roadlist;
		}
		public function GetRoads()		{
		return $this->roadlist;
		}
    }
}