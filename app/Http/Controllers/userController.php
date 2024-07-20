<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\book;
use App\Models\playlist;
use App\Models\saveplaylist;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::where('status','1')->where('status','1')->get()->reverse();
        $playlists = playlist::select('id', 'title')->where('status','1')->get();
        return view('welcome',['books'=> $books,'playlists'=> $playlists]);
    }

    public function playlist()
    {
        $playlists = playlist::withCount('saveplaylists')->where('status','1')->get();
        return view('playlist.index',['playlists'=> $playlists]);
    }

    public function palylistinfor($id){
        $lists = saveplaylist::where('playlist_id', $id)->get();
        $playlists = playlist::select('id', 'title')->where('status','1')->get();
        return view('playlistinfor.index',['lists'=> $lists,'playlists'=> $playlists]);
    }

    public function popular()
    {
        $books = book::where('popular','1')->where('status','1')->get()->reverse();
        $playlists = playlist::select('id', 'title')->where('status','1')->get();
        return view('popular.index',['books'=> $books,'playlists'=> $playlists]);
    }
    
    public function new()
    {
        // Get the start and end dates of the current week
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        // Retrieve books added within the current week
        $books = book::whereBetween('created_at', [$startOfWeek, $endOfWeek])->where('status','1')->get()->reverse();

        $playlists = playlist::select('id', 'title')->where('status','1')->get();
        return view('new.index',['books'=> $books,'playlists'=> $playlists]);
    }

    public function search(Request $request)
    {
        $query = $request->input('search-text');

        $books = Book::where('title', 'like', "%$query%")->where('status','1')->get();
        $playlists = playlist::select('id', 'title')->where('status','1')->get();

        if ($books->count() === 1) {
            $bookId = $books->first()->id;
            return redirect()->route('bookinfor',$bookId);
        }elseif ($books->count() === 0){
            return view('search.index',['books'=> $books,'playlists'=> $playlists,'Emty'=>'0']);
        }else{ 
            return view('search.index',['books'=> $books,'playlists'=> $playlists]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::where('id', $id)->where('status','1')->firstOrFail();
        $playlists = playlist::select('id', 'title')->get();
        $book_closet = book::where('closet_id', $book->closet_id)->where('range_id', $book->range_id)->get();
        $book_rage = book::where('range_id',$book->range_id)->get();
        return view('bookinfor.index',['book'=> $book,'book_closet'=> $book_closet,'book_rage'=> $book_rage,'playlists'=> $playlists]);
    }
}
