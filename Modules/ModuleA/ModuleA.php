<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the ModuleA class.
 * 
 * @package CompositeApplication
 * @subpackage Modules
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Modules\ModuleA
{
    use Yojimbo\Zanmatou\Modularity\IModule;
    use Yojimbo\Kozuka\IContainer;

    /**
     * Initializer class for Module A.
     * 
     * @package CompositeApplication
     * @subpackage Modules
     */
    class ModuleA implements IModule
    {
        /**
         * The default IContainer for the application.
         * 
         * @var IContainer
         */
        private $container;
        
        /**
         * Initializes a new instance of ModuleA.
         * 
         * @param IContainer $container
         * @throws Exception 
         */
        public function __construct(IContainer $container)
        {
            if ($container != null)
            {
                $this->SetContainer($container);
            }
            else
            {
                throw new Exception('Container is null');
            }
        }

        /**
         * Initializes the module. 
         */
        public function Initialize()
        {   
            $moduleManger = $this->container->SetService("ProductFeedService", "\CompositeApplication\Modules\ModuleA\Services\ProductFeedService");
        }
        
        /**
         * Gets the default Container for the application.
         * 
         * @return IContainer|null The default Container for the application. 
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
    }
}