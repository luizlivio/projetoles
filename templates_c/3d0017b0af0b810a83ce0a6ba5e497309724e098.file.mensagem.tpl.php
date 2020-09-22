<?php /* Smarty version Smarty-3.1.13, created on 2019-07-07 12:17:38
         compiled from "engine\view\Confirmacao\mensagem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271005cd45b7ad26620-57067809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0017b0af0b810a83ce0a6ba5e497309724e098' => 
    array (
      0 => 'engine\\view\\Confirmacao\\mensagem.tpl',
      1 => 1561603798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271005cd45b7ad26620-57067809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd45b7ad8bfb3_02685705',
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd45b7ad8bfb3_02685705')) {function content_5cd45b7ad8bfb3_02685705($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Confirmação de Agendamento</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="http://www.datasantos.com.br/engine/view/Confirmacao/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://www.datasantos.com.br/engine/view/Confirmacao/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://www.datasantos.com.br/engine/view/Confirmacao/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="#page-top">Confirmação</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Portfolio Grid Section -->
    

                <div class="col-lg-12 text-center">
                    
					<img src="http://www.datasantos.com.br/engine/view/Confirmacao/img/<?php if ($_smarty_tpl->tpl_vars['status']->value==1||$_smarty_tpl->tpl_vars['status']->value==2){?>approved.png<?php }else{ ?>envelope.png<?php }?>" alt="alternative text" title="Confirmado"/>
					
					<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><h3>Agendamento Confirmado com Sucesso!</h3><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><h3>Seu cancelamento foi encaminhado com Sucesso!</h3><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><h3>Mensagem enviada com Sucesso!</h3><?php }?>
					
				</div>
    

    <!-- jQuery -->
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/classie.js"></script>
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/jqBootstrapValidation.js"></script>
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://www.datasantos.com.br/engine/view/Confirmacao/js/freelancer.js"></script>

</body>

</html>
<?php }} ?>