<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<h1> garage update auto 3</h1>
<p>
    Autogegevens wijzigen in de tabel
    auto van de database garage.
</p>
<?php
// klant gegevens uit het formulier halen ----------------------------------------------
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$klantid = $_POST["klantidvak"];

// updaten klantgegevens ---------------------------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare
("  
        update auto set       autokenteken       = :autokenteken,
                              automerk           = :automerk,
                              autotype           = :autotype,
                              autokmstand        = :autokmstand,
                              klantid            = :klantid    
                              where autokenteken      = :autokenteken
        ");
$sql->execute
([
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
    "klantid" => $klantid
]);

echo "De auto gegevens is gewijzigd. <br/>";
echo "<a href='gar-menu.php'> terug naar het menu</a>";
?>
</body>
</html>

