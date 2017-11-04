<?php

use Illuminate\Support\Collection;

echo 'lol'."\r\n";

$collection = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->reject(function ($name) {
    return empty($name);
});

print_r($collection);
