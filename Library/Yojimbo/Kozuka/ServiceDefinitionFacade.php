<?php

/**
 * Wraps a service definition and only exposes methods to configure it, but none
 * to create it.
 */
namespace Yojimbo\Kozuka
{
    class ServiceDefinitionFacade implements IServiceDefinitionFacade
    {

        /**
        * Service definition.
        */
        private $definition;

        /**
        * Constructor.
        *
        * @param $definition
        *   Service definition which can be configured via this facade.
        */
        public function __construct(IServiceDefinition $definition)
        {
            $this->definition = $definition;
        }

        public function AddArgument($name)
        {
            $this->definition->AddArgument($name);
            
            return $this;
        }

        public function AddCall($name, $argNames = array())
        {
            $this->definition->AddCall($name, $argNames);
            
            return $this;
        }
    }
}
