<?php 
class Genre{

    private $genre;

    public function __construct($genre){
        $this->genre = $genre;
    }

    public function setGenre(){
        return $this->genre;
    }

}
class Movies{

    public $title;
    public $director;
    public $year;
    public $cover;
    public Genre $genre;

    public function __construct($title, $director, $year, $cover, Genre $genre){
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->cover = $cover;
        $this->genre = $genre;
    }





}

$genre = new Genre('Horror');





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>ciao</h1>
</body>
</html>