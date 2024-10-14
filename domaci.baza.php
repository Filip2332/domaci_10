<?php




if (!isset($_POST['email']) || empty($_POST['email'])) {
    die("Niste uneli email!");
}
if (!isset($_POST['lozinka']) || empty($_POST['lozinka'])) {
    die("Niste uneli lozinku!");
}


$email = $_POST['email'];
$lozinka = $_POST['lozinka'];


require_once "baza.php";


$baza->query("INSERT INTO korisnici_3(email,lozinka) VALUES('$email','$lozinka')");
