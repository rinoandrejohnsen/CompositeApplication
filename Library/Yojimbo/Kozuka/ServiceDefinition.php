<?php

/**
 * Standard implementation of a service definition.
 */
namespace Yojimbo\Kozuka
{
    class ServiceDefinition implements IServiceDefinition
    {

        /**
        * The service's class name.
        */
        private $className;

        /**
        * Argument names used for getting the arguments which will be passed to the
        * service's constructor.
        */
        private $arguments = array();

        /**
        * Method calls.
        */
        private $calls = array();

        /**
        * Constructor.
        *
        * @param $class
        *   The service's class name.
        */
        public function __construct($class)
        {
            $this->className = $class;
        }

        /**
        * Create instance of a service.
        *
        * @param $di
        *   DI container for getting constructor arguments.
        *
        * @return
        *   The service to be created.
        */
        private function CreateInstance(IContainer $di)
        {
            // Big thanks to:
            // http://blog.ebene7.com/2011/03/21/array-als-parameterliste-an-den-konstruktor-uebergeben/
            $args = array();
            
            foreach ($this->arguments as $name)
            {
                $args[] = $di->Get($name);
            }

            $class = new \ReflectionClass($this->className);
            
            /**
            if (count($args) > 1)
            {
                if (method_exists($class_name,  '__construct') === false)
                {
                    exit("Constructor for the class <strong>$class_name</strong> does not exist, you should not pass arguments to the constructor of this class!");
                }
            }
             * 
             */
            
            return $class->newInstanceArgs($args);
        }

        /**
        * Calls methods on the service.
        *
        * @param $di
        *   DI container for getting method arguments.
        *
        * @return
        *   The service.
        */
        private function CallMethods($service, IContainer $di)
        {
            foreach ($this->calls as $call)
            {
                $args = call_user_func_array(array($service, $call['name']), array_map(array($di, 'get'), $call['argument_names']));
            }
            
            return $service;
        }

        public function Create(IContainer $di)
        {
            return $this->CallMethods($this->CreateInstance($di), $di);
        }

        public function AddArgument($name)
        {
            $this->arguments[] = $name;
            
            return $this;
        }

        public function AddCall($name, $argNames = array())
        {
            $this->calls[] = array('name' => $name, 'argument_names' => $argNames);
            
            return $this;
        }
    }
}
