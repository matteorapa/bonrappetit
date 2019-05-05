<?php

require_once __DIR__.'/bootstrap.php';

include 'database.php';

function authenticateUser(){

  if(!empty($_SESSION['auth'])){
        echo "<script>login();</script>";

      }
    }

  }


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
