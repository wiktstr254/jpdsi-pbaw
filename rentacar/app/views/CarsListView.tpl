{extends file="main.tpl"}

{block name=content}
    <!-- Main -->
    <article id="main">
        <header>
            <h2>Nasze Samochody</h2>
            <p>Sprawdź aktualną ofertę dostępnych pojazdów</p>
        </header>

        <section class="wrapper style5">
            <div class="inner">
                <ul class="alt">
                    {include file='messages.tpl'}
                    {foreach $samochody as $samochod}
                        <h4>{$samochod["marka"]} {$samochod["model"]} </h4>

                        {if ($isAdmin|default:'false') == 'true'}
                        <h1><td><a href="{$conf->action_url}carsDelete?id={$samochod['idSamochod']}" class="button default">Usuń</a></td></h1>
                        {/if}
                        <h1><td><a href="{$conf->action_url}reservationsList?id={$samochod['idSamochod']}" class="button primary">Rezerwacje</a></h1>
                        <li><div class="table-wrapper">
                                <table class="alt" style="color:BLACK" >
                                    <tbody>
                                        <tr>
                                            <td>Rocznik</td>
                                            <td>{$samochod["rocznik"]}</td>

                                        </tr>
                                        <tr>
                                            <td>Kolor</td>
                                            <td>{$samochod["kolor"]}</td>

                                        </tr>
                                        <tr>
                                            <td>Moc Silnika</td>
                                            <td>{$samochod["mocSilnika"]} KM</td>
                                        </tr>
                                        <tr>
                                            <td>Cena za dzień</td>
                                            <td>{$samochod["cenaZaDzien"]} zł</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td><a href="{$conf->action_url}carsRent?id={$samochod['idSamochod']}" class="button primary">Zarezerwuj</a></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                    {/foreach}
                    {if ($isAdmin|default:'false') == 'true'}
                        <li><a href="{$conf->action_url}carsAdd" class="button fit">Dodaj samochód</a></li>
                    {/if}
                </ul>
            </div>
        </section>
    </article>
{/block}