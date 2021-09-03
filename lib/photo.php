<?php
class Photo {
    private $db;
 
    public function __construct() {
        $this -> db = new Database;
    }

    // Uzmi sve nekretnine iz baze
    public function getAllPhotos() {
        $this -> db -> query("SELECT photo.*, source.name AS sname
                            FROM photo
                            INNER JOIN source
                            ON photo.photo_id = source.photo_id
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi sve kategorije
    public function getSources() {
        $this -> db -> query("SELECT *FROM source");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi nekretnine po kategoriji
    public function getBySource($source) {
        $this -> db -> query("SELECT photo.*, source.name AS sname
                            FROM photo
                            INNER JOIN source
                            ON photo.photo_id = source.photo_id
                            WHERE photo.photo_id = $source
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi jednu kategoriju
    public function getSource($photo_id) {
        $this -> db -> query("SELECT * FROM source WHERE id = :photo_id");

        $this -> db -> bind(':photo_id', $photo_id);

        //uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Uzmi jednu nekretninu
    public function getPhoto($photo_id) {
        $this -> db -> query("SELECT * FROM photo WHERE photo_id = :photo_id");

        $this -> db -> bind(':photo_id', $photo_id);

        // uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Kreiraj nekretninu
    public function create($data) {
        $this -> db -> query("INSERT INTO photo (photo_id, date_taken, price, element)
                            VALUES (:photo_id, :date_taken, :price, :element)");

        // Bind data
        $this -> db -> bind(':photo_id', $data['photo_id']);
        $this -> db -> bind(':date_taken', $data['date_taken']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':element', $data['element']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Obrisi nekretninu
    public function delete($photo_id) {
        $this -> db -> query("DELETE FROM photo WHERE photo_id = $photo_id");

        // Execute
        if($this -> db -> execute()) {
        return true;
        } else {
        return false;
        }
    }

    // Update nekretnine
    public function update($photo_id, $data) {
        $this -> db -> query("UPDATE photo SET photo_id = :photo_id, date_taken = :date_taken, price = :price, element= :element WHERE photo_id = $photo_id");

        // Bind data
        $this -> db -> bind(':photo_id', $data['photo_id']);
        $this -> db -> bind(':date_taken', $data['date_taken']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':element', $data['element']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }
}