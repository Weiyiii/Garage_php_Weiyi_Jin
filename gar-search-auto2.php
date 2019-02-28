<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-search-auto2</title>
</head>
<body>
<h1>garage zoek op autokenteken 2</h1>
<p>
    Op autokenteken gegevens zoeken uit de
    tabel auto van de database garage
</p>
<?php
//autokenteken uit het formulier halen --------------------------------
$autokenteken = $_POST ["autokentekenvak"];

// klantgegevens uit de tabel halen ------------------------------
require_once "gar-connect.php";

$klanten = $conn->prepare(" 
                                                select  autokenteken,
                                                        automerk,
                                                        autotype,
                                                        autokmstand,
                                                        klantid
                                                from    auto
                                                where   autokenteken = :autokenteken        
        
                                            ");
$klanten->execute (["autokenteken" => $autokenteken]);
echo "<table>";
foreach($klanten as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto ["autokenteken"]            ."</td>";
    echo "<td>" . $auto["automerk"]          ."</td>";
    echo "<td>" . $auto["autotype"]         ."</td>";
    echo "<td>" . $auto["autokmstand"]      ."</td>";
    echo "<td>" . $auto["klantid"]        ."</td>";
    echo "</tr>";
}
echo "</table><br/>";
echo "<a href='gar-menu.php'> terug naar het menu</a>";
?>
</body>
</html>





