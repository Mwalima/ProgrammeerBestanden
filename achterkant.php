<?php
require_once "File.class.php";
require_once './DBConnect.class.php';
?>

<html>
    <head>
        <title>Mobach exposition</title>
        <link rel="stylesheet" type="text/css" href="opmaak.css">
    </head>
    <body>
        <?php
        $db_handle = DBConnect::getInstance();
        $image = new File($db_handle);
        if (isset($_POST["tumbSubmit"])) {
            $tumbSubmit = $_POST["tumbSubmit"];
            $galleryImage = $image->getNextImage($_POST["tumbSubmit"]);
            foreach ($galleryImage as $gallery) {//var_dump($gallery['id']);
            }
        }

        //haal grote foto door post van thumbnail
        $result = "<div class='thumbs'><form action='gallery.php' method='post'>";
        $result .= "<input type='hidden' name='idSubmitImage' value='" . $gallery['id'] . "'>";
        $result .= "<div class='bigImage'><button type='submit' name='ImageSubmit'value='" . $gallery['img'] . "'><img src='" . $tumbSubmit . "' ><img src='arrow.png'></button>";
        $result .= "</div></form></div>";
        echo $result;
        ?>		
    </body>
</html>