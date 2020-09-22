<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:50:05
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_favorecidos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72015de8462d043170-07320727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb4b178d8cb885c914d59d7b1856825c7ce2dae7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_favorecidos_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72015de8462d043170-07320727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'PlanosConta' => 0,
    'Conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de8462d09cc02_80508787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de8462d09cc02_80508787')) {function content_5de8462d09cc02_80508787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Favorecidos</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoFavorecido">
		<div class="form-group">
            <label>Tipo</label>
            <select name="tipo" class="form-control">
                <option disable selected>Selecionar</option>
                <option value="F">Fornecedor</option>
				<option value="O">Outros</option>
			</select>
        </div>
		
        <div class="form-group">
            <label>Nome do Favorido</label>
            <input type="text" name="nomefavorecido" class="form-control" placeholder="Nome do Favorecido">
        </div>

        <div class="form-group">
            <label>Contato</label>
            <input type="text" name="contato" class="form-control" placeholder="Contato">
        </div>
		
		<div class="form-group">
            <label>CGC/CPF</label>
            <input type="text" name="cgccpf" class="form-control" placeholder="CGC/CPF">
        </div>
		
		<div class="form-group">
            <label>Inscrição Estadual</label>
            <input type="text" name="inscricaoestadual" class="form-control" placeholder="Inscrição Estadual">
        </div>
		
		<div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
        </div>
		
		<div class="form-group">
            <label>Numero</label>
            <input type="text" name="numero" class="form-control" placeholder="Numero">
        </div>
		
		<div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="Bairro">
        </div>
		
		<div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
        </div>
		
		<div class="form-group">
            <label>UF</label>
            <select name="uf" class="form-control">
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
            <label>CEP</label>
            <input type="text" name="cep" class="form-control" placeholder="CEP">
        </div>
		
		<div class="form-group">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="Telefone">
        </div>
		
		<div class="form-group">
            <label>Fax</label>
            <input type="text" name="fax" class="form-control" placeholder="Fax">
        </div>
		
		<div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
		
		<div class="form-group">
            <label>Messenger</label>
            <input type="text" name="messenger" class="form-control" placeholder="Messenger">
        </div>
		
		<div class="form-group">
            <label>Plano de Conta</label>
            <select name="planodeconta" class="form-control">
                <option value="0" disable selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanosConta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta']->key => $_smarty_tpl->tpl_vars['Conta']->value){
$_smarty_tpl->tpl_vars['Conta']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Conta']->value['CONTAMOVIMENTOID'];?>
"><?php echo $_smarty_tpl->tpl_vars['Conta']->value['NOME'];?>
</option>
				<?php } ?>
			</select>
        </div>
		
		<div class="form-group">
            <label>Historico Padrão</label>
            <input type="text" name="historico" class="form-control" placeholder="Historico Padrão">
        </div>
		
		<div class="form-group">
            <label>Banco</label>
            <input type="text" name="banco" class="form-control" placeholder="Banco">
        </div>
		
		<div class="form-group">
            <label>Agencia</label>
            <input type="text" name="agencia" class="form-control" placeholder="Agencia">
        </div>
		
		<div class="form-group">
            <label>Conta Corrente</label>
            <input type="text" name="contacorrente" class="form-control" placeholder="Conta Corrente">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>