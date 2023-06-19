<?php
/* Smarty version 4.3.0, created on 2023-06-19 19:35:11
  from 'D:\xamp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649091cfdcea92_67701014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98e18cac85a3b87b27d0232132316691f4ecd4ad' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1687196092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_649091cfdcea92_67701014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_343159487649091cfdc6711_65596334', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_343159487649091cfdc6711_65596334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_343159487649091cfdc6711_65596334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="wrapper style5">
        <div class="inner">
            <section>
                <h4>Logowanie</h4>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
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
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
landing" class="button">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
