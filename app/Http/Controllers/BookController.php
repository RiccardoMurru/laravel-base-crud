<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(Book $book)
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }
}
