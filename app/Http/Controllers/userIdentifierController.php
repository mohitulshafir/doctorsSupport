<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dsUser;
use App\Models\prescription;

class userIdentifierController extends Controller
{
    public function userLoader()
    {
        return view('admin.adminindex');
    }

    public function adminLoader()
    {
        return view('admin.adminProfile');
    }

    public function adminPatList()
    {
        return view('admin.adminpatientsslist');
    }
    public function adminDocList()
    {
        return view('admin.admindoctorslist');
    }

    public function signout()
    {
        return view('signin');
    }

    public function patLoader()
    {
        return view('admin.adminpatientslist');
    }

    public function patIndex()
    {
        return view('patient.patientindex');
    }

    public function docIndex()
    {
        return view('doctor.doctorindex');
    }
    public function docPatList()
    {
        return view('doctor.doctorPatList');
    }
    public function docDocList()
    {
        return view('doctor.doctorDocList');
    }

    public function patDocList()
    {
        return view('patient.patientDocList');
    }

    public function patProfile()
    {
        return view('patient.profile');
    }

    public function docProfile()
    {
        return view('doctor.docProfile');
    }

    public function patReport()
    {
        return view('patient.report');
    }

    public function storeAppointmentHistory()
    {
        return view('patient.appointHistory');
    }

    public function viewPrescription()
    {
        $prescriptionHistory = prescription::select()
            ->where('patEmail', '=', session('LoggedUser')->email)
            ->get();
        $data = ['prescriptionHistory' => $prescriptionHistory];

        return view('patient.prescription', $data);
    }

    public function newPrescription(Request $request)
    {
        $patient = dsUser::where('email', '=', $request->patientDetails)->first();
            //dd($request);
            date_default_timezone_set('Asia/Dhaka');
            $date = date("Y-m-d");
            $age = date_diff(date_create($patient->dob), date_create($date));
            $age2 = $age->format('%y') . ' Years ' . $age->format('%m') .  ' Months';
            
        $redirect = ['fullName' => $patient->fullName, 'contact' => $patient->contact, 'email' => $patient->email, 'dob' => $patient->dob,
        'age2' => $age2, 'gender' => $patient->gender, 'address' => $patient->address];

        return view('doctor.addPrescription', $redirect);
    }


    public function prescriptionHistory()
    {
        
        $patient= session('LoggedUser')->email;
        $presPatient = prescription::where('patEmail', '=', $patient)->first();
        
        $doctor = prescription::select('docName','created_at')
            ->where('patEmail', '=', $patient)
            ->distinct()
            ->get();
            $data = ['valueList' => $doctor];
        

       return view('patient.prescriptionHistory', $data);
    }


}
