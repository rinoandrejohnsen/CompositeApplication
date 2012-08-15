<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class PriceCategoryList 
	{
		private $PriceCategoryListTypeSelect = -1;
		private $PRICECATEGORYLISTTYPE_PRICECATEGORY_CHOICE = 0;
		private $PRICECATEGORYLISTTYPE_PRICEGROUP_CHOICE = 1;
		private $PriceCategoryListTypepriceCategory;
		private $PriceCategoryListTypepriceGroup;

		private function SetPriceCategoryListTypeSelect($choice) {
			if ($this->PriceCategoryListTypeSelect == -1) {
				$this->PriceCategoryListTypeSelect = $choice;
			} elseif ($this->PriceCategoryListTypeSelect != $choice) {
				throw new RuntimeException('Need to call clearPriceCategoryListTypeSelect() before changing existing choice');
			}
		}
		public function ClearPriceCategoryListTypeSelect() {
			$this->PriceCategoryListTypeSelect = -1;
		}
		public function IfPriceCategoryListTypepriceCategory() {
			return $this->PriceCategoryListTypeSelect == $this->PRICECATEGORYLISTTYPE_PRICECATEGORY_CHOICE;
		}
		public function SetPriceCategoryListTypePriceCategory($PriceCategoryListTypepriceCategory) {
			$this->setPriceCategoryListTypeSelect($this->PRICECATEGORYLISTTYPE_PRICECATEGORY_CHOICE);
			$this->PriceCategoryListTypepriceCategory = $PriceCategoryListTypepriceCategory;
		}
		public function GetPriceCategoryListTypePriceCategory() {
			return $this->PriceCategoryListTypepriceCategory;
		}
		public function IfPriceCategoryListTypepriceGroup() {
			return $this->PriceCategoryListTypeSelect == $this->PRICECATEGORYLISTTYPE_PRICEGROUP_CHOICE;
		}
		public function SetPriceCategoryListTypePriceGroup($PriceCategoryListTypepriceGroup) {
			$this->setPriceCategoryListTypeSelect($this->PRICECATEGORYLISTTYPE_PRICEGROUP_CHOICE);
			$this->PriceCategoryListTypepriceGroup = $PriceCategoryListTypepriceGroup;
		}
		public function GetPriceCategoryListTypePriceGroup() {
			return $this->PriceCategoryListTypepriceGroup;
		}
    }
}