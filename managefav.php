<?php

$fav = "SELECT * FROM favourites WHERE userID = '" . $_SESSION['userID'] . "' ";
$favQuery = $conn->query($fav) or die($conn->error);

$bool = 0;//if not favourite
while( $return = $favQuery->fetch_assoc()){//check and show that is fav
    if($row['dishid'] == $return['dishID']){

 ?>
