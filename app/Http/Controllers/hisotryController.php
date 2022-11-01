<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

public function index()
{
  $tasks = Task::where('status', true)->get();
 
  return view('tasks.index', compact('tasks'));
}