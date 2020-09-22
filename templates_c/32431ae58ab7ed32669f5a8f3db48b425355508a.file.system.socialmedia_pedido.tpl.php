<?php /* Smarty version Smarty-3.1.13, created on 2020-01-22 08:05:26
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126575e282c76683ff9-34040726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32431ae58ab7ed32669f5a8f3db48b425355508a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_pedido.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126575e282c76683ff9-34040726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Pedidos' => 0,
    'pedidoid' => 0,
    'ped' => 0,
    'nivel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e282c76d7ba36_51697082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e282c76d7ba36_51697082')) {function content_5e282c76d7ba36_51697082($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Adicionado com sucesso!</div><?php }?>

<?php  $_smarty_tpl->tpl_vars['ped'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ped']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ped']->key => $_smarty_tpl->tpl_vars['ped']->value){
$_smarty_tpl->tpl_vars['ped']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Pedido #<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']!="C"){?><a data-toggle="modal" data-target="#Excluir<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" href="" class="btn btn-sm btn-danger">Excluir Pedido</a> <?php if ($_smarty_tpl->tpl_vars['nivel']->value==1&&$_smarty_tpl->tpl_vars['ped']->value['Modelo']==''){?><a href="/info/socialmedia/envioarte/<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" class="btn btn-sm btn-primary">Enviar Arte</a><?php }elseif($_smarty_tpl->tpl_vars['nivel']->value==1&&$_smarty_tpl->tpl_vars['ped']->value['Modelo']!=''){?> <a data-toggle="modal" data-target="#ExcluirArte<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" href="" class="btn btn-sm btn-danger">Excluir Arte</a><?php }?><?php }?>
	<br />
	<br />
	
	<div class="modal fade" id="Excluir<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-12">
							<h3>Confirmar Exclusão</h3>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<label>Deseja realmente excluir o Pedido <b>#<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
</b></label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" href="/info/socialmedia/excluipedido/<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
">Excluir</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="ExcluirArte<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-12">
							<h3>Confirmar Exclusão</h3>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<label>Deseja realmente excluir a arte deste Pedido?</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" href="/info/socialmedia/excluiarte/<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
">Excluir</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<?php if (($_smarty_tpl->tpl_vars['nivel']->value==1&&$_smarty_tpl->tpl_vars['ped']->value['Modelo']=='')){?>
				<div class="alert alert-info" role="alert">Aguardando o envio da arte.</div>
				
				<?php if ($_smarty_tpl->tpl_vars['ped']->value['UltimaArte']!=''){?>
					<div class="alert alert-info" role="alert"><a href="<?php echo $_smarty_tpl->tpl_vars['ped']->value['UltimaArte'];?>
">Acesse aqui</a> a última arte enviada.</div>
				<?php }?>
			<?php }elseif(($_smarty_tpl->tpl_vars['nivel']->value!=1&&$_smarty_tpl->tpl_vars['ped']->value['Modelo']=='')){?>
				<div class="alert alert-info" role="alert">Estamos criando sua arte. Em breve ela aparecerá nesse espaço para aprovação.</div>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']=="B"){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['ped']->value['Modelo'];?>
" alt="Image" style="max-width:100%;">
				<?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['ped']->value['Arte'];?>
" alt="Image" style="max-width:100%;">
				<?php }?>
			<?php }?>
		</div>
		
		<div class="col-md-6">
			<h3>Data do Pedido</h3>
			<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ped']->value['Data'],"%d/%m/%Y");?>
</label>
			
			<h3>Status</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']=="A"){?>Aguardando Criação da Arte<?php }elseif($_smarty_tpl->tpl_vars['ped']->value['Status']=="B"){?>Aguardando aprovação do Cliente<?php }elseif($_smarty_tpl->tpl_vars['ped']->value['Status']=="C"){?>Finalizado<?php }?></label>
			
			<h3>Texto Solicitado na arte</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['ped']->value['Texto'];?>
</label>
			
			<h3>Imagem</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['ped']->value['Imagem']==''){?>Pode deixar que escolheremos uma imagem por você!<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['ped']->value['Imagem'];?>
">Clique aqui</a><?php }?></label>
			
			<h3>Observações</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['ped']->value['Observacoes'];?>
</label>
			
			<br/>
			<br/>
			<?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']=="B"){?>
			<div>
				<a href="/info/socialmedia/alteraarte/<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" class="btn btn-sm btn-primary">Solicitar Alteração</a> <a href="/info/socialmedia/aprovaarte/<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
" class="btn btn-sm btn-primary">Aprovar</a>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']=="C"){?>
			<div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['ped']->value['Arte'];?>
" class="btn btn-sm btn-primary" download>Fazer Download</a>
			</div>
			<?php }?>
		</div>
	</div>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>