<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'break_take',
        'break_return',
    ];
    protected $dates = [
        'break_take', 
        'break_return'
    ];

    public function getBreakTimeAttribute(): int
    {
        if ($this->break_take && $this->break_return) {
            return Carbon::parse($this->break_return)->diffInMinutes(Carbon::parse($this->break_take));
        }
        return 0;
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
