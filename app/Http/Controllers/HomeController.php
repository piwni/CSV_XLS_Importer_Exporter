<?php

namespace App\Http\Controllers;

use App\Models\Elements;
use App\Models\Views;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $model = new Views();
        $views = $model->elements();

        return view('welcome',compact('views'));
    }
}
