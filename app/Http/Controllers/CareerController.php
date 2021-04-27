<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = career::all();
        return view('pages.career.index',compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'job_type' => 'required',
            'location' => 'required',
        ]);
        $career = new Career();
        $career->title = $request->title;
        $career->description = $request->description;
        $career->salary = $request->salary;
        $career->job_type = $request->job_type;
        $career->location = $request->location;
        $career->save();
        return redirect()->route('career.index')->with('success','Blog has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = career::find($id);
        return view('pages.career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'job_type' => 'required',
            'location' => 'required',
        ]);
        $career = Career::find($id);
        $career->title = $request->title;
        $career->description = $request->description;
        $career->salary = $request->salary;
        $career->job_type = $request->job_type;
        $career->location = $request->location;
        $career->save();
        return redirect()->route('career.index')->with('success','Blog has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('career.index')->with('success','Blog has been deleted successfully');
    }
}
