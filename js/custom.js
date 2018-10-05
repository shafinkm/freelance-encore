$(document).ready(function() {
  $("li.dropdown").mouseover(function() {
      $(this).find("a").attr("aria-expanded","true");
      $(this).find("ul").show();

  }).mouseout(function() {
      $(this).find("a").attr("aria-expanded","false");
      $(this).find("ul").hide();
    });

  $("li.dropdown a").click(function(e) {

    var x = $(this).attr("href");
    window.location.href = x;
    e.preventDefault();

  //  $(this).trigger( "click" );
  });

});
