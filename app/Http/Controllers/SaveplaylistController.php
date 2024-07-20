<?php

namespace App\Http\Controllers;

use App\Models\saveplaylist;
use App\Models\book;
use App\Models\playlist;
use Illuminate\Http\Request;
class SaveplaylistController extends Controller
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
            'playlistid' => 'required|integer|exists:tbplay,id',
            'bookid' => 'required|integer|exists:tbbook,id|unique:tbsaveplaylists,book_id,NULL,id,playlist_id,' . $request->input('playlistid'),
        ]);

        $list = new saveplaylist;

        $list->playlist_id  = $request->input('playlistid');
        $list->book_id  = $request->input('bookid');
        $list->save();
        return redirect()->route('showplaylist', ['playlist' => $request->input('playlistid')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\saveplaylist  $saveplaylist
     * @return \Illuminate\Http\Response
     */
    public function show(saveplaylist $saveplaylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\saveplaylist  $saveplaylist
     * @return \Illuminate\Http\Response
     */
    public function edit(saveplaylist $saveplaylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\saveplaylist  $saveplaylist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saveplaylist $saveplaylist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\saveplaylist  $saveplaylist
     * @return \Illuminate\Http\Response
     */
    public function destroy(saveplaylist $saveplaylist)
    {
        $playlistId = $saveplaylist->playlist_id;
        $saveplaylist->delete();
        return redirect()->route('showplaylist', ['playlist' => $playlistId]);
    }
}
