<?php

$horror = new Genre('Horror');
var_dump($horror);
$movies = [
    new Movies('The Grate Gatsby', 'Baz Luhrmann', 2013, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FGreat-Gatsby-Leonardo-DiCaprio%2Fdp%2FB00E1L5J9I&psig=AOvVaw0', $horror),
    new Movies('The Lord of th Rings: The Return of the King', 'Peter Jackson', 2003, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FLord-Rings-Fellowship-Ring-Extended%2Fdp%2FB00005JNAQ&psig=AOvVaw0', new Genre('Fantasy')),
    new Movies('The Godfather', 'Francis Ford Coppola', 1972, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FGodfather-Collection-Blu-ray-Marlon-Brando%2Fdp%2FB00KXEM6ZG&psig=AOvVaw0', new Genre('Crime')),
];