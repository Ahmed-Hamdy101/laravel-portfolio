<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    // index

    public function index()
    {

        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }
    //  this for creat page blade will show the view of create
    public function create()
    {
        return view('skills.create');
    }

    /*
     * @param App\Http\Requests\StoreSkillRequest;
     * 
     */
    public function store(StoreSkillRequest $request)
    {
        // if the file it has 
        if ($request->hasFile('image')) {
            // valid the image  and store linking between storage and public folder
            $image = $request->file('image')->store('skills', 'public');
            // create new skills from req form
            Skill::create(
                [
                    'name' => $request->name,
                    'image' => $image
                ]
            );

            return redirect()->route('skills.index');
        }
        return back();

    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'min:3',
            'image' => ['nullable', 'required']
        ]);
    
        // Get the current image path
        $currentImage = $skill->image;
    
        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the current image
            Storage::delete($currentImage);
    
            // Store the new image and update the image variable
            $imagePath = $request->file('image')->store('skills', 'public');
            $currentImage = $imagePath;
        }
    
        // Update the skill
        $skill->update([
            'name' => $request->name,
            'image' => $currentImage,
        ]);
    
        return redirect()->route('skills.index');
    }
    
    public function destroy($id)
    {   Skill::destroy($id);
        return response('user delete successfully', Response::HTTP_NO_CONTENT);
    }
}