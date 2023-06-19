<?php
/* Smarty version 4.3.0, created on 2023-06-13 19:44:14
  from 'D:\xamp\htdocs\amelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488aaee33ab21_56500580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd391ce2e046c144c255049e3a97a4a903d72880' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\templates\\main.tpl',
      1 => 1686678220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6488aaee33ab21_56500580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Rent-a-Car" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="http://localhost/amelia/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="http://localhost/amelia/assets/css/noscript.css" /></noscript>
</head>

<body class="<?php echo (($tmp = $_smarty_tpl->tpl_vars['body_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html">Rent-a-Car</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsList">Samochody</a></li>
                            <li><a href="#">Log In</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11063571436488aaee33a1c4_11662318', 'content');
?>


    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://twitter.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="https://instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://mail.google.com/" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Wiktor Strzelecki PAW 3</li><li>Template: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/amelia/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_11063571436488aaee33a1c4_11662318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11063571436488aaee33a1c4_11662318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
