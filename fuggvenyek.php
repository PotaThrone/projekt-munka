<?php
function load($filename){
    $felhasznalok = [];

    $file = fopen($filename, "r");

    if ($file === FALSE)
        die("HIBA: A fájl megnyitása nem sikerült!");

    while (($line = fgets($file)) !== false){
        $felhasznalok[] = unserialize($line);
    }

    fclose($file);
    return $felhasznalok;
}


function save($filename, $felhasznalok){
    $file = fopen($filename, "w");

    if ($file === FALSE)
        die("HIBA: A fájl megnyitása nem sikerült!");

    foreach($felhasznalok as $user) {
        $serialized_user = serialize($user);
        fwrite($file, $serialized_user . "\n");
    }

    fclose($file);
}