<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Heading is here !',
        'listings' => [
            [
            'id' => 1 ,
            'title' => 'Listing number 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
            ],
            [
            'id' => 2 ,
            'title' => 'Listing number 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
            ],
            [
            'id' => 3 ,
            'title' => 'Listing number 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
            ]
        ]
    ]);
});



Route::get('/hello', function(){
    return response('<h1>Hello world</h1>',200)
    ->header('Content-Type', 'text/plain')
    ->header("foo", "bar")
    ; 
});

Route::get("/search", function(Request $request){
    return $request->name.' '. $request->city ; 
});