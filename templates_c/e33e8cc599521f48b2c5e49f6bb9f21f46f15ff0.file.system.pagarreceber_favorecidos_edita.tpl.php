<?php /* Smarty version Smarty-3.1.13, created on 2020-02-23 18:57:40
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_favorecidos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245895e52f55452f745-38828068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33e8cc599521f48b2c5e49f6bb9f21f46f15ff0' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_favorecidos_edita.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245895e52f55452f745-38828068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Favorecidos' => 0,
    'PATH' => 0,
    'Fav' => 0,
    'PlanosConta' => 0,
    'Conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e52f55462a888_63416687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e52f55462a888_63416687')) {function content_5e52f55462a888_63416687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Favorecidos</h1>
    <?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaFavorecido">
		
		 <div class="helper-display-none">
            <label>FavoridoId</label>
            <input type="text" name="favorecidoid" class="form-control" placeholder="Nome do Favorecido" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FAVORECIDOID'];?>
">
        </div>
		
		<div class="form-group">
            <label>Tipo</label>
            <select name="tipo" class="form-control">
                <option disable selected>Selecionar</option>
                <option value="F" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['TIPOFAVORECIDO']=="F"){?>selected<?php }?>>Fornecedor</option>
				<option value="C" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['TIPOFAVORECIDO']=="C"){?>selected<?php }?>>Convênio</option>
				<option value="M" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['TIPOFAVORECIDO']=="M"){?>selected<?php }?>>Médico Assinante</option>
				<option value="O" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['TIPOFAVORECIDO']=="O"){?>selected<?php }?>>Outros</option>
			</select>
        </div>
		
        <div class="form-group">
            <label>Nome do Favorido</label>
            <input type="text" name="nomefavorecido" class="form-control" placeholder="Nome do Favorecido" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['NOME'];?>
">
        </div>

        <div class="form-group">
            <label>Contato</label>
            <input type="text" name="contato" class="form-control" placeholder="Contato" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['CONTATO'];?>
">
        </div>
		
		<div class="form-group">
            <label>CGC/CPF</label>
            <input type="text" name="cgccpf" class="form-control" placeholder="CGC/CPF" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['CNPJCPF'];?>
">
        </div>
		
		<div class="form-group">
            <label>Inscrição Estadual</label>
            <input type="text" name="inscricaoestadual" class="form-control" placeholder="Inscrição Estadual" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['INSCESTADUALRG'];?>
">
        </div>
		
		<div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['ENDERECO'];?>
">
        </div>
		
		<div class="form-group">
            <label>Numero</label>
            <input type="text" name="numero" class="form-control" placeholder="Numero" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['NROENDERECO'];?>
">
        </div>
		
		<div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['BAIRRO'];?>
">
        </div>
		
		<div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['CIDADE'];?>
">
        </div>
		
		<div class="form-group">
            <label>UF</label>
            <select name="uf" class="form-control">
                <option disable selected>Selecionar</option>
                <option value="AC" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="AC"){?>selected<?php }?>>AC</option>
                <option value="AL" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="AL"){?>selected<?php }?>>AL</option>
                <option value="AP" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="AP"){?>selected<?php }?>>AP</option>
                <option value="AM" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="AM"){?>selected<?php }?>>AM</option>
                <option value="BA" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="BA"){?>selected<?php }?>>BA</option>
                <option value="CE" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="CE"){?>selected<?php }?>>CE</option>
                <option value="DF" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="DF"){?>selected<?php }?>>DF</option>
                <option value="ES" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="ES"){?>selected<?php }?>>ES</option>
                <option value="GO" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="GO"){?>selected<?php }?>>GO</option>
                <option value="MA" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="MA"){?>selected<?php }?>>MA</option>
                <option value="MT" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="MT"){?>selected<?php }?>>MT</option>
                <option value="MS" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="MS"){?>selected<?php }?>>MS</option>
                <option value="MG" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="MG"){?>selected<?php }?>>MG</option>
                <option value="PR" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="PR"){?>selected<?php }?>>PR</option>
                <option value="PB" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="PB"){?>selected<?php }?>>PB</option>
                <option value="PA" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="PA"){?>selected<?php }?>>PA</option>
                <option value="PE" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="PE"){?>selected<?php }?>>PE</option>
                <option value="PI" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="PI"){?>selected<?php }?>>PI</option>
                <option value="RJ" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="RJ"){?>selected<?php }?>>RJ</option>
                <option value="RN" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="RN"){?>selected<?php }?>>RN</option>
                <option value="RS" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="RS"){?>selected<?php }?>>RS</option>
                <option value="RO" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="RO"){?>selected<?php }?>>RO</option>
                <option value="RR" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="RR"){?>selected<?php }?>>RR</option>
                <option value="SC" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="SC"){?>selected<?php }?>>SC</option>
                <option value="SE" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="SE"){?>selected<?php }?>>SE</option>
                <option value="SP" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="SP"){?>selected<?php }?>>SP</option>
                <option value="TO" <?php if ($_smarty_tpl->tpl_vars['Fav']->value['ESTADO']=="TO"){?>selected<?php }?>>TO</option>
			</select>
        </div>
		
		<div class="form-group">
            <label>CEP</label>
            <input type="text" name="cep" class="form-control" placeholder="CEP" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['CEP'];?>
">
        </div>
		
		<div class="form-group">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="Telefone" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['TELEFONE'];?>
">
        </div>
		
		<div class="form-group">
            <label>Fax</label>
            <input type="text" name="fax" class="form-control" placeholder="Fax" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FAX'];?>
">
        </div>
		
		<div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['EMAIL'];?>
">
        </div>
		
		<div class="form-group">
            <label>Messenger</label>
            <input type="text" name="messenger" class="form-control" placeholder="Messenger" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['MESSENGER'];?>
">
        </div>
		
		<div class="form-group">
            <label>Plano de Conta</label>
            <select name="planodeconta" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['CONTAMOVIMENTOID'];?>
"><?php echo $_smarty_tpl->tpl_vars['Fav']->value['CONTA'];?>
</option>
				<option>----------------</option>
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
            <input type="text" name="historico" class="form-control" placeholder="Historico Padrão" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['HISTORICOPADRAOCONTA'];?>
">
        </div>
		
		<div class="form-group">
            <label>Banco</label>
            <input type="text" name="banco" class="form-control" placeholder="Banco" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['NRONOMEBANCO'];?>
">
        </div>
		
		<div class="form-group">
            <label>Agencia</label>
            <input type="text" name="agencia" class="form-control" placeholder="Agencia" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['NROAGENCIA'];?>
">
        </div>
		
		<div class="form-group">
            <label>Conta Corrente</label>
            <input type="text" name="contacorrente" class="form-control" placeholder="Conta Corrente" value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['NROCONTABANCO'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
	<?php } ?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>