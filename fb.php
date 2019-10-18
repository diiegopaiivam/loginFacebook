<?php
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '413446232686718',
    'app_secret' => '4230714a561080a41a6ecd3f1114bee0',
    'default_graph_version' => 'v4.0'
]);