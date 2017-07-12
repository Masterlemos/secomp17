<nav class="navbar navbar-default sidebar " role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Contatos <span class="caret"></span><span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>

          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="/contacts">
             Contatos</a></li>
            <li><a href="/contacts/create">
            Novo Contato </a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Agenda <span class="caret"></span><span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a>

          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="/eventos">
             Eventos</a></li>
            <li><a href="/eventos/create">
            Novo Evento </a></li>
          </ul>
        </li>

        <li ><a href="/dizimo">Amigos<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>

        <li ><a href="/videos/create">V&iacute;deos<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-play"></span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Sugestões <span class="caret"></span><span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-exclamation-sign"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="/">
             Novas</a></li>
            <li><a href="/">
            Velhas </a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Forma&ccedil;&atilde;o <span class="caret"></span><span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-align-left"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">

            <li><a href="/formacao">
             Forma&ccedil;&otilde;es</a></li>

            <li><a href="/formacao/create">
            Nova Forma&ccedil;&atilde;o </a></li>
          </ul>
        </li> 

        <li ><a href="/imgs">Banner<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-th"></span></a></li>

        <li ><a href="/">Hor&aacute;rio<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-time"></span></a></li>

        <li ><a href="/mensagens">Mensagens<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>

        <li ><a href="/">Escrever<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>

        <li ><a href="/">Mensagens<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-send"></span></a></li>

        <li ><a href="/editarSobre">Sobre<span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>  

        <li ><a href="/users/{{Auth::user()->id}}/edit">Minhas Informa&ccedil;&otilde;es
        <span class="new-menu-item pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

      </ul>
    </div>
  </div>
</nav>
