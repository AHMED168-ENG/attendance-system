<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->date) {
            // Filter by the provided date
            $attendances = Attendance::whereDate('attended_at', $this->date)->get();
        } else {
            // Show all records if no date is provided
            $attendances = Attendance::all();
        }

        return $attendances;
    }
    public function __construct($date = null)
    {
        $this->date = $date;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Attended At',
            'Created At',
            'Updated At',
        ];
    }
}
