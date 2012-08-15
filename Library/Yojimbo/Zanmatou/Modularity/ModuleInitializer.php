<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ModuleInitializer class that implements IModuleInitializer interface.
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
    use Exception;
    use PhpStack\Base\Types\String;
    use Yojimbo\Kozuka\IContainer;
    use Yojimbo\Zanmatou\Logging\Category;
    use Yojimbo\Zanmatou\Logging\ILoggerFacade;
    use Yojimbo\Zanmatou\Logging\Priority;
    use Yojimbo\Zanmatou\Modularity\IModuleCatalogItem;
    use Yojimbo\Zanmatou\Modularity\IModuleInitializer;
    
    /**
     * Handles loading of a module.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class ModuleInitializer implements IModuleInitializer
    {
        /**
         * @var null
         */
        private $container = null;
        /**
         * @var null
         */
        private $loggerFacade = null;
        /**
         * @var null
         */
        private $moduleInstance = null;

        /**
         * Initializes a new instance of the ModuleInitializer class.
         *
         * @param IContainer $container
         * @param ILoggerFacade $loggerFacade
         * @throws \Exception
         * @return \Yojimbo\Zanmatou\Modularity\ModuleInitializer
         */
        public function __construct(IContainer $container, ILoggerFacade $loggerFacade) 
        {
            if ($container == null)
            {
                throw new Exception("container is null");
            }
            
            if ($loggerFacade == null)
            {
                throw new Exception("loggerFacade is null");
            }
            $this->SetContainer($container);
            $this->SetLoggerFacade($loggerFacade);
        }

        /**
         * @param IModuleCatalogItem $moduleInfo
         * @throws \Exception
         */
        public function Intialize(IModuleCatalogItem $moduleInfo)
        {
            if ($moduleInfo == null)
            {
                throw new Exception("moduleInfo is null");
            }
            
            try
            {
                $this->SetModuleInstance($this->CreateModule($moduleInfo->GetModuleName(), $moduleInfo->GetModulePath(), $moduleInfo->GetClassName()));
                $this->GetModuleInstance()->Initialize();
            }
            catch (Exception $e)
            {
                throw new Exception("Could not load module:" . " " . $moduleInfo->GetModuleName());
            }
            
            $this->GetLoggerFacade()->Log(new String("Module " . $moduleInfo->GetModuleName() . " is created successfully"), new Category(Category::Debug), new Priority(Priority::Low));
        }

        /**
         * @param $moduleName
         * @param $modulePath
         * @param $className
         * @return mixed
         * @throws \Exception
         */
        protected function CreateModule($moduleName, $modulePath, $className)
        {
            if ($moduleName == null)
            {
                throw new Exception("moduleName is null");
            }
            
            try
            {
                require_once $modulePath;
            }
            catch (Exception $e)
            {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
            
            $module = $this->GetContainer()->SetService($moduleName, $className);
            $module->AddArgument("Container");
            
            return $this->GetContainer()->Get($moduleName);
        }

        /**
         * @return null
         */
        public function GetContainer()
        {
            return $this->container;
        }

        /**
         * @param $container
         */
        public function SetContainer($container)
        {
            $this->container = $container;
        }

        /**
         * @return null
         */
        public function GetLoggerFacade()
        {
            return $this->loggerFacade;
        }

        /**
         * @param $loggerFacade
         */
        public function SetLoggerFacade($loggerFacade)
        {
            $this->loggerFacade = $loggerFacade;
        }

        /**
         * @return null
         */
        public function GetModuleInstance()
        {
            return $this->moduleInstance;
        }

        /**
         * @param $moduleInstance
         */
        public function SetModuleInstance($moduleInstance)
        {
            $this->moduleInstance = $moduleInstance;
        }
    }
}