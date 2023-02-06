<?php

use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

Route::get(
    'admin/user/login',
    [LoginController::class, 'index']
);