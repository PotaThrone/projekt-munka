<?php
 session_start();
 include "fuggvenyek.php";
 $accounts = load("felhasznalok.txt");
if (isset($_SESSION["user"])) {

    header("Location: index.php");
}
?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció/Bejelentkezés</title>
    <meta name="author" content="Nagy György, Benák Ádám"/>
    <meta name="description" content="Ez a filmeket mutatja be" />
    <link rel="stylesheet" href="css/style.css"  />
    <meta name="keywords" content="urlapok" />
    <meta name="generator" content="WebStrom" />
    <link rel="icon" href="img/icon.jpg" sizes="180x180" />

    <style>
        textarea{
            width: 100%;
            height: 50px;
        }
        input, select, textarea, fieldset { margin-bottom: 10px; }

        input[type="reset"], input[type="submit"] {
            background-color: #4CAF50;
            color: #FFF;
            border: none;
            outline: none;
            font-size: 16px;
            width: 150px;
            height: 40px;
        }
        fieldset{
            width: 50%;
            margin: 50px auto;

        }

        input:focus { background-color: #BFFFC3; }

        input[type="text"], input[type="password"],  input[type="email"] ,  input[type="date"]{
            display: inline-block;
            box-sizing: border-box;
            width: 100%;
            height: 25px;
            padding-left: 10px;

        }


    </style>


</head>
<body>
<header>
    <img src="img/header.jpg" title="header" alt="header">
    <nav>
        <a href="index.php"><div>Kezdőlap</div></a>
        <a href="filmek.php"><div>Filmek </div></a>
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
    <article>
        <section>
            <form action="urlapos.php" method="POST">
                <fieldset>
                    <legend>Bejelentkezési adatok</legend>
                    <label>Felhasználónév: <input type="text" name="username" /></label> <br/>
                    <label>Jelszó: <input type="password" name="passwd" /></label> <br/>

                    <input type="submit" name="login" value="Bejelentkezés"/>
                </fieldset>
            </form>
            <?php


            if (isset($_POST["login"])) {
                if (!isset($_POST["username"]) || trim($_POST["username"]) === "" || !isset($_POST["passwd"]) || trim($_POST["passwd"]) === ""  )
                    $msg = "Tölts ki minden mezőt!";
                else{
                    $user = $_POST["username"];
                    $pass = $_POST["passwd"];
                    $msg = "Sikertelen belépés!";

                    foreach ($accounts as $account){
                        if($user === $account["username"] && $pass === $account["passwd"]){
                            $msg = "Sikeres belépés";
                            $_SESSION["user"] = $account;
                            header("Location: index.php");
                            break;
                        }
                    }
                }
                echo $msg . "<br>";

            }
            ?>
        </section>
        <section>
            <form action="urlapos.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Regisztrációs adatok</legend>
                    <label>Teljes név: <input type="text" name="full-name" size="25" value="<?php if (isset($_POST['full-name'])) echo $_POST['full-name']; ?>"/></label> <br/>
                    <label>Felhasználónév: <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" /></label> <br/>
                    <label>Jelszó: <input type="password" name="passwd" /></label> <br/>
                    <label>Jelszó ismét: <input type="password" name="passwd-check" /></label> <br/>
                    <label>Születési dátum: <input type="date" name="date-of-birth" min="1920-01-01"/></label> <br/>
                    <label>E-mail: <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></label> <br/>
                    <input type="hidden" name="user-id" value="12345" />

                    <label for="education">Legmagasabb iskolai végzettség:</label>
                    <select name="education">
                        <option value="elementary">8 általános</option>
                        <option value="highschool">Érettségi</option>
                        <option value="university">Egyetem</option>
                        <option value="other" selected>Egyéb</option>
                    </select> <br/>

                    Nem:
                    <label for="op1">Férfi:</label>
                    <input type="radio" id="op1" name="sex" value="m"/>
                    <label for="op2">Nő:</label>
                    <input type="radio" id="op2" name="sex" value="f"/>
                    <label for="op3">Egyéb:</label>
                    <input type="radio" id="op3" name="sex" value="other" checked/><br/>

                    Hobbi:
                    <label  for="hobby-1">Fotózás:</label>
                    <input type="checkbox" id="hobby-1" name="hobby[]" value="photo"/>
                    <label  for="hobby-2">Főzés:</label>
                    <input type="checkbox" id="hobby-2" name="hobby[]" value="cooking"/>
                    <label for="hobby-3">Sorozatnézés:</label>
                    <input type="checkbox" id="hobby-3" name="hobby[]" value="series"/>
                    <label for="hobby-4">Egyéb:</label>
                    <input type="checkbox" id="hobby-4" name="hobby[]" value="egyeb"/><br/>

                    <label for="introduction">Bemutatkozás (max. 200 karakter):</label> <br/>
                    <textarea id="introduction" name="intro" maxlength="200" ></textarea> <br/>
                    <input type="file" name="kep" accept="image/*"/><br/>


                    <input type="reset" name="reset-btn" value="Adatok törlése"/>
                    <input type="submit" name="signup" value="Regisztráció"/>
                </fieldset>
            </form>
            <?php

            $errors = [];
            if (isset($_POST["signup"])) {
                if (!isset($_POST["username"]) || trim($_POST["username"]) === "")
                    $errors[] = "A felhasználónév megadása kötelező!";

                if (!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "" || !isset($_POST["passwd-check"]) || trim($_POST["passwd-check"]) === "")
                    $errors[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

                if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
                    $errors[] = "Az e-mail cím megadása kötelező!";

                if (!isset($_POST["hobby"]) || count($_POST["hobby"]) < 1)
                    $errors[] = "Adj meg legalább egy hobbit!";

                $fullname = $_POST["full-name"];
                $user = $_POST["username"];
                $pass = $_POST["passwd"];
                $pass2 = $_POST["passwd-check"];
                $dob = $_POST["date-of-birth"];
                $email = $_POST["email"];
                $edu = $_POST["education"];
                $sex = $_POST["sex"];

                if(isset($_POST["hobby"])){
                    $hobby = $_POST["hobby"];
                }

                $intro = $_POST["intro"];


               foreach ($accounts as $account){
                    if($account["username"] === $user){
                        $errors[] = "A felhasználónév már foglalt!";
                    }
                }

                foreach ($accounts as $account){
                    if($account["email"] === $email){
                        $errors[] = "Az e-mail cím már foglalt!";
                    }
                }



                if(strlen($pass) < 8){
                    $errors[] = "A jelszó túl rövid";
                }

                $fajlfeltoltes_hiba = "";
                uploadProfilePicture($user);

                if ($fajlfeltoltes_hiba !== "")
                    $errors[] = $fajlfeltoltes_hiba;


                if(!(preg_match('/[A-Z]/',$pass) && preg_match('/[0-9]/',$pass))){
                    $errors[] = "A jelszónak tartalmaznia kell nagybetüt illetve számot!";
                }


                if ($pass !== $pass2){
                    $errors[] = "A két jelszó nem egyezik!";
                }


                if(count($errors) === 0){
                    $accounts[] = ["full-name" => $fullname , "username" => $user, "passwd" => $pass, "date-of-birth" => $dob, "email" => $email,
                        "education" => $edu, "sex" => $sex, "hobby" => $hobby, "intro" => $intro];
                    echo "Sikeres regisztráció";
                    save("felhasznalok.txt", $accounts);
                }
                else{
                    foreach ($errors as $error){
                        echo $error . "<br>";
                    }
                }
            }

            function uploadProfilePicture($username) {
                global $fajlfeltoltes_hiba;

                if (isset($_FILES["kep"]) && is_uploaded_file($_FILES["kep"]["tmp_name"])) {
                    $allowed_extensions = ["png", "jpg", "jpeg"];
                    $extension = strtolower(pathinfo($_FILES["kep"]["name"], PATHINFO_EXTENSION));

                    if (in_array($extension, $allowed_extensions)) {
                        if ($_FILES["kep"]["error"] === 0) {
                            if ($_FILES["kep"]["size"] <= 31457280) {
                                $path = "avatar/" . $username . "." . $extension;

                                if (!move_uploaded_file($_FILES["kep"]["tmp_name"], $path)) {
                                    $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
                                }
                            } else {
                                $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
                            }
                        } else {
                            $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
                        }
                    } else {
                        $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
                    }
                }
            }


            ?>

        </section>
    </article>
</main>
<?php
include "footer.php";
?>

</body>
</html>