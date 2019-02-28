<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/gar-style.css">
    <meta charset="UTF-8">
    <title>garage delete klant 1</title>
</head>
<body>
    <h1>garage delete klant 1</h1>
    <p>
        Dit formulier zoekt een klant op uit
        de tabel klanten van database garage
        om hem te kunnen verwijderen.
    </p>
    <form action="gar-delete-klant2.php" method="post">
        Welke klantid wilt u verwijderen?
        <input type="text" name="klantidvak"><br/>
        <input type="submit">
    </form>
</body>
</html>