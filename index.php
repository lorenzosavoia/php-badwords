<?php
$string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure atque id laborum ipsa ut. Accusamus excepturi dicta praesentium culpa nam modi autem consectetur sed. Soluta corrupti placeat eaque dignissimos incidunt?';
$stringLength = strlen($string);
$text = $_GET["text"];
$stringChange = str_replace($text,'***', $string);
$stringChangeLength = strlen($stringChange);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testo originale</h1>
    <div>
        <?php echo $string?>
    </div>
    <h1>lunghezza testo originale</h1>
    <div>
    <?php echo $stringLength?>
    </div>
    
    <h2>Testo modificato</h2>
    <div>
        <?php echo $stringChange?>
    </div>
    <h2>lunghezza testo modificato</h2>
    <div>
        <?php echo $stringChangeLength?>
    </div>  
</body>
</html>