<?php
/* Smarty version 3.1.29, created on 2016-07-16 20:57:42
  from "D:\work\test\project\app\view\home.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a2f46067176_06982217',
  'file_dependency' => 
  array (
    '9168709e0f31cff61d9849aa4132d00ec91a3797' => 
    array (
      0 => 'D:\\work\\test\\project\\app\\view\\home.phtml',
      1 => 1468673859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./test.phtml' => 1,
  ),
),false)) {
function content_578a2f46067176_06982217 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./test.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>smarty templates test</h2>
<?php echo var_dump($_smarty_tpl->tpl_vars['data']->value);
}
}
