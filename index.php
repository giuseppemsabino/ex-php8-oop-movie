<?php 

require_once('./traits/HasAwards.php');

require_once('./Genre.php');
require_once('./Movies.php');

require_once('./db.php');

$movies[0]->setAwards(40);
$movies[1]->setAwards(200 . '+');
$movies[2]->setAwards(200 . '+');
var_dump($movies);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

</body>
</html>