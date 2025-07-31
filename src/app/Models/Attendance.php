<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    protected $fillable = ['user_id', 'start_time', 'end_time'];
    protected $dates = ['start_time', 'end_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    public function breaks()
    {
        return $this->hasMany(BreakTime::class);
    }

}
