<?php
// Includo il file Json con i data dei dischi
$data = file_get_contents(__DIR__ . "/data/data.json");
// Lo trasformo in un array leggibile da PHP
$data_decoded = json_decode($data);
// Dico che sto passando un file Json che va letto come API
header('Content-Type: application/json; charset=utf-8');
// Stampo l'array ri-trasformato in contenuto Json
echo json_encode($data_decoded);
