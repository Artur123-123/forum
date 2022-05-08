<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hobby.css">
    <title>Nasze hobby</title>
</head>
<body>
    <div id="baner">
        <h1>FORUM HOBBYSTYCZNE</h1>
    </div>
    <div id="lewy">
        <h3>FORMULARZ REJESTRACJI DO FORUM</h3>
        <form action="rejestracja.php" method="POST">
        <?php

            $nick = $_POST['nick'];
    
            $hobby = $_POST['hobby'];
    
            $zawod = $_POST['zawod'];

            $plec = $_POST['plec'];

            $login = $_POST['login'];

            $haslo = $_POST['haslo'];

            echo '<p>Konto '.$nick.' zostało zarejestrowane na forum hobbystycznym';

            $baza = mysqli_connect('localhost', 'root', '', 'Forum');

            $uzytkownicy = mysqli_query($baza, "INSERT INTO uzytkownicy(nick, zainteresowania, zawod, plec) VALUES ('$nick','$hobby','$zawod','$plec')");
    
            $konto = mysqli_query($baza, "INSERT INTO konta(login, haslo) VALUES ('$login','$haslo')");

            mysqli_close($baza);

        ?>
        </form>
    </div>
    <div id="prawy">
        <h3>TEMATYKA FORUM</h3>
        <ul>
            <li>Hodowla zwierząt</li>
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>
    </div>
</body>
</html>