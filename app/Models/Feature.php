<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'feature';
    protected $fillable = [
        'image',
        'title',
        'desc',
    ];

    public function getImage() {
        return Storage::disk('img')->url($this->image);
    }
}
