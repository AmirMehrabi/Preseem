<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

$objects = array('access_points', 'accounts', 'packages', 'services', 'sites');

foreach ($objects AS $object)
  print_r($api->_api_list($object));
