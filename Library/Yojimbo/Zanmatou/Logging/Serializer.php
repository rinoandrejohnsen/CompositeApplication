<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the Serializer class that implements \Serializable.
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

    use InvalidArgumentException;
    use PhpStack\Base\Types\String;
    use RuntimeException;
    use Yojimbo\Zanmatou\Logging\ISerializable;

    /**
     * A simple serializer class for resources.
     *  
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class Serializer implements ISerializable
    {
        /**
         * Serializes data
         * 
         * @param \PhpStack\Base\Types\String $data
         * @return \PhpStack\Base\Types\String
         * @throws \InvalidArgumentException
         * @throws \RuntimeException
         */
        public function Serialize(String $data) 
        {
            if (is_resource($data)) 
            {
                throw new InvalidArgumentException("PHP resources are not serializable.");
            }
            if (($data = serialize($data)) === false) 
            {
                throw new RuntimeException("Unable to serialize the supplied data.");
            }
            
            return $data . "\n";
        }
        
        /**
         * Unserializes data
         * 
         * @param \PhpStack\Base\Types\String $data
         * @return \PhpStack\Base\Types\String
         * @throws \InvalidArgumentException
         * @throws \RuntimeException
         */
        public function Unserialize(String $data) 
        {
            if (!is_string($data) || empty($data)) 
            {
                throw new InvalidArgumentException("The data to be unserialized must be a non-empty string.");
            }
            if (($data = @unserialize($data)) === false) 
            {
                throw new RuntimeException("Unable to unserialize the supplied data.");
            }
            
            return new String($data);
        }
    }
}