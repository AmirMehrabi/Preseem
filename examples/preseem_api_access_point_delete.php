<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->_api_delete('access_points', '10'));

print_r($api->_api_list('access_points'));
