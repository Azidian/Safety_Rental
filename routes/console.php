<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Define a console command named 'inspire'
Artisan::command('inspire', function () {
    // Output an inspiring quote to the console
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
