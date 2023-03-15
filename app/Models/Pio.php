<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Events\PioCreated;

class Pio extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    protected $dispatchesEvents = [
        'created' => PioCreated::class,

    ];

    /**
     * Returns user owner
     *
     * @return User
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
