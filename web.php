<?php

use Illuminate\Support\Facades\Route;
use Modules\ProgrammaticSEO\Controllers\PageController;


Route::get('/{course}-in-{city}', [PageController::class, 'courseCity']);

