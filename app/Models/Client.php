<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $fillable = [
        'name',
        'image',
    ];

    public function getImage() {
        return Storage::disk('img')->url($this->image);
    }
}
