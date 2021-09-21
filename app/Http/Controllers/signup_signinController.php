<?php

namespace App\Http\Controllers;

use App\Models\dsUser;
use Illuminate\Http\Request;
use App\Http\Controllers\patientController;

class signup_signinController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullName' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'dob' => 'required|max:15',
            'contact' => 'required|regex:/(01)[0-9]{9}/',
        ]);
        $new_user = new dsUser();
        $new_user->fullName = $request->fullName;
        $new_user->email = $request->email;
        $new_user->contact = $request->contact;
        $new_user->password = $request->password;
        $new_user->gender = $request->gender;
        $new_user->dob = $request->dob;
        $new_user->title = $request->type;
        $new_user->address = $request->address;
        
        if ($new_user->title == "pat") {
            $new_user->title = "Patient";
            $new_user->bmdcRegNum = "None";
            $new_user->nidPassport = "None";
            $new_user->department = "None";
            $new_user->fees = "0";
            $name =$request->fullName. '.jpg';
            $new_user->image = $name;
            $request->img1->move(public_path('userImage'), $name);
        } else {
            $new_user->title = $request->title;
            $new_user->bmdcRegNum = $request->bmdcRegNum;
            $new_user->nidPassport = $request->nidPassport;
            $new_user->department = $request->department;
            $new_user->fees = $request->fees;
            $name =$request->fullName. '.jpg';
            $new_user->image = $name;
            $request->img2->move(public_path('userImage'), $name);
        }

        $save = $new_user->save();
        session()->put('signupCheck', TRUE);
        return redirect('/signin');
    }

    public function signin(Request $request)
    {
        $user = dsUser::where('email', '=', $request->email)->first();
        $doctor = dsUser::select()
            ->where('title', '!=', 'Patient')
            ->where('title', '!=', '')
            ->get();
        $d = 0;
        $request->session()->put('doctorInfo', $doctor);
        foreach ($doctor as $v) {
            $d++;
        }
        $doctorNumber = strval($d);
        // dd($doctorNumber);
        $patient = dsUser::where('title', '=', 'Patient')->get();
        $p = 0;
        foreach ($patient as $v1) {
            $p++;
        }
        $patientNumber = strval($p);
        if ($user) {
            if ($user->password == $request->password) {
                $request->session()->put('LoggedUser', $user);
                $request->session()->put('doctor', $doctorNumber);
                $request->session()->put('patient', $patientNumber);
                if ($user->title == 'Patient') {
                    return redirect()->route('patientindex');
                } 
                elseif($user->fullName == 'Admin'){
                    return redirect()->route('adminindex');
                }
                else {
                    return redirect()->route('doctorindex');
                }
            }
        } else {
            return redirect()->back()->with('emailFail', 'The email does not exist!');
        }
    }
}
