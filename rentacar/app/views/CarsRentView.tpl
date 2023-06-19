{extends file="main.tpl"}

{block name=content}
    <!-- Main -->
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <form method="post" action="{$conf->action_url}carsRentConfirm">
                    <fieldset>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for="id_dataRozpoczecia"></label>
                                <h4>Data rozpoczęcia</h4>
                                <input type="date" name="dataRozpoczecia" id="id_dataRozpoczecia" placeholder="Data rozpoczęcia" value="{$form->dataRozpoczecia}" style = "width:90%;color:BLACK">
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="id_dataZakonczenia"></label>
                                <h4>Data zakończenia</h4>
                                <input type="date" name="dataZakonczenia" id="id_dataZakonczenia" placeholder="Data zakończenia" value="{$form->dataZakonczenia}" style = "width:90%;color:BLACK">
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Potwierdź" class="primary"></li>
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
    </article>

{/block}