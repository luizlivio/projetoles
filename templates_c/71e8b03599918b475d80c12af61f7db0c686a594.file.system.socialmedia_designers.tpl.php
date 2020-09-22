<?php /* Smarty version Smarty-3.1.13, created on 2020-06-15 15:52:07
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_designers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326595ee7c357346ce6-60793120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71e8b03599918b475d80c12af61f7db0c686a594' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_designers.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326595ee7c357346ce6-60793120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'Funcionarios' => 0,
    'func' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee7c3576c6be3_91454721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee7c3576c6be3_91454721')) {function content_5ee7c3576c6be3_91454721($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Novo Designer</h1>
    <br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/socialmedia/designerNovo">
	
	<div>
		<label>Qual usuário deseja dar privilégios de Designer?</label>
	</div>
	
	<div class="form-group">
		<select name="funcionarioid" class="form-control">
			<option disable selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['func'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['func']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Funcionarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['func']->key => $_smarty_tpl->tpl_vars['func']->value){
$_smarty_tpl->tpl_vars['func']->_loop = true;
?>
				<option value="<?php echo utf8_encode($_smarty_tpl->tpl_vars['func']->value['Userid']);?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['func']->value['Nome']);?>
</option>
			<?php } ?>
		</select>
    </div>
	
	<div>
	<button type="submit" class="btn btn-default">Vincular</button>
	<input type="button" value="Cancelar" onclick="window.history.go(-1)" class="btn btn-default">
	</div>
	
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>