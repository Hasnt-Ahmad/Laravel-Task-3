<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    //

    public function displayBooks(){
        $books=Books::all();
        return view("welcome",["books"=>$books]);
    }

    public function addBooks(Request $request){
        $book=new Books();
        $book->name=request('name');
        $book->book_title=request('title');
        $book->publication_year=request('publication');
        $book->save();
        Session::flash('success', 'Book added successfully.');
        return redirect("/");
    }
    public function editBooks($id){
        ;
        $book = Books::find($id);
        return view('edit',["book"=>$book]);
     }
     public function updateBooks($id){
        $book = Books::find($id);
        $book->name=request('name');
        $book->book_title=request('title');
        $book->publication_year=request('publication');
        $book->save();
        Session::flash('updated', 'Book added successfully.');
        return redirect("/");
     }
     public function deleteBooks($id){
        $book = Books::find($id);
        $book->delete();
        Session::flash('deleted', 'Book added successfully.');
        return redirect("/");
     }
}
