<?php /* Smarty version Smarty-3.1.13, created on 2019-12-21 13:43:42
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_unidades_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167015dfe4bbe5cd686-35244698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37809d8632da4ac5ab5d062583fd7c8c1bb45e1' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_unidades_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167015dfe4bbe5cd686-35244698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dfe4bbe61bd00_32440893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfe4bbe61bd00_32440893')) {function content_5dfe4bbe61bd00_32440893($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Unidades</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoUnidades">
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" placeholder="Nome da Unidade">
        </div>

        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>