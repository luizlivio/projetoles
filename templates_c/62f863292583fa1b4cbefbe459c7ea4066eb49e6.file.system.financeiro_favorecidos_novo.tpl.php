<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 17:22:36
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_favorecidos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69125e37022a326ad5-26372026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f863292583fa1b4cbefbe459c7ea4066eb49e6' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_favorecidos_novo.tpl',
      1 => 1582575752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69125e37022a326ad5-26372026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e37022a362017_36278418',
  'variables' => 
  array (
    'PATH' => 0,
    'PlanosConta' => 0,
    'Conta' => 0,
    'Conta2' => 0,
    'Bancos' => 0,
    'Banco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e37022a362017_36278418')) {function content_5e37022a362017_36278418($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	<h1>Cadastro de Favorecidos</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoFavorecido">
		<div class="form-group">
            <label>Nome do Favorecido</label>
            <input type="text" name="Nome" class="form-control" placeholder="Nome do Favorecido">
        </div>

        <div class="form-group">
            <label>Contato</label>
            <input type="text" name="Contato" class="form-control" placeholder="Contato">
        </div>
		
		<div class="form-group">
            <label>CNPJ/CPF</label>
            <input type="text" name="CNPJCPF" class="form-control" placeholder="CNPJ/CPF">
        </div>
		
		<div class="form-group">
            <label>Inscrição Estadual</label>
            <input type="text" name="IEstadual" class="form-control" placeholder="Inscrição Estadual">
        </div>
		
		<div class="form-group">
            <label>CEP</label>
            <input type="text" name="CEP" id="cep" onblur="pesquisacep(this.value);" class="form-control" placeholder="CEP">
        </div>
		
		<div class="form-group">
            <label>Endereço</label>
            <input type="text" name="Endereco" id="Endereco" class="form-control" placeholder="Endereço">
        </div>
		
		<div class="form-group">
            <label>Numero</label>
            <input type="text" name="Numero" class="form-control" placeholder="Numero">
        </div>
		
		<div class="form-group">
            <label>Complemento</label>
            <input type="text" name="Complemento" class="form-control" placeholder="Complemento">
        </div>
		
		<div class="form-group">
            <label>Bairro</label>
            <input type="text" name="Bairro" id="Bairro" class="form-control" placeholder="Bairro">
        </div>
		
		<div class="form-group">
            <label>Cidade</label>
            <input type="text" name="Cidade" id="Cidade" class="form-control" placeholder="Cidade">
        </div>
		
		<div class="form-group">
            <label>UF</label>
            <select name="UF" id="UF" class="form-control">
                <option disable value="" selected>Selecionar</option>
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
                <option value="PR">PR</option>
                <option value="PB">PB</option>
                <option value="PA">PA</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
			</select>
        </div>
		
		
		<div class="form-group">
            <label>Telefone</label>
            <input type="text" name="Telefone" class="form-control" placeholder="Telefone">
        </div>
		
		<div class="form-group">
            <label>Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Email">
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
"><?php echo $_smarty_tpl->tpl_vars['Conta']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Conta']->value['Descricao'];?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['Conta2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanosConta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta2']->key => $_smarty_tpl->tpl_vars['Conta2']->value){
$_smarty_tpl->tpl_vars['Conta2']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Conta2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Conta']->value['PlanoContaId']){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['Conta2']->value['PlanoContaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Conta']->value['CodigoContabil'];?>
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
            <input type="text" name="Historico" class="form-control" placeholder="Historico Padrão">
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
"><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Banco']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
        </div>
		
		<div class="form-group">
            <label>Agencia</label>
            <input type="text" name="Agencia" class="form-control" placeholder="Agencia">
        </div>
		
		<div class="form-group">
            <label>Conta Corrente</label>
            <input type="text" name="ContaCorrente" class="form-control" placeholder="Conta Corrente">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>