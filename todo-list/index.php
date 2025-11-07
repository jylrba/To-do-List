<?php require('database_open.php'); ?>
<?php include('header.php')?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 10px 20px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Todolist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" >
        <a href="add_form.php"><i class="fa-solid fa-plus" style="color: grey; font-size: 20px;"></i></a>
    </form>

  </div>
</nav>

<main class="container" >
<div class="row g-2" style="margin-top: 10px; ">
        <?php
    $sql = "SELECT * FROM notes";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    ?>
       
       
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
       
        <div class="card col-6 col-md-3 my-3" style="width: 18rem; margin: 5px">
            <div class="card-body">
                <h3><?php echo $row['title']?></h3>
                <p class="card-text" style="margin-bottom: 50px"><?php echo $row['description']?></p>
                <div style="display: inline-block;  position: absolute; right: 0; bottom: 0; padding: 10px">
                <a style="font-size: 20px; color: #000; margin-right: 5px;" href="delete_action.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a> 
                <a style="font-size: 20px; color: #000;" href="edit_form.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    
                </div>
            </div>
        </div>
    <?php
    }
    ?>
        </div>
    <?php
    }
    ?>

   
</main>

<script>
    document.getElementById("add-button").addEventListener("click", function(){
        window.location.href = "add_form.php";
    });
</script>


<?php include('footer.php') ?>

<?php
    require('database_close.php');
?>
