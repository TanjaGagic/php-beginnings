<?php
    include 'db/config.php';
    
    if(!$_GET['id']){
        echo 'error';
    }else{
        $id =$_GET['id'];
        $result = $crud ->deleteApplication($id);

        if($result){
            header("Location: applications.php");
        }
        else{
            echo 'error';
        }
    }
?>