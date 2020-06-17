<?php

namespace App\Http\Controllers;

use App\Janitor;
use Illuminate\Http\Request;


class JanitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $janitors = Janitor::all();

        return view('janitors.index', compact('janitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('janitors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validate
        $request->validate([
            'name' => 'required|unique:janitors|alpha|max:50',
            'task' => 'required|alpha|max:50'
        ]);

        // dd($data);
        $new_janitor = new Janitor();
        $new_janitor->name = $data['name'];
        $new_janitor->task = $data['task'];
        $new_janitor->description = $data['description'];

        $saved_janitor = $new_janitor->save();
        // dd($saved_janitor);

        $janitor = Janitor::find($new_janitor->id);
        return redirect()->route('janitors.show', $janitor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function show(Janitor $janitor)
    {
        return view('janitors.show', compact('janitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Janitor $janitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Janitor $janitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Janitor $janitor)
    {
        //
    }
}
