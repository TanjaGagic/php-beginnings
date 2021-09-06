<?php include 'inc/header.php';?>
<h2 class="page-header"><?php echo $book -> book_title; ?></h2>
<small>Written by <?php echo $book -> author;?> on <?php echo $book-> post_date;?></small>
<hr>
<p class="lead"><?php echo $book -> description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Author:</strong> <?php echo $book -> author; ?></li>
    <li class="list-group-item"><strong>Price:</strong> <?php echo $book -> price; ?></li>
    <li class="list-group-item"><strong>E-mail:</strong> <?php echo $book -> contact_email; ?></li>
</ul>
<br><br>
<a href="index.php">Go back</a>
<br><br>


<div class="well">
    <a href="edit.php?id=<?php echo $book -> id ?>" class="btn btn-success">Edit</a>

    <form style="display: inline;" method="POST" action="book.php">
        <input type="hidden" name="del_id" value="<?php echo $book -> id; ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>
<br>
<?php include 'inc/footer.php';?>