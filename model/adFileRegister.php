<?php
//Récupération des données du formulaire
$adTitle = $_POST["adTitle"];
$locationPhoto = $_POST["inputPhoto"];
$lieu = $_POST["inputLieu"];
$detail = $_POST["inputDetail"];
$contact = ["inputContact"];

// Création d'un tableau avec les données
$data = array(
    "title" => $adTitle,
    "photo" => $locationPhoto,
    "lieu" => $lieu,
    "detail" => $detail,
    "contact" => $contact,
);

// Chargement du contenu du fichier JSON existant
$file = "data/adDetail.json";       //TODO remplacer le nom de fichier avec le json de jonny
$current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
$current_data = json_decode($current_data, false);


// Ajout des nouvelles données au tableau
$current_data[] = $data;


// Encodage du tableau en JSON
$json_data = json_encode($current_data, JSON_PRETTY_PRINT);


// Stockage du JSON dans le fichierf
file_put_contents($file, $json_data);

exit();

?>