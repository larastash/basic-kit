<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    [$quote, $author] = array_map('trim', explode('-', Inspiring::quotes()->random()));
    return view('pages.welcome', compact('quote', 'author'));
});
