<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\rangModel;
use App\Models\closetnum;
use App\Models\floorModel;
use App\Models\saveplaylist;
class book extends Model
{
    use HasFactory;
    protected $table = 'tbbook';

    public function range()
    {
        return $this->belongsTo(rangModel::class, 'range_id');
    }

    public function closet()
    {
        return $this->belongsTo(Closetnum::class, 'closet_id');
    }

    public function floor()
    {
        return $this->belongsTo(FloorModel::class, 'floor_id');
    }
}
