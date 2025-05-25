<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multipic;

class PortfolioController extends Controller
{
    public function index($id) {
         $images  = Multipic::where([['category_id', $id]])->get();
        //  return $images;
        // $images = Multipic::all();
        return view('pages.portfolio', compact('images'));
        //  return redirect()->route('portfolio')->with($images);
    }
}
