<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\book;
use App\Models\rangModel;
use App\Models\closetnum;
use App\Models\floorModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required|string',
            'descript' => 'nullable|string',
            'length' => 'required|string',
            'star' => 'nullable|string',
            'range_id' => 'required|integer|exists:tbrang,id',
            'closet_id' => 'required|integer|exists:tbclosetnum,id',
            'floor_id' => 'required|integer|exists:tbfloor,id',
            'popular' => 'nullable|integer|in:0,1',
            'status' => 'required|integer|in:0,1',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $book = new book();

        $book->title = $request->input('title');
        $book->descript = $request->input('descript') ?? '';
        $book->length = $request->input('length');
        $book->star = $request->input('star') ?? '';
        $book->range_id = $request->input('range_id');
        $book->closet_id = $request->input('closet_id');
        $book->floor_id = $request->input('floor_id');
        $book->popular = $request->input('popular') ?? 0;
        $book->status = $request->input('status');

        // this is img 
        $uploadedFile = $request->file('img');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->storeAs('public/images', $fileName);
        $book->img = $fileName;

        $book->save();
        
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {   
        $rages = rangModel::all();
        $closetnums = closetnum::all();
        $floors = floorModel::all();
        return view('admin.editbook', ['rages' => $rages, 'closetnums' => $closetnums, 'floors' => $floors, 'book'=> $book]);
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
        $request->validate([
            'title' => 'required|string',
            'descript' => 'nullable|string',
            'length' => 'required|string',
            'star' => 'nullable|string',
            'range_id' => 'required|integer|exists:tbrang,id',
            'closet_id' => 'required|integer|exists:tbclosetnum,id',
            'floor_id' => 'required|integer|exists:tbfloor,id',
            'popular' => 'nullable|integer|in:0,1',
            'status' => 'required|integer|in:0,1',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // If image is uploaded, update it
        if ($request->hasFile('img')) {
            $oldImagePath = $book->img;
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $uploadedFile = $request->file('img');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $filePath = $uploadedFile->storeAs('public/images', $fileName);
            $book->img = $fileName;
        }
    
        $book->title = $request->input('title');
        $book->descript = $request->input('descript') ?? '';
        $book->length = $request->input('length');
        $book->star = $request->input('star') ?? '';
        $book->range_id = $request->input('range_id');
        $book->closet_id = $request->input('closet_id');
        $book->floor_id = $request->input('floor_id');
        $book->popular = $request->input('popular') ?? 0;
        $book->status = $request->input('status');
    
        $book->save();
        
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        Storage::delete('public/images/' . $book->img);
        $book->delete();
        return redirect()->route('admin')->with('success', 'Book and image deleted successfully.');
    }
}
