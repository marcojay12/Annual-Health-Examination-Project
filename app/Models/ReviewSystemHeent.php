<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewSystemHeent extends Model
{
    use HasFactory;
    public function patient_information()
    {
        return $this->belongsTo(PatientInformation::class, 'patient_information_id', 'id');
    }
}
