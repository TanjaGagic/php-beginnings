

<?php include_once 'config/init.php'; ?>

<?php
    $book = new book;

    $template = new Template('./templates/frontpage.php');

    $category = isset($_GET['category']) ? $_GET['category'] : null;

    if($category) {
        $template -> books = $book -> getByCategory($category);
        $template -> title = 'Books in category: '. $book -> getCategory($category)->name;
    } else {
        $template -> title = 'Newest offers';
        $template -> books = $book -> getAllBooks();
    }
 
    $template -> categories = $book -> getCategories();
    
    echo $template;
?>