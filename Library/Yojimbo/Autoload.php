<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the Autoload class.
 * 
 * @package Yojimbo
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace Yojimbo
{
    /**
     * Simple class for autoloading the Yojimbo library
     * 
     * @package Yojimbo
     */
    class Autoload
    {
        /**
         * Base directory for class files.
         * @var string Directory path
         */
        private $dir;
        
        /**
         * Constructor for this class
         */
        public function __construct()
        {
            $this->dir = dirname(__FILE__);
        }

        /**
         * Registers this autoloader via spl_autoload_register().
         * 
         * @return void
         */
        public function Register()
        {
            spl_autoload_register(array($this, 'Autoload'));
        }

        /**
         * Checks if the class name exsits in this directory.
         *
         * @param string $class Class name
         *
         * @return bool true, if it does, else false.
         */
        private function IsClassInDirectory($class)
        {
            $files = $this->ScanDirRecursive($this->dir);
            
            if (in_array(str_replace(__NAMESPACE__, "", $this->dir) . str_replace("\\", '/', $class) . '.php', $files))
            {
                return true;
            }
            
            return false;
        }

        /**
         * Returns the filename corresponding to the class name.
         *
         * @param string $class Class name.
         *
         * @return string The filename.
         */
        private function Filename($class)
        {
            return str_replace(__NAMESPACE__, "", $this->dir) . '/' . str_replace('\\', '/', $class) . '.php';
        }

        /**
         * Loads the file corresponding to the class.
         *
         * @param string $class Name of the class to be loaded
         * @return void
         */
        public function Autoload($class)
        {
            if ($this->IsClassInDirectory($class))
            {
                require_once($this->Filename($class));
            }
        }
        /**
         * Scans a directory and subdirectories for all files and returns 
         * the names.
         * 
         * @param string $directory Directory to search in
         * @return array Array with filenames
         */
        private function ScanDirRecursive($directory)
        {
            $fileTmp = glob($directory . '*', GLOB_MARK | GLOB_NOSORT);
            $files = array();

            foreach ($fileTmp as $item)
            {
                if (substr($item, -1) != DIRECTORY_SEPARATOR)
                {
                    $files[] = $item;
                } 
                else
                {
                    $files = array_merge($files, $this->ScanDirRecursive($item));
                }
            }

            return $files;
        }
    }
}