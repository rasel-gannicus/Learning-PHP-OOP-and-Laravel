<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Welcome to job listing',
        'listings' => Listing::all()
    ]);
});

Route::get('/listing/{id}', function($id){
    return view('listing',[
        'listing' => Listing::find($id) 
    ]) ;
});
