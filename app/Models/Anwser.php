<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anwser extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

        public function author()
    {
        return $this->belongsTo(Faq::class, 'faq_id');
    }
}