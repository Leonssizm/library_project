<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
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

    public function store(StoreBookRequest $request)
    {
        $authorNamesString = $request->input('author');

        $authorNames = explode(',', $authorNamesString);
        $authorNames = array_map('trim', $authorNames);
        $authorNames = array_unique($authorNames);
    
        $authorIds = [];
        foreach ($authorNames as $authorName) {
            $author = Author::firstOrCreate(['name' => $authorName]);
    
            $authorIds[] = $author->id;
        }
        $book = Book::create($request->validated());
        $book->authors()->sync($authorIds);

        return route('home.list');
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
