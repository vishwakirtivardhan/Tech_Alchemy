<?php namespace App\Modules;
class ServiceProvider extends  \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $modules = config("module.modules");

        //print_r($modules);die;
        
        $backendmodules = $modules['backend'];
        $frontmodules =$modules['frontend'];
        $apimodules =@$modules['api'];
        //print_r($frontmodules);die;
       
        //backend module registration
        if(!empty($backendmodules))
        {
            foreach ($backendmodules as $module) {
                    # code...
                    if(file_exists(__DIR__.'/backend/'.$module.'/routes.php')) {
                    include __DIR__.'/backend/'.$module.'/routes.php';
                }
                if(is_dir(__DIR__.'/backend/'.$module.'/Views')) {
                    //echo __DIR__.'/'.$module.'/Views';
                    $this->loadViewsFrom(__DIR__.'/backend/'.$module.'/Views', $module);
                    //die;
                }

            }
        }

        //api module registration

        if(!empty($apimodules))
        {
            foreach ($apimodules as $module) {
                    # code...
                    if(file_exists(__DIR__.'/api/'.$module.'/routes.php')) {
                    include __DIR__.'/api/'.$module.'/routes.php';
                }
                if(is_dir(__DIR__.'/api/'.$module.'/Views')) {
                    //echo __DIR__.'/'.$module.'/Views';
                    $this->loadViewsFrom(__DIR__.'/api/'.$module.'/Views', $module);
                    //die;
                }

            }
        }

        //frontend module registration

        if(!empty($frontmodules))
        {
            foreach ($frontmodules as $module) {
                    # code...
                    if(file_exists(__DIR__.'/frontend/'.$module.'/routes.php')) {
                    include __DIR__.'/frontend/'.$module.'/routes.php';
                }
                if(is_dir(__DIR__.'/frontend/'.$module.'/Views')) {
                    //echo __DIR__.'/'.$module.'/Views';
                    $this->loadViewsFrom(__DIR__.'/frontend/'.$module.'/Views', $module);
                    //die;
                }

            }
        }
   
       
    }

    public function register(){}

}