<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class CategorySub2
    {
        private $name;
        private $id;

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
    }
}