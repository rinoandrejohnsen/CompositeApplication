<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class ScheduleList 
	{
		private $schedulelist;

		public function SetSchedules(array $schedulelist)		{
		$this->schedulelist = $schedulelist;
		}
		public function GetSchedules()		{
		return $this->schedulelist;
		}
    }
}