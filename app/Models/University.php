<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use http\Env\Request;
class University extends Model
{
    use HasFactory;

    public static function findOrFail($id)
    {
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function calculateAverageRating()
    {
        $totalScore = 0;
        $numberOfRatings = $this->ratings()->count();

        if ($numberOfRatings > 0) {
            foreach ($this->ratings as $rating) {
                $totalScore += $rating->average_score;
            }

            return $totalScore / $numberOfRatings;
        } else {
            return 0; // Ou toute autre valeur par défaut que vous préférez
        }
    }

    protected $fillable = [
        'name',
        'description',
        'location',
        'website',
        'logo'
    ];
}
