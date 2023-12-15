<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        return view ('exams.index')->with('exams', $exams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('exams.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Exam::create($input);
        return redirect('exam')->with('flash_message', 'Exam Added!');  
    }
    
    public function show($id)
    {
        $exam = Exam::find($id);
        return view('exams.show')->with('exam', $exam);
    }
    
    public function edit($id)
    {
        $exam = Exam::find($id);
        return view('exams.edit')->with('exams', $exam);
    }
  
    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        $input = $request->all();
        $exam->update($input);
        return redirect('exam')->with('flash_message', 'Exam Updated!');  
    }
   
    public function destroy($id)
    {
        Exam::destroy($id);
        return redirect('exam')->with('flash_message', 'Exam deleted!');  
    }

}
