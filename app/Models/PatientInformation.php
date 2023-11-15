<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInformation extends Model
{
    use HasFactory;
    protected $table = 'patient_information';

    protected $fillable = [
        'patient_category_id',
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'age',
        'gender',
        'birthday',
        'consult_date',
        'address',
        'religion',
        'civil_status',
        'blood_type',
        'contact_number',
        'phic_register',
        'konsulta_provider',
        'phic_number',
        'employment_status',
        'pwd_number',
        'pantawid_pamilya',
        'ip_nonip',
        'ethnicity'
    ];
}
