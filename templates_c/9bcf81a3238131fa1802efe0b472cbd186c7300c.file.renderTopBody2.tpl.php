<?php /* Smarty version Smarty-3.1.13, created on 2019-12-30 12:41:42
         compiled from "C:\xampp\htdocs\engine\view\InfoPanel\master\renderTopBody2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30955cce771f31c562-04842777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcf81a3238131fa1802efe0b472cbd186c7300c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\view\\InfoPanel\\master\\renderTopBody2.tpl',
      1 => 1577720498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30955cce771f31c562-04842777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cce771f33ce07_05042430',
  'variables' => 
  array (
    'inf' => 0,
    'permissoesMenu' => 0,
    'Menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cce771f33ce07_05042430')) {function content_5cce771f33ce07_05042430($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['inf']->value->password=="ANGIO123"){?>
<div class="alert alert-danger">
    <strong>Atenção</strong> você deve alterar sua senha, <a href="/info/changePass">clique aqui</a> para alterar
</div>
<?php }?>

<div class="navbar navbar-default navbar-static-top header">
    <img src="/styles/images/logo-h46.png" alt="" class="img-responsive logo pull-left" />
	
    <div class="btn-group pull-right user">
        <span type="button" class="btn dropdown-toggle" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['inf']->value->mult!=''){?><?php echo $_smarty_tpl->tpl_vars['inf']->value->mult;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['inf']->value->name;?>
<span class="caret"></span></span>
        <ul class="dropdown-menu" role="menu">
			<?php  $_smarty_tpl->tpl_vars['Menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permissoesMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Menu']->key => $_smarty_tpl->tpl_vars['Menu']->value){
$_smarty_tpl->tpl_vars['Menu']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['Menu']->value['Link'];?>
"><?php echo $_smarty_tpl->tpl_vars['Menu']->value['Modulo'];?>
</a></li>
				<li class="divider"></li>	
			<?php } ?>
            <li><a href="/info/changePass">Alterar Senha</a></li>
            <li class="divider"></li>
            <li><a href="/info/logout">Encerrar Sessão</a></li>
        </ul>
	</div>
</div>

<div class="row">
        <div class="col-md-2 left-menu visible-md visible-lg">
        <ul id="side-nav" class="side-nav">

			<?php  $_smarty_tpl->tpl_vars['Menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permissoesMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Menu']->key => $_smarty_tpl->tpl_vars['Menu']->value){
$_smarty_tpl->tpl_vars['Menu']->_loop = true;
?>
				<li class="panel"><a href="<?php echo $_smarty_tpl->tpl_vars['Menu']->value['Link'];?>
"><?php echo $_smarty_tpl->tpl_vars['Menu']->value['Modulo'];?>
</a></li>
			<?php } ?>
			
			<li class="panel"><a href="/info/changePass">Alterar Senha</a></li>
            <li class="panel"><a href="/info/logout">Encerrar Sessão</a></li>
        </ul>
		
    </div>

    <div class="col-md-10 main"><?php }} ?>