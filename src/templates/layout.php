<?php 
    include_once __DIR__ . '/../model/Connection.php';
    error_reporting (-1); 
    ini_set ("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Travel to Armenia</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <nav>
                <h1 id="titlePage"><a href="index.php?page=home">Travel to Armenia ✈️</a></h1>
                <ul>
                    <li><a class="button" href="index.php?page=home">Home</a></li>
                    <li><a class="button" href="index.php?page=topics">Topics</a></li>
                    <li><a class="button" href="index.php?page=contact">Contact</a></li>
                    <?php 
                    session_start ();
                    $co = new Connection ();             
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ($co->ok_password ($_POST['email'], $_POST['pass']) || $co->ok_password ($_POST['emailError'], $_POST['passError'])) {
                                session_regenerate_id (true);
                                $_SESSION['username'] = "admin";
                                header('Location: index.php?page=dashboard');
                        } 
                    }
                    if($_SESSION['username'] == "admin") {
                        echo 
                        '<li><a class="button" href="index.php?page=dashboard">Dashboard</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </header>

        <?php if (isset($content)) { echo $content; } ?>

        <footer>
            <p>&copy; 2022 - Travel to Armenia - All rights reserved</p>
        </footer>
    </body>
</html>
