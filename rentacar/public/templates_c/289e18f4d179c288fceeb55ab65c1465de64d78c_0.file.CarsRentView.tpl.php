<?php
/* Smarty version 4.3.0, created on 2023-06-18 23:00:10
  from 'D:\xamp\htdocs\amelia\app\views\CarsRentView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648f705ac36263_36279992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289e18f4d179c288fceeb55ab65c1465de64d78c' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\CarsRentView.tpl',
      1 => 1687122010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_648f705ac36263_36279992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872230089648f705ac2c486_15226852', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1872230089648f705ac2c486_15226852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1872230089648f705ac2c486_15226852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Main -->
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsRentConfirm">
                    <fieldset>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for="id_dataRozpoczecia"></label>
                                <h4>Data rozpoczęcia</h4>
                                <input type="date" name="dataRozpoczecia" id="id_dataRozpoczecia" placeholder="Data rozpoczęcia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dataRozpoczecia;?>
" style = "width:90%;color:BLACK">
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="id_dataZakonczenia"></label>
                                <h4>Data zakończenia</h4>
                                <input type="date" name="dataZakonczenia" id="id_dataZakonczenia" placeholder="Data zakończenia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dataZakonczenia;?>
" style = "width:90%;color:BLACK">
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Potwierdź" class="primary"></li>
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
    </article>

<?php
}
}
/* {/block 'content'} */
}
