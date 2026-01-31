<?php

namespace App\Models;

use App\Models\Optometra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Phone extends Model
{
    /** @use HasFactory<\Database\Factories\PhoneFactory> */
    use HasFactory;

    protected $fillable = [
        'optometra_id',
        'numero',
    ];
    // Relationships

    public function optometra(): BelongsTo
    {
        return $this->belongsTo(Optometra::class);
    }
}
