<?php
     require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

     $query = "SELECT * FROM pokedex_tier1";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'name: ' .$row['name'] .'<br>';
        echo 'id_pokemona: ' .$row['id_pokemona'] .'<br>';
        echo 'ilosc_CP: ' .$row['ilosc_CP'] .'<br><br>';
		echo 'rodzaj: ' .$row['rodzaj'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
?>