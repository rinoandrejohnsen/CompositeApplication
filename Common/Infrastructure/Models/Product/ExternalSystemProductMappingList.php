<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class ExternalSystemProductMappingList 
	{
		private $externalsystemproductmappinglist;

		public function SetExternalSystemProductMappings(array $externalsystemproductmappinglist)		{
		$this->externalsystemproductmappinglist = $externalsystemproductmappinglist;
		}
		public function GetExternalSystemProductMappings()		{
		return $this->externalsystemproductmappinglist;
		}
    }
}