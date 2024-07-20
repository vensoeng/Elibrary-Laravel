<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\playlist;
use App\Models\book;
use App\Models\saveplaylist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'status' => 'required|string|in:0,1',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $playlist = new playlist;

        $playlist->title = $request->input('title');
        $playlist->status = $request->input('status');
        // this is img 
        $uploadedFile = $request->file('img');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->storeAs('public/images', $fileName);
        $playlist->img = $fileName;

        $playlist->save();

        return redirect()->route('showplaylist', ['playlist' => $playlist->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(playlist $playlist)
    {   
        $books = book::all()->reverse();
        $lists = saveplaylist::where('playlist_id', $playlist->id)->get();
        $playlists = playlist::all();
        return view('admin.playlist',['playlist' => $playlist,'books'=> $books,'lists' => $lists,'playlists'=> $playlists]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist $playlist)
    {
        return view('admin.editplaylist',['playlist' => $playlist]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist $playlist)
    {
        $request->validate([
            'title' => 'required|string',
            'status' => 'required|string|in:0,1',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // If image is uploaded, delete the old image
        if ($request->hasFile('img')) {
            $oldImagePath = $playlist->img;
            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
            $uploadedFile = $request->file('img');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $filePath = $uploadedFile->storeAs('public/images', $fileName);
            $playlist->img = $fileName;
        }

        $playlist->title = $request->input('title');
        $playlist->status = $request->input('status');

        $playlist->save();

        return redirect()->route('admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist $playlist)
    {

        saveplaylist::where('playlist_id', $playlist->id)->delete();

        Storage::delete('public/images/' . $playlist->img);
        
        $playlist->delete();

        return redirect()->route('admin');
    }
}
