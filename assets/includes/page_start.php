<?php
  // initialize everything that I need for the site
  
  // constants
  define("PATH", "/home/qxh5696/Sites/GroupProject/");
  //define( "PATH", "/home/dmgics/Sites/240/20/inclass/" );
  define( "PATH_INC", PATH . "assets/includes/" );
  
  
  //define( "URL", "http://kelvin.ist.rit.edu/~dmgics/240/20/inclass/" );
  define( "URL", "http://kelvin.ist.rit.edu/~qxh5696/GroupProject/" );
  define( "URL_CSS", URL . "assets/css/" );
  define( "URL_JS", URL . "assets/js/" );
  
  // include function libraries or other classes
  /*
  include "/home/qxh5696/db_conn.php";
  
  // initialize the database connection
  $mysqli = mysqli_connect( $db_host, $db_user, $db_pass, $db_name ); // $db_user==$db_name
  
  // verify that we have a valid connection
  if ( !$mysqli ) {
    echo "connection error:" . mysqli_connect_error();
    die(); // prevents further execution
  }*/
?>