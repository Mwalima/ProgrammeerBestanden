<?php
include_once "DBConnect.class.php";
include_once "Image.class.php";
include_once "File.class.php";

$db_handle = DBConnect::getInstance();
$thumbImage = new File($db_handle);

$frame = new Thumb($db_handle);

// Haal de users op uit de database
$thumbs = $thumbImage->getThumbs();

// Bouw de HTML code voor de afbeeldingen
$frames = "";
foreach ($thumbs as $thumb) {
    $frames .= $thumb->showFrame();
}

// Toon de pagina:
?>
<html>
    <head>
        <title>Mobach exposition</title>
        <link rel="stylesheet" type="text/css" href="opmaak.css">
    </head>
    <body>
        <?php
        echo $frames;
        ?>		
    </body>
</html>