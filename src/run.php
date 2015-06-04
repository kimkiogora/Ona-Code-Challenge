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
$dataset = Algorithms::getDataSet(Config::URL);

if (json_decode($dataset, TRUE)) {
    $decoded_set = json_decode($dataset, TRUE);

    $calc 
            = Algorithms::Calculate($decoded_set);
    $tat = microtime(true)-$start_time;
    
    $calc['TAT'] = "$tat sec";

    print_r($calc);
} else {
    die(Config::INVALID_RESPONSE_FORMAT);
}


