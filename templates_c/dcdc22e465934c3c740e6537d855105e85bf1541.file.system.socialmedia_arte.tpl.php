<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 23:41:58
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_arte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189125e251376ea5470-52101571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdc22e465934c3c740e6537d855105e85bf1541' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_arte.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189125e251376ea5470-52101571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e251376eee4d4_47402726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e251376eee4d4_47402726')) {function content_5e251376eee4d4_47402726($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <h1>Nova Arte</h1>
    <br />
	
		<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/socialmedia/arteNovo" method="post" enctype="multipart/form-data">
			
			<div class="helper-display-none">
				<input type="text" name="userid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">
			</div>
			
			<div >
				<label>Coloque um breve texto que deve conter na arte</label>
				<input type="text" name="texto" class="form-control">
			</div>
			
			<div >
				<label>Gostaria de fazer alguma observação de como a arte deve ser feita?</label>
				<input type="text" name="observacoes" class="form-control">
			</div>
			
			<label for="arquivo">Tem alguma foto que deseja adicionar na arte?</label> 
			
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	<div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>