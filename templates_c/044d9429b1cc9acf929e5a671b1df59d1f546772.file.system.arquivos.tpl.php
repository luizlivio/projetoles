<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 00:15:31
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184935cd3b08b35e965-75790418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044d9429b1cc9acf929e5a671b1df59d1f546772' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184935cd3b08b35e965-75790418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b08b4a4140_42771240',
  'variables' => 
  array (
    'status' => 0,
    'diretorio' => 0,
    'DiretorioPai' => 0,
    'Dir' => 0,
    'ArquivosPastas' => 0,
    'arquivo' => 0,
    'PATH' => 0,
    'Arquivos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b08b4a4140_42771240')) {function content_5cd3b08b4a4140_42771240($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Arquivo Incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Erro no Envio do Arquivo!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==4){?><div class="alert alert-success" role="alert">Pasta Criada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==5){?><div class="alert alert-success" role="alert">Renomeado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==6){?><div class="alert alert-success" role="alert">Nova Versão Incluída com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==7){?><div class="alert alert-success" role="alert">Arquivo Doc criado com sucesso!</div><?php }?>

<div class="step">
	<h1>Arquivos</h1>
	
	<span class="dropdown">
		<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Novo <span class="caret"></span></button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li><a href="/info/arquivos/novoArquivo/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Arquivo</a></li>
			<li><a href="/info/arquivos/novaPasta/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Pasta</a></li>
			<li><a href="/info/arquivos/novoDoc/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Doc</a></li>
		</ul>
	</span>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Arquivo</th>
			<th>Data de Inclusão</th>
            <th>Opções</th>
        </tr>
		</thead>
		<?php if ($_smarty_tpl->tpl_vars['diretorio']->value!=1){?>
		<tr>
            <td><label><img src="/styles/images/Icones%20Arquivos/anterior.png" WIDTH="35" HEIGHT="35"/> <a href="/info/arquivos/<?php  $_smarty_tpl->tpl_vars['Dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DiretorioPai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Dir']->key => $_smarty_tpl->tpl_vars['Dir']->value){
$_smarty_tpl->tpl_vars['Dir']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['Dir']->value['Diretorio'];?>
<?php } ?>">...</a></label></td>
			<td></td>
			<td>
        </tr>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['arquivo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arquivo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArquivosPastas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arquivo']->key => $_smarty_tpl->tpl_vars['arquivo']->value){
$_smarty_tpl->tpl_vars['arquivo']->_loop = true;
?>
        <tr>
            <td><label><img src="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Icone'];?>
" WIDTH="35" HEIGHT="35"/> <?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="Pasta"){?><a href="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Link'];?>
<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Arquivo'];?>
<?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="Pasta"){?></a><?php }?></label></td>
			<td><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arquivo']->value['Data'],"%d/%m/%Y");?>
</label></td>
			<td><label><div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						  Opções
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a data-toggle="modal" data-target="#myModalPasta<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
" href="">Renomear</a></li>
							<li><a href="/info/arquivos/excluiArquivo/<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Excluir</a></li>
						  </ul></label>
        </tr>
		
		<div class="modal fade" id="myModalPasta<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Renomear Pasta</h4>
			  </div>
			  <div class="modal-body">
					<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/Renomear/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
" method="post">
					
					<div class="helper-display-none">
						<input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
">
					</div>
					
					<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Arquivo'];?>
">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Salvar</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['arquivo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arquivo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Arquivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arquivo']->key => $_smarty_tpl->tpl_vars['arquivo']->value){
$_smarty_tpl->tpl_vars['arquivo']->_loop = true;
?>
        <tr>
            <td><label><img src="<?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Icone']==''){?>/styles/images/Icones%20Arquivos/arquivo.png<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Icone'];?>
<?php }?>" WIDTH="35" HEIGHT="35"/> <?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="Pasta"){?><a href="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Link'];?>
<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Arquivo'];?>
<?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="Pasta"){?></a><?php }?></label></td>
			<td><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arquivo']->value['Data'],"%d/%m/%Y");?>
</label></td>
			<td><label><div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						  Opções
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Link'];?>
"><?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="DTSTOS"){?>Abrir<?php }else{ ?>Download<?php }?></a></li>
							<li><a data-toggle="modal" data-target="#myModalArquivo<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
" href="">Renomear</a></li>
							<li><a href="/info/arquivos/excluiArquivo/<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Excluir</a></li>
							<?php if ($_smarty_tpl->tpl_vars['arquivo']->value['Tipo']=="DTSTOS"){?><?php }else{ ?><li><a href="/info/arquivos/novaVersaoArquivo/<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Incluir Nova Versão</a></li>
							<li><a href="/info/arquivos/historicoVersaoArquivo/<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">Histórico de Versão</a></li><?php }?>
						  </ul></label>
        </tr>
		
		<div class="modal fade" id="myModalArquivo<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Renomear Pasta</h4>
			  </div>
			  <div class="modal-body">
					<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/Renomear/<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
" method="post">
					
					<div class="helper-display-none">
						<input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Id'];?>
">
					</div>
					
					<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value['Arquivo'];?>
">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Salvar</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>