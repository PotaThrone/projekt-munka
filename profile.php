<?php
session_start();

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kezdőlap</title>
    <meta name="author" content="Nagy György, Benák Ádám"/>
    <meta name="description" content="Ez a kezdőlap" />
    <link rel="stylesheet" href="css/style.css"  />
    <meta name="keywords" content="Filmek, Játékok, Sorozatok" />
    <meta name="generator" content="WebStrom" />
    <link rel="icon" href="img/icon.jpg" sizes="180x180" />
</head>
<body>
<header>
    <img src="img/header.jpg" title="header" alt="header">
    <nav>
        <a href="index.php"><div>Kezdőlap</div></a>
        <a href="filmek.php"><div>Filmek  </div></a>
        <a href="sorozatok.php"><div>Sorozatok</div></a>
        <a href="jatekok.php"><div>Játékok</div></a>
        <?php if (isset($_SESSION["user"])) { ?>
            <a href="profile.php" class="current"><div>Profil</div></a>
        <?php } else { ?>
            <a href="urlapos.php" class="current"><div>Regisztráció/Belépés</div></a>
        <?php } ?>
    </nav>
</header>
<main>
    <h2>Profilom</h2>
    <hr/>

    <?php

    echo "<ul>";
    echo "<li>Felhasználónév: " . $_SESSION["user"]["username"] . "</li>";
    echo "<li>Teljes név: " . $_SESSION["user"]["full-name"] . "</li>";
    echo "<li>Nem: " . (($_SESSION["user"]["sex"] === 'f' ? "Nő" : $_SESSION["user"]["sex"] === 'm') ? "Férfi" : "Egyéb" ) . "</li>";
    echo "<li>Hobbik: " . implode(", ", $_SESSION["user"]["hobby"]) . "</li>";
    echo "<li>Születesi dátum: " .  ($_SESSION["user"]["date-of-birth"]) . "</li>";
    echo "</ul>";
    ?>
    <a href="logout.php" >Kijelentkezés</a>
</main>

<?php
include "footer.php";
?>
</body>
</html>