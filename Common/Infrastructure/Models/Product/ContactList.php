<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class ContactList 
	{
		private $contactlist;

		public function SetContacts(array $contactlist)		{
		$this->contactlist = $contactlist;
		}
		public function GetContacts()		{
		return $this->contactlist;
		}
    }
}