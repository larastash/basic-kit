<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('larastash:icons', function () {
    Artisan::call('composer', ['require', 'technikermathe/blade-lucide-icons']);
})->purpose('Install a Lucide icons');
