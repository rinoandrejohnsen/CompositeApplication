<?php

/**
 * A service definition. Extends the service definition facade, which is an
 * interface for configuring a service definition but with no possibility to
 * create one.
 */
namespace Yojimbo\Kozuka
{
    interface IServiceDefinition extends IServiceDefinitionFacade
    {

        /**
        * Creates the service.
        *
        * @param $di
        *   An implementor of the main API. Used to get the arguments for creating
        *   the service defined by this definition.
        *
        * @return
        *   The service, whatever it may be.
        */
        public function Create(IContainer $di);
    }
}
