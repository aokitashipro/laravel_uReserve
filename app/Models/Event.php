<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'information',
        'max_people',
        'start_date',
        'end_date',
        'is_visible'
    ];

    protected function eventDate(): Attribute
    {
        return new Attribute(
            get: fn() => Carbon::parse($this->start_date)->format('Y年m月d日')
        );
    }

    protected function startTime(): Attribute
    {
        return new Attribute(
            get: fn() => Carbon::parse($this->start_date)->format('H時i分')
        );
    }

    protected function endTime(): Attribute
    {
        return new Attribute(
            get: fn() => Carbon::parse($this->end_date)->format('H時i分')
        );
    }

}
