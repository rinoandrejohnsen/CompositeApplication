<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class MediaList 
	{
		private $medialist;

		public function SetMedias(array $medialist)		{
		$this->medialist = $medialist;
		}
		public function GetMedias()		{
		return $this->medialist;
		}
    }
}