<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class PriceList 
	{
		private $pricelist;

		public function SetPrices(array $pricelist)		{
		$this->pricelist = $pricelist;
		}
		public function GetPrices()		{
		return $this->pricelist;
		}
    }
}