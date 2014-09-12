<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- CSS do Bootstrap -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<!-- JavaScript do Bootstrap -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</head>
<body>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
		<div class="faixa top-fix">
			<div class="container">
				<ul class="list-inline content-top pull-right">
				  <li>Questionários</li>
				  <li>Área Restrita Screeners</li>
				  <li>Contato</li>
				  <li>(31) 3289-2000</li>
				</ul>						
			</div>
		</div>
		<div class="container">
			<img src="<?php bloginfo('template_url'); ?>/images/logo-holhos.png" alt="Logo H'Olhos">
			<nav id="menu-header" class="navbar" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu-header">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="nav-menu-header">
			      <ul class="nav navbar-nav">
			       
			        <li><a href="#">Quem Somos</a></li>
			        <li><a href="#">Projetos</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Neurovisão <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">O que é</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Processamento Visual</a></li>
				            <li class="divider"></li>
				            <li><a href="#">SÍNDROME DE IRLEN</a></li>
				            <li class="divider"></li>
				            <li><a href="#">TRATAMENTOS POSSÍVEIS</a></li>
				            <li class="divider"></li>
				            <li><a href="#">EFEITOS DE DISTORÇÃO</a></li>
				          </ul>
				        </li>
				        <li><a href="#">Loja Virtual</a></li>
				        <li><a href="#">Guia de Profissionais</a></li>
				        <li><a href="#">Cursos</a></li>
				        <li><a href="#">Artigos</a></li>
				        <li><a href="#">Mídias</a></li>
			      </ul>
			     
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header><!-- #masthead -->
