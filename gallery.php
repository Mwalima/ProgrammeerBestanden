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
        //stuur hier het id naar de db en ga naar de volgende

        $db_handle = DBConnect::getInstance();
        $image = new File($db_handle);
        if (isset($_POST["idSubmitImage"])) {

            if ($_POST["idSubmitImage"] > 14) {
                $id = $gallery['id'] = 0;
                $gallery['img'] = "img/Jaan-Mobach-2keivormen1.JPG";
                echo "<div class='arrow'><a href='index.php'><img src='icon-home.png' width='128' heigth='128'></a></div>";
            } else {
                $id = $_POST["idSubmitImage"];
            }

            $galleryImage = $image->getNextGalleryImage($id);
            foreach ($galleryImage as $gallery) {
                
            }
        }

        $result = "<div class='thumbs'><form action='gallery.php' method='post'>";
        $result .= "<input type='hidden' name='idSubmitImage' value='" . $gallery['id'] . "'>";
        $result .= "<div class='bigImage'><button type='submit' name='ImageSubmit'value='" . $gallery['img'] . "'><img src='" . $gallery['img'] . "' ><img src='arrow.png' ></button>";
        $result .= "</div></form></div>";
        echo $result;
        ?>		
    </body>
</html>