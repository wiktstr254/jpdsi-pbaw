{extends file="main.tpl"}

{block name=content}
    <section class="wrapper style5">
        <div class="inner">
            <section>
                <h4>Logowanie</h4>
                <form method="post" action="{$conf->action_url}login">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <label for="id_login"></label>
                            <input type="text" name="login" id="id_login"  placeholder="Login" />
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_haslo"></label>
                            <input type="password" name="haslo" id="id_haslo" placeholder="Hasło" />
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Zaloguj" class="primary" /></li>
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