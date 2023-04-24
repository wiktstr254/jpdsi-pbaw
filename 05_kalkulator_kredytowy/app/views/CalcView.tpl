{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}JPDSI 22/23 Wiktor Strzelecki{/block}

{block name=content}

<h3>Kalkulator kredytowy</h3>

	<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>
		<label for="kwota">Kwota kredytu</label>
		<input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="{$form->kwota}">
		<label for="oprocentowanie">Oprocentowanie</label>
		<input id="oprocentowanie" type="text" placeholder="Oprocentowanie" name="oprocentowanie" value="{$form->oprocentowanie}">
		<label for="okres">Okres spłaty w miesiącach</label>
		<input id="okres" type="text" name="okres" placeholder="Okres spłaty" value="{$form->okres}">

	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

	{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
			{foreach $msgs->getErrors() as $err}
				{strip}
					<li>{$err}</li>
				{/strip}
			{/foreach}
		</ol>
	{/if}

	{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol class="inf">
			{foreach $msgs->getInfos() as $inf}
				{strip}
					<li>{$inf}</li>
				{/strip}
			{/foreach}
		</ol>
	{/if}

	{if isset($res->result)}
		<h4>Wynik</h4>
		<p class="res">
			{$res->result}
		</p>
	{/if}

</div>
{/block}