<?php /* Smarty version Smarty-3.1.13, created on 2020-06-15 20:01:05
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_envioarte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35115ee7fdb1a89366-70225102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '085b6fb05e06f027aa25ef33019e2982ba11f043' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_envioarte.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35115ee7fdb1a89366-70225102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'pedidoid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee7fdb1e54a31_93772089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee7fdb1e54a31_93772089')) {function content_5ee7fdb1e54a31_93772089($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <h1>Envio de Arte</h1>
    <br />
	
		<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/socialmedia/arteenvioNovo" method="post" enctype="multipart/form-data">
			
			<div class="helper-display-none">
				<input type="text" name="pedidoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
">
			</div>
			
			<label>Adicione o modelo da arte com a marca d'água</label> 
			
			<input type="file" name="modelo" id="modelo" class="form-control"/>
			
			<label>Adicione a arte finalizada no link abaixo</label> 
			
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" class="btn btn-primary" />
			
		</form>
	<div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>