<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Annual Health Examination Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('messege'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Patient Information Registration
                        <a href="{{ url('forms/patient/registration') }}" class="btn btn-primary float-end">Add Patient</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient Category</th>
                                <th>Lastname</th>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th>Suffix</th>
                                <th>Age</th>
                                <th>Date of Consult</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patient_information as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->patient_category->age_category}}</td>
                                <td>{{ $item->lastname }}</td>
                                <td>{{ $item->firstname }}</td>
                                <td>{{ $item->middlename }}</td>
                                <td>{{ $item->suffix }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->consult_date }}</td>
                                <td><a href="{{ url('forms/patient/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('forms/patient/../edit') }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
