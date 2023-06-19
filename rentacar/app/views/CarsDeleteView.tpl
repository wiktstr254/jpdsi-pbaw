{extends file="main.tpl"}

{block name=content}
        <section class="wrapper style5">
            <div class="inner">
                    <h4>Czy na pewno chcesz usunąć samochód?</h4>
                    <form method="post" action="{$conf->action_url}carsDeleteConfirm">
                        <fieldset>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Usuń" class="primary" /></li>
                                    <li><a href="{$conf->action_url}carsList" class="button">Anuluj</a></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="id" value="{$form->id}">
                    </form>
                {include file='messages.tpl'}
            </div>
        </section>
{/block}