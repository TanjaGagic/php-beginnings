<?php include 'inc/header.php';?>
    <h2 class="page-header">Create an offer</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" class="form-control" name="category">
                <option value="0">Choose a category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id ?>"><?php echo $category -> name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label>Book title</label>
            <input type="text" class="form-control" name="book_title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
        <br><br>
    </form>
<?php include 'inc/footer.php';?>