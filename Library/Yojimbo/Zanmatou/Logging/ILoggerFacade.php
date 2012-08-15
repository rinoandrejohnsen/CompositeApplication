<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ILoggerFacade interface.
 * 
 * @package Yojimbo
 * @subpackage Zanmatou
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Zanmatou\Logging
{
    use PhpStack\Base\Types\String;
    use Yojimbo\Zanmatou\Logging\Category;
    use Yojimbo\Zanmatou\Logging\Priority;
    
    /**
     * Defines a simple logger facade to be used by the Yojimbo library.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface ILoggerFacade
    {
        /**
         * Write a new log entry with the specified category and priority.
         * 
         * @param \PhpStack\Base\Types\String $message
         * @param \Yojimbo\Zanmatou\Logging\Category $category
         * @param \Yojimbo\Zanmatou\Logging\Priority $priority
         */
        public function Log(String $message, Category $category, Priority $priority);
    }
}
