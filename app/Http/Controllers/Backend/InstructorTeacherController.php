<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\InstructorCourse;
use App\Support\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorTeacherController extends Controller
{
    public function TeacherProfile()
    {
        $team = Auth::user()->ensureTeam();

        return view('instructor.teacher_profile', compact('team'));
    }

    public function TeacherProfileStore(Request $request)
    {
        $user = Auth::user();
        $team = $user->ensureTeam();

        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'hours' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'experience' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'hours' => $request->hours,
            'description' => $request->description,
            'experience' => $request->experience,
        ];

        if ($request->hasFile('image')) {
            $path = Media::store($request->file('image'), 'upload/team');
            if ($path) {
                $data['image'] = $path;
            }
        }

        $team->update($data);
        $user->update(['name' => $request->name]);

        return redirect()->route('instructor.teacher')->with([
            'message' => 'Teacher page updated successfully',
            'alert-type' => 'success',
        ]);
    }

    public function AllCourse()
    {
        $courses = Auth::user()->instructorCourses()->with('outlines')->latest()->get();

        return view('instructor.teacher_courses', compact('courses'));
    }

    public function AddCourse()
    {
        return view('instructor.teacher_course_form', [
            'course' => null,
        ]);
    }

    public function StoreCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'outline' => 'nullable|array',
            'outline.*' => 'nullable|string|max:255',
        ]);

        $course = Auth::user()->instructorCourses()->create([
            'title' => $request->title,
            'duration' => $request->duration,
        ]);

        $this->syncOutlines($course, $request->input('outline', []));
        Auth::user()->ensureTeam();

        return redirect()->route('instructor.courses')->with([
            'message' => 'Course outline added successfully',
            'alert-type' => 'success',
        ]);
    }

    public function EditCourse($id)
    {
        $course = Auth::user()->instructorCourses()->with('outlines')->findOrFail($id);

        return view('instructor.teacher_course_form', compact('course'));
    }

    public function UpdateCourse(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'outline' => 'nullable|array',
            'outline.*' => 'nullable|string|max:255',
        ]);

        $course = Auth::user()->instructorCourses()->findOrFail($request->id);
        $course->update([
            'title' => $request->title,
            'duration' => $request->duration,
        ]);
        $this->syncOutlines($course, $request->input('outline', []));

        return redirect()->route('instructor.courses')->with([
            'message' => 'Course outline updated successfully',
            'alert-type' => 'success',
        ]);
    }

    public function DeleteCourse($id)
    {
        Auth::user()->instructorCourses()->findOrFail($id)->delete();

        return redirect()->route('instructor.courses')->with([
            'message' => 'Course outline deleted successfully',
            'alert-type' => 'success',
        ]);
    }

    private function syncOutlines(InstructorCourse $course, array $outlines): void
    {
        $course->outlines()->delete();

        foreach (array_values($outlines) as $index => $title) {
            $title = trim((string) $title);
            if ($title === '') {
                continue;
            }

            $course->outlines()->create([
                'title' => $title,
                'sort_order' => $index + 1,
            ]);
        }
    }
}
