<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

$api->api_services_delete('ServiceLocation_4321');

print_r($api->_api_list('services'));
