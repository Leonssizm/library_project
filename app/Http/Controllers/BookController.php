<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
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

    public function showEditForm(Book $book):View 
    {
        return view('edit-book', [
            'book' => $book,
        ]);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return back()->with('success', 'Book Has Been Edited Successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }


}
