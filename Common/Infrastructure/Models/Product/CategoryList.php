<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class CategoryList
    {
        private $category;

        public function SetCategory(array $category)
        {
            $this->category = $category;
        }

        public function GetCategory()
        {
            return $this->category;
        }
    }
}