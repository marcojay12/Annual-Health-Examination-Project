<?php

namespace App\Http\Controllers;

use App\Models\PatientCategory;
use App\Models\PatientInformation;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
    public function index()
    {
        $patient_categories =PatientCategory::all();
        return view('forms.frontpage.home', compact('patient_categories'));
    }


    public function patientcategory($category_status)
    {
        $patientcategory =PatientCategory::where('status', $category_status)->first();
        return view('forms.frontpage.patients', compact('patientcategory'));
    }


    public function patients(string $category_status, string $patient_gender)
    {
$patientcategory = PatientCategory::where('status', $category_status)->first();
$patient = $patientcategory->patients()->where('gender', $patient_gender)->first();
return view('forms.frontpage.patient-view', compact($patient));
    }
}
