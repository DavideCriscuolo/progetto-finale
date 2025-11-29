<?php

namespace App\Http\Controllers;

use App\Models\Plattform;
use Illuminate\Http\Request;

class PlattformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plattforms = Plattform::all();
        return view("plattforms.index", compact("plattforms"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("plattforms.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPlattform = new Plattform();
        $newPlattform->name = $request["name"];
        $newPlattform->save();

        return redirect()->route("plattform.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plattform $plattform)
    {
        return view("plattforms.edit", compact("plattform"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plattform $plattform)
    {
        $plattform->name = $request["name"];
        $plattform->update();
        return redirect()->route("plattform.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plattform $plattform)
    {
        $plattform->delete();
        return redirect()->route("plattform.index");
    }
}
