<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 21:14:34
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_documentos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248705e5466ea6ddce6-49210743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8928b5b2fe07d42dca4ce2caf1d360229f4925' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_documentos_edita.tpl',
      1 => 1582589441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248705e5466ea6ddce6-49210743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Documentos' => 0,
    'PATH' => 0,
    'Documento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e5466ea730824_27527359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5466ea730824_27527359')) {function content_5e5466ea730824_27527359($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Documento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Documento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Documentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Documento']->key => $_smarty_tpl->tpl_vars['Documento']->value){
$_smarty_tpl->tpl_vars['Documento']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Edita Cadastro do Tipo de Documento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaDocumento">
		
		<div class="helper-display-none">
            <input type="text" name="DocumentoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="Descricao" class="form-control" placeholder="Descrição" value="<?php echo $_smarty_tpl->tpl_vars['Documento']->value['Descricao'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>	
    </form>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>