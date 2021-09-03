<?php include_once 'config/init.php'; ?>
  
<?php
    $book = new Book;

    $book_id = isset($_GET['id']) ? $_GET['id'] : null;

    if(isset($_POST['submit'])) {
        $data = array();
        $data['book_title'] = $_POST['book_title'];
        $data['author'] = $_POST['author'];
        $data['category_id'] = $_POST['category'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];
        $data['contact_email'] = $_POST['contact_email'];

        if($book ->update($book_id, $data)) {
            redirect('index.php', 'Your offer has been updated', 'success');
        } else {
            redirect('index.php', 'Something went wrong', 'error');
        }
    }
    $template = new Template('./templates/book-edit.php');

    $template -> book = $book -> getBook($book_id);
    $template -> categories = $book -> getCategories();

    echo $template;