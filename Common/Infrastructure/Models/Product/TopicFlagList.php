<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class TopicFlagList 
	{
		private $topicflaglist;

		public function SetTopicFlags(array $topicflaglist)		{
		$this->topicflaglist = $topicflaglist;
		}
		public function GetTopicFlags()		{
		return $this->topicflaglist;
		}
    }
}