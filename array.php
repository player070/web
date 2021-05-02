<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    // $loh = array('크롬','프람','루미에');
    $loh = ['로잔나','발터','헬가'];
    array_push($loh, '아슬란','시안');
    array_push($loh, '솔피');
    // echo $loh[3];

    // $i = 0;
    // while($i < count($loh)){
    //     echo $loh[$i].'<br>';
    //     $i++;
    // }

    // echo '<br>';
    // print_r($loh);
    // echo '<br>';
    // var_dump($loh);

    $dir = './data';
    $files1 = scandir($dir);
    $files2 = scandir($dir,1);
    print_r($files2);
    ?>
</body>
</html> 