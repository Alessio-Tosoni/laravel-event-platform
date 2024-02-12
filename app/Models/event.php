<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{

    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "location",
        "date",
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
