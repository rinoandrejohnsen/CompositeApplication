<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the Bootstrapper class. This class belongs to the Zanmatou(base) 
 * implementation.
 * 
 * @package Yojimbo
 * @subpackage Zanmatou
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Zanmatou
{
    use CompositeApplication\Application\Shell; // This should not be here!
    use PhpStack\Base\Types\Bool;
    use Yojimbo\Kozuka\IContainer;
    use Yojimbo\Zanmatou\Logging\ILoggerFacade;
    use Yojimbo\Zanmatou\Logging\Serializer;
    use Yojimbo\Zanmatou\Logging\TextLogger;
    use Yojimbo\Zanmatou\Logging\TextWriter;
    use Yojimbo\Zanmatou\Modularity\IModuleCatalog;
    use Yojimbo\Zanmatou\Modularity\ModuleCatalog;

    /**
     * Base class that provides a basic bootstrapping sequence and hooks
     * that specific implementations can override.
     * 
     * This class must be overriden to provide application specific configuration.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    abstract class Bootstrapper
    {   
        /**
         * TextLogger
         * 
         * @var null|\Yojimbo\Zanmatou\Logging\ILoggerFacade
         */
        private $logger = null;

        /**
         * ModuleCatalog
         * 
         * @var null|\Yojimbo\Zanmatou\Modularity\IModuleCatalog
         */
        private $moduleCatalog = null;
        
        /**
         * Shell
         * @var Shell
         */
        private $shell = null;
        
        /**
         * Gets the TextLogger for the application.
         * 
         * @return \Yojimbo\Zanmatou\Logging\ILoggerFacade|null Gets the TextLogger
         */
        protected function GetLogger()
        {
            if ($this->logger != null)
            {
                return $this->logger;
            } 
            else
            {
                return null;
            }
        }
        
        /**
         * Sets the TextLogger for the application.
         * 
         * @param \Yojimbo\Zanmatou\Logging\ILoggerFacade $logger
         * @return void
         */
        protected function SetLogger(ILoggerFacade $logger)
        {
            $this->logger = $logger;
        }

        /**
         * Gets the default ModuleCatalog for the application.
         * 
         * @return \Yojimbo\Zanmatou\Modularity\IModuleCatalog|null Gets the ModuleCatalog
         */
        protected function GetModuleCatalog()
        {
            if ($this->moduleCatalog != null)
            {
                return $this->moduleCatalog;
            } 
            else
            {
                return null;
            }
        }

        /**
         * Sets the default ModuleCatalog for the application.
         * 
         * @param \Yojimbo\Zanmatou\Modularity\IModuleCatalog $moduleCatalog
         */
        protected function SetModuleCatalog(IModuleCatalog $moduleCatalog)
        {
            $this->moduleCatalog = $moduleCatalog;
        }

        /**
         * Gets the shell user interface.
         * 
         * @return Shell The shell user interface
         */
        protected function GetShell()
        {
            if ($this->shell != null)
            {
                return $this->shell;
            } 
            else
            {
                return null;
            }
        }

        /**
         * Sets the shell user interface.
         * 
         * @param Shell $shell
         * @return void
         */
        protected function SetShell(Shell $shell)
        {
            $this->shell = $shell;
        }

        /**
         * Start the bootstrapper process
         * 
         * @return void 
         */
        public function Initialize()
        {
            $this->Run(new Bool(true));
        }
        
        /**
         * Create the TextLogger used by the bootstrapper.
         * 
         * @return \Yojimbo\Zanmatou\Logging\ILoggerFacade The base implementation returns a new TextLogger
         */
        protected function CreateLogger()
        {
            return new TextLogger(new TextWriter(new Serializer()));
        }
        
        /**
         * Creates the ModuleCatalog.
         * 
         * The base implmentation returns a new ModuleCatalog.
         * 
         * @return \Yojimbo\Zanmatou\Modularity\IModuleCatalog 
         */
        protected function CreateModuleCatalog()
        {
            return new ModuleCatalog();
        }

        /**
         * Configures the ModuleCatalog(); 
         * 
         * @return void
         */
        protected function ConfigureModuleCatalog()
        {      
        }

        /**
         * Initializes the modules. 
         * 
         * @param IContainer $container
         * @return void
         */
        protected function InitializeModules(IContainer $container)
        {
            $manager = $container->Get("ModuleManager");
            
            $manager->Run();
        }

        /**
         * Initializes the shell. 
         * 
         * @return void
         */
        protected function InitializeShell()
        {
            $this->shell->Initialize();
        }

        /**
         * Run the bootstrapper process.
         * 
         * @param \PhpStack\Base\Types\Bool $runWithDefaultConfiguration
         * @return void
         */
        public abstract function Run(Bool $runWithDefaultConfiguration);

        /**
         * Creates the shell or main window of the application 
         * 
         * @return void
         */
        protected abstract function CreateShell();
    }
}