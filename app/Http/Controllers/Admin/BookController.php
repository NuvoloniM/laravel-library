<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mi creo un array di dati collegati alla nostra tabella da poter utilizzare nella create 
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.books.create' , compact('authors', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_book = new Book();
        $new_book->fill($data);
        if ( array_key_exists( 'genres', $data ) )  $book->genre()->attach($data['genres']);
        $new_book->save();


        return redirect()->route('admin.books.index')->with('message', "Hai creato un nuovo libro : $new_book->title");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $genres = Genre::all();

        $book_genre_id = $book->genre->pluck('id')->toArray();
        return view('admin.books.edit', compact('book', 'authors', 'genres', 'book_genre_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();

        $book->update($data);
        if ( array_key_exists( 'genres', $data ) )  $book->genre()->sync( $data['genres'] );
        $book->save();


        return redirect()->route('admin.books.show', compact('book'))->with('message', "Hai modificato con successo: $book->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index')->with('message', 'hai eliminato il libro con successo');
    }
}
