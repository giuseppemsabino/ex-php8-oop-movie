<?php

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
    public function getMovie(){
        return [
            'title' => $this->title,
            'director' => $this->director,
            'year' => $this->year,
            'cover' => $this->cover,
            'genre' => $this->genre->setGenre()
        ];
    }

}