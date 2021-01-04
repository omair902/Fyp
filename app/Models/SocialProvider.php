<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_id',
        'provider',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
