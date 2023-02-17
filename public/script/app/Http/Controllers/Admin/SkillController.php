<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->adminMiddleware();
    }

    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index', ['skills' => $skills]);
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(SkillRequest $request)
    {
        $input = $request->all();

        $data = array_combine($input['skills'], $input['percents']);
        foreach ($data as $skill => $percent) {
            Skill::create([
                "skill" => $skill,
                "percent" => $percent
            ]);
        }
        return redirect()->route('skill.index')->with('success', 'Data created successfully');

    }

    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', ['skill' => $skill]);
    }

    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $input = $request->all();
        $skill->update($input);
        return redirect()->route('skill.index')->with('success', 'Data updated successfully');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index')->with('success', 'Data deleted successfully');
    }
}
