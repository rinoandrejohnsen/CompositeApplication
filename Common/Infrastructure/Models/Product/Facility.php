<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class Facility 
	{
		private $name;
		private $comment;
		private $id;

		public function SetName($name) {
			$this->name = $name;
		}
		public function GetName() {
			return $this->name;
		}
		public function SetComment($comment) {
			$this->comment = $comment;
		}
		public function GetComment() {
			return $this->comment;
		}
		public function SetId(FacilityId $id) {
			$this->id = $id;
		}
		public function GetId() {
			return $this->id;
		}
    }
}