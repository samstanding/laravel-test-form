<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'birth_date', 'rate', 'hours', 'telephone', 'email',
    ];
}
