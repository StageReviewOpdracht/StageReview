<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    function index (){
        $company = DB::table('company')->paginate(9);
        return view('index',['company'=>$company]);
    }
}
