<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id', 'judul'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function contents(): HasMany
    {
        return $this->hasMany(BlogContent::class);
    }
}
