<?php require_once 'lib/config.php'; ?>
<?php
    

    if(!$_GET['id']){
        function customError() {
            echo "<b>Error:</b> Error encountered. Entry not deleted. <br>";
            echo "Ending Script";
            die();
          }
          function set_error_handler("customError",E_USER_WARNING);
    }else{
        $id =$_GET['id'];
        $sql = "DELETE FROM book WHERE book_id='".$id."'";
        $mysqli->query($sql) or die($sql); 
    }
?>