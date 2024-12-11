<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'row_id', 'rack_id', 'bin_id'];

    // Define relationships
    public function row()
    {
        return $this->belongsTo(Row::class, 'row_id');
    }

    public function rack()
    {
        return $this->belongsTo(Rack::class, 'rack_id');
    }

    public function bin()
    {
        return $this->belongsTo(Bin::class, 'bin_id');
    }
}
