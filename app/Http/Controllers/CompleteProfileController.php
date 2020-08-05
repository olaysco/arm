<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Events\ProfileChangedEvent;
use App\Http\Requests\CompleteProfileRequest;
use App\Nok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompleteProfileController extends Controller
{
    public function store(CompleteProfileRequest $request)
    {
        $user = Auth::user();

        $nok = new Nok();
        if (!is_null($user->nok)) {
            $nok = $user->nok;
        }

        $nok->first_name = $request->nok_first_name;
        $nok->last_name = $request->nok_last_name;
        $nok->mobile_number = $request->nok_mobile_number;
        $nok->address = $request->nok_address;
        $nok->email = $request->nok_email;
        $nok->user_id = $user->id;

        $employer = new Employer();
        if (!is_null($user->employer)) {
            $employer = $user->employer;
        }
        $employer->name = $request->emp_name;
        $employer->address =  $request->emp_address;
        $employer->email = $request->emp_email;
        $employer->user_id = $user->id;

        $nok->save();
        $employer->save();

        event(new ProfileChangedEvent());
        \Session::flash('message', 'Successfully updated!');
        return view('home')->with('message', 'Profile Created Successfully');
    }
}
