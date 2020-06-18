<?php

namespace App\Http\Controllers;

use App\Janitor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


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
        $request->validate($this->validateRules());

        $new_janitor = new Janitor();
        $new_janitor->fill($data);

        $saved_janitor = $new_janitor->save();

        if ($saved_janitor) {
            $janitor = Janitor::find($new_janitor->id);
            return redirect()->route('janitors.show', $janitor);
        }
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
        return view('janitors.edit', compact('janitor'));
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
        $data = $request->all();

        // validate
        $request->validate($this->validateRules($janitor->id));

        $updated_janitor = $janitor->update($data);

        if ($updated_janitor) {

            return redirect()->route('janitors.show', $janitor->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Janitor  $janitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Janitor $janitor)
    {
        $janitor_ref = $janitor->name;

        $deleted_janitor = $janitor->delete();

        if ($deleted_janitor) {

            return redirect()->route('janitors.index')->with('deleted', $janitor_ref);
        }
    }

    // validation rules
    private function validateRules($id = null)
    {

        return [
            'name' => [
                'required',
                'max:50',
                Rule::unique('janitors')->ignore($id)
            ],
            'task' => [
                'required',
                'max:50'
            ],
            'description' => 'required'
        ];
    }
}
