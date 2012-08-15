<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class MediaChannelList 
	{
		private $mediachannellist;

		public function SetMediaChannels(array $mediachannellist)		{
		$this->mediachannellist = $mediachannellist;
		}
		public function GetMediaChannels()		{
		return $this->mediachannellist;
		}
    }
}