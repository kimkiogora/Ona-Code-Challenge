<?php

/**
 * This class is the entry point.
 *
 * @category  ONA
 * @package   Entry/Main
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
    $tat = sprintf("%.2f",(microtime(true) - $start_time));

    //Display the response in array format 
    print_r($calc);
    
    //Or display the response in json format 
    //echo json_encode($calc);
} else {
    
    //return an invalid response message
     $resp = array(
        "message" => Config::INVALID_RESPONSE_FORMAT,
        "suggestion"=>array(
            "Check the url by doing a curl -i[k] [URL]",
            "Check and Validate the dataset being returned")
    );
    
    die(json_encode($resp));
}
