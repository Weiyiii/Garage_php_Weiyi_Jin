<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tafel
    klant in de database garage.
</p>
<?php
// klantgegevens uit het formulier halen ---------------------------------------------------
$klantid         = NULL;                //komt niet uit het formulier (autoincrement)
$klantnaam       = $_POST ["klantnaamvak"];
$klantadres      = $_POST ["klantadresvak"];
$klantpostcode   = $_POST ["klantpostcodevak"];
$klantplaats     = $_POST ["klantplaatsvak"];

// klantgegevens invoeren in de tabel ------------------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
                                insert into klant values  
                                (
                                        :klantid, :klantnaam, :klantadres,
                                        :klantpostcode, :klantplaats
                                )
                            ");

//        $sql->bindParam(":klantid",           $klantid);
//        $sql->bindParam(":klantnaam",         $klantnaam);
//        $sql->bindParam(":klantadres",        $klantadres);
//        $sql->bindParam(":klantplaats",       $klantplaats);
//
//        $sql-> execute();
// manier 2 -------------------------------------------------------------------------------

$sql->execute([
    "klantid"           =>  $klantid,
    "klantnaam"         =>  $klantnaam,
    "klantadres"        =>  $klantadres,
    "klantpostcode"     =>  $klantpostcode,
    "klantplaats"       =>  $klantplaats,
]);


echo "de klant is toegevoegd";
echo "<a href='gar-menu.php'> terug naar het menu</a>";


?>
</body>
</html>