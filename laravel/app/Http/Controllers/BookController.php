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
    public function compareproduct()
    {
        return view('compareproduct');
    }
    public function add_product(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('product'), $imageName);
        Book::create([
           'title' => $request->input('title'),
           'description' => $request->input('description'),
           'image' => '/product/' . $imageName,
           'price' => $request->input('price'),
           'author' => $request->input('author'),
        ]);
        return redirect()->route('root');
    }
}
