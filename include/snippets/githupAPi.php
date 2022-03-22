<?php

$headers = [
	"User-Agent : Africancodex REST API Client",
	"Authorization : token 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"
];

$ch = curl_init("https://api.github.com/users/lawrence-sert");

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

var_dump($data);