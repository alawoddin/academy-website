<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function AllCourse()
    {
        $alldata = Course::latest()->get();

        return view('admin.backend.course.all_course', compact('alldata'));
    }

    public function AddCourse()
    {
        return view('admin.backend.course.add_course');
    }

    public function StoreCourse(Request $request)
    {
        $data = [
            'title' => $request->title,
            'category_name' => $request->category_name,
            'videos' => $request->videos,
            'hours' => $request->hours,
            'price' => $request->price,
            'author_name' => $request->author_name,
            'author_role' => $request->author_role,
        ];

        if ($request->file('icon')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('icon');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['icon'] = 'upload/course/'.$name_gen;
        }
        if ($request->file('tag_image')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('tag_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['tag_image'] = 'upload/course/'.$name_gen;
        }
        if ($request->file('author_image')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('author_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['author_image'] = 'upload/course/'.$name_gen;
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

        return view('admin.backend.course.edit_course', compact('course'));
    }

    public function UpdateCourse(Request $request)
    {
        $course = Course::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'category_name' => $request->category_name,
            'videos' => $request->videos,
            'hours' => $request->hours,
            'price' => $request->price,
            'author_name' => $request->author_name,
            'author_role' => $request->author_role,
        ];

        if ($request->file('icon')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('icon');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['icon'] = 'upload/course/'.$name_gen;
        }
        if ($request->file('tag_image')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('tag_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['tag_image'] = 'upload/course/'.$name_gen;
        }
        if ($request->file('author_image')) {
            $dir = public_path('upload/course');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('author_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['author_image'] = 'upload/course/'.$name_gen;
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
}