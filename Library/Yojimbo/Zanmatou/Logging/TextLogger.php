<?php

/**
 * This file is a part of the Yojimbo framework and contains 
 * the TextLogger class that implements ILoggerFacade.
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
    use PhpStack\Base\Types\String;
    use Yojimbo\Zanmatou\Logging\Category;
    use Yojimbo\Zanmatou\Logging\ILoggerFacade;
    use Yojimbo\Zanmatou\Logging\Priority;
    use Yojimbo\Zanmatou\Logging\TextWriter;
    
    /**
     * Implementation of ILoggerFacade logs into TextWriter.
     * 
     * @package Yojimbo
     * @subpackage Zanmatou
     */
    class TextLogger implements ILoggerFacade
    {
        /**
         * The TextWriter for this logger. Writes data to a given file.
         * 
         * @var \Yojimbo\Zanmatou\Logging\TextWriter
         */
        private $writer;

        /**
         * Initializes a new instance of TextLogger.
         * 
         * @param \Yojimbo\Zanmatou\Logging\TextWriter $writer
         * @throws \Exception 
         */
        public function __construct(TextWriter $writer)
        {
            if ($writer == null)
            {
                throw new Exception("writer is null");
            }
            
            $this->writer = $writer;
        }
        
        /**
         * Empty the log for entries.
         */
        public function EmptyLog()
        {
            $this->writer->Delete();
        }
        
        /**
         * Returns the log unserialzed
         * 
         * @return \PhpStack\Base\Types\String
         */
        public function GetLog()
        {
            return $this->writer->Read();
        }
        
        /**
         * Write a new log entry with the specified category and priority.
         * 
         * @param \PhpStack\Base\Types\String $message The message to display
         * @param \Yojimbo\Zanmatou\Logging\Category $category Enum
         * @param \Yojimbo\Zanmatou\Logging\Priority $priority Enum
         */
        public function Log(String $message, Category $category, Priority $priority)
        {
            $messageToLog = new String((string)date("Y-m-d H:i:s") . substr((string)microtime(), 1, 6) . " " . (string)$category . " " . (string)$priority . " " . $message);

            $this->writer->Write($messageToLog);
        }  
    }
}