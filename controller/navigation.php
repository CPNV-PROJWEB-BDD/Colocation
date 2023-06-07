<?php



function home()
{
    try {
        require_once "model/dataBrowseAd.php";
        $biens = addFullLocation();
        $develop = addFullDevelop();
    } finally {
        require "view/home.php";
    }
}


function displayLocation($values)
{
    try {
        require_once "model/dataBrowseAd.php";
        $filter = filter($values);
        if ($filter == null) {
            $errorMessage = "Nous n'avons pas trouvé de bien à vos critères ! Voici nos biens actuels :";
            $filter = addFullLocation();
        }
    } finally {
        require "view/location.php";
    }
}


function account()
{
    require_once 'model/account.php';
    $biens = getColocations();
    require_once 'view/accountPage.php';
}

function sendAFormRequest($sendAFormData)
{

    if (count($sendAFormData) == 0) {
        require 'view/sendAFormRequest.php';
    } else {
        try {
            if (isset($sendAFormData['inputFirstName']) && isset($sendAFormData['inputLastName'])
                && isset($sendAFormData['inputText']) && isset($sendAFormData['inputEmailAddress'])
                && isset($sendAFormData['inputPassword']) && isset($sendAFormData['inputDateDebut'])
                && isset($sendAFormData['inputDateFin'])) {


                $userEmailAdress = $sendAFormData['inputEmailAddress'];
                $password = $sendAFormData['inputPassword'];
                $text = $sendAFormData['inputText'];
                $dateDebut = $sendAFormData['inputDateDebut'];
                $dateFin = $sendAFormData['inputDateFin'];

                if (IsLoginCorrect($userEmailAdress, $password)) {

                    $biens = addFullLocation();
                    $develop = addFullDevelop();
                    require "view/home.php";
                } else {
                    $ErrorMessage = "l'email ou le mot de passe est faux";
                }
            }

        } catch (ModelDataBaseException $ex) {
            $articleErrorMessage = "Nous rencontrons des problèmes";
            require "view/home.php";
        }
    }
}





