<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the IModuleManager interface.
 * 
 * @package Yojimbo
 * @subpackage Zanmatou
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Zanmatou\Modularity
{
    /**
     * Defines the interface for the service that will retrive and initialize
     * the application's modules.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface IModuleManager
    {
        /**
         * Initializes the modules markes on the ModuleCatalog 
         */
        public function Run();
        
        /**
         * Loads and initializes the module on the ModuleCatalog with the name.
         * 
         * @param string $module Module name
         */
        public function LoadModule($module);
    }
}