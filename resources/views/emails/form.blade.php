<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Applicant</h1>
    <ul>
    <li> First Name: {{ $applicant->first_name }} </li>
    <li> Last Name: {{ $applicant->last_name }} </li>
    <li> Birth Date: {{ $applicant->birth_date }} </li>
    <li> Hourly Rate: $ {{ $applicant->rate }} </li>
    <li> Hours Per Week: {{ $applicant->hours }} </li>
    <li> Phone Number: {{ $applicant->telephone }} </li>
    <li> Email Address: {{ $applicant->email }} </li>
    </ul>

</body>
</html>