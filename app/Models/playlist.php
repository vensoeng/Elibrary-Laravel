<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\saveplaylist;
class playlist extends Model
{
    use HasFactory;
    protected $table = 'tbplay';
    
    public function saveplaylists()
    {
        return $this->hasMany(saveplaylist::class, 'playlist_id');
    }
}
