<?php
    

    if(!$_GET['id']){
        echo 'error';
    }else{
        $id =$_GET['id'];
        $sql = "DELETE FROM predstave WHERE id_predstave='".$id."'";
        $mysqli->query($sql) or die($sql); 
    }
?>