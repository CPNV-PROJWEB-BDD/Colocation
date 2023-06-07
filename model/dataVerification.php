<?php
function verifyDataAd($dataAd)
{
    if (isset($dataAd['inputAdTitle']) &&
        isset($dataAd['inputTown']) && isset($dataAd['inputAddress']) &&
        isset($dataAd['inputKindOfGood']) && isset($dataAd['inputNumberOfPieces']) &&
        isset($dataAd['inputDescription'])) {
        //extract login parameters

        if ($dataAd['inputPicture'] == "") {
            $picture = null;
        } else {
            $picture = "../view/content/images/" . $dataAd['inputPicture'];
        }
        $title = $dataAd['inputAdTitle'];
        $kindOfGood = $dataAd['inputKindOfGood'];
        $town = $dataAd['inputTown'];
        $address = $dataAd['inputAddress'];
        $description = $dataAd['inputDescription'];
        $numberOfPieces = $dataAd['inputNumberOfPieces'];

        return array($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces);
    }
}

function verifyIdAd($idAd)
{
    if (isset($idAd['id'])) {
        return $idAd['id'];
    }
}

function filter($filter)
{
    if (isset($filter['kindOfGood']) && isset($filter['town']))
        $kindOfGood = $filter['kindOfGood'];
        $town = $filter['town'];

    return array($kindOfGood, $town);
}