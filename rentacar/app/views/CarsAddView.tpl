{extends file="main.tpl"}

{block name=content}
    <!-- Main -->
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <form method="post" action="{$conf->action_url}carsAdd">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <label for="id_marka"></label>
                            <input type="text" name="marka" id="id_marka" placeholder="Marka">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_model"></label>
                            <input type="text" name="model" id="id_model" placeholder="Model">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_rocznik"></label>
                            <input type="text" name="rocznik" id="id_rocznik" placeholder="Rocznik">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_kolor"></label>
                            <input type="text" name="kolor" id="id_kolor" placeholder="Kolor">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_mocSilnika"></label>
                            <input type="text" name="mocSilnika" id="id_mocSilnika" placeholder="Moc Silnika">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_cenaZaDzien"></label>
                            <input type="text" name="cenaZaDzien" id="id_cenaZaDzien" placeholder="Cena za dzień">
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Dodaj" class="primary"></li>
                                <li><a href="{$conf->action_url}carsList" class="button">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                {include file='messages.tpl'}
            </div>
        </section>
    </article>

{/block}