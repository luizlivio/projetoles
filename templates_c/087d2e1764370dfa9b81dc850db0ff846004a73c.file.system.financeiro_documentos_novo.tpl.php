<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 20:27:00
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_documentos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281665e545bc4cf6d98-07090889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087d2e1764370dfa9b81dc850db0ff846004a73c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_documentos_novo.tpl',
      1 => 1582586700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281665e545bc4cf6d98-07090889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e545bc4d39ac5_96512188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e545bc4d39ac5_96512188')) {function content_5e545bc4d39ac5_96512188($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Tipo de Documento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoDocumento">
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="Descricao" class="form-control" placeholder="Nome do Tipo de Documento">
        </div>

        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>