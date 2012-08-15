<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class PersonList 
	{
		private $personlist;

		public function SetPersons(array $personlist)		{
		$this->personlist = $personlist;
		}
		public function GetPersons()		{
		return $this->personlist;
		}
    }
}