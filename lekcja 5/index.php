<?php
session_start();

   if(isset($_POST['button'])){
    $login1 = $_POST['login'];
    $password1 = sha1($_POST['password']);

    $_SESSION['password1'] = $password1;
    $_SESSION['login1'] = $login1;

    if(isset($_SESSION['login1']) && isset($_SESSION['password1']))
    echo "sesja utworzona";
   }

 /*   
 echo "Zalogowałeś się! " . htmlspecialchars($_POST['login']) . " ";
}else{
    echo "Klinknij aby sie zalogowac";
}    
echo readfile("webdictionary.txt"); */ // Funckja ta umozliwia wyswietlenie zawartosci pliku TXT w twoim kodzie 
?>

<html>
    <head>
        <title>Zadanie</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./2index.php" method="POST">
        <b> Podaj Login </b>
        <input type="text" name="login"> <br>
        <b> Podaj Haslo </b>
        <input type="password" name="password"> <br>
        <input type="submit" name="button" value="send"><br>
</form>
</body>
</html>