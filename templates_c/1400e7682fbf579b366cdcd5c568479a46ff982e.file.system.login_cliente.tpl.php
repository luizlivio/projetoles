<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 02:23:11
         compiled from "engine\view\InfoPanel\pages\system.login_cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118645cce7713a65734-20328524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1400e7682fbf579b366cdcd5c568479a46ff982e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\system.login_cliente.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118645cce7713a65734-20328524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cce7713a9ef81_98035337',
  'variables' => 
  array (
    'login' => 0,
    'senha' => 0,
    'UsuariosClientes' => 0,
    'Usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cce7713a9ef81_98035337')) {function content_5cce7713a9ef81_98035337($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../master/header_novo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper wrapper-full-page">    <div class="full-page login-page" data-color="red"><!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content content2">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-5 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post" action="/info/startSession">
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card">
                                <div class="header text-center">
									<img src="/styles/images/logo-h100.png" width="240">
								</div>
                                <div class="content">
                                    <div class="form-group helper-display-none">
                                        <label>Login</label>
                                        <input type="text" name="login" placeholder="Login" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" readonly />
                                    </div>
                                    <div class="form-group helper-display-none">
                                        <label>Senha</label>
                                        <input type="password" name="password" placeholder="Senha"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
" readonly />
                                    </div>
									<div class="form-group">
                                        <label>Usuário</label>
                                        <select name="usuario" class="form-control" autofocus="autofocus">
											<?php  $_smarty_tpl->tpl_vars['Usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UsuariosClientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Usu']->key => $_smarty_tpl->tpl_vars['Usu']->value){
$_smarty_tpl->tpl_vars['Usu']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['Usu']->value['UserId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Usu']->value['Nome'];?>
</option>
											<?php } ?>
										</select>
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="senha" placeholder="Senha" class="form-control" />
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-danger btn-wd">Iniciar Sessão</button>
                                </div>
                            </div>						</form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../master/footer_novo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>