<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FactoryController;

use Auth;
use DB;

class FunctionalTrimController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function pageIndex()
    {
        return view('layout/partials/functionalTrim/manage');
    }

    public function create()
    {
        return view('layout/partials/functionalTrim/create');
    }
}
