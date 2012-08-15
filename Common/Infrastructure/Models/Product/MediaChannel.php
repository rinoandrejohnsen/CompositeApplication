<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class MediaChannel 
	{
		private $name;
		private $id;
		private $distributionchannelid;

		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetId($id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
		public function SetDistributionChannelId($distributionchannelid) {
			$this->distributionchannelid = $distributionchannelid;
		}
		public function GetDistributionChannelId() {
			return $this->distributionchannelid;
		}
    }
}