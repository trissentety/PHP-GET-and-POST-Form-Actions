<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>PHP GET and POST Methods</h2>
    <form action="index.php" method="post">
        <bold><label>POST Method (Same URL with no caching)</label></bold><br>
        <label>Input amount of tennis rackets to buy for $29.99 each to reveal total</label><br>
        <input type="text" name="amount">
        <input type="submit" value="Total Cost">
    </form>
    <?php
    $item = "tennis racket";
    $price = "29.99";
    $amount = $_POST["amount"];
    $value = null;

    $value = $amount * $price;
    echo "You ordered {$amount} {$item}s<br>";
    echo "Final price is \${$value}";
    ?>
    <form action="index.php" method="get"> <!-- where to send information to -->
        <br>
        <bold><label>GET Method (Changes URL)</bold></label><br>
        <label>Input Name</label><br>
        <input type="text" name="name"><br>
        <label>Input favorite genre of movie</label><br>
        <input type="password" name="movieGenre"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$name = $_GET["name"];
$movieGenre = $_GET["movieGenre"];
echo "{$name} loves to watch {$movieGenre} movies!";
