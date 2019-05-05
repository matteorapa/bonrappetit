<?php

require_once __DIR__.'/bootstrap.php';

include(database.php);

while ($row = mysql_fetch_assoc($query)) {
    $results[] = $row;
}


echo $twig->render('menu.html', array('queryResult'=> $results));
