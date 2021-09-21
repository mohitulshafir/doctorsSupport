<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class appointmentController extends Controller
{
    public function load_doctorList(Request $request)
    {
        if ($request->ajax()) {

            $data = DB::table('ds_users')->get();
            $output = '<option selected disabled>Select Doctor</option>';

            foreach ($data as $perData) {
                if ($request->id === $perData->department) {
                    $output .= '<option>' .$perData->title . " " . $perData->fullName . '</option>';
                }
            }
            if($output === '<option selected disabled>Select Doctor</option>'){
                $output = '<option selected disabled>No Doctors Available</option>';
            }

            echo $output;
        }
    }

    public function storeAppointment(Request $request)
    {
        $appointment= new appointment;
        $appointment->appointDate=$request->date;
        $appointment->appointDoctor=$request->doctor;
        $appointment->appointDepartment=$request->department;
        $appointment->appointMessage=$request->message;
        $appointment->status="Applied";
        $appointment->nameOfAppointer=session('LoggedUser')->fullName;
        $appointment->emailOfAppointer=session('LoggedUser')->email;
        $appointment->contactOfAppointer=session('LoggedUser')->contact;
        $save=$appointment->save();

        return redirect('/appointHistory');
    }
}
