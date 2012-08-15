<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the Shell class.
 * 
 * @package CompositeApplication
 * @subpackage Application
 * 
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Application
{
    /**
     * The default shell for this application. This keeps track on the output
     * and the regions available for the modules.
     * 
     * @package CompositeApplication
     * @subpackage Application
     * @todo This class needs to be rewritten to handle regions
     */
    class Shell
    {
        public function Initialize()
        {
            $this->RegisterCss();
            $this->EnqueueCss();
            $this->Html();

            die(); // WordPress requires this...
        }

        private function Html()
        {
            get_header();

            echo $this->Regions();

            get_footer();
        }

        private function Regions()
        {
            $regions = '<div class="container"><h3 class="application-title">Stock Trader</h3><div class="toolbar"></div><div class="region1"></div><div class="region2"></div></div>';

            return $regions;
        }

        private function RegisterCss()
        {
            $src = plugins_url('', __FILE__) . '/Assets/Css/Generic.css';

            wp_register_style('generic', $src);
        }

        private function EnqueueCss()
        {
            wp_enqueue_style('generic');
        }
    }
}