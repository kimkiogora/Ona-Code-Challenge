<?php

/**
 * This class is the entry point.
 *
 * @category  ONA
 * @package   Lib
 * @author    Kim Kiogora <kimkiogora@gmail.com>
 * @copyright 2015 ONA Code Challenge
 * @license   Proprietory License
 * @version   Release:1.0.0
 * @link      http://github.com/kimkiogora/Ona-Code-Challenge
 */
require_once 'Configs/Config.php';
require_once 'Lib/Algorithms.php';

$start_time = microtime(true);

//Retrieve the dataset from given URL
$dataset = Algorithms::getDataSet(Config::URL);

if (json_decode($dataset, TRUE)) {
    $decoded_set = json_decode($dataset, TRUE);

    //Perform the required calculations
    $calc 
            = Algorithms::Calculate($decoded_set);
    $tat = microtime(true)-$start_time;
    
    //TAT is useful for redesign of slow algorithms
    $calc['TAT'] = "$tat sec";

    //Display the response in array format 
    print_r($calc);
    
    //Or display the response in json format 
    //echo json_encode($calc);
} else {
    
    //return an invalid response message
    die(Config::INVALID_RESPONSE_FORMAT);
}


