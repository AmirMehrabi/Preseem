<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

p($api->list('access_points'));
