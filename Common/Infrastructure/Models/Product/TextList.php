<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class TextList 
	{
		private $textlist;

		public function SetTexts(array $textlist)		{
		$this->textlist = $textlist;
		}
		public function GetTexts()		{
		return $this->textlist;
		}
    }
}