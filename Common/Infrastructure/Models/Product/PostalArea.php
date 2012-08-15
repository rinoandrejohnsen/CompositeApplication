<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{

    class PostalArea
    {

        private $postalCode;
        private $value;

        public function GetPostalCode()
        {
            return $this->postalCode;
        }

        public function SetPostalCode($postalCode)
        {
            $this->postalCode = $postalCode;
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