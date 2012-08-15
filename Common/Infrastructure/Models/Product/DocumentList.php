<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product
{
	class DocumentList 
	{
		private $documentlist;

		public function SetDocuments(array $documentlist)		{
		$this->documentlist = $documentlist;
		}
		public function GetDocuments()		{
		return $this->documentlist;
		}
    }
}