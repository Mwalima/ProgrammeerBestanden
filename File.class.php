<?php

class File {

    public $dbh;

    public function __construct($db_handle) {
        $this->dbh = $db_handle;
    }

    public function getThumbs() {
        $sql = "SELECT * FROM thumbs";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $image = array();
        foreach ($result as $row) {
            $image[] = new Thumb($row["id"], $row["name"], $row["thumb"], $row["img"]);
        }

        return $image;
    }

    public function getNextImage($id) {
        $id = $_POST["idSubmit"];
        $id = $id + 1;

        $sql = "SELECT id,img FROM thumbs where id = '" . $id . "'";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            
        }
        return $result;
    }

    public function getNextGalleryImage($id) {
        $id = $_POST['idSubmitImage'];
        $id = $id + 1;

        $sql = "SELECT id,img FROM thumbs where id = '" . $id . "'";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            
        }
        return $result;
    }

}

?>