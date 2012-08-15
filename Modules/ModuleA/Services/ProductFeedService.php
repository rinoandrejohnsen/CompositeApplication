<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the BookFeedService class.
 * 
 * @package CompositeApplication
 * @subpackage Modules
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Modules\ModuleA\Services
{
    use CompositeApplication\Common\Infrastructure\Interfaces\IProductFeedService;
    use InvalidArgumentException;
    use PhpStack\Base\Types\String;

    /**
     * Simple class for autoloading the Yojimbo library
     * 
     * @package CompositeApplication
     * @subpackage Modules
     */
    class ProductFeedService implements IProductFeedService
    {
        /**
         * Constant for the default storage file.
         */
        const DefaultXmlFile = "Products.xml";
        
        /**
         * Path + filename. 
         * 
         * @var String
         */
        protected $file = null;
        
        /**
         * blah blah
         */
        private $productArray = array();
        
        /**
         * Constructor for this class
         */
        public function __construct($path = null, $filename = self::DefaultXmlFile)
        {
            if ($path == null)
            {
                $path = dirname(dirname(__FILE__)) . "/Data/";
            }
            
            $file = $path . $filename;
            
            $this->SetFile($file);
            $this->ParseXml();
        }
        
        /**
         * Sets the file to read. Checks if it is a file and if it is
         * readable.
         * 
         * @param String $file
         * @throws InvalidArgumentException
         */
        protected function SetFile($file) 
        {
            if (!is_file($file)) 
            {
                throw new InvalidArgumentException("The file $file does not exist.");
            }
            if (!is_readable($file)) 
            {
                if (!chmod($file, 0644)) 
                {
                    throw new InvalidArgumentException("The file $file is not readable or writable.");
                }
            }
            
            $this->file = $file;
        }
        
        /**
         * Getter for the File.
         * 
         * @return String
         */
        protected function GetFile()
        {
            if ($this->file != null)
            {
                return $this->file;
            } 
            else
            {
                return null;
            }    
        }    
        
        /**
         * Parses the data and then creates models.
         */
        private function ParseXml()
        {
            $productsFromXml = simplexml_load_file($this->GetFile());
            
            foreach ($productsFromXml->productList->product as $productFromXml)
            {
                //print_r();
                $product = new \CompositeApplication\Common\Infrastructure\Models\Product\Product();
                $product->SetId((int)$productFromXml->attributes()->id);
                $product->SetName((string)$productFromXml->name);
                
                if (isset($productFromXml->address) && !empty($productFromXml->address))
                {
                    $address = new \CompositeApplication\Common\Infrastructure\Models\Product\Address();
                    
                    if (isset($productFromXml->address->street))
                    {
                        $address->SetStreet((string)$productFromXml->address->street);
                    }
                    
                    if (isset($productFromXml->address->postalArea))
                    {
                        $postalArea = new \CompositeApplication\Common\Infrastructure\Models\Product\PostalArea();
                        $postalArea->SetPostalCode((int)$productFromXml->address->postalArea->attributes()->postalCode);
                        $postalArea->SetValue((string)$productFromXml->address->postalArea);
                        $address->SetPostalArea($postalArea);
                    }
                    
                    if (isset($productFromXml->address->country))
                    {
                        $country = new \CompositeApplication\Common\Infrastructure\Models\Product\Country();
                        $country->SetId((string)$productFromXml->address->country->attributes()->id);
                        $country->SetValue((string)$productFromXml->address->country);
                        $address->SetCountry($country);
                    }
                    
                    if (isset($productFromXml->address->county))
                    {
                        $county = new \CompositeApplication\Common\Infrastructure\Models\Product\County();
                        $county->SetId((int)$productFromXml->address->county->attributes()->id);
                        $county->SetValue((string)$productFromXml->address->county);
                        $address->SetCounty($county);
                    }
                    
                    if (isset($productFromXml->address->municipality))
                    {
                        $municipality = new \CompositeApplication\Common\Infrastructure\Models\Product\Municipality();
                        $municipality->SetId((int)$productFromXml->address->county->attributes()->id);
                        $municipality->SetValue((string)$productFromXml->address->municipality);
                        $address->SetMunicipality($municipality);
                    }
                    
                    $product->SetAddress($address);
                }  
                
                if (isset($productFromXml->contactInformation) && !empty($productFromXml->contactInformation))
                {
                    $contactInformation = new \CompositeApplication\Common\Infrastructure\Models\Product\ContactInformation();
                    
                    if (isset($productFromXml->contactInformation->email))
                    {
                        $contactInformation->SetEmail((string)$productFromXml->contactInformation->email);
                    }
                    
                    if (isset($productFromXml->contactInformation->fax))
                    {
                        $contactInformation->SetFax((string)$productFromXml->contactInformation->fax);
                    }
                    
                    if (isset($productFromXml->contactInformation->mobile))
                    {
                        $contactInformation->SetMobile((string)$productFromXml->contactInformation->mobile);
                    }
                    
                    if (isset($productFromXml->contactInformation->telephone))
                    {
                        $contactInformation->SetTelephone((string)$productFromXml->contactInformation->telephone);
                    }
                    
                    if (isset($productFromXml->contactInformation->web))
                    {
                        $contactInformation->SetWeb((string)$productFromXml->contactInformation->web);
                    }
                    
                    $product->SetContactInformation($contactInformation);
                }
                
                if (isset($productFromXml->geoLocation) && !empty($productFromXml->geoLocation))
                {
                    $geoLocation = new \CompositeApplication\Common\Infrastructure\Models\Product\GeoLocation();
                    
                    if (isset($productFromXml->geoLocation->elevation))
                    {
                        $geoLocation->SetElevation((string)$productFromXml->geoLocation->elevation);
                    }
                    
                    if (isset($productFromXml->geoLocation->latitude))
                    {
                        $geoLocation->SetLatitude((string)$productFromXml->geoLocation->latitude);
                    }
                    
                    if (isset($productFromXml->geoLocation->longitude))
                    {
                        $geoLocation->SetLongitude((string)$productFromXml->geoLocation->longitude);
                    }
                    
                    if (isset($productFromXml->geoLocation->mapReference))
                    {
                        $geoLocation->SetMapReference((string)$productFromXml->geoLocation->mapReference);
                    }
                    
                    if (isset($productFromXml->geoLocation->type))
                    {
                        $geoLocation->SetType((string)$productFromXml->geoLocation->type);
                    }
                    
                    $product->SetGeoLocation($geoLocation);
                }
                
                if (isset($productFromXml->div) && !empty($productFromXml->div))
                {
                    $div = new \CompositeApplication\Common\Infrastructure\Models\Product\Div();
                    
                    if (isset($productFromXml->div->capacity))
                    {
                        $div->SetCapacity((string)$productFromXml->div->capacity);
                    }
                    
                    if (isset($productFromXml->div->externalReference))
                    {
                        $div->SetExternalReference((string)$productFromXml->div->externalReference);
                    }
                    
                    if (isset($productFromXml->div->starRating))
                    {
                        $div->SetStarRating((string)$starRating);
                    }
                    
                    if (isset($productFromXml->div->yearBuilt))
                    {
                        $div->SetYearBuilt((string)$productFromXml->div->yearBuilt);
                    }
                    
                    if (isset($productFromXml->div->yearRenovated))
                    {
                        $div->SetYearRenovated((string)$productFromXml->div->yearRenovated);
                    }
                    
                    $product->SetDiv($div);
                }
                
                if (isset($productFromXml->contactList) && !empty($productFromXml->contactList))
                {
                    $contactList = new \CompositeApplication\Common\Infrastructure\Models\Product\ContactList();
                    $contactListArray = array();
                    
                    foreach ($productFromXml->contactList as $contactFromList)
                    {
                        $contact = new \CompositeApplication\Common\Infrastructure\Models\Product\Contact();
                        
                        if (isset($contactFromList->email))
                        {
                            $contact->SetEmail($contactFromList->email);
                        }
                        
                        if (isset($contactFromList->fax))
                        {
                            $contact->SetFax($contactFromList->fax);
                        }
                        
                        if (isset($contactFromList->id))
                        {
                            $contact->SetId($contactFromList->id);
                        }
                        
                        if (isset($contactFromList->mobile))
                        {
                            $contact->SetMobile($contactFromList->mobile);
                        }
                        
                        if (isset($contactFromList->name))
                        {
                            $contact->SetName($contactFromList->name);
                        }
                        
                        if (isset($contactFromList->telephone))
                        {
                            $contact->SetTelephone($contactFromList->telephone);
                        }
                        
                        if (isset($contactFromList->type))
                        {
                            $contact->SetType($contactFromList->type);
                        }
                        
                        array_push($contactListArray, $contact);
                    }
                    
                    $contactList->SetContacts($contactListArray);
                    
                    $product->SetContactList($contactList);
                }
                
                if (isset($productFromXml->categoryList) && !empty($productFromXml->categoryList))
                {
                    $categoryList = new \CompositeApplication\Common\Infrastructure\Models\Product\CategoryList();
                    $categoryListArray = array();
                    
                    foreach ($productFromXml->categoryList->category as $categoryFromList)
                    {   
                        //var_dump($categoryFromList);
                        $category = new \CompositeApplication\Common\Infrastructure\Models\Product\Category();
                        
                        if (isset($categoryFromList->name))
                        {
                            $category->SetName((string)$categoryFromList->name);
                        }
                        
                        if (isset($categoryFromList->attributes()->id))
                        {
                            $category->SetId((string)$categoryFromList->attributes()->id);
                        }
                        
                        if (isset($categoryFromList->categorySubType1List))
                        {
                            $categorySubType1List = new \CompositeApplication\Common\Infrastructure\Models\Product\CategorySub1List();
                            $categorySubTypeArray = array();
                            
                            foreach ($categoryFromList->categorySubType1List->categorySubType1 as $categorySubTypeFromList)
                            {
                                $categorySubType = new \CompositeApplication\Common\Infrastructure\Models\Product\CategorySub1();
                                
                                if (isset($categorySubTypeFromList->name))
                                {
                                    $categorySubType->SetName((string)$categorySubTypeFromList->name);
                                }
                                
                                if (isset($categorySubTypeFromList->attributes()->id))
                                {
                                    $categorySubType->SetId((string)$categorySubTypeFromList->attributes()->id);
                                }
                                
                                if (isset($categorySubTypeFromList->categorySubType2List))
                                {
                                    $categorySubType2List = new \CompositeApplication\Common\Infrastructure\Models\Product\CategorySub2List();
                                    $categorySubType2Array = array();
                                    
                                    foreach ($categorySubTypeFromList->categorySubType2List->categorySubType2 as $categorySubType2FromList)
                                    {
                                        $categorySubType2 = new \CompositeApplication\Common\Infrastructure\Models\Product\CategorySub2();
                                        
                                        if (isset($categorySubType2FromList->name))
                                        {
                                            $categorySubType2->SetName((string)$categorySubType2FromList->name);
                                        }
                                        
                                        if (isset($categorySubType2FromList->attributes()->id))
                                        {
                                            $categorySubType2->SetId((string)$categorySubType2FromList->attributes()->id);
                                        }
                                        
                                        array_push($categorySubType2Array, $categorySubType2);
                                    }
                                    
                                    $categorySubType->SetCategorySubType2List($categorySubType2Array);
                                }
                                
                                array_push($categorySubTypeArray, $categorySubType);
                            }
                            
                            $category->SetCategorySubType1List($categorySubTypeArray);
                        }
                        
                        array_push($categoryListArray, $category);
                    }
                    
                    $categoryList->SetCategory($categoryListArray);
                    
                    $product->SetCategoryList($categoryList);
                }
                
                if (isset($productFromXml->mediaChannelList) && !empty($productFromXml->mediaChannelList))
                {
                    $mediaChannelList = new \CompositeApplication\Common\Infrastructure\Models\Product\MediaChannelList();
                    $mediaChannelArray = array();
                    
                    foreach ($productFromXml->mediaChannelList->mediaChannel as $mediaChannelFromList)
                    {
                        $mediaChannel = new \CompositeApplication\Common\Infrastructure\Models\Product\MediaChannel();
                        
                        if (isset($mediaChannelFromList->name))
                        {
                            $mediaChannel->SetName((string)$mediaChannelFromList->name);
                        }
                        
                        if (isset($mediaChannelFromList->id))
                        {
                            $mediaChannel->SetId((string)$mediaChannelFromList->id);
                        }
                        
                        if (isset($mediaChannelFromList->distributionChannelId))
                        {
                            $mediaChannel->SetDistributionChannelId((string)$mediaChannelFromList->distributionChannelId);
                        }
                        
                        array_push($mediaChannelArray, $mediaChannel);
                    }
                    
                    $mediaChannelList->SetMediaChannels($mediaChannelArray);
                }
                
                if (isset($productFromXml->textList) && !empty($productFromXml->textList))
                {
                    $textList = new \CompositeApplication\Common\Infrastructure\Models\Product\TextList();
                    $textArray = array();
                    
                    foreach ($productFromXml->textList->text as $textFromList)
                    {
                        $text = new \CompositeApplication\Common\Infrastructure\Models\Product\Text();
                        
                        if (isset($textFromList->attributes()->lang))
                        {
                            $text->SetLang((string)$textFromList->attributes()->lang);
                        }
                        
                        if (isset($textFromList->attributes()->mime))
                        {
                            $text->SetMime((string)$textFromList->attributes()->mime);
                        }
                        
                        if (isset($textFromList->attributes()->modified))
                        {
                            $text->SetModified((string)$textFromList->attributes()->modified);
                        }
                        
                        if (isset($textFromList->attributes()->modifiedBy))
                        {
                            $text->SetModifiedBy((string)$textFromList->attributes()->modifiedBy);
                        }
                        
                        if (isset($textFromList->attributes()->type))
                        {
                            $text->SetType((string)$textFromList->attributes()->type);
                        }
                        
                        /**
                         * @todo Probably wrong!
                         */
                        if (isset($textFromList))
                        {
                            $text->SetValue((string)$textFromList);
                        }
                        
                        array_push($textArray, $text);
                    }
                    
                    $textList->SetTexts($textArray);
                }
                
                if (isset($productFromXml->mediaList) && !empty($productFromXml->mediaList))
                {
                    $mediaList = new \CompositeApplication\Common\Infrastructure\Models\Product\MediaList();
                    $mediaArray = array();
                    
                    foreach ($productFromXml->mediaList->media as $mediaFromList)
                    {
                        $media = new \CompositeApplication\Common\Infrastructure\Models\Product\Media();
                        
                        if (isset($mediaFromList->copyright))
                        {
                            $mediaOwner = new \CompositeApplication\Common\Infrastructure\Models\Product\MediaOwner();
                            
                            if (isset($mediaFromList->copyright->addressPostal))
                            {
                                $addressPostal = new \CompositeApplication\Common\Infrastructure\Models\Product\AddressPostal();
                                
                                if (isset($mediaFromList->copyright->addressPostal->street))
                                {
                                    $addressPostal->SetStreet((string)$mediaFromList->copyright->addressPostal->street);
                                }
                                
                                $mediaOwner->SetAddressPostal($mediaFromList->copright->addressPostal);
                            }
                            
                            if (isset($mediaFromList->copyright->name))
                            {
                                $mediaOwner->SetName((string)$mediaFromList->copyright->name);
                            }
                            
                            if (isset ($mediaFromList->copyright->telephone))
                            {
                                $mediaOwner->SetTelephone((string)$mediaFromList->copyright->telephone);
                            }
                            
                            $media->SetCopyright($mediaOwner);
                        }
                        
                        if (isset($mediaFromList->description))
                        {
                            $media->SetDescription((string)$mediaFromList->description);
                        }
                        
                        if (isset($mediaFromList->name))
                        {
                            $media->SetName((string)$mediaFromList->name);
                        }
                    }
                }
                
                array_push($this->productArray, $product);
            }
        }
        
        /**
         * Returns a array containg Products.
         * 
         * @return array
         */
        public function GetProducts() 
        {
            return $this->productArray;
        }
    }
}