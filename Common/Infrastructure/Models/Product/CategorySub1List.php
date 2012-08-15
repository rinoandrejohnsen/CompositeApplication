<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{

    class CategorySub1List
    {

        private $categorysubtype1list;

        public function SetCategorySubType1s(array $categorysubtype1list)
        {
            $this->categorysubtype1list = $categorysubtype1list;
        }

        public function GetCategorySubType1s()
        {
            return $this->categorysubtype1list;
        }

    }

}