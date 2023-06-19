<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use core\RoleUtils;

class LoginCtrl
{
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
    }
    public function action_login() {

        $this->getParams();

        if (isset ( $this->form->login ) && isset ( $this->form->haslo )) {
            try {
                $account = App::getDB()->get("user", "*", [
                    "login" => $this->form->login,
                    "haslo" => $this->form->haslo
                ]);
            } catch (\PDOException $e) {
                App::getMessages()->addMessage(new \core\Message('Błąd odczytu rekordu z bazy danych', \core\Message::ERROR));
            }

            if ($account != null) {
                $idRola = $account["idRola"];

                if ($idRola == 1)
                    $rola = 'admin';
                else if ($idRola == 2)
                    $rola = 'user';
                else {
                    App::getMessages()->addMessage(new \core\Message('Nie znaleziono roli dla podanego konta.', \core\Message::ERROR));
                    $this->generate_view();
                }

                RoleUtils::addRole($rola);
                App::getMessages()->addMessage(new \core\Message('Pomyślnie zalogowano.', Message::INFO));
                SessionUtils::store("idUser", $account["idUser"]);

                App::GetRouter()->redirectTo('carsList');
            } else {
                App::getMessages()->addMessage(new \core\Message('Błędny login lub hasło.', Message::ERROR));
                $this->generate_view();
            }
        } else {
            // Niezalogowany
            $this->generate_view();
        }

    }

    public function action_logout() {
        session_destroy();
        SessionUtils::remove('idUser');
        App::getMessages()->addMessage(new \core\Message('Poprawnie wylogowano z systemu.', \core\Message::INFO));
        $this->generate_view();
    }

    public function generate_view() {
        App::getSmarty()->assign('page_title', 'Logowanie');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("LoginView.tpl");
    }
}