<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;

class InstructorApprovalController extends Controller
{
    public function AllInstructor()
    {
        $pendingInstructors = User::where('role', 'instructor')
            ->where('status', User::STATUS_PENDING)
            ->latest()
            ->get();

        $allInstructors = User::where('role', 'instructor')
            ->latest()
            ->get();

        return view('admin.backend.instructor.all_instructor', compact('pendingInstructors', 'allInstructors'));
    }

    public function AcceptInstructor($id)
    {
        $instructor = User::where('role', 'instructor')->findOrFail($id);
        $instructor->update(['status' => User::STATUS_APPROVED]);

        return redirect()->route('all.instructor')->with([
            'message' => $instructor->name.' has been accepted. They can now login.',
            'alert-type' => 'success',
        ]);
    }

    public function RejectInstructor($id)
    {
        $instructor = User::where('role', 'instructor')->findOrFail($id);
        $instructor->update(['status' => User::STATUS_REJECTED]);

        return redirect()->route('all.instructor')->with([
            'message' => $instructor->name.' has been rejected. They cannot login.',
            'alert-type' => 'warning',
        ]);
    }
}
