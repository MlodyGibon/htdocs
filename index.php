<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
<div>
    <div id="lewy">
        <h2>Ryby zamieszkujące rzeki</h2>
        <table class="tabela">
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Wysępowanie</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>




        </table>
    </div>

    <div id="prawy">
        <img src="ryba1.jpg" alt="sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
</div>

    <footer>
        <p>Stronę wykonał: Mateusz Tyda</p>
    </footer>
</body>

<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'wędkowanie');

mysqli_close($mysqli);
?>
</html>