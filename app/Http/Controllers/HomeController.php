<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = new stdClass();
        $data->products = Product::latest()->get();
        return view('home', compact('data'));
    }
}
