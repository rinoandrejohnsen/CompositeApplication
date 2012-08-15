<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the IModuleCatalog interface.
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
    use PhpStack\Base\Types\String;
    
    /**
     * This is the expected catalog definition for the ModuleManager.
     * The ModuleCatalog holds information about the modules that can
     * be used by the application.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface IModuleCatalog
    {
        /**
         * Gets all the ModuleInfo classes that are in the ModuleCatalog. 
         */
        public function GetModules();

        /**
         * Initializes the catalog, which may load and validate modules.
         */
        public function Initialize();

        /**
         * Adds a ModuleInfo to the ModuleCatalog.
         *
         * @param \PhpStack\Base\Types\String $moduleName Name to identify this module by
         * @param \PhpStack\Base\Types\String $modulePath The full path to the module class file
         * @param \PhpStack\Base\Types\String $className The class name - must be with namespaces as well
         * @todo Add String again!
         */
        public function AddModule($moduleName, $modulePath, $className);
    }
}