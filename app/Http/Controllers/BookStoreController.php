<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function edit($id)
    {
        $book = Book::Find($id);
        return view('edit',compact('book'));
    }

    public function update(Request $request,$id)
    {
        $book = Book::find($id);
        if($request->file('book_image')){
            $oldImagePath = public_path().'/uploads/'.$book->book_image;
            @unlink($oldImagePath);
            $file = $request->file('book_image');
            $storeimage = date('ymds').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $storeimage);
            $book->update([
                'book_image'=>$storeimage
            ]);
        }
        
        $book->update([
            'isbn_no'=>$request -> isbn_no,
            'title'=>$request -> title,
            'author'=>$request -> author,
            'published_year'=>$request ->published_year,
            'price'=>$request ->price,

        ]);
        return redirect('/')->with('successUpdate','Book updated successfully');
   
    }
        

    public function delete($id)
    {
        $book = Book::Find($id);
        $imagePath = public_path().'/uploads/'.$book->book_image;
        $book->delete();
        @unlink($imagePath);
        return back()->with('successDelete','Bookdetails deleted succefully');
    }

    public function view()
    {
        $info = Book::all();
        return view('view',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $request->validate([
            'isbn_no'=> 'required',
            'title'=>'required',
            'author'=>'required',
            'published_year'=>'required',
            'book_image'=>'required|mimes:jepg,jpg,png',
            'price'=>'required',
        ]);

        $file = $request->file('book_image');
        $storeimage = date('ymds').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/'), $storeimage);

        book::insert([
            'isbn_no'=>$request -> isbn_no,
            'title'=>$request -> title,
            'author'=>$request -> author,
            'published_year'=>$request ->published_year,
            'book_image'=>$storeimage,
            'price'=>$request->price
        ]);
        return redirect()->back()->with('success','Book added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
   

    
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
