<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 22:02:57
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_centrocustos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315135e54714580d8c6-60463540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ee803494863ea2a37e7fcba9a22342503192c3' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_centrocustos_edita.tpl',
      1 => 1582592442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315135e54714580d8c6-60463540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e54714584eaa7_85249504',
  'variables' => 
  array (
    'CCusto' => 0,
    'PATH' => 0,
    'CC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54714584eaa7_85249504')) {function content_5e54714584eaa7_85249504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['CC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CCusto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CC']->key => $_smarty_tpl->tpl_vars['CC']->value){
$_smarty_tpl->tpl_vars['CC']->_loop = true;
?><?php } ?>	

<div class="step">
	<h1>Edita Cadastro do Centro de Custos</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaCentroCustos">
		
		<div class="helper-display-none">
            <input type="text" name="CentroCustoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="Descricao" class="form-control" placeholder="Descrição" value="<?php echo $_smarty_tpl->tpl_vars['CC']->value['Descricao'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>