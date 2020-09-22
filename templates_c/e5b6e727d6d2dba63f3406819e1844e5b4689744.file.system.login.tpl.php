<?php /* Smarty version Smarty-3.1.13, created on 2020-09-19 18:37:55
         compiled from "engine\view\InfoPanel\pages\system.login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261025cce76e79ecc33-56604439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b6e727d6d2dba63f3406819e1844e5b4689744' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\system.login.tpl',
      1 => 1600551249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261025cce76e79ecc33-56604439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cce76e7a1bf44_36139680',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cce76e7a1bf44_36139680')) {function content_5cce76e7a1bf44_36139680($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../master/header_novo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="green"><!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">                 
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post" action="/info/startSession">
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card">
                                <div class="header text-center">
									<img src="/styles/images/logo-h100.png" width="240">
								</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Login</label>
                                        <input type="text" name="login" placeholder="Login" class="form-control" autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="password" placeholder="Senha" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">Iniciar Sessão</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../master/footer_novo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>