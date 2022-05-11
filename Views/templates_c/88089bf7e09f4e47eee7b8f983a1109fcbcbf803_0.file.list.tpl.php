<?php
/* Smarty version 4.1.0, created on 2022-05-11 12:24:41
  from 'D:\laragon\www\demo-mvc\Views\templates\category\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bab099b6043_51185956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88089bf7e09f4e47eee7b8f983a1109fcbcbf803' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\Views\\templates\\category\\list.tpl',
      1 => 1652271876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bab099b6043_51185956 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<div>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['cat']->value['libelle'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </ul>
</div>
<?php }
}
