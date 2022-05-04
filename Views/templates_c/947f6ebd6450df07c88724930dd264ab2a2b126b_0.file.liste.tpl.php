<?php
/* Smarty version 4.1.0, created on 2022-05-04 14:38:47
  from 'D:\laragon\www\demo-mvc\templates\Accueil\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62728ff7644f04_06211950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947f6ebd6450df07c88724930dd264ab2a2b126b' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\templates\\Accueil\\liste.tpl',
      1 => 1651675102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62728ff7644f04_06211950 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Presentation du MVC</h2>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['titre'];?>
<p>
<div>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['mvc'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </ul>
</div>
<?php }
}
