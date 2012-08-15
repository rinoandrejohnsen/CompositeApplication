<?php

/*
  Plugin Name: CompositeApplication
  Description: Sets up a sample application, based on composite architecture, inside of WordPress.
  Author: Rino Andre Johnsen
  Version: 2.1.0
 */

/**
 * @package CompositeApplication
 * @version 2.1.0
 * 
 * Root namespace and file for this application.
 *
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication
{
    class WpPlugin
    {
        public function RequireAll()
        {
            $path = dirname(__FILE__);
            
            require_once $path . '/Library/PhpStack/Autoload.php';
            require_once $path . '/Library/Yojimbo/Autoload.php';
            require_once $path . '/Autoload.php';
            
            $phpStackAutoLoader = new \PhpStack\Autoload();
            $phpStackAutoLoader->Register();
            
            $yojimboAutoLoader = new \Yojimbo\Autoload();
            $yojimboAutoLoader->Register();
            
            $compositeApplicationAutoLoader = new \CompositeApplication\Autoload();
            $compositeApplicationAutoLoader->Register();
        }
        
        public function FlushRewriteRules($rules)
        {
            global $wp_rewrite;

            $wp_rewrite->flush_rules();
        }

        public function AddRewriteRules($rules)
        {
            global $wp_rewrite;

            $newRules = array();
            $newRules['app/?$'] = 'index.php?controller=stocktrader&action=index';
            $rules = array_merge($newRules, $rules);

            return $rules;
        }

        public function AddQueryVars($vars)
        {
            array_push($vars, 'controller');
            array_push($vars, 'action');

            return $vars;
        }

        public function TemplateRedirect()
        {
            global $wp_query;

            $routingParams = $this->GetRoutingParams();

            if ($routingParams)
            {
                $app = new \CompositeApplication\Application\Application();
                $app->Run();
            }
        }

        protected function GetRoutingParams()
        {
            global $wp_query;

            $controller = $wp_query->get('controller');

            if ($controller)
            {
                $queryParams = $wp_query->query;
                $params = array();

                foreach ($queryParams as $key => $value)
                {
                    $params[$key] = $value;
                }

                return $params;
            }

            return false;
        }
    }

    $loader = new WpPlugin();
    $loader->RequireAll();

    add_filter('init', array($loader, 'FlushRewriteRules'));
    add_filter('rewrite_rules_array', array($loader, 'AddRewriteRules'));
    add_filter('query_vars', array($loader, 'AddQueryVars'));
    add_filter('template_redirect', array($loader, 'TemplateRedirect'));
}