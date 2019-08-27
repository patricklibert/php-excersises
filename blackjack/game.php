<?php
session_start();
require "blackjack.php";
$_SESSION["player"] = new blackjack();
$_SESSION["dealer"] = new blackjack();
$playeralive = true;
if (isset($_POST['hit'])) {
    if (playeralive == true) {
        $_SESSION["player"]->hit();
        if ($_SESSION['player'] > 21) {
            echo "You lost. Score:" . $_SESSION['player']->score;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blackjack</title>
</head>
<body>
<div class="centered">
      <form action="">
        <input type="submit" name="hit" value="Hit" />
        <input type="submit" value="stand" />
        <input type="submit" value="surrender" />
    </form>
</div>
</body>



