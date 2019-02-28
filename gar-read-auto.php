<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
</head>
<body>
<h1>Auto read klant</h1>
<p>
    Dit zijn alle gegevens uit de tabel auto van de database garage.
</p>
<?php
// tabel uitlezen en netjes afdrukken -----------------------------------------------
require_once "gar-connect.php";

$klanten = $conn->prepare(" 
                                        select  autokenteken,
                                                automerk,
                                                autotype,
                                                autokmstand,
                                                klantid
                                        from    auto
                                        ");
$klanten-> execute();

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["autokenteken"]         ."</td>";
    echo "<td>" . $klant["automerk"]            ."</td>";
    echo "<td>" . $klant["autotype"]           ."</td>";
    echo "<td>" . $klant["autokmstand"]        ."</td>";
    echo "<td>" . $klant["klantid"]              ."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'>terug naar het menu</a>";
?>
</body>
</html>
