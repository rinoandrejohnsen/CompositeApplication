<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class CustomList 
	{
		private $customtypelist;

		public function SetCustomTypes(array $customtypelist)		{
		$this->customtypelist = $customtypelist;
		}
		public function GetCustomTypes()		{
		return $this->customtypelist;
		}
    }
}