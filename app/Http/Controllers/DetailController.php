<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $detail = Detail::find($id);

        return view('posting', compact('detail'));
    }
}
