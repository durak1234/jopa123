<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;

class SkillController extends Controller
{
    public function renderCreatePage ()
    {
        $skills = Skill::all();

        return view('createSkill')->with('skills',$skills);
    }

    public function createSkill(Request $request)
    {
        $data = $request->all();

        $skill = Skill::create($data);

        return back();
    }

    public function skillDelete($id)
    {
        $skill = Skill::find($id);
        if($skill){
            $skill->delete();
        }
        return back();
    }
}
