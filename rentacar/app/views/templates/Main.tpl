<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <title>{$page_title|default:"Rent-a-Car"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="http://localhost/rentacar/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="http://localhost/rentacar/assets/css/noscript.css" /></noscript>
</head>

<body class="{$body_class|default:""}">

<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class={$headerClass|default:""}>
        <h1><a href="{$conf->action_url}landing">Rent-a-Car</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="{$conf->action_url}landing">Home</a></li>
                            <li><a href="{$conf->action_url}carsList">Samochody</a></li>
                            {if count($conf->roles) == 0}
                                <li><a href="{$conf->action_url}login">Zaloguj</a></li>
                                <li><a href="{$conf->action_url}register">Utwórz nowe konto</a></li>
                            {else}
                             <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
                            {/if}
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    {block name=content} {/block}

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://twitter.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="https://instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://mail.google.com/" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            <li><a href="https://github.com/wiktstr254" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Wiktor Strzelecki PAW 3</li><li>Szablon: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="http://localhost/rentacar/assets/js/jquery.min.js"></script>
<script src="http://localhost/rentacar/assets/js/jquery.scrollex.min.js"></script>
<script src="http://localhost/rentacar/assets/js/jquery.scrolly.min.js"></script>
<script src="http://localhost/rentacar/assets/js/browser.min.js"></script>
<script src="http://localhost/rentacar/assets/js/breakpoints.min.js"></script>
<script src="http://localhost/rentacar/assets/js/util.js"></script>
<script src="http://localhost/rentacar/assets/js/main.js"></script>

</body>
</html>
