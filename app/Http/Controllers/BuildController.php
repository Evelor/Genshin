<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildController extends Controller
{
    public function index() {

        $builds = DB::table('builds')->get();
        return view('builds', ['builds' => $builds]);
    }
}
