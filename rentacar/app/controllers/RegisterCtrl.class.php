<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use core\RoleUtils;
use core\Validator;

class RegisterCtrl
{

    private $form;

    private function getParams(){
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->haslo2 = ParamUtils::getFromRequest('haslo2');
    }

    public function validateParams() {
        if (!(isset($this->form->login) && isset($this->form->haslo) && isset($this->form->haslo2)))
            return false;

        $v = new Validator();

        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
        ]);

        $v->validate($this->form->haslo,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);

        $v->validate($this->form->haslo2,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź hasło ponownie',
        ]);

        return !App::getMessages()->isError();
    }

    public function __construct() {
        $this->form = new RegisterForm();
    }
    public function action_register() {
        $this->getParams();

        if (isset ( $this->form->login ) && isset ( $this->form->haslo ) && isset ( $this->form->haslo2 ) && $this->validateParams()) {
            if ($this->form->haslo == $this->form->haslo2) {
                try {
                    $account = App::getDB()->get("user", "*", [
                        "login" => $this->form->login,
                    ]);
                } catch (\PDOException $e) {
                    App::getMessages()->addMessage(new Message('Błąd odczytu rekordu z bazy danych', Message::ERROR));
                }

                if ($account != null) {
                    // istnieje już konto o podanym loginie
                    App::getMessages()->addMessage(new Message('Istnieje już konto o podanym loginie', Message::ERROR));
                    $this->generate_view();
                } else {
                    App::getDB()->insert("user", [
                        "login" => $this->form->login,
                        "haslo" => $this->form->haslo,
                        "idRola" => 1
                    ]);
                    App::getMessages()->addMessage(new Message('Pomyślnie utworzono konto', Message::INFO));
                    App::GetRouter()->redirectTo('login');
                }
            } else {
                // Hasła nie zgadzają się
                App::getMessages()->addMessage(new Message('Podane hasła nie są takie same', Message::ERROR));
                $this->generate_view();
            }
        } else {
            // Pierwsze wywołanie widoku
            $this->generate_view();
        }
    }

    public function generate_view() {
        App::getSmarty()->assign('page_title', 'Rejestracja');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }
}