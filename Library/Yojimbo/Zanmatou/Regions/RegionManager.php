<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the RegionManager interface.
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
    class RegionManager implements IRegionManager
    {
        private $regionCollection;
             
        public function __construct()
        {
            $this->regionCollection = new RegionCollection();
        }
        
        /**
         * pub
         */
        
        /**
         * Creates a new region manager.
         * 
         * @return IRegionManager A new region manager that can be used as a different scope.
         */
        public function CreateRegionManager()
        {
            return new RegionManager();
        }
        
        /**
         * Gets a collection of IRegion that identify each region by name.
         * 
         * @return IRegionCollection A IRegionCollection with all the regions. 
         */
        public function Regions()
        {
            return $this->regionCollection;
        }
    }
}