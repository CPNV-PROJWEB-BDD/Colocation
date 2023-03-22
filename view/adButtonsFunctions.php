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
//function to delete ad
function deleteArrayWithValue($filename, $value) {
    $json_obj = json_decode($json_string);
    $unset_queue = array();

    foreach ( $json_obj->Results as $i => $item )
    {
        if ($item->username == $idPrompt)
        {
            $unset_queue[] = $i;
        }
    }

    foreach ( $unset_queue as $index )
    {
        unset($json_obj->Results[$index]);
    }

// rebase the array
    $json_obj->Results = array_values($json_obj->Results);

    $new_json_string = json_encode($json_obj);

}