<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Retrieve a list of all books
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    // Retrieve a single book by its ID
    public function show($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book, 200);
    }

    // Create a new book
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());
        return response()->json($book, 201);
    }
}
