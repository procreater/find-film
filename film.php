<?php
    include "connect.php";
    if($_POST) {
        $types = $_POST["types"];
        $release_date = $_POST['film-date'];
        $imdb = $_POST['imdb'];
        $origin = $_POST['origin'];
        
        foreach($types as $key => $type) {
            if ($release_date != "full" && $imdb != "full") {
                
                $find = $db->query("SELECT * FROM films WHERE type = {$type} AND imdb >= {$imdb} AND origin = {$origin} AND release_date >= {$release_date}");
                
            }else if($release_date == "full" && $imdb != "full" ) {
                
                $find = $db->query("SELECT * FROM films WHERE type = {$type} AND imdb >= {$imdb} AND origin = {$origin}");
                
            }else if($release_date !=full && $imdb == "full") {
                
                $find = $db->query("SELECT * FROM films WHERE type = {$type} AND origin = {$origin} AND release_date >= {$release_date}");
                
            }
        }
        
    }else {
        echo "error";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Film</title>
</head>
<body>
    <h2>Gelen veriler</h2>
    <table>
        <tr>
            <td>Türler: </td> <td><?php foreach($types as $key => $type){echo $type.", ";} ?></td>
        </tr>
        <tr>
            <td>Yayın Tarihi: </td> <td><?= $release_date ?></td>
        </tr>
        <tr>
            <td>IMDB: </td> <td><?= $imdb ?></td>
        </tr>
        <tr>
            <td>Köken: </td> <td><?= $origin ?></td>
        </tr>
    </table>
</body>
</html>