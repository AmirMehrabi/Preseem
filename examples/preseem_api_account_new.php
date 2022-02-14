<?php

include_once __DIR__ . '/../init.php';

$api = new Preseem();

print_r($api->api_accounts_create([
  'id' => 'CustomerName_1234',
  'name' => 'Customer Name',
]));

print_r($api->_api_list('accounts'));
