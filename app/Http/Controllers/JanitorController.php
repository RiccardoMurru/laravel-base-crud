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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function show(Janitor $janitor)
    {
        //
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
