<?php include 'inc/header.php';?>
<h2 class="page-header"><?php echo $book -> book_title; ?>(<?php echo $book -> location; ?>)</h2>
<small>Objavio <?php echo $book -> contact_agent;?> on <?php echo $book-> post_date;?></small>
<hr>
<p class="lead"><?php echo $book -> description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Kompanija:</strong> <?php echo $book -> author; ?></li>
    <li class="list-group-item"><strong>Cena:</strong> <?php echo $book -> price; ?></li>
    <li class="list-group-item"><strong>Kontakt Email:</strong> <?php echo $book -> contact_email; ?></li>
</ul>
<br><br>
<a href="index.php">Idi nazad</a>
<br><br>
<div class="well">
    <a href="edit.php?id=<?php echo $book -> id ?>" class="btn btn-success">Edit</a>

    <form style="display: inline;" method="POST" action="book.php">
        <input type="hidden" name="del_id" value="<?php echo $book -> id; ?>">
        <input type="submit" class="btn btn-danger" value="Obriši">
    </form>
</div>
<br>
<?php include 'inc/footer.php';?>