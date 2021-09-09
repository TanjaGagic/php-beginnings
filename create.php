<?php include_once 'lib/init.php'; ?>
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
    $template = new Template('./templates/book-create.php');
    $template -> categories = $book -> getCategories();

    echo $template;
/* $errors = [];
$data = [];

if (empty($_POST['author'])) {
    $errors['author'] = 'Field is required.';
}

if (empty($_POST['book_title'])) {
    $errors['book_title'] = 'Field is required.';
}

if (empty($_POST['Description'])) {
    $errors['description'] = 'Field is required.';
}

if (empty($_POST['price'])) {
    $errors['price'] = 'Field is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Field is required.';
}

if (empty($_POST['category_id'])) {
    $errors['category_id'] = 'Field is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);
*/

    