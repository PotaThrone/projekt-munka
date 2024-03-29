<?php
session_start();

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Sorozatok</title>
    <meta name="author" content="Nagy György, Benák Ádám"/>
    <meta name="description" content="Ez a sorozatokat mutatja be" />
    <link rel="stylesheet" href="css/style.css"  />
    <meta name="keywords" content="Series, Sorozatok" />
    <meta name="generator" content="WebStrom" />
    <link rel="icon" href="img/icon.jpg" sizes="180x180" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<header>
    <img src="img/header.jpg" title="header" alt="header">
    <nav>
        <a href="index.php"><div>Kezdőlap</div></a>
        <a href="filmek.php"><div>Filmek  </div></a>
        <a href="sorozatok.php" class="current"><div>Sorozatok</div></a>
        <a href="jatekok.php"><div>Játékok</div></a>
        <?php if (isset($_SESSION["user"])) { ?>
            <a href="profile.php" ><div>Profil</div></a>
        <?php } else { ?>
            <a href="urlapos.php" ><div>Regisztráció/Belépés</div></a>
        <?php } ?>
    </nav>
</header>
<main>
    <h1>Sorozatok</h1>
    <hr/>
    <article>
        <section>
            <table>
                <thead>
                <tr>
                    <th class="elso"></th>
                    <th>Infomáció</th>
                    <th>Rating 10/?</th>
                </tr>
                </thead>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0903747/?ref_=nv_sr_srsg_0"> <img src="img/bb.jpg" alt="A világ legjobb sorozata" title="A világ legjobb sorozata"/></a></td>
                    <td><span class="cim">Totál szívás </span>
                        <ul>
                            <li>Krimi,Dráma,Thriller</li>
                            <li>Szereplők: Bryan Cranston, Aaron Paul, Anna Gunn</li>
                            <li>A 11 csillag <b>nem véletlen</b> </li>
                            <li>2008-2013</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0108778/?ref_=nv_sr_srsg_0"> <img src="img/friends.jpg" alt="friends" title="friends"/></a></td>
                    <td><span class="cim">Jóbarátok</span>
                        <ul>
                            <li>Vígjáték</li>
                            <li>Szereplők: Jennifer Aniston, Courteney Cox, Lisa Kudrow</li>
                            <li>1994-2004</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt6445410/?ref_=nv_sr_srsg_0"> <img src="img/amkf.jpg" alt="amkf" title="amkf"/></a></td>
                    <td><span class="cim">A mi kis falunk </span>
                        <ul>
                            <li>Vígjáték</li>
                            <li>Szereplők: Éva Bata, Áron Molnár, Rozi Lovas</li>
                            <li>2017</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0264263/?ref_=nv_sr_srsg_4"> <img src="img/jackass.jpg" alt="jackass" title="jackass"/></a></td>
                    <td><span class="cim">Jackass</span>
                        <ul>
                            <li>Vígjáték</li>
                            <li>Szereplők: Johnny Knoxville, Chris Pontius, Dave England</li>
                            <li>2000</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0411008/?ref_=nv_sr_srsg_0"> <img src="img/lost.jpg" alt="lost" title="lost"/></a></td>
                    <td><span class="cim">Lost - Eltűntek</span>
                        <ul>
                            <li>Kaland, Akció, Misztikus</li>
                            <li>Szereplők: Jorge Garcia, Josh Holloway, Yunjin Kim</li>
                            <li>2004-2010</li>
                            <li>A 3. évadnál ne nézd tovább</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt1190634/?ref_=nv_sr_srsg_0"> <img src="img/theboys.jpg" alt="theboys" title="theboys"/></a></td>
                    <td><span class="cim">The Boys </span>
                        <ul>
                            <li>Akció, Krimi, Vígjáték</li>
                            <li>Szereplők: Karl Urban, Jack Quaid, Antony Starr</li>
                            <li>2019</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3032476/?ref_=nv_sr_srsg_0"> <img src="img/bcs.jpg" alt="bcs" title="bcs"/></a></td>
                    <td><span class="cim">Better Call Saul</span>
                        <ul>
                            <li>Akció,Krimi,Dráma</li>
                            <li>Szereplők: Bob Odenkirk, Rhea Seehorn, Jonathan Banks</li>
                            <li>2015-2021</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0455275/?ref_=nv_sr_srsg_0"> <img src="img/pb.jpg" alt="pb" title="pb"/></a></td>
                    <td><span class="cim">A szökés</span>
                        <ul>
                            <li>Akció,Krimi,Dráma</li>
                            <li>Szereplők: Dominic Purcell, Wentworth Miller, Amaury Nolasco</li>
                            <li>2005-2017</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0121955/?ref_=nv_sr_srsg_0"> <img src="img/sp.jpg" alt="sp" title="sp"/></a></td>
                    <td><span class="cim">South Park</span>
                        <ul>
                            <li>Vígjáték,Animáció</li>
                            <li>Szereplők:Trey Parker, Matt Stone, Isaac Hayes</li>
                            <li>1997</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt9140560/?ref_=nv_sr_srsg_0"> <img src="img/wv.jpg" alt="wv" title="wv"/></a></td>
                    <td><span class="cim">WandaVízió</span>
                        <ul>
                            <li>Vígjáték,Akció</li>
                            <li>Szereplők:Elizabeth Olsen, Paul Bettany, Kathryn Hahn</li>
                            <li>2021</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0866442/?ref_=nv_sr_srsg_0"> <img src="img/egyszer.jpg" alt="egyszer" title="egyszer"/></a></td>
                    <td><span class="cim">Egyszer fent, ...inkább lent </span>
                        <ul>
                            <li>Vígjáték,Dráma</li>
                            <li>Szereplők: Danny McBride, Steve Little, Katy Mixon</li>
                            <li>2009-2013</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5164196/?ref_=nv_sr_srsg_0"> <img src="img/lw.jpg" alt="lw" title="lw"/></a></td>
                    <td><span class="cim">Halálos fegyver</span>
                        <ul>
                            <li>Vígjáték,Dráma</li>
                            <li>Szereplők: Damon Wayans, Keesha Sharp, Kevin Rahm </li>
                            <li>2016-2019</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt7366338/?ref_=fn_al_tt_1"> <img src="img/csernobilbence.jpg" alt="csernobilbence" title="csernobilbence"/></a></td>
                    <td><span class="cim">Csernobil </span>
                        <ul>
                            <li>Dráma,Történelmi</li>
                            <li>Szereplők: Jessie Buckley, Jared Harris, Stellan Skarsgård</li>
                            <li>2019</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2802850/?ref_=fn_al_tt_1"> <img src="img/fargo.jpg" alt="fargo" title="fargo"/></a></td>
                    <td><span class="cim">Fargo</span>
                        <ul>
                            <li>Dráma,Krimi</li>
                            <li>Szereplők:  Billy Bob Thornton, Martin Freeman, Allison Tolman</li>
                            <li>2014</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>

            </table>
        </section>
    </article>
    <?php
    $osszes = 0;
    $darab = 0;

    include "fuggvenyek.php";
    $_SESSION["phpfile"] = "sorozatok.php";
    $_SESSION["filename"] = "commentsSorozat.txt";
    $comments = load($_SESSION["filename"] );

    include "comment.php";

    foreach ($comments as $comment){
        $osszes += $comment["rating"];
        $darab++;
    }

    echo "Az értékelések átlaga: " . $osszes / $darab;

    ?>
</main>
<?php
    include "footer.php";
?>

</body>
</html>