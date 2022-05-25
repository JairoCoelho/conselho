<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Escola;

class HomeController extends Controller
{
    public function index()
    {
      $escolas = Escola::all();
      return view('home',compact('escolas'));
    }
}
