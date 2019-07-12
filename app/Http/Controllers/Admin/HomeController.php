<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.index');
    }
}
