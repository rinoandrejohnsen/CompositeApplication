<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ModuleInfo class that implements IModuleCatalogItem interface.
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
     * Defines the metadata that describes a module.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class ModuleInfo implements IModuleCatalogItem
    {

        /**
         * @var null
         */
        private $moduleName = null;
        /**
         * @var null
         */
        private $modulePath = null;
        /**
         * @var null
         */
        private $className = null;

        /**
         * @param $moduleName
         * @param $modulePath
         * @param $className
         */
        public function __construct($moduleName, $modulePath, $className)
        {
            $this->SetModuleName($moduleName);
            $this->SetModulePath($modulePath);
            $this->SetClassName($className);
        }

        /**
         * @return null
         */
        public function GetModuleName()
        {
            return $this->moduleName;
        }

        /**
         * @param $moduleName
         */
        public function SetModuleName($moduleName)
        {
            $this->moduleName = $moduleName;
        }

        /**
         * @return null
         */
        public function GetModulePath()
        {
            return $this->modulePath;
        }

        /**
         * @param $modulePath
         */
        public function SetModulePath($modulePath)
        {
            $this->modulePath = $modulePath;
        }

        /**
         * @return null
         */
        public function GetClassName()
        {
            return $this->className;
        }

        /**
         * @param $className
         */
        public function SetClassName($className)
        {
            $this->className = $className;
        }
    }
}