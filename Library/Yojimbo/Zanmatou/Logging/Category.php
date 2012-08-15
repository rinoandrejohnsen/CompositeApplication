<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the Category class that extends \SplEnum.
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
    use PhpStack\Base\Types\Enum;
    
    /**
     * Defines values for the categories used by ILoggerFacade
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class Category extends Enum 
    {
        /**
         * The default value if none is selected
         */
        const __default = self::Debug;
        
        /**
         * Debug category 
         */
        const Debug = 0;
        
        /**
         * Exception category 
         */
        const Exception = 1;
        
        /**
         * Info category 
         */
        const Info = 2;
        
        /**
         * Warning category 
         */
        const Warning = 3;
    }
}