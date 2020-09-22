<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 17:32:43
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_favorecidos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30105e52f566739424-59489263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e13668fe82722f9788132d7447907b8af0822b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_favorecidos_edita.tpl',
      1 => 1582576353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30105e52f566739424-59489263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e52f566847fc9_74391637',
  'variables' => 
  array (
    'Favorecidos' => 0,
    'PATH' => 0,
    'Favorecido' => 0,
    'PlanosConta' => 0,
    'Conta' => 0,
    'Conta2' => 0,
    'Bancos' => 0,
    'Banco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e52f566847fc9_74391637')) {function content_5e52f566847fc9_74391637($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Favorecido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Favorecido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Favorecido']->key => $_smarty_tpl->tpl_vars['Favorecido']->value){
$_smarty_tpl->tpl_vars['Favorecido']->_loop = true;
?><?php } ?>


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
	<h1>Cadastro de Favorecidos</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaFavorecido">
		<div class="helper-display-none">
            <input type="text" name="FavorecidoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['FavorecidoId'];?>
">
        </div>

        <div class="form-group">
            <label>Nome do Favorecido</label>
            <input type="text" name="Nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Nome'];?>
">
        </div>

        <div class="form-group">
            <label>Contato</label>
            <input type="text" name="Contato" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Contato'];?>
">
        </div>
		
		<div class="form-group">
            <label>CNPJ/CPF</label>
            <input type="text" name="CNPJCPF" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['CPFCNPJ'];?>
">
        </div>
		
		<div class="form-group">
            <label>Inscrição Estadual</label>
            <input type="text" name="IEstadual" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['IEstadual'];?>
">
        </div>
		
		<div class="form-group">
            <label>CEP</label>
            <input type="text" name="CEP" id="cep" onblur="pesquisacep(this.value);" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['CEP'];?>
">
        </div>
		
		<div class="form-group">
            <label>Endereço</label>
            <input type="text" name="Endereco" id="Endereco" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Endereco'];?>
">
        </div>
		
		<div class="form-group">
            <label>Numero</label>
            <input type="text" name="Numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Numero'];?>
">
        </div>
		
		<div class="form-group">
            <label>Complemento</label>
            <input type="text" name="Complemento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Complemento'];?>
">
        </div>
		
		<div class="form-group">
            <label>Bairro</label>
            <input type="text" name="Bairro" id="Bairro" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Bairro'];?>
">
        </div>
		
		<div class="form-group">
            <label>Cidade</label>
            <input type="text" name="Cidade" id="Cidade" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Cidade'];?>
">
        </div>
		
		<div class="form-group">
            <label>UF</label>
            <select name="UF" id="UF" class="form-control">
                <option disable value="" selected>Selecionar</option>
                <option value="AC" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="AC"){?>selected<?php }?>>AC</option>
                <option value="AL" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="AL"){?>selected<?php }?>>AL</option>
                <option value="AP" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="AP"){?>selected<?php }?>>AP</option>
                <option value="AM" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="AM"){?>selected<?php }?>>AM</option>
                <option value="BA" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="BA"){?>selected<?php }?>>BA</option>
                <option value="CE" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="CE"){?>selected<?php }?>>CE</option>
                <option value="DF" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="DF"){?>selected<?php }?>>DF</option>
                <option value="ES" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="ES"){?>selected<?php }?>>ES</option>
                <option value="GO" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="GO"){?>selected<?php }?>>GO</option>
                <option value="MA" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="MA"){?>selected<?php }?>>MA</option>
                <option value="MT" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="MT"){?>selected<?php }?>>MT</option>
                <option value="MS" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="MS"){?>selected<?php }?>>MS</option>
                <option value="MG" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="MG"){?>selected<?php }?>>MG</option>
                <option value="PR" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="PR"){?>selected<?php }?>>PR</option>
                <option value="PB" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="PB"){?>selected<?php }?>>PB</option>
                <option value="PA" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="PA"){?>selected<?php }?>>PA</option>
                <option value="PE" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="PE"){?>selected<?php }?>>PE</option>
                <option value="PI" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="PI"){?>selected<?php }?>>PI</option>
                <option value="RJ" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="RJ"){?>selected<?php }?>>RJ</option>
                <option value="RN" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="RN"){?>selected<?php }?>>RN</option>
                <option value="RS" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="RS"){?>selected<?php }?>>RS</option>
                <option value="RO" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="RO"){?>selected<?php }?>>RO</option>
                <option value="RR" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="RR"){?>selected<?php }?>>RR</option>
                <option value="SC" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="SC"){?>selected<?php }?>>SC</option>
                <option value="SE" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="SE"){?>selected<?php }?>>SE</option>
                <option value="SP" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="SP"){?>selected<?php }?>>SP</option>
                <option value="TO" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['UF']=="TO"){?>selected<?php }?>>TO</option>
			</select>
        </div>
		
		
		<div class="form-group">
            <label>Telefone</label>
            <input type="text" name="Telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Telefone'];?>
">
        </div>
		
		<div class="form-group">
            <label>Email</label>
            <input type="text" name="Email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Email'];?>
">
        </div>
		
        <div class="form-group">
            <label>Plano de Conta</label>
            <select name="PlanodeConta" class="form-control">
                <option value="0" disable selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanosConta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta']->key => $_smarty_tpl->tpl_vars['Conta']->value){
$_smarty_tpl->tpl_vars['Conta']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['Conta']->value['Dependencia']=="0"){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Conta']->value['PlanoContaId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['PlanoContaId']==$_smarty_tpl->tpl_vars['Conta']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Conta']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Conta']->value['Descricao'];?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['Conta2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanosConta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta2']->key => $_smarty_tpl->tpl_vars['Conta2']->value){
$_smarty_tpl->tpl_vars['Conta2']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Conta2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Conta']->value['PlanoContaId']){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['Conta2']->value['PlanoContaId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['PlanoContaId']==$_smarty_tpl->tpl_vars['Conta2']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Conta']->value['CodigoContabil'];?>
.<?php echo $_smarty_tpl->tpl_vars['Conta2']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Conta2']->value['Descricao'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }?>
				<?php } ?>
			</select>
        </div>

		<div class="form-group">
            <label>Historico Padrão</label>
            <input type="text" name="Historico" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Historico'];?>
">
        </div>
		
		<div class="form-group">
            <label>Banco</label>
            <select name="Banco" class="form-control">
                <option value="0" disable selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BancoId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Favorecido']->value['Banco']==$_smarty_tpl->tpl_vars['Banco']->value['BancoId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Banco']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
        </div>
		
		<div class="form-group">
            <label>Agencia</label>
            <input type="text" name="Agencia" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['Agencia'];?>
">
        </div>
		
		<div class="form-group">
            <label>Conta Corrente</label>
            <input type="text" name="ContaCorrente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Favorecido']->value['ContaCorrente'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>