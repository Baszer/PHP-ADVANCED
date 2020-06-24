<?php
$bas = array("Naam"=>"Bas", "Leeftijd"=>"17", "Klas"=>"9D", "Muziek"=>"Trap", "Fietsmerk"=>"Altec", "Woonplaats"=>"Hoofddorp", "Eten"=>"Broodje kroket");
?>

<style>
body{
    color: <?php echo $_POST["color"]; ?> ;
    background-color: <?php echo $_POST["backgroundColor"]; ?> ;
}

table, tr, th,td{
    padding: <?php echo $_POST["padding"]; ?> ;
    border: solid black <?php echo $_POST["tabelBorder"]; ?>px ;
    border-collapse: collapse ;

}


    
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>

<?php
foreach ($bas as $genre=>$info){
    echo "<tr>";
    echo "<th>".$genre."</th>";
    echo "<td>".$info."</td>";
    echo "</tr>";
}

?>
</table>



</body>
</html>