<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class Category
    {
        private $name;
        private $id;
        private $categorysubtype1list;

        public function SetName($name)
        {
            $this->name = $name;
        }

        public function GetName()
        {
            return $this->name;
        }
        
        public function SetId($id)
        {
            $this->id = $id;
        }

        public function GetId()
        {
            return $this->id;
        }

        public function SetCategorySubType1List(array $categorysubtype1list)
        {
            $this->categorysubtype1list = $categorysubtype1list;
        }

        public function GetCategorySubType1List()
        {
            return $this->categorysubtype1list;
        }
    }
}