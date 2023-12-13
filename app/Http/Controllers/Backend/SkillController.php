<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Response;

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
            // valid the image 
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
    public function destroy($id)
    {   Skill::destroy($id);
        return response('user delete successfully', Response::HTTP_NO_CONTENT);
    }
}