<?php /* Smarty version Smarty-3.1.13, created on 2019-06-28 17:58:23
         compiled from "engine\view\InfoPanel\pages\Analise\system.analise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269945cd16116c99354-42465277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f97c318a0105a2a309099081499e53ed3907e9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Analise\\system.analise.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269945cd16116c99354-42465277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd16116cd5758_63631679',
  'variables' => 
  array (
    'Pacientes' => 0,
    'paciente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd16116cd5758_63631679')) {function content_5cd16116cd5758_63631679($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Análise de Sistemas</h1>
	
	<h3>Pacientes Duplicados</h3>
	
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
            <th>Nome</th>
            <th>Quantidade</th>
			<th>Acessar</th>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['paciente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paciente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->key => $_smarty_tpl->tpl_vars['paciente']->value){
$_smarty_tpl->tpl_vars['paciente']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['paciente']->value['NomePaciente'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['paciente']->value['Conta'];?>
</td>
			<td><a href="/info/analise/arruma/<?php echo $_smarty_tpl->tpl_vars['paciente']->value['NomePaciente'];?>
" class="btn btn-sm btn-warning">Acessar</a></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
../<?php }} ?>