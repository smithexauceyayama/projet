<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> Ceci est un paragraphe HTML</p>
    <?php
    echo "Ceci a été ecrit en php <br/>" ;
    print "Ceci est toujours afficher en php grace à print <br/>";
    $mavariable = array (
        array('Exauce', 24, 'exauceyayama@gmail.com'),
        array('smith', 45, 'smith@gmail.com'),
        array('yayama', 19,'yayama@gmail.com')
    );
    echo 'Nom:'. $mavariable[0][0] .'<br/>' .'Age:'. $mavariable[0][1].'<br/>'.'Mail:'. $mavariable[0][2].'<br/>';
        echo 'Nom: <br/>'.$mavariable[$i][$i]. 'Age:<br/>'. $mavariable[$i][$j] . 'Mail:<br/>'. $mavariable[$i][2];
   
    ?>
</body>

</html>