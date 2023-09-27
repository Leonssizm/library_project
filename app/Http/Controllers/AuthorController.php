<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(): View {
        return view ('authors', [
            'authors' => Author::all(),
        ]);
    }
    public function showEditForm(Author $author):View 
    {
        return view('edit-author', [
            'author' => $author,
        ]);
    }
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return back()->with('success', 'Author Has Been Edited Successfully');
    }
}
