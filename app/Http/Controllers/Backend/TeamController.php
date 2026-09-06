<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function AllTeam()
    {
        $alldata = Team::latest()->get();

        return view('admin.backend.team.all_team', compact('alldata'));
    }

    public function AddTeam()
    {
        return view('admin.backend.team.add_team');
    }

    public function StoreTeam(Request $request)
    {
        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'rating' => $request->rating,
            'hours' => $request->hours,
            'description' => $request->description,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/team');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/team/'.$name_gen;
        }
        Team::create($data);

        $notification = [
            'message' => 'Team Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.team')->with($notification);
    }

    public function EditTeam($id)
    {
        $team = Team::findOrFail($id);

        return view('admin.backend.team.edit_team', compact('team'));
    }

    public function UpdateTeam(Request $request)
    {
        $team = Team::findOrFail($request->id);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'rating' => $request->rating,
            'hours' => $request->hours,
            'description' => $request->description,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/team');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/team/'.$name_gen;
        }
        $team->update($data);

        $notification = [
            'message' => 'Team Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.team')->with($notification);
    }

    public function DeleteTeam($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        $notification = [
            'message' => 'Team Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.team')->with($notification);
    }
}