<?php

$genre = new Genre('Drama');
var_dump($genre);
$movies = [
    new Movies('The Grate Gatsby', 'Baz Luhrmann', 2013, 'https://m.media-amazon.com/images/I/71AeXTp+mQL._AC_UF1000,1000_QL80_.jpg', $genre),
    new Movies('The Lord of th Rings: The Return of the King', 'Peter Jackson', 2003, 'https://m.media-amazon.com/images/I/81+YmsWr5+L._AC_UF1000,1000_QL80_.jpg', new Genre('Fantasy')),
    new Movies('The Godfather', 'Francis Ford Coppola', 1972, 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', new Genre('Crime')),
];