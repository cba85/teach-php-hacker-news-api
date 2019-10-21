<?php

$ids = file_get_contents("https://hacker-news.firebaseio.com/v0/topstories.json");
//print_r($ids);

$stories = json_decode($ids);
//print_r($stories);

$tops = array_slice($stories, 0, 5);
//print_r($tops);

foreach ($tops as $id) {
    $story = json_decode(file_get_contents("https://hacker-news.firebaseio.com/v0/item/{$id}.json"));
    //print_r($story);
    echo "<a href='{$story->url}'>{$story->title}</a> ({$story->score} points)<br>";
