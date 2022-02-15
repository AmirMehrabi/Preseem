<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->get('access_points', '10'));
