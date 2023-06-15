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
        $book = Book::all();
        return view('compareproduct',compact('book'));
    }
    public function update_get(Request $request, $id)
    {
        $book = Book::find($id);
        return view('update',compact('book'));
    }
    public function compare_product(Request $request)
    {
        $book = Book::all();
        $product1 = null;
        $product2 = null;
        if($request->has('product1')){
            $product1 = Book::find($request->input('product1'));
        }
        if($request->has('product2')){
            $product2 = Book::find($request->input('product2'));
        }

        return view('compareproduct',compact('book','product1','product2'));
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
    public function updates(Request $request,$id)
    {
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'), $imageName);
            $product = Book::find($id);
            $product->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => '/product/' . $imageName,
                'price' => $request->input('price'),
                'author' => $request->input('author'),
            ]);
        }else{
            $product = Book::find($id);
            $product->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'author' => $request->input('author'),
            ]);
        }


        return redirect()->route('root');
    }
    public function delete(Request $request,$id)
    {
        $product = Book::find($id);
        $product->delete();

        return redirect()->route('root');
    }
}
