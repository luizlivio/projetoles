<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 17:18:27
         compiled from "engine\view\InfoPanel\pages\Usuarios_Cliente\system.usuarios_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167735cd0848f9d3419-71182024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4e57b50886dcbf136006dfc7c229becbfa1aa6' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios_Cliente\\system.usuarios_novo.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167735cd0848f9d3419-71182024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0848fa182c1_74417709',
  'variables' => 
  array (
    'status' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0848fa182c1_74417709')) {function content_5cd0848fa182c1_74417709($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Não informado o tipo de usuário!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Já existe um usuário com este login criado!</div><?php }?>

<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
 
			document.getElementById('tipo').addEventListener('change', function() {
			var value = this.value;
			var a1 = document.getElementById('a1');

			a1.style.display = 'none';

			switch(value) {
			case 'M': a1.style.display = 'block'; break;
			
			}
			})
			
			});
		</script>

<div class="step">					
	<h1>Novo Usuário</h1>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/usuarios_cliente/usuarioNovo">
		<label>Nome do Usuário</label>
		<input type="text" name="usuario" class="form-control">
	
		<label>Senha</label>
		<input type="text" name="senha" class="form-control">
		
		<label>Tipo</label>
		<select name="tipo" id="tipo" class="form-control">
			<option disable selected>Selecionar</option>
			<option value="U">Administrativo</option>
			<option value="M">Médico/Fisioterapeuta</option>
		</select>
		
		<div id="a1" class="helper-display-none">
			<label>Conselho Profissional</label>
			<select name="conselho" id="conselho" class="form-control">
				<option disable selected>Selecionar</option>
				<option value="CRAS">CRAS - Conselho Regional de Assistência Social</option>
				<option value="COREN">COREN - Conselho Regional de Enfermagem</option>
				<option value="CRF">CRF - Conselho Regional de Farmácia</option>
				<option value="CRFA">CRFA - Conselho Regional de Fonoaudiologia</option>
				<option value="CREFITO">CREFITO - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
				<option value="CRM">CRM - Conselho Regional de Medicina</option>
				<option value="CRN">CRN - Conselho Regional de Nutrição</option>
				<option value="CRO">CRO - Conselho Regional de Odontologia</option>
				<option value="CRP">CRP - Conselho Regional de Psicologia</option>
				<option value="OUT">OUT - Outros Conselhos</option>
			</select>
				
			<label>Número do Registro profissional</label>
			<input type="text" name="registro" class="form-control">
			
			<label>Estado</label>
			<select name="estado" class="form-control">
				<option disable selected>Selecionar</option>
				<option value="AC">AC</option>
				<option value="AL">AL</option>
				<option value="AP">AP</option>
				<option value="AM">AM</option>
				<option value="BA">BA</option>
				<option value="CE">CE</option>
				<option value="DF">DF</option>
				<option value="ES">ES</option>
				<option value="GO">GO</option>
				<option value="MA">MA</option>
				<option value="MT">MT</option>
				<option value="MS">MS</option>
				<option value="MG">MG</option>
				<option value="PA">PA</option>
				<option value="PB">PB</option>
				<option value="PE">PE</option>
				<option value="PI">PI</option>
				<option value="RJ">RJ</option>
				<option value="RN">RN</option>
				<option value="RS">RS</option>
				<option value="RO">RO</option>
				<option value="RR">RR</option>
				<option value="SC">SC</option>
				<option value="SP">SP</option>
				<option value="SE">SE</option>
				<option value="TO">TO</option>
			</select>
		
			<label>CBOS</label>
			<input type="text" name="cbos" class="form-control">
			
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control">
		</div>
	
		<br>
		
		<div>
			<button type="submit" class="btn btn-default">Salvar</button>
		</div>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>