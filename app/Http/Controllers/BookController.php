<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): View {
        return view ('home', [
            'books' => Book::all(),
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }


}
