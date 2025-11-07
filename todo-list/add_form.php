<?php require('database_open.php');?>
<?php include('header.php')?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 10px 20px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fa-solid fa-arrow-left" style="margin-right: 10px"></i> Todolist</a>
</nav>

<main class="container-fluid">

    <div class="container-fluit mt-4">
        <form action="add_action.php" method="POST" id="add">
            
            <div>
                
                <input type="text" class="form-control" name="title" id="title" placeholder="Title"/>
                <span id="title_error" class="message text-danger"></span>
            </div>

            <div>
                <textarea type="text" class="form-control" name="description" id="description" placeholder="Note something down"></textarea>
                <span id="description_error" class="message text-danger"></span>
            </div>
           
            <div class="mt-3">
                <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                <input type="submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php')?>
<?php require('database_close.php');?>
