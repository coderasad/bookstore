<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['book'] = Book::where('status', 1)->latest()->get();
        return view('backend.pages.book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['book'] = Book::where('status', 1)->latest()->get();
        $data['category'] = Category::where('status', 1)->where('status', 1)->orderBy('category_name', 'ASC')->get();
        return view('backend.pages.book.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|unique:books',
            'author_name' => 'required',
            'sort_des' => 'required',
            'main_book' => 'required',
            'book_img' => 'required',
            'category_id' => 'required',
            'published_date' => 'required',
            'paid_free' => 'required'
        ]);
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->author_name = $request->author_name;
        $book->sort_des = $request->sort_des;
        $book->main_book = $request->main_book;
        $book->category_id = $request->category_id;
        $book->published_date = $request->published_date;
        $book->paid_free = $request->paid_free;
        $book->user_id = $request->user_id;
        if($request->hasFile('book_img')){
            $book->book_img  = $request->file('book_img')->store('backend/image/book',['disk' => 'public_uploads']);  
        }
        $save = $book->save();    

        if($save){
            session()->flash('level', 'success');
            session()->flash('msg', 'Book Added Successfully. ');
            return redirect()->back();
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['book'] = Book::where('id', $id)->where('status', 1)->first();
        return view('backend.pages.book.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
