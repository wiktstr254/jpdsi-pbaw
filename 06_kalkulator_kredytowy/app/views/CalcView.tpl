{extends file="main.tpl"}

{block name=footer}JPDSI 22/23 Wiktor Strzelecki{/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="kwota">Kwota kredytu</label>
			<input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="{$form->kwota}">
		</div>
        <div class="pure-control-group">
			<label for="oprocentowanie">Oprocentowanie</label>
			<input id="oprocentowanie" type="text" placeholder="Oprocentowanie" name="oprocentowanie" value="{$form->oprocentowanie}">
		</div>
        <div class="pure-control-group">
			<label for="okres">Okres spłaty w miesiącach</label>
			<input id="okres" type="text" name="okres" placeholder="Okres spłaty" value="{$form->okres}">
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}