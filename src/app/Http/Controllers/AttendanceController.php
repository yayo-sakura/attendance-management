<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AttendancecorrectionRequest;
use App\Models\Attendance;
use App\Models\BreakTime;
use App\Models\Status;

class AttendanceController extends Controller
{
    public function show()
	{
        $user = Auth::user();
        $userId = Auth::id();
        $attendance = Attendance::where('user_id', $userId)->orderBy('updated_at', 'desc')->first();
        return view('attendance', compact('attendance'));
	}

    public function store(Request $request)
	{
        $user = Auth::user();
        $userId = Auth::id();
        $now = Carbon::now();
        $attendance = Attendance::where('user_id', $userId)->orderBy('updated_at', 'desc')->first();
        if ($request->has('start_time')) {
            $attendance = new Attendance();
            $param=[
                'user_id' => 2,
                'start_time' => $now
            ];
            $attendance->fill($param);
            $attendance->save();
            return view('attendance', compact('attendance'));
        } elseif ($request->has('break_take')) {
            $break_time = new BreakTime;
            $break_time->attendance_id = 2;
            $break_time->break_take = $now;
            $break_time->save();
            dd($break_time);
            return view('attendance', compact('attendance','break_time'));
        } else {
            return back()->withInput();
        }
	}

    public function update(Request $request)
    {
        $user = Auth::user();
        $userId = Auth::id();
        $now = Carbon::now();
        $attendance = Attendance::where('user_id', $userId)->orderBy('updated_at', 'desc')->first();
        if ($request->has('end_time')) {
            $attendance->end_time = $now;
            $attendance->save();
            return redirect()->route('attendance.update')->with('success', 'お疲れ様でした。');
        // } elseif ($request->has('break_take')) {
        //     $break_time = new BreakTime;
        //     $break_time->attendance_id = 2;
        //     $break_time->break_take = $now;
        //     $break_time->save();
        //     return view('attendance', compact('attendance','break_time'));
        } elseif ($request->has('break_return')) {
            $break_time = new BreakTime;
            $break_time->attendance_id = 2;
            $break_time->break_return = $now;
            $break_time->save();
        return view('attendance',compact('break_time','attendance'));
        }else {
            return back()->withInput();
        }
    }

    public function attendance_list()
	{
        return view('attendance_list');
	}

    public function attendance_detail()
	{
        return view('attendance_detail');
	}

    public function admin_attendance_list()
	{
        return view('admin_attendance_list');
	}

    public function admin_attendance_detail()
	{
        return view('admin_attendance_detail');
	}

    public function staff_attendance_list()
	{
        return view('staff_attendance_list');
	}
}
