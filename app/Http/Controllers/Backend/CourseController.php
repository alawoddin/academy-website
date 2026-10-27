<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Support\Media;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function AllCourse()
    {
        $alldata = Course::latest()->get();

        return view('admin.backend.course.all_course', compact('alldata'));
    }

    public function AddCourse()
    {
        $categories = Category::orderBy('title')->get();

        return view('admin.backend.course.add_course', compact('categories'));
    }

    public function StoreCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:courses,title',
            'category_id' => 'nullable|exists:categories,id',
            'category_name' => 'nullable|string|max:255',
            'new_category' => 'nullable|string|max:255',
            'videos' => 'nullable|string|max:100',
            'hours' => 'nullable|string|max:50',
            'price' => 'nullable|string|max:50',
            'author_name' => 'nullable|string|max:150',
            'author_role' => 'nullable|string|max:150',
            'description' => 'nullable|string|max:5000',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tag_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'title.unique' => 'A course with this title already exists.',
        ]);

        $category = $this->resolveCategory($request);

        $data = [
            'title' => $request->title,
            'category_id' => $category?->id,
            'category_name' => $category?->title ?? $request->category_name,
            'videos' => $request->videos,
            'hours' => $request->hours,
            'price' => $request->price,
            'author_name' => $request->author_name,
            'author_role' => $request->author_role,
            'description' => $request->description,
        ];

        foreach (['icon', 'tag_image', 'author_image'] as $field) {
            if ($path = Media::store($request->file($field), 'upload/course', 800)) {
                $data[$field] = $path;
            }
        }

        if (empty($data['icon'])) {
            $data['icon'] = Course::iconForTitle($request->title);
        }

        Course::create($data);

        $notification = [
            'message' => 'Course Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.course')->with($notification);
    }

    public function EditCourse($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::orderBy('title')->get();

        return view('admin.backend.course.edit_course', compact('course', 'categories'));
    }

    public function UpdateCourse(Request $request)
    {
        $course = Course::findOrFail($request->id);

        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('courses', 'title')->ignore($course->id),
            ],
            'category_id' => 'nullable|exists:categories,id',
            'category_name' => 'nullable|string|max:255',
            'new_category' => 'nullable|string|max:255',
            'videos' => 'nullable|string|max:100',
            'hours' => 'nullable|string|max:50',
            'price' => 'nullable|string|max:50',
            'author_name' => 'nullable|string|max:150',
            'author_role' => 'nullable|string|max:150',
            'description' => 'nullable|string|max:5000',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tag_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'title.unique' => 'A course with this title already exists.',
        ]);

        $category = $this->resolveCategory($request);

        $data = [
            'title' => $request->title,
            'category_id' => $category?->id,
            'category_name' => $category?->title ?? $request->category_name,
            'videos' => $request->videos,
            'hours' => $request->hours,
            'price' => $request->price,
            'author_name' => $request->author_name,
            'author_role' => $request->author_role,
            'description' => $request->description,
        ];

        foreach (['icon', 'tag_image', 'author_image'] as $field) {
            if ($path = Media::store($request->file($field), 'upload/course', 800)) {
                $data[$field] = $path;
            }
        }

        if (empty($data['icon'])) {
            $data['icon'] = Course::iconForTitle($request->title);
        }

        $course->update($data);

        $notification = [
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.course')->with($notification);
    }

    public function DeleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        $notification = [
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.course')->with($notification);
    }

    private function resolveCategory(Request $request): ?Category
    {
        $newTitle = trim((string) $request->new_category);
        if ($newTitle !== '') {
            return Category::firstOrCreate(
                ['title' => $newTitle],
                [
                    'description' => 'Courses in '.$newTitle,
                    'rating' => '5',
                    'teachers' => '10 Teachers',
                    'hours' => '60+',
                    'image' => 'frontend/assets/media/courses/categories/c-1.png',
                ]
            );
        }

        if ($request->category_id) {
            return Category::find($request->category_id);
        }

        $title = trim((string) $request->category_name);
        if ($title === '') {
            return null;
        }

        return Category::firstOrCreate(
            ['title' => $title],
            [
                'description' => 'Courses in '.$title,
                'rating' => '5',
                'teachers' => '10 Teachers',
                'hours' => '60+',
                'image' => 'frontend/assets/media/courses/categories/c-1.png',
            ]
        );
    }
}
