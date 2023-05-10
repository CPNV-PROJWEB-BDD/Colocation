<?php



function verifyData($newData){
    //Récupération des données du formulaire
    $adTitle = $newData["inputAdTitle"];
    $locationPhoto = $newData["inputPhoto"];
    $localisation = $newData["inputLocalisation"];
    $description = $newData["inputDescription"];
    $habitationType = $newData["inputHabitation"];
    $nbPieces = $newData["inputNbPieces"];
    $adresse = $newData["inputAdresse"];

//generate ID
    $id = getId();

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

    return $data;
}
function getId(){
    $bienId = getColocation();
    $id = 'Id';
    $newId = 1;
    foreach (array_keys($bienId) as $key){
        $temp[$key] = $bienId[$key][$id];
        if ($temp[$key] == $newId){
            $newId++;
        }
    }
    return $newId;
}


function addColocation($newData){

    $newColocation = verifyData($newData);
    $current_data = addData($newColocation);
    return $current_data;
}

function getColocation(){
    // Chargement du contenu du fichier JSON existant
    $file = "data/location.json";
    $current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
    $current_data = json_decode($current_data, true);

    return $current_data;
}

function addData($newData){
    $file = "data/location.json";

    $current_data = getColocation();

    // Ajout des nouvelles données au tableau
    $current_data[] = $newData;


// Encodage du tableau en JSON
    $json_data = json_encode($current_data, JSON_PRETTY_PRINT);


// Stockage du JSON dans le fichierf
    file_put_contents($file, $json_data);

    return $current_data;
}

?>