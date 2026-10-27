<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $alldata = Blog::latest()->get();

        return view('admin.backend.blog.all_blog', compact('alldata'));
    }

    public function AddBlog()
    {
        return view('admin.backend.blog.add_blog');
    }

    public function StoreBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:blogs,title',
            'description' => 'nullable|string|max:5000',
            'date' => 'nullable|string|max:50',
            'author_name' => 'nullable|string|max:150',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'title.unique' => 'A blog with this title already exists.',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'author_name' => $request->author_name,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/blog');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/blog/'.$name_gen;
        }
        if ($request->file('author_image')) {
            $dir = public_path('upload/blog');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('author_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['author_image'] = 'upload/blog/'.$name_gen;
        }
        Blog::create($data);

        $notification = [
            'message' => 'Blog Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.backend.blog.edit_blog', compact('blog'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'title')->ignore($blog->id),
            ],
            'description' => 'nullable|string|max:5000',
            'date' => 'nullable|string|max:50',
            'author_name' => 'nullable|string|max:150',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'title.unique' => 'A blog with this title already exists.',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'author_name' => $request->author_name,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/blog');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/blog/'.$name_gen;
        }
        if ($request->file('author_image')) {
            $dir = public_path('upload/blog');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('author_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['author_image'] = 'upload/blog/'.$name_gen;
        }
        $blog->update($data);

        $notification = [
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog')->with($notification);
    }

    public function DeleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $notification = [
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog')->with($notification);
    }
}