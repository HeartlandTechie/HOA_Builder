<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MinutesData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFileAttribute()
    {
        return Str::remove('/Minutes/',$this->filename);

    }

    public function getSynopsisAttribute()
    {


       $text =  Str::remove('Silver Lake Homes Association',$this->pdf_text);

       $text = Str::limit($text , 100, $end='...');

        return $text;

    }
}
