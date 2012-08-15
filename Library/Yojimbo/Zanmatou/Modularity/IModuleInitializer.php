<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the IModuleInitializer interface.
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
    use Yojimbo\Zanmatou\Modularity\IModuleCatalogItem;
    
    /**
     * Declares a service which initializes the modules into the application.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface IModuleInitializer
    {
        /**
         * Initializes the specified module.
         *
         * @param \Yojimbo\Zanmatou\Modularity\IModuleCatalogItem|\Yojimbo\Zanmatou\Modularity\ModuleInfo $moduleInfo
         */
        public function Intialize(IModuleCatalogItem $moduleInfo);
    }
}