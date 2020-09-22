<?php /* Smarty version Smarty-3.1.13, created on 2019-10-06 23:10:39
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.contas_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40355d9a9e9f31ee84-75860752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3ac32089cf43c2a4ba9ade547364c3d60668ae9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.contas_novo.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40355d9a9e9f31ee84-75860752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contas' => 0,
    'PATH' => 0,
    'mes' => 0,
    'ano' => 0,
    'conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d9a9e9f5ea0c2_54119376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d9a9e9f5ea0c2_54119376')) {function content_5d9a9e9f5ea0c2_54119376($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Pagamentos</h1>
    <?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?><?php } ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/faturamento/novoBoleto/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
"  method="post" enctype="multipart/form-data">
		
        <div class="helper-display-none">
            <label>Usuário</label>
            <input type="text" name="userid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['conta']->value['Login'];?>
">
        </div>
		
		<div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="FATURA <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
        </div>
		
		<div class="form-group">
            <label>Valor</label>
            <input type="text" name="valor" class="form-control" value="R$ <?php echo number_format($_smarty_tpl->tpl_vars['conta']->value['envios']*$_smarty_tpl->tpl_vars['conta']->value['Valor'],2,',','.');?>
">
        </div>
		
		<div class="form-group">
            <label>Data de Vencimento</label>
            <input type="text" name="vencimento" id="data" class="form-control">
        </div>
		
		<div class="form-group">
            <label>Boleto</label>
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
		</div>
		
		<input type="submit" class="btn btn-default" value="Enviar">
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>