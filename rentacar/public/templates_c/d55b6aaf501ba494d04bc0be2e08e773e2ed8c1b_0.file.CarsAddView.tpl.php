<?php
/* Smarty version 4.3.0, created on 2023-06-16 14:47:03
  from 'D:\xamp\htdocs\amelia\app\views\CarsAddView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648c59c778cb42_93881383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55b6aaf501ba494d04bc0be2e08e773e2ed8c1b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\CarsAddView.tpl',
      1 => 1686919619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_648c59c778cb42_93881383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759744300648c59c7740ff1_71323320', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1759744300648c59c7740ff1_71323320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1759744300648c59c7740ff1_71323320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Main -->
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsAdd">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <label for="id_marka"></label>
                            <input type="text" name="marka" id="id_marka" placeholder="Marka">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_model"></label>
                            <input type="text" name="model" id="id_model" placeholder="Model">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_rocznik"></label>
                            <input type="text" name="rocznik" id="id_rocznik" placeholder="Rocznik">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_kolor"></label>
                            <input type="text" name="kolor" id="id_kolor" placeholder="Kolor">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_mocSilnika"></label>
                            <input type="text" name="mocSilnika" id="id_mocSilnika" placeholder="Moc Silnika">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_cenaZaDzien"></label>
                            <input type="text" name="cenaZaDzien" id="id_cenaZaDzien" placeholder="Cena za dzień">
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Dodaj" class="primary"></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsList" class="button">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
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
