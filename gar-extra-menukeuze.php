<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-extra-menukeuze.php</title>
</head>
<body>
<h1>Laat alle auto's met hun eigenaren zien</h1>
<p>
    Extra menu keuze, Als hier op geklikt wordt laat het alle auto's met hun eigenaren zien.
</p>
<?php
// tabel uitlezen en netjes afdrukken -----------------------------------------------
require_once "gar-connect.php";

$klanten = $conn->prepare(" 
                                        select  klantnaam,
                                                autokenteken,
                                                automerk,
                                                autotype,
                                                klant.klantid
                                                
                                        from    auto,klant
                                        WHERE klant.klantid = auto.klantid
                                        ");
$klanten -> execute();

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["klantnaam"]           ."</td>";
    echo "<td>" . $klant["autokenteken"]        ."</td>";
    echo "<td>" . $klant["automerk"]            ."</td>";
    echo "<td>" . $klant["autotype"]            ."</td>";
    echo "<td>" . $klant["klantid"]               ."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'>terug naar het menu</a>";
?>
</body>
</html>


