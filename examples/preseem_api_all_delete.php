<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

$objects = array('access_points', 'accounts', 'packages', 'services', 'sites');

foreach ( $objects AS $object )
  foreach ( $api->_api_list($object)->data AS $item )
    print_r($api->_api_delete($object, $item->id));

