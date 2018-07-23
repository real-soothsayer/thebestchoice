elastic_base_server = "http://127.0.0.1:9200";


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

  var search_callback = function() {

    var filter = $("#filter-produit").val();
    var search = $('#recherche-produit').val();
    
    if (search != "") {
      $.ajax({
        type: 'POST',
        url: '/api/history',
        data: {
          api_token: "KjXIkhVUjoMPPd3nKdOx5N0seKVbEP0R",
          search: search
        }
      })
  
      $.ajax(get_ajax_search(search, filter));
    }
  }

  $("#sb-search").on("click", ".search", function(e) {
    search_callback();
  });
  $("#sb-search").keypress(function(e) {
    if(e.which == 13) {
      search_callback();
    }
  });

  $("#filter-produit").on("change", function(e) {
    var filter = $("#filter-produit").val();
    var search = $('#recherche-produit').val();
    
    if (search != "") {
      $.ajax(get_ajax_search(search, filter));
    }
  })
  
  $("#sb-search form").submit(function(e){
      e.preventDefault();
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
              '+add_spaces(prod.price)+' FCFA \
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

function add_spaces(nStr) {
  nStr += '';
  var x = nStr.split('.');
  var x1 = x[0];
  var x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ' ' + '$2');
  }
  return x1 + x2;
}

function create_search(search, filter) {
  
  var filter_string = "";
  if (filter === "value") {
    //
  } else if (filter === "price") {
    filter_string += ', "sort": { "price": { "order": "asc" } }';
  } else {
    //
  }

  var ret = '{ \
    "query": {  \
      "bool": { \
        "must": [ \
          { "multi_match":  \
            {	 \
              "query":    "' + search + '", \
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
    "size": 2000 ' + filter_string + ' \
  }';

  return ret;
}

function get_ajax_search(search, filter) {
  var ajax = {
    url: elastic_base_server + "/produits/_search",
    headers: {
      'Content-Type':'application/json'
    },
    method: "POST",
    data: create_search(search, filter),
    dataType: "JSON",
    success: function(res) {
      var produits = "";
      for (id in res.hits.hits) {
        produits += make_product_box(res.hits.hits[id]._source);
      }
      $('#products .liste-produits').html(produits);
      $('#products .title').text(res.hits.total + ' résultats trouvé(s) pour "'+search+'"');
    },
    beforeSend: function() {
      $('#sb-search .load').show();
      $('#sb-search .search').hide();
    },
    complete: function() {
      $('#sb-search .load').hide();
      $('#sb-search .search').show();
    }
  }

  return ajax;
}