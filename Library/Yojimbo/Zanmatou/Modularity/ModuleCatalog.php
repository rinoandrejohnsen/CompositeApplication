<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ModuleCatalog class that implements IModule interface.
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
    use Yojimbo\Zanmatou\Modularity\IModuleCatalog;
    use Yojimbo\Zanmatou\Modularity\IModuleCatalogItem;
    use Yojimbo\Zanmatou\Modularity\ModuleInfo;

    /**
     * The ModuleCatalog holds information about the modules that can
     * be used by the application.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class ModuleCatalog implements IModuleCatalog
    {
        /**
         * Checks when catalog is loaded.
         * 
         * @var bool
         */
        private $isLoaded = false;
        
        /**
         * Stores items.
         * 
         * @var array
         */
        private $items = array();

        /**
         * Initializes a new instance of the ModuleCatalog class.
         *
         * @return \Yojimbo\Zanmatou\Modularity\ModuleCatalog
         */
        public function __construct()
        {
            //$this->items = new ModuleCatalogItemCollection();
        }

        /**
         * Gets the items in the ModuleManager.
         * 
         * @return array $items 
         */
        public function GetItems()
        {
            return $this->items;
        }

        /**
         * Adds an items to the ModuleManager.
         * 
         * @param Item $item 
         */
        public function AddItem($item)
        {
            array_push($this->items, $item);
        }

        /**
         * Loads the catalog if necessary. 
         * 
         * @return void
         */
        public function Load()
        {
            $this->isLoaded = true;
            $this->InnerLoad();
        }

        /**
         * Adds a ModuleInfo to the ModuleCatalog.
         *
         * @param string $moduleName
         * @param string $modulePath
         * @param string $className
         * @throws \Exception
         * @return void
         */
        public function AddModule($moduleName, $modulePath, $className)
        {
            if ($moduleName == null)
            {
                throw new \Exception("moduleName is null");
            }
            
            if ($modulePath == null)
            {
                throw new \Exception("modulePath is null");
            }
            
            if ($className == null)
            {
                throw new \Exception("className is null");
            }
            
            $moduleInfo = new ModuleInfo($moduleName, $modulePath, $className);

            $this->AddItem($moduleInfo);
        }

        /**
         * Gets all the ModuleInfo classes that are in the ModuleCatalog. 
         * 
         * @return array $moduleCollection
         */
        public function GetModules()
        {
            $moduleCollection = array();

            if (count($this->items) != 0)
            {
                foreach ($this->items as $item)
                {
                    if ($item instanceof IModuleCatalogItem)
                    {
                        array_push($moduleCollection, $item);
                    }
                }

                return $moduleCollection;
            } 
            else
            {
                return $moduleCollection;
            }
        }

        /**
         * Initializes the catalog, which may load and validate modules. 
         * 
         * @return void
         */
        public function Initialize()
        {
            if (!$this->isLoaded)
            {
                $this->Load();
            }
        }

        /**
         * Does the actual work of loading the catalog. The base implementation
         * does nothing. 
         * 
         * @return void
         */
        protected function InnerLoad()
        {          
        }
    }
}