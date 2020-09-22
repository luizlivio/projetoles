<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 23:40:59
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_painel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274425e25133b7351e2-34089384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2a0367d5ad00fb364c03d3a184a28c27daecf7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_painel.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274425e25133b7351e2-34089384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'userid' => 0,
    'Pedidos' => 0,
    'n' => 0,
    'ped' => 0,
    'Sugestoes' => 0,
    'sug' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e25133b8b6559_67032518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e25133b8b6559_67032518')) {function content_5e25133b8b6559_67032518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Pedido enviado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-danger" role="alert">Erro no envio do pedido, tente novamente!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Sugestão adicionada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==4){?><div class="alert alert-danger" role="alert">Erro no envio da sugestão, tente novamente!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==5){?><div class="alert alert-success" role="alert">Nova arte enviada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==6){?><div class="alert alert-danger" role="alert">Erro no envio da nova arte, tente novamente!</div><?php }?>

<div class="step">
	<h1>Social Media</h1>
	
	<div>
		<a href="/info/socialmedia/novoarte/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="btn btn-sm btn-primary">Novo Pedido de Arte</a>
	</div>
	
	<h3>Seus Pedidos</h3>
	<div class="row">
		<div class="col-md-12">
		
		
				<div id="Carousel" class="carousel">
				 
				<ol class="carousel-indicators">
					<?php if (count($_smarty_tpl->tpl_vars['Pedidos']->value)!=0){?><li data-target="#Carousel" data-slide-to="0" class="active"></li>
					<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
						<?php while ((ceil(count($_smarty_tpl->tpl_vars['Pedidos']->value)/4)>$_smarty_tpl->tpl_vars['n']->value)){?>
							<li data-target="#Carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"></li>
							<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
						<?php }?>
					<?php }?>
				</ol>
				
				
				<?php if (count($_smarty_tpl->tpl_vars['Pedidos']->value)!=0){?>
				
				<div class="carousel-inner">
				
				<div class="item active">
					<div class="row">
						<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['ped'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ped']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ped']->key => $_smarty_tpl->tpl_vars['ped']->value){
$_smarty_tpl->tpl_vars['ped']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['n']->value==4){?>
									</div><!--.row-->
								</div><!--.item-->
				 
								<div class="item">
									<div class="row">
								<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
							<?php }?>
							<div class="col-md-3"><a href="/info/socialmedia/pedido/<?php echo $_smarty_tpl->tpl_vars['ped']->value['Id'];?>
" class="thumbnail"><img src="<?php if ($_smarty_tpl->tpl_vars['ped']->value['Modelo']==''){?>/styles/images/250x250.png<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['ped']->value['Status']=="B"){?><?php echo $_smarty_tpl->tpl_vars['ped']->value['Modelo'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['ped']->value['Arte'];?>
<?php }?><?php }?>" alt="Image" style="max-width:100%;"></a></div>
							
							<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
						<?php } ?>
					</div><!--.row-->
				</div><!--.item-->
				
				
				</div><!--.carousel-inner-->
				  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
				  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
				</div><!--.Carousel-->
				
				<?php }else{ ?>
					<div class="alert alert-info" role="alert">Ainda não há pedidos adicionados. Comece clicando em "Novo Pedido de Arte"</div>
				<?php }?>
			</div>
		</div>
	
	<hr />
	<h3>Nossas Sugestões</h3>
	
	<div>
		<a href="/info/socialmedia/novosugestao/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="btn btn-sm btn-primary">Adicionar Sugestão</a>
		<br />
		<br />
	</div>
	
	<div class="row">
		<div class="col-md-12">
				<div id="Carousel2" class="carousel">
				 
				<ol class="carousel-indicators">
					<?php if (count($_smarty_tpl->tpl_vars['Sugestoes']->value)!=0){?><li data-target="#Carousel2" data-slide-to="0" class="active"></li>
					<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
						<?php while ((ceil(count($_smarty_tpl->tpl_vars['Sugestoes']->value)/4)>$_smarty_tpl->tpl_vars['n']->value)){?>
							<li data-target="#Carousel2" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"></li>
							<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
						<?php }?>
					<?php }?>
				</ol>
				 
				<?php if (count($_smarty_tpl->tpl_vars['Sugestoes']->value)!=0){?>
				
				<div class="carousel-inner">
				
				<div class="item active">
					<div class="row">
						<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['sug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Sugestoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sug']->key => $_smarty_tpl->tpl_vars['sug']->value){
$_smarty_tpl->tpl_vars['sug']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['n']->value==4){?>
									</div><!--.row-->
								</div><!--.item-->
				 
								<div class="item">
									<div class="row">
								<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
							<?php }?>
							<div class="col-md-3"><a href="/info/socialmedia/sugestao/<?php echo $_smarty_tpl->tpl_vars['sug']->value['Id'];?>
" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['sug']->value['Modelo'];?>
" alt="Image" style="max-width:100%;"></a></div>
							
							<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
						<?php } ?>
					</div><!--.row-->
				</div><!--.item-->
				
				
				</div><!--.carousel-inner-->
				  <a data-slide="prev" href="#Carousel2" class="left carousel-control">‹</a>
				  <a data-slide="next" href="#Carousel2" class="right carousel-control">›</a>
				</div><!--.Carousel-->
				
				<?php }else{ ?>
					<div class="alert alert-info" role="alert">Ainda não há sugestões adicionadas.</div>
				<?php }?>
				 
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
    $('#Carousel').carousel({
        pause: true,
		interval: false
    })
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#Carousel2').carousel({
        pause: true,
		interval: false
    })
});
</script>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>