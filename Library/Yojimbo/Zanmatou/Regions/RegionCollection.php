<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the RegionCollection interface.
 * 
 * @package Yojimbo
 * @subpackage Zanmatou
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Zanmatou\Regions
{
    /**
     * This class is responsible for maintaining a collection of regions.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class RegionCollection implements IRegionCollection
    {
        /**
         * Adds a IRegion to the collection.
         * 
         * @param IRegion $region Region to be added to the collection
         */
        public function Add(IRegion $region)
        {
            
        }
        
        /**
         * Checks if the collection contains a IRegion with the name received as parameter.
         * 
         * @param string $regionName The name of the region to look for
         * @return bool True if the region is contained in the collection, otherwise false.
         */
        public function ContainsRegionWithName($regionName)
        {
            
        }
        
        /**
         * Removes a IRegion from the collection.
         * 
         * @param string $regionName Name of the region to be removed
         * @return bool True if the region was removed, otherwise false.
         */
        public function Remove($regionName)
        {
            
        }
    }
}