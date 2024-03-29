<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Játékok</title>
    <meta name="author" content="Nagy György, Benák Ádám"/>
    <meta name="description" content="Ez a játékokat mutatja be" />
    <link rel="stylesheet" href="css/style.css"  />
    <meta name="keywords" content="Games, Játékok" />
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
        <a href="sorozatok.php"><div>Sorozatok</div></a>
        <a href="jatekok.php" class="current"><div>Játékok</div></a>
        <?php if (isset($_SESSION["user"])) { ?>
            <a href="profile.php" ><div>Profil</div></a>
        <?php } else { ?>
            <a href="urlapos.php" ><div>Regisztráció/Belépés</div></a>
        <?php } ?>
    </nav>
</header>
<main>
    <h1>Játékok</h1>
    <hr/>
    <article>
        <section>
            <h2>Többjátékos</h2>
            <table>
                <thead>
                <tr>
                    <th class="elso"></th>
                    <th>Infomáció</th>
                    <th>Rating 10/?</th>
                </tr>
                </thead>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt12104902/?ref_=fn_al_tt_1"> <img src="img/valorant.png" alt="valorant" title="valorant"/> </a></td>
                    <td><span class="cim">Valorant</span>
                        <ul>
                            <li>Csapatjáték, FPS</li>
                            <li>2020</li>
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
                        <span class="fa fa-star"></span>
                    </td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2071507/?ref_=nv_sr_srsg_0" ><img src="img/lol.jpg" alt="lol" title="lol"/></a></td>
                    <td><span class="cim">League of Legends</span>
                        <ul>
                            <li>Csapatjáték, stratégiai, MOBA</li>
                            <li>Csak akkor ajánlom, ha <u>jó az idegrendszered</u></li>
                            <li>2009</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5710996/?ref_=nv_sr_srsg_0" ><img src="img/sw.jpg" alt="star wars" title="star wars"></a></td>
                    <td><span class="cim">Star Wars™ Battlefront™ II</span>
                        <ul>
                            <li>Csapatjáték, FPS/TPS</li>
                            <li>Teljesen átadja a Star Ward világát</li>
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
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt9730966/?ref_=nv_sr_srsg_0" ><img src="img/apex.jpg" alt="apex" title="apex"></a></td>
                    <td><span class="cim">Apex Legends</span>
                        <ul>
                            <li>Csapatjáték, battle royale</li>
                            <li>Az nyer, aki utoljára talpon marad</li>
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
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5702630/?ref_=nv_sr_srsg_0" ><img src="img/bf1.jpg" alt="bf1" title="bf1"></a></td>
                    <td><span class="cim">Battlefield 1</span>
                        <ul>
                            <li>Akció, FPS</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt4779020/?ref_=nv_sr_srsg_1" ><img src="img/r6.jpg" alt="r6" title="r6" /></a></td>
                    <td><span class="cim">Rainbow Six: Siege</span>
                        <ul>
                            <li>Csapatjáték, Fps</li>
                            <li>2015</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt8181422/?ref_=nv_sr_srsg_2" ><img src="img/awo.jpg" alt="awo" title="awo" /></a></td>
                    <td><span class="cim">A Way Out</span>
                        <ul>
                            <li>Akció, Co-op, Kaland</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2318310/?ref_=nv_sr_srsg_0" ><img src="img/aottdc.jpg" alt="aottdc" title="aottdc" /></a></td>
                    <td><span class="cim">Army of Two: The Devil's Cartel</span>
                        <ul>
                            <li>Akció, Co-op</li>
                            <li>2013</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt9053434/?ref_=nv_sr_srsg_6" ><img src="img/bf5.jpg" alt="bf5" title="bf5" /></a></td>
                    <td><span class="cim">Battlefield V</span>
                        <ul>
                            <li>Akció, FPS</li>
                            <li>2018</li>
                        </ul>
                    </td>
                    <td><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></td>
                </tr>

            </table>
            <h2>Egyjátékos</h2>
            <table>
                <thead>
                <tr>
                    <th class="elso"></th>
                    <th>Infomáció</th>
                    <th>Rating 10/?</th>
                </tr>
                </thead>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2011970/?ref_=nv_sr_srsg_3" ><img src="img/mc.jpg" alt="minecraft" title="minecraft"/></a></td>
                    <td><span class="cim">Minecraft</span>
                        <ul>
                            <li>Igaz lehet többen is játszani, de most inkább az egyjátékos részéről beszélnék</li>
                            <li>Nagyon jó kikapcsolódásra</li>
                            <li>2011</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0932936/?ref_=nv_sr_srsg_11" ><img src="img/ac.jpg" alt="assassin" title="assassin"/></a></td>
                    <td><span class="cim">Assassin's Creed</span>
                        <ul>
                            <li>Bármelyik részéről is beszélünk személy szerint egyik kedvenc játéksorozatom, legfőképp az <b>Assassin's Creed III</b> kiadása</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5989308/?ref_=nv_sr_srsg_0" ><img src="img/civ6.jpg" alt="civ6" title="civ6"></a></td>
                    <td><span class="cim">Civilization VI</span>
                        <ul>
                            <li>Van hogy órákat el tudsz benne tölteni és észre sem veszed, hogy telik az idő</li>
                            <li>Stratégiai</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3742988/?ref_=fn_al_tt_1" ><img src="img/farcry.jpg" alt="farcry" title="farcry" /></a></td>
                    <td><span class="cim">Far Cry 4</span>
                        <ul>
                            <li>Akció,Kaland</li>
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
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3334704/?ref_=rt_li_tt" ><img src="img/uncharted4.jpg" alt="uncharted" title="uncharted" /></a></td>
                    <td><span class="cim">Uncharted 4: A Thief's End</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2321297/?ref_=fn_al_tt_1" ><img src="img/fc3.jpg" alt="fc3" title="fc3" /></a></td>
                    <td><span class="cim">Far Cry 3</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2103188/?ref_=nv_sr_srsg_0" ><img src="img/gtav.jpg" alt="gtav" title="gtav" /></a></td>
                    <td><span class="cim">Grand Theft Auto V</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2013</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt1407064/?ref_=nv_sr_srsg_0" ><img src="img/maxpayne3.jpg" alt="maxpayne3" title="maxpayne3" /></a></td>
                    <td><span class="cim">Max Payne 3</span>
                        <ul>
                            <li>Akció</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5158314/?ref_=nv_sr_srsg_0" ><img src="img/detroit.jpg" alt="detroit" title="detroit" /></a></td>
                    <td><span class="cim">Detroit: Become Human</span>
                        <ul>
                            <li>Kaland, Szerepjáték</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3767842/?ref_=nv_sr_srsg_0" ><img src="img/bfhardline.jpg" alt="bfhardline" title="bfhardline" /></a></td>
                    <td><span class="cim">Battlefield: Hardline</span>
                        <ul>
                            <li>Akció</li>
                            <li>2015</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3707110/?ref_=nv_sr_srsg_0" ><img src="img/codadvanced.jpg" alt="codadvanced" title="codadvanced" /></a></td>
                    <td><span class="cim">Call of Duty: Advanced Warfare</span>
                        <ul>
                            <li>Akció</li>
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
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></td>
                </tr>
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt3391046/?ref_=nv_sr_srsg_1" ><img src="img/qunatumbreak.jpg" alt="qunatumbreak" title="qunatumbreak" /></a></td>
                    <td><span class="cim">Quantum Break</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5127470/?ref_=fn_al_tt_1" ><img src="img/jc3.jpg" alt="jc3" title="jc3" /></a></td>
                    <td><span class="cim">Just Cause 3</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2015</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt8550918/?ref_=nv_sr_srsg_0" ><img src="img/fh4.jpg" alt="fh4" title="fh4" /></a></td>
                    <td><span class="cim">Forza Horizon 4</span>
                        <ul>
                            <li>Verseny</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt6304452/?ref_=nv_sr_srsg_0" ><img src="img/unchartedll.jpg" alt="unchartedll" title="unchartedll" /></a></td>
                    <td><span class="cim">Uncharted: The Lost Legacy</span>
                        <ul>
                            <li>Akció,Kaland</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt6967966/?ref_=nv_sr_srsg_0" ><img src="img/fc5.jpg" alt="fc5" title="fc5" /></a></td>
                    <td><span class="cim">Far Cry 5</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2839486/?ref_=nv_sr_srsg_0" ><img src="img/fc3bd.jpg" alt="fc3bd" title="fc3bd" /></a></td>
                    <td><span class="cim">Far Cry 3: Blood Dragon</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2013</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt6273446/?ref_=nv_sr_srsg_1" ><img src="img/nfh.jpg" alt="nfh" title="nfh" /></a></td>
                    <td><span class="cim">Neighbours from Hell</span>
                        <ul>
                            <li>Comedy</li>
                            <li>2003</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5507098/?ref_=fn_al_tt_1" ><img src="img/superhot.jpg" alt="superhot" title="superhot" /></a></td>
                    <td><span class="cim">Superhot</span>
                        <ul>
                            <li>Akció</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt1632479/?ref_=nv_sr_srsg_3" ><img src="img/codbo.jpg" alt="codbo" title="codbo" /></a></td>
                    <td><span class="cim">Call of Duty: Black Ops</span>
                        <ul>
                            <li>Akció</li>
                            <li>2010</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2387409/?ref_=nv_sr_srsg_6" ><img src="img/codbo2.jpg" alt="codbo2" title="codbo2" /></a></td>
                    <td><span class="cim">Call of Duty: Black Ops II</span>
                        <ul>
                            <li>Akció</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2951478/?ref_=nv_sr_srsg_0" ><img src="img/codghosts.jpg" alt="codghosts" title="codghosts" /></a></td>
                    <td><span class="cim">Call of Duty: Ghosts</span>
                        <ul>
                            <li>Akció</li>
                            <li>2013</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2186922/?ref_=nv_sr_srsg_1" ><img src="img/nfsmw.jpg" alt="nfsmw" title="nfsmw" /></a></td>
                    <td><span class="cim">Need for Speed: Most Wanted</span>
                        <ul>
                            <li>Verseny</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt4247292/?ref_=nv_sr_srsg_0" ><img src="img/fh2.jpg" alt="fh2" title="fh2" /></a></td>
                    <td><span class="cim">Forza Horizon 2</span>
                        <ul>
                            <li>Verseny</li>
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
                <tr>
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2233084/?ref_=nv_sr_srsg_0" ><img src="img/sotl.jpg" alt="sotl" title="sotl" /></a></td>
                    <td><span class="cim">Spec Ops: The Line</span>
                        <ul>
                            <li>Akció</li>
                            <li>2012</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt8339682/?ref_=nv_sr_srsg_5" ><img src="img/sottr.jpg" alt="sottr" title="sottr" /></a></td>
                    <td><span class="cim">Shadow of the Tomb Raider</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt1799527/?ref_=nv_sr_srsg_0" ><img src="img/doom.jpg" alt="doom" title="doom" /></a></td>
                    <td><span class="cim">Doom</span>
                        <ul>
                            <li>Akció</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt6161168/?ref_=nv_sr_srsg_0" ><img src="img/rdr2.jpg" alt="rdr2" title="rdr2" /></a></td>
                    <td><span class="cim">Red Dead Redemption II</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2018</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt2140553/?ref_=nv_sr_srsg_4" ><img src="img/tlou.jpg" alt="tlou" title="tlou" /></a></td>
                    <td><span class="cim">The Last of Us</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2013</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt5788078/?ref_=nv_sr_srsg_3" ><img src="img/wd2.jpg" alt="wd2" title="wd2" /></a></td>
                    <td><span class="cim">Watch Dogs 2</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>2016</li>
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
                    <td><a target="_blank" href="https://www.imdb.com/title/tt0383385/?ref_=nv_sr_srsg_3" ><img src="img/gtasa.jpg" alt="gtasa" title="gtasa" /></a></td>
                    <td><span class="cim">Grand Theft Auto: San Andreas</span>
                        <ul>
                            <li>Akció,Kaland</li>
                            <li>Még mindig az egyik <mark>legjobb</mark> játék, ami létezik</li>
                            <li>2004</li>
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
            </table>
        </section>
    </article>
    <?php
    $osszes = 0;
    $darab = 0;

    include "fuggvenyek.php";
    $_SESSION["phpfile"] = "jatekok.php";
    $_SESSION["filename"] = "commentsJatekok.txt";
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