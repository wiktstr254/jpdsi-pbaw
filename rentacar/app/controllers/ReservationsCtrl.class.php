<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\ReservationsForm;

class ReservationsCtrl
{
    private $form;

    public function __construct() {
        $this->form = new ReservationsForm();
    }

    public function action_reservationsList() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->generate_view();
    }

    private function generate_view() {
        $wypozyczenia = App::getDB()->select("wypozyczenie", "*", [
            "SAMOCHOD_idSamochod" => $this->form->id
        ]);
        $samochod = App::getDB()->get("samochod", "*", [
            "idSamochod" => $this->form->id
        ]);

        if (RoleUtils::inRole('admin'))
            App::getSmarty()->assign('isAdmin', 'true');
        App::getSmarty()->assign('wypozyczenia', $wypozyczenia);
        App::getSmarty()->assign('samochod', $samochod);
        App::getSmarty()->assign('page_title','Rezerwacje');

        App::getSmarty()->display('Reservations.tpl');
    }
}