<?php

/**
 * @package Yojimbo
 * @subpackage Kozuka
 * @version 1.0.0
 * 
 * Container for all services and parameters, implements the main API.
 *
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo\Kozuka
{
    use OutOfBoundsException;
    
    class Container implements IContainer
    {

        /**
         * Factory to create service definitions and service definition facades.
         */
        private $serviceFactory;

        /**
         * Stores parameters.
         */
        private $params = array();

        /**
         * Stores service definitions.
         */
        private $serviceDefinitions = array();

        /**
         * Stores services.
         */
        private $services = array();

        public function __construct(IServiceDefinitionFactory $factory)
        {
            $this->serviceFactory = $factory;
        }

        public function SetParameter($name, $value)
        {
            $this->params[$name] = $value;

            return $this;
        }

        /**
         * Creates a service if that service does not exist yet.
         *
         * @param $name
         *   The service's name.
         *
         * @see findService()
         */
        private function MaybeCreateServiceObject($name)
        {
            if (!array_key_exists($name, $this->services))
            {
                $this->services[$name] = $this->serviceDefinitions[$name]->create($this);
            }
        }

        /**
         * Tries to find a service with the given name.
         *
         * @param $name
         *   The service's name.
         *
         * @return
         *   The service.
         *
         * @throws OutOfBoundsException
         *   If no service with that name exists.
         */
        private function FindService($name)
        {
            if (array_key_exists($name, $this->serviceDefinitions))
            {
                $this->MaybeCreateServiceObject($name);
                
                return $this->services[$name];
            } 
            else
            {
                throw new OutOfBoundsException();
            }
        }

        public function Get($name)
        {
            if (array_key_exists($name, $this->params))
            {
                return $this->params[$name];
            } 
            else
            {
                return $this->FindService($name);
            }
        }

        public function SetService($name, $class)
        {
            $this->serviceDefinitions[$name] = $this->serviceFactory->createDefinition($class);

            return $this->serviceFactory->createFacade($this->serviceDefinitions[$name]);
        }
    }
}

?>