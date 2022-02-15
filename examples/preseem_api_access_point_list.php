<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->list('access_points'));
