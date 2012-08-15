<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the TextWriter class.
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
    use Exception;
    use InvalidArgumentException;
    use PhpStack\Base\Types\Int;
    use PhpStack\Base\Types\String;
    use Yojimbo\Zanmatou\Logging\ISerializable;
    use Yojimbo\Zanmatou\Logging\Serializer;
    use Yojimbo\Zanmatou\Logging\TextWriter;
    
    /**
     * A simple TextWriter. Writes data to a given file. Log.dat in the Data
     * folder is the default file.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class TextWriter
    {
        /**
         * Constant for the default storage file.
         */
        const DefaultStorageFile = "Log.dat";
        
        /**
         * The Serializer for this TextWriter.
         *
         * @var \Yojimbo\Zanmatou\Logging\Serializer
         */
        protected $serializer = null;
        
        /**
         * Path + filename. 
         * 
         * @var \PhpStack\Base\Types\String
         */
        protected $file = null;
        
        /**
         * Constructor for this class.
         * 
         * @param \Yojimbo\Zanmatou\Logging\ISerializable $serializer
         * @param \PhpStack\Base\Types\String $path Path to the file
         * @param string $filename
         */
        public function __construct(ISerializable $serializer, String $path = null, $filename = self::DefaultStorageFile) 
        {
            if ($path == null)
            {
                $path = new String(dirname(__FILE__) . "/Data/");
            }
            
            $file = new String($path . $filename);
            
            $this->SetFile($file);
            $this->serializer = $serializer;
        }
        
        /**
         * Sets the file to read/write. Checks if it is a file and if it is
         * readable and writable.
         * 
         * @param \PhpStack\Base\Types\String $file
         * @return \Yojimbo\Zanmatou\Logging\TextWriter
         * @throws \InvalidArgumentException
         */
        public function SetFile(String $file) 
        {
            if (!is_file($file)) 
            {
                throw new InvalidArgumentException("The file $file does not exist.");
            }
            if (!is_readable($file) || !is_writable($file)) 
            {
                if (!chmod($file, 0644)) 
                {
                    throw new InvalidArgumentException("The file $file is not readable or writable.");
                }
            }
            
            $this->file = $file;
            
            return $this;
        }
        
        /**
         * Gets the file and unserialize the content.
         * 
         * @return \PhpStack\Base\Types\String Unserialized string
         * @throws \Exception
         */
        public function Read() 
        {
            try 
            {
                return $this->serializer->Unserialize(@file_get_contents($this->file));
            }
            catch (Exception $e) 
            {
                throw new Exception($e->getMessage());
            }
        }
        
        /**
         * Writes the given data to the file.
         * 
         * @param \PhpStack\Base\Types\String $data
         * @return \PhpStack\Base\Types\Int Number of bytes that were written to the file
         * @throws \Exception
         */
        public function Write(String $data) 
        {
            try 
            {   
                return new Int(file_put_contents($this->file, $this->serializer->Serialize($data), FILE_APPEND | LOCK_EX));
            }
            catch (Exception $e) 
            {
                throw new Exception($e->getMessage());
            }
        }
        
        /**
         * Deletes the all the content in the file.
         * 
         * @return \PhpStack\Base\Types\Int Number of bytes that were written to the file
         * @throws \Exception
         */
        public function Delete()
        {
            try 
            {
                return new Int(file_put_contents($this->file, ""));
            }
            catch (Exception $e) 
            {
                throw new Exception($e->getMessage());
            }
        }
    }
}