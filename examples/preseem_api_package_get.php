<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->_api_get('packages', 'PackageName_4321'));
