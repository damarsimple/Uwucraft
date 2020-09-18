<?php
/* Map Rows and Loop Through Them */
$rows   = array_map('str_getcsv', file('test2.csv'));
$header = array_shift($rows);
$csv    = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}
var_dump($csv);