<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dsUser;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function doctorList()
    {
        $doctorList = dsUser::select()
            ->where('title', '!=', 'Patient')
            ->where('fullName', '!=', 'Admin')
            ->get();
        $data = ['doctorList' => $doctorList];
        return view('admin.admindoctorslist', $data);
    }

    public function patientList()
    {
        $patientList = dsUser::select()
            ->where('title', '=', 'Patient')
            ->where('fullName', '!=', 'Admin')
            ->get();
        $data = ['patientList' => $patientList];
        return view('admin.adminpatientslist', $data);
    }

    // Flight::where('active', 1)
    //   ->where('destination', 'San Diego')
    //   ->update(['delayed' => 1]);
}
