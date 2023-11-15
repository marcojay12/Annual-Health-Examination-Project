<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientCategory extends Model
{
    use HasFactory;
    protected $table = 'patient_categories';

    protected $fillable = [
        'age_category',
        'status'
    ];

    public function patients(){
        return $this->hasMany(PatientInformation::class, 'patient_category_id', 'id');
    }

}
