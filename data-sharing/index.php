<?php
if (isset($_POST['inpUserName'])) {
    // collect value of input field
    $name = $_POST['inpUserName'];
    echo "Welcome, " . $name;
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="styles.css">
    <title>js-form</title>
</head>
<body>


<form action="" method="post">
    <fieldset class="wantoflex">
        <label for="inpUserName">Username:</label>
        <input type="text" id="inpUserName" name="inpUserName" required>

        <input class="zenden" type="submit" value="Submit">
    </fieldset>
</form>


<form action="" method="get">
    <fieldset class="wantoflex">
        <label for="inpRowNumbers">RowNumbers:</label>
        <input type="text" id="inpRowNumbers" name="inpRowNumbers" required>
        <input class="zenden" type="submit" value="Submit">
    </fieldset>
</form>

<?php
if (isset($_GET['inpRowNumbers'])) {

// collect value of input field
$rownumbers = $_GET['inpRowNumbers'];
echo "<table class='tableborder'>";
    for ($i = 0; $i <= $rownumbers; $i++) {
    echo "<tr><td class='tableborder'>" . $i . "</td></tr>";
    }
    echo "</table>";
}

?>
<form action="" method="post" onsubmit="setCookie();">
    <fieldset class="wantoflex">
        <label for="inpCookie">Cookie:</label>
        <textarea rows="4" cols="50" id="inpCookie" name="inpCookie"></textarea>
        <input class="zenden" type="submit" value="Submit">
    </fieldset>
</form>
<?php
if (isset($_COOKIE['joke'])) echo "Cookie value is: " . $_COOKIE['joke'];

?>
<script src="script.js"></script>
</body>
</html>




