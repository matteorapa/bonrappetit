<?php

require_once __DIR__.'/bootstrap.php';
require 'database.php';
/*
$fav = "SELECT * FROM favourites WHERE userID = '" . $_SESSION['userID'] . "' ";
$favQuery = $conn->query($fav) or die($conn->error);

$function = new \Twig\TwigFunction('isFavourite', function ($favDishId) {

  while( $return = $favQuery->fetch_assoc()){//check and show that is fav
      if($favDishId == $return['dishID']){
          return true;
      }
}
return false;
});
$twig->addFunction($function);

$function2 = new \Twig\TwigFunction('authenticateUser', function ($auth) {
  if(!empty($auth)){
      if($auth == 1){
        echo "<script>login();</script>";

      }
    }
});
$twig->addFunction($function2);
*/

  if(isset($_GET['q'])){
    if(!empty($_GET['q'])){
        if(strtolower($_GET['q']) == 'all'){
            $query = "SELECT * FROM dishes";
        }else {
            $query = "SELECT * FROM dishes WHERE dish_category = '" . $_GET['q'] . "'";
        }
    }
  } else {
      $query = "SELECT * FROM dishes";
  }



$result = $conn->query($query) or die($conn->error);
while ($row = $result->fetch_assoc()) {
    $results[] = $row;
}


echo $twig->render('menu.html', array('results'=> $results));
