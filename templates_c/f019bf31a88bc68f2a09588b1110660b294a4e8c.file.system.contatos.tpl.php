<?php /* Smarty version Smarty-3.1.13, created on 2020-01-22 08:09:24
         compiled from "engine\view\InfoPanel\pages\Vendas\system.contatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136795e282d640be757-04273727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f019bf31a88bc68f2a09588b1110660b294a4e8c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Vendas\\system.contatos.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136795e282d640be757-04273727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'PATH' => 0,
    'contatos' => 0,
    'contato' => 0,
    'FollowUp' => 0,
    'FU' => 0,
    'contas' => 0,
    'foo' => 0,
    'conta' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e282d64210982_90811759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e282d64210982_90811759')) {function content_5e282d64210982_90811759($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Contato Incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Contato Excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Contato Editado com sucesso!</div><?php }?>

<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
 
			document.getElementById('pesquisaid').addEventListener('change', function() {
			var value = this.value;
			var a = document.getElementById('a');
			var b = document.getElementById('b');
			var c = document.getElementById('c');
			var d = document.getElementById('d');
			var e = document.getElementById('e');
			var f = document.getElementById('f');
			var g = document.getElementById('g');


			a.style.display = 'none';
			b.style.display = 'none';
			c.style.display = 'none';
			d.style.display = 'none';
			e.style.display = 'none';
			f.style.display = 'none';
			g.style.display = 'none';


			switch(value) {
			case 'empresa': a.style.display = 'block'; break;
			case 'telefone': b.style.display = 'block'; break;
			case 'ultima': c.style.display = 'block'; break;
			case 'proxima': d.style.display = 'block'; break;
			case 'email': e.style.display = 'block'; break;
			case 'interessados': f.style.display = 'block'; break;
			case 'novos': g.style.display = 'block'; break;
			}
			})


			});
		</script>
		
<div class="step">
	<h1>Contatos</h1>
	<a href="/info/vendas/novocontato" class="btn btn-sm btn-primary">Novo Contato</a>
	<br>
	<br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/vendas/PesquisaContato">
	
	<div class="row">
	  <div class="col-lg-3">
		<select name="pesquisaid" id="pesquisaid" class="form-control">
			<option value="empresa" data-target="#a" selected>Nome da Empresa</option>
			<option value="telefone" data-target="#b">Telefone</option>
			<option value="ultima" data-target="#c">Última Ligação</option>
			<option value="proxima" data-target="#d">Próxima Ligação</option>
			<option value="email" data-target="#e">Email</option>
			<option value="interessados" data-target="#f">Demonstrou Interesse</option>
			<option value="novos" data-target="#g">Contatos Novos</option>
		</select>
	  </div>
	  <div class="col-lg-9">
	  
		<div class="input-group">
		  <div id="a"><input type="text" name="pesquisa" class="form-control" placeholder="Procurar por Nome da Empresa"></div>
		  <div id="b" class="helper-display-none"><input type="text" name="pesquisatelefone" class="form-control" placeholder="Procurar por Número do Telefone"></div>
		  <div id="c" class="helper-display-none"><input type="text" name="pesquisaultima" class="form-control" id="data" placeholder="Procurar por Data da Última Ligação"></div>
		  <div id="d" class="helper-display-none"><input type="text" name="pesquisaproxima" class="form-control" id="data2" placeholder="Procurar por Data de próxima Ligação"></div>
		  <div id="e" class="helper-display-none"><input type="text" name="pesquisaemail" class="form-control" placeholder="Procurar por Email"></div>
		  <div id="f" class="helper-display-none"><input type="text" name="pesquisainteresse" class="form-control" placeholder="Procurar por Nome"></div>
		  <div id="g" class="helper-display-none"><input type="text" name="pesquisanovos" class="form-control" placeholder="Procurar por Nome"></div>
		  <span class="input-group-btn">
			<button class="btn btn-default" type="submit">Pesquisar</button>
		  </span>
		</div>
		</div>
	</div>
	</form>
	
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
			<th>Id</th>
            <th>Nome da Empresa</th>
            <th>Tipo</th>
			<th>Telefone</th>
			<th>Contato</th>
			<th>Última Ligação</th>
			<th>Próxima Ligação</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['contato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contatos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contato']->key => $_smarty_tpl->tpl_vars['contato']->value){
$_smarty_tpl->tpl_vars['contato']->_loop = true;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['contato']->value['DemonstrouInteresse']=="1"){?>BGCOLOR=#81c784<?php }?><?php if ($_smarty_tpl->tpl_vars['contato']->value['Retirado']=="1"){?>BGCOLOR=#e57373<?php }?>>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Id']);?>
</td>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['EmpresaReduz']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['tipo']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Telefone']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Contato']);?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contato']->value['UltimaLigacao'],"%d/%m/%Y");?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contato']->value['ProximaLigacao'],"%d/%m/%Y");?>
</td>
			<td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal<?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Id']);?>
">Acessar</button>

					<div class="modal fade" id="myModal<?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Id']);?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Dados da Empresa</h4>
						  </div>
						  <div class="modal-body">
													<div class="row">
														<div class="col-md-2">
															<h4>Código</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Id']);?>
</label>
														</div>
														<div class="col-md-10">
															<h4>Nome da Empresa</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Empresa']);?>
</label>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-8">
															<h4>Endereço</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Endereco']);?>
</label>
														</div>
														<div class="col-md-4">
															<h4>Cidade</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Cidade']);?>
</label>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">
															<h4>Telefone</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Telefone']);?>
</label>
														</div>
														<div class="col-md-4">
															<h4>Contato</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Contato']);?>
</label>
														</div>
														<div class="col-md-4">
															<h4>Email</h4>
															<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['contato']->value['Email']);?>
</label>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-6">
															<h4>Ultima Ligação</h4>
															<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contato']->value['UltimaLigacao'],"%d/%m/%Y");?>
</label>
														</div>
														<div class="col-md-6">
															<h4>Próxima Ligação</h4>
															<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contato']->value['ProximaLigacao'],"%d/%m/%Y");?>
</label>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<h4>Follow UP</h4>
															<?php  $_smarty_tpl->tpl_vars['FU'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FU']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FollowUp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FU']->key => $_smarty_tpl->tpl_vars['FU']->value){
$_smarty_tpl->tpl_vars['FU']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FU']->value['ContatoId']==$_smarty_tpl->tpl_vars['contato']->value['Id']){?>
																<p><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['FU']->value['Data'],"%d/%m/%Y");?>
 - <?php if ($_smarty_tpl->tpl_vars['FU']->value['Atendeu']==0){?>Ligação não atendida <?php }?>
																<?php if ($_smarty_tpl->tpl_vars['FU']->value['Atendeu']==1&&$_smarty_tpl->tpl_vars['FU']->value['FalouComMedico']==0){?>Falou Somente com a Recepção <?php }?>
																<?php if ($_smarty_tpl->tpl_vars['FU']->value['Atendeu']==1&&$_smarty_tpl->tpl_vars['FU']->value['FalouComMedico']==1){?>Falou direto com o médico <?php }?>
																<?php if ($_smarty_tpl->tpl_vars['FU']->value['Atendeu']==1&&$_smarty_tpl->tpl_vars['FU']->value['EnviadaApresentacao']==1){?>Apresentação encaminhada por Email <?php }?>
																<?php echo $_smarty_tpl->tpl_vars['FU']->value['FollowUp'];?>

																</label></p>
															<?php }?><?php } ?>
														</div>
													</div>
						  </div>
						  <div class="modal-footer">
							<a href="/info/vendas/adicionaFollowUp/<?php echo $_smarty_tpl->tpl_vars['contato']->value['Id'];?>
" class="btn btn-sm btn-success">Adicionar FollowUp</a>
							<a href="/info/vendas/editaContato/<?php echo $_smarty_tpl->tpl_vars['contato']->value['Id'];?>
" class="btn btn-sm btn-warning">Editar Dados</a>
							<a href="/info/vendas/excluiContato/<?php echo $_smarty_tpl->tpl_vars['contato']->value['Id'];?>
" class="btn btn-sm btn-danger">Excluir Contato</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button></td>
        </tr>
		<?php } ?>
    </table>
	
	<?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?><?php } ?>
	
	<p align="center"> 
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php $_tmp1=ob_get_clean();?><?php while ($_smarty_tpl->tpl_vars['foo']->value<ceil($_tmp1)){?>
			<a href="/info/vendas/contatos/<?php echo $_smarty_tpl->tpl_vars['foo']->value+++1;?>
" class="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['pagina']->value){?>btn btn-sm btn-danger<?php }else{ ?>btn btn-sm btn-default<?php }?>"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
		<?php }?>
	</p>
	
	<?php echo count($_smarty_tpl->tpl_vars['contatos']->value);?>
 Resultados Apresentados

</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>