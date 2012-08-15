<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the Priority class that extends \SplEnum.
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
     * Defines values for the priorities used by ILoggerFacade
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class Priority extends Enum
    {
        /**
         * The default value if none is selected
         */
        const __default = self::None;
        
        /**
         * No priority specified 
         */
        const None = 0;
        
        /**
         * High priority entry 
         */
        const High = 1;
        
        /**
         * Medium priority entry
         */
        const Medium = 2;
        
        /**
         * Low priority entry
         */
        const Low = 3;
    }
}