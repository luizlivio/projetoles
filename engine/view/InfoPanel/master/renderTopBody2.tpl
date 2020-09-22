{if $inf->password eq "ANGIO123"}
<div class="alert alert-danger">
    <strong>Atenção</strong> você deve alterar sua senha, <a href="/info/changePass">clique aqui</a> para alterar
</div>
{/if}

<div class="navbar navbar-default navbar-static-top header">
    <img src="/styles/images/logo-h46.png" alt="" class="img-responsive logo pull-left" />
	
    <div class="btn-group pull-right user">
        <span type="button" class="btn dropdown-toggle" data-toggle="dropdown">{if $inf->mult != ""}{$inf->mult} - {/if}{$inf->name}<span class="caret"></span></span>
        <ul class="dropdown-menu" role="menu">
			{foreach $permissoesMenu as $Menu}
				<li><a href="{$Menu.Link}">{$Menu.Modulo}</a></li>
				<li class="divider"></li>	
			{/foreach}
            <li><a href="/info/changePass">Alterar Senha</a></li>
            <li class="divider"></li>
            <li><a href="/info/logout">Encerrar Sessão</a></li>
        </ul>
	</div>
</div>

<div class="row">
        <div class="col-md-2 left-menu visible-md visible-lg">
        <ul id="side-nav" class="side-nav">

			{foreach $permissoesMenu as $Menu}
				<li class="panel"><a href="{$Menu.Link}">{$Menu.Modulo}</a></li>
			{/foreach}
			
			<li class="panel"><a href="/info/changePass">Alterar Senha</a></li>
            <li class="panel"><a href="/info/logout">Encerrar Sessão</a></li>
        </ul>
		
    </div>

    <div class="col-md-10 main">