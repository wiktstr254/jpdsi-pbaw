<?php //góra strony z szablonu
include _ROOT_PATH.'/templates/top.php';
?>
<h2>Kalkulator kredytowy</h2>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php out($kwota); ?>" />
	<br />
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php out($oprocentowanie); ?>" />
	<br />
	<label for="id_okres_splaty">Okres spłaty: </label>
	<input id="id_okres_splaty" type="text" name="okres_splaty" value="<?php out($okres_splaty); ?>" />
	<br />
	<input type="submit" value="Oblicz" />
</form>

<div class="messages">
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
    <h4>Miesięczna rata kredytu wynosi: </h4>
    <p class="res">
<?php print($result); ?>
    </p>
<?php } ?>

</div>

<?php //dół strony z szablonu
include _ROOT_PATH.'/templates/bottom.php';
?>