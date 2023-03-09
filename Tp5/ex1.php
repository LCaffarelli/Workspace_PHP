<?php

$tab[] = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
var_dump($tab);


$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$ville = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
$cp = filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING);
$adresse = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);

if (empty($nom)) {
    echo "<script>alert(\"Le nom doit être renseigné\")</script>";
    echo "<script>window.location.replace('ex1.html')</script>";
}
if (empty($prenom)) {
    echo "<script>alert(\"Le prenom doit être renseigné\")</script>";
    echo "<script>window.location.replace('ex1.html')</script>";
}
if (empty($ville)) {
    echo "<script>alert(\"La ville doit être renseignée\")</script>";
    echo "<script>window.location.replace('ex1.html')</script>";
}
if (empty($cp)) {
    echo "<script>alert(\"Le code postal doit être renseigné\")</script>";
    echo "<script>window.location.replace('ex1.html')</script>";
}
if (empty($adresse)) {
    echo "<script>alert(\"L'adresse doit être renseignée\")</script>";
    echo "<script>window.location.replace('ex1.html')</script>";
}

//if (empty($_POST['inom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['cp']) || empty($_POST['ville'])) {
//    echo "<script> alert(\"veuillez remplir tous les champs de texte\")</script>";
//    echo "<script>window.location.replace('ex1.html')</script>";
//}