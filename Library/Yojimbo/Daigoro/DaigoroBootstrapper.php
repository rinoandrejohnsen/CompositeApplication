<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the DaigoroBootstrapper class.
 * 
 * @package Yojimbo
 * @subpackage Daigoro
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Daigoro
{   
    use Exception;
    use PhpStack\Base\Types\Bool;
    use PhpStack\Base\Types\String;
    use Yojimbo\Kozuka\Container;
    use Yojimbo\Kozuka\IContainer;
    use Yojimbo\Kozuka\IServiceDefinitionFactory;
    use Yojimbo\Kozuka\ServiceDefinitionFactory;
    use Yojimbo\Zanmatou\Bootstrapper;
    use Yojimbo\Zanmatou\Logging\Category;
    use Yojimbo\Zanmatou\Logging\Priority;

    /**
     * Base class that provides a basic bootstrapping sequence that registers most
     * of the Composite Application Library assets in DaigoroContainer.
     * 
     * This class must be overriden to provide application specific configuration.
     * 
     * @package Yojimbo
     * @subpackage Daigoro
     */
    abstract class DaigoroBootstrapper extends Bootstrapper
    {
        /**
         * A boolean for running with default setup.
         *
         * @var \PhpStack\Base\Types\Bool Default is set to true
         */
        private $useDefaultConfiguration = null;
        
        /**
         * The default IContainer for the application.
         * 
         * @var IContainer
         */
        protected $container = null;
        
        public function __construct() 
        {   
            $this->useDefaultConfiguration = new Bool(true);
        }
        
        /**
         * Gets the default Container for the application.
         * 
         * @return IContainer The default Container for the application. 
         */
        public function GetContainer()
        {
            if ($this->container != null)
            {
                return $this->container;
            } 
            else
            {
                return null;
            }
        }

        /**
         * Sets the default Container for the application.
         * 
         * @param IContainer $container 
         * @return void
         */
        protected function SetContainer(IContainer $container)
        {
            $this->container = $container;
        }

        /**
         * Run the bootstrapper process.
         * 
         * @param \PhpStack\Base\Types\Bool $runWithDefaultConfiguration
         * @return void
         */
        public function Run(Bool $runWithDefaultConfiguration)
        {
            $this->useDefaultConfiguration = $runWithDefaultConfiguration;
            
            $this->SetLogger($this->CreateLogger());
            
            if ($this->GetLogger() == null)
            {
                throw new Exception('TextLogger is null');
            }
            
            $this->GetLogger()->EmptyLog();
            $this->GetLogger()->Log(new String("Logger is created successfully"), new Category(Category::Debug), new Priority(Priority::Low));
            
            $this->GetLogger()->Log(new String("Creating ModuleCatalog"), new Category(Category::Debug), new Priority(Priority::Low));
            $this->SetModuleCatalog($this->CreateModuleCatalog());

            if ($this->GetModuleCatalog() == null)
            {
                throw new Exception('ModuleCatalog is null');
            }
            
            $this->GetLogger()->Log(new String("Configuring ModuleCatalog"), new Category(Category::Debug), new Priority(Priority::Low));
            $this->ConfigureModuleCatalog();
            
            $this->GetLogger()->Log(new String("Creating Container"), new Category(Category::Debug), new Priority(Priority::Low));            
            $this->SetContainer($this->CreateContainer());

            if ($this->GetContainer() == null)
            {
                throw new Exception('Container is null');
            }
            
            $this->GetLogger()->Log(new String("Configuring Container"), new Category(Category::Debug), new Priority(Priority::Low));
            $this->ConfigureContainer();
            
            $this->GetLogger()->Log(new String("Initializing Modules"), new Category(Category::Debug), new Priority(Priority::Low));
            $this->InitializeModules($this->GetContainer());
            
            $this->GetLogger()->Log(new String("Creating Shell"), new Category(Category::Debug), new Priority(Priority::Low));
            $this->SetShell($this->CreateShell());

            if ($this->GetShell() != null)
            {
                $this->GetLogger()->Log(new String("Initializing Shell"), new Category(Category::Debug), new Priority(Priority::Low));
                $this->InitializeShell();
            }
        }

        /**
         * Creates the Container that will be used as the default container.
         * 
         * @return IContainer 
         */
        protected function CreateContainer()
        {
            return new Container(new ServiceDefinitionFactory());
        }

        /**
         * Configures the Container.
         * 
         * @return void 
         */
        protected function ConfigureContainer()
        {
            $this->GetContainer()->SetParameter("TextLogger", $this->GetLogger());
            
            if ($this->useDefaultConfiguration == true)
            {
                $this->GetContainer()->SetParameter("Container", $this->GetContainer());
                
                $moduleInitializer = $this->GetContainer()->SetService("ModuleInitializer", "\Yojimbo\Zanmatou\Modularity\ModuleInitializer");
                $moduleInitializer->AddArgument("Container");
                $moduleInitializer->AddArgument("TextLogger");
                
                $this->GetContainer()->SetParameter("ModuleCatalog", $this->GetModuleCatalog());
                
                $moduleManger = $this->GetContainer()->SetService("ModuleManager", "\Yojimbo\Zanmatou\Modularity\ModuleManager");
                $moduleManger->AddArgument("ModuleInitializer");
                $moduleManger->AddArgument("ModuleCatalog");
                $moduleManger->AddArgument("TextLogger");
            }   
        }
    }
}