
<?php require('database_open.php')?>

<?php
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="INSERT INTO notes(title, description)
                      VALUES('$title', '$description' )";

    mysqli_query($conn, $sql);
    header('Location: index.php');
?>

<!-t->
<?php require('database_close.php') ?>
