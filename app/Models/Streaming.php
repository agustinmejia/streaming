<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Streaming extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];


    public function server(){
        return $this->belongsTo(Server::class);
    }
}
