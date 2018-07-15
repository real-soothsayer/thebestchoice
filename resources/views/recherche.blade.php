@extends('layouts.app')

@section('content')

    <!-- Formulaire de recherche -->
    <section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
                    <div id="sb-search" class="sb-search sb-search-open">
						<form>
							<input id="recherche-produit" class="sb-search-input" placeholder="Entrez l'article à rechercher..." type="text" value="" name="search">
							<span class="sb-icon-search search"></span>
							<span class="sb-icon-search load"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
						</form>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
                    <div id="search-filter" class="search-filter input-group">
						<select id="filter-produit" class="filter-produit form-control selectpicker" value="" name="filter">
							<option val="price">Trier par prix </option>
							<option val="value">Trier par pertinence </option>
						</select>
					</div>
				</div>
			</div>
        </div>
    </section>

	<!-- =========================
        Liste des produits
    ============================== -->
	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title-center text-center">
						<h2 class="title">800 résultats trouvés pour "Samsung"</h2>
					</div>
				</div>
			</div>

			<div class="row liste-produits">
				<div class="col-md-3">
					<figure class="figure product-box wow fadeIn animated" data-wow-delay="0ms">
						<div class="product-box-img">
							<a href="product-details.html">
								<img src="{{ asset('img/login-img-2.jpg') }}" class="figure-img img-fluid" alt="Product Img">
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
								<p>Prix :
									<strong class="active-color">
										1000 FCFA
									</strong>
								</p>
							</div>
							<div class="content-excerpt">
								<p>
									<a href="">IPAD </a>
								</p>
							</div>
							<div class="compare-btn">
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fa fa-exchange" aria-hidden="true"></i> Comparer
								</a>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
			
			<div class="row">
    			<div class="col-md-2">page 1 sur 10</div>
    			<div class="col-md-10">
					<div class="float-right">
						<nav class="wd-pagination">
						  <ul class="pagination">
						  	<li class="page-item"><a class="page-link" href="#">Premier</a></li>
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item active">
						      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">Dernier</a></li>
						  </ul>
						</nav>
					</div>
    			</div>
    		</div>
		</div>
	</section>
    
@endsection
