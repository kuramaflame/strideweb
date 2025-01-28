<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Listing;

class IndexController extends Controller
{
    public function show(){
        $listings = Listing::all();
        return view('index', ['listings'=>$listings]);
  
    }
}
