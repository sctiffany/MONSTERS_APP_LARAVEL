<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monster;

class MonstersController extends Controller
{
    public function index()
    {
        $monsters = Monster::all();
        return view('monsters.index', compact('monsters'));
    }
}
