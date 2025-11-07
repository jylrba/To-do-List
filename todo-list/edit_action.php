<?php require('database_open.php')?>

<?php
    $id=$_POST['id'];
    $title=$_POST['title']; 
    $description=$_POST['description'];
   
    $sql="UPDATE notes SET title='$title', description='$description'  WHERE id=$id";

    mysqli_query($conn, $sql);
    header('Location: index.php');
?>

<?php require('database_close.php') ?>