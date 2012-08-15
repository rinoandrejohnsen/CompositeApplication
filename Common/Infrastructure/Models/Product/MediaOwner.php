<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class MediaOwner
    {
        private $name;
        private $telephone;
        private $addresspostal;

        public function SetName($name)
        {
            $this->name = $name;
        }

        public function GetName()
        {
            return $this->name;
        }

        public function SetTelephone($telephone)
        {
            $this->telephone = $telephone;
        }

        public function GetTelephone()
        {
            return $this->telephone;
        }

        public function SetAddressPostal(AddressPostal $addresspostal)
        {
            $this->addresspostal = $addresspostal;
        }

        public function GetAddressPostal()
        {
            return $this->addresspostal;
        }
    }
}