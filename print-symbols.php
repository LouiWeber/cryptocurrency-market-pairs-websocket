<?php
    /*
     *
     *  This script will provide you with the means to see what is available in symbols and exchanges.
     *  Note: This is updated every hour by executium as of 25th July 2020, so try to keep up to date with what is happening.
     *
 */

    ##/ Get JSON Data
    $data=json_decode(file_get_contents('https://marketdata.executium.com/api/v2/system/symbols'));

    ##/ Output
    echo '<pre>';
    print_r($data);
    echo '</pre>';
