<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index($name){
        $pages = DB::table('pages')->where('template', $name)->first();
        return view('app')->with(compact($pages,'pages'));
    }
}
