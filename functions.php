<?php

function getWelcomeMessage(int $time, string $defaultMessage = '')
{
    $morning = "Доброе утро!";
    $day = "Добрый день.";
    $evening = "Добрый вечер.";
    $night = "Доброй ночи.";

    if($time >= 04) {$hello = $morning;}
    if($time >= 10) {$hello = $day;}

    if($time >= 16) {
        $hello = $evening;
    }

    if($time >= 22 or $time < 04) {
        $hello = $night;
    }

    if ($time == 0) {
        $hello = $defaultMessage;
    }

    return $hello;
}

