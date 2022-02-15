<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

p($api->get('packages', 'PackageName_4321'));
