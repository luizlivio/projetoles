<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 22:06:11
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_unidades_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322965e5473035327f6-68228611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3471dbd520e1e2582728daafbaa076dac2dea99a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_unidades_edita.tpl',
      1 => 1582592430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322965e5473035327f6-68228611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Unidades' => 0,
    'PATH' => 0,
    'Unidade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e54730357c824_39253962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54730357c824_39253962')) {function content_5e54730357c824_39253962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Unidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Unidade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Unidade']->key => $_smarty_tpl->tpl_vars['Unidade']->value){
$_smarty_tpl->tpl_vars['Unidade']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Edita Cadastro da Unidade</h1>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaUnidades">
		
		<div class="helper-display-none">
            <input type="text" name="UnidadeId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="Descricao" class="form-control" placeholder="Descrição" value="<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['Descricao'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>