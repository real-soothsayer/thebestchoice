
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
});