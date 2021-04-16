<?php
session_start();
if (!isset($_SESSION["user"])) {

    header("Location: index.php");
}


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

    <style>
        #kijelentkezes{
            display: block;
            width: 90px;
            margin-left: 20px;
            padding: 15px;
            border: solid 2px black;
            background-color: #914805;
            text-decoration: none;
        }
        main{
            height: 500px;
        }
    </style>
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
    <?php

    $profilkep = "avatar/default.jpg";
    $utvonal = "avatar/" . $_SESSION["user"]["username"];

    $kiterjesztesek = ["png", "jpg", "jpeg"];

    foreach ($kiterjesztesek as $kiterjesztes) {
        if (file_exists($utvonal . "." . $kiterjesztes)) {
            $profilkep = $utvonal . "." . $kiterjesztes;
        }
    }
    ?>
    <h2>Profilom</h2>
    <img style="margin-left: 20px;" src="<?php echo $profilkep; ?>" alt="Profilkép" height="200" />


    <?php

    echo "<ul>";
    echo "<li>Felhasználónév: " . $_SESSION["user"]["username"] . "</li>";
    if( $_SESSION["user"]["full-name"] !== ""){ echo "<li>Teljes név: " . $_SESSION["user"]["full-name"] . "</li>";}
    echo "<li>Nem: " ; if($_SESSION["user"]["sex"] === 'm'){echo "Férfi";}else{if($_SESSION["user"]["sex"] === 'f'){echo "Nő";}else{echo "Egyéb";}}  "</li>";
    echo "<li>Hobbik: " . implode(", ", $_SESSION["user"]["hobby"]) . "</li>";
    if( $_SESSION["user"]["date-of-birth"] !== ""){echo "<li>Születesi dátum: " .  ($_SESSION["user"]["date-of-birth"]) . "</li>";}
    echo "</ul>";
    ?>

    <a href="logout.php" id="kijelentkezes">Kijelentkezés</a>
</main>

<?php
include "footer.php";
?>
</body>
</html>