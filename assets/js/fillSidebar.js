var stuffForSidebar = "",
$sideTags = $("h1,h2");

  function fillSidebar(){
    $.each( $sideTags, function(i, sideTag){
      // stuffForSidebar += "<li><a href='#'>" + sideTag.text() + "</a></li>";
      stuffForSidebar += "<li><a href='#" + sideTag.getAttribute('id') + "'>" + sideTag.innerText + "</a></li>";
    });
    
    $(".nav-sidebar").html(stuffForSidebar);
  }
  
  $( document ).ready(function(){
    fillSidebar();
  });