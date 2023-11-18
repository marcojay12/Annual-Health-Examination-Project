<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PatientCategory;

class PatientCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_categories = PatientCategory::all();
        return view('forms.category.index', compact('patient_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forms.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         PatientCategory::create([
             'age_category' => $request->age_category,
             'status' => Str::slug($request->age_category),
         ]);

         return redirect('forms/category')->with('message', 'Category Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientCategory  $patientCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PatientCategory $patientCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientCategory  $patientCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientCategory $patientCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientCategory  $patientCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientCategory $patientCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientCategory  $patientCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $patient_category_id)
    {
        PatientCategory::findOrFail($patient_category_id)->delete();
        return redirect('forms/category')->with('message', 'Patient Category Deleted with all the files!');
    }
}
