<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tafel
    klant in de database garage.
</p>
<?php
// autogegevens uit het formulier halen ---------------------------------------------------
$autokenteken       = $_POST ["autokentekenvak"];
$automerk           = $_POST ["automerkvak"];
$autotype           = $_POST ["autotypevak"];
$autokmstand        = $_POST ["autokmstandvak"];
$klantid            = $_POST ["klantidvak"];

// autogegevens invoeren in de tabel ------------------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
                                insert into auto values  
                                (
                                        :autokenteken, :automerk,
                                        :autotype, :autokmstand, :klantid
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
    "autokenteken"      =>  $autokenteken,
    "automerk"          =>  $automerk,
    "autotype"          =>  $autotype,
    "autokmstand"       =>  $autokmstand,
    "klantid"           =>  $klantid,
]);


echo "de auto is toegevoegd";
echo "<a href='gar-menu.php'> terug naar het menu </a>";


?>
</body>
</html>