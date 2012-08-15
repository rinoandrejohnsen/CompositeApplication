<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the IBookFeedService interface.
 * 
 * @package CompositeApplication
 * @subpackage Common
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Common\Infrastructure\Interfaces
{   
    /**
     * Defines a simple logger facade to be used by the Yojimbo library.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface IProductFeedService
    {
        /**
         * Get all products
         */
        public function GetProducts();
    }
}