<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildController extends Controller
{
    public function index() {

        $builds = Build::all();
        return Inertia::render('Builds/Index', ['builds' => $builds]);
    }

    public function create() {
        return Inertia::render('Builds/Create');
    }

    public function store(Request $request) {
        Validator::make($request->all(), [
            'name' => ['required'],
            'weapons' => ['required'],
            'artifacts'=> ['required'],
            'teamcomps' => ['required']
        ])->validate();

        Build::create($request->all());

        return redirect()->route('builds.index');
    }

    public function edit(Build $build)
    {
        return Inertia::render('Builds/Edit', [
            'build' => $build
        ]);
    }
//
//    public function show() {
//
//    }



    public function update($id, Request $request) {
        Validator::make($request->all(), [
            'name' => ['required'],
            'weapons' => ['required'],
            'artifacts'=> ['required'],
            'teamcomps' => ['required']
        ])->validate();

        Build::find($id)->update($request->all());
        return redirect()->route('builds.index');

    }

    public function destroy($id) {
        Build::find($id)->delete();
        return redirect()->route('builds.index');
    }
}
