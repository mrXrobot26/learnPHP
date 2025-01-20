<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learnPHP</title>
</head>

<body>




    <ul>

        <?php foreach ($myFiltter as $book): ?>

            <li> <?= $book['name'] ?> by <?= $book['auther'] ?> </li>

        <?php endforeach; ?>

    </ul>


</body>

</html>