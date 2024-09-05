<?php

$env = parse_ini_file('.env');
$env_type = $env["NODE_ENV"];

echo 'Hello World';

echo "this is a test";

echo "try auto";

echo "Your on $env_type";


$MY_VARIABLE = $SOURCE_COMMIT;

echo $MY_VARIABLE;
