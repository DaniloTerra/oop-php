<?php

define("PATTERNS", "[\"(\"blocked-uri\":\\s?\"data\")\", \"(\"blocked-uri\":\\s?\"teste\")\"]");

echo PATTERNS;

exit;



















$report = file_get_contents("php://input");
$patterns = json_decode(addslashes(PATTERNS), true);

foreach ($patterns as $pattern) {
    $result = preg_match('/'.$pattern.'/', $report);
    if ($result) {
        echo 'Padrao encontrado. Pattern: ' . $pattern;
        print_r('<br>');
    } else {
        echo 'Padrao nao encontrado. Pattern: ' . $pattern;
        print_r('<br>');
    }
}


// print_r($patterns);
// print_r('<br>');

foreach ($patterns as $pattern) {
    print_r($pattern);
    print_r('<br>');
}
