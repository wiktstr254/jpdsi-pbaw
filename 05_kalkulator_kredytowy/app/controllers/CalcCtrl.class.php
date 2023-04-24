<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;
class CalcCtrl {

    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams(){
        $this->form->kwota = $_REQUEST ['kwota'] ?? null;
        $this->form->oprocentowanie = $_REQUEST ['oprocentowanie'] ?? null;
        $this->form->okres = $_REQUEST ['okres'] ?? null;
    }

    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku
     */
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->form->kwota ) && isset ( $this->form->oprocentowanie ) && isset ( $this->form->okres ))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false; //zakończ walidację z błędem
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if ($this->form->okres == "") {
            getMessages()->addError('Nie podano okresu splaty');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (! getMessages()->isError()) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric ( $this->form->kwota )) {
                getMessages()->addError('Podana kwota kredytu nie jest liczbą całkowitą');
            }

            if (! is_numeric ( $this->form->oprocentowanie )) {
                getMessages()->addError('Podane oprocentowanie nie jest liczbą całkowitą');
            }

            if (! is_numeric ( $this->form->okres )) {
                getMessages()->addError('Podany okres spłaty nie jest liczbą całkowitą');
            }
        }

        return ! getMessages()->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process(){

        $this->getparams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->kwota = intval($this->form->kwota);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            getMessages()->addInfo('Parametry poprawne.');

            //wykonanie operacji
            $this->result->result = ($this->form->kwota * ($this->form->oprocentowanie * 0.01))/$this->form->okres;

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }


    /**
     * Wygenerowanie widoku
     */
    public function generateView(){
        //nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
        // - wszystko załatwia funkcja getSmarty()

        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
        getSmarty()->assign('page_header','Kontroler główny');

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
    }
}
