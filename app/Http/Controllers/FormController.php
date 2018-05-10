<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        \Mail::to('samzstanding@gmail.com')->send(new FormCompleted);



    }
}
