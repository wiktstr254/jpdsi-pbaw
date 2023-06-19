<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;

class CarsListCtrl
{

    public function action_carsList() {
        if (RoleUtils::inRole('admin'))
            App::getSmarty()->assign('isAdmin', 'true');

        $cars = App::getDB()->select("samochod", "*");
        
        App::getSmarty()->assign('samochody', $cars);
        App::getSmarty()->assign('page_title','Nasze Samochody');
        App::getSmarty()->display("CarsListView.tpl");

    }

}