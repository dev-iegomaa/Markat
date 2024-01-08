<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminSkillInterface;
use App\Http\Traits\skill\SkillTrait;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSkillRepository implements AdminSkillInterface
{
    private $skillModel;
    use SkillTrait;
    public function __construct(Skill $skill)
    {
        $this->skillModel = $skill;
    }

    public function index()
    {
        $skills = $this->getAllSkillsData();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function insert($request)
    {
        $this->skillModel::create([
            'skill' => $request->skill,
            'progress' => $request->progress
        ]);
        Alert::toast('Skill Created Successfully', 'success');
        return redirect(route('admin.skill.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findSkillById($request->id)->delete();
        Alert::toast('Skill Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $skill = $this->findSkillById($id);
        if ($skill) {
            return view('admin.skill.edit', compact('skill'));
        }
        Alert::toast('Skill Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $this->findSkillById($request->id)->update([
            'skill' => $request->skill,
            'progress' => $request->progress
        ]);
        Alert::toast('Skill Updated Successfully', 'success');
        return redirect(route('admin.skill.index'));
    }
}
