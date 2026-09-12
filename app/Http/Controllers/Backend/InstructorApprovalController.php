<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

    public function AddInstructor()
    {
        return view('admin.backend.instructor.add_instructor');
    }

    public function StoreInstructor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email',
            'phone' => 'nullable|string|max:50',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $instructor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'instructor',
            'status' => User::STATUS_APPROVED,
        ]);

        $instructor->ensureTeam();

        return redirect()->route('all.instructor')->with([
            'message' => $instructor->name.' was added. They can login and add their own teacher info and course outlines.',
            'alert-type' => 'success',
        ]);
    }

    public function AcceptInstructor($id)
    {
        $instructor = User::where('role', 'instructor')->findOrFail($id);
        $instructor->update(['status' => User::STATUS_APPROVED]);
        $instructor->ensureTeam();

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
