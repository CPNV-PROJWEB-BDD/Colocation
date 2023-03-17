<?php

function modifyAd(){
    //canvas for data modification
    //https://stackoverflow.com/questions/27183897/how-to-update-an-item-in-a-json-object-in-php
    //TODO modifie var to match the JSON file of this project
    $source = json_decode($oldjson);
    $input = Input::get();

    foreach($source->fields as $i => $field) {
        echo $field->name .' - '. $field->value .' <br />';
        if (isset($input[$field->name])) {
            $field->value = $input[$field->name];
            //$source[$i] = $field; no need for this line, at least for my main issue above
        }
    }
}

//TODO insert the ad on the browsing ad page
function deleteAd(){
    //canvas to delete ads
    //https://www.sourcecodester.com/tutorials/php/13608/php-delete-json-file-data.html
    //TODO modifie var to match JSON file of this project
    $id = $_GET['id'];

    $data = file_get_contents('members.json');
    $json = json_decode($data);

    unset($json[$id]);

    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents('members.json', $json);

    header('location: index.php');

}