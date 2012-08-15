<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the ISerializable interface.
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
    
    /**
     * Defines a simple logger facade to be used by the Yojimbo library.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    interface ISerializable  
    {
        /**
         * String representation of object
         * 
         * @param \PhpStack\Base\Types\String $data
         * @return \PhpStack\Base\Types\String
         */
        public function Serialize(String $data);

        /**
         * Constructs the object
         * 
         * @param \PhpStack\Base\Types\String $data
         * @return \PhpStack\Base\Types\String
         */
        public function Unserialize(String $data);
    }
}