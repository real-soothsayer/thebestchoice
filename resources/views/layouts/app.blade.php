<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Trouvez les meilleurs prix des articles sur internet</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->


	<!-- =========================
        Loding All Stylesheet
    ============================== -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/rateyo.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">

	<link rel="stylesheet" href="{{ asset('css/megamenu.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/my-style.css') }}">

	<!-- =========================
        Loding Main Theme Style
    ============================== -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- =========================
    	Header Loding JS Script
    ============================== -->
	<script src="{{ asset('js/modernizr.js') }}"></script>
</head>

<body class="">
	<!--[if lt IE 8]>
      <p class="browserupgrade">vous utiliser une <strong>vielle</strong> version du navigateur. Veuillez mettre à jour votre navigateur pour maximiner votre expérience.</p>
    <![endif]-->

	<div class="preloader"></div>


	<!-- =========================
        Header Top Section
    ============================== -->
	<section id="wd-header-top">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<!-- =========================
                    Social Media List
                    ============================== -->
					<div class="wb-social-media">
						<a href="https://www.facebook.com/ThebestchoiceCamer/" target="_blank" class="fb">
							<i>
								<img src="{{ asset('img/Facebook-2.png') }}" onmouseover="this.src = '{{ asset('img/Facebook-1.png') }}';" onmouseout="this.src = '{{ asset('img/Facebook-2.png') }}';" onmousedown="this.src = '{{ asset('img/Facebook.png') }}';">
							</i>
						</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-5 col-xl-6 d-none d-md-block">
					<div class="offer-text text-center">
						<p class="text-uppercase"></p>
					</div>
				</div>

				<!-- =========================
                    Select Country and Language
                ============================== -->
				<div class="col-6 col-sm-6 col-md-4  col-lg-3 col-xl-3">
					<div class="language-and-currency-btn">

						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							<div class="btn-group" role="group">
								<button id="btnGroupDrop3" type="button" class="btn btn-secondary wd-btn-country dropdown-toggle" data-toggle="dropdown"
								 aria-haspopup="true" aria-expanded="false">
									Français
								</button>
								<div class="dropdown-menu wd-btn-country-list" aria-labelledby="btnGroupDrop3">
									<a class="dropdown-item" href="#">English</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- =========================
        Header Top Section
    ============================== -->
	<section id="wd-header" class="d-flex align-items-center mob-sticky">
		<div class="container">
			<div class="row">
				<!-- =========================
					Mobile Menu 
				============================== -->
				<div class="order-2 order-sm-1 col-2 col-sm-2 col-md-4 d-block d-lg-none">
					<div class="accordion-wrapper hide-sm-up">
						<a href="#" class="mobile-open">
							<i class="fa fa-bars"></i>
						</a>
						<!--Mobile Menu start-->

						<ul id="mobilemenu" class="accordion">
							<!-- <li class="mob-logo"><a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a></li>-->
							<li>
								<a class="closeme" href="#">
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="mob-logo">
								<a href="index.html">
									<img class="logo" src="{{ asset('img/logo.png') }}" alt="">
								</a>
							</li>
							<li>
								<div class="link">Accueil</div>
							</li>
							<li>
								<div class="link">Recherchez et comparez </div>
							</li>
							<li>
								<div class="link ">Mon espace
									<i class="fa fa-chevron-down"></i>
								</div>
								<ul class="submenu">
									<li>
										<a href="#">Mon compte</a>
									</li>
									<li>
										<a href="#">Mes produits surveillé</a>
									</li>
								</ul>
							</li>
							<li class="out-link">
								<a class="" href="#">A propos de nous</a>
							</li>
						</ul>
						<!--Mobile Menu end-->
					</div>
				</div>
				<!--Mobile menu end-->

				<div class="order-1 order-sm-2  col-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
					<div class="blrub-logo">
						<a href="index.html">
							<img class="logo"  src="{{ asset('img/logo.png') }}" alt="Logo">
						</a>
					</div>
				</div>

				<!-- =========================
					 Search Box  Show on large device
				============================== -->
				<div class="col-12 order-lg-2 col-md-5 col-lg-6 col-xl-4 d-none d-lg-block">
					<div class="input-group wd-btn-group header-search-option">
						<input type="text" class="form-control blurb-search" placeholder="Rechercher ..." aria-label="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-secondary wd-btn-search" type="button">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					</div>
				</div>

				<!-- =========================
					 Login and My Acount 
				============================== -->
				<div class="order-3 order-sm-3 col-10 col-sm-6 col-lg-4 col-md-4 col-xl-5">
					<!-- =========================
						 User Account Section
					============================== -->
					<div class="acc-header-wraper">
						<div class="account-section">
							<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								<span>Se connecter</span>
							</button>

							<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="container">
											<div class="row text-left">
												<div class="col-md-12 p0">

													<div class="modal-tab-section wd-modal-tabs">
														<ul class="nav nav-tabs wd-modal-tab-menu text-center" id="myTab" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-expanded="true">Connexion</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up">Inscription</a>
															</li>
														</ul>
														<div class="tab-content" id="myTabContent">
															<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">

																<div class="row">
																	<div class="col-md-6 p0 brand-description-area">
																		<img src="{{ asset('img/login-img-1.jpg') }}" class="img-fluid" alt="">
																		<div class="brand-description">
																			<div class="brand-logo">
																				<img src="{{ asset('img/logo.png') }}" alt="Logo">
																			</div>
																			<div class="modal-description">
																				<p>Les bénéfices que vous avez lorsque vous vous connectez</p>
																			</div>
																			<ul class="list-unstyled">
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Vous ne raterez plus jamais des occasions de remises.
																					</div>
																				</li>
																				<li class="media my-4">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						TBD veille pour vous et vous propose la promotion idéale au moment auportin </div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-md-12 col-lg-6 p0">
																		<div class="login-section text-center">
																			<div class="social-media">
																				<a href="#" class="facebook-bg">
																					<i class="fa fa-facebook" aria-hidden="true"></i> Se connecter avec facebook</a>
																			</div>
																			<div class="login-form text-left">
																				<form>
																					<div class="form-group">
																						<label for="exampleInputEmail-login">Email</label>
																						<input type="text" class="form-control" id="exampleInputEmail-login" placeholder="example@tbc.com">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputPassword-login-pass-2">Mot de passe</label>
																						<input type="password" class="form-control" id="exampleInputPassword-login-pass-2" placeholder="*********">
																					</div>
																					<button type="submit" class="btn btn-primary wd-login-btn">Se connecter</button>

																					<div class="form-check">
																						<label class="form-check-label">
																							<input type="checkbox" class="form-check-input"> Rester connecté
																						</label>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
															<div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">

																<div class="row">
																	<div class="col-md-6 p0 brand-login-section">
																		<img src="{{ asset('img/login-img-1.jpg') }}" class="img-fluid" alt="">
																		<div class="brand-description">
																			<div class="brand-logo">
																				<img src="{{ asset('img/logo.png') }}" alt="Logo">
																			</div>
																			<div class="modal-description">
																				<p>Les bénéfices que vous avez lorsque vous vous connectez</p>
																			</div>
																			<ul class="list-unstyled">
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Vous ne raterez plus jamais des occasions de remises.
																					</div>
																				</li>
																				<li class="media my-4">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						TBD veille pour vous et vous propose la promotion idéale au moment auportin </div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-md-6 p0">
																		<div class="sign-up-section text-center">
																			<div class="social-media">
																				<a href="#" class="facebook-bg">
																					<i class="fa fa-facebook" aria-hidden="true"></i> S'inscrire avec facebook</a>
																			</div>
																			<div class="login-form text-left">
																				<form>
																					<div class="form-group">
																						<label for="exampleInputname1">Prénom</label>
																						<input type="text" class="form-control" id="exampleInputname1" placeholder="prénom">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputname2">Nom</label>
																						<input type="text" class="form-control" id="exampleInputname2" placeholder="Nom">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputEmail-sign-up">Email</label>
																						<input type="text" class="form-control" id="exampleInputEmail-sign-up" placeholder="example@tbc.com">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputPassword-login-pass">Mot de passe</label>
																						<input type="password" class="form-control" id="exampleInputPassword-login-pass" placeholder="*********">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputPassword-login-pass-confirm">Confirmez votre mot de passe</label>
																						<input type="password" class="form-control" id="exampleInputPassword-login-pass-confirm" placeholder="*********">
																					</div>
																					<button type="submit" class="btn btn-primary wd-login-btn">S'inscrire</button>

																					<div class="form-check">
																						<label class="form-check-label">
																							<input type="checkbox" class="form-check-input"> Reçevoir la newsletter
																						</label>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="serch-wrapper">
							<div class="search">
								<input class="search-input" placeholder="Search" type="text">
								<a href="javascript:void(0)">
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>


						<!-- =========================
							 Cart Out 
						============================== -->

						<div class="header-cart">
							<a href="coupon.html" class="coupon-save">
								<i class="fa fa-moon-o" aria-hidden="true"></i>
								<span class="count">5</span>
							</a>

							<div class="dropdown wd-compare-btn">
								<button class="btn btn-secondary dropdown-toggle compare-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
								 aria-expanded="false">
									<i class="fa fa-balance-scale"></i>

								</button>
								<span class="count">1</span>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
									<div class="wd-item-list">
										<div class="media">
											<img class="d-flex mr-3" src="{{ asset('img/cart-img-1.jpg') }}" alt="cart-img">
											<div class="media-body">
												<h6 class="mt-0 list-group-title">LG L9</h6>
												<div class="rating">
													<a href="#">
														<i class="fa fa-star active-color" aria-hidden="true"></i>
													</a>
													<a href="#">
														<i class="fa fa-star active-color" aria-hidden="true"></i>
													</a>
													<a href="#">
														<i class="fa fa-star active-color" aria-hidden="true"></i>
													</a>
													<a href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
													<a href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
												</div>
												<div class="cart-price">1000 FCFA</div>
											</div>
										</div>
									</div>
									<div class="media text-center">
										<a href="#" class="btn btn-primary go-compare-page">Comparer
											<i class="fa fa-arrow-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--Row End-->
		</div>
		<!--Container End-->
	</section>
	<!--Section End-->

	<!-- =========================
        Main Menu Section
    ============================== -->
	<section id="main-menu" class="sticker-nav">
		<div class="container">
			<div class="row">
				<div class="col-2 col-md-6 col-lg-12 ">
					<div class="menu-container wd-megamenu">
						<div class="menu">
							<ul class="wd-megamenu-ul">
								<li>
									<a href="{{ route('accueil') }}" class="main-menu-list">
										<i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
								</li>
								<li>
									<a href="{{ route('recherche', ['searched' => '-']) }}" class="main-menu-list">Recherchez et comparez</a>
								</li>
								<li>
									<a href="#" class="main-menu-list">Mon espace
										<i class="fa fa-angle-down angle-down" aria-hidden="true"></i>
									</a>
									<ul class="single-dropdown">
										<li>
											<a href="#">Mon compte</a>
										</li>
										<li>
											<a href="#">Mes produits surveillé</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-menu-list">A propos de nous</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @yield('slider')

    @yield('content')

	@yield('news_letter')

	<!-- =========================
        Footer Section
    ============================== -->
	<footer class="footer wow fadeInUp animated" data-wow-delay="900ms">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- ===========================
    						Footer About
    					 =========================== -->
					<div class="footer-about">
						<a href="https://www.facebook.com/ThebestchoiceCamer/" class="footer-about-logo">
							<img src="{{ asset('img/logo.png') }}" alt="Logo">
						</a>
						<div class="footer-description">
							<p>N'achetez plus jamais vos articles sur internet sans être sûr qu'il s'agit du meilleur choix.</p>
						</div>
						<div class="wb-social-media">
							<a href="#" class="fb">
								<i class="fa fa-facebook-official"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 footer-view-controller">
					<!-- ===========================
    						Festival Deals
    					 =========================== -->
					<div class="footer-nav">
						<h6 class="footer-subtitle active-color">Menu</h6>
						<ul>
							<li>
								<a href="#"> Accueil </a>
							</li>
							<li>
								<a href="#">Recherchez et comparez </a>
							</li>
							<li>
								<a href="#">Mon compte </a>
							</li>
							<li>
								<a href="#">Mes produits surveillés</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-view-controller">
					<!-- ===========================
    						Top Stores
    					 =========================== -->
					<div class="footer-nav">
						<div class="stores-list">
							<h6 class="footer-subtitle">Top 4 des sites de ecommerce</h6>
							<ul>
								<li>
									<a href="https://www.jumia.cm">Jumia</a>
								</li>
								<li>
									<a href="https://www.sellamquickvip.com">SellamquickVIP</a>
								</li>
								<li>
									<a href="#">Africa-shops</a>
								</li>
								<li>
									<a href="#">Sellkako</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 footer-view-controller">
					<!-- ===========================
    						About
    					 =========================== -->
					<div class="footer-nav">
						<h6 class="footer-subtitle">
							<a href="#">A propos de nous</a>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- =========================
        CopyRight
    ============================== -->
	<section class="copyright wow fadeInUp animated" data-wow-delay="1500ms">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright-text">
						<p class="text-uppercase">COPYRIGHT &copy; 2018</p>
						<a class="created-by" href="http://themeim.com/">The best choice team</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================
    	Main Loding JS Script
    ============================== -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nav.js') }}"></script>
	<!-- <script src="{{ asset('js/jquery.nicescroll.js') }}"></script> -->
	<script src="{{ asset('js/jquery.rateyo.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/mobile.js') }}"></script>
	<script src="{{ asset('js/lightslider.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.js') }}"></script>
	<script src="{{ asset('js/simplePlayer.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	<script src="{{ asset('js/my-script.js') }}"></script>
</body>

</html>