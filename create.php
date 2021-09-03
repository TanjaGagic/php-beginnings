<?php include_once 'config/init.php'; ?>
 
<?php
    $book = new Book;

    if(isset($_POST['submit'])) {
        $data = array();
        $data['book_title'] = $_POST['book_title'];
        $data['author'] = $_POST['author'];
        $data['category_id'] = $_POST['category'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];
        $data['contact_email'] = $_POST['contact_email'];

        if($book -> create($data)) {
            redirect('index.php', 'Your offer has been listed', 'success');
        } else {
            redirect('index.php', 'Something went wrong', 'error');
        }
    }
    $template = new Template('./templates/real-create.php');

    $template -> categories = $book -> getCategories();

    echo $template;
