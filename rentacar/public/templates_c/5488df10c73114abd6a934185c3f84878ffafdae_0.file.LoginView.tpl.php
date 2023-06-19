<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:23:58
  from 'D:\xamp\htdocs\rentacar\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490e38e487211_76404157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5488df10c73114abd6a934185c3f84878ffafdae' => 
    array (
      0 => 'D:\\xamp\\htdocs\\rentacar\\app\\views\\LoginView.tpl',
      1 => 1687196092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6490e38e487211_76404157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9984843286490e38e414dc5_67922307', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9984843286490e38e414dc5_67922307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9984843286490e38e414dc5_67922307',
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
