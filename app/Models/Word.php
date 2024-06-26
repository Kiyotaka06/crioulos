<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'language_code_id'];

    public function languageCode() {
        return $this->belongsTo(LanguageCode::class);
    }
}
