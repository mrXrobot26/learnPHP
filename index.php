<?php
$greeting = "Hello";
$naming = "Ppl";





$books = [
    [
        'name' => 'Book 1',
        'auther' => 'bessa 1'
    ],
    [
        'name' => 'Book 2',
        'auther' => 'bessa 2'
    ],
    [
        'name' => 'Book 3',
        'auther' => 'bessa 3'
    ]
];


$myFiltter = array_filter($books, function ($book) {
    return $book['name'] == 'Book 1';
});



require "index.view.php";