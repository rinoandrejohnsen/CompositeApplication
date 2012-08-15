<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class CustomerCategoryList 
	{
		private $customercategorylist;

		public function SetCustomerCategorys(array $customercategorylist)		{
		$this->customercategorylist = $customercategorylist;
		}
		public function GetCustomerCategorys()		{
		return $this->customercategorylist;
		}
    }
}