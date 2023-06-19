<?php
/* Smarty version 4.3.0, created on 2023-06-16 14:47:03
  from 'D:\xamp\htdocs\amelia\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648c59c7800b55_33860786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492421b49362fcfb9a565af20ffbecbc57fc33de' => 
    array (
      0 => 'D:\\xamp\\htdocs\\amelia\\app\\views\\templates\\messages.tpl',
      1 => 1686919619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648c59c7800b55_33860786 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['msgs']->value->isEmpty()) {?>
    <div class="col-6 col-12-medium">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
