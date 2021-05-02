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
       <?php }?>
    
       <?php
    require('./lib/bottom.php');
    ?>

    
    <form action="update_process.php" method="post">
    <input type="hidden" name="old_title" value=<?php echo $_GET['id']?>>
    <p><input type="text" name="title" id="" value="<?php print_title(); ?>"></p>
    <p><textarea name="discription" id="" cols="30" rows="10" placeholder="discription"><?php
    print_discription() ?></textarea></p>
    <input type="submit" value="submit">
    </form>

</body>
</html>