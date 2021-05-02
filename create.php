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
    
    <form action="create_process.php" method="post">
    <p><input type="text" name="title" id="" placeholder="Title"></p>
    <p><textarea name="discription" id="" cols="30" rows="10" placeholder="discription"></textarea></p>
    <input type="submit" value="submit">
    </form>
    
    <?php
    require('./lib/bottom.php');
    ?>

</body>
</html>