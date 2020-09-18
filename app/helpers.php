<?php


function csvToArray(string $filepath): array
{
    /* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file($filepath));
    $header = array_shift($rows);
    $csv    = array();
    foreach ($rows  as $key => $row) {
        $csv[] = array_combine($header, $row);
    }
    return $csv;
}
