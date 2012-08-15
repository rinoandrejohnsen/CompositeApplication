<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class AddressPostal
    {
        private $street;
        private $postalarea;
        private $country;

        public function SetStreet($street)
        {
            $this->street = $street;
        }

        public function GetStreet()
        {
            return $this->street;
        }

        public function SetPostalArea(PostalArea $postalarea)
        {
            $this->postalarea = $postalarea;
        }

        public function GetPostalArea()
        {
            return $this->postalarea;
        }

        public function SetCountry(Country $country)
        {
            $this->country = $country;
        }

        public function GetCountry()
        {
            return $this->country;
        }
    }
}