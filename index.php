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

$horror = new Genre('Horror');
var_dump($horror);
$movie = new Movies('The Grate Gatsby', 'Baz Luhrmann', 2013, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FGreat-Gatsby-Leonardo-DiCaprio%2Fdp%2FB00E1L5J9I&psig=AOvVaw0', $horror);
var_dump($movie);




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