<?php
/* Smarty version 4.3.0, created on 2023-06-19 18:31:25
  from 'D:\xamp\htdocs\amelia\app\views\CarsDeleteView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649082dd7c7f23_25334746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939c3d156bc9179bc28d4960a3bb3171b3d3f782' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\CarsDeleteView.tpl',
      1 => 1687192284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_649082dd7c7f23_25334746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_958903765649082dd7bef16_65999626', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_958903765649082dd7bef16_65999626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_958903765649082dd7bef16_65999626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="wrapper style5">
            <div class="inner">
                    <h4>Czy na pewno chcesz usunąć samochód?</h4>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsDeleteConfirm">
                        <fieldset>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Usuń" class="primary" /></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsList" class="button">Anuluj</a></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
                    </form>
                <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
