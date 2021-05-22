<?php

namespace Goli\Contact;



use Illuminate\Support\ServiceProvider;

class  ContactProvider extends  ServiceProvider
{
    public function register()
    {
        //add comment
    }


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');

    }
}
