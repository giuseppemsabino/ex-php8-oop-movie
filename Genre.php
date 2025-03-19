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