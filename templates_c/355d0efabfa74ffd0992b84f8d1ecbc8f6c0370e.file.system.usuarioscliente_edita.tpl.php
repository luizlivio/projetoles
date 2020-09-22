<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 01:05:44
         compiled from "engine\view\InfoPanel\pages\Usuarios\system.usuarioscliente_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39265d2fefceb57058-28089313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355d0efabfa74ffd0992b84f8d1ecbc8f6c0370e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios\\system.usuarioscliente_edita.tpl',
      1 => 1563422692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39265d2fefceb57058-28089313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d2fefcec43123_85064091',
  'variables' => 
  array (
    'usuarios' => 0,
    'usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2fefcec43123_85064091')) {function content_5d2fefcec43123_85064091($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	<h1>Edição de Usuário</h1>
	
	<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
		<form method="post" action="/info/usuarios/usuarioClienteEdita">
							
			<div class="helper-display-none">
				<input type="text" name="userid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['UserId'];?>
">
			</div>
							
			<label>Nome do Usuário</label>
			<input type="text" name="usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['Nome'];?>
">
								
			<label>Senha</label>
			<input type="text" name="senha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['Senha'];?>
">
									
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Ativo']=="1"){?>selected<?php }?>>ATIVO</option>
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Ativo']!="1"){?>selected<?php }?>>DESATIVADO</option>
			</select>
								
			<label>Tipo</label>
			<select name="tipo" id="tipo" class="form-control">
				<option disable selected>Selecionar</option>
				<option value="U" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="U"){?>selected<?php }?>>Administrativo</option>
				<option value="M" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="M"){?>selected<?php }?>>Médico/Fisioterapeuta</option>
			</select>
								
			<div id="a1" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']!="M"){?>class="helper-display-none"<?php }?>>
				<label>Conselho Profissional</label>
				<select name="conselho" id="conselho" class="form-control">
					<option disable selected>Selecionar</option>
					<option value="CRAS" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRAS"){?>selected<?php }?>>CRAS - Conselho Regional de Assistência Social</option>
					<option value="COREN" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="COREN"){?>selected<?php }?>>COREN - Conselho Regional de Enfermagem</option>
					<option value="CRF" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRF"){?>selected<?php }?>>CRF - Conselho Regional de Farmácia</option>
					<option value="CRFA" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRFA"){?>selected<?php }?>>CRFA - Conselho Regional de Fonoaudiologia</option>
					<option value="CREFITO" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CREFITO"){?>selected<?php }?>>CREFITO - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
					<option value="CRM" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRM"){?>selected<?php }?>>CRM - Conselho Regional de Medicina</option>
					<option value="CRN" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRN"){?>selected<?php }?>>CRN - Conselho Regional de Nutrição</option>
					<option value="CRO" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRO"){?>selected<?php }?>>CRO - Conselho Regional de Odontologia</option>
					<option value="CRP" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="CRP"){?>selected<?php }?>>CRP - Conselho Regional de Psicologia</option>
					<option value="OUT" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Conselho']=="OUT"){?>selected<?php }?>>OUT - Outros Conselhos</option>
				</select>
								
				<label>Número do Registro profissional</label>
				<input type="text" name="registro" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['Registro'];?>
">
				
				<label>Estado</label>
				<select name="estado" class="form-control">
					<option disable selected>Selecionar</option>
					<option value="AC" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="AC"){?>selected<?php }?>>AC</option>
					<option value="AL" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="AL"){?>selected<?php }?>>AL</option>
					<option value="AP" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="AP"){?>selected<?php }?>>AP</option>
					<option value="AM" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="AM"){?>selected<?php }?>>AM</option>
					<option value="BA" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="BA"){?>selected<?php }?>>BA</option>
					<option value="CE" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="CE"){?>selected<?php }?>>CE</option>
					<option value="DF" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="DF"){?>selected<?php }?>>DF</option>
					<option value="ES" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="ES"){?>selected<?php }?>>ES</option>
					<option value="GO" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="GO"){?>selected<?php }?>>GO</option>
					<option value="MA" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="MA"){?>selected<?php }?>>MA</option>
					<option value="MT" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="MT"){?>selected<?php }?>>MT</option>
					<option value="MS" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="MS"){?>selected<?php }?>>MS</option>
					<option value="MG" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="MG"){?>selected<?php }?>>MG</option>
					<option value="PA" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="PA"){?>selected<?php }?>>PA</option>
					<option value="PB" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="PB"){?>selected<?php }?>>PB</option>
					<option value="PE" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="PE"){?>selected<?php }?>>PE</option>
					<option value="PI" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="PI"){?>selected<?php }?>>PI</option>
					<option value="RJ" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="RJ"){?>selected<?php }?>>RJ</option>
					<option value="RN" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="RN"){?>selected<?php }?>>RN</option>
					<option value="RS" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="RS"){?>selected<?php }?>>RS</option>
					<option value="RO" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="RO"){?>selected<?php }?>>RO</option>
					<option value="RR" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="RR"){?>selected<?php }?>>RR</option>
					<option value="SC" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="SC"){?>selected<?php }?>>SC</option>
					<option value="SP" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="SP"){?>selected<?php }?>>SP</option>
					<option value="SE" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="SE"){?>selected<?php }?>>SE</option>
					<option value="TO" <?php if ($_smarty_tpl->tpl_vars['usu']->value['Estado']=="TO"){?>selected<?php }?>>TO</option>
				</select>
			
				<label>CBOS</label>
				<input type="text" name="cbos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['CBOS'];?>
">
				
				<label>CPF</label>
				<input type="text" name="cpf" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['CPF'];?>
">
			</div>
							
			<br>
			<div>
				<button type="submit" class="btn btn-default">Salvar</button>
			</div>
		</form>
	<?php } ?>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>