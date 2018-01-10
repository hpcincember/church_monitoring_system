<?php

namespace App\Http\Controllers;

use App\Leader;
use Illuminate\Http\Request;
use DataTables;
class LeaderController extends Controller
{
    public function index()
    {
        return view('leader.index');
    }

    public function getData()
    {
        return \DataTables::of(Leader::query())->make(true);
    }
}
