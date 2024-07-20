<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\closetnum;
use App\Models\floorModel;
use App\Models\playlist;
use App\Models\rangModel;
use App\Models\saveplaylist;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Book::orderByDesc('id')
                ->with('range')
                ->with('closet')
                ->with('floor')
                ->get()
        );
    }
    public function playlist()
    {
        return response()->json(playlist::withCount('saveplaylists')->where('status','1')->get());
    }
    public function playlistInfor($id = 1)
    {
        $playlist = saveplaylist::with(['book.range', 'book.closet', 'book.floor'])
        ->where('playlist_id', $id)
        ->get();

        return response()->json($playlist);
    }
    public function search($text)
    {   
        return response()->json(Book::where('title', 'like', "%$text%")->where('status','1')
        ->with('range')
        ->with('closet')
        ->with('floor')
        ->get());
    }

    public function rage()
    {
        return response()->json(rangModel::all());
    }
    public function close()
    {
        return response()->json(closetnum::all());
    }
    public function floor()
    {
        return response()->json(floorModel::all());
    }
}
