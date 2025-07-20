<?php

namespace App\Http\Controllers;

use App\Models\mymodel;
use Illuminate\Http\Request;

class MymodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mymodel = mymodel::all();
       return view('projects.index' , compact('mymodel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated =  $request->validate(
        [

'name' => 'required|string',
'email' => 'required|string',
'password' => 'required|min:6|max:9',
        ]
        );
        mymodel::create($validated);
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(mymodel $mymodel)
    {
          
       return view('projects.show' , compact('mymodel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mymodel $mymodel)
    {
        return view('projects.edit', compact('mymodel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mymodel $mymodel)
    {
        $mymodel->update($request->all());
       return redirect()->route('mymodel.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mymodel $mymodel)
    {
        $mymodel->delete();
        return back();
    }
}
