<?php

namespace FarhadNstu\Spirit;
use Illuminate\Support\Facades\Route;

Route::get('/spirit', [Controllers\SpiritController::class, '__invoke']);
