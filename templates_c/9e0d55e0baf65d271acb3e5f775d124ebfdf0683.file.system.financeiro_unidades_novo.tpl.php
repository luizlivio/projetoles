<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 21:55:16
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_unidades_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92915e547074c53781-72627171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e0d55e0baf65d271acb3e5f775d124ebfdf0683' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_unidades_novo.tpl',
      1 => 1582591139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92915e547074c53781-72627171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e547074c96193_50045413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e547074c96193_50045413')) {function content_5e547074c96193_50045413($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Unidades</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoUnidades">
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="Descricao" class="form-control" placeholder="Nome da Unidade">
        </div>

        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>