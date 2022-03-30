@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 mt-3">
                <h2>Create New User: </h2>
                <form action="{{ route('registration.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label"><strong>Name: </strong></label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="name">
                    </div>
            
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>Email Address: </strong></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" id="email">
                      </div>
            
                      <div class="mb-3">
                        <label for="password" class="form-label"><strong>Password: </strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" id="password">
                      </div>
            
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>

</body>
</html>

@endsection