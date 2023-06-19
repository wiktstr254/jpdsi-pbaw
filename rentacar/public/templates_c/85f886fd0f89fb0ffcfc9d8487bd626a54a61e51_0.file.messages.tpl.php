<?php
/* Smarty version 4.3.0, created on 2023-06-20 01:16:57
  from 'D:\xamp\htdocs\rentacar\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6490e1e97f22e2_83225905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f886fd0f89fb0ffcfc9d8487bd626a54a61e51' => 
    array (
      0 => 'D:\\xamp\\htdocs\\rentacar\\app\\views\\templates\\messages.tpl',
      1 => 1686919619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6490e1e97f22e2_83225905 (Smarty_Internal_Template $_smarty_tpl) {
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
