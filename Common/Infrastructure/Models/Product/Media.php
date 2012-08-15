<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class Media
    {
        private $name;
        private $description;
        private $copyright;
        private $thumbnail;
        private $small;
        private $large;
        private $raw;

        public function SetName($name)
        {
            $this->name = $name;
        }

        public function GetName()
        {
            return $this->name;
        }

        public function SetDescription($description)
        {
            $this->description = $description;
        }

        public function GetDescription()
        {
            return $this->description;
        }

        public function SetCopyright(MediaOwner $copyright)
        {
            $this->copyright = $copyright;
        }

        public function GetCopyright()
        {
            return $this->copyright;
        }

        public function SetThumbnail(Image $thumbnail)
        {
            $this->thumbnail = $thumbnail;
        }

        public function GetThumbnail()
        {
            return $this->thumbnail;
        }

        public function SetSmall(Image $small)
        {
            $this->small = $small;
        }

        public function GetSmall()
        {
            return $this->small;
        }

        public function SetLarge(Image $large)
        {
            $this->large = $large;
        }

        public function GetLarge()
        {
            return $this->large;
        }

        public function SetRaw(File $raw)
        {
            $this->raw = $raw;
        }

        public function GetRaw()
        {
            return $this->raw;
        }
    }
}