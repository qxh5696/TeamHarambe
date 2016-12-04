var stuffForSidebar = "",
$sideTags = $("h1,h2,h3,h4");

  function fillSidebar(){
    $sideTags.each( function(i, sideTag){
      stuffForSidebar += "<li><a href='#'>" + $sideTags.text() + "</a></li>";
    });
    
    $(".nav-sidebar").html(stuffForSidebar);
  }
  
  $( document ).ready(function(){
    fillSidebar();
  });