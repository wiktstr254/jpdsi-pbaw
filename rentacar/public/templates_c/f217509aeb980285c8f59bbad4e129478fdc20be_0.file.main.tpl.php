<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:16:27
  from 'D:\xamp\htdocs\rentacar\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490e1cba8e2b0_78084784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f217509aeb980285c8f59bbad4e129478fdc20be' => 
    array (
      0 => 'D:\\xamp\\htdocs\\rentacar\\app\\views\\templates\\main.tpl',
      1 => 1687216586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6490e1cba8e2b0_78084784 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="http://localhost/rentacar/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="http://localhost/rentacar/assets/css/noscript.css" /></noscript>
</head>

<body class="<?php echo (($tmp = $_smarty_tpl->tpl_vars['body_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class=<?php echo (($tmp = $_smarty_tpl->tpl_vars['headerClass']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
>
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
landing">Rent-a-Car</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
landing">Home</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsList">Samochody</a></li>
                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Zaloguj</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Utwórz nowe konto</a></li>
                            <?php } else { ?>
                             <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16882133496490e1cba8d732_91132943', 'content');
?>


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
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/rentacar/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_16882133496490e1cba8d732_91132943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16882133496490e1cba8d732_91132943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
