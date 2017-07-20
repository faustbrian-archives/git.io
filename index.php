<?php

require_once('vendor/autoload.php');

$client = new BrianFaust\Gitio\Client;

dd($client->api('Link')->conceal('https://github.com/laravel/laravel'));
