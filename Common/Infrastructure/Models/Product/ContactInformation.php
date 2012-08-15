<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class ContactInformation
    {
        private $telephone;
        private $mobile;
        private $email;
        private $fax;
        private $web;

        public function SetTelephone($telephone)
        {
            $this->telephone = $telephone;
        }

        public function GetTelephone()
        {
            return $this->telephone;
        }

        public function SetMobile($mobile)
        {
            $this->mobile = $mobile;
        }

        public function GetMobile()
        {
            return $this->mobile;
        }

        public function SetEmail($email)
        {
            $this->email = $email;
        }

        public function GetEmail()
        {
            return $this->email;
        }

        public function SetFax($fax)
        {
            $this->fax = $fax;
        }

        public function GetFax()
        {
            return $this->fax;
        }

        public function SetWeb($web)
        {
            $this->web = $web;
        }

        public function GetWeb()
        {
            return $this->web;
        }
    }
}