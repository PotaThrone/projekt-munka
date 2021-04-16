<?php
session_start(); ?>


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
        <a href="index.php" class="current"><div>Kezdőlap</div></a>
        <a href="filmek.php"><div>Filmek  </div></a>
        <a href="sorozatok.php"><div>Sorozatok</div></a>
        <a href="jatekok.php"><div>Játékok</div></a>
        <?php if (isset($_SESSION["user"])) { ?>
            <a href="profile.php" ><div>Profil</div></a>
        <?php } else { ?>
            <a href="urlapos.php" ><div>Regisztráció/Belépés</div></a>
        <?php } ?>
    </nav>
</header>
<main>
    <article>
        <section id="abszolut">
            <strong>Heti ajánló: Cherry (2021)</strong> <br/>
            <video controls  width="480" height="270">
                <source src="video/cherry.mp4">
            </video>
        </section>
        <section id="kezdolap">
           <p>Tessék egy profi kritika is a fent említett filmről:</p>
            <iframe width="800" height="400" src="https://www.puliwood.hu/kritikak/cherry-kritika-291857.html"></iframe></section>
    </article>
    <article>
        <section id="kezdolap2">
            <h2>Üdvözöllek az oldalon!</h2>
            <p id="elsobetu">Az oldal lényege, hogy tudjunk nektek ajánlani filmeket, sorozatokat, játékokat és ezekről egy rövid leírást adunk.
                A filmek menüponton eljutthatsz a filmek közé <i>(obviously)</i>, itt megtalálhatod a számodra megfelelő filmet (talán). Minden héten a <mark>Kezdőlapon</mark> kiteszünk egy előzetest a <span id="dolt">"Heti ajánló"</span> cím alatt.
            A játékok két szempont szerint vannak csoportosítva: Egyjátékos, Többjátékos. Ide még jön szöveg....</p>


        </section>
    </article>
    <aside id="gyorsgomb">
        <a href="filmek.php"><img src="img/film.png" width="100" height="100"  title="film" alt="film" /></a>
        <a href="sorozatok.php"><img src="img/sorozatok.png" width="100" height="100"  title="sorozatok" alt="sorozatok" /></a>
        <a href="jatekok.php"><img src="img/jatek.png" width="100" height="100"  title="jatek" alt="jatek" /></a>
    </aside>
</main>
<?php
    include "footer.php";
?>
</body>
</html>