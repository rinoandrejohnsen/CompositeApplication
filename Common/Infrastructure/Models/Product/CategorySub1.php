<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class CategorySub1
    {
        private $name;
        private $id;
        private $categorysubtype2list;

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

        public function SetCategorySubType2List(array $categorysubtype2list)
        {
            $this->categorysubtype2list = $categorysubtype2list;
        }

        public function GetCategorySubType2List()
        {
            return $this->categorysubtype2list;
        }
    }
}