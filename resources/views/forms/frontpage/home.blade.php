<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annual Health Examination View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">

            <h1>Annual Health Examination</h1>
            <br />
            <br />

            @foreach ($patient_categories as $category)
                <div class="col-md-4">
                    <a href="{{ url('/patient_designation/'.$category->status) }}">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{ $category->age_category }}</h4>
                                @if (count($category->patients) >0)


                                <ul>
                                @foreach ($category->patients as $patient)
                                <li>{{ $patient->gender }}-{{ $patient->age }}</li>
                                @endforeach
                                @else
                                No Patient
                                @endif
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
