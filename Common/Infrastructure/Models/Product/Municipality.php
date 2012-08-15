<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class Municipality
    {
        private $id;
        private $value;

        public function GetId()
        {
            return $this->id;
        }

        public function SetId($id)
        {
            $this->id = $id;
        }

        public function GetValue()
        {
            return $this->value;
        }

        public function SetValue($value)
        {
            $this->value = $value;
        }
    }
}