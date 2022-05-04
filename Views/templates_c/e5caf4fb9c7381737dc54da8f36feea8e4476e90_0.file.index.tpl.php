<?php
/* Smarty version 4.1.0, created on 2022-05-04 14:19:59
  from 'D:\laragon\www\demo-mvc\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62728b8f8fffe5_67532429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5caf4fb9c7381737dc54da8f36feea8e4476e90' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\templates\\index.tpl',
      1 => 1651673827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62728b8f8fffe5_67532429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</h1>
        <div>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </body>
</html>

<?php }
}
