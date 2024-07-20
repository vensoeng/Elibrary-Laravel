<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\playlist;
use App\Models\book;
class saveplaylist extends Model
{
    use HasFactory;
    protected $table = 'tbsaveplaylists';

    public function playlist()
    {
        return $this->belongsTo(playlist::class, 'playlist_id');
    }
    
    public function book()
    {
        return $this->belongsTo(book::class, 'book_id');
    }
}
