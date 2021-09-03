

<?php include_once 'config/init.php'; ?>

<?php
    $book = new book;

    $template = new Template('./templates/frontpage.php');

    $category = isset($_GET['category']) ? $_GET['category'] : null;

    if($category) {
        $template -> books = $book -> getByCategory($category);
        $template -> title = 'Nekretnine u kategoriji: '. $book -> getCategory($category)->name;
    } else {
        $template -> title = 'Najnoviji oglasi';
        $template -> books = $book -> getAllBooks();
    }
 
    $template -> categories = $book -> getCategories();
    
    echo $template;
?>