<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommercialSpace;

class PagesController extends Controller
{
    public function index() {

        $commercialspace = CommercialSpace::orderBy('id', 'desc')->get();
        return view('pages.index')->with('commercialspace', $commercialspace);
    }

    public function commercialspacelist() {

        $commercialspace = CommercialSpace::orderBy('id', 'desc')->paginate(9);
        return view('pages.commercialspacelist4')->with('commercialspace', $commercialspace);
    }

    public function commercialspacesearch() {

        $commercialspace = CommercialSpace::orderBy('id', 'desc')->paginate(9);
        return view('pages.commercialspacesearch4')->with('commercialspace', $commercialspace);
    }

    public function commercialspace($id) {

        $commercialspace = CommercialSpace::findOrFail($id);
        return view('pages.commercialspace4')->with('commercialspace', $commercialspace);
    }
} 
