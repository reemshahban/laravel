<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;

class examController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view ('exams.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exams $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exams $exams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exams $exams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exams $exams)
    {
        //
    }
}
