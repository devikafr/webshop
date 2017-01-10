<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
  public function index()
  {
  return view('home');
  }

}
