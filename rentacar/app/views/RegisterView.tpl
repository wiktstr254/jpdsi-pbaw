{extends file="main.tpl"}

{block name=content}
    <section class="wrapper style5">
        <div class="inner">
            <section>
                <h4>Utwórz nowe konto</h4>
                <form method="post" action="{$conf->action_url}register">
                    <div class="row gtr-uniform">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_login"></label>
                            <input type="text" name="login" id="id_login"  placeholder="Login" />
                        </div>

                        <div class="col-4 col-12-xsmall">
                            <label for="id_haslo"></label>
                            <input type="password" name="haslo" id="id_haslo" placeholder="Hasło" />
                        </div>

                        <div class="col-4 col-12-xsmall">
                            <label for="id_haslo2"></label>
                            <input type="password" name="haslo2" id="id_haslo2" placeholder="Potwierdź hasło" />
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Utwórz" class="primary" /></li>
                                <li><a href="{$conf->action_url}landing" class="button">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            {include file='messages.tpl'}
        </div>
    </section>
{/block}