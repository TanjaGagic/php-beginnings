<?php
class Book {
    private $db;
 
    public function __construct() {
        $this -> db = new Database;
    }

    // Uzmi sve nekretnine iz baze
    public function getAllBooks() {
        $this -> db -> query("SELECT book.*, categories.name AS cname
                            FROM book
                            INNER JOIN categories
                            ON book.category_id = categories.id
                            ORDER BY post_date DESC
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi sve kategorije
    public function getCategories() {
        $this -> db -> query("SELECT *FROM categories");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi nekretnine po kategoriji
    public function getByCategory($category) {
        $this -> db -> query("SELECT book.*, categories.name AS cname
                            FROM book
                            INNER JOIN categories
                            ON book.category_id = categories.id
                            WHERE book.category_id = $category
                            ORDER BY post_date DESC
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi jednu kategoriju
    public function getCategory($category_id) {
        $this -> db -> query("SELECT * FROM categories WHERE id = :category_id");

        $this -> db -> bind(':category_id', $category_id);

        //uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Uzmi jednu nekretninu
    public function getbook($id) {
        $this -> db -> query("SELECT * FROM book WHERE id = :id");

        $this -> db -> bind(':id', $id);

        // uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Kreiraj nekretninu
    public function create($data) {
        $this -> db -> query("INSERT INTO book (category_id, book_title, author, description, price, contact_email)
                            VALUES (:category_id, :book_title, :author, :description, :price, :contact_email)");

        // Bind data
        $this -> db -> bind(':category_id', $data['category_id']);
        $this -> db -> bind(':book_title', $data['book_title']);
        $this -> db -> bind(':author', $data['author']);
        $this -> db -> bind(':description', $data['description']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':contact_email', $data['contact_email']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Obrisi nekretninu
    public function delete($id) {
        $this -> db -> query("DELETE FROM book WHERE id = $id");

        // Execute
        if($this -> db -> execute()) {
        return true;
        } else {
        return false;
        }
    }

    // Update nekretnine
    public function update($id, $data) {
        $this -> db -> query("UPDATE book SET category_id = :category_id, book_title = :book_title, author = :author, description = :description, price = :price, contact_email = :contact_email WHERE id = $id");

        // Bind data
        $this -> db -> bind(':category_id', $data['category_id']);
        $this -> db -> bind(':book_title', $data['book_title']);
        $this -> db -> bind(':author', $data['auhtor']);
        $this -> db -> bind(':description', $data['description']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':contact_email', $data['contact_email']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }
}