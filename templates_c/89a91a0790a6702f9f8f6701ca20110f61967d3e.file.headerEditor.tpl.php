<?php /* Smarty version Smarty-3.1.13, created on 2019-07-01 09:08:22
         compiled from "C:\xampp\htdocs\engine\view\InfoPanel\master\headerEditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56515cd3b091d003b9-66014619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a91a0790a6702f9f8f6701ca20110f61967d3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\view\\InfoPanel\\master\\headerEditor.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56515cd3b091d003b9-66014619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b091d27e15_85129677',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b091d27e15_85129677')) {function content_5cd3b091d27e15_85129677($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>Painel Administrativo</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" />
    <link rel="stylesheet" href="/styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/css/medicPanel.css">
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="/styles/js/uploader/jquery.liteuploader.min.js"></script>
	
		<link rel="stylesheet" href="/styles/ScEditor/minified/themes/default.min.css" type="text/css" media="all" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="/styles/ScEditor/minified/jquery.sceditor.xhtml.min.js"></script>

		<script>
			// Source: https://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
			var loadCSS = function(url, callback){
				var link = document.createElement('link');
				link.type = 'text/css';
				link.rel = 'stylesheet';
				link.href = url;
				link.id = 1;

				document.getElementsByTagName('head')[0].appendChild(link);

				var img = document.createElement('img');
				img.onerror = function(){
					if(callback) callback(link);
				}
				img.src = url;
			}

			$(document).ready(function() {
				var initEditor = function() {
					$("textarea").sceditor({
						plugins: 'bbcode',
						style: "/styles/ScEditor/minified/jquery.sceditor.default.min.css"
					});
				};

				initEditor();
			});
		</script>
</head>
<body ng-app="AngioApp"> <?php }} ?>