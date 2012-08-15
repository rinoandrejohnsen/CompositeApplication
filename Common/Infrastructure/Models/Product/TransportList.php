<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class TransportList 
	{
		private $transportlist;

		public function SetTransports(array $transportlist)		{
		$this->transportlist = $transportlist;
		}
		public function GetTransports()		{
		return $this->transportlist;
		}
    }
}