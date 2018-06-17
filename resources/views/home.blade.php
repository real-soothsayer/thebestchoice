@extends('layouts.app')

@section('content')
	<!-- =========================
        Slider Section
    ============================== -->
	<section id="main-slider-section">
		<div id="main-slider" class="slider-bg1 owl-carousel owl-theme product-review">
			<div class="item slider-bg d-flex align-items-center">

				<div class="container">
					<div class="row no-gutters">
						<div class="slider-text fadeInUp animated order-2 order-sm-1  col-sm-6 col-md-7">
							<h1 class="slider-title">Get Review
								<span class="strong">– Lets Compare</span>
							</h1>
							<p class="slider-content">Comparison Your Product with Best Review from Multi-Vendor Store .
								<br> Hurry to go affiliate on this day successfully with BLURB Theme.</p>
							<a href="shop-left-sidebar.html" class="btn btn-primary wd-shop-btn slider-btn">
								Go to store
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
						<div class="col-sm-6 col-md-5 order-1 order-sm-2 slider-img fadeInDown animated">
							<img src="img/slider-img/slider1.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="item slider-bg d-flex align-items-center">

				<div class="container">
					<div class="row no-gutters">
						<div class="slider-text fadeInUp animated order-2 order-sm-1 col-sm-6  col-md-7">
							<h1 class="slider-title">Get Review
								<span class="strong">– Lets Compare</span>
							</h1>
							<p class="slider-content">Comparison Your Product with Best Review from Multi-Vendor Store .
								<br> Hurry to go affiliate on this day successfully with BLURB Theme.</p>
							<a href="shop-left-sidebar.html" class="btn btn-primary wd-shop-btn slider-btn">
								Go to store
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
						<div class="col-sm-6 col-md-5 order-1 order-sm-2 slider-img-two fadeInDown animated">
							<img src="img/slider-img/slider2.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>

	<!-- =========================
        recommandations
    ============================== -->

	<section id="recommendations">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title-center text-center">
						<h2 class="title">Les produits Recommandés</h2>
					</div>
				</div>
				<div id="product-recommendations" class="owl-carousel owl-theme">
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="0ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-1.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Prix entre
										<strong class="active-color">
											<u>1000 FCFA</u> et
											<u>2000 FCFA</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">IPAD </a>
									</p>
								</div>
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
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="600ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-3.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge featured-bg-color text-uppercase">Featured</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="900ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-4.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-5.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-6.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
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
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br>
	<br>

	<!-- =========================
        plus consultés
    ============================== -->
	<section id="trending">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title-center text-center">
						<h2 class="title">Les produits les plus consultés</h2>
					</div>
				</div>
				<div id="product-trending" class="owl-carousel owl-theme">
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="0ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-1.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<div class="wishlist relative-left">
									<i class="fa fa-moon-o" aria-hidden="true"></i>
								</div>
								<div class="wishlist relative-right">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Prix entre
										<strong class="active-color">
											<u>1000 FCFA</u> et
											<u>2000 FCFA</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">IPAD </a>
									</p>
								</div>
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
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="600ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-3.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<div class="wishlist relative-left">
									<i class="fa fa-moon-o" aria-hidden="true"></i>
								</div>
								<div class="wishlist relative-right">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box wow fadeIn animated" data-wow-delay="900ms">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-4.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-5.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
								<div class="rating">
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a class="active-color" href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-12">
						<figure class="figure product-box">
							<div class="product-box-img">
								<a href="product-details.html">
									<img src="img/product-img/product-img-6.jpg" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1">
										<i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button>
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p>Price start from
										<strong class="active-color">
											<u>$80.00</u> -
											<u>$75.00</u>
										</strong>
									</p>
								</div>
								<div class="content-excerpt">
									<p>
										<a href="">Cras in nunc non ipsum </a>
									</p>
								</div>
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
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fa fa-exchange" aria-hidden="true"></i> Comparer</a>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================
        Subscribe Section
    ============================== -->
	<section id="subscribe">
		<div class="container">
			<!-- <div class="col-md-1"></div> -->
			<div class="row subscribe-body">
				<div class="col-12 col-md-12 col-lg-5">
					<h4 class="subscribe-title">S'inscrire à la newsletter</h4>
				</div>
				<div class="col-12 col-md-9 col-lg-5">
					<div class="input-group">
						<input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
					</div>
				</div>
				<div class="col-12 col-md-3 col-lg-2">
					<button type="button" class="btn btn-primary wd-shop-btn subscribe-btn">
						Confirmer
					</button>
				</div>
			</div>
		</div>
	</section>
    
@endsection