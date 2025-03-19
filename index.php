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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Movies</title>
</head>
<body>


<div class="container">
    <div class="row">
        <?php foreach($movies as $movie): ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $movie->cover; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                        <p class="card-text"><?php echo $movie->director; ?></p>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>