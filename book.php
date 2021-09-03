<?php include_once 'config/init.php'; ?>
 
<?php
    $book = new Book;

    if(isset($_POST['del_id'])) {
        $del_id = $_POST['del_id'];
        if($book -> delete($del_id)) {
            redirect('index.php', 'Offer Deleted', 'success');
        } else {
            redirect('index.php', 'Offer Not Deleted', 'error');
        }
    }
 
    $template = new Template('./templates/real-single.php');

    $book_id = isset($_GET['id']) ? $_GET['id'] : null;

    $template -> book = $book -> getBook($book_id);

    echo $template;
?>