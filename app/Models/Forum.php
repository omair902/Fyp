<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ForumCategory;
use App\Models\User;
class Forum extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ForumCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

