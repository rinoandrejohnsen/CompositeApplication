<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ModuleManager class that implements IModuleManager interface.
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
    use Yojimbo\Zanmatou\Logging\ILoggerFacade;
    use Yojimbo\Zanmatou\Logging\TextLogger;
    use Yojimbo\Zanmatou\Modularity\IModuleCatalog;
    use Yojimbo\Zanmatou\Modularity\IModuleManager;
    
    /**
     * Component responsible for coordinating the modules type laoding and
     * module initialization process.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class ModuleManager implements IModuleManager
    {
        /**
         * @var ModuleInitializer
         */
        private $moduleInitializer = null;
        
        /**
         *
         * @var ModuleCatalog 
         */
        private $moduleCatalog = null;
        
        /**
         *
         * @var TextLogger
         */
        private $loggerFacade = null;

        /**
         * Initializes an instance of the ModuleManager class.
         *
         * @param \Yojimbo\Zanmatou\Modularity\IModuleInitializer|\Yojimbo\Zanmatou\Modularity\ModuleInitializer $moduleInitializer
         * @param \Yojimbo\Zanmatou\Modularity\IModuleCatalog|\Yojimbo\Zanmatou\Modularity\ModuleCatalog $moduleCatalog
         * @param \Yojimbo\Zanmatou\Logging\ILoggerFacade|\Yojimbo\Zanmatou\Logging\TextLogger $loggerFacade
         * @throws \Exception
         */
        public function __construct(IModuleInitializer $moduleInitializer, IModuleCatalog $moduleCatalog, ILoggerFacade $loggerFacade) 
        {
            if ($moduleInitializer == null)
            {
                throw new Exception("moduleInitializer is null");
            }
            
            if ($moduleCatalog == null)
            {
                throw new Exception("moduleCatalog is null");
            }
            
            if ($loggerFacade == null)
            {
                throw new Exception("loggerFacade is null");
            }
            
            $this->SetModuleInitializer($moduleInitializer);
            $this->SetModuleCatalog($moduleCatalog);
            $this->SetLoggerFacade($loggerFacade);
        }

        /**
         * @return null|ModuleInitializer
         */
        public function GetModuleInitializer()
        {
            return $this->moduleInitializer;
        }

        /**
         * @param $moduleInitializer
         */
        public function SetModuleInitializer($moduleInitializer)
        {
            if ($moduleInitializer != null)
            {
                $this->moduleInitializer = $moduleInitializer;
            }
        }

        /**
         * @return null|ModuleCatalog
         */
        public function GetModuleCatalog()
        {
            return $this->moduleCatalog;
        }

        /**
         * @param $moduleCatalog
         */
        public function SetModuleCatalog($moduleCatalog)
        {
            if ($moduleCatalog != null) 
            {
                $this->moduleCatalog = $moduleCatalog;
            }
        }

        /**
         * @return null|\Yojimbo\Zanmatou\Logging\TextLogger
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
            if ($loggerFacade != null)
            {
                $this->loggerFacade = $loggerFacade;
            }
            
        }


        /**
         * @param string $module
         */
        public function LoadModule($module)
        {
            
        }

        /**
         *
         */
        public function LoadModules()
        {
            $modules = $this->GetModuleCatalog()->GetModules();
            
            if ($modules != null)
            {
                foreach ($modules as $module)
                {
                    $this->InitializeModule($module);
                }
            }
        }

        /**
         * @param $moduleInfo
         */
        public function InitializeModule($moduleInfo)
        {
            $this->GetModuleInitializer()->Intialize($moduleInfo);
        }

        /**
         *
         */
        public function Run()
        {
            $this->GetModuleCatalog()->Initialize();
            $this->LoadModules();
        }
    }
}