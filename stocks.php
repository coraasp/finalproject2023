<?php
/*
    The api key was generated from alphavantage.co. 
    The docs for this api are: https://www.alphavantage.co/documentation/
    The purpose of this php program is to pass in the selected stock symbol and call the data on it.
*/
$APIKEY = 'VWQMNSHGS4FQNF8E';
$symbol = 'IBM'; // I will want to pass in the specified stock here.
$json = file_get_contents('https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=' . $symbol . '&interval=5min&apikey=' . $APIKEY);

$data = json_decode($json,true);

print_r($data);

exit;