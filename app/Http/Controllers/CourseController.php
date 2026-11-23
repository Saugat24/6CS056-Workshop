<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // return view('course.list', ['courses' => Course::all()]);
    }

    public function create()
    {
        // return view('course.create');
    }

    public function store(Request $request)
    {
        // validate, create, redirect
    }

    public function show($id)
    {
        // return view('course.detail', ['course' => Course::findOrFail($id)]);
    }

    public function edit($id)
    {
        // return view('course.edit', ['course' => Course::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        // validate, update, redirect
    }

    public function destroy($id)
    {
        // Course::findOrFail($id)->delete(); redirect back
    }
}
