<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 10:30:34
         compiled from "engine\view\InfoPanel\pages\Pacientes\system.pacientes_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109325cd017f4270ef7-61940761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95117b0ce2a653c5c3e4fa60961df9aea2ba179f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pacientes\\system.pacientes_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109325cd017f4270ef7-61940761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd017f42b3fc5_76454962',
  'variables' => 
  array (
    'PATH' => 0,
    'Convenios' => 0,
    'Convenio' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd017f42b3fc5_76454962')) {function content_5cd017f42b3fc5_76454962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('Endereco').value=("");
            document.getElementById('Bairro').value=("");
            document.getElementById('UF').value=("");
			document.getElementById('Cidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('Endereco').value=(conteudo.logradouro);
            document.getElementById('Bairro').value=(conteudo.bairro);
            document.getElementById('UF').value=(conteudo.uf);
			document.getElementById('Cidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('Endereco').value="...";
                document.getElementById('Bairro').value="...";
                document.getElementById('UF').value="...";
				document.getElementById('Cidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>


<div class="step">
    <h1>Novo Paciente</h1>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pacientes/pacienteNovo">
	
		<label>Nome</label>
		<input type="text" name="nomepaciente" class="form-control">
		
		<label>Data de Nascimento</label>
		<input type="text" name="datanasc" id="data" class="form-control">
		
		<label>Sexo</label>
		<select name="sexo" class="form-control">
			<option value="" disable selected>Selecionar</option>
			<option value="Masculino">Masculino</option>
			<option value="Feminino">Feminino</option>
		</select>
		
		<label>Estado Civil</label>
		<select name="estadocivil" class="form-control">
			<option value="" disable selected>Selecionar</option>
			<option value="Solteiro/a">Solteiro(a)</option>
			<option value="Separado/a">Separado(a)</option>
			<option value="Casado/a">Casado(a)</option>
			<option value="Viuvo/a">Viúvo(a)</option>
		</select>
		
		<label>Tipo do Documento</label>
		<select name="tipo" class="form-control">
			<option value="" disable selected>Selecionar</option>
			<option value="RG">RG</option>
			<option value="CPF">CPF</option>
			<option value="RG Terceiros">RG Terceiros</option>
			<option value="CPF Terceiros">CPF Terceiros</option>
		</select>
		
		<label>Numero do Documento</label>
		<input type="text" name="documento" class="form-control">
		
		<label>CEP</label>
		<input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" class="form-control">
		
		<label>Endereço</label>
		<input type="text" name="endereco" id="Endereco" class="form-control">
		
		<label>Bairro</label>
		<input type="text" name="bairro" id="Bairro" class="form-control">
		
		<label>Cidade</label>
		<input type="text" name="cidade" id="Cidade" class="form-control">
		
		<label>Estado</label>
		<select name="UF" id="UF" class="form-control">
			<option value="">Selecionar</option>
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
		
		<label>Email</label>
		<input type="text" name="email" class="form-control">
		
		<label>Telefone</label>
		<input type="text" name="telefone" id="telefone" class="form-control">
		
		<label>Celular</label>
		<input type="text" name="celular" id="celular" class="form-control">
		
		<label>Convênio</label>
		<select name="convenioid" id="convenio" class="form-control">
			<option value="">Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['Convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Convenio']->key => $_smarty_tpl->tpl_vars['Convenio']->value){
$_smarty_tpl->tpl_vars['Convenio']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Convenio']->value['ConvenioId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Convenio']->value['Descricao'];?>
</option>
			<?php } ?>
		</select>
		
		<label>Número da Carteirinha</label>
		<input type="text" name="carteirinha" id="carteirinha" class="form-control">
		
		<?php if ($_smarty_tpl->tpl_vars['inf']->value->name=="MARTINSRAMOS"){?>
			<label>Número de Filhos</label>
			<input type="text" name="filhos" class="form-control">
		<?php }?>
		
		<label>Cadeirante?</label>
		<select name="cadeirante" class="form-control">
			<option value="Nao" selected>Não</option>
			<option value="Sim">Sim</option>
		</select>
		
		<label>Observação</label>
		<input type="text" name="observacao" class="form-control">
		
		<br>
		<div>
			<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>