<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$okres_splaty = $_REQUEST ['okres_splaty'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($okres_splaty) && isset($oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $okres_splaty == "") {
	$messages [] = 'Nie podano okresu spłaty';
}
if ($oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Podana kwota nie jest poprawne';
	}
	
	if (! is_numeric( $okres_splaty )) {
		$messages [] = 'Podana liczba lat jest niepoprawna';
	}

	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Podane oprocentowanie nie jest poprawne';
	}		

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$okres_splaty = intval($okres_splaty);
	$oprocentowanie = intval($oprocentowanie);
	
	$result = ($kwota * (1 + ($oprocentowanie * 0.01)))/$okres_splaty;
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';