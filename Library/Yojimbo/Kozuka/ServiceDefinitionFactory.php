<?php

/**
 * Implementation of a factory creating service definitions and facades.
 */
namespace Yojimbo\Kozuka
{
    class ServiceDefinitionFactory implements IServiceDefinitionFactory
    {
        public function CreateDefinition($class)
        {
            return new ServiceDefinition($class);
        }

        public function CreateFacade(IServiceDefinition $definition)
        {
            return new ServiceDefinitionFacade($definition);
        }
    }
}
