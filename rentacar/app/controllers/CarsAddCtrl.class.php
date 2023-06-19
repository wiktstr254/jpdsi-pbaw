<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\CarsAddForm;
use core\Validator;
class CarsAddCtrl
{
    private $form;

    private function getParams(){
        $this->form->marka = ParamUtils::getFromRequest('marka');
        $this->form->model = ParamUtils::getFromRequest('model');
        $this->form->rocznik = ParamUtils::getFromRequest('rocznik');
        $this->form->kolor = ParamUtils::getFromRequest('kolor');
        $this->form->mocSilnika = ParamUtils::getFromRequest('mocSilnika');
        $this->form->cenaZaDzien = ParamUtils::getFromRequest('cenaZaDzien');
    }

    private function validateParams() {
        if (!(isset($this->form->marka) && isset($this->form->model) && isset($this->form->rocznik) && isset($this->form->kolor) && isset($this->form->mocSilnika)  && isset($this->form->cenaZaDzien)))
            return false;

        $v = new Validator();

        $v->validate($this->form->marka, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Marka jest wymagana',
        ]);
        $v->validate($this->form->model, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Model jest wymagany',
        ]);
        $v->validate($this->form->rocznik, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Rocznik jest wymagany',
            'int' => true,
            'validator_message' => 'Rocznik musi być liczbą całkowitą'
        ]);
        $v->validate($this->form->kolor, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Kolor jest wymagany',
        ]);
        $v->validate($this->form->mocSilnika, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Moc silnika jest wymagana',
            'int' => true,
            'validator_message' => 'Moc silnika musi być liczbą całkowitą'
        ]);
        $v->validate($this->form->cenaZaDzien, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Cena jest wymagana',
            'int' => true,
            'validator_message' => 'Cena musi być liczbą całkowitą'
        ]);

        return !App::getMessages()->isError();
    }

    public function __construct() {
        $this->form = new CarsAddForm();
    }
    public function action_carsAdd() {

        $this->getParams();

        if ($this->validateParams()) {
            App::getDB()->insert("samochod", [
                "marka" => $this->form->marka,
                "model" => $this->form->model,
                "rocznik" => $this->form->rocznik,
                "kolor" => $this->form->kolor,
                "mocSilnika" => $this->form->mocSilnika,
                "cenaZaDzien" => $this->form->cenaZaDzien,
           ]);
            App::getMessages()->addMessage(new \core\Message('Pomyślnie dodano samochód do bazy.', \core\Message::INFO));
        }
        $this->generate_view();
    }

    public function generate_view() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("CarsAddView.tpl");
    }
}