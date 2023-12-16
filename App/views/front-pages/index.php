<!DOCTYPE html>
<html lang="pt-PT">

<head>

	<?php require SITE_ROOT . "/App/views/front-pages/layout/head_base.php"; ?>


	<title>CMHandyMans</title>

</head>

<body>

	<div role="main" class="main">
		<div class="p-relative">
			<section class="section border-0 m-0" style="background-image: url(/trabalho_ti/public/assets/img/fundo/foto_fundo.jpg); background-size:cover;background-position: bottom; background-repeat: no-repeat; background-color:#ededed; height: 100vh;">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-lg-6 pb-5">
							<div class="d-flex flex-column align-items-center justify-content-center text-center h-100">
								<h3 class="position-relative text-color-white text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
									<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-6">
										<img src="/trabalho_ti/public/assets/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
									</span>
									Empresa multi-<span class="position-relative">serviços<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="/trabalho_ti/public/assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
									<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-6">
										<img src="/trabalho_ti/public/assets/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
									</span>
								</h3>
								<h1 class="text-color-white font-weight-extra-bold text-12 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">CMHandyMans</h1>
							</div>
						</div>
					</div>
				</div>
			</section>

			<header id="header" class="header-narrow header-transparent header-bottom-slider header-transparent-light-top-border header-transparent-light-top-border-1 " data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
				<div class="header-body header-body-bottom-border">
					<div class="header-container header-container-height-sm container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img alt="cmhandyman" width="190" height="48" data-sticky-width="82" data-sticky-height="40" src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_preto.png" id="imagem-sticky">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">

														<a class="dropdown-item active" href="/trabalho_ti/public/">
															Início
														</a>													
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="/trabalho_ti/public/sobre-nos">
															Sobre nós
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="/trabalho_ti/public/servicos">
															Serviços
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="/trabalho_ti/public/contactos">
															Contactos
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<!-- <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
												<div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pe-2" id="headerAccount">
													<a href="#" class="header-nav-features-toggle logout">
														<i class="far fa-user"></i> {{ session('userNome') }}
													</a>
													<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
														<div class="row">
															<div class="col-8">
																<p class="mb-0 pb-0 text-2 line-height-1 pt-1">Olá,</p>
																<p><strong class="text-color-dark text-4">{{ session('userNome') }}</strong></p>
															</div>
															<div class="col-4">
																<div class="d-flex justify-content-end">
																	<img class="rounded-circle" width="40" height="40" alt="" src="/trabalho_ti/public/assets/img/avatars/user.png">
																</div>
															</div>
														</div>
														<div class="row">	
															<div class="col">
																<ul class="nav nav-list-simple flex-column text-3">
																	{{-- <li class="nav-item"><a class="nav-link" href="#">My Orders</a></li> --}}
																	@if (session('estado') == 'activo')
																	<li class="nav-item"><a class="nav-link" href="{{ route('pagina-inicio') }}">Aplicação</a></li>
																	@endif
																	<li class="nav-item"><a class="nav-link border-bottom-0" href="{{ route('logout') }}">Log Out</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div> -->

									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pe-2 signin" id="headerAccount">
											<a href="../App/views/back-pages/login/index.php" class="signin">
												<i class="far fa-user"></i> Login
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<div class="body">
			<!-- <header id="header" class="header-effect-shrink bg-color-tertiary custom-header" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 83}">
				<div class="header-body border-0 box-shadow-none">
					<div class="header-top header-top-default bg-color-white border-bottom-0">
						<div class="container-fluid px-lg-4">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon">
													<a class="px-0" href="mailto:mail@domain.com"><i class="far fa-envelope text-4 top-1 left-0"></i> porto@construction.com</a>
												</li>
												<li class="nav-item nav-item-anim-icon ps-md-4">
													<span class="d-none d-md-block">
														<i class="far fa-clock p-relative top-2 text-4"></i><span> Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED</span>
													</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>

								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container-fluid bg-secondary px-0">
						<div class="header-row">
							<div class="header-column bg-color-primary flex-grow-0 px-3 px-lg-5">
								<div class="header-row">
									<div class="header-logo">
										<a href="#">
											<img alt="Porto" class="img-logo" width="123" height="32" src="img/demos/construction-2/logo-1.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end justify-content-lg-start px-lg-5">
								<div class="header-row pe-3">
									<div class="header-nav header-nav-links order-2 order-lg-1 header-nav-light-text flex-grow-0 justify-content-start">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 ">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item active" href="demo-construction-2.html">
															Home
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="demo-construction-2-about-us.html">
															About Us
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="demo-construction-2-projects.html">
															Projects
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="demo-construction-2-services.html">
															Services
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item" href="demo-construction-2-contact-us.html">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit">
															<i class="fas fa-search header-nav-top-icon"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-row d-none d-lg-inline-flex justify-content-end">
							<div class="order-1 order-lg-2 pe-4 d-none d-xl-block">
								<div>
									<div class="feature-box feature-box-style-2 align-items-center p-relative top-8 px-2">
										<div class="feature-box-icon">
											<i class="fas fa-mobile-alt text-9 p-relative bottom-8 text-color-light"></i>
										</div>
										<div class="feature-box-info ps-0">
											<p class="text-color-light opacity-8 text-uppercase line-height-1 text-2 pb-0 mb-2">CALL US NOW</p>
											<p class="text-uppercase text-color-light font-weight-black letter-spacing-minus-1 line-height-1 text-5 pb-0"><a href="tel:+1234567890" class="text-color-light text-color-hover-primary text-decoration-none">(800) 123 4567</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header> -->

			<div role="main" class="main">

				<!-- <div id="slider" class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-diamond custom-nav-with-transparency nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							 Carousel Slide 1 -->
				<!-- <div class="owl-item position-relative" style="background-image: url(img/demos/construction-2/slides/slide-1.jpg); background-size: cover; background-position: center; height: 650px;">

								<div class="d-none d-md-block position-absolute top-50pct left-50pct transform3dxy-n50 w-100 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" style="max-width: 1080px;">
									<img src="img/demos/construction-2/slides/slide-1-2.png" class="img-fluid" alt="" />
								</div>
								<div class="container h-100">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<p class="text-4 text-color-secondary font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 800, 'minWindowWidth': 0}">RELIABLE CONSTRUCTION SERVICE</p>
											<h1 class="text-color-secondary font-weight-extra-bold text-12 mt-3 mb-4 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300" data-plugin-options="{'minWindowWidth': 0}">Since 1985 Building Dreams</h1>
											<a href="#" class="btn btn-primary btn-outline font-weight-bold btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
										</div>
									</div>
								</div>
							</div> -->

				<!-- Carousel Slide 2 -->
				<!-- <div class="owl-item position-relative" style="background-image: url(img/demos/construction-2/slides/slide-1.jpg); background-size: cover; background-position: center; height: 650px;">

								<div class="container h-100">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<p class="text-4 text-color-secondary font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 800, 'minWindowWidth': 0}">PROJECT MANAGEMENT</p>
											<h1 class="text-color-secondary font-weight-extra-bold text-12 mt-3 mb-4 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300" data-plugin-options="{'minWindowWidth': 0}">Professional Manage Services</h1>
											<a href="#" class="btn btn-primary btn-outline font-weight-bold btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
										</div>
									</div>
								</div>
							</div> -->

				<!-- Carousel Slide 2
							<div class="owl-item position-relative" style="background-image: url(img/demos/construction-2/slides/slide-1.jpg); background-size: cover; background-position: center; height: 650px;">

								<div class="container h-100">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<p class="text-4 text-color-secondary font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 800, 'minWindowWidth': 0}">BUILDING RESTAURATION</p>
											<h1 class="text-color-secondary font-weight-extra-bold text-12 mt-3 mb-4 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300" data-plugin-options="{'minWindowWidth': 0}">Restaurating and Renovation</h1>
											<a href="#" class="btn btn-primary btn-outline font-weight-bold btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div> -->

				<section class="section custom-angled section-angled bg-tertiary border-top-0 pt-0 pb-0 pb-lg-5 mb-5 mb-lg-0">
					<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
					<div class="section-angled-content mb-0 mb-lg-5 pb-lg-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
						<div class="container container-xl-custom pb-5">
							<div class="row pb-lg-5">
								<div class="col-lg-4 position-relative py-2" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="1">
									<div class="mt-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Limpeza de terrenos
										</h4>
										<p class="mb-2">Serviços efetuados com profissionalismo e pessoal credenciado a
											operar com diversas maquinas.</p>
										<!-- <p class="font-weight-bold mb-lg-3">
											<a href="{{ route('sobre-nos') }}" class="link-hover-style-1 text-color-primary">Ver Mais</a>
										</p> -->
									</div>
								</div>
								<div class="col-lg-4 position-relative py-2" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="2">
									<div class="mt-lg-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Trabalho de pedreiro
										</h4>
										<p class="mb-2">Remodelamos o interior do seu espaço, para que possa disfrutar
											da sua funcionalidade com todo o conforto.</p>
										<!-- <p class="font-weight-bold mb-lg-3">
											<a href="{{ route('sobre-nos') }}" class="link-hover-style-1 text-color-primary">Ver Mais</a>
										</p> -->
									</div>
								</div>
								<div class="col-lg-4 position-relative py-2" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="3">
									<div class="mt-lg-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Pinturas exterior e
											interior</h4>
										<p class="mb-2">Para qualquer trabalho de pinturas em moradias, condomínios,
											apartamentos ou empresas.</p>
										<!-- <p class="font-weight-bold mb-lg-3">
											<a href="{{ route('sobre-nos') }}" class="link-hover-style-1 text-color-primary">Ver Mais</a>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-light border-0 p-0 m-0" id="services">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col">
								<p class="mb-1">O QUE FAZEMOS</p>
								<h3 class="text-secondary font-weight-bold  text-7 mb-2">SERVIÇOS</h3>
							</div>
						</div>
						<div class="container py-2">
							<div class="row mb-5 pb-3">

								<div class="col-md-6 col-lg-3 my-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

									<div class="card flip-card flip-card-3d text-center rounded-0">
										<div class="flip-front p-5">
											<div class="flip-content my-4">
												<i class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block fa fa-broom"></i>
												<h4 class="font-weight-bold text-color-primary text-4">Limpeza <br> de
													terreno</h4>
												<p>Venha conhecer o nosso serviço de limpezas de terreno.</p>
											</div>
										</div>
										<div class="flip-back d-flex align-items-center p-5">
											<div class="flip-content my-4">
												<h4 class="font-weight-bold text-color-dark">Limpeza <br> de terreno
												</h4>
												<p class="font-weight-light text-color-dark opacity-5">Serviços
													efetuados com profissionalismo e pessoal credenciado a operar com
													diversas maquinas.</p>
												<!-- <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">VER MAIS</a> -->
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-3 my-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

									<div class="card flip-card flip-card-3d text-center rounded-0">
										<div class="flip-front p-5">
											<div class="flip-content my-4">
												<i class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block fa fa-tree"></i>
												<h4 class="font-weight-bold text-color-primary text-4">Corte e Abate de
													árvores</h4>
												<p>Venha conhecer o nosso serviço de abate de árvores.</p>
											</div>
										</div>
										<div class="flip-back d-flex align-items-center p-5">
											<div class="flip-content my-4">
												<h4 class="font-weight-bold text-color-dark">Corte e Abate de árvores
												</h4>
												<p class="font-weight-light text-color-dark opacity-5">Serviços
													efetuados com profissionalismo e pessoal credenciado a operar com
													diversas maquinas.</p>
												<!-- <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">VER MAIS</a> -->
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-3 my-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

									<div class="card flip-card flip-card-3d text-center rounded-0">
										<div class="flip-front p-5">
											<div class="flip-content my-4">
												<i class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block fa fa-hammer"></i>
												<h4 class="font-weight-bold text-color-primary text-4">Serviço <br> de
													pedreiro</h4>
												<p>Venha conhecer o nosso serviço de pedreiro.</p>
											</div>
										</div>
										<div class="flip-back d-flex align-items-center p-5">
											<div class="flip-content my-4">
												<h4 class="font-weight-bold text-color-dark">Serviço <br> de pedreiro
												</h4>
												<p class="font-weight-light text-color-dark opacity-5">Remodelamos o
													interior do seu espaço, para que possa disfrutar da sua
													funcionalidade com todo o conforto.</p>
												<!-- <a href="{{ route('pedreiro-detalhes') }}" class="btn btn-light btn-modern text-color-dark font-weight-bold">VER MAIS</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 my-5 mb-lg-0 w-lg appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

									<div class="card flip-card flip-card-3d text-center rounded-0">
										<div class="flip-front p-5">
											<div class="flip-content my-4">
												<i class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block fa fa-brush"></i>
												<h4 class="font-weight-bold text-color-primary text-4">Pinturas exterior
													e interior</h4>
												<p>Venha conhecer o nosso serviço de pinturas.</p>
											</div>
										</div>
										<div class="flip-back d-flex align-items-center p-5">
											<div class="flip-content my-4">
												<h4 class="font-weight-bold text-color-dark">Pinturas exterior e
													interior</h4>
												<p class="font-weight-light text-color-dark opacity-5">Para qualquer
													trabalho de pinturas em moradias, condomínios, apartamentos ou
													empresas.</p>
												<!-- <a href="{{ route('pinturas-detalhes') }}" class="btn btn-light btn-modern text-color-dark font-weight-bold">VER MAIS</a> -->
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section class="section custom-angled section-angled bg-tertiary border-top-0 pb-0 pb-lg-5 mb-5 mb-lg-0">
					<div class="section-angled-layer-top bg-light"></div>
					<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
					<div class="section-angled-content mb-0 mb-lg-5">
						<div class="container py-5 container-xl-custom custom-container">
							<div class="row align-items-center justify-content-center pt-5 pb-lg-5">
								<div class="col-md-8 col-xl-6 mb-md-5 mb-xl-4">
									<div class="position-relative pb-lg-5 mb-lg-5">
										<img src="/trabalho_ti/public/assets/img/trabalhador_eletrecista_inicio.jpg" class="img-fluid custom-img border-radius-0 max-w-90 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600ms" alt="">
										<img src="/trabalho_ti/public/assets/img/reparacao_casa_inicio.jpg" class="img-fluid custom-img border-radius-0 position-absolute custom-img-about appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="600ms" alt="">
									</div>
								</div>
								<div class="col-xl-6 mt-lg-5 mt-xl-0 pb-lg-5 mb-lg-5">
									<div class="ps-md-4 mt-5">
										<div class="row">
											<div class="col">
												<p class="mb-1">Quem somos</p>
												<h3 class="text-secondary font-weight-bold  text-7 mb-2">Mais sobre
													CMHandyMans</h3>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<p class="text-4 pt-2 mb-4">
													Sendo iniciada em 2011 com um colega de trabalho, esta equipa
													começou com corte e abate de árvores.
												</p>
												<p class="mb-3">
													Mas com a mudança da lei, havendo a obrigatoriadade a certificados
													em certos trabalhos focou-se na formação de manobrador de máquinas e
													trabalhos em altura sendo estes os mais importantes para qualquer
													trabalho...
												</p>
												<p class="font-weight-bold mb-3">
													<a href="../App/views/front-pages/sobre_nos.php" class="link-hover-style-1 text-color-primary">Ver Mais</a>
												</p>
												<!-- {{-- <div class="row mb-4 counters counters-sm text-secondary">
													<div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-4">
														<div class="counter">
															<strong data-to="35" data-append="+">35+</strong>
															<label class="text-2 pt-1">Business Year</label>
														</div>
													</div>
													<div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-4">
														<div class="counter">
															<strong data-to="240" data-append="+">240+</strong>
															<label class="text-2 pt-1">Satisfed Clients</label>
														</div>
													</div>
													<div class="col-6 col-lg-3 mb-4 mb-sm-0 mt-4">
														<div class="counter">
															<strong data-to="2000" data-append="+">2000+</strong>
															<label class="text-2 pt-1">Successfull Cases</label>
														</div>
													</div>
													<div class="col-6 col-lg-3 mt-4">
														<div class="counter">
															<strong data-to="130" data-append="+">130+</strong>
															<label class="text-2 pt-1">Pro Consultants</label>
														</div>
													</div>
												</div> --}} -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="section bg-light border-0 py-0 my-2">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col">
								<h3 class="text-secondary font-weight-bold  text-7 mb-2">Portefólio</h3>
							</div>
						</div>

						<div class="sort-destination-loader sort-destination-loader-showing m-0 mt-4 p-0">
							<div class="row row-gutter-sm portfolio-list sort-destination" data-sort-id="portfolio">							
								<div class="col-sm-6 isotope-item">
									<div class="portfolio-item mb-3 pb-1">
										<a href="{{ route('detalhes-portefolio') }}">
											<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
												<span class="thumb-info-wrapper">
													<img src="/trabalho_ti/public/assets/img/demos/construction-2/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 isotope-item">
									<div class="portfolio-item mb-3 mb-md-5 mb-lg-3 pb-1">
										<a href="demo-construction-2-projects-details.html">
											<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
												<span class="thumb-info-wrapper">
													<img src="img/demos/construction-2/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 isotope-item">
									<div class="portfolio-item mb-3 pb-1">
										<a href="demo-construction-2-projects-details.html">
											<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
												<span class="thumb-info-wrapper">
													<img src="img/demos/construction-2/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 isotope-item">
									<div class="portfolio-item mb-3 pb-1">
										<a href="demo-construction-2-projects-details.html">
											<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
												<span class="thumb-info-wrapper">
													<img src="img/demos/construction-2/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
												</span>
											</span>
										</a>
									</div>
								</div>	
							</div>
						</div>

						<ul class="nav nav-pills sort-source sort-source-style-3 d-none" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'packery', 'filter': '*'}">
							<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
						</ul>

						<div class="row">
							<div class="col text-center pb-4">
								<a href="{{ route('portefolio') }}" class="btn btn-primary btn-outline custom-btn font-weight-extra-bold mt-3 px-5 py-3 border-width-4">Ver Mais</a>
							</div>
						</div>

					</div>
				</section> -->

				<section class="container-fluid mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-6 px-0">
							<section class="section custom-angled section-angled bg-secondary border-top-0">
								<div class="section-angled-layer-top bg-light"></div>
								<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
								<div class="section-angled-content">
									<div class="container container-xl-custom">
										<div class="row justify-content-lg-end py-3">
											<div class="col-lg-10 custom-col pt-5 pb-lg-5 mt-5 mb-lg-5 px-3 px-lg-1 pe-lg-3">
												<div class="col px-0">
													<h3 class="text-light font-weight-bold mb-2">Peça já o seu orçamento
													</h3>
												</div>
												<div class="row pe-3">
													<div class="col">
														<p class="text-4 pt-2 mb-4">
															Entre em contacto connosco que nós iremos tentar dar o
															melhor orçamento para ajudar a resolver o seu problema com
															os melhores preços.
														</p>

														<p class="mb-2 font-weight-bold">
															<a href="../App/views/front-pages/contactos.php" class="link-hover-style-1 text-color-primary" style="text-decoration: none;">Contactar</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-6 px-0 d-none d-lg-flex">
							<section class="section section-angled custom-angled section-angled-reverse section-center bg-secondary border-top-0 flex-grow-1 lazyload" data-bg-src="/trabalho_ti/public/assets/img/entrepreneur-working-with-bills.jpg" style="align-self: left;">
								<div class="section-angled-layer-top bg-light d-none d-lg-block"></div>
								<div class="section-angled-layer-bottom bg-light"></div>
								<div class="section-angled-content">
								</div>
							</section>
						</div>
					</div>
				</section>



			</div>

			<section class="section section-height-3 bg-light border-0 pt-3 pt-lg-0 pb-4">

				<div class="heading heading-middle-border heading-middle-border-center">
					<h2 class="text-secondary">Os nossos <strong class="font-weight-extra-bold"> parceiros</strong></h2>
				</div>

				<div class="container-fluid">
					<div class="container container-xl-custom py-5">
						<div class="d-flex flex-column flex-md-row align-items-center justify-content-center px-3">
							<span class="p-3">
								<a href="https://www.gresdias.pt/" target="_blank">
									<img src="/trabalho_ti/public/assets/img/parcerias/logo-gresdias.png" alt="gresdiaslogo" class="img-fluid">
								</a>
							</span>
						</div>
					</div>
				</div>
			</section>
			<footer id="footer" class="bg-color-secondary border-top-0 mt-0 custom-footer">
				<div class="container container-xl-custom py-md-4">
					<div class="row justify-content-md-center py-5">
						<div class="col-md-6 col-lg-4 d-flex align-items-center justify-content-end justify-content-lg-start m-5 mb-lg-0">
							<a href="index.php"><img src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" alt="cmhandymanlogo" class="img-fluid logo"></a>
						</div>
						<div class="col-md-6 col-lg-4 text-center text-md-start m-5">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Entre em contacto</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">Morada</p>
							<p class="text-3 mb-2 text-color-light">Av. João de deus, 2070-011, Cartaxo.</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">Telemóvel
							</p>
							<p class="text-3 mb-2 text-color-light"><a href="tel:123456789" class="text-color-light">123456789</a></p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">Email</p>
							<p class="text-3 mb-2 "><a href="mailto:geral@cmhandymans.pt" class="text-color-light">geral@cmhandymans.pt</a></p>
							<ul class="social-icons social-icons-dark social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f font-weight-semibold"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- <div class="col-md-3 text-center text-md-start m-5">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Últimos Projetos</p>

							<p class="text-3 mb-0 text-color-light opacity-7">Painting, Plumbing</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Renovation - New York / NY</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Eletrical Maitenance</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">Building Repair - Detroit / MI</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Flooring</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Repair - New York / NY</p>
							<p class="text-3 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>
						</div> -->
					</div>
				</div>
				<div class="container container-xl-custom">
					<div class="footer-copyright footer-copyright-style-2 bg-color-secondary">
						<div class="py-2">
							<div class="row py-4">
								<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
									<p class="text-3 text-color-light"><b class="text-white">CMHandyMans</b>. © 2023.
										Todos os Direitos Reservados</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<?php require SITE_ROOT . "/App/views/front-pages/layout/script_base.php"; ?>

</body>

</html>