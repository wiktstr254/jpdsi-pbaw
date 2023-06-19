<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class LandingPageCtrl {
    
    public function action_landing() {
        
        App::getSmarty()->assign('page_title','Rent-a-Car');
        App::getSmarty()->assign('body_class','landing is-preload');
        App::getSmarty()->assign('headerClass','alt');
        App::getSmarty()->display("LandingPageView.tpl");
        
    }
    
}
