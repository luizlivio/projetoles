<?php /* Smarty version Smarty-3.1.13, created on 2020-02-02 15:00:51
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_banco_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35715dd209e65bdc80-87731304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498bffeb8ce0c944b86e8f8b9ea19165297b9d73' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_banco_novo.tpl',
      1 => 1580666446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35715dd209e65bdc80-87731304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd209e65fafa4_38602201',
  'variables' => 
  array (
    'PATH' => 0,
    'Bancos' => 0,
    'banco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd209e65fafa4_38602201')) {function content_5dd209e65fafa4_38602201($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<script type="text/javascript">
    $(document).ready(function(){
          $("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
    });
</script>

<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('EnderecoAgencia').value=("");
            document.getElementById('BairroAgencia').value=("");
            document.getElementById('UFAgencia').value=("");
			document.getElementById('CidadeAgencia').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('EnderecoAgencia').value=(conteudo.logradouro);
            document.getElementById('BairroAgencia').value=(conteudo.bairro);
            document.getElementById('UFAgencia').value=(conteudo.uf);
			document.getElementById('CidadeAgencia').value=(conteudo.localidade);
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
                document.getElementById('EnderecoAgencia').value="...";
                document.getElementById('BairroAgencia').value="...";
                document.getElementById('UFAgencia').value="...";
				document.getElementById('CidadeAgencia').value="...";

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
	<h1>Cadastro de Conta</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoBanco">
		
        <div class="form-group">
            <label>Selecione o Banco</label>
            <select name="BancoId" class="form-control">
				<option disabled selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banco']->key => $_smarty_tpl->tpl_vars['banco']->value){
$_smarty_tpl->tpl_vars['banco']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['banco']->value['BancoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['banco']->value['Codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['banco']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
        </div>
		
		<div class="form-group">
            <label>Número da Agência</label>
            <input type="text" name="Agencia" class="form-control" placeholder="Número da Agência">
        </div>
		
		<div class="form-group">
            <label>Descrição da Agência</label>
            <input type="text" name="DescricaoAgencia" class="form-control" placeholder="Descrição da Agência">
        </div>
		
		<div class="form-group">
            <label>CEP</label>
            <input type="text" name="CEPAgencia" id="CEPAgencia" class="form-control" placeholder="CEP" onblur="pesquisacep(this.value);">
        </div>
		
		<div class="form-group">
            <label>Endereço</label>
            <input type="text" name="EnderecoAgencia" id="EnderecoAgencia" class="form-control" placeholder="Endereço">
        </div>
		
		<div class="form-group">
            <label>Numero</label>
            <input type="text" name="NumeroAgencia" id="NumeroAgencia" class="form-control" placeholder="Numero">
        </div>
		
		<div class="form-group">
            <label>Complemento</label>
            <input type="text" name="ComplementoAgencia" id="ComplementoAgencia" class="form-control" placeholder="Complemento">
        </div>
		
		<div class="form-group">
            <label>Bairro</label>
            <input type="text" name="BairroAgencia" id="BairroAgencia" class="form-control" placeholder="Bairro">
        </div>
		
		<div class="form-group">
            <label>Cidade</label>
            <input type="text" name="CidadeAgencia" id="CidadeAgencia" class="form-control" placeholder="Cidade">
        </div>
		
		<div class="form-group">
            <label>UF</label>
            <select name="UFAgencia" id="UFAgencia" class="form-control">
                <option disable values="" selected>Selecionar</option>
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
            <label>Contato na Agência</label>
            <input type="text" name="ContatoAgencia" class="form-control" placeholder="Contato na Agência">
        </div>
		
		<div class="form-group">
            <label>Telefone da Agência</label>
            <input type="text" name="TelefoneAgencia" class="form-control" placeholder="Telefone da Agência">
        </div>
		
		<div class="form-group">
            <label>Email da Agência</label>
            <input type="text" name="EmailAgencia" class="form-control" placeholder="Email da Agência">
        </div>
		
		<div class="form-group">
            <label>Número da Conta</label>
            <input type="text" name="NumeroConta" class="form-control" placeholder="Número da Conta">
        </div>
		
		<div class="form-group">
            <label>Descrição da Conta</label>
            <input type="text" name="DescricaoConta" class="form-control" placeholder="Descrição da Conta">
        </div>
		
		<div class="form-group">
            <label>Saldo Inicial</label>
            <input type="text" name="SaldoInicial" class="form-control dinheiro" placeholder="Saldo Incial">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>