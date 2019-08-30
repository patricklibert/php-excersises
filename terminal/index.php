<?php
include "terminal.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script>
        var commandoIndexer = 0;
        var commandoOutputIndexer = 0;
    </script>
    <script src="output.js"></script>

    <title>Terminal</title>
</head>
<body>
    <div id="listcommands">

    </div>

    <div id="responsecommands">

        <?php if(isset($_POST['fname'])) {
            $command = $_POST['fname'];
            $OneTerminal = new terminal();
            $returncommand = $OneTerminal->execute($command);

            



        }  ?>






    </div>





    <form action="" method="POST" name="keysubmit" autocomplete="off" id="myform">
        <div class="cursor">
            <label id="prompt">redman@redman-XPS-13-9360:/var/www/ubuntu/php-excersises/terminal$ </label>
        <input type="text" name="fname" id="commands" class="blinking-cursor" autofocus>
        </div>
    </form>
    <script src="commandos.js"></script>
    <script>
        document.onkeydown = function() {
            if (window.event.key === "Enter") {

                writecookie();
                document.forms['myform'].submit();
            }
        }
    </script>
    <script src="script.js"></script>
    <?php if (isset($_POST['fname'])) {
    echo '<script>',

            'setCookieOutput("' . $returncommand . '");',


         'console.log(document.cookie);',




   '</script>';
    }

?>




    <script>
        let someText = "<?php echo $returncommand ?>";
        //someText = someText.replace(/(\r\n|\n|\r)/gm," ");
        //console.log(someText);
       // document.getElementById("prompt").style.display = "none";
        showText("#white", someText, 0, 20);

    </script>
</body>
</html>
