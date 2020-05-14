<?php
    $url = 'https://kodaktor.ru/j/rates';
    $data = file_get_contents($url);
    $response = json_decode($data, true);
    $dollar = $response[0]['sell'];
    $koef = $_GET["dollars"];
    echo $koef * $dollar;
