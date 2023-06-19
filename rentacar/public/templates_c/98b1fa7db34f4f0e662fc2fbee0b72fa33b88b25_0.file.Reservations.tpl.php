<?php
/* Smarty version 4.3.0, created on 2023-06-19 21:23:49
  from 'D:\xamp\htdocs\amelia\app\views\Reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490ab451ad0b8_64370212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b1fa7db34f4f0e662fc2fbee0b72fa33b88b25' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\Reservations.tpl',
      1 => 1687202592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6490ab451ad0b8_64370212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19353460646490ab451916c5_78312812', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19353460646490ab451916c5_78312812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19353460646490ab451916c5_78312812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Main -->
    <article id="main">
        <header>
            <h2><?php echo $_smarty_tpl->tpl_vars['samochod']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['samochod']->value["model"];?>
</h2>
            <h3>Obecne rezerwacje</h3>
        </header>

        <section class="wrapper style5">
            <div class="inner">
                <ul class="alt">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypozyczenia']->value, 'wypozyczenie');
$_smarty_tpl->tpl_vars['wypozyczenie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wypozyczenie']->value) {
$_smarty_tpl->tpl_vars['wypozyczenie']->do_else = false;
?>
                        <h4>Rezerwacja <?php echo $_smarty_tpl->tpl_vars['wypozyczenie']->value["idWypozyczenie"];?>
</h4>
                        <?php if (((($tmp = $_smarty_tpl->tpl_vars['isAdmin']->value ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp)) == 'true') {?>
                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reservationsDelete?id=<?php echo $_smarty_tpl->tpl_vars['samochod']->value['idSamochod'];?>
" class="button primary">Usuń</a></h4>
                        <?php }?>
                        <li><div class="table-wrapper">
                                <table class="alt" style="color:BLACK" >
                                    <tbody>
                                    <tr>
                                        <td>Od</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['wypozyczenie']->value["dataRozpoczecia"];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Do</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['wypozyczenie']->value["dataZakonczenia"];?>
</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
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
