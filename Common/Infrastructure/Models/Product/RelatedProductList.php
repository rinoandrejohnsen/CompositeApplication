<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class RelatedProductList 
	{
		private $relatedproductlist;

		public function SetRelatedProducts(array $relatedproductlist)		{
		$this->relatedproductlist = $relatedproductlist;
		}
		public function GetRelatedProducts()		{
		return $this->relatedproductlist;
		}
    }
}