<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rangModel;
use App\Models\closetnum;
use App\Models\floorModel;
use App\Models\book;
use App\Models\playlist;
class adminController extends Controller
{
    public function index()
    {
        $rages = rangModel::all();
        $closetnums = closetnum::all();
        $floors = floorModel::all();
        $books = book::all()->reverse();
        $playlists = playlist::all();
        return view('admin.index', ['rages' => $rages, 'closetnums' => $closetnums, 'floors' => $floors, 'books'=> $books,'playlists'=> $playlists]);
    }

}
