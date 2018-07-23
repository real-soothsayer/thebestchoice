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
							<option value="price">Trier par prix </option>
							<option value="value">Trier par pertinence </option>
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
						<h2 class="title"></h2>
					</div>
				</div>
			</div>

			<div class="row liste-produits">
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
