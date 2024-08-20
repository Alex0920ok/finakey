<?php

$binary = '"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"';
$output = shell_exec("$binary https://www.google.com C:\\dev\\google2.pdf 2>&1");

echo $output;
