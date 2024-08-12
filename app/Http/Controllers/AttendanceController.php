<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Exports\AttendanceExport;
use Maatwebsite\Excel\Facades\Excel;


class AttendanceController extends Controller
{
    /**
     * Display the attendance records.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

            // Retrieve the filter value from the request, default to null
            $attendedAt = $request->input('attended_at');

            if ($attendedAt) {
                // Filter by the provided date
                $attendances = Attendance::whereDate('attended_at', $attendedAt)
                                        ->orderBy('attended_at', 'desc')
                                        ->get();
            } else {
                // Show all records if no date is provided
                $attendances = Attendance::orderBy('attended_at', 'desc')
                                        ->get();
            }

            // Pass the data to the view
            return view('attendance', compact('attendances', 'attendedAt'));
    }

    /**
     * Show a form to mark attendance.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mark-attendance');
    }

    /**
     * Store a new attendance record.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'attended_at' => 'required|date',
        ]);

        Attendance::create($request->all());
        return redirect()->route('attendance.index')->with('success', 'Attendance marked successfully.');
    }


    /**
     * Export all attendance records to Excel.
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(Request $request)
    {
        $date = $request->input('attended_at');
        return Excel::download(new AttendanceExport($date), 'attendance.xlsx');
    }
}
