<?php


// tempat menyambungkan logic
use API\API;
require_once 'Logic/Requires.php';
require_once 'API/API.php';









$data = API::configAPI('https://newsapi.org/v2/top-headlines?country=id&apiKey=883bad57d02341d08040b1b333b26668');
$result = API::getData();

