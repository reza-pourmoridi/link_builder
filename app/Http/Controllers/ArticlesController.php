<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pricesModel;


class ArticlesController extends Controller
{
    public function index()
    {
        return view('admin.articles');
    }
}
