<?php include 'inc/header.php';?>
    <h2 class="page-header">Edituj oglase za nekretnine</h2>
    <form method="POST" action="edit.php?id=<?php echo $book -> id; ?>"">
        <div class="form-group">
            <label>Kompanija</label>
            <input type="text" class="form-control" name="company" value="<?php echo $book -> author; ?>">
        </div>
        <div class="form-group">
            <label>Kategorija</label>
            <select type="text" class="form-control" name="category">
                <?php foreach($categories as $category): ?>
                    <?php if($book -> category_id == $category_id) :?>
                        <option value="<?php echo $category -> id ?>" selected ><?php echo $category -> name; ?></option>
                    <?php else :?>
                        <option value="<?php echo $category -> id ?>"><?php echo $category -> name; ?></option>
                    <?php endif;?>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label>Naziv nekretnine</label>
            <input type="text" class="form-control" name="book_title" value="<?php echo $book -> book_title; ?>">
        </div>
        <div class="form-group">
            <label>Opis</label>
            <textarea class="form-control" name="description">value="<?php echo $book -> description; ?>"</textarea>
        </div>
        <div class="form-group">
            <label>Cena</label>
            <input type="text" class="form-control" name="price" value="<?php echo $book -> price; ?>">
        </div>
        <div class="form-group">
            <label>Kontakt Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $book -> contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Postavi" name="submit">
        <br><br>
    </form>
<?php include 'inc/footer.php';?>