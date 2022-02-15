<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->delete('access_points', '10'));

print_r($api->list('access_points'));
