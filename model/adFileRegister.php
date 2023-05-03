<?php
//Récupération des données du formulaire
$adTitle = $_POST["inputAdTitle"];
$locationPhoto = $_POST["inputPhoto"];
$localisation = $_POST["inputLocalisation"];
$description = $_POST["inputDescription"];
$habitationType = $_POST["inputHabitation"];
$nbPieces = $_POST["inputNbPieces"];
$adresse = $_POST["inputAdresse"];
//generate ID
$id = uniqid();

// Création d'un tableau avec les données
$data = array(
    "Id" => $id,
    "Titre" => $adTitle,
    "Image" => $locationPhoto,
    "Habitation" => $habitationType,
    "Localisation" => $localisation,
    "Pièces" => $nbPieces,
    "Description" => $description,
    "Adresse" => $adresse,
);

// Chargement du contenu du fichier JSON existant
$file = "data/location.json";

// Encodage du tableau en JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);


// Stockage du JSON dans le fichierf
file_put_contents($file, $json_data);

return;

?>