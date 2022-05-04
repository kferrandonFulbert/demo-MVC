<?php
/* Smarty version 4.1.0, created on 2022-05-04 14:51:32
  from 'D:\laragon\www\demo-mvc\Views\templates\Accueil\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627292f43bdb23_74264100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0a480eb5c97845291ec08a34b784bbca0994ab' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\Views\\templates\\Accueil\\liste.tpl',
      1 => 1651675837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627292f43bdb23_74264100 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Presentation du MVC</h2>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<div>
    Liste des dossiers de notre MVC:
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
