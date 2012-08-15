<?php

/**
 * This file is a part of the CompositeApplication application and contains 
 * the Bootstrapper class.
 * 
 * @package CompositeApplication
 * @subpackage Application
 * @version 1.0.0
 * 
 * @author Rino Andre Johnsen <rinoandrejohnsen@gmail.com>
 * @copyright Copyright (c) 2011-2012, Author(s) above
 */

namespace CompositeApplication\Application
{
    use CompositeApplication\Application\Shell;
    use Yojimbo\Daigoro\DaigoroBootstrapper;
    
    /**
     * Final bootstrapper for this application. Overrides and configures base 
     * functions to load the right modules and shells.
     * 
     * @package CompositeApplication
     * @subpackage Application
     */
    class Bootstrapper extends DaigoroBootstrapper
    {
        /**
         * Creates the shell or main window of the application 
         * 
         * @return Shell
         */
        protected function CreateShell()
        {   
            return new Shell();  
        }
        
        /**
         * Configures the ModuleCatalog(); 
         * 
         * @return void
         */
        protected function ConfigureModuleCatalog() 
        {
            parent::ConfigureModuleCatalog();
            
            $this->GetModuleCatalog()->AddModule("ModuleA", "/home/rino/NetBeansProjects/WordPress/wp-content/plugins/CompositeApplication/Modules/ModuleA/ModuleA.php", "\CompositeApplication\Modules\ModuleA\ModuleA");
            $this->GetModuleCatalog()->AddModule("ModuleB", "/home/rino/NetBeansProjects/WordPress/wp-content/plugins/CompositeApplication/Modules/ModuleB/ModuleB.php", "\CompositeApplication\Modules\ModuleB\ModuleB");
        }
    }
}