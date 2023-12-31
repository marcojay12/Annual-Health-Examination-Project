<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PatientCategory;
use App\Models\PatientInformation;

class PatientInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patient_information = PatientInformation::all();
        return view('forms.patient.index', compact('patient_information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration()
    {
        //
        $patient_categories = PatientCategory::all();
        return view('forms.patient.registration', compact('patient_categories'));

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
        // $patient_category = PatientCategory::findOrFail($request->patient_category_id);

        //         $patient = new PatientInformation;
        //         $patient -> age_category = $request->age_category;
        //         $patient -> status = Str::slug($request->status);
        //         $patient -> lastname = $request->lastname;
        //         $patient -> firstname = $request->firstname;
        //         $patient -> middlename = $request->middlename;
        //         $patient -> suffix = $request->suffix;
        //         $patient -> age = $request->age;
        //         $patient -> gender = $request->gender;
        //         $patient -> birthday = $request->birthday;
        //         $patient -> consult_date = $request->consult_date;
        //         $patient -> address = $request->address;
        //         $patient -> religion = $request->religion;
        //         $patient -> civil_status = $request->civil_status;
        //         $patient -> blood_type = $request->blood_type;
        //         $patient -> contact_number = $request->contact_number;
        //         $patient -> phic_register = $request->phic_register;
        //         $patient -> konsulta_provider = $request->konsulta_provider;
        //         $patient -> phic_number = $request->phic_number;
        //         $patient -> employment_status = $request->employment_status;
        //         $patient -> pwd_number = $request->pwd_number;
        //         $patient -> pantawid_pamilya = $request->pantawid_pamilya;
        //         $patient -> ip_nonip = $request->ip_nonip;
        //         $patient -> ethnicity = $request->ethnicity;

        //         $patient_category->patients()->save($patient);
        $patient_category = PatientCategory::findOrFail($request->patient_category_id);
         $patient_category->patients()->create([
            'age_category' => $request->age_category,
            'status' => Str::slug($request->age_category),
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
             'middlename' => $request->middlename,
             'suffix' => $request->suffix,
            'age' => $request->age,
             'gender' => $request->gender,
             'birthday' => $request->birthday,
             'consult_date' => $request->consult_date,
             'address' => $request->address,
              'religion' => $request->religion,
              'civil_status' => $request->civil_status,
              'blood_type' => $request->blood_type,
              'contact_number' => $request->contact_number,
              'phic_register' => $request->phic_register,
              'konsulta_provider' => $request->konsulta_provider,
              'phic_number' => $request->phic_number,
              'employment_status' => $request->employment_status,
              'pwd_number' => $request->pwd_number,
              'pantawid_pamilya' => $request->pantawid_pamilya,
              'ip_nonip' => $request->ip_nonip,
              'ethnicity' => $request->ethnicity
         ]);

        return redirect('forms/patient')->with('message', 'Patient Successfully Registered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientInformation  $patientInformation
     * @return \Illuminate\Http\Response
     */
    public function show(PatientInformation $patientInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientInformation  $patientInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(int $patient)
    {
        //
        $patient_categories = PatientCategory::all();
        $patient = PatientInformation::findOrFail($patient);
        return view('forms.patient.edit', compact('patient_categories', 'patient'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientInformation  $patientInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $patient_information_id)
    {
                //  $patient = PatientCategory::findOrFail($request->patient_category_id)
                //  ->patients()->where('id', $patient_information_id)->first();

                //  $patient -> lastname = $request->lastname;
                //  $patient -> firstname = $request->firstname;
                //  $patient -> middlename = $request->middlename;
                //  $patient -> suffix = $request->suffix;
                //  $patient -> age = $request->age;
                //  $patient -> gender = $request->gender;
                //  $patient -> birthday = $request->birthday;
                //  $patient -> consult_date = $request->consult_date;
                //  $patient -> address = $request->address;
                //  $patient -> religion = $request->religion;
                //  $patient -> civil_status = $request->civil_status;
                //  $patient -> blood_type = $request->blood_type;
                //  $patient -> contact_number = $request->contact_number;
                //  $patient -> phic_register = $request->phic_register;
                //  $patient -> konsulta_provider = $request->konsulta_provider;
                //  $patient -> phic_number = $request->phic_number;
                //  $patient -> employment_status = $request->employment_status;
                //  $patient -> pwd_number = $request->pwd_number;
                //  $patient -> pantawid_pamilya = $request->pantawid_pamilya;
                //  $patient -> ip_nonip = $request->ip_nonip;
                //  $patient -> ethnicity = $request->ethnicity;

                //  $patient->update();




         $patient_category = PatientCategory::findOrFail($request->patient_category_id);
         $patient_category->patients()->where('id', $patient_information_id)->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
             'middlename' => $request->middlename,
             'suffix' => $request->suffix,
            'age' => $request->age,
             'gender' => $request->gender,
             'birthday' => $request->birthday,
             'consult_date' => $request->consult_date,
             'address' => $request->address,
              'religion' => $request->religion,
              'civil_status' => $request->civil_status,
              'blood_type' => $request->blood_type,
              'contact_number' => $request->contact_number,
              'phic_register' => $request->phic_register,
              'konsulta_provider' => $request->konsulta_provider,
             'phic_number' => $request->phic_number,
             'employment_status' => $request->employment_status,
              'pwd_number' => $request->pwd_number,
              'pantawid_pamilya' => $request->pantawid_pamilya,
              'ip_nonip' => $request->ip_nonip,
              'ethnicity' => $request->ethnicity
         ]);

       return redirect('forms/patient')->with('message', 'Patient Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientInformation  $patientInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientInformation $patientInformation)
    {
        //
    }
}
