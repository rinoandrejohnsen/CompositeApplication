<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the IModule interface.
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
     * Defines the contract for the modules deployed in the application.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface IModule
    {
        /**
         * Notifies the module that it has been initialized. 
         */
        public function Initialize();
    }
}