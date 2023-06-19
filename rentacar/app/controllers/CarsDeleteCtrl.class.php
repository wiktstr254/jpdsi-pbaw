<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\carsDeleteForm;

class carsDeleteCtrl
{
    private $form;

    public function __construct() {
        $this->form = new CarsDeleteForm();
    }
    public function action_carsDelete() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->generate_view();
    }

    public function action_carsDeleteConfirm() {
        $this->form->id = ParamUtils::getFromRequest('id');
        echo($this->form->id);

        try {
            App::getDB()->delete("samochod", [
                "idSamochod" => $this->form->id
            ]);
            App::getMessages()->addMessage(new Message('Pomyślnie usunięto samochód', Message::INFO));
        } catch (\PDOException $e) {
            App::getMessages()->addMessage(new Message('Błąd odczytu rekordu z bazy danych', Message::ERROR));
        }

        App::getRouter()->forwardTo('carsList');
    }

    public function generate_view() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('CarsDeleteView.tpl');
    }
}