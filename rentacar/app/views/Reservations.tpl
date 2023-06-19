{extends file="main.tpl"}

{block name=content}
    <!-- Main -->
    <article id="main">
        <header>
            <h2>{$samochod["marka"]} {$samochod["model"]}</h2>
            <h3>Obecne rezerwacje</h3>
        </header>

        <section class="wrapper style5">
            <div class="inner">
                <ul class="alt">
                    {foreach $wypozyczenia as $wypozyczenie}
                        <h4>Rezerwacja {$wypozyczenie["idWypozyczenie"]}</h4>
                        {if ($isAdmin|default:'false') == 'true'}
                            <h4><a href="{$conf->action_url}reservationsDelete?id={$samochod['idSamochod']}" class="button primary">Usuń</a></h4>
                        {/if}
                        <li><div class="table-wrapper">
                                <table class="alt" style="color:BLACK" >
                                    <tbody>
                                    <tr>
                                        <td>Od</td>
                                        <td>{$wypozyczenie["dataRozpoczecia"]}</td>
                                    </tr>
                                    <tr>
                                        <td>Do</td>
                                        <td>{$wypozyczenie["dataZakonczenia"]}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    {/foreach}
                </ul>
                {include file='messages.tpl'}
            </div>
        </section>
    </article>
{/block}