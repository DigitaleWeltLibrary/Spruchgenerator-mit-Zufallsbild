<?php

$settingsdata = file_get_contents("json/settings.json");
$data = json_decode($settingsdata, true);

$pagetitle = $data['layoutdata'][0]['pagetitle'];
$keywords = $data['layoutdata'][0]['keywords'];
$description = $data['layoutdata'][0]['description'];