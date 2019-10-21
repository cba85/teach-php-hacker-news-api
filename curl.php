<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$results = curl_exec($ch);

$infos = curl_getinfo($ch);
print_r($infos);

if ($infos['http_code'] !== 200) {
    echo 'Oops! Something went wrong!';
    die();
}

$topStoryIds = array_slice(json_decode($results), 0, 5);
print_r($topStoryIds);
