<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the ModuleB class.
 * 
 * @package CompositeApplication
 * @subpackage Modules
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Modules\ModuleB
{
    use Exception;
    use Yojimbo\Kozuka\IContainer;
    use Yojimbo\Zanmatou\Modularity\IModule;

    /**
     * Initializer class for Module B.
     * 
     * @package CompositeApplication
     * @subpackage Modules
     */
    class ModuleB implements IModule
    {
        /**
         * The default IContainer for the application.
         * 
         * @var IContainer
         */
        private $container;
        
        /**
         * Initializes a new instance of ModuleB.
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
            echo "Dette er en tekst fra ModuleB som viser data som er generert fra ModuleA  ";
            
            /* @var $productFeed \CompositeApplication\Modules\ModuleA\Services\ProductFeedService */
            $productFeed = $this->GetContainer()->Get("ProductFeedService");
            $products = $productFeed->GetProducts();
            
            /* @var $product \CompositeApplication\Common\Infrastructure\Models\Product\Product */
            $product = $products[0];
            
            var_dump($product);
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