<?php

namespace App\Http\Controllers;

use App\Leader;
use DataTables;
use DB;
class LeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('leader.index');
    }

    public function edit(Leader $leader)
    {
        dd($leader);
    }

    public function getData()
    {

        $leader = new Leader();
        $leaders = $leader->findLeaders();
        return \DataTables::of($leaders)
            ->addColumn('action', function ($leader) {
                return '<a href="leader/' . $leader->id . '" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}
