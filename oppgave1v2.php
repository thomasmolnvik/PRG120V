<!DOCTYPE html>
<html>
<head>
    <title>Skjema og hilsen</title>
</head>
<body>
    <form method="post">
        Fornavn: <input type="text" name="fornavn"><br><br>
        Etternavn: <input type="text" name="etternavn"><br><br>
        <input type="submit" value="Fortsett">
        <input type="reset" value="Nullstill">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fornavn = $_POST['fornavn'];
        $etternavn = $_POST['etternavn'];

        echo "<p>God dag $fornavn $etternavn</p>";
    }
    ?>
</body>
</html>
