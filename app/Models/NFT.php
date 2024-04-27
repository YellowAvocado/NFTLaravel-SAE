<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['title', 'image_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
