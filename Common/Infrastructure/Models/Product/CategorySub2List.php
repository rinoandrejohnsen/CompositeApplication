<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class CategorySub2List
    {
        private $categorysubtype2list;

        public function SetCategorySubType2s(array $categorysubtype2list)
        {
            $this->categorysubtype2list = $categorysubtype2list;
        }

        public function GetCategorySubType2s()
        {
            return $this->categorysubtype2list;
        }
    }
}