<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target </title>
</head>

<body>
    <p>Bonjour
        <?php
        
      echo $_POST["prenom"];
    ?>
        Fais comme chez toi !
    </p>
    tu ne t'appelles pas
    <?php
        echo $_POST["prenom"];
        ?>? </br>
    <a href="../menu/contact.php"></a>
    </p>

</body>

</html>