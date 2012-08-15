<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the Application class.
 * 
 * @package CompositeApplication
 * @subpackage Application
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Application
{
    use CompositeApplication\Application\Bootstrapper;
    use Exception;

    /**
     * Class for managing the startup before we kick the bootstrapper in gear.
     * 
     * @package CompositeApplication
     * @subpackage Application
     */
    class Application
    {
        /**
         * Initializes a new bootstrapper.
         */
        public function Run()
        {
            try
            {
                $bootstrapper = new Bootstrapper();
                $bootstrapper->Initialize();
            } 
            catch (Exception $e)
            {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }
}