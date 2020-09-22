<?php /* Smarty version Smarty-3.1.13, created on 2019-07-02 10:36:08
         compiled from "engine\view\InfoPanel\pages\Pacientes\system.pacientes_duplicados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138865cde11e0de6036-12145306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6aec36a82f5598988a424298d55f5cc6b0e56a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pacientes\\system.pacientes_duplicados.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138865cde11e0de6036-12145306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cde11e0e52641_27633928',
  'variables' => 
  array (
    'PATH' => 0,
    'nome' => 0,
    'datanasc' => 0,
    'sexo' => 0,
    'estadocivil' => 0,
    'tipo' => 0,
    'documento' => 0,
    'cep' => 0,
    'endereco' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'UF' => 0,
    'email' => 0,
    'telefone' => 0,
    'celular' => 0,
    'convenioid' => 0,
    'carteirinha' => 0,
    'filhos' => 0,
    'cadeirante' => 0,
    'observacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cde11e0e52641_27633928')) {function content_5cde11e0e52641_27633928($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<div class="alert alert-warning" role="alert">
	<div>
		Atenção, o paciente que você tentou cadastrar parece ser duplicado. Tem certeza que deseja criar um novo paciente com esses dados?
	</div>
	
	</br>
	
	<div>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pacientes/pacienteNovoDuplicado">
			<div class="helper-display-none">
				<input type="text" name="nomepaciente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
">
				<input type="text" name="datanasc" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datanasc']->value;?>
">
				<input type="text" name="sexo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sexo']->value;?>
">
				<input type="text" name="estadocivil" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['estadocivil']->value;?>
">
				<input type="text" name="tipo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
">
				<input type="text" name="documento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['documento']->value;?>
">
				<input type="text" name="cep" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
">
				<input type="text" name="endereco" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
">
				<input type="text" name="bairro" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
">
				<input type="text" name="cidade" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
">
				<input type="text" name="UF" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UF']->value;?>
">
				<input type="text" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
				<input type="text" name="telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
">
				<input type="text" name="celular" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['celular']->value;?>
">
				<input type="text" name="convenioid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['convenioid']->value;?>
">
				<input type="text" name="carteirinha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['carteirinha']->value;?>
">
				<input type="text" name="filhos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['filhos']->value;?>
">
				<input type="text" name="cadeirante" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cadeirante']->value;?>
">
				<input type="text" name="observacao" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['observacao']->value;?>
">
			</div>	

			<button type="submit" class="btn btn-default">Desejo criar um novo cadastro</button>
		</form>
		</br>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pacientes/pacienteDuplicadoAtualiza">
			<div class="helper-display-none">
				<input type="text" name="nomepaciente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
">
				<input type="text" name="datanasc" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datanasc']->value;?>
">
				<input type="text" name="sexo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sexo']->value;?>
">
				<input type="text" name="estadocivil" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['estadocivil']->value;?>
">
				<input type="text" name="tipo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
">
				<input type="text" name="documento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['documento']->value;?>
">
				<input type="text" name="cep" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
">
				<input type="text" name="endereco" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
">
				<input type="text" name="bairro" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
">
				<input type="text" name="cidade" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
">
				<input type="text" name="UF" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UF']->value;?>
">
				<input type="text" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
				<input type="text" name="telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
">
				<input type="text" name="celular" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['celular']->value;?>
">
				<input type="text" name="convenioid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['convenioid']->value;?>
">
				<input type="text" name="carteirinha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['carteirinha']->value;?>
">
				<input type="text" name="filhos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['filhos']->value;?>
">
				<input type="text" name="cadeirante" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cadeirante']->value;?>
">
				<input type="text" name="observacao" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['observacao']->value;?>
">
			</div>
			
			<button type="submit" class="btn btn-default">Atualizar informações no cadastro já existente</button>
		</form>
	</div>
</div>

	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>