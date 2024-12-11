<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //
    public static function index()
    {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    public static function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form 
    public static function create(){
        return view('listings.create') ;
    }

    // add or store new data
    public static function store(Request $request){
        // dd($request->all()) ;

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
            'tags' => 'required'
        ]);

        Listing::create($formFields) ;
        
        return redirect('/')->with('message', 'Listing created successfully !'); 
    }

    // show edit form for updating existing data
    public static function edit(Listing $listing){
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    // edit/update data
    public static function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
            'tags' => 'required'
        ]);
        $listing->update($formFields) ;

        return back()->with('Message', 'Gigs Updated Successfully') ;
    }

}
