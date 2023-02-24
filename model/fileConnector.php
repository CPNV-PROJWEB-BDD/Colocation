<?php

/**
 * @file   fileConnector.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  22.02.2023
 */


function writeRegisterInJSON($registerToWrite)
{
    $pathToJSONFile = setFullPath("data/register.json");
    $encodedRegister = json_encode($registerToWrite);
    writeMsgInFile($pathToJSONFile, $encodedRegister, false);
}

//<editor-fold desc="function">


function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */

    $currentPath = getcwd();
    $fullPathToFile = $currentPath . "\\" . $fName;
    return $fullPathToFile;
}



function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */

    $strWriter = null;
    if ($erase) {
        $strWriter = fopen($fileFullPath, "w+");
    } else {
        $strWriter = fopen($fileFullPath, "a+");
        $lineToWrite = $lineToWrite;
    }

    fwrite($strWriter, $lineToWrite . "\r\n");
    fclose($strWriter);
}
