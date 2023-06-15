<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('book',compact('book'));
    }
    public function product(Request $request,$id)
    {
        $book = Book::find($id);
        return view('product',compact('book'));
    }
}
