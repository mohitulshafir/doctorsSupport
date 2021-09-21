<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dsUser;
use App\Models\appointment;
use App\Models\prescription;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function doctorList()
    {
        $doctorList = dsUser::select()
            ->where('title', '!=', 'Patient')
            ->where('fullName', '!=', 'Admin')
            ->get();
        $data = ['doctorList' => $doctorList];
        return view('patient.patientDoclist', $data);
    }

    public function appointHistory()
    {
        $appointHistory = appointment::select()
            ->where('nameOfAppointer', '=', session('LoggedUser')->fullName)
            ->get();
        $data = ['appointHistory' => $appointHistory];
        return view('patient.appointHistory', $data);
    }

    public function prescriptionHistory()
    {
        $prescriptionHistory = prescription::select()
            ->where('patEmail', '=', session('LoggedUser')->email)
            ->get();
        $data = ['prescriptionHistory' => $prescriptionHistory];
        
        return view('patient.prescriptionHistory', $data);
    }
}
