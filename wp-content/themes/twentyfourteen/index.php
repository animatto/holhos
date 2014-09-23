<?php
get_header(); ?>

<section id="main-content" class="main-content">
	<div id="carousel-home" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-home" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<a href="#">
				<img src="<?php bloginfo('template_url'); ?>/images/holhos-sindrome-de-irlen2.jpg" alt="H'olhos - Hospital dos Olhos">
				</a>
			</div>
			<div class="item">
				<a href="#">
				<img src="<?php bloginfo('template_url'); ?>/images/holhos-cursos-e-palestras2.jpg" alt="H'olhos - Hospital dos Olhos">
				</a>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 homebox">
				<div class="title-border">
					<h2 class="title-default">Quem Somos</h2>
				</div>
				<div class="wrap-img">
					<img src="<?php bloginfo('template_url'); ?>/images/img-home-predio.jpg">
					<div class="btn-more"><span class="glyphicon glyphicon-plus"></span></div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere dolor augue, ut condimentum ipsum porttitor sit amet. Morbi condimentum velit velit, nec ultricies lorem porttitor et. </p>
			</div>
			<div class="col-md-4 homebox">
				<div class="title-border">
					<h2 class="title-default">Projetos</h2>
				</div>
				<div class="wrap-img">
					<img src="<?php bloginfo('template_url'); ?>/images/img-home-predio.jpg">
					<div class="btn-more"><span class="glyphicon glyphicon-plus"></span></div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere dolor augue, ut condimentum ipsum porttitor sit amet. Morbi condimentum velit velit, nec ultricies lorem porttitor et. </p>
			</div>
			<div class="col-md-4 homebox">
				<div class="title-border">
					<h2 class="title-default">Cursos e Congressos</h2>
				</div>	
				<div class="wrap-img">
					<img src="<?php bloginfo('template_url'); ?>/images/img-home-predio.jpg">
					<div class="btn-more"><span class="glyphicon glyphicon-plus"></span></div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere dolor augue, ut condimentum ipsum porttitor sit amet. Morbi condimentum velit velit, nec ultricies lorem porttitor et. </p>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="title-border">
					<h2 class="title-default">Próximos Eventos</h2>
				</div>
				<div class="eventos">
					<div class="col-md-2 calendario-home">
						<div>
							<p>28 a 29</p>
							<p>OUT.</p>
						</div>
					</div>
					<div class="col-md-6">
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
