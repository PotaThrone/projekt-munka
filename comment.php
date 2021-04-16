<style>
<?php
include "css/comment.css";

?>
</style>
<section id="hidden" style="display: <?php if(isset($_SESSION["user"])){echo " block;" ;}else{ echo " none;";} ?>">
    <h2>Hozzászólások</h2>
    <h3>Írj egy hozzászólást!</h3>
    <form action="<?php echo $_SESSION["phpfile"] ?>" method="GET">
        <textarea id="komment" name="komment" maxlength="200"></textarea> <br>
        Rating(0-10): <input type="range" name="rating" min="0" max="10"/> <br>
        <input type="submit" name="elkuld" value="Közzététel">

    </form>
    <?php
    $errors= [];


    if (isset($_GET["elkuld"])) {
        if (!isset($_GET["komment"]) || trim($_GET["komment"]) === "")
            $errors[] = "Nem írtál semmit!";

        $username = $_SESSION["user"]["username"];
        $date = date("Y.m.d");
        $text = $_GET["komment"];
        $rating = $_GET["rating"];


        if(count($errors) === 0){
            $comments[] = ["username" => $username, "date" => $date,  "text" => $text , "rating" => $rating ];


            save($_SESSION["filename"] , $comments);
        }
        else{
            foreach ($errors as $error){
                echo $error . "<br>";
            }
        }
    }

    if(isset($_SESSION["user"])){foreach ($comments as $comment) { ?>


        <div id="komment">
            <span class="cim"><?php echo $comment["username"]; ?></span>
            <div class="datum"><?php echo $comment["date"]; ?></div>
            <div class="szoveg"><?php echo $comment["text"]; ?></div>
            <div class="ertekeles">Értékelés: <?php echo $comment["rating"] . " / 10"; ?></div>
        </div>

    <?php }}

    ?>
    <section>