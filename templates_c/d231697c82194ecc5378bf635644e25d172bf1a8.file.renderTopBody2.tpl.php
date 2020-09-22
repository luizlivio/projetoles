<?php /* Smarty version Smarty-3.1.13, created on 2020-09-19 16:59:51
         compiled from "C:\xampp\htdocs\datasantos\engine\view\InfoPanel\master\renderTopBody2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270475f66633723e966-48650823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd231697c82194ecc5378bf635644e25d172bf1a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datasantos\\engine\\view\\InfoPanel\\master\\renderTopBody2.tpl',
      1 => 1577720498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270475f66633723e966-48650823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inf' => 0,
    'permissoesMenu' => 0,
    'Menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f666337393a11_16912034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f666337393a11_16912034')) {function content_5f666337393a11_16912034($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['inf']->value->password=="ANGIO123"){?>
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