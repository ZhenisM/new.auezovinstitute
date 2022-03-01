<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.books.index', [
            'books' => Book::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create', [
            'book'       => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('image');
        $ebook = $request->file('ebook');
        $audio = $request->file('audio');
        //Save article
        $book = Book::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if($image !== null) {
        $book->image = $image->getClientOriginalName();
        $book->image_show = Storage::disk('uploads')->put('book/' . $book->id, $image);
        $book->save();
        }

        if($ebook !== null) {
        $book->ebook = $ebook->getClientOriginalName();
        //$book->ebook_show = Storage::disk('uploads')->put('book/' . $book->id, $ebook);
        $book->ebook_show = Storage::disk('uploads')->putFileAs('book/'. $book ->id, $ebook, $book->ebook);
        $book->save();
        }

        if($audio !== null) {
            $book->audio = $audio->getClientOriginalName();
            $book->audio_show = Storage::disk('uploads')->put('book/' . $book->id, $audio);
            $book->save();
        }
        //Categories
        if ($request->input('categories')) :
            $book->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.books.index');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', [
            'book'    => $book,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if($image !== null) {
        $data['image'] = $image->getClientOriginalName();
        $data['image_show'] = Storage::disk('uploads')->put('book/'. $book ->id, $image);
        }


        $ebook = $request->file('ebook');

        //Store image & put image path & image name in the dataset.
        if($ebook !== null) {
        $data['ebook'] = $ebook->getClientOriginalName();
        $r = $ebook->getClientOriginalExtension();
        //$data['ebook_show'] = Storage::disk('uploads')->put('book/'. $book ->id, $ebook);
        $data['ebook_show'] = Storage::disk('uploads')->putFile('book/'. $book ->id, $ebook);
        }

        $audio = $request->file('audio');

        if($audio !== null) {
            $data['audio'] = $audio->getClientOriginalName();
            $data['audio_show'] = Storage::disk('uploads')->put('book/'. $book ->id, $audio);
        }
//        Store image & put image path & image name in the dataset.
//        Update article with given data.


        $book->update($data);

        //Categories.
        $book->categories()->detach();

        if ($request->input('categories')) :
            $book->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.books.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->categories()->detach();
        $book->delete();

        return redirect()->route('admin.books.index');
    }



    public function qr()
    {
        return view('admin.books.qr');
    }
}
