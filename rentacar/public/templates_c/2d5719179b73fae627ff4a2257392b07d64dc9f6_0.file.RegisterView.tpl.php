<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:24:28
  from 'D:\xamp\htdocs\rentacar\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490e3ac1c74a7_05827194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d5719179b73fae627ff4a2257392b07d64dc9f6' => 
    array (
      0 => 'D:\\xamp\\htdocs\\rentacar\\app\\views\\RegisterView.tpl',
      1 => 1687196092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6490e3ac1c74a7_05827194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7226957596490e3ac1bec45_88633794', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_7226957596490e3ac1bec45_88633794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7226957596490e3ac1bec45_88633794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="wrapper style5">
        <div class="inner">
            <section>
                <h4>Utwórz nowe konto</h4>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">
                    <div class="row gtr-uniform">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_login"></label>
                            <input type="text" name="login" id="id_login"  placeholder="Login" />
                        </div>

                        <div class="col-4 col-12-xsmall">
                            <label for="id_haslo"></label>
                            <input type="password" name="haslo" id="id_haslo" placeholder="Hasło" />
                        </div>

                        <div class="col-4 col-12-xsmall">
                            <label for="id_haslo2"></label>
                            <input type="password" name="haslo2" id="id_haslo2" placeholder="Potwierdź hasło" />
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Utwórz" class="primary" /></li>
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
