elastic_base_server = "http://127.0.0.1:9200";
search_body = '{ \
  "query": {  \
    "bool": { \
      "must": [ \
        { "multi_match":  \
      {	 \
            "query":    "telephone", \
            "operator": "and", \
        "fields": ["categorie", "name", "features", "vendeur", "url"] \
      } \
        } \
      ], \
      "must_not": [ \
        { "match": { "availability": false } } \
      ] \
    } \
  }, \
  "size": 20, \
  "sort": { "price": { "order": "asc" } } \
}';


$(document).ready(function () {
  $('.selectpicker').selectpicker({
    size: 14
  });

  $('#sb-search .load').hide();

  var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
  ];
  $("#recherche-produit").autocomplete({
    //        appendTo: "#recherche-produit",
    source: availableTags,
    //        minLength : 3 ,
    autoFocus: true,
    position: {
      my: "left+0 top-46",
    }
  });

  $("#sb-search").on("click", ".search", function(e) {
    $.ajax({
      url: elastic_base_server + "/produits/_search",
      headers: {
        'Content-Type':'application/json'
      },
      method: "POST",
      data: search_body,
      dataType: "JSON",
      success: function(res) {
        var produits = "";
        for (id in res.hits.hits) {
          produits += make_product_box(res.hits.hits[id]._source);
        }
        $('#products .liste-produits').html(produits);
        $('#products .title').text(res.hits.total + ' résultats trouvé(s) pour "Samsung"');
      },
      beforeSend: function() {
        $('#sb-search .load').show();
        $('#sb-search .search').hide();
      },
      complete: function() {
        $('#sb-search .load').hide();
        $('#sb-search .search').show();
      }
    });
  });
  
});


function make_product_box(prod) {
  var ret = '<div class="col-md-3"> \
    <figure class="figure product-box wow fadeIn animated" data-wow-delay="0ms"> \
      <div class="product-box-img"> \
        <a href="'+prod.url+'" target="_blank" title="visiter" > \
          <img src="'+prod.image+'" class="figure-img img-fluid" alt="Product Img"> \
        </a> \
      </div> \
      <div class="quick-view-btn"> \
        <div class="compare-btn"> \
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1"> \
            <i class="fa fa-eye" aria-hidden="true"></i> Surveiller</button> \
        </div> \
      </div> \
      <figcaption class="figure-caption text-center"> \
        <div class="wishlist relative-left"> \
          <i class="fa fa-moon-o" aria-hidden="true"></i> \
        </div> \
        <div class="wishlist relative-right"> \
          <i class="fa fa-heart" aria-hidden="true"></i> \
        </div> \
        <div class="price-start"> \
          <p>Prix : \
            <strong class="active-color"> \
              '+prod.price+' FCFA \
            </strong> \
          </p> \
        </div> \
        <div class="content-excerpt"> \
          <p> \
            <a href="'+prod.url+'" target="_blank">'+prod.name+' </a> \
          </p> \
        </div> \
        <div class="compare-btn"> \
          <a class="btn btn-primary btn-sm" href="#"> \
            <i class="fa fa-exchange" aria-hidden="true"></i> Comparer \
          </a> \
        </div> \
      </figcaption> \
    </figure> \
  </div>';

  return ret;
}