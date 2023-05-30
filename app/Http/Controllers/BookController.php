<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $one = Book::where('id','=',1 )->get();


        return view('home', compact('books','one'));
    }
}
