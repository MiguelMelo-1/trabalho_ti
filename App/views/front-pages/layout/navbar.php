<!-- Start of Navigation Menu -->
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/trabalho_ti/public/index.php">
                                <img alt="cmhandyman" width="190" height="48" data-sticky-width="156" data-sticky-height="40" src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_preto.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item" style="color: black;" href="/trabalho_ti/public/">
                                                Início
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" style="color: black;" href="/trabalho_ti/public/sobre-nos">
                                                Sobre nós
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" style="color: black;" href="/trabalho_ti/public/servicos">
                                                Serviços
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" style="color: black;" href="/trabalho_ti/public/contactos">
                                                Contactos
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
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
																	<img class="rounded-circle" width="40" height="40" alt="" src="../../img/avatars/user.png">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> -->
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pe-2 signin" id="headerAccount">
                                    <a href="/trabalho_ti/App/views/back-pages/login/index.php" class="signin">
                                        <i class="far fa-user"></i> Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end of Navigation Menu -->