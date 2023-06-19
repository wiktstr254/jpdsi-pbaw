<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:16:57
  from 'D:\xamp\htdocs\rentacar\app\views\CarsListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490e1e9737793_53436212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0195bf70089111bce00d6b7f4203ea5d061da758' => 
    array (
      0 => 'D:\\xamp\\htdocs\\rentacar\\app\\views\\CarsListView.tpl',
      1 => 1687200657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6490e1e9737793_53436212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9331352156490e1e951ee56_27465099', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9331352156490e1e951ee56_27465099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9331352156490e1e951ee56_27465099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Main -->
    <article id="main">
        <header>
            <h2>Nasze Samochody</h2>
            <p>Sprawdź aktualną ofertę dostępnych pojazdów</p>
        </header>

        <section class="wrapper style5">
            <div class="inner">
                <ul class="alt">
                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['samochody']->value, 'samochod');
$_smarty_tpl->tpl_vars['samochod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['samochod']->value) {
$_smarty_tpl->tpl_vars['samochod']->do_else = false;
?>
                        <h4><?php echo $_smarty_tpl->tpl_vars['samochod']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['samochod']->value["model"];?>
 </h4>

                        <?php if (((($tmp = $_smarty_tpl->tpl_vars['isAdmin']->value ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp)) == 'true') {?>
                        <h1><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsDelete?id=<?php echo $_smarty_tpl->tpl_vars['samochod']->value['idSamochod'];?>
" class="button default">Usuń</a></td></h1>
                        <?php }?>
                        <h1><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reservationsList?id=<?php echo $_smarty_tpl->tpl_vars['samochod']->value['idSamochod'];?>
" class="button primary">Rezerwacje</a></h1>
                        <li><div class="table-wrapper">
                                <table class="alt" style="color:BLACK" >
                                    <tbody>
                                        <tr>
                                            <td>Rocznik</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['samochod']->value["rocznik"];?>
</td>

                                        </tr>
                                        <tr>
                                            <td>Kolor</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['samochod']->value["kolor"];?>
</td>

                                        </tr>
                                        <tr>
                                            <td>Moc Silnika</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['samochod']->value["mocSilnika"];?>
 KM</td>
                                        </tr>
                                        <tr>
                                            <td>Cena za dzień</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['samochod']->value["cenaZaDzien"];?>
 zł</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsRent?id=<?php echo $_smarty_tpl->tpl_vars['samochod']->value['idSamochod'];?>
" class="button primary">Zarezerwuj</a></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (((($tmp = $_smarty_tpl->tpl_vars['isAdmin']->value ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp)) == 'true') {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
carsAdd" class="button fit">Dodaj samochód</a></li>
                    <?php }?>
                </ul>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
