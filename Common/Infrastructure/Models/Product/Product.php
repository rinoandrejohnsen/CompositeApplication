<?php

namespace CompositeApplication\Common\Infrastructure\Models\Product 
{
    class Product
    {
        private $name;
        private $address;
        private $contactinformation;
        private $geolocation;
        private $div;
        private $locationlist;
        private $contactlist;
        private $categorylist;
        private $mediachannellist;
        private $topicflaglist;
        private $textlist;
        private $facilitycategorylist;
        private $relatedproductlist;
        private $medialist;
        private $schedulelist;
        private $pricecategorylist;
        private $transportlist;
        private $distancelist;
        private $roadlist;
        private $advertisementlist;
        private $customtypelist;
        private $customarealist;
        private $externalsystemproductmappinglist;
        private $id;

        public function SetName($name)
        {
            $this->name = $name;
        }

        public function GetName()
        {
            return $this->name;
        }

        public function SetAddress(Address $address)
        {
            $this->address = $address;
        }

        public function GetAddress()
        {
            return $this->address;
        }

        public function SetContactInformation(ContactInformation $contactinformation)
        {
            $this->contactinformation = $contactinformation;
        }

        public function GetContactInformation()
        {
            return $this->contactinformation;
        }

        public function SetGeoLocation(GeoLocation $geolocation)
        {
            $this->geolocation = $geolocation;
        }

        public function GetGeoLocation()
        {
            return $this->geolocation;
        }

        public function SetDiv(Div $div)
        {
            $this->div = $div;
        }

        public function GetDiv()
        {
            return $this->div;
        }

        public function SetLocationList(LocationList $locationlist)
        {
            $this->locationlist = $locationlist;
        }

        public function GetLocationList()
        {
            return $this->locationlist;
        }

        public function SetContactList(ContactList $contactlist)
        {
            $this->contactlist = $contactlist;
        }

        public function GetContactList()
        {
            return $this->contactlist;
        }

        public function SetCategoryList(CategoryList $categorylist)
        {
            $this->categorylist = $categorylist;
        }

        public function GetCategoryList()
        {
            return $this->categorylist;
        }

        public function SetMediaChannelList(MediaChannelList $mediachannellist)
        {
            $this->mediachannellist = $mediachannellist;
        }

        public function GetMediaChannelList()
        {
            return $this->mediachannellist;
        }

        public function SetTopicFlagList(TopicFlagList $topicflaglist)
        {
            $this->topicflaglist = $topicflaglist;
        }

        public function GetTopicFlagList()
        {
            return $this->topicflaglist;
        }

        public function SetTextList(TextList $textlist)
        {
            $this->textlist = $textlist;
        }

        public function GetTextList()
        {
            return $this->textlist;
        }

        public function SetFacilityCategoryList(FacilityCategoryList $facilitycategorylist)
        {
            $this->facilitycategorylist = $facilitycategorylist;
        }

        public function GetFacilityCategoryList()
        {
            return $this->facilitycategorylist;
        }

        public function SetRelatedProductList(RelatedProductList $relatedproductlist)
        {
            $this->relatedproductlist = $relatedproductlist;
        }

        public function GetRelatedProductList()
        {
            return $this->relatedproductlist;
        }

        public function SetMediaList(MediaList $medialist)
        {
            $this->medialist = $medialist;
        }

        public function GetMediaList()
        {
            return $this->medialist;
        }

        public function SetScheduleList(ScheduleList $schedulelist)
        {
            $this->schedulelist = $schedulelist;
        }

        public function GetScheduleList()
        {
            return $this->schedulelist;
        }

        public function SetPriceCategoryList(PriceCategoryList $pricecategorylist)
        {
            $this->pricecategorylist = $pricecategorylist;
        }

        public function GetPriceCategoryList()
        {
            return $this->pricecategorylist;
        }

        public function SetTransportList(TransportList $transportlist)
        {
            $this->transportlist = $transportlist;
        }

        public function GetTransportList()
        {
            return $this->transportlist;
        }

        public function SetDistanceList(DistanceList $distancelist)
        {
            $this->distancelist = $distancelist;
        }

        public function GetDistanceList()
        {
            return $this->distancelist;
        }

        public function SetRoadList(RoadList $roadlist)
        {
            $this->roadlist = $roadlist;
        }

        public function GetRoadList()
        {
            return $this->roadlist;
        }

        public function SetAdvertisementList(AdvertisementList $advertisementlist)
        {
            $this->advertisementlist = $advertisementlist;
        }

        public function GetAdvertisementList()
        {
            return $this->advertisementlist;
        }

        public function SetCustomTypeList(CustomList $customtypelist)
        {
            $this->customtypelist = $customtypelist;
        }

        public function GetCustomTypeList()
        {
            return $this->customtypelist;
        }

        public function SetCustomAreaList(CustomAreaList $customarealist)
        {
            $this->customarealist = $customarealist;
        }

        public function GetCustomAreaList()
        {
            return $this->customarealist;
        }

        public function SetExternalSystemProductMappingList(ExternalSystemProductMappingList $externalsystemproductmappinglist)
        {
            $this->externalsystemproductmappinglist = $externalsystemproductmappinglist;
        }

        public function GetExternalSystemProductMappingList()
        {
            return $this->externalsystemproductmappinglist;
        }

        public function SetId($id)
        {
            $this->id = $id;
        }

        public function GetId()
        {
            return $this->id;
        }
    }
}