<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
    class Text
    {
        private $type;
        private $lang;
        private $mime;
        private $modified;
        private $modifiedBy;
        private $value;

        public function GetType()
        {
            return $this->type;
        }

        public function SetType($type)
        {
            $this->type = $type;
        }

        public function GetLang()
        {
            return $this->lang;
        }

        public function SetLang($lang)
        {
            $this->lang = $lang;
        }

        public function GetMime()
        {
            return $this->mime;
        }

        public function SetMime($mime)
        {
            $this->mime = $mime;
        }

        public function GetModified()
        {
            return $this->modified;
        }

        public function SetModified($modified)
        {
            $this->modified = $modified;
        }

        public function GetModifiedBy()
        {
            return $this->modifiedBy;
        }

        public function SetModifiedBy($modifiedBy)
        {
            $this->modifiedBy = $modifiedBy;
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