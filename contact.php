<!--
    Contact&Information page
    Author: Niklas Schachl
    Version: 1.0
    Date: 17.6.2021
-->
<!DOCTYPE html>
<html lang="de">
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Kontakt&Lageplan - nLearn</title>
    </head>
    <body>
        <header>
            <img src="images/icon_logo.png" height="64" width="96" alt="logo">
            <h1><b id="n">n</b>Learn</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Startseite</a></li>
                    <li><a href="news.html">Aktuelles</a></li>
                    <li><a href="contact.php">Kontakt & Lageplan</a></li>
                    <li><a href="">Impressum</a></li>
                    <li><a href="">Datenschutz</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </nav>
        </header>
        <h2>Anfahrt & Lageplan</h2>
        <div class="contact">
            <h3>Lageplan</h3>
            nLearn<br>
            Fischergasse 30,<br>
            4600 Wels, Oberösterreich<br>
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=14.027051925659181%2C48.1562416020529%2C14.034132957458496%2C48.159018529766485&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/48.15763/14.03059">Größere Karte anzeigen</a></small>
        </div>
        <div>
            <h3>Kontakt</h3>
            <form action="contact.php" id="msgForm" method="post">
                Name: <br>
                <input type="text" id="txtField" name="txtField"><br>
                E-Mail: <br>
                <input type="email" id="emailField" name="emailField"><br>
                Nachricht: <br>
                <input type="text" id="msgField" name="msgField"><br>
                <input type="submit" value="Senden" name="submitButton">
                <span style="color:firebrick" id="errorMsg"></span><br>
                <script src="checkForm.js" type="text/javascript"></script>
            </form>
        </div>
        <?php
            if(isset($_POST["submitButton"]) && $_POST["submitButton"] == "Senden")
            {
                $name = $_POST['txtField'];
                $email = $_POST['emailField'];
                $message = $_POST['msgField'];

                $filename = "msg-".$name.".csv";
                $file = fopen($filename, "w");

                $msg = $name.";".$email.";".$message;
                fwrite($file, $msg);

                fclose($file);
            }
        ?>
        <footer>
            Copyright (C) 2021 nLearn<br>
            Copyright (C) 2021 Niklas Schachl<br>
            Alle Rechte vorbehalten<br>
            Informationen zum Datenschutz finden sie <a href="">>>hier<<</a>
        </footer>
    </body>
</html>