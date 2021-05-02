<?php
 require('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            print_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="index.php">web</a></h1>
    <ol>
        <?php
        print_list();
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php 
        if(isset($_GET['id'])){?>
        <a href="update.php?id=<?=$_GET['id']?>">update</a>
        <!-- <a href="delete_process.php?id=<?=$_GET['id']?>">delete</a> -->
        <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value=<?php echo $_GET['id'] ?>>
            <input type="submit" value="delete">
        </form>
       <?php }?>
    <?php
    require('./lib/bottom.php');
    ?>
</body>
</html>