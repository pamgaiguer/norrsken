$(document).ready(function() {

  var target = {
    'index': 'index.php',
    'sobre': 'sobre.php',
    'choose': 'choose.php',
    'cases': 'cases.php',
    'contato': 'contato.php'
  };
  var pageName = 'index';
  var address = window.location.href.split('/');
  $.each(address, function(key, item) {
    if (item.indexOf("php") != -1) {
      pageName = item.split('.')[0];
    }
  });
  $('a[href^="' + target[pageName] + '"]').parent().addClass("active");
  
  $(".nav-link").on("click", function(){
    $(".nav-link").find(".active").removeClass("active");
    $(this).addClass("active");
  });
  
});
