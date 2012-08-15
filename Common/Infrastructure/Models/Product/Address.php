<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product 
{
    class Address
    {
        private $street;
        private $postalarea;
        private $submunicipality;
        private $municipality;
        private $county;
        private $country;
        private $gnumber;
        private $bnumber;
        private $fnumber;
        private $snumber;

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

        public function SetSubMunicipality(SubMunicipality $submunicipality)
        {
            $this->submunicipality = $submunicipality;
        }

        public function GetSubMunicipality()
        {
            return $this->submunicipality;
        }

        public function SetMunicipality(Municipality $municipality)
        {
            $this->municipality = $municipality;
        }

        public function GetMunicipality()
        {
            return $this->municipality;
        }

        public function SetCounty(County $county)
        {
            $this->county = $county;
        }

        public function GetCounty()
        {
            return $this->county;
        }

        public function SetCountry(Country $country)
        {
            $this->country = $country;
        }

        public function GetCountry()
        {
            return $this->country;
        }

        public function SetGNumber($gnumber)
        {
            $this->gnumber = $gnumber;
        }

        public function GetGNumber()
        {
            return $this->gnumber;
        }

        public function SetBNumber($bnumber)
        {
            $this->bnumber = $bnumber;
        }

        public function GetBNumber()
        {
            return $this->bnumber;
        }

        public function SetFNumber($fnumber)
        {
            $this->fnumber = $fnumber;
        }

        public function GetFNumber()
        {
            return $this->fnumber;
        }

        public function SetSNumber($snumber)
        {
            $this->snumber = $snumber;
        }

        public function GetSNumber()
        {
            return $this->snumber;
        }

    }

}