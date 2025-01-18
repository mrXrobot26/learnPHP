<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learnPHP</title>
</head>
<body>

    <?php
        $greeting = "Hello";
        $naming ="Ppl";
        echo $greeting . " " . $naming;

    ?>


  <?php
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
?>

<ul>

    <?php foreach($books as $book): ?>
    
        <li> <?= $book['name']?> by <?=$book['auther']?> </li>

    <?php  endforeach; ?>

</ul>





</body>
</html>