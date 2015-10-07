<?php

interface iImage {

    public function checkFileName($fileName);

    public function showImage($fileName);

    public function showFrame();
}

class Thumb implements iImage {

    private $id;
    private $name;
    private $thumb;
    private $image;

    public function __construct($nId = "", $nName = "", $nThumb = "", $nImage = "") {
        $this->id = $nId;
        $this->name = $nName;
        $this->thumb = $nThumb;
        $this->image = $nImage;
    }

    public function getId() {
        return $id;
    }

    public function setId($aId) {
        $this->id = $aId;
    }

    public function getName() {
        return $Name;
    }

    public function setName($aName) {
        $this->name = $aName;
    }

    public function getThumb() {
        return $thumb;
    }

    public function setThumb($aThumb) {
        if ($this->checkFileName($aThumb)) {
            $this->thumb = $aThumb;
        } else {
            throw new Exception("Invalid filetype for '" . $aThumb . "'.");
        }
    }

    public function getImage() {
        return $Image;
    }

    public function setImage($aImage) {
        if ($this->checkFileName($aImage)) {
            $this->image = $aImage;
        } else {
            throw new Exception("Invalid filetype for '" . $aImage . "'.");
        }
    }

    public function checkFileName($fileName) {
        $explode = explode(".", $fileName);
        $ext = end($explode);
        $types = array("png", "jpg", "gif");

        foreach ($types as $type) {
            if ($type == $ext) {
                return true;
            }
        }

        return false;
    }

    public function showImage($fileName) {
        $result = "<img src='" . $fileName . "' alt='Image #" . $this->id . "' border='1' />";
        return $result;
    }

    public function showFrame() {
        $thumb = $this->thumb;
        $image = $this->image;
        $id = $this->id;
        $result = "<div class='thumbs'><form action='achterkant.php' method='post'>";
        $result .= "<input type='hidden' name='idSubmit' value='" . $id . "'>";
        $result .= "<button type='submit' name='tumbSubmit' value='" . $image . "'><img src='" . $thumb . "' ></button>";
        $result .= "</form></div>";
        return $result;
    }

    function getField($label, $value) {
        return "<p class='passport'><label>" . $label . ":</label><span>" . $value . "</span></p>";
    }

}

?>