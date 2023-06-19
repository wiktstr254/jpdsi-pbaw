<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:05:25
  from 'D:\xamp\htdocs\amelia\app\views\LandingPageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490df357c6cd4_02042448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb71e20b755e006088e28c8eb8a314dbcdfcf6b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\LandingPageView.tpl',
      1 => 1687215924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6490df357c6cd4_02042448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2321449916490df357c19a2_48963588', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2321449916490df357c19a2_48963588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2321449916490df357c19a2_48963588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Rent-a-car</h2>
            <p>Wypożyczalnia samochodów<br />
                sportowych i luksusowych<br />
        </div>
        <a href="#about" class="more scrolly">Dowiedz się więcej</a>
    </section>

    <!-- About us -->
    <section id="about" class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>O nas</h2>
                <p>W Rent-A-Car wierzymy, że wolność do podróżowania zaczyna się od doskonałego samochodu. Bez względu na to,
                    czy wyruszasz w podróż, udajesz się na spotkanie służbowe czy potrzebujesz niezawodnego środka transportu na co dzień,
                    mamy dla Ciebie idealne rozwiązanie.</p>
            </header>

        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <section class="spotlight">
            <div class="image"><img src="http://localhost/amelia/images/pic01.jpg" /></div><div class="content">
                <h2>Doświadczenie</h2>
                <p>Działając od wielu lat w branży wynajmu samochodów,
                    jesteśmy dumni z oferowania naszym klientom niezawodnego i bezproblemowego doświadczenia.
                    Naszym celem jest zapewnienie wyjątkowej obsługi, samochodów najwyższej jakości i niezrównanej wartości za każdym razem, gdy wybierasz Rent-A-Car..</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="http://localhost/amelia/images/pic02.jpg"  /></div><div class="content">
                <h2>Możliwości</h2>
                <p>To, co nas wyróżnia, to szeroki wybór samochodów dopasowanych do każdego zapotrzebowania i preferencji.
                    Od eleganckich limuzyn po przestronne SUV-y, posiadamy różnorodny asortyment samochodów sprawdzonych marek.
                    Rozumiemy, że każda podróż jest wyjątkowa, dlatego nasze zróżnicowane floty pojazdów zapewniają idealne dopasowanie do każdej okazji.</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="http://localhost/amelia/images/pic03.jpg" alt="" /></div><div class="content">
                <h2>Wygoda</h2>
                <p>Bezproblemowość to nasza dewiza. Nasz przyjazny system rezerwacji online pozwala Ci łatwo zarezerwować wymarzony samochód za pomocą kilku kliknięć.
                    Oferujemy elastyczne okresy wynajmu, konkurencyjne ceny i wygodne miejsca odbioru i zwrotu samochodów, dostosowane do Twojego harmonogramu.</p>
            </div>
        </section>
    </section>

    <section id="cta" class="wrapper style4">
        <div class="inner">
            <header>
                <h2>Zarezerwuj teraz</h2>
                <p>Pozwól nam być Twoim zaufanym partnerem w Twojej podróży. Zacznij swoją przygodę już dziś!</p>
            </header>
            <ul class="actions stacked">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsList" class="button fit primary">Zarezerwuj</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" class="button fit">Zarejestruj się</a></li>
            </ul>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
