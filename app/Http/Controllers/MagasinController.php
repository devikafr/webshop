<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Product;
use App\Creator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
  public function index(Request $request)
  {
    $products = Product::find(2);
    // $request->session()->flash('status', 'Affichage reussi');

    if($products == NULL){
      $data = $request->session()->flash('status','Auccune produit retourne');
    }else{
      $data = $request->session()->flash('status', 'Affichage reussi');
    }
    //  return $products;
     return view('magasin', ['products' => $products]);
  }

}
