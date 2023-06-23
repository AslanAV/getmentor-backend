<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'name',
        'email',
        'telegram_username',
        'photo_url',
        'job',
        'workplace',
        'about',
        'description',
        'competencies',
        'price',
        'experience',
        'mentee_count',
        'link_to_calendar',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class);
    }
}
