<?php

$csv = array_map('str_getcsv', file('log.txt'));
print_r $csv;

?> 

