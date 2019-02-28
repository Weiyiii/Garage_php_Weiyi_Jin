<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1>garage update auto 2</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens te wijzigen
    in de tabel klant van de database garage.
</p>
<?php
// klantid uit het formulier halen -----------------------------------
$autokenteken = $_POST["autokentekenvak"];

// klantgegevens uit de tabel halen ----------------------------------
require_once "gar-connect.php";

$auto = $conn->prepare(" 
                                            select autokenteken,
                                                   automerk,
                                                   autotype,
                                                   autokmstand,
                                                   klantid
                                            from   auto
                                            where  autokenteken = :autokenteken          
                                        ");
$auto->execute (["autokenteken" => $autokenteken]);


// klantgegevens in een nieuw formulier laten zien --------------------
echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($auto as $auto)
{
    //klantid mag niet gewijzigd worden
    echo "autokenteken: <input type='text' ";
    echo " name  = 'autokentekenvak' ";
    echo " value = '" .$auto["autokenteken"]. "' ";
    echo "><br/>";

    echo " automerk: <input type='text' ";
    echo " name = 'automerkvak' ";
    echo "value = '" . $auto["automerk"]. "' ";
    echo "><br/>";

    echo " autotype: <input type='text' ";
    echo " name  = 'autotypevak' ";
    echo " value = '" .$auto["autotype"]. "' ";
    echo "> <br/>";

    echo " autokmstand: <input type='text' ";
    echo " name  = 'autokmstandvak' ";
    echo " value ='" .$auto["autokmstand"]. "' ";
    echo "><br />";

    echo " klantid: <input type='text' ";
    echo " name  = 'klantidvak' ";
    echo " value ='" .$auto["klantid"]. "' ";

    echo "> <br/>";

}
echo "<input type='submit'>";
echo "</form>";

// er moet eingelijk nog gecontroleerd worden op een bestaand klantid
?>
</body>
</html>































