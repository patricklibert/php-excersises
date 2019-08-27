<?php
if (isset($_POST['inpVoornaam'])) { echo $_POST['inpVoornaam'] . "<br>"; }
if (isset($_POST['inpFamilienaam'])) { echo $_POST['inpFamilienaam'] . "<br>"; }
if (isset($_POST['day'])) { echo $_POST['day']; }
if (isset($_POST['month'])) { echo $_POST['month']; }
if (isset($_POST['year'])) {
    $year10 = $_POST['year'] - 10;
    echo $year10 . "<br>";
}
if (isset($_POST['inpEmailadres'])) {
    $email = $_POST['inpEmailadres'];
    $name = explode("@", $email);
    echo $name[0];
}
if (isset($_FILES['inpPicture'])) {
    echo $_FILES['inpPicture']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["inpPicture"]["name"]);

    if (move_uploaded_file($_FILES["inpPicture"]["tmp_name"],$target_file)) {
        echo "File uploaded ok";
    } else {
        echo "not ok";
    }
    echo "<img src='images/" .  $_FILES['inpPicture']['name'] . "' alt='Girl in a jacket'>";

}


?>