<?php

namespace app\controllers;

use app\forms\CarsRentForm;
use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class CarsRentCtrl {
    private $form;

    public function __construct() {
        $this->form = new CarsRentForm();
    }

    private function getParams() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->dataRozpoczecia =  ParamUtils::getFromRequest('dataRozpoczecia');
        $this->form->dataZakonczenia =  ParamUtils::getFromRequest('dataZakonczenia');
    }

    private function validateParams() {
        if (!(isset($this->form->id) && isset($this->form->dataRozpoczecia) && isset($this->form->dataZakonczenia)))
            return false;

        $v = new Validator();

        $v->validate($this->form->dataRozpoczecia,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Data rozpoczęcia rezerwacji jest wymagana',
        ]);

        $v->validate($this->form->dataZakonczenia,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Data zakończenia rezerwacji jest wymagana',
        ]);

        return !App::getMessages()->isError();
    }

    private function validateDate() {
        $wypozyczenia = App::getDB()->select("wypozyczenie","*", [
            "SAMOCHOD_idSamochod" => $this->form->id,
            "dataRozpoczecia[<>]" => [$this->form->dataRozpoczecia, $this->form->dataZakonczenia],
            "dataZakonczenia[<>]" => [$this->form->dataRozpoczecia, $this->form->dataZakonczenia],
        ]);

        if ($wypozyczenia != null) {
            App::getMessages()->addMessage(new Message('Podany termin koliduje z inną rezerwacją', Message::ERROR));
            return false;
        }

        return true;
    }
    public function action_carsRent() {
        $this->form->id = ParamUtils::getFromRequest('id');

        try {
            $record = App::getDB()->get("samochod","*",[
               "idSamochod" => $this->form->id
            ]);
        } catch (\PDOException $e) {
            App::getMessages()->addMessage(new Message('Błąd odczytu rekordu z bazy danych', Message::ERROR));
        }
        $this->generate_view();
    }

    public function action_carsRentConfirm() {
        $this->getParams();

        if($this->validateParams() && $this->validateDate()) {
            try {
                App::getDB()->insert("wypozyczenie", [
                    "SAMOCHOD_idSamochod" => $this->form->id,
                    "USER_idUser" => SessionUtils::load("idUser", $keep = true),
                    "dataRozpoczecia" => $this->form->dataRozpoczecia,
                    "dataZakonczenia" => $this->form->dataZakonczenia
                ]);
                App::getMessages()->addMessage(new Message('Rezerwacja została pomyślnie potwierdzona', Message::INFO));
                App::getRouter()->forwardTo('carsList');
            } catch (\PDOException $e) {
                App::getMessages()->addMessage(new Message('Błąd odczytu rekordu z bazy danych', Message::ERROR));
            }
        } else {
            $this->generate_view();
        }

    }

    public function generate_view() {
        App::getSmarty()->assign('page_title', 'Rezerwacja');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('CarsRentView.tpl');
    }

}