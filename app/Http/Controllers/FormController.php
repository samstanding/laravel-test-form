<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;

use App\Mail\FormCompleted;

class FormController extends Controller
{
    public function store() 
    {

        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'rate' => 'required',
            'hours' => 'required',
            'telephone' => 'required',
            'email' => 'required',
        ]);

       $applicant =  Applicant::create(request(['first_name', 'last_name', 'birth_date', 'rate', 'hours', 'telephone', 'email']));

        \Mail::to('samzstanding@gmail.com')->send(new FormCompleted($applicant));

        return redirect('/')->with('alert', 'Your information was saved successfully');



    }
}
