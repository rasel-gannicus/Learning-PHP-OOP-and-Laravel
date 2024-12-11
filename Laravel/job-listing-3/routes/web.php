<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::get('/listing/create', [ListingController::class, 'create']) ;

Route::post('/listing',[ListingController::class, 'store']);

Route::get('/listing/{listing}/update',[ListingController::class, 'edit']) ;

route::put('/listing/{listing}', [ListingController::class, 'update']);